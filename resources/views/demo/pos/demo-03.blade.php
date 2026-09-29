@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sehat Farma — POS Apotek & Klinik</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
* { margin:0; padding:0; box-sizing:border-box; }
body {
  font-family:'Inter',system-ui,-apple-system,sans-serif;
  background:#e3e9ef;
  color:#1a2a3a;
  min-height:100vh;
  font-size:14px;
}

/* ===== APP FRAME ===== */
.app {
  max-width:1500px;
  margin:0 auto;
  background:#f5f7fa;
  min-height:100vh;
  display:flex; flex-direction:column;
}

/* ===== HEADER ===== */
.topbar {
  background:#1a4971;
  color:#ffffff;
  padding:0 24px;
  height:62px;
  display:flex; align-items:center; justify-content:space-between;
  border-bottom:3px solid #2ba3a3;
  position:sticky; top:0; z-index:50;
}
.brand { display:flex; align-items:center; gap:12px; }
.brand-mark {
  width:36px; height:36px; border-radius:8px;
  background:#2ba3a3;
  display:flex; align-items:center; justify-content:center;
  font-size:1.05rem;
}
.brand h1 {
  font-size:1.05rem;
  font-weight:700;
  letter-spacing:0.2px;
  line-height:1.1;
}
.brand h1 small {
  display:block;
  font-size:0.65rem;
  font-weight:400;
  color:#a8c3d6;
  letter-spacing:1.8px;
  text-transform:uppercase;
  margin-top:3px;
}
.topbar-right { display:flex; align-items:center; gap:14px; }
.mode-nav {
  display:flex;
  background:#143659;
  border-radius:8px;
  padding:3px;
}
.mode-nav button {
  background:transparent;
  border:none;
  color:#a8c3d6;
  padding:8px 15px;
  border-radius:6px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.78rem;
  font-weight:500;
  display:flex; align-items:center; gap:6px;
}
.mode-nav button:hover { color:#fff; }
.mode-nav button.active {
  background:#2ba3a3;
  color:#ffffff;
}
.user-badge {
  display:flex; align-items:center; gap:9px;
  background:#143659;
  padding:6px 14px 6px 6px;
  border-radius:40px;
}
.user-badge .avatar {
  width:28px; height:28px; border-radius:50%;
  background:#2ba3a3;
  display:flex; align-items:center; justify-content:center;
  font-weight:700; font-size:0.75rem; color:#fff;
}
.user-badge .info { line-height:1.15; }
.user-badge .name {
  font-size:0.78rem; font-weight:600; color:#fff;
}
.user-badge .role {
  font-size:0.62rem; color:#a8c3d6;
  text-transform:uppercase; letter-spacing:0.6px;
}

/* ===== PAGE ===== */
.page { display:none; flex:1; overflow:hidden; }
.page.active { display:flex; flex-direction:column; }

/* ===== KASIR: 3 KOLOM ===== */
.kasir-grid {
  display:grid;
  grid-template-columns:1fr 340px 300px;
  gap:0;
  flex:1;
  min-height:0;
}

/* === KOLOM 1: PRODUK === */
.col-produk {
  padding:20px 22px;
  overflow-y:auto;
  display:flex; flex-direction:column;
}
.search-big {
  position:relative;
  margin-bottom:16px;
}
.search-big input {
  width:100%;
  border:2px solid #d0dae5;
  background:#ffffff;
  padding:14px 16px 14px 46px;
  border-radius:10px;
  font-family:'Inter',sans-serif;
  font-size:0.95rem;
  color:#1a2a3a;
  outline:none;
  transition:border-color 0.12s;
}
.search-big input:focus { border-color:#2ba3a3; }
.search-big i {
  position:absolute;
  left:17px; top:50%;
  transform:translateY(-50%);
  color:#7a91a8;
  font-size:0.95rem;
  pointer-events:none;
}
.search-big .hint {
  position:absolute;
  right:12px; top:50%;
  transform:translateY(-50%);
  font-size:0.7rem;
  color:#9aafc2;
  background:#eef2f7;
  padding:3px 8px;
  border-radius:5px;
  font-weight:500;
}

.kat-tabs {
  display:flex; gap:6px; margin-bottom:16px;
  flex-wrap:wrap;
}
.kat-tab {
  background:#ffffff;
  border:1.5px solid #d0dae5;
  padding:7px 14px;
  border-radius:6px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.76rem;
  font-weight:600;
  color:#4a6580;
  letter-spacing:0.2px;
  transition:all 0.12s;
  display:flex; align-items:center; gap:6px;
}
.kat-tab:hover { border-color:#2ba3a3; color:#1a4971; }
.kat-tab.active {
  background:#1a4971;
  border-color:#1a4971;
  color:#fff;
}
.kat-tab.active i { color:#5ed4d4; }
.kat-tab i { font-size:0.72rem; color:#7a91a8; }

/* LIST PRODUK — gaya katalog apotek */
.prod-head {
  display:grid;
  grid-template-columns:1fr 100px 80px 90px;
  gap:14px;
  padding:8px 12px;
  font-size:0.68rem;
  font-weight:700;
  color:#7a91a8;
  text-transform:uppercase;
  letter-spacing:0.8px;
  border-bottom:1px solid #d0dae5;
}
.prod-list { display:flex; flex-direction:column; }
.prod-row {
  display:grid;
  grid-template-columns:1fr 100px 80px 90px;
  gap:14px;
  padding:12px;
  cursor:pointer;
  border-bottom:1px solid #e3e9ef;
  align-items:center;
  transition:background 0.1s;
}
.prod-row:hover { background:#eef4f8; }
.prod-row.out { opacity:0.42; cursor:not-allowed; }
.prod-row.out:hover { background:transparent; }
.prod-name {
  display:flex; align-items:center; gap:12px;
  min-width:0;
}
.prod-icon {
  width:36px; height:36px; border-radius:8px;
  background:#e3f4f4;
  color:#1a4971;
  display:flex; align-items:center; justify-content:center;
  font-size:0.95rem;
  flex-shrink:0;
}
.prod-row.keras .prod-icon {
  background:#fdeee8; color:#a83f1f;
}
.prod-info { min-width:0; }
.prod-info h4 {
  font-size:0.86rem;
  font-weight:600;
  color:#1a2a3a;
  margin-bottom:2px;
  overflow:hidden;
  text-overflow:ellipsis;
  white-space:nowrap;
}
.prod-info small {
  font-size:0.7rem;
  color:#7a91a8;
  display:block;
}
.prod-kode {
  font-family:'Courier New',monospace;
  font-size:0.78rem;
  font-weight:600;
  color:#4a6580;
  letter-spacing:0.5px;
}
.prod-stok {
  font-size:0.78rem;
  font-weight:600;
  color:#1a4971;
}
.prod-stok.low { color:#d17a1f; }
.prod-stok.out { color:#a83f1f; }
.prod-harga {
  text-align:right;
  font-weight:700;
  color:#1a4971;
  font-size:0.88rem;
}
.prod-row:hover .prod-harga::after {
  content:' →';
  color:#2ba3a3;
}

/* === KOLOM 2: RESEP (keranjang) === */
.col-resep {
  background:#ffffff;
  border-left:1px solid #d0dae5;
  border-right:1px solid #d0dae5;
  display:flex; flex-direction:column;
  min-height:0;
}
.resep-head {
  padding:16px 20px 14px;
  border-bottom:2px solid #1a4971;
  background:#f5f7fa;
}
.resep-head .kicker {
  font-size:0.65rem;
  color:#2ba3a3;
  font-weight:700;
  letter-spacing:2px;
  text-transform:uppercase;
  margin-bottom:5px;
}
.resep-head h3 {
  font-size:1rem;
  font-weight:700;
  color:#1a4971;
  display:flex; align-items:center; gap:8px;
}
.resep-head h3 i { color:#2ba3a3; font-size:0.9rem; }
.resep-head .count-pill {
  background:#1a4971;
  color:#fff;
  font-size:0.68rem;
  font-weight:700;
  padding:2px 9px;
  border-radius:20px;
  margin-left:auto;
}

.resep-body {
  flex:1;
  overflow-y:auto;
  padding:14px 18px;
  min-height:0;
}
.resep-empty {
  text-align:center;
  padding:50px 20px;
  color:#9aafc2;
  font-size:0.82rem;
}
.resep-empty i {
  font-size:2.4rem;
  display:block;
  margin-bottom:14px;
  color:#d0dae5;
}
.resep-empty strong {
  display:block;
  color:#4a6580;
  font-size:0.88rem;
  margin-bottom:4px;
}

.resep-item {
  padding:12px 0;
  border-bottom:1px dashed #d0dae5;
}
.resep-item:last-child { border-bottom:none; }
.ri-top {
  display:flex; justify-content:space-between;
  align-items:flex-start; gap:10px;
  margin-bottom:4px;
}
.ri-name {
  font-weight:600;
  font-size:0.85rem;
  color:#1a2a3a;
  line-height:1.25;
}
.ri-kode {
  font-family:'Courier New',monospace;
  font-size:0.68rem;
  color:#7a91a8;
  margin-top:1px;
}
.ri-price {
  font-weight:700;
  font-size:0.86rem;
  color:#1a4971;
  white-space:nowrap;
}
.ri-note {
  font-size:0.72rem;
  color:#2ba3a3;
  font-style:italic;
  margin:4px 0 8px;
  padding:4px 8px;
  background:#e3f4f4;
  border-left:2px solid #2ba3a3;
  border-radius:3px;
}
.ri-bottom {
  display:flex; justify-content:space-between;
  align-items:center;
}
.ri-qty {
  display:flex; align-items:center; gap:0;
  border:1.5px solid #d0dae5;
  border-radius:6px;
  overflow:hidden;
}
.ri-qty button {
  background:#f5f7fa;
  border:none;
  color:#1a4971;
  width:26px; height:26px;
  cursor:pointer;
  font-size:0.68rem;
  font-weight:700;
}
.ri-qty button:hover { background:#2ba3a3; color:#fff; }
.ri-qty span {
  padding:0 10px;
  font-size:0.8rem;
  font-weight:700;
  min-width:26px;
  text-align:center;
  border-left:1.5px solid #d0dae5;
  border-right:1.5px solid #d0dae5;
  line-height:26px;
}
.ri-del {
  background:transparent;
  border:none;
  color:#9aafc2;
  cursor:pointer;
  font-size:0.82rem;
  padding:4px 8px;
}
.ri-del:hover { color:#a83f1f; }

/* TOTAL RESEP */
.resep-total {
  padding:16px 20px;
  background:#f5f7fa;
  border-top:2px solid #1a4971;
}
.rt-row {
  display:flex; justify-content:space-between;
  font-size:0.82rem;
  color:#4a6580;
  margin-bottom:7px;
}
.rt-row.grand {
  font-size:1.25rem;
  font-weight:700;
  color:#1a4971;
  padding-top:10px;
  margin-top:8px;
  border-top:1px dashed #a8c3d6;
  margin-bottom:14px;
}
.btn-process {
  width:100%;
  background:#1a4971;
  color:#fff;
  border:none;
  padding:14px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.94rem;
  font-weight:700;
  letter-spacing:0.3px;
  display:flex; align-items:center; justify-content:center; gap:10px;
  transition:background 0.12s;
}
.btn-process:hover { background:#143659; }
.btn-process:disabled {
  background:#b8c6d4;
  cursor:not-allowed;
}
.btn-process i { color:#5ed4d4; }
.btn-process:disabled i { color:#dae3ec; }

/* === KOLOM 3: PASIEN === */
.col-pasien {
  padding:20px 22px;
  overflow-y:auto;
}
.pasien-head {
  font-size:0.65rem;
  font-weight:700;
  color:#2ba3a3;
  letter-spacing:2px;
  text-transform:uppercase;
  margin-bottom:14px;
  display:flex; align-items:center; gap:8px;
}
.pasien-head i { font-size:0.75rem; }
.pasien-form { display:flex; flex-direction:column; gap:12px; }
.form-field label {
  display:block;
  font-size:0.72rem;
  font-weight:600;
  color:#4a6580;
  margin-bottom:5px;
  text-transform:uppercase;
  letter-spacing:0.5px;
}
.form-field input,
.form-field select,
.form-field textarea {
  width:100%;
  border:1.5px solid #d0dae5;
  background:#ffffff;
  padding:10px 12px;
  border-radius:7px;
  font-family:'Inter',sans-serif;
  font-size:0.85rem;
  color:#1a2a3a;
  outline:none;
  transition:border-color 0.12s;
}
.form-field input:focus,
.form-field select:focus,
.form-field textarea:focus { border-color:#2ba3a3; }
.form-field textarea {
  resize:vertical;
  min-height:60px;
  font-size:0.82rem;
}
.no-resep-warning {
  background:#fdeee8;
  border-left:3px solid #d17a1f;
  padding:9px 12px;
  border-radius:5px;
  font-size:0.75rem;
  color:#7a4a17;
  line-height:1.45;
  display:flex;
  gap:8px;
}
.no-resep-warning i { color:#d17a1f; margin-top:1px; flex-shrink:0; }

/* ===== ADMIN ===== */
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
  font-size:1.2rem;
  font-weight:700;
  color:#1a4971;
}
.admin-head h2 small {
  display:block;
  font-size:0.72rem;
  font-weight:400;
  color:#7a91a8;
  letter-spacing:1px;
  text-transform:uppercase;
  margin-top:4px;
}
.admin-actions { display:flex; gap:10px; }
.btn-primary {
  background:#1a4971;
  color:#fff;
  border:none;
  padding:10px 18px;
  border-radius:7px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.82rem;
  font-weight:600;
  display:flex; align-items:center; gap:8px;
}
.btn-primary:hover { background:#143659; }
.btn-primary i { color:#5ed4d4; }
.btn-secondary {
  background:#fff;
  border:1.5px solid #d0dae5;
  color:#4a6580;
  padding:10px 18px;
  border-radius:7px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.82rem;
  font-weight:600;
  display:flex; align-items:center; gap:8px;
}
.btn-secondary:hover { background:#f5f7fa; border-color:#2ba3a3; color:#1a4971; }

/* STATS */
.stats-row {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:12px;
  margin-bottom:20px;
}
.stat-card {
  background:#fff;
  border:1px solid #d0dae5;
  border-radius:10px;
  padding:16px 18px;
  position:relative;
  overflow:hidden;
}
.stat-card::before {
  content:'';
  position:absolute;
  top:0; left:0;
  width:4px; height:100%;
  background:#2ba3a3;
}
.stat-card.warn::before { background:#d17a1f; }
.stat-card.danger::before { background:#a83f1f; }
.stat-card .s-lbl {
  font-size:0.68rem;
  color:#7a91a8;
  text-transform:uppercase;
  letter-spacing:0.8px;
  font-weight:600;
  margin-bottom:6px;
}
.stat-card .s-val {
  font-size:1.4rem;
  font-weight:700;
  color:#1a4971;
}
.stat-card.warn .s-val { color:#d17a1f; }
.stat-card.danger .s-val { color:#a83f1f; }

/* TABEL ADMIN */
.table-box {
  background:#fff;
  border:1px solid #d0dae5;
  border-radius:10px;
  overflow:hidden;
}
table { width:100%; border-collapse:collapse; font-size:0.84rem; }
thead { background:#f5f7fa; }
th {
  text-align:left;
  padding:12px 16px;
  font-size:0.68rem;
  font-weight:700;
  color:#4a6580;
  text-transform:uppercase;
  letter-spacing:0.6px;
  border-bottom:1px solid #d0dae5;
}
td {
  padding:13px 16px;
  border-bottom:1px solid #e3e9ef;
  color:#1a2a3a;
  vertical-align:middle;
}
tbody tr:last-child td { border-bottom:none; }
tbody tr:hover { background:#f5f7fa; }
.td-name {
  display:flex; align-items:center; gap:10px;
}
.td-icon {
  width:32px; height:32px; border-radius:7px;
  background:#e3f4f4;
  color:#1a4971;
  display:flex; align-items:center; justify-content:center;
  font-size:0.85rem;
  flex-shrink:0;
}
.td-icon.keras { background:#fdeee8; color:#a83f1f; }
.td-name strong {
  font-weight:600;
  color:#1a2a3a;
  display:block;
}
.td-name small {
  font-family:'Courier New',monospace;
  font-size:0.68rem;
  color:#7a91a8;
  letter-spacing:0.4px;
}
.badge-kat {
  display:inline-block;
  padding:3px 10px;
  border-radius:4px;
  font-size:0.68rem;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:0.4px;
}
.badge-kat.bebas { background:#e3f4f4; color:#1a6b6b; }
.badge-kat.keras { background:#fdeee8; color:#a83f1f; }
.badge-kat.vitamin { background:#e8f4dd; color:#4a7a1f; }
.badge-kat.alkes { background:#eae4f4; color:#5a3a8a; }
.badge-kat.layanan { background:#fdf4dd; color:#8a6b1f; }

.stok-cell { display:flex; flex-direction:column; gap:3px; }
.stok-num {
  font-weight:700;
  color:#1a4971;
}
.stok-min {
  font-size:0.68rem;
  color:#7a91a8;
}
.stok-pill {
  display:inline-block;
  padding:2px 8px;
  border-radius:4px;
  font-size:0.66rem;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:0.3px;
}
.stok-pill.ok { background:#e8f4dd; color:#4a7a1f; }
.stok-pill.warn { background:#fdf4dd; color:#8a6b1f; }
.stok-pill.danger { background:#fdeee8; color:#a83f1f; }

.kadaluarsa {
  font-size:0.78rem;
  font-family:'Courier New',monospace;
  color:#4a6580;
}
.kadaluarsa.warn { color:#d17a1f; font-weight:700; }
.kadaluarsa.danger { color:#a83f1f; font-weight:700; }

.row-actions { display:flex; gap:5px; justify-content:flex-end; }
.icon-btn {
  width:30px; height:30px;
  border-radius:6px;
  background:#fff;
  border:1.5px solid #d0dae5;
  color:#4a6580;
  cursor:pointer;
  font-size:0.75rem;
  display:flex; align-items:center; justify-content:center;
}
.icon-btn:hover {
  background:#1a4971; color:#fff; border-color:#1a4971;
}
.icon-btn.danger:hover {
  background:#a83f1f; border-color:#a83f1f;
}

/* ===== MODAL ===== */
.modal-bg {
  position:fixed; inset:0;
  background:rgba(26,73,113,0.55);
  display:none;
  align-items:center; justify-content:center;
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
  box-shadow:0 20px 50px -10px rgba(26,73,113,0.4);
}
.modal-head {
  padding:20px 24px 14px;
  border-bottom:1px solid #e3e9ef;
  display:flex; justify-content:space-between; align-items:flex-start;
}
.modal-head h3 {
  font-size:1.05rem;
  font-weight:700;
  color:#1a4971;
  display:flex; align-items:center; gap:10px;
}
.modal-head h3 i { color:#2ba3a3; }
.modal-head .sub {
  font-size:0.75rem;
  color:#7a91a8;
  margin-top:5px;
}
.modal-close {
  width:30px; height:30px;
  border-radius:50%;
  background:transparent;
  border:1px solid #d0dae5;
  color:#7a91a8;
  cursor:pointer;
}
.modal-close:hover { background:#1a4971; color:#fff; border-color:#1a4971; }
.modal-body { padding:20px 24px; }
.modal-foot {
  padding:16px 24px 20px;
  border-top:1px solid #e3e9ef;
  background:#f5f7fa;
  display:flex; gap:10px;
  border-radius:0 0 12px 12px;
}
.modal-foot .btn-secondary { flex:1; justify-content:center; }
.modal-foot .btn-primary { flex:2; justify-content:center; padding:12px; }

/* PAYMENT TABS */
.pay-grid {
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:8px;
  margin-bottom:20px;
}
.pay-opt {
  border:2px solid #d0dae5;
  border-radius:8px;
  padding:14px 8px;
  text-align:center;
  cursor:pointer;
  font-size:0.78rem;
  font-weight:600;
  color:#4a6580;
  transition:all 0.12s;
}
.pay-opt i {
  display:block;
  font-size:1.1rem;
  margin-bottom:6px;
  color:#7a91a8;
}
.pay-opt:hover { border-color:#2ba3a3; }
.pay-opt.selected {
  border-color:#1a4971;
  background:#f0f7fa;
  color:#1a4971;
}
.pay-opt.selected i { color:#2ba3a3; }

/* STRUK RESEP */
.resep-print {
  background:#fff;
  border:1px solid #d0dae5;
  border-radius:8px;
  padding:24px;
  font-family:'Inter',sans-serif;
  font-size:0.82rem;
  color:#1a2a3a;
  position:relative;
}
.resep-print::before {
  content:'';
  position:absolute;
  top:0; left:0; right:0;
  height:5px;
  background:repeating-linear-gradient(
    90deg,
    #1a4971 0 20px,
    #2ba3a3 20px 40px
  );
}
.rp-head {
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
  padding-bottom:14px;
  border-bottom:2px solid #1a4971;
  margin-bottom:14px;
  padding-top:8px;
}
.rp-head .left h4 {
  font-size:1rem;
  font-weight:700;
  color:#1a4971;
  letter-spacing:0.3px;
}
.rp-head .left small {
  display:block;
  font-size:0.68rem;
  color:#7a91a8;
  margin-top:4px;
  line-height:1.5;
}
.rp-head .right { text-align:right; }
.rp-head .right .num {
  font-family:'Courier New',monospace;
  font-size:0.82rem;
  font-weight:700;
  color:#1a4971;
}
.rp-head .right .date {
  font-size:0.7rem;
  color:#7a91a8;
  margin-top:4px;
}

.rp-patient {
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:10px 20px;
  padding:12px 14px;
  background:#f0f7fa;
  border-radius:6px;
  margin-bottom:16px;
  font-size:0.78rem;
}
.rp-patient .p-item {
  display:flex;
  gap:8px;
}
.rp-patient .p-item .lbl {
  color:#7a91a8;
  min-width:70px;
  font-size:0.72rem;
}
.rp-patient .p-item .val {
  color:#1a2a3a;
  font-weight:600;
}

.rp-table {
  width:100%;
  border-collapse:collapse;
  margin-bottom:14px;
  font-size:0.78rem;
}
.rp-table th {
  text-align:left;
  padding:8px 6px;
  font-size:0.66rem;
  color:#7a91a8;
  text-transform:uppercase;
  letter-spacing:0.5px;
  border-bottom:1.5px solid #1a4971;
  font-weight:700;
}
.rp-table th.r { text-align:right; }
.rp-table td {
  padding:10px 6px;
  border-bottom:1px solid #e3e9ef;
  color:#1a2a3a;
  vertical-align:top;
}
.rp-table td.r { text-align:right; font-weight:600; color:#1a4971; }
.rp-table .item-note {
  font-size:0.7rem;
  color:#2ba3a3;
  font-style:italic;
  margin-top:2px;
}
.rp-table .item-code {
  font-family:'Courier New',monospace;
  font-size:0.7rem;
  color:#7a91a8;
}

.rp-total {
  margin-left:auto;
  width:60%;
  font-size:0.82rem;
  padding-top:8px;
  border-top:1.5px solid #1a4971;
}
.rp-total .t-row {
  display:flex;
  justify-content:space-between;
  margin-bottom:6px;
  color:#4a6580;
}
.rp-total .t-grand {
  display:flex;
  justify-content:space-between;
  font-size:1.15rem;
  font-weight:700;
  color:#1a4971;
  padding-top:8px;
  border-top:1px dashed #a8c3d6;
  margin-top:6px;
}

.rp-sign {
  margin-top:24px;
  display:flex;
  justify-content:space-between;
  align-items:flex-end;
  font-size:0.72rem;
  color:#7a91a8;
}
.rp-sign .sig {
  text-align:center;
  min-width:140px;
}
.rp-sign .sig .line {
  border-top:1px solid #1a2a3a;
  padding-top:6px;
  margin-top:38px;
  color:#1a2a3a;
  font-weight:600;
  font-size:0.78rem;
}
.rp-sign .sig small {
  font-size:0.66rem;
  color:#7a91a8;
  display:block;
  margin-top:2px;
}

.rp-footer {
  text-align:center;
  font-size:0.68rem;
  color:#7a91a8;
  margin-top:20px;
  padding-top:14px;
  border-top:1px dashed #d0dae5;
  line-height:1.7;
}

/* TOAST */
.toast {
  position:fixed;
  bottom:24px; left:50%;
  transform:translateX(-50%);
  background:#1a4971;
  color:#fff;
  padding:13px 24px;
  border-radius:8px;
  font-size:0.85rem;
  font-weight:500;
  display:flex; align-items:center; gap:10px;
  opacity:0;
  pointer-events:none;
  transition:opacity 0.2s;
  z-index:200;
  box-shadow:0 10px 30px -8px rgba(26,73,113,0.5);
  border-left:4px solid #2ba3a3;
}
.toast.show { opacity:1; }
.toast i { color:#5ed4d4; }

/* SCROLLBAR */
::-webkit-scrollbar { width:6px; height:6px; }
::-webkit-scrollbar-track { background:transparent; }
::-webkit-scrollbar-thumb { background:#b8c6d4; border-radius:10px; }

/* RESPONSIF */
@media (max-width: 1100px) {
  .kasir-grid { grid-template-columns:1fr; }
  .col-pasien { display:none; }
  .col-pasien.mobile-show { display:block; }
  .col-produk, .col-resep { border:none; border-bottom:1px solid #d0dae5; }
}
@media (max-width: 700px) {
  .topbar { padding:0 14px; height:auto; min-height:60px; flex-wrap:wrap; padding-top:10px; padding-bottom:10px; gap:8px; }
  .mode-nav button span { display:none; }
  .prod-head { display:none; }
  .prod-row {
    grid-template-columns:1fr auto;
    gap:10px;
    padding:12px 10px;
  }
  .prod-kode { display:none; }
  .prod-stok { grid-column:1; font-size:0.72rem; }
  .prod-harga { grid-column:2; }
  .rp-patient { grid-template-columns:1fr; }
  .rp-total { width:100%; }
  .modal { max-height:100vh; }
  .admin-wrap { padding:16px; }
}
</style>
</head>
<body>

<div class="app">

<!-- ===== HEADER ===== -->
<header class="topbar">
  <div class="brand">
    <div class="brand-mark"><i class="fas fa-mortar-pestle"></i></div>
    <h1>Sehat Farma<small>Apotek & Klinik Pratama</small></h1>
  </div>
  <div class="topbar-right">
    <nav class="mode-nav">
      <button id="navKasir" class="active">
        <i class="fas fa-prescription-bottle-medical"></i> <span>Kasir</span>
      </button>
      <button id="navAdmin">
        <i class="fas fa-warehouse"></i> <span>Inventaris</span>
      </button>
    </nav>
    <div class="user-badge">
      <div class="avatar" id="avatarInit">AS</div>
      <div class="info">
        <div class="name" id="userName">Apt. Sari</div>
        <div class="role" id="userRole">Apoteker</div>
      </div>
    </div>
  </div>
</header>

<!-- ========================================================= -->
<!-- ==================== PAGE KASIR ========================== -->
<!-- ========================================================= -->
<div class="page active" id="pageKasir">
  <div class="kasir-grid">

    <!-- KOLOM 1: PRODUK -->
    <section class="col-produk">
      <div class="search-big">
        <i class="fas fa-search"></i>
        <input type="text" id="searchInput" placeholder="Cari nama obat, layanan, atau kode...">
        <span class="hint">F2</span>
      </div>

      <div class="kat-tabs" id="katTabs">
        <button class="kat-tab active" data-kat="semua"><i class="fas fa-layer-group"></i> Semua</button>
        <button class="kat-tab" data-kat="bebas"><i class="fas fa-capsules"></i> Obat Bebas</button>
        <button class="kat-tab" data-kat="keras"><i class="fas fa-prescription"></i> Obat Keras</button>
        <button class="kat-tab" data-kat="vitamin"><i class="fas fa-leaf"></i> Vitamin</button>
        <button class="kat-tab" data-kat="alkes"><i class="fas fa-bandage"></i> Alkes</button>
        <button class="kat-tab" data-kat="layanan"><i class="fas fa-stethoscope"></i> Layanan</button>
      </div>

      <div class="prod-head">
        <div>Nama Produk</div>
        <div>Kode</div>
        <div>Stok</div>
        <div style="text-align:right;">Harga</div>
      </div>
      <div class="prod-list" id="prodList"></div>
    </section>

    <!-- KOLOM 2: RESEP -->
    <aside class="col-resep">
      <div class="resep-head">
        <div class="kicker">Resep Aktif</div>
        <h3>
          <i class="fas fa-file-prescription"></i> Daftar Item
          <span class="count-pill" id="resepCount">0</span>
        </h3>
      </div>

      <div class="resep-body" id="resepBody">
        <div class="resep-empty">
          <i class="fas fa-prescription-bottle"></i>
          <strong>Belum ada item</strong>
          Pilih obat atau layanan<br>dari daftar di sebelah kiri.
        </div>
      </div>

      <div class="resep-total">
        <div class="rt-row"><span>Subtotal</span><span id="subTxt">Rp 0</span></div>
        <div class="rt-row"><span>PPN 11%</span><span id="ppnTxt">Rp 0</span></div>
        <div class="rt-row grand"><span>Total</span><span id="totalTxt">Rp 0</span></div>
        <button class="btn-process" id="btnProcess" disabled>
          <i class="fas fa-check-double"></i> Proses Transaksi
        </button>
      </div>
    </aside>

    <!-- KOLOM 3: PASIEN -->
    <aside class="col-pasien" id="colPasien">
      <div class="pasien-head">
        <i class="fas fa-user-injured"></i>
        Data Pasien
      </div>
      <div class="pasien-form">
        <div class="form-field">
          <label>Nama Pasien</label>
          <input type="text" id="pNama" placeholder="Nama lengkap" value="Tn. Budi Santoso">
        </div>
        <div class="form-field">
          <label>Umur</label>
          <input type="number" id="pUmur" placeholder="Tahun" value="42" min="0" max="150">
        </div>
        <div class="form-field">
          <label>Dokter Pemeriksa</label>
          <select id="pDokter">
            <option>dr. Hendra Wijaya</option>
            <option>dr. Maya Kusuma</option>
            <option>dr. Rizki Pratama, Sp.PD</option>
            <option>Umum / Tanpa Dokter</option>
          </select>
        </div>
        <div class="form-field">
          <label>No. Resep</label>
          <input type="text" id="pResep" placeholder="Otomatis jika kosong">
        </div>
        <div class="form-field">
          <label>Catatan</label>
          <textarea id="pCatatan" placeholder="Keluhan, alergi, atau catatan lain..."></textarea>
        </div>

        <div class="no-resep-warning">
          <i class="fas fa-circle-info"></i>
          <span>Obat <strong>keras</strong> (tanda merah) hanya bisa ditambahkan jika nomor resep sudah diisi.</span>
        </div>
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
      <h2>Inventaris Apotek<small>Kelola stok, harga & kadaluarsa</small></h2>
      <div class="admin-actions">
        <button class="btn-secondary" id="btnResetData">
          <i class="fas fa-rotate"></i> Reset Data
        </button>
        <button class="btn-primary" id="btnTambahProduk">
          <i class="fas fa-plus"></i> Produk Baru
        </button>
      </div>
    </div>

    <div class="stats-row">
      <div class="stat-card">
        <div class="s-lbl">Total Item</div>
        <div class="s-val" id="sTotal">0</div>
      </div>
      <div class="stat-card">
        <div class="s-lbl">Total Stok</div>
        <div class="s-val" id="sStok">0</div>
      </div>
      <div class="stat-card warn">
        <div class="s-lbl">Stok di Bawah Minimum</div>
        <div class="s-val" id="sLow">0</div>
      </div>
      <div class="stat-card danger">
        <div class="s-lbl">Mendekati Kadaluarsa</div>
        <div class="s-val" id="sExp">0</div>
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
            <th>Kadaluarsa</th>
            <th style="text-align:right;">Aksi</th>
          </tr>
        </thead>
        <tbody id="adminBody"></tbody>
      </table>
    </div>
  </div>
</div>

</div>

<!-- ===== MODAL PEMBAYARAN ===== -->
<div class="modal-bg" id="modalBayar">
  <div class="modal">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-cash-register"></i> Proses Pembayaran</h3>
        <div class="sub">Pilih metode pembayaran lalu konfirmasi.</div>
      </div>
      <button class="modal-close" id="closeBayar"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="pay-grid" id="payGrid">
        <div class="pay-opt selected" data-method="Tunai"><i class="fas fa-money-bill-wave"></i>Tunai</div>
        <div class="pay-opt" data-method="Debit"><i class="fas fa-credit-card"></i>Kartu</div>
        <div class="pay-opt" data-method="BPJS"><i class="fas fa-id-card"></i>BPJS</div>
      </div>

      <div id="cashSection">
        <div class="form-field" style="margin-bottom:10px;">
          <label>Uang Diterima (Rp)</label>
          <input type="number" id="cashInput" placeholder="0" min="0" step="1000">
        </div>
        <div id="changeBox" style="background:#e8f4dd; color:#4a7a1f; padding:11px 14px; border-radius:7px; font-size:0.82rem; display:flex; justify-content:space-between; font-weight:600; transition:background 0.15s;">
          <span>Kembalian</span>
          <span id="changeTxt">Rp 0</span>
        </div>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-secondary" id="btnBatalBayar">Batal</button>
      <button class="btn-primary" id="btnKonfirmasiBayar">
        <i class="fas fa-check"></i> Konfirmasi Bayar
      </button>
    </div>
  </div>
</div>

<!-- ===== MODAL STRUK / RESEP ===== -->
<div class="modal-bg" id="modalStruk">
  <div class="modal" style="max-width:560px;">
    <div class="modal-head">
      <div>
        <h3><i class="fas fa-file-prescription"></i> Resep & Struk</h3>
        <div class="sub">Serahkan salinan ini ke pasien.</div>
      </div>
      <button class="modal-close" id="closeStruk"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body" id="strukBody"></div>
    <div class="modal-foot">
      <button class="btn-secondary" id="btnOrderBaru">Pasien Baru</button>
      <button class="btn-primary" id="btnCetak">
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
        <h3><i class="fas fa-box"></i> <span id="modalProdukTitle">Tambah Produk</span></h3>
        <div class="sub">Isi detail obat/layanan dengan lengkap.</div>
      </div>
      <button class="modal-close" id="closeProduk"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <input type="hidden" id="editId">
      <div class="form-field" style="margin-bottom:14px;">
        <label>Nama Produk</label>
        <input type="text" id="fNama" placeholder="Contoh: Paracetamol 500mg" maxlength="50">
      </div>
      <div class="form-field" style="margin-bottom:14px;">
        <label>Kode Produk</label>
        <input type="text" id="fKode" placeholder="Contoh: OB-001" maxlength="10" style="font-family:'Courier New',monospace; text-transform:uppercase;">
      </div>
      <div class="form-field" style="margin-bottom:14px;">
        <label>Kategori</label>
        <select id="fKategori">
          <option value="bebas">Obat Bebas</option>
          <option value="keras">Obat Keras (butuh resep)</option>
          <option value="vitamin">Vitamin / Suplemen</option>
          <option value="alkes">Alat Kesehatan</option>
          <option value="layanan">Layanan Medis</option>
        </select>
      </div>
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-bottom:14px;">
        <div class="form-field">
          <label>Harga (Rp)</label>
          <input type="number" id="fHarga" placeholder="0" min="0" step="500">
        </div>
        <div class="form-field">
          <label>Stok</label>
          <input type="number" id="fStok" placeholder="0" min="0">
        </div>
      </div>
      <div style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
        <div class="form-field">
          <label>Stok Minimum</label>
          <input type="number" id="fMin" placeholder="5" min="0" value="5">
        </div>
        <div class="form-field">
          <label>Kadaluarsa</label>
          <input type="date" id="fExp">
        </div>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-secondary" id="btnBatalProduk">Batal</button>
      <button class="btn-primary" id="btnSimpanProduk">
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
  const STORAGE_KEY = 'sehat_farma_v1';

  const defaultProduk = [
    { id:1, kode:'OB-001', nama:'Paracetamol 500mg', harga:8000, kategori:'bebas', stok:120, min:30, exp:'2026-12-31' },
    { id:2, kode:'OB-002', nama:'Amoxicillin 500mg', harga:25000, kategori:'keras', stok:45, min:15, exp:'2026-08-15' },
    { id:3, kode:'OB-003', nama:'Ibuprofen 400mg', harga:12000, kategori:'bebas', stok:80, min:20, exp:'2027-03-20' },
    { id:4, kode:'OB-004', nama:'Antasida DOEN', harga:9000, kategori:'bebas', stok:65, min:20, exp:'2026-10-01' },
    { id:5, kode:'OB-005', nama:'Cetirizine 10mg', harga:15000, kategori:'keras', stok:38, min:12, exp:'2026-06-30' },
    { id:6, kode:'OB-006', nama:'Dexamethasone 0.5mg', harga:18000, kategori:'keras', stok:22, min:10, exp:'2026-09-15' },
    { id:7, kode:'VT-001', nama:'Vitamin C 500mg', harga:22000, kategori:'vitamin', stok:75, min:20, exp:'2027-01-10' },
    { id:8, kode:'VT-002', nama:'Vitamin D3 1000IU', harga:35000, kategori:'vitamin', stok:42, min:15, exp:'2027-05-20' },
    { id:9, kode:'VT-003', nama:'Multivitamin Complex', harga:45000, kategori:'vitamin', stok:28, min:10, exp:'2026-11-30' },
    { id:10, kode:'VT-004', nama:'Omega-3 Fish Oil', harga:65000, kategori:'vitamin', stok:18, min:8, exp:'2026-07-20' },
    { id:11, kode:'AK-001', nama:'Kasa Steril 10x10cm', harga:5000, kategori:'alkes', stok:150, min:30, exp:'' },
    { id:12, kode:'AK-002', nama:'Plester Hansaplast', harga:12000, kategori:'alkes', stok:95, min:25, exp:'' },
    { id:13, kode:'AK-003', nama:'Masker Medis (50pcs)', harga:35000, kategori:'alkes', stok:60, min:20, exp:'' },
    { id:14, kode:'AK-004', nama:'Termometer Digital', harga:85000, kategori:'alkes', stok:15, min:5, exp:'' },
    { id:15, kode:'LY-001', nama:'Cek Tekanan Darah', harga:15000, kategori:'layanan', stok:999, min:0, exp:'' },
    { id:16, kode:'LY-002', nama:'Cek Gula Darah', harga:25000, kategori:'layanan', stok:999, min:0, exp:'' },
    { id:17, kode:'LY-003', nama:'Injeksi Vitamin (IM)', harga:75000, kategori:'layanan', stok:999, min:0, exp:'' },
    { id:18, kode:'LY-004', nama:'Konsultasi Apoteker', harga:20000, kategori:'layanan', stok:999, min:0, exp:'' }
  ];

  let produkList;
  let cart = [];
  let filterKat = 'semua', searchQ = '';
  let payMethod = 'Tunai';
  let lastReceipt = null;

  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    produkList = raw ? JSON.parse(raw) : JSON.parse(JSON.stringify(defaultProduk));
  } catch(e) {
    produkList = JSON.parse(JSON.stringify(defaultProduk));
  }
  const save = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(produkList));

  /* =========================================================
     UTIL
  ========================================================= */
  const rp = n => 'Rp ' + Number(n).toLocaleString('id-ID');

  const iconByKat = {
    bebas: 'fa-capsules',
    keras: 'fa-prescription',
    vitamin: 'fa-leaf',
    alkes: 'fa-bandage',
    layanan: 'fa-stethoscope'
  };

  const katLabel = {
    bebas: 'Obat Bebas',
    keras: 'Obat Keras',
    vitamin: 'Vitamin',
    alkes: 'Alkes',
    layanan: 'Layanan'
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

  function perluResep(produk) {
    return produk.kategori === 'keras';
  }

  function resepTerisi() {
    return document.getElementById('pResep').value.trim() !== '';
  }

  function autoGenResep() {
    if (resepTerisi()) return;
    const now = new Date();
    const nomor = 'RSP-' +
      now.getFullYear() +
      String(now.getMonth()+1).padStart(2,'0') +
      String(now.getDate()).padStart(2,'0') + '-' +
      String(Math.floor(Math.random()*9000)+1000);
    document.getElementById('pResep').value = nomor;
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
    document.getElementById('userName').textContent = 'Apt. Sari';
    document.getElementById('userRole').textContent = 'Apoteker';
    document.getElementById('avatarInit').textContent = 'AS';
    renderProduk();
  });

  navAdmin.addEventListener('click', () => {
    navAdmin.classList.add('active');
    navKasir.classList.remove('active');
    pageAdmin.classList.add('active');
    pageKasir.classList.remove('active');
    document.getElementById('userName').textContent = 'Apt. Rina';
    document.getElementById('userRole').textContent = 'Kepala Apotek';
    document.getElementById('avatarInit').textContent = 'AR';
    renderAdmin();
  });

  /* =========================================================
     RENDER PRODUK (list katalog)
  ========================================================= */
  function renderProduk() {
    const list = document.getElementById('prodList');
    let data = produkList.slice();

    if (filterKat !== 'semua') data = data.filter(p => p.kategori === filterKat);
    if (searchQ.trim()) {
      const q = searchQ.toLowerCase();
      data = data.filter(p =>
        p.nama.toLowerCase().includes(q) ||
        p.kode.toLowerCase().includes(q)
      );
    }

    if (data.length === 0) {
      list.innerHTML = '<div style="text-align:center; padding:50px 20px; color:#9aafc2; font-size:0.85rem;"><i class="fas fa-search" style="font-size:2rem; display:block; margin-bottom:12px; color:#d0dae5;"></i>Tidak ada produk ditemukan</div>';
      return;
    }

    list.innerHTML = data.map(p => {
      const out = p.stok <= 0 && p.kategori !== 'layanan';
      const low = p.stok > 0 && p.stok <= (p.min || 5) && p.kategori !== 'layanan';
      let stokClass = 'prod-stok';
      if (low) stokClass += ' low';
      if (out) stokClass += ' out';

      const stokText = p.kategori === 'layanan' ? '∞' : p.stok;

      return `
        <div class="prod-row ${perluResep(p) ? 'keras' : ''} ${out ? 'out' : ''}" data-id="${p.id}">
          <div class="prod-name">
            <div class="prod-icon"><i class="fas ${iconByKat[p.kategori]}"></i></div>
            <div class="prod-info">
              <h4>${p.nama}</h4>
              <small>${katLabel[p.kategori]}${perluResep(p) ? ' · butuh resep' : ''}</small>
            </div>
          </div>
          <div class="prod-kode">${p.kode}</div>
          <div class="${stokClass}">${stokText}</div>
          <div class="prod-harga">${rp(p.harga)}</div>
        </div>
      `;
    }).join('');

    list.querySelectorAll('.prod-row').forEach(row => {
      if (row.classList.contains('out')) return;
      row.addEventListener('click', () => {
        const id = parseInt(row.dataset.id);
        tambahKeResep(id);
      });
    });
  }

  /* =========================================================
     TAMBAH KE RESEP
  ========================================================= */
  function tambahKeResep(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;

    // Cek stok
    if (p.kategori !== 'layanan' && p.stok <= 0) {
      toast('Stok habis', 'fa-circle-exclamation');
      return;
    }

    // Cek resep untuk obat keras
    if (perluResep(p) && !resepTerisi()) {
      toast('Isi No. Resep dulu untuk obat keras', 'fa-prescription');
      document.getElementById('pResep').focus();
      return;
    }

    const existing = cart.find(it => it.id === id);
    if (existing) {
      if (p.kategori !== 'layanan' && existing.qty >= p.stok) {
        toast(`Stok ${p.nama} tersisa ${p.stok}`, 'fa-circle-exclamation');
        return;
      }
      existing.qty++;
    } else {
      cart.push({
        id: p.id, kode: p.kode, nama: p.nama,
        harga: p.harga, qty: 1, kategori: p.kategori
      });
    }
    if (p.kategori !== 'layanan') {
      p.stok--;
      save();
    }
    renderProduk();
    renderResep();
  }

  /* =========================================================
     RENDER RESEP
  ========================================================= */
  function renderResep() {
    const box = document.getElementById('resepBody');
    const totalQty = cart.reduce((s, it) => s + it.qty, 0);
    document.getElementById('resepCount').textContent = totalQty;

    if (cart.length === 0) {
      box.innerHTML = `
        <div class="resep-empty">
          <i class="fas fa-prescription-bottle"></i>
          <strong>Belum ada item</strong>
          Pilih obat atau layanan<br>dari daftar di sebelah kiri.
        </div>`;
    } else {
      box.innerHTML = cart.map((it, idx) => `
        <div class="resep-item">
          <div class="ri-top">
            <div>
              <div class="ri-name">${it.nama}</div>
              <div class="ri-kode">${it.kode}</div>
            </div>
            <div class="ri-price">${rp(it.harga * it.qty)}</div>
          </div>
          ${perluResep(it) ? '<div class="ri-note"><i class="fas fa-prescription"></i> Obat keras — resep dokter</div>' : ''}
          <div class="ri-bottom">
            <div class="ri-qty">
              <button data-act="min" data-idx="${idx}"><i class="fas fa-minus"></i></button>
              <span>${it.qty}</span>
              <button data-act="plus" data-idx="${idx}"><i class="fas fa-plus"></i></button>
            </div>
            <button class="ri-del" data-act="del" data-idx="${idx}" title="Hapus">
              <i class="fas fa-trash"></i>
            </button>
          </div>
        </div>
      `).join('');
    }

    box.querySelectorAll('button[data-act]').forEach(b => {
      b.addEventListener('click', () => {
        const idx = parseInt(b.dataset.idx);
        const act = b.dataset.act;
        if (act === 'plus') incItem(idx);
        else if (act === 'min') decItem(idx);
        else if (act === 'del') delItem(idx);
      });
    });

    const sub = cart.reduce((s, it) => s + it.harga * it.qty, 0);
    const ppn = Math.round(sub * 0.11);
    document.getElementById('subTxt').textContent = rp(sub);
    document.getElementById('ppnTxt').textContent = rp(ppn);
    document.getElementById('totalTxt').textContent = rp(sub + ppn);
    document.getElementById('btnProcess').disabled = cart.length === 0;
  }

  function incItem(idx) {
    const it = cart[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (!p) return;
    if (p.kategori !== 'layanan' && it.qty >= p.stok) {
      toast(`Stok ${p.nama} tersisa ${p.stok}`, 'fa-circle-exclamation');
      return;
    }
    it.qty++;
    if (p.kategori !== 'layanan') { p.stok--; save(); }
    renderProduk(); renderResep();
  }

  function decItem(idx) {
    const it = cart[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (it.qty <= 1) cart.splice(idx, 1);
    else it.qty--;
    if (p && p.kategori !== 'layanan') { p.stok++; save(); }
    renderProduk(); renderResep();
  }

  function delItem(idx) {
    const it = cart[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (p && p.kategori !== 'layanan') { p.stok += it.qty; save(); }
    cart.splice(idx, 1);
    renderProduk(); renderResep();
  }

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

  // F2 focus search
  document.addEventListener('keydown', e => {
    if (e.key === 'F2') {
      e.preventDefault();
      document.getElementById('searchInput').focus();
    }
  });

  /* =========================================================
     MODAL: BAYAR
  ========================================================= */
  const modalBayar = document.getElementById('modalBayar');
  const cashInput = document.getElementById('cashInput');
  const changeBox = document.getElementById('changeBox');
  const changeTxt = document.getElementById('changeTxt');

  function getTotal() {
    const sub = cart.reduce((s, it) => s + it.harga * it.qty, 0);
    return sub + Math.round(sub * 0.11);
  }

  document.getElementById('btnProcess').addEventListener('click', () => {
    if (cart.length === 0) return;
    autoGenResep();
    cashInput.value = '';
    payMethod = 'Tunai';
    document.querySelectorAll('#payGrid .pay-opt').forEach((el, i) => {
      el.classList.toggle('selected', i === 0);
    });
    document.getElementById('cashSection').style.display = 'block';
    updateChange();
    modalBayar.classList.add('show');
  });

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
    if (payMethod !== 'Tunai') return;
    const total = getTotal();
    const cash = parseInt(cashInput.value) || 0;
    if (cash === 0) {
      changeBox.style.background = '#e8f4dd';
      changeBox.style.color = '#4a7a1f';
      changeTxt.textContent = rp(0);
      return;
    }
    const diff = cash - total;
    if (diff < 0) {
      changeBox.style.background = '#fdeee8';
      changeBox.style.color = '#a83f1f';
      changeTxt.textContent = '− ' + rp(Math.abs(diff));
    } else {
      changeBox.style.background = '#e8f4dd';
      changeBox.style.color = '#4a7a1f';
      changeTxt.textContent = rp(diff);
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
     PROSES BAYAR & STRUK RESEP
  ========================================================= */
  function prosesBayar(total) {
    const sub = cart.reduce((s, it) => s + it.harga * it.qty, 0);
    const ppn = total - sub;
    const cash = parseInt(cashInput.value) || 0;
    const change = payMethod === 'Tunai' ? cash - total : 0;

    const now = new Date();
    const receipt = {
      nomor: 'INV-' + now.getFullYear() +
             String(now.getMonth()+1).padStart(2,'0') +
             String(now.getDate()).padStart(2,'0') + '-' +
             String(Math.floor(Math.random()*9000)+1000),
      tanggal: now.toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' }),
      kasir: document.getElementById('userName').textContent,
      pasien: {
        nama: document.getElementById('pNama').value.trim() || '-',
        umur: document.getElementById('pUmur').value.trim() || '-',
        dokter: document.getElementById('pDokter').value,
        resep: document.getElementById('pResep').value.trim() || '-',
        catatan: document.getElementById('pCatatan').value.trim()
      },
      items: cart.map(it => ({ ...it })),
      sub, ppn, total,
      metode: payMethod,
      cash: payMethod === 'Tunai' ? cash : total,
      change
    };
    lastReceipt = receipt;

    modalBayar.classList.remove('show');
    tampilkanStruk(receipt);

    cart = [];
    renderResep(); renderProduk();
    toast('Transaksi selesai', 'fa-circle-check');
  }

  function tampilkanStruk(r) {
    const itemsHtml = r.items.map(it => `
      <tr>
        <td>
          <div style="font-weight:600;">${it.nama}</div>
          <div class="item-code">${it.kode}</div>
          ${perluResep(it) ? '<div class="item-note"><i class="fas fa-prescription"></i> butuh resep</div>' : ''}
        </td>
        <td style="text-align:center;">${it.qty}</td>
        <td class="r">${rp(it.harga)}</td>
        <td class="r">${rp(it.harga * it.qty)}</td>
      </tr>
    `).join('');

    document.getElementById('strukBody').innerHTML = `
      <div class="resep-print">
        <div class="rp-head">
          <div class="left">
            <h4>SEHAT FARMA</h4>
            <small>Apotek & Klinik Pratama<br>Jl. Kesehatan No. 88, Jakarta<br>Telp: 021-5566778 · SIA: 12345/AP/2024</small>
          </div>
          <div class="right">
            <div class="num">${r.nomor}</div>
            <div class="date">${r.tanggal}</div>
          </div>
        </div>

        <div class="rp-patient">
          <div class="p-item"><span class="lbl">Pasien</span><span class="val">${r.pasien.nama}</span></div>
          <div class="p-item"><span class="lbl">Umur</span><span class="val">${r.pasien.umur} th</span></div>
          <div class="p-item"><span class="lbl">Dokter</span><span class="val">${r.pasien.dokter}</span></div>
          <div class="p-item"><span class="lbl">No. Resep</span><span class="val">${r.pasien.resep}</span></div>
          ${r.pasien.catatan ? `<div class="p-item" style="grid-column:1/-1;"><span class="lbl">Catatan</span><span class="val">${r.pasien.catatan}</span></div>` : ''}
        </div>

        <table class="rp-table">
          <thead>
            <tr>
              <th>Item</th>
              <th style="text-align:center;">Qty</th>
              <th class="r">Harga</th>
              <th class="r">Jumlah</th>
            </tr>
          </thead>
          <tbody>${itemsHtml}</tbody>
        </table>

        <div class="rp-total">
          <div class="t-row"><span>Subtotal</span><span>${rp(r.sub)}</span></div>
          <div class="t-row"><span>PPN 11%</span><span>${rp(r.ppn)}</span></div>
          <div class="t-grand"><span>TOTAL</span><span>${rp(r.total)}</span></div>
          <div class="t-row" style="margin-top:10px;"><span>Bayar (${r.metode})</span><span>${rp(r.cash)}</span></div>
          <div class="t-row"><span>Kembalian</span><span>${rp(r.change)}</span></div>
        </div>

        <div class="rp-sign">
          <div class="sig">
            <div class="line">${r.kasir}</div>
            <small>Apoteker Penanggung Jawab</small>
          </div>
          <div class="sig">
            <div class="line">${r.pasien.nama.split(' ').slice(-1)[0]}</div>
            <small>Penerima</small>
          </div>
        </div>

        <div class="rp-footer">
          Simpan struk ini sebagai bukti pembelian<br>
          Obat keras harap digunakan sesuai resep dokter<br>
          Semoga lekas sembuh
        </div>
      </div>
    `;
    document.getElementById('modalStruk').classList.add('show');
  }

  document.getElementById('closeStruk').addEventListener('click', () => document.getElementById('modalStruk').classList.remove('show'));
  document.getElementById('btnOrderBaru').addEventListener('click', () => {
    document.getElementById('modalStruk').classList.remove('show');
    // reset form pasien
    document.getElementById('pNama').value = '';
    document.getElementById('pUmur').value = '';
    document.getElementById('pResep').value = '';
    document.getElementById('pCatatan').value = '';
  });
  document.getElementById('btnCetak').addEventListener('click', () => {
    if (!lastReceipt) return;
    const w = window.open('', '', 'width=650,height=800');
    w.document.write('<pre style="font-family:Courier New,monospace; font-size:12px; padding:20px; white-space:pre-wrap;">' +
      document.getElementById('strukBody').innerText + '</pre>');
    w.document.close(); w.focus(); w.print();
    toast('Struk dikirim ke printer', 'fa-print');
  });

  /* =========================================================
     ADMIN — TABEL INVENTARIS
  ========================================================= */
  function renderAdmin() {
    const total = produkList.length;
    const totalStok = produkList.filter(p => p.kategori !== 'layanan').reduce((s, p) => s + p.stok, 0);
    const low = produkList.filter(p => p.kategori !== 'layanan' && p.stok <= (p.min || 5) && p.stok > 0).length;
    const exp = produkList.filter(p => {
      if (!p.exp) return false;
      const d = new Date(p.exp);
      const diff = (d - new Date()) / (1000*60*60*24);
      return diff <= 90;
    }).length;

    document.getElementById('sTotal').textContent = total;
    document.getElementById('sStok').textContent = totalStok;
    document.getElementById('sLow').textContent = low;
    document.getElementById('sExp').textContent = exp;

    const tbody = document.getElementById('adminBody');
    if (produkList.length === 0) {
      tbody.innerHTML = '<tr><td colspan="6" style="text-align:center; padding:30px; color:#9aafc2;">Belum ada produk</td></tr>';
      return;
    }

    tbody.innerHTML = produkList.map(p => {
      let stokPill = 'ok';
      let stokLabel = 'Aman';
      if (p.kategori === 'layanan') { stokPill = 'ok'; stokLabel = 'Layanan'; }
      else if (p.stok <= 0) { stokPill = 'danger'; stokLabel = 'Habis'; }
      else if (p.stok <= (p.min || 5)) { stokPill = 'warn'; stokLabel = 'Rendah'; }

      let expHtml = '<span style="color:#9aafc2;">—</span>';
      if (p.exp) {
        const d = new Date(p.exp);
        const diff = (d - new Date()) / (1000*60*60*24);
        let cls = 'kadaluarsa';
        if (diff < 0) cls += ' danger';
        else if (diff <= 90) cls += ' warn';
        expHtml = `<span class="${cls}">${d.toLocaleDateString('id-ID', { day:'2-digit', month:'short', year:'numeric' })}</span>`;
      }

      const stokDisplay = p.kategori === 'layanan'
        ? '<span style="color:#9aafc2;">—</span>'
        : `<div class="stok-cell">
             <div><span class="stok-num">${p.stok}</span> <span class="stok-min">/ min ${p.min || 5}</span></div>
             <div><span class="stok-pill ${stokPill}">${stokLabel}</span></div>
           </div>`;

      return `
        <tr>
          <td>
            <div class="td-name">
              <div class="td-icon ${perluResep(p) ? 'keras' : ''}"><i class="fas ${iconByKat[p.kategori]}"></i></div>
              <div>
                <strong>${p.nama}</strong>
                <small>${p.kode}</small>
              </div>
            </div>
          </td>
          <td><span class="badge-kat ${p.kategori}">${katLabel[p.kategori]}</span></td>
          <td style="font-weight:600;">${rp(p.harga)}</td>
          <td>${stokDisplay}</td>
          <td>${expHtml}</td>
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
    document.getElementById('modalProdukTitle').textContent = isEdit ? 'Edit Produk' : 'Tambah Produk';
    document.getElementById('editId').value = isEdit ? id : '';
    document.getElementById('fNama').value = '';
    document.getElementById('fKode').value = '';
    document.getElementById('fKategori').value = 'bebas';
    document.getElementById('fHarga').value = '';
    document.getElementById('fStok').value = '';
    document.getElementById('fMin').value = '5';
    document.getElementById('fExp').value = '';

    if (isEdit) {
      const p = produkList.find(x => x.id === id);
      if (p) {
        document.getElementById('fNama').value = p.nama;
        document.getElementById('fKode').value = p.kode;
        document.getElementById('fKategori').value = p.kategori;
        document.getElementById('fHarga').value = p.harga;
        document.getElementById('fStok').value = p.stok;
        document.getElementById('fMin').value = p.min || 5;
        document.getElementById('fExp').value = p.exp || '';
      }
    }
    modalProduk.classList.add('show');
  }

  document.getElementById('btnTambahProduk').addEventListener('click', () => bukaFormProduk(null));
  document.getElementById('closeProduk').addEventListener('click', () => modalProduk.classList.remove('show'));
  document.getElementById('btnBatalProduk').addEventListener('click', () => modalProduk.classList.remove('show'));

  document.getElementById('btnSimpanProduk').addEventListener('click', () => {
    const editId = document.getElementById('editId').value;
    const nama = document.getElementById('fNama').value.trim();
    const kode = document.getElementById('fKode').value.trim().toUpperCase();
    const kategori = document.getElementById('fKategori').value;
    const harga = parseInt(document.getElementById('fHarga').value);
    const stok = parseInt(document.getElementById('fStok').value);
    const min = parseInt(document.getElementById('fMin').value) || 0;
    const exp = document.getElementById('fExp').value;

    if (!nama) return toast('Nama produk harus diisi', 'fa-circle-exclamation');
    if (!kode) return toast('Kode produk harus diisi', 'fa-circle-exclamation');
    if (isNaN(harga) || harga < 0) return toast('Harga tidak valid', 'fa-circle-exclamation');
    if (isNaN(stok) || stok < 0) return toast('Stok tidak valid', 'fa-circle-exclamation');

    if (editId) {
      const p = produkList.find(x => x.id === parseInt(editId));
      if (p) Object.assign(p, { nama, kode, kategori, harga, stok, min, exp });
      toast('Produk diperbarui', 'fa-circle-check');
    } else {
      // cek duplikat kode
      if (produkList.some(p => p.kode === kode)) {
        return toast('Kode produk sudah dipakai', 'fa-circle-exclamation');
      }
      const newId = produkList.length ? Math.max(...produkList.map(p => p.id)) + 1 : 1;
      produkList.push({ id:newId, kode, nama, kategori, harga, stok, min, exp });
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
    if (!confirm(`Hapus produk "${p.nama}"?`)) return;
    produkList = produkList.filter(x => x.id !== id);
    save();
    renderAdmin();
    renderProduk();
    toast('Produk dihapus', 'fa-trash');
  }

  /* =========================================================
     RESET DATA
  ========================================================= */
  document.getElementById('btnResetData').addEventListener('click', () => {
    if (!confirm('Reset semua produk ke data default?')) return;
    produkList = JSON.parse(JSON.stringify(defaultProduk));
    cart = [];
    save();
    renderAdmin();
    renderProduk();
    renderResep();
    toast('Data direset', 'fa-rotate');
  });

  /* =========================================================
     INIT
  ========================================================= */
  renderProduk();
  renderResep();
  renderAdmin();
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>