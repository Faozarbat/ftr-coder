<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Klinik Sehat Keluarga — Demo Booking FTR-Coder</title>
<style>
:root{
  --ink:#182233; --ink2:#4a5568; --mut:#7a8699; --line:#e2e8f0; --bg:#f1f6f9; --card:#fff;
  --accent:#1f7a8c; --accent2:#175f6b; --accentbg:#e3f3f5;
  --amber:#e8a13c; --amberbg:#fdf1de;
  --red:#e5484d; --redbg:#fde9ea;
  --green:#2fa06a; --greenbg:#e5f6ee;
}
*{box-sizing:border-box;margin:0}
body{font-family:"Segoe UI",system-ui,-apple-system,Roboto,Arial,sans-serif;background:var(--bg);color:var(--ink);font-size:14.5px;line-height:1.5}
button,input,textarea{font:inherit;color:inherit}
button{cursor:pointer}
.mono{font-family:'Courier New',monospace}
.mut{color:var(--mut)}

#bar{position:sticky;top:0;z-index:60;background:#0e1a24;color:#c6d3dc;display:flex;gap:14px;align-items:center;padding:8px 18px;flex-wrap:wrap}
#bar .tag{font-weight:800;color:#fff;font-size:14px;display:flex;gap:8px;align-items:center}
#bar .tag i{font-style:normal;background:var(--amber);color:#4a3200;border-radius:6px;padding:1px 8px;font-size:11px;font-weight:800;letter-spacing:.03em}
#bar .timer{font-size:12.5px;color:#8fa8b5}
#bar .sp{flex:1}
#bar .dbtn{background:transparent;border:1px solid #29404a;color:#c6d3dc;border-radius:8px;padding:6px 12px;font-size:13px;text-decoration:none;display:inline-block}
#bar .dbtn:hover{background:#152530}

.wrap{max-width:900px;margin:0 auto;padding:22px 18px 60px}
.head h1{font-size:22px;margin-bottom:2px}
.head p{color:var(--mut);font-size:13.5px;margin-bottom:18px}

.tabs2{display:flex;gap:8px;margin-bottom:20px;border-bottom:1px solid var(--line)}
.tabs2 button{background:none;border:0;padding:10px 4px;margin-right:20px;font-weight:700;font-size:14px;color:var(--mut);border-bottom:2px solid transparent}
.tabs2 button.on{color:var(--accent2);border-color:var(--accent)}
.tabs2 button .badge{background:var(--accentbg);color:var(--accent2);border-radius:99px;padding:1px 8px;font-size:11.5px;margin-left:6px}

.steps{display:flex;gap:6px;margin-bottom:22px;flex-wrap:wrap}
.step{flex:1;min-width:70px;text-align:center;padding:8px 4px;border-radius:8px;font-size:12px;font-weight:700;color:var(--mut);background:var(--card);border:1px solid var(--line)}
.step.on{background:var(--accent);color:#fff;border-color:var(--accent)}
.step.done{background:var(--accentbg);color:var(--accent2);border-color:var(--accentbg)}

.card{background:var(--card);border:1px solid var(--line);border-radius:14px;padding:20px}
.dgrid{display:grid;grid-template-columns:repeat(auto-fill,minmax(230px,1fr));gap:12px}
.dcard{border:1px solid var(--line);border-radius:12px;padding:14px;text-align:left;background:#fff}
.dcard:hover{border-color:var(--accent)}
.dcard .ic{font-size:26px}
.dcard .nm{font-weight:700;margin-top:6px}
.dcard .poli{display:inline-block;margin-top:4px;background:var(--accentbg);color:var(--accent2);font-size:11.5px;padding:2px 9px;border-radius:99px}
.dcard button{width:100%;margin-top:12px;background:var(--accent);color:#fff;border:0;padding:9px;border-radius:8px;font-weight:700;font-size:13px}
.dcard button:hover{background:var(--accent2)}

.datepills{display:flex;gap:8px;overflow-x:auto;padding-bottom:6px;margin-bottom:16px}
.datepills button{flex:0 0 auto;border:1px solid var(--line);background:#fff;border-radius:10px;padding:10px 14px;text-align:center;font-size:12.5px}
.datepills button b{display:block;font-size:15px}
.datepills button.on{background:var(--accent);border-color:var(--accent);color:#fff}

.slotgrid{display:grid;grid-template-columns:repeat(auto-fill,minmax(86px,1fr));gap:8px;margin-bottom:18px}
.slot{border:1px solid var(--line);background:#fff;border-radius:8px;padding:9px 4px;font-size:13px;font-weight:600;text-align:center}
.slot.on{background:var(--accent);border-color:var(--accent);color:#fff}
.slot[disabled]{background:#f3f4f6;color:#c2c8d1;text-decoration:line-through;cursor:not-allowed}

.field{margin-bottom:14px}
.field label{display:block;font-size:12.5px;font-weight:700;margin-bottom:5px;color:var(--ink2)}
.field input,.field textarea{width:100%;border:1px solid #cbd5e1;border-radius:9px;padding:10px 12px;font-size:14px}
.field textarea{min-height:70px;resize:vertical}

.sumrow{display:flex;justify-content:space-between;padding:8px 0;border-bottom:1px dashed var(--line);font-size:13.5px}
.sumrow b{color:var(--ink)}

.navrow{display:flex;gap:10px;margin-top:18px}
.navrow button{padding:11px 20px;border-radius:9px;font-weight:700;font-size:13.5px;border:1px solid var(--line);background:#fff}
.navrow button.pr{background:var(--accent);color:#fff;border-color:var(--accent);margin-left:auto}
.navrow button.pr:hover{background:var(--accent2)}
.navrow button.pr[disabled]{opacity:.4;pointer-events:none}

.ticket{background:linear-gradient(135deg,var(--accent),var(--accent2));color:#fff;border-radius:16px;padding:26px;text-align:center;margin-bottom:18px}
.ticket .code{font-family:'Courier New',monospace;font-size:22px;font-weight:800;letter-spacing:2px;margin:8px 0}
.ticket p{opacity:.9;font-size:13px}

.blist{display:grid;gap:12px}
.bcard{background:var(--card);border:1px solid var(--line);border-radius:12px;padding:16px;display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap}
.bcard .nm{font-weight:700}
.bcard .meta{font-size:12.5px;color:var(--mut);margin-top:3px}
.bstatus{font-size:11px;font-weight:800;padding:3px 10px;border-radius:99px;height:fit-content}
.bstatus.confirmed{background:var(--greenbg);color:var(--green)}
.bstatus.cancelled{background:var(--redbg);color:var(--red)}
.bcard .cancelbtn{background:none;border:1px solid var(--red);color:var(--red);border-radius:8px;padding:6px 12px;font-size:12px;font-weight:700;height:fit-content}
.empty{color:var(--mut);text-align:center;padding:40px 0;font-size:13.5px}

.overlay{position:fixed;inset:0;background:#0b122099;z-index:100;display:grid;place-items:center;padding:16px}
.modal{background:#fff;border-radius:16px;width:min(400px,100%);padding:24px;text-align:center;box-shadow:0 30px 80px #0003}
.modal .ic{font-size:34px;margin-bottom:8px}
.modal h2{font-size:17px;margin-bottom:6px}
.modal p{color:var(--mut);font-size:13.5px;margin-bottom:20px}
.modal .racts{display:flex;gap:8px}
.modal .racts button{flex:1;padding:10px;border-radius:8px;font-weight:700;font-size:13px;border:1px solid var(--line);background:#fff}
.modal .racts button.danger{background:var(--red);border-color:var(--red);color:#fff}

#toasts{position:fixed;right:16px;bottom:16px;z-index:200;display:grid;gap:8px}
.toast{background:var(--ink);color:#fff;padding:11px 16px;border-radius:10px;font-weight:600;font-size:13.5px;box-shadow:0 10px 30px #0004;border-left:4px solid var(--accent)}
</style>
</head>
<body>

<div id="bar">
  <div class="tag"><i>DEMO</i> FTR-Coder — Sistem Booking Klinik</div>
  <div class="timer" id="timer"></div>
  <div class="sp"></div>
  <button class="dbtn" onclick="resetDemo()">↺ Reset Demo</button>
  <a class="dbtn" href="/">← Kembali ke Website</a>
</div>

<div class="wrap">
  <div class="head">
    <h1>🏥 Klinik Sehat Keluarga</h1>
    <p>Simulasi booking janji temu dokter — coba buat janji seperti pasien sungguhan. Semua data tersimpan di browser kamu sendiri.</p>
  </div>

  <div class="tabs2" id="tabs2"></div>
  <div id="tabContent"></div>
</div>

<div id="modalRoot"></div>
<div id="toasts"></div>

<script>
/* ================= Data ================= */
const DOCTORS = [
  {id:1, nm:'dr. Amelia Putri', poli:'Umum', ic:'🩺', days:[0,1,2,3,4,5], slots:['08:00','08:30','09:00','09:30','10:00','10:30','11:00']},
  {id:2, nm:'drg. Rizky Pratama', poli:'Gigi', ic:'🦷', days:[1,2,3,4,5], slots:['13:00','13:30','14:00','14:30','15:00','15:30']},
  {id:3, nm:'dr. Siti Nurhaliza, Sp.A', poli:'Anak', ic:'🧒', days:[0,2,4,5], slots:['09:00','09:30','10:00','10:30','11:00']},
  {id:4, nm:'dr. Bagus Wirawan', poli:'Umum (sore)', ic:'🩺', days:[0,1,2,3,4], slots:['16:00','16:30','17:00','17:30','18:00','18:30']},
];
const HARI = ['Min','Sen','Sel','Rab','Kam','Jum','Sab'];
const BULAN = ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'];

const LS_KEY = 'ftrcoder_demo_booking_v1';
let S = JSON.parse(localStorage.getItem(LS_KEY) || 'null') || {tab:'buat', step:1, pick:{}, bookings:[]};
function save(){ localStorage.setItem(LS_KEY, JSON.stringify(S)); }
function toast(msg){
  const el = document.createElement('div');
  el.className='toast'; el.textContent=msg;
  document.getElementById('toasts').appendChild(el);
  setTimeout(()=>el.remove(), 2600);
}
function dateStr(d){ return d.toISOString().slice(0,10); }
function hashSlot(str){ let h=0; for(const c of str) h=(h*31+c.charCodeAt(0))|0; return Math.abs(h); }
function isTakenByOthers(docId, ds, time){ return hashSlot(docId+ds+time) % 5 === 0; }
function isTakenByMe(docId, ds, time){
  return S.bookings.some(b => b.status==='confirmed' && b.doctorId===docId && b.date===ds && b.time===time);
}

/* ================= Tabs ================= */
function renderTabs(){
  const activeCount = S.bookings.filter(b=>b.status==='confirmed').length;
  document.getElementById('tabs2').innerHTML = `
    <button class="${S.tab==='buat'?'on':''}" onclick="setTab('buat')">Buat Janji Baru</button>
    <button class="${S.tab==='saya'?'on':''}" onclick="setTab('saya')">Janji Temu Saya <span class="badge">${activeCount}</span></button>`;
}
function setTab(t){ S.tab=t; save(); renderTabs(); renderContent(); }
function renderContent(){
  document.getElementById('tabContent').innerHTML = S.tab==='buat' ? wizardHtml() : listHtml();
  attachWizardEvents();
}

/* ================= Wizard: Buat Janji ================= */
function wizardHtml(){
  const labels = ['Pilih Dokter','Pilih Jadwal','Data Pasien','Konfirmasi'];
  const stepsHtml = labels.map((l,i) => {
    const n = i+1;
    const cls = n===S.step ? 'on' : (n<S.step ? 'done' : '');
    return `<div class="step ${cls}">${n}. ${l}</div>`;
  }).join('');

  if (S.step===5) return `<div class="steps">${stepsHtml.replace(/step (on|done|)"/g,'step done"')}</div>` + successHtml();

  let body = '';
  if (S.step===1) body = stepDoctor();
  if (S.step===2) body = stepSchedule();
  if (S.step===3) body = stepPatient();
  if (S.step===4) body = stepConfirm();

  return `<div class="steps">${stepsHtml}</div><div class="card">${body}</div>`;
}

function stepDoctor(){
  return `<div class="dgrid">${DOCTORS.map(d => `
    <div class="dcard">
      <div class="ic">${d.ic}</div>
      <div class="nm">${d.nm}</div>
      <div class="poli">${d.poli}</div>
      <button onclick="pickDoctor(${d.id})">Pilih Dokter Ini</button>
    </div>`).join('')}</div>`;
}
function pickDoctor(id){ S.pick.doctorId=id; S.pick.date=null; S.pick.time=null; S.step=2; save(); renderContent(); }

function stepSchedule(){
  const doc = DOCTORS.find(d=>d.id===S.pick.doctorId);
  const dates = [];
  for(let i=0;i<10 && dates.length<7;i++){
    const d = new Date(); d.setDate(d.getDate()+i);
    if(doc.days.includes(d.getDay())) dates.push(d);
  }
  if(!S.pick.date) S.pick.date = dateStr(dates[0]);

  const datePills = dates.map(d => {
    const ds = dateStr(d);
    return `<button class="${ds===S.pick.date?'on':''}" onclick="pickDate('${ds}')">${HARI[d.getDay()]}<b>${d.getDate()}</b>${BULAN[d.getMonth()]}</button>`;
  }).join('');

  const slots = doc.slots.map(t => {
    const taken = isTakenByOthers(doc.id, S.pick.date, t) || isTakenByMe(doc.id, S.pick.date, t);
    const on = S.pick.time===t ? 'on' : '';
    return `<button class="slot ${on}" ${taken?'disabled':''} onclick="pickTime('${t}')">${t}</button>`;
  }).join('');

  return `
    <p class="mut" style="margin-bottom:10px;font-weight:700">📅 Pilih Tanggal</p>
    <div class="datepills">${datePills}</div>
    <p class="mut" style="margin-bottom:10px;font-weight:700">🕐 Pilih Jam (${doc.nm})</p>
    <div class="slotgrid">${slots}</div>
    <div class="navrow">
      <button onclick="S.step=1;save();renderContent()">← Kembali</button>
      <button class="pr" ${!S.pick.time?'disabled':''} onclick="S.step=3;save();renderContent()">Lanjut →</button>
    </div>`;
}
function pickDate(ds){ S.pick.date=ds; S.pick.time=null; save(); renderContent(); }
function pickTime(t){ S.pick.time=t; save(); renderContent(); }

function stepPatient(){
  const p = S.pick.patient || {};
  return `
    <div class="field"><label>Nama Lengkap Pasien</label><input id="fNama" value="${p.nama||''}" placeholder="Contoh: Budi Santoso"></div>
    <div class="field"><label>Nomor HP / WhatsApp</label><input id="fHp" value="${p.hp||''}" placeholder="08xxxxxxxxxx"></div>
    <div class="field"><label>Keluhan Singkat (opsional)</label><textarea id="fKeluhan" placeholder="Contoh: demam sejak 2 hari">${p.keluhan||''}</textarea></div>
    <div class="navrow">
      <button onclick="S.step=2;save();renderContent()">← Kembali</button>
      <button class="pr" onclick="savePatientAndNext()">Lanjut →</button>
    </div>`;
}
function attachWizardEvents(){ /* input dibaca langsung saat tombol Lanjut diklik */ }
function savePatientAndNext(){
  const nama = document.getElementById('fNama').value.trim();
  const hp = document.getElementById('fHp').value.trim();
  const keluhan = document.getElementById('fKeluhan').value.trim();
  if(!nama || !hp){ toast('Nama dan nomor HP wajib diisi'); return; }
  S.pick.patient = {nama, hp, keluhan};
  S.step = 4; save(); renderContent();
}

function stepConfirm(){
  const doc = DOCTORS.find(d=>d.id===S.pick.doctorId);
  const d = new Date(S.pick.date);
  const tgl = `${HARI[d.getDay()]}, ${d.getDate()} ${BULAN[d.getMonth()]} ${d.getFullYear()}`;
  const p = S.pick.patient;
  return `
    <div class="sumrow"><span>Dokter</span><b>${doc.nm} (${doc.poli})</b></div>
    <div class="sumrow"><span>Tanggal</span><b>${tgl}</b></div>
    <div class="sumrow"><span>Jam</span><b>${S.pick.time} WIB</b></div>
    <div class="sumrow"><span>Pasien</span><b>${p.nama}</b></div>
    <div class="sumrow"><span>No. HP</span><b>${p.hp}</b></div>
    ${p.keluhan ? `<div class="sumrow"><span>Keluhan</span><b>${p.keluhan}</b></div>` : ''}
    <div class="navrow">
      <button onclick="S.step=3;save();renderContent()">← Kembali</button>
      <button class="pr" onclick="confirmBooking()">✓ Konfirmasi Janji Temu</button>
    </div>`;
}
function confirmBooking(){
  const doc = DOCTORS.find(d=>d.id===S.pick.doctorId);
  const code = 'JT' + Math.random().toString(36).slice(2,7).toUpperCase();
  S.bookings.unshift({
    code, doctorId:doc.id, doctorNm:doc.nm, poli:doc.poli,
    date:S.pick.date, time:S.pick.time, patient:S.pick.patient,
    status:'confirmed', createdAt: new Date().toISOString(),
  });
  S.step = 5; save();
  toast('Janji temu berhasil dibuat!');
  renderContent();
}
function successHtml(){
  const b = S.bookings[0];
  const d = new Date(b.date);
  const tgl = `${HARI[d.getDay()]}, ${d.getDate()} ${BULAN[d.getMonth()]} ${d.getFullYear()}`;
  return `
    <div class="ticket">
      <div style="font-size:30px">✅</div>
      <p style="margin-top:6px">Janji Temu Berhasil Dibuat</p>
      <div class="code">${b.code}</div>
      <p>${b.doctorNm} • ${tgl} • ${b.time} WIB</p>
    </div>
    <div class="navrow" style="margin-top:0">
      <button onclick="setTab('saya')">Lihat Janji Temu Saya</button>
      <button class="pr" onclick="newBooking()">Buat Janji Baru Lagi</button>
    </div>`;
}
function newBooking(){ S.step=1; S.pick={}; save(); renderContent(); }

/* ================= Tab: Janji Temu Saya ================= */
function listHtml(){
  if(S.bookings.length===0) return `<div class="empty">Belum ada janji temu.<br>Klik "Buat Janji Baru" untuk mulai.</div>`;
  return `<div class="blist">${S.bookings.map(b => {
    const d = new Date(b.date);
    const tgl = `${HARI[d.getDay()]}, ${d.getDate()} ${BULAN[d.getMonth()]} ${d.getFullYear()}`;
    return `
      <div class="bcard">
        <div>
          <div class="nm">${b.doctorNm} <span class="mut" style="font-weight:400">(${b.poli})</span></div>
          <div class="meta">${tgl} • ${b.time} WIB • ${b.patient.nama}</div>
          <div class="meta mono">${b.code}</div>
        </div>
        <div style="text-align:right">
          <div class="bstatus ${b.status}">${b.status==='confirmed'?'Terkonfirmasi':'Dibatalkan'}</div>
          ${b.status==='confirmed' ? `<br><button class="cancelbtn" onclick="askCancel('${b.code}')">Batalkan</button>` : ''}
        </div>
      </div>`;
  }).join('')}</div>`;
}
function askCancel(code){
  document.getElementById('modalRoot').innerHTML = `
    <div class="overlay" onclick="if(event.target===this) closeModal()">
      <div class="modal">
        <div class="ic">⚠️</div>
        <h2>Batalkan Janji Temu?</h2>
        <p>Janji temu ${code} akan dibatalkan. Aksi ini tidak bisa diurungkan.</p>
        <div class="racts">
          <button onclick="closeModal()">Tidak</button>
          <button class="danger" onclick="doCancel('${code}')">Ya, Batalkan</button>
        </div>
      </div>
    </div>`;
}
function doCancel(code){
  const b = S.bookings.find(x=>x.code===code);
  if(b) b.status='cancelled';
  save(); closeModal(); renderContent();
  toast('Janji temu dibatalkan');
}
function closeModal(){ document.getElementById('modalRoot').innerHTML=''; }

/* ================= Reset ================= */
function resetDemo(){
  document.getElementById('modalRoot').innerHTML = `
    <div class="overlay" onclick="if(event.target===this) closeModal()">
      <div class="modal">
        <div class="ic">🗑️</div>
        <h2>Reset Demo?</h2>
        <p>Semua janji temu yang dibuat akan dihapus. Aksi ini tidak bisa dibatalkan.</p>
        <div class="racts">
          <button onclick="closeModal()">Batal</button>
          <button class="danger" onclick="confirmReset()">Ya, Reset</button>
        </div>
      </div>
    </div>`;
}
function confirmReset(){
  localStorage.removeItem(LS_KEY);
  S = {tab:'buat', step:1, pick:{}, bookings:[]};
  closeModal(); renderTabs(); renderContent();
  toast('Demo direset ke kondisi awal');
}

/* ================= Session timer ================= */
const EXPIRES_AT = @json($expiresAt ?? null);
let sessionLocked = false;
function tickTimer(){
  const el = document.getElementById('timer');
  if(!EXPIRES_AT){ el.textContent=''; return; }
  const diff = new Date(EXPIRES_AT) - new Date();
  if(diff <= 0){
    el.textContent = 'Sesi demo berakhir';
    if(!sessionLocked) lockSession();
    return;
  }
  const m = Math.floor(diff/60000), s = Math.floor((diff%60000)/1000);
  el.textContent = `Sesi berakhir dalam ${m}:${String(s).padStart(2,'0')}`;
}
function lockSession(){
  sessionLocked = true;
  document.getElementById('modalRoot').innerHTML = `
    <div class="overlay">
      <div class="modal">
        <div class="ic">⏰</div>
        <h2>Sesi Demo Berakhir</h2>
        <p>Waktu demo kamu sudah habis. Muat ulang halaman untuk memulai sesi baru dengan token.</p>
        <button style="width:100%;background:var(--accent);color:#fff;border:0;padding:11px;border-radius:8px;font-weight:700" onclick="location.reload()">Muat Ulang Halaman</button>
      </div>
    </div>`;
}

/* ================= Init ================= */
renderTabs(); renderContent();
tickTimer(); setInterval(tickTimer, 1000);
</script>
</body>
</html>