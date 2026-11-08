<?php require __DIR__.'/lib.php'; $adm=isset($_SESSION['adm']); $V=view(); ?>
<!DOCTYPE html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Bracket · Gloria Smash</title>
<style>*{box-sizing:border-box;margin:0}body{background:#000;color:#fff;font-family:system-ui,Arial,sans-serif;padding:14px;max-width:1700px;margin:auto}
header{display:flex;justify-content:space-between;align-items:center;gap:10px;margin-bottom:10px}h1{font-size:24px}h2{margin:22px 0 8px}
button{font:800 14px system-ui;border:0;border-radius:8px;padding:8px 12px;background:#ffd400;color:#000;cursor:pointer}button.w{background:#fff}button.r{background:#ff5a5a}
svg{width:100%;height:auto;display:block}.wr{overflow-x:auto}table{border-collapse:collapse;width:100%;font-size:15px}td,th{border:1px solid #444;padding:6px 8px;text-align:left;vertical-align:middle}th{background:#222}
#champ{font:900 22px system-ui;color:#ffd400;margin:8px 0}.sl{cursor:pointer}input{background:#000;color:#fff;border:1px solid #888;border-radius:6px;padding:5px}</style></head><body>
<header><h1>GLORIA SMASH · BRACKET 14 TIM</h1><button id="ad"><?=$adm?'ADMIN ✔':'Admin'?></button></header>
<div id="champ"></div><div class="wr"><svg id="b" viewBox="0 0 1740 960"></svg></div>
<?php if($adm): ?><p style="color:#ffd400">Mode admin: klik nama tim di bracket (atau tombol di tabel) untuk mencatat pemenang.</p><?php endif; ?>
<h2>Daftar Match</h2><div class="wr"><table id="mt"></table></div><h2>Tim</h2><div class="wr"><table id="tt"></table></div>
<script>
const ST=<?=json_encode($V)?>,ADM=<?=$adm?'true':'false'?>,TN=<?=json_encode(array_map(fn($p)=>implode(' & ',array_column($p,1)),TEAMS))?>,M=ST.m,G='#2ee66b',R='#ff5a5a',Y='#ffd400';
const POS={1:[0,70],2:[0,134],3:[0,198],4:[0,262],5:[0,326],6:[0,390],7:[0,454],8:[1,102],9:[1,230],10:[1,422],17:[2,166],18:[2,374],23:[3,270],11:[0,630],12:[0,694],13:[0,758],14:[1,630],15:[1,694],16:[1,822],19:[2,662],20:[2,790],21:[3,662],22:[3,790],24:[4,726],25:[5,726],26:[6,498],27:[7,498]};
const STB=[[1,326,'BYE · Menang M5'],[0,822,'BYE · Kalah M5'],[1,758,'BYE · Menang M13']];
const LK=[[1,8],[2,8],[3,9],[4,9],[6,10],[7,10],[5,'s0'],['s0',18],[8,17],[9,17],[10,18],[17,23],[18,23],[11,14],[12,15],[13,'s2'],['s2',20],['s1',16],[14,19],[15,19],[16,20],[19,21],[20,22],[21,24],[22,24],[24,25],[23,26],[25,26]];
const col=n=>n<=10||n===17||n===18?G:n<=22?R:Y,X=k=>12+k*218,BW=190,DN=['Min','Sen','Sel','Rab','Kam','Jum','Sab'];
const rn=n=>n<=7?'Ronde 1':n<=10?'Upper R2':n<=13?'Lower R1':n<=16?'Lower R2':n<=18?'Upper Semi':n<=20?'Lower R3':n<=22?'Lower R4':n===23?'Upper Final':n===24?'Lower Semi':n===25?'Lower Final':n===26?'Grand Final':'Bracket Reset';
const fd=s=>{if(!s)return '';const d=new Date(s.replace(' ','T'));return DN[d.getDay()]+' '+d.getDate()+'/'+(d.getMonth()+1)+' · '+String(d.getHours()).padStart(2,'0')+'.00'};
const tx=(m,i)=>{const t=i?m.b:m.a;return t?'TIM '+t+(m.w===t?' ✓':''):(i?m.lb:m.la)};
const fc=(m,i)=>{const t=i?m.b:m.a;if(t&&m.w)return t===m.w?G:'#777';if(t)return '#fff';return(i?m.lb:m.la).startsWith('Kalah')?'#ff8a8a':'#aaa'};
function draw(){const pos={};for(const n in POS)pos[n]=POS[n];STB.forEach((s,i)=>pos['s'+i]=[s[0],s[1]]);
 let h=LK.map(([a,b])=>{const[c1,y1]=pos[a],[c2,y2]=pos[b],x1=X(c1)+BW,x2=X(c2),xm=(x1+x2)/2;return `<path d="M${x1} ${y1}H${xm}V${y2}H${x2}" fill="none" stroke="#bbb" stroke-width="2.5"/>`}).join('');
 h+=`<path d="M${X(6)+BW} 498H${X(7)}" stroke="${Y}" stroke-width="2.5" stroke-dasharray="5 4"/>`;
 h+=STB.map(s=>`<rect x="${X(s[0])}" y="${s[1]-15}" width="${BW}" height="30" rx="8" fill="#000" stroke="${Y}" stroke-width="2.5" stroke-dasharray="6 4"/><text x="${X(s[0])+95}" y="${s[1]+5}" text-anchor="middle" fill="${Y}" font-size="15" font-weight="800">${s[2]}</text>`).join('');
 for(const n in POS){const m=M[n],[c,y]=POS[n],x0=X(c),y0=y-26,k=col(+n),on=m.a&&m.b&&!m.w||false;
  h+=`<g opacity="${n==27&&!m.a?.45:1}"><rect x="${x0}" y="${y0}" width="${BW}" height="52" rx="8" fill="#000" stroke="${k}" stroke-width="3"${n==27?' stroke-dasharray="8 5"':''}/><rect x="${x0}" y="${y0}" width="36" height="52" rx="6" fill="${k}"/><text x="${x0+18}" y="${y0+31}" text-anchor="middle" font-size="16" font-weight="800" fill="#000">M${n}</text><path d="M${x0+36} ${y0+26}H${x0+BW}" stroke="#555"/>`
  +[0,1].map(i=>`<text x="${x0+44}" y="${y0+22+i*22}" fill="${fc(m,i)}" font-size="17" font-weight="800">${tx(m,i)}</text>`+(ADM&&(i?m.b:m.a)?`<rect class="sl" data-n="${n}" data-t="${i?m.b:m.a}" x="${x0+36}" y="${y0+i*26}" width="${BW-36}" height="26" fill="transparent"/>`:'')).join('')+`</g>`;}
 const H=(k,y,s,c)=>`<text x="${X(k)+95}" y="${y}" text-anchor="middle" fill="${c}" font-size="15" font-weight="800">${s}</text>`;
 h+=['Ronde 1 · 1–14 Nov','Upper Ronde 2','Upper Semi'].map((s,k)=>H(k,36,s,G)).join('')+['Lower Ronde 1','Lower Ronde 2','Lower Ronde 3','Lower Ronde 4'].map((s,k)=>H(k,594,s,R)).join('')+H(3,236,'Upper Final · 5 Des',Y)+H(4,694,'Lower Semi · 5 Des',Y)+H(5,694,'Lower Final · 5 Des',Y)+H(6,464,'Grand Final · 5 Des',Y)+H(7,464,'Bracket Reset (M27)',Y)
  +`<text x="12" y="8" fill="${G}" font-size="22" font-weight="800">UPPER BRACKET</text><text x="12" y="566" fill="${R}" font-size="22" font-weight="800">LOWER BRACKET</text>`;
 document.getElementById('b').innerHTML=`<g transform="translate(0,34)">${h}</g>`;
 document.getElementById('b').onclick=e=>{const g=e.target.closest('[data-n]');if(ADM&&g&&confirm('Menangkan TIM '+g.dataset.t+' di M'+g.dataset.n+'?'))post({act:'win',no:g.dataset.n,team:g.dataset.t})}}
async function post(o){const r=await fetch('api.php',{method:'POST',body:new URLSearchParams(o)}),j=await r.json();if(!r.ok){alert(j.err||'Gagal');return}if(j.cleared&&j.cleared.length)alert('Hasil ikut dihapus karena tim berubah: M'+j.cleared.join(', M'));location.reload()}
const sc=n=>{const v=document.getElementById('dt'+n).value;if(v)post({act:'sched',no:n,sched:v.replace('T',' ')+':00'})};
document.getElementById('mt').innerHTML='<tr><th>M</th><th>Ronde</th><th>Pertandingan</th><th>Jadwal</th><th>Hasil</th>'+(ADM?'<th>Admin</th>':'')+'</tr>'+Object.keys(M).map(n=>{const m=M[n],ok=m.a&&m.b;
 const adm=ADM?`<td>${ok?`<button onclick="post({act:'win',no:${n},team:'${m.a}'})">TIM ${m.a} menang</button> <button onclick="post({act:'win',no:${n},team:'${m.b}'})">TIM ${m.b} menang</button> `:''}${m.w?`<button class="r" onclick="post({act:'clear',no:${n}})">Hapus hasil</button> `:''}${ok?`<input type="datetime-local" id="dt${n}"><button class="w" onclick="sc(${n})">Set</button>`:''}${m.s?` <button class="w" onclick="post({act:'unsched',no:${n}})">Hapus jadwal</button>`:''}</td>`:'';
 return `<tr><td>M${n}</td><td>${rn(+n)}</td><td>${ok?'TIM '+m.a+' vs TIM '+m.b:m.la+' vs '+m.lb}</td><td>${m.s?fd(m.s):(ok&&!m.w?'<span style="color:#aaa">belum dijadwalkan</span>':'')}</td><td>${m.w?'TIM '+m.w+' menang'+(m.sc?'<br><small style="color:#bbb">'+m.sc+'</small>':''):''}</td>${adm}</tr>`}).join('');
document.getElementById('tt').innerHTML='<tr><th>Tim</th><th>Pemain</th><th>Status</th></tr>'+Object.keys(TN).map(t=>{const l=ST.loss[t],ch=M[26].w===t&&M[26].w===M[23].w||M[27].w===t;return `<tr><td>TIM ${t}</td><td>${TN[t]}</td><td>${ch?'JUARA 🏆':l>=2?'Gugur':l===1?'Lower bracket':'Upper bracket'}</td></tr>`}).join('');
const cw=M[26].w&&M[26].w===M[23].w?M[26].w:M[27].w;if(cw)document.getElementById('champ').textContent='JUARA: TIM '+cw+' · '+TN[cw];
document.getElementById('ad').onclick=async()=>{if(ADM)return;const p=prompt('PIN admin:');if(!p)return;const r=await fetch('api.php',{method:'POST',body:new URLSearchParams({act:'login',pin:p})});r.ok?location.reload():alert('PIN salah')};
draw();
</script></body></html>