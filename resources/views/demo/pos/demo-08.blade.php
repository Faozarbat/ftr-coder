@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bersih Wangi — POS Laundry</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; }
body {
  font-family:'Inter',system-ui,sans-serif;
  background:#e6f0f8;
  color:#1a3a52;
  min-height:100vh;
  font-size:14px;
}

:root {
  --biru:#2a7fb8;
  --biru-tua:#1a5680;
  --biru-muda:#e6f2fa;
  --kuning:#f5c842;
  --kuning-tua:#d9a715;
  --hijau:#3d9e5c;
  --merah:#dc4a3a;
  --abu:#7a92a8;
  --line:#d4e2ee;
}

.app {
  max-width:1520px;
  margin:0 auto;
  background:#f7fafc;
  min-height:100vh;
  display:flex;
  flex-direction:column;
}

/* ============ HEADER ============ */
.topbar {
  background:#ffffff;
  border-bottom:3px solid var(--biru);
  padding:0 24px;
  height:66px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  position:sticky;
  top:0;
  z-index:50;
}
.brand { display:flex; align-items:center; gap:12px; }
.brand-mark {
  width:42px; height:42px;
  background:var(--biru);
  color:white;
  display:flex; align-items:center; justify-content:center;
  border-radius:12px;
  font-size:1.2rem;
  position:relative;
}
.brand-mark::after {
  content:'';
  position:absolute;
  top:-3px; right:-3px;
  width:12px; height:12px;
  background:var(--kuning);
  border-radius:50%;
  border:2px solid white;
}
.brand h1 {
  font-family:'Poppins',sans-serif;
  font-size:1.15rem;
  font-weight:700;
  color:var(--biru-tua);
  letter-spacing:-0.3px;
  line-height:1;
}
.brand h1 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.62rem;
  font-weight:500;
  color:var(--abu);
  letter-spacing:2px;
  text-transform:uppercase;
  margin-top:4px;
}

.topbar-right { display:flex; align-items:center; gap:12px; }
.mode-nav {
  display:flex;
  background:#e6f0f8;
  padding:4px;
  border-radius:10px;
  gap:2px;
}
.mode-nav button {
  background:transparent;
  border:none;
  color:var(--biru-tua);
  padding:8px 16px;
  border-radius:7px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.76rem;
  font-weight:600;
  display:flex; align-items:center; gap:7px;
  transition:all 0.15s;
}
.mode-nav button:hover { background:white; }
.mode-nav button.active {
  background:var(--biru);
  color:white;
}
.user-badge {
  display:flex; align-items:center; gap:9px;
  background:#e6f0f8;
  padding:6px 14px 6px 6px;
  border-radius:40px;
}
.user-badge .avatar {
  width:30px; height:30px;
  background:var(--biru);
  color:white;
  border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  font-weight:700;
  font-size:0.78rem;
}
.user-badge .info { line-height:1.15; }
.user-badge .name {
  font-size:0.78rem; font-weight:700; color:var(--biru-tua);
}
.user-badge .role {
  font-size:0.6rem; color:var(--abu);
  text-transform:uppercase; letter-spacing:0.6px;
}

/* ============ PAGE ============ */
.page { display:none; flex:1; }
.page.active { display:flex; flex-direction:column; }

/* ============ KASIR: 3 KOLOM ============ */
.kasir-grid {
  display:grid;
  grid-template-columns:320px 1fr 400px;
  gap:0;
  flex:1;
  min-height:0;
}

/* === KOLOM 1: DAFTAR NOTA === */
.col-nota-list {
  background:#ffffff;
  border-right:1px solid var(--line);
  display:flex;
  flex-direction:column;
  min-height:0;
}
.nota-head {
  padding:18px 18px 14px;
  background:var(--biru);
  color:white;
}
.nota-head .kicker {
  font-size:0.65rem;
  letter-spacing:2px;
  color:#a8d0e8;
  text-transform:uppercase;
  font-weight:600;
  margin-bottom:5px;
}
.nota-head h3 {
  font-family:'Poppins',sans-serif;
  font-size:1.05rem;
  font-weight:700;
  display:flex; align-items:center; justify-content:space-between;
  gap:10px;
}
.nota-head .count-badge {
  background:var(--kuning);
  color:var(--biru-tua);
  font-family:'Inter',sans-serif;
  font-size:0.7rem;
  font-weight:800;
  padding:3px 10px;
  border-radius:20px;
}

.status-tabs {
  display:flex;
  padding:8px 12px;
  gap:4px;
  overflow-x:auto;
  border-bottom:1px solid var(--line);
  background:#fafcfe;
}
.status-tab {
  background:transparent;
  border:none;
  padding:6px 12px;
  border-radius:20px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.72rem;
  font-weight:600;
  color:var(--abu);
  white-space:nowrap;
  display:flex;
  align-items:center;
  gap:5px;
}
.status-tab:hover { background:#e6f0f8; color:var(--biru-tua); }
.status-tab.active {
  background:var(--biru-tua);
  color:white;
}

.nota-list {
  flex:1;
  overflow-y:auto;
  padding:10px;
  display:flex;
  flex-direction:column;
  gap:8px;
}
.nota-list-empty {
  text-align:center;
  padding:40px 16px;
  color:var(--abu);
  font-size:0.82rem;
}
.nota-list-empty i {
  font-size:2.2rem;
  display:block;
  margin-bottom:12px;
  color:#c4d7e4;
}

/* Kartu nota */
.nota-card {
  background:white;
  border:1.5px solid var(--line);
  border-left:4px solid var(--abu);
  border-radius:10px;
  padding:12px 14px;
  cursor:pointer;
  transition:all 0.15s;
}
.nota-card:hover {
  border-color:var(--biru);
  border-left-color:var(--biru);
  box-shadow:0 4px 12px -4px rgba(42,127,184,0.2);
}
.nota-card.active {
  background:var(--biru-muda);
  border-color:var(--biru);
  border-left-color:var(--biru);
}
.nota-card.status-baru { border-left-color:var(--kuning); }
.nota-card.status-dicuci { border-left-color:#4a90c2; }
.nota-card.status-disetrika { border-left-color:#8a7ad6; }
.nota-card.status-siap { border-left-color:var(--hijau); }
.nota-card.status-selesai {
  border-left-color:#c4d7e4;
  opacity:0.6;
}

.nota-card-top {
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
  margin-bottom:6px;
}
.nota-nomor {
  font-family:'Courier New',monospace;
  font-weight:700;
  font-size:0.82rem;
  color:var(--biru-tua);
  letter-spacing:0.5px;
}
.nota-tanggal {
  font-size:0.65rem;
  color:var(--abu);
  margin-top:2px;
}
.nota-status-pill {
  font-size:0.6rem;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:0.5px;
  padding:3px 8px;
  border-radius:10px;
  white-space:nowrap;
}
.nota-status-pill.baru { background:#fef3c7; color:#8a6b1f; }
.nota-status-pill.dicuci { background:#dbeafe; color:#1e40af; }
.nota-status-pill.disetrika { background:#ede9fe; color:#5b21b6; }
.nota-status-pill.siap { background:#dcfce7; color:#166534; }
.nota-status-pill.selesai { background:#e2e8f0; color:#64748b; }

.nota-pelanggan {
  font-family:'Poppins',sans-serif;
  font-size:0.88rem;
  font-weight:600;
  color:var(--biru-tua);
  margin-bottom:4px;
  line-height:1.25;
}
.nota-info {
  font-size:0.72rem;
  color:var(--abu);
  display:flex;
  gap:12px;
  flex-wrap:wrap;
}
.nota-info span {
  display:flex; align-items:center; gap:4px;
}
.nota-info i { font-size:0.65rem; }

.nota-card-foot {
  margin-top:10px;
  padding-top:10px;
  border-top:1px dashed var(--line);
  display:flex;
  justify-content:space-between;
  align-items:center;
  font-size:0.76rem;
}
.nota-harga {
  font-family:'Poppins',sans-serif;
  font-weight:700;
  color:var(--biru);
  font-size:0.9rem;
}
.nota-paid-badge {
  font-size:0.62rem;
  padding:3px 8px;
  border-radius:10px;
  font-weight:700;
}
.nota-paid-badge.lunas { background:#dcfce7; color:#166534; }
.nota-paid-badge.belum { background:#fee2e2; color:#991b1b; }

/* === KOLOM 2: DETAIL NOTA === */
.col-detail {
  padding:22px 24px;
  overflow-y:auto;
  min-height:0;
  background:#f7fafc;
}
.detail-empty {
  height:100%;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  color:var(--abu);
  text-align:center;
  padding:40px;
}
.detail-empty i {
  font-size:4rem;
  color:#c4d7e4;
  margin-bottom:20px;
}
.detail-empty h3 {
  font-family:'Poppins',sans-serif;
  font-size:1.2rem;
  font-weight:700;
  color:var(--biru-tua);
  margin-bottom:8px;
}
.detail-empty p {
  font-size:0.86rem;
  max-width:340px;
  line-height:1.6;
}

/* Detail content */
.detail-header {
  background:white;
  border:1.5px solid var(--line);
  border-radius:14px;
  padding:20px 24px;
  margin-bottom:16px;
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
  flex-wrap:wrap;
  gap:14px;
}
.detail-header .left h2 {
  font-family:'Poppins',sans-serif;
  font-size:1.3rem;
  font-weight:700;
  color:var(--biru-tua);
  letter-spacing:-0.3px;
  margin-bottom:6px;
}
.detail-header .left .meta {
  font-size:0.78rem;
  color:var(--abu);
  display:flex;
  gap:16px;
  flex-wrap:wrap;
}
.detail-header .left .meta span {
  display:flex; align-items:center; gap:5px;
}
.detail-header .left .meta i { color:var(--biru); font-size:0.72rem; }

.status-flow {
  display:flex;
  gap:6px;
  flex-wrap:wrap;
  margin-top:14px;
}
.status-btn {
  background:white;
  border:1.5px solid var(--line);
  padding:8px 14px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.74rem;
  font-weight:600;
  color:var(--abu);
  display:flex; align-items:center; gap:6px;
  transition:all 0.15s;
}
.status-btn:hover { border-color:var(--biru); color:var(--biru); }
.status-btn.active {
  background:var(--biru);
  border-color:var(--biru);
  color:white;
}
.status-btn.done {
  background:#dcfce7;
  border-color:#86efac;
  color:#166534;
}
.status-btn.done i { color:#166534; }

/* Item list di detail */
.detail-section {
  background:white;
  border:1.5px solid var(--line);
  border-radius:14px;
  overflow:hidden;
  margin-bottom:16px;
}
.detail-section-title {
  padding:14px 20px;
  background:#fafcfe;
  border-bottom:1px solid var(--line);
  font-family:'Poppins',sans-serif;
  font-size:0.86rem;
  font-weight:700;
  color:var(--biru-tua);
  display:flex;
  align-items:center;
  justify-content:space-between;
}
.detail-section-title .lbl {
  display:flex; align-items:center; gap:8px;
}
.detail-section-title .lbl i { color:var(--biru); }

.item-row {
  padding:14px 20px;
  border-bottom:1px solid var(--line);
  display:grid;
  grid-template-columns:1fr auto;
  gap:12px;
  align-items:center;
}
.item-row:last-child { border-bottom:none; }
.item-info .nama {
  font-family:'Poppins',sans-serif;
  font-size:0.92rem;
  font-weight:600;
  color:var(--biru-tua);
  margin-bottom:4px;
}
.item-info .meta {
  font-size:0.72rem;
  color:var(--abu);
}
.item-info .meta strong { color:var(--biru); }
.item-price {
  font-family:'Poppins',sans-serif;
  font-size:1rem;
  font-weight:700;
  color:var(--biru);
}

/* Ringkasan total */
.total-box {
  background:var(--biru-tua);
  color:white;
  border-radius:14px;
  padding:20px 24px;
}
.total-row {
  display:flex;
  justify-content:space-between;
  font-size:0.84rem;
  margin-bottom:8px;
  color:#c4dbf0;
}
.total-row.discount { color:var(--kuning); }
.total-row.grand {
  font-family:'Poppins',sans-serif;
  font-size:1.6rem;
  font-weight:800;
  color:white;
  padding-top:14px;
  margin-top:10px;
  border-top:1px dashed rgba(255,255,255,0.3);
  letter-spacing:-0.5px;
}

.action-buttons {
  display:flex;
  gap:10px;
  margin-top:16px;
}
.btn-action {
  flex:1;
  padding:13px;
  border-radius:10px;
  border:none;
  cursor:pointer;
  font-family:'Poppins',sans-serif;
  font-size:0.86rem;
  font-weight:600;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:8px;
  transition:all 0.15s;
}
.btn-bayar-aksi {
  background:var(--kuning);
  color:var(--biru-tua);
}
.btn-bayar-aksi:hover { background:var(--kuning-tua); }
.btn-cetak-aksi {
  background:white;
  color:var(--biru-tua);
  border:1.5px solid var(--line);
}
.btn-cetak-aksi:hover { border-color:var(--biru); color:var(--biru); }
.btn-hapus-aksi {
  background:white;
  color:var(--merah);
  border:1.5px solid #fecaca;
}
.btn-hapus-aksi:hover { background:#fef2f2; }

/* === KOLOM 3: FORM NOTA BARU === */
.col-form {
  background:white;
  border-left:1px solid var(--line);
  display:flex;
  flex-direction:column;
  min-height:0;
}
.form-head {
  padding:18px 22px 14px;
  border-bottom:1px solid var(--line);
}
.form-head .kicker {
  font-size:0.65rem;
  letter-spacing:2px;
  color:var(--biru);
  text-transform:uppercase;
  font-weight:700;
  margin-bottom:5px;
}
.form-head h3 {
  font-family:'Poppins',sans-serif;
  font-size:1.05rem;
  font-weight:700;
  color:var(--biru-tua);
  display:flex; align-items:center; gap:8px;
}
.form-head h3 i { color:var(--kuning); }

.form-body {
  flex:1;
  overflow-y:auto;
  padding:18px 22px;
  min-height:0;
}

.field {
  margin-bottom:14px;
}
.field label {
  display:block;
  font-size:0.72rem;
  font-weight:600;
  color:var(--biru-tua);
  text-transform:uppercase;
  letter-spacing:0.6px;
  margin-bottom:6px;
}
.field input,
.field select,
.field textarea {
  width:100%;
  padding:11px 13px;
  border:1.5px solid var(--line);
  border-radius:9px;
  outline:none;
  font-family:'Inter',sans-serif;
  font-size:0.88rem;
  color:var(--biru-tua);
  background:white;
  transition:border-color 0.15s;
}
.field input:focus,
.field select:focus,
.field textarea:focus {
  border-color:var(--biru);
}
.field textarea {
  resize:vertical;
  min-height:56px;
  font-size:0.84rem;
}

/* Paket select */
.paket-grid {
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:8px;
}
.paket-opt {
  border:1.5px solid var(--line);
  padding:10px 12px;
  border-radius:10px;
  cursor:pointer;
  text-align:center;
  transition:all 0.15s;
  background:white;
}
.paket-opt:hover { border-color:var(--biru); }
.paket-opt.selected {
  background:var(--biru-muda);
  border-color:var(--biru);
}
.paket-opt .nama {
  font-family:'Poppins',sans-serif;
  font-size:0.8rem;
  font-weight:700;
  color:var(--biru-tua);
  margin-bottom:3px;
}
.paket-opt .harga {
  font-size:0.68rem;
  color:var(--abu);
}

/* Berat input */
.berat-input-wrap {
  display:flex;
  align-items:center;
  border:1.5px solid var(--line);
  border-radius:9px;
  overflow:hidden;
  background:white;
}
.berat-input-wrap input {
  border:none;
  border-radius:0;
  font-family:'Poppins',sans-serif;
  font-size:1.4rem;
  font-weight:700;
  color:var(--biru-tua);
  text-align:center;
  padding:12px;
}
.berat-input-wrap input:focus { border:none; }
.berat-input-wrap .step-btn {
  background:#e6f0f8;
  border:none;
  width:44px;
  height:52px;
  cursor:pointer;
  color:var(--biru);
  font-size:1rem;
  font-weight:700;
}
.berat-input-wrap .step-btn:hover { background:var(--biru); color:white; }

/* Item tambahan */
.item-tambahan-list {
  display:flex;
  flex-direction:column;
  gap:6px;
  margin-top:6px;
}
.item-tambahan {
  background:#fafcfe;
  border:1px solid var(--line);
  border-radius:8px;
  padding:10px 12px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  font-size:0.82rem;
}
.item-tambahan .info {
  display:flex;
  flex-direction:column;
  gap:2px;
}
.item-tambahan .nama {
  font-weight:600;
  color:var(--biru-tua);
}
.item-tambahan .detail {
  font-size:0.7rem;
  color:var(--abu);
}
.item-tambahan .hapus {
  background:transparent;
  border:none;
  color:var(--merah);
  cursor:pointer;
  font-size:0.82rem;
  padding:4px 8px;
}
.item-tambahan .hapus:hover { background:#fee2e2; border-radius:6px; }

.btn-add-item {
  background:transparent;
  border:1.5px dashed var(--line);
  width:100%;
  padding:10px;
  border-radius:8px;
  cursor:pointer;
  color:var(--biru);
  font-family:'Inter',sans-serif;
  font-size:0.8rem;
  font-weight:600;
  display:flex; align-items:center; justify-content:center; gap:6px;
  transition:all 0.15s;
  margin-top:6px;
}
.btn-add-item:hover {
  border-color:var(--biru);
  background:var(--biru-muda);
}

/* Toggle */
.toggle-row {
  display:flex;
  align-items:center;
  gap:10px;
  padding:10px 12px;
  background:#fafcfe;
  border:1.5px solid var(--line);
  border-radius:9px;
}
.toggle-row input[type="checkbox"] {
  width:18px; height:18px;
  accent-color:var(--biru);
  cursor:pointer;
}
.toggle-row label {
  flex:1;
  font-size:0.82rem;
  font-weight:600;
  color:var(--biru-tua);
  cursor:pointer;
  text-transform:none;
  letter-spacing:0;
  margin-bottom:0;
}
.toggle-row .info {
  font-size:0.68rem;
  color:var(--abu);
  display:block;
  font-weight:400;
  margin-top:2px;
}

.form-foot {
  background:#fafcfe;
  border-top:1px solid var(--line);
  padding:16px 22px 20px;
}
.form-total {
  background:white;
  border:1.5px solid var(--line);
  border-radius:10px;
  padding:14px 16px;
  margin-bottom:12px;
}
.form-total .row {
  display:flex;
  justify-content:space-between;
  font-size:0.82rem;
  color:var(--abu);
  margin-bottom:6px;
}
.form-total .row.grand {
  font-family:'Poppins',sans-serif;
  font-size:1.35rem;
  font-weight:800;
  color:var(--biru-tua);
  padding-top:10px;
  margin-top:8px;
  border-top:1px dashed var(--line);
  letter-spacing:-0.5px;
}

.btn-submit {
  width:100%;
  background:var(--biru);
  color:white;
  border:none;
  padding:15px;
  border-radius:10px;
  cursor:pointer;
  font-family:'Poppins',sans-serif;
  font-size:0.95rem;
  font-weight:700;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:10px;
  transition:background 0.15s;
}
.btn-submit:hover { background:var(--biru-tua); }
.btn-submit i { color:var(--kuning); }
.btn-submit:disabled {
  background:#c4d7e4;
  cursor:not-allowed;
}
.btn-submit:disabled i { color:white; }

/* ============ ADMIN ============ */
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
}
.admin-head h2 {
  font-family:'Poppins',sans-serif;
  font-size:1.4rem;
  font-weight:700;
  color:var(--biru-tua);
}
.admin-head h2 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.72rem;
  font-weight:500;
  color:var(--abu);
  letter-spacing:1px;
  text-transform:uppercase;
  margin-top:4px;
}
.admin-actions { display:flex; gap:10px; }
.btn-solid {
  background:var(--biru);
  color:white;
  border:none;
  padding:10px 18px;
  border-radius:9px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.8rem;
  font-weight:600;
  display:flex; align-items:center; gap:8px;
}
.btn-solid:hover { background:var(--biru-tua); }
.btn-solid i { color:var(--kuning); }
.btn-outline {
  background:white;
  border:1.5px solid var(--line);
  color:var(--biru-tua);
  padding:10px 18px;
  border-radius:9px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.8rem;
  font-weight:600;
  display:flex; align-items:center; gap:8px;
}
.btn-outline:hover { border-color:var(--biru); color:var(--biru); }

.stats-row {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:12px;
  margin-bottom:20px;
}
.stat-card {
  background:white;
  border:1.5px solid var(--line);
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
  background:var(--biru);
}
.stat-card.kuning::before { background:var(--kuning); }
.stat-card.hijau::before { background:var(--hijau); }
.stat-card.merah::before { background:var(--merah); }
.stat-card .s-lbl {
  font-size:0.68rem;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:1px;
  font-weight:600;
  margin-bottom:8px;
}
.stat-card .s-val {
  font-family:'Poppins',sans-serif;
  font-size:1.5rem;
  font-weight:700;
  color:var(--biru-tua);
  line-height:1;
}
.stat-card.kuning .s-val { color:var(--kuning-tua); }
.stat-card.hijau .s-val { color:var(--hijau); }
.stat-card.merah .s-val { color:var(--merah); }
.stat-card .s-sub {
  font-size:0.7rem;
  color:var(--abu);
  margin-top:4px;
}

.admin-section {
  background:white;
  border:1.5px solid var(--line);
  border-radius:12px;
  overflow:hidden;
  margin-bottom:18px;
}
.admin-section-title {
  padding:14px 20px;
  background:#fafcfe;
  border-bottom:1px solid var(--line);
  font-family:'Poppins',sans-serif;
  font-size:0.9rem;
  font-weight:700;
  color:var(--biru-tua);
  display:flex;
  align-items:center;
  gap:10px;
}
.admin-section-title i { color:var(--biru); }
.admin-section-title .spacer { flex:1; }
.admin-section-title .hint {
  font-family:'Inter',sans-serif;
  font-size:0.72rem;
  font-weight:500;
  color:var(--abu);
  text-transform:none;
  letter-spacing:0;
}

.layanan-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(240px,1fr));
  gap:12px;
  padding:18px 20px;
}
.layanan-card {
  background:#fafcfe;
  border:1.5px solid var(--line);
  border-radius:10px;
  padding:14px 16px;
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
  gap:10px;
  transition:all 0.15s;
}
.layanan-card:hover {
  border-color:var(--biru);
  background:white;
}
.layanan-card .info { flex:1; min-width:0; }
.layanan-card .nama {
  font-family:'Poppins',sans-serif;
  font-size:0.9rem;
  font-weight:600;
  color:var(--biru-tua);
  margin-bottom:4px;
}
.layanan-card .tipe {
  font-size:0.66rem;
  background:var(--biru-muda);
  color:var(--biru);
  padding:2px 8px;
  border-radius:10px;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:0.5px;
  display:inline-block;
  margin-bottom:6px;
}
.layanan-card .harga {
  font-family:'Poppins',sans-serif;
  font-size:1rem;
  font-weight:700;
  color:var(--biru);
}
.layanan-card .harga .unit {
  font-family:'Inter',sans-serif;
  font-size:0.72rem;
  font-weight:500;
  color:var(--abu);
}
.layanan-card .row-actions {
  display:flex;
  flex-direction:column;
  gap:4px;
}
.icon-btn {
  width:28px; height:28px;
  border:1.5px solid var(--line);
  background:white;
  color:var(--abu);
  cursor:pointer;
  border-radius:7px;
  font-size:0.72rem;
  display:flex; align-items:center; justify-content:center;
}
.icon-btn:hover {
  background:var(--biru);
  color:white;
  border-color:var(--biru);
}
.icon-btn.danger:hover {
  background:var(--merah);
  border-color:var(--merah);
}

/* Riwayat */
.tx-table {
  width:100%;
  border-collapse:collapse;
  font-size:0.84rem;
}
.tx-table th {
  text-align:left;
  padding:11px 16px;
  background:#fafcfe;
  font-size:0.68rem;
  font-weight:700;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:0.6px;
  border-bottom:1px solid var(--line);
}
.tx-table td {
  padding:13px 16px;
  border-bottom:1px solid var(--line);
  color:var(--biru-tua);
}
.tx-table tr:last-child td { border-bottom:none; }
.tx-table tr:hover { background:#fafcfe; }
.tx-num {
  font-family:'Courier New',monospace;
  font-weight:700;
  color:var(--biru);
  letter-spacing:0.5px;
}
.tx-badge {
  display:inline-block;
  font-size:0.65rem;
  font-weight:700;
  padding:3px 9px;
  border-radius:10px;
  text-transform:uppercase;
  letter-spacing:0.4px;
}
.tx-badge.lunas { background:#dcfce7; color:#166534; }
.tx-badge.belum { background:#fee2e2; color:#991b1b; }

/* ============ MODAL ============ */
.modal-bg {
  position:fixed;
  inset:0;
  background:rgba(26,86,128,0.55);
  display:none;
  align-items:center;
  justify-content:center;
  z-index:100;
  padding:16px;
}
.modal-bg.show { display:flex; }
.modal {
  background:white;
  border-radius:16px;
  width:100%;
  max-width:500px;
  max-height:92vh;
  overflow-y:auto;
  box-shadow:0 25px 60px -15px rgba(0,0,0,0.35);
}
.modal-head {
  padding:22px 24px 16px;
  border-bottom:1px solid var(--line);
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
}
.modal-head .kicker {
  font-size:0.65rem;
  letter-spacing:2px;
  color:var(--biru);
  text-transform:uppercase;
  font-weight:700;
  margin-bottom:6px;
}
.modal-head h3 {
  font-family:'Poppins',sans-serif;
  font-size:1.15rem;
  font-weight:700;
  color:var(--biru-tua);
  display:flex; align-items:center; gap:10px;
  padding-right:30px;
}
.modal-head h3 i { color:var(--kuning); }
.modal-head .sub {
  font-size:0.76rem;
  color:var(--abu);
  margin-top:5px;
}
.modal-close {
  background:transparent;
  border:1.5px solid var(--line);
  width:32px; height:32px;
  border-radius:50%;
  color:var(--abu);
  cursor:pointer;
}
.modal-close:hover {
  background:var(--biru);
  color:white;
  border-color:var(--biru);
}
.modal-body { padding:22px 24px; }
.modal-foot {
  padding:16px 24px 20px;
  border-top:1px solid var(--line);
  background:#fafcfe;
  display:flex;
  gap:10px;
  border-radius:0 0 16px 16px;
}
.modal-foot .btn-outline { flex:1; justify-content:center; }
.modal-foot .btn-solid { flex:2; justify-content:center; padding:13px; }

/* Bayar modal */
.bayar-total-big {
  background:var(--biru-tua);
  color:white;
  border-radius:12px;
  padding:22px 20px;
  text-align:center;
  margin-bottom:20px;
}
.bayar-total-big .lbl {
  font-size:0.7rem;
  letter-spacing:2px;
  color:var(--kuning);
  font-weight:700;
  text-transform:uppercase;
  margin-bottom:6px;
}
.bayar-total-big .total {
  font-family:'Poppins',sans-serif;
  font-size:2rem;
  font-weight:800;
  letter-spacing:-0.5px;
}

.pay-methods {
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:8px;
  margin-bottom:16px;
}
.pay-method {
  border:2px solid var(--line);
  padding:14px 12px;
  border-radius:10px;
  cursor:pointer;
  text-align:center;
  font-family:'Poppins',sans-serif;
  font-size:0.82rem;
  font-weight:600;
  color:var(--biru-tua);
  transition:all 0.15s;
}
.pay-method i {
  display:block;
  font-size:1.15rem;
  margin-bottom:6px;
  color:var(--abu);
}
.pay-method.selected {
  background:var(--biru-muda);
  border-color:var(--biru);
}
.pay-method.selected i { color:var(--biru); }

/* Struk / Nota Laundry */
.nota-cetak {
  background:white;
  border:2px dashed var(--biru);
  border-radius:8px;
  padding:22px 20px;
  font-family:'Courier New',monospace;
  font-size:0.76rem;
  color:#1a3a52;
  line-height:1.55;
  position:relative;
}
.nota-cetak::before {
  content:'';
  position:absolute;
  top:-12px; left:50%;
  transform:translateX(-50%);
  width:60px; height:20px;
  background:var(--kuning);
  border-radius:0 0 6px 6px;
  clip-path:polygon(0 0, 100% 0, 85% 100%, 15% 100%);
}
.nota-cetak .n-head {
  text-align:center;
  padding-bottom:12px;
  border-bottom:1px dashed var(--line);
  margin-bottom:12px;
}
.nota-cetak .n-head h4 {
  font-family:'Poppins',sans-serif;
  font-size:1.15rem;
  font-weight:800;
  color:var(--biru-tua);
  letter-spacing:0.5px;
}
.nota-cetak .n-head p {
  font-size:0.68rem;
  color:var(--abu);
  margin-top:4px;
  line-height:1.6;
}
.nota-cetak .n-nomor-big {
  background:var(--biru);
  color:white;
  padding:10px;
  text-align:center;
  border-radius:6px;
  margin:12px 0;
  font-family:'Poppins',sans-serif;
  font-size:1rem;
  font-weight:700;
  letter-spacing:2px;
}
.nota-cetak .n-meta {
  font-size:0.72rem;
  color:var(--abu);
  margin-bottom:12px;
  line-height:1.7;
}
.nota-cetak .n-meta strong { color:var(--biru-tua); }
.nota-cetak .n-item {
  font-size:0.76rem;
  margin-bottom:8px;
  padding-bottom:8px;
  border-bottom:1px dotted var(--line);
}
.nota-cetak .n-item:last-of-type { border-bottom:none; }
.nota-cetak .n-line1 {
  display:flex;
  justify-content:space-between;
  font-weight:700;
}
.nota-cetak .n-line2 {
  display:flex;
  justify-content:space-between;
  color:var(--abu);
  font-size:0.7rem;
  margin-top:2px;
}
.nota-cetak .n-total {
  border-top:1px dashed var(--line);
  padding-top:12px;
  margin-top:12px;
}
.nota-cetak .n-total .row {
  display:flex;
  justify-content:space-between;
  font-size:0.78rem;
  margin-bottom:5px;
}
.nota-cetak .n-total .grand {
  font-family:'Poppins',sans-serif;
  font-size:1.3rem;
  font-weight:800;
  color:var(--biru);
  border-top:1px dashed var(--line);
  padding-top:10px;
  margin-top:8px;
  display:flex;
  justify-content:space-between;
}
.nota-cetak .n-status {
  background:#fef3c7;
  border-radius:6px;
  padding:8px 12px;
  font-size:0.72rem;
  margin-top:14px;
  text-align:center;
  color:#8a6b1f;
  font-weight:700;
  letter-spacing:0.5px;
}
.nota-cetak .n-foot {
  text-align:center;
  font-size:0.68rem;
  color:var(--abu);
  margin-top:16px;
  padding-top:12px;
  border-top:1px dashed var(--line);
  line-height:1.7;
}

/* TOAST */
.toast {
  position:fixed;
  bottom:24px; left:50%;
  transform:translateX(-50%) translateY(80px);
  background:var(--biru-tua);
  color:white;
  padding:13px 24px;
  border-radius:40px;
  font-size:0.85rem;
  font-weight:600;
  display:flex;
  align-items:center;
  gap:10px;
  opacity:0;
  transition:all 0.3s;
  z-index:200;
  box-shadow:0 10px 30px -8px rgba(26,86,128,0.5);
  max-width:90vw;
}
.toast.show {
  opacity:1;
  transform:translateX(-50%) translateY(0);
}
.toast i { color:var(--kuning); }

/* SCROLLBAR */
::-webkit-scrollbar { width:6px; height:6px; }
::-webkit-scrollbar-track { background:transparent; }
::-webkit-scrollbar-thumb { background:#c4d7e4; border-radius:10px; }
::-webkit-scrollbar-thumb:hover { background:var(--biru); }

/* ============ RESPONSIVE ============ */
@media (max-width: 1100px) {
  .kasir-grid { grid-template-columns:280px 1fr; }
  .col-form { display:none; }
  .col-form.mobile-show {
    display:flex;
    position:fixed;
    top:66px; right:0; bottom:0;
    width:400px;
    max-width:100%;
    z-index:55;
    box-shadow:-10px 0 30px rgba(0,0,0,0.15);
  }
  .form-toggle-btn {
    display:flex !important;
  }
}
@media (max-width: 720px) {
  .topbar { padding:0 14px; height:60px; }
  .brand-mark { width:36px; height:36px; font-size:1rem; }
  .brand h1 { font-size:1rem; }
  .brand h1 small { font-size:0.55rem; letter-spacing:1.5px; }
  .mode-nav button span { display:none; }
  .mode-nav button { padding:8px 10px; }
  .user-badge .info { display:none; }
  .user-badge { padding:5px; }

  .kasir-grid { grid-template-columns:1fr; padding-bottom:80px; }
  .col-nota-list {
    border-right:none;
    border-bottom:1px solid var(--line);
    max-height:340px;
  }
  .col-detail { padding:16px 14px 100px; }
  .detail-header { padding:16px 18px; }
  .detail-header .left h2 { font-size:1.1rem; }
  .status-btn { font-size:0.7rem; padding:7px 10px; }

  .action-buttons { flex-direction:column; }

  .admin-wrap { padding:16px 14px; }
  .stats-row { grid-template-columns:1fr 1fr; gap:10px; }
  .stat-card { padding:13px 14px; }
  .stat-card .s-val { font-size:1.2rem; }
  .layanan-grid { grid-template-columns:1fr; padding:14px; }
  .tx-table th, .tx-table td { padding:10px 10px; font-size:0.76rem; }
  .tx-table th:nth-child(3), .tx-table td:nth-child(3) { display:none; }

  .modal { border-radius:16px 16px 0 0; }
  .modal-bg { align-items:flex-end; padding:0; }
  .modal-head { padding:20px 20px 14px; }
  .modal-body { padding:20px; }
  .modal-foot { padding:14px 20px 20px; flex-direction:column-reverse; }
  .modal-foot button { width:100%; justify-content:center; padding:14px; }

  .pay-methods { grid-template-columns:1fr 1fr; }

  /* Form toggle button mobile */
  .form-toggle-btn {
    position:fixed;
    bottom:20px; right:20px;
    width:56px; height:56px;
    border-radius:50%;
    background:var(--biru);
    color:white;
    border:none;
    cursor:pointer;
    font-size:1.3rem;
    box-shadow:0 8px 20px -4px rgba(42,127,184,0.5);
    z-index:60;
    display:flex !important;
    align-items:center;
    justify-content:center;
  }
  .form-toggle-btn:hover { background:var(--biru-tua); }
  .form-toggle-btn.active { background:var(--merah); }
}

.form-toggle-btn { display:none; }
</style>
</head>
<body>

<div class="app">

<!-- ==================== HEADER ==================== -->
<header class="topbar">
  <div class="brand">
    <div class="brand-mark"><i class="fas fa-soap"></i></div>
    <h1>Bersih Wangi<small>Laundry Kiloan & Satuan</small></h1>
  </div>
  <div class="topbar-right">
    <nav class="mode-nav">
      <button id="navKasir" class="active">
        <i class="fas fa-clipboard-list"></i> <span>Nota</span>
      </button>
      <button id="navAdmin">
        <i class="fas fa-chart-simple"></i> <span>Laporan</span>
      </button>
    </nav>
    <div class="user-badge">
      <div class="avatar" id="avatarInit">MR</div>
      <div class="info">
        <div class="name" id="userName">Mbak Rina</div>
        <div class="role" id="userRole">Kasir</div>
      </div>
    </div>
  </div>
</header>

<!-- ==================== PAGE KASIR ==================== -->
<div class="page active" id="pageKasir">
  <div class="kasir-grid">

    <!-- KOLOM 1: DAFTAR NOTA -->
    <aside class="col-nota-list">
      <div class="nota-head">
        <div class="kicker">Papan Antrean</div>
        <h3>
          <span>Nota Aktif</span>
          <span class="count-badge" id="notaCount">0</span>
        </h3>
      </div>

      <div class="status-tabs" id="statusTabs">
        <button class="status-tab active" data-status="semua">Semua</button>
        <button class="status-tab" data-status="baru"><i class="fas fa-circle" style="font-size:0.5rem; color:#f5c842;"></i> Baru</button>
        <button class="status-tab" data-status="dicuci">Dicuci</button>
        <button class="status-tab" data-status="disetrika">Setrika</button>
        <button class="status-tab" data-status="siap">Siap</button>
      </div>

      <div class="nota-list" id="notaList"></div>
    </aside>

    <!-- KOLOM 2: DETAIL -->
    <section class="col-detail" id="colDetail">
      <div class="detail-empty" id="detailEmpty">
        <i class="fas fa-shirt"></i>
        <h3>Belum ada nota terpilih</h3>
        <p>Pilih nota dari papan antrean di kiri, atau buat nota baru untuk pelanggan yang datang.</p>
      </div>
      <div id="detailContent" style="display:none;"></div>
    </section>

    <!-- KOLOM 3: FORM NOTA BARU -->
    <aside class="col-form" id="colForm">
      <div class="form-head">
        <div class="kicker">Nota Baru</div>
        <h3><i class="fas fa-plus-circle"></i> Pelanggan Datang</h3>
      </div>

      <div class="form-body">
        <div class="field">
          <label>Nama Pelanggan</label>
          <input type="text" id="fNama" placeholder="Contoh: Bu Sinta" maxlength="40">
        </div>

        <div class="field">
          <label>No. HP</label>
          <input type="tel" id="fHP" placeholder="08xx-xxxx-xxxx" maxlength="15">
        </div>

        <div class="field">
          <label>Jenis Layanan</label>
          <div class="paket-grid" id="paketGrid">
            <!-- Diisi JS -->
          </div>
        </div>

        <div class="field" id="fieldBerat">
          <label>Berat Cucian (kg)</label>
          <div class="berat-input-wrap">
            <button class="step-btn" data-step="min"><i class="fas fa-minus"></i></button>
            <input type="number" id="fBerat" value="0" min="0" step="0.5" style="flex:1;">
            <button class="step-btn" data-step="plus"><i class="fas fa-plus"></i></button>
          </div>
          <div style="display:flex; gap:6px; margin-top:6px; flex-wrap:wrap;">
            <button class="status-tab" data-quick="1" style="background:#e6f0f8; color:var(--biru);">1 kg</button>
            <button class="status-tab" data-quick="2" style="background:#e6f0f8; color:var(--biru);">2 kg</button>
            <button class="status-tab" data-quick="3" style="background:#e6f0f8; color:var(--biru);">3 kg</button>
            <button class="status-tab" data-quick="5" style="background:#e6f0f8; color:var(--biru);">5 kg</button>
          </div>
        </div>

        <div class="field">
          <label>Item Tambahan (opsional)</label>
          <div class="item-tambahan-list" id="itemTambahanList">
            <!-- Diisi JS -->
          </div>
          <button class="btn-add-item" id="btnAddItem">
            <i class="fas fa-plus"></i> Tambah Item Satuan
          </button>
        </div>

        <div class="field">
          <label>Opsi Tambahan</label>
          <div class="toggle-row" style="margin-bottom:8px;">
            <input type="checkbox" id="fExpress">
            <label for="fExpress">
              Layanan Express
              <span class="info">Selesai dalam 1 hari (+50%)</span>
            </label>
          </div>
          <div class="toggle-row">
            <input type="checkbox" id="fAntar">
            <label for="fAntar">
              Antar-Jemput
              <span class="info">Ongkos Rp 8.000</span>
            </label>
          </div>
        </div>

        <div class="field">
          <label>Catatan</label>
          <textarea id="fCatatan" placeholder="Contoh: Jangan pakai pelicin, ada baju putih"></textarea>
        </div>
      </div>

      <div class="form-foot">
        <div class="form-total">
          <div class="row"><span>Subtotal</span><span id="formSubtotal">Rp 0</span></div>
          <div class="row" id="formExpressRow" style="display:none;"><span>Express +50%</span><span id="formExpress">Rp 0</span></div>
          <div class="row" id="formAntarRow" style="display:none;"><span>Antar-Jemput</span><span id="formAntar">Rp 0</span></div>
          <div class="row grand"><span>Total</span><span id="formTotal">Rp 0</span></div>
        </div>
        <button class="btn-submit" id="btnBuatNota">
          <i class="fas fa-file-circle-plus"></i> Buat Nota Laundry
        </button>
      </div>
    </aside>

    <button class="form-toggle-btn" id="btnToggleForm"><i class="fas fa-plus"></i></button>
  </div>
</div>

<!-- ==================== PAGE ADMIN ==================== -->
<div class="page" id="pageAdmin">
  <div class="admin-wrap">
    <div class="admin-head">
      <h2>Laporan & Layanan<small>Kelola harga & lihat rekap</small></h2>
      <div class="admin-actions">
        <button class="btn-outline" id="btnResetData">
          <i class="fas fa-rotate"></i> Reset
        </button>
        <button class="btn-solid" id="btnTambahLayanan">
          <i class="fas fa-plus"></i> Layanan Baru
        </button>
      </div>
    </div>

    <div class="stats-row">
      <div class="stat-card">
        <div class="s-lbl">Nota Hari Ini</div>
        <div class="s-val" id="sNotaHariIni">0</div>
        <div class="s-sub">nota masuk</div>
      </div>
      <div class="stat-card kuning">
        <div class="s-lbl">Sedang Diproses</div>
        <div class="s-val" id="sProses">0</div>
        <div class="s-sub">nota belum selesai</div>
      </div>
      <div class="stat-card hijau">
        <div class="s-lbl">Pendapatan Hari Ini</div>
        <div class="s-val" id="sPendapatan" style="font-size:1.15rem;">Rp 0</div>
        <div class="s-sub">nota lunas</div>
      </div>
      <div class="stat-card merah">
        <div class="s-lbl">Piutang</div>
        <div class="s-val" id="sPiutang" style="font-size:1.15rem;">Rp 0</div>
        <div class="s-sub">belum dibayar</div>
      </div>
    </div>

    <div class="admin-section">
      <div class="admin-section-title">
        <i class="fas fa-tags"></i> Daftar Layanan
        <span class="spacer"></span>
        <span class="hint" id="layananCount">0 layanan</span>
      </div>
      <div class="layanan-grid" id="layananGrid"></div>
    </div>

    <div class="admin-section">
      <div class="admin-section-title">
        <i class="fas fa-clock-rotate-left"></i> Riwayat Transaksi
      </div>
      <table class="tx-table">
        <thead>
          <tr>
            <th>No. Nota</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody id="txBody"></tbody>
      </table>
    </div>
  </div>
</div>

</div>

<!-- ==================== MODAL PILIH ITEM TAMBAHAN ==================== -->
<div class="modal-bg" id="modalItem">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Item Satuan</div>
        <h3><i class="fas fa-plus-circle"></i> Tambah Item</h3>
        <div class="sub">Cuci kering atau setrika satuan</div>
      </div>
      <button class="modal-close" id="closeItem"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="field">
        <label>Jenis Item</label>
        <select id="itemJenis">
          <option value="kemeja">Kemeja / Blouse</option>
          <option value="celana">Celana Panjang</option>
          <option value="jaket">Jaket / Hoodie</option>
          <option value="gamis">Gamis / Dress</option>
          <option value="bedcover">Bed Cover</option>
          <option value="selimut">Selimut</option>
          <option value="sprei">Sprei Set</option>
          <option value="handuk">Handuk</option>
          <option value="boneka">Boneka</option>
        </select>
      </div>
      <div class="field">
        <label>Jumlah</label>
        <div class="berat-input-wrap">
          <button class="step-btn" data-item-step="min"><i class="fas fa-minus"></i></button>
          <input type="number" id="itemJumlah" value="1" min="1" step="1" style="flex:1;">
          <button class="step-btn" data-item-step="plus"><i class="fas fa-plus"></i></button>
        </div>
      </div>
      <div class="field">
        <label>Jenis Proses</label>
        <div class="paket-grid">
          <div class="paket-opt selected" data-jenis-proses="cuci-setrika">
            <div class="nama">Cuci + Setrika</div>
            <div class="harga" id="hargaCuciSetrika">Rp 0</div>
          </div>
          <div class="paket-opt" data-jenis-proses="setrika">
            <div class="nama">Setrika Saja</div>
            <div class="harga" id="hargaSetrikaSaja">Rp 0</div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalItem">Batal</button>
      <button class="btn-solid" id="btnTambahItem">
        <i class="fas fa-check"></i> Tambahkan
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL BAYAR ==================== -->
<div class="modal-bg" id="modalBayar">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Pembayaran</div>
        <h3><i class="fas fa-cash-register"></i> Terima Pembayaran</h3>
        <div class="sub" id="bayarSubInfo">Nota #---</div>
      </div>
      <button class="modal-close" id="closeBayar"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="bayar-total-big">
        <div class="lbl">Total Tagihan</div>
        <div class="total" id="bayarTotal">Rp 0</div>
      </div>

      <div class="pay-methods">
        <div class="pay-method selected" data-method="Tunai">
          <i class="fas fa-money-bill-wave"></i> Tunai
        </div>
        <div class="pay-method" data-method="Transfer">
          <i class="fas fa-building-columns"></i> Transfer
        </div>
      </div>

      <div class="field" id="cashSection">
        <label>Uang Diterima</label>
        <input type="number" id="cashInput" placeholder="0" min="0" step="5000" style="font-family:'Poppins',sans-serif; font-size:1.15rem; font-weight:700; padding:14px; text-align:right;">
      </div>

      <div id="changeBox" style="background:#dcfce7; color:#166534; padding:14px 16px; border-radius:10px; display:flex; justify-content:space-between; font-weight:700; font-family:'Poppins',sans-serif;">
        <span>Kembalian</span>
        <span id="changeTxt">Rp 0</span>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalBayar">Batal</button>
      <button class="btn-solid" id="btnKonfirmasiBayar">
        <i class="fas fa-check"></i> Konfirmasi Lunas
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL NOTA (CETAK) ==================== -->
<div class="modal-bg" id="modalNota">
  <div class="modal" style="max-width:400px;">
    <div class="modal-head">
      <div>
        <div class="kicker">Nota Laundry</div>
        <h3><i class="fas fa-receipt"></i> Nota Pelanggan</h3>
        <div class="sub">Berikan salinan ke pelanggan</div>
      </div>
      <button class="modal-close" id="closeNota"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body" id="notaBody"></div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnTutupNota">Tutup</button>
      <button class="btn-solid" id="btnCetakNota">
        <i class="fas fa-print"></i> Cetak
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL LAYANAN (ADMIN) ==================== -->
<div class="modal-bg" id="modalLayanan">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Layanan</div>
        <h3><i class="fas fa-tag"></i> <span id="layananFormTitle">Tambah Layanan</span></h3>
        <div class="sub">Data layanan & harga</div>
      </div>
      <button class="modal-close" id="closeLayanan"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <input type="hidden" id="editLayananId">
      <div class="field">
        <label>Nama Layanan</label>
        <input type="text" id="lNama" placeholder="Contoh: Cuci Kering" maxlength="40">
      </div>
      <div class="field">
        <label>Tipe Hitungan</label>
        <select id="lTipe">
          <option value="kg">Per Kilogram (kiloan)</option>
          <option value="item">Per Item (satuan)</option>
        </select>
      </div>
      <div class="field">
        <label>Harga</label>
        <input type="number" id="lHarga" placeholder="0" min="0" step="500">
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalLayanan">Batal</button>
      <button class="btn-solid" id="btnSimpanLayanan">
        <i class="fas fa-floppy-disk"></i> Simpan
      </button>
    </div>
  </div>
</div>

<div class="toast" id="toast"><i class="fas fa-circle-check"></i> <span id="toastTxt"></span></div>

<script>
(function(){
  /* =========================================================
     DATA & STATE
  ========================================================= */
  const STORAGE_KEY = 'laundry_data_v1';

  const defaultLayanan = [
    { id:1, nama:'Cuci Kering', tipe:'kg', harga:7000 },
    { id:2, nama:'Cuci Setrika', tipe:'kg', harga:10000 },
    { id:3, nama:'Setrika Saja', tipe:'kg', harga:6000 },
    { id:4, nama:'Bed Cover', tipe:'item', harga:35000 },
    { id:5, nama:'Selimut', tipe:'item', harga:25000 },
    { id:6, nama:'Sprei Set', tipe:'item', harga:18000 },
    { id:7, nama:'Handuk', tipe:'item', harga:8000 },
    { id:8, nama:'Boneka Kecil', tipe:'item', harga:15000 },
    { id:9, nama:'Boneka Besar', tipe:'item', harga:30000 }
  ];

  const HARGA_ITEM = {
    kemeja: { cuciSetrika: 8000, setrika: 5000, nama: 'Kemeja / Blouse' },
    celana: { cuciSetrika: 9000, setrika: 6000, nama: 'Celana Panjang' },
    jaket: { cuciSetrika: 15000, setrika: 8000, nama: 'Jaket / Hoodie' },
    gamis: { cuciSetrika: 18000, setrika: 12000, nama: 'Gamis / Dress' },
    bedcover: { cuciSetrika: 35000, setrika: 20000, nama: 'Bed Cover' },
    selimut: { cuciSetrika: 25000, setrika: 15000, nama: 'Selimut' },
    sprei: { cuciSetrika: 18000, setrika: 10000, nama: 'Sprei Set' },
    handuk: { cuciSetrika: 8000, setrika: 5000, nama: 'Handuk' },
    boneka: { cuciSetrika: 20000, setrika: 12000, nama: 'Boneka' }
  };

  const STATUS_FLOW = ['baru', 'dicuci', 'disetrika', 'siap', 'selesai'];
  const STATUS_LABEL = {
    baru: 'Baru Masuk',
    dicuci: 'Sedang Dicuci',
    disetrika: 'Sedang Disetrika',
    siap: 'Siap Diambil',
    selesai: 'Sudah Diambil'
  };

  let data;
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    data = raw ? JSON.parse(raw) : null;
  } catch(e) { data = null; }

  if (!data) {
    data = {
      layanan: JSON.parse(JSON.stringify(defaultLayanan)),
      notas: [],
      counter: 1
    };
  }
  const save = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(data));

  let activeNotaId = null;
  let filterStatus = 'semua';
  let paketTerpilih = 2; // id Cuci Setrika
  let itemTambahan = [];
  let pendingItem = { jenis: 'kemeja', jumlah: 1, proses: 'cuci-setrika' };
  let bayarNotaId = null;
  let bayarMethod = 'Tunai';

  /* =========================================================
     UTIL
  ========================================================= */
  const rp = n => 'Rp ' + Math.round(Number(n)).toLocaleString('id-ID');

  let toastTimer;
  function toast(msg, icon='fa-circle-check') {
    const t = document.getElementById('toast');
    document.getElementById('toastTxt').textContent = msg;
    t.querySelector('i').className = 'fas ' + icon;
    t.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => t.classList.remove('show'), 2200);
  }

  function getLayanan(id) {
    return data.layanan.find(l => l.id === id);
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
    document.getElementById('userName').textContent = 'Mbak Rina';
    document.getElementById('userRole').textContent = 'Kasir';
    document.getElementById('avatarInit').textContent = 'MR';
    renderNotaList();
  });

  navAdmin.addEventListener('click', () => {
    navAdmin.classList.add('active');
    navKasir.classList.remove('active');
    pageAdmin.classList.add('active');
    pageKasir.classList.remove('active');
    document.getElementById('userName').textContent = 'Pak Budi';
    document.getElementById('userRole').textContent = 'Owner';
    document.getElementById('avatarInit').textContent = 'PB';
    renderAdmin();
  });

  /* =========================================================
     RENDER PAKET DI FORM
  ========================================================= */
  function renderPaketGrid() {
    const grid = document.getElementById('paketGrid');
    const paketKg = data.layanan.filter(l => l.tipe === 'kg');
    grid.innerHTML = paketKg.map(l => `
      <div class="paket-opt ${l.id === paketTerpilih ? 'selected' : ''}" data-id="${l.id}">
        <div class="nama">${l.nama}</div>
        <div class="harga">${rp(l.harga)}/kg</div>
      </div>
    `).join('');

    grid.querySelectorAll('.paket-opt').forEach(opt => {
      opt.addEventListener('click', () => {
        grid.querySelectorAll('.paket-opt').forEach(o => o.classList.remove('selected'));
        opt.classList.add('selected');
        paketTerpilih = parseInt(opt.dataset.id);
        updateFormTotal();
      });
    });
  }

  /* =========================================================
     RENDER ITEM TAMBAHAN
  ========================================================= */
  function renderItemTambahan() {
    const list = document.getElementById('itemTambahanList');
    if (itemTambahan.length === 0) {
      list.innerHTML = '<div style="text-align:center; padding:16px; font-size:0.78rem; color:var(--abu); font-style:italic;">Belum ada item satuan</div>';
      return;
    }
    list.innerHTML = itemTambahan.map((it, idx) => `
      <div class="item-tambahan">
        <div class="info">
          <div class="nama">${it.nama} × ${it.jumlah}</div>
          <div class="detail">${it.proses} · ${rp(it.hargaSatuan)}/item</div>
        </div>
        <div style="display:flex; align-items:center; gap:8px;">
          <div style="font-family:'Poppins',sans-serif; font-weight:700; color:var(--biru); font-size:0.85rem;">${rp(it.subtotal)}</div>
          <button class="hapus" data-idx="${idx}"><i class="fas fa-times"></i></button>
        </div>
      </div>
    `).join('');

    list.querySelectorAll('.hapus').forEach(btn => {
      btn.addEventListener('click', () => {
        itemTambahan.splice(parseInt(btn.dataset.idx), 1);
        renderItemTambahan();
        updateFormTotal();
      });
    });
  }

  /* =========================================================
     HITUNG TOTAL FORM
  ========================================================= */
  function updateFormTotal() {
    const berat = parseFloat(document.getElementById('fBerat').value) || 0;
    const paket = getLayanan(paketTerpilih);
    const subtotalKg = paket ? paket.harga * berat : 0;
    const subtotalItem = itemTambahan.reduce((s, it) => s + it.subtotal, 0);
    let subtotal = subtotalKg + subtotalItem;

    const express = document.getElementById('fExpress').checked;
    const antar = document.getElementById('fAntar').checked;

    const biayaExpress = express ? Math.round(subtotal * 0.5) : 0;
    const biayaAntar = antar ? 8000 : 0;

    document.getElementById('formSubtotal').textContent = rp(subtotal);

    if (express) {
      document.getElementById('formExpressRow').style.display = 'flex';
      document.getElementById('formExpress').textContent = rp(biayaExpress);
    } else {
      document.getElementById('formExpressRow').style.display = 'none';
    }

    if (antar) {
      document.getElementById('formAntarRow').style.display = 'flex';
      document.getElementById('formAntar').textContent = rp(biayaAntar);
    } else {
      document.getElementById('formAntarRow').style.display = 'none';
    }

    document.getElementById('formTotal').textContent = rp(subtotal + biayaExpress + biayaAntar);

    // Enable/disable submit
    const btn = document.getElementById('btnBuatNota');
    const nama = document.getElementById('fNama').value.trim();
    const valid = nama && (berat > 0 || itemTambahan.length > 0);
    btn.disabled = !valid;
  }

  /* =========================================================
     BUAT NOTA
  ========================================================= */
  document.getElementById('fBerat').addEventListener('input', updateFormTotal);
  document.getElementById('fExpress').addEventListener('change', updateFormTotal);
  document.getElementById('fAntar').addEventListener('change', updateFormTotal);
  document.getElementById('fNama').addEventListener('input', updateFormTotal);

  document.querySelectorAll('[data-step]').forEach(btn => {
    btn.addEventListener('click', () => {
      const input = document.getElementById('fBerat');
      let v = parseFloat(input.value) || 0;
      v += btn.dataset.step === 'plus' ? 0.5 : -0.5;
      if (v < 0) v = 0;
      input.value = v;
      updateFormTotal();
    });
  });

  document.querySelectorAll('[data-quick]').forEach(btn => {
    btn.addEventListener('click', () => {
      document.getElementById('fBerat').value = btn.dataset.quick;
      updateFormTotal();
    });
  });

  document.getElementById('btnBuatNota').addEventListener('click', () => {
    const nama = document.getElementById('fNama').value.trim();
    const hp = document.getElementById('fHP').value.trim();
    const berat = parseFloat(document.getElementById('fBerat').value) || 0;
    const catatan = document.getElementById('fCatatan').value.trim();
    const express = document.getElementById('fExpress').checked;
    const antar = document.getElementById('fAntar').checked;
    const paket = getLayanan(paketTerpilih);

    if (!nama) return toast('Nama pelanggan harus diisi', 'fa-exclamation-circle');
    if (berat <= 0 && itemTambahan.length === 0) {
      return toast('Isi berat atau item tambahan', 'fa-exclamation-circle');
    }

    const subtotalKg = paket ? paket.harga * berat : 0;
    const subtotalItem = itemTambahan.reduce((s, it) => s + it.subtotal, 0);
    const subtotal = subtotalKg + subtotalItem;
    const biayaExpress = express ? Math.round(subtotal * 0.5) : 0;
    const biayaAntar = antar ? 8000 : 0;
    const total = subtotal + biayaExpress + biayaAntar;

    const now = new Date();
    const tanggalMasuk = now.toISOString();
    const hariEstimasi = express ? 1 : 2;
    const est = new Date(now.getTime() + hariEstimasi * 24 * 60 * 60 * 1000);

    const nomor = 'BW-' + now.getFullYear().toString().slice(-2) +
                  String(now.getMonth()+1).padStart(2,'0') +
                  String(now.getDate()).padStart(2,'0') + '-' +
                  String(data.counter).padStart(3,'0');

    const nota = {
      id: 'n' + Date.now(),
      nomor: nomor,
      nama: nama,
      hp: hp,
      berat: berat,
      paket: paket,
      items: itemTambahan.map(it => ({ ...it })),
      catatan: catatan,
      express: express,
      antar: antar,
      subtotalKg: subtotalKg,
      subtotalItem: subtotalItem,
      biayaExpress: biayaExpress,
      biayaAntar: biayaAntar,
      total: total,
      status: 'baru',
      tanggalMasuk: tanggalMasuk,
      estimasi: est.toISOString(),
      tanggalSelesai: null,
      dibayar: false,
      tanggalBayar: null,
      metodeBayar: null
    };

    data.notas.unshift(nota);
    data.counter++;
    save();

    // Reset form
    document.getElementById('fNama').value = '';
    document.getElementById('fHP').value = '';
    document.getElementById('fBerat').value = '0';
    document.getElementById('fCatatan').value = '';
    document.getElementById('fExpress').checked = false;
    document.getElementById('fAntar').checked = false;
    itemTambahan = [];
    renderItemTambahan();
    updateFormTotal();

    // Set active ke nota baru & render
    activeNotaId = nota.id;
    renderNotaList();
    renderDetail();
    toast(`Nota ${nota.nomor} dibuat untuk ${nama}`, 'fa-file-circle-plus');
  });

  /* =========================================================
     RENDER DAFTAR NOTA
  ========================================================= */
  function renderNotaList() {
    const list = document.getElementById('notaList');
    let notas = data.notas.slice();

    if (filterStatus !== 'semua') {
      notas = notas.filter(n => n.status === filterStatus);
    }
    // Sembunyikan yang sudah selesai & sudah dibayar
    notas = notas.filter(n => !(n.status === 'selesai' && n.dibayar));

    document.getElementById('notaCount').textContent = notas.length;

    if (notas.length === 0) {
      list.innerHTML = `
        <div class="nota-list-empty">
          <i class="fas fa-shirt"></i>
          Belum ada nota ${filterStatus !== 'semua' ? 'di kategori ini' : 'aktif'}
        </div>`;
      return;
    }

    list.innerHTML = notas.map(n => {
      const tgl = new Date(n.tanggalMasuk);
      const tglStr = tgl.toLocaleDateString('id-ID', { day:'2-digit', month:'short' });
      const jamStr = tgl.toLocaleTimeString('id-ID', { hour:'2-digit', minute:'2-digit' });

      return `
        <div class="nota-card status-${n.status} ${n.id === activeNotaId ? 'active' : ''}" data-id="${n.id}">
          <div class="nota-card-top">
            <div>
              <div class="nota-nomor">${n.nomor}</div>
              <div class="nota-tanggal">${tglStr} · ${jamStr}</div>
            </div>
            <span class="nota-status-pill ${n.status}">${STATUS_LABEL[n.status]}</span>
          </div>
          <div class="nota-pelanggan">${n.nama}</div>
          <div class="nota-info">
            ${n.berat > 0 ? `<span><i class="fas fa-weight-scale"></i> ${n.berat} kg</span>` : ''}
            ${n.items.length > 0 ? `<span><i class="fas fa-layer-group"></i> ${n.items.length} item</span>` : ''}
            ${n.express ? '<span style="color:#d9a715;"><i class="fas fa-bolt"></i> Express</span>' : ''}
          </div>
          <div class="nota-card-foot">
            <span class="nota-harga">${rp(n.total)}</span>
            <span class="nota-paid-badge ${n.dibayar ? 'lunas' : 'belum'}">
              ${n.dibayar ? 'Lunas' : 'Belum Bayar'}
            </span>
          </div>
        </div>
      `;
    }).join('');

    list.querySelectorAll('.nota-card').forEach(card => {
      card.addEventListener('click', () => {
        activeNotaId = card.dataset.id;
        renderNotaList();
        renderDetail();
        if (window.innerWidth <= 720) {
          document.getElementById('colForm').classList.remove('mobile-show');
          document.getElementById('btnToggleForm').classList.remove('active');
          document.getElementById('btnToggleForm').innerHTML = '<i class="fas fa-plus"></i>';
        }
      });
    });
  }

  /* =========================================================
     RENDER DETAIL
  ========================================================= */
  function renderDetail() {
    const empty = document.getElementById('detailEmpty');
    const content = document.getElementById('detailContent');
    const nota = data.notas.find(n => n.id === activeNotaId);

    if (!nota) {
      empty.style.display = 'flex';
      content.style.display = 'none';
      return;
    }

    empty.style.display = 'none';
    content.style.display = 'block';

    const tglMasuk = new Date(nota.tanggalMasuk).toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' });
    const tglEstimasi = new Date(nota.estimasi).toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' });

    const itemsHtml = nota.items.map(it => `
      <div class="item-row">
        <div class="item-info">
          <div class="nama">${it.nama} × ${it.jumlah}</div>
          <div class="meta">${it.proses} · ${rp(it.hargaSatuan)}/item</div>
        </div>
        <div class="item-price">${rp(it.subtotal)}</div>
      </div>
    `).join('');

    const statusIndex = STATUS_FLOW.indexOf(nota.status);
    const statusBtns = STATUS_FLOW.map((s, i) => {
      let cls = 'status-btn';
      if (s === nota.status) cls += ' active';
      else if (i < statusIndex) cls += ' done';
      return `<button class="${cls}" data-status="${s}">${i < statusIndex ? '<i class="fas fa-check"></i>' : ''} ${STATUS_LABEL[s]}</button>`;
    }).join('');

    content.innerHTML = `
      <div class="detail-header">
        <div class="left">
          <h2>${nota.nama}</h2>
          <div class="meta">
            <span><i class="fas fa-hashtag"></i> ${nota.nomor}</span>
            ${nota.hp ? `<span><i class="fas fa-phone"></i> ${nota.hp}</span>` : ''}
            <span><i class="fas fa-calendar"></i> Masuk: ${tglMasuk}</span>
          </div>
          <div class="status-flow">${statusBtns}</div>
        </div>
      </div>

      <div class="detail-section">
        <div class="detail-section-title">
          <span class="lbl"><i class="fas fa-list-check"></i> Rincian Cucian</span>
        </div>

        ${nota.berat > 0 ? `
          <div class="item-row">
            <div class="item-info">
              <div class="nama">${nota.paket ? nota.paket.nama : 'Cuci'} · ${nota.berat} kg</div>
              <div class="meta"><strong>${rp(nota.paket ? nota.paket.harga : 0)}/kg</strong> × ${nota.berat} kg</div>
            </div>
            <div class="item-price">${rp(nota.subtotalKg)}</div>
          </div>
        ` : ''}

        ${itemsHtml}

        ${nota.berat === 0 && nota.items.length === 0 ? '<div style="padding:24px; text-align:center; color:var(--abu); font-size:0.82rem;">Tidak ada item</div>' : ''}
      </div>

      ${nota.catatan ? `
        <div class="detail-section">
          <div class="detail-section-title">
            <span class="lbl"><i class="fas fa-note-sticky"></i> Catatan</span>
          </div>
          <div style="padding:14px 20px; font-size:0.85rem; color:var(--biru-tua); font-style:italic;">"${nota.catatan}"</div>
        </div>
      ` : ''}

      <div class="detail-section">
        <div class="detail-section-title">
          <span class="lbl"><i class="fas fa-clock"></i> Estimasi Selesai</span>
        </div>
        <div style="padding:14px 20px; font-size:0.88rem; color:var(--biru-tua); font-weight:600;">
          ${tglEstimasi}
          ${nota.express ? '<span style="background:#fef3c7; color:#8a6b1f; font-size:0.68rem; padding:3px 10px; border-radius:10px; margin-left:8px; font-weight:700;">EXPRESS</span>' : ''}
        </div>
      </div>

      <div class="total-box">
        <div class="total-row"><span>Subtotal</span><span>${rp(nota.subtotalKg + nota.subtotalItem)}</span></div>
        ${nota.biayaExpress > 0 ? `<div class="total-row discount"><span>Express (+50%)</span><span>${rp(nota.biayaExpress)}</span></div>` : ''}
        ${nota.biayaAntar > 0 ? `<div class="total-row"><span>Antar-Jemput</span><span>${rp(nota.biayaAntar)}</span></div>` : ''}
        <div class="total-row grand"><span>TOTAL</span><span>${rp(nota.total)}</span></div>
      </div>

      <div class="action-buttons">
        ${!nota.dibayar ? `
          <button class="btn-action btn-bayar-aksi" id="btnAksiBayar">
            <i class="fas fa-money-bill-wave"></i> Terima Pembayaran
          </button>
        ` : `
          <button class="btn-action btn-cetak-aksi" style="background:#dcfce7; color:#166534; border-color:#86efac; cursor:default;">
            <i class="fas fa-check-circle"></i> Sudah Dibayar · ${rp(nota.total)}
          </button>
        `}
        <button class="btn-action btn-cetak-aksi" id="btnAksiCetak">
          <i class="fas fa-print"></i> Cetak Nota
        </button>
        <button class="btn-action btn-hapus-aksi" id="btnAksiHapus">
          <i class="fas fa-trash"></i> Hapus
        </button>
      </div>
    `;

    // Status button events
    content.querySelectorAll('.status-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const newStatus = btn.dataset.status;
        updateStatus(nota.id, newStatus);
      });
    });

    // Action buttons
    const btnBayar = document.getElementById('btnAksiBayar');
    if (btnBayar) {
      btnBayar.addEventListener('click', () => bukaModalBayar(nota.id));
    }
    document.getElementById('btnAksiCetak').addEventListener('click', () => cetakNota(nota.id));
    document.getElementById('btnAksiHapus').addEventListener('click', () => hapusNota(nota.id));
  }

  /* =========================================================
     UPDATE STATUS
  ========================================================= */
  function updateStatus(id, newStatus) {
    const nota = data.notas.find(n => n.id === id);
    if (!nota) return;

    if (nota.dibayar && newStatus !== 'selesai') {
      toast('Nota sudah lunas, tidak bisa diubah', 'fa-lock');
      return;
    }

    nota.status = newStatus;
    if (newStatus === 'selesai') {
      nota.tanggalSelesai = new Date().toISOString();
    }
    save();
    renderNotaList();
    renderDetail();
    toast(`Status: ${STATUS_LABEL[newStatus]}`, 'fa-circle-check');
  }

  /* =========================================================
     HAPUS NOTA
  ========================================================= */
  function hapusNota(id) {
    const nota = data.notas.find(n => n.id === id);
    if (!nota) return;
    if (!confirm(`Hapus nota ${nota.nomor} untuk ${nota.nama}?`)) return;
    data.notas = data.notas.filter(n => n.id !== id);
    activeNotaId = null;
    save();
    renderNotaList();
    renderDetail();
    toast('Nota dihapus', 'fa-trash');
  }

  /* =========================================================
     ITEM TAMBAHAN MODAL
  ========================================================= */
  const modalItem = document.getElementById('modalItem');

  document.getElementById('btnAddItem').addEventListener('click', () => {
    pendingItem = { jenis: 'kemeja', jumlah: 1, proses: 'cuci-setrika' };
    document.getElementById('itemJenis').value = 'kemeja';
    document.getElementById('itemJumlah').value = 1;
    document.querySelectorAll('[data-jenis-proses]').forEach((o, i) => {
      o.classList.toggle('selected', i === 0);
    });
    updateHargaItemPreview();
    modalItem.classList.add('show');
  });

  document.getElementById('closeItem').addEventListener('click', () => modalItem.classList.remove('show'));
  document.getElementById('btnBatalItem').addEventListener('click', () => modalItem.classList.remove('show'));

  function updateHargaItemPreview() {
    const jenis = document.getElementById('itemJenis').value;
    const data_h = HARGA_ITEM[jenis];
    if (!data_h) return;
    document.getElementById('hargaCuciSetrika').textContent = rp(data_h.cuciSetrika);
    document.getElementById('hargaSetrikaSaja').textContent = rp(data_h.setrika);
  }

  document.getElementById('itemJenis').addEventListener('change', updateHargaItemPreview);

  document.querySelectorAll('[data-item-step]').forEach(btn => {
    btn.addEventListener('click', () => {
      const input = document.getElementById('itemJumlah');
      let v = parseInt(input.value) || 1;
      v += btn.dataset.itemStep === 'plus' ? 1 : -1;
      if (v < 1) v = 1;
      input.value = v;
    });
  });

  document.querySelectorAll('[data-jenis-proses]').forEach(opt => {
    opt.addEventListener('click', () => {
      document.querySelectorAll('[data-jenis-proses]').forEach(o => o.classList.remove('selected'));
      opt.classList.add('selected');
      pendingItem.proses = opt.dataset.jenisProses;
    });
  });

  document.getElementById('btnTambahItem').addEventListener('click', () => {
    const jenis = document.getElementById('itemJenis').value;
    const jumlah = parseInt(document.getElementById('itemJumlah').value) || 1;
    const proses = document.querySelector('[data-jenis-proses].selected').dataset.jenisProses;

    const data_h = HARGA_ITEM[jenis];
    if (!data_h) return;

    const hargaSatuan = proses === 'cuci-setrika' ? data_h.cuciSetrika : data_h.setrika;
    const subtotal = hargaSatuan * jumlah;

    itemTambahan.push({
      jenis: jenis,
      nama: data_h.nama,
      jumlah: jumlah,
      proses: proses === 'cuci-setrika' ? 'Cuci + Setrika' : 'Setrika Saja',
      hargaSatuan: hargaSatuan,
      subtotal: subtotal
    });

    renderItemTambahan();
    updateFormTotal();
    modalItem.classList.remove('show');
    toast(`${data_h.nama} × ${jumlah} ditambahkan`, 'fa-plus');
  });

  /* =========================================================
     MODAL BAYAR
  ========================================================= */
  const modalBayar = document.getElementById('modalBayar');
  const cashInput = document.getElementById('cashInput');

  function bukaModalBayar(id) {
    const nota = data.notas.find(n => n.id === id);
    if (!nota) return;
    if (nota.dibayar) {
      toast('Nota sudah lunas', 'fa-circle-info');
      return;
    }

    bayarNotaId = id;
    bayarMethod = 'Tunai';
    document.querySelectorAll('.pay-method').forEach((m, i) => {
      m.classList.toggle('selected', i === 0);
    });
    document.getElementById('cashSection').style.display = 'block';
    document.getElementById('bayarTotal').textContent = rp(nota.total);
    document.getElementById('bayarSubInfo').textContent = `Nota ${nota.nomor} · ${nota.nama}`;
    cashInput.value = '';
    updateChange();
    modalBayar.classList.add('show');
  }

  document.getElementById('closeBayar').addEventListener('click', () => modalBayar.classList.remove('show'));
  document.getElementById('btnBatalBayar').addEventListener('click', () => modalBayar.classList.remove('show'));

  document.querySelectorAll('.pay-method').forEach(m => {
    m.addEventListener('click', () => {
      document.querySelectorAll('.pay-method').forEach(x => x.classList.remove('selected'));
      m.classList.add('selected');
      bayarMethod = m.dataset.method;
      document.getElementById('cashSection').style.display = bayarMethod === 'Tunai' ? 'block' : 'none';
    });
  });

  function updateChange() {
    if (bayarMethod !== 'Tunai') return;
    const nota = data.notas.find(n => n.id === bayarNotaId);
    if (!nota) return;
    const cash = parseInt(cashInput.value) || 0;
    const box = document.getElementById('changeBox');
    const txt = document.getElementById('changeTxt');
    if (cash === 0) {
      box.style.background = '#dcfce7';
      box.style.color = '#166534';
      txt.textContent = rp(0);
      return;
    }
    const diff = cash - nota.total;
    if (diff < 0) {
      box.style.background = '#fee2e2';
      box.style.color = '#991b1b';
      txt.textContent = '− ' + rp(Math.abs(diff));
    } else {
      box.style.background = '#dcfce7';
      box.style.color = '#166534';
      txt.textContent = rp(diff);
    }
  }
  cashInput.addEventListener('input', updateChange);

  document.getElementById('btnKonfirmasiBayar').addEventListener('click', () => {
    const nota = data.notas.find(n => n.id === bayarNotaId);
    if (!nota) return;
    if (bayarMethod === 'Tunai') {
      const cash = parseInt(cashInput.value) || 0;
      if (cash < nota.total) {
        toast('Uang diterima kurang dari total', 'fa-exclamation-circle');
        return;
      }
    }
    nota.dibayar = true;
    nota.tanggalBayar = new Date().toISOString();
    nota.metodeBayar = bayarMethod;
    save();
    modalBayar.classList.remove('show');
    renderNotaList();
    renderDetail();
    toast(`Nota ${nota.nomor} lunas`, 'fa-circle-check');
  });

  /* =========================================================
     CETAK NOTA
  ========================================================= */
  const modalNota = document.getElementById('modalNota');

  function cetakNota(id) {
    const nota = data.notas.find(n => n.id === id);
    if (!nota) return;

    const tglMasuk = new Date(nota.tanggalMasuk).toLocaleString('id-ID', { dateStyle:'medium', timeStyle:'short' });
    const tglEstimasi = new Date(nota.estimasi).toLocaleString('id-ID', { dateStyle:'medium', timeStyle:'short' });

    const itemsHtml = nota.items.map(it => `
      <div class="n-item">
        <div class="n-line1"><span>${it.nama} × ${it.jumlah}</span><span>${rp(it.subtotal)}</span></div>
        <div class="n-line2"><span>${it.proses}</span><span>${rp(it.hargaSatuan)}/item</span></div>
      </div>
    `).join('');

    document.getElementById('notaBody').innerHTML = `
      <div class="nota-cetak">
        <div class="n-head">
          <h4>BERSIH WANGI</h4>
          <p>Laundry Kiloan & Satuan<br>
          Jl. Melati No. 45, Jakarta<br>
          Telp: 0812-3456-7890</p>
        </div>

        <div class="n-nomor-big">${nota.nomor}</div>

        <div class="n-meta">
          Pelanggan: <strong>${nota.nama}</strong><br>
          ${nota.hp ? `HP: ${nota.hp}<br>` : ''}
          Masuk: <strong>${tglMasuk}</strong><br>
          Estimasi Selesai: <strong>${tglEstimasi}</strong>
        </div>

        ${nota.berat > 0 ? `
          <div class="n-item">
            <div class="n-line1"><span>${nota.paket ? nota.paket.nama : 'Cuci'} · ${nota.berat} kg</span><span>${rp(nota.subtotalKg)}</span></div>
            <div class="n-line2"><span>${rp(nota.paket ? nota.paket.harga : 0)}/kg</span></div>
          </div>
        ` : ''}

        ${itemsHtml}

        <div class="n-total">
          <div class="row"><span>Subtotal</span><span>${rp(nota.subtotalKg + nota.subtotalItem)}</span></div>
          ${nota.biayaExpress > 0 ? `<div class="row"><span>Express</span><span>${rp(nota.biayaExpress)}</span></div>` : ''}
          ${nota.biayaAntar > 0 ? `<div class="row"><span>Antar-Jemput</span><span>${rp(nota.biayaAntar)}</span></div>` : ''}
          <div class="grand"><span>TOTAL</span><span>${rp(nota.total)}</span></div>
        </div>

        ${nota.catatan ? `<div style="margin-top:12px; font-size:0.72rem; color:var(--abu); font-style:italic;">Catatan: ${nota.catatan}</div>` : ''}

        <div class="n-status">
          ${nota.dibayar ? '✓ LUNAS' : '⚠ BELUM DIBAYAR'}
        </div>

        <div class="n-foot">
          Simpan nota ini sebagai bukti pengambilan<br>
          Barang yang sudah diambil dianggap benar<br>
          Terima kasih telah mempercayakan cucian Anda
        </div>
      </div>
    `;
    modalNota.classList.add('show');
  }

  document.getElementById('closeNota').addEventListener('click', () => modalNota.classList.remove('show'));
  document.getElementById('btnTutupNota').addEventListener('click', () => modalNota.classList.remove('show'));
  document.getElementById('btnCetakNota').addEventListener('click', () => {
    const w = window.open('', '', 'width=420,height=680');
    w.document.write('<pre style="font-family:Courier New,monospace; font-size:12px; padding:20px; white-space:pre-wrap;">' +
      document.getElementById('notaBody').innerText + '</pre>');
    w.document.close(); w.focus(); w.print();
    toast('Nota dikirim ke printer', 'fa-print');
  });

  /* =========================================================
     ADMIN
  ========================================================= */
  function renderAdmin() {
    const today = new Date().toDateString();
    const notasHariIni = data.notas.filter(n => new Date(n.tanggalMasuk).toDateString() === today);
    const prosesAktif = data.notas.filter(n => !n.dibayar && n.status !== 'selesai');
    const pendapatanHariIni = data.notas
      .filter(n => n.dibayar && n.tanggalBayar && new Date(n.tanggalBayar).toDateString() === today)
      .reduce((s, n) => s + n.total, 0);
    const piutang = data.notas.filter(n => !n.dibayar).reduce((s, n) => s + n.total, 0);

    document.getElementById('sNotaHariIni').textContent = notasHariIni.length;
    document.getElementById('sProses').textContent = prosesAktif.length;
    document.getElementById('sPendapatan').textContent = rp(pendapatanHariIni);
    document.getElementById('sPiutang').textContent = rp(piutang);

    // Layanan grid
    const grid = document.getElementById('layananGrid');
    document.getElementById('layananCount').textContent = data.layanan.length + ' layanan';

    grid.innerHTML = data.layanan.map(l => `
      <div class="layanan-card">
        <div class="info">
          <div class="tipe">${l.tipe === 'kg' ? 'Kiloan' : 'Satuan'}</div>
          <div class="nama">${l.nama}</div>
          <div class="harga">${rp(l.harga)}<span class="unit">/${l.tipe === 'kg' ? 'kg' : 'item'}</span></div>
        </div>
        <div class="row-actions">
          <button class="icon-btn" data-act="edit" data-id="${l.id}"><i class="fas fa-pen"></i></button>
          <button class="icon-btn danger" data-act="del" data-id="${l.id}"><i class="fas fa-trash"></i></button>
        </div>
      </div>
    `).join('');

    grid.querySelectorAll('button[data-act]').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = parseInt(btn.dataset.id);
        if (btn.dataset.act === 'edit') bukaFormLayanan(id);
        else hapusLayanan(id);
      });
    });

    // Riwayat
    const tbody = document.getElementById('txBody');
    const riwayat = data.notas.slice(0, 20);
    if (riwayat.length === 0) {
      tbody.innerHTML = '<tr><td colspan="5" style="text-align:center; padding:30px; color:var(--abu);">Belum ada transaksi</td></tr>';
    } else {
      tbody.innerHTML = riwayat.map(n => {
        const tgl = new Date(n.tanggalMasuk).toLocaleString('id-ID', { dateStyle:'short', timeStyle:'short' });
        return `
          <tr>
            <td><span class="tx-num">${n.nomor}</span></td>
            <td>${n.nama}</td>
            <td>${tgl}</td>
            <td style="font-weight:700; color:var(--biru);">${rp(n.total)}</td>
            <td><span class="tx-badge ${n.dibayar ? 'lunas' : 'belum'}">${n.dibayar ? 'Lunas' : 'Belum'}</span></td>
          </tr>
        `;
      }).join('');
    }
  }

  /* =========================================================
     FORM LAYANAN
  ========================================================= */
  const modalLayanan = document.getElementById('modalLayanan');

  function bukaFormLayanan(id) {
    const isEdit = id != null;
    document.getElementById('layananFormTitle').textContent = isEdit ? 'Edit Layanan' : 'Tambah Layanan';
    document.getElementById('editLayananId').value = isEdit ? id : '';
    document.getElementById('lNama').value = '';
    document.getElementById('lTipe').value = 'kg';
    document.getElementById('lHarga').value = '';

    if (isEdit) {
      const l = data.layanan.find(x => x.id === id);
      if (l) {
        document.getElementById('lNama').value = l.nama;
        document.getElementById('lTipe').value = l.tipe;
        document.getElementById('lHarga').value = l.harga;
      }
    }
    modalLayanan.classList.add('show');
  }

  document.getElementById('btnTambahLayanan').addEventListener('click', () => bukaFormLayanan(null));
  document.getElementById('closeLayanan').addEventListener('click', () => modalLayanan.classList.remove('show'));
  document.getElementById('btnBatalLayanan').addEventListener('click', () => modalLayanan.classList.remove('show'));

  document.getElementById('btnSimpanLayanan').addEventListener('click', () => {
    const editId = document.getElementById('editLayananId').value;
    const nama = document.getElementById('lNama').value.trim();
    const tipe = document.getElementById('lTipe').value;
    const harga = parseInt(document.getElementById('lHarga').value);

    if (!nama) return toast('Nama layanan harus diisi', 'fa-exclamation-circle');
    if (isNaN(harga) || harga <= 0) return toast('Harga tidak valid', 'fa-exclamation-circle');

    if (editId) {
      const l = data.layanan.find(x => x.id === parseInt(editId));
      if (l) Object.assign(l, { nama, tipe, harga });
      toast('Layanan diperbarui', 'fa-circle-check');
    } else {
      const newId = data.layanan.length ? Math.max(...data.layanan.map(l => l.id)) + 1 : 1;
      data.layanan.push({ id:newId, nama, tipe, harga });
      toast('Layanan baru ditambahkan', 'fa-circle-check');
    }
    save();
    modalLayanan.classList.remove('show');
    renderAdmin();
    renderPaketGrid();
  });

  function hapusLayanan(id) {
    const l = data.layanan.find(x => x.id === id);
    if (!l) return;
    if (!confirm(`Hapus layanan "${l.nama}"?`)) return;
    data.layanan = data.layanan.filter(x => x.id !== id);
    save();
    renderAdmin();
    renderPaketGrid();
    toast('Layanan dihapus', 'fa-trash');
  }

  /* =========================================================
     RESET
  ========================================================= */
  document.getElementById('btnResetData').addEventListener('click', () => {
    if (!confirm('Reset semua data ke default? Nota yang tersimpan akan hilang.')) return;
    data = {
      layanan: JSON.parse(JSON.stringify(defaultLayanan)),
      notas: [],
      counter: 1
    };
    activeNotaId = null;
    save();
    renderAdmin();
    renderNotaList();
    renderDetail();
    renderPaketGrid();
    toast('Data direset', 'fa-rotate');
  });

  /* =========================================================
     FILTER STATUS
  ========================================================= */
  document.querySelectorAll('.status-tab').forEach(t => {
    t.addEventListener('click', () => {
      document.querySelectorAll('.status-tab').forEach(x => x.classList.remove('active'));
      t.classList.add('active');
      filterStatus = t.dataset.status;
      renderNotaList();
    });
  });

  /* =========================================================
     TOGGLE FORM MOBILE
  ========================================================= */
  document.getElementById('btnToggleForm').addEventListener('click', () => {
    const form = document.getElementById('colForm');
    const btn = document.getElementById('btnToggleForm');
    form.classList.toggle('mobile-show');
    const isActive = form.classList.contains('mobile-show');
    btn.classList.toggle('active', isActive);
    btn.innerHTML = isActive ? '<i class="fas fa-times"></i>' : '<i class="fas fa-plus"></i>';
  });

  /* =========================================================
     INIT
  ========================================================= */
  renderPaketGrid();
  renderItemTambahan();
  renderNotaList();
  renderDetail();
  updateFormTotal();
  renderAdmin();
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>