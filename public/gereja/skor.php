<?php require __DIR__.'/lib.php'; $adm=isset($_SESSION['adm']); $rows=[];
if($adm){ $w=normalize(); $S=[]; foreach(db()->query('SELECT no,state FROM gs_scores') as $r) $S[(int)$r['no']]=json_decode($r['state'],true);
 for($n=1;$n<=27;$n++){ [$a,$b]=teams($n,$w); if(!$a||!$b||isset($w[$n])) continue; $st=$S[$n]??null;
  if($st&&(!empty($st['fin'])||!in_array($st['blue']??'',[$a,$b])||!in_array($st['red']??'',[$a,$b]))) $st=null; $rows[]=['no'=>$n,'a'=>$a,'b'=>$b,'st'=>$st]; } }
$TN=array_map(fn($p)=>implode(' & ',array_column($p,1)),TEAMS); ?>
<!DOCTYPE html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover"><title>Papan Skor · Gloria Smash</title>
<style>*{box-sizing:border-box;margin:0;-webkit-tap-highlight-color:transparent}html,body{height:100%;background:#000;color:#fff;font-family:system-ui,Arial,sans-serif;overflow:hidden}
#pick{padding:16px;max-width:720px;margin:auto;overflow:auto;height:100%}h1{font-size:22px;color:#ffd400;margin-bottom:12px}
.mc{display:block;width:100%;text-align:left;background:#000;color:#fff;border:2px solid #666;border-radius:12px;padding:14px;margin:10px 0;font:700 17px system-ui;cursor:pointer}.mc b{color:#ffd400}.mc small{display:block;color:#bbb;font-weight:600;margin-top:4px}
button{font:900 18px system-ui;border:0;border-radius:12px;padding:12px 18px;background:#ffd400;color:#000;cursor:pointer}input{background:#000;color:#fff;border:3px solid #ffd400;border-radius:12px;font-size:20px;padding:10px 14px}
#bd{position:fixed;inset:0;display:none;flex-direction:row}.half{flex:1;display:flex;flex-direction:column;align-items:center;justify-content:space-between;padding:4vh 1vw 3vh;min-width:0}
.blue{background:#1d4ed8}.red{background:#dc2626}.nm{font-size:6vmin;font-weight:900;text-align:center;line-height:1.1}.nm small{display:block;font-size:3vmin;font-weight:700;margin-top:.6vmin}
.l .nm{padding-right:9vmin}.r .nm{padding-left:9vmin}
.sc{flex:1;display:flex;align-items:center;justify-content:center;width:100%;font-size:42vmin;font-weight:900;line-height:1;user-select:none;cursor:pointer;font-variant-numeric:tabular-nums}
.mn{background:#000a;color:#fff;font-size:5vmin;padding:1.2vmin 5vmin;border-radius:2vmin}
#top{position:absolute;top:1.2vh;left:50%;transform:translateX(-50%);background:#000;border-radius:2vmin;padding:.8vmin 2.5vmin;font-weight:900;font-size:3.6vmin;white-space:nowrap;text-align:center;z-index:2}#top small{display:block;font-size:2.6vmin;font-weight:700}
#ov{position:absolute;left:50%;bottom:2.5vh;transform:translateX(-50%);background:#000;border:.5vmin solid #ffd400;border-radius:3vmin;padding:2vmin 3vmin;text-align:center;max-width:94vw;font-size:3.6vmin;font-weight:800;z-index:3}
#ov button{font-size:3.6vmin;margin:1vmin .6vmin 0}#ov .g{background:#2ee66b}#bk{position:absolute;bottom:1vh;left:1vw;background:#000a;color:#fff;font-size:2.8vmin;padding:1vmin 2vmin;z-index:3}
#ind{position:absolute;bottom:1.2vh;right:1vw;background:#000a;border-radius:1.5vmin;padding:.8vmin 1.8vmin;font-size:2.8vmin;font-weight:800;z-index:3}</style></head><body>
<?php if(!$adm): ?><div id="pick"><h1>PAPAN SKOR</h1><p style="margin:10px 0">Masukkan PIN admin:</p><input id="pin" type="password" placeholder="PIN"> <button onclick="lg()">MASUK</button></div>
<script>async function lg(){const r=await fetch('api.php',{method:'POST',body:new URLSearchParams({act:'login',pin:document.getElementById('pin').value})});r.ok?location.reload():alert('PIN salah')}</script>
<?php else: ?><div id="pick"></div><div id="bd"></div>
<script>
const LIST=<?=json_encode($rows)?>,TN=<?=json_encode($TN)?>,$=s=>document.querySelector(s);
let S=null,NO=0,sv=Promise.resolve();
const rn=n=>n<=7?'Ronde 1':n<=10?'Upper R2':n<=13?'Lower R1':n<=16?'Lower R2':n<=18?'Upper Semi':n<=20?'Lower R3':n<=22?'Lower R4':n===23?'Upper Final':n===24?'Lower Semi':n===25?'Lower Final':n===26?'Grand Final':'Bracket Reset';
const setWon=(p,q)=>p>=30?1:q>=30?-1:p>=21&&p-q>=2?1:q>=21&&q-p>=2?-1:0;
function tally(){let b=0,r=0;S.sets.forEach(s=>{const x=setWon(s[0],s[1]);if(x>0)b++;else if(x<0)r++});return[b,r]}
function phase(){if(!S.started)return'pre';if(S.fin)return'fin';if(S.choose)return'choose';const c=S.sets.length-1;if(!setWon(S.sets[c][0],S.sets[c][1]))return'play';const[b,r]=tally();return b>=2||r>=2?'over':'setover'}
function list(){$('#pick').style.display='block';$('#bd').style.display='none';
 $('#pick').innerHTML='<h1>PAPAN SKOR · pilih match</h1>'+(LIST.length?LIST.map(m=>{const st=m.st,c=st?st.sets.length-1:0,run=st&&st.started;
  return `<button class="mc" onclick="openM(${m.no})"><b>M${m.no}</b> · ${rn(m.no)}<br>TIM ${m.a} (${TN[m.a]}) vs TIM ${m.b} (${TN[m.b]})<small>${run?'Sedang berjalan · set '+(c+1)+' · '+st.sets.map(s=>s[0]+'-'+s[1]).join(', '):'Belum dimulai'}</small></button>`}).join(''):'<p>Belum ada match yang kedua timnya sudah diketahui.</p>')+'<p style="margin-top:14px"><a style="color:#ffd400" href="bracket.php">Lihat bracket</a></p>'}
function openM(no){NO=no;const m=LIST.find(x=>x.no===no);S=m.st||{blue:m.a,red:m.b,sets:[[0,0]],left:['blue'],started:false,choose:false,fin:false};
 $('#pick').style.display='none';$('#bd').style.display='flex';try{navigator.wakeLock&&navigator.wakeLock.request('screen')}catch(e){}render()}
function ind(ok){const e=$('#ind');if(e){e.textContent=ok?'✓ tersimpan':'⚠ GAGAL SIMPAN';e.style.color=ok?'#2ee66b':'#ff8a8a'}}
function save(){const s=JSON.stringify(S);sv=sv.then(()=>fetch('api.php',{method:'POST',body:new URLSearchParams({act:'sc_save',no:NO,state:s})}).then(r=>ind(r.ok)).catch(()=>ind(false)))}
function tap(col){if(phase()!=='play')return;const c=S.sets.length-1;S.sets[c][col==='blue'?0:1]++;navigator.vibrate&&navigator.vibrate(15);save();render()}
function minus(col){const p=phase();if(!['play','setover','over'].includes(p))return;const c=S.sets.length-1,i=col==='blue'?0:1;if(S.sets[c][i]>0){S.sets[c][i]--;save();render()}}
const swap=()=>{[S.blue,S.red]=[S.red,S.blue];save();render()},start=()=>{S.started=true;save();render()};
function next(){const c=S.sets.length-1;if(c===0){S.left.push(S.left[0]==='blue'?'red':'blue');S.sets.push([0,0])}else S.choose=true;save();render()}
const pickSide=col=>{S.choose=false;S.left.push(col);S.sets.push([0,0]);save();render()};
async function finish(){await sv;const r=await fetch('api.php',{method:'POST',body:new URLSearchParams({act:'sc_finish',no:NO})}),j=await r.json();if(!r.ok){alert(j.err||'Gagal');return}S.fin=true;render();if(j.cleared&&j.cleared.length)alert('Hasil ikut dihapus karena tim berubah: M'+j.cleared.join(', M'))}
function render(){const p=phase(),c=S.sets.length-1,cs=S.sets[c],Lc=S.left[c],Rc=Lc==='blue'?'red':'blue',tm=k=>k==='blue'?S.blue:S.red,sc=k=>k==='blue'?cs[0]:cs[1],[tb,tr]=tally();
 const half=(k,cl)=>`<div class="half ${k} ${cl}"><div class="nm">TIM ${tm(k)}<small>${TN[tm(k)]}</small></div><div class="sc" onclick="tap('${k}')">${sc(k)}</div><button class="mn" onclick="minus('${k}')">−1</button></div>`;
 const ls=Lc==='blue'?tb:tr,rs=Lc==='blue'?tr:tb,hist=S.sets.map(s=>`<span style="color:#8fb0ff">${s[0]}</span>-<span style="color:#ff9a9a">${s[1]}</span>`).join(' · ');
 const wc=()=>{const x=setWon(cs[0],cs[1]);return tm(x>0?'blue':'red')},ov={
  pre:`TIM ${S.blue} (BIRU) vs TIM ${S.red} (MERAH)<br><button onclick="swap()">⇄ TUKAR WARNA</button><button class="g" onclick="start()">▶ MULAI SET 1</button>`,
  setover:`SET ${c+1} SELESAI · TIM ${p==='setover'?wc():''} menang<br><button class="g" onclick="next()">LANJUT SET ${c+2}${c===0?' (pindah sisi)':''}</button>`,
  choose:`SET 3 · pilih sisi (tetap sampai selesai)<br><button style="background:#1d4ed8;color:#fff" onclick="pickSide('blue')">TIM ${S.blue} (BIRU) di kiri</button><button style="background:#dc2626;color:#fff" onclick="pickSide('red')">TIM ${S.red} (MERAH) di kiri</button>`,
  over:`PEMENANG: TIM ${p==='over'?wc():''}<br><button class="g" onclick="finish()">✔ SELESAI &amp; SIMPAN KE BRACKET</button>`,
  fin:`Tersimpan ✓ Bracket sudah diperbarui<br><button class="g" onclick="location.reload()">← DAFTAR MATCH</button>`,play:''}[p];
 $('#bd').innerHTML=half(Lc,'l')+half(Rc,'r')+`<div id="top">SET ${c+1} · ${ls} – ${rs}<small>${hist}</small></div>`+(ov?`<div id="ov">${ov}</div>`:'')+(p==='fin'?'':'<button id="bk" onclick="if(confirm(\'Kembali ke daftar? Skor tetap tersimpan.\'))location.reload()">☰ Daftar</button>')+'<div id="ind"></div>'}
list();
</script><?php endif; ?></body></html>
