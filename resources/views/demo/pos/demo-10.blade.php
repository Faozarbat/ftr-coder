@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Logam Mulia — POS Toko Emas & Perhiasan</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500&family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; -webkit-tap-highlight-color:transparent; }
body {
  font-family:'Inter',system-ui,sans-serif;
  background:#0f0f0f;
  color:#ede4c8;
  min-height:100vh;
  font-size:14px;
}

:root {
  --emas:#d4af37;
  --emas-tua:#a8862a;
  --emas-muda:#f4e4a8;
  --hitam:#0a0a0a;
  --hitam-2:#141414;
  --hitam-3:#1c1c1c;
  --line:#2a2a2a;
  --line-2:#3a3a3a;
  --marun:#8b1a1a;
  --marun-tua:#5c0f0f;
  --ink:#ede4c8;
  --ink-2:#a89a70;
  --ink-3:#6b6048;
}

.app {
  max-width:1560px;
  margin:0 auto;
  background:var(--hitam-2);
  min-height:100vh;
  display:flex;
  flex-direction:column;
}

/* ==================== HEADER ==================== */
.topbar {
  background:var(--hitam);
  padding:0 22px;
  height:70px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  border-bottom:2px solid var(--emas);
  position:sticky;
  top:0;
  z-index:50;
}
.brand { display:flex; align-items:center; gap:14px; }
.brand-mark {
  width:44px; height:44px;
  background:linear-gradient(135deg, var(--emas) 0%, var(--emas-tua) 100%);
  color:var(--hitam);
  display:flex; align-items:center; justify-content:center;
  border-radius:8px;
  font-size:1.2rem;
  font-weight:800;
  box-shadow:0 4px 12px -2px rgba(212,175,55,0.4);
}
.brand h1 {
  font-family:'Cormorant Garamond',serif;
  font-size:1.4rem;
  font-weight:700;
  letter-spacing:1px;
  line-height:1;
  color:var(--emas);
}
.brand h1 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.58rem;
  font-weight:500;
  color:var(--ink-2);
  letter-spacing:2.5px;
  text-transform:uppercase;
  margin-top:5px;
}

.topbar-right { display:flex; align-items:center; gap:12px; }
.harga-emas-badge {
  background:linear-gradient(135deg, #1c1c1c 0%, #242424 100%);
  border:1px solid var(--emas-tua);
  padding:8px 16px;
  border-radius:10px;
  display:flex;
  align-items:center;
  gap:12px;
}
.harga-emas-badge .icon {
  width:28px; height:28px;
  background:var(--emas);
  color:var(--hitam);
  border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  font-size:0.8rem;
  font-weight:800;
}
.harga-emas-badge .info { line-height:1.15; }
.harga-emas-badge .lbl {
  font-size:0.58rem;
  color:var(--ink-2);
  letter-spacing:1.5px;
  text-transform:uppercase;
  font-weight:600;
}
.harga-emas-badge .val {
  font-family:'JetBrains Mono',monospace;
  font-size:0.88rem;
  font-weight:700;
  color:var(--emas);
  margin-top:2px;
}
.mode-nav {
  display:flex;
  background:var(--hitam-3);
  padding:4px;
  border-radius:8px;
  gap:2px;
}
.mode-nav button {
  background:transparent;
  border:none;
  color:var(--ink-2);
  padding:8px 14px;
  border-radius:6px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.72rem;
  font-weight:600;
  display:flex; align-items:center; gap:6px;
  transition:all 0.15s;
}
.mode-nav button:hover { color:var(--emas); }
.mode-nav button.active {
  background:var(--emas);
  color:var(--hitam);
}
.user-badge {
  display:flex; align-items:center; gap:8px;
}
.user-badge .avatar {
  width:36px; height:36px;
  background:var(--marun);
  color:var(--emas-muda);
  border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  font-family:'Cormorant Garamond',serif;
  font-weight:700;
  font-size:1rem;
  border:2px solid var(--emas-tua);
}

/* ==================== PAGE ==================== */
.page { display:none; flex:1; }
.page.active { display:flex; flex-direction:column; }

/* ==================== KASIR 3 KOLOM ==================== */
.kasir-grid {
  display:grid;
  grid-template-columns:220px 1fr 400px;
  flex:1;
  min-height:0;
}

/* === KOLOM 1: KATEGORI === */
.col-kategori {
  background:var(--hitam);
  border-right:1px solid var(--line);
  padding:18px 0;
  overflow-y:auto;
}
.kat-title {
  padding:0 20px 12px;
  font-family:'Cormorant Garamond',serif;
  font-size:0.85rem;
  font-style:italic;
  color:var(--emas);
  letter-spacing:1px;
  border-bottom:1px solid var(--line);
  margin-bottom:10px;
}
.kat-btn {
  background:transparent;
  border:none;
  padding:13px 20px;
  cursor:pointer;
  text-align:left;
  font-family:'Inter',sans-serif;
  font-size:0.82rem;
  font-weight:500;
  color:var(--ink-2);
  display:flex;
  align-items:center;
  gap:12px;
  transition:all 0.12s;
  border-left:3px solid transparent;
  width:100%;
}
.kat-btn:hover {
  background:var(--hitam-3);
  color:var(--emas-muda);
}
.kat-btn.active {
  background:var(--hitam-3);
  color:var(--emas);
  font-weight:700;
  border-left-color:var(--emas);
}
.kat-btn i {
  width:20px;
  text-align:center;
  font-size:0.9rem;
}
.kat-btn.active i { color:var(--emas); }

/* Info kadar */
.kadar-info {
  margin:16px 20px;
  padding:14px 16px;
  background:linear-gradient(135deg, #1c1410 0%, #1c1c1c 100%);
  border:1px solid var(--emas-tua);
  border-radius:10px;
}
.kadar-info h4 {
  font-family:'Cormorant Garamond',serif;
  font-size:0.9rem;
  color:var(--emas);
  margin-bottom:8px;
}
.kadar-row {
  display:flex;
  justify-content:space-between;
  font-size:0.72rem;
  padding:4px 0;
  color:var(--ink-2);
}
.kadar-row strong {
  color:var(--emas-muda);
  font-family:'JetBrains Mono',monospace;
  font-size:0.76rem;
}

/* === KOLOM 2: PRODUK === */
.col-produk {
  padding:22px 26px;
  overflow-y:auto;
  min-height:0;
}
.produk-head {
  display:flex;
  justify-content:space-between;
  align-items:flex-end;
  margin-bottom:18px;
  flex-wrap:wrap;
  gap:12px;
}
.produk-head h2 {
  font-family:'Cormorant Garamond',serif;
  font-size:1.8rem;
  font-weight:700;
  color:var(--emas);
  letter-spacing:0.5px;
  line-height:1.1;
}
.produk-head h2 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.68rem;
  font-weight:500;
  color:var(--ink-2);
  letter-spacing:1.5px;
  text-transform:uppercase;
  margin-top:6px;
}
.search-box {
  display:flex;
  align-items:center;
  background:var(--hitam-3);
  border:1px solid var(--line-2);
  border-radius:10px;
  padding:0 14px;
  min-width:220px;
}
.search-box i { color:var(--ink-3); font-size:0.85rem; }
.search-box input {
  border:none; outline:none;
  padding:10px 10px;
  font-size:0.86rem;
  width:100%;
  background:transparent;
  color:var(--emas-muda);
  font-family:'Inter',sans-serif;
}
.search-box input::placeholder { color:var(--ink-3); }

.produk-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(200px,1fr));
  gap:14px;
}

/* Kartu perhiasan */
.produk-card {
  background:linear-gradient(180deg, #1c1c1c 0%, #141414 100%);
  border:1px solid var(--line-2);
  border-radius:12px;
  padding:16px 14px;
  cursor:pointer;
  transition:all 0.2s;
  display:flex;
  flex-direction:column;
  gap:10px;
  position:relative;
  overflow:hidden;
}
.produk-card::before {
  content:'';
  position:absolute;
  top:0; left:0; right:0;
  height:2px;
  background:linear-gradient(90deg, transparent, var(--emas), transparent);
  opacity:0;
  transition:opacity 0.2s;
}
.produk-card:hover {
  border-color:var(--emas);
  transform:translateY(-3px);
  box-shadow:0 12px 24px -10px rgba(212,175,55,0.3);
}
.produk-card:hover::before { opacity:1; }
.produk-card.out {
  opacity:0.4;
  cursor:not-allowed;
}
.produk-card.out:hover {
  transform:none;
  border-color:var(--line-2);
  box-shadow:none;
}

.produk-card .p-icon {
  width:56px; height:56px;
  background:linear-gradient(135deg, var(--emas) 0%, var(--emas-tua) 100%);
  color:var(--hitam);
  display:flex; align-items:center; justify-content:center;
  border-radius:12px;
  font-size:1.5rem;
  box-shadow:0 4px 10px -3px rgba(212,175,55,0.5);
}
.produk-card .p-kode {
  font-family:'JetBrains Mono',monospace;
  font-size:0.66rem;
  color:var(--ink-3);
  letter-spacing:1px;
}
.produk-card h3 {
  font-family:'Cormorant Garamond',serif;
  font-size:1.05rem;
  font-weight:600;
  color:var(--emas-muda);
  line-height:1.2;
  margin-bottom:2px;
}
.produk-card .p-kadar {
  display:inline-flex;
  align-items:center;
  gap:4px;
  font-size:0.65rem;
  background:rgba(212,175,55,0.12);
  color:var(--emas);
  padding:3px 9px;
  border-radius:10px;
  font-weight:700;
  letter-spacing:0.5px;
  width:fit-content;
  border:1px solid rgba(212,175,55,0.3);
}
.produk-card .p-berat {
  font-family:'JetBrains Mono',monospace;
  font-size:0.82rem;
  font-weight:700;
  color:var(--emas);
}
.produk-card .p-berat small {
  font-family:'Inter',sans-serif;
  font-size:0.68rem;
  color:var(--ink-2);
  font-weight:500;
  margin-left:4px;
}
.produk-card .p-harga {
  font-family:'JetBrains Mono',monospace;
  font-size:1rem;
  font-weight:700;
  color:var(--emas);
  padding-top:8px;
  border-top:1px dashed var(--line);
}
.produk-card .p-harga small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.62rem;
  color:var(--ink-3);
  font-weight:500;
  margin-top:2px;
  letter-spacing:0.3px;
}
.produk-card .p-stok {
  position:absolute;
  top:12px; right:12px;
  font-size:0.6rem;
  background:var(--hitam-3);
  color:var(--ink-2);
  padding:3px 8px;
  border-radius:10px;
  font-weight:600;
  letter-spacing:0.5px;
}
.produk-card .p-stok.low { background:var(--marun-tua); color:var(--emas-muda); }
.produk-card .p-stok.out { background:#2a0a0a; color:#d47575; }

/* === KOLOM 3: KERANJANG === */
.col-keranjang {
  background:var(--hitam);
  border-left:1px solid var(--emas-tua);
  display:flex;
  flex-direction:column;
  min-height:0;
}
.keranjang-head {
  background:linear-gradient(135deg, var(--marun-tua) 0%, var(--marun) 100%);
  padding:16px 22px;
  border-bottom:2px solid var(--emas);
}
.keranjang-head .info h3 {
  font-family:'Cormorant Garamond',serif;
  font-size:1.15rem;
  font-weight:700;
  color:var(--emas-muda);
  display:flex;
  align-items:center;
  gap:10px;
}
.keranjang-head .info h3 i { color:var(--emas); }
.keranjang-head .info .meta {
  font-size:0.7rem;
  color:rgba(244,228,168,0.7);
  margin-top:4px;
  letter-spacing:0.5px;
  display:flex;
  justify-content:space-between;
}
.keranjang-head .info .meta span { font-family:'JetBrains Mono',monospace; }

.keranjang-body {
  flex:1;
  overflow-y:auto;
  padding:14px 18px;
  min-height:0;
}
.keranjang-empty {
  text-align:center;
  padding:60px 20px;
  color:var(--ink-3);
}
.keranjang-empty i {
  font-size:2.5rem;
  display:block;
  margin-bottom:14px;
  color:var(--line-2);
}
.keranjang-empty strong {
  display:block;
  color:var(--ink-2);
  font-size:0.88rem;
  margin-bottom:4px;
  font-family:'Cormorant Garamond',serif;
  font-style:italic;
  font-size:1rem;
}

/* Mode selector di keranjang */
.mode-selector {
  display:grid;
  grid-template-columns:1fr 1fr 1fr;
  gap:6px;
  padding:12px 18px;
  background:var(--hitam-3);
  border-bottom:1px solid var(--line);
}
.mode-btn {
  background:transparent;
  border:1.5px solid var(--line-2);
  padding:10px 6px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.68rem;
  font-weight:700;
  color:var(--ink-2);
  letter-spacing:0.5px;
  text-transform:uppercase;
  display:flex;
  flex-direction:column;
  align-items:center;
  gap:4px;
  transition:all 0.15s;
}
.mode-btn i { font-size:0.9rem; }
.mode-btn:hover { border-color:var(--emas-tua); color:var(--emas); }
.mode-btn.active.jual {
  background:var(--emas);
  border-color:var(--emas);
  color:var(--hitam);
}
.mode-btn.active.buyback {
  background:var(--marun);
  border-color:var(--marun);
  color:var(--emas-muda);
}
.mode-btn.active.tukar {
  background:#3a2f0a;
  border-color:var(--emas);
  color:var(--emas);
}

/* Item keranjang */
.krj-item {
  padding:14px 0;
  border-bottom:1px dashed var(--line);
}
.krj-item:last-child { border-bottom:none; }
.krj-item.buyback {
  background:rgba(139,26,26,0.12);
  margin:0 -8px;
  padding:14px 8px;
  border-radius:8px;
  border-bottom:none;
  border-left:3px solid var(--marun);
}
.krj-top {
  display:flex;
  justify-content:space-between;
  gap:10px;
  margin-bottom:6px;
}
.krj-nama {
  font-family:'Cormorant Garamond',serif;
  font-size:1rem;
  font-weight:600;
  color:var(--emas-muda);
  line-height:1.2;
}
.krj-harga {
  font-family:'JetBrains Mono',monospace;
  font-weight:700;
  color:var(--emas);
  white-space:nowrap;
  font-size:0.9rem;
}
.krj-item.buyback .krj-harga { color:#d47575; }
.krj-detail {
  font-size:0.72rem;
  color:var(--ink-2);
  margin-bottom:8px;
  font-family:'JetBrains Mono',monospace;
  line-height:1.5;
}
.krj-detail span { color:var(--emas-tua); }
.krj-detail strong { color:var(--emas); font-weight:600; }
.krj-actions {
  display:flex;
  justify-content:space-between;
  align-items:center;
}
.krj-qty {
  display:flex; align-items:center; gap:0;
  border:1px solid var(--line-2);
  border-radius:6px;
  overflow:hidden;
}
.krj-qty button {
  background:var(--hitam-3);
  border:none;
  width:28px; height:28px;
  color:var(--emas);
  cursor:pointer;
  font-size:0.75rem;
  font-weight:700;
}
.krj-qty button:hover { background:var(--emas); color:var(--hitam); }
.krj-qty span {
  padding:0 12px;
  font-family:'JetBrains Mono',monospace;
  font-size:0.82rem;
  font-weight:700;
  min-width:32px;
  text-align:center;
  line-height:28px;
  color:var(--emas-muda);
}
.krj-del {
  background:transparent;
  border:none;
  color:var(--ink-3);
  cursor:pointer;
  font-size:0.72rem;
  padding:4px 8px;
}
.krj-del:hover { color:#d47575; }

/* Total keranjang */
.keranjang-foot {
  background:var(--hitam-3);
  border-top:2px solid var(--emas);
  padding:16px 20px;
}
.kf-row {
  display:flex;
  justify-content:space-between;
  font-size:0.8rem;
  color:var(--ink-2);
  margin-bottom:7px;
}
.kf-row.buyback { color:#d47575; }
.kf-row.total {
  font-family:'Cormorant Garamond',serif;
  font-size:1.5rem;
  font-weight:700;
  color:var(--emas);
  padding-top:12px;
  margin-top:10px;
  border-top:1px dashed var(--line-2);
  margin-bottom:14px;
  letter-spacing:0.5px;
}
.kf-row.total.negative { color:#d47575; }

.btn-proses {
  width:100%;
  background:linear-gradient(135deg, var(--emas) 0%, var(--emas-tua) 100%);
  color:var(--hitam);
  border:none;
  padding:15px;
  border-radius:10px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.95rem;
  font-weight:800;
  letter-spacing:1px;
  text-transform:uppercase;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:10px;
  transition:all 0.15s;
  box-shadow:0 4px 12px -3px rgba(212,175,55,0.4);
}
.btn-proses:hover { box-shadow:0 6px 20px -4px rgba(212,175,55,0.7); }
.btn-proses:disabled {
  background:#3a3a3a;
  color:var(--ink-3);
  cursor:not-allowed;
  box-shadow:none;
}

/* ==================== MODAL ==================== */
.modal-bg {
  position:fixed;
  inset:0;
  background:rgba(0,0,0,0.85);
  backdrop-filter:blur(4px);
  display:none;
  align-items:center;
  justify-content:center;
  z-index:100;
  padding:16px;
}
.modal-bg.show { display:flex; }
.modal {
  background:linear-gradient(180deg, #1a1a1a 0%, #0f0f0f 100%);
  border:1px solid var(--emas-tua);
  border-radius:16px;
  width:100%;
  max-width:520px;
  max-height:92vh;
  overflow-y:auto;
  box-shadow:0 25px 60px -15px rgba(212,175,55,0.2);
}
.modal-head {
  padding:24px 26px 18px;
  border-bottom:1px solid var(--line);
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
}
.modal-head .kicker {
  font-size:0.62rem;
  letter-spacing:2.5px;
  color:var(--emas);
  text-transform:uppercase;
  font-weight:700;
  margin-bottom:6px;
}
.modal-head h3 {
  font-family:'Cormorant Garamond',serif;
  font-size:1.4rem;
  font-weight:700;
  color:var(--emas-muda);
  display:flex; align-items:center; gap:10px;
  padding-right:30px;
}
.modal-head h3 i { color:var(--emas); }
.modal-head .sub {
  font-size:0.78rem;
  color:var(--ink-2);
  margin-top:5px;
}
.modal-close {
  background:transparent;
  border:1px solid var(--line-2);
  width:34px; height:34px;
  border-radius:50%;
  color:var(--ink-2);
  cursor:pointer;
  transition:all 0.15s;
}
.modal-close:hover {
  background:var(--marun);
  color:var(--emas-muda);
  border-color:var(--marun);
}
.modal-body { padding:22px 26px; }
.modal-foot {
  padding:18px 26px 22px;
  border-top:1px solid var(--line);
  background:var(--hitam);
  display:flex;
  gap:10px;
  border-radius:0 0 16px 16px;
}
.btn-outline {
  background:transparent;
  border:1px solid var(--line-2);
  color:var(--ink-2);
  padding:13px 20px;
  border-radius:9px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.82rem;
  font-weight:600;
  display:flex; align-items:center; gap:8px; justify-content:center;
  transition:all 0.15s;
}
.btn-outline:hover {
  border-color:var(--emas);
  color:var(--emas);
}
.btn-solid {
  background:var(--emas);
  border:none;
  color:var(--hitam);
  padding:13px 20px;
  border-radius:9px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.85rem;
  font-weight:800;
  letter-spacing:0.5px;
  display:flex; align-items:center; gap:8px; justify-content:center;
  flex:2;
  transition:all 0.15s;
}
.btn-solid:hover { background:var(--emas-muda); }
.modal-foot .btn-outline { flex:1; }

/* ==================== FORM ELEMENTS ==================== */
.field {
  margin-bottom:16px;
}
.field label {
  display:block;
  font-size:0.7rem;
  font-weight:700;
  color:var(--emas);
  text-transform:uppercase;
  letter-spacing:1px;
  margin-bottom:7px;
}
.field input,
.field select,
.field textarea {
  width:100%;
  padding:13px 15px;
  background:var(--hitam);
  border:1px solid var(--line-2);
  border-radius:9px;
  outline:none;
  font-family:'JetBrains Mono',monospace;
  font-size:0.92rem;
  font-weight:600;
  color:var(--emas-muda);
  letter-spacing:0.3px;
  transition:border-color 0.15s;
}
.field input:focus,
.field select:focus,
.field textarea:focus {
  border-color:var(--emas);
  box-shadow:0 0 0 3px rgba(212,175,55,0.1);
}
.field input::placeholder {
  color:var(--ink-3);
  font-family:'Inter',sans-serif;
  font-weight:400;
  letter-spacing:0;
}
.field select option { background:var(--hitam); color:var(--emas-muda); }
.field textarea {
  font-family:'Inter',sans-serif;
  font-weight:400;
  resize:vertical;
  min-height:70px;
}

/* Kalkulator rincian harga */
.kalkulator-box {
  background:linear-gradient(135deg, #1a1a1a 0%, #0f0f0f 100%);
  border:1px solid var(--emas-tua);
  border-radius:12px;
  padding:18px 20px;
  margin-bottom:16px;
}
.kalkulator-box h4 {
  font-family:'Cormorant Garamond',serif;
  font-size:1rem;
  color:var(--emas);
  margin-bottom:14px;
  padding-bottom:10px;
  border-bottom:1px dashed var(--line-2);
  display:flex;
  align-items:center;
  gap:8px;
}
.kalkulator-box h4 i { font-size:0.9rem; }
.kal-row {
  display:flex;
  justify-content:space-between;
  align-items:baseline;
  padding:7px 0;
  font-size:0.8rem;
  color:var(--ink-2);
}
.kal-row .lbl {
  display:flex;
  align-items:center;
  gap:6px;
}
.kal-row .lbl small {
  color:var(--ink-3);
  font-size:0.68rem;
}
.kal-row .val {
  font-family:'JetBrains Mono',monospace;
  font-weight:600;
  color:var(--emas-muda);
}
.kal-row.buyback .val { color:#d47575; }
.kal-row.total {
  padding-top:12px;
  margin-top:8px;
  border-top:1px dashed var(--line-2);
  font-size:1.05rem;
  font-weight:700;
}
.kal-row.total .lbl { color:var(--emas-muda); font-family:'Cormorant Garamond',serif; font-size:1rem; }
.kal-row.total .val {
  color:var(--emas);
  font-size:1.2rem;
  font-weight:700;
}

/* Grid kadar di modal */
.kadar-grid {
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:8px;
  margin-top:6px;
}
.kadar-opt {
  background:var(--hitam);
  border:1.5px solid var(--line-2);
  padding:12px 8px;
  border-radius:9px;
  cursor:pointer;
  text-align:center;
  transition:all 0.15s;
}
.kadar-opt:hover { border-color:var(--emas-tua); }
.kadar-opt.selected {
  background:rgba(212,175,55,0.12);
  border-color:var(--emas);
}
.kadar-opt .kode {
  font-family:'Cormorant Garamond',serif;
  font-size:1.1rem;
  font-weight:700;
  color:var(--emas-muda);
  margin-bottom:3px;
}
.kadar-opt.selected .kode { color:var(--emas); }
.kadar-opt .persen {
  font-size:0.65rem;
  color:var(--ink-2);
  font-weight:600;
}

/* ==================== STRUK / SERTIFIKAT ==================== */
.sertifikat {
  background:linear-gradient(135deg, #fefdf8 0%, #f5eed4 100%);
  border:3px double var(--emas-tua);
  border-radius:8px;
  padding:24px 22px;
  font-family:'Inter',sans-serif;
  font-size:0.78rem;
  color:#2a1a0a;
  line-height:1.6;
  position:relative;
}
.sertifikat::before {
  content:'';
  position:absolute;
  top:6px; left:6px; right:6px; bottom:6px;
  border:1px solid var(--emas-tua);
  border-radius:4px;
  pointer-events:none;
  opacity:0.4;
}
.ser-head {
  text-align:center;
  padding-bottom:14px;
  border-bottom:2px solid var(--emas-tua);
  margin-bottom:14px;
  position:relative;
}
.ser-head .logo {
  font-family:'Cormorant Garamond',serif;
  font-size:1.4rem;
  font-weight:700;
  color:#8b6a1a;
  letter-spacing:3px;
  margin-bottom:4px;
}
.ser-head .sub {
  font-size:0.7rem;
  color:#6b4d1a;
  letter-spacing:2px;
  text-transform:uppercase;
  font-weight:600;
}
.ser-head .nomor {
  display:inline-block;
  background:var(--emas-tua);
  color:#fff;
  font-family:'JetBrains Mono',monospace;
  font-size:0.72rem;
  font-weight:700;
  padding:4px 14px;
  border-radius:10px;
  margin-top:8px;
  letter-spacing:1.5px;
}
.ser-meta {
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:8px 16px;
  padding:12px 14px;
  background:rgba(212,175,55,0.12);
  border-radius:6px;
  margin-bottom:14px;
  font-size:0.72rem;
}
.ser-meta .item {
  display:flex;
  gap:6px;
}
.ser-meta .lbl {
  color:#8b6a1a;
  font-weight:600;
  min-width:70px;
  font-size:0.68rem;
  text-transform:uppercase;
  letter-spacing:0.5px;
}
.ser-meta .val {
  color:#2a1a0a;
  font-weight:700;
  font-family:'JetBrains Mono',monospace;
  font-size:0.74rem;
}
.ser-table {
  width:100%;
  border-collapse:collapse;
  margin-bottom:14px;
  font-size:0.75rem;
}
.ser-table th {
  text-align:left;
  padding:7px 6px;
  font-size:0.66rem;
  color:#8b6a1a;
  text-transform:uppercase;
  letter-spacing:0.5px;
  border-bottom:1.5px solid var(--emas-tua);
  font-weight:700;
}
.ser-table th.r { text-align:right; }
.ser-table td {
  padding:9px 6px;
  border-bottom:1px solid rgba(212,175,55,0.25);
  color:#2a1a0a;
}
.ser-table td.r { text-align:right; font-weight:700; font-family:'JetBrains Mono',monospace; color:#8b6a1a; }
.ser-table .item-name {
  font-family:'Cormorant Garamond',serif;
  font-size:0.88rem;
  font-weight:600;
}
.ser-table .item-detail {
  font-size:0.68rem;
  color:#6b4d1a;
  margin-top:2px;
  font-family:'JetBrains Mono',monospace;
}
.ser-total {
  padding:12px 0 0;
  border-top:2px solid var(--emas-tua);
}
.ser-total .row {
  display:flex;
  justify-content:space-between;
  font-size:0.78rem;
  margin-bottom:5px;
  color:#6b4d1a;
}
.ser-total .row.grand {
  font-family:'Cormorant Garamond',serif;
  font-size:1.35rem;
  font-weight:700;
  color:#8b6a1a;
  padding-top:10px;
  margin-top:8px;
  border-top:1px dashed var(--emas-tua);
}
.ser-foot {
  text-align:center;
  padding-top:16px;
  margin-top:16px;
  border-top:1px dashed var(--emas-tua);
  font-size:0.7rem;
  color:#6b4d1a;
  line-height:1.7;
}
.ser-foot .garansi {
  font-family:'Cormorant Garamond',serif;
  font-style:italic;
  font-size:0.88rem;
  color:#8b6a1a;
  margin-bottom:6px;
}
.ser-qr {
  width:70px; height:70px;
  background:#2a1a0a;
  margin:10px auto 4px;
  display:flex;
  align-items:center;
  justify-content:center;
  color:var(--emas);
  font-size:2rem;
  border-radius:6px;
}

/* ==================== ADMIN ==================== */
.admin-wrap {
  padding:22px 26px;
  flex:1;
  overflow-y:auto;
}
.admin-head {
  display:flex;
  justify-content:space-between;
  align-items:flex-end;
  flex-wrap:wrap;
  gap:14px;
  margin-bottom:22px;
  padding-bottom:18px;
  border-bottom:2px solid var(--emas);
}
.admin-head h2 {
  font-family:'Cormorant Garamond',serif;
  font-size:1.5rem;
  font-weight:700;
  color:var(--emas);
  letter-spacing:0.5px;
}
.admin-head h2 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.7rem;
  font-weight:500;
  color:var(--ink-2);
  letter-spacing:1.5px;
  text-transform:uppercase;
  margin-top:6px;
}
.admin-actions { display:flex; gap:10px; }

.harga-emas-editor {
  background:linear-gradient(135deg, #1c1410 0%, #1a1a1a 100%);
  border:2px solid var(--emas-tua);
  border-radius:14px;
  padding:20px 24px;
  margin-bottom:20px;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
  gap:20px;
  align-items:end;
}
.harga-emas-editor .field { margin-bottom:0; }
.harga-emas-editor .field label {
  color:var(--emas);
  font-size:0.68rem;
}
.harga-emas-editor .field input {
  font-size:1.1rem;
  font-weight:700;
  padding:14px 16px;
}
.harga-emas-editor .info-box {
  grid-column:1/-1;
  font-size:0.72rem;
  color:var(--ink-2);
  padding-top:12px;
  border-top:1px dashed var(--line-2);
  line-height:1.6;
}
.harga-emas-editor .info-box strong { color:var(--emas); }

.stats-row {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:12px;
  margin-bottom:20px;
}
.stat-card {
  background:linear-gradient(180deg, #1c1c1c 0%, #141414 100%);
  border:1px solid var(--line-2);
  border-radius:12px;
  padding:16px 18px;
  position:relative;
  overflow:hidden;
}
.stat-card::before {
  content:'';
  position:absolute;
  top:0; left:0;
  width:3px; height:100%;
  background:var(--emas);
}
.stat-card.marun::before { background:var(--marun); }
.stat-card .lbl {
  font-size:0.66rem;
  color:var(--ink-2);
  text-transform:uppercase;
  letter-spacing:1.2px;
  font-weight:600;
  margin-bottom:8px;
}
.stat-card .val {
  font-family:'JetBrains Mono',monospace;
  font-size:1.3rem;
  font-weight:700;
  color:var(--emas);
  line-height:1;
}
.stat-card.marun .val { color:#d47575; }
.stat-card .sub {
  font-size:0.66rem;
  color:var(--ink-3);
  margin-top:5px;
}

.admin-section {
  background:linear-gradient(180deg, #1a1a1a 0%, #141414 100%);
  border:1px solid var(--line-2);
  border-radius:12px;
  overflow:hidden;
  margin-bottom:18px;
}
.section-head {
  padding:14px 20px;
  background:var(--hitam);
  border-bottom:1px solid var(--line-2);
  display:flex;
  align-items:center;
  gap:10px;
  font-family:'Cormorant Garamond',serif;
  font-size:1rem;
  font-weight:600;
  color:var(--emas);
  letter-spacing:0.5px;
}
.section-head i { font-size:0.9rem; }
.section-head .spacer { flex:1; }
.section-head .hint {
  font-family:'Inter',sans-serif;
  font-size:0.7rem;
  color:var(--ink-2);
  letter-spacing:0;
}

.stok-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
  gap:12px;
  padding:18px 20px;
}
.stok-card {
  background:var(--hitam);
  border:1px solid var(--line-2);
  border-radius:10px;
  padding:14px 16px;
}
.stok-card .kode {
  font-family:'JetBrains Mono',monospace;
  font-size:0.66rem;
  color:var(--ink-3);
  margin-bottom:5px;
}
.stok-card .nama {
  font-family:'Cormorant Garamond',serif;
  font-size:1rem;
  font-weight:600;
  color:var(--emas-muda);
  margin-bottom:8px;
}
.stok-card .row {
  display:flex;
  justify-content:space-between;
  font-size:0.74rem;
  color:var(--ink-2);
  margin-bottom:4px;
}
.stok-card .row .val {
  font-family:'JetBrains Mono',monospace;
  font-weight:600;
  color:var(--emas);
}
.stok-card .harga-row {
  padding-top:8px;
  margin-top:8px;
  border-top:1px dashed var(--line-2);
  font-family:'JetBrains Mono',monospace;
  font-weight:700;
  color:var(--emas);
  font-size:0.9rem;
}

/* ==================== STRUK (transfer bank) ==================== */
.kas-list {
  padding:14px 20px;
}
.kas-item {
  padding:12px 0;
  border-bottom:1px dashed var(--line);
  display:grid;
  grid-template-columns:1fr auto;
  gap:10px;
}
.kas-item:last-child { border-bottom:none; }
.kas-item .info .nama {
  font-family:'Cormorant Garamond',serif;
  font-size:0.92rem;
  font-weight:600;
  color:var(--emas-muda);
  margin-bottom:3px;
}
.kas-item .info .meta {
  font-size:0.66rem;
  color:var(--ink-3);
  font-family:'JetBrains Mono',monospace;
}
.kas-item .val {
  font-family:'JetBrains Mono',monospace;
  font-weight:700;
  color:var(--emas);
  font-size:0.88rem;
  white-space:nowrap;
}
.kas-item .val.keluar { color:#d47575; }

/* ==================== TOAST ==================== */
.toast {
  position:fixed;
  bottom:24px; left:50%;
  transform:translateX(-50%) translateY(80px);
  background:var(--hitam);
  color:var(--emas-muda);
  padding:13px 24px;
  border-radius:40px;
  font-size:0.85rem;
  font-weight:500;
  display:flex;
  align-items:center;
  gap:10px;
  opacity:0;
  transition:all 0.3s;
  z-index:200;
  box-shadow:0 10px 30px -8px rgba(212,175,55,0.3);
  border:1px solid var(--emas-tua);
  max-width:90vw;
}
.toast.show {
  opacity:1;
  transform:translateX(-50%) translateY(0);
}
.toast i { color:var(--emas); }

/* ==================== SCROLLBAR ==================== */
::-webkit-scrollbar { width:6px; height:6px; }
::-webkit-scrollbar-track { background:transparent; }
::-webkit-scrollbar-thumb { background:var(--line-2); border-radius:10px; }
::-webkit-scrollbar-thumb:hover { background:var(--emas-tua); }

/* ==================== RESPONSIVE ==================== */
@media (max-width: 1100px) {
  .kasir-grid { grid-template-columns:1fr 380px; }
  .col-kategori {
    grid-column:1/-1;
    grid-row:1;
    padding:10px 12px;
    display:flex;
    gap:8px;
    overflow-x:auto;
    overflow-y:hidden;
    border-right:none;
    border-bottom:1px solid var(--line);
  }
  .kat-title { display:none; }
  .kat-btn {
    white-space:nowrap;
    border-left:none;
    border-bottom:3px solid transparent;
    padding:10px 14px;
    border-radius:0;
    flex-shrink:0;
    width:auto;
  }
  .kat-btn.active {
    background:transparent;
    border-left:none;
    border-bottom-color:var(--emas);
  }
  .kadar-info { display:none; }
}

@media (max-width: 720px) {
  body { font-size:13px; }
  .topbar {
    height:auto;
    min-height:66px;
    padding:10px 14px;
    flex-wrap:wrap;
    gap:8px;
  }
  .brand-mark { width:38px; height:38px; font-size:1.05rem; }
  .brand h1 { font-size:1.15rem; }
  .brand h1 small { font-size:0.55rem; letter-spacing:1.5px; }
  .harga-emas-badge { padding:6px 10px; }
  .harga-emas-badge .lbl { display:none; }
  .harga-emas-badge .val { font-size:0.78rem; }
  .mode-nav button span { display:none; }
  .mode-nav button { padding:7px 10px; }
  .user-badge .avatar { width:32px; height:32px; font-size:0.9rem; }

  .kasir-grid { grid-template-columns:1fr; padding-bottom:80px; }
  .col-kategori {
    position:sticky;
    top:66px;
    background:var(--hitam);
    z-index:40;
    box-shadow:0 4px 10px -6px rgba(0,0,0,0.5);
  }
  .kat-btn { font-size:0.74rem; padding:9px 12px; }

  .col-produk { padding:16px 14px 100px; }
  .produk-head { flex-direction:column; align-items:flex-start; }
  .produk-head h2 { font-size:1.4rem; }
  .search-box { width:100%; min-width:auto; }
  .produk-grid { grid-template-columns:repeat(2,1fr); gap:10px; }
  .produk-card { padding:12px 10px; gap:8px; }
  .produk-card .p-icon { width:44px; height:44px; font-size:1.2rem; }
  .produk-card h3 { font-size:0.9rem; }
  .produk-card .p-harga { font-size:0.85rem; }

  .col-keranjang {
    position:fixed;
    bottom:0; left:0; right:0;
    max-height:80vh;
    border-left:none;
    border-top:2px solid var(--emas);
    border-radius:20px 20px 0 0;
    transform:translateY(calc(100% - 74px));
    transition:transform 0.3s ease-out;
    z-index:60;
    overflow:hidden;
  }
  .col-keranjang.expanded { transform:translateY(0); }
  .keranjang-head {
    border-radius:20px 20px 0 0;
    cursor:pointer;
    position:relative;
    padding:18px 20px 14px;
  }
  .keranjang-head::before {
    content:'';
    position:absolute;
    top:7px; left:50%;
    transform:translateX(-50%);
    width:36px; height:4px;
    background:rgba(244,228,168,0.4);
    border-radius:2px;
  }
  .keranjang-head .info h3 { font-size:1rem; }
  .toggle-arrow {
    display:flex;
    transition:transform 0.3s;
  }
  .col-keranjang.expanded .toggle-arrow { transform:rotate(180deg); }
  .keranjang-body { max-height:calc(80vh - 220px); }
  .keranjang-foot { padding:14px 18px 18px; }
  .mode-selector { padding:10px 18px; }

  .admin-wrap { padding:16px 14px; }
  .admin-head { flex-direction:column; align-items:stretch; }
  .admin-head h2 { font-size:1.3rem; }
  .admin-actions { justify-content:stretch; flex-wrap:wrap; }
  .admin-actions button { flex:1; min-width:140px; justify-content:center; }
  .stats-row { grid-template-columns:1fr 1fr; gap:10px; }
  .stat-card { padding:13px 14px; }
  .stat-card .val { font-size:1.05rem; }
  .stok-grid { grid-template-columns:1fr; padding:14px; }

  .modal { border-radius:16px 16px 0 0; }
  .modal-bg { align-items:flex-end; padding:0; }
  .modal-head { padding:20px 20px 14px; }
  .modal-body { padding:20px; }
  .modal-foot { padding:14px 20px 20px; flex-direction:column-reverse; }
  .modal-foot button { width:100%; justify-content:center; padding:14px; }
  .kadar-grid { grid-template-columns:1fr; gap:6px; }
}

.toggle-arrow { display:none; }
</style>
</head>
<body>

<div class="app">

<!-- ==================== HEADER ==================== -->
<header class="topbar">
  <div class="brand">
    <div class="brand-mark">Au</div>
    <h1>Logam Mulia<small>Toko Emas & Perhiasan</small></h1>
  </div>
  <div class="topbar-right">
    <div class="harga-emas-badge">
      <div class="icon">Au</div>
      <div class="info">
        <div class="lbl">Harga Emas Hari Ini</div>
        <div class="val" id="topHargaEmas">Rp 0</div>
      </div>
    </div>
    <nav class="mode-nav">
      <button id="navKasir" class="active">
        <i class="fas fa-gem"></i> <span>Kasir</span>
      </button>
      <button id="navAdmin">
        <i class="fas fa-vault"></i> <span>Stok</span>
      </button>
    </nav>
    <div class="user-badge">
      <div class="avatar" id="avatarInit">H</div>
    </div>
  </div>
</header>

<!-- ==================== PAGE KASIR ==================== -->
<div class="page active" id="pageKasir">
  <div class="kasir-grid">

    <!-- Kategori -->
    <aside class="col-kategori" id="colKategori">
      <div class="kat-title">Koleksi</div>
      <button class="kat-btn active" data-kat="semua"><i class="fas fa-th-large"></i> Semua</button>
      <button class="kat-btn" data-kat="cincin"><i class="fas fa-ring"></i> Cincin</button>
      <button class="kat-btn" data-kat="kalung"><i class="fas fa-gem"></i> Kalung</button>
      <button class="kat-btn" data-kat="gelang"><i class="fas fa-circle-notch"></i> Gelang</button>
      <button class="kat-btn" data-kat="anting"><i class="fas fa-snowflake"></i> Anting</button>
      <button class="kat-btn" data-kat="liontin"><i class="fas fa-heart"></i> Liontin</button>
      <button class="kat-btn" data-kat="logam"><i class="fas fa-coins"></i> Logam Mulia</button>

      <div class="kadar-info" id="kadarInfo">
        <h4>Kadar & Faktor</h4>
        <div class="kadar-row"><span>24K (99.9%)</span><strong>× 1.00</strong></div>
        <div class="kadar-row"><span>22K (91.6%)</span><strong>× 0.92</strong></div>
        <div class="kadar-row"><span>18K (75.0%)</span><strong>× 0.75</strong></div>
        <div class="kadar-row"><span>Buyback Spread</span><strong>− 7%</strong></div>
      </div>
    </aside>

    <!-- Produk -->
    <section class="col-produk">
      <div class="produk-head">
        <h2 id="titleKat">Semua Koleksi<small id="produkCount">0 item tersedia</small></h2>
        <div class="search-box">
          <i class="fas fa-search"></i>
          <input type="text" id="searchInput" placeholder="Cari cincin, kalung, kode...">
        </div>
      </div>
      <div class="produk-grid" id="produkGrid"></div>
    </section>

    <!-- Keranjang -->
    <aside class="col-keranjang" id="colKeranjang">
      <div class="keranjang-head" id="keranjangHead">
        <div class="info">
          <h3>
            <i class="fas fa-shopping-bag"></i> Transaksi
            <span class="toggle-arrow"><i class="fas fa-chevron-up"></i></span>
          </h3>
          <div class="meta">
            <span id="trxNomor">INV-0001</span>
            <span id="keranjangCount">0 item</span>
          </div>
        </div>
      </div>

      <div class="mode-selector" id="modeSelector">
        <button class="mode-btn active jual" data-mode="jual">
          <i class="fas fa-arrow-right"></i> Jual
        </button>
        <button class="mode-btn buyback" data-mode="buyback">
          <i class="fas fa-arrow-left"></i> Buyback
        </button>
        <button class="mode-btn tukar" data-mode="tukar">
          <i class="fas fa-right-left"></i> Tukar
        </button>
      </div>

      <div class="keranjang-body" id="keranjangBody">
        <div class="keranjang-empty">
          <i class="fas fa-gem"></i>
          <strong>Belum ada item</strong>
          Pilih perhiasan atau tambah buyback
        </div>
      </div>

      <div class="keranjang-foot">
        <div class="kf-row" id="rowSubtotal"><span>Subtotal Jual</span><span id="subtotalTxt">Rp 0</span></div>
        <div class="kf-row buyback" id="rowBuyback" style="display:none;"><span>Buyback (Kembali ke Pelanggan)</span><span id="buybackTxt">− Rp 0</span></div>
        <div class="kf-row" id="rowOngkos" style="display:none;"><span>Ongkos Pembuatan</span><span id="ongkosTxt">Rp 0</span></div>
        <div class="kf-row total" id="rowTotal"><span>Total</span><span id="totalTxt">Rp 0</span></div>
        <button class="btn-proses" id="btnProses" disabled>
          <i class="fas fa-cash-register"></i> Proses Transaksi
        </button>
      </div>
    </aside>

  </div>
</div>

<!-- ==================== PAGE ADMIN ==================== -->
<div class="page" id="pageAdmin">
  <div class="admin-wrap">
    <div class="admin-head">
      <h2>Stok & Harga<small>Kelola koleksi dan harga emas</small></h2>
      <div class="admin-actions">
        <button class="btn-outline" id="btnResetData">
          <i class="fas fa-rotate"></i> Reset
        </button>
        <button class="btn-solid" id="btnTambahProduk">
          <i class="fas fa-plus"></i> Item Baru
        </button>
      </div>
    </div>

    <!-- Editor Harga Emas -->
    <div class="harga-emas-editor">
      <div class="field">
        <label>Harga Emas / gram (Jual)</label>
        <input type="number" id="fHargaJual" step="1000">
      </div>
      <div class="field">
        <label>Harga Emas / gram (Buyback)</label>
        <input type="number" id="fHargaBuyback" step="1000">
      </div>
      <div class="field">
        <label>Spread Buyback (%)</label>
        <input type="number" id="fSpread" step="1" min="0" max="30">
      </div>
      <button class="btn-solid" id="btnUpdateHarga" style="height:47px;">
        <i class="fas fa-floppy-disk"></i> Update Harga
      </button>
      <div class="info-box">
        <strong>Catatan:</strong> Harga emas spot biasanya berubah setiap hari.
        Update harga di sini akan langsung mempengaruhi semua perhitungan transaksi baru.
        Spread buyback <strong>7%</strong> berarti toko membeli kembali emas
        dengan harga <strong>7% lebih rendah</strong> dari harga jual.
      </div>
    </div>

    <div class="stats-row">
      <div class="stat-card">
        <div class="lbl">Total Item</div>
        <div class="val" id="sTotal">0</div>
        <div class="sub">produk aktif</div>
      </div>
      <div class="stat-card">
        <div class="lbl">Total Berat Emas</div>
        <div class="val" id="sBerat">0 gr</div>
        <div class="sub">nilai stok</div>
      </div>
      <div class="stat-card">
        <div class="lbl">Nilai Stok</div>
        <div class="val" id="sNilai" style="font-size:1.05rem;">Rp 0</div>
        <div class="sub">berdasarkan harga jual</div>
      </div>
      <div class="stat-card marun">
        <div class="lbl">Stok Habis</div>
        <div class="val" id="sOut">0</div>
        <div class="sub">perlu restock</div>
      </div>
    </div>

    <div class="admin-section">
      <div class="section-head">
        <i class="fas fa-boxes-stacked"></i> Koleksi Aktif
        <span class="spacer"></span>
        <span class="hint" id="itemCount">0 item</span>
      </div>
      <div class="stok-grid" id="stokGrid"></div>
    </div>

    <div class="admin-section">
      <div class="section-head">
        <i class="fas fa-clock-rotate-left"></i> Transaksi Terakhir
      </div>
      <div class="kas-list" id="kasList"></div>
    </div>
  </div>
</div>

</div>

<!-- ==================== MODAL: INPUT WEIGHT/DETAIL (JUAL) ==================== -->
<div class="modal-bg" id="modalJual">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Detail Item</div>
        <h3><i class="fas fa-gem"></i> <span id="jualTitle">Nama Produk</span></h3>
        <div class="sub" id="jualSub">Kode · Kadar</div>
      </div>
      <button class="modal-close" id="closeJual"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <input type="hidden" id="jualId">

      <div class="field">
        <label>Berat (gram)</label>
        <input type="number" id="jualBerat" step="0.01" min="0.01" placeholder="0.00" style="font-size:1.2rem; text-align:right;">
      </div>

      <div class="field">
        <label>Kadar Emas</label>
        <div class="kadar-grid" id="kadarGrid">
          <div class="kadar-opt" data-kadar="24" data-faktor="1.00">
            <div class="kode">24K</div>
            <div class="persen">99.9%</div>
          </div>
          <div class="kadar-opt" data-kadar="22" data-faktor="0.92">
            <div class="kode">22K</div>
            <div class="persen">91.6%</div>
          </div>
          <div class="kadar-opt" data-kadar="18" data-faktor="0.75">
            <div class="kode">18K</div>
            <div class="persen">75.0%</div>
          </div>
        </div>
      </div>

      <div class="field">
        <label>Batu Permata (opsional)</label>
        <select id="jualBatu">
          <option value="0">Tanpa Batu</option>
          <option value="500000">Berlian Kecil (+Rp 500.000)</option>
          <option value="1500000">Berlian Sedang (+Rp 1.500.000)</option>
          <option value="3500000">Berlian Besar (+Rp 3.500.000)</option>
          <option value="250000">Ruby / Sapphire (+Rp 250.000)</option>
          <option value="150000">Mutiara (+Rp 150.000)</option>
        </select>
      </div>

      <div class="kalkulator-box" id="jualKalkulator">
        <h4><i class="fas fa-calculator"></i> Rincian Harga</h4>
        <div id="jualKalkulatorBody"></div>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalJual">Batal</button>
      <button class="btn-solid" id="btnTambahJual">
        <i class="fas fa-cart-plus"></i> Tambah ke Transaksi
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL: BUYBACK ==================== -->
<div class="modal-bg" id="modalBuyback">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Buyback Emas</div>
        <h3><i class="fas fa-arrow-left"></i> Terima Emas dari Pelanggan</h3>
        <div class="sub">Toko membeli kembali emas pelanggan</div>
      </div>
      <button class="modal-close" id="closeBuyback"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="field">
        <label>Nama Pelanggan</label>
        <input type="text" id="bbNama" placeholder="Nama pelanggan" maxlength="40">
      </div>

      <div class="field">
        <label>Jenis Item</label>
        <input type="text" id="bbJenis" placeholder="Contoh: Kalung rantai (bekas)" maxlength="60">
      </div>

      <div class="field">
        <label>Berat Emas (gram)</label>
        <input type="number" id="bbBerat" step="0.01" min="0.01" placeholder="0.00" style="font-size:1.2rem; text-align:right;">
      </div>

      <div class="field">
        <label>Kadar Emas</label>
        <div class="kadar-grid" id="bbKadarGrid">
          <div class="kadar-opt" data-kadar="24" data-faktor="1.00">
            <div class="kode">24K</div>
            <div class="persen">99.9%</div>
          </div>
          <div class="kadar-opt" data-kadar="22" data-faktor="0.92">
            <div class="kode">22K</div>
            <div class="persen">91.6%</div>
          </div>
          <div class="kadar-opt" data-kadar="18" data-faktor="0.75">
            <div class="kode">18K</div>
            <div class="persen">75.0%</div>
          </div>
        </div>
      </div>

      <div class="field">
        <label>Kondisi</label>
        <select id="bbKondisi">
          <option value="baik">Baik — masih bagus</option>
          <option value="normal">Normal — ada pemakaian</option>
          <option value="rusak">Rusak — perlu perbaikan</option>
        </select>
      </div>

      <div class="kalkulator-box">
        <h4><i class="fas fa-calculator"></i> Perhitungan Buyback</h4>
        <div id="bbKalkulatorBody"></div>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalBuyback">Batal</button>
      <button class="btn-solid" id="btnTambahBuyback" style="background:var(--marun); color:var(--emas-muda);">
        <i class="fas fa-check"></i> Tambah ke Transaksi
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL: PEMBAYARAN ==================== -->
<div class="modal-bg" id="modalBayar">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Pembayaran</div>
        <h3><i class="fas fa-cash-register"></i> Selesaikan Transaksi</h3>
        <div class="sub" id="bayarSub">Transaksi #INV-0001</div>
      </div>
      <button class="modal-close" id="closeBayar"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="kalkulator-box" style="background:linear-gradient(135deg, #1c1410 0%, #0f0f0f 100%);">
        <div id="bayarDetail"></div>
      </div>

      <div class="field">
        <label>Pelanggan</label>
        <input type="text" id="bayarPelanggan" placeholder="Nama pelanggan" maxlength="40">
      </div>

      <div class="field">
        <label>Metode Pembayaran</label>
        <div class="kadar-grid" style="grid-template-columns:1fr 1fr 1fr;">
          <div class="kadar-opt selected" data-metode="Tunai">
            <div class="kode" style="font-size:0.9rem;"><i class="fas fa-money-bill-wave"></i></div>
            <div class="persen">TUNAI</div>
          </div>
          <div class="kadar-opt" data-metode="Debit">
            <div class="kode" style="font-size:0.9rem;"><i class="fas fa-credit-card"></i></div>
            <div class="persen">DEBIT</div>
          </div>
          <div class="kadar-opt" data-metode="Transfer">
            <div class="kode" style="font-size:0.9rem;"><i class="fas fa-building-columns"></i></div>
            <div class="persen">TRANSFER</div>
          </div>
        </div>
      </div>

      <div id="cashSection">
        <div class="field">
          <label>Uang Diterima</label>
          <input type="number" id="cashInput" placeholder="0" min="0" step="100000" style="font-size:1.1rem; text-align:right;">
        </div>
        <div id="changeBox" style="background:rgba(212,175,55,0.15); border:1px solid var(--emas-tua); color:var(--emas); padding:14px 16px; border-radius:9px; display:flex; justify-content:space-between; font-weight:700; font-family:'JetBrains Mono',monospace;">
          <span>Kembalian</span>
          <span id="changeTxt">Rp 0</span>
        </div>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalBayar">Batal</button>
      <button class="btn-solid" id="btnKonfirmasiBayar">
        <i class="fas fa-check"></i> Konfirmasi & Cetak Sertifikat
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL: SERTIFIKAT / STRUK ==================== -->
<div class="modal-bg" id="modalSertifikat">
  <div class="modal" style="max-width:520px;">
    <div class="modal-head">
      <div>
        <div class="kicker">Sertifikat Pembelian</div>
        <h3><i class="fas fa-scroll"></i> Bukti Transaksi</h3>
        <div class="sub">Simpan sebagai jaminan garansi</div>
      </div>
      <button class="modal-close" id="closeSertifikat"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body" id="sertifikatBody"></div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnTutupSertifikat">Selesai</button>
      <button class="btn-solid" id="btnCetakSertifikat">
        <i class="fas fa-print"></i> Cetak
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL: FORM PRODUK ==================== -->
<div class="modal-bg" id="modalProduk">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Data Item</div>
        <h3><i class="fas fa-box"></i> <span id="produkFormTitle">Tambah Item</span></h3>
        <div class="sub">Data perhiasan toko</div>
      </div>
      <button class="modal-close" id="closeProduk"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <input type="hidden" id="editId">

      <div class="field">
        <label>Kode Item</label>
        <input type="text" id="pKode" placeholder="CN-001" maxlength="15" style="text-transform:uppercase;">
      </div>

      <div class="field">
        <label>Nama Item</label>
        <input type="text" id="pNama" placeholder="Cincin Solitaire" maxlength="50">
      </div>

      <div class="field">
        <label>Kategori</label>
        <select id="pKategori">
          <option value="cincin">Cincin</option>
          <option value="kalung">Kalung</option>
          <option value="gelang">Gelang</option>
          <option value="anting">Anting</option>
          <option value="liontin">Liontin</option>
          <option value="logam">Logam Mulia</option>
        </select>
      </div>

      <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
        <div class="field">
          <label>Berat Default (gr)</label>
          <input type="number" id="pBerat" step="0.01" placeholder="0.00">
        </div>
        <div class="field">
          <label>Kadar Default</label>
          <select id="pKadar">
            <option value="24">24K</option>
            <option value="22">22K</option>
            <option value="18">18K</option>
          </select>
        </div>
      </div>

      <div class="field">
        <label>Ongkos Pembuatan per gram (Rp)</label>
        <input type="number" id="pOngkos" placeholder="0" min="0" step="5000" value="50000">
      </div>

      <div class="field">
        <label>Stok Tersedia</label>
        <input type="number" id="pStok" placeholder="0" min="0" value="1">
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalProduk">Batal</button>
      <button class="btn-solid" id="btnSimpanProduk">
        <i class="fas fa-floppy-disk"></i> Simpan
      </button>
    </div>
  </div>
</div>

<div class="toast" id="toast"><i class="fas fa-circle-check"></i> <span id="toastTxt"></span></div>

<script>
(function(){
  /* =========================================================
     KONFIGURASI HARGA & KADAR
  ========================================================= */
  const STORAGE_KEY = 'toko_emas_v1';

  const KADAR_FAKTOR = {
    '24': 1.00,
    '22': 0.92,
    '18': 0.75
  };

  const KADAR_LABEL = {
    '24': '24K',
    '22': '22K',
    '18': '18K'
  };

  const ICON_BY_KAT = {
    cincin:'fa-ring', kalung:'fa-gem', gelang:'fa-circle-notch',
    anting:'fa-snowflake', liontin:'fa-heart', logam:'fa-coins'
  };

  const defaultProduk = [
    { id:1, kode:'CN-001', nama:'Cincin Solitaire', kategori:'cincin', berat:3.5, kadar:'24', ongkos:85000, stok:5 },
    { id:2, kode:'CN-002', nama:'Cincin Kawin Polos', kategori:'cincin', berat:2.8, kadar:'22', ongkos:65000, stok:12 },
    { id:3, kode:'CN-003', nama:'Cincin Berlian Mini', kategori:'cincin', berat:4.2, kadar:'18', ongkos:120000, stok:3 },
    { id:4, kode:'KL-001', nama:'Kalung Rantai Venezia', kategori:'kalung', berat:8.5, kadar:'24', ongkos:75000, stok:6 },
    { id:5, kode:'KL-002', nama:'Kalung Liontin Hati', kategori:'kalung', berat:5.2, kadar:'22', ongkos:80000, stok:8 },
    { id:6, kode:'KL-003', nama:'Kalung Panjang Layer', kategori:'kalung', berat:12.0, kadar:'18', ongkos:95000, stok:4 },
    { id:7, kode:'GL-001', nama:'Gelang Rantai Singapura', kategori:'gelang', berat:10.5, kadar:'24', ongkos:80000, stok:5 },
    { id:8, kode:'GL-002', nama:'Gelang Bangle Polish', kategori:'gelang', berat:15.2, kadar:'22', ongkos:70000, stok:3 },
    { id:9, kode:'AN-001', nama:'Anting Tusuk Bunga', kategori:'anting', berat:1.5, kadar:'24', ongkos:60000, stok:15 },
    { id:10, kode:'AN-002', nama:'Anting Drop Mutiara', kategori:'anting', berat:2.8, kadar:'18', ongkos:90000, stok:7 },
    { id:11, kode:'LT-001', nama:'Liontin Inisial', kategori:'liontin', berat:1.8, kadar:'24', ongkos:55000, stok:18 },
    { id:12, kode:'LT-002', nama:'Liontin Hati Kecil', kategori:'liontin', berat:1.2, kadar:'22', ongkos:50000, stok:22 },
    { id:13, kode:'LM-001', nama:'Logam Mulia Antam 5gr', kategori:'logam', berat:5.0, kadar:'24', ongkos:0, stok:8 },
    { id:14, kode:'LM-002', nama:'Logam Mulia Antam 10gr', kategori:'logam', berat:10.0, kadar:'24', ongkos:0, stok:4 },
    { id:15, kode:'LM-003', nama:'Logam Mulia UBS 1gr', kategori:'logam', berat:1.0, kadar:'24', ongkos:0, stok:25 }
  ];

  let data;
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    data = raw ? JSON.parse(raw) : null;
  } catch(e) { data = null; }

  if (!data) {
    data = {
      hargaJual: 1450000,
      hargaBuyback: 1350000,
      spread: 7,
      produk: JSON.parse(JSON.stringify(defaultProduk)),
      transaksi: [],
      counter: 1
    };
  }
  const save = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(data));

  let keranjang = []; // { tipe:'jual'|'buyback', ... }
  let mode = 'jual';
  let filterKat = 'semua';
  let searchQ = '';
  let bayarMetode = 'Tunai';
  let lastTransaksi = null;

  /* =========================================================
     UTIL
  ========================================================= */
  const rp = n => 'Rp ' + Math.round(Number(n)).toLocaleString('id-ID');
  const formatGram = n => Number(n).toFixed(2) + ' gr';

  let toastTimer;
  function toast(msg, icon='fa-circle-check') {
    const t = document.getElementById('toast');
    document.getElementById('toastTxt').textContent = msg;
    t.querySelector('i').className = 'fas ' + icon;
    t.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => t.classList.remove('show'), 2200);
  }

  function updateTopHarga() {
    document.getElementById('topHargaEmas').textContent = rp(data.hargaJual);
  }

  /* =========================================================
     NAVIGASI
  ========================================================= */
  const navKasir = document.getElementById('navKasir');
  const navAdmin = document.getElementById('navAdmin');
  const pageKasir = document.getElementById('pageKasir');
  const pageAdmin = document.getElementById('pageAdmin');

  navKasir.addEventListener('click', () => {
    navKasir.classList.add('active');
    navAdmin.classList.remove('active');
    pageKasir.classList.add('active');
    pageAdmin.classList.remove('active');
    document.getElementById('avatarInit').textContent = 'H';
    renderProduk();
  });

  navAdmin.addEventListener('click', () => {
    navAdmin.classList.add('active');
    navKasir.classList.remove('active');
    pageAdmin.classList.add('active');
    pageKasir.classList.remove('active');
    document.getElementById('avatarInit').textContent = 'P';
    renderAdmin();
  });

  /* =========================================================
     RENDER PRODUK
  ========================================================= */
  function renderProduk() {
    const grid = document.getElementById('produkGrid');
    let list = data.produk.slice();

    if (filterKat !== 'semua') list = list.filter(p => p.kategori === filterKat);
    if (searchQ.trim()) {
      const q = searchQ.toLowerCase();
      list = list.filter(p => p.nama.toLowerCase().includes(q) || p.kode.toLowerCase().includes(q));
    }

    document.getElementById('produkCount').textContent = list.length + ' item tersedia';

    const katLabels = {
      semua:'Semua Koleksi', cincin:'Cincin', kalung:'Kalung', gelang:'Gelang',
      anting:'Anting', liontin:'Liontin', logam:'Logam Mulia'
    };
    document.getElementById('titleKat').innerHTML = `${katLabels[filterKat] || 'Koleksi'}<small id="produkCount">${list.length} item tersedia</small>`;

    if (list.length === 0) {
      grid.innerHTML = '<div style="grid-column:1/-1; text-align:center; padding:50px 20px; color:var(--ink-2); font-family:\'Cormorant Garamond\',serif; font-style:italic; font-size:1.1rem;">Tidak ada item ditemukan</div>';
      return;
    }

    grid.innerHTML = list.map(p => {
      const out = p.stok <= 0;
      const low = p.stok > 0 && p.stok <= 2;

      // Hitung harga display
      const faktor = KADAR_FAKTOR[p.kadar] || 1;
      const hargaEmas = data.hargaJual * p.berat * faktor;
      const ongkos = p.ongkos * p.berat;
      const hargaTotal = hargaEmas + ongkos;

      let stokClass = 'p-stok';
      if (out) stokClass += ' out';
      else if (low) stokClass += ' low';

      return `
        <div class="produk-card ${out ? 'out' : ''}" data-id="${p.id}">
          <div class="${stokClass}">${out ? 'Habis' : 'Stok ' + p.stok}</div>
          <div class="p-icon"><i class="fas ${ICON_BY_KAT[p.kategori] || 'fa-gem'}"></i></div>
          <div class="p-kode">${p.kode}</div>
          <div>
            <h3>${p.nama}</h3>
            <div class="p-kadar">${KADAR_LABEL[p.kadar] || p.kadar}</div>
          </div>
          <div class="p-berat">${formatGram(p.berat)} <small>default</small></div>
          <div class="p-harga">
            ${rp(hargaTotal)}
            <small>estimasi · berat ${formatGram(p.berat)}</small>
          </div>
        </div>
      `;
    }).join('');

    grid.querySelectorAll('.produk-card').forEach(card => {
      if (card.classList.contains('out')) return;
      card.addEventListener('click', () => {
        const id = parseInt(card.dataset.id);
        bukaModalJual(id);
      });
    });
  }

  /* =========================================================
     MODAL JUAL
  ========================================================= */
  const modalJual = document.getElementById('modalJual');
  let jualProduk = null;
  let jualKadar = '24';

  function bukaModalJual(id) {
    const p = data.produk.find(x => x.id === id);
    if (!p) return;
    if (p.stok <= 0) { toast('Stok habis', 'fa-exclamation-circle'); return; }

    jualProduk = p;
    jualKadar = p.kadar;

    document.getElementById('jualTitle').textContent = p.nama;
    document.getElementById('jualSub').textContent = `${p.kode} · kadar default ${KADAR_LABEL[p.kadar]}`;
    document.getElementById('jualId').value = p.id;
    document.getElementById('jualBerat').value = p.berat;
    document.getElementById('jualBatu').value = '0';

    document.querySelectorAll('#kadarGrid .kadar-opt').forEach(opt => {
      opt.classList.toggle('selected', opt.dataset.kadar === p.kadar);
    });

    updateJualKalkulator();
    modalJual.classList.add('show');
  }

  function updateJualKalkulator() {
    if (!jualProduk) return;
    const berat = parseFloat(document.getElementById('jualBerat').value) || 0;
    const batu = parseInt(document.getElementById('jualBatu').value) || 0;
    const faktor = KADAR_FAKTOR[jualKadar] || 1;

    const hargaEmas = data.hargaJual * berat * faktor;
    const ongkos = jualProduk.ongkos * berat;
    const subtotal = hargaEmas + ongkos;
    const total = subtotal + batu;

    document.getElementById('jualKalkulatorBody').innerHTML = `
      <div class="kal-row">
        <span class="lbl">Harga emas <small>${rp(data.hargaJual)}/gr × ${berat.toFixed(2)} gr × ${faktor}</small></span>
        <span class="val">${rp(hargaEmas)}</span>
      </div>
      <div class="kal-row">
        <span class="lbl">Ongkos pembuatan <small>${rp(jualProduk.ongkos)}/gr × ${berat.toFixed(2)} gr</small></span>
        <span class="val">${rp(ongkos)}</span>
      </div>
      ${batu > 0 ? `
        <div class="kal-row">
          <span class="lbl">Batu permata</span>
          <span class="val">${rp(batu)}</span>
        </div>
      ` : ''}
      <div class="kal-row total">
        <span class="lbl">Subtotal</span>
        <span class="val">${rp(total)}</span>
      </div>
    `;
  }

  document.getElementById('jualBerat').addEventListener('input', updateJualKalkulator);
  document.getElementById('jualBatu').addEventListener('change', updateJualKalkulator);

  document.querySelectorAll('#kadarGrid .kadar-opt').forEach(opt => {
    opt.addEventListener('click', () => {
      document.querySelectorAll('#kadarGrid .kadar-opt').forEach(o => o.classList.remove('selected'));
      opt.classList.add('selected');
      jualKadar = opt.dataset.kadar;
      updateJualKalkulator();
    });
  });

  document.getElementById('closeJual').addEventListener('click', () => modalJual.classList.remove('show'));
  document.getElementById('btnBatalJual').addEventListener('click', () => modalJual.classList.remove('show'));

  document.getElementById('btnTambahJual').addEventListener('click', () => {
    if (!jualProduk) return;
    const berat = parseFloat(document.getElementById('jualBerat').value) || 0;
    const batu = parseInt(document.getElementById('jualBatu').value) || 0;

    if (berat <= 0) return toast('Berat harus lebih dari 0', 'fa-exclamation-circle');

    const faktor = KADAR_FAKTOR[jualKadar] || 1;
    const hargaEmas = data.hargaJual * berat * faktor;
    const ongkos = jualProduk.ongkos * berat;
    const total = hargaEmas + ongkos + batu;

    keranjang.push({
      tipe: 'jual',
      id: jualProduk.id,
      kode: jualProduk.kode,
      nama: jualProduk.nama,
      kategori: jualProduk.kategori,
      berat: berat,
      kadar: jualKadar,
      ongkosPerGram: jualProduk.ongkos,
      hargaEmas: hargaEmas,
      ongkos: ongkos,
      batu: batu,
      total: total,
      qty: 1
    });

    jualProduk.stok--;
    save();
    renderProduk();
    renderKeranjang();
    modalJual.classList.remove('show');
    toast(`${jualProduk.nama} ditambahkan`, 'fa-cart-plus');

    if (window.innerWidth <= 720) updateBottomBar();
  });

  /* =========================================================
     MODAL BUYBACK
  ========================================================= */
  const modalBuyback = document.getElementById('modalBuyback');
  let bbKadar = '24';

  function bukaModalBuyback() {
    document.getElementById('bbNama').value = '';
    document.getElementById('bbJenis').value = '';
    document.getElementById('bbBerat').value = '';
    document.getElementById('bbKondisi').value = 'baik';
    bbKadar = '24';
    document.querySelectorAll('#bbKadarGrid .kadar-opt').forEach((o, i) => {
      o.classList.toggle('selected', i === 0);
    });
    updateBBKalkulator();
    modalBuyback.classList.add('show');
  }

  function updateBBKalkulator() {
    const berat = parseFloat(document.getElementById('bbBerat').value) || 0;
    const kondisi = document.getElementById('bbKondisi').value;
    const faktor = KADAR_FAKTOR[bbKadar] || 1;

    // Buyback pakai harga buyback (sudah include spread)
    let hargaPerGram = data.hargaBuyback;
    // Diskon tambahan berdasarkan kondisi
    const diskonKondisi = { baik: 1.00, normal: 0.97, rusak: 0.90 }[kondisi];
    hargaPerGram *= diskonKondisi;

    const total = hargaPerGram * berat * faktor;

    document.getElementById('bbKalkulatorBody').innerHTML = `
      <div class="kal-row">
        <span class="lbl">Harga buyback <small>${rp(data.hargaBuyback)}/gr</small></span>
        <span class="val">${rp(data.hargaBuyback)}</span>
      </div>
      <div class="kal-row">
        <span class="lbl">Kondisi <small>${kondisi === 'baik' ? 'tanpa potongan' : kondisi === 'normal' ? 'potongan 3%' : 'potongan 10%'}</small></span>
        <span class="val">${diskonKondisi === 1 ? '—' : '× ' + diskonKondisi}</span>
      </div>
      <div class="kal-row">
        <span class="lbl">Kadar <small>${KADAR_LABEL[bbKadar]}</small></span>
        <span class="val">× ${faktor}</span>
      </div>
      <div class="kal-row">
        <span class="lbl">Perhitungan <small>${berat.toFixed(2)} gr</small></span>
        <span class="val">${rp(total)}</span>
      </div>
      <div class="kal-row total buyback">
        <span class="lbl">Toko Bayar ke Pelanggan</span>
        <span class="val">${rp(total)}</span>
      </div>
    `;
  }

  document.getElementById('bbBerat').addEventListener('input', updateBBKalkulator);
  document.getElementById('bbKondisi').addEventListener('change', updateBBKalkulator);

  document.querySelectorAll('#bbKadarGrid .kadar-opt').forEach(opt => {
    opt.addEventListener('click', () => {
      document.querySelectorAll('#bbKadarGrid .kadar-opt').forEach(o => o.classList.remove('selected'));
      opt.classList.add('selected');
      bbKadar = opt.dataset.kadar;
      updateBBKalkulator();
    });
  });

  document.getElementById('closeBuyback').addEventListener('click', () => modalBuyback.classList.remove('show'));
  document.getElementById('btnBatalBuyback').addEventListener('click', () => modalBuyback.classList.remove('show'));

  document.getElementById('btnTambahBuyback').addEventListener('click', () => {
    const nama = document.getElementById('bbNama').value.trim() || 'Pelanggan';
    const jenis = document.getElementById('bbJenis').value.trim() || 'Emas bekas';
    const berat = parseFloat(document.getElementById('bbBerat').value) || 0;
    const kondisi = document.getElementById('bbKondisi').value;

    if (berat <= 0) return toast('Berat harus lebih dari 0', 'fa-exclamation-circle');

    const faktor = KADAR_FAKTOR[bbKadar] || 1;
    const diskonKondisi = { baik: 1.00, normal: 0.97, rusak: 0.90 }[kondisi];
    const hargaPerGram = data.hargaBuyback * diskonKondisi;
    const total = hargaPerGram * berat * faktor;

    keranjang.push({
      tipe: 'buyback',
      nama: jenis,
      pelanggan: nama,
      berat: berat,
      kadar: bbKadar,
      kondisi: kondisi,
      hargaPerGram: hargaPerGram,
      total: total,
      qty: 1
    });

    renderKeranjang();
    modalBuyback.classList.remove('show');
    toast(`Buyback ${formatGram(berat)} dari ${nama}`, 'fa-arrow-left');

    if (window.innerWidth <= 720) updateBottomBar();
  });

  /* =========================================================
     RENDER KERANJANG
  ========================================================= */
  function renderKeranjang() {
    const body = document.getElementById('keranjangBody');
    const totalQty = keranjang.reduce((s, it) => s + it.qty, 0);
    document.getElementById('keranjangCount').textContent = totalQty + ' item';

    if (keranjang.length === 0) {
      body.innerHTML = `
        <div class="keranjang-empty">
          <i class="fas fa-gem"></i>
          <strong>Belum ada item</strong>
          Pilih perhiasan atau tambah buyback
        </div>`;
    } else {
      body.innerHTML = keranjang.map((it, idx) => {
        if (it.tipe === 'jual') {
          return `
            <div class="krj-item">
              <div class="krj-top">
                <div class="krj-nama">${it.nama}</div>
                <div class="krj-harga">${rp(it.total * it.qty)}</div>
              </div>
              <div class="krj-detail">
                ${formatGram(it.berat)} · <span>${KADAR_LABEL[it.kadar]}</span><br>
                Emas ${rp(it.hargaEmas)} + Ongkos ${rp(it.ongkos)}${it.batu > 0 ? ' + Batu ' + rp(it.batu) : ''}
              </div>
              <div class="krj-actions">
                <div class="krj-qty">
                  <button data-act="min" data-idx="${idx}">−</button>
                  <span>${it.qty}</span>
                  <button data-act="plus" data-idx="${idx}">+</button>
                </div>
                <button class="krj-del" data-act="del" data-idx="${idx}"><i class="fas fa-times"></i></button>
              </div>
            </div>
          `;
        } else {
          return `
            <div class="krj-item buyback">
              <div class="krj-top">
                <div class="krj-nama">Buyback · ${it.nama}</div>
                <div class="krj-harga">− ${rp(it.total * it.qty)}</div>
              </div>
              <div class="krj-detail">
                Dari: <strong>${it.pelanggan}</strong><br>
                ${formatGram(it.berat)} · ${KADAR_LABEL[it.kadar]} · kondisi ${it.kondisi}
              </div>
              <div class="krj-actions">
                <div></div>
                <button class="krj-del" data-act="del" data-idx="${idx}"><i class="fas fa-times"></i></button>
              </div>
            </div>
          `;
        }
      }).join('');
    }

    body.querySelectorAll('button[data-act]').forEach(btn => {
      btn.addEventListener('click', () => {
        const idx = parseInt(btn.dataset.idx);
        const act = btn.dataset.act;
        if (act === 'plus') incItem(idx);
        else if (act === 'min') decItem(idx);
        else if (act === 'del') delItem(idx);
      });
    });

    // Hitung total
    const subtotalJual = keranjang.filter(k => k.tipe === 'jual').reduce((s, it) => s + it.total * it.qty, 0);
    const buybackTotal = keranjang.filter(k => k.tipe === 'buyback').reduce((s, it) => s + it.total * it.qty, 0);
    const grandTotal = subtotalJual - buybackTotal;

    document.getElementById('subtotalTxt').textContent = rp(subtotalJual);
    document.getElementById('rowSubtotal').style.display = subtotalJual > 0 ? 'flex' : 'none';

    if (buybackTotal > 0) {
      document.getElementById('rowBuyback').style.display = 'flex';
      document.getElementById('buybackTxt').textContent = '− ' + rp(buybackTotal);
    } else {
      document.getElementById('rowBuyback').style.display = 'none';
    }

    document.getElementById('rowOngkos').style.display = 'none';

    const totalRow = document.getElementById('rowTotal');
    const totalTxt = document.getElementById('totalTxt');
    if (grandTotal < 0) {
      totalRow.classList.add('negative');
      totalRow.querySelector('span:first-child').textContent = 'Toko Bayar Pelanggan';
      totalTxt.textContent = rp(Math.abs(grandTotal));
    } else {
      totalRow.classList.remove('negative');
      totalRow.querySelector('span:first-child').textContent = 'Total';
      totalTxt.textContent = rp(grandTotal);
    }

    document.getElementById('btnProses').disabled = keranjang.length === 0;
  }

  function incItem(idx) {
    const it = keranjang[idx];
    if (!it || it.tipe !== 'jual') return;
    const p = data.produk.find(x => x.id === it.id);
    if (!p || p.stok <= 0) {
      toast(`Stok ${it.nama} habis`, 'fa-exclamation-circle');
      return;
    }
    it.qty++;
    p.stok--;
    save(); renderProduk(); renderKeranjang();
  }

  function decItem(idx) {
    const it = keranjang[idx];
    if (!it || it.tipe !== 'jual') return;
    const p = data.produk.find(x => x.id === it.id);
    if (it.qty <= 1) {
      if (p) p.stok++;
      keranjang.splice(idx, 1);
    } else {
      it.qty--;
      if (p) p.stok++;
    }
    save(); renderProduk(); renderKeranjang();
  }

  function delItem(idx) {
    const it = keranjang[idx];
    if (!it) return;
    if (it.tipe === 'jual') {
      const p = data.produk.find(x => x.id === it.id);
      if (p) p.stok += it.qty;
    }
    keranjang.splice(idx, 1);
    save(); renderProduk(); renderKeranjang();
  }

  /* =========================================================
     MODE SELECTOR
  ========================================================= */
  document.querySelectorAll('.mode-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const m = btn.dataset.mode;
      if (m === 'buyback') {
        bukaModalBuyback();
      } else if (m === 'jual') {
        // Scroll ke produk
        document.querySelector('.col-produk').scrollTop = 0;
      } else if (m === 'tukar') {
        // Kombinasi jual + buyback
        bukaModalBuyback();
      }
      mode = m;
    });
  });

  /* =========================================================
     SEARCH & FILTER
  ========================================================= */
  document.getElementById('searchInput').addEventListener('input', e => {
    searchQ = e.target.value;
    renderProduk();
  });

  document.querySelectorAll('.kat-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.kat-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      filterKat = btn.dataset.kat;
      renderProduk();
    });
  });

  /* =========================================================
     PEMBAYARAN
  ========================================================= */
  const modalBayar = document.getElementById('modalBayar');
  const cashInput = document.getElementById('cashInput');

  function getGrandTotal() {
    const subtotalJual = keranjang.filter(k => k.tipe === 'jual').reduce((s, it) => s + it.total * it.qty, 0);
    const buybackTotal = keranjang.filter(k => k.tipe === 'buyback').reduce((s, it) => s + it.total * it.qty, 0);
    return subtotalJual - buybackTotal;
  }

  document.getElementById('btnProses').addEventListener('click', () => {
    if (keranjang.length === 0) return;
    bayarMetode = 'Tunai';
    document.querySelectorAll('#modalBayar [data-metode]').forEach((m, i) => {
      m.classList.toggle('selected', i === 0);
    });
    document.getElementById('cashSection').style.display = 'block';

    const total = getGrandTotal();
    document.getElementById('bayarSub').textContent = `Transaksi #INV-${String(data.counter).padStart(4,'0')}`;

    const subtotalJual = keranjang.filter(k => k.tipe === 'jual').reduce((s, it) => s + it.total * it.qty, 0);
    const buybackTotal = keranjang.filter(k => k.tipe === 'buyback').reduce((s, it) => s + it.total * it.qty, 0);

    document.getElementById('bayarDetail').innerHTML = `
      <div class="kal-row"><span class="lbl">Subtotal Jual</span><span class="val">${rp(subtotalJual)}</span></div>
      ${buybackTotal > 0 ? `<div class="kal-row buyback"><span class="lbl">Buyback (kembali ke pelanggan)</span><span class="val">− ${rp(buybackTotal)}</span></div>` : ''}
      <div class="kal-row total ${total < 0 ? 'buyback' : ''}">
        <span class="lbl">${total < 0 ? 'Toko Bayar Pelanggan' : 'Total Bayar'}</span>
        <span class="val">${rp(Math.abs(total))}</span>
      </div>
    `;

    cashInput.value = '';
    updateChange();
    modalBayar.classList.add('show');
  });

  document.getElementById('closeBayar').addEventListener('click', () => modalBayar.classList.remove('show'));
  document.getElementById('btnBatalBayar').addEventListener('click', () => modalBayar.classList.remove('show'));

  document.querySelectorAll('#modalBayar [data-metode]').forEach(m => {
    m.addEventListener('click', () => {
      document.querySelectorAll('#modalBayar [data-metode]').forEach(x => x.classList.remove('selected'));
      m.classList.add('selected');
      bayarMetode = m.dataset.metode;
      document.getElementById('cashSection').style.display = bayarMetode === 'Tunai' ? 'block' : 'none';
    });
  });

  function updateChange() {
    if (bayarMetode !== 'Tunai') return;
    const total = getGrandTotal();
    const cash = parseInt(cashInput.value) || 0;
    const box = document.getElementById('changeBox');
    const txt = document.getElementById('changeTxt');

    if (total < 0) {
      // Toko bayar pelanggan — tidak ada kembalian
      txt.textContent = rp(0);
      box.style.background = 'rgba(139,26,26,0.2)';
      box.style.color = '#d47575';
      return;
    }

    if (cash === 0) {
      txt.textContent = rp(0);
      box.style.background = 'rgba(212,175,55,0.15)';
      box.style.color = 'var(--emas)';
      return;
    }

    const diff = cash - total;
    if (diff < 0) {
      box.style.background = 'rgba(139,26,26,0.25)';
      box.style.color = '#d47575';
      txt.textContent = '− ' + rp(Math.abs(diff));
    } else {
      box.style.background = 'rgba(212,175,55,0.15)';
      box.style.color = 'var(--emas)';
      txt.textContent = rp(diff);
    }
  }
  cashInput.addEventListener('input', updateChange);

  document.getElementById('btnKonfirmasiBayar').addEventListener('click', () => {
    const total = getGrandTotal();
    const cash = parseInt(cashInput.value) || 0;

    if (total > 0 && bayarMetode === 'Tunai' && cash < total) {
      toast('Uang diterima kurang dari total', 'fa-exclamation-circle');
      return;
    }

    prosesTransaksi(total, cash);
  });

  /* =========================================================
     PROSES TRANSAKSI
  ========================================================= */
  function prosesTransaksi(total, cash) {
    const pelanggan = document.getElementById('bayarPelanggan').value.trim() || 'Pelanggan';
    const now = new Date();
    const nomor = 'INV-' + String(data.counter).padStart(4, '0');

    const trx = {
      nomor: nomor,
      tanggal: now.toISOString(),
      pelanggan: pelanggan,
      items: keranjang.map(it => ({ ...it })),
      subtotalJual: keranjang.filter(k => k.tipe === 'jual').reduce((s, it) => s + it.total * it.qty, 0),
      buybackTotal: keranjang.filter(k => k.tipe === 'buyback').reduce((s, it) => s + it.total * it.qty, 0),
      total: total,
      metode: bayarMetode,
      cash: total > 0 && bayarMetode === 'Tunai' ? cash : Math.abs(total),
      change: total > 0 && bayarMetode === 'Tunai' ? cash - total : 0
    };

    data.transaksi.unshift(trx);
    data.counter++;
    save();

    lastTransaksi = trx;

    modalBayar.classList.remove('show');
    tampilkanSertifikat(trx);

    keranjang = [];
    renderProduk();
    renderKeranjang();
    toast('Transaksi berhasil', 'fa-circle-check');
  }

  /* =========================================================
     SERTIFIKAT
  ========================================================= */
  const modalSertifikat = document.getElementById('modalSertifikat');

  function tampilkanSertifikat(trx) {
    const tgl = new Date(trx.tanggal).toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' });

    const itemJual = trx.items.filter(i => i.tipe === 'jual');
    const itemBuyback = trx.items.filter(i => i.tipe === 'buyback');

    const itemsJualHtml = itemJual.map((it, idx) => `
      <tr>
        <td>
          <div class="item-name">${it.nama}</div>
          <div class="item-detail">${it.kode} · ${KADAR_LABEL[it.kadar]} · ${formatGram(it.berat)}</div>
        </td>
        <td class="r">${rp(it.total * it.qty)}</td>
      </tr>
    `).join('');

    const itemsBuybackHtml = itemBuyback.map(it => `
      <tr>
        <td>
          <div class="item-name">Buyback · ${it.nama}</div>
          <div class="item-detail">Dari ${it.pelanggan} · ${KADAR_LABEL[it.kadar]} · ${formatGram(it.berat)} · ${it.kondisi}</div>
        </td>
        <td class="r" style="color:#8b1a1a;">− ${rp(it.total * it.qty)}</td>
      </tr>
    `).join('');

    document.getElementById('sertifikatBody').innerHTML = `
      <div class="sertifikat">
        <div class="ser-head">
          <div class="logo">LOGAM MULIA</div>
          <div class="sub">Toko Emas & Perhiasan · Jakarta</div>
          <div class="nomor">${trx.nomor}</div>
        </div>

        <div class="ser-meta">
          <div class="item"><span class="lbl">Pelanggan</span><span class="val">${trx.pelanggan}</span></div>
          <div class="item"><span class="lbl">Tanggal</span><span class="val">${tgl}</span></div>
          <div class="item" style="grid-column:1/-1;">
            <span class="lbl">Harga Emas</span>
            <span class="val">${rp(data.hargaJual)}/gr (jual) · ${rp(data.hargaBuyback)}/gr (buyback)</span>
          </div>
        </div>

        ${itemJual.length > 0 ? `
          <table class="ser-table">
            <thead>
              <tr><th>Item Pembelian</th><th class="r">Jumlah</th></tr>
            </thead>
            <tbody>${itemsJualHtml}</tbody>
          </table>
        ` : ''}

        ${itemBuyback.length > 0 ? `
          <table class="ser-table">
            <thead>
              <tr><th>Buyback (Emas dari Pelanggan)</th><th class="r">Nilai</th></tr>
            </thead>
            <tbody>${itemsBuybackHtml}</tbody>
          </table>
        ` : ''}

        <div class="ser-total">
          <div class="row"><span>Subtotal Pembelian</span><span>${rp(trx.subtotalJual)}</span></div>
          ${trx.buybackTotal > 0 ? `<div class="row" style="color:#8b1a1a;"><span>Buyback</span><span>− ${rp(trx.buybackTotal)}</span></div>` : ''}
          <div class="row grand">
            <span>${trx.total < 0 ? 'Dibayar Toko' : 'TOTAL'}</span>
            <span>${rp(Math.abs(trx.total))}</span>
          </div>
          <div class="row" style="margin-top:8px;"><span>Metode</span><span>${trx.metode}</span></div>
        </div>

        <div class="ser-foot">
          <div class="garansi">Garansi Tukar & Buyback Seumur Hidup</div>
          Simpan sertifikat ini sebagai bukti kepemilikan<br>
          Berlaku untuk tukar tambah dan buyback<br>
          <div class="ser-qr"><i class="fas fa-qrcode"></i></div>
          <div style="font-size:0.66rem; letter-spacing:1.5px;">LOGAM MULIA · TERPERCAYA SEJAK 1995</div>
        </div>
      </div>
    `;
    modalSertifikat.classList.add('show');
  }

  document.getElementById('closeSertifikat').addEventListener('click', () => modalSertifikat.classList.remove('show'));
  document.getElementById('btnTutupSertifikat').addEventListener('click', () => modalSertifikat.classList.remove('show'));
  document.getElementById('btnCetakSertifikat').addEventListener('click', () => {
    const w = window.open('', '', 'width=600,height=800');
    w.document.write('<pre style="font-family:Georgia,serif; font-size:12px; padding:24px; white-space:pre-wrap;">' +
      document.getElementById('sertifikatBody').innerText + '</pre>');
    w.document.close(); w.focus(); w.print();
    toast('Sertifikat dikirim ke printer', 'fa-print');
  });

  /* =========================================================
     ADMIN
  ========================================================= */
  function renderAdmin() {
    document.getElementById('fHargaJual').value = data.hargaJual;
    document.getElementById('fHargaBuyback').value = data.hargaBuyback;
    document.getElementById('fSpread').value = data.spread;

    const total = data.produk.length;
    const totalBerat = data.produk.reduce((s, p) => s + p.berat * p.stok, 0);
    const nilaiStok = data.produk.reduce((s, p) => {
      const faktor = KADAR_FAKTOR[p.kadar] || 1;
      return s + (data.hargaJual * p.berat * faktor + p.ongkos * p.berat) * p.stok;
    }, 0);
    const out = data.produk.filter(p => p.stok <= 0).length;

    document.getElementById('sTotal').textContent = total;
    document.getElementById('sBerat').textContent = totalBerat.toFixed(2) + ' gr';
    document.getElementById('sNilai').textContent = rp(nilaiStok);
    document.getElementById('sOut').textContent = out;

    const grid = document.getElementById('stokGrid');
    document.getElementById('itemCount').textContent = total + ' item';

    if (total === 0) {
      grid.innerHTML = '<div style="grid-column:1/-1; text-align:center; padding:40px; color:var(--ink-2); font-family:\'Cormorant Garamond\',serif; font-style:italic;">Belum ada item</div>';
    } else {
      grid.innerHTML = data.produk.map(p => {
        const faktor = KADAR_FAKTOR[p.kadar] || 1;
        const hargaTotal = data.hargaJual * p.berat * faktor + p.ongkos * p.berat;
        return `
          <div class="stok-card">
            <div class="kode">${p.kode}</div>
            <div class="nama">${p.nama}</div>
            <div class="row"><span>Berat</span><span class="val">${formatGram(p.berat)}</span></div>
            <div class="row"><span>Kadar</span><span class="val">${KADAR_LABEL[p.kadar]}</span></div>
            <div class="row"><span>Ongkos/gr</span><span class="val">${rp(p.ongkos)}</span></div>
            <div class="row"><span>Stok</span><span class="val" style="color:${p.stok <= 0 ? '#d47575' : p.stok <= 2 ? 'var(--emas-tua)' : 'var(--emas)'};">${p.stok}</span></div>
            <div class="harga-row">${rp(hargaTotal)}</div>
          </div>
        `;
      }).join('');
    }

    // Transaksi terakhir
    const kasList = document.getElementById('kasList');
    if (data.transaksi.length === 0) {
      kasList.innerHTML = '<div style="text-align:center; padding:30px; color:var(--ink-2); font-family:\'Cormorant Garamond\',serif; font-style:italic;">Belum ada transaksi</div>';
    } else {
      kasList.innerHTML = data.transaksi.slice(0, 10).map(t => {
        const tgl = new Date(t.tanggal).toLocaleString('id-ID', { dateStyle:'short', timeStyle:'short' });
        const isBuyback = t.total < 0;
        return `
          <div class="kas-item">
            <div class="info">
              <div class="nama">${t.nomor} · ${t.pelanggan}</div>
              <div class="meta">${tgl} · ${t.items.length} item · ${t.metode}</div>
            </div>
            <div class="val ${isBuyback ? 'keluar' : ''}">${isBuyback ? '− ' + rp(Math.abs(t.total)) : rp(t.total)}</div>
          </div>
        `;
      }).join('');
    }
  }

  /* =========================================================
     UPDATE HARGA EMAS
  ========================================================= */
  document.getElementById('btnUpdateHarga').addEventListener('click', () => {
    const jual = parseInt(document.getElementById('fHargaJual').value);
    const buyback = parseInt(document.getElementById('fHargaBuyback').value);
    const spread = parseFloat(document.getElementById('fSpread').value);

    if (isNaN(jual) || jual <= 0) return toast('Harga jual tidak valid', 'fa-exclamation-circle');
    if (isNaN(buyback) || buyback <= 0) return toast('Harga buyback tidak valid', 'fa-exclamation-circle');
    if (isNaN(spread) || spread < 0 || spread > 30) return toast('Spread tidak valid (0-30%)', 'fa-exclamation-circle');

    data.hargaJual = jual;
    data.hargaBuyback = buyback;
    data.spread = spread;
    save();
    updateTopHarga();
    renderProduk();
    toast('Harga emas diperbarui', 'fa-circle-check');
  });

  /* =========================================================
     FORM PRODUK
  ========================================================= */
  const modalProduk = document.getElementById('modalProduk');

  function bukaFormProduk(id) {
    const isEdit = id != null;
    document.getElementById('produkFormTitle').textContent = isEdit ? 'Edit Item' : 'Tambah Item';
    document.getElementById('editId').value = isEdit ? id : '';
    document.getElementById('pKode').value = '';
    document.getElementById('pNama').value = '';
    document.getElementById('pKategori').value = 'cincin';
    document.getElementById('pBerat').value = '';
    document.getElementById('pKadar').value = '24';
    document.getElementById('pOngkos').value = '50000';
    document.getElementById('pStok').value = '1';

    if (isEdit) {
      const p = data.produk.find(x => x.id === id);
      if (p) {
        document.getElementById('pKode').value = p.kode;
        document.getElementById('pNama').value = p.nama;
        document.getElementById('pKategori').value = p.kategori;
        document.getElementById('pBerat').value = p.berat;
        document.getElementById('pKadar').value = p.kadar;
        document.getElementById('pOngkos').value = p.ongkos;
        document.getElementById('pStok').value = p.stok;
      }
    }
    modalProduk.classList.add('show');
  }

  document.getElementById('btnTambahProduk').addEventListener('click', () => bukaFormProduk(null));
  document.getElementById('closeProduk').addEventListener('click', () => modalProduk.classList.remove('show'));
  document.getElementById('btnBatalProduk').addEventListener('click', () => modalProduk.classList.remove('show'));

  document.getElementById('btnSimpanProduk').addEventListener('click', () => {
    const editId = document.getElementById('editId').value;
    const kode = document.getElementById('pKode').value.trim().toUpperCase();
    const nama = document.getElementById('pNama').value.trim();
    const kategori = document.getElementById('pKategori').value;
    const berat = parseFloat(document.getElementById('pBerat').value);
    const kadar = document.getElementById('pKadar').value;
    const ongkos = parseInt(document.getElementById('pOngkos').value) || 0;
    const stok = parseInt(document.getElementById('pStok').value) || 0;

    if (!kode) return toast('Kode harus diisi', 'fa-exclamation-circle');
    if (!nama) return toast('Nama harus diisi', 'fa-exclamation-circle');
    if (isNaN(berat) || berat <= 0) return toast('Berat tidak valid', 'fa-exclamation-circle');

    if (editId) {
      const p = data.produk.find(x => x.id === parseInt(editId));
      if (p) Object.assign(p, { kode, nama, kategori, berat, kadar, ongkos, stok });
      toast('Item diperbarui', 'fa-circle-check');
    } else {
      if (data.produk.some(p => p.kode === kode)) return toast('Kode sudah dipakai', 'fa-exclamation-circle');
      const newId = data.produk.length ? Math.max(...data.produk.map(p => p.id)) + 1 : 1;
      data.produk.push({ id:newId, kode, nama, kategori, berat, kadar, ongkos, stok });
      toast('Item baru ditambahkan', 'fa-circle-check');
    }
    save();
    modalProduk.classList.remove('show');
    renderAdmin();
    renderProduk();
  });

  /* =========================================================
     RESET
  ========================================================= */
  document.getElementById('btnResetData').addEventListener('click', () => {
    if (!confirm('Reset semua data ke default?')) return;
    data = {
      hargaJual: 1450000,
      hargaBuyback: 1350000,
      spread: 7,
      produk: JSON.parse(JSON.stringify(defaultProduk)),
      transaksi: [],
      counter: 1
    };
    keranjang = [];
    save();
    updateTopHarga();
    renderAdmin();
    renderProduk();
    renderKeranjang();
    toast('Data direset', 'fa-rotate');
  });

  /* =========================================================
     MOBILE BOTTOM SHEET
  ========================================================= */
  const colKeranjang = document.getElementById('colKeranjang');
  const keranjangHead = document.getElementById('keranjangHead');

  keranjangHead.addEventListener('click', (e) => {
    if (window.innerWidth > 720) return;
    // Hanya toggle kalau klik di area head, bukan di tombol
    if (e.target.closest('button')) return;
    colKeranjang.classList.toggle('expanded');
  });

  function updateBottomBar() {
    if (window.innerWidth <= 720 && keranjang.length > 0) {
      colKeranjang.classList.add('expanded');
    }
  }

  /* =========================================================
     INIT
  ========================================================= */
  updateTopHarga();
  renderProduk();
  renderKeranjang();
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>