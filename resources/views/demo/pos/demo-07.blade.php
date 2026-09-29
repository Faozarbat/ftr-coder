@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Warung Segar — POS Sayur & Daging</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,600;0,700;1,600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; -webkit-tap-highlight-color:transparent; }
body {
  font-family:'Inter',system-ui,sans-serif;
  background:#e8e0cf;
  color:#2a1f14;
  min-height:100vh;
  font-size:14px;
  overflow-x:hidden;
}

:root {
  --hijau:#2d6a4f;
  --hijau-tua:#1b4332;
  --hijau-muda:#74c69d;
  --krem:#f5f0e3;
  --krem-tua:#e8ddc4;
  --merah:#c8442a;
  --merah-tua:#8a2a17;
  --coklat:#5a3e2b;
  --abu:#8a7a5f;
}

.app {
  max-width:1480px;
  margin:0 auto;
  background:var(--krem);
  min-height:100vh;
  display:flex;
  flex-direction:column;
  position:relative;
}

/* ==================== HEADER ==================== */
.topbar {
  background:var(--hijau-tua);
  color:var(--krem);
  padding:0 22px;
  height:64px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  border-bottom:3px solid var(--merah);
  position:sticky;
  top:0;
  z-index:50;
}
.brand { display:flex; align-items:center; gap:12px; }
.brand-mark {
  width:40px; height:40px;
  background:var(--merah);
  color:var(--krem);
  display:flex; align-items:center; justify-content:center;
  border-radius:50%;
  font-size:1.1rem;
  transform:rotate(-8deg);
}
.brand h1 {
  font-family:'Fraunces',serif;
  font-size:1.15rem;
  font-weight:700;
  letter-spacing:-0.3px;
  line-height:1;
}
.brand h1 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.6rem;
  font-weight:500;
  letter-spacing:2px;
  color:var(--hijau-muda);
  text-transform:uppercase;
  margin-top:4px;
}

.topbar-right { display:flex; align-items:center; gap:12px; }
.mode-nav {
  display:flex;
  background:#0f291e;
  padding:4px;
  border-radius:8px;
  gap:2px;
}
.mode-nav button {
  background:transparent;
  border:none;
  color:#a8c8b5;
  padding:8px 14px;
  border-radius:6px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.74rem;
  font-weight:600;
  display:flex; align-items:center; gap:6px;
  transition:all 0.15s;
}
.mode-nav button:hover { color:var(--krem); }
.mode-nav button.active {
  background:var(--hijau-muda);
  color:var(--hijau-tua);
}
.user-badge {
  display:flex; align-items:center; gap:8px;
  background:#0f291e;
  padding:6px 12px 6px 6px;
  border-radius:40px;
}
.user-badge .avatar {
  width:28px; height:28px;
  background:var(--hijau-muda);
  color:var(--hijau-tua);
  border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  font-weight:700; font-size:0.75rem;
}
.user-badge .name {
  font-size:0.76rem; font-weight:600;
}

/* ==================== PAGE ==================== */
.page { display:none; flex:1; }
.page.active { display:flex; flex-direction:column; }

/* ==================== KASIR LAYOUT ==================== */
.kasir-grid {
  display:grid;
  grid-template-columns:200px 1fr 380px;
  gap:0;
  flex:1;
  min-height:0;
}

/* === KOLOM 1: KATEGORI === */
.col-kategori {
  background:var(--krem-tua);
  border-right:1px solid #d8cbb0;
  padding:18px 0;
  display:flex;
  flex-direction:column;
  gap:4px;
  overflow-y:auto;
}
.kat-title {
  padding:0 18px 12px;
  font-family:'Fraunces',serif;
  font-size:0.78rem;
  font-style:italic;
  color:var(--coklat);
  letter-spacing:0.5px;
  border-bottom:1px dashed #c9b992;
  margin-bottom:8px;
}
.kat-btn {
  background:transparent;
  border:none;
  padding:12px 18px;
  cursor:pointer;
  text-align:left;
  font-family:'Inter',sans-serif;
  font-size:0.82rem;
  font-weight:500;
  color:var(--coklat);
  display:flex;
  align-items:center;
  gap:10px;
  transition:all 0.12s;
  border-left:3px solid transparent;
}
.kat-btn:hover {
  background:#e0d3b6;
  color:var(--hijau-tua);
}
.kat-btn.active {
  background:var(--krem);
  color:var(--hijau-tua);
  font-weight:600;
  border-left-color:var(--merah);
}
.kat-btn i {
  width:18px;
  text-align:center;
  font-size:0.85rem;
}
.kat-btn.active i { color:var(--merah); }

/* === KOLOM 2: PRODUK === */
.col-produk {
  padding:20px 22px;
  overflow-y:auto;
  min-height:0;
}
.produk-head {
  display:flex;
  justify-content:space-between;
  align-items:flex-end;
  margin-bottom:16px;
  flex-wrap:wrap; gap:12px;
}
.produk-head .title-block h2 {
  font-family:'Fraunces',serif;
  font-size:1.5rem;
  font-weight:600;
  color:var(--hijau-tua);
  letter-spacing:-0.3px;
}
.produk-head .title-block h2 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.68rem;
  font-weight:500;
  color:var(--abu);
  letter-spacing:1.5px;
  text-transform:uppercase;
  margin-top:5px;
}
.search-mini {
  display:flex;
  align-items:center;
  background:white;
  border:1.5px solid #d8cbb0;
  border-radius:8px;
  padding:0 12px;
  min-width:200px;
}
.search-mini i { color:var(--abu); font-size:0.82rem; }
.search-mini input {
  border:none; outline:none;
  padding:9px 8px;
  font-size:0.85rem;
  width:100%;
  background:transparent;
  color:var(--hijau-tua);
  font-family:'Inter',sans-serif;
}
.search-mini input::placeholder { color:#b8a888; }

.produk-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(165px,1fr));
  gap:12px;
}
.produk-card {
  background:white;
  border:1.5px solid #e8ddc4;
  border-radius:12px;
  padding:14px 12px;
  cursor:pointer;
  transition:all 0.15s;
  display:flex;
  flex-direction:column;
  gap:8px;
  position:relative;
  overflow:hidden;
}
.produk-card:hover {
  border-color:var(--hijau);
  transform:translateY(-2px);
  box-shadow:0 6px 14px -6px rgba(45,106,79,0.25);
}
.produk-card.out {
  opacity:0.4;
  cursor:not-allowed;
}
.produk-card.out:hover {
  transform:none;
  box-shadow:none;
  border-color:#e8ddc4;
}
.produk-card::before {
  content:'';
  position:absolute;
  top:0; right:0;
  width:24px; height:24px;
  background:var(--hijau-muda);
  clip-path:polygon(100% 0, 100% 100%, 0 0);
  opacity:0.6;
}
.produk-card .p-icon {
  width:44px; height:44px;
  background:var(--krem);
  color:var(--hijau);
  display:flex; align-items:center; justify-content:center;
  border-radius:10px;
  font-size:1.2rem;
}
.produk-card h3 {
  font-family:'Fraunces',serif;
  font-size:0.92rem;
  font-weight:600;
  color:var(--hijau-tua);
  line-height:1.25;
  min-height:34px;
}
.produk-card .p-satuan {
  display:inline-flex;
  align-items:center;
  gap:4px;
  font-size:0.62rem;
  background:var(--krem-tua);
  color:var(--coklat);
  padding:3px 8px;
  border-radius:10px;
  font-weight:600;
  text-transform:uppercase;
  letter-spacing:0.5px;
  width:fit-content;
}
.produk-card .p-harga {
  display:flex;
  align-items:baseline;
  gap:4px;
}
.produk-card .p-harga .angka {
  font-family:'Fraunces',serif;
  font-size:1.05rem;
  font-weight:700;
  color:var(--merah);
}
.produk-card .p-harga .per {
  font-size:0.68rem;
  color:var(--abu);
  font-weight:500;
}
.produk-card .p-stok {
  font-size:0.68rem;
  color:var(--abu);
  padding-top:6px;
  border-top:1px dashed #e8ddc4;
}
.produk-card .p-stok.low { color:var(--merah); font-weight:600; }

/* === KOLOM 3: KERANJANG === */
.col-keranjang {
  background:white;
  border-left:2px solid var(--hijau-tua);
  display:flex;
  flex-direction:column;
  min-height:0;
}
.keranjang-head {
  background:var(--hijau-tua);
  color:var(--krem);
  padding:16px 20px;
  display:flex;
  justify-content:space-between;
  align-items:center;
}
.keranjang-head .info h3 {
  font-family:'Fraunces',serif;
  font-size:1rem;
  font-weight:600;
  display:flex; align-items:center; gap:8px;
}
.keranjang-head .info h3 i { color:var(--hijau-muda); }
.keranjang-head .info .meta {
  font-size:0.68rem;
  color:#a8c8b5;
  margin-top:4px;
  letter-spacing:0.5px;
}
.keranjang-head .badge-count {
  background:var(--merah);
  color:white;
  font-weight:700;
  padding:5px 12px;
  border-radius:20px;
  font-size:0.76rem;
}

.keranjang-body {
  flex:1;
  overflow-y:auto;
  padding:14px 18px;
  min-height:0;
}
.keranjang-empty {
  text-align:center;
  padding:50px 20px;
  color:#b8a888;
}
.keranjang-empty i {
  font-size:2.4rem;
  display:block;
  margin-bottom:12px;
  color:#d8cbb0;
}
.keranjang-empty strong {
  display:block;
  color:var(--abu);
  font-size:0.88rem;
  margin-bottom:4px;
  font-family:'Fraunces',serif;
  font-style:italic;
}

.krj-item {
  padding:12px 0;
  border-bottom:1px dashed #e8ddc4;
}
.krj-item:last-child { border-bottom:none; }
.krj-top {
  display:flex;
  justify-content:space-between;
  gap:10px;
  margin-bottom:6px;
}
.krj-nama {
  font-family:'Fraunces',serif;
  font-size:0.9rem;
  font-weight:600;
  color:var(--hijau-tua);
  line-height:1.25;
}
.krj-harga-total {
  font-family:'Fraunces',serif;
  font-weight:700;
  color:var(--merah);
  white-space:nowrap;
  font-size:0.95rem;
}
.krj-berat-info {
  font-size:0.72rem;
  color:var(--abu);
  margin-bottom:8px;
}
.krj-berat-info strong {
  color:var(--coklat);
  font-weight:600;
}
.krj-actions {
  display:flex;
  justify-content:space-between;
  align-items:center;
}
.krj-berat {
  display:flex;
  align-items:center;
  gap:6px;
}
.berat-btn {
  background:var(--krem-tua);
  border:none;
  color:var(--hijau-tua);
  width:28px; height:28px;
  border-radius:6px;
  cursor:pointer;
  font-weight:700;
  font-size:0.75rem;
}
.berat-btn:hover {
  background:var(--hijau);
  color:var(--krem);
}
.berat-display {
  background:var(--hijau-tua);
  color:var(--krem);
  padding:4px 10px;
  border-radius:6px;
  font-family:'Courier New',monospace;
  font-size:0.8rem;
  font-weight:700;
  min-width:56px;
  text-align:center;
  cursor:pointer;
}
.krj-del {
  background:transparent;
  border:none;
  color:#b8a888;
  cursor:pointer;
  font-size:0.75rem;
  padding:4px 8px;
}
.krj-del:hover { color:var(--merah); }

.keranjang-foot {
  background:var(--krem);
  border-top:2px solid var(--hijau-tua);
  padding:16px 20px;
}
.kf-row {
  display:flex;
  justify-content:space-between;
  font-size:0.82rem;
  color:var(--coklat);
  margin-bottom:6px;
}
.kf-row.discount { color:var(--merah); font-weight:600; }
.kf-row.grand {
  font-family:'Fraunces',serif;
  font-size:1.5rem;
  font-weight:700;
  color:var(--hijau-tua);
  padding-top:10px;
  margin-top:8px;
  border-top:1px dashed #c9b992;
  margin-bottom:14px;
  letter-spacing:-0.5px;
}
.btn-bayar-big {
  width:100%;
  background:var(--hijau-tua);
  color:var(--krem);
  border:none;
  padding:16px;
  border-radius:10px;
  cursor:pointer;
  font-family:'Fraunces',serif;
  font-size:1rem;
  font-weight:600;
  letter-spacing:0.3px;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:10px;
  transition:background 0.15s;
}
.btn-bayar-big:hover { background:#0f291e; }
.btn-bayar-big:disabled {
  background:#c9b992;
  cursor:not-allowed;
}
.btn-bayar-big i { color:var(--hijau-muda); }
.btn-bayar-big:disabled i { color:var(--krem); }

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
  flex-wrap:wrap; gap:14px;
  margin-bottom:20px;
  padding-bottom:16px;
  border-bottom:2px solid var(--hijau-tua);
}
.admin-head h2 {
  font-family:'Fraunces',serif;
  font-size:1.5rem;
  font-weight:600;
  color:var(--hijau-tua);
  letter-spacing:-0.3px;
}
.admin-head h2 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.7rem;
  font-weight:500;
  color:var(--abu);
  letter-spacing:1.5px;
  text-transform:uppercase;
  margin-top:5px;
}
.admin-actions { display:flex; gap:10px; }
.btn-outline {
  background:transparent;
  border:1.5px solid var(--hijau-tua);
  color:var(--hijau-tua);
  padding:10px 18px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.78rem;
  font-weight:600;
  display:flex; align-items:center; gap:8px;
  transition:all 0.15s;
}
.btn-outline:hover {
  background:var(--hijau-tua);
  color:var(--krem);
}
.btn-solid {
  background:var(--hijau-tua);
  border:none;
  color:var(--krem);
  padding:10px 18px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.78rem;
  font-weight:600;
  display:flex; align-items:center; gap:8px;
}
.btn-solid:hover { background:#0f291e; }
.btn-solid i { color:var(--hijau-muda); }

.stats-row {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:12px;
  margin-bottom:20px;
}
.stat-card {
  background:white;
  border:1.5px solid #e8ddc4;
  border-radius:12px;
  padding:16px 18px;
  position:relative;
  overflow:hidden;
}
.stat-card::before {
  content:'';
  position:absolute;
  top:0; left:0;
  width:4px; height:100%;
  background:var(--hijau);
}
.stat-card.merah::before { background:var(--merah); }
.stat-card.kuning::before { background:#e0a83c; }
.stat-card .s-lbl {
  font-size:0.68rem;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:1px;
  font-weight:600;
  margin-bottom:6px;
}
.stat-card .s-val {
  font-family:'Fraunces',serif;
  font-size:1.5rem;
  font-weight:700;
  color:var(--hijau-tua);
}
.stat-card.merah .s-val { color:var(--merah); }

.table-box {
  background:white;
  border:1.5px solid #e8ddc4;
  border-radius:12px;
  overflow:hidden;
}
table { width:100%; border-collapse:collapse; font-size:0.84rem; }
thead { background:var(--krem-tua); }
th {
  text-align:left;
  padding:12px 14px;
  font-size:0.68rem;
  font-weight:700;
  color:var(--coklat);
  text-transform:uppercase;
  letter-spacing:0.8px;
  border-bottom:1.5px solid #d8cbb0;
}
td {
  padding:13px 14px;
  border-bottom:1px solid #f0e8d5;
  color:#2a1f14;
  vertical-align:middle;
}
tbody tr:last-child td { border-bottom:none; }
tbody tr:hover { background:#faf6eb; }
.td-name {
  display:flex; align-items:center; gap:10px;
}
.td-icon {
  width:34px; height:34px;
  background:var(--krem);
  color:var(--hijau);
  display:flex; align-items:center; justify-content:center;
  border-radius:8px;
  font-size:0.9rem;
  flex-shrink:0;
}
.td-info strong {
  display:block;
  font-family:'Fraunces',serif;
  font-weight:600;
  color:var(--hijau-tua);
  font-size:0.9rem;
}
.td-info small {
  font-size:0.68rem;
  color:var(--abu);
}
.badge-satuan {
  display:inline-block;
  padding:3px 10px;
  border-radius:10px;
  font-size:0.65rem;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:0.5px;
}
.badge-satuan.kg { background:#d8f3dc; color:#1b4332; }
.badge-satuan.gram { background:#e8f4d8; color:#3d5a2b; }
.badge-satuan.ikat { background:#fce7d8; color:#8a3a17; }
.badge-satuan.butir { background:#fff3cd; color:#8a6b1f; }
.badge-satuan.pack { background:#e0e8f0; color:#2a4a6a; }

.stok-cell {
  font-family:'Fraunces',serif;
  font-weight:700;
  color:var(--hijau-tua);
}
.stok-cell small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.66rem;
  color:var(--abu);
  font-weight:500;
  margin-top:2px;
}
.stok-cell.low { color:#e0a83c; }
.stok-cell.out { color:var(--merah); }

.row-actions { display:flex; gap:5px; justify-content:flex-end; }
.icon-btn {
  width:30px; height:30px;
  border:1.5px solid #e8ddc4;
  background:white;
  color:var(--coklat);
  cursor:pointer;
  border-radius:7px;
  font-size:0.75rem;
  display:flex; align-items:center; justify-content:center;
}
.icon-btn:hover {
  background:var(--hijau-tua);
  color:var(--krem);
  border-color:var(--hijau-tua);
}
.icon-btn.danger:hover {
  background:var(--merah);
  border-color:var(--merah);
}

/* ==================== MODAL ==================== */
.modal-bg {
  position:fixed;
  inset:0;
  background:rgba(27,67,50,0.55);
  display:none;
  align-items:center;
  justify-content:center;
  z-index:100;
  padding:16px;
}
.modal-bg.show { display:flex; }
.modal {
  background:var(--krem);
  border-radius:16px;
  width:100%;
  max-width:480px;
  max-height:92vh;
  overflow-y:auto;
  box-shadow:0 25px 60px -15px rgba(0,0,0,0.4);
}
.modal-head {
  padding:22px 24px 16px;
  border-bottom:1px dashed #c9b992;
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
}
.modal-head h3 {
  font-family:'Fraunces',serif;
  font-size:1.15rem;
  font-weight:600;
  color:var(--hijau-tua);
  display:flex; align-items:center; gap:10px;
  padding-right:30px;
}
.modal-head h3 i { color:var(--merah); }
.modal-head .sub {
  font-size:0.76rem;
  color:var(--abu);
  margin-top:5px;
  font-style:italic;
}
.modal-close {
  background:transparent;
  border:1.5px solid #c9b992;
  width:32px; height:32px;
  border-radius:50%;
  color:var(--coklat);
  cursor:pointer;
}
.modal-close:hover {
  background:var(--merah);
  color:var(--krem);
  border-color:var(--merah);
}
.modal-body { padding:22px 24px; }
.modal-foot {
  padding:16px 24px 22px;
  border-top:1px dashed #c9b992;
  display:flex;
  gap:10px;
}
.modal-foot .btn-outline { flex:1; justify-content:center; }
.modal-foot .btn-solid { flex:2; justify-content:center; padding:13px; }

/* ==================== TIMBANGAN (KEYPAD) ==================== */
.berat-display-big {
  background:var(--hijau-tua);
  color:var(--krem);
  border-radius:12px;
  padding:22px 20px;
  text-align:center;
  margin-bottom:20px;
  position:relative;
  overflow:hidden;
}
.berat-display-big::before {
  content:'TIMBANGAN';
  position:absolute;
  top:8px; left:50%;
  transform:translateX(-50%);
  font-family:'Inter',sans-serif;
  font-size:0.6rem;
  letter-spacing:3px;
  color:var(--hijau-muda);
  font-weight:600;
}
.berat-display-big .angka {
  font-family:'Courier New',monospace;
  font-size:3rem;
  font-weight:700;
  letter-spacing:2px;
  line-height:1;
  margin-top:8px;
}
.berat-display-big .satuan {
  font-family:'Fraunces',serif;
  font-style:italic;
  font-size:1rem;
  color:var(--hijau-muda);
  margin-top:6px;
}
.berat-display-big .total-harga {
  font-family:'Fraunces',serif;
  font-size:1.3rem;
  font-weight:700;
  color:var(--krem);
  margin-top:14px;
  padding-top:14px;
  border-top:1px dashed rgba(168,200,181,0.4);
}

.keypad {
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:8px;
  margin-bottom:16px;
}
.key {
  background:white;
  border:1.5px solid #d8cbb0;
  padding:16px;
  border-radius:10px;
  cursor:pointer;
  font-family:'Fraunces',serif;
  font-size:1.2rem;
  font-weight:700;
  color:var(--hijau-tua);
  transition:all 0.1s;
}
.key:hover {
  background:var(--hijau-muda);
  border-color:var(--hijau);
}
.key:active {
  transform:scale(0.96);
}
.key.clear { color:var(--merah); }
.key.backspace { color:var(--coklat); }
.key.quick {
  font-family:'Inter',sans-serif;
  font-size:0.78rem;
  font-weight:600;
  padding:12px 6px;
}
.key.enter {
  background:var(--hijau-tua);
  color:var(--krem);
  border-color:var(--hijau-tua);
  grid-column:span 3;
  font-size:0.95rem;
  padding:14px;
}
.key.enter:hover { background:#0f291e; }

.quick-weights {
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:6px;
  margin-bottom:14px;
}
.quick-weight {
  background:var(--krem);
  border:1.5px solid #d8cbb0;
  padding:10px 4px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.75rem;
  font-weight:600;
  color:var(--hijau-tua);
  transition:all 0.15s;
}
.quick-weight:hover {
  background:var(--hijau-tua);
  color:var(--krem);
}

/* ==================== STRUK ==================== */
.struk {
  background:white;
  border:1.5px solid #d8cbb0;
  border-radius:8px;
  padding:22px 20px;
  font-family:'Courier New',monospace;
  font-size:0.76rem;
  color:#2a1f14;
  line-height:1.55;
}
.struk .s-head {
  text-align:center;
  padding-bottom:12px;
  border-bottom:1px dashed #c9b992;
  margin-bottom:12px;
}
.struk .s-head h4 {
  font-family:'Fraunces',serif;
  font-size:1.1rem;
  font-weight:700;
  color:var(--hijau-tua);
  letter-spacing:0.5px;
}
.struk .s-head p {
  font-size:0.68rem;
  color:var(--abu);
  margin-top:4px;
  line-height:1.6;
}
.struk .s-meta {
  font-size:0.68rem;
  color:var(--abu);
  margin-bottom:10px;
  line-height:1.7;
}
.struk .s-meta strong { color:var(--hijau-tua); }
.struk .s-item {
  font-size:0.74rem;
  margin-bottom:8px;
}
.struk .s-line1 {
  display:flex;
  justify-content:space-between;
  font-weight:700;
}
.struk .s-line2 {
  display:flex;
  justify-content:space-between;
  color:var(--abu);
  font-size:0.68rem;
}
.struk .s-line {
  border-top:1px dashed #c9b992;
  margin:10px 0;
}
.struk .s-total .s-row {
  display:flex;
  justify-content:space-between;
  font-size:0.76rem;
  margin-bottom:4px;
}
.struk .s-total .s-row.disc { color:var(--merah); }
.struk .s-total .s-grand {
  display:flex;
  justify-content:space-between;
  font-family:'Fraunces',serif;
  font-size:1.15rem;
  font-weight:700;
  color:var(--hijau-tua);
  padding-top:10px;
  margin-top:8px;
  border-top:1px dashed #c9b992;
}
.struk .s-foot {
  text-align:center;
  font-size:0.68rem;
  color:var(--abu);
  margin-top:14px;
  padding-top:12px;
  border-top:1px dashed #c9b992;
  line-height:1.7;
  font-style:italic;
}
.struk .s-foot strong {
  color:var(--hijau-tua);
  font-style:normal;
  font-family:'Fraunces',serif;
}

/* ==================== TOAST ==================== */
.toast {
  position:fixed;
  bottom:24px; left:50%;
  transform:translateX(-50%) translateY(80px);
  background:var(--hijau-tua);
  color:var(--krem);
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
  box-shadow:0 10px 30px -8px rgba(27,67,50,0.5);
  max-width:90vw;
}
.toast.show {
  opacity:1;
  transform:translateX(-50%) translateY(0);
}
.toast i { color:var(--hijau-muda); }

/* ==================== RESPONSIVE - TABLET ==================== */
@media (max-width: 1024px) {
  .kasir-grid { grid-template-columns:1fr 340px; }
  .col-kategori {
    grid-column:1/-1;
    grid-row:1;
    flex-direction:row;
    padding:10px 12px;
    overflow-x:auto;
    overflow-y:hidden;
    border-right:none;
    border-bottom:1px solid #d8cbb0;
    gap:8px;
  }
  .kat-title { display:none; }
  .kat-btn {
    white-space:nowrap;
    border-left:none;
    border-bottom:3px solid transparent;
    padding:10px 14px;
    border-radius:0;
    flex-shrink:0;
  }
  .kat-btn.active {
    background:transparent;
    border-left:none;
    border-bottom-color:var(--merah);
  }
}

/* ==================== RESPONSIVE - MOBILE ==================== */
@media (max-width: 720px) {
  body { font-size:13px; }

  /* Header ringkas */
  .topbar {
    height:56px;
    padding:0 14px;
  }
  .brand-mark { width:34px; height:34px; font-size:0.95rem; }
  .brand h1 { font-size:1rem; }
  .brand h1 small { font-size:0.55rem; letter-spacing:1.5px; }
  .mode-nav button span { display:none; }
  .mode-nav button { padding:8px 10px; }
  .user-badge .name { display:none; }
  .user-badge { padding:5px; }

  /* Grid berubah jadi single column */
  .kasir-grid {
    grid-template-columns:1fr;
    padding-bottom:80px; /* ruang untuk bottom bar */
  }

  /* Kategori - scroll horizontal seperti chips */
  .col-kategori {
    grid-column:1;
    grid-row:1;
    padding:12px 14px;
    gap:6px;
    position:sticky;
    top:56px;
    z-index:40;
    background:var(--krem);
    box-shadow:0 4px 10px -6px rgba(0,0,0,0.1);
  }
  .kat-btn {
    background:white;
    border:1.5px solid #d8cbb0;
    border-radius:20px;
    padding:8px 14px;
    font-size:0.74rem;
    border-left:1.5px solid #d8cbb0;
    border-bottom:1.5px solid #d8cbb0;
  }
  .kat-btn.active {
    background:var(--hijau-tua);
    color:var(--krem);
    border-color:var(--hijau-tua);
    border-bottom-color:var(--hijau-tua);
  }
  .kat-btn.active i { color:var(--hijau-muda); }

  /* Produk - list vertikal ala aplikasi mobile */
  .col-produk {
    padding:14px 14px 100px;
  }
  .produk-head {
    flex-direction:column;
    align-items:flex-start;
    gap:10px;
    margin-bottom:14px;
  }
  .produk-head .title-block h2 { font-size:1.25rem; }
  .search-mini { min-width:100%; width:100%; }

  .produk-grid {
    grid-template-columns:1fr;
    gap:8px;
  }
  .produk-card {
    flex-direction:row;
    align-items:center;
    padding:12px 14px;
    gap:14px;
    border-radius:14px;
  }
  .produk-card::before { display:none; }
  .produk-card .p-icon {
    width:52px; height:52px;
    font-size:1.35rem;
    flex-shrink:0;
  }
  .produk-card .p-info {
    flex:1;
    min-width:0;
  }
  .produk-card h3 {
    font-size:0.95rem;
    min-height:auto;
    margin-bottom:6px;
  }
  .produk-card .p-satuan { font-size:0.6rem; padding:2px 7px; }
  .produk-card .p-harga .angka { font-size:1.05rem; }
  .produk-card .p-stok {
    border-top:none;
    padding-top:0;
    font-size:0.66rem;
    margin-top:4px;
  }
  .produk-card .p-add {
    background:var(--hijau-tua);
    color:var(--krem);
    width:44px;
    height:44px;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:1.1rem;
    flex-shrink:0;
  }

  /* Sembunyikan keranjang sidebar, ganti jadi bottom sheet */
  .col-keranjang {
    position:fixed;
    bottom:0;
    left:0;
    right:0;
    max-height:80vh;
    border-left:none;
    border-top:2px solid var(--hijau-tua);
    border-radius:20px 20px 0 0;
    transform:translateY(calc(100% - 76px));
    transition:transform 0.3s ease-out;
    z-index:60;
    box-shadow:0 -10px 30px -10px rgba(0,0,0,0.3);
    overflow:hidden;
  }
  .col-keranjang.expanded {
    transform:translateY(0);
    box-shadow:0 -15px 40px -10px rgba(0,0,0,0.4);
  }
  .keranjang-head {
    padding:16px 20px;
    border-radius:20px 20px 0 0;
    cursor:pointer;
    position:relative;
  }
  .keranjang-head::before {
    content:'';
    position:absolute;
    top:7px; left:50%;
    transform:translateX(-50%);
    width:36px; height:4px;
    background:rgba(168,200,181,0.5);
    border-radius:2px;
  }
  .keranjang-head .toggle-arrow {
    display:flex;
    align-items:center;
    justify-content:center;
    transition:transform 0.3s;
  }
  .col-keranjang.expanded .keranjang-head .toggle-arrow {
    transform:rotate(180deg);
  }
  .keranjang-body { max-height:calc(80vh - 200px); }
  .keranjang-foot { padding:14px 20px 20px; }

  /* Sesuaikan ukuran */
  .keranjang-head .info h3 { font-size:0.95rem; }
  .keranjang-head .badge-count { padding:4px 10px; font-size:0.72rem; }
  .kf-row.grand { font-size:1.3rem; }
  .btn-bayar-big { padding:14px; font-size:0.95rem; }

  /* Admin penyesuaian */
  .admin-wrap { padding:16px 14px; }
  .admin-head {
    flex-direction:column;
    align-items:stretch;
    gap:12px;
  }
  .admin-head h2 { font-size:1.2rem; }
  .admin-actions { justify-content:stretch; }
  .admin-actions button { flex:1; justify-content:center; padding:11px; font-size:0.76rem; }
  .stats-row { grid-template-columns:1fr 1fr; gap:10px; }
  .stat-card { padding:13px 14px; }
  .stat-card .s-val { font-size:1.2rem; }
  .stat-card .s-lbl { font-size:0.62rem; }

  table { font-size:0.78rem; }
  th, td { padding:10px 10px; }
  .td-icon { width:28px; height:28px; font-size:0.78rem; }
  .td-info strong { font-size:0.8rem; }
  .td-info small { font-size:0.62rem; }
  .row-actions { flex-direction:column; gap:3px; }
  .icon-btn { width:26px; height:26px; font-size:0.7rem; }

  /* Modal */
  .modal { border-radius:16px 16px 0 0; max-height:92vh; margin-top:auto; }
  .modal-bg { align-items:flex-end; padding:0; }
  .modal-head { padding:20px 20px 14px; }
  .modal-body { padding:20px; }
  .modal-foot { padding:14px 20px 20px; flex-direction:column-reverse; }
  .modal-foot button { width:100%; justify-content:center; padding:14px; }

  /* Keypad mobile lebih besar */
  .berat-display-big .angka { font-size:2.5rem; }
  .key { padding:18px; font-size:1.35rem; }
  .quick-weight { padding:12px 4px; font-size:0.78rem; }
}

@media (max-width: 400px) {
  .stats-row { grid-template-columns:1fr; }
  .quick-weights { grid-template-columns:repeat(4,1fr); gap:4px; }
  .quick-weight { font-size:0.7rem; padding:10px 2px; }
  .produk-card .p-icon { width:46px; height:46px; font-size:1.2rem; }
  .produk-card .p-add { width:40px; height:40px; font-size:1rem; }
}

/* Desktop: sembunyikan elemen mobile-only */
.mobile-only { display:none; }
@media (max-width: 720px) {
  .desktop-only { display:none; }
  .mobile-only { display:flex; }
  .keranjang-head .toggle-arrow { display:flex; }
}
@media (min-width: 721px) {
  .keranjang-head .toggle-arrow { display:none; }
}
</style>
</head>
<body>

<div class="app">

<!-- ==================== HEADER ==================== -->
<header class="topbar">
  <div class="brand">
    <div class="brand-mark"><i class="fas fa-carrot"></i></div>
    <h1>Warung Segar<small>Sayur · Daging · Bumbu</small></h1>
  </div>
  <div class="topbar-right">
    <nav class="mode-nav">
      <button id="navKasir" class="active">
        <i class="fas fa-balance-scale"></i> <span>Kasir</span>
      </button>
      <button id="navAdmin">
        <i class="fas fa-boxes-stacked"></i> <span>Stok</span>
      </button>
    </nav>
    <div class="user-badge">
      <div class="avatar" id="avatarInit">SR</div>
      <div class="name" id="userName">Bu Sari</div>
    </div>
  </div>
</header>

<!-- ==================== PAGE KASIR ==================== -->
<div class="page active" id="pageKasir">
  <div class="kasir-grid">

    <!-- Kategori -->
    <aside class="col-kategori" id="colKategori">
      <div class="kat-title">Kategori</div>
      <button class="kat-btn active" data-kat="semua"><i class="fas fa-th-large"></i> Semua</button>
      <button class="kat-btn" data-kat="sayur"><i class="fas fa-leaf"></i> Sayur</button>
      <button class="kat-btn" data-kat="daging"><i class="fas fa-drumstick-bite"></i> Daging</button>
      <button class="kat-btn" data-kat="bumbu"><i class="fas fa-pepper-hot"></i> Bumbu</button>
      <button class="kat-btn" data-kat="telur"><i class="fas fa-egg"></i> Telur</button>
      <button class="kat-btn" data-kat="beras"><i class="fas fa-wheat-awn"></i> Beras</button>
      <button class="kat-btn" data-kat="lainnya"><i class="fas fa-ellipsis"></i> Lainnya</button>
    </aside>

    <!-- Produk -->
    <section class="col-produk">
      <div class="produk-head">
        <div class="title-block">
          <h2 id="titleKat">Semua Produk</h2>
          <small id="produkCount">0 item tersedia</small>
        </div>
        <div class="search-mini">
          <i class="fas fa-search"></i>
          <input type="text" id="searchInput" placeholder="Cari sayur, daging...">
        </div>
      </div>
      <div class="produk-grid" id="produkGrid"></div>
    </section>

    <!-- Keranjang -->
    <aside class="col-keranjang" id="colKeranjang">
      <div class="keranjang-head" id="keranjangHead">
        <div class="info">
          <h3><i class="fas fa-basket-shopping"></i> Keranjang</h3>
          <div class="meta" id="keranjangMeta">Transaksi #001</div>
        </div>
        <div style="display:flex; align-items:center; gap:10px;">
          <span class="badge-count" id="keranjangCount">0 item</span>
          <div class="toggle-arrow"><i class="fas fa-chevron-up"></i></div>
        </div>
      </div>

      <div class="keranjang-body" id="keranjangBody">
        <div class="keranjang-empty">
          <i class="fas fa-basket-shopping"></i>
          <strong>Belum ada belanjaan</strong>
          Pilih sayur atau daging
        </div>
      </div>

      <div class="keranjang-foot">
        <div class="kf-row"><span>Subtotal</span><span id="subTxt">Rp 0</span></div>
        <div class="kf-row discount" id="discRow" style="display:none;"><span>Diskon</span><span id="discTxt">− Rp 0</span></div>
        <div class="kf-row"><span>Pembulatan</span><span id="roundTxt">Rp 0</span></div>
        <div class="kf-row grand"><span>Total</span><span id="totalTxt">Rp 0</span></div>
        <button class="btn-bayar-big" id="btnBayar" disabled>
          <i class="fas fa-money-bill-wave"></i> Bayar Sekarang
        </button>
      </div>
    </aside>

  </div>
</div>

<!-- ==================== PAGE ADMIN ==================== -->
<div class="page" id="pageAdmin">
  <div class="admin-wrap">
    <div class="admin-head">
      <h2>Manajemen Stok<small>Kelola produk & harga</small></h2>
      <div class="admin-actions">
        <button class="btn-outline" id="btnResetData">
          <i class="fas fa-rotate"></i> Reset
        </button>
        <button class="btn-solid" id="btnTambahProduk">
          <i class="fas fa-plus"></i> Produk Baru
        </button>
      </div>
    </div>

    <div class="stats-row">
      <div class="stat-card">
        <div class="s-lbl">Total Produk</div>
        <div class="s-val" id="sTotal">0</div>
      </div>
      <div class="stat-card kuning">
        <div class="s-lbl">Stok Rendah</div>
        <div class="s-val" id="sLow">0</div>
      </div>
      <div class="stat-card merah">
        <div class="s-lbl">Stok Habis</div>
        <div class="s-val" id="sOut">0</div>
      </div>
      <div class="stat-card">
        <div class="s-lbl">Nilai Stok</div>
        <div class="s-val" id="sNilai" style="font-size:1.15rem;">Rp 0</div>
      </div>
    </div>

    <div class="table-box">
      <table>
        <thead>
          <tr>
            <th>Produk</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Stok</th>
            <th style="text-align:right;">Aksi</th>
          </tr>
        </thead>
        <tbody id="adminBody"></tbody>
      </table>
    </div>
  </div>
</div>

</div>

<!-- ==================== MODAL TIMBANGAN ==================== -->
<div class="modal-bg" id="modalTimbang">
  <div class="modal">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-weight-scale"></i> <span id="timbangTitle">Nama Produk</span></h3>
        <div class="sub" id="timbangSub">Rp 0 / kg</div>
      </div>
      <button class="modal-close" id="closeTimbang"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="berat-display-big">
        <div class="angka" id="beratDisplay">0.00</div>
        <div class="satuan" id="satuanDisplay">kg</div>
        <div class="total-harga" id="hargaDisplay">Rp 0</div>
      </div>

      <div class="quick-weights" id="quickWeights">
        <!-- Diisi JS -->
      </div>

      <div class="keypad" id="keypad">
        <button class="key" data-key="1">1</button>
        <button class="key" data-key="2">2</button>
        <button class="key" data-key="3">3</button>
        <button class="key" data-key="4">4</button>
        <button class="key" data-key="5">5</button>
        <button class="key" data-key="6">6</button>
        <button class="key" data-key="7">7</button>
        <button class="key" data-key="8">8</button>
        <button class="key" data-key="9">9</button>
        <button class="key clear" data-key="C">C</button>
        <button class="key" data-key="0">0</button>
        <button class="key backspace" data-key="←"><i class="fas fa-delete-left"></i></button>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalTimbang">Batal</button>
      <button class="btn-solid" id="btnTambahTimbang">
        <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL BAYAR ==================== -->
<div class="modal-bg" id="modalBayar">
  <div class="modal">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-cash-register"></i> Pembayaran</h3>
        <div class="sub">Pilih metode lalu konfirmasi</div>
      </div>
      <button class="modal-close" id="closeBayar"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:8px; margin-bottom:18px;">
        <button class="key quick" data-method="Tunai" style="background:var(--hijau-tua); color:var(--krem); border-color:var(--hijau-tua);">Tunai</button>
        <button class="key quick" data-method="QRIS">QRIS</button>
      </div>

      <div id="cashSection">
        <div style="background:var(--hijau-tua); color:var(--krem); border-radius:10px; padding:16px; text-align:center; margin-bottom:14px;">
          <div style="font-size:0.68rem; letter-spacing:2px; color:var(--hijau-muda); margin-bottom:4px;">TOTAL BAYAR</div>
          <div style="font-family:'Fraunces',serif; font-size:1.8rem; font-weight:700;" id="modalTotal">Rp 0</div>
        </div>

        <label style="display:block; font-size:0.7rem; font-weight:600; color:var(--coklat); text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Uang Diterima</label>
        <input type="number" id="cashInput" placeholder="0" min="0" step="5000" style="width:100%; padding:14px; font-size:1.2rem; font-family:'Courier New',monospace; font-weight:700; border:2px solid #d8cbb0; border-radius:10px; outline:none; color:var(--hijau-tua); background:white; margin-bottom:12px;">

        <div id="changeBox" style="background:#d8f3dc; color:#1b4332; padding:14px; border-radius:10px; display:flex; justify-content:space-between; font-weight:700; font-family:'Fraunces',serif;">
          <span>Kembalian</span>
          <span id="changeTxt">Rp 0</span>
        </div>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalBayar">Batal</button>
      <button class="btn-solid" id="btnKonfirmasiBayar">
        <i class="fas fa-check"></i> Konfirmasi
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL STRUK ==================== -->
<div class="modal-bg" id="modalStruk">
  <div class="modal" style="max-width:420px;">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-receipt"></i> Struk Belanja</h3>
        <div class="sub">Serahkan ke pembeli</div>
      </div>
      <button class="modal-close" id="closeStruk"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body" id="strukBody"></div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnOrderBaru">Pelanggan Baru</button>
      <button class="btn-solid" id="btnCetak">
        <i class="fas fa-print"></i> Cetak
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL PRODUK ==================== -->
<div class="modal-bg" id="modalProduk">
  <div class="modal">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-box"></i> <span id="produkFormTitle">Tambah Produk</span></h3>
        <div class="sub">Data barang warung</div>
      </div>
      <button class="modal-close" id="closeProduk"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <input type="hidden" id="editId">

      <label style="display:block; font-size:0.68rem; font-weight:600; color:var(--coklat); text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Nama Produk</label>
      <input type="text" id="pNama" placeholder="Contoh: Bayam Hijau" maxlength="40" style="width:100%; padding:12px; border:1.5px solid #d8cbb0; border-radius:8px; outline:none; font-size:0.9rem; background:white; margin-bottom:14px; color:var(--hijau-tua);">

      <label style="display:block; font-size:0.68rem; font-weight:600; color:var(--coklat); text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Kategori</label>
      <select id="pKategori" style="width:100%; padding:12px; border:1.5px solid #d8cbb0; border-radius:8px; outline:none; font-size:0.9rem; background:white; margin-bottom:14px; color:var(--hijau-tua);">
        <option value="sayur">Sayur</option>
        <option value="daging">Daging</option>
        <option value="bumbu">Bumbu</option>
        <option value="telur">Telur</option>
        <option value="beras">Beras</option>
        <option value="lainnya">Lainnya</option>
      </select>

      <label style="display:block; font-size:0.68rem; font-weight:600; color:var(--coklat); text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Satuan Jual</label>
      <select id="pSatuan" style="width:100%; padding:12px; border:1.5px solid #d8cbb0; border-radius:8px; outline:none; font-size:0.9rem; background:white; margin-bottom:14px; color:var(--hijau-tua);">
        <option value="kg">Kilogram (kg) — pakai timbangan</option>
        <option value="gram">Gram (gr) — pakai timbangan</option>
        <option value="ikat">Ikat — per ikat</option>
        <option value="butir">Butir — per butir</option>
        <option value="pack">Pack — per pack</option>
      </select>

      <label style="display:block; font-size:0.68rem; font-weight:600; color:var(--coklat); text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Harga per Satuan</label>
      <input type="number" id="pHarga" placeholder="0" min="0" step="500" style="width:100%; padding:12px; border:1.5px solid #d8cbb0; border-radius:8px; outline:none; font-size:0.9rem; background:white; margin-bottom:14px; color:var(--hijau-tua);">

      <label style="display:block; font-size:0.68rem; font-weight:600; color:var(--coklat); text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Stok Tersedia</label>
      <input type="number" id="pStok" placeholder="0" min="0" step="0.1" style="width:100%; padding:12px; border:1.5px solid #d8cbb0; border-radius:8px; outline:none; font-size:0.9rem; background:white; margin-bottom:14px; color:var(--hijau-tua);">

      <label style="display:block; font-size:0.68rem; font-weight:600; color:var(--coklat); text-transform:uppercase; letter-spacing:1px; margin-bottom:6px;">Stok Minimum</label>
      <input type="number" id="pMin" placeholder="2" min="0" step="0.1" value="2" style="width:100%; padding:12px; border:1.5px solid #d8cbb0; border-radius:8px; outline:none; font-size:0.9rem; background:white; margin-bottom:6px; color:var(--hijau-tua);">
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
     DATA PRODUK WARUNG
     satuan: kg, gram, ikat, butir, pack
     stok dalam satuan yang sama dengan satuan jual
  ========================================================= */
  const STORAGE_KEY = 'warung_segar_v1';

  const ICON_BY_KAT = {
    sayur:'fa-leaf', daging:'fa-drumstick-bite', bumbu:'fa-pepper-hot',
    telur:'fa-egg', beras:'fa-wheat-awn', lainnya:'fa-box'
  };

  const defaultProduk = [
    // SAYUR - per ikat (bukan timbangan)
    { id:1, nama:'Kangkung Segar', harga:2500, kategori:'sayur', satuan:'ikat', stok:40, min:10 },
    { id:2, nama:'Bayam Hijau', harga:3000, kategori:'sayur', satuan:'ikat', stok:35, min:10 },
    { id:3, nama:'Sawi Hijau', harga:3500, kategori:'sayur', satuan:'ikat', stok:28, min:8 },
    { id:4, nama:'Daun Bawang', harga:2000, kategori:'sayur', satuan:'ikat', stok:50, min:15 },
    { id:5, nama:'Seledri', harga:1500, kategori:'sayur', satuan:'ikat', stok:45, min:15 },
    // SAYUR - per kg
    { id:6, nama:'Tomat Merah', harga:12000, kategori:'sayur', satuan:'kg', stok:15, min:5 },
    { id:7, nama:'Kentang Dieng', harga:15000, kategori:'sayur', satuan:'kg', stok:12, min:5 },
    { id:8, nama:'Wortel Brastagi', harga:14000, kategori:'sayur', satuan:'kg', stok:10, min:4 },
    { id:9, nama:'Bawang Merah', harga:38000, kategori:'sayur', satuan:'kg', stok:8, min:3 },
    { id:10, nama:'Bawang Putih', harga:42000, kategori:'sayur', satuan:'kg', stok:6, min:2 },
    { id:11, nama:'Cabai Merah Keriting', harga:55000, kategori:'sayur', satuan:'kg', stok:5, min:2 },
    { id:12, nama:'Brokoli', harga:22000, kategori:'sayur', satuan:'kg', stok:4, min:2 },
    // DAGING - per kg
    { id:13, nama:'Ayam Broiler Utuh', harga:38000, kategori:'daging', satuan:'kg', stok:10, min:3 },
    { id:14, nama:'Daging Sapi Giling', harga:135000, kategori:'daging', satuan:'kg', stok:5, min:2 },
    { id:15, nama:'Daging Sapi Has Dalam', harga:165000, kategori:'daging', satuan:'kg', stok:3, min:1 },
    { id:16, nama:'Ikan Kembung', harga:35000, kategori:'daging', satuan:'kg', stok:6, min:2 },
    { id:17, nama:'Udang Vaname', harga:85000, kategori:'daging', satuan:'kg', stok:4, min:2 },
    { id:18, nama:'Daging Kambing', harga:145000, kategori:'daging', satuan:'kg', stok:2, min:1 },
    // BUMBU - per gram (untuk bumbu halus)
    { id:19, nama:'Kemiri Halus', harga:60000, kategori:'bumbu', satuan:'kg', stok:2, min:1 },
    { id:20, nama:'Lengkuas', harga:8000, kategori:'bumbu', satuan:'kg', stok:5, min:2 },
    { id:21, nama:'Jahe Merah', harga:25000, kategori:'bumbu', satuan:'kg', stok:3, min:1 },
    { id:22, nama:'Kunyit', harga:15000, kategori:'bumbu', satuan:'kg', stok:4, min:1 },
    // TELUR - per butir
    { id:23, nama:'Telur Ayam Negeri', harga:2400, kategori:'telur', satuan:'butir', stok:80, min:20 },
    { id:24, nama:'Telur Ayam Kampung', harga:3500, kategori:'telur', satuan:'butir', stok:40, min:15 },
    { id:25, nama:'Telur Bebek', harga:5000, kategori:'telur', satuan:'butir', stok:20, min:8 },
    // BERAS - per kg
    { id:26, nama:'Beras Pandan Wangi', harga:15000, kategori:'beras', satuan:'kg', stok:50, min:15 },
    { id:27, nama:'Beras Setra Ramos', harga:13000, kategori:'beras', satuan:'kg', stok:60, min:20 },
    { id:28, nama:'Beras Ketan Putih', harga:18000, kategori:'beras', satuan:'kg', stok:15, min:5 },
    // LAINNYA
    { id:29, nama:'Tahu Putih', harga:6000, kategori:'lainnya', satuan:'pack', stok:20, min:8 },
    { id:30, nama:'Tempe Segar', harga:5000, kategori:'lainnya', satuan:'pack', stok:25, min:10 }
  ];

  let produkList;
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    produkList = raw ? JSON.parse(raw) : JSON.parse(JSON.stringify(defaultProduk));
  } catch(e) { produkList = JSON.parse(JSON.stringify(defaultProduk)); }
  const save = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(produkList));

  let keranjang = []; // { id, nama, satuan, harga, berat, subtotal }
  let filterKat = 'semua';
  let searchQ = '';
  let pendingProduk = null;
  let beratInput = '0';
  let trxCounter = 1;
  let lastStruk = null;

  /* =========================================================
     UTIL
  ========================================================= */
  const rp = n => 'Rp ' + Math.round(Number(n)).toLocaleString('id-ID');

  function formatBerat(nilai, satuan) {
    if (satuan === 'kg') {
      return nilai.toFixed(2) + ' kg';
    }
    if (satuan === 'gram') {
      return Math.round(nilai) + ' gr';
    }
    return nilai + ' ' + satuan;
  }

  function getBeratStep(satuan) {
    // step default saat tekan +/- di keranjang
    if (satuan === 'kg') return 0.25;
    if (satuan === 'gram') return 100;
    return 1;
  }

  let toastTimer;
  function toast(msg, icon='fa-circle-check') {
    const t = document.getElementById('toast');
    document.getElementById('toastTxt').textContent = msg;
    t.querySelector('i').className = 'fas ' + icon;
    t.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => t.classList.remove('show'), 2200);
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
    document.getElementById('userName').textContent = 'Bu Sari';
    document.getElementById('avatarInit').textContent = 'SR';
    renderProduk();
    if (window.innerWidth <= 720) updateBottomBar();
  });

  navAdmin.addEventListener('click', () => {
    navAdmin.classList.add('active');
    navKasir.classList.remove('active');
    pageAdmin.classList.add('active');
    pageKasir.classList.remove('active');
    document.getElementById('userName').textContent = 'Pak Herman';
    document.getElementById('avatarInit').textContent = 'PH';
    renderAdmin();
  });

  /* =========================================================
     RENDER PRODUK
  ========================================================= */
  function renderProduk() {
    const grid = document.getElementById('produkGrid');
    let data = produkList.slice();

    if (filterKat !== 'semua') data = data.filter(p => p.kategori === filterKat);
    if (searchQ.trim()) {
      const q = searchQ.toLowerCase();
      data = data.filter(p => p.nama.toLowerCase().includes(q));
    }

    const katLabel = {
      semua:'Semua Produk', sayur:'Sayur & Daun', daging:'Daging & Ikan',
      bumbu:'Bumbu Dapur', telur:'Telur', beras:'Beras', lainnya:'Lainnya'
    };
    document.getElementById('titleKat').textContent = katLabel[filterKat] || 'Produk';
    document.getElementById('produkCount').textContent = data.length + ' item tersedia';

    if (data.length === 0) {
      grid.innerHTML = '<div style="grid-column:1/-1; text-align:center; padding:50px 20px; color:var(--abu); font-family:Fraunces,serif; font-style:italic; font-size:1rem;">Tidak ada produk ditemukan</div>';
      return;
    }

    grid.innerHTML = data.map(p => {
      const out = p.stok <= 0;
      const low = p.stok > 0 && p.stok <= p.min;
      const isTimbang = p.satuan === 'kg' || p.satuan === 'gram';

      return `
        <div class="produk-card ${out ? 'out' : ''}" data-id="${p.id}">
          <div class="p-icon"><i class="fas ${ICON_BY_KAT[p.kategori] || 'fa-box'}"></i></div>
          <div class="p-info">
            <h3>${p.nama}</h3>
            <div class="p-satuan">
              ${isTimbang ? '<i class="fas fa-weight-scale"></i>' : '<i class="fas fa-cubes"></i>'}
              ${p.satuan}
            </div>
            <div class="p-harga">
              <span class="angka">${rp(p.harga)}</span>
              <span class="per">/ ${p.satuan}</span>
            </div>
            <div class="p-stok ${low ? 'low' : ''}">
              ${out ? 'Stok habis' : `Stok: ${p.stok} ${p.satuan}`}
            </div>
          </div>
          <div class="p-add mobile-only"><i class="fas fa-plus"></i></div>
        </div>
      `;
    }).join('');

    grid.querySelectorAll('.produk-card').forEach(card => {
      if (card.classList.contains('out')) return;
      card.addEventListener('click', () => {
        const id = parseInt(card.dataset.id);
        const p = produkList.find(x => x.id === id);
        if (!p) return;
        const isTimbang = p.satuan === 'kg' || p.satuan === 'gram';
        if (isTimbang) {
          bukaTimbangan(id);
        } else {
          tambahNonTimbang(id);
        }
      });
    });
  }

  /* =========================================================
     TAMBAH PRODUK NON-TIMBANG (langsung)
  ========================================================= */
  function tambahNonTimbang(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (p.stok < 1) { toast('Stok habis', 'fa-circle-exclamation'); return; }

    const existing = keranjang.find(k => k.id === id && k.berat === 1);
    if (existing) {
      if (existing.berat + 1 > p.stok) {
        toast(`Stok ${p.nama} tersisa ${p.stok}`, 'fa-circle-exclamation');
        return;
      }
      existing.berat++;
    } else {
      keranjang.push({
        id: p.id, nama: p.nama, satuan: p.satuan,
        harga: p.harga, berat: 1, kategori: p.kategori
      });
    }
    p.stok--;
    save();
    renderProduk();
    renderKeranjang();
    if (window.innerWidth <= 720) updateBottomBar();
    toast(`${p.nama} ditambahkan`, 'fa-cart-plus');
  }

  /* =========================================================
     MODAL TIMBANGAN
  ========================================================= */
  const modalTimbang = document.getElementById('modalTimbang');

  function bukaTimbangan(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (p.stok <= 0) { toast('Stok habis', 'fa-circle-exclamation'); return; }

    pendingProduk = p;
    beratInput = '0';

    document.getElementById('timbangTitle').textContent = p.nama;
    document.getElementById('timbangSub').textContent = rp(p.harga) + ' / ' + p.satuan;
    document.getElementById('satuanDisplay').textContent = p.satuan === 'kg' ? 'kg' : 'gram';

    // Generate quick weights
    const quickW = p.satuan === 'kg'
      ? [0.25, 0.5, 1, 1.5, 2]
      : [100, 250, 500, 1000];

    const quickBox = document.getElementById('quickWeights');
    quickBox.innerHTML = quickW.map(w => {
      const label = p.satuan === 'kg'
        ? (w < 1 ? w*1000 + 'gr' : w + 'kg')
        : w + 'gr';
      return `<button class="quick-weight" data-w="${w}">${label}</button>`;
    }).join('');

    quickBox.querySelectorAll('.quick-weight').forEach(b => {
      b.addEventListener('click', () => {
        const w = parseFloat(b.dataset.w);
        beratInput = w.toString();
        updateTimbangDisplay();
      });
    });

    updateTimbangDisplay();
    modalTimbang.classList.add('show');
  }

  function updateTimbangDisplay() {
    if (!pendingProduk) return;
    const p = pendingProduk;
    let berat = parseFloat(beratInput) || 0;

    // Konversi gram ke kg kalau satuan = kg
    let beratTampil = berat;
    let satuanTampil = p.satuan;

    if (p.satuan === 'kg') {
      // input dianggap kg langsung
      document.getElementById('beratDisplay').textContent = berat.toFixed(2);
    } else if (p.satuan === 'gram') {
      document.getElementById('beratDisplay').textContent = Math.round(berat);
    }

    let subtotal;
    if (p.satuan === 'kg') {
      subtotal = p.harga * berat;
    } else if (p.satuan === 'gram') {
      subtotal = (p.harga / 1000) * berat;
    } else {
      subtotal = p.harga * berat;
    }

    document.getElementById('hargaDisplay').textContent = rp(subtotal);
  }

  document.querySelectorAll('#keypad .key').forEach(key => {
    key.addEventListener('click', () => {
      const k = key.dataset.key;
      if (!pendingProduk) return;

      if (k === 'C') {
        beratInput = '0';
      } else if (k === '←') {
        if (beratInput.length > 1) beratInput = beratInput.slice(0, -1);
        else beratInput = '0';
      } else if (k === '.') {
        if (!beratInput.includes('.')) beratInput += '.';
      } else {
        if (beratInput === '0') beratInput = k;
        else beratInput += k;
      }
      updateTimbangDisplay();
    });
  });

  document.getElementById('closeTimbang').addEventListener('click', () => {
    modalTimbang.classList.remove('show');
    pendingProduk = null;
  });
  document.getElementById('btnBatalTimbang').addEventListener('click', () => {
    modalTimbang.classList.remove('show');
    pendingProduk = null;
  });

  document.getElementById('btnTambahTimbang').addEventListener('click', () => {
    if (!pendingProduk) return;
    const p = pendingProduk;
    let berat = parseFloat(beratInput) || 0;

    if (berat <= 0) {
      toast('Masukkan berat terlebih dahulu', 'fa-circle-exclamation');
      return;
    }

    // Cek stok
    if (berat > p.stok) {
      toast(`Stok ${p.nama} tersisa ${p.stok} ${p.satuan}`, 'fa-circle-exclamation');
      return;
    }

    // Cek duplikat: kalau ada item yang sama dengan berat sama persis, tadi kita tidak gabung
    // karena setiap penimbangan dianggap item terpisah (khas pedagang pasar)
    keranjang.push({
      id: p.id, nama: p.nama, satuan: p.satuan,
      harga: p.harga, berat: berat, kategori: p.kategori
    });

    p.stok -= berat;
    save();
    renderProduk();
    renderKeranjang();
    if (window.innerWidth <= 720) updateBottomBar();
    modalTimbang.classList.remove('show');
    pendingProduk = null;
    toast(`${p.nama} · ${formatBerat(berat, p.satuan)} ditambahkan`, 'fa-weight-scale');
  });

  /* =========================================================
     RENDER KERANJANG
  ========================================================= */
  function renderKeranjang() {
    const body = document.getElementById('keranjangBody');

    if (keranjang.length === 0) {
      body.innerHTML = `
        <div class="keranjang-empty">
          <i class="fas fa-basket-shopping"></i>
          <strong>Belum ada belanjaan</strong>
          Pilih sayur atau daging
        </div>`;
    } else {
      body.innerHTML = keranjang.map((k, idx) => {
        let subtotal;
        if (k.satuan === 'kg') subtotal = k.harga * k.berat;
        else if (k.satuan === 'gram') subtotal = (k.harga / 1000) * k.berat;
        else subtotal = k.harga * k.berat;

        const step = getBeratStep(k.satuan);
        const tampilBerat = k.satuan === 'kg'
          ? k.berat.toFixed(2)
          : (k.satuan === 'gram' ? Math.round(k.berat) : k.berat);

        return `
          <div class="krj-item">
            <div class="krj-top">
              <div class="krj-nama">${k.nama}</div>
              <div class="krj-harga-total">${rp(subtotal)}</div>
            </div>
            <div class="krj-berat-info">
              ${rp(k.harga)} / ${k.satuan} × <strong>${formatBerat(k.berat, k.satuan)}</strong>
            </div>
            <div class="krj-actions">
              <div class="krj-berat">
                <button class="berat-btn" data-act="min" data-idx="${idx}">−</button>
                <div class="berat-display" data-act="edit" data-idx="${idx}">${tampilBerat}</div>
                <button class="berat-btn" data-act="plus" data-idx="${idx}">+</button>
              </div>
              <button class="krj-del" data-act="del" data-idx="${idx}"><i class="fas fa-times"></i> Hapus</button>
            </div>
          </div>
        `;
      }).join('');
    }

    // Event handler
    body.querySelectorAll('button[data-act]').forEach(b => {
      b.addEventListener('click', () => {
        const idx = parseInt(b.dataset.idx);
        const act = b.dataset.act;
        if (act === 'plus') incItem(idx);
        else if (act === 'min') decItem(idx);
        else if (act === 'del') delItem(idx);
      });
    });
    body.querySelectorAll('.berat-display').forEach(el => {
      el.addEventListener('click', () => {
        const idx = parseInt(el.dataset.idx);
        editBerat(idx);
      });
    });

    // Hitung total
    let subtotal = 0;
    keranjang.forEach(k => {
      if (k.satuan === 'kg') subtotal += k.harga * k.berat;
      else if (k.satuan === 'gram') subtotal += (k.harga / 1000) * k.berat;
      else subtotal += k.harga * k.berat;
    });

    // Pembulatan ke atas ke Rp 100 terdekat
    const pembulatan = Math.ceil(subtotal / 100) * 100;
    const selisih = pembulatan - subtotal;

    document.getElementById('subTxt').textContent = rp(subtotal);
    if (selisih > 0.5) {
      document.getElementById('roundTxt').textContent = '+' + rp(selisih);
    } else {
      document.getElementById('roundTxt').textContent = rp(0);
    }
    document.getElementById('totalTxt').textContent = rp(pembulatan);
    document.getElementById('btnBayar').disabled = keranjang.length === 0;
    document.getElementById('keranjangCount').textContent = keranjang.length + ' item';

    if (window.innerWidth <= 720) updateBottomBar();
  }

  function incItem(idx) {
    const k = keranjang[idx]; if (!k) return;
    const p = produkList.find(x => x.id === k.id);
    const step = getBeratStep(k.satuan);
    if (!p || k.berat + step > p.stok) {
      toast(`Stok tersisa ${p ? p.stok : 0} ${k.satuan}`, 'fa-circle-exclamation');
      return;
    }
    k.berat += step;
    p.stok -= step;
    save(); renderProduk(); renderKeranjang();
  }

  function decItem(idx) {
    const k = keranjang[idx]; if (!k) return;
    const p = produkList.find(x => x.id === k.id);
    const step = getBeratStep(k.satuan);
    if (k.berat - step <= 0) {
      if (p) p.stok += k.berat;
      keranjang.splice(idx, 1);
    } else {
      k.berat -= step;
      if (p) p.stok += step;
    }
    save(); renderProduk(); renderKeranjang();
  }

  function delItem(idx) {
    const k = keranjang[idx]; if (!k) return;
    const p = produkList.find(x => x.id === k.id);
    if (p) p.stok += k.berat;
    keranjang.splice(idx, 1);
    save(); renderProduk(); renderKeranjang();
  }

  function editBerat(idx) {
    const k = keranjang[idx]; if (!k) return;
    const p = produkList.find(x => x.id === k.id);
    if (!p) return;
    // Buka ulang timbangan untuk item ini
    // Kembalikan berat lama ke stok dulu
    p.stok += k.berat;
    keranjang.splice(idx, 1);
    save(); renderProduk(); renderKeranjang();
    bukaTimbangan(k.id);
  }

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
     MOBILE - BOTTOM SHEET TOGGLE
  ========================================================= */
  const colKeranjang = document.getElementById('colKeranjang');
  const keranjangHead = document.getElementById('keranjangHead');

  keranjangHead.addEventListener('click', () => {
    if (window.innerWidth > 720) return;
    colKeranjang.classList.toggle('expanded');
  });

  function updateBottomBar() {
    // Saat mobile, kalau keranjang kosong, collapse
    if (window.innerWidth <= 720 && keranjang.length === 0) {
      colKeranjang.classList.remove('expanded');
    }
  }

  /* =========================================================
     MODAL BAYAR
  ========================================================= */
  const modalBayar = document.getElementById('modalBayar');
  const cashInput = document.getElementById('cashInput');
  let payMethod = 'Tunai';

  function getTotal() {
    let subtotal = 0;
    keranjang.forEach(k => {
      if (k.satuan === 'kg') subtotal += k.harga * k.berat;
      else if (k.satuan === 'gram') subtotal += (k.harga / 1000) * k.berat;
      else subtotal += k.harga * k.berat;
    });
    return Math.ceil(subtotal / 100) * 100;
  }

  document.getElementById('btnBayar').addEventListener('click', () => {
    if (keranjang.length === 0) return;
    const total = getTotal();
    document.getElementById('modalTotal').textContent = rp(total);
    cashInput.value = '';
    updateChange();
    modalBayar.classList.add('show');
  });

  document.getElementById('closeBayar').addEventListener('click', () => modalBayar.classList.remove('show'));
  document.getElementById('btnBatalBayar').addEventListener('click', () => modalBayar.classList.remove('show'));

  document.querySelectorAll('[data-method]').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('[data-method]').forEach(b => {
        b.style.background = '';
        b.style.color = '';
        b.style.borderColor = '';
      });
      btn.style.background = 'var(--hijau-tua)';
      btn.style.color = 'var(--krem)';
      btn.style.borderColor = 'var(--hijau-tua)';
      payMethod = btn.dataset.method;
      document.getElementById('cashSection').style.display = payMethod === 'Tunai' ? 'block' : 'none';
    });
  });

  function updateChange() {
    if (payMethod !== 'Tunai') return;
    const total = getTotal();
    const cash = parseInt(cashInput.value) || 0;
    const box = document.getElementById('changeBox');
    const txt = document.getElementById('changeTxt');
    if (cash === 0) {
      box.style.background = '#d8f3dc';
      box.style.color = '#1b4332';
      txt.textContent = rp(0);
      return;
    }
    const diff = cash - total;
    if (diff < 0) {
      box.style.background = '#fce7d8';
      box.style.color = 'var(--merah-tua)';
      txt.textContent = '− ' + rp(Math.abs(diff));
    } else {
      box.style.background = '#d8f3dc';
      box.style.color = '#1b4332';
      txt.textContent = rp(diff);
    }
  }
  cashInput.addEventListener('input', updateChange);

  document.getElementById('btnKonfirmasiBayar').addEventListener('click', () => {
    const total = getTotal();
    if (payMethod === 'Tunai') {
      const cash = parseInt(cashInput.value) || 0;
      if (cash < total) {
        toast('Uang diterima kurang dari total', 'fa-circle-exclamation');
        return;
      }
    }
    prosesBayar(total);
  });

  /* =========================================================
     PROSES BAYAR
  ========================================================= */
  function prosesBayar(total) {
    const cash = parseInt(cashInput.value) || 0;
    const change = payMethod === 'Tunai' ? cash - total : 0;
    const now = new Date();

    const struk = {
      nomor: 'WS-' + String(trxCounter).padStart(4,'0'),
      tanggal: now.toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' }),
      kasir: 'Bu Sari',
      items: keranjang.map(k => ({ ...k })),
      total: total,
      metode: payMethod,
      cash: payMethod === 'Tunai' ? cash : total,
      change: change
    };
    lastStruk = struk;
    trxCounter++;

    modalBayar.classList.remove('show');
    tampilkanStruk(struk);

    keranjang = [];
    save();
    renderProduk();
    renderKeranjang();
    toast('Transaksi berhasil', 'fa-circle-check');
  }

  /* =========================================================
     STRUK
  ========================================================= */
  function tampilkanStruk(s) {
    let subtotal = 0;
    const itemsHtml = s.items.map(k => {
      let itemTotal;
      if (k.satuan === 'kg') itemTotal = k.harga * k.berat;
      else if (k.satuan === 'gram') itemTotal = (k.harga / 1000) * k.berat;
      else itemTotal = k.harga * k.berat;
      subtotal += itemTotal;

      const tampilBerat = k.satuan === 'kg'
        ? k.berat.toFixed(2) + ' kg'
        : (k.satuan === 'gram' ? Math.round(k.berat) + ' gr' : k.berat + ' ' + k.satuan);

      return `
        <div class="s-item">
          <div class="s-line1"><span>${k.nama}</span><span>${rp(itemTotal)}</span></div>
          <div class="s-line2"><span>${tampilBerat} × ${rp(k.harga)}/${k.satuan}</span></div>
        </div>
      `;
    }).join('');

    const pembulatan = Math.ceil(subtotal / 100) * 100;

    document.getElementById('strukBody').innerHTML = `
      <div class="struk">
        <div class="s-head">
          <h4>WARUNG SEGAR</h4>
          <p>Sayur · Daging · Bumbu<br>
          Jl. Pasar Baru No. 12, Jakarta<br>
          Telp: 0812-3456-7890</p>
        </div>
        <div class="s-meta">
          No: <strong>${s.nomor}</strong><br>
          ${s.tanggal}<br>
          Kasir: ${s.kasir}
        </div>
        <div class="s-line"></div>
        ${itemsHtml}
        <div class="s-line"></div>
        <div class="s-total">
          <div class="s-row"><span>Subtotal</span><span>${rp(subtotal)}</span></div>
          <div class="s-row"><span>Pembulatan</span><span>+ ${rp(pembulatan - subtotal)}</span></div>
          <div class="s-grand"><span>TOTAL</span><span>${rp(pembulatan)}</span></div>
          <div class="s-row" style="margin-top:8px;"><span>Bayar (${s.metode})</span><span>${rp(s.cash)}</span></div>
          <div class="s-row"><span>Kembalian</span><span>${rp(s.change)}</span></div>
        </div>
        <div class="s-foot">
          <strong>Terima kasih sudah berbelanja</strong><br>
          Barang yang sudah dibeli tidak dapat ditukar<br>
          Semoga berkah, sampai jumpa lagi
        </div>
      </div>
    `;
    document.getElementById('modalStruk').classList.add('show');
  }

  document.getElementById('closeStruk').addEventListener('click', () => document.getElementById('modalStruk').classList.remove('show'));
  document.getElementById('btnOrderBaru').addEventListener('click', () => document.getElementById('modalStruk').classList.remove('show'));
  document.getElementById('btnCetak').addEventListener('click', () => {
    if (!lastStruk) return;
    const w = window.open('', '', 'width=420,height=680');
    w.document.write('<pre style="font-family:Courier New,monospace; font-size:12px; padding:20px; white-space:pre-wrap;">' +
      document.getElementById('strukBody').innerText + '</pre>');
    w.document.close(); w.focus(); w.print();
    toast('Struk dikirim ke printer', 'fa-print');
  });

  /* =========================================================
     ADMIN
  ========================================================= */
  function renderAdmin() {
    const total = produkList.length;
    const low = produkList.filter(p => p.stok > 0 && p.stok <= p.min).length;
    const out = produkList.filter(p => p.stok <= 0).length;
    const nilai = produkList.reduce((s, p) => s + p.stok * p.harga, 0);

    document.getElementById('sTotal').textContent = total;
    document.getElementById('sLow').textContent = low;
    document.getElementById('sOut').textContent = out;
    document.getElementById('sNilai').textContent = rp(nilai);

    const tbody = document.getElementById('adminBody');
    tbody.innerHTML = produkList.map(p => {
      let stokClass = 'stok-cell';
      if (p.stok <= 0) stokClass += ' out';
      else if (p.stok <= p.min) stokClass += ' low';

      const stokTampil = p.satuan === 'kg' ? p.stok.toFixed(1) : p.stok;

      return `
        <tr>
          <td>
            <div class="td-name">
              <div class="td-icon"><i class="fas ${ICON_BY_KAT[p.kategori] || 'fa-box'}"></i></div>
              <div class="td-info">
                <strong>${p.nama}</strong>
                <small>${p.kategori}</small>
              </div>
            </div>
          </td>
          <td><span class="badge-satuan ${p.satuan}">${p.satuan}</span></td>
          <td style="font-weight:700; font-family:Fraunces,serif; color:var(--hijau-tua);">${rp(p.harga)}</td>
          <td>
            <span class="${stokClass}">
              ${stokTampil} ${p.satuan}
              <small>min ${p.min} ${p.satuan}</small>
            </span>
          </td>
          <td>
            <div class="row-actions">
              <button class="icon-btn" data-act="edit" data-id="${p.id}"><i class="fas fa-pen"></i></button>
              <button class="icon-btn danger" data-act="del" data-id="${p.id}"><i class="fas fa-trash"></i></button>
            </div>
          </td>
        </tr>
      `;
    }).join('');

    tbody.querySelectorAll('button[data-act]').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = parseInt(btn.dataset.id);
        if (btn.dataset.act === 'edit') bukaFormProduk(id);
        else hapusProduk(id);
      });
    });
  }

  /* =========================================================
     FORM PRODUK
  ========================================================= */
  const modalProduk = document.getElementById('modalProduk');

  function bukaFormProduk(id) {
    const isEdit = id != null;
    document.getElementById('produkFormTitle').textContent = isEdit ? 'Edit Produk' : 'Tambah Produk';
    document.getElementById('editId').value = isEdit ? id : '';
    document.getElementById('pNama').value = '';
    document.getElementById('pKategori').value = 'sayur';
    document.getElementById('pSatuan').value = 'kg';
    document.getElementById('pHarga').value = '';
    document.getElementById('pStok').value = '';
    document.getElementById('pMin').value = '2';

    if (isEdit) {
      const p = produkList.find(x => x.id === id);
      if (p) {
        document.getElementById('pNama').value = p.nama;
        document.getElementById('pKategori').value = p.kategori;
        document.getElementById('pSatuan').value = p.satuan;
        document.getElementById('pHarga').value = p.harga;
        document.getElementById('pStok').value = p.stok;
        document.getElementById('pMin').value = p.min;
      }
    }
    modalProduk.classList.add('show');
  }

  document.getElementById('btnTambahProduk').addEventListener('click', () => bukaFormProduk(null));
  document.getElementById('closeProduk').addEventListener('click', () => modalProduk.classList.remove('show'));
  document.getElementById('btnBatalProduk').addEventListener('click', () => modalProduk.classList.remove('show'));

  document.getElementById('btnSimpanProduk').addEventListener('click', () => {
    const editId = document.getElementById('editId').value;
    const nama = document.getElementById('pNama').value.trim();
    const kategori = document.getElementById('pKategori').value;
    const satuan = document.getElementById('pSatuan').value;
    const harga = parseInt(document.getElementById('pHarga').value);
    const stok = parseFloat(document.getElementById('pStok').value);
    const min = parseFloat(document.getElementById('pMin').value) || 2;

    if (!nama) return toast('Nama harus diisi', 'fa-exclamation-circle');
    if (isNaN(harga) || harga <= 0) return toast('Harga tidak valid', 'fa-exclamation-circle');
    if (isNaN(stok) || stok < 0) return toast('Stok tidak valid', 'fa-exclamation-circle');

    if (editId) {
      const p = produkList.find(x => x.id === parseInt(editId));
      if (p) Object.assign(p, { nama, kategori, satuan, harga, stok, min });
      toast('Produk diperbarui', 'fa-circle-check');
    } else {
      const newId = produkList.length ? Math.max(...produkList.map(p => p.id)) + 1 : 1;
      produkList.push({ id:newId, nama, kategori, satuan, harga, stok, min });
      toast('Produk baru ditambahkan', 'fa-circle-check');
    }
    save();
    modalProduk.classList.remove('show');
    renderAdmin();
    renderProduk();
  });

  function hapusProduk(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (!confirm(`Hapus "${p.nama}"?`)) return;
    produkList = produkList.filter(x => x.id !== id);
    save();
    renderAdmin();
    renderProduk();
    toast('Produk dihapus', 'fa-trash');
  }

  /* =========================================================
     RESET
  ========================================================= */
  document.getElementById('btnResetData').addEventListener('click', () => {
    if (!confirm('Reset semua data produk ke default?')) return;
    produkList = JSON.parse(JSON.stringify(defaultProduk));
    keranjang = [];
    save();
    renderAdmin();
    renderProduk();
    renderKeranjang();
    toast('Data direset', 'fa-rotate');
  });

  /* =========================================================
     INIT
  ========================================================= */
  renderProduk();
  renderKeranjang();
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>