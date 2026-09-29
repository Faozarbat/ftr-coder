@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Konter Digital — Agen BRILink & PPOB</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;600;700&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; -webkit-tap-highlight-color:transparent; }
body {
  font-family:'Inter',system-ui,sans-serif;
  background:#e8eef5;
  color:#0f2540;
  min-height:100vh;
  font-size:14px;
}

:root {
  --biru:#00529c;
  --biru-tua:#003a70;
  --biru-muda:#e6f0fa;
  --biru-terang:#4a8dd4;
  --kuning:#f5a623;
  --kuning-tua:#c98210;
  --hijau:#1a8a5c;
  --merah:#d64545;
  --abu:#7a8a9c;
  --line:#d5e1ee;
}

.app {
  max-width:1500px;
  margin:0 auto;
  background:#f5f8fc;
  min-height:100vh;
  display:flex;
  flex-direction:column;
}

/* ==================== HEADER ==================== */
.topbar {
  background:linear-gradient(180deg, #00529c 0%, #003a70 100%);
  color:white;
  padding:0 22px;
  height:64px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  position:sticky;
  top:0;
  z-index:50;
  border-bottom:3px solid var(--kuning);
}
.brand { display:flex; align-items:center; gap:12px; }
.brand-mark {
  width:40px; height:40px;
  background:var(--kuning);
  color:var(--biru-tua);
  display:flex; align-items:center; justify-content:center;
  border-radius:10px;
  font-size:1.15rem;
  font-weight:800;
}
.brand h1 {
  font-size:1.15rem;
  font-weight:800;
  letter-spacing:-0.3px;
  line-height:1;
}
.brand h1 small {
  display:block;
  font-size:0.6rem;
  font-weight:500;
  letter-spacing:2px;
  color:#a8c8e8;
  text-transform:uppercase;
  margin-top:4px;
}

.topbar-right { display:flex; align-items:center; gap:12px; }
.saldo-badge {
  background:rgba(255,255,255,0.1);
  border:1px solid rgba(255,255,255,0.2);
  padding:8px 14px;
  border-radius:10px;
  display:flex;
  flex-direction:column;
  gap:2px;
}
.saldo-badge .lbl {
  font-size:0.6rem;
  color:#a8c8e8;
  letter-spacing:1.5px;
  text-transform:uppercase;
  font-weight:600;
}
.saldo-badge .val {
  font-family:'JetBrains Mono',monospace;
  font-size:0.9rem;
  font-weight:700;
  color:var(--kuning);
}
.mode-nav {
  display:flex;
  background:rgba(0,0,0,0.2);
  padding:4px;
  border-radius:8px;
  gap:2px;
}
.mode-nav button {
  background:transparent;
  border:none;
  color:#a8c8e8;
  padding:8px 14px;
  border-radius:6px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.74rem;
  font-weight:600;
  display:flex; align-items:center; gap:6px;
  transition:all 0.15s;
}
.mode-nav button:hover { color:white; }
.mode-nav button.active {
  background:var(--kuning);
  color:var(--biru-tua);
}
.user-badge {
  display:flex; align-items:center; gap:8px;
}
.user-badge .avatar {
  width:34px; height:34px;
  background:var(--kuning);
  color:var(--biru-tua);
  border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  font-weight:800;
  font-size:0.8rem;
}

/* ==================== PAGE ==================== */
.page { display:none; flex:1; }
.page.active { display:flex; flex-direction:column; }

/* ==================== KASIR LAYOUT ==================== */
.kasir-grid {
  display:grid;
  grid-template-columns:230px 1fr 360px;
  flex:1;
  min-height:0;
}

/* === KOLOM 1: JENIS TRANSAKSI === */
.col-jenis {
  background:white;
  border-right:1px solid var(--line);
  padding:16px 0;
  overflow-y:auto;
}
.jenis-title {
  padding:0 18px 10px;
  font-size:0.65rem;
  font-weight:700;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:1.5px;
  border-bottom:1px solid var(--line);
  margin-bottom:8px;
}
.jenis-btn {
  background:transparent;
  border:none;
  padding:12px 18px;
  cursor:pointer;
  text-align:left;
  font-family:'Inter',sans-serif;
  font-size:0.82rem;
  font-weight:500;
  color:#4a5f75;
  display:flex;
  align-items:center;
  gap:12px;
  transition:all 0.12s;
  border-left:3px solid transparent;
  width:100%;
}
.jenis-btn:hover {
  background:var(--biru-muda);
  color:var(--biru-tua);
}
.jenis-btn.active {
  background:var(--biru-muda);
  color:var(--biru);
  font-weight:700;
  border-left-color:var(--kuning);
}
.jenis-btn i {
  width:20px;
  text-align:center;
  font-size:0.9rem;
  color:var(--abu);
}
.jenis-btn.active i { color:var(--biru); }

/* === KOLOM 2: KONTEN TRANSAKSI === */
.col-konten {
  padding:22px 26px;
  overflow-y:auto;
  min-height:0;
}
.konten-head {
  margin-bottom:20px;
}
.konten-head .kicker {
  font-size:0.65rem;
  color:var(--kuning-tua);
  letter-spacing:2px;
  text-transform:uppercase;
  font-weight:700;
  margin-bottom:6px;
}
.konten-head h2 {
  font-size:1.5rem;
  font-weight:800;
  color:var(--biru-tua);
  letter-spacing:-0.3px;
  line-height:1.2;
}
.konten-head .sub {
  font-size:0.82rem;
  color:var(--abu);
  margin-top:6px;
}

/* === FORM INPUT NOMOR === */
.input-nomor {
  background:white;
  border:1.5px solid var(--line);
  border-radius:12px;
  padding:20px 22px;
  margin-bottom:16px;
}
.input-nomor .field {
  margin-bottom:16px;
}
.input-nomor .field:last-child { margin-bottom:0; }
.input-nomor label {
  display:block;
  font-size:0.68rem;
  font-weight:700;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:1px;
  margin-bottom:7px;
}
.input-nomor input,
.input-nomor select {
  width:100%;
  border:1.5px solid var(--line);
  background:white;
  padding:14px 16px;
  border-radius:10px;
  font-family:'JetBrains Mono',monospace;
  font-size:1.05rem;
  font-weight:600;
  color:var(--biru-tua);
  outline:none;
  transition:border-color 0.15s;
  letter-spacing:1px;
}
.input-nomor input:focus,
.input-nomor select:focus {
  border-color:var(--biru);
  box-shadow:0 0 0 3px rgba(0,90,180,0.08);
}
.input-nomor input::placeholder {
  color:#b8c5d5;
  font-family:'Inter',sans-serif;
  letter-spacing:0;
  font-weight:400;
  font-size:0.92rem;
}

/* === GRID NOMINAL === */
.nominal-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(140px,1fr));
  gap:10px;
  margin-bottom:16px;
}
.nominal-btn {
  background:white;
  border:1.5px solid var(--line);
  border-radius:10px;
  padding:14px 12px;
  cursor:pointer;
  text-align:center;
  transition:all 0.12s;
  display:flex;
  flex-direction:column;
  gap:5px;
  align-items:center;
}
.nominal-btn:hover {
  border-color:var(--biru);
  background:var(--biru-muda);
}
.nominal-btn.selected {
  background:var(--biru);
  border-color:var(--biru);
  color:white;
}
.nominal-btn .nominal {
  font-family:'JetBrains Mono',monospace;
  font-size:1rem;
  font-weight:700;
  color:var(--biru-tua);
}
.nominal-btn.selected .nominal { color:white; }
.nominal-btn .harga {
  font-size:0.7rem;
  color:var(--abu);
  font-weight:500;
}
.nominal-btn.selected .harga { color:#a8c8e8; }

/* Nominal custom */
.nominal-custom {
  display:flex;
  gap:8px;
  margin-bottom:16px;
}
.nominal-custom input {
  flex:1;
  border:1.5px solid var(--line);
  border-radius:10px;
  padding:13px 16px;
  font-family:'JetBrains Mono',monospace;
  font-size:1rem;
  font-weight:600;
  color:var(--biru-tua);
  outline:none;
}
.nominal-custom input:focus { border-color:var(--biru); }
.btn-custom-ok {
  background:var(--biru);
  color:white;
  border:none;
  padding:0 20px;
  border-radius:10px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.82rem;
  font-weight:700;
}

/* === RINGKASAN TRANSAKSI === */
.ringkasan-box {
  background:white;
  border:2px solid var(--biru);
  border-radius:14px;
  padding:20px 22px;
  margin-bottom:16px;
}
.ringkasan-box .row {
  display:flex;
  justify-content:space-between;
  padding:8px 0;
  font-size:0.85rem;
  color:#4a5f75;
}
.ringkasan-box .row strong {
  color:var(--biru-tua);
  font-weight:700;
}
.ringkasan-box .row.total {
  font-size:1.4rem;
  font-weight:800;
  color:var(--biru);
  padding-top:14px;
  margin-top:10px;
  border-top:1px dashed var(--line);
  font-family:'JetBrains Mono',monospace;
}
.ringkasan-box .row.komisi {
  color:var(--hijau);
  background:#e8f5ee;
  border-radius:8px;
  padding:8px 12px;
  margin-top:8px;
  font-weight:600;
}

.btn-proses {
  width:100%;
  background:var(--biru);
  color:white;
  border:none;
  padding:18px;
  border-radius:12px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:1rem;
  font-weight:800;
  letter-spacing:0.3px;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:10px;
  transition:background 0.15s;
}
.btn-proses:hover { background:var(--biru-tua); }
.btn-proses i { color:var(--kuning); }
.btn-proses:disabled {
  background:#b8c5d5;
  cursor:not-allowed;
}

/* === KOLOM 3: BUKU KAS & RIWAYAT === */
.col-kas {
  background:white;
  border-left:1px solid var(--line);
  display:flex;
  flex-direction:column;
  min-height:0;
}
.kas-head {
  background:var(--biru-tua);
  color:white;
  padding:16px 20px;
}
.kas-head .lbl {
  font-size:0.65rem;
  color:#a8c8e8;
  letter-spacing:2px;
  text-transform:uppercase;
  font-weight:600;
  margin-bottom:5px;
}
.kas-head h3 {
  font-size:1rem;
  font-weight:700;
  display:flex;
  align-items:center;
  justify-content:space-between;
}

.kas-summary {
  padding:16px 20px;
  background:#f5f8fc;
  border-bottom:1px solid var(--line);
}
.kas-summary .item {
  display:flex;
  justify-content:space-between;
  padding:6px 0;
  font-size:0.82rem;
}
.kas-summary .item .lbl { color:var(--abu); }
.kas-summary .item .val {
  font-family:'JetBrains Mono',monospace;
  font-weight:700;
  color:var(--biru-tua);
}
.kas-summary .item.masuk .val { color:var(--hijau); }
.kas-summary .item.keluar .val { color:var(--merah); }

.kas-tabs {
  display:flex;
  padding:8px 12px;
  gap:4px;
  background:#f5f8fc;
  border-bottom:1px solid var(--line);
  overflow-x:auto;
}
.kas-tab {
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
}
.kas-tab.active {
  background:var(--biru);
  color:white;
}

.kas-list {
  flex:1;
  overflow-y:auto;
  padding:12px 16px;
  display:flex;
  flex-direction:column;
  gap:8px;
  min-height:0;
}
.kas-empty {
  text-align:center;
  padding:40px 16px;
  color:var(--abu);
  font-size:0.82rem;
}
.kas-empty i {
  font-size:2.2rem;
  display:block;
  margin-bottom:12px;
  color:#c4d7e4;
}

.kas-item {
  background:#fafcfe;
  border:1px solid var(--line);
  border-left:3px solid var(--biru);
  border-radius:8px;
  padding:11px 13px;
  cursor:pointer;
  transition:all 0.12s;
}
.kas-item:hover {
  border-color:var(--biru);
  background:white;
}
.kas-item.komisi { border-left-color:var(--hijau); }
.kas-item.transfer-keluar { border-left-color:var(--merah); }
.kas-item.setor { border-left-color:var(--kuning); }

.kas-item .top {
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
  gap:8px;
  margin-bottom:5px;
}
.kas-item .jenis {
  font-size:0.78rem;
  font-weight:600;
  color:var(--biru-tua);
  line-height:1.3;
}
.kas-item .jumlah {
  font-family:'JetBrains Mono',monospace;
  font-size:0.86rem;
  font-weight:700;
  white-space:nowrap;
}
.kas-item .jumlah.masuk { color:var(--hijau); }
.kas-item .jumlah.keluar { color:var(--merah); }
.kas-item .meta {
  font-size:0.68rem;
  color:var(--abu);
  display:flex;
  gap:10px;
  flex-wrap:wrap;
}
.kas-item .meta .ref {
  font-family:'JetBrains Mono',monospace;
  font-size:0.65rem;
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
  border-bottom:2px solid var(--biru);
}
.admin-head h2 {
  font-size:1.4rem;
  font-weight:800;
  color:var(--biru-tua);
}
.admin-head h2 small {
  display:block;
  font-size:0.72rem;
  font-weight:500;
  color:var(--abu);
  letter-spacing:1.2px;
  text-transform:uppercase;
  margin-top:5px;
}
.admin-actions { display:flex; gap:10px; }
.btn-outline {
  background:white;
  border:1.5px solid var(--line);
  color:var(--biru-tua);
  padding:10px 18px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.8rem;
  font-weight:600;
  display:flex; align-items:center; gap:8px;
}
.btn-outline:hover { border-color:var(--biru); color:var(--biru); }
.btn-solid {
  background:var(--biru);
  border:none;
  color:white;
  padding:10px 18px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.8rem;
  font-weight:700;
  display:flex; align-items:center; gap:8px;
}
.btn-solid:hover { background:var(--biru-tua); }
.btn-solid i { color:var(--kuning); }

.stats-row {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(190px,1fr));
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
.stat-card .lbl {
  font-size:0.66rem;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:1px;
  font-weight:600;
  margin-bottom:8px;
}
.stat-card .val {
  font-family:'JetBrains Mono',monospace;
  font-size:1.4rem;
  font-weight:700;
  color:var(--biru-tua);
  line-height:1;
}
.stat-card.kuning .val { color:var(--kuning-tua); }
.stat-card.hijau .val { color:var(--hijau); }
.stat-card.merah .val { color:var(--merah); }
.stat-card .sub {
  font-size:0.68rem;
  color:var(--abu);
  margin-top:5px;
}

.admin-section {
  background:white;
  border:1.5px solid var(--line);
  border-radius:12px;
  overflow:hidden;
  margin-bottom:18px;
}
.section-head {
  padding:14px 20px;
  background:#f5f8fc;
  border-bottom:1px solid var(--line);
  display:flex;
  align-items:center;
  gap:10px;
  font-size:0.9rem;
  font-weight:700;
  color:var(--biru-tua);
}
.section-head i { color:var(--biru); }
.section-head .spacer { flex:1; }
.section-head .hint {
  font-size:0.7rem;
  font-weight:500;
  color:var(--abu);
}

.produk-digital-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(200px,1fr));
  gap:12px;
  padding:18px 20px;
}
.produk-card {
  background:#fafcfe;
  border:1.5px solid var(--line);
  border-radius:10px;
  padding:14px 16px;
  transition:all 0.15s;
}
.produk-card:hover {
  border-color:var(--biru);
  background:white;
}
.produk-card .kode {
  font-family:'JetBrains Mono',monospace;
  font-size:0.68rem;
  color:var(--abu);
  margin-bottom:5px;
}
.produk-card .nama {
  font-size:0.9rem;
  font-weight:600;
  color:var(--biru-tua);
  margin-bottom:6px;
}
.produk-card .harga {
  font-family:'JetBrains Mono',monospace;
  font-size:1rem;
  font-weight:700;
  color:var(--biru);
}
.produk-card .komisi {
  font-size:0.7rem;
  color:var(--hijau);
  font-weight:600;
  margin-top:4px;
}

/* Tabel mutasi admin */
.mutasi-table {
  width:100%;
  border-collapse:collapse;
  font-size:0.82rem;
}
.mutasi-table th {
  text-align:left;
  padding:11px 16px;
  background:#f5f8fc;
  font-size:0.66rem;
  font-weight:700;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:0.6px;
  border-bottom:1px solid var(--line);
}
.mutasi-table td {
  padding:12px 16px;
  border-bottom:1px solid var(--line);
  color:var(--biru-tua);
}
.mutasi-table tr:last-child td { border-bottom:none; }
.mutasi-table tr:hover { background:#fafcfe; }
.mono {
  font-family:'JetBrains Mono',monospace;
  font-weight:600;
  font-size:0.78rem;
}
.mutasi-table td.masuk { color:var(--hijau); font-weight:700; }
.mutasi-table td.keluar { color:var(--merah); font-weight:700; }

/* ==================== MODAL ==================== */
.modal-bg {
  position:fixed;
  inset:0;
  background:rgba(15,37,64,0.6);
  display:none;
  align-items:center;
  justify-content:center;
  z-index:100;
  padding:16px;
}
.modal-bg.show { display:flex; }
.modal {
  background:white;
  border-radius:14px;
  width:100%;
  max-width:480px;
  max-height:92vh;
  overflow-y:auto;
  box-shadow:0 25px 60px -15px rgba(0,0,0,0.4);
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
  color:var(--kuning-tua);
  text-transform:uppercase;
  font-weight:700;
  margin-bottom:6px;
}
.modal-head h3 {
  font-size:1.15rem;
  font-weight:800;
  color:var(--biru-tua);
  display:flex; align-items:center; gap:10px;
  padding-right:30px;
}
.modal-head h3 i { color:var(--kuning); }
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
  background:#f5f8fc;
  display:flex;
  gap:10px;
}
.modal-foot .btn-outline { flex:1; justify-content:center; }
.modal-foot .btn-solid { flex:2; justify-content:center; padding:13px; }

/* Konfirmasi transaksi */
.konfirmasi-box {
  background:var(--biru-tua);
  color:white;
  border-radius:12px;
  padding:20px;
  margin-bottom:16px;
}
.konfirmasi-box .row {
  display:flex;
  justify-content:space-between;
  padding:8px 0;
  font-size:0.85rem;
  border-bottom:1px solid rgba(255,255,255,0.1);
}
.konfirmasi-box .row:last-child { border-bottom:none; }
.konfirmasi-box .row .lbl { color:#a8c8e8; }
.konfirmasi-box .row .val {
  font-family:'JetBrains Mono',monospace;
  font-weight:700;
  color:white;
}
.konfirmasi-box .row.total {
  padding-top:14px;
  margin-top:6px;
  border-top:2px solid var(--kuning);
  font-size:1.3rem;
  font-weight:800;
}
.konfirmasi-box .row.total .val { color:var(--kuning); }

/* Struk */
.struk {
  background:white;
  border:1px dashed #999;
  border-radius:6px;
  padding:20px 18px;
  font-family:'JetBrains Mono',monospace;
  font-size:0.74rem;
  color:#0f2540;
  line-height:1.5;
}
.struk .s-head {
  text-align:center;
  padding-bottom:12px;
  border-bottom:1px dashed #999;
  margin-bottom:12px;
}
.struk .s-head h4 {
  font-size:1.05rem;
  font-weight:800;
  letter-spacing:1px;
  color:var(--biru-tua);
}
.struk .s-head p {
  font-size:0.68rem;
  color:#666;
  margin-top:4px;
  line-height:1.6;
}
.struk .s-sukses {
  background:#e8f5ee;
  border:1px solid #86efac;
  border-radius:6px;
  padding:10px;
  text-align:center;
  margin:12px 0;
  color:var(--hijau);
  font-weight:800;
  font-size:0.9rem;
  letter-spacing:0.5px;
}
.struk .s-meta {
  font-size:0.7rem;
  color:#666;
  margin-bottom:12px;
  line-height:1.7;
}
.struk .s-meta strong { color:var(--biru-tua); }
.struk .s-line {
  border-top:1px dashed #999;
  margin:10px 0;
}
.struk .s-row {
  display:flex;
  justify-content:space-between;
  font-size:0.76rem;
  margin-bottom:5px;
}
.struk .s-row .val {
  font-weight:700;
  color:var(--biru-tua);
}
.struk .s-total {
  display:flex;
  justify-content:space-between;
  font-size:1rem;
  font-weight:800;
  color:var(--biru);
  padding-top:10px;
  margin-top:10px;
  border-top:1px dashed #999;
}
.struk .s-foot {
  text-align:center;
  font-size:0.66rem;
  color:#666;
  margin-top:14px;
  padding-top:12px;
  border-top:1px dashed #999;
  line-height:1.7;
}

/* TOAST */
.toast {
  position:fixed;
  bottom:24px;
  left:50%;
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
  box-shadow:0 10px 30px -8px rgba(0,82,156,0.4);
  max-width:90vw;
}
.toast.show {
  opacity:1;
  transform:translateX(-50%) translateY(0);
}
.toast i { color:var(--kuning); }

/* ==================== RESPONSIVE ==================== */
@media (max-width: 1100px) {
  .kasir-grid { grid-template-columns:1fr 340px; }
  .col-jenis { display:none; }
  .col-jenis.mobile-show {
    display:block;
    position:fixed;
    top:64px; left:0; bottom:0;
    width:250px;
    z-index:55;
    box-shadow:4px 0 20px rgba(0,0,0,0.15);
  }
  .jenis-toggle {
    display:flex !important;
  }
}

@media (max-width: 720px) {
  body { font-size:13px; }
  .topbar { padding:0 14px; height:60px; flex-wrap:wrap; gap:8px; }
  .brand-mark { width:34px; height:34px; font-size:1rem; }
  .brand h1 { font-size:1rem; }
  .brand h1 small { font-size:0.55rem; letter-spacing:1.5px; }
  .saldo-badge { padding:6px 10px; }
  .saldo-badge .val { font-size:0.8rem; }
  .mode-nav button span { display:none; }
  .mode-nav button { padding:7px 10px; }
  .user-badge { display:none; }

  .kasir-grid { grid-template-columns:1fr; padding-bottom:80px; }
  .col-jenis {
    display:block;
    position:static;
    padding:10px 12px;
    overflow-x:auto;
    overflow-y:hidden;
    white-space:nowrap;
    border-right:none;
    border-bottom:1px solid var(--line);
  }
  .jenis-title { display:none; }
  .jenis-btn {
    display:inline-flex;
    white-space:nowrap;
    padding:10px 14px;
    border-left:none;
    border-bottom:3px solid transparent;
    width:auto;
  }
  .jenis-btn.active {
    background:transparent;
    border-left:none;
    border-bottom-color:var(--kuning);
  }
  .jenis-toggle { display:none !important; }

  .col-konten { padding:16px 14px 100px; }
  .konten-head h2 { font-size:1.25rem; }
  .nominal-grid { grid-template-columns:repeat(2, 1fr); gap:8px; }
  .nominal-btn { padding:12px 10px; }
  .nominal-btn .nominal { font-size:0.9rem; }

  .col-kas {
    position:fixed;
    bottom:0; left:0; right:0;
    max-height:70vh;
    border-left:none;
    border-top:2px solid var(--biru);
    border-radius:20px 20px 0 0;
    transform:translateY(calc(100% - 74px));
    transition:transform 0.3s ease-out;
    z-index:60;
    box-shadow:0 -10px 30px -10px rgba(0,0,0,0.2);
    overflow:hidden;
  }
  .col-kas.expanded {
    transform:translateY(0);
    box-shadow:0 -15px 40px -10px rgba(0,0,0,0.3);
  }
  .kas-head {
    padding:16px 20px;
    cursor:pointer;
    border-radius:20px 20px 0 0;
    position:relative;
  }
  .kas-head::before {
    content:'';
    position:absolute;
    top:7px; left:50%;
    transform:translateX(-50%);
    width:36px; height:4px;
    background:rgba(168,200,232,0.5);
    border-radius:2px;
  }
  .kas-head .toggle-icon {
    display:flex;
    transition:transform 0.3s;
  }
  .col-kas.expanded .kas-head .toggle-icon {
    transform:rotate(180deg);
  }
  .kas-list { max-height:calc(70vh - 180px); }

  .admin-wrap { padding:16px 14px; }
  .admin-head { flex-direction:column; align-items:stretch; }
  .admin-actions { justify-content:stretch; }
  .admin-actions button { flex:1; justify-content:center; }
  .stats-row { grid-template-columns:1fr 1fr; gap:10px; }
  .stat-card { padding:13px 14px; }
  .stat-card .val { font-size:1.05rem; }
  .produk-digital-grid { grid-template-columns:1fr; padding:14px; }
  .mutasi-table th, .mutasi-table td { padding:10px 12px; font-size:0.74rem; }
  .mutasi-table th:nth-child(2), .mutasi-table td:nth-child(2) { display:none; }

  .modal { border-radius:14px 14px 0 0; }
  .modal-bg { align-items:flex-end; padding:0; }
  .modal-head { padding:20px 20px 14px; }
  .modal-body { padding:20px; }
  .modal-foot { padding:14px 20px 20px; flex-direction:column-reverse; }
  .modal-foot button { width:100%; justify-content:center; padding:14px; }
}

/* Toggle jenis btn (hamburger) untuk tablet */
.jenis-toggle {
  display:none;
  position:fixed;
  top:74px;
  left:14px;
  width:44px;
  height:44px;
  border-radius:12px;
  background:var(--biru);
  color:white;
  border:none;
  cursor:pointer;
  font-size:1.1rem;
  z-index:56;
  align-items:center;
  justify-content:center;
  box-shadow:0 6px 16px -4px rgba(0,82,156,0.4);
}
.jenis-toggle.active { background:var(--merah); }
</style>
</head>
<body>

<div class="app">

<!-- ==================== HEADER ==================== -->
<header class="topbar">
  <div class="brand">
    <div class="brand-mark">K</div>
    <h1>Konter Digital<small>Agen BRILink & PPOB</small></h1>
  </div>
  <div class="topbar-right">
    <div class="saldo-badge">
      <span class="lbl">Saldo Agen</span>
      <span class="val" id="topSaldo">Rp 0</span>
    </div>
    <nav class="mode-nav">
      <button id="navKasir" class="active">
        <i class="fas fa-bolt"></i> <span>Transaksi</span>
      </button>
      <button id="navAdmin">
        <i class="fas fa-book"></i> <span>Buku Kas</span>
      </button>
    </nav>
    <div class="user-badge">
      <div class="avatar" id="avatarInit">HR</div>
    </div>
  </div>
</header>

<button class="jenis-toggle" id="jenisToggle"><i class="fas fa-bars"></i></button>

<!-- ==================== PAGE KASIR ==================== -->
<div class="page active" id="pageKasir">
  <div class="kasir-grid">

    <!-- KOLOM 1: JENIS TRANSAKSI -->
    <aside class="col-jenis" id="colJenis">
      <div class="jenis-title">Jenis Transaksi</div>
      <!-- Diisi JS -->
    </aside>

    <!-- KOLOM 2: KONTEN -->
    <section class="col-konten" id="colKonten">
      <!-- Diisi JS -->
    </section>

    <!-- KOLOM 3: BUKU KAS -->
    <aside class="col-kas" id="colKas">
      <div class="kas-head" id="kasHead">
        <div>
          <div class="lbl">Buku Kas Hari Ini</div>
          <h3>
            <span id="kasTotalTrx">0 transaksi</span>
            <span class="toggle-icon" style="display:none;">
              <i class="fas fa-chevron-up"></i>
            </span>
          </h3>
        </div>
      </div>

      <div class="kas-summary">
        <div class="item masuk">
          <span class="lbl">Komisi Hari Ini</span>
          <span class="val" id="kasKomisi">Rp 0</span>
        </div>
        <div class="item keluar">
          <span class="lbl">Fee / Biaya</span>
          <span class="val" id="kasFee">Rp 0</span>
        </div>
        <div class="item">
          <span class="lbl">Profit Bersih</span>
          <span class="val" id="kasProfit" style="color:var(--hijau);">Rp 0</span>
        </div>
      </div>

      <div class="kas-tabs" id="kasTabs">
        <button class="kas-tab active" data-filter="semua">Semua</button>
        <button class="kas-tab" data-filter="komisi">Komisi</button>
        <button class="kas-tab" data-filter="keluar">Pengeluaran</button>
      </div>

      <div class="kas-list" id="kasList"></div>
    </aside>

  </div>
</div>

<!-- ==================== PAGE ADMIN ==================== -->
<div class="page" id="pageAdmin">
  <div class="admin-wrap">
    <div class="admin-head">
      <h2>Laporan & Produk Digital<small>Rekap transaksi & kelola harga</small></h2>
      <div class="admin-actions">
        <button class="btn-outline" id="btnSetorSaldo">
          <i class="fas fa-money-bill-transfer"></i> Setor Saldo
        </button>
        <button class="btn-outline" id="btnResetData">
          <i class="fas fa-rotate"></i> Reset
        </button>
      </div>
    </div>

    <div class="stats-row">
      <div class="stat-card">
        <div class="lbl">Transaksi Hari Ini</div>
        <div class="val" id="sTrx">0</div>
        <div class="sub">total transaksi</div>
      </div>
      <div class="stat-card kuning">
        <div class="lbl">Volume Transaksi</div>
        <div class="val" id="sVolume" style="font-size:1.1rem;">Rp 0</div>
        <div class="sub">nilai yang diproses</div>
      </div>
      <div class="stat-card hijau">
        <div class="lbl">Komisi Hari Ini</div>
        <div class="val" id="sKomisi">Rp 0</div>
        <div class="sub">pendapatan agen</div>
      </div>
      <div class="stat-card hijau">
        <div class="lbl">Profit Bersih</div>
        <div class="val" id="sProfit" style="font-size:1.1rem;">Rp 0</div>
        <div class="sub">komisi − biaya</div>
      </div>
    </div>

    <div class="admin-section">
      <div class="section-head">
        <i class="fas fa-tags"></i> Produk Digital & Komisi
        <span class="spacer"></span>
        <span class="hint" id="produkCount">0 produk</span>
      </div>
      <div class="produk-digital-grid" id="produkGrid"></div>
    </div>

    <div class="admin-section">
      <div class="section-head">
        <i class="fas fa-list"></i> 10 Transaksi Terakhir
      </div>
      <table class="mutasi-table">
        <thead>
          <tr>
            <th>Kode</th>
            <th>Jenis</th>
            <th>Tujuan</th>
            <th>Nominal</th>
            <th>Komisi</th>
          </tr>
        </thead>
        <tbody id="mutasiBody"></tbody>
      </table>
    </div>
  </div>
</div>

</div>

<!-- ==================== MODAL KONFIRMASI TRANSAKSI ==================== -->
<div class="modal-bg" id="modalKonfirmasi">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Konfirmasi Transaksi</div>
        <h3><i class="fas fa-circle-check"></i> Periksa Data</h3>
        <div class="sub">Pastikan nomor tujuan & nominal sudah benar</div>
      </div>
      <button class="modal-close" id="closeKonfirmasi"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body" id="konfirmasiBody"></div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalKonfirmasi">Batal</button>
      <button class="btn-solid" id="btnProsesKonfirmasi">
        <i class="fas fa-bolt"></i> Proses Sekarang
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL STRUK ==================== -->
<div class="modal-bg" id="modalStruk">
  <div class="modal" style="max-width:400px;">
    <div class="modal-head">
      <div>
        <div class="kicker">Bukti Transaksi</div>
        <h3><i class="fas fa-receipt"></i> Struk Pelanggan</h3>
        <div class="sub">Berikan kepada pelanggan</div>
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

<!-- ==================== MODAL SETOR SALDO ==================== -->
<div class="modal-bg" id="modalSetor">
  <div class="modal" style="max-width:420px;">
    <div class="modal-head">
      <div>
        <div class="kicker">Setor Saldo</div>
        <h3><i class="fas fa-money-bill-transfer"></i> Setor ke Agen</h3>
        <div class="sub">Tambahan saldo untuk operasional</div>
      </div>
      <button class="modal-close" id="closeSetor"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div style="background:var(--biru-muda); border-radius:10px; padding:16px; margin-bottom:16px; text-align:center;">
        <div style="font-size:0.7rem; color:var(--abu); letter-spacing:1.5px; text-transform:uppercase; font-weight:600; margin-bottom:6px;">Saldo Saat Ini</div>
        <div style="font-family:'JetBrains Mono',monospace; font-size:1.5rem; font-weight:800; color:var(--biru-tua);" id="setorSaldoNow">Rp 0</div>
      </div>
      <label style="display:block; font-size:0.7rem; font-weight:700; color:var(--abu); text-transform:uppercase; letter-spacing:1px; margin-bottom:7px;">Jumlah Setor</label>
      <input type="number" id="setorJumlah" placeholder="0" min="0" step="100000" style="width:100%; padding:14px 16px; border:1.5px solid var(--line); border-radius:10px; font-family:'JetBrains Mono',monospace; font-size:1.05rem; font-weight:600; color:var(--biru-tua); outline:none;">
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalSetor">Batal</button>
      <button class="btn-solid" id="btnKonfirmasiSetor">
        <i class="fas fa-check"></i> Setor Sekarang
      </button>
    </div>
  </div>
</div>

<div class="toast" id="toast"><i class="fas fa-circle-check"></i> <span id="toastTxt"></span></div>

<script>
(function(){
  /* =========================================================
     DATA
  ========================================================= */
  const STORAGE_KEY = 'konter_digital_v1';

  // Kategori transaksi
  const KATEGORI = [
    { id:'pulsa', nama:'Pulsa & Data', icon:'fa-mobile-screen-button', tipe:'nominal', prefix:'0' },
    { id:'token', nama:'Token Listrik', icon:'fa-bolt', tipe:'nominal', prefix:'1' },
    { id:'ewallet', nama:'E-Wallet', icon:'fa-wallet', tipe:'nominal', prefix:'08' },
    { id:'transfer', nama:'Transfer Bank', icon:'fa-building-columns', tipe:'manual' },
    { id:'tagihan', nama:'Bayar Tagihan', icon:'fa-file-invoice-dollar', tipe:'manual' },
    { id:'bpjs', nama:'BPJS Kesehatan', icon:'fa-heart-pulse', tipe:'manual' }
  ];

  const defaultProduk = [
    // PULSA & DATA
    { id:1, kategori:'pulsa', kode:'TSEL-5K', nama:'Telkomsel 5.000', nominal:5000, harga:6500, komisi:800 },
    { id:2, kategori:'pulsa', kode:'TSEL-10K', nama:'Telkomsel 10.000', nominal:10000, harga:11500, komisi:1000 },
    { id:3, kategori:'pulsa', kode:'TSEL-25K', nama:'Telkomsel 25.000', nominal:25000, harga:26500, komisi:1200 },
    { id:4, kategori:'pulsa', kode:'TSEL-50K', nama:'Telkomsel 50.000', nominal:50000, harga:51500, komisi:1500 },
    { id:5, kategori:'pulsa', kode:'TSEL-100K', nama:'Telkomsel 100.000', nominal:100000, harga:101500, komisi:2000 },
    { id:6, kategori:'pulsa', kode:'IND-5K', nama:'Indosat 5.000', nominal:5000, harga:6300, komisi:800 },
    { id:7, kategori:'pulsa', kode:'IND-25K', nama:'Indosat 25.000', nominal:25000, harga:26000, komisi:1200 },
    { id:8, kategori:'pulsa', kode:'XL-10K', nama:'XL 10.000', nominal:10000, harga:11300, komisi:1000 },
    { id:9, kategori:'pulsa', kode:'TRI-25K', nama:'Tri 25.000', nominal:25000, harga:25500, komisi:1300 },
    // TOKEN LISTRIK
    { id:10, kategori:'token', kode:'PLN-20K', nama:'Token PLN 20.000', nominal:20000, harga:21500, komisi:1000 },
    { id:11, kategori:'token', kode:'PLN-50K', nama:'Token PLN 50.000', nominal:50000, harga:51500, komisi:1500 },
    { id:12, kategori:'token', kode:'PLN-100K', nama:'Token PLN 100.000', nominal:100000, harga:101500, komisi:2000 },
    { id:13, kategori:'token', kode:'PLN-200K', nama:'Token PLN 200.000', nominal:200000, harga:202000, komisi:2500 },
    { id:14, kategori:'token', kode:'PLN-500K', nama:'Token PLN 500.000', nominal:500000, harga:502500, komisi:4000 },
    // E-WALLET
    { id:15, kategori:'ewallet', kode:'GOPAY-50K', nama:'GoPay 50.000', nominal:50000, harga:52000, komisi:1500 },
    { id:16, kategori:'ewallet', kode:'OVO-50K', nama:'OVO 50.000', nominal:50000, harga:52000, komisi:1500 },
    { id:17, kategori:'ewallet', kode:'DANA-50K', nama:'DANA 50.000', nominal:50000, harga:52000, komisi:1500 },
    { id:18, kategori:'ewallet', kode:'SHOPEE-50K', nama:'ShopeePay 50.000', nominal:50000, harga:52000, komisi:1500 }
  ];

  // Produk default untuk transfer (fee tetap)
  const TRANSFER_BANKS = [
    { kode:'BCA', nama:'Bank BCA', fee:5000 },
    { kode:'MANDIRI', nama:'Bank Mandiri', fee:5000 },
    { kode:'BNI', nama:'Bank BNI', fee:5000 },
    { kode:'BRI', nama:'Bank BRI', fee:5000 },
    { kode:'BSI', nama:'Bank Syariah Indonesia', fee:5000 },
    { kode:'DANA', nama:'DANA', fee:3000 }
  ];

  let data;
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    data = raw ? JSON.parse(raw) : null;
  } catch(e) { data = null; }

  if (!data) {
    data = {
      saldo: 500000,
      produk: JSON.parse(JSON.stringify(defaultProduk)),
      transaksi: [],
      counter: 1
    };
  }
  const save = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(data));

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

  function updateTopSaldo() {
    document.getElementById('topSaldo').textContent = rp(data.saldo);
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
    document.getElementById('avatarInit').textContent = 'HR';
    renderKasir();
    if (window.innerWidth <= 720) updateBottomBar();
  });

  navAdmin.addEventListener('click', () => {
    navAdmin.classList.add('active');
    navKasir.classList.remove('active');
    pageAdmin.classList.add('active');
    pageKasir.classList.remove('active');
    document.getElementById('avatarInit').textContent = 'HR';
    renderAdmin();
  });

  /* =========================================================
     STATE KASIR
  ========================================================= */
  let kategoriAktif = 'pulsa';
  let produkTerpilih = null;
  let nomorTujuan = '';
  let nominalCustom = null;
  let transaksiPending = null;
  let kasFilter = 'semua';

  /* =========================================================
     RENDER KASIR
  ========================================================= */
  function renderKasir() {
    renderJenisSidebar();
    renderKonten();
    renderKasList();
    updateTopSaldo();
  }

  function renderJenisSidebar() {
    const col = document.getElementById('colJenis');
    col.innerHTML = '<div class="jenis-title">Jenis Transaksi</div>' +
      KATEGORI.map(k => `
        <button class="jenis-btn ${k.id === kategoriAktif ? 'active' : ''}" data-kat="${k.id}">
          <i class="fas ${k.icon}"></i> ${k.nama}
        </button>
      `).join('');

    col.querySelectorAll('.jenis-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        kategoriAktif = btn.dataset.kat;
        produkTerpilih = null;
        nomorTujuan = '';
        nominalCustom = null;
        renderKasir();
        if (window.innerWidth <= 1100) {
          document.getElementById('colJenis').classList.remove('mobile-show');
          document.getElementById('jenisToggle').classList.remove('active');
        }
      });
    });
  }

  function renderKonten() {
    const konten = document.getElementById('colKonten');
    const kat = KATEGORI.find(k => k.id === kategoriAktif);

    if (kategoriAktif === 'transfer') {
      renderTransfer(konten, kat);
      return;
    }
    if (kategoriAktif === 'tagihan') {
      renderTagihan(konten, kat);
      return;
    }
    if (kategoriAktif === 'bpjs') {
      renderBPJS(konten, kat);
      return;
    }
    renderNominal(konten, kat);
  }

  /* --- PULSA / TOKEN / EWALLET --- */
  function renderNominal(konten, kat) {
    const produkKat = data.produk.filter(p => p.kategori === kat.id);

    konten.innerHTML = `
      <div class="konten-head">
        <div class="kicker">${kat.nama}</div>
        <h2>${kat.nama}</h2>
        <div class="sub">Pilih nominal, masukkan nomor tujuan, lalu proses.</div>
      </div>

      <div class="input-nomor">
        <div class="field">
          <label>Nomor Tujuan</label>
          <input type="tel" id="inputNomor" placeholder="${kategoriAktif === 'token' ? 'Masukkan 11-12 digit ID Meter' : 'Masukkan nomor HP'}" value="${nomorTujuan}" maxlength="15">
        </div>
      </div>

      <div class="nominal-grid" id="nominalGrid">
        ${produkKat.map(p => `
          <div class="nominal-btn ${produkTerpilih && produkTerpilih.id === p.id ? 'selected' : ''}" data-id="${p.id}">
            <div class="nominal">${rp(p.nominal)}</div>
            <div class="harga">Bayar ${rp(p.harga)}</div>
          </div>
        `).join('')}
      </div>

      <div id="ringkasanContainer"></div>
    `;

    // Input nomor
    const inputNomor = document.getElementById('inputNomor');
    inputNomor.addEventListener('input', e => {
      nomorTujuan = e.target.value;
      updateRingkasan(kat);
    });

    // Pilih nominal
    document.querySelectorAll('.nominal-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = parseInt(btn.dataset.id);
        produkTerpilih = data.produk.find(p => p.id === id);
        document.querySelectorAll('.nominal-btn').forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');
        updateRingkasan(kat);
      });
    });

    updateRingkasan(kat);
  }

  function updateRingkasan(kat) {
    const container = document.getElementById('ringkasanContainer');
    if (!container) return;

    if (!produkTerpilih) {
      container.innerHTML = '';
      return;
    }

    const p = produkTerpilih;
    const valid = nomorTujuan.trim().length >= 8;

    container.innerHTML = `
      <div class="ringkasan-box">
        <div class="row"><span>Produk</span><strong>${p.nama}</strong></div>
        <div class="row"><span>Nomor Tujuan</span><strong>${nomorTujuan || '—'}</strong></div>
        <div class="row"><span>Nominal</span><strong>${rp(p.nominal)}</strong></div>
        <div class="row"><span>Harga Jual</span><strong>${rp(p.harga)}</strong></div>
        <div class="row komisi">
          <span><i class="fas fa-coins"></i> Komisi Agen</span>
          <strong>${rp(p.komisi)}</strong>
        </div>
      </div>
      <button class="btn-proses" id="btnProsesTrx" ${!valid ? 'disabled' : ''}>
        <i class="fas fa-bolt"></i> Proses Transaksi
      </button>
    `;

    const btn = document.getElementById('btnProsesTrx');
    if (btn && valid) {
      btn.addEventListener('click', () => {
        bukaKonfirmasi({
          jenis: kat.nama,
          kategori: kat.id,
          produk: p,
          nomor: nomorTujuan,
          total: p.harga,
          komisi: p.komisi,
          fee: 0
        });
      });
    }
  }

  /* --- TRANSFER BANK --- */
  function renderTransfer(konten, kat) {
    konten.innerHTML = `
      <div class="konten-head">
        <div class="kicker">Transfer Bank</div>
        <h2>Transfer Antar Bank</h2>
        <div class="sub">Fee Rp 5.000 · Proses real-time</div>
      </div>

      <div class="input-nomor">
        <div class="field">
          <label>Bank Tujuan</label>
          <select id="inputBank">
            <option value="">— Pilih Bank —</option>
            ${TRANSFER_BANKS.map(b => `<option value="${b.kode}">${b.nama}</option>`).join('')}
          </select>
        </div>
        <div class="field">
          <label>Nomor Rekening Tujuan</label>
          <input type="tel" id="inputRek" placeholder="Masukkan nomor rekening" maxlength="20">
        </div>
        <div class="field">
          <label>Nominal Transfer</label>
          <input type="number" id="inputNominalTransfer" placeholder="Contoh: 500000" min="10000" step="10000">
        </div>
      </div>

      <div id="ringkasanTransferContainer"></div>
    `;

    ['inputBank','inputRek','inputNominalTransfer'].forEach(id => {
      document.getElementById(id).addEventListener('input', updateRingkasanTransfer);
      document.getElementById(id).addEventListener('change', updateRingkasanTransfer);
    });

    function updateRingkasanTransfer() {
      const bank = document.getElementById('inputBank').value;
      const rek = document.getElementById('inputRek').value.trim();
      const nominal = parseInt(document.getElementById('inputNominalTransfer').value) || 0;

      const container = document.getElementById('ringkasanTransferContainer');
      if (!bank || !rek || !nominal) {
        container.innerHTML = '';
        return;
      }

      const bankData = TRANSFER_BANKS.find(b => b.kode === bank);
      const fee = bankData.fee;
      const komisi = Math.round(fee * 0.6); // 60% fee jadi komisi agen
      const total = nominal + fee;
      const valid = rek.length >= 8 && nominal >= 10000;

      container.innerHTML = `
        <div class="ringkasan-box">
          <div class="row"><span>Bank Tujuan</span><strong>${bankData.nama}</strong></div>
          <div class="row"><span>Nomor Rekening</span><strong>${rek}</strong></div>
          <div class="row"><span>Nominal Transfer</span><strong>${rp(nominal)}</strong></div>
          <div class="row"><span>Fee Admin</span><strong>${rp(fee)}</strong></div>
          <div class="row total"><span>TOTAL BAYAR</span><span>${rp(total)}</span></div>
          <div class="row komisi">
            <span><i class="fas fa-coins"></i> Komisi Agen</span>
            <strong>${rp(komisi)}</strong>
          </div>
        </div>
        <button class="btn-proses" id="btnProsesTransfer" ${!valid ? 'disabled' : ''}>
          <i class="fas fa-bolt"></i> Proses Transfer
        </button>
      `;

      const btn = document.getElementById('btnProsesTransfer');
      if (btn && valid) {
        btn.addEventListener('click', () => {
          bukaKonfirmasi({
            jenis: 'Transfer Bank',
            kategori: 'transfer',
            produk: { nama: `Transfer ke ${bankData.nama}`, kode: 'TRF-' + bank, nominal: nominal },
            nomor: rek,
            total: total,
            komisi: komisi,
            fee: fee,
            transferInfo: { bank: bankData.nama, nominalTransfer: nominal }
          });
        });
      }
    }
  }

  /* --- BAYAR TAGIHAN --- */
  function renderTagihan(konten, kat) {
    const tagihanList = [
      { kode:'PLN-PASCA', nama:'Listrik PLN Pascabayar', fee:2500, komisi:1500 },
      { kode:'PDAM', nama:'PDAM Air Minum', fee:2500, komisi:1500 },
      { kode:'TELKOM', nama:'Telkom / IndiHome', fee:2500, komisi:1500 },
      { kode:'BPJS-KES', nama:'BPJS Kesehatan', fee:2500, komisi:1500 },
      { kode:'BPJS-TK', nama:'BPJS Ketenagakerjaan', fee:2500, komisi:1500 },
      { kode:'SAMSAT', nama:'Samsat / Pajak Kendaraan', fee:5000, komisi:3000 }
    ];

    konten.innerHTML = `
      <div class="konten-head">
        <div class="kicker">Bayar Tagihan</div>
        <h2>Bayar Tagihan Bulanan</h2>
        <div class="sub">Pilih jenis tagihan dan masukkan nomor pelanggan.</div>
      </div>

      <div class="input-nomor">
        <div class="field">
          <label>Jenis Tagihan</label>
          <select id="inputTagihan">
            <option value="">— Pilih Tagihan —</option>
            ${tagihanList.map(t => `<option value="${t.kode}">${t.nama}</option>`).join('')}
          </select>
        </div>
        <div class="field">
          <label>Nomor Pelanggan</label>
          <input type="tel" id="inputPelanggan" placeholder="Masukkan nomor pelanggan" maxlength="20">
        </div>
        <div class="field">
          <label>Nominal Tagihan</label>
          <input type="number" id="inputTagihanNominal" placeholder="Contoh: 250000" min="10000" step="1000">
        </div>
      </div>

      <div id="ringkasanTagihanContainer"></div>
    `;

    ['inputTagihan','inputPelanggan','inputTagihanNominal'].forEach(id => {
      document.getElementById(id).addEventListener('input', update);
      document.getElementById(id).addEventListener('change', update);
    });

    function update() {
      const kode = document.getElementById('inputTagihan').value;
      const pel = document.getElementById('inputPelanggan').value.trim();
      const nominal = parseInt(document.getElementById('inputTagihanNominal').value) || 0;

      const container = document.getElementById('ringkasanTagihanContainer');
      if (!kode || !pel || !nominal) {
        container.innerHTML = '';
        return;
      }

      const tag = tagihanList.find(t => t.kode === kode);
      const fee = tag.fee;
      const komisi = tag.komisi;
      const total = nominal + fee;
      const valid = pel.length >= 5 && nominal >= 10000;

      container.innerHTML = `
        <div class="ringkasan-box">
          <div class="row"><span>Jenis</span><strong>${tag.nama}</strong></div>
          <div class="row"><span>No. Pelanggan</span><strong>${pel}</strong></div>
          <div class="row"><span>Nominal Tagihan</span><strong>${rp(nominal)}</strong></div>
          <div class="row"><span>Fee Admin</span><strong>${rp(fee)}</strong></div>
          <div class="row total"><span>TOTAL BAYAR</span><span>${rp(total)}</span></div>
          <div class="row komisi">
            <span><i class="fas fa-coins"></i> Komisi Agen</span>
            <strong>${rp(komisi)}</strong>
          </div>
        </div>
        <button class="btn-proses" id="btnProsesTagihan" ${!valid ? 'disabled' : ''}>
          <i class="fas fa-bolt"></i> Proses Pembayaran
        </button>
      `;

      const btn = document.getElementById('btnProsesTagihan');
      if (btn && valid) {
        btn.addEventListener('click', () => {
          bukaKonfirmasi({
            jenis: 'Bayar Tagihan',
            kategori: 'tagihan',
            produk: { nama: tag.nama, kode: kode, nominal: nominal },
            nomor: pel,
            total: total,
            komisi: komisi,
            fee: fee
          });
        });
      }
    }
  }

  /* --- BPJS --- */
  function renderBPJS(konten, kat) {
    konten.innerHTML = `
      <div class="konten-head">
        <div class="kicker">BPJS Kesehatan</div>
        <h2>Bayar Iuran BPJS</h2>
        <div class="sub">Bayar iuran bulanan BPJS Kesehatan</div>
      </div>

      <div class="input-nomor">
        <div class="field">
          <label>Nomor Kartu BPJS</label>
          <input type="tel" id="inputBPJS" placeholder="13 digit nomor kartu" maxlength="13">
        </div>
        <div class="field">
          <label>Jumlah Bulan</label>
          <select id="inputBulan">
            <option value="1">1 Bulan</option>
            <option value="2">2 Bulan</option>
            <option value="3">3 Bulan</option>
            <option value="6">6 Bulan</option>
            <option value="12">12 Bulan</option>
          </select>
        </div>
        <div class="field">
          <label>Iuran per Bulan</label>
          <input type="number" id="inputIuran" value="150000" min="35000" step="5000">
        </div>
      </div>

      <div id="ringkasanBPJSContainer"></div>
    `;

    ['inputBPJS','inputBulan','inputIuran'].forEach(id => {
      document.getElementById(id).addEventListener('input', update);
      document.getElementById(id).addEventListener('change', update);
    });

    function update() {
      const noBpjs = document.getElementById('inputBPJS').value.trim();
      const bulan = parseInt(document.getElementById('inputBulan').value) || 1;
      const iuran = parseInt(document.getElementById('inputIuran').value) || 0;

      const container = document.getElementById('ringkasanBPJSContainer');
      if (!noBpjs || !iuran) {
        container.innerHTML = '';
        return;
      }

      const fee = 2500;
      const komisi = 1500;
      const subtotal = iuran * bulan;
      const total = subtotal + fee;
      const valid = noBpjs.length === 13;

      container.innerHTML = `
        <div class="ringkasan-box">
          <div class="row"><span>No. Kartu BPJS</span><strong>${noBpjs}</strong></div>
          <div class="row"><span>Iuran × Bulan</span><strong>${rp(iuran)} × ${bulan}</strong></div>
          <div class="row"><span>Subtotal</span><strong>${rp(subtotal)}</strong></div>
          <div class="row"><span>Fee Admin</span><strong>${rp(fee)}</strong></div>
          <div class="row total"><span>TOTAL BAYAR</span><span>${rp(total)}</span></div>
          <div class="row komisi">
            <span><i class="fas fa-coins"></i> Komisi Agen</span>
            <strong>${rp(komisi)}</strong>
          </div>
        </div>
        <button class="btn-proses" id="btnProsesBPJS" ${!valid ? 'disabled' : ''}>
          <i class="fas fa-bolt"></i> Proses Bayar BPJS
        </button>
      `;

      const btn = document.getElementById('btnProsesBPJS');
      if (btn && valid) {
        btn.addEventListener('click', () => {
          bukaKonfirmasi({
            jenis: 'BPJS Kesehatan',
            kategori: 'bpjs',
            produk: { nama: `BPJS ${bulan} bulan`, kode: 'BPJS', nominal: subtotal },
            nomor: noBpjs,
            total: total,
            komisi: komisi,
            fee: fee
          });
        });
      }
    }
  }

  /* =========================================================
     BUKA KONFIRMASI
  ========================================================= */
  const modalKonfirmasi = document.getElementById('modalKonfirmasi');

  function bukaKonfirmasi(trx) {
    if (data.saldo < trx.total && trx.kategori !== 'transfer') {
      toast('Saldo agen tidak cukup. Setor dulu.', 'fa-exclamation-circle');
      return;
    }
    transaksiPending = trx;

    document.getElementById('konfirmasiBody').innerHTML = `
      <div class="konfirmasi-box">
        <div class="row"><span class="lbl">Jenis</span><span class="val">${trx.jenis}</span></div>
        <div class="row"><span class="lbl">${trx.kategori === 'token' ? 'ID Meter' : trx.kategori === 'transfer' ? 'No. Rekening' : trx.kategori === 'bpjs' ? 'No. Kartu' : 'Nomor Tujuan'}</span><span class="val">${trx.nomor}</span></div>
        <div class="row"><span class="lbl">Produk</span><span class="val">${trx.produk.nama}</span></div>
        ${trx.produk.nominal ? `<div class="row"><span class="lbl">Nominal</span><span class="val">${rp(trx.produk.nominal)}</span></div>` : ''}
        ${trx.fee > 0 ? `<div class="row"><span class="lbl">Fee</span><span class="val">${rp(trx.fee)}</span></div>` : ''}
        <div class="row total"><span class="lbl">TOTAL</span><span class="val">${rp(trx.total)}</span></div>
      </div>
      <div style="background:#e8f5ee; border-radius:10px; padding:14px; display:flex; justify-content:space-between; align-items:center;">
        <span style="font-size:0.82rem; color:var(--hijau); font-weight:600;">
          <i class="fas fa-coins"></i> Komisi Agen
        </span>
        <span style="font-family:'JetBrains Mono',monospace; font-weight:800; color:var(--hijau); font-size:1.05rem;">${rp(trx.komisi)}</span>
      </div>
    `;

    modalKonfirmasi.classList.add('show');
  }

  document.getElementById('closeKonfirmasi').addEventListener('click', () => {
    modalKonfirmasi.classList.remove('show');
    transaksiPending = null;
  });
  document.getElementById('btnBatalKonfirmasi').addEventListener('click', () => {
    modalKonfirmasi.classList.remove('show');
    transaksiPending = null;
  });

  document.getElementById('btnProsesKonfirmasi').addEventListener('click', () => {
    if (!transaksiPending) return;
    prosesTransaksi(transaksiPending);
  });

  /* =========================================================
     PROSES TRANSAKSI
  ========================================================= */
  function prosesTransaksi(trx) {
    const now = new Date();
    const kodeTrx = 'TRX' + now.getFullYear().toString().slice(-2) +
                    String(now.getMonth()+1).padStart(2,'0') +
                    String(now.getDate()).padStart(2,'0') +
                    '-' + String(data.counter).padStart(4,'0');

    const trxData = {
      id: 't' + Date.now(),
      kode: kodeTrx,
      waktu: now.toISOString(),
      jenis: trx.jenis,
      kategori: trx.kategori,
      produk: trx.produk.nama,
      produkKode: trx.produk.kode,
      nomor: trx.nomor,
      nominal: trx.produk.nominal || trx.total,
      total: trx.total,
      fee: trx.fee,
      komisi: trx.komisi,
      status: 'sukses',
      transferInfo: trx.transferInfo || null
    };

    // Update saldo agen
    // Saldo berkurang sesuai total yang dibayarkan pelanggan (bukan nominal, tapi harga jual)
    // Kalau transfer, saldo berkurang nominal transfer + fee
    data.saldo -= trx.total;

    // Tambah komisi ke saldo
    data.saldo += trx.komisi;

    data.transaksi.unshift(trxData);
    data.counter++;
    save();

    modalKonfirmasi.classList.remove('show');
    transaksiPending = null;

    updateTopSaldo();
    renderKasir();
    tampilkanStruk(trxData);
    toast(`Transaksi ${kodeTrx} berhasil`, 'fa-circle-check');
  }

  /* =========================================================
     STRUK
  ========================================================= */
  const modalStruk = document.getElementById('modalStruk');

  function tampilkanStruk(trx) {
    const waktu = new Date(trx.waktu).toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' });

    const labelNomor = trx.kategori === 'token' ? 'ID Meter'
                     : trx.kategori === 'transfer' ? 'Rekening Tujuan'
                     : trx.kategori === 'bpjs' ? 'No. Kartu'
                     : 'Nomor Tujuan';

    document.getElementById('strukBody').innerHTML = `
      <div class="struk">
        <div class="s-head">
          <h4>KONTER DIGITAL</h4>
          <p>Agen BRILink & PPOB<br>
          Jl. Merdeka No. 88, Jakarta<br>
          HP/WA: 0812-3456-7890</p>
        </div>

        <div class="s-sukses">✓ TRANSAKSI BERHASIL</div>

        <div class="s-meta">
          <strong>${trx.kode}</strong><br>
          ${waktu}<br>
          Agen: Konter Digital
        </div>

        <div class="s-line"></div>

        <div class="s-row"><span>Jenis</span><span class="val">${trx.jenis}</span></div>
        <div class="s-row"><span>Produk</span><span class="val">${trx.produk}</span></div>
        <div class="s-row"><span>${labelNomor}</span><span class="val">${trx.nomor}</span></div>
        ${trx.nominal ? `<div class="s-row"><span>Nominal</span><span class="val">${rp(trx.nominal)}</span></div>` : ''}
        ${trx.fee > 0 ? `<div class="s-row"><span>Fee Admin</span><span class="val">${rp(trx.fee)}</span></div>` : ''}

        <div class="s-total">
          <span>TOTAL BAYAR</span>
          <span>${rp(trx.total)}</span>
        </div>

        <div class="s-foot">
          Simpan struk ini sebagai bukti transaksi<br>
          Terima kasih telah menggunakan layanan kami<br>
          <strong style="color:var(--biru-tua);">KONTER DIGITAL · Cepat · Terpercaya</strong>
        </div>
      </div>
    `;
    modalStruk.classList.add('show');
  }

  document.getElementById('closeStruk').addEventListener('click', () => modalStruk.classList.remove('show'));
  document.getElementById('btnTutupStruk').addEventListener('click', () => modalStruk.classList.remove('show'));
  document.getElementById('btnCetakStruk').addEventListener('click', () => {
    const w = window.open('', '', 'width=380,height=620');
    w.document.write('<pre style="font-family:Courier New,monospace; font-size:11px; padding:16px; white-space:pre-wrap;">' +
      document.getElementById('strukBody').innerText + '</pre>');
    w.document.close(); w.focus(); w.print();
    toast('Struk dikirim ke printer', 'fa-print');
  });

  /* =========================================================
     BUKU KAS
  ========================================================= */
  function renderKasList() {
    const today = new Date().toDateString();
    const trxHariIni = data.transaksi.filter(t => new Date(t.waktu).toDateString() === today);

    // Summary
    const totalKomisi = trxHariIni.reduce((s, t) => s + t.komisi, 0);
    const totalFee = trxHariIni.reduce((s, t) => s + (t.fee || 0), 0);
    const profit = totalKomisi;

    document.getElementById('kasTotalTrx').textContent = trxHariIni.length + ' transaksi';
    document.getElementById('kasKomisi').textContent = rp(totalKomisi);
    document.getElementById('kasFee').textContent = rp(totalFee);
    document.getElementById('kasProfit').textContent = rp(profit);

    // List
    let transaksi = trxHariIni.slice();
    if (kasFilter === 'komisi') {
      transaksi = transaksi.filter(t => t.komisi > 0);
    } else if (kasFilter === 'keluar') {
      transaksi = transaksi.filter(t => t.fee > 0);
    }

    const list = document.getElementById('kasList');
    if (transaksi.length === 0) {
      list.innerHTML = `
        <div class="kas-empty">
          <i class="fas fa-receipt"></i>
          Belum ada transaksi hari ini
        </div>`;
      return;
    }

    list.innerHTML = transaksi.map(t => {
      const waktu = new Date(t.waktu).toLocaleTimeString('id-ID', { hour:'2-digit', minute:'2-digit' });
      return `
        <div class="kas-item ${t.kategori === 'transfer' ? 'transfer-keluar' : ''}">
          <div class="top">
            <div class="jenis">${t.jenis}</div>
            <div class="jumlah ${t.kategori === 'transfer' ? 'keluar' : 'masuk'}">
              ${t.kategori === 'transfer' ? '-' : '+'} ${rp(t.komisi)}
            </div>
          </div>
          <div class="meta">
            <span class="ref">${t.kode}</span>
            <span>${waktu}</span>
            <span>${t.produk}</span>
          </div>
        </div>
      `;
    }).join('');
  }

  document.querySelectorAll('.kas-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.kas-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      kasFilter = tab.dataset.filter;
      renderKasList();
    });
  });

  /* =========================================================
     BOTTOM SHEET MOBILE
  ========================================================= */
  const colKas = document.getElementById('colKas');
  const kasHead = document.getElementById('kasHead');

  kasHead.addEventListener('click', () => {
    if (window.innerWidth > 720) return;
    colKas.classList.toggle('expanded');
  });

  function updateBottomBar() {
    if (window.innerWidth <= 720 && data.transaksi.length === 0) {
      colKas.classList.remove('expanded');
    }
  }

  /* =========================================================
     JENIS TOGGLE (tablet)
  ========================================================= */
  document.getElementById('jenisToggle').addEventListener('click', () => {
    const col = document.getElementById('colJenis');
    const btn = document.getElementById('jenisToggle');
    col.classList.toggle('mobile-show');
    btn.classList.toggle('active');
    btn.innerHTML = col.classList.contains('mobile-show')
      ? '<i class="fas fa-times"></i>'
      : '<i class="fas fa-bars"></i>';
  });

  /* =========================================================
     ADMIN
  ========================================================= */
  function renderAdmin() {
    const today = new Date().toDateString();
    const trxHariIni = data.transaksi.filter(t => new Date(t.waktu).toDateString() === today);

    const totalTrx = trxHariIni.length;
    const totalVolume = trxHariIni.reduce((s, t) => s + t.total, 0);
    const totalKomisi = trxHariIni.reduce((s, t) => s + t.komisi, 0);
    const totalFee = trxHariIni.reduce((s, t) => s + (t.fee || 0), 0);
    const profit = totalKomisi;

    document.getElementById('sTrx').textContent = totalTrx;
    document.getElementById('sVolume').textContent = rp(totalVolume);
    document.getElementById('sKomisi').textContent = rp(totalKomisi);
    document.getElementById('sProfit').textContent = rp(profit);

    // Produk grid
    const grid = document.getElementById('produkGrid');
    document.getElementById('produkCount').textContent = data.produk.length + ' produk';
    grid.innerHTML = data.produk.map(p => `
      <div class="produk-card">
        <div class="kode">${p.kode}</div>
        <div class="nama">${p.nama}</div>
        <div class="harga">${rp(p.harga)}</div>
        <div class="komisi">Komisi ${rp(p.komisi)}</div>
      </div>
    `).join('');

    // Mutasi terakhir
    const tbody = document.getElementById('mutasiBody');
    const last = data.transaksi.slice(0, 10);
    if (last.length === 0) {
      tbody.innerHTML = '<tr><td colspan="5" style="text-align:center; padding:30px; color:var(--abu);">Belum ada transaksi</td></tr>';
    } else {
      tbody.innerHTML = last.map(t => `
        <tr>
          <td class="mono">${t.kode}</td>
          <td>${t.jenis}</td>
          <td class="mono">${t.nomor}</td>
          <td class="mono">${rp(t.total)}</td>
          <td class="masuk">+ ${rp(t.komisi)}</td>
        </tr>
      `).join('');
    }
  }

  /* =========================================================
     SETOR SALDO
  ========================================================= */
  const modalSetor = document.getElementById('modalSetor');

  document.getElementById('btnSetorSaldo').addEventListener('click', () => {
    document.getElementById('setorSaldoNow').textContent = rp(data.saldo);
    document.getElementById('setorJumlah').value = '';
    modalSetor.classList.add('show');
  });

  document.getElementById('closeSetor').addEventListener('click', () => modalSetor.classList.remove('show'));
  document.getElementById('btnBatalSetor').addEventListener('click', () => modalSetor.classList.remove('show'));

  document.getElementById('btnKonfirmasiSetor').addEventListener('click', () => {
    const jumlah = parseInt(document.getElementById('setorJumlah').value);
    if (!jumlah || jumlah <= 0) {
      toast('Masukkan jumlah yang valid', 'fa-exclamation-circle');
      return;
    }
    data.saldo += jumlah;
    save();
    updateTopSaldo();
    renderAdmin();
    modalSetor.classList.remove('show');
    toast(`Saldo ditambah ${rp(jumlah)}`, 'fa-money-bill-transfer');
  });

  /* =========================================================
     RESET DATA
  ========================================================= */
  document.getElementById('btnResetData').addEventListener('click', () => {
    if (!confirm('Reset semua data ke default? Saldo akan kembali ke Rp 500.000.')) return;
    data = {
      saldo: 500000,
      produk: JSON.parse(JSON.stringify(defaultProduk)),
      transaksi: [],
      counter: 1
    };
    save();
    updateTopSaldo();
    renderAdmin();
    renderKasir();
    toast('Data direset', 'fa-rotate');
  });

  /* =========================================================
     INIT
  ========================================================= */
  renderKasir();
  updateTopSaldo();
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>