@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Pet Care — Klinik Hewan & Grooming</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500;600;700&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; -webkit-tap-highlight-color:transparent; }
body {
  font-family:'Inter',system-ui,sans-serif;
  background:#eaf5ef;
  color:#2a3d33;
  min-height:100vh;
  font-size:14px;
}

:root {
  --mint:#7bc8a4;
  --mint-tua:#3d8b63;
  --mint-muda:#d8f0e4;
  --coklat:#a67c52;
  --coklat-tua:#6b4a2a;
  --kuning:#f5c842;
  --merah:#e85d5d;
  --biru:#5a9bd4;
  --abu:#7a8c84;
  --line:#cfe3d6;
}

.app {
  max-width:1520px;
  margin:0 auto;
  background:#f8fdfa;
  min-height:100vh;
  display:flex;
  flex-direction:column;
}

/* ==================== HEADER ==================== */
.topbar {
  background:white;
  padding:0 22px;
  height:66px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  border-bottom:3px solid var(--mint);
  position:sticky;
  top:0;
  z-index:50;
  box-shadow:0 2px 8px -4px rgba(61,139,99,0.15);
}
.brand { display:flex; align-items:center; gap:12px; }
.brand-mark {
  width:44px; height:44px;
  background:linear-gradient(135deg, var(--mint) 0%, var(--mint-tua) 100%);
  color:white;
  display:flex; align-items:center; justify-content:center;
  border-radius:50%;
  font-size:1.3rem;
  box-shadow:0 4px 12px -3px rgba(61,139,99,0.5);
}
.brand h1 {
  font-family:'Nunito',sans-serif;
  font-size:1.2rem;
  font-weight:800;
  letter-spacing:-0.3px;
  color:var(--mint-tua);
  line-height:1;
}
.brand h1 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.6rem;
  font-weight:600;
  color:var(--abu);
  letter-spacing:2px;
  text-transform:uppercase;
  margin-top:5px;
}

.topbar-right { display:flex; align-items:center; gap:12px; }
.mode-nav {
  display:flex;
  background:var(--mint-muda);
  padding:4px;
  border-radius:12px;
  gap:2px;
}
.mode-nav button {
  background:transparent;
  border:none;
  color:var(--mint-tua);
  padding:8px 16px;
  border-radius:9px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.76rem;
  font-weight:600;
  display:flex; align-items:center; gap:7px;
  transition:all 0.15s;
}
.mode-nav button:hover { background:white; }
.mode-nav button.active {
  background:var(--mint-tua);
  color:white;
}
.user-badge {
  display:flex; align-items:center; gap:9px;
  background:var(--mint-muda);
  padding:6px 14px 6px 6px;
  border-radius:40px;
}
.user-badge .avatar {
  width:32px; height:32px;
  background:var(--coklat);
  color:white;
  border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  font-weight:800;
  font-size:0.82rem;
}
.user-badge .info { line-height:1.15; }
.user-badge .name {
  font-size:0.78rem; font-weight:700; color:var(--mint-tua);
}
.user-badge .role {
  font-size:0.6rem; color:var(--abu);
  text-transform:uppercase; letter-spacing:0.6px;
}

/* ==================== PAGE ==================== */
.page { display:none; flex:1; }
.page.active { display:flex; flex-direction:column; }

/* ==================== KASIR 3 KOLOM ==================== */
.kasir-grid {
  display:grid;
  grid-template-columns:1fr 400px;
  flex:1;
  min-height:0;
}

/* === KOLOM KIRI: HEWAN + LAYANAN === */
.col-utama {
  padding:20px 24px;
  overflow-y:auto;
  min-height:0;
}

/* === PASIEN BARU / PILIH HEWAN === */
.pasien-box {
  background:white;
  border:2px solid var(--mint-muda);
  border-radius:16px;
  padding:18px 20px;
  margin-bottom:18px;
}
.pasien-head {
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:14px;
}
.pasien-head h3 {
  font-family:'Nunito',sans-serif;
  font-size:1rem;
  font-weight:800;
  color:var(--mint-tua);
  display:flex;
  align-items:center;
  gap:8px;
}
.pasien-head h3 i { color:var(--coklat); }
.btn-switch {
  background:var(--mint-muda);
  border:none;
  color:var(--mint-tua);
  padding:6px 12px;
  border-radius:20px;
  cursor:pointer;
  font-size:0.72rem;
  font-weight:700;
  display:flex;
  align-items:center;
  gap:5px;
}
.btn-switch:hover { background:var(--mint); color:white; }

.pasien-grid {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(140px,1fr));
  gap:10px;
}
.pasien-field label {
  display:block;
  font-size:0.66rem;
  font-weight:700;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:0.8px;
  margin-bottom:5px;
}
.pasien-field input,
.pasien-field select {
  width:100%;
  padding:10px 12px;
  border:1.5px solid var(--line);
  border-radius:9px;
  outline:none;
  font-family:'Inter',sans-serif;
  font-size:0.86rem;
  color:#2a3d33;
  background:white;
  transition:border-color 0.15s;
}
.pasien-field input:focus,
.pasien-field select:focus {
  border-color:var(--mint);
  box-shadow:0 0 0 3px rgba(123,200,164,0.15);
}
.pasien-field input::placeholder { color:#b8c8c0; }

.berat-hewan-display {
  display:flex;
  align-items:center;
  justify-content:space-between;
  background:linear-gradient(135deg, var(--mint-muda) 0%, #eafaf1 100%);
  border-radius:12px;
  padding:12px 16px;
  margin-top:12px;
}
.berat-hewan-display .lbl {
  font-size:0.72rem;
  color:var(--mint-tua);
  font-weight:600;
}
.berat-hewan-display .val {
  font-family:'JetBrains Mono',monospace;
  font-size:1.3rem;
  font-weight:800;
  color:var(--mint-tua);
}
.berat-hewan-display .val small {
  font-family:'Inter',sans-serif;
  font-size:0.72rem;
  color:var(--abu);
  font-weight:500;
}

/* === KATEGORI TAB === */
.kat-bar {
  display:flex;
  gap:6px;
  margin-bottom:16px;
  overflow-x:auto;
  padding-bottom:4px;
}
.kat-tab {
  background:white;
  border:1.5px solid var(--line);
  padding:10px 18px;
  border-radius:12px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.78rem;
  font-weight:600;
  color:var(--abu);
  white-space:nowrap;
  display:flex;
  align-items:center;
  gap:7px;
  transition:all 0.15s;
}
.kat-tab:hover { border-color:var(--mint); color:var(--mint-tua); }
.kat-tab.active {
  background:var(--mint-tua);
  border-color:var(--mint-tua);
  color:white;
}
.kat-tab.active i { color:var(--kuning); }

/* === GRID LAYANAN === */
.layanan-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(200px,1fr));
  gap:12px;
}
.layanan-card {
  background:white;
  border:1.5px solid var(--line);
  border-radius:14px;
  padding:16px 14px;
  cursor:pointer;
  transition:all 0.15s;
  display:flex;
  flex-direction:column;
  gap:8px;
  position:relative;
  overflow:hidden;
}
.layanan-card:hover {
  border-color:var(--mint);
  transform:translateY(-2px);
  box-shadow:0 8px 20px -8px rgba(61,139,99,0.25);
}
.layanan-card .l-icon {
  width:48px; height:48px;
  background:var(--mint-muda);
  color:var(--mint-tua);
  display:flex; align-items:center; justify-content:center;
  border-radius:14px;
  font-size:1.3rem;
}
.layanan-card h4 {
  font-family:'Nunito',sans-serif;
  font-size:0.95rem;
  font-weight:800;
  color:var(--mint-tua);
  line-height:1.25;
}
.layanan-card .l-desc {
  font-size:0.72rem;
  color:var(--abu);
  line-height:1.4;
}
.layanan-card .l-harga {
  font-family:'Nunito',sans-serif;
  font-size:1.05rem;
  font-weight:800;
  color:var(--coklat);
  margin-top:auto;
  padding-top:8px;
  border-top:1px dashed var(--line);
}
.layanan-card .l-harga small {
  font-family:'Inter',sans-serif;
  font-size:0.66rem;
  color:var(--abu);
  font-weight:500;
}

/* === KOLOM KANAN: KERANJANG === */
.col-keranjang {
  background:white;
  border-left:2px solid var(--mint);
  display:flex;
  flex-direction:column;
  min-height:0;
}
.keranjang-head {
  background:linear-gradient(135deg, var(--mint-tua) 0%, var(--mint) 100%);
  color:white;
  padding:18px 22px;
}
.keranjang-head h3 {
  font-family:'Nunito',sans-serif;
  font-size:1.05rem;
  font-weight:800;
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:8px;
}
.keranjang-head h3 i { color:var(--kuning); }
.keranjang-head .hewan-info {
  font-size:0.72rem;
  color:rgba(255,255,255,0.85);
  margin-top:6px;
  display:flex;
  align-items:center;
  gap:8px;
}
.keranjang-head .hewan-info i { color:var(--kuning); font-size:0.7rem; }

.keranjang-body {
  flex:1;
  overflow-y:auto;
  padding:14px 18px;
  min-height:0;
}
.keranjang-empty {
  text-align:center;
  padding:50px 20px;
  color:#b8c8c0;
}
.keranjang-empty i {
  font-size:2.5rem;
  display:block;
  margin-bottom:12px;
  color:#d8e8e0;
}
.keranjang-empty strong {
  display:block;
  color:var(--abu);
  font-size:0.9rem;
  margin-bottom:5px;
  font-family:'Nunito',sans-serif;
  font-weight:700;
}

.krj-item {
  padding:13px 0;
  border-bottom:1px dashed var(--line);
}
.krj-item:last-child { border-bottom:none; }
.krj-top {
  display:flex;
  justify-content:space-between;
  gap:10px;
  margin-bottom:5px;
}
.krj-nama {
  font-family:'Nunito',sans-serif;
  font-size:0.92rem;
  font-weight:700;
  color:var(--mint-tua);
  line-height:1.25;
}
.krj-harga {
  font-family:'JetBrains Mono',monospace;
  font-weight:700;
  color:var(--coklat);
  white-space:nowrap;
  font-size:0.9rem;
}
.krj-detail {
  font-size:0.72rem;
  color:var(--abu);
  margin-bottom:8px;
}
.krj-detail strong { color:var(--mint-tua); font-weight:600; }
.krj-detail .vaksin-note {
  display:inline-block;
  background:#fef3c7;
  color:#8a6b1f;
  padding:2px 8px;
  border-radius:10px;
  font-size:0.66rem;
  font-weight:700;
  margin-top:3px;
}
.krj-actions {
  display:flex;
  justify-content:space-between;
  align-items:center;
}
.krj-qty {
  display:flex; align-items:center; gap:0;
  border:1.5px solid var(--line);
  border-radius:8px;
  overflow:hidden;
}
.krj-qty button {
  background:var(--mint-muda);
  border:none;
  width:28px; height:28px;
  color:var(--mint-tua);
  cursor:pointer;
  font-size:0.75rem;
  font-weight:700;
}
.krj-qty button:hover { background:var(--mint); color:white; }
.krj-qty span {
  padding:0 12px;
  font-size:0.84rem;
  font-weight:700;
  min-width:30px;
  text-align:center;
  line-height:28px;
  color:var(--mint-tua);
}
.krj-del {
  background:transparent;
  border:none;
  color:#c8d8d0;
  cursor:pointer;
  font-size:0.78rem;
  padding:4px 8px;
}
.krj-del:hover { color:var(--merah); }

/* Total keranjang */
.keranjang-foot {
  background:var(--mint-muda);
  border-top:2px solid var(--mint);
  padding:16px 20px;
}
.kf-row {
  display:flex;
  justify-content:space-between;
  font-size:0.82rem;
  color:var(--mint-tua);
  margin-bottom:6px;
}
.kf-row.grand {
  font-family:'Nunito',sans-serif;
  font-size:1.5rem;
  font-weight:800;
  color:var(--mint-tua);
  padding-top:12px;
  margin-top:10px;
  border-top:1px dashed var(--mint);
  margin-bottom:14px;
}
.btn-proses {
  width:100%;
  background:var(--mint-tua);
  color:white;
  border:none;
  padding:16px;
  border-radius:12px;
  cursor:pointer;
  font-family:'Nunito',sans-serif;
  font-size:1rem;
  font-weight:800;
  letter-spacing:0.3px;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:10px;
  transition:all 0.15s;
}
.btn-proses:hover { background:#2d6a4a; }
.btn-proses i { color:var(--kuning); }
.btn-proses:disabled {
  background:#c8d8d0;
  cursor:not-allowed;
}

/* ==================== MODAL ==================== */
.modal-bg {
  position:fixed;
  inset:0;
  background:rgba(42,61,51,0.55);
  display:none;
  align-items:center;
  justify-content:center;
  z-index:100;
  padding:16px;
}
.modal-bg.show { display:flex; }
.modal {
  background:white;
  border-radius:18px;
  width:100%;
  max-width:520px;
  max-height:92vh;
  overflow-y:auto;
  box-shadow:0 25px 60px -15px rgba(0,0,0,0.3);
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
  color:var(--coklat);
  text-transform:uppercase;
  font-weight:700;
  margin-bottom:5px;
}
.modal-head h3 {
  font-family:'Nunito',sans-serif;
  font-size:1.25rem;
  font-weight:800;
  color:var(--mint-tua);
  display:flex; align-items:center; gap:10px;
  padding-right:30px;
}
.modal-head h3 i { color:var(--coklat); }
.modal-head .sub {
  font-size:0.78rem;
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
  background:var(--merah);
  color:white;
  border-color:var(--merah);
}
.modal-body { padding:22px 24px; }
.modal-foot {
  padding:16px 24px 20px;
  border-top:1px solid var(--line);
  background:var(--mint-muda);
  display:flex;
  gap:10px;
  border-radius:0 0 18px 18px;
}
.modal-foot .btn-outline { flex:1; justify-content:center; }
.modal-foot .btn-solid { flex:2; justify-content:center; padding:13px; }

.btn-outline {
  background:white;
  border:1.5px solid var(--line);
  color:var(--abu);
  padding:13px 20px;
  border-radius:10px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.82rem;
  font-weight:600;
  display:flex; align-items:center; gap:8px;
  transition:all 0.15s;
}
.btn-outline:hover { border-color:var(--mint-tua); color:var(--mint-tua); }
.btn-solid {
  background:var(--mint-tua);
  border:none;
  color:white;
  padding:13px 20px;
  border-radius:10px;
  cursor:pointer;
  font-family:'Nunito',sans-serif;
  font-size:0.86rem;
  font-weight:800;
  display:flex; align-items:center; gap:8px;
  transition:all 0.15s;
}
.btn-solid:hover { background:#2d6a4a; }
.btn-solid i { color:var(--kuning); }

/* ==================== FORM FIELDS ==================== */
.field { margin-bottom:14px; }
.field label {
  display:block;
  font-size:0.7rem;
  font-weight:700;
  color:var(--mint-tua);
  text-transform:uppercase;
  letter-spacing:0.8px;
  margin-bottom:6px;
}
.field input,
.field select,
.field textarea {
  width:100%;
  padding:11px 14px;
  border:1.5px solid var(--line);
  border-radius:10px;
  outline:none;
  font-family:'Inter',sans-serif;
  font-size:0.9rem;
  color:#2a3d33;
  background:white;
  transition:border-color 0.15s;
}
.field input:focus,
.field select:focus,
.field textarea:focus {
  border-color:var(--mint);
  box-shadow:0 0 0 3px rgba(123,200,164,0.15);
}
.field textarea {
  resize:vertical;
  min-height:70px;
  font-size:0.85rem;
}

/* ==================== HARGA PER KG (Grooming) ==================== */
.harga-preview {
  background:var(--mint-muda);
  border-radius:12px;
  padding:16px 18px;
  margin-top:14px;
}
.harga-preview .row {
  display:flex;
  justify-content:space-between;
  font-size:0.82rem;
  color:var(--mint-tua);
  padding:5px 0;
}
.harga-preview .row.total {
  font-family:'Nunito',sans-serif;
  font-size:1.15rem;
  font-weight:800;
  color:var(--mint-tua);
  padding-top:12px;
  margin-top:8px;
  border-top:1px dashed var(--mint);
}

/* ==================== REKAM MEDIS ==================== */
.rekam-hewan {
  background:linear-gradient(135deg, #fff9e6 0%, #fefdf5 100%);
  border:1.5px solid #f0d888;
  border-radius:12px;
  padding:16px 18px;
  margin-bottom:16px;
}
.rekam-hewan .r-head {
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:12px;
}
.rekam-hewan .r-head h4 {
  font-family:'Nunito',sans-serif;
  font-size:0.9rem;
  font-weight:800;
  color:#8a6b1f;
  display:flex;
  align-items:center;
  gap:7px;
}
.rekam-hewan .r-head .badge {
  background:#f5c842;
  color:#6b4a1a;
  font-size:0.62rem;
  font-weight:800;
  padding:3px 9px;
  border-radius:10px;
  letter-spacing:0.5px;
  text-transform:uppercase;
}
.rekam-hewan .r-row {
  display:flex;
  justify-content:space-between;
  font-size:0.78rem;
  padding:4px 0;
  color:#6b4a1a;
}
.rekam-hewan .r-row strong {
  color:#3d2810;
  font-weight:700;
}

/* ==================== STRUK / KARTU PASIEN ==================== */
.kartu-pasien {
  background:white;
  border:2px solid var(--mint);
  border-radius:14px;
  padding:22px 20px;
  font-family:'Inter',sans-serif;
  font-size:0.8rem;
  color:#2a3d33;
  line-height:1.55;
}
.kp-head {
  text-align:center;
  padding-bottom:14px;
  border-bottom:2px dashed var(--mint);
  margin-bottom:14px;
}
.kp-head .logo {
  font-family:'Nunito',sans-serif;
  font-size:1.3rem;
  font-weight:800;
  color:var(--mint-tua);
  letter-spacing:1px;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:8px;
  margin-bottom:4px;
}
.kp-head .logo i { color:var(--coklat); }
.kp-head p {
  font-size:0.7rem;
  color:var(--abu);
  line-height:1.6;
}

.kp-hewan {
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:8px 16px;
  padding:14px;
  background:var(--mint-muda);
  border-radius:10px;
  margin-bottom:14px;
  font-size:0.74rem;
}
.kp-hewan .item {
  display:flex;
  gap:8px;
}
.kp-hewan .lbl {
  color:var(--abu);
  min-width:60px;
  font-size:0.68rem;
  text-transform:uppercase;
  letter-spacing:0.5px;
  font-weight:600;
}
.kp-hewan .val {
  color:var(--mint-tua);
  font-weight:700;
}

.kp-item {
  padding:10px 0;
  border-bottom:1px dashed var(--line);
  display:flex;
  justify-content:space-between;
  gap:10px;
}
.kp-item:last-of-type { border-bottom:none; }
.kp-item .info {
  flex:1;
}
.kp-item .nama {
  font-family:'Nunito',sans-serif;
  font-size:0.88rem;
  font-weight:700;
  color:var(--mint-tua);
  margin-bottom:3px;
}
.kp-item .meta {
  font-size:0.7rem;
  color:var(--abu);
}
.kp-item .harga {
  font-family:'JetBrains Mono',monospace;
  font-weight:700;
  color:var(--coklat);
  font-size:0.88rem;
  white-space:nowrap;
}

.kp-total {
  padding-top:14px;
  margin-top:10px;
  border-top:2px solid var(--mint);
}
.kp-total .row {
  display:flex;
  justify-content:space-between;
  font-size:0.8rem;
  margin-bottom:5px;
  color:var(--abu);
}
.kp-total .row.grand {
  font-family:'Nunito',sans-serif;
  font-size:1.4rem;
  font-weight:800;
  color:var(--mint-tua);
  padding-top:10px;
  margin-top:8px;
  border-top:1px dashed var(--mint);
}

.kp-vaksin-reminder {
  background:#fef3c7;
  border-left:4px solid #f5c842;
  border-radius:8px;
  padding:12px 14px;
  margin-top:14px;
  font-size:0.76rem;
  color:#8a6b1f;
}
.kp-vaksin-reminder strong { color:#3d2810; }
.kp-vaksin-reminder i { color:#d9a715; margin-right:6px; }

.kp-foot {
  text-align:center;
  padding-top:16px;
  margin-top:16px;
  border-top:2px dashed var(--mint);
  font-size:0.68rem;
  color:var(--abu);
  line-height:1.7;
}
.kp-foot .terima {
  font-family:'Nunito',sans-serif;
  font-size:0.95rem;
  font-weight:800;
  color:var(--mint-tua);
  font-style:italic;
  margin-bottom:6px;
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
  margin-bottom:20px;
  padding-bottom:16px;
  border-bottom:2px solid var(--mint);
}
.admin-head h2 {
  font-family:'Nunito',sans-serif;
  font-size:1.4rem;
  font-weight:800;
  color:var(--mint-tua);
}
.admin-head h2 small {
  display:block;
  font-size:0.72rem;
  font-weight:600;
  color:var(--abu);
  letter-spacing:1px;
  text-transform:uppercase;
  margin-top:5px;
}
.admin-actions { display:flex; gap:10px; }

.stats-row {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:12px;
  margin-bottom:20px;
}
.stat-card {
  background:white;
  border:1.5px solid var(--line);
  border-radius:14px;
  padding:16px 18px;
  position:relative;
  overflow:hidden;
}
.stat-card::before {
  content:'';
  position:absolute;
  top:0; left:0;
  width:4px; height:100%;
  background:var(--mint);
}
.stat-card.coklat::before { background:var(--coklat); }
.stat-card.kuning::before { background:var(--kuning); }
.stat-card.biru::before { background:var(--biru); }
.stat-card .lbl {
  font-size:0.68rem;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:1px;
  font-weight:700;
  margin-bottom:8px;
}
.stat-card .val {
  font-family:'Nunito',sans-serif;
  font-size:1.5rem;
  font-weight:800;
  color:var(--mint-tua);
  line-height:1;
}
.stat-card.coklat .val { color:var(--coklat-tua); }
.stat-card.kuning .val { color:#d9a715; }
.stat-card.biru .val { color:var(--biru); }
.stat-card .sub {
  font-size:0.68rem;
  color:var(--abu);
  margin-top:5px;
}

.admin-tabs {
  display:flex;
  gap:6px;
  margin-bottom:16px;
  flex-wrap:wrap;
}
.admin-tab {
  background:white;
  border:1.5px solid var(--line);
  padding:9px 16px;
  border-radius:10px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.78rem;
  font-weight:600;
  color:var(--abu);
  display:flex;
  align-items:center;
  gap:7px;
}
.admin-tab.active {
  background:var(--mint-tua);
  border-color:var(--mint-tua);
  color:white;
}
.admin-tab.active i { color:var(--kuning); }

.admin-section {
  background:white;
  border:1.5px solid var(--line);
  border-radius:14px;
  overflow:hidden;
  margin-bottom:18px;
}
.section-head {
  padding:14px 20px;
  background:var(--mint-muda);
  border-bottom:1px solid var(--line);
  display:flex;
  align-items:center;
  gap:10px;
  font-family:'Nunito',sans-serif;
  font-size:0.95rem;
  font-weight:800;
  color:var(--mint-tua);
}
.section-head i { color:var(--coklat); }
.section-head .spacer { flex:1; }
.section-head .hint {
  font-family:'Inter',sans-serif;
  font-size:0.7rem;
  color:var(--abu);
  font-weight:600;
}

.stok-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
  gap:12px;
  padding:18px 20px;
}
.stok-card {
  background:#f8fdfa;
  border:1px solid var(--line);
  border-radius:10px;
  padding:14px 16px;
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
  gap:10px;
}
.stok-card .info { flex:1; min-width:0; }
.stok-card .nama {
  font-family:'Nunito',sans-serif;
  font-size:0.9rem;
  font-weight:700;
  color:var(--mint-tua);
  margin-bottom:5px;
}
.stok-card .tipe {
  font-size:0.62rem;
  padding:2px 8px;
  border-radius:10px;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:0.5px;
  display:inline-block;
  margin-bottom:6px;
}
.tipe.obat { background:#fde8d8; color:#8a3a17; }
.tipe.grooming { background:#d8f0e4; color:var(--mint-tua); }
.tipe.vaksin { background:#d8e8f8; color:#1e40af; }
.tipe.konsul { background:#fef3c7; color:#8a6b1f; }
.stok-card .harga {
  font-family:'JetBrains Mono',monospace;
  font-size:0.95rem;
  font-weight:700;
  color:var(--coklat);
}
.stok-card .harga small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.66rem;
  color:var(--abu);
  font-weight:500;
  margin-top:2px;
}

/* Riwayat */
.riwayat-table {
  width:100%;
  border-collapse:collapse;
  font-size:0.82rem;
}
.riwayat-table th {
  text-align:left;
  padding:12px 16px;
  background:var(--mint-muda);
  font-size:0.68rem;
  font-weight:700;
  color:var(--mint-tua);
  text-transform:uppercase;
  letter-spacing:0.8px;
  border-bottom:1px solid var(--line);
}
.riwayat-table td {
  padding:13px 16px;
  border-bottom:1px solid var(--line);
  color:#2a3d33;
}
.riwayat-table tr:last-child td { border-bottom:none; }
.riwayat-table tr:hover { background:#f8fdfa; }
.rw-num {
  font-family:'JetBrains Mono',monospace;
  font-weight:700;
  color:var(--mint-tua);
  font-size:0.78rem;
}
.rw-hewan {
  display:flex;
  align-items:center;
  gap:8px;
}
.rw-hewan .avatar {
  width:30px; height:30px;
  background:var(--mint-muda);
  color:var(--mint-tua);
  border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  font-size:0.9rem;
}
.rw-hewan .info strong {
  display:block;
  font-family:'Nunito',sans-serif;
  font-weight:700;
  font-size:0.85rem;
}
.rw-hewan .info small {
  font-size:0.68rem;
  color:var(--abu);
}

/* Reminder vaksin */
.reminder-list {
  padding:16px 20px;
}
.reminder-item {
  display:flex;
  align-items:center;
  gap:14px;
  padding:14px 16px;
  background:#fff9e6;
  border:1.5px solid #f0d888;
  border-left:4px solid var(--kuning);
  border-radius:10px;
  margin-bottom:10px;
}
.reminder-item:last-child { margin-bottom:0; }
.reminder-item.urgent {
  background:#ffefef;
  border-color:#f0c8c8;
  border-left-color:var(--merah);
}
.reminder-icon {
  width:42px; height:42px;
  background:var(--kuning);
  color:#6b4a1a;
  display:flex; align-items:center; justify-content:center;
  border-radius:50%;
  font-size:1.1rem;
  flex-shrink:0;
}
.reminder-item.urgent .reminder-icon {
  background:var(--merah);
  color:white;
}
.reminder-info { flex:1; min-width:0; }
.reminder-info .hewan {
  font-family:'Nunito',sans-serif;
  font-size:0.92rem;
  font-weight:800;
  color:#6b4a1a;
  margin-bottom:3px;
}
.reminder-item.urgent .hewan { color:#8a2a2a; }
.reminder-info .detail {
  font-size:0.74rem;
  color:#8a6b1f;
}
.reminder-item.urgent .detail { color:#8a3a3a; }
.reminder-info .detail strong { font-weight:700; }
.reminder-date {
  font-family:'JetBrains Mono',monospace;
  font-size:0.78rem;
  font-weight:700;
  color:#6b4a1a;
  background:rgba(255,255,255,0.6);
  padding:5px 10px;
  border-radius:8px;
  white-space:nowrap;
}
.reminder-item.urgent .reminder-date { color:#8a2a2a; }

/* ==================== TOAST ==================== */
.toast {
  position:fixed;
  bottom:24px; left:50%;
  transform:translateX(-50%) translateY(80px);
  background:var(--mint-tua);
  color:white;
  padding:14px 24px;
  border-radius:40px;
  font-size:0.86rem;
  font-weight:600;
  display:flex;
  align-items:center;
  gap:10px;
  opacity:0;
  transition:all 0.3s;
  z-index:200;
  box-shadow:0 10px 30px -8px rgba(61,139,99,0.5);
  max-width:90vw;
}
.toast.show {
  opacity:1;
  transform:translateX(-50%) translateY(0);
}
.toast i { color:var(--kuning); }

/* ==================== SCROLLBAR ==================== */
::-webkit-scrollbar { width:6px; height:6px; }
::-webkit-scrollbar-track { background:transparent; }
::-webkit-scrollbar-thumb { background:#c8d8d0; border-radius:10px; }
::-webkit-scrollbar-thumb:hover { background:var(--mint); }

/* ==================== RESPONSIVE ==================== */
@media (max-width: 1024px) {
  .kasir-grid { grid-template-columns:1fr 360px; }
}
@media (max-width: 720px) {
  body { font-size:13px; }
  .topbar {
    height:auto;
    min-height:64px;
    padding:10px 14px;
    flex-wrap:wrap;
    gap:8px;
  }
  .brand-mark { width:38px; height:38px; font-size:1.1rem; }
  .brand h1 { font-size:1.05rem; }
  .brand h1 small { font-size:0.55rem; letter-spacing:1.5px; }
  .mode-nav button span { display:none; }
  .mode-nav button { padding:8px 10px; }
  .user-badge .info { display:none; }
  .user-badge { padding:5px; }

  .kasir-grid { grid-template-columns:1fr; padding-bottom:80px; }
  .col-utama { padding:14px 14px 100px; }

  .pasien-grid { grid-template-columns:1fr 1fr; gap:8px; }
  .pasien-field input, .pasien-field select { font-size:0.82rem; padding:9px 11px; }

  .layanan-grid { grid-template-columns:1fr; gap:10px; }
  .layanan-card { flex-direction:row; align-items:center; padding:12px 14px; gap:12px; }
  .layanan-card .l-icon { width:44px; height:44px; font-size:1.15rem; flex-shrink:0; }
  .layanan-card h4 { font-size:0.9rem; margin-bottom:3px; }
  .layanan-card .l-desc { display:none; }
  .layanan-card .l-harga { padding-top:0; border-top:none; margin:0; font-size:0.95rem; white-space:nowrap; }

  .col-keranjang {
    position:fixed;
    bottom:0; left:0; right:0;
    max-height:80vh;
    border-left:none;
    border-top:2px solid var(--mint);
    border-radius:20px 20px 0 0;
    transform:translateY(calc(100% - 76px));
    transition:transform 0.3s ease-out;
    z-index:60;
    box-shadow:0 -10px 30px -10px rgba(0,0,0,0.2);
    overflow:hidden;
  }
  .col-keranjang.expanded {
    transform:translateY(0);
    box-shadow:0 -15px 40px -10px rgba(0,0,0,0.3);
  }
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
    background:rgba(255,255,255,0.4);
    border-radius:2px;
  }
  .toggle-arrow { display:flex; transition:transform 0.3s; }
  .col-keranjang.expanded .toggle-arrow { transform:rotate(180deg); }
  .keranjang-body { max-height:calc(80vh - 200px); }

  .admin-wrap { padding:16px 14px; }
  .admin-head { flex-direction:column; align-items:stretch; }
  .admin-head h2 { font-size:1.2rem; }
  .admin-actions { flex-wrap:wrap; }
  .admin-actions button { flex:1; min-width:130px; justify-content:center; }
  .stats-row { grid-template-columns:1fr 1fr; gap:10px; }
  .stat-card { padding:13px 14px; }
  .stat-card .val { font-size:1.15rem; }
  .stok-grid { grid-template-columns:1fr; padding:14px; }
  .riwayat-table th, .riwayat-table td { padding:10px 12px; font-size:0.74rem; }
  .riwayat-table th:nth-child(3), .riwayat-table td:nth-child(3) { display:none; }

  .modal { border-radius:18px 18px 0 0; }
  .modal-bg { align-items:flex-end; padding:0; }
  .modal-head { padding:20px 20px 14px; }
  .modal-body { padding:20px; }
  .modal-foot { padding:14px 20px 20px; flex-direction:column-reverse; }
  .modal-foot button { width:100%; justify-content:center; padding:14px; }

  .kp-hewan { grid-template-columns:1fr; gap:6px; }
  .reminder-item { flex-wrap:wrap; }
  .reminder-date { margin-left:56px; }
}

.toggle-arrow { display:none; }
</style>
</head>
<body>

<div class="app">

<!-- ==================== HEADER ==================== -->
<header class="topbar">
  <div class="brand">
    <div class="brand-mark"><i class="fas fa-paw"></i></div>
    <h1>Pet Care<small>Klinik Hewan & Grooming</small></h1>
  </div>
  <div class="topbar-right">
    <nav class="mode-nav">
      <button id="navKasir" class="active">
        <i class="fas fa-stethoscope"></i> <span>Kasir</span>
      </button>
      <button id="navAdmin">
        <i class="fas fa-calendar-check"></i> <span>Admin</span>
      </button>
    </nav>
    <div class="user-badge">
      <div class="avatar" id="avatarInit">DR</div>
      <div class="info">
        <div class="name" id="userName">drh. Rina</div>
        <div class="role" id="userRole">Dokter Hewan</div>
      </div>
    </div>
  </div>
</header>

<!-- ==================== PAGE KASIR ==================== -->
<div class="page active" id="pageKasir">
  <div class="kasir-grid">

    <!-- KOLOM KIRI -->
    <section class="col-utama">

      <!-- Box Pasien -->
      <div class="pasien-box">
        <div class="pasien-head">
          <h3><i class="fas fa-dog"></i> Data Pasien</h3>
          <button class="btn-switch" id="btnPilihHewan"><i class="fas fa-search"></i> Cari Riwayat</button>
        </div>
        <div class="pasien-grid">
          <div class="pasien-field">
            <label>Nama Hewan</label>
            <input type="text" id="hNama" placeholder="Contoh: Milo" maxlength="30">
          </div>
          <div class="pasien-field">
            <label>Jenis</label>
            <select id="hJenis">
              <option value="anjing">Anjing</option>
              <option value="kucing">Kucing</option>
              <option value="kelinci">Kelinci</option>
              <option value="hamster">Hamster</option>
              <option value="burung">Burung</option>
              <option value="lainnya">Lainnya</option>
            </select>
          </div>
          <div class="pasien-field">
            <label>Ras</label>
            <input type="text" id="hRas" placeholder="Golden / Persia" maxlength="30">
          </div>
          <div class="pasien-field">
            <label>Umur</label>
            <input type="text" id="hUmur" placeholder="2 tahun" maxlength="15">
          </div>
        </div>
        <div class="berat-hewan-display">
          <span class="lbl"><i class="fas fa-weight-scale"></i> Berat Hewan</span>
          <span class="val"><span id="hBeratDisplay">0.0</span> <small>kg</small></span>
        </div>
        <div class="pasien-field" style="margin-top:10px;">
          <label>Input Berat (kg)</label>
          <input type="number" id="hBerat" value="0" min="0" step="0.1">
        </div>
      </div>

      <!-- Kategori -->
      <div class="kat-bar" id="katBar">
        <button class="kat-tab active" data-kat="semua"><i class="fas fa-th-large"></i> Semua</button>
        <button class="kat-tab" data-kat="konsul"><i class="fas fa-stethoscope"></i> Konsultasi</button>
        <button class="kat-tab" data-kat="grooming"><i class="fas fa-shower"></i> Grooming</button>
        <button class="kat-tab" data-kat="vaksin"><i class="fas fa-syringe"></i> Vaksin</button>
        <button class="kat-tab" data-kat="obat"><i class="fas fa-pills"></i> Obat</button>
        <button class="kat-tab" data-kat="pakan"><i class="fas fa-bone"></i> Pakan</button>
      </div>

      <!-- Grid Layanan -->
      <div class="layanan-grid" id="layananGrid"></div>
    </section>

    <!-- KOLOM KANAN: KERANJANG -->
    <aside class="col-keranjang" id="colKeranjang">
      <div class="keranjang-head" id="keranjangHead">
        <h3>
          <span><i class="fas fa-clipboard-list"></i> Kunjungan</span>
          <span style="display:flex; align-items:center; gap:10px;">
            <span id="krjCount" style="font-size:0.72rem; background:rgba(255,255,255,0.2); padding:3px 10px; border-radius:20px; font-weight:700;">0</span>
            <span class="toggle-arrow"><i class="fas fa-chevron-up"></i></span>
          </span>
        </h3>
        <div class="hewan-info" id="hewanInfo">
          <i class="fas fa-dog"></i> <span id="hewanInfoText">Belum ada hewan</span>
        </div>
      </div>

      <div class="keranjang-body" id="keranjangBody">
        <div class="keranjang-empty">
          <i class="fas fa-paw"></i>
          <strong>Belum ada layanan</strong>
          Pilih layanan untuk hewan
        </div>
      </div>

      <div class="keranjang-foot">
        <div class="kf-row"><span>Subtotal</span><span id="subTxt">Rp 0</span></div>
        <div class="kf-row"><span>Diskon Member</span><span id="discTxt">− Rp 0</span></div>
        <div class="kf-row grand"><span>Total</span><span id="totalTxt">Rp 0</span></div>
        <button class="btn-proses" id="btnProses" disabled>
          <i class="fas fa-check-circle"></i> Proses Kunjungan
        </button>
      </div>
    </aside>

  </div>
</div>

<!-- ==================== PAGE ADMIN ==================== -->
<div class="page" id="pageAdmin">
  <div class="admin-wrap">
    <div class="admin-head">
      <h2>Rekap Klinik<small>Layanan & riwayat kunjungan</small></h2>
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
        <div class="lbl">Kunjungan Hari Ini</div>
        <div class="val" id="sKunjungan">0</div>
        <div class="sub">hewan ditangani</div>
      </div>
      <div class="stat-card biru">
        <div class="lbl">Total Pendapatan</div>
        <div class="val" id="sPendapatan" style="font-size:1.15rem;">Rp 0</div>
        <div class="sub">hari ini</div>
      </div>
      <div class="stat-card kuning">
        <div class="lbl">Vaksin Due</div>
        <div class="val" id="sVaksin">0</div>
        <div class="sub">perlu diingatkan</div>
      </div>
      <div class="stat-card coklat">
        <div class="lbl">Pasien Terdaftar</div>
        <div class="val" id="sPasien">0</div>
        <div class="sub">hewan di sistem</div>
      </div>
    </div>

    <div class="admin-tabs">
      <button class="admin-tab active" data-tab="layanan"><i class="fas fa-tags"></i> Daftar Layanan</button>
      <button class="admin-tab" data-tab="riwayat"><i class="fas fa-clock-rotate-left"></i> Riwayat Kunjungan</button>
      <button class="admin-tab" data-tab="vaksin"><i class="fas fa-bell"></i> Reminder Vaksin</button>
    </div>

    <div id="tabLayanan" class="admin-tab-content">
      <div class="admin-section">
        <div class="section-head">
          <i class="fas fa-list-check"></i> Layanan & Harga
          <span class="spacer"></span>
          <span class="hint" id="layananCount">0 layanan</span>
        </div>
        <div class="stok-grid" id="layananAdminGrid"></div>
      </div>
    </div>

    <div id="tabRiwayat" class="admin-tab-content" style="display:none;">
      <div class="admin-section">
        <div class="section-head">
          <i class="fas fa-history"></i> Riwayat Kunjungan
        </div>
        <table class="riwayat-table">
          <thead>
            <tr>
              <th>No. Kunjungan</th>
              <th>Hewan</th>
              <th>Pemilik</th>
              <th>Tanggal</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody id="riwayatBody"></tbody>
        </table>
      </div>
    </div>

    <div id="tabVaksin" class="admin-tab-content" style="display:none;">
      <div class="admin-section">
        <div class="section-head">
          <i class="fas fa-bell"></i> Reminder Vaksin Berikutnya
        </div>
        <div class="reminder-list" id="reminderList"></div>
      </div>
    </div>
  </div>
</div>

</div>

<!-- ==================== MODAL GROOMING (input berat) ==================== -->
<div class="modal-bg" id="modalGrooming">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Layanan Grooming</div>
        <h3><i class="fas fa-shower"></i> <span id="groomingTitle">Grooming</span></h3>
        <div class="sub">Harga dihitung per kg berat hewan</div>
      </div>
      <button class="modal-close" id="closeGrooming"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="field">
        <label>Berat Hewan (kg)</label>
        <input type="number" id="groomingBerat" value="0" min="0" step="0.1" style="font-size:1.3rem; font-weight:700; text-align:right;">
      </div>

      <div class="field">
        <label>Tambahan (opsional)</label>
        <select id="groomingTambahan">
          <option value="0">Tanpa Tambahan</option>
          <option value="15000">Potong Kuku (+Rp 15.000)</option>
          <option value="25000">Bersihkan Telinga (+Rp 25.000)</option>
          <option value="35000">Potong Kuku + Bersihkan Telinga (+Rp 35.000)</option>
          <option value="50000">Sikat Gigi (+Rp 50.000)</option>
        </select>
      </div>

      <div class="harga-preview" id="groomingPreview"></div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalGrooming">Batal</button>
      <button class="btn-solid" id="btnTambahGrooming">
        <i class="fas fa-plus"></i> Tambah ke Kunjungan
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL VAKSIN ==================== -->
<div class="modal-bg" id="modalVaksin">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Vaksinasi</div>
        <h3><i class="fas fa-syringe"></i> <span id="vaksinTitle">Vaksin</span></h3>
        <div class="sub">Catat vaksin & jadwal berikutnya</div>
      </div>
      <button class="modal-close" id="closeVaksin"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="field">
        <label>Nama Pemilik</label>
        <input type="text" id="vPemilik" placeholder="Nama pemilik hewan" maxlength="40">
      </div>
      <div class="field">
        <label>No. HP</label>
        <input type="tel" id="vHP" placeholder="08xx-xxxx-xxxx" maxlength="15">
      </div>
      <div class="field">
        <label>Vaksin Berikutnya</label>
        <select id="vNext">
          <option value="30">1 Bulan lagi</option>
          <option value="90">3 Bulan lagi</option>
          <option value="180">6 Bulan lagi</option>
          <option value="365">1 Tahun lagi</option>
          <option value="0">Tidak perlu reminder</option>
        </select>
      </div>
      <div class="harga-preview" id="vaksinPreview"></div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalVaksin">Batal</button>
      <button class="btn-solid" id="btnTambahVaksin">
        <i class="fas fa-plus"></i> Tambah ke Kunjungan
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL OBAT (qty) ==================== -->
<div class="modal-bg" id="modalObat">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Pemberian Obat</div>
        <h3><i class="fas fa-pills"></i> <span id="obatTitle">Obat</span></h3>
        <div class="sub">Tentukan jumlah & dosis</div>
      </div>
      <button class="modal-close" id="closeObat"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="field">
        <label>Jumlah</label>
        <div style="display:flex; gap:8px;">
          <input type="number" id="obatQty" value="1" min="1" step="1" style="font-size:1.2rem; text-align:center; font-weight:700;">
        </div>
      </div>
      <div class="field">
        <label>Dosis / Aturan Pakai</label>
        <select id="obatDosis">
          <option value="1x sehari">1× sehari</option>
          <option value="2x sehari">2× sehari</option>
          <option value="3x sehari">3× sehari</option>
          <option value="sesuai kebutuhan">Sesuai kebutuhan</option>
        </select>
      </div>
      <div class="field">
        <label>Durasi</label>
        <select id="obatDurasi">
          <option value="3 hari">3 hari</option>
          <option value="5 hari">5 hari</option>
          <option value="7 hari">7 hari</option>
          <option value="14 hari">14 hari</option>
        </select>
      </div>
      <div class="field">
        <label>Catatan Khusus</label>
        <textarea id="obatCatatan" placeholder="Contoh: diberi setelah makan"></textarea>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalObat">Batal</button>
      <button class="btn-solid" id="btnTambahObat">
        <i class="fas fa-plus"></i> Tambah ke Kunjungan
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL PEMBAYARAN ==================== -->
<div class="modal-bg" id="modalBayar">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Pembayaran</div>
        <h3><i class="fas fa-cash-register"></i> Selesaikan Kunjungan</h3>
        <div class="sub" id="bayarSub">Kunjungan #---</div>
      </div>
      <button class="modal-close" id="closeBayar"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="field">
        <label>Nama Pemilik</label>
        <input type="text" id="bayarPemilik" placeholder="Nama pemilik" maxlength="40">
      </div>

      <div class="field">
        <label>No. HP</label>
        <input type="tel" id="bayarHP" placeholder="08xx-xxxx-xxxx" maxlength="15">
      </div>

      <div class="field">
        <label>Metode Pembayaran</label>
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:8px;">
          <button class="kat-tab active" data-metode="Tunai" style="justify-content:center; padding:12px;">Tunai</button>
          <button class="kat-tab" data-metode="QRIS" style="justify-content:center; padding:12px;">QRIS</button>
        </div>
      </div>

      <div id="cashSection">
        <div class="field">
          <label>Uang Diterima</label>
          <input type="number" id="cashInput" placeholder="0" min="0" step="5000" style="font-size:1.15rem; font-weight:700; text-align:right;">
        </div>
        <div id="changeBox" style="background:var(--mint-muda); color:var(--mint-tua); padding:14px 16px; border-radius:10px; display:flex; justify-content:space-between; font-weight:700; font-family:'JetBrains Mono',monospace;">
          <span>Kembalian</span>
          <span id="changeTxt">Rp 0</span>
        </div>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalBayar">Batal</button>
      <button class="btn-solid" id="btnKonfirmasiBayar">
        <i class="fas fa-check"></i> Konfirmasi & Cetak
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL STRUK ==================== -->
<div class="modal-bg" id="modalStruk">
  <div class="modal" style="max-width:480px;">
    <div class="modal-head">
      <div>
        <div class="kicker">Kartu Kunjungan</div>
        <h3><i class="fas fa-file-medical"></i> Bukti Kunjungan</h3>
        <div class="sub">Simpan sebagai riwayat medis</div>
      </div>
      <button class="modal-close" id="closeStruk"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body" id="strukBody"></div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnTutupStruk">Selesai</button>
      <button class="btn-solid" id="btnCetakStruk">
        <i class="fas fa-print"></i> Cetak
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL FORM LAYANAN (ADMIN) ==================== -->
<div class="modal-bg" id="modalLayananForm">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Data Layanan</div>
        <h3><i class="fas fa-tag"></i> <span id="layananFormTitle">Tambah Layanan</span></h3>
        <div class="sub">Detail layanan klinik</div>
      </div>
      <button class="modal-close" id="closeLayananForm"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <input type="hidden" id="editLayananId">
      <div class="field">
        <label>Nama Layanan</label>
        <input type="text" id="lNama" placeholder="Contoh: Grooming Kucing" maxlength="50">
      </div>
      <div class="field">
        <label>Tipe Layanan</label>
        <select id="lTipe">
          <option value="konsul">Konsultasi Dokter</option>
          <option value="grooming">Grooming (per kg)</option>
          <option value="vaksin">Vaksinasi</option>
          <option value="obat">Obat-obatan</option>
          <option value="pakan">Pakan & Aksesoris</option>
        </select>
      </div>
      <div class="field">
        <label>Harga</label>
        <input type="number" id="lHarga" placeholder="0" min="0" step="5000">
      </div>
      <div class="field" id="fieldPerKg">
        <label>Hitung per kg?</label>
        <select id="lPerKg">
          <option value="0">Harga tetap (tidak per kg)</option>
          <option value="1">Harga × berat hewan (per kg)</option>
        </select>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalLayananForm">Batal</button>
      <button class="btn-solid" id="btnSimpanLayanan">
        <i class="fas fa-floppy-disk"></i> Simpan
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL CARI RIWAYAT HEWAN ==================== -->
<div class="modal-bg" id="modalCariHewan">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Riwayat Pasien</div>
        <h3><i class="fas fa-search"></i> Cari Hewan</h3>
        <div class="sub">Cari berdasarkan nama hewan atau pemilik</div>
      </div>
      <button class="modal-close" id="closeCariHewan"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="field">
        <label>Cari</label>
        <input type="text" id="cariInput" placeholder="Nama hewan atau pemilik..." style="font-size:1rem;">
      </div>
      <div id="cariHasil"></div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnTutupCari" style="flex:1;">Tutup</button>
    </div>
  </div>
</div>

<div class="toast" id="toast"><i class="fas fa-circle-check"></i> <span id="toastTxt"></span></div>

<script>
(function(){
  /* =========================================================
     DATA & STATE
  ========================================================= */
  const STORAGE_KEY = 'petcare_v1';

  const ICON_BY_TIPE = {
    konsul:'fa-stethoscope',
    grooming:'fa-shower',
    vaksin:'fa-syringe',
    obat:'fa-pills',
    pakan:'fa-bone'
  };

  const defaultLayanan = [
    // KONSULTASI
    { id:1, nama:'Konsultasi Umum', tipe:'konsul', harga:75000, perKg:false },
    { id:2, nama:'Konsultasi Spesialis', tipe:'konsul', harga:150000, perKg:false },
    { id:3, nama:'Cek Darah Lengkap', tipe:'konsul', harga:200000, perKg:false },
    { id:4, nama:'Rontgen', tipe:'konsul', harga:350000, perKg:false },
    { id:5, nama:'USG', tipe:'konsul', harga:250000, perKg:false },
    // GROOMING
    { id:6, nama:'Grooming Anjing Kecil', tipe:'grooming', harga:85000, perKg:false },
    { id:7, nama:'Grooming Anjing Besar', tipe:'grooming', harga:65000, perKg:true },
    { id:8, nama:'Grooming Kucing', tipe:'grooming', harga:70000, perKg:false },
    { id:9, nama:'Mandi + Blow Dry', tipe:'grooming', harga:55000, perKg:true },
    { id:10, nama:'Cukur Full Body', tipe:'grooming', harga:80000, perKg:true },
    { id:11, nama:'Grooming Lengkap', tipe:'grooming', harga:110000, perKg:true },
    // VAKSIN
    { id:12, nama:'Vaksin Rabies', tipe:'vaksin', harga:150000, perKg:false },
    { id:13, nama:'Vaksin Distemper', tipe:'vaksin', harga:225000, perKg:false },
    { id:14, nama:'Vaksin Parvovirus', tipe:'vaksin', harga:200000, perKg:false },
    { id:15, nama:'Vaksin F3 (Kucing)', tipe:'vaksin', harga:180000, perKg:false },
    { id:16, nama:'Vaksin F4 (Kucing)', tipe:'vaksin', harga:250000, perKg:false },
    // OBAT
    { id:17, nama:'Antibiotik Amoxicillin', tipe:'obat', harga:35000, perKg:false },
    { id:18, nama:'Obat Cacing', tipe:'obat', harga:45000, perKg:false },
    { id:19, nama:'Vitamin B Complex', tipe:'obat', harga:55000, perKg:false },
    { id:20, nama:'Obat Tetes Mata', tipe:'obat', harga:65000, perKg:false },
    { id:21, nama:'Obat Kulit (Salep)', tipe:'obat', harga:85000, perKg:false },
    { id:22, nama:'Suplemen Bulu', tipe:'obat', harga:75000, perKg:false },
    // PAKAN
    { id:23, nama:'Royal Canin 1kg', tipe:'pakan', harga:125000, perKg:false },
    { id:24, nama:'Whiskas 1kg', tipe:'pakan', harga:85000, perKg:false },
    { id:25, nama:'Pedigree 2kg', tipe:'pakan', harga:145000, perKg:false },
    { id:26, nama:'Pasir Kucing 10L', tipe:'pakan', harga:65000, perKg:false }
  ];

  let data;
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    data = raw ? JSON.parse(raw) : null;
  } catch(e) { data = null; }

  if (!data) {
    data = {
      layanan: JSON.parse(JSON.stringify(defaultLayanan)),
      transaksi: [],
      pasien: [], // riwayat hewan
      counter: 1
    };
  }
  const save = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(data));

  let keranjang = [];
  let hewan = { nama:'', jenis:'anjing', ras:'', umur:'', berat:0 };
  let filterKat = 'semua';
  let payMethod = 'Tunai';
  let lastTransaksi = null;
  let currentModalLayanan = null;

  /* =========================================================
     UTIL
  ========================================================= */
  const rp = n => 'Rp ' + Math.round(Number(n)).toLocaleString('id-ID');
  const jenisLabel = { anjing:'Anjing', kucing:'Kucing', kelinci:'Kelinci', hamster:'Hamster', burung:'Burung', lainnya:'Hewan' };
  const jenisIcon = { anjing:'fa-dog', kucing:'fa-cat', kelinci:'fa-rabbit', hamster:'fa-paw', burung:'fa-dove', lainnya:'fa-paw' };

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
    document.getElementById('userName').textContent = 'drh. Rina';
    document.getElementById('userRole').textContent = 'Dokter Hewan';
    document.getElementById('avatarInit').textContent = 'DR';
    renderLayanan();
  });

  navAdmin.addEventListener('click', () => {
    navAdmin.classList.add('active');
    navKasir.classList.remove('active');
    pageAdmin.classList.add('active');
    pageKasir.classList.remove('active');
    document.getElementById('userName').textContent = 'Pak Hendra';
    document.getElementById('userRole').textContent = 'Klinik Manager';
    document.getElementById('avatarInit').textContent = 'PH';
    renderAdmin();
  });

  /* =========================================================
     HEWAN INFO
  ========================================================= */
  function updateHewanInfo() {
    hewan.nama = document.getElementById('hNama').value.trim();
    hewan.jenis = document.getElementById('hJenis').value;
    hewan.ras = document.getElementById('hRas').value.trim();
    hewan.umur = document.getElementById('hUmur').value.trim();

    const info = document.getElementById('hewanInfo');
    if (hewan.nama) {
      info.innerHTML = `<i class="fas ${jenisIcon[hewan.jenis]}"></i> <span>${hewan.nama} · ${hewan.berat.toFixed(1)} kg</span>`;
    } else {
      info.innerHTML = '<i class="fas fa-paw"></i> <span>Belum ada hewan</span>';
    }
  }

  document.getElementById('hNama').addEventListener('input', updateHewanInfo);
  document.getElementById('hJenis').addEventListener('change', updateHewanInfo);
  document.getElementById('hBerat').addEventListener('input', e => {
    hewan.berat = parseFloat(e.target.value) || 0;
    document.getElementById('hBeratDisplay').textContent = hewan.berat.toFixed(1);
    updateHewanInfo();
  });

  /* =========================================================
     RENDER LAYANAN
  ========================================================= */
  function renderLayanan() {
    const grid = document.getElementById('layananGrid');
    let list = data.layanan.slice();
    if (filterKat !== 'semua') list = list.filter(l => l.tipe === filterKat);

    if (list.length === 0) {
      grid.innerHTML = '<div style="grid-column:1/-1; text-align:center; padding:50px 20px; color:var(--abu); font-family:\'Nunito\',sans-serif; font-style:italic;">Belum ada layanan</div>';
      return;
    }

    grid.innerHTML = list.map(l => `
      <div class="layanan-card" data-id="${l.id}">
        <div class="l-icon"><i class="fas ${ICON_BY_TIPE[l.tipe] || 'fa-stethoscope'}"></i></div>
        <h4>${l.nama}</h4>
        <div class="l-desc">${getLayananDesc(l)}</div>
        <div class="l-harga">
          ${rp(l.harga)}
          ${l.perKg ? '<small>/ kg</small>' : ''}
        </div>
      </div>
    `).join('');

    grid.querySelectorAll('.layanan-card').forEach(card => {
      card.addEventListener('click', () => {
        const id = parseInt(card.dataset.id);
        const layanan = data.layanan.find(x => x.id === id);
        if (!layanan) return;
        prosesPilihLayanan(layanan);
      });
    });
  }

  function getLayananDesc(l) {
    const desc = {
      konsul:'Pemeriksaan & diagnosa',
      grooming:'Perawatan & kebersihan',
      vaksin:'Imunisasi & pencegahan',
      obat:'Resep & pengobatan',
      pakan:'Nutrisi & aksesoris'
    };
    return desc[l.tipe] || 'Layanan klinik';
  }

  /* =========================================================
     PILIH LAYANAN
  ========================================================= */
  function prosesPilihLayanan(l) {
    if (!hewan.nama) {
      toast('Isi nama hewan dulu', 'fa-exclamation-circle');
      document.getElementById('hNama').focus();
      return;
    }

    if (l.tipe === 'grooming' && l.perKg) {
      currentModalLayanan = l;
      document.getElementById('groomingTitle').textContent = l.nama;
      document.getElementById('groomingBerat').value = hewan.berat || 0;
      document.getElementById('groomingTambahan').value = '0';
      updateGroomingPreview();
      document.getElementById('modalGrooming').classList.add('show');
      return;
    }

    if (l.tipe === 'vaksin') {
      currentModalLayanan = l;
      document.getElementById('vaksinTitle').textContent = l.nama;
      document.getElementById('vPemilik').value = '';
      document.getElementById('vHP').value = '';
      document.getElementById('vNext').value = '365';
      updateVaksinPreview();
      document.getElementById('modalVaksin').classList.add('show');
      return;
    }

    if (l.tipe === 'obat') {
      currentModalLayanan = l;
      document.getElementById('obatTitle').textContent = l.nama;
      document.getElementById('obatQty').value = 1;
      document.getElementById('obatDosis').value = '2x sehari';
      document.getElementById('obatDurasi').value = '5 hari';
      document.getElementById('obatCatatan').value = '';
      document.getElementById('modalObat').classList.add('show');
      return;
    }

    // Konsultasi / pakan / grooming dengan harga tetap → langsung
    keranjang.push({
      id: l.id,
      nama: l.nama,
      tipe: l.tipe,
      harga: l.harga,
      qty: 1,
      perKg: false,
      berat: 0,
      catatan: ''
    });
    renderKeranjang();
    toast(`${l.nama} ditambahkan`, 'fa-plus');
    if (window.innerWidth <= 720) updateBottomBar();
  }

  /* =========================================================
     MODAL GROOMING
  ========================================================= */
  function updateGroomingPreview() {
    const l = currentModalLayanan;
    if (!l) return;
    const berat = parseFloat(document.getElementById('groomingBerat').value) || 0;
    const tambahan = parseInt(document.getElementById('groomingTambahan').value) || 0;

    const subtotalGrooming = l.perKg ? l.harga * berat : l.harga;
    const total = subtotalGrooming + tambahan;

    document.getElementById('groomingPreview').innerHTML = `
      <div class="row">
        <span>${l.nama} ${l.perKg ? `(${rp(l.harga)}/kg × ${berat.toFixed(1)} kg)` : ''}</span>
        <span>${rp(subtotalGrooming)}</span>
      </div>
      ${tambahan > 0 ? `<div class="row"><span>Tambahan</span><span>${rp(tambahan)}</span></div>` : ''}
      <div class="row total"><span>Total</span><span>${rp(total)}</span></div>
    `;
  }

  document.getElementById('groomingBerat').addEventListener('input', updateGroomingPreview);
  document.getElementById('groomingTambahan').addEventListener('change', updateGroomingPreview);

  document.getElementById('closeGrooming').addEventListener('click', () => document.getElementById('modalGrooming').classList.remove('show'));
  document.getElementById('btnBatalGrooming').addEventListener('click', () => document.getElementById('modalGrooming').classList.remove('show'));

  document.getElementById('btnTambahGrooming').addEventListener('click', () => {
    const l = currentModalLayanan;
    if (!l) return;
    const berat = parseFloat(document.getElementById('groomingBerat').value) || 0;
    const tambahan = parseInt(document.getElementById('groomingTambahan').value) || 0;
    const tambahanText = document.getElementById('groomingTambahan').selectedOptions[0].text;
    const subtotalGrooming = l.perKg ? l.harga * berat : l.harga;
    const total = subtotalGrooming + tambahan;

    keranjang.push({
      id: l.id,
      nama: l.nama + (tambahan > 0 ? ' + ' + tambahanText.split(' (')[0] : ''),
      tipe: l.tipe,
      harga: total,
      qty: 1,
      perKg: l.perKg,
      berat: berat,
      catatan: l.perKg ? `Berat ${berat.toFixed(1)} kg` : ''
    });

    renderKeranjang();
    document.getElementById('modalGrooming').classList.remove('show');
    toast(`${l.nama} ditambahkan`, 'fa-plus');
    if (window.innerWidth <= 720) updateBottomBar();
  });

  /* =========================================================
     MODAL VAKSIN
  ========================================================= */
  function updateVaksinPreview() {
    const l = currentModalLayanan;
    if (!l) return;
    document.getElementById('vaksinPreview').innerHTML = `
      <div class="row"><span>${l.nama}</span><span>${rp(l.harga)}</span></div>
      <div class="row total"><span>Total</span><span>${rp(l.harga)}</span></div>
    `;
  }

  document.getElementById('closeVaksin').addEventListener('click', () => document.getElementById('modalVaksin').classList.remove('show'));
  document.getElementById('btnBatalVaksin').addEventListener('click', () => document.getElementById('modalVaksin').classList.remove('show'));

  document.getElementById('btnTambahVaksin').addEventListener('click', () => {
    const l = currentModalLayanan;
    if (!l) return;
    const pemilik = document.getElementById('vPemilik').value.trim();
    const hp = document.getElementById('vHP').value.trim();
    const nextHari = parseInt(document.getElementById('vNext').value) || 0;

    if (!pemilik) return toast('Nama pemilik harus diisi', 'fa-exclamation-circle');

    const nextDate = nextHari > 0 ? new Date(Date.now() + nextHari * 24 * 60 * 60 * 1000) : null;

    keranjang.push({
      id: l.id,
      nama: l.nama,
      tipe: l.tipe,
      harga: l.harga,
      qty: 1,
      perKg: false,
      berat: hewan.berat,
      pemilik: pemilik,
      hp: hp,
      vaksinNext: nextDate ? nextDate.toISOString() : null,
      vaksinNextText: nextDate ? nextDate.toLocaleDateString('id-ID', { day:'numeric', month:'long', year:'numeric' }) : null,
      catatan: nextDate ? `Vaksin berikutnya: ${nextDate.toLocaleDateString('id-ID', { day:'numeric', month:'long', year:'numeric' })}` : ''
    });

    renderKeranjang();
    document.getElementById('modalVaksin').classList.remove('show');
    toast(`${l.nama} ditambahkan`, 'fa-syringe');
    if (window.innerWidth <= 720) updateBottomBar();
  });

  /* =========================================================
     MODAL OBAT
  ========================================================= */
  document.getElementById('closeObat').addEventListener('click', () => document.getElementById('modalObat').classList.remove('show'));
  document.getElementById('btnBatalObat').addEventListener('click', () => document.getElementById('modalObat').classList.remove('show'));

  document.getElementById('btnTambahObat').addEventListener('click', () => {
    const l = currentModalLayanan;
    if (!l) return;
    const qty = parseInt(document.getElementById('obatQty').value) || 1;
    const dosis = document.getElementById('obatDosis').value;
    const durasi = document.getElementById('obatDurasi').value;
    const catatan = document.getElementById('obatCatatan').value.trim();

    keranjang.push({
      id: l.id,
      nama: l.nama,
      tipe: l.tipe,
      harga: l.harga,
      qty: qty,
      perKg: false,
      berat: 0,
      catatan: `${dosis} selama ${durasi}${catatan ? ' · ' + catatan : ''}`
    });

    renderKeranjang();
    document.getElementById('modalObat').classList.remove('show');
    toast(`${l.nama} × ${qty} ditambahkan`, 'fa-pills');
    if (window.innerWidth <= 720) updateBottomBar();
  });

  /* =========================================================
     RENDER KERANJANG
  ========================================================= */
  function renderKeranjang() {
    const body = document.getElementById('keranjangBody');
    const totalQty = keranjang.reduce((s, it) => s + it.qty, 0);
    document.getElementById('krjCount').textContent = totalQty;

    if (keranjang.length === 0) {
      body.innerHTML = `
        <div class="keranjang-empty">
          <i class="fas fa-paw"></i>
          <strong>Belum ada layanan</strong>
          Pilih layanan untuk hewan
        </div>`;
    } else {
      body.innerHTML = keranjang.map((it, idx) => `
        <div class="krj-item">
          <div class="krj-top">
            <div class="krj-nama">${it.nama}</div>
            <div class="krj-harga">${rp(it.harga * it.qty)}</div>
          </div>
          <div class="krj-detail">
            ${it.catatan ? `<strong>${it.catatan}</strong>` : ''}
            ${it.vaksinNextText ? `<div class="vaksin-note"><i class="fas fa-bell"></i> Vaksin berikutnya: ${it.vaksinNextText}</div>` : ''}
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
      `).join('');
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

    const subtotal = keranjang.reduce((s, it) => s + it.harga * it.qty, 0);
    const disc = 0;
    document.getElementById('subTxt').textContent = rp(subtotal);
    document.getElementById('discTxt').textContent = '− ' + rp(disc);
    document.getElementById('totalTxt').textContent = rp(subtotal - disc);
    document.getElementById('btnProses').disabled = keranjang.length === 0;
  }

  function incItem(idx) {
    const it = keranjang[idx]; if (!it) return;
    it.qty++;
    renderKeranjang();
  }
  function decItem(idx) {
    const it = keranjang[idx]; if (!it) return;
    if (it.qty <= 1) keranjang.splice(idx, 1);
    else it.qty--;
    renderKeranjang();
  }
  function delItem(idx) {
    keranjang.splice(idx, 1);
    renderKeranjang();
  }

  /* =========================================================
     FILTER
  ========================================================= */
  document.querySelectorAll('.kat-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.kat-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      filterKat = tab.dataset.kat;
      renderLayanan();
    });
  });

  /* =========================================================
     PEMBAYARAN
  ========================================================= */
  const modalBayar = document.getElementById('modalBayar');
  const cashInput = document.getElementById('cashInput');

  document.getElementById('btnProses').addEventListener('click', () => {
    if (keranjang.length === 0) return;
    if (!hewan.nama) {
      toast('Isi nama hewan dulu', 'fa-exclamation-circle');
      return;
    }
    payMethod = 'Tunai';
    document.querySelectorAll('#modalBayar [data-metode]').forEach((m, i) => {
      m.classList.toggle('active', i === 0);
    });
    document.getElementById('cashSection').style.display = 'block';
    document.getElementById('bayarSub').textContent = `Kunjungan #KJ-${String(data.counter).padStart(4,'0')}`;
    cashInput.value = '';
    updateChange();
    modalBayar.classList.add('show');
  });

  document.getElementById('closeBayar').addEventListener('click', () => modalBayar.classList.remove('show'));
  document.getElementById('btnBatalBayar').addEventListener('click', () => modalBayar.classList.remove('show'));

  document.querySelectorAll('#modalBayar [data-metode]').forEach(m => {
    m.addEventListener('click', () => {
      document.querySelectorAll('#modalBayar [data-metode]').forEach(x => x.classList.remove('active'));
      m.classList.add('active');
      payMethod = m.dataset.metode;
      document.getElementById('cashSection').style.display = payMethod === 'Tunai' ? 'block' : 'none';
    });
  });

  function getTotal() {
    return keranjang.reduce((s, it) => s + it.harga * it.qty, 0);
  }

  function updateChange() {
    if (payMethod !== 'Tunai') return;
    const total = getTotal();
    const cash = parseInt(cashInput.value) || 0;
    const box = document.getElementById('changeBox');
    const txt = document.getElementById('changeTxt');
    if (cash === 0) {
      box.style.background = 'var(--mint-muda)';
      box.style.color = 'var(--mint-tua)';
      txt.textContent = rp(0);
      return;
    }
    const diff = cash - total;
    if (diff < 0) {
      box.style.background = '#fee2e2';
      box.style.color = 'var(--merah)';
      txt.textContent = '− ' + rp(Math.abs(diff));
    } else {
      box.style.background = 'var(--mint-muda)';
      box.style.color = 'var(--mint-tua)';
      txt.textContent = rp(diff);
    }
  }
  cashInput.addEventListener('input', updateChange);

  document.getElementById('btnKonfirmasiBayar').addEventListener('click', () => {
    const total = getTotal();
    const cash = parseInt(cashInput.value) || 0;
    if (payMethod === 'Tunai' && cash < total) {
      toast('Uang diterima kurang dari total', 'fa-exclamation-circle');
      return;
    }
    prosesBayar(total, cash);
  });

  /* =========================================================
     PROSES BAYAR
  ========================================================= */
  function prosesBayar(total, cash) {
    const pemilik = document.getElementById('bayarPemilik').value.trim() || 'Pemilik';
    const hp = document.getElementById('bayarHP').value.trim();
    const change = payMethod === 'Tunai' ? cash - total : 0;
    const now = new Date();
    const nomor = 'KJ-' + String(data.counter).padStart(4, '0');

    const trx = {
      nomor: nomor,
      tanggal: now.toISOString(),
      hewan: { ...hewan },
      pemilik: pemilik,
      hp: hp,
      items: keranjang.map(it => ({ ...it })),
      total: total,
      metode: payMethod,
      cash: payMethod === 'Tunai' ? cash : total,
      change: change
    };

    data.transaksi.unshift(trx);
    data.counter++;

    // Simpan ke riwayat pasien (hewan)
    const pasienIdx = data.pasien.findIndex(p => p.nama === hewan.nama && p.pemilik === pemilik);
    if (pasienIdx >= 0) {
      data.pasien[pasienIdx].riwayat.push({
        nomor: nomor,
        tanggal: now.toISOString(),
        items: keranjang.map(it => ({ nama: it.nama, tipe: it.tipe })),
        berat: hewan.berat
      });
      data.pasien[pasienIdx].berat = hewan.berat;
      if (hp) data.pasien[pasienIdx].hp = hp;
    } else {
      data.pasien.unshift({
        nama: hewan.nama,
        jenis: hewan.jenis,
        ras: hewan.ras,
        umur: hewan.umur,
        berat: hewan.berat,
        pemilik: pemilik,
        hp: hp,
        riwayat: [{
          nomor: nomor,
          tanggal: now.toISOString(),
          items: keranjang.map(it => ({ nama: it.nama, tipe: it.tipe })),
          berat: hewan.berat
        }]
      });
    }

    save();
    lastTransaksi = trx;

    modalBayar.classList.remove('show');
    tampilkanStruk(trx);

    keranjang = [];
    renderKeranjang();
    toast('Kunjungan selesai', 'fa-check-circle');
  }

  /* =========================================================
     STRUK / KARTU KUNJUNGAN
  ========================================================= */
  function tampilkanStruk(t) {
    const tgl = new Date(t.tanggal).toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' });

    const itemsHtml = t.items.map(it => `
      <div class="kp-item">
        <div class="info">
          <div class="nama">${it.nama}</div>
          <div class="meta">
            ${it.qty > 1 ? `${it.qty}× · ` : ''}
            ${it.catatan || ''}
          </div>
        </div>
        <div class="harga">${rp(it.harga * it.qty)}</div>
      </div>
    `).join('');

    // Cek ada vaksin next?
    const vaksinNext = t.items.find(it => it.vaksinNextText);
    const vaksinReminder = vaksinNext ? `
      <div class="kp-vaksin-reminder">
        <i class="fas fa-bell"></i>
        <strong>Reminder Vaksin:</strong> ${vaksinNext.nama} berikutnya<br>
        Jadwal: <strong>${vaksinNext.vaksinNextText}</strong>
        ${vaksinNext.hp ? ` · Kami akan ingatkan via WA ke ${vaksinNext.hp}` : ''}
      </div>
    ` : '';

    document.getElementById('strukBody').innerHTML = `
      <div class="kartu-pasien">
        <div class="kp-head">
          <div class="logo"><i class="fas fa-paw"></i> PET CARE</div>
          <p>Klinik Hewan & Grooming<br>
          Jl. Kenari No. 12, Jakarta<br>
          Telp: 021-5566778 · WA: 0812-3456-7890</p>
        </div>

        <div class="kp-hewan">
          <div class="item"><span class="lbl">Hewan</span><span class="val">${t.hewan.nama || '-'}</span></div>
          <div class="item"><span class="lbl">Jenis</span><span class="val">${jenisLabel[t.hewan.jenis] || '-'}</span></div>
          <div class="item"><span class="lbl">Ras</span><span class="val">${t.hewan.ras || '-'}</span></div>
          <div class="item"><span class="lbl">Umur</span><span class="val">${t.hewan.umur || '-'}</span></div>
          <div class="item"><span class="lbl">Berat</span><span class="val">${(t.hewan.berat || 0).toFixed(1)} kg</span></div>
          <div class="item"><span class="lbl">Pemilik</span><span class="val">${t.pemilik}</span></div>
        </div>

        <div style="font-family:'JetBrains Mono',monospace; font-size:0.72rem; color:var(--abu); margin-bottom:12px;">
          No: <strong style="color:var(--mint-tua);">${t.nomor}</strong><br>
          ${tgl}
        </div>

        <div style="border-top:1px dashed var(--line); padding-top:8px;"></div>

        ${itemsHtml}

        <div class="kp-total">
          <div class="row"><span>Subtotal</span><span>${rp(t.total)}</span></div>
          <div class="row"><span>Bayar (${t.metode})</span><span>${rp(t.cash)}</span></div>
          <div class="row"><span>Kembalian</span><span>${rp(t.change)}</span></div>
          <div class="row grand"><span>TOTAL</span><span>${rp(t.total)}</span></div>
        </div>

        ${vaksinReminder}

        <div class="kp-foot">
          <div class="terima">Semoga lekas sehat kembali 🐾</div>
          Simpan kartu ini sebagai riwayat kunjungan<br>
          Untuk booking atau konsultasi lanjutan<br>
          hubungi kami di 0812-3456-7890
        </div>
      </div>
    `;
    document.getElementById('modalStruk').classList.add('show');
  }

  document.getElementById('closeStruk').addEventListener('click', () => document.getElementById('modalStruk').classList.remove('show'));
  document.getElementById('btnTutupStruk').addEventListener('click', () => {
    document.getElementById('modalStruk').classList.remove('show');
    // Reset form setelah selesai
    document.getElementById('hNama').value = '';
    document.getElementById('hRas').value = '';
    document.getElementById('hUmur').value = '';
    document.getElementById('hBerat').value = 0;
    document.getElementById('hBeratDisplay').textContent = '0.0';
    hewan = { nama:'', jenis:'anjing', ras:'', umur:'', berat:0 };
    updateHewanInfo();
  });
  document.getElementById('btnCetakStruk').addEventListener('click', () => {
    const w = window.open('', '', 'width=520,height=780');
    w.document.write('<pre style="font-family:Courier New,monospace; font-size:12px; padding:20px; white-space:pre-wrap;">' +
      document.getElementById('strukBody').innerText + '</pre>');
    w.document.close(); w.focus(); w.print();
    toast('Kartu kunjungan dikirim ke printer', 'fa-print');
  });

  /* =========================================================
     ADMIN
  ========================================================= */
  let adminTab = 'layanan';

  document.querySelectorAll('.admin-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.admin-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      adminTab = tab.dataset.tab;
      document.querySelectorAll('.admin-tab-content').forEach(c => c.style.display = 'none');
      document.getElementById('tab' + adminTab.charAt(0).toUpperCase() + adminTab.slice(1)).style.display = 'block';
      renderAdmin();
    });
  });

  function renderAdmin() {
    const today = new Date().toDateString();
    const kunjunganHariIni = data.transaksi.filter(t => new Date(t.tanggal).toDateString() === today);
    const pendapatanHariIni = kunjunganHariIni.reduce((s, t) => s + t.total, 0);

    // Vaksin due: cek dari transaksi yang punya vaksinNext dalam 30 hari ke depan atau sudah lewat
    const vaksinDue = [];
    data.transaksi.forEach(t => {
      t.items.forEach(it => {
        if (it.vaksinNext) {
          const d = new Date(it.vaksinNext);
          const diffDays = Math.ceil((d - new Date()) / (1000 * 60 * 60 * 24));
          if (diffDays <= 30) {
            vaksinDue.push({
              hewan: t.hewan.nama,
              pemilik: it.pemilik || t.pemilik,
              hp: it.hp || t.hp,
              vaksin: it.nama,
              tanggal: d,
              diffDays: diffDays,
              urgent: diffDays <= 7
            });
          }
        }
      });
    });

    document.getElementById('sKunjungan').textContent = kunjunganHariIni.length;
    document.getElementById('sPendapatan').textContent = rp(pendapatanHariIni);
    document.getElementById('sVaksin').textContent = vaksinDue.length;
    document.getElementById('sPasien').textContent = data.pasien.length;

    // Render tab content
    if (adminTab === 'layanan') renderLayananAdmin();
    if (adminTab === 'riwayat') renderRiwayatAdmin();
    if (adminTab === 'vaksin') renderReminderAdmin(vaksinDue);
  }

  function renderLayananAdmin() {
    const grid = document.getElementById('layananAdminGrid');
    document.getElementById('layananCount').textContent = data.layanan.length + ' layanan';

    grid.innerHTML = data.layanan.map(l => `
      <div class="stok-card">
        <div class="info">
          <div class="tipe ${l.tipe}">${l.tipe}</div>
          <div class="nama">${l.nama}</div>
          <div class="harga">${rp(l.harga)}${l.perKg ? '<small>per kg</small>' : ''}</div>
        </div>
        <div style="display:flex; flex-direction:column; gap:5px;">
          <button class="icon-btn" data-act="edit" data-id="${l.id}" style="border:1px solid var(--line); background:white; color:var(--abu); width:28px; height:28px; cursor:pointer; border-radius:7px; font-size:0.72rem; display:flex; align-items:center; justify-content:center;">
            <i class="fas fa-pen"></i>
          </button>
          <button class="icon-btn danger" data-act="del" data-id="${l.id}" style="border:1px solid var(--line); background:white; color:var(--abu); width:28px; height:28px; cursor:pointer; border-radius:7px; font-size:0.72rem; display:flex; align-items:center; justify-content:center;">
            <i class="fas fa-trash"></i>
          </button>
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
  }

  function renderRiwayatAdmin() {
    const tbody = document.getElementById('riwayatBody');
    if (data.transaksi.length === 0) {
      tbody.innerHTML = '<tr><td colspan="5" style="text-align:center; padding:30px; color:var(--abu);">Belum ada kunjungan</td></tr>';
      return;
    }
    tbody.innerHTML = data.transaksi.slice(0, 20).map(t => {
      const tgl = new Date(t.tanggal).toLocaleString('id-ID', { dateStyle:'short', timeStyle:'short' });
      return `
        <tr>
          <td><span class="rw-num">${t.nomor}</span></td>
          <td>
            <div class="rw-hewan">
              <div class="avatar"><i class="fas ${jenisIcon[t.hewan.jenis] || 'fa-paw'}"></i></div>
              <div class="info">
                <strong>${t.hewan.nama}</strong>
                <small>${jenisLabel[t.hewan.jenis]} · ${(t.hewan.berat || 0).toFixed(1)} kg</small>
              </div>
            </div>
          </td>
          <td>${t.pemilik}</td>
          <td>${tgl}</td>
          <td style="font-family:'JetBrains Mono',monospace; font-weight:700; color:var(--mint-tua);">${rp(t.total)}</td>
        </tr>
      `;
    }).join('');
  }

  function renderReminderAdmin(vaksinDue) {
    const list = document.getElementById('reminderList');
    if (vaksinDue.length === 0) {
      list.innerHTML = '<div style="text-align:center; padding:30px; color:var(--abu); font-family:\'Nunito\',sans-serif; font-style:italic;">Tidak ada reminder vaksin</div>';
      return;
    }

    list.innerHTML = vaksinDue.map(v => {
      const tgl = v.tanggal.toLocaleDateString('id-ID', { day:'numeric', month:'short', year:'numeric' });
      const statusText = v.diffDays < 0
        ? `Terlambat ${Math.abs(v.diffDays)} hari`
        : v.diffDays === 0
          ? 'Hari ini'
          : `Dalam ${v.diffDays} hari`;
      return `
        <div class="reminder-item ${v.urgent ? 'urgent' : ''}">
          <div class="reminder-icon"><i class="fas fa-syringe"></i></div>
          <div class="reminder-info">
            <div class="hewan">${v.hewan} · ${v.vaksin}</div>
            <div class="detail">
              Pemilik: <strong>${v.pemilik}</strong>
              ${v.hp ? ` · ${v.hp}` : ''}<br>
              ${statusText}
            </div>
          </div>
          <div class="reminder-date">${tgl}</div>
        </div>
      `;
    }).join('');
  }

  /* =========================================================
     FORM LAYANAN
  ========================================================= */
  const modalLayananForm = document.getElementById('modalLayananForm');

  function bukaFormLayanan(id) {
    const isEdit = id != null;
    document.getElementById('layananFormTitle').textContent = isEdit ? 'Edit Layanan' : 'Tambah Layanan';
    document.getElementById('editLayananId').value = isEdit ? id : '';
    document.getElementById('lNama').value = '';
    document.getElementById('lTipe').value = 'konsul';
    document.getElementById('lHarga').value = '';
    document.getElementById('lPerKg').value = '0';
    updateFieldPerKg();

    if (isEdit) {
      const l = data.layanan.find(x => x.id === id);
      if (l) {
        document.getElementById('lNama').value = l.nama;
        document.getElementById('lTipe').value = l.tipe;
        document.getElementById('lHarga').value = l.harga;
        document.getElementById('lPerKg').value = l.perKg ? '1' : '0';
        updateFieldPerKg();
      }
    }
    modalLayananForm.classList.add('show');
  }

  function updateFieldPerKg() {
    const tipe = document.getElementById('lTipe').value;
    document.getElementById('fieldPerKg').style.display = tipe === 'grooming' ? 'block' : 'none';
  }

  document.getElementById('lTipe').addEventListener('change', updateFieldPerKg);

  document.getElementById('btnTambahLayanan').addEventListener('click', () => bukaFormLayanan(null));
  document.getElementById('closeLayananForm').addEventListener('click', () => modalLayananForm.classList.remove('show'));
  document.getElementById('btnBatalLayananForm').addEventListener('click', () => modalLayananForm.classList.remove('show'));

  document.getElementById('btnSimpanLayanan').addEventListener('click', () => {
    const editId = document.getElementById('editLayananId').value;
    const nama = document.getElementById('lNama').value.trim();
    const tipe = document.getElementById('lTipe').value;
    const harga = parseInt(document.getElementById('lHarga').value);
    const perKg = document.getElementById('lPerKg').value === '1';

    if (!nama) return toast('Nama layanan harus diisi', 'fa-exclamation-circle');
    if (isNaN(harga) || harga <= 0) return toast('Harga tidak valid', 'fa-exclamation-circle');

    if (editId) {
      const l = data.layanan.find(x => x.id === parseInt(editId));
      if (l) Object.assign(l, { nama, tipe, harga, perKg });
      toast('Layanan diperbarui', 'fa-circle-check');
    } else {
      const newId = data.layanan.length ? Math.max(...data.layanan.map(l => l.id)) + 1 : 1;
      data.layanan.push({ id:newId, nama, tipe, harga, perKg });
      toast('Layanan baru ditambahkan', 'fa-circle-check');
    }
    save();
    modalLayananForm.classList.remove('show');
    renderAdmin();
    renderLayanan();
  });

  function hapusLayanan(id) {
    const l = data.layanan.find(x => x.id === id);
    if (!l) return;
    if (!confirm(`Hapus layanan "${l.nama}"?`)) return;
    data.layanan = data.layanan.filter(x => x.id !== id);
    save();
    renderAdmin();
    renderLayanan();
    toast('Layanan dihapus', 'fa-trash');
  }

  /* =========================================================
     CARI RIWAYAT HEWAN
  ========================================================= */
  const modalCariHewan = document.getElementById('modalCariHewan');

  document.getElementById('btnPilihHewan').addEventListener('click', () => {
    document.getElementById('cariInput').value = '';
    document.getElementById('cariHasil').innerHTML = renderCariHasil('');
    modalCariHewan.classList.add('show');
  });

  document.getElementById('cariInput').addEventListener('input', e => {
    document.getElementById('cariHasil').innerHTML = renderCariHasil(e.target.value);
  });

  document.getElementById('closeCariHewan').addEventListener('click', () => modalCariHewan.classList.remove('show'));
  document.getElementById('btnTutupCari').addEventListener('click', () => modalCariHewan.classList.remove('show'));

  function renderCariHasil(q) {
    if (data.pasien.length === 0) {
      return '<div style="text-align:center; padding:30px; color:var(--abu); font-family:\'Nunito\',sans-serif; font-style:italic;">Belum ada riwayat pasien</div>';
    }
    const query = q.toLowerCase().trim();
    let list = data.pasien;
    if (query) {
      list = list.filter(p =>
        p.nama.toLowerCase().includes(query) ||
        p.pemilik.toLowerCase().includes(query)
      );
    }

    if (list.length === 0) {
      return '<div style="text-align:center; padding:30px; color:var(--abu); font-family:\'Nunito\',sans-serif; font-style:italic;">Tidak ditemukan</div>';
    }

    return list.slice(0, 10).map(p => `
      <div class="reminder-item" data-nama="${p.nama}" data-pemilik="${p.pemilik}" style="cursor:pointer;">
        <div class="reminder-icon" style="background:var(--mint); color:white;">
          <i class="fas ${jenisIcon[p.jenis] || 'fa-paw'}"></i>
        </div>
        <div class="reminder-info">
          <div class="hewan" style="color:var(--mint-tua);">${p.nama} · ${jenisLabel[p.jenis] || '-'}</div>
          <div class="detail" style="color:var(--abu);">
            ${p.pemilik} · ${p.berat.toFixed(1)} kg · ${p.riwayat.length}× kunjungan
          </div>
        </div>
      </div>
    `).join('');
  }

  document.getElementById('cariHasil').addEventListener('click', e => {
    const item = e.target.closest('[data-nama]');
    if (!item) return;
    const nama = item.dataset.nama;
    const pemilik = item.dataset.pemilik;
    const p = data.pasien.find(x => x.nama === nama && x.pemilik === pemilik);
    if (!p) return;

    document.getElementById('hNama').value = p.nama;
    document.getElementById('hJenis').value = p.jenis;
    document.getElementById('hRas').value = p.ras || '';
    document.getElementById('hUmur').value = p.umur || '';
    document.getElementById('hBerat').value = p.berat || 0;
    document.getElementById('hBeratDisplay').textContent = (p.berat || 0).toFixed(1);
    hewan = { nama:p.nama, jenis:p.jenis, ras:p.ras, umur:p.umur, berat:p.berat || 0 };
    updateHewanInfo();
    modalCariHewan.classList.remove('show');
    toast(`Data ${p.nama} dimuat`, 'fa-check-circle');
  });

  /* =========================================================
     RESET
  ========================================================= */
  document.getElementById('btnResetData').addEventListener('click', () => {
    if (!confirm('Reset semua data ke default?')) return;
    data = {
      layanan: JSON.parse(JSON.stringify(defaultLayanan)),
      transaksi: [],
      pasien: [],
      counter: 1
    };
    keranjang = [];
    save();
    renderAdmin();
    renderLayanan();
    renderKeranjang();
    toast('Data direset', 'fa-rotate');
  });

  /* =========================================================
     MOBILE BOTTOM SHEET
  ========================================================= */
  const colKeranjang = document.getElementById('colKeranjang');
  const keranjangHead = document.getElementById('keranjangHead');

  keranjangHead.addEventListener('click', () => {
    if (window.innerWidth > 720) return;
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
  renderLayanan();
  renderKeranjang();
  updateHewanInfo();
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>