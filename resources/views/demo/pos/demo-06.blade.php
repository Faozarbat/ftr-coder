@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PrimaMart — POS Minimarket</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
* { margin:0; padding:0; box-sizing:border-box; }
body {
  font-family:'Inter',system-ui,-apple-system,sans-serif;
  background:#eef2f1;
  color:#0f1f1a;
  min-height:100vh;
  font-size:14px;
}

.app {
  max-width:1560px;
  margin:0 auto;
  background:#f7faf9;
  min-height:100vh;
  display:flex; flex-direction:column;
}

/* ===== HEADER ===== */
.topbar {
  background:#0a5d3f;
  color:#fff;
  padding:0 24px;
  height:62px;
  display:flex; align-items:center; justify-content:space-between;
  border-bottom:3px solid #4ade80;
  position:sticky; top:0; z-index:50;
}
.brand { display:flex; align-items:center; gap:12px; }
.brand-mark {
  width:38px; height:38px;
  background:#4ade80;
  color:#0a5d3f;
  display:flex; align-items:center; justify-content:center;
  font-size:1.15rem;
  font-weight:800;
  border-radius:8px;
}
.brand h1 {
  font-size:1.15rem;
  font-weight:800;
  letter-spacing:-0.3px;
  line-height:1;
}
.brand h1 small {
  display:block;
  font-size:0.62rem;
  font-weight:500;
  color:#a7d6c2;
  letter-spacing:1.8px;
  text-transform:uppercase;
  margin-top:4px;
}

.topbar-right { display:flex; align-items:center; gap:14px; }
.mode-nav {
  display:flex;
  background:#084a32;
  padding:4px;
  border-radius:8px;
  gap:2px;
}
.mode-nav button {
  background:transparent;
  border:none;
  color:#a7d6c2;
  padding:8px 16px;
  border-radius:6px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.76rem;
  font-weight:600;
  display:flex; align-items:center; gap:7px;
  transition:all 0.12s;
}
.mode-nav button:hover { color:#fff; }
.mode-nav button.active {
  background:#4ade80;
  color:#0a5d3f;
}
.user-badge {
  display:flex; align-items:center; gap:9px;
  background:#084a32;
  padding:6px 14px 6px 6px;
  border-radius:40px;
}
.user-badge .avatar {
  width:30px; height:30px;
  background:#4ade80;
  color:#0a5d3f;
  border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  font-weight:800;
  font-size:0.8rem;
}
.user-badge .info { line-height:1.15; }
.user-badge .name {
  font-size:0.78rem; font-weight:700; color:#fff;
}
.user-badge .role {
  font-size:0.6rem; color:#a7d6c2;
  text-transform:uppercase; letter-spacing:0.8px;
}

/* ===== PAGE ===== */
.page { display:none; flex:1; overflow:hidden; }
.page.active { display:flex; flex-direction:column; }

/* =========================================================
   PAGE: KASIR
========================================================= */
.kasir-grid {
  display:grid;
  grid-template-columns:1fr 400px;
  gap:0;
  flex:1;
  min-height:0;
}

/* KIRI */
.kiri {
  padding:18px 22px;
  overflow-y:auto;
  min-height:0;
}

/* Barcode input box */
.barcode-box {
  background:#fff;
  border:2px solid #0a5d3f;
  border-radius:10px;
  padding:16px 20px;
  margin-bottom:16px;
  display:flex;
  align-items:center;
  gap:14px;
  transition:all 0.15s;
}
.barcode-box.scan-flash {
  background:#d1fae5;
  border-color:#4ade80;
}
.barcode-box .barcode-icon {
  width:52px; height:52px;
  background:#0a5d3f;
  color:#4ade80;
  display:flex; align-items:center; justify-content:center;
  border-radius:8px;
  font-size:1.6rem;
  flex-shrink:0;
}
.barcode-box .input-area {
  flex:1;
}
.barcode-box .input-area label {
  display:block;
  font-size:0.66rem;
  font-weight:700;
  color:#0a5d3f;
  text-transform:uppercase;
  letter-spacing:1.5px;
  margin-bottom:4px;
}
.barcode-box .input-area input {
  width:100%;
  border:none;
  background:transparent;
  font-family:'Courier New',monospace;
  font-size:1.35rem;
  font-weight:700;
  letter-spacing:2px;
  color:#0f1f1a;
  outline:none;
  padding:2px 0;
}
.barcode-box .input-area input::placeholder {
  color:#b8c9c2;
  font-size:0.95rem;
  letter-spacing:1px;
  font-weight:400;
}
.barcode-box .scan-info {
  font-size:0.72rem;
  color:#6b8079;
  margin-top:2px;
}

/* Search + kategori */
.search-row {
  display:flex;
  gap:10px;
  margin-bottom:14px;
  flex-wrap:wrap;
}
.search-box {
  flex:1;
  min-width:200px;
  display:flex; align-items:center;
  background:#fff;
  border:1px solid #d5e0dc;
  border-radius:8px;
  padding:0 14px;
}
.search-box i { color:#6b8079; font-size:0.85rem; }
.search-box input {
  border:none; background:transparent; outline:none;
  padding:11px 10px; width:100%;
  font-size:0.9rem; color:#0f1f1a;
}
.search-box input::placeholder { color:#b8c9c2; }

.kat-tabs {
  display:flex; gap:6px; flex-wrap:wrap;
  margin-bottom:16px;
}
.kat-tab {
  background:#fff;
  border:1.5px solid #d5e0dc;
  padding:7px 14px;
  border-radius:6px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.76rem;
  font-weight:600;
  color:#4a6359;
  display:flex; align-items:center; gap:6px;
  transition:all 0.12s;
}
.kat-tab:hover { border-color:#0a5d3f; color:#0a5d3f; }
.kat-tab.active {
  background:#0a5d3f;
  border-color:#0a5d3f;
  color:#fff;
}
.kat-tab.active i { color:#4ade80; }
.kat-tab i { font-size:0.7rem; color:#6b8079; }

/* Grid produk */
.prod-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(150px,1fr));
  gap:10px;
}
.prod-card {
  background:#fff;
  border:1px solid #e0e9e6;
  border-radius:8px;
  padding:12px 10px;
  cursor:pointer;
  transition:all 0.1s;
  display:flex;
  flex-direction:column;
  gap:6px;
  position:relative;
}
.prod-card:hover {
  border-color:#0a5d3f;
  box-shadow:0 4px 10px -4px rgba(10,93,63,0.2);
  transform:translateY(-1px);
}
.prod-card.out { opacity:0.4; cursor:not-allowed; }
.prod-card.out:hover { transform:none; box-shadow:none; border-color:#e0e9e6; }
.prod-card .p-icon {
  width:38px; height:38px;
  background:#e8f5ef;
  color:#0a5d3f;
  display:flex; align-items:center; justify-content:center;
  border-radius:6px;
  font-size:1rem;
}
.prod-card h4 {
  font-size:0.82rem;
  font-weight:600;
  color:#0f1f1a;
  line-height:1.25;
  min-height:32px;
  overflow:hidden;
  display:-webkit-box;
  -webkit-line-clamp:2;
  -webkit-box-orient:vertical;
}
.prod-card .p-foot {
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-top:auto;
}
.prod-card .p-price {
  font-size:0.92rem;
  font-weight:800;
  color:#0a5d3f;
}
.prod-card .p-stok {
  font-size:0.62rem;
  color:#6b8079;
  background:#eef2f1;
  padding:2px 8px;
  border-radius:10px;
  font-weight:600;
}
.prod-card .p-stok.low { background:#fef3c7; color:#92400e; }
.prod-card .p-stok.out { background:#fee2e2; color:#991b1b; }

.prod-card .p-barcode {
  position:absolute;
  top:8px; right:8px;
  font-family:'Courier New',monospace;
  font-size:0.58rem;
  color:#b8c9c2;
  letter-spacing:0.5px;
}

/* KANAN: keranjang */
.kanan {
  background:#fff;
  border-left:1px solid #d5e0dc;
  display:flex;
  flex-direction:column;
  min-height:0;
}
.cart-head {
  padding:16px 20px;
  background:#0a5d3f;
  color:#fff;
  display:flex;
  justify-content:space-between;
  align-items:center;
}
.cart-head .info h3 {
  font-size:0.95rem;
  font-weight:700;
  display:flex;
  align-items:center;
  gap:8px;
}
.cart-head .info h3 i { color:#4ade80; }
.cart-head .info .meta {
  font-size:0.68rem;
  color:#a7d6c2;
  margin-top:4px;
  letter-spacing:0.5px;
}
.cart-head .badge-count {
  background:#4ade80;
  color:#0a5d3f;
  font-weight:800;
  padding:4px 12px;
  border-radius:20px;
  font-size:0.78rem;
}

.cart-body {
  flex:1;
  overflow-y:auto;
  padding:14px 18px;
  min-height:0;
}
.cart-empty {
  text-align:center;
  padding:50px 20px;
  color:#b8c9c2;
}
.cart-empty i {
  font-size:2.4rem;
  display:block;
  margin-bottom:12px;
  color:#d5e0dc;
}
.cart-empty strong {
  display:block;
  color:#6b8079;
  font-size:0.88rem;
  margin-bottom:4px;
}

.cart-row {
  padding:10px 0;
  border-bottom:1px solid #eef2f1;
  display:grid;
  grid-template-columns:1fr auto;
  gap:8px;
}
.cart-row:last-child { border-bottom:none; }
.cart-row .cr-name {
  font-size:0.86rem;
  font-weight:600;
  color:#0f1f1a;
  margin-bottom:2px;
}
.cart-row .cr-meta {
  font-size:0.68rem;
  color:#6b8079;
  font-family:'Courier New',monospace;
}
.cart-row .cr-price {
  font-size:0.88rem;
  font-weight:700;
  color:#0a5d3f;
  text-align:right;
}
.cart-row .cr-controls {
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-top:8px;
  grid-column:1/-1;
}
.cr-qty {
  display:flex;
  align-items:center;
  border:1px solid #d5e0dc;
  border-radius:6px;
  overflow:hidden;
}
.cr-qty button {
  background:#f7faf9;
  border:none;
  width:26px; height:26px;
  cursor:pointer;
  color:#0a5d3f;
  font-size:0.72rem;
  font-weight:700;
}
.cr-qty button:hover { background:#0a5d3f; color:#fff; }
.cr-qty span {
  padding:0 10px;
  font-weight:700;
  font-size:0.8rem;
  min-width:28px;
  text-align:center;
  line-height:26px;
  border-left:1px solid #d5e0dc;
  border-right:1px solid #d5e0dc;
}
.cr-actions {
  display:flex;
  gap:4px;
}
.cr-action {
  background:transparent;
  border:1px solid #d5e0dc;
  color:#6b8079;
  padding:3px 8px;
  border-radius:5px;
  cursor:pointer;
  font-size:0.66rem;
  font-weight:600;
}
.cr-action:hover { background:#0a5d3f; color:#fff; border-color:#0a5d3f; }

.cart-foot {
  background:#f7faf9;
  border-top:2px solid #0a5d3f;
  padding:16px 20px;
}
.cf-row {
  display:flex;
  justify-content:space-between;
  font-size:0.82rem;
  color:#4a6359;
  margin-bottom:6px;
}
.cf-row.discount { color:#b45309; font-weight:600; }
.cf-row.grand {
  font-size:1.5rem;
  font-weight:800;
  color:#0a5d3f;
  padding-top:10px;
  margin-top:8px;
  border-top:1px dashed #d5e0dc;
  margin-bottom:14px;
}
.btn-bayar-big {
  width:100%;
  background:#0a5d3f;
  color:#fff;
  border:none;
  padding:16px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:1rem;
  font-weight:800;
  letter-spacing:0.5px;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:10px;
  transition:background 0.12s;
}
.btn-bayar-big:hover { background:#084a32; }
.btn-bayar-big:disabled {
  background:#c7d5d0;
  cursor:not-allowed;
}
.btn-bayar-big i { color:#4ade80; }
.btn-bayar-big:disabled i { color:#eef2f1; }

/* Member toggle */
.member-row {
  display:flex;
  align-items:center;
  gap:10px;
  padding:10px 12px;
  background:#f0faf5;
  border:1px solid #c5e8d5;
  border-radius:6px;
  margin-bottom:12px;
}
.member-row input[type="checkbox"] {
  width:16px; height:16px;
  accent-color:#0a5d3f;
  cursor:pointer;
}
.member-row label {
  font-size:0.78rem;
  font-weight:600;
  color:#0a5d3f;
  cursor:pointer;
  flex:1;
}
.member-row .member-info {
  font-size:0.68rem;
  color:#6b8079;
}

/* =========================================================
   PAGE: PRODUK (admin)
========================================================= */
.manage-wrap {
  padding:22px 26px;
  flex:1;
  overflow-y:auto;
}
.manage-head {
  display:flex;
  justify-content:space-between;
  align-items:center;
  flex-wrap:wrap; gap:14px;
  margin-bottom:20px;
}
.manage-head h2 {
  font-size:1.3rem;
  font-weight:800;
  color:#0f1f1a;
  letter-spacing:-0.3px;
}
.manage-head h2 small {
  display:block;
  font-size:0.72rem;
  font-weight:500;
  color:#6b8079;
  letter-spacing:1px;
  text-transform:uppercase;
  margin-top:4px;
}
.manage-actions { display:flex; gap:10px; }
.btn-solid {
  background:#0a5d3f;
  color:#fff;
  border:none;
  padding:10px 18px;
  border-radius:7px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.8rem;
  font-weight:700;
  display:flex; align-items:center; gap:8px;
}
.btn-solid:hover { background:#084a32; }
.btn-solid i { color:#4ade80; }
.btn-outline {
  background:#fff;
  border:1.5px solid #d5e0dc;
  color:#4a6359;
  padding:10px 18px;
  border-radius:7px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.8rem;
  font-weight:700;
  display:flex; align-items:center; gap:8px;
}
.btn-outline:hover { border-color:#0a5d3f; color:#0a5d3f; }

/* Filter bar */
.filter-bar {
  background:#fff;
  border:1px solid #d5e0dc;
  border-radius:8px;
  padding:14px 18px;
  margin-bottom:14px;
  display:flex;
  gap:14px;
  flex-wrap:wrap;
  align-items:center;
}
.filter-bar .filter-item {
  display:flex;
  align-items:center;
  gap:8px;
}
.filter-bar label {
  font-size:0.72rem;
  font-weight:600;
  color:#4a6359;
  text-transform:uppercase;
  letter-spacing:0.6px;
}
.filter-bar select,
.filter-bar input {
  border:1px solid #d5e0dc;
  background:#f7faf9;
  padding:7px 10px;
  border-radius:6px;
  font-family:'Inter',sans-serif;
  font-size:0.8rem;
  color:#0f1f1a;
  outline:none;
}
.filter-bar select:focus,
.filter-bar input:focus { border-color:#0a5d3f; background:#fff; }

/* Table */
.table-box {
  background:#fff;
  border:1px solid #d5e0dc;
  border-radius:8px;
  overflow:hidden;
}
table { width:100%; border-collapse:collapse; font-size:0.84rem; }
thead { background:#f7faf9; }
th {
  text-align:left;
  padding:12px 14px;
  font-size:0.68rem;
  font-weight:700;
  color:#4a6359;
  text-transform:uppercase;
  letter-spacing:0.6px;
  border-bottom:1px solid #d5e0dc;
  white-space:nowrap;
}
td {
  padding:12px 14px;
  border-bottom:1px solid #eef2f1;
  color:#0f1f1a;
  vertical-align:middle;
}
tbody tr:last-child td { border-bottom:none; }
tbody tr:hover { background:#f7faf9; }
.td-produk {
  display:flex;
  align-items:center;
  gap:10px;
}
.td-icon {
  width:34px; height:34px;
  background:#e8f5ef;
  color:#0a5d3f;
  display:flex; align-items:center; justify-content:center;
  border-radius:6px;
  font-size:0.9rem;
  flex-shrink:0;
}
.td-info strong {
  font-weight:700;
  color:#0f1f1a;
  display:block;
  font-size:0.84rem;
}
.td-info small {
  font-family:'Courier New',monospace;
  font-size:0.66rem;
  color:#6b8079;
  letter-spacing:0.5px;
  margin-top:2px;
}
.badge-kat {
  display:inline-block;
  padding:3px 10px;
  border-radius:4px;
  font-size:0.66rem;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:0.4px;
}
.badge-kat.makanan { background:#fef3c7; color:#78350f; }
.badge-kat.minuman { background:#dbeafe; color:#1e40af; }
.badge-kat.snack { background:#fce7f3; color:#831843; }
.badge-kat.sembako { background:#e0e7ff; color:#3730a3; }
.badge-kat.kebersihan { background:#d1fae5; color:#065f46; }
.badge-kat.lainnya { background:#f3e8ff; color:#6b21a8; }

.stok-cell {
  font-weight:700;
  color:#0f1f1a;
}
.stok-cell small {
  display:block;
  font-size:0.66rem;
  color:#6b8079;
  font-weight:500;
  margin-top:2px;
}
.stok-cell.low { color:#b45309; }
.stok-cell.out { color:#991b1b; }

.row-actions { display:flex; gap:5px; justify-content:flex-end; }
.icon-btn {
  width:30px; height:30px;
  border:1px solid #d5e0dc;
  background:#fff;
  color:#6b8079;
  cursor:pointer;
  border-radius:5px;
  font-size:0.75rem;
  display:flex; align-items:center; justify-content:center;
}
.icon-btn:hover { background:#0a5d3f; color:#fff; border-color:#0a5d3f; }
.icon-btn.danger:hover { background:#dc2626; border-color:#dc2626; }

/* =========================================================
   PAGE: TRANSAKSI (riwayat)
========================================================= */
.tx-table tr.tx-row {
  cursor:pointer;
}
.tx-num {
  font-family:'Courier New',monospace;
  font-weight:700;
  color:#0a5d3f;
  letter-spacing:0.5px;
}
.tx-badge {
  display:inline-block;
  padding:3px 10px;
  border-radius:4px;
  font-size:0.66rem;
  font-weight:700;
  text-transform:uppercase;
}
.tx-badge.tunai { background:#e8f5ef; color:#0a5d3f; }
.tx-badge.debit { background:#dbeafe; color:#1e40af; }
.tx-badge.qris { background:#fce7f3; color:#831843; }

/* =========================================================
   PAGE: LAPORAN (dashboard)
========================================================= */
.report-wrap {
  padding:22px 26px;
  flex:1;
  overflow-y:auto;
}
.report-head {
  display:flex;
  justify-content:space-between;
  align-items:flex-end;
  flex-wrap:wrap; gap:14px;
  margin-bottom:22px;
  padding-bottom:16px;
  border-bottom:2px solid #0a5d3f;
}
.report-head h2 {
  font-size:1.3rem;
  font-weight:800;
  color:#0f1f1a;
}
.report-head h2 small {
  display:block;
  font-size:0.72rem;
  font-weight:500;
  color:#6b8079;
  letter-spacing:1px;
  text-transform:uppercase;
  margin-top:4px;
}
.report-filter {
  display:flex;
  align-items:center;
  gap:8px;
}
.report-filter select {
  border:1.5px solid #d5e0dc;
  background:#fff;
  padding:9px 14px;
  border-radius:7px;
  font-family:'Inter',sans-serif;
  font-size:0.82rem;
  font-weight:600;
  color:#0f1f1a;
  outline:none;
}
.report-filter select:focus { border-color:#0a5d3f; }

/* KPI row */
.kpi-row {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(190px,1fr));
  gap:14px;
  margin-bottom:20px;
}
.kpi-card {
  background:#fff;
  border:1px solid #d5e0dc;
  border-radius:10px;
  padding:16px 18px;
  position:relative;
  overflow:hidden;
}
.kpi-card::before {
  content:'';
  position:absolute;
  top:0; left:0;
  width:4px; height:100%;
  background:#0a5d3f;
}
.kpi-card.green::before { background:#4ade80; }
.kpi-card.blue::before { background:#3b82f6; }
.kpi-card.amber::before { background:#f59e0b; }
.kpi-card.red::before { background:#dc2626; }
.kpi-card .k-lbl {
  font-size:0.68rem;
  color:#6b8079;
  text-transform:uppercase;
  letter-spacing:1px;
  font-weight:700;
  margin-bottom:8px;
  display:flex;
  align-items:center;
  gap:6px;
}
.kpi-card .k-lbl i { color:#0a5d3f; font-size:0.72rem; }
.kpi-card.green .k-lbl i { color:#4ade80; }
.kpi-card.blue .k-lbl i { color:#3b82f6; }
.kpi-card.amber .k-lbl i { color:#f59e0b; }
.kpi-card.red .k-lbl i { color:#dc2626; }
.kpi-card .k-val {
  font-size:1.55rem;
  font-weight:800;
  color:#0f1f1a;
  line-height:1;
  letter-spacing:-0.5px;
}
.kpi-card .k-sub {
  font-size:0.7rem;
  color:#6b8079;
  margin-top:6px;
}
.kpi-card .k-sub.up { color:#0a5d3f; font-weight:600; }
.kpi-card .k-sub.down { color:#dc2626; font-weight:600; }

/* Chart */
.chart-box {
  background:#fff;
  border:1px solid #d5e0dc;
  border-radius:10px;
  padding:20px;
  margin-bottom:20px;
}
.chart-box .ch-head {
  display:flex;
  justify-content:space-between;
  align-items:baseline;
  margin-bottom:18px;
}
.chart-box .ch-head h3 {
  font-size:0.95rem;
  font-weight:800;
  color:#0f1f1a;
  display:flex;
  align-items:center;
  gap:10px;
}
.chart-box .ch-head h3 i { color:#0a5d3f; }
.chart-box .ch-head small {
  font-size:0.7rem;
  color:#6b8079;
  font-weight:500;
  letter-spacing:0.5px;
}

.bar-chart {
  display:flex;
  align-items:flex-end;
  gap:8px;
  height:180px;
  padding:0 4px;
  border-bottom:1px solid #d5e0dc;
}
.bar-col {
  flex:1;
  display:flex;
  flex-direction:column;
  align-items:center;
  gap:4px;
  height:100%;
  justify-content:flex-end;
}
.bar-col .bar-val {
  font-size:0.62rem;
  font-weight:700;
  color:#0a5d3f;
  opacity:0;
  transition:opacity 0.15s;
}
.bar-col:hover .bar-val { opacity:1; }
.bar-col .bar {
  width:100%;
  background:#0a5d3f;
  border-radius:4px 4px 0 0;
  min-height:4px;
  transition:all 0.15s;
  position:relative;
}
.bar-col:hover .bar { background:#4ade80; }
.bar-col .bar.top { background:#4ade80; }
.bar-labels {
  display:flex;
  gap:8px;
  padding:8px 4px 0;
}
.bar-label {
  flex:1;
  text-align:center;
  font-size:0.65rem;
  color:#6b8079;
  font-weight:600;
}

/* Two-col: top produk + metode */
.two-col {
  display:grid;
  grid-template-columns:1.4fr 1fr;
  gap:16px;
  margin-bottom:20px;
}
@media (max-width: 900px) {
  .two-col { grid-template-columns:1fr; }
}
.list-box {
  background:#fff;
  border:1px solid #d5e0dc;
  border-radius:10px;
  padding:20px;
}
.list-box .lb-head {
  display:flex;
  justify-content:space-between;
  align-items:baseline;
  margin-bottom:14px;
  padding-bottom:12px;
  border-bottom:1px solid #eef2f1;
}
.list-box .lb-head h3 {
  font-size:0.92rem;
  font-weight:800;
  color:#0f1f1a;
  display:flex;
  align-items:center;
  gap:8px;
}
.list-box .lb-head h3 i { color:#0a5d3f; }

.top-item {
  display:grid;
  grid-template-columns:30px 1fr auto;
  gap:12px;
  align-items:center;
  padding:11px 0;
  border-bottom:1px dashed #eef2f1;
}
.top-item:last-child { border-bottom:none; }
.top-item .ti-rank {
  width:26px; height:26px;
  background:#f7faf9;
  color:#0a5d3f;
  border-radius:6px;
  display:flex; align-items:center; justify-content:center;
  font-weight:800;
  font-size:0.74rem;
}
.top-item:nth-child(1) .ti-rank { background:#fef3c7; color:#78350f; }
.top-item:nth-child(2) .ti-rank { background:#e0e7ff; color:#3730a3; }
.top-item:nth-child(3) .ti-rank { background:#fce7f3; color:#831843; }
.top-item .ti-info strong {
  display:block;
  font-size:0.82rem;
  color:#0f1f1a;
  font-weight:700;
}
.top-item .ti-info small {
  display:block;
  font-size:0.68rem;
  color:#6b8079;
  margin-top:2px;
}
.top-item .ti-qty {
  font-size:0.88rem;
  font-weight:800;
  color:#0a5d3f;
}

.pay-method {
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:12px 0;
  border-bottom:1px dashed #eef2f1;
}
.pay-method:last-child { border-bottom:none; }
.pay-method .pm-info {
  display:flex;
  align-items:center;
  gap:10px;
}
.pay-method .pm-icon {
  width:34px; height:34px;
  border-radius:6px;
  background:#e8f5ef;
  color:#0a5d3f;
  display:flex; align-items:center; justify-content:center;
  font-size:0.9rem;
}
.pay-method .pm-info strong {
  display:block;
  font-size:0.82rem;
  font-weight:700;
}
.pay-method .pm-info small {
  font-size:0.68rem;
  color:#6b8079;
}
.pay-method .pm-value {
  text-align:right;
}
.pay-method .pm-value strong {
  display:block;
  font-size:0.9rem;
  font-weight:800;
  color:#0a5d3f;
}
.pay-method .pm-value small {
  font-size:0.66rem;
  color:#6b8079;
}

/* Rekap kas */
.kas-rekap {
  background:#0a5d3f;
  color:#fff;
  border-radius:10px;
  padding:22px 24px;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(150px,1fr));
  gap:16px;
}
.kas-item .ki-lbl {
  font-size:0.68rem;
  color:#a7d6c2;
  text-transform:uppercase;
  letter-spacing:1.2px;
  font-weight:600;
  margin-bottom:6px;
}
.kas-item .ki-val {
  font-size:1.35rem;
  font-weight:800;
  letter-spacing:-0.4px;
}
.kas-item .ki-val.green { color:#4ade80; }

/* Empty */
.empty-report {
  text-align:center;
  padding:60px 20px;
  color:#b8c9c2;
}
.empty-report i {
  font-size:3rem;
  display:block;
  margin-bottom:14px;
  color:#d5e0dc;
}
.empty-report strong {
  display:block;
  color:#6b8079;
  font-size:0.95rem;
  margin-bottom:6px;
}
.empty-report p { font-size:0.82rem; }

/* =========================================================
   MODAL
========================================================= */
.modal-bg {
  position:fixed; inset:0;
  background:rgba(15,31,26,0.7);
  display:none;
  align-items:center;
  justify-content:center;
  z-index:100;
  padding:16px;
}
.modal-bg.show { display:flex; }
.modal {
  background:#fff;
  border-radius:12px;
  width:100%;
  max-width:500px;
  max-height:92vh;
  overflow-y:auto;
  box-shadow:0 25px 60px -15px rgba(10,93,63,0.4);
}
.modal-head {
  padding:20px 24px 16px;
  border-bottom:1px solid #eef2f1;
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
}
.modal-head h3 {
  font-size:1.1rem;
  font-weight:800;
  color:#0f1f1a;
  display:flex;
  align-items:center;
  gap:10px;
}
.modal-head h3 i { color:#0a5d3f; }
.modal-head .sub {
  font-size:0.75rem;
  color:#6b8079;
  margin-top:5px;
}
.modal-close {
  background:transparent;
  border:1px solid #d5e0dc;
  width:30px; height:30px;
  border-radius:6px;
  color:#6b8079;
  cursor:pointer;
}
.modal-close:hover { background:#0a5d3f; color:#fff; border-color:#0a5d3f; }
.modal-body { padding:20px 24px; }
.modal-foot {
  padding:16px 24px 20px;
  border-top:1px solid #eef2f1;
  display:flex;
  gap:10px;
  background:#f7faf9;
  border-radius:0 0 12px 12px;
}
.modal-foot .btn-outline { flex:1; justify-content:center; }
.modal-foot .btn-solid { flex:2; justify-content:center; padding:13px; }

/* Form */
.field { margin-bottom:14px; }
.field label {
  display:block;
  font-size:0.72rem;
  font-weight:700;
  color:#4a6359;
  text-transform:uppercase;
  letter-spacing:0.6px;
  margin-bottom:6px;
}
.field input,
.field select,
.field textarea {
  width:100%;
  border:1.5px solid #d5e0dc;
  background:#fff;
  padding:11px 13px;
  border-radius:7px;
  font-family:'Inter',sans-serif;
  font-size:0.88rem;
  color:#0f1f1a;
  outline:none;
  transition:border-color 0.12s;
}
.field input:focus,
.field select:focus,
.field textarea:focus { border-color:#0a5d3f; }
.field textarea { resize:vertical; min-height:60px; }

/* Payment options */
.pay-tabs {
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:8px;
  margin-bottom:16px;
}
.pay-tab {
  border:2px solid #d5e0dc;
  border-radius:8px;
  padding:14px 6px;
  text-align:center;
  cursor:pointer;
  font-size:0.78rem;
  font-weight:700;
  color:#4a6359;
  transition:all 0.12s;
}
.pay-tab i {
  display:block;
  font-size:1.1rem;
  margin-bottom:6px;
  color:#6b8079;
}
.pay-tab:hover { border-color:#0a5d3f; }
.pay-tab.selected {
  border-color:#0a5d3f;
  background:#e8f5ef;
  color:#0a5d3f;
}
.pay-tab.selected i { color:#0a5d3f; }

/* Struk minimarket */
.struk {
  background:#fff;
  border:1px solid #e0e9e6;
  border-radius:6px;
  padding:20px 18px;
  font-family:'Courier New',monospace;
  font-size:0.76rem;
  color:#0f1f1a;
  line-height:1.5;
}
.struk .s-head {
  text-align:center;
  padding-bottom:12px;
  border-bottom:1px dashed #b8c9c2;
  margin-bottom:12px;
}
.struk .s-head h4 {
  font-family:'Inter',sans-serif;
  font-size:1rem;
  font-weight:800;
  color:#0a5d3f;
  letter-spacing:1px;
}
.struk .s-head p {
  font-size:0.68rem;
  color:#6b8079;
  margin-top:4px;
  line-height:1.5;
}
.struk .s-meta {
  font-size:0.68rem;
  color:#6b8079;
  margin-bottom:10px;
  line-height:1.6;
}
.struk .s-meta strong { color:#0f1f1a; }
.struk .s-item {
  font-size:0.74rem;
  margin-bottom:7px;
}
.struk .s-line1 {
  display:flex;
  justify-content:space-between;
  font-weight:700;
}
.struk .s-line2 {
  display:flex;
  justify-content:space-between;
  color:#6b8079;
  font-size:0.68rem;
}
.struk .s-line { border-top:1px dashed #b8c9c2; margin:10px 0; }
.struk .s-total .s-row {
  display:flex;
  justify-content:space-between;
  font-size:0.76rem;
  margin-bottom:4px;
}
.struk .s-total .s-row.disc { color:#b45309; }
.struk .s-total .s-grand {
  display:flex;
  justify-content:space-between;
  font-size:1.05rem;
  font-weight:800;
  color:#0a5d3f;
  padding-top:8px;
  margin-top:8px;
  border-top:1px dashed #b8c9c2;
}
.struk .s-barcode {
  text-align:center;
  margin-top:14px;
  padding-top:12px;
  border-top:1px dashed #b8c9c2;
}
.struk .s-barcode .bc {
  display:inline-block;
  letter-spacing:4px;
  font-size:1.2rem;
  color:#0f1f1a;
  font-family:'Courier New',monospace;
}
.struk .s-barcode small {
  display:block;
  font-size:0.66rem;
  color:#6b8079;
  letter-spacing:2px;
  margin-top:4px;
}
.struk .s-foot {
  text-align:center;
  font-size:0.68rem;
  color:#6b8079;
  margin-top:14px;
  padding-top:12px;
  border-top:1px dashed #b8c9c2;
  line-height:1.7;
}

/* TOAST */
.toast {
  position:fixed;
  bottom:24px; left:50%;
  transform:translateX(-50%);
  background:#0a5d3f;
  color:#fff;
  padding:13px 24px;
  border-radius:8px;
  font-size:0.85rem;
  font-weight:600;
  display:flex;
  align-items:center;
  gap:10px;
  opacity:0;
  pointer-events:none;
  transition:opacity 0.2s;
  z-index:200;
  border-left:4px solid #4ade80;
  box-shadow:0 10px 30px -8px rgba(10,93,63,0.5);
  max-width:90vw;
}
.toast.show { opacity:1; }
.toast i { color:#4ade80; }

/* SCROLLBAR */
::-webkit-scrollbar { width:6px; height:6px; }
::-webkit-scrollbar-track { background:transparent; }
::-webkit-scrollbar-thumb { background:#c7d5d0; border-radius:10px; }
::-webkit-scrollbar-thumb:hover { background:#8ba199; }

/* RESPONSIF */
@media (max-width: 1000px) {
  .kasir-grid { grid-template-columns:1fr; }
  .kanan { border-left:none; border-top:1px solid #d5e0dc; }
  .cart-body { max-height:300px; }
}
@media (max-width: 700px) {
  .topbar { padding:0 12px; height:auto; min-height:62px; flex-wrap:wrap; padding-top:10px; padding-bottom:10px; gap:8px; }
  .mode-nav button span { display:none; }
  .user-badge .info { display:none; }
  .kiri { padding:14px 14px; }
  .manage-wrap { padding:16px 14px; }
  .report-wrap { padding:16px 14px; }
  .prod-grid { grid-template-columns:repeat(2,1fr); gap:8px; }
  .pay-tabs { grid-template-columns:1fr; }
  .kpi-row { grid-template-columns:1fr 1fr; gap:10px; }
  .kpi-card .k-val { font-size:1.2rem; }
  .filter-bar { padding:10px 14px; gap:10px; }
  .filter-bar select, .filter-bar input { font-size:0.75rem; }
  th, td { padding:9px 10px; font-size:0.76rem; }
  .td-icon { width:28px; height:28px; font-size:0.75rem; }
  .td-info strong { font-size:0.78rem; }
  .td-info small { font-size:0.6rem; }
}
@media (max-width: 460px) {
  .kpi-row { grid-template-columns:1fr; }
}
</style>
</head>
<body>

<div class="app">

<!-- ===== HEADER ===== -->
<header class="topbar">
  <div class="brand">
    <div class="brand-mark"><i class="fas fa-store"></i></div>
    <h1>PrimaMart<small>Minimarket & Grosir</small></h1>
  </div>
  <div class="topbar-right">
    <nav class="mode-nav">
      <button id="navKasir" class="active">
        <i class="fas fa-barcode"></i> <span>Kasir</span>
      </button>
      <button id="navProduk">
        <i class="fas fa-boxes-stacked"></i> <span>Produk</span>
      </button>
      <button id="navTransaksi">
        <i class="fas fa-receipt"></i> <span>Transaksi</span>
      </button>
      <button id="navLaporan">
        <i class="fas fa-chart-column"></i> <span>Laporan</span>
      </button>
    </nav>
    <div class="user-badge">
      <div class="avatar" id="avatarInit">SR</div>
      <div class="info">
        <div class="name" id="userName">Sari</div>
        <div class="role" id="userRole">Kasir</div>
      </div>
    </div>
  </div>
</header>

<!-- ========================================================= -->
<!-- ==================== PAGE KASIR ========================== -->
<!-- ========================================================= -->
<div class="page active" id="pageKasir">
  <div class="kasir-grid">

    <!-- KIRI -->
    <section class="kiri">
      <div class="barcode-box" id="barcodeBox">
        <div class="barcode-icon"><i class="fas fa-barcode"></i></div>
        <div class="input-area">
          <label>Scan Barcode / Input Kode</label>
          <input type="text" id="barcodeInput" placeholder="Ketik atau scan kode produk lalu tekan Enter" autocomplete="off">
          <div class="scan-info" id="scanInfo">
            <i class="fas fa-info-circle"></i> F2 untuk fokus · F3 untuk cari nama produk
          </div>
        </div>
      </div>

      <div class="search-row">
        <div class="search-box">
          <i class="fas fa-search"></i>
          <input type="text" id="searchInput" placeholder="Cari produk berdasarkan nama...">
        </div>
      </div>

      <div class="kat-tabs" id="katTabs">
        <button class="kat-tab active" data-kat="semua"><i class="fas fa-layer-group"></i> Semua</button>
        <button class="kat-tab" data-kat="makanan"><i class="fas fa-utensils"></i> Makanan</button>
        <button class="kat-tab" data-kat="minuman"><i class="fas fa-bottle-water"></i> Minuman</button>
        <button class="kat-tab" data-kat="snack"><i class="fas fa-cookie-bite"></i> Snack</button>
        <button class="kat-tab" data-kat="sembako"><i class="fas fa-basket-shopping"></i> Sembako</button>
        <button class="kat-tab" data-kat="kebersihan"><i class="fas fa-spray-can-sparkles"></i> Kebersihan</button>
        <button class="kat-tab" data-kat="lainnya"><i class="fas fa-ellipsis"></i> Lainnya</button>
      </div>

      <div class="prod-grid" id="prodGrid"></div>
    </section>

    <!-- KANAN: KERANJANG -->
    <aside class="kanan">
      <div class="cart-head">
        <div class="info">
          <h3><i class="fas fa-shopping-cart"></i> Keranjang</h3>
          <div class="meta" id="cartMeta">Transaksi #INV-0001</div>
        </div>
        <span class="badge-count" id="cartCount">0</span>
      </div>

      <div class="cart-body" id="cartBody">
        <div class="cart-empty">
          <i class="fas fa-cart-plus"></i>
          <strong>Keranjang masih kosong</strong>
          Scan barcode atau pilih produk
        </div>
      </div>

      <div class="cart-foot">
        <div class="member-row">
          <input type="checkbox" id="memberCheck">
          <label for="memberCheck">
            <i class="fas fa-id-card" style="color:#0a5d3f; margin-right:4px;"></i>
            Pelanggan Member
          </label>
          <span class="member-info">Diskon 5%</span>
        </div>

        <div class="cf-row"><span>Subtotal</span><span id="subTxt">Rp 0</span></div>
        <div class="cf-row discount" id="discRow" style="display:none;"><span>Diskon Member 5%</span><span id="discTxt">− Rp 0</span></div>
        <div class="cf-row"><span>PPN 11%</span><span id="taxTxt">Rp 0</span></div>
        <div class="cf-row grand"><span>TOTAL</span><span id="totalTxt">Rp 0</span></div>

        <button class="btn-bayar-big" id="btnBayar" disabled>
          <i class="fas fa-money-bill-wave"></i> Bayar Sekarang
        </button>
      </div>
    </aside>
  </div>
</div>

<!-- ========================================================= -->
<!-- ==================== PAGE PRODUK ========================= -->
<!-- ========================================================= -->
<div class="page" id="pageProduk">
  <div class="manage-wrap">
    <div class="manage-head">
      <h2>Manajemen Produk<small>Kelola stok, harga & kategori</small></h2>
      <div class="manage-actions">
        <button class="btn-outline" id="btnResetData">
          <i class="fas fa-rotate"></i> Reset
        </button>
        <button class="btn-solid" id="btnTambahProduk">
          <i class="fas fa-plus"></i> Produk Baru
        </button>
      </div>
    </div>

    <div class="filter-bar">
      <div class="filter-item">
        <label>Kategori</label>
        <select id="fKategoriFilter">
          <option value="semua">Semua</option>
          <option value="makanan">Makanan</option>
          <option value="minuman">Minuman</option>
          <option value="snack">Snack</option>
          <option value="sembako">Sembako</option>
          <option value="kebersihan">Kebersihan</option>
          <option value="lainnya">Lainnya</option>
        </select>
      </div>
      <div class="filter-item">
        <label>Status Stok</label>
        <select id="fStokFilter">
          <option value="semua">Semua</option>
          <option value="aman">Aman</option>
          <option value="rendah">Stok Rendah</option>
          <option value="habis">Habis</option>
        </select>
      </div>
      <div class="filter-item" style="flex:1; min-width:200px;">
        <input type="text" id="fSearchProduk" placeholder="Cari nama / barcode..." style="width:100%;">
      </div>
    </div>

    <div class="table-box">
      <table>
        <thead>
          <tr>
            <th>Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th style="text-align:right;">Aksi</th>
          </tr>
        </thead>
        <tbody id="produkBody"></tbody>
      </table>
    </div>
  </div>
</div>

<!-- ========================================================= -->
<!-- ==================== PAGE TRANSAKSI ====================== -->
<!-- ========================================================= -->
<div class="page" id="pageTransaksi">
  <div class="manage-wrap">
    <div class="manage-head">
      <h2>Riwayat Transaksi<small>Semua transaksi kasir</small></h2>
      <div class="manage-actions">
        <button class="btn-outline" id="btnClearTransaksi">
          <i class="fas fa-trash"></i> Hapus Riwayat
        </button>
      </div>
    </div>

    <div class="filter-bar">
      <div class="filter-item">
        <label>Periode</label>
        <select id="fPeriode">
          <option value="hari">Hari Ini</option>
          <option value="semua">Semua</option>
        </select>
      </div>
      <div class="filter-item">
        <label>Metode</label>
        <select id="fMetodeFilter">
          <option value="semua">Semua</option>
          <option value="Tunai">Tunai</option>
          <option value="Debit">Debit</option>
          <option value="QRIS">QRIS</option>
        </select>
      </div>
      <div class="filter-item" style="flex:1; min-width:200px;">
        <input type="text" id="fSearchTx" placeholder="Cari nomor transaksi / kasir..." style="width:100%;">
      </div>
    </div>

    <div class="table-box">
      <table>
        <thead>
          <tr>
            <th>No. Transaksi</th>
            <th>Waktu</th>
            <th>Kasir</th>
            <th>Item</th>
            <th>Metode</th>
            <th style="text-align:right;">Total</th>
          </tr>
        </thead>
        <tbody id="txBody"></tbody>
      </table>
    </div>
  </div>
</div>

<!-- ========================================================= -->
<!-- ==================== PAGE LAPORAN ======================== -->
<!-- ========================================================= -->
<div class="page" id="pageLaporan">
  <div class="report-wrap">
    <div class="report-head">
      <h2>Laporan Penjualan<small id="reportPeriode">Periode: Hari Ini</small></h2>
      <div class="report-filter">
        <select id="reportPeriodeSel">
          <option value="hari">Hari Ini</option>
          <option value="minggu">7 Hari Terakhir</option>
          <option value="bulan">30 Hari Terakhir</option>
          <option value="semua">Semua Waktu</option>
        </select>
        <button class="btn-solid" id="btnExportCSV">
          <i class="fas fa-file-csv"></i> Ekspor CSV
        </button>
      </div>
    </div>

    <div id="reportContent"></div>
  </div>
</div>

</div>

<!-- ===== MODAL BAYAR ===== -->
<div class="modal-bg" id="modalBayar">
  <div class="modal">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-cash-register"></i> Pembayaran</h3>
        <div class="sub">Pilih metode lalu konfirmasi.</div>
      </div>
      <button class="modal-close" id="closeBayar"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="pay-tabs" id="payTabs">
        <div class="pay-tab selected" data-method="Tunai"><i class="fas fa-money-bill-wave"></i>Tunai</div>
        <div class="pay-tab" data-method="Debit"><i class="fas fa-credit-card"></i>Debit</div>
        <div class="pay-tab" data-method="QRIS"><i class="fas fa-qrcode"></i>QRIS</div>
      </div>
      <div id="cashSection">
        <div class="field">
          <label>Uang Diterima (Rp)</label>
          <input type="number" id="cashInput" placeholder="0" min="0" step="1000" style="font-size:1.1rem; font-weight:700;">
        </div>
        <div id="changeBox" style="background:#e8f5ef; color:#0a5d3f; padding:12px 14px; border-radius:7px; display:flex; justify-content:space-between; font-weight:700;">
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

<!-- ===== MODAL STRUK ===== -->
<div class="modal-bg" id="modalStruk">
  <div class="modal" style="max-width:400px;">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-receipt"></i> Struk</h3>
        <div class="sub">Serahkan ke pelanggan.</div>
      </div>
      <button class="modal-close" id="closeStruk"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body" id="strukBody"></div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnOrderBaru">Transaksi Baru</button>
      <button class="btn-solid" id="btnCetak">
        <i class="fas fa-print"></i> Cetak
      </button>
    </div>
  </div>
</div>

<!-- ===== MODAL PRODUK ===== -->
<div class="modal-bg" id="modalProduk">
  <div class="modal">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-box"></i> <span id="produkFormTitle">Tambah Produk</span></h3>
        <div class="sub">Detail produk minimarket.</div>
      </div>
      <button class="modal-close" id="closeProduk"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <input type="hidden" id="editId">
      <div class="field">
        <label>Nama Produk</label>
        <input type="text" id="pNama" placeholder="Contoh: Indomie Goreng" maxlength="50">
      </div>
      <div class="field">
        <label>Barcode / Kode</label>
        <input type="text" id="pBarcode" placeholder="8991234567890" maxlength="20" style="font-family:'Courier New',monospace; letter-spacing:1px;">
      </div>
      <div class="field">
        <label>Kategori</label>
        <select id="pKategori">
          <option value="makanan">Makanan</option>
          <option value="minuman">Minuman</option>
          <option value="snack">Snack</option>
          <option value="sembako">Sembako</option>
          <option value="kebersihan">Kebersihan</option>
          <option value="lainnya">Lainnya</option>
        </select>
      </div>
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
        <div class="field">
          <label>Harga (Rp)</label>
          <input type="number" id="pHarga" placeholder="0" min="0" step="500">
        </div>
        <div class="field">
          <label>Stok</label>
          <input type="number" id="pStok" placeholder="0" min="0">
        </div>
      </div>
      <div class="field">
        <label>Stok Minimum</label>
        <input type="number" id="pMinStok" placeholder="5" min="0" value="5">
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

<div class="toast" id="toast"><i class="fas fa-check"></i> <span id="toastTxt"></span></div>

<script>
(function(){
  /* =========================================================
     DATA
  ========================================================= */
  const STORAGE_KEY = 'primamart_produk_v1';
  const TX_KEY = 'primamart_tx_v1';

  const ICON_BY_KAT = {
    makanan:'fa-utensils', minuman:'fa-bottle-water',
    snack:'fa-cookie-bite', sembako:'fa-basket-shopping',
    kebersihan:'fa-spray-can-sparkles', lainnya:'fa-box'
  };

  const defaultProduk = [
    { id:1, barcode:'8998866200011', nama:'Indomie Goreng', harga:3500, kategori:'makanan', stok:120, min:30 },
    { id:2, barcode:'8998866200028', nama:'Mie Sedaap Soto', harga:3300, kategori:'makanan', stok:95, min:25 },
    { id:3, barcode:'8992388100017', nama:'Aqua 600ml', harga:4000, kategori:'minuman', stok:150, min:40 },
    { id:4, barcode:'8993175110119', nama:'Teh Botol Sosro 350ml', harga:5000, kategori:'minuman', stok:88, min:24 },
    { id:5, barcode:'8993189270014', nama:'Coca Cola 390ml', harga:6500, kategori:'minuman', stok:64, min:20 },
    { id:6, barcode:'8996001300017', nama:'Kopiko Kopi Susu', harga:2500, kategori:'minuman', stok:110, min:30 },
    { id:7, barcode:'8991002101234', nama:'Roma Kelapa', harga:8500, kategori:'snack', stok:72, min:20 },
    { id:8, barcode:'8991002102340', nama:'Oreo Original', harga:9500, kategori:'snack', stok:54, min:15 },
    { id:9, barcode:'8992761200015', nama:'Chitato Sapi Panggang', harga:11000, kategori:'snack', stok:38, min:12 },
    { id:10, barcode:'8992696520011', nama:'Silverqueen 65g', harga:18500, kategori:'snack', stok:4, min:10 },
    { id:11, barcode:'8992222222222', nama:'Beras Pandan Wangi 5kg', harga:72000, kategori:'sembako', stok:22, min:8 },
    { id:12, barcode:'8993333444444', nama:'Minyak Goreng 2L', harga:38000, kategori:'sembako', stok:30, min:10 },
    { id:13, barcode:'8995555666666', nama:'Gula Pasir 1kg', harga:16000, kategori:'sembako', stok:42, min:15 },
    { id:14, barcode:'8997777888888', nama:'Telur Ayam 1kg', harga:32000, kategori:'sembako', stok:18, min:10 },
    { id:15, barcode:'8991010101010', nama:'Sabun Lifebuoy 85g', harga:4500, kategori:'kebersihan', stok:88, min:25 },
    { id:16, barcode:'8992020202020', nama:'Shampoo Sunsilk 170ml', harga:23000, kategori:'kebersihan', stok:34, min:12 },
    { id:17, barcode:'8993030303030', nama:'Pasta Gigi Pepsodent 190g', harga:18500, kategori:'kebersihan', stok:26, min:10 },
    { id:18, barcode:'8994040404040', nama:'Tissue Paseo 250s', harga:12500, kategori:'kebersihan', stok:44, min:15 },
    { id:19, barcode:'8995050505050', nama:'Baterai ABC AA (2pcs)', harga:8000, kategori:'lainnya', stok:38, min:15 },
    { id:20, barcode:'8996060606060', nama:'Korek Api Gas', harga:3000, kategori:'lainnya', stok:8, min:15 },
    { id:21, barcode:'8997070707070', nama:'Tisu Basah 50s', harga:9500, kategori:'lainnya', stok:28, min:10 },
    { id:22, barcode:'8998080808080', nama:'Susu Ultra 250ml', harga:6500, kategori:'minuman', stok:62, min:20 }
  ];

  let produkList, txList;
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    produkList = raw ? JSON.parse(raw) : JSON.parse(JSON.stringify(defaultProduk));
    const rawTx = localStorage.getItem(TX_KEY);
    txList = rawTx ? JSON.parse(rawTx) : [];
  } catch(e) {
    produkList = JSON.parse(JSON.stringify(defaultProduk));
    txList = [];
  }
  const saveProduk = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(produkList));
  const saveTx = () => localStorage.setItem(TX_KEY, JSON.stringify(txList));

  let cart = [];
  let filterKat = 'semua';
  let searchQ = '';
  let payMethod = 'Tunai';
  let isMember = false;
  let lastTx = null;
  let trxCounter = txList.length + 1;

  /* =========================================================
     UTIL
  ========================================================= */
  const rp = n => 'Rp ' + Number(n).toLocaleString('id-ID');

  let toastTimer;
  function toast(msg, icon='fa-check') {
    const t = document.getElementById('toast');
    document.getElementById('toastTxt').textContent = msg;
    t.querySelector('i').className = 'fas ' + icon;
    t.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => t.classList.remove('show'), 2000);
  }

  const katLabel = {
    makanan:'Makanan', minuman:'Minuman', snack:'Snack',
    sembako:'Sembako', kebersihan:'Kebersihan', lainnya:'Lainnya'
  };

  /* =========================================================
     NAVIGASI
  ========================================================= */
  const navKasir = document.getElementById('navKasir');
  const navProduk = document.getElementById('navProduk');
  const navTransaksi = document.getElementById('navTransaksi');
  const navLaporan = document.getElementById('navLaporan');
  const pageKasir = document.getElementById('pageKasir');
  const pageProduk = document.getElementById('pageProduk');
  const pageTransaksi = document.getElementById('pageTransaksi');
  const pageLaporan = document.getElementById('pageLaporan');

  function setNav(active) {
    [navKasir, navProduk, navTransaksi, navLaporan].forEach(n => n.classList.remove('active'));
    [pageKasir, pageProduk, pageTransaksi, pageLaporan].forEach(p => p.classList.remove('active'));
    active.nav.classList.add('active');
    active.page.classList.add('active');

    // Update user
    const userConfig = {
      kasir: { name:'Sari', role:'Kasir', initial:'SR' },
      produk: { name:'Pak Hendra', role:'Inventory', initial:'PH' },
      transaksi: { name:'Sari', role:'Kasir', initial:'SR' },
      laporan: { name:'Bu Ratna', role:'Manager', initial:'BR' }
    };
    const u = userConfig[active.key];
    document.getElementById('userName').textContent = u.name;
    document.getElementById('userRole').textContent = u.role;
    document.getElementById('avatarInit').textContent = u.initial;

    if (active.key === 'kasir') { renderProduk(); updateCartMeta(); }
    if (active.key === 'produk') renderProdukTable();
    if (active.key === 'transaksi') renderTransaksi();
    if (active.key === 'laporan') renderLaporan();
  }

  navKasir.addEventListener('click', () => setNav({ nav:navKasir, page:pageKasir, key:'kasir' }));
  navProduk.addEventListener('click', () => setNav({ nav:navProduk, page:pageProduk, key:'produk' }));
  navTransaksi.addEventListener('click', () => setNav({ nav:navTransaksi, page:pageTransaksi, key:'transaksi' }));
  navLaporan.addEventListener('click', () => setNav({ nav:navLaporan, page:pageLaporan, key:'laporan' }));

  /* =========================================================
     RENDER PRODUK KASIR
  ========================================================= */
  function renderProduk() {
    const grid = document.getElementById('prodGrid');
    let data = produkList.slice();
    if (filterKat !== 'semua') data = data.filter(p => p.kategori === filterKat);
    if (searchQ.trim()) {
      const q = searchQ.toLowerCase();
      data = data.filter(p =>
        p.nama.toLowerCase().includes(q) ||
        p.barcode.includes(q)
      );
    }

    if (data.length === 0) {
      grid.innerHTML = '<div style="grid-column:1/-1; text-align:center; padding:50px 20px; color:#b8c9c2;"><i class="fas fa-box-open" style="font-size:2rem; display:block; margin-bottom:10px; color:#d5e0dc;"></i>Produk tidak ditemukan</div>';
      return;
    }

    grid.innerHTML = data.map(p => {
      const out = p.stok <= 0;
      const low = p.stok > 0 && p.stok <= p.min;
      let stokCls = 'p-stok';
      if (low) stokCls += ' low';
      if (out) stokCls += ' out';

      return `
        <div class="prod-card ${out ? 'out' : ''}" data-id="${p.id}">
          <div class="p-barcode">${p.barcode.slice(-6)}</div>
          <div class="p-icon"><i class="fas ${ICON_BY_KAT[p.kategori] || 'fa-box'}"></i></div>
          <h4>${p.nama}</h4>
          <div class="p-foot">
            <span class="p-price">${rp(p.harga)}</span>
            <span class="${stokCls}">${out ? 'Habis' : 'Stok ' + p.stok}</span>
          </div>
        </div>
      `;
    }).join('');

    grid.querySelectorAll('.prod-card').forEach(card => {
      if (card.classList.contains('out')) return;
      card.addEventListener('click', () => {
        const id = parseInt(card.dataset.id);
        tambahKeCart(id);
      });
    });
  }

  /* =========================================================
     BARCODE INPUT
  ========================================================= */
  const barcodeBox = document.getElementById('barcodeBox');
  const barcodeInput = document.getElementById('barcodeInput');

  barcodeInput.addEventListener('keypress', e => {
    if (e.key === 'Enter') {
      e.preventDefault();
      const code = barcodeInput.value.trim();
      if (!code) return;
      const p = produkList.find(x => x.barcode === code);
      if (!p) {
        toast(`Barcode ${code} tidak ditemukan`, 'fa-times-circle');
        barcodeInput.select();
        return;
      }
      // flash animation
      barcodeBox.classList.add('scan-flash');
      setTimeout(() => barcodeBox.classList.remove('scan-flash'), 300);

      tambahKeCart(p.id);
      barcodeInput.value = '';
    }
  });

  // Keyboard shortcuts
  document.addEventListener('keydown', e => {
    if (e.key === 'F2') {
      e.preventDefault();
      const active = document.querySelector('.page.active');
      if (active.id === 'pageKasir') barcodeInput.focus();
    }
    if (e.key === 'F3') {
      e.preventDefault();
      const active = document.querySelector('.page.active');
      if (active.id === 'pageKasir') document.getElementById('searchInput').focus();
    }
    if (e.key === 'F4') {
      e.preventDefault();
      const active = document.querySelector('.page.active');
      if (active.id === 'pageKasir') {
        e.preventDefault();
        document.getElementById('btnBayar').click();
      }
    }
  });

  /* =========================================================
     SEARCH & FILTER
  ========================================================= */
  document.getElementById('searchInput').addEventListener('input', e => {
    searchQ = e.target.value;
    renderProduk();
  });
  document.querySelectorAll('#katTabs .kat-tab').forEach(t => {
    t.addEventListener('click', () => {
      document.querySelectorAll('#katTabs .kat-tab').forEach(x => x.classList.remove('active'));
      t.classList.add('active');
      filterKat = t.dataset.kat;
      renderProduk();
    });
  });

  /* =========================================================
     TAMBAH KE CART
  ========================================================= */
  function tambahKeCart(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (p.stok <= 0) { toast('Stok habis', 'fa-exclamation-circle'); return; }

    const existing = cart.find(it => it.id === id);
    if (existing) {
      if (existing.qty >= p.stok) {
        toast(`Stok ${p.nama} tersisa ${p.stok}`, 'fa-exclamation-circle');
        return;
      }
      existing.qty++;
    } else {
      cart.push({ id:p.id, barcode:p.barcode, nama:p.nama, harga:p.harga, qty:1 });
    }
    p.stok--;
    saveProduk();
    renderProduk();
    renderCart();
  }

  function incCart(idx) {
    const it = cart[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (!p || it.qty >= p.stok) {
      toast(`Stok tersisa ${p ? p.stok : 0}`, 'fa-exclamation-circle');
      return;
    }
    it.qty++; p.stok--;
    saveProduk(); renderProduk(); renderCart();
  }
  function decCart(idx) {
    const it = cart[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (it.qty <= 1) cart.splice(idx, 1);
    else it.qty--;
    if (p) p.stok++;
    saveProduk(); renderProduk(); renderCart();
  }
  function delCart(idx) {
    const it = cart[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (p) p.stok += it.qty;
    cart.splice(idx, 1);
    saveProduk(); renderProduk(); renderCart();
  }

  /* =========================================================
     RENDER CART
  ========================================================= */
  function renderCart() {
    const body = document.getElementById('cartBody');
    const totalQty = cart.reduce((s, it) => s + it.qty, 0);
    document.getElementById('cartCount').textContent = totalQty;

    if (cart.length === 0) {
      body.innerHTML = `
        <div class="cart-empty">
          <i class="fas fa-cart-plus"></i>
          <strong>Keranjang masih kosong</strong>
          Scan barcode atau pilih produk
        </div>`;
    } else {
      body.innerHTML = cart.map((it, idx) => `
        <div class="cart-row">
          <div>
            <div class="cr-name">${it.nama}</div>
            <div class="cr-meta">${it.barcode}</div>
          </div>
          <div class="cr-price">${rp(it.harga * it.qty)}</div>
          <div class="cr-controls">
            <div class="cr-qty">
              <button data-act="min" data-idx="${idx}"><i class="fas fa-minus"></i></button>
              <span>${it.qty}</span>
              <button data-act="plus" data-idx="${idx}"><i class="fas fa-plus"></i></button>
            </div>
            <div class="cr-actions">
              <button class="cr-action" data-act="del" data-idx="${idx}">
                <i class="fas fa-times"></i> Hapus
              </button>
            </div>
          </div>
        </div>
      `).join('');
    }

    body.querySelectorAll('button[data-act]').forEach(b => {
      b.addEventListener('click', () => {
        const idx = parseInt(b.dataset.idx);
        const act = b.dataset.act;
        if (act === 'plus') incCart(idx);
        else if (act === 'min') decCart(idx);
        else if (act === 'del') delCart(idx);
      });
    });

    const subtotal = cart.reduce((s, it) => s + it.harga * it.qty, 0);
    const diskon = isMember ? Math.round(subtotal * 0.05) : 0;
    const afterDisc = subtotal - diskon;
    const tax = Math.round(afterDisc * 0.11);
    const total = afterDisc + tax;

    document.getElementById('subTxt').textContent = rp(subtotal);
    if (diskon > 0) {
      document.getElementById('discRow').style.display = 'flex';
      document.getElementById('discTxt').textContent = '− ' + rp(diskon);
    } else {
      document.getElementById('discRow').style.display = 'none';
    }
    document.getElementById('taxTxt').textContent = rp(tax);
    document.getElementById('totalTxt').textContent = rp(total);
    document.getElementById('btnBayar').disabled = cart.length === 0;
  }

  function updateCartMeta() {
    document.getElementById('cartMeta').textContent = 'Transaksi #INV-' + String(trxCounter).padStart(4,'0');
  }

  /* =========================================================
     MEMBER
  ========================================================= */
  document.getElementById('memberCheck').addEventListener('change', e => {
    isMember = e.target.checked;
    renderCart();
  });

  /* =========================================================
     MODAL BAYAR
  ========================================================= */
  const modalBayar = document.getElementById('modalBayar');
  const cashInput = document.getElementById('cashInput');
  const changeBox = document.getElementById('changeBox');
  const changeTxt = document.getElementById('changeTxt');

  function getTotal() {
    const subtotal = cart.reduce((s, it) => s + it.harga * it.qty, 0);
    const diskon = isMember ? Math.round(subtotal * 0.05) : 0;
    const afterDisc = subtotal - diskon;
    const tax = Math.round(afterDisc * 0.11);
    return { subtotal, diskon, tax, total: afterDisc + tax };
  }

  document.getElementById('btnBayar').addEventListener('click', () => {
    if (cart.length === 0) return;
    cashInput.value = '';
    payMethod = 'Tunai';
    document.querySelectorAll('#payTabs .pay-tab').forEach((el, i) => {
      el.classList.toggle('selected', i === 0);
    });
    document.getElementById('cashSection').style.display = 'block';
    updateChange();
    modalBayar.classList.add('show');
  });

  document.getElementById('closeBayar').addEventListener('click', () => modalBayar.classList.remove('show'));
  document.getElementById('btnBatalBayar').addEventListener('click', () => modalBayar.classList.remove('show'));

  document.querySelectorAll('#payTabs .pay-tab').forEach(opt => {
    opt.addEventListener('click', () => {
      document.querySelectorAll('#payTabs .pay-tab').forEach(x => x.classList.remove('selected'));
      opt.classList.add('selected');
      payMethod = opt.dataset.method;
      document.getElementById('cashSection').style.display = payMethod === 'Tunai' ? 'block' : 'none';
    });
  });

  function updateChange() {
    if (payMethod !== 'Tunai') return;
    const t = getTotal();
    const cash = parseInt(cashInput.value) || 0;
    if (cash === 0) {
      changeBox.style.background = '#e8f5ef';
      changeBox.style.color = '#0a5d3f';
      changeTxt.textContent = rp(0);
      return;
    }
    const diff = cash - t.total;
    if (diff < 0) {
      changeBox.style.background = '#fee2e2';
      changeBox.style.color = '#991b1b';
      changeTxt.textContent = '− ' + rp(Math.abs(diff));
    } else {
      changeBox.style.background = '#e8f5ef';
      changeBox.style.color = '#0a5d3f';
      changeTxt.textContent = rp(diff);
    }
  }
  cashInput.addEventListener('input', updateChange);

  document.getElementById('btnKonfirmasiBayar').addEventListener('click', () => {
    const t = getTotal();
    if (payMethod === 'Tunai') {
      const cash = parseInt(cashInput.value) || 0;
      if (cash < t.total) {
        toast('Uang diterima kurang dari total', 'fa-exclamation-circle');
        return;
      }
    }
    prosesBayar(t);
  });

  /* =========================================================
     PROSES BAYAR
  ========================================================= */
  function prosesBayar(t) {
    const cash = parseInt(cashInput.value) || 0;
    const change = payMethod === 'Tunai' ? cash - t.total : 0;
    const now = new Date();

    const tx = {
      nomor: 'INV-' + String(trxCounter).padStart(4,'0'),
      timestamp: now.toISOString(),
      tanggal: now.toLocaleString('id-ID', { dateStyle:'short', timeStyle:'short' }),
      kasir: document.getElementById('userName').textContent,
      member: isMember,
      items: cart.map(it => ({ ...it })),
      subtotal: t.subtotal,
      diskon: t.diskon,
      tax: t.tax,
      total: t.total,
      metode: payMethod,
      cash: payMethod === 'Tunai' ? cash : t.total,
      change
    };

    txList.unshift(tx);
    saveTx();
    lastTx = tx;
    trxCounter++;

    modalBayar.classList.remove('show');
    tampilkanStruk(tx);

    cart = [];
    isMember = false;
    document.getElementById('memberCheck').checked = false;
    renderCart();
    renderProduk();
    updateCartMeta();
    toast('Transaksi berhasil', 'fa-check-circle');
  }

  /* =========================================================
     STRUK
  ========================================================= */
  function tampilkanStruk(tx) {
    const itemsHtml = tx.items.map(it => `
      <div class="s-item">
        <div class="s-line1"><span>${it.nama}</span><span>${rp(it.harga * it.qty)}</span></div>
        <div class="s-line2"><span>${it.qty} x ${rp(it.harga)}</span><span>${it.barcode.slice(-6)}</span></div>
      </div>
    `).join('');

    document.getElementById('strukBody').innerHTML = `
      <div class="struk">
        <div class="s-head">
          <h4>PRIMAMART</h4>
          <p>
            Jl. Raya Pasar No. 12, Jakarta<br>
            Telp: 021-5566778<br>
            NPWP: 01.234.567.8-901.000
          </p>
        </div>
        <div class="s-meta">
          No: <strong>${tx.nomor}</strong><br>
          ${tx.tanggal}<br>
          Kasir: ${tx.kasir}<br>
          ${tx.member ? '<strong>MEMBER · DISKON 5%</strong>' : 'Non-Member'}
        </div>
        <div class="s-line"></div>
        ${itemsHtml}
        <div class="s-line"></div>
        <div class="s-total">
          <div class="s-row"><span>Subtotal</span><span>${rp(tx.subtotal)}</span></div>
          ${tx.diskon > 0 ? `<div class="s-row disc"><span>Diskon Member</span><span>− ${rp(tx.diskon)}</span></div>` : ''}
          <div class="s-row"><span>PPN 11%</span><span>${rp(tx.tax)}</span></div>
          <div class="s-grand"><span>TOTAL</span><span>${rp(tx.total)}</span></div>
          <div class="s-row" style="margin-top:8px;"><span>Bayar (${tx.metode})</span><span>${rp(tx.cash)}</span></div>
          <div class="s-row"><span>Kembalian</span><span>${rp(tx.change)}</span></div>
        </div>
        <div class="s-barcode">
          <div class="bc">|||| |||| || |||| | ||||</div>
          <small>${tx.nomor}</small>
        </div>
        <div class="s-foot">
          Terima kasih telah berbelanja<br>
          Barang yang sudah dibeli<br>
          tidak dapat dikembalikan<br>
          <strong style="color:#0a5d3f;">PRIMAMART · Hemat & Lengkap</strong>
        </div>
      </div>
    `;
    document.getElementById('modalStruk').classList.add('show');
  }

  document.getElementById('closeStruk').addEventListener('click', () => document.getElementById('modalStruk').classList.remove('show'));
  document.getElementById('btnOrderBaru').addEventListener('click', () => document.getElementById('modalStruk').classList.remove('show'));
  document.getElementById('btnCetak').addEventListener('click', () => {
    if (!lastTx) return;
    const w = window.open('', '', 'width=420,height=680');
    w.document.write('<pre style="font-family:Courier New,monospace; font-size:12px; padding:20px; white-space:pre-wrap;">' +
      document.getElementById('strukBody').innerText + '</pre>');
    w.document.close(); w.focus(); w.print();
    toast('Struk dikirim ke printer', 'fa-print');
  });

  /* =========================================================
     PAGE PRODUK
  ========================================================= */
  function renderProdukTable() {
    const tbody = document.getElementById('produkBody');
    const katFilter = document.getElementById('fKategoriFilter').value;
    const stokFilter = document.getElementById('fStokFilter').value;
    const search = document.getElementById('fSearchProduk').value.toLowerCase();

    let data = produkList.slice();
    if (katFilter !== 'semua') data = data.filter(p => p.kategori === katFilter);
    if (stokFilter === 'aman') data = data.filter(p => p.stok > p.min);
    if (stokFilter === 'rendah') data = data.filter(p => p.stok > 0 && p.stok <= p.min);
    if (stokFilter === 'habis') data = data.filter(p => p.stok <= 0);
    if (search) data = data.filter(p =>
      p.nama.toLowerCase().includes(search) || p.barcode.includes(search)
    );

    if (data.length === 0) {
      tbody.innerHTML = '<tr><td colspan="5" style="text-align:center; padding:40px; color:#b8c9c2;">Tidak ada produk</td></tr>';
      return;
    }

    tbody.innerHTML = data.map(p => {
      let stokCls = 'stok-cell';
      let stokLabel = p.stok + ' unit';
      if (p.stok <= 0) { stokCls += ' out'; stokLabel = 'Habis'; }
      else if (p.stok <= p.min) { stokCls += ' low'; }

      return `
        <tr>
          <td>
            <div class="td-produk">
              <div class="td-icon"><i class="fas ${ICON_BY_KAT[p.kategori] || 'fa-box'}"></i></div>
              <div class="td-info">
                <strong>${p.nama}</strong>
                <small>${p.barcode}</small>
              </div>
            </div>
          </td>
          <td><span class="badge-kat ${p.kategori}">${katLabel[p.kategori]}</span></td>
          <td style="font-weight:700;">${rp(p.harga)}</td>
          <td><span class="${stokCls}">${stokLabel}<small>min ${p.min}</small></span></td>
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

  // Filter events
  ['fKategoriFilter','fStokFilter'].forEach(id => {
    document.getElementById(id).addEventListener('change', renderProdukTable);
  });
  document.getElementById('fSearchProduk').addEventListener('input', renderProdukTable);

  /* =========================================================
     FORM PRODUK
  ========================================================= */
  const modalProduk = document.getElementById('modalProduk');

  function bukaFormProduk(id) {
    const isEdit = id != null;
    document.getElementById('produkFormTitle').textContent = isEdit ? 'Edit Produk' : 'Tambah Produk';
    document.getElementById('editId').value = isEdit ? id : '';
    document.getElementById('pNama').value = '';
    document.getElementById('pBarcode').value = '';
    document.getElementById('pKategori').value = 'makanan';
    document.getElementById('pHarga').value = '';
    document.getElementById('pStok').value = '';
    document.getElementById('pMinStok').value = '5';

    if (isEdit) {
      const p = produkList.find(x => x.id === id);
      if (p) {
        document.getElementById('pNama').value = p.nama;
        document.getElementById('pBarcode').value = p.barcode;
        document.getElementById('pKategori').value = p.kategori;
        document.getElementById('pHarga').value = p.harga;
        document.getElementById('pStok').value = p.stok;
        document.getElementById('pMinStok').value = p.min;
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
    const barcode = document.getElementById('pBarcode').value.trim();
    const kategori = document.getElementById('pKategori').value;
    const harga = parseInt(document.getElementById('pHarga').value);
    const stok = parseInt(document.getElementById('pStok').value);
    const min = parseInt(document.getElementById('pMinStok').value) || 5;

    if (!nama) return toast('Nama harus diisi', 'fa-exclamation-circle');
    if (!barcode) return toast('Barcode harus diisi', 'fa-exclamation-circle');
    if (isNaN(harga) || harga < 0) return toast('Harga tidak valid', 'fa-exclamation-circle');
    if (isNaN(stok) || stok < 0) return toast('Stok tidak valid', 'fa-exclamation-circle');

    if (editId) {
      const p = produkList.find(x => x.id === parseInt(editId));
      if (p) {
        if (produkList.some(x => x.barcode === barcode && x.id !== p.id)) {
          return toast('Barcode sudah dipakai', 'fa-exclamation-circle');
        }
        Object.assign(p, { nama, barcode, kategori, harga, stok, min });
      }
      toast('Produk diperbarui', 'fa-check');
    } else {
      if (produkList.some(p => p.barcode === barcode)) return toast('Barcode sudah ada', 'fa-exclamation-circle');
      const newId = produkList.length ? Math.max(...produkList.map(p => p.id)) + 1 : 1;
      produkList.push({ id:newId, barcode, nama, kategori, harga, stok, min });
      toast('Produk ditambahkan', 'fa-check');
    }
    saveProduk();
    modalProduk.classList.remove('show');
    renderProdukTable();
    renderProduk();
  });

  function hapusProduk(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (!confirm(`Hapus "${p.nama}"?`)) return;
    produkList = produkList.filter(x => x.id !== id);
    saveProduk();
    renderProdukTable();
    renderProduk();
    toast('Produk dihapus', 'fa-trash');
  }

  /* =========================================================
     PAGE TRANSAKSI
  ========================================================= */
  function renderTransaksi() {
    const tbody = document.getElementById('txBody');
    const periode = document.getElementById('fPeriode').value;
    const metode = document.getElementById('fMetodeFilter').value;
    const search = document.getElementById('fSearchTx').value.toLowerCase();

    let data = txList.slice();
    if (periode === 'hari') {
      const today = new Date().toDateString();
      data = data.filter(t => new Date(t.timestamp).toDateString() === today);
    }
    if (metode !== 'semua') data = data.filter(t => t.metode === metode);
    if (search) data = data.filter(t =>
      t.nomor.toLowerCase().includes(search) || t.kasir.toLowerCase().includes(search)
    );

    if (data.length === 0) {
      tbody.innerHTML = '<tr><td colspan="6" style="text-align:center; padding:40px; color:#b8c9c2;">Belum ada transaksi</td></tr>';
      return;
    }

    tbody.innerHTML = data.map(tx => `
      <tr class="tx-row" data-nomor="${tx.nomor}">
        <td><span class="tx-num">${tx.nomor}</span></td>
        <td>${tx.tanggal}</td>
        <td>${tx.kasir}${tx.member ? ' <i class="fas fa-id-card" style="color:#0a5d3f; font-size:0.7rem;" title="Member"></i>' : ''}</td>
        <td>${tx.items.reduce((s, it) => s + it.qty, 0)} item</td>
        <td><span class="tx-badge ${tx.metode.toLowerCase()}">${tx.metode}</span></td>
        <td style="text-align:right; font-weight:800; color:#0a5d3f;">${rp(tx.total)}</td>
      </tr>
    `).join('');

    tbody.querySelectorAll('.tx-row').forEach(row => {
      row.addEventListener('click', () => {
        const nomor = row.dataset.nomor;
        const tx = txList.find(t => t.nomor === nomor);
        if (tx) { lastTx = tx; tampilkanStruk(tx); }
      });
    });
  }

  ['fPeriode','fMetodeFilter'].forEach(id => {
    document.getElementById(id).addEventListener('change', renderTransaksi);
  });
  document.getElementById('fSearchTx').addEventListener('input', renderTransaksi);

  document.getElementById('btnClearTransaksi').addEventListener('click', () => {
    if (txList.length === 0) return;
    if (!confirm('Hapus semua riwayat transaksi? Tindakan ini tidak bisa dibatalkan.')) return;
    txList = [];
    saveTx();
    trxCounter = 1;
    renderTransaksi();
    updateCartMeta();
    toast('Riwayat dihapus', 'fa-trash');
  });

  /* =========================================================
     PAGE LAPORAN
  ========================================================= */
  let reportPeriode = 'hari';
  document.getElementById('reportPeriodeSel').addEventListener('change', e => {
    reportPeriode = e.target.value;
    renderLaporan();
  });

  function getTxByPeriode(periode) {
    const now = new Date();
    const today = now.toDateString();
    if (periode === 'hari') {
      return txList.filter(t => new Date(t.timestamp).toDateString() === today);
    }
    if (periode === 'minggu') {
      const cutoff = new Date(now.getTime() - 7*24*60*60*1000);
      return txList.filter(t => new Date(t.timestamp) >= cutoff);
    }
    if (periode === 'bulan') {
      const cutoff = new Date(now.getTime() - 30*24*60*60*1000);
      return txList.filter(t => new Date(t.timestamp) >= cutoff);
    }
    return txList;
  }

  function renderLaporan() {
    const container = document.getElementById('reportContent');
    const data = getTxByPeriode(reportPeriode);
    const periodeLabel = {
      hari:'Hari Ini', minggu:'7 Hari Terakhir',
      bulan:'30 Hari Terakhir', semua:'Semua Waktu'
    }[reportPeriode];
    document.getElementById('reportPeriode').textContent = 'Periode: ' + periodeLabel;

    if (data.length === 0) {
      container.innerHTML = `
        <div class="empty-report">
          <i class="fas fa-chart-line"></i>
          <strong>Belum ada data penjualan</strong>
          <p>Belum ada transaksi pada periode ${periodeLabel.toLowerCase()}.</p>
        </div>`;
      return;
    }

    // KPI
    const totalRevenue = data.reduce((s, t) => s + t.total, 0);
    const totalTx = data.length;
    const totalItems = data.reduce((s, t) => s + t.items.reduce((a, i) => a + i.qty, 0), 0);
    const avgTx = Math.round(totalRevenue / totalTx);

    // Group by hour (untuk grafik)
    const hourMap = {};
    for (let i = 6; i <= 22; i++) hourMap[i] = 0;
    data.forEach(t => {
      const h = new Date(t.timestamp).getHours();
      if (hourMap[h] !== undefined) hourMap[h] += t.total;
    });
    const hourKeys = Object.keys(hourMap);
    const maxHour = Math.max(...Object.values(hourMap), 1);

    // Top produk
    const prodMap = {};
    data.forEach(t => {
      t.items.forEach(it => {
        if (!prodMap[it.nama]) prodMap[it.nama] = { nama:it.nama, qty:0, revenue:0 };
        prodMap[it.nama].qty += it.qty;
        prodMap[it.nama].revenue += it.harga * it.qty;
      });
    });
    const topProducts = Object.values(prodMap).sort((a,b) => b.qty - a.qty).slice(0, 5);

    // Metode bayar
    const methodMap = { Tunai:0, Debit:0, QRIS:0 };
    data.forEach(t => { methodMap[t.metode] = (methodMap[t.metode] || 0) + t.total; });

    // Rekap kas
    const totalTunai = methodMap.Tunai;
    const totalNonTunai = methodMap.Debit + methodMap.QRIS;

    container.innerHTML = `
      <div class="kpi-row">
        <div class="kpi-card">
          <div class="k-lbl"><i class="fas fa-money-bill-trend-up"></i> Total Penjualan</div>
          <div class="k-val">${rp(totalRevenue)}</div>
          <div class="k-sub up">${totalTx} transaksi</div>
        </div>
        <div class="kpi-card blue">
          <div class="k-lbl"><i class="fas fa-shopping-bag"></i> Item Terjual</div>
          <div class="k-val">${totalItems}</div>
          <div class="k-sub">unit produk terjual</div>
        </div>
        <div class="kpi-card green">
          <div class="k-lbl"><i class="fas fa-receipt"></i> Rata-rata Transaksi</div>
          <div class="k-val" style="font-size:1.15rem;">${rp(avgTx)}</div>
          <div class="k-sub">per transaksi</div>
        </div>
        <div class="kpi-card amber">
          <div class="k-lbl"><i class="fas fa-clock"></i> Jam Tersibuk</div>
          <div class="k-val">${hourKeys.reduce((a,b) => hourMap[a] > hourMap[b] ? a : b)}:00</div>
          <div class="k-sub">${rp(Math.max(...Object.values(hourMap)))}</div>
        </div>
      </div>

      <div class="chart-box">
        <div class="ch-head">
          <h3><i class="fas fa-chart-column"></i> Penjualan per Jam</h3>
          <small>06:00 — 22:00 · Total ${rp(totalRevenue)}</small>
        </div>
        <div class="bar-chart">
          ${hourKeys.map(h => {
            const val = hourMap[h];
            const pct = (val / maxHour) * 100;
            const isTop = val === maxHour;
            return `
              <div class="bar-col">
                <span class="bar-val">${val > 0 ? (val/1000).toFixed(0) + 'k' : ''}</span>
                <div class="bar ${isTop ? 'top' : ''}" style="height:${pct}%;"></div>
              </div>
            `;
          }).join('')}
        </div>
        <div class="bar-labels">
          ${hourKeys.map(h => `<div class="bar-label">${h}</div>`).join('')}
        </div>
      </div>

      <div class="two-col">
        <div class="list-box">
          <div class="lb-head">
            <h3><i class="fas fa-trophy"></i> Top 5 Produk Terlaris</h3>
            <small>Berdasarkan kuantitas</small>
          </div>
          ${topProducts.map((p, i) => `
            <div class="top-item">
              <div class="ti-rank">${i+1}</div>
              <div class="ti-info">
                <strong>${p.nama}</strong>
                <small>${rp(p.revenue)}</small>
              </div>
              <div class="ti-qty">${p.qty}x</div>
            </div>
          `).join('')}
        </div>

        <div class="list-box">
          <div class="lb-head">
            <h3><i class="fas fa-credit-card"></i> Metode Pembayaran</h3>
            <small>Rekap transaksi</small>
          </div>
          ${Object.entries(methodMap).map(([method, total]) => {
            const count = data.filter(t => t.metode === method).length;
            const pct = totalRevenue > 0 ? ((total/totalRevenue)*100).toFixed(0) : 0;
            const icon = method === 'Tunai' ? 'fa-money-bill-wave' : method === 'Debit' ? 'fa-credit-card' : 'fa-qrcode';
            return `
              <div class="pay-method">
                <div class="pm-info">
                  <div class="pm-icon"><i class="fas ${icon}"></i></div>
                  <div>
                    <strong>${method}</strong>
                    <small>${count} transaksi</small>
                  </div>
                </div>
                <div class="pm-value">
                  <strong>${rp(total)}</strong>
                  <small>${pct}%</small>
                </div>
              </div>
            `;
          }).join('')}
        </div>
      </div>

      <div class="kas-rekap">
        <div class="kas-item">
          <div class="ki-lbl">Total Kas Tunai</div>
          <div class="ki-val green">${rp(totalTunai)}</div>
        </div>
        <div class="kas-item">
          <div class="ki-lbl">Total Non-Tunai</div>
          <div class="ki-val">${rp(totalNonTunai)}</div>
        </div>
        <div class="kas-item">
          <div class="ki-lbl">Total Keseluruhan</div>
          <div class="ki-val green">${rp(totalRevenue)}</div>
        </div>
        <div class="kas-item">
          <div class="ki-lbl">Rata-rata / Transaksi</div>
          <div class="ki-val">${rp(avgTx)}</div>
        </div>
      </div>
    `;
  }

  /* =========================================================
     EKSPOR CSV
  ========================================================= */
  document.getElementById('btnExportCSV').addEventListener('click', () => {
    const data = getTxByPeriode(reportPeriode);
    if (data.length === 0) {
      toast('Tidak ada data untuk diekspor', 'fa-exclamation-circle');
      return;
    }

    let csv = 'No Transaksi,Tanggal,Kasir,Metode,Member,Jumlah Item,Subtotal,Diskon,PPN,Total\n';
    data.forEach(t => {
      const items = t.items.reduce((s, i) => s + i.qty, 0);
      csv += `"${t.nomor}","${t.tanggal}","${t.kasir}","${t.metode}","${t.member ? 'Ya' : 'Tidak'}",${items},${t.subtotal},${t.diskon},${t.tax},${t.total}\n`;
    });

    const blob = new Blob([csv], { type:'text/csv;charset=utf-8;' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'laporan_penjualan_' + reportPeriode + '_' + new Date().toISOString().slice(0,10) + '.csv';
    a.click();
    URL.revokeObjectURL(url);
    toast('Laporan diekspor ke CSV', 'fa-file-csv');
  });

  /* =========================================================
     RESET DATA
  ========================================================= */
  document.getElementById('btnResetData').addEventListener('click', () => {
    if (!confirm('Reset semua produk ke default?')) return;
    produkList = JSON.parse(JSON.stringify(defaultProduk));
    cart = [];
    saveProduk();
    renderProdukTable();
    renderProduk();
    renderCart();
    toast('Data produk direset', 'fa-rotate');
  });

  /* =========================================================
     INIT
  ========================================================= */
  renderProduk();
  renderCart();
  updateCartMeta();
  renderProdukTable();
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>