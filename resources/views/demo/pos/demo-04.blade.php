@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Garasi Prima — POS Bengkel</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; }
body {
  font-family:'Inter',system-ui,sans-serif;
  background:#0f0f0f;
  color:#e8e8e8;
  min-height:100vh;
  font-size:14px;
}

/* ===== APP FRAME ===== */
.app {
  max-width:1560px;
  margin:0 auto;
  background:#1a1a1a;
  min-height:100vh;
  display:flex; flex-direction:column;
}

/* ===== HEADER ===== */
.topbar {
  background:#0a0a0a;
  padding:0 24px;
  height:64px;
  display:flex; align-items:center; justify-content:space-between;
  border-bottom:3px solid #ff6b1a;
  position:sticky; top:0; z-index:50;
}
.brand {
  display:flex; align-items:center; gap:14px;
}
.brand-mark {
  width:42px; height:42px;
  background:#ff6b1a;
  display:flex; align-items:center; justify-content:center;
  font-size:1.15rem;
  color:#0a0a0a;
  transform:rotate(-3deg);
  border-radius:4px;
}
.brand h1 {
  font-family:'Oswald',sans-serif;
  font-size:1.25rem;
  font-weight:700;
  letter-spacing:1.5px;
  text-transform:uppercase;
  color:#ffffff;
  line-height:1;
}
.brand h1 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.6rem;
  font-weight:500;
  letter-spacing:2.5px;
  color:#7a7a7a;
  margin-top:4px;
}

.topbar-right { display:flex; align-items:center; gap:14px; }
.mode-nav {
  display:flex;
  background:#1a1a1a;
  border:1px solid #2a2a2a;
  padding:4px;
  border-radius:6px;
}
.mode-nav button {
  background:transparent;
  border:none;
  color:#7a7a7a;
  padding:8px 16px;
  border-radius:4px;
  cursor:pointer;
  font-family:'Oswald',sans-serif;
  font-size:0.78rem;
  font-weight:600;
  letter-spacing:1px;
  text-transform:uppercase;
  display:flex; align-items:center; gap:7px;
  transition:all 0.12s;
}
.mode-nav button:hover { color:#ffffff; }
.mode-nav button.active {
  background:#ff6b1a;
  color:#0a0a0a;
}
.user-badge {
  display:flex; align-items:center; gap:10px;
  background:#1a1a1a;
  border:1px solid #2a2a2a;
  padding:6px 14px 6px 8px;
  border-radius:6px;
}
.user-badge .avatar {
  width:30px; height:30px;
  background:#ff6b1a;
  color:#0a0a0a;
  display:flex; align-items:center; justify-content:center;
  font-family:'Oswald',sans-serif;
  font-weight:700;
  font-size:0.78rem;
  border-radius:3px;
}
.user-badge .info { line-height:1.15; }
.user-badge .name {
  font-size:0.78rem; font-weight:600; color:#ffffff;
}
.user-badge .role {
  font-size:0.6rem; color:#7a7a7a;
  text-transform:uppercase; letter-spacing:0.8px;
}

/* ===== PAGE ===== */
.page { display:none; flex:1; overflow:hidden; }
.page.active { display:flex; flex-direction:column; }

/* ===== KASIR: 3 KOLOM ===== */
.kasir-grid {
  display:grid;
  grid-template-columns:320px 1fr 320px;
  gap:0;
  flex:1;
  min-height:0;
}

/* === KOLOM 1: WORK ORDER QUEUE === */
.col-queue {
  background:#141414;
  border-right:1px solid #2a2a2a;
  display:flex; flex-direction:column;
  min-height:0;
}
.queue-head {
  padding:18px 18px 14px;
  border-bottom:1px solid #2a2a2a;
}
.queue-head .kicker {
  font-family:'Oswald',sans-serif;
  font-size:0.65rem;
  color:#ff6b1a;
  font-weight:600;
  letter-spacing:2.5px;
  text-transform:uppercase;
  margin-bottom:5px;
}
.queue-head h3 {
  font-family:'Oswald',sans-serif;
  font-size:1.05rem;
  font-weight:600;
  color:#ffffff;
  letter-spacing:0.8px;
  text-transform:uppercase;
  display:flex; align-items:center; justify-content:space-between;
}
.queue-head .count-badge {
  background:#ff6b1a;
  color:#0a0a0a;
  font-family:'Inter',sans-serif;
  font-size:0.68rem;
  font-weight:700;
  padding:2px 10px;
  border-radius:20px;
}

.queue-list {
  flex:1;
  overflow-y:auto;
  padding:12px;
  display:flex; flex-direction:column; gap:10px;
}
.queue-empty {
  text-align:center;
  padding:44px 20px;
  color:#5a5a5a;
  font-size:0.82rem;
}
.queue-empty i {
  font-size:2.4rem;
  display:block;
  margin-bottom:14px;
  color:#2a2a2a;
}
.queue-empty strong {
  display:block;
  color:#7a7a7a;
  font-size:0.88rem;
  margin-bottom:4px;
}

/* KARTU WORK ORDER */
.wo-card {
  background:#1e1e1e;
  border:1px solid #2a2a2a;
  border-left:4px solid #7a7a7a;
  border-radius:6px;
  padding:14px;
  cursor:pointer;
  transition:all 0.12s;
}
.wo-card:hover {
  background:#242424;
  border-left-color:#ff6b1a;
}
.wo-card.active {
  background:#242424;
  border-left-color:#ff6b1a;
  box-shadow:0 0 0 1px #ff6b1a inset;
}
.wo-card.status-antre { border-left-color:#7a7a7a; }
.wo-card.status-dikerjakan { border-left-color:#ffb020; }
.wo-card.status-selesai { border-left-color:#4ade80; }
.wo-card.status-dibayar { border-left-color:#2a2a2a; opacity:0.55; }

.wo-plate {
  display:flex; justify-content:space-between; align-items:flex-start;
  margin-bottom:10px;
}
.plate-box {
  background:#0a0a0a;
  border:2px solid #e8e8e8;
  border-radius:5px;
  padding:4px 10px;
  font-family:'Oswald',sans-serif;
  font-weight:700;
  font-size:0.95rem;
  letter-spacing:2px;
  color:#ffffff;
  display:inline-block;
}
.wo-num {
  font-family:'Oswald',sans-serif;
  font-size:0.72rem;
  font-weight:600;
  color:#ff6b1a;
  letter-spacing:1px;
}
.wo-info { font-size:0.78rem; }
.wo-info .kendaraan {
  color:#ffffff;
  font-weight:600;
  margin-bottom:3px;
  font-size:0.85rem;
}
.wo-info .pelanggan {
  color:#7a7a7a;
  font-size:0.72rem;
  display:flex; align-items:center; gap:6px;
}
.wo-info .pelanggan i { font-size:0.65rem; }

.wo-status {
  margin-top:10px;
  padding-top:10px;
  border-top:1px dashed #2a2a2a;
  display:flex; justify-content:space-between; align-items:center;
}
.status-badge {
  font-family:'Oswald',sans-serif;
  font-size:0.65rem;
  font-weight:600;
  letter-spacing:1px;
  text-transform:uppercase;
  padding:3px 9px;
  border-radius:3px;
}
.status-badge.antre { background:#2a2a2a; color:#a8a8a8; }
.status-badge.dikerjakan { background:#3a2a0a; color:#ffb020; }
.status-badge.selesai { background:#1a3a1a; color:#4ade80; }
.status-badge.dibayar { background:#2a2a2a; color:#7a7a7a; }

.wo-total {
  font-family:'Oswald',sans-serif;
  font-size:0.9rem;
  font-weight:700;
  color:#ff6b1a;
}

/* Tombol WO baru */
.btn-new-wo {
  margin:12px;
  padding:12px;
  background:#ff6b1a;
  color:#0a0a0a;
  border:none;
  border-radius:6px;
  cursor:pointer;
  font-family:'Oswald',sans-serif;
  font-size:0.82rem;
  font-weight:600;
  letter-spacing:1px;
  text-transform:uppercase;
  display:flex; align-items:center; justify-content:center; gap:8px;
}
.btn-new-wo:hover { background:#ff8533; }

/* === KOLOM 2: DETAIL ORDER === */
.col-detail {
  padding:0;
  display:flex; flex-direction:column;
  min-height:0;
  background:#1a1a1a;
}
.detail-empty {
  flex:1;
  display:flex; align-items:center; justify-content:center;
  flex-direction:column;
  color:#5a5a5a;
  text-align:center;
  padding:40px;
}
.detail-empty i {
  font-size:3.5rem;
  color:#2a2a2a;
  margin-bottom:18px;
}
.detail-empty h3 {
  font-family:'Oswald',sans-serif;
  font-size:1.1rem;
  font-weight:600;
  letter-spacing:1px;
  color:#7a7a7a;
  text-transform:uppercase;
  margin-bottom:8px;
}
.detail-empty p { font-size:0.84rem; }

.detail-header {
  padding:18px 22px;
  background:#0f0f0f;
  border-bottom:1px solid #2a2a2a;
  display:flex; justify-content:space-between; align-items:center;
  flex-wrap:wrap; gap:12px;
}
.detail-header .wo-id {
  font-family:'Oswald',sans-serif;
  font-size:0.7rem;
  color:#ff6b1a;
  letter-spacing:2px;
  font-weight:600;
  margin-bottom:5px;
}
.detail-header h2 {
  font-family:'Oswald',sans-serif;
  font-size:1.3rem;
  font-weight:700;
  color:#ffffff;
  letter-spacing:0.5px;
  display:flex; align-items:center; gap:14px;
}
.detail-header h2 .plate-inline {
  background:#0a0a0a;
  border:2px solid #ffffff;
  padding:3px 12px;
  border-radius:4px;
  font-size:0.95rem;
  letter-spacing:2px;
}
.detail-header .status-actions {
  display:flex; gap:6px; flex-wrap:wrap;
}
.status-btn {
  background:#1e1e1e;
  border:1px solid #2a2a2a;
  color:#a8a8a8;
  padding:7px 14px;
  border-radius:4px;
  cursor:pointer;
  font-family:'Oswald',sans-serif;
  font-size:0.72rem;
  font-weight:600;
  letter-spacing:1px;
  text-transform:uppercase;
  display:flex; align-items:center; gap:6px;
}
.status-btn:hover { border-color:#ff6b1a; color:#ffffff; }
.status-btn.active { background:#ff6b1a; color:#0a0a0a; border-color:#ff6b1a; }

/* TAB JASA/PART */
.detail-tabs {
  display:flex;
  padding:0 22px;
  background:#0f0f0f;
  border-bottom:1px solid #2a2a2a;
}
.detail-tab {
  background:transparent;
  border:none;
  border-bottom:3px solid transparent;
  padding:12px 18px;
  cursor:pointer;
  font-family:'Oswald',sans-serif;
  font-size:0.78rem;
  font-weight:600;
  letter-spacing:1.2px;
  text-transform:uppercase;
  color:#7a7a7a;
  display:flex; align-items:center; gap:8px;
  margin-bottom:-1px;
  transition:all 0.12s;
}
.detail-tab:hover { color:#ffffff; }
.detail-tab.active {
  color:#ff6b1a;
  border-bottom-color:#ff6b1a;
}
.detail-tab i { font-size:0.82rem; }

/* KONTEN TAB */
.tab-content {
  flex:1;
  overflow-y:auto;
  padding:16px 22px;
  min-height:0;
}

/* Katalog item (jasa / part) */
.catalog-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(220px,1fr));
  gap:10px;
}
.catalog-item {
  background:#1e1e1e;
  border:1px solid #2a2a2a;
  border-radius:6px;
  padding:12px 14px;
  cursor:pointer;
  transition:all 0.12s;
  display:flex;
  justify-content:space-between;
  align-items:center;
  gap:10px;
}
.catalog-item:hover {
  border-color:#ff6b1a;
  background:#242424;
}
.catalog-item.out {
  opacity:0.35;
  cursor:not-allowed;
}
.catalog-item.out:hover {
  border-color:#2a2a2a;
  background:#1e1e1e;
}
.ci-left {
  display:flex; align-items:center; gap:10px;
  min-width:0;
}
.ci-icon {
  width:36px; height:36px;
  background:#0a0a0a;
  border:1px solid #2a2a2a;
  color:#ff6b1a;
  display:flex; align-items:center; justify-content:center;
  border-radius:5px;
  font-size:0.9rem;
  flex-shrink:0;
}
.ci-info h4 {
  font-size:0.85rem;
  font-weight:600;
  color:#ffffff;
  margin-bottom:2px;
  overflow:hidden;
  text-overflow:ellipsis;
  white-space:nowrap;
}
.ci-info small {
  font-size:0.7rem;
  color:#7a7a7a;
  font-family:'Courier New',monospace;
}
.ci-right {
  text-align:right;
  flex-shrink:0;
}
.ci-right .harga {
  font-family:'Oswald',sans-serif;
  font-size:0.95rem;
  font-weight:700;
  color:#ff6b1a;
}
.ci-right .stok {
  font-size:0.66rem;
  color:#7a7a7a;
  margin-top:2px;
}
.ci-right .stok.low { color:#ffb020; }
.ci-right .stok.out { color:#ff4444; }

/* Daftar item di order */
.order-items {
  margin-bottom:20px;
  background:#141414;
  border:1px solid #2a2a2a;
  border-radius:6px;
  overflow:hidden;
}
.oi-head {
  display:grid;
  grid-template-columns:1fr 60px 110px 110px 36px;
  gap:12px;
  padding:11px 14px;
  background:#0f0f0f;
  border-bottom:1px solid #2a2a2a;
  font-family:'Oswald',sans-serif;
  font-size:0.68rem;
  font-weight:600;
  letter-spacing:1.2px;
  text-transform:uppercase;
  color:#7a7a7a;
}
.oi-row {
  display:grid;
  grid-template-columns:1fr 60px 110px 110px 36px;
  gap:12px;
  padding:12px 14px;
  align-items:center;
  border-bottom:1px solid #1f1f1f;
}
.oi-row:last-child { border-bottom:none; }
.oi-name {
  font-size:0.85rem;
  font-weight:600;
  color:#ffffff;
}
.oi-code {
  font-size:0.7rem;
  color:#7a7a7a;
  font-family:'Courier New',monospace;
  margin-top:2px;
}
.oi-qty {
  display:flex; align-items:center; gap:0;
  background:#0a0a0a;
  border:1px solid #2a2a2a;
  border-radius:4px;
  overflow:hidden;
  width:fit-content;
}
.oi-qty button {
  background:transparent;
  border:none;
  color:#ff6b1a;
  width:24px; height:24px;
  cursor:pointer;
  font-size:0.7rem;
  font-weight:700;
}
.oi-qty button:hover { background:#ff6b1a; color:#0a0a0a; }
.oi-qty span {
  padding:0 8px;
  font-size:0.82rem;
  font-weight:600;
  min-width:24px;
  text-align:center;
  line-height:24px;
  color:#ffffff;
}
.oi-price {
  font-family:'Oswald',sans-serif;
  font-size:0.82rem;
  color:#a8a8a8;
}
.oi-subtotal {
  font-family:'Oswald',sans-serif;
  font-size:0.9rem;
  font-weight:700;
  color:#ff6b1a;
  text-align:right;
}
.oi-del {
  background:transparent;
  border:none;
  color:#5a5a5a;
  cursor:pointer;
  font-size:0.85rem;
  padding:4px;
}
.oi-del:hover { color:#ff4444; }

.oi-empty {
  padding:36px;
  text-align:center;
  color:#5a5a5a;
  font-size:0.84rem;
}

/* Ringkasan total */
.order-summary {
  background:#141414;
  border:1px solid #2a2a2a;
  border-radius:6px;
  padding:18px 20px;
  display:flex; justify-content:space-between; align-items:center;
  flex-wrap:wrap; gap:16px;
}
.sum-left .lbl {
  font-size:0.72rem;
  color:#7a7a7a;
  text-transform:uppercase;
  letter-spacing:1.5px;
  font-family:'Oswald',sans-serif;
  margin-bottom:4px;
}
.sum-left .val {
  font-family:'Oswald',sans-serif;
  font-size:2rem;
  font-weight:700;
  color:#ff6b1a;
  line-height:1;
  letter-spacing:-0.5px;
}
.sum-left .sub {
  font-size:0.7rem;
  color:#7a7a7a;
  margin-top:6px;
}
.btn-bayar-wo {
  background:#ff6b1a;
  color:#0a0a0a;
  border:none;
  padding:14px 28px;
  border-radius:6px;
  cursor:pointer;
  font-family:'Oswald',sans-serif;
  font-size:0.94rem;
  font-weight:700;
  letter-spacing:1.2px;
  text-transform:uppercase;
  display:flex; align-items:center; gap:10px;
}
.btn-bayar-wo:hover { background:#ff8533; }
.btn-bayar-wo:disabled {
  background:#2a2a2a;
  color:#5a5a5a;
  cursor:not-allowed;
}

/* === KOLOM 3: INFO KENDARAAN === */
.col-vehicle {
  background:#141414;
  border-left:1px solid #2a2a2a;
  padding:20px 20px;
  overflow-y:auto;
}
.vehicle-head {
  font-family:'Oswald',sans-serif;
  font-size:0.68rem;
  font-weight:600;
  color:#ff6b1a;
  letter-spacing:2.5px;
  text-transform:uppercase;
  margin-bottom:16px;
  display:flex; align-items:center; gap:8px;
}
.form-group { margin-bottom:14px; }
.form-group label {
  display:block;
  font-family:'Oswald',sans-serif;
  font-size:0.68rem;
  font-weight:600;
  color:#7a7a7a;
  letter-spacing:1.2px;
  text-transform:uppercase;
  margin-bottom:6px;
}
.form-group input,
.form-group select,
.form-group textarea {
  width:100%;
  background:#0a0a0a;
  border:1px solid #2a2a2a;
  padding:10px 12px;
  border-radius:5px;
  font-family:'Inter',sans-serif;
  font-size:0.85rem;
  color:#ffffff;
  outline:none;
  transition:border-color 0.12s;
}
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  border-color:#ff6b1a;
}
.form-group textarea {
  resize:vertical;
  min-height:70px;
  font-size:0.82rem;
}
.plate-input {
  font-family:'Oswald',sans-serif !important;
  font-weight:700 !important;
  font-size:1.05rem !important;
  letter-spacing:3px !important;
  text-transform:uppercase;
  text-align:center;
  background:#0a0a0a !important;
  border:2px solid #e8e8e8 !important;
  padding:12px !important;
}
.plate-input:focus { border-color:#ff6b1a !important; }

.mekanik-chips {
  display:flex; flex-wrap:wrap; gap:6px;
}
.mekanik-chip {
  background:#0a0a0a;
  border:1px solid #2a2a2a;
  color:#a8a8a8;
  padding:8px 12px;
  border-radius:5px;
  cursor:pointer;
  font-size:0.78rem;
  font-weight:500;
  display:flex; align-items:center; gap:7px;
  transition:all 0.12s;
}
.mekanik-chip:hover { border-color:#ff6b1a; color:#ffffff; }
.mekanik-chip.selected {
  background:#ff6b1a;
  border-color:#ff6b1a;
  color:#0a0a0a;
}
.mekanik-chip .mk-avatar {
  width:20px; height:20px;
  background:#2a2a2a;
  color:#ff6b1a;
  border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  font-family:'Oswald',sans-serif;
  font-weight:700;
  font-size:0.65rem;
}
.mekanik-chip.selected .mk-avatar {
  background:#0a0a0a;
}

/* ===== ADMIN ===== */
.admin-wrap {
  padding:24px 28px;
  flex:1;
  overflow-y:auto;
}
.admin-head {
  display:flex; justify-content:space-between; align-items:flex-end;
  flex-wrap:wrap; gap:14px;
  margin-bottom:22px;
}
.admin-head h2 {
  font-family:'Oswald',sans-serif;
  font-size:1.5rem;
  font-weight:700;
  letter-spacing:1.5px;
  text-transform:uppercase;
  color:#ffffff;
}
.admin-head h2 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.72rem;
  font-weight:400;
  color:#7a7a7a;
  letter-spacing:1.5px;
  margin-top:5px;
}
.admin-actions { display:flex; gap:10px; }

.btn-outline {
  background:transparent;
  border:1px solid #2a2a2a;
  color:#a8a8a8;
  padding:10px 18px;
  border-radius:5px;
  cursor:pointer;
  font-family:'Oswald',sans-serif;
  font-size:0.78rem;
  font-weight:600;
  letter-spacing:1px;
  text-transform:uppercase;
  display:flex; align-items:center; gap:8px;
}
.btn-outline:hover { border-color:#ff6b1a; color:#ffffff; }
.btn-solid {
  background:#ff6b1a;
  border:none;
  color:#0a0a0a;
  padding:10px 18px;
  border-radius:5px;
  cursor:pointer;
  font-family:'Oswald',sans-serif;
  font-size:0.78rem;
  font-weight:600;
  letter-spacing:1px;
  text-transform:uppercase;
  display:flex; align-items:center; gap:8px;
}
.btn-solid:hover { background:#ff8533; }

/* STATS */
.stats-row {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:12px;
  margin-bottom:22px;
}
.stat-box {
  background:#141414;
  border:1px solid #2a2a2a;
  border-radius:6px;
  padding:16px 18px;
  position:relative;
}
.stat-box::before {
  content:'';
  position:absolute;
  top:0; left:0;
  width:3px; height:100%;
  background:#ff6b1a;
}
.stat-box.green::before { background:#4ade80; }
.stat-box.yellow::before { background:#ffb020; }
.stat-box.red::before { background:#ff4444; }
.stat-box .sb-lbl {
  font-family:'Oswald',sans-serif;
  font-size:0.68rem;
  color:#7a7a7a;
  letter-spacing:1.5px;
  text-transform:uppercase;
  font-weight:600;
  margin-bottom:8px;
}
.stat-box .sb-val {
  font-family:'Oswald',sans-serif;
  font-size:1.7rem;
  font-weight:700;
  color:#ffffff;
  line-height:1;
}
.stat-box .sb-val.orange { color:#ff6b1a; }
.stat-box .sb-val.green { color:#4ade80; }
.stat-box .sb-val.yellow { color:#ffb020; }
.stat-box .sb-val.red { color:#ff4444; }

/* TABEL GUDANG */
.table-box {
  background:#141414;
  border:1px solid #2a2a2a;
  border-radius:6px;
  overflow:hidden;
  margin-bottom:22px;
}
.table-title {
  padding:14px 18px;
  border-bottom:1px solid #2a2a2a;
  font-family:'Oswald',sans-serif;
  font-size:0.85rem;
  font-weight:600;
  letter-spacing:1.2px;
  text-transform:uppercase;
  color:#ffffff;
  display:flex; align-items:center; gap:10px;
}
.table-title i { color:#ff6b1a; }
table { width:100%; border-collapse:collapse; font-size:0.82rem; }
thead { background:#0a0a0a; }
th {
  text-align:left;
  padding:11px 16px;
  font-family:'Oswald',sans-serif;
  font-size:0.68rem;
  font-weight:600;
  color:#7a7a7a;
  letter-spacing:1.2px;
  text-transform:uppercase;
  border-bottom:1px solid #2a2a2a;
}
td {
  padding:13px 16px;
  border-bottom:1px solid #1f1f1f;
  color:#e8e8e8;
}
tbody tr:last-child td { border-bottom:none; }
tbody tr:hover { background:#1a1a1a; }
.td-name {
  display:flex; align-items:center; gap:12px;
}
.td-icon {
  width:34px; height:34px;
  background:#0a0a0a;
  border:1px solid #2a2a2a;
  color:#ff6b1a;
  display:flex; align-items:center; justify-content:center;
  border-radius:5px;
  font-size:0.85rem;
  flex-shrink:0;
}
.td-name strong {
  font-weight:600;
  color:#ffffff;
  display:block;
  font-size:0.85rem;
}
.td-name small {
  font-family:'Courier New',monospace;
  font-size:0.68rem;
  color:#7a7a7a;
  margin-top:2px;
}

.badge-tipe {
  display:inline-block;
  padding:3px 10px;
  border-radius:3px;
  font-family:'Oswald',sans-serif;
  font-size:0.66rem;
  font-weight:600;
  letter-spacing:1px;
  text-transform:uppercase;
}
.badge-tipe.jasa { background:#2a1a0a; color:#ffb020; }
.badge-tipe.part { background:#1a2a3a; color:#66b3ff; }

.stok-num {
  font-family:'Oswald',sans-serif;
  font-size:1.05rem;
  font-weight:700;
  color:#ffffff;
}
.stok-min {
  font-size:0.68rem;
  color:#7a7a7a;
  margin-top:2px;
}
.stok-pill {
  display:inline-block;
  padding:2px 8px;
  border-radius:3px;
  font-family:'Oswald',sans-serif;
  font-size:0.62rem;
  font-weight:600;
  letter-spacing:0.8px;
  text-transform:uppercase;
}
.stok-pill.ok { background:#1a3a1a; color:#4ade80; }
.stok-pill.low { background:#3a2a0a; color:#ffb020; }
.stok-pill.out { background:#3a0a0a; color:#ff4444; }

.row-actions { display:flex; gap:5px; justify-content:flex-end; }
.icon-btn {
  width:30px; height:30px;
  background:#0a0a0a;
  border:1px solid #2a2a2a;
  color:#a8a8a8;
  cursor:pointer;
  font-size:0.75rem;
  display:flex; align-items:center; justify-content:center;
  border-radius:4px;
}
.icon-btn:hover {
  background:#ff6b1a;
  color:#0a0a0a;
  border-color:#ff6b1a;
}
.icon-btn.danger:hover {
  background:#ff4444;
  border-color:#ff4444;
  color:#ffffff;
}

/* ===== MODAL ===== */
.modal-bg {
  position:fixed; inset:0;
  background:rgba(0,0,0,0.8);
  display:none;
  align-items:center; justify-content:center;
  z-index:100;
  padding:16px;
}
.modal-bg.show { display:flex; }
.modal {
  background:#141414;
  border:1px solid #2a2a2a;
  border-top:3px solid #ff6b1a;
  border-radius:6px;
  width:100%;
  max-width:520px;
  max-height:92vh;
  overflow-y:auto;
  box-shadow:0 20px 60px -10px rgba(255,107,26,0.25);
}
.modal-head {
  padding:20px 22px 16px;
  border-bottom:1px solid #2a2a2a;
  display:flex; justify-content:space-between; align-items:flex-start;
}
.modal-head h3 {
  font-family:'Oswald',sans-serif;
  font-size:1.1rem;
  font-weight:700;
  letter-spacing:1.2px;
  text-transform:uppercase;
  color:#ffffff;
  display:flex; align-items:center; gap:10px;
}
.modal-head h3 i { color:#ff6b1a; }
.modal-head .sub {
  font-size:0.75rem;
  color:#7a7a7a;
  margin-top:5px;
}
.modal-close {
  background:transparent;
  border:1px solid #2a2a2a;
  color:#7a7a7a;
  width:30px; height:30px;
  cursor:pointer;
  border-radius:4px;
}
.modal-close:hover {
  background:#ff6b1a;
  color:#0a0a0a;
  border-color:#ff6b1a;
}
.modal-body { padding:20px 22px; }
.modal-foot {
  padding:16px 22px 20px;
  border-top:1px solid #2a2a2a;
  background:#0f0f0f;
  display:flex; gap:10px;
  border-radius:0 0 6px 6px;
}
.modal-foot .btn-outline { flex:1; justify-content:center; }
.modal-foot .btn-solid { flex:2; justify-content:center; padding:13px; }

/* PAYMENT */
.pay-grid {
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:8px;
  margin-bottom:18px;
}
.pay-opt {
  background:#0a0a0a;
  border:2px solid #2a2a2a;
  border-radius:5px;
  padding:16px 8px;
  text-align:center;
  cursor:pointer;
  font-family:'Oswald',sans-serif;
  font-size:0.72rem;
  font-weight:600;
  letter-spacing:1px;
  text-transform:uppercase;
  color:#7a7a7a;
  transition:all 0.12s;
}
.pay-opt i {
  display:block;
  font-size:1.15rem;
  margin-bottom:8px;
  color:#5a5a5a;
}
.pay-opt:hover { border-color:#ff6b1a; color:#ffffff; }
.pay-opt.selected {
  background:#ff6b1a;
  border-color:#ff6b1a;
  color:#0a0a0a;
}
.pay-opt.selected i { color:#0a0a0a; }

/* INVOICE */
.invoice {
  background:#0f0f0f;
  border:1px solid #2a2a2a;
  border-radius:6px;
  padding:22px;
  font-family:'Inter',sans-serif;
  color:#e8e8e8;
  position:relative;
}
.invoice::before {
  content:'';
  position:absolute;
  top:0; left:0; right:0;
  height:5px;
  background:repeating-linear-gradient(
    45deg,
    #ff6b1a 0 12px,
    #0a0a0a 12px 24px
  );
}
.inv-head {
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
  padding-top:8px;
  padding-bottom:16px;
  border-bottom:2px solid #ff6b1a;
  margin-bottom:16px;
  flex-wrap:wrap; gap:14px;
}
.inv-brand h4 {
  font-family:'Oswald',sans-serif;
  font-size:1.2rem;
  font-weight:700;
  letter-spacing:1.5px;
  text-transform:uppercase;
  color:#ffffff;
}
.inv-brand small {
  display:block;
  font-size:0.7rem;
  color:#7a7a7a;
  margin-top:5px;
  line-height:1.6;
}
.inv-number { text-align:right; }
.inv-number .num {
  font-family:'Oswald',sans-serif;
  font-size:1rem;
  font-weight:700;
  color:#ff6b1a;
  letter-spacing:1px;
}
.inv-number .date {
  font-size:0.7rem;
  color:#7a7a7a;
  margin-top:5px;
}

.inv-info {
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:12px 20px;
  padding:14px;
  background:#141414;
  border-radius:5px;
  margin-bottom:16px;
  font-size:0.78rem;
  border-left:3px solid #ff6b1a;
}
.inv-info .ii-item {
  display:flex;
  gap:8px;
}
.inv-info .lbl {
  color:#7a7a7a;
  min-width:70px;
  font-size:0.72rem;
  text-transform:uppercase;
  letter-spacing:0.5px;
}
.inv-info .val {
  color:#ffffff;
  font-weight:600;
}
.inv-info .plate-big {
  font-family:'Oswald',sans-serif;
  font-size:1rem;
  letter-spacing:2px;
  background:#0a0a0a;
  border:1.5px solid #ffffff;
  padding:2px 10px;
  border-radius:3px;
  display:inline-block;
}

.inv-section {
  margin-bottom:16px;
}
.inv-section-title {
  font-family:'Oswald',sans-serif;
  font-size:0.72rem;
  font-weight:600;
  letter-spacing:1.5px;
  text-transform:uppercase;
  color:#ff6b1a;
  padding:6px 10px;
  background:#141414;
  border-left:3px solid #ff6b1a;
  margin-bottom:10px;
}
.inv-table {
  width:100%;
  border-collapse:collapse;
  font-size:0.78rem;
}
.inv-table th {
  text-align:left;
  padding:8px 6px;
  font-family:'Oswald',sans-serif;
  font-size:0.68rem;
  font-weight:600;
  letter-spacing:1px;
  text-transform:uppercase;
  color:#7a7a7a;
  border-bottom:1px solid #2a2a2a;
}
.inv-table th.r { text-align:right; }
.inv-table th.c { text-align:center; }
.inv-table td {
  padding:10px 6px;
  border-bottom:1px solid #1f1f1f;
  color:#e8e8e8;
}
.inv-table td.r { text-align:right; font-weight:600; }
.inv-table td.c { text-align:center; }
.inv-table td.total { color:#ff6b1a; font-weight:700; font-family:'Oswald',sans-serif; }
.inv-table .item-code {
  font-size:0.68rem;
  color:#7a7a7a;
  font-family:'Courier New',monospace;
  margin-top:2px;
}

.inv-total {
  margin-top:18px;
  padding-top:14px;
  border-top:2px solid #ff6b1a;
}
.inv-total .t-row {
  display:flex;
  justify-content:space-between;
  font-size:0.82rem;
  color:#a8a8a8;
  margin-bottom:7px;
}
.inv-total .t-grand {
  display:flex;
  justify-content:space-between;
  font-family:'Oswald',sans-serif;
  font-size:1.5rem;
  font-weight:700;
  color:#ff6b1a;
  padding-top:10px;
  border-top:1px dashed #2a2a2a;
  margin-top:8px;
  letter-spacing:-0.5px;
}
.inv-total .t-pay {
  display:flex;
  justify-content:space-between;
  font-size:0.8rem;
  margin-top:10px;
  color:#a8a8a8;
}

.inv-footer {
  text-align:center;
  font-size:0.68rem;
  color:#7a7a7a;
  margin-top:22px;
  padding-top:16px;
  border-top:1px dashed #2a2a2a;
  line-height:1.8;
}
.inv-footer strong {
  color:#ff6b1a;
  font-family:'Oswald',sans-serif;
  letter-spacing:1px;
}

/* TOAST */
.toast {
  position:fixed;
  bottom:24px; left:50%;
  transform:translateX(-50%);
  background:#0a0a0a;
  color:#ffffff;
  padding:13px 24px;
  border-radius:5px;
  font-size:0.85rem;
  font-weight:500;
  display:flex; align-items:center; gap:10px;
  opacity:0;
  pointer-events:none;
  transition:opacity 0.2s;
  z-index:200;
  border-left:4px solid #ff6b1a;
  box-shadow:0 10px 30px -8px rgba(255,107,26,0.4);
}
.toast.show { opacity:1; }
.toast i { color:#ff6b1a; }

/* SCROLLBAR */
::-webkit-scrollbar { width:6px; height:6px; }
::-webkit-scrollbar-track { background:transparent; }
::-webkit-scrollbar-thumb { background:#2a2a2a; border-radius:10px; }
::-webkit-scrollbar-thumb:hover { background:#3a3a3a; }

/* RESPONSIF */
@media (max-width: 1200px) {
  .kasir-grid { grid-template-columns:280px 1fr; }
  .col-vehicle { display:none; }
  .col-vehicle.mobile-show { display:block; position:fixed; top:64px; right:0; bottom:0; width:320px; z-index:60; box-shadow:-10px 0 30px rgba(0,0,0,0.5); }
}
@media (max-width: 800px) {
  .kasir-grid { grid-template-columns:1fr; }
  .col-queue { max-height:230px; border-right:none; border-bottom:1px solid #2a2a2a; }
  .oi-head, .oi-row { grid-template-columns:1fr 50px 90px; gap:8px; }
  .oi-head > *:nth-child(3),
  .oi-head > *:nth-child(5),
  .oi-row > *:nth-child(3),
  .oi-row > *:nth-child(5) { display:none; }
  .inv-info { grid-template-columns:1fr; }
  .inv-head { flex-direction:column; align-items:flex-start; }
  .inv-number { text-align:left; }
}
@media (max-width: 520px) {
  .topbar { padding:0 14px; height:auto; min-height:64px; flex-wrap:wrap; padding-top:10px; padding-bottom:10px; gap:8px; }
  .mode-nav button span { display:none; }
  .admin-wrap { padding:16px; }
  .catalog-grid { grid-template-columns:1fr; }
  .btn-bayar-wo { width:100%; justify-content:center; }
  .order-summary { flex-direction:column; align-items:stretch; }
}
</style>
</head>
<body>

<div class="app">

<!-- ===== HEADER ===== -->
<header class="topbar">
  <div class="brand">
    <div class="brand-mark"><i class="fas fa-wrench"></i></div>
    <h1>Garasi Prima<small>Bengkel & Service Center</small></h1>
  </div>
  <div class="topbar-right">
    <nav class="mode-nav">
      <button id="navKasir" class="active">
        <i class="fas fa-clipboard-list"></i> <span>Work Order</span>
      </button>
      <button id="navAdmin">
        <i class="fas fa-warehouse"></i> <span>Gudang</span>
      </button>
    </nav>
    <div class="user-badge">
      <div class="avatar" id="avatarInit">BW</div>
      <div class="info">
        <div class="name" id="userName">Bayu Wijaya</div>
        <div class="role" id="userRole">Service Advisor</div>
      </div>
    </div>
  </div>
</header>

<!-- ========================================================= -->
<!-- ==================== PAGE KASIR ========================== -->
<!-- ========================================================= -->
<div class="page active" id="pageKasir">
  <div class="kasir-grid">

    <!-- KOLOM 1: WORK ORDER QUEUE -->
    <section class="col-queue">
      <div class="queue-head">
        <div class="kicker">Antrean Hari Ini</div>
        <h3>
          Work Order
          <span class="count-badge" id="woCount">0</span>
        </h3>
      </div>

      <button class="btn-new-wo" id="btnNewWO">
        <i class="fas fa-plus-circle"></i> Order Baru
      </button>

      <div class="queue-list" id="queueList"></div>
    </section>

    <!-- KOLOM 2: DETAIL ORDER -->
    <section class="col-detail" id="colDetail">
      <div class="detail-empty" id="detailEmpty">
        <i class="fas fa-tools"></i>
        <h3>Belum Ada Order Terpilih</h3>
        <p>Pilih work order dari antrean<br>atau buat order baru untuk memulai.</p>
      </div>

      <div id="detailContent" style="display:none; flex:1; flex-direction:column; min-height:0;"></div>
    </section>

    <!-- KOLOM 3: INFO KENDARAAN -->
    <aside class="col-vehicle" id="colVehicle">
      <div class="vehicle-head">
        <i class="fas fa-motorcycle"></i>
        Data Kendaraan
      </div>
      <div class="form-group">
        <label>Plat Nomor</label>
        <input type="text" class="plate-input" id="fPlat" placeholder="B 1234 XYZ" maxlength="12">
      </div>
      <div class="form-group">
        <label>Jenis Kendaraan</label>
        <select id="fJenis">
          <option>Motor Bebek</option>
          <option>Motor Matic</option>
          <option>Motor Sport</option>
          <option>Mobil Sedan</option>
          <option>Mobil SUV</option>
          <option>Mobil Pickup</option>
        </select>
      </div>
      <div class="form-group">
        <label>Merk & Tipe</label>
        <input type="text" id="fMerk" placeholder="Honda Beat 2020">
      </div>
      <div class="form-group">
        <label>Nama Pelanggan</label>
        <input type="text" id="fPelanggan" placeholder="Nama lengkap">
      </div>
      <div class="form-group">
        <label>No. HP</label>
        <input type="text" id="fHP" placeholder="08xx-xxxx-xxxx">
      </div>
      <div class="form-group">
        <label>Mekanik</label>
        <div class="mekanik-chips" id="mekanikChips"></div>
      </div>
      <div class="form-group">
        <label>Keluhan Pelanggan</label>
        <textarea id="fKeluhan" placeholder="Deskripsi keluhan atau permintaan servis..."></textarea>
      </div>
    </aside>
  </div>
</div>

<!-- ========================================================= -->
<!-- ==================== PAGE ADMIN ========================== -->
<!-- ========================================================= -->
<div class="page" id="pageAdmin">
  <div class="admin-wrap">
    <div class="admin-head">
      <h2>Gudang & Stok<small>Kelola jasa, sparepart & stok</small></h2>
      <div class="admin-actions">
        <button class="btn-outline" id="btnResetData">
          <i class="fas fa-rotate"></i> Reset Data
        </button>
        <button class="btn-solid" id="btnTambahProduk">
          <i class="fas fa-plus"></i> Item Baru
        </button>
      </div>
    </div>

    <div class="stats-row">
      <div class="stat-box">
        <div class="sb-lbl">Total Item</div>
        <div class="sb-val orange" id="sTotal">0</div>
      </div>
      <div class="stat-box green">
        <div class="sb-lbl">Order Selesai</div>
        <div class="sb-val green" id="sSelesai">0</div>
      </div>
      <div class="stat-box yellow">
        <div class="sb-lbl">Stok Rendah</div>
        <div class="sb-val yellow" id="sLow">0</div>
      </div>
      <div class="stat-box red">
        <div class="sb-lbl">Stok Habis</div>
        <div class="sb-val red" id="sOut">0</div>
      </div>
    </div>

    <div class="table-box">
      <div class="table-title"><i class="fas fa-boxes-stacked"></i> Inventaris Jasa & Sparepart</div>
      <table>
        <thead>
          <tr>
            <th>Item</th>
            <th>Tipe</th>
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

<!-- ===== MODAL BAYAR ===== -->
<div class="modal-bg" id="modalBayar">
  <div class="modal">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-cash-register"></i> Pembayaran</h3>
        <div class="sub">Pilih metode pembayaran lalu konfirmasi.</div>
      </div>
      <button class="modal-close" id="closeBayar"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="pay-grid" id="payGrid">
        <div class="pay-opt selected" data-method="Tunai"><i class="fas fa-money-bill-wave"></i>Tunai</div>
        <div class="pay-opt" data-method="Debit"><i class="fas fa-credit-card"></i>Debit</div>
        <div class="pay-opt" data-method="Transfer"><i class="fas fa-building-columns"></i>Transfer</div>
      </div>
      <div id="cashSection">
        <div class="form-group">
          <label>Uang Diterima (Rp)</label>
          <input type="number" id="cashInput" placeholder="0" min="0" step="1000" style="font-family:'Oswald',sans-serif; font-size:1.1rem; letter-spacing:1px;">
        </div>
        <div id="changeBox" style="background:#1a3a1a; color:#4ade80; padding:12px 14px; border-radius:5px; font-family:'Oswald',sans-serif; font-size:0.9rem; display:flex; justify-content:space-between; font-weight:600; letter-spacing:0.5px; transition:background 0.15s;">
          <span>KEMBALIAN</span>
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

<!-- ===== MODAL INVOICE ===== -->
<div class="modal-bg" id="modalInvoice">
  <div class="modal" style="max-width:620px;">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-file-invoice"></i> Invoice Bengkel</h3>
        <div class="sub">Serahkan salinan ini ke pelanggan.</div>
      </div>
      <button class="modal-close" id="closeInvoice"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body" id="invoiceBody"></div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnOrderBaru">Order Baru</button>
      <button class="btn-solid" id="btnCetak">
        <i class="fas fa-print"></i> Cetak
      </button>
    </div>
  </div>
</div>

<!-- ===== MODAL PRODUK (ADMIN) ===== -->
<div class="modal-bg" id="modalProduk">
  <div class="modal">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-cog"></i> <span id="modalProdukTitle">Tambah Item</span></h3>
        <div class="sub">Isi detail jasa atau sparepart.</div>
      </div>
      <button class="modal-close" id="closeProduk"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <input type="hidden" id="editId">
      <div class="form-group">
        <label>Nama Item</label>
        <input type="text" id="fNamaItem" placeholder="Contoh: Oli Mesin 10W-40" maxlength="50">
      </div>
      <div class="form-group">
        <label>Kode Item</label>
        <input type="text" id="fKodeItem" placeholder="Contoh: PRT-001" maxlength="10" style="font-family:'Courier New',monospace; text-transform:uppercase;">
      </div>
      <div class="form-group">
        <label>Tipe</label>
        <select id="fTipeItem">
          <option value="part">Sparepart (ada stok)</option>
          <option value="jasa">Jasa (tidak terbatas)</option>
        </select>
      </div>
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
        <div class="form-group">
          <label>Harga (Rp)</label>
          <input type="number" id="fHargaItem" placeholder="0" min="0" step="1000">
        </div>
        <div class="form-group">
          <label>Stok</label>
          <input type="number" id="fStokItem" placeholder="0" min="0" value="10">
        </div>
      </div>
      <div class="form-group">
        <label>Stok Minimum</label>
        <input type="number" id="fMinItem" placeholder="5" min="0" value="5">
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
     DATA
  ========================================================= */
  const STORAGE_KEY = 'garasi_prima_v1';
  const WO_KEY = 'garasi_prima_wo_v1';

  const defaultProduk = [
    // JASA
    { id:1, kode:'JSA-001', nama:'Servis Ringan', harga:50000, tipe:'jasa', stok:999, min:0 },
    { id:2, kode:'JSA-002', nama:'Servis Besar', harga:150000, tipe:'jasa', stok:999, min:0 },
    { id:3, kode:'JSA-003', nama:'Tune Up Mesin', harga:200000, tipe:'jasa', stok:999, min:0 },
    { id:4, kode:'JSA-004', nama:'Ganti Oli', harga:30000, tipe:'jasa', stok:999, min:0 },
    { id:5, kode:'JSA-005', nama:'Servis CVT Matic', harga:120000, tipe:'jasa', stok:999, min:0 },
    { id:6, kode:'JSA-006', nama:'Bongkar Pasang Ban', harga:25000, tipe:'jasa', stok:999, min:0 },
    { id:7, kode:'JSA-007', nama:'Cek Kelistrikan', harga:75000, tipe:'jasa', stok:999, min:0 },
    { id:8, kode:'JSA-008', nama:'Spooring Balancing', harga:180000, tipe:'jasa', stok:999, min:0 },
    // PART
    { id:9, kode:'PRT-001', nama:'Oli Mesin 10W-40 1L', harga:65000, tipe:'part', stok:24, min:8 },
    { id:10, kode:'PRT-002', nama:'Oli Gardan 100ml', harga:25000, tipe:'part', stok:18, min:6 },
    { id:11, kode:'PRT-003', nama:'Busi Iridium', harga:85000, tipe:'part', stok:32, min:10 },
    { id:12, kode:'PRT-004', nama:'Filter Udara', harga:55000, tipe:'part', stok:15, min:5 },
    { id:13, kode:'PRT-005', nama:'Kampas Rem Depan', harga:95000, tipe:'part', stok:12, min:5 },
    { id:14, kode:'PRT-006', nama:'Kampas Rem Belakang', harga:75000, tipe:'part', stok:10, min:5 },
    { id:15, kode:'PRT-007', nama:'Rantai + Gir Set', harga:185000, tipe:'part', stok:6, min:4 },
    { id:16, kode:'PRT-008', nama:'V-Belt Matic', harga:125000, tipe:'part', stok:8, min:4 },
    { id:17, kode:'PRT-009', nama:'Aki Kering 12V', harga:320000, tipe:'part', stok:4, min:3 },
    { id:18, kode:'PRT-010', nama:'Lampu LED Head', harga:145000, tipe:'part', stok:9, min:4 },
    { id:19, kode:'PRT-011', nama:'Bearing Roda', harga:68000, tipe:'part', stok:14, min:6 },
    { id:20, kode:'PRT-012', nama:'Seal Shockbreaker', harga:42000, tipe:'part', stok:3, min:5 }
  ];

  const MEKANIK_LIST = [
    { id:'m1', nama:'Joko', inisial:'JK' },
    { id:'m2', nama:'Slamet', inisial:'SL' },
    { id:'m3', nama:'Bagas', inisial:'BG' },
    { id:'m4', nama:'Rudi', inisial:'RD' },
    { id:'m5', nama:'Tono', inisial:'TN' }
  ];

  const defaultWO = [
    {
      id:'WO-2401', plat:'B 1234 XYZ', jenis:'Motor Matic', merk:'Honda Vario 2020',
      pelanggan:'Ibu Sinta', hp:'0812-3456-7890', mekanik:'m1',
      keluhan:'Servis rutin + ganti oli', status:'antre',
      items:[
        { id:1, kode:'JSA-001', nama:'Servis Ringan', harga:50000, qty:1, tipe:'jasa' },
        { id:9, kode:'PRT-001', nama:'Oli Mesin 10W-40 1L', harga:65000, qty:1, tipe:'part' }
      ],
      createdAt: new Date().toISOString()
    },
    {
      id:'WO-2402', plat:'D 5678 ABC', jenis:'Motor Sport', merk:'Yamaha Vixion 2019',
      pelanggan:'Bpk. Andi', hp:'0856-7890-1234', mekanik:'m3',
      keluhan:'Mesin kasar, curiga busi', status:'dikerjakan',
      items:[
        { id:3, kode:'JSA-003', nama:'Tune Up Mesin', harga:200000, qty:1, tipe:'jasa' },
        { id:11, kode:'PRT-003', nama:'Busi Iridium', harga:85000, qty:1, tipe:'part' }
      ],
      createdAt: new Date().toISOString()
    }
  ];

  let produkList, woList;
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    produkList = raw ? JSON.parse(raw) : JSON.parse(JSON.stringify(defaultProduk));
    const rawWO = localStorage.getItem(WO_KEY);
    woList = rawWO ? JSON.parse(rawWO) : JSON.parse(JSON.stringify(defaultWO));
  } catch(e) {
    produkList = JSON.parse(JSON.stringify(defaultProduk));
    woList = JSON.parse(JSON.stringify(defaultWO));
  }
  const saveProduk = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(produkList));
  const saveWO = () => localStorage.setItem(WO_KEY, JSON.stringify(woList));

  let activeWOId = null;
  let activeTab = 'jasa';
  let payMethod = 'Tunai';
  let lastInvoice = null;

  /* =========================================================
     UTIL
  ========================================================= */
  const rp = n => 'Rp ' + Number(n).toLocaleString('id-ID');

  const iconByTipe = {
    jasa: 'fa-screwdriver-wrench',
    part: 'fa-gear'
  };

  let toastTimer;
  function toast(msg, icon='fa-circle-check') {
    const t = document.getElementById('toast');
    document.getElementById('toastTxt').textContent = msg;
    t.querySelector('i').className = 'fas ' + icon;
    t.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => t.classList.remove('show'), 2200);
  }

  function getMekanik(id) {
    return MEKANIK_LIST.find(m => m.id === id) || MEKANIK_LIST[0];
  }

  function woTotal(wo) {
    return wo.items.reduce((s, it) => s + it.harga * it.qty, 0);
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
    document.getElementById('userName').textContent = 'Bayu Wijaya';
    document.getElementById('userRole').textContent = 'Service Advisor';
    document.getElementById('avatarInit').textContent = 'BW';
    renderQueue();
  });

  navAdmin.addEventListener('click', () => {
    navAdmin.classList.add('active');
    navKasir.classList.remove('active');
    pageAdmin.classList.add('active');
    pageKasir.classList.remove('active');
    document.getElementById('userName').textContent = 'Pak Hadi';
    document.getElementById('userRole').textContent = 'Kepala Bengkel';
    document.getElementById('avatarInit').textContent = 'PH';
    renderAdmin();
  });

  /* =========================================================
     RENDER QUEUE (kiri)
  ========================================================= */
  function renderQueue() {
    const list = document.getElementById('queueList');
    document.getElementById('woCount').textContent = woList.length;

    if (woList.length === 0) {
      list.innerHTML = `
        <div class="queue-empty">
          <i class="fas fa-clipboard"></i>
          <strong>Belum ada work order</strong>
          Klik "Order Baru" untuk memulai.
        </div>`;
      return;
    }

    // Urutkan: antre dulu, lalu dikerjakan, selesai, dibayar
    const order = { antre:0, dikerjakan:1, selesai:2, dibayar:3 };
    const sorted = [...woList].sort((a,b) => order[a.status] - order[b.status]);

    list.innerHTML = sorted.map(wo => {
      const mek = getMekanik(wo.mekanik);
      const statusLabel = {
        antre:'Antre', dikerjakan:'Dikerjakan',
        selesai:'Selesai', dibayar:'Dibayar'
      }[wo.status];

      return `
        <div class="wo-card status-${wo.status} ${wo.id === activeWOId ? 'active' : ''}" data-id="${wo.id}">
          <div class="wo-plate">
            <div class="plate-box">${wo.plat}</div>
            <div class="wo-num">${wo.id}</div>
          </div>
          <div class="wo-info">
            <div class="kendaraan">${wo.merk}</div>
            <div class="pelanggan">
              <i class="fas fa-user"></i> ${wo.pelanggan} · Mekanik ${mek.nama}
            </div>
          </div>
          <div class="wo-status">
            <span class="status-badge ${wo.status}">${statusLabel}</span>
            <span class="wo-total">${rp(woTotal(wo))}</span>
          </div>
        </div>
      `;
    }).join('');

    list.querySelectorAll('.wo-card').forEach(card => {
      card.addEventListener('click', () => {
        activeWOId = card.dataset.id;
        renderQueue();
        renderDetail();
      });
    });
  }

  /* =========================================================
     RENDER DETAIL (tengah)
  ========================================================= */
  function renderDetail() {
    const empty = document.getElementById('detailEmpty');
    const content = document.getElementById('detailContent');
    const wo = woList.find(w => w.id === activeWOId);

    if (!wo) {
      empty.style.display = 'flex';
      content.style.display = 'none';
      return;
    }
    empty.style.display = 'none';
    content.style.display = 'flex';

    const mek = getMekanik(wo.mekanik);
    const jasaItems = wo.items.filter(i => i.tipe === 'jasa');
    const partItems = wo.items.filter(i => i.tipe === 'part');
    const subtotal = woTotal(wo);
    const tax = Math.round(subtotal * 0.1);
    const total = subtotal + tax;

    const statusLabel = {
      antre:'Antre', dikerjakan:'Dikerjakan',
      selesai:'Selesai', dibayar:'Dibayar'
    };

    content.innerHTML = `
      <div class="detail-header">
        <div>
          <div class="wo-id">${wo.id} · ${wo.jenis}</div>
          <h2>
            <span class="plate-inline">${wo.plat}</span>
            ${wo.merk}
          </h2>
          <div style="font-size:0.78rem; color:#7a7a7a; margin-top:8px;">
            <i class="fas fa-user" style="color:#ff6b1a;"></i> ${wo.pelanggan} ·
            <i class="fas fa-phone" style="color:#ff6b1a;"></i> ${wo.hp} ·
            <i class="fas fa-wrench" style="color:#ff6b1a;"></i> ${mek.nama}
          </div>
        </div>
        <div class="status-actions">
          ${['antre','dikerjakan','selesai'].map(s => `
            <button class="status-btn ${wo.status === s ? 'active' : ''}" data-status="${s}">
              ${statusLabel[s]}
            </button>
          `).join('')}
        </div>
      </div>

      <div class="detail-tabs">
        <button class="detail-tab ${activeTab === 'jasa' ? 'active' : ''}" data-tab="jasa">
          <i class="fas fa-screwdriver-wrench"></i> Jasa (${jasaItems.length})
        </button>
        <button class="detail-tab ${activeTab === 'part' ? 'active' : ''}" data-tab="part">
          <i class="fas fa-gear"></i> Sparepart (${partItems.length})
        </button>
        <button class="detail-tab ${activeTab === 'order' ? 'active' : ''}" data-tab="order">
          <i class="fas fa-list"></i> Ringkasan Order (${wo.items.length})
        </button>
      </div>

      <div class="tab-content" id="tabContent"></div>
    `;

    // Tab switch
    content.querySelectorAll('.detail-tab').forEach(tab => {
      tab.addEventListener('click', () => {
        activeTab = tab.dataset.tab;
        renderDetail();
      });
    });

    // Status buttons
    content.querySelectorAll('.status-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const s = btn.dataset.status;
        if (wo.status === 'dibayar') {
          toast('Order sudah dibayar, tidak bisa diubah', 'fa-lock');
          return;
        }
        wo.status = s;
        saveWO();
        renderQueue();
        renderDetail();
        toast(`Status diubah ke ${statusLabel[s]}`, 'fa-circle-check');
      });
    });

    renderTabContent(wo, subtotal, tax, total);
  }

  function renderTabContent(wo, subtotal, tax, total) {
    const box = document.getElementById('tabContent');
    const mek = getMekanik(wo.mekanik);

    if (activeTab === 'jasa' || activeTab === 'part') {
      // Katalog item sesuai tab
      const tipe = activeTab;
      const katalog = produkList.filter(p => p.tipe === tipe);
      const listHtml = katalog.map(p => {
        const out = p.tipe === 'part' && p.stok <= 0;
        const low = p.tipe === 'part' && p.stok > 0 && p.stok <= (p.min || 5);
        let stokClass = '';
        let stokText = '';
        if (p.tipe === 'part') {
          stokText = `Stok: ${p.stok}`;
          if (low) stokClass = 'low';
          if (p.stok <= 0) stokClass = 'out';
        } else {
          stokText = 'Jasa';
        }
        return `
          <div class="catalog-item ${out ? 'out' : ''}" data-id="${p.id}">
            <div class="ci-left">
              <div class="ci-icon"><i class="fas ${iconByTipe[p.tipe]}"></i></div>
              <div class="ci-info">
                <h4>${p.nama}</h4>
                <small>${p.kode}</small>
              </div>
            </div>
            <div class="ci-right">
              <div class="harga">${rp(p.harga)}</div>
              <div class="stok ${stokClass}">${stokText}</div>
            </div>
          </div>
        `;
      }).join('');

      box.innerHTML = `
        <div style="font-family:'Oswald',sans-serif; font-size:0.72rem; color:#7a7a7a; letter-spacing:1.5px; text-transform:uppercase; margin-bottom:12px;">
          <i class="fas fa-plus-circle" style="color:#ff6b1a;"></i> Klik untuk menambahkan ${tipe === 'jasa' ? 'jasa' : 'sparepart'}
        </div>
        <div class="catalog-grid">${listHtml}</div>
        <div style="margin-top:24px;">
          ${renderOrderItems(wo)}
        </div>
        ${renderOrderSummary(subtotal, tax, total, wo)}
      `;

      box.querySelectorAll('.catalog-item').forEach(item => {
        if (item.classList.contains('out')) return;
        item.addEventListener('click', () => {
          const id = parseInt(item.dataset.id);
          tambahItemKeWO(wo, id);
        });
      });
    } else {
      // Tab ringkasan order
      box.innerHTML = `
        ${renderOrderItems(wo)}
        ${renderOrderSummary(subtotal, tax, total, wo)}
      `;
    }

    attachOrderItemListeners(wo);
  }

  function renderOrderItems(wo) {
    if (wo.items.length === 0) {
      return `<div class="order-items"><div class="oi-empty">
        <i class="fas fa-list" style="font-size:2rem; color:#2a2a2a; display:block; margin-bottom:10px;"></i>
        Belum ada item ditambahkan
      </div></div>`;
    }

    const rows = wo.items.map((it, idx) => `
      <div class="oi-row">
        <div>
          <div class="oi-name">${it.nama}</div>
          <div class="oi-code">${it.kode}</div>
        </div>
        <div>
          <div class="oi-qty">
            <button data-act="min" data-idx="${idx}"><i class="fas fa-minus"></i></button>
            <span>${it.qty}</span>
            <button data-act="plus" data-idx="${idx}"><i class="fas fa-plus"></i></button>
          </div>
        </div>
        <div class="oi-price">${rp(it.harga)}</div>
        <div class="oi-subtotal">${rp(it.harga * it.qty)}</div>
        <button class="oi-del" data-act="del" data-idx="${idx}"><i class="fas fa-times"></i></button>
      </div>
    `).join('');

    return `
      <div class="order-items">
        <div class="oi-head">
          <div>Item</div>
          <div>Qty</div>
          <div>Harga</div>
          <div style="text-align:right;">Subtotal</div>
          <div></div>
        </div>
        ${rows}
      </div>
    `;
  }

  function renderOrderSummary(subtotal, tax, total, wo) {
    const mek = getMekanik(wo.mekanik);
    return `
      <div class="order-summary">
        <div class="sum-left">
          <div class="lbl">Total Order</div>
          <div class="val">${rp(total)}</div>
          <div class="sub">Subtotal ${rp(subtotal)} + PPN 10% ${rp(tax)}</div>
        </div>
        <button class="btn-bayar-wo" data-bayar="1" ${wo.items.length === 0 || wo.status === 'dibayar' ? 'disabled' : ''}>
          <i class="fas fa-cash-register"></i>
          ${wo.status === 'dibayar' ? 'Sudah Dibayar' : 'Proses Pembayaran'}
        </button>
      </div>
    `;
  }

  function attachOrderItemListeners(wo) {
    document.querySelectorAll('#tabContent button[data-act]').forEach(btn => {
      btn.addEventListener('click', () => {
        const idx = parseInt(btn.dataset.idx);
        const act = btn.dataset.act;
        if (wo.status === 'dibayar') {
          toast('Order sudah dibayar', 'fa-lock');
          return;
        }
        if (act === 'plus') incItem(wo, idx);
        else if (act === 'min') decItem(wo, idx);
        else if (act === 'del') delItem(wo, idx);
      });
    });

    const btnBayar = document.querySelector('#tabContent button[data-bayar]');
    if (btnBayar && !btnBayar.disabled) {
      btnBayar.addEventListener('click', () => {
        bukaModalBayar(wo);
      });
    }
  }

  function tambahItemKeWO(wo, produkId) {
    if (wo.status === 'dibayar') {
      toast('Order sudah dibayar', 'fa-lock');
      return;
    }
    const p = produkList.find(x => x.id === produkId);
    if (!p) return;
    if (p.tipe === 'part' && p.stok <= 0) {
      toast('Stok habis', 'fa-circle-exclamation');
      return;
    }

    const existing = wo.items.find(it => it.id === p.id);
    if (existing) {
      if (p.tipe === 'part' && existing.qty >= p.stok) {
        toast(`Stok ${p.nama} tersisa ${p.stok}`, 'fa-circle-exclamation');
        return;
      }
      existing.qty++;
    } else {
      wo.items.push({
        id: p.id, kode: p.kode, nama: p.nama,
        harga: p.harga, qty: 1, tipe: p.tipe
      });
    }
    if (p.tipe === 'part') {
      p.stok--;
      saveProduk();
    }
    saveWO();
    renderQueue();
    renderDetail();
    toast(`${p.nama} ditambahkan`, 'fa-plus');
  }

  function incItem(wo, idx) {
    const it = wo.items[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (it.tipe === 'part' && p && it.qty >= p.stok) {
      toast(`Stok tersisa ${p.stok}`, 'fa-circle-exclamation');
      return;
    }
    it.qty++;
    if (it.tipe === 'part' && p) { p.stok--; saveProduk(); }
    saveWO(); renderQueue(); renderDetail();
  }

  function decItem(wo, idx) {
    const it = wo.items[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (it.qty <= 1) wo.items.splice(idx, 1);
    else it.qty--;
    if (it.tipe === 'part' && p) { p.stok++; saveProduk(); }
    saveWO(); renderQueue(); renderDetail();
  }

  function delItem(wo, idx) {
    const it = wo.items[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (it.tipe === 'part' && p) { p.stok += it.qty; saveProduk(); }
    wo.items.splice(idx, 1);
    saveWO(); renderQueue(); renderDetail();
  }

  /* =========================================================
     ORDER BARU
  ========================================================= */
  document.getElementById('btnNewWO').addEventListener('click', () => {
    // reset form kendaraan
    document.getElementById('fPlat').value = '';
    document.getElementById('fJenis').value = 'Motor Matic';
    document.getElementById('fMerk').value = '';
    document.getElementById('fPelanggan').value = '';
    document.getElementById('fHP').value = '';
    document.getElementById('fKeluhan').value = '';
    // reset mekanik
    document.querySelectorAll('.mekanik-chip').forEach(c => c.classList.remove('selected'));
    document.querySelector('.mekanik-chip').classList.add('selected');
    activeWOId = null;
    renderQueue();
    renderDetail();
    document.getElementById('fPlat').focus();
    toast('Isi data kendaraan lalu tekan Enter di plat', 'fa-info-circle');
  });

  /* =========================================================
     MEKANIK CHIPS
  ========================================================= */
  function renderMekanikChips() {
    const box = document.getElementById('mekanikChips');
    box.innerHTML = MEKANIK_LIST.map((m, i) => `
      <div class="mekanik-chip ${i === 0 ? 'selected' : ''}" data-mid="${m.id}">
        <span class="mk-avatar">${m.inisial}</span> ${m.nama}
      </div>
    `).join('');
    box.querySelectorAll('.mekanik-chip').forEach(chip => {
      chip.addEventListener('click', () => {
        box.querySelectorAll('.mekanik-chip').forEach(c => c.classList.remove('selected'));
        chip.classList.add('selected');
      });
    });
  }

  /* =========================================================
     SUBMIT WO BARU — tekan ENTER di plat
  ========================================================= */
  document.getElementById('fPlat').addEventListener('keypress', e => {
    if (e.key === 'Enter') {
      e.preventDefault();
      buatWOBaru();
    }
  });

  function buatWOBaru() {
    const plat = document.getElementById('fPlat').value.trim().toUpperCase();
    if (!plat) {
      toast('Plat nomor harus diisi', 'fa-circle-exclamation');
      return;
    }
    const pelanggan = document.getElementById('fPelanggan').value.trim() || 'Pelanggan';
    const jenis = document.getElementById('fJenis').value;
    const merk = document.getElementById('fMerk').value.trim() || '-';
    const hp = document.getElementById('fHP').value.trim() || '-';
    const keluhan = document.getElementById('fKeluhan').value.trim();
    const mekanik = document.querySelector('.mekanik-chip.selected')?.dataset.mid || 'm1';

    const now = new Date();
    const woNum = 'WO-' +
      now.getFullYear().toString().slice(-2) +
      String(now.getMonth()+1).padStart(2,'0') +
      String(woList.length + 1).padStart(3,'0');

    const newWO = {
      id: woNum, plat, jenis, merk, pelanggan, hp, mekanik,
      keluhan, status:'antre', items:[],
      createdAt: now.toISOString()
    };
    woList.push(newWO);
    saveWO();
    activeWOId = newWO.id;

    // reset form
    document.getElementById('fPlat').value = '';
    document.getElementById('fMerk').value = '';
    document.getElementById('fPelanggan').value = '';
    document.getElementById('fHP').value = '';
    document.getElementById('fKeluhan').value = '';

    renderQueue();
    renderDetail();
    toast(`Work order ${woNum} dibuat`, 'fa-check-circle');
  }

  /* =========================================================
     MODAL BAYAR
  ========================================================= */
  const modalBayar = document.getElementById('modalBayar');
  const cashInput = document.getElementById('cashInput');
  const changeBox = document.getElementById('changeBox');
  const changeTxt = document.getElementById('changeTxt');
  let currentWO = null;

  function bukaModalBayar(wo) {
    if (wo.items.length === 0) return;
    currentWO = wo;
    const subtotal = woTotal(wo);
    const total = subtotal + Math.round(subtotal * 0.1);
    cashInput.value = '';
    payMethod = 'Tunai';
    document.querySelectorAll('#payGrid .pay-opt').forEach((el, i) => {
      el.classList.toggle('selected', i === 0);
    });
    document.getElementById('cashSection').style.display = 'block';
    updateChange();
    modalBayar.classList.add('show');
  }

  function getTotalWO(wo) {
    const sub = woTotal(wo);
    return sub + Math.round(sub * 0.1);
  }

  document.getElementById('closeBayar').addEventListener('click', () => modalBayar.classList.remove('show'));
  document.getElementById('btnBatalBayar').addEventListener('click', () => modalBayar.classList.remove('show'));

  document.querySelectorAll('#payGrid .pay-opt').forEach(opt => {
    opt.addEventListener('click', () => {
      document.querySelectorAll('#payGrid .pay-opt').forEach(x => x.classList.remove('selected'));
      opt.classList.add('selected');
      payMethod = opt.dataset.method;
      document.getElementById('cashSection').style.display = payMethod === 'Tunai' ? 'block' : 'none';
    });
  });

  function updateChange() {
    if (!currentWO || payMethod !== 'Tunai') return;
    const total = getTotalWO(currentWO);
    const cash = parseInt(cashInput.value) || 0;
    if (cash === 0) {
      changeBox.style.background = '#1a3a1a';
      changeBox.style.color = '#4ade80';
      changeTxt.textContent = rp(0);
      return;
    }
    const diff = cash - total;
    if (diff < 0) {
      changeBox.style.background = '#3a0a0a';
      changeBox.style.color = '#ff6666';
      changeTxt.textContent = '− ' + rp(Math.abs(diff));
    } else {
      changeBox.style.background = '#1a3a1a';
      changeBox.style.color = '#4ade80';
      changeTxt.textContent = rp(diff);
    }
  }
  cashInput.addEventListener('input', updateChange);

  document.getElementById('btnKonfirmasiBayar').addEventListener('click', () => {
    if (!currentWO) return;
    const total = getTotalWO(currentWO);
    if (payMethod === 'Tunai') {
      const cash = parseInt(cashInput.value) || 0;
      if (cash < total) {
        toast('Uang diterima kurang dari total', 'fa-circle-exclamation');
        return;
      }
    }
    prosesBayar(currentWO, total);
  });

  /* =========================================================
     PROSES BAYAR & INVOICE
  ========================================================= */
  function prosesBayar(wo, total) {
    const sub = woTotal(wo);
    const tax = total - sub;
    const cash = parseInt(cashInput.value) || 0;
    const change = payMethod === 'Tunai' ? cash - total : 0;

    const now = new Date();
    const invoice = {
      nomor: 'INV-' + wo.id.replace('WO-','') + '-' + String(Math.floor(Math.random()*900)+100),
      tanggal: now.toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' }),
      wo: { ...wo },
      mekanik: getMekanik(wo.mekanik),
      sub, tax, total,
      metode: payMethod,
      cash: payMethod === 'Tunai' ? cash : total,
      change
    };
    lastInvoice = invoice;

    wo.status = 'dibayar';
    saveWO();

    modalBayar.classList.remove('show');
    tampilkanInvoice(invoice);

    renderQueue();
    renderDetail();
    toast('Pembayaran berhasil', 'fa-check-circle');
  }

  function tampilkanInvoice(inv) {
    const jasa = inv.wo.items.filter(i => i.tipe === 'jasa');
    const part = inv.wo.items.filter(i => i.tipe === 'part');

    const jasaHtml = jasa.length === 0 ? '' : `
      <div class="inv-section">
        <div class="inv-section-title">Jasa Servis</div>
        <table class="inv-table">
          <thead>
            <tr>
              <th>Jasa</th>
              <th class="c">Qty</th>
              <th class="r">Harga</th>
              <th class="r">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            ${jasa.map(it => `
              <tr>
                <td>
                  <div>${it.nama}</div>
                  <div class="item-code">${it.kode}</div>
                </td>
                <td class="c">${it.qty}</td>
                <td class="r">${rp(it.harga)}</td>
                <td class="r total">${rp(it.harga * it.qty)}</td>
              </tr>
            `).join('')}
          </tbody>
        </table>
      </div>
    `;

    const partHtml = part.length === 0 ? '' : `
      <div class="inv-section">
        <div class="inv-section-title">Sparepart & Material</div>
        <table class="inv-table">
          <thead>
            <tr>
              <th>Sparepart</th>
              <th class="c">Qty</th>
              <th class="r">Harga</th>
              <th class="r">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            ${part.map(it => `
              <tr>
                <td>
                  <div>${it.nama}</div>
                  <div class="item-code">${it.kode}</div>
                </td>
                <td class="c">${it.qty}</td>
                <td class="r">${rp(it.harga)}</td>
                <td class="r total">${rp(it.harga * it.qty)}</td>
              </tr>
            `).join('')}
          </tbody>
        </table>
      </div>
    `;

    document.getElementById('invoiceBody').innerHTML = `
      <div class="invoice">
        <div class="inv-head">
          <div class="inv-brand">
            <h4>Garasi Prima</h4>
            <small>
              Bengkel & Service Center<br>
              Jl. Raya Mekanik No. 77, Jakarta<br>
              Telp: 021-8899001
            </small>
          </div>
          <div class="inv-number">
            <div class="num">${inv.nomor}</div>
            <div class="date">${inv.tanggal}</div>
          </div>
        </div>

        <div class="inv-info">
          <div class="ii-item">
            <span class="lbl">Pelanggan</span>
            <span class="val">${inv.wo.pelanggan}</span>
          </div>
          <div class="ii-item">
            <span class="lbl">No. HP</span>
            <span class="val">${inv.wo.hp}</span>
          </div>
          <div class="ii-item">
            <span class="lbl">Kendaraan</span>
            <span class="val">${inv.wo.merk}</span>
          </div>
          <div class="ii-item">
            <span class="lbl">Jenis</span>
            <span class="val">${inv.wo.jenis}</span>
          </div>
          <div class="ii-item" style="grid-column:1/-1;">
            <span class="lbl">Plat</span>
            <span class="val"><span class="plate-big">${inv.wo.plat}</span></span>
          </div>
          <div class="ii-item">
            <span class="lbl">Mekanik</span>
            <span class="val">${inv.mekanik.nama}</span>
          </div>
          <div class="ii-item">
            <span class="lbl">No. WO</span>
            <span class="val">${inv.wo.id}</span>
          </div>
          ${inv.wo.keluhan ? `<div class="ii-item" style="grid-column:1/-1;"><span class="lbl">Keluhan</span><span class="val">${inv.wo.keluhan}</span></div>` : ''}
        </div>

        ${jasaHtml}
        ${partHtml}

        <div class="inv-total">
          <div class="t-row"><span>Subtotal</span><span>${rp(inv.sub)}</span></div>
          <div class="t-row"><span>PPN 10%</span><span>${rp(inv.tax)}</span></div>
          <div class="t-grand"><span>TOTAL</span><span>${rp(inv.total)}</span></div>
          <div class="t-pay"><span>Bayar (${inv.metode})</span><span>${rp(inv.cash)}</span></div>
          <div class="t-pay"><span>Kembalian</span><span>${rp(inv.change)}</span></div>
        </div>

        <div class="inv-footer">
          <strong>GARANSI SERVIS 7 HARI</strong><br>
          Garansi berlaku untuk jasa servis, tidak termasuk sparepart<br>
          Simpan invoice ini sebagai bukti garansi<br>
          Terima kasih telah mempercayakan kendaraan Anda
        </div>
      </div>
    `;
    document.getElementById('modalInvoice').classList.add('show');
  }

  document.getElementById('closeInvoice').addEventListener('click', () => document.getElementById('modalInvoice').classList.remove('show'));
  document.getElementById('btnOrderBaru').addEventListener('click', () => {
    document.getElementById('modalInvoice').classList.remove('show');
    activeWOId = null;
    renderQueue();
    renderDetail();
  });
  document.getElementById('btnCetak').addEventListener('click', () => {
    if (!lastInvoice) return;
    const w = window.open('', '', 'width=700,height=900');
    w.document.write('<pre style="font-family:Courier New,monospace; font-size:12px; padding:20px; white-space:pre-wrap;">' +
      document.getElementById('invoiceBody').innerText + '</pre>');
    w.document.close(); w.focus(); w.print();
    toast('Invoice dikirim ke printer', 'fa-print');
  });

  /* =========================================================
     ADMIN — GUDANG
  ========================================================= */
  function renderAdmin() {
    const total = produkList.length;
    const selesai = woList.filter(w => w.status === 'selesai' || w.status === 'dibayar').length;
    const low = produkList.filter(p => p.tipe === 'part' && p.stok > 0 && p.stok <= (p.min || 5)).length;
    const out = produkList.filter(p => p.tipe === 'part' && p.stok <= 0).length;

    document.getElementById('sTotal').textContent = total;
    document.getElementById('sSelesai').textContent = selesai;
    document.getElementById('sLow').textContent = low;
    document.getElementById('sOut').textContent = out;

    const tbody = document.getElementById('adminBody');
    tbody.innerHTML = produkList.map(p => {
      let stokPill = 'ok', stokLabel = 'Aman';
      if (p.tipe === 'jasa') { stokPill = 'ok'; stokLabel = 'Jasa'; }
      else if (p.stok <= 0) { stokPill = 'out'; stokLabel = 'Habis'; }
      else if (p.stok <= (p.min || 5)) { stokPill = 'low'; stokLabel = 'Rendah'; }

      return `
        <tr>
          <td>
            <div class="td-name">
              <div class="td-icon"><i class="fas ${iconByTipe[p.tipe]}"></i></div>
              <div>
                <strong>${p.nama}</strong>
                <small>${p.kode}</small>
              </div>
            </div>
          </td>
          <td>
            <span class="badge-tipe ${p.tipe}">${p.tipe === 'jasa' ? 'Jasa' : 'Part'}</span>
          </td>
          <td style="font-family:'Oswald',sans-serif; font-weight:600;">${rp(p.harga)}</td>
          <td>
            ${p.tipe === 'jasa'
              ? '<span style="color:#7a7a7a;">—</span>'
              : `<div class="stok-num">${p.stok}</div>
                 <div class="stok-min">min ${p.min || 5}</div>
                 <div style="margin-top:4px;"><span class="stok-pill ${stokPill}">${stokLabel}</span></div>`}
          </td>
          <td>
            <div class="row-actions">
              <button class="icon-btn" data-act="edit" data-id="${p.id}" title="Edit"><i class="fas fa-pen"></i></button>
              <button class="icon-btn danger" data-act="del" data-id="${p.id}" title="Hapus"><i class="fas fa-trash"></i></button>
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
     MODAL PRODUK ADMIN
  ========================================================= */
  const modalProduk = document.getElementById('modalProduk');

  function bukaFormProduk(id) {
    const isEdit = id != null;
    document.getElementById('modalProdukTitle').textContent = isEdit ? 'Edit Item' : 'Tambah Item';
    document.getElementById('editId').value = isEdit ? id : '';
    document.getElementById('fNamaItem').value = '';
    document.getElementById('fKodeItem').value = '';
    document.getElementById('fTipeItem').value = 'part';
    document.getElementById('fHargaItem').value = '';
    document.getElementById('fStokItem').value = '10';
    document.getElementById('fMinItem').value = '5';

    if (isEdit) {
      const p = produkList.find(x => x.id === id);
      if (p) {
        document.getElementById('fNamaItem').value = p.nama;
        document.getElementById('fKodeItem').value = p.kode;
        document.getElementById('fTipeItem').value = p.tipe;
        document.getElementById('fHargaItem').value = p.harga;
        document.getElementById('fStokItem').value = p.stok;
        document.getElementById('fMinItem').value = p.min || 5;
      }
    }
    modalProduk.classList.add('show');
  }

  document.getElementById('btnTambahProduk').addEventListener('click', () => bukaFormProduk(null));
  document.getElementById('closeProduk').addEventListener('click', () => modalProduk.classList.remove('show'));
  document.getElementById('btnBatalProduk').addEventListener('click', () => modalProduk.classList.remove('show'));

  document.getElementById('btnSimpanProduk').addEventListener('click', () => {
    const editId = document.getElementById('editId').value;
    const nama = document.getElementById('fNamaItem').value.trim();
    const kode = document.getElementById('fKodeItem').value.trim().toUpperCase();
    const tipe = document.getElementById('fTipeItem').value;
    const harga = parseInt(document.getElementById('fHargaItem').value);
    const stok = parseInt(document.getElementById('fStokItem').value);
    const min = parseInt(document.getElementById('fMinItem').value) || 0;

    if (!nama) return toast('Nama item harus diisi', 'fa-circle-exclamation');
    if (!kode) return toast('Kode item harus diisi', 'fa-circle-exclamation');
    if (isNaN(harga) || harga < 0) return toast('Harga tidak valid', 'fa-circle-exclamation');
    if (isNaN(stok) || stok < 0) return toast('Stok tidak valid', 'fa-circle-exclamation');

    if (editId) {
      const p = produkList.find(x => x.id === parseInt(editId));
      if (p) Object.assign(p, { nama, kode, tipe, harga, stok, min });
      toast('Item diperbarui', 'fa-circle-check');
    } else {
      if (produkList.some(p => p.kode === kode)) {
        return toast('Kode sudah dipakai', 'fa-circle-exclamation');
      }
      const newId = produkList.length ? Math.max(...produkList.map(p => p.id)) + 1 : 1;
      produkList.push({ id:newId, kode, nama, tipe, harga, stok, min });
      toast('Item baru ditambahkan', 'fa-circle-check');
    }
    saveProduk();
    modalProduk.classList.remove('show');
    renderAdmin();
    renderDetail();
  });

  function hapusProduk(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (!confirm(`Hapus item "${p.nama}"?`)) return;
    produkList = produkList.filter(x => x.id !== id);
    saveProduk();
    renderAdmin();
    renderDetail();
    toast('Item dihapus', 'fa-trash');
  }

  /* =========================================================
     RESET DATA
  ========================================================= */
  document.getElementById('btnResetData').addEventListener('click', () => {
    if (!confirm('Reset semua data produk & work order ke default?')) return;
    produkList = JSON.parse(JSON.stringify(defaultProduk));
    woList = JSON.parse(JSON.stringify(defaultWO));
    activeWOId = null;
    saveProduk();
    saveWO();
    renderAdmin();
    renderQueue();
    renderDetail();
    toast('Data direset', 'fa-rotate');
  });

  /* =========================================================
     INIT
  ========================================================= */
  renderMekanikChips();
  renderQueue();
  renderDetail();
  renderAdmin();
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>