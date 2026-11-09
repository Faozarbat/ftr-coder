<?php require __DIR__.'/lib.php'; $db=db(); $q=$db->prepare('SELECT * FROM gs_players WHERE token=?'); $q->execute([$_GET['t']??'']); $me=$q->fetch();
if(!$me){ http_response_code(404); exit('Link tidak valid'); }
$q=$db->prepare('SELECT code,name FROM gs_players WHERE team=? AND code<>?'); $q->execute([$me['team'],$me['code']]); $pa=$q->fetch();
$D=['name'=>$me['name'],'code'=>$me['code'],'team'=>$me['team'],'pname'=>$pa['name'],'mine'=>avail($me['code']),'part'=>avail($pa['code']),'matches'=>teamMatches($me['team']),'t'=>$_GET['t']]; ?>
<!DOCTYPE html><html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Jadwal Kosong · Gloria Smash</title>
<style>*{box-sizing:border-box;margin:0}body{background:#000;color:#fff;font-family:system-ui,Arial,sans-serif;padding:16px;max-width:640px;margin:auto}
h1{font-size:22px;color:#ffd400}h2{font-size:18px;margin:20px 0 8px}p{margin:6px 0;font-size:15px}.lg{display:flex;flex-wrap:wrap;gap:6px 14px;font-size:14px;font-weight:700;margin:10px 0}
.lg i{display:inline-block;width:13px;height:13px;border-radius:3px;margin-right:5px;vertical-align:-2px;border:2px solid #fff}
table{border-collapse:separate;border-spacing:5px;width:100%;table-layout:fixed}th{font-size:13px;padding:4px 0}td.h{font-weight:800;font-size:13px;text-align:right;width:46px}
.c{height:48px;border:2px solid #555;border-radius:10px;font-weight:900;font-size:20px;text-align:center;cursor:pointer;user-select:none;line-height:44px}
.me{background:#ffd400;color:#000;border-color:#ffd400}.pa{border:2px dashed #fff}.both{background:#2ee66b;color:#000;border-color:#2ee66b;border-style:solid}
.mc{border:2px solid #666;border-radius:10px;padding:10px;margin:8px 0}.mc b{color:#ffd400}.ok{color:#2ee66b;font-weight:800}</style></head><body>
<h1>GLORIA SMASH · JADWAL KOSONG</h1><p id="who"></p>
<p>Ketuk jam saat kamu <b>kosong</b>. Jadwal match dibuat otomatis kalau keempat pemain (kamu, pasanganmu, dan dua lawan) punya jam kosong yang sama.</p>
<div class="lg"><span><i style="background:#ffd400"></i>Kamu kosong</span><span><i style="border-style:dashed"></i>Pasanganmu kosong</span><span><i style="background:#2ee66b"></i>Kalian berdua kosong</span></div>
<table id="g"></table><p style="font-size:13px;color:#bbb">Jam menunjukkan jam mulai (1 jam per match).</p>
<h2>Match tim kamu</h2><div id="ms"></div>
<script>
const D=<?=json_encode($D)?>,DN=['Sen','Sel','Rab','Kam','Jum','Sab','Min'],HR=[16,17,18,19,20,21],DD=['Min','Sen','Sel','Rab','Kam','Jum','Sab'];
const mine=new Set(D.mine),part=new Set(D.part),$=s=>document.querySelector(s);
$('#who').innerHTML=`<b>${D.name}</b> (${D.code}) · Tim ${D.team} · pasanganmu: <b>${D.pname}</b>`;
function grid(){$('#g').innerHTML='<tr><td></td>'+DN.map(d=>`<th>${d}</th>`).join('')+'</tr>'+HR.map(h=>`<tr><td class="h">${h}.00</td>`+DN.map((_,i)=>{const k=(i+1)+'-'+h,a=mine.has(k),b=part.has(k);return `<td><div class="c ${a&&b?'both':a?'me':b?'pa':''}" data-k="${k}">${a?'✓':''}</div></td>`}).join('')+'</tr>').join('')}
const fd=s=>{const d=new Date(s.replace(' ','T'));return DD[d.getDay()]+', '+d.getDate()+'/'+(d.getMonth()+1)+' pukul '+String(d.getHours()).padStart(2,'0')+'.00'};
function ms(L){$('#ms').innerHTML=L.length?L.map(m=>`<div class="mc"><b>M${m.n}</b> · ${m.o?'lawan TIM '+m.o+' ('+m.on+')':'lawan belum diketahui'}<br>${m.res?'Hasil: <b>'+m.res+'</b>':m.s?'<span class="ok">Jadwal: '+fd(m.s)+'</span>':m.o?'Belum dijadwalkan. Pastikan keempat pemain sudah mengisi jam kosong.':'Menunggu hasil match sebelumnya'}</div>`).join(''):'<p>Belum ada.</p>'}
$('#g').onclick=async e=>{const c=e.target.closest('.c');if(!c)return;const k=c.dataset.k,[d,h]=k.split('-');mine.has(k)?mine.delete(k):mine.add(k);grid();
 const r=await fetch('api.php',{method:'POST',body:new URLSearchParams({act:'toggle',t:D.t,dow:d,hr:h})});if(r.ok){ms((await r.json()).matches)}else{mine.has(k)?mine.delete(k):mine.add(k);grid();alert('Gagal menyimpan, coba lagi')}};
grid();ms(D.matches);
</script></body></html>