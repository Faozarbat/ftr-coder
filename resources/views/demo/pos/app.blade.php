<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kasir Kopi Nusantara — Demo POS FTR-Coder</title>
<style>
:root{
  --ink:#1c2130; --ink2:#4a5064; --mut:#8b93a1; --line:#e4e7ec; --bg:#f5f6f8; --card:#fff;
  --accent:#0f9d78; --accent2:#0b7a5c; --accentbg:#e3f6ef;
  --amber:#f0a63a; --amberbg:#fdf1e0; --ambertxt:#8a5a0a;
  --red:#e5484d; --redbg:#fde9ea;
  --barh:52px;
}
*{box-sizing:border-box;margin:0}
html,body{min-height:100%}
body{font-family:"Segoe UI",system-ui,-apple-system,Roboto,Arial,sans-serif;background:var(--bg);color:var(--ink);font-size:14.5px;line-height:1.5}
button,input{font:inherit;color:inherit}
button{cursor:pointer}
.mono{font-family:'Courier New',monospace}
.mut{color:var(--mut)}

/* ===== Demo bar ===== */
#bar{position:sticky;top:0;z-index:60;min-height:var(--barh);background:#0b1220;color:#c9d3e0;display:flex;gap:14px;align-items:center;padding:8px 18px;flex-wrap:wrap}
#bar .tag{font-weight:800;color:#fff;font-size:14px;display:flex;gap:8px;align-items:center}
#bar .tag i{font-style:normal;background:var(--amber);color:#4a3200;border-radius:6px;padding:1px 8px;font-size:11px;font-weight:800;letter-spacing:.03em}
#bar .timer{font-size:12.5px;color:#8fa1b8}
#bar .sp{flex:1}
#bar .dbtn{background:transparent;border:1px solid #263449;color:#c9d3e0;border-radius:8px;padding:6px 12px;font-size:13px}
#bar .dbtn:hover{background:#152036}

/* ===== Layout ===== */
.wrap{max-width:1180px;margin:0 auto;padding:22px 18px 60px}
.head{margin-bottom:18px}
.head h1{font-size:22px;margin-bottom:2px}
.head p{color:var(--mut);font-size:13.5px}
.stats{display:flex;gap:10px;margin-top:14px;flex-wrap:wrap}
.stat{background:var(--card);border:1px solid var(--line);border-radius:10px;padding:9px 14px;font-size:13px}
.stat b{display:block;font-size:16px;font-family:'Courier New',monospace}

.grid{display:grid;grid-template-columns:1fr 340px;gap:20px;align-items:start}
@media(max-width:820px){.grid{grid-template-columns:1fr}}

.tabs{display:flex;gap:6px;margin-bottom:14px;flex-wrap:wrap}
.tabs button{border:1px solid var(--line);background:var(--card);padding:8px 14px;border-radius:99px;font-weight:600;font-size:13px;color:var(--ink2)}
.tabs button.on{background:var(--ink);color:#fff;border-color:var(--ink)}

.pgrid{display:grid;grid-template-columns:repeat(auto-fill,minmax(150px,1fr));gap:12px}
.pcard{background:var(--card);border:1px solid var(--line);border-radius:14px;padding:14px;text-align:center;transition:transform .1s}
.pcard:hover{border-color:#c7ccd4}
.pcard .ic{font-size:30px}
.pcard .nm{font-weight:700;margin:8px 0 2px;font-size:13.5px}
.pcard .pr{color:var(--accent2);font-family:'Courier New',monospace;font-size:13px;margin-bottom:10px}
.pcard button{width:100%;background:var(--accent);color:#fff;border:0;padding:9px;border-radius:8px;font-weight:700;font-size:13px}
.pcard button:hover{background:var(--accent2)}

.cart{background:var(--card);border:1px solid var(--line);border-radius:14px;padding:18px;position:sticky;top:70px}
.cart h3{font-size:15px;margin-bottom:12px;display:flex;justify-content:space-between;align-items:center}
.cart h3 span{font-size:11.5px;background:var(--accentbg);color:var(--accent2);padding:2px 8px;border-radius:99px;font-weight:700}
.citem{display:flex;justify-content:space-between;gap:8px;padding:9px 0;border-bottom:1px solid #eef0f3;font-size:13.5px}
.citem .nm{font-weight:600}
.qty{display:flex;align-items:center;gap:8px;margin-top:4px}
.qty button{width:22px;height:22px;border-radius:6px;border:1px solid var(--line);background:#fff;font-weight:700;line-height:1}
.qty .n{min-width:16px;text-align:center;font-family:'Courier New',monospace}
.citem .sub{font-family:'Courier New',monospace;white-space:nowrap;text-align:right}
.empty{color:var(--mut);font-size:13px;padding:20px 0;text-align:center}
.total{display:flex;justify-content:space-between;margin-top:14px;padding-top:14px;border-top:1px solid var(--line);font-weight:800;font-family:'Courier New',monospace;font-size:16px}
.paybtn{width:100%;margin-top:14px;background:var(--ink);color:#fff;border:0;padding:12px;border-radius:10px;font-weight:700;font-size:14px}
.paybtn:hover{background:#000}
.paybtn[disabled]{opacity:.4;pointer-events:none}

/* Modal */
.overlay{position:fixed;inset:0;background:#0b122099;z-index:100;display:grid;place-items:center;padding:16px}
.modal{background:#fff;border-radius:16px;width:min(420px,100%);padding:24px;position:relative;box-shadow:0 30px 80px #0003}
.modal .x{position:absolute;right:14px;top:12px;width:32px;height:32px;border:0;background:#f0f2f5;border-radius:50%;font-size:18px}
.modal h2{font-size:18px;margin-bottom:14px}
.quickpay{display:grid;grid-template-columns:repeat(3,1fr);gap:8px;margin:12px 0}
.quickpay button{border:1px solid var(--line);background:#fff;padding:10px 4px;border-radius:8px;font-weight:700;font-size:12.5px}
.quickpay button:hover{border-color:var(--accent);color:var(--accent2)}
.modal input{width:100%;border:1px solid #cbd2db;border-radius:10px;padding:11px 12px;font-family:'Courier New',monospace;font-size:16px;margin-top:6px}
.payrow{display:flex;justify-content:space-between;font-size:14px;padding:6px 0}
.payrow.big{font-weight:800;font-size:16px;border-top:1px solid var(--line);margin-top:8px;padding-top:10px}
.confirmbtn{width:100%;margin-top:16px;background:var(--accent);color:#fff;border:0;padding:12px;border-radius:10px;font-weight:700}
.confirmbtn[disabled]{opacity:.35;pointer-events:none}
.confirmbtn:hover{background:var(--accent2)}

/* Receipt */
.receipt{font-family:'Courier New',monospace;font-size:13px}
.receipt .rh{text-align:center;margin-bottom:12px}
.receipt .rh b{font-size:15px}
.rrow{display:flex;justify-content:space-between;padding:3px 0;border-bottom:1px dashed #e0e0e0}
.rtotal{display:flex;justify-content:space-between;font-weight:800;margin-top:8px;padding-top:8px;border-top:1px solid var(--ink)}
.racts{display:flex;gap:8px;margin-top:16px}
.racts button{flex:1;padding:10px;border-radius:8px;font-weight:700;font-size:13px;border:1px solid var(--line);background:#fff}
.racts button.pr{background:var(--ink);color:#fff;border-color:var(--ink)}

#toasts{position:fixed;right:16px;bottom:16px;z-index:200;display:grid;gap:8px}
.toast{background:var(--ink);color:#fff;padding:11px 16px;border-radius:10px;font-weight:600;font-size:13.5px;box-shadow:0 10px 30px #0004;border-left:4px solid var(--accent)}

@media print{
  #bar,.grid>div:last-child,.head,.stats{display:none!important}
  body{background:#fff}
  .wrap{padding:0}
}
</style>
</head>
<body>

<div id="bar">
  <div class="tag"><i>DEMO</i> FTR-Coder — Sistem Kasir (POS)</div>
  <div class="timer" id="timer"></div>
  <div class="sp"></div>
  <button class="dbtn" onclick="resetDemo()">↺ Reset Demo</button>
  <a class="dbtn" href="/" style="text-decoration:none;display:inline-block">← Kembali ke Website</a>
</div>

<div class="wrap">
  <div class="head">
    <h1>☕ Kasir Kopi Nusantara</h1>
    <p>Ini simulasi aplikasi kasir sungguhan — coba pesan seperti pelanggan asli. Semua data tersimpan di browser kamu sendiri, tidak terhubung ke sistem manapun.</p>
    <div class="stats">
      <div class="stat">Transaksi hari ini<b id="statCount">0</b></div>
      <div class="stat">Omzet demo<b id="statTotal" class="mono">Rp 0</b></div>
    </div>
  </div>

  <div class="grid">
    <div>
      <div class="tabs" id="tabs"></div>
      <div class="pgrid" id="pgrid"></div>
    </div>

    <div class="cart">
      <h3>Keranjang <span id="cartCount">0 item</span></h3>
      <div id="cartItems"></div>
      <div class="total"><span>Total</span><span class="mono" id="cartTotal">Rp 0</span></div>
      <button class="paybtn" id="payBtn" onclick="openPay()" disabled>Bayar</button>
    </div>
  </div>
</div>

<div id="modalRoot"></div>
<div id="toasts"></div>

<script>
/* ================= Data & State ================= */
const PRODUCTS = [
  {id:1,cat:'Minuman',nm:'Kopi Hitam',pr:12000,ic:'☕'},
  {id:2,cat:'Minuman',nm:'Es Kopi Susu',pr:18000,ic:'🥤'},
  {id:3,cat:'Minuman',nm:'Es Teh Manis',pr:8000,ic:'🧊'},
  {id:4,cat:'Minuman',nm:'Matcha Latte',pr:20000,ic:'🍵'},
  {id:5,cat:'Makanan',nm:'Nasi Goreng',pr:22000,ic:'🍛'},
  {id:6,cat:'Makanan',nm:'Ayam Geprek',pr:20000,ic:'🍗'},
  {id:7,cat:'Makanan',nm:'Mie Ayam',pr:17000,ic:'🍜'},
  {id:8,cat:'Camilan',nm:'Kentang Goreng',pr:15000,ic:'🍟'},
  {id:9,cat:'Camilan',nm:'Roti Bakar',pr:13000,ic:'🍞'},
  {id:10,cat:'Camilan',nm:'Pisang Goreng',pr:11000,ic:'🍌'},
];
const CATS = ['Semua', ...new Set(PRODUCTS.map(p=>p.cat))];

const LS_KEY = 'ftrcoder_demo_pos_v1';
let S = JSON.parse(localStorage.getItem(LS_KEY) || 'null') || {cat:'Semua', cart:{}, history:[]};
function save(){ localStorage.setItem(LS_KEY, JSON.stringify(S)); }
function fmt(n){ return 'Rp ' + n.toLocaleString('id-ID'); }
function toast(msg){
  const el = document.createElement('div');
  el.className='toast'; el.textContent=msg;
  document.getElementById('toasts').appendChild(el);
  setTimeout(()=>el.remove(), 2600);
}

/* ================= Render: catalog ================= */
function renderTabs(){
  document.getElementById('tabs').innerHTML = CATS.map(c =>
    `<button class="${c===S.cat?'on':''}" onclick="setCat('${c}')">${c}</button>`
  ).join('');
}
function setCat(c){ S.cat=c; save(); renderTabs(); renderGrid(); }
function renderGrid(){
  const list = S.cat==='Semua' ? PRODUCTS : PRODUCTS.filter(p=>p.cat===S.cat);
  document.getElementById('pgrid').innerHTML = list.map(p => `
    <div class="pcard">
      <div class="ic">${p.ic}</div>
      <div class="nm">${p.nm}</div>
      <div class="pr">${fmt(p.pr)}</div>
      <button onclick="addItem(${p.id})">+ Tambah</button>
    </div>`).join('');
}

/* ================= Cart ================= */
function addItem(id){
  S.cart[id] = (S.cart[id]||0) + 1;
  save(); renderCart();
  toast(PRODUCTS.find(p=>p.id===id).nm + ' ditambahkan');
}
function changeQty(id, d){
  S.cart[id] = (S.cart[id]||0) + d;
  if(S.cart[id] <= 0) delete S.cart[id];
  save(); renderCart();
}
function cartLines(){
  return Object.entries(S.cart).map(([id,qty]) => {
    const p = PRODUCTS.find(x=>x.id==id);
    return {...p, qty, sub:p.pr*qty};
  });
}
function cartTotal(){ return cartLines().reduce((a,l)=>a+l.sub,0); }
function renderCart(){
  const lines = cartLines();
  document.getElementById('cartCount').textContent = lines.reduce((a,l)=>a+l.qty,0) + ' item';
  document.getElementById('cartItems').innerHTML = lines.length ? lines.map(l => `
    <div class="citem">
      <div>
        <div class="nm">${l.nm}</div>
        <div class="qty">
          <button onclick="changeQty(${l.id},-1)">−</button>
          <span class="n">${l.qty}</span>
          <button onclick="changeQty(${l.id},1)">+</button>
        </div>
      </div>
      <div class="sub">${fmt(l.sub)}</div>
    </div>`).join('') : '<div class="empty">Keranjang masih kosong.<br>Klik produk di sebelah kiri.</div>';
  const total = cartTotal();
  document.getElementById('cartTotal').textContent = fmt(total);
  document.getElementById('payBtn').disabled = total===0;
}

/* ================= Checkout modal ================= */
function openPay(){
  const total = cartTotal();
  document.getElementById('modalRoot').innerHTML = `
    <div class="overlay" onclick="if(event.target===this) closeModal()">
      <div class="modal">
        <button class="x" onclick="closeModal()">×</button>
        <h2>Pembayaran</h2>
        <div class="payrow"><span>Total belanja</span><span class="mono">${fmt(total)}</span></div>
        <div class="quickpay">
          ${[total,20000,50000,100000,150000,200000].filter((v,i,a)=>a.indexOf(v)===i).slice(0,6).map(v=>
            `<button onclick="setPay(${v})">${v===total?'Uang Pas':fmt(v)}</button>`).join('')}
        </div>
        <input type="number" id="payInput" placeholder="Atau ketik nominal lain" oninput="calcChange()">
        <div class="payrow big" id="changeRow"><span>Kembalian</span><span class="mono">Rp 0</span></div>
        <button class="confirmbtn" id="confirmBtn" disabled onclick="confirmPay()">Selesaikan Transaksi</button>
      </div>
    </div>`;
}
function setPay(v){ document.getElementById('payInput').value = v; calcChange(); }
function calcChange(){
  const total = cartTotal();
  const paid = +document.getElementById('payInput').value || 0;
  const change = paid - total;
  document.getElementById('changeRow').innerHTML =
    `<span>Kembalian</span><span class="mono">${fmt(Math.max(change,0))}</span>`;
  document.getElementById('confirmBtn').disabled = paid < total;
}
function confirmPay(){
  const total = cartTotal();
  const paid = +document.getElementById('payInput').value || 0;
  const trx = {
    no: 'TRX' + String(S.history.length+1).padStart(4,'0'),
    time: new Date().toLocaleString('id-ID', {dateStyle:'medium', timeStyle:'short'}),
    items: cartLines(), total, paid, change: paid-total,
  };
  S.history.push(trx);
  S.cart = {};
  save();
  renderCart(); renderStats();
  toast('Transaksi berhasil!');
  openReceipt(trx);
}
function closeModal(){ document.getElementById('modalRoot').innerHTML=''; }

/* ================= Receipt ================= */
function openReceipt(trx){
  document.getElementById('modalRoot').innerHTML = `
    <div class="overlay">
      <div class="modal">
        <div class="receipt">
          <div class="rh"><b>☕ Kopi Nusantara</b><br><span class="mut">Demo POS — FTR-Coder</span><br>${trx.no} • ${trx.time}</div>
          ${trx.items.map(l=>`<div class="rrow"><span>${l.nm} ×${l.qty}</span><span>${fmt(l.sub)}</span></div>`).join('')}
          <div class="rtotal"><span>Total</span><span>${fmt(trx.total)}</span></div>
          <div class="rrow"><span>Dibayar</span><span>${fmt(trx.paid)}</span></div>
          <div class="rrow"><span>Kembali</span><span>${fmt(trx.change)}</span></div>
        </div>
        <div class="racts">
          <button onclick="closeModal()">Transaksi Baru</button>
          <button class="pr" onclick="window.print()">Cetak Struk</button>
        </div>
      </div>
    </div>`;
}

/* ================= Stats & reset ================= */
function renderStats(){
  document.getElementById('statCount').textContent = S.history.length;
  document.getElementById('statTotal').textContent = fmt(S.history.reduce((a,t)=>a+t.total,0));
}
function resetDemo(){
  document.getElementById('modalRoot').innerHTML = `
    <div class="overlay" onclick="if(event.target===this) closeModal()">
      <div class="modal" style="text-align:center">
        <button class="x" onclick="closeModal()">×</button>
        <div style="font-size:34px;margin-bottom:8px">🗑️</div>
        <h2 style="margin-bottom:6px">Reset Demo?</h2>
        <p class="mut" style="font-size:13.5px;margin-bottom:20px">Keranjang dan riwayat transaksi hari ini akan dihapus. Aksi ini tidak bisa dibatalkan.</p>
        <div class="racts">
          <button onclick="closeModal()">Batal</button>
          <button class="pr" style="background:var(--red);border-color:var(--red)" onclick="confirmReset()">Ya, Reset</button>
        </div>
      </div>
    </div>`;
}
function confirmReset(){
  localStorage.removeItem(LS_KEY);
  S = {cat:'Semua', cart:{}, history:[]};
  closeModal();
  renderTabs(); renderGrid(); renderCart(); renderStats();
  toast('Demo direset ke kondisi awal');
}

/* ================= Session timer (visual only, dari token) ================= */
const EXPIRES_AT = @json($expiresAt ?? null); // diisi server dari session_expired_at token
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
      <div class="modal" style="text-align:center">
        <div style="font-size:34px;margin-bottom:8px">⏰</div>
        <h2 style="margin-bottom:6px">Sesi Demo Berakhir</h2>
        <p class="mut" style="font-size:13.5px;margin-bottom:20px">Waktu demo kamu sudah habis. Muat ulang halaman untuk memulai sesi baru dengan token.</p>
        <button class="confirmbtn" onclick="location.reload()">Muat Ulang Halaman</button>
      </div>
    </div>`;
}

/* ================= Init ================= */
renderTabs(); renderGrid(); renderCart(); renderStats();
tickTimer(); setInterval(tickTimer, 1000);
</script>
</body>
</html>