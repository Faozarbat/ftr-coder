<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nara Fashion Store — Demo Toko Online FTR-Coder</title>
<style>
:root{
  --ink:#211a17; --ink2:#5c4d48; --mut:#9a8b85; --line:#ece2de; --bg:#fbf6f3; --card:#fff;
  --accent:#b3654f; --accent2:#8f4f3d; --accentbg:#f6e6e1;
  --amber:#e8a13c; --star:#e8a13c;
  --red:#c45348; --redbg:#fbe9e7;
  --green:#4d8f6a; --greenbg:#e7f3ec;
  --blue:#4a7ab3; --bluebg:#e8f0f9;
}
*{box-sizing:border-box;margin:0}
body{font-family:"Segoe UI",system-ui,-apple-system,Roboto,Arial,sans-serif;background:var(--bg);color:var(--ink);font-size:14.5px;line-height:1.5}
button,input,select{font:inherit;color:inherit}
button{cursor:pointer;border:0;background:none}
.mono{font-family:'Courier New',monospace}
.mut{color:var(--mut)}

#bar{position:sticky;top:0;z-index:70;background:#241a17;color:#d9c8c2;display:flex;gap:14px;align-items:center;padding:7px 18px;flex-wrap:wrap;font-size:12.5px}
#bar .tag{font-weight:800;color:#fff;font-size:13.5px;display:flex;gap:8px;align-items:center}
#bar .tag i{font-style:normal;background:var(--amber);color:#4a3200;border-radius:6px;padding:1px 8px;font-size:10.5px;font-weight:800;letter-spacing:.03em}
#bar .sp{flex:1}
#bar .roletoggle{display:flex;background:#0000002e;border-radius:8px;padding:2px;gap:2px}
#bar .roletoggle button{padding:5px 11px;border-radius:6px;font-size:12px;font-weight:700;color:#c2aca5}
#bar .roletoggle button.on{background:#fff;color:var(--ink)}
#bar .dbtn{background:transparent;border:1px solid #4a3a35;color:#d9c8c2;border-radius:8px;padding:5px 11px;font-size:12.5px;text-decoration:none}
#bar .dbtn:hover{background:#3a2b27}

#nav{position:sticky;top:32px;z-index:65;background:#fff;border-bottom:1px solid var(--line);padding:12px 18px}
#nav .inner{max-width:1180px;margin:0 auto;display:flex;align-items:center;gap:18px}
#nav .logo{font-weight:900;font-size:19px;color:var(--accent2);white-space:nowrap}
#nav .navlinks{display:flex;gap:4px}
#nav .navlinks button{padding:8px 12px;border-radius:8px;font-weight:700;font-size:13px;color:var(--ink2)}
#nav .navlinks button.on{background:var(--accentbg);color:var(--accent2)}
#nav .search{flex:1;position:relative;max-width:360px}
#nav .search input{width:100%;padding:9px 12px 9px 34px;border:1px solid var(--line);border-radius:99px;font-size:13px;background:var(--bg)}
#nav .search span{position:absolute;left:12px;top:50%;transform:translateY(-50%);font-size:13px;color:var(--mut)}
#nav .cartbtn{position:relative;background:var(--ink);color:#fff;border-radius:10px;padding:9px 16px;font-weight:700;font-size:13px}
#nav .cartbtn .n{position:absolute;top:-6px;right:-6px;background:var(--red);color:#fff;border-radius:99px;font-size:10.5px;padding:1px 6px;font-weight:800}

.wrap{max-width:1180px;margin:0 auto;padding:20px 18px 60px}

.hero{background:linear-gradient(120deg,var(--accent),#d18a6f);color:#fff;border-radius:18px;padding:32px 28px;margin-bottom:22px;position:relative;overflow:hidden}
.hero .k{font-size:11.5px;font-weight:800;letter-spacing:.06em;text-transform:uppercase;opacity:.85}
.hero h1{font-size:26px;margin:6px 0 6px}
.hero p{opacity:.92;font-size:13.5px;max-width:420px}
.hero .deco{position:absolute;right:-10px;bottom:-30px;font-size:110px;opacity:.18}

.filterbar{display:flex;justify-content:space-between;align-items:center;gap:10px;margin-bottom:14px;flex-wrap:wrap}
.tabs{display:flex;gap:6px;flex-wrap:wrap}
.tabs button{border:1px solid var(--line);background:var(--card);padding:8px 14px;border-radius:99px;font-weight:600;font-size:13px;color:var(--ink2)}
.tabs button.on{background:var(--ink);color:#fff;border-color:var(--ink)}
.sortsel{border:1px solid var(--line);border-radius:9px;padding:8px 10px;font-size:12.5px;background:#fff}

.pgrid{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:16px}
.pcard{background:var(--card);border:1px solid var(--line);border-radius:14px;overflow:hidden;text-align:left;cursor:pointer}
.pcard:hover{border-color:var(--accent)}
.pcard .imgbox{position:relative;background:var(--accentbg);height:130px;display:flex;align-items:center;justify-content:center;font-size:48px}
.pcard .disc{position:absolute;top:8px;left:8px;background:var(--red);color:#fff;font-size:10.5px;font-weight:800;padding:2px 8px;border-radius:6px}
.pcard .body{padding:12px}
.pcard .cat{font-size:10.5px;color:var(--mut);text-transform:uppercase;letter-spacing:.03em}
.pcard .nm{font-weight:700;font-size:13.5px;margin:3px 0 5px;min-height:34px}
.pcard .rate{font-size:11.5px;color:var(--mut);margin-bottom:6px}
.pcard .rate b{color:var(--star)}
.pcard .prices{display:flex;align-items:baseline;gap:6px;margin-bottom:10px}
.pcard .now{color:var(--accent2);font-weight:800;font-family:'Courier New',monospace;font-size:14px}
.pcard .was{color:var(--mut);text-decoration:line-through;font-size:11.5px}
.pcard .addbtn{width:100%;background:var(--accent);color:#fff;padding:9px;border-radius:9px;font-weight:700;font-size:12.5px}
.pcard .addbtn:hover{background:var(--accent2)}

.pdetail{display:grid;grid-template-columns:200px 1fr;gap:20px}
@media(max-width:520px){.pdetail{grid-template-columns:1fr}}
.pdetail .imgbox{background:var(--accentbg);border-radius:12px;height:180px;display:flex;align-items:center;justify-content:center;font-size:70px}
.sizepick{display:flex;gap:8px;flex-wrap:wrap;margin:10px 0}
.sizepick button{border:1px solid var(--line);background:#fff;border-radius:8px;padding:7px 13px;font-weight:700;font-size:12.5px}
.sizepick button.on{background:var(--ink);color:#fff;border-color:var(--ink)}
.qtypick{display:flex;align-items:center;gap:12px;margin:14px 0}
.qtypick button{width:30px;height:30px;border-radius:8px;border:1px solid var(--line);background:#fff;font-weight:700}
.qtypick .n{min-width:20px;text-align:center;font-family:'Courier New',monospace;font-weight:700}

#cartOverlay{position:fixed;inset:0;background:#2b222066;z-index:90;display:none}
#cartOverlay.open{display:block}
#cartDrawer{position:fixed;top:0;right:0;bottom:0;width:min(380px,92vw);background:#fff;z-index:95;transform:translateX(100%);transition:transform .25s ease;display:flex;flex-direction:column;box-shadow:-10px 0 30px #0002}
#cartDrawer.open{transform:translateX(0)}
#cartDrawer .dhead{padding:18px;border-bottom:1px solid var(--line);display:flex;justify-content:space-between;align-items:center}
#cartDrawer .dhead h3{font-size:16px}
#cartDrawer .dhead button{font-size:20px;color:var(--mut)}
#cartDrawer .dbody{flex:1;overflow-y:auto;padding:14px 18px}
#cartDrawer .dfoot{padding:16px 18px;border-top:1px solid var(--line)}
.citem{display:flex;gap:10px;padding:10px 0;border-bottom:1px solid #f1e8e4}
.citem .im{background:var(--accentbg);border-radius:9px;width:52px;height:52px;display:flex;align-items:center;justify-content:center;font-size:24px;flex-shrink:0}
.citem .info{flex:1}
.citem .nm{font-weight:700;font-size:13px}
.citem .var{font-size:11.5px;color:var(--mut)}
.qty{display:flex;align-items:center;gap:8px;margin-top:5px}
.qty button{width:22px;height:22px;border-radius:6px;border:1px solid var(--line);background:#fff;font-weight:700;line-height:1}
.qty .n{min-width:16px;text-align:center;font-family:'Courier New',monospace}
.citem .sub{font-family:'Courier New',monospace;font-weight:700;font-size:13px;white-space:nowrap}
.empty{color:var(--mut);font-size:13px;padding:30px 0;text-align:center}
.total{display:flex;justify-content:space-between;font-weight:800;font-family:'Courier New',monospace;font-size:16px;margin-bottom:12px}
.bigbtn{width:100%;background:var(--ink);color:#fff;padding:12px;border-radius:10px;font-weight:700;font-size:14px}
.bigbtn:hover{background:#000}
.bigbtn[disabled]{opacity:.4;pointer-events:none}

.steps{display:flex;gap:6px;margin-bottom:22px;flex-wrap:wrap}
.step{flex:1;min-width:80px;text-align:center;padding:8px 4px;border-radius:8px;font-size:11.5px;font-weight:700;color:var(--mut);background:var(--card);border:1px solid var(--line)}
.step.on{background:var(--accent);color:#fff;border-color:var(--accent)}
.step.done{background:var(--accentbg);color:var(--accent2);border-color:var(--accentbg)}
.card{background:var(--card);border:1px solid var(--line);border-radius:14px;padding:22px}
.field{margin-bottom:14px}
.field label{display:block;font-size:12.5px;font-weight:700;margin-bottom:5px;color:var(--ink2)}
.field input,.field textarea{width:100%;border:1px solid #ddd0cb;border-radius:9px;padding:10px 12px;font-size:14px}
.field textarea{min-height:60px;resize:vertical}
.radiobox{display:grid;gap:8px;margin-bottom:14px}
.radiobox label{display:flex;justify-content:space-between;align-items:center;border:1px solid var(--line);border-radius:10px;padding:11px 13px;font-size:13.5px;cursor:pointer}
.radiobox label span.pr{font-family:'Courier New',monospace;font-weight:700;color:var(--accent2)}
.sumrow{display:flex;justify-content:space-between;padding:8px 0;border-bottom:1px dashed var(--line);font-size:13.5px}
.navrow{display:flex;gap:10px;margin-top:18px}
.navrow button{padding:11px 20px;border-radius:9px;font-weight:700;font-size:13.5px;border:1px solid var(--line);background:#fff}
.navrow button.pr{background:var(--accent);color:#fff;border-color:var(--accent);margin-left:auto}
.navrow button.pr:hover{background:var(--accent2)}

.ticket{background:linear-gradient(135deg,var(--accent),var(--accent2));color:#fff;border-radius:16px;padding:28px;text-align:center;margin-bottom:16px}
.ticket .code{font-family:'Courier New',monospace;font-size:20px;font-weight:800;letter-spacing:1.5px;margin:8px 0}

.olist{display:grid;gap:14px}
.ocard{background:var(--card);border:1px solid var(--line);border-radius:14px;padding:18px}
.ocard .top{display:flex;justify-content:space-between;gap:10px;flex-wrap:wrap;margin-bottom:12px}
.ocard .code{font-weight:800;font-family:'Courier New',monospace}
.ocard .meta{font-size:12px;color:var(--mut)}
.oitems{font-size:13px;color:var(--ink2);margin-bottom:14px}
.ototal{font-weight:800;font-family:'Courier New',monospace;text-align:right;margin-top:8px}

/* Seller view */
.statrow{display:flex;gap:12px;margin-bottom:20px;flex-wrap:wrap}
.statcard{flex:1;min-width:150px;background:var(--card);border:1px solid var(--line);border-radius:12px;padding:14px 16px}
.statcard .k{font-size:11.5px;color:var(--mut);font-weight:700;text-transform:uppercase}
.statcard .v{font-size:20px;font-weight:800;font-family:'Courier New',monospace;margin-top:4px}
.sellertabs{display:flex;gap:6px;margin-bottom:16px;border-bottom:1px solid var(--line)}
.sellertabs button{padding:9px 4px;margin-right:18px;font-weight:700;font-size:13.5px;color:var(--mut);border-bottom:2px solid transparent}
.sellertabs button.on{color:var(--accent2);border-color:var(--accent)}
.advbtn{background:var(--ink);color:#fff;padding:8px 14px;border-radius:8px;font-weight:700;font-size:12.5px}
.advbtn:hover{background:#000}
.donebtn{background:var(--greenbg);color:var(--green);padding:8px 14px;border-radius:8px;font-weight:700;font-size:12.5px}
.prow{display:flex;align-items:center;gap:12px;background:var(--card);border:1px solid var(--line);border-radius:12px;padding:12px 16px;margin-bottom:10px}
.prow .im{background:var(--accentbg);border-radius:9px;width:44px;height:44px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0}
.prow .info{flex:1}
.prow .nm{font-weight:700;font-size:13.5px}
.prow .pr{font-size:12.5px;color:var(--mut);font-family:'Courier New',monospace}
.stockbadge{font-size:11px;font-weight:800;padding:3px 10px;border-radius:99px}
.stockbadge.on{background:var(--greenbg);color:var(--green)}
.stockbadge.off{background:var(--redbg);color:var(--red)}
.stocktoggle{background:#fff;border:1px solid var(--line);padding:7px 12px;border-radius:8px;font-weight:700;font-size:12px}
.outbadge{position:absolute;top:8px;right:8px;background:var(--ink);color:#fff;font-size:10px;font-weight:800;padding:2px 8px;border-radius:6px}

.tracker{display:flex;align-items:center;margin:10px 0}
.tstep{flex:1;text-align:center;position:relative}
.tstep .dot{width:26px;height:26px;border-radius:50%;background:#eee;color:var(--mut);display:flex;align-items:center;justify-content:center;margin:0 auto 6px;font-size:12px;font-weight:800;border:2px solid #eee}
.tstep.done .dot{background:var(--accent);border-color:var(--accent);color:#fff}
.tstep .lbl{font-size:10.5px;color:var(--mut);font-weight:700}
.tstep.done .lbl{color:var(--accent2)}
.tline{position:absolute;top:13px;left:-50%;width:100%;height:2px;background:#eee;z-index:-1}
.tstep.done .tline{background:var(--accent)}
.tstep:first-child .tline{display:none}

#toasts{position:fixed;right:16px;bottom:16px;z-index:200;display:grid;gap:8px}
.toast{background:var(--ink);color:#fff;padding:11px 16px;border-radius:10px;font-weight:600;font-size:13.5px;box-shadow:0 10px 30px #0004;border-left:4px solid var(--accent)}
.overlay{position:fixed;inset:0;background:#2b222099;z-index:100;display:grid;place-items:center;padding:16px;overflow-y:auto}
.modal{background:#fff;border-radius:16px;width:min(460px,100%);padding:24px;position:relative;box-shadow:0 30px 80px #0003;margin:auto}
.modal .x{position:absolute;right:14px;top:12px;width:32px;height:32px;border:0;background:#f4ece9;border-radius:50%;font-size:18px}
.modal h2{font-size:18px;margin-bottom:14px}
</style>
</head>
<body>

<div id="bar">
  <div class="tag"><i>DEMO</i> FTR-Coder — Sistem Toko Online</div>
  <div class="timer" id="timer"></div>
  <div class="sp"></div>
  <div class="roletoggle" id="roletoggle"></div>
  <button class="dbtn" onclick="resetDemo()">↺ Reset Demo</button>
  <a class="dbtn" href="/">← Kembali ke Website</a>
</div>

<div id="nav">
  <div class="inner">
    <div class="logo">Nara.</div>
    <div class="navlinks" id="navlinks"></div>
    <div class="search"><span>🔍</span><input id="searchInput" placeholder="Cari produk..." oninput="onSearch()"></div>
    <button class="cartbtn" onclick="openCart()">🛍️ Keranjang<span class="n" id="cartBadge">0</span></button>
  </div>
</div>

<div class="wrap" id="screen"></div>

<div id="cartOverlay" onclick="closeCart()"></div>
<div id="cartDrawer"></div>
<div id="modalRoot"></div>
<div id="toasts"></div>

<script>
const DEFAULT_PRODUCTS = [
  {id:1,cat:'Atasan',nm:'Blouse Linen Krem',pr:159000,was:189000,rt:4.8,sold:230,ic:'👚',sizes:['S','M','L']},
  {id:2,cat:'Atasan',nm:'Kemeja Kotak Unisex',pr:129000,was:null,rt:4.6,sold:180,ic:'👔',sizes:['S','M','L','XL']},
  {id:3,cat:'Atasan',nm:'Kaos Basic Oversize',pr:79000,was:99000,rt:4.7,sold:512,ic:'👕',sizes:['S','M','L','XL']},
  {id:4,cat:'Bawahan',nm:'Celana Kulot Katun',pr:139000,was:null,rt:4.5,sold:95,ic:'👖',sizes:['S','M','L']},
  {id:5,cat:'Bawahan',nm:'Rok Plisket Midi',pr:119000,was:145000,rt:4.9,sold:310,ic:'👗',sizes:['S','M','L']},
  {id:6,cat:'Sepatu',nm:'Sneakers Canvas Putih',pr:249000,was:null,rt:4.7,sold:420,ic:'👟',sizes:['39','40','41','42']},
  {id:7,cat:'Sepatu',nm:'Sandal Slide Polos',pr:99000,was:120000,rt:4.4,sold:150,ic:'🩴',sizes:['39','40','41']},
  {id:8,cat:'Aksesoris',nm:'Tote Bag Kanvas',pr:89000,was:null,rt:4.8,sold:680,ic:'👜',sizes:null},
  {id:9,cat:'Aksesoris',nm:'Topi Bucket Denim',pr:69000,was:null,rt:4.6,sold:290,ic:'🧢',sizes:null},
];
function getCats(){ return ['Semua', ...new Set(S.products.map(p=>p.cat))]; }
const SHIP = {reguler:{nm:'Reguler (2-3 hari)',pr:15000}, express:{nm:'Express (1 hari)',pr:35000}};

const LS_KEY = 'ftrcoder_demo_toko_v4';
let S = JSON.parse(localStorage.getItem(LS_KEY) || 'null') || {
  role:'pembeli', screen:'shop', sellerTab:'pesanan', cat:'Semua', sort:'rekomendasi', q:'',
  cart:[], orders:[], checkout:{step:1},
  products: DEFAULT_PRODUCTS.map(p => ({...p, aktif:true})),
  nextProductId: DEFAULT_PRODUCTS.length + 1,
};
function save(){ localStorage.setItem(LS_KEY, JSON.stringify(S)); }
function fmt(n){ return 'Rp ' + n.toLocaleString('id-ID'); }
function toast(msg){
  const el = document.createElement('div');
  el.className='toast'; el.textContent=msg;
  document.getElementById('toasts').appendChild(el);
  setTimeout(()=>el.remove(), 2600);
}

function renderNav(){
  document.getElementById('roletoggle').innerHTML = `
    <button class="${S.role==='pembeli'?'on':''}" onclick="setRole('pembeli')">🛍️ Pembeli</button>
    <button class="${S.role==='penjual'?'on':''}" onclick="setRole('penjual')">🧑‍💼 Penjual</button>`;

  if(S.role==='penjual'){
    document.getElementById('navlinks').innerHTML = `
      <button class="${S.sellerTab==='pesanan'?'on':''}" onclick="setSellerTab('pesanan')">Pesanan Masuk</button>
      <button class="${S.sellerTab==='produk'?'on':''}" onclick="setSellerTab('produk')">Produk</button>`;
    document.getElementById('nav').querySelector('.search').style.display='none';
    document.getElementById('nav').querySelector('.cartbtn').style.display='none';
    return;
  }
  document.getElementById('nav').querySelector('.search').style.display='';
  document.getElementById('nav').querySelector('.cartbtn').style.display='';
  document.getElementById('navlinks').innerHTML = `
    <button class="${S.screen==='shop'?'on':''}" onclick="goScreen('shop')">Belanja</button>
    <button class="${S.screen==='orders'?'on':''}" onclick="goScreen('orders')">Pesanan Saya</button>`;
  document.getElementById('cartBadge').textContent = S.cart.reduce((a,l)=>a+l.qty,0);
  document.getElementById('searchInput').value = S.q;
}
function setRole(r){ S.role=r; save(); renderNav(); renderScreen(); }
function setSellerTab(t){ S.sellerTab=t; save(); renderScreen(); }
function goScreen(sc){ S.screen=sc; if(sc==='shop') S.checkout={step:1}; save(); renderNav(); renderScreen(); }
function onSearch(){ S.q = document.getElementById('searchInput').value; save(); if(S.screen==='shop') renderScreen(); }

function renderScreen(){
  const el = document.getElementById('screen');
  if(S.role==='penjual'){
    el.innerHTML = S.sellerTab==='pesanan' ? sellerOrdersHtml() : sellerProductsHtml();
    return;
  }
  if(S.screen==='shop') el.innerHTML = shopHtml();
  if(S.screen==='checkout') el.innerHTML = checkoutHtml();
  if(S.screen==='orders') el.innerHTML = ordersHtml();
  if(S.screen==='shop'){ renderCatTabs(); renderGrid(); }
}

function shopHtml(){
  return `
    <div class="hero">
      <div class="k">Koleksi Terbaru</div>
      <h1>Gaya Kasual, Kualitas Maksimal</h1>
      <p>Diskon hingga 20% untuk item pilihan minggu ini. Gratis ongkir untuk pembelian tertentu.</p>
      <div class="deco">🛍️</div>
    </div>
    <div class="filterbar">
      <div class="tabs" id="catTabs"></div>
      <select class="sortsel" onchange="setSort(this.value)">
        <option value="rekomendasi" ${S.sort==='rekomendasi'?'selected':''}>Rekomendasi</option>
        <option value="termurah" ${S.sort==='termurah'?'selected':''}>Harga Termurah</option>
        <option value="termahal" ${S.sort==='termahal'?'selected':''}>Harga Termahal</option>
        <option value="terlaris" ${S.sort==='terlaris'?'selected':''}>Terlaris</option>
      </select>
    </div>
    <div class="pgrid" id="pgrid"></div>`;
}
function renderCatTabs(){
  document.getElementById('catTabs').innerHTML = getCats().map(c =>
    `<button class="${c===S.cat?'on':''}" onclick="setCat('${c}')">${c}</button>`).join('');
}
function setCat(c){ S.cat=c; save(); renderCatTabs(); renderGrid(); }
function setSort(v){ S.sort=v; save(); renderGrid(); }
function filteredProducts(){
  let list = S.cat==='Semua' ? [...S.products] : S.products.filter(p=>p.cat===S.cat);
  if(S.q) list = list.filter(p=>p.nm.toLowerCase().includes(S.q.toLowerCase()));
  if(S.sort==='termurah') list.sort((a,b)=>a.pr-b.pr);
  if(S.sort==='termahal') list.sort((a,b)=>b.pr-a.pr);
  if(S.sort==='terlaris') list.sort((a,b)=>b.sold-a.sold);
  return list;
}
function renderGrid(){
  const list = filteredProducts();
  document.getElementById('pgrid').innerHTML = list.length ? list.map(p => {
    const off = !p.aktif;
    return `
    <div class="pcard" style="position:relative" onclick="${off?'':'openDetail('+p.id+')'}">
      <div class="imgbox">${p.was && !off ? `<div class="disc">-${Math.round((1-p.pr/p.was)*100)}%</div>`:''}${off?'<div class="outbadge">Stok Habis</div>':''}${p.ic}</div>
      <div class="body">
        <div class="cat">${p.cat}</div>
        <div class="nm">${p.nm}</div>
        <div class="rate">⭐ <b>${p.rt}</b> · ${p.sold} terjual</div>
        <div class="prices"><span class="now">${fmt(p.pr)}</span>${p.was?`<span class="was">${fmt(p.was)}</span>`:''}</div>
        <button class="addbtn" ${off?'disabled':''} onclick="event.stopPropagation();quickAdd(${p.id})">${off?'Stok Habis':'+ Keranjang'}</button>
      </div>
    </div>`;
  }).join('') : '<div class="empty">Produk tidak ditemukan.</div>';
}
function quickAdd(id){
  const p = S.products.find(x=>x.id===id);
  if(p.sizes){ openDetail(id); return; }
  addToCart(p, null, 1);
}

let detailPick = {};
function openDetail(id){
  const p = S.products.find(x=>x.id===id);
  detailPick = {id, size: p.sizes ? p.sizes[0] : null, qty:1};
  renderDetailModal(p);
}
function renderDetailModal(p){
  document.getElementById('modalRoot').innerHTML = `
    <div class="overlay" onclick="if(event.target===this) closeModal()">
      <div class="modal">
        <button class="x" onclick="closeModal()">×</button>
        <div class="pdetail">
          <div class="imgbox">${p.ic}</div>
          <div>
            <div class="cat">${p.cat}</div>
            <h2 style="margin:2px 0 6px">${p.nm}</h2>
            <div class="rate">⭐ <b>${p.rt}</b> · ${p.sold} terjual</div>
            <div class="prices" style="margin-top:8px"><span class="now">${fmt(p.pr)}</span>${p.was?`<span class="was">${fmt(p.was)}</span>`:''}</div>
            ${p.sizes ? `<div class="mut" style="font-size:12px;font-weight:700;margin-top:10px">Pilih Ukuran</div>
            <div class="sizepick" id="sizepick">${p.sizes.map(s=>`<button class="${detailPick.size===s?'on':''}" onclick="pickSize('${s}')">${s}</button>`).join('')}</div>` : ''}
            <div class="qtypick">
              <button onclick="pickQty(-1)">−</button><span class="n" id="detailQty">${detailPick.qty}</span><button onclick="pickQty(1)">+</button>
            </div>
            <button class="bigbtn" onclick="addFromDetail(${p.id})">Tambah ke Keranjang</button>
          </div>
        </div>
      </div>
    </div>`;
}
function pickSize(s){ detailPick.size=s; renderDetailModal(S.products.find(x=>x.id===detailPick.id)); }
function pickQty(d){ detailPick.qty = Math.max(1, detailPick.qty+d); document.getElementById('detailQty').textContent = detailPick.qty; }
function addFromDetail(id){
  const p = S.products.find(x=>x.id===id);
  addToCart(p, detailPick.size, detailPick.qty);
  closeModal();
}

function addToCart(p, size, qty){
  const existing = S.cart.find(l=>l.id===p.id && l.size===size);
  if(existing) existing.qty += qty;
  else S.cart.push({id:p.id, nm:p.nm, ic:p.ic, pr:p.pr, size, qty});
  save(); renderNav(); toast(p.nm + ' ditambahkan ke keranjang');
}
function changeQty(idx,d){
  S.cart[idx].qty += d;
  if(S.cart[idx].qty<=0) S.cart.splice(idx,1);
  save(); renderNav(); renderCartDrawer();
}
function cartTotal(){ return S.cart.reduce((a,l)=>a+l.pr*l.qty,0); }

function openCart(){
  document.getElementById('cartOverlay').classList.add('open');
  document.getElementById('cartDrawer').classList.add('open');
  renderCartDrawer();
}
function closeCart(){
  document.getElementById('cartOverlay').classList.remove('open');
  document.getElementById('cartDrawer').classList.remove('open');
}
function renderCartDrawer(){
  document.getElementById('cartDrawer').innerHTML = `
    <div class="dhead"><h3>Keranjang (${S.cart.reduce((a,l)=>a+l.qty,0)})</h3><button onclick="closeCart()">×</button></div>
    <div class="dbody">
      ${S.cart.length ? S.cart.map((l,i)=>`
        <div class="citem">
          <div class="im">${l.ic}</div>
          <div class="info">
            <div class="nm">${l.nm}</div>
            <div class="var">${l.size?('Ukuran: '+l.size):'-'}</div>
            <div class="qty"><button onclick="changeQty(${i},-1)">−</button><span class="n">${l.qty}</span><button onclick="changeQty(${i},1)">+</button></div>
          </div>
          <div class="sub">${fmt(l.pr*l.qty)}</div>
        </div>`).join('') : '<div class="empty">Keranjang masih kosong.</div>'}
    </div>
    <div class="dfoot">
      <div class="total"><span>Subtotal</span><span>${fmt(cartTotal())}</span></div>
      <button class="bigbtn" ${S.cart.length?'':'disabled'} onclick="goCheckout()">Lanjut ke Checkout</button>
    </div>`;
}
function goCheckout(){
  closeCart();
  S.screen='checkout'; S.checkout={step:1}; save();
  renderNav(); renderScreen();
}

function checkoutHtml(){
  const labels = ['Keranjang','Pengiriman','Pembayaran','Konfirmasi'];
  if(S.checkout.step===5) return successHtml();
  const stepsHtml = labels.map((l,i)=>{
    const n=i+1; const cls = n===S.checkout.step?'on':(n<S.checkout.step?'done':'');
    return `<div class="step ${cls}">${n}. ${l}</div>`;
  }).join('');
  let body='';
  if(S.checkout.step===1) body = ckStepReview();
  if(S.checkout.step===2) body = ckStepShip();
  if(S.checkout.step===3) body = ckStepPay();
  if(S.checkout.step===4) body = ckStepConfirm();
  return `<div class="steps">${stepsHtml}</div><div class="card">${body}</div>`;
}
function ckStepReview(){
  return `
    ${S.cart.map((l,i)=>`
      <div class="citem">
        <div class="im">${l.ic}</div>
        <div class="info"><div class="nm">${l.nm}</div><div class="var">${l.size?('Ukuran: '+l.size):'-'}</div>
          <div class="qty"><button onclick="changeQty(${i},-1);renderScreen()">−</button><span class="n">${l.qty}</span><button onclick="changeQty(${i},1);renderScreen()">+</button></div>
        </div>
        <div class="sub">${fmt(l.pr*l.qty)}</div>
      </div>`).join('')}
    <div class="total" style="margin-top:14px"><span>Subtotal</span><span>${fmt(cartTotal())}</span></div>
    <div class="navrow">
      <button onclick="goScreen('shop')">← Lanjut Belanja</button>
      <button class="pr" ${S.cart.length?'':'disabled'} onclick="S.checkout.step=2;save();renderScreen()">Lanjut →</button>
    </div>`;
}
function ckStepShip(){
  const d = S.checkout.data || {};
  return `
    <div class="field"><label>Nama Penerima</label><input id="fNama" value="${d.nama||''}" placeholder="Nama lengkap"></div>
    <div class="field"><label>No. HP / WhatsApp</label><input id="fHp" value="${d.hp||''}" placeholder="08xxxxxxxxxx"></div>
    <div class="field"><label>Alamat Lengkap</label><textarea id="fAlamat" placeholder="Jalan, nomor rumah, kelurahan, kecamatan, kota">${d.alamat||''}</textarea></div>
    <div class="field"><label>Metode Pengiriman</label>
      <div class="radiobox">
        <label><input type="radio" name="ship" value="reguler" ${(!d.ship||d.ship==='reguler')?'checked':''}> ${SHIP.reguler.nm} <span class="pr">${fmt(SHIP.reguler.pr)}</span></label>
        <label><input type="radio" name="ship" value="express" ${d.ship==='express'?'checked':''}> ${SHIP.express.nm} <span class="pr">${fmt(SHIP.express.pr)}</span></label>
      </div>
    </div>
    <div class="navrow">
      <button onclick="S.checkout.step=1;save();renderScreen()">← Kembali</button>
      <button class="pr" onclick="saveShipAndNext()">Lanjut →</button>
    </div>`;
}
function saveShipAndNext(){
  const nama = document.getElementById('fNama').value.trim();
  const hp = document.getElementById('fHp').value.trim();
  const alamat = document.getElementById('fAlamat').value.trim();
  const ship = document.querySelector('input[name="ship"]:checked').value;
  if(!nama||!hp||!alamat){ toast('Lengkapi dulu data pengiriman'); return; }
  S.checkout.data = {...(S.checkout.data||{}), nama, hp, alamat, ship};
  S.checkout.step=3; save(); renderScreen();
}
function ckStepPay(){
  const d = S.checkout.data || {};
  return `
    <div class="field"><label>Metode Pembayaran</label>
      <div class="radiobox">
        <label><input type="radio" name="pay" value="Transfer Bank" ${(!d.pay||d.pay==='Transfer Bank')?'checked':''}> 🏦 Transfer Bank</label>
        <label><input type="radio" name="pay" value="E-Wallet" ${d.pay==='E-Wallet'?'checked':''}> 📱 E-Wallet (OVO/DANA/GoPay)</label>
        <label><input type="radio" name="pay" value="COD" ${d.pay==='COD'?'checked':''}> 💵 Bayar di Tempat (COD)</label>
      </div>
    </div>
    <div class="navrow">
      <button onclick="S.checkout.step=2;save();renderScreen()">← Kembali</button>
      <button class="pr" onclick="savePayAndNext()">Lanjut →</button>
    </div>`;
}
function savePayAndNext(){
  const pay = document.querySelector('input[name="pay"]:checked').value;
  S.checkout.data.pay = pay;
  S.checkout.step=4; save(); renderScreen();
}
function ckStepConfirm(){
  const d = S.checkout.data;
  const ongkir = SHIP[d.ship].pr;
  const total = cartTotal()+ongkir;
  return `
    <div class="sumrow"><span>Penerima</span><b>${d.nama}</b></div>
    <div class="sumrow"><span>Alamat</span><b style="text-align:right;max-width:220px">${d.alamat}</b></div>
    <div class="sumrow"><span>Pengiriman</span><b>${SHIP[d.ship].nm}</b></div>
    <div class="sumrow"><span>Pembayaran</span><b>${d.pay}</b></div>
    <div class="sumrow"><span>Subtotal</span><b>${fmt(cartTotal())}</b></div>
    <div class="sumrow"><span>Ongkir</span><b>${fmt(ongkir)}</b></div>
    <div class="total" style="margin-top:10px"><span>Total</span><span>${fmt(total)}</span></div>
    <div class="navrow">
      <button onclick="S.checkout.step=3;save();renderScreen()">← Kembali</button>
      <button class="pr" onclick="placeOrder()">✓ Buat Pesanan</button>
    </div>`;
}
function placeOrder(){
  const d = S.checkout.data;
  const ongkir = SHIP[d.ship].pr;
  const code = 'ORD' + Math.random().toString(36).slice(2,7).toUpperCase();
  S.orders.unshift({
    code, items:[...S.cart], subtotal:cartTotal(), ongkir, total:cartTotal()+ongkir,
    ...d, createdAt:new Date().toISOString(), stage:0,
  });
  S.cart = [];
  S.checkout.step = 5;
  save(); renderNav();
  toast('Pesanan berhasil dibuat!');
  renderScreen();
}
function successHtml(){
  const o = S.orders[0];
  return `
    <div class="ticket">
      <div style="font-size:30px">🎉</div>
      <p style="margin-top:6px;opacity:.9">Pesanan Berhasil Dibuat</p>
      <div class="code">${o.code}</div>
      <p style="opacity:.9">${fmt(o.total)} • ${o.pay}</p>
    </div>
    <div class="navrow" style="margin-top:0">
      <button onclick="goScreen('shop')">Lanjut Belanja</button>
      <button class="pr" onclick="goScreen('orders')">Lihat Pesanan Saya</button>
    </div>`;
}

const STAGES = [
  {k:'diproses', lbl:'Diproses'},
  {k:'dikemas', lbl:'Dikemas'},
  {k:'dikirim', lbl:'Dikirim'},
  {k:'selesai', lbl:'Selesai'},
];
function ordersHtml(){
  if(S.orders.length===0) return `<div class="card"><div class="empty">Belum ada pesanan.<br>Yuk mulai belanja dulu.</div></div>`;
  return `<div class="olist">${S.orders.map(o=>{
    const idx = o.stage||0;
    const tgl = new Date(o.createdAt).toLocaleString('id-ID',{dateStyle:'medium',timeStyle:'short'});
    return `
      <div class="ocard">
        <div class="top">
          <div><span class="code">${o.code}</span><div class="meta">${tgl} • ${o.nama}</div></div>
        </div>
        <div class="tracker">
          ${STAGES.map((s,i)=>`
            <div class="tstep ${i<=idx?'done':''}">
              <div class="tline"></div>
              <div class="dot">${i<=idx?'✓':i+1}</div>
              <div class="lbl">${s.lbl}</div>
            </div>`).join('')}
        </div>
        <div class="oitems">${o.items.map(l=>`${l.nm}${l.size?(' ('+l.size+')'):''} ×${l.qty}`).join(', ')}</div>
        <div class="ototal">${fmt(o.total)}</div>
      </div>`;
  }).join('')}</div>`;
}

/* ================= Sisi Penjual ================= */
function sellerOrdersHtml(){
  const pendapatan = S.orders.reduce((a,o)=>a+o.total,0);
  const aktif = S.orders.filter(o=>o.stage<3).length;
  const stats = `
    <div class="statrow">
      <div class="statcard"><div class="k">Total Pesanan</div><div class="v">${S.orders.length}</div></div>
      <div class="statcard"><div class="k">Perlu Diproses</div><div class="v">${aktif}</div></div>
      <div class="statcard"><div class="k">Pendapatan Demo</div><div class="v">${fmt(pendapatan)}</div></div>
    </div>`;
  if(S.orders.length===0) return stats + `<div class="card"><div class="empty">Belum ada pesanan masuk.<br>Coba pesan sesuatu dari sisi "🛍️ Pembeli" dulu.</div></div>`;

  const nextLabel = ['Tandai Dikemas','Tandai Dikirim','Tandai Selesai'];
  return stats + `<div class="olist">${S.orders.map((o,i)=>{
    const idx = o.stage||0;
    const tgl = new Date(o.createdAt).toLocaleString('id-ID',{dateStyle:'medium',timeStyle:'short'});
    return `
      <div class="ocard">
        <div class="top">
          <div><span class="code">${o.code}</span><div class="meta">${tgl} • ${o.nama} • ${o.hp}</div></div>
          ${idx<3 ? `<button class="advbtn" onclick="advanceStage(${i})">${nextLabel[idx]}</button>` : `<span class="donebtn">✓ Selesai</span>`}
        </div>
        <div class="tracker">
          ${STAGES.map((s,j)=>`
            <div class="tstep ${j<=idx?'done':''}">
              <div class="tline"></div>
              <div class="dot">${j<=idx?'✓':j+1}</div>
              <div class="lbl">${s.lbl}</div>
            </div>`).join('')}
        </div>
        <div class="oitems">${o.items.map(l=>`${l.nm}${l.size?(' ('+l.size+')'):''} ×${l.qty}`).join(', ')} — <span class="mut">kirim ke: ${o.alamat}</span></div>
        <div class="ototal">${fmt(o.total)}</div>
      </div>`;
  }).join('')}</div>`;
}
function advanceStage(i){
  S.orders[i].stage = Math.min(3, (S.orders[i].stage||0)+1);
  save(); renderScreen();
  toast(`Pesanan ${S.orders[i].code} ditandai "${STAGES[S.orders[i].stage].lbl}"`);
}
function sellerProductsHtml(){
  const rows = S.products.map(p=>`
      <div class="prow">
        <div class="im">${p.ic}</div>
        <div class="info">
          <div class="nm">${p.nm}</div>
          <div class="pr">${fmt(p.pr)}${p.was?` <span style="text-decoration:line-through">${fmt(p.was)}</span>`:''} • ${p.cat}${p.sizes&&p.sizes.length?' • Ukuran: '+p.sizes.join('/'):''}</div>
        </div>
        <span class="stockbadge ${p.aktif?'on':'off'}">${p.aktif?'Tersedia':'Stok Habis'}</span>
        <button class="stocktoggle" onclick="toggleStock(${p.id})">${p.aktif?'Tandai Habis':'Tandai Tersedia'}</button>
        <button class="stocktoggle" onclick="openProductForm(${p.id})">Edit</button>
        <button class="stocktoggle" style="color:var(--red);border-color:var(--red)" onclick="askDeleteProduct(${p.id})">Hapus</button>
      </div>`).join('');
  return `
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:14px">
      <div class="mut" style="font-size:13px">${S.products.length} produk</div>
      <button class="advbtn" onclick="openProductForm(null)">+ Tambah Produk</button>
    </div>
    <div class="card" style="padding:18px">${rows || '<div class="empty">Belum ada produk.</div>'}</div>`;
}
function toggleStock(id){
  const p = S.products.find(x=>x.id===id);
  p.aktif = !p.aktif;
  save(); renderScreen();
  toast('Status stok diperbarui');
}

/* ---- CRUD Produk ---- */
function openProductForm(id){
  const p = id ? S.products.find(x=>x.id===id) : {nm:'',cat:'',pr:'',was:'',ic:'🛍️',sizes:[],rt:4.5,sold:0,aktif:true};
  const isEdit = !!id;
  document.getElementById('modalRoot').innerHTML = `
    <div class="overlay" onclick="if(event.target===this) closeModal()">
      <div class="modal">
        <button class="x" onclick="closeModal()">×</button>
        <h2>${isEdit?'Edit Produk':'Tambah Produk Baru'}</h2>
        <div class="field"><label>Nama Produk</label><input id="pfNama" value="${p.nm}" placeholder="Contoh: Jaket Denim Oversize"></div>
        <div class="field"><label>Kategori</label><input id="pfKategori" value="${p.cat}" placeholder="Contoh: Atasan"></div>
        <div style="display:flex;gap:10px">
          <div class="field" style="flex:1"><label>Harga (Rp)</label><input id="pfHarga" type="number" value="${p.pr}" placeholder="150000"></div>
          <div class="field" style="flex:1"><label>Harga Coret (opsional)</label><input id="pfCoret" type="number" value="${p.was||''}" placeholder="180000"></div>
        </div>
        <div class="field"><label>Icon / Emoji</label><input id="pfIcon" value="${p.ic}" placeholder="👕" maxlength="4"></div>
        <div class="field"><label>Pilihan Ukuran (pisahkan koma, kosongkan jika tidak ada varian)</label><input id="pfSizes" value="${(p.sizes||[]).join(', ')}" placeholder="S, M, L, XL"></div>
        <button class="bigbtn" onclick="saveProduct(${id||'null'})">${isEdit?'Simpan Perubahan':'Tambah Produk'}</button>
      </div>
    </div>`;
}
function saveProduct(id){
  const nm = document.getElementById('pfNama').value.trim();
  const cat = document.getElementById('pfKategori').value.trim();
  const pr = parseInt(document.getElementById('pfHarga').value) || 0;
  const was = parseInt(document.getElementById('pfCoret').value) || null;
  const ic = document.getElementById('pfIcon').value.trim() || '🛍️';
  const sizesRaw = document.getElementById('pfSizes').value.trim();
  const sizes = sizesRaw ? sizesRaw.split(',').map(s=>s.trim()).filter(Boolean) : null;

  if(!nm || !cat || !pr){ toast('Lengkapi nama, kategori, dan harga dulu'); return; }

  if(id){
    const p = S.products.find(x=>x.id===id);
    Object.assign(p, {nm, cat, pr, was, ic, sizes});
    toast('Produk diperbarui');
  } else {
    S.products.push({id:S.nextProductId++, nm, cat, pr, was, ic, sizes, rt:4.5, sold:0, aktif:true});
    toast('Produk baru ditambahkan');
  }
  save(); closeModal(); renderScreen();
}
function askDeleteProduct(id){
  const p = S.products.find(x=>x.id===id);
  document.getElementById('modalRoot').innerHTML = `
    <div class="overlay" onclick="if(event.target===this) closeModal()">
      <div class="modal" style="text-align:center">
        <div style="font-size:34px;margin-bottom:8px">🗑️</div>
        <h2 style="margin-bottom:6px">Hapus "${p.nm}"?</h2>
        <p class="mut" style="font-size:13.5px;margin-bottom:20px">Produk ini akan dihapus dari katalog. Pesanan lama yang sudah ada tidak terpengaruh.</p>
        <div style="display:flex;gap:8px">
          <button style="flex:1;padding:10px;border-radius:8px;font-weight:700;border:1px solid var(--line);background:#fff" onclick="closeModal()">Batal</button>
          <button style="flex:1;padding:10px;border-radius:8px;font-weight:700;border:0;background:var(--red);color:#fff" onclick="doDeleteProduct(${id})">Ya, Hapus</button>
        </div>
      </div>
    </div>`;
}
function doDeleteProduct(id){
  S.products = S.products.filter(x=>x.id!==id);
  save(); closeModal(); renderScreen();
  toast('Produk dihapus');
}

function resetDemo(){
  document.getElementById('modalRoot').innerHTML = `
    <div class="overlay" onclick="if(event.target===this) closeModal()">
      <div class="modal" style="text-align:center">
        <div style="font-size:34px;margin-bottom:8px">🗑️</div>
        <h2 style="margin-bottom:6px">Reset Demo?</h2>
        <p class="mut" style="font-size:13.5px;margin-bottom:20px">Keranjang dan riwayat pesanan akan dihapus.</p>
        <div style="display:flex;gap:8px">
          <button style="flex:1;padding:10px;border-radius:8px;font-weight:700;border:1px solid var(--line);background:#fff" onclick="closeModal()">Batal</button>
          <button style="flex:1;padding:10px;border-radius:8px;font-weight:700;border:0;background:var(--red);color:#fff" onclick="confirmReset()">Ya, Reset</button>
        </div>
      </div>
    </div>`;
}
function confirmReset(){
  localStorage.removeItem(LS_KEY);
  S = {
    role:'pembeli', screen:'shop', sellerTab:'pesanan', cat:'Semua', sort:'rekomendasi', q:'',
    cart:[], orders:[], checkout:{step:1},
    products: DEFAULT_PRODUCTS.map(p => ({...p, aktif:true})),
    nextProductId: DEFAULT_PRODUCTS.length + 1,
  };
  document.getElementById('modalRoot').innerHTML='';
  renderNav(); renderScreen();
  toast('Demo direset ke kondisi awal');
}
function closeModal(){ document.getElementById('modalRoot').innerHTML=''; }

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
      <div class="modal" style="text-align:center">
        <div style="font-size:34px;margin-bottom:8px">⏰</div>
        <h2 style="margin-bottom:6px">Sesi Demo Berakhir</h2>
        <p class="mut" style="font-size:13.5px;margin-bottom:20px">Waktu demo kamu sudah habis. Muat ulang halaman untuk memulai sesi baru dengan token.</p>
        <button class="bigbtn" onclick="location.reload()">Muat Ulang Halaman</button>
      </div>
    </div>`;
}

renderNav(); renderScreen();
tickTimer(); setInterval(tickTimer, 1000);
</script>
</body>
</html>