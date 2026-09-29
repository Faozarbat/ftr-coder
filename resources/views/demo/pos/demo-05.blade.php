@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Atelier Noir — Butik</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; }
body {
  font-family:'Inter',system-ui,sans-serif;
  background:#faf8f5;
  color:#1a1a1a;
  min-height:100vh;
  font-size:14px;
}

/* ===== APP ===== */
.app {
  max-width:1480px;
  margin:0 auto;
  background:#faf8f5;
  min-height:100vh;
  display:flex; flex-direction:column;
  border-left:1px solid #ebe7e0;
  border-right:1px solid #ebe7e0;
}

/* ===== HEADER ===== */
.topbar {
  background:#faf8f5;
  padding:0 32px;
  height:78px;
  display:flex; align-items:center; justify-content:space-between;
  border-bottom:1px solid #ebe7e0;
  position:sticky; top:0; z-index:50;
}
.brand {
  display:flex; align-items:center; gap:16px;
}
.brand-mark {
  font-family:'Playfair Display',serif;
  font-size:1.7rem;
  font-weight:700;
  font-style:italic;
  color:#1a1a1a;
  letter-spacing:-1px;
}
.brand-title {
  padding-left:16px;
  border-left:1px solid #d8d4cc;
  font-family:'Playfair Display',serif;
  font-size:0.95rem;
  font-weight:500;
  color:#1a1a1a;
  letter-spacing:4px;
  text-transform:uppercase;
}
.brand-title small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.58rem;
  font-weight:400;
  color:#8a8a8a;
  letter-spacing:3px;
  margin-top:4px;
}

.topbar-right { display:flex; align-items:center; gap:20px; }
.mode-nav {
  display:flex;
  gap:24px;
  align-items:center;
}
.mode-nav button {
  background:transparent;
  border:none;
  padding:8px 0;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.72rem;
  font-weight:500;
  letter-spacing:2px;
  text-transform:uppercase;
  color:#8a8a8a;
  position:relative;
  transition:color 0.15s;
}
.mode-nav button:hover { color:#1a1a1a; }
.mode-nav button.active {
  color:#1a1a1a;
  font-weight:600;
}
.mode-nav button.active::after {
  content:'';
  position:absolute;
  bottom:-2px;
  left:50%;
  transform:translateX(-50%);
  width:24px;
  height:1px;
  background:#a8863f;
}
.user-badge {
  display:flex; align-items:center; gap:10px;
  padding-left:20px;
  border-left:1px solid #d8d4cc;
}
.user-badge .avatar {
  width:34px; height:34px;
  border-radius:50%;
  background:#1a1a1a;
  color:#faf8f5;
  display:flex; align-items:center; justify-content:center;
  font-family:'Playfair Display',serif;
  font-style:italic;
  font-weight:600;
  font-size:0.9rem;
}
.user-badge .info { line-height:1.2; }
.user-badge .name {
  font-family:'Playfair Display',serif;
  font-size:0.88rem;
  font-weight:600;
  color:#1a1a1a;
}
.user-badge .role {
  font-size:0.6rem;
  color:#8a8a8a;
  letter-spacing:1.5px;
  text-transform:uppercase;
}

/* ===== PAGE ===== */
.page { display:none; flex:1; overflow:hidden; }
.page.active { display:flex; flex-direction:column; }

/* ===== KASIR: 2 KOLOM ASIMETRIS ===== */
.kasir-grid {
  display:grid;
  grid-template-columns:1fr 380px;
  gap:0;
  flex:1;
  min-height:0;
}

/* === KIRI: LOOKBOOK === */
.lookbook {
  padding:28px 36px;
  overflow-y:auto;
  min-height:0;
}
.lb-header {
  display:flex;
  justify-content:space-between;
  align-items:flex-end;
  margin-bottom:22px;
  padding-bottom:18px;
  border-bottom:1px solid #ebe7e0;
  flex-wrap:wrap; gap:16px;
}
.lb-header .title-block {
  flex:1;
  min-width:240px;
}
.lb-header .kicker {
  font-size:0.62rem;
  color:#a8863f;
  letter-spacing:3px;
  text-transform:uppercase;
  font-weight:600;
  margin-bottom:8px;
}
.lb-header h2 {
  font-family:'Playfair Display',serif;
  font-size:2.1rem;
  font-weight:500;
  font-style:italic;
  color:#1a1a1a;
  letter-spacing:-0.5px;
  line-height:1.05;
}
.lb-header h2 span {
  font-style:normal;
  font-weight:700;
}
.lb-header .sub {
  font-size:0.78rem;
  color:#8a8a8a;
  margin-top:8px;
  max-width:420px;
  line-height:1.6;
}

.lb-search {
  position:relative;
  min-width:240px;
}
.lb-search input {
  width:100%;
  border:none;
  border-bottom:1px solid #d8d4cc;
  background:transparent;
  padding:10px 30px 10px 0;
  font-family:'Inter',sans-serif;
  font-size:0.85rem;
  color:#1a1a1a;
  outline:none;
  transition:border-color 0.15s;
}
.lb-search input:focus { border-bottom-color:#1a1a1a; }
.lb-search input::placeholder {
  color:#b8b4ac;
  font-style:italic;
}
.lb-search i {
  position:absolute;
  right:0; top:50%;
  transform:translateY(-50%);
  color:#b8b4ac;
  font-size:0.85rem;
}

/* KATEGORI TAB — editorial style */
.kat-tabs {
  display:flex;
  gap:0;
  margin-bottom:28px;
  border-bottom:1px solid #ebe7e0;
  overflow-x:auto;
}
.kat-tab {
  background:transparent;
  border:none;
  padding:0 0 14px 0;
  margin-right:32px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.72rem;
  font-weight:500;
  letter-spacing:2px;
  text-transform:uppercase;
  color:#8a8a8a;
  position:relative;
  white-space:nowrap;
  transition:color 0.15s;
}
.kat-tab:last-child { margin-right:0; }
.kat-tab:hover { color:#1a1a1a; }
.kat-tab.active {
  color:#1a1a1a;
  font-weight:600;
}
.kat-tab.active::after {
  content:'';
  position:absolute;
  bottom:-1px;
  left:0;
  right:0;
  height:1px;
  background:#a8863f;
}

/* Lookbook grid */
.lb-grid {
  display:grid;
  grid-template-columns:repeat(6, 1fr);
  gap:16px;
  grid-auto-rows:auto;
}
.lb-card {
  background:#ffffff;
  border:1px solid #ebe7e0;
  cursor:pointer;
  transition:all 0.2s;
  position:relative;
  overflow:hidden;
}
.lb-card:hover {
  border-color:#1a1a1a;
  transform:translateY(-2px);
  box-shadow:0 12px 28px -12px rgba(0,0,0,0.15);
}
.lb-card.out {
  opacity:0.4;
  cursor:not-allowed;
}
.lb-card.out:hover {
  transform:none;
  box-shadow:none;
  border-color:#ebe7e0;
}

/* ukuran kartu lookbook */
.lb-card.hero { grid-column:span 3; grid-row:span 2; }
.lb-card.tall { grid-column:span 2; grid-row:span 2; }
.lb-card.wide { grid-column:span 3; }
.lb-card.normal { grid-column:span 2; }

@media (max-width: 1200px) {
  .lb-grid { grid-template-columns:repeat(4, 1fr); }
  .lb-card.hero { grid-column:span 4; }
  .lb-card.tall { grid-column:span 2; }
  .lb-card.wide { grid-column:span 2; }
  .lb-card.normal { grid-column:span 2; }
}
@media (max-width: 800px) {
  .lb-grid { grid-template-columns:repeat(2, 1fr); gap:12px; }
  .lb-card.hero, .lb-card.tall, .lb-card.wide, .lb-card.normal {
    grid-column:span 2;
    grid-row:auto;
  }
}

.lb-visual {
  aspect-ratio:1 / 1;
  background:#f4f0ea;
  display:flex; align-items:center; justify-content:center;
  color:#1a1a1a;
  font-size:3rem;
  position:relative;
  overflow:hidden;
}
.lb-card.hero .lb-visual {
  aspect-ratio:4 / 3;
  font-size:5rem;
}
.lb-card.tall .lb-visual {
  aspect-ratio:3 / 4;
  font-size:3.5rem;
}
.lb-card.wide .lb-visual {
  aspect-ratio:16 / 9;
  font-size:3.5rem;
}

.lb-visual::after {
  content:'';
  position:absolute;
  inset:0;
  background:linear-gradient(
    135deg,
    transparent 60%,
    rgba(168,134,63,0.08) 60%
  );
}
.lb-badge {
  position:absolute;
  top:14px; left:14px;
  background:#1a1a1a;
  color:#faf8f5;
  font-size:0.6rem;
  font-weight:600;
  letter-spacing:2px;
  text-transform:uppercase;
  padding:5px 10px;
}
.lb-badge.new { background:#a8863f; }
.lb-badge.sale { background:#8a3a3a; }

.lb-info {
  padding:14px 16px 16px;
}
.lb-name {
  font-family:'Playfair Display',serif;
  font-size:1rem;
  font-weight:600;
  color:#1a1a1a;
  line-height:1.3;
  margin-bottom:4px;
}
.lb-card.hero .lb-name { font-size:1.35rem; }
.lb-card.tall .lb-name { font-size:1.15rem; }

.lb-sku {
  font-family:'Courier New',monospace;
  font-size:0.65rem;
  color:#a8a8a8;
  letter-spacing:0.5px;
  margin-bottom:10px;
}
.lb-meta {
  display:flex;
  justify-content:space-between;
  align-items:flex-end;
  padding-top:10px;
  border-top:1px solid #ebe7e0;
}
.lb-price {
  font-family:'Playfair Display',serif;
  font-size:1.05rem;
  font-weight:600;
  color:#1a1a1a;
}
.lb-card.hero .lb-price { font-size:1.25rem; }
.lb-stok {
  font-size:0.66rem;
  color:#8a8a8a;
  letter-spacing:1px;
  text-transform:uppercase;
}
.lb-stok.low { color:#a8863f; }
.lb-stok.out { color:#8a3a3a; }

/* === KANAN: SHOPPING BAG === */
.bag-side {
  background:#ffffff;
  border-left:1px solid #ebe7e0;
  display:flex; flex-direction:column;
  min-height:0;
}
.bag-header {
  padding:24px 26px 20px;
  border-bottom:1px solid #ebe7e0;
}
.bag-header .kicker {
  font-size:0.6rem;
  color:#a8863f;
  letter-spacing:3px;
  text-transform:uppercase;
  font-weight:600;
  margin-bottom:10px;
}
.bag-header h3 {
  font-family:'Playfair Display',serif;
  font-size:1.5rem;
  font-weight:600;
  font-style:italic;
  color:#1a1a1a;
  letter-spacing:-0.3px;
  display:flex; align-items:baseline; gap:10px;
}
.bag-header h3 .count {
  font-family:'Inter',sans-serif;
  font-size:0.72rem;
  font-weight:500;
  color:#8a8a8a;
  font-style:normal;
  letter-spacing:1px;
}

.bag-body {
  flex:1;
  overflow-y:auto;
  padding:16px 22px;
  min-height:0;
}
.bag-empty {
  text-align:center;
  padding:60px 20px;
  color:#b8b4ac;
}
.bag-empty i {
  font-size:2.4rem;
  display:block;
  margin-bottom:16px;
  color:#ebe7e0;
}
.bag-empty .empty-title {
  font-family:'Playfair Display',serif;
  font-style:italic;
  font-size:1rem;
  color:#8a8a8a;
  margin-bottom:6px;
}
.bag-empty p {
  font-size:0.78rem;
  line-height:1.6;
}

.bag-item {
  padding:16px 0;
  border-bottom:1px solid #ebe7e0;
  display:grid;
  grid-template-columns:64px 1fr auto;
  gap:14px;
  align-items:start;
}
.bag-item:last-child { border-bottom:none; }
.bi-visual {
  width:64px; height:80px;
  background:#f4f0ea;
  display:flex; align-items:center; justify-content:center;
  font-size:1.5rem;
  color:#1a1a1a;
}
.bi-info { min-width:0; }
.bi-name {
  font-family:'Playfair Display',serif;
  font-size:0.92rem;
  font-weight:600;
  color:#1a1a1a;
  line-height:1.25;
  margin-bottom:3px;
}
.bi-sku {
  font-family:'Courier New',monospace;
  font-size:0.62rem;
  color:#a8a8a8;
  margin-bottom:6px;
}
.bi-variants {
  font-size:0.72rem;
  color:#8a8a8a;
  margin-bottom:8px;
  display:flex; gap:12px;
  flex-wrap:wrap;
}
.bi-variants .v {
  display:flex; align-items:center; gap:5px;
}
.bi-variants .v .swatch {
  width:10px; height:10px;
  border-radius:50%;
  border:1px solid #d8d4cc;
  display:inline-block;
}
.bi-qty {
  display:flex; align-items:center; gap:0;
  border:1px solid #ebe7e0;
  width:fit-content;
}
.bi-qty button {
  background:transparent;
  border:none;
  width:26px; height:26px;
  cursor:pointer;
  color:#1a1a1a;
  font-size:0.7rem;
}
.bi-qty button:hover { background:#f4f0ea; }
.bi-qty span {
  padding:0 10px;
  font-size:0.78rem;
  font-weight:600;
  min-width:26px;
  text-align:center;
  line-height:26px;
  border-left:1px solid #ebe7e0;
  border-right:1px solid #ebe7e0;
}
.bi-right { text-align:right; }
.bi-price {
  font-family:'Playfair Display',serif;
  font-size:0.95rem;
  font-weight:600;
  color:#1a1a1a;
  margin-bottom:8px;
}
.bi-del {
  background:transparent;
  border:none;
  color:#b8b4ac;
  cursor:pointer;
  font-size:0.75rem;
  letter-spacing:1px;
  font-size:0.65rem;
  text-transform:uppercase;
}
.bi-del:hover { color:#8a3a3a; }

/* Bag footer */
.bag-footer {
  padding:22px 24px;
  border-top:1px solid #ebe7e0;
  background:#faf8f5;
}

/* Voucher input */
.voucher-row {
  display:flex;
  gap:8px;
  margin-bottom:16px;
}
.voucher-row input {
  flex:1;
  border:1px solid #ebe7e0;
  background:#ffffff;
  padding:10px 12px;
  font-family:'Courier New',monospace;
  font-size:0.78rem;
  letter-spacing:1.5px;
  text-transform:uppercase;
  color:#1a1a1a;
  outline:none;
  transition:border-color 0.15s;
}
.voucher-row input:focus { border-color:#1a1a1a; }
.voucher-row input::placeholder {
  color:#b8b4ac;
  letter-spacing:1px;
  font-family:'Inter',sans-serif;
  text-transform:none;
}
.btn-voucher {
  background:transparent;
  border:1px solid #1a1a1a;
  color:#1a1a1a;
  padding:10px 16px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.66rem;
  font-weight:600;
  letter-spacing:1.5px;
  text-transform:uppercase;
}
.btn-voucher:hover {
  background:#1a1a1a;
  color:#faf8f5;
}
.voucher-applied {
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:10px 12px;
  background:#f4f0ea;
  border-left:3px solid #a8863f;
  margin-bottom:16px;
  font-size:0.78rem;
}
.voucher-applied .vcode {
  font-family:'Courier New',monospace;
  font-weight:700;
  color:#a8863f;
  letter-spacing:1.5px;
}
.voucher-applied .vremove {
  background:transparent;
  border:none;
  color:#8a8a8a;
  cursor:pointer;
  font-size:0.72rem;
}
.voucher-applied .vremove:hover { color:#8a3a3a; }

.bag-total {
  font-size:0.82rem;
}
.bt-row {
  display:flex;
  justify-content:space-between;
  margin-bottom:8px;
  color:#4a4a4a;
}
.bt-row.discount { color:#a8863f; }
.bt-row.grand {
  font-family:'Playfair Display',serif;
  font-size:1.5rem;
  font-weight:600;
  color:#1a1a1a;
  padding-top:14px;
  margin-top:12px;
  border-top:1px solid #ebe7e0;
  margin-bottom:16px;
  letter-spacing:-0.3px;
}

.btn-bag-checkout {
  width:100%;
  background:#1a1a1a;
  color:#faf8f5;
  border:none;
  padding:16px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.78rem;
  font-weight:600;
  letter-spacing:3px;
  text-transform:uppercase;
  transition:background 0.15s;
}
.btn-bag-checkout:hover { background:#a8863f; }
.btn-bag-checkout:disabled {
  background:#d8d4cc;
  cursor:not-allowed;
}

/* ===== ADMIN ===== */
.admin-wrap {
  padding:32px 40px;
  flex:1;
  overflow-y:auto;
}
.admin-head {
  display:flex;
  justify-content:space-between;
  align-items:flex-end;
  flex-wrap:wrap; gap:16px;
  margin-bottom:28px;
  padding-bottom:20px;
  border-bottom:1px solid #ebe7e0;
}
.admin-head h2 {
  font-family:'Playfair Display',serif;
  font-size:1.9rem;
  font-weight:500;
  font-style:italic;
  color:#1a1a1a;
  letter-spacing:-0.5px;
}
.admin-head h2 span {
  font-style:normal;
  font-weight:700;
}
.admin-head h2 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.68rem;
  font-weight:400;
  font-style:normal;
  color:#8a8a8a;
  letter-spacing:3px;
  text-transform:uppercase;
  margin-top:6px;
}
.admin-actions { display:flex; gap:10px; }
.btn-outline {
  background:transparent;
  border:1px solid #1a1a1a;
  color:#1a1a1a;
  padding:11px 20px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.68rem;
  font-weight:600;
  letter-spacing:2px;
  text-transform:uppercase;
  display:flex; align-items:center; gap:8px;
}
.btn-outline:hover {
  background:#1a1a1a;
  color:#faf8f5;
}
.btn-solid {
  background:#1a1a1a;
  border:1px solid #1a1a1a;
  color:#faf8f5;
  padding:11px 20px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.68rem;
  font-weight:600;
  letter-spacing:2px;
  text-transform:uppercase;
  display:flex; align-items:center; gap:8px;
}
.btn-solid:hover {
  background:#a8863f;
  border-color:#a8863f;
}

/* STATS */
.stats-row {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:20px;
  margin-bottom:30px;
}
.stat-block {
  padding:22px 0;
  border-top:1px solid #1a1a1a;
}
.stat-block .sb-lbl {
  font-size:0.6rem;
  color:#8a8a8a;
  letter-spacing:2.5px;
  text-transform:uppercase;
  font-weight:500;
  margin-bottom:10px;
}
.stat-block .sb-val {
  font-family:'Playfair Display',serif;
  font-size:2.1rem;
  font-weight:600;
  color:#1a1a1a;
  line-height:1;
  letter-spacing:-1px;
}
.stat-block .sb-val.gold { color:#a8863f; }

/* ADMIN BOARD - masonry style */
.admin-section {
  margin-bottom:32px;
}
.section-head {
  display:flex;
  justify-content:space-between;
  align-items:baseline;
  margin-bottom:18px;
}
.section-head h3 {
  font-family:'Playfair Display',serif;
  font-size:1.2rem;
  font-weight:600;
  font-style:italic;
  color:#1a1a1a;
}
.section-head h3 span { font-style:normal; }

.admin-masonry {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(240px,1fr));
  gap:16px;
}
.admin-card {
  background:#ffffff;
  border:1px solid #ebe7e0;
  padding:16px;
  cursor:pointer;
  transition:all 0.15s;
  display:flex;
  gap:14px;
  align-items:flex-start;
}
.admin-card:hover {
  border-color:#1a1a1a;
}
.admin-card-visual {
  width:60px; height:74px;
  background:#f4f0ea;
  display:flex; align-items:center; justify-content:center;
  font-size:1.5rem;
  color:#1a1a1a;
  flex-shrink:0;
}
.admin-card-info {
  flex:1;
  min-width:0;
}
.admin-card-info .ac-name {
  font-family:'Playfair Display',serif;
  font-size:0.92rem;
  font-weight:600;
  color:#1a1a1a;
  line-height:1.25;
  margin-bottom:3px;
}
.admin-card-info .ac-sku {
  font-family:'Courier New',monospace;
  font-size:0.62rem;
  color:#a8a8a8;
  margin-bottom:8px;
}
.admin-card-info .ac-cat {
  display:inline-block;
  font-size:0.58rem;
  letter-spacing:1.5px;
  text-transform:uppercase;
  color:#8a8a8a;
  border:1px solid #ebe7e0;
  padding:2px 7px;
  margin-bottom:8px;
}
.admin-card-info .ac-price {
  font-family:'Playfair Display',serif;
  font-size:0.95rem;
  font-weight:600;
  color:#1a1a1a;
}
.admin-card-info .ac-stock {
  font-size:0.66rem;
  color:#8a8a8a;
  margin-top:6px;
  letter-spacing:0.5px;
}
.admin-card-info .ac-stock.low { color:#a8863f; font-weight:600; }
.admin-card-info .ac-stock.out { color:#8a3a3a; font-weight:600; }

/* VOUCHER LIST */
.voucher-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(240px,1fr));
  gap:16px;
}
.voucher-card {
  border:1px dashed #a8863f;
  padding:18px;
  background:#ffffff;
  position:relative;
}
.voucher-card .vc-code {
  font-family:'Courier New',monospace;
  font-size:1.05rem;
  font-weight:700;
  letter-spacing:3px;
  color:#a8863f;
  margin-bottom:8px;
}
.voucher-card .vc-desc {
  font-size:0.78rem;
  color:#4a4a4a;
  margin-bottom:10px;
  line-height:1.5;
}
.voucher-card .vc-meta {
  display:flex;
  justify-content:space-between;
  font-size:0.68rem;
  color:#8a8a8a;
  letter-spacing:1px;
  text-transform:uppercase;
  padding-top:10px;
  border-top:1px solid #ebe7e0;
}
.voucher-card .vc-delete {
  position:absolute;
  top:12px; right:12px;
  background:transparent;
  border:none;
  color:#b8b4ac;
  cursor:pointer;
  font-size:0.75rem;
}
.voucher-card .vc-delete:hover { color:#8a3a3a; }

/* ===== MODAL ===== */
.modal-bg {
  position:fixed; inset:0;
  background:rgba(15,15,15,0.7);
  display:none;
  align-items:center; justify-content:center;
  z-index:100;
  padding:16px;
}
.modal-bg.show { display:flex; }
.modal {
  background:#faf8f5;
  width:100%;
  max-width:520px;
  max-height:92vh;
  overflow-y:auto;
  box-shadow:0 25px 60px -15px rgba(0,0,0,0.4);
}
.modal-head {
  padding:28px 32px 20px;
  border-bottom:1px solid #ebe7e0;
  display:flex; justify-content:space-between; align-items:flex-start;
}
.modal-head .kicker {
  font-size:0.6rem;
  color:#a8863f;
  letter-spacing:3px;
  text-transform:uppercase;
  font-weight:600;
  margin-bottom:8px;
}
.modal-head h3 {
  font-family:'Playfair Display',serif;
  font-size:1.4rem;
  font-weight:600;
  font-style:italic;
  color:#1a1a1a;
  letter-spacing:-0.3px;
  padding-right:30px;
}
.modal-head .sub {
  font-size:0.76rem;
  color:#8a8a8a;
  margin-top:6px;
}
.modal-close {
  width:32px; height:32px;
  background:transparent;
  border:1px solid #d8d4cc;
  border-radius:50%;
  color:#8a8a8a;
  cursor:pointer;
}
.modal-close:hover {
  background:#1a1a1a;
  color:#faf8f5;
  border-color:#1a1a1a;
}
.modal-body {
  padding:26px 32px;
}
.modal-foot {
  padding:20px 32px 26px;
  border-top:1px solid #ebe7e0;
  display:flex; gap:10px;
}
.modal-foot .btn-outline { flex:1; justify-content:center; }
.modal-foot .btn-solid { flex:2; justify-content:center; padding:14px; }

/* FORM */
.form-field { margin-bottom:18px; }
.form-field label {
  display:block;
  font-size:0.6rem;
  font-weight:600;
  color:#8a8a8a;
  letter-spacing:2px;
  text-transform:uppercase;
  margin-bottom:8px;
}
.form-field input,
.form-field select,
.form-field textarea {
  width:100%;
  border:1px solid #ebe7e0;
  background:#ffffff;
  padding:12px 14px;
  font-family:'Inter',sans-serif;
  font-size:0.88rem;
  color:#1a1a1a;
  outline:none;
  transition:border-color 0.15s;
}
.form-field input:focus,
.form-field select:focus,
.form-field textarea:focus { border-color:#1a1a1a; }
.form-field textarea {
  resize:vertical;
  min-height:70px;
}

/* VARIAN PILIHAN (ukuran & warna) */
.varian-group { margin-bottom:22px; }
.varian-group > label {
  font-size:0.62rem;
  font-weight:600;
  color:#1a1a1a;
  letter-spacing:2px;
  text-transform:uppercase;
  margin-bottom:10px;
  display:block;
}
.size-options {
  display:flex;
  gap:8px;
  flex-wrap:wrap;
}
.size-btn {
  min-width:48px;
  padding:10px 14px;
  background:#ffffff;
  border:1px solid #ebe7e0;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.78rem;
  font-weight:500;
  color:#1a1a1a;
  letter-spacing:1px;
  text-align:center;
  transition:all 0.12s;
}
.size-btn:hover:not(.out) { border-color:#1a1a1a; }
.size-btn.selected {
  background:#1a1a1a;
  color:#faf8f5;
  border-color:#1a1a1a;
}
.size-btn.out {
  opacity:0.35;
  cursor:not-allowed;
  text-decoration:line-through;
}

.color-options {
  display:flex;
  gap:12px;
  flex-wrap:wrap;
}
.color-btn {
  width:38px; height:38px;
  border-radius:50%;
  cursor:pointer;
  border:1px solid #d8d4cc;
  padding:0;
  position:relative;
  transition:all 0.15s;
}
.color-btn:hover { transform:scale(1.08); }
.color-btn.selected::after {
  content:'';
  position:absolute;
  inset:-5px;
  border:1px solid #1a1a1a;
  border-radius:50%;
}
.color-name {
  margin-top:8px;
  font-size:0.72rem;
  color:#8a8a8a;
  font-style:italic;
}

/* STRUK / TAG BUTIK */
.tag-receipt {
  background:#ffffff;
  border:1px solid #ebe7e0;
  padding:26px 24px;
  position:relative;
  font-size:0.82rem;
}
.tag-receipt::before,
.tag-receipt::after {
  content:'';
  position:absolute;
  left:-8px; right:-8px;
  height:16px;
  background:
    radial-gradient(circle at 8px 8px, transparent 6px, #faf8f5 6px);
  background-size:16px 16px;
  background-position:0 0;
}
.tag-receipt::before { top:-8px; }
.tag-receipt::after {
  bottom:-8px;
  transform:scaleY(-1);
}

.tr-head {
  text-align:center;
  padding-bottom:18px;
  border-bottom:1px solid #ebe7e0;
  margin-bottom:18px;
}
.tr-head .logo {
  font-family:'Playfair Display',serif;
  font-size:1.4rem;
  font-weight:700;
  font-style:italic;
  color:#1a1a1a;
  letter-spacing:-0.5px;
  margin-bottom:4px;
}
.tr-head small {
  font-size:0.6rem;
  color:#8a8a8a;
  letter-spacing:3px;
  text-transform:uppercase;
}

.tr-meta {
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:8px 16px;
  font-size:0.72rem;
  padding:12px;
  background:#f4f0ea;
  margin-bottom:16px;
}
.tr-meta .m-item {
  display:flex; gap:6px;
}
.tr-meta .lbl {
  color:#8a8a8a;
  min-width:60px;
  text-transform:uppercase;
  font-size:0.62rem;
  letter-spacing:1px;
}
.tr-meta .val {
  color:#1a1a1a;
  font-weight:600;
}

.tr-items { margin-bottom:16px; }
.tr-item {
  padding:12px 0;
  border-bottom:1px dashed #ebe7e0;
}
.tr-item:last-child { border-bottom:none; }
.tr-item-top {
  display:flex;
  justify-content:space-between;
  gap:10px;
  margin-bottom:4px;
}
.tr-item-name {
  font-family:'Playfair Display',serif;
  font-size:0.88rem;
  font-weight:600;
  color:#1a1a1a;
}
.tr-item-price {
  font-family:'Playfair Display',serif;
  font-weight:600;
  color:#1a1a1a;
  white-space:nowrap;
}
.tr-item-meta {
  font-size:0.7rem;
  color:#8a8a8a;
  display:flex;
  gap:12px;
}

.tr-totals {
  padding-top:14px;
  border-top:1px solid #1a1a1a;
}
.tr-total-row {
  display:flex;
  justify-content:space-between;
  font-size:0.78rem;
  color:#4a4a4a;
  margin-bottom:6px;
}
.tr-total-row.grand {
  font-family:'Playfair Display',serif;
  font-size:1.3rem;
  font-weight:700;
  color:#1a1a1a;
  padding-top:12px;
  margin-top:8px;
  border-top:1px dashed #ebe7e0;
}

.tr-footer {
  text-align:center;
  padding-top:20px;
  margin-top:20px;
  border-top:1px solid #ebe7e0;
  font-size:0.72rem;
  color:#8a8a8a;
  line-height:1.8;
}
.tr-footer .thankyou {
  font-family:'Playfair Display',serif;
  font-style:italic;
  font-size:0.95rem;
  color:#1a1a1a;
  margin-bottom:6px;
}
.tr-footer .qr {
  width:80px; height:80px;
  background:#1a1a1a;
  margin:14px auto 8px;
  display:flex; align-items:center; justify-content:center;
  color:#faf8f5;
  font-size:2rem;
}

/* TOAST */
.toast {
  position:fixed;
  bottom:28px; left:50%;
  transform:translateX(-50%);
  background:#1a1a1a;
  color:#faf8f5;
  padding:14px 26px;
  font-size:0.82rem;
  font-weight:400;
  letter-spacing:0.3px;
  display:flex; align-items:center; gap:12px;
  opacity:0;
  pointer-events:none;
  transition:opacity 0.25s;
  z-index:200;
  max-width:90vw;
  font-style:italic;
  font-family:'Playfair Display',serif;
}
.toast i { color:#a8863f; font-style:normal; }
.toast.show { opacity:1; }

/* SCROLLBAR */
::-webkit-scrollbar { width:6px; height:6px; }
::-webkit-scrollbar-track { background:transparent; }
::-webkit-scrollbar-thumb { background:#d8d4cc; border-radius:10px; }
::-webkit-scrollbar-thumb:hover { background:#a8a8a8; }

/* RESPONSIF */
@media (max-width: 1024px) {
  .kasir-grid { grid-template-columns:1fr; }
  .bag-side { border-left:none; border-top:1px solid #ebe7e0; }
}
@media (max-width: 700px) {
  .topbar { padding:0 16px; height:auto; min-height:78px; flex-wrap:wrap; padding-top:14px; padding-bottom:14px; gap:12px; }
  .brand-mark { font-size:1.4rem; }
  .brand-title { font-size:0.78rem; letter-spacing:2px; }
  .mode-nav { gap:16px; }
  .mode-nav button { font-size:0.62rem; letter-spacing:1.5px; }
  .user-badge .info { display:none; }
  .lookbook { padding:20px 18px; }
  .lb-header h2 { font-size:1.5rem; }
  .bag-header { padding:18px 20px 16px; }
  .bag-body { padding:12px 18px; }
  .bag-footer { padding:18px 20px; }
  .admin-wrap { padding:20px 18px; }
  .admin-head h2 { font-size:1.4rem; }
  .modal-head, .modal-body, .modal-foot { padding-left:20px; padding-right:20px; }
  .tr-meta { grid-template-columns:1fr; }
}
</style>
</head>
<body>

<div class="app">

<!-- ===== HEADER ===== -->
<header class="topbar">
  <div class="brand">
    <div class="brand-mark">Atelier Noir</div>
    <div class="brand-title">
      Butik
      <small>Est. 2018 · Jakarta</small>
    </div>
  </div>
  <div class="topbar-right">
    <nav class="mode-nav">
      <button id="navKasir" class="active">
        <i class="fas fa-store"></i> Butik
      </button>
      <button id="navAdmin">
        <i class="fas fa-clipboard-list"></i> Manajemen
      </button>
    </nav>
    <div class="user-badge">
      <div class="avatar" id="avatarInit">R</div>
      <div class="info">
        <div class="name" id="userName">Renata</div>
        <div class="role" id="userRole">Store Manager</div>
      </div>
    </div>
  </div>
</header>

<!-- ========================================================= -->
<!-- ==================== PAGE KASIR ========================== -->
<!-- ========================================================= -->
<div class="page active" id="pageKasir">
  <div class="kasir-grid">

    <!-- KIRI: LOOKBOOK -->
    <section class="lookbook">
      <div class="lb-header">
        <div class="title-block">
          <div class="kicker">Collections · Musim Ini</div>
          <h2>Curated <span>Lookbook</span></h2>
          <p class="sub">Pilih koleksi dari display. Klik item untuk memilih ukuran dan warna.</p>
        </div>
        <div class="lb-search">
          <input type="text" id="searchInput" placeholder="Cari item, SKU, atau warna...">
          <i class="fas fa-search"></i>
        </div>
      </div>

      <div class="kat-tabs" id="katTabs">
        <button class="kat-tab active" data-kat="semua">Semua</button>
        <button class="kat-tab" data-kat="atasan">Atasan</button>
        <button class="kat-tab" data-kat="bawahan">Bawahan</button>
        <button class="kat-tab" data-kat="outer">Outer</button>
        <button class="kat-tab" data-kat="aksesoris">Aksesoris</button>
        <button class="kat-tab" data-kat="sepatu">Sepatu</button>
      </div>

      <div class="lb-grid" id="lbGrid"></div>
    </section>

    <!-- KANAN: SHOPPING BAG -->
    <aside class="bag-side">
      <div class="bag-header">
        <div class="kicker">Your Selection</div>
        <h3>Shopping Bag <span class="count" id="bagCount">(0)</span></h3>
      </div>

      <div class="bag-body" id="bagBody">
        <div class="bag-empty">
          <i class="fas fa-shopping-bag"></i>
          <div class="empty-title">Bag masih kosong</div>
          <p>Pilih koleksi favorit Anda<br>dari lookbook di samping.</p>
        </div>
      </div>

      <div class="bag-footer">
        <div class="voucher-row" id="voucherRow">
          <input type="text" id="voucherInput" placeholder="Kode voucher" maxlength="20">
          <button class="btn-voucher" id="btnApplyVoucher">Pakai</button>
        </div>

        <div id="voucherApplied" style="display:none;"></div>

        <div class="bag-total">
          <div class="bt-row"><span>Subtotal</span><span id="subTxt">Rp 0</span></div>
          <div class="bt-row" id="discountRow" style="display:none;"><span>Diskon Voucher</span><span id="discTxt">− Rp 0</span></div>
          <div class="bt-row"><span>PPN 11%</span><span id="taxTxt">Rp 0</span></div>
          <div class="bt-row grand"><span>Total</span><span id="totalTxt">Rp 0</span></div>
        </div>

        <button class="btn-bag-checkout" id="btnCheckout" disabled>
          <i class="fas fa-lock"></i> &nbsp;Checkout
        </button>
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
      <h2>Manajemen <span>Butik</span><small>Koleksi, stok & voucher</small></h2>
      <div class="admin-actions">
        <button class="btn-outline" id="btnResetData">
          <i class="fas fa-rotate"></i> Reset
        </button>
        <button class="btn-outline" id="btnTambahVoucher">
          <i class="fas fa-ticket"></i> Voucher
        </button>
        <button class="btn-solid" id="btnTambahProduk">
          <i class="fas fa-plus"></i> Item Baru
        </button>
      </div>
    </div>

    <div class="stats-row">
      <div class="stat-block">
        <div class="sb-lbl">Total Koleksi</div>
        <div class="sb-val" id="sTotal">0</div>
      </div>
      <div class="stat-block">
        <div class="sb-lbl">Total Stok</div>
        <div class="sb-val" id="sStok">0</div>
      </div>
      <div class="stat-block">
        <div class="sb-lbl">Stok Rendah</div>
        <div class="sb-val gold" id="sLow">0</div>
      </div>
      <div class="stat-block">
        <div class="sb-lbl">Nilai Koleksi</div>
        <div class="sb-val" id="sNilai" style="font-size:1.4rem;">Rp 0</div>
      </div>
    </div>

    <div class="admin-section">
      <div class="section-head">
        <h3>Koleksi <span>Aktif</span></h3>
        <div style="font-size:0.68rem; color:#8a8a8a; letter-spacing:1.5px; text-transform:uppercase;" id="adminCount">0 item</div>
      </div>
      <div class="admin-masonry" id="adminGrid"></div>
    </div>

    <div class="admin-section">
      <div class="section-head">
        <h3>Voucher <span>Promo</span></h3>
        <div style="font-size:0.68rem; color:#8a8a8a; letter-spacing:1.5px; text-transform:uppercase;" id="voucherCount">0 kode</div>
      </div>
      <div class="voucher-grid" id="voucherGrid"></div>
    </div>
  </div>
</div>

</div>

<!-- ===== MODAL: PILIH VARIAN ===== -->
<div class="modal-bg" id="modalVarian">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Pilih Varian</div>
        <h3 id="varianTitle">Nama Item</h3>
        <div class="sub" id="varianSub">Harga · SKU</div>
      </div>
      <button class="modal-close" id="closeVarian"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body" id="varianBody"></div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalVarian">Batal</button>
      <button class="btn-solid" id="btnTambahVarian">
        <i class="fas fa-plus"></i> Tambah ke Bag
      </button>
    </div>
  </div>
</div>

<!-- ===== MODAL: CHECKOUT ===== -->
<div class="modal-bg" id="modalCheckout">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Pembayaran</div>
        <h3>Konfirmasi Pembayaran</h3>
        <div class="sub">Pilih metode lalu selesaikan transaksi.</div>
      </div>
      <button class="modal-close" id="closeCheckout"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="form-field">
        <label>Metode Pembayaran</label>
        <select id="payMethod">
          <option>Tunai</option>
          <option>Kartu Debit</option>
          <option>Kartu Kredit</option>
          <option>QRIS</option>
        </select>
      </div>
      <div id="cashSection">
        <div class="form-field">
          <label>Uang Diterima</label>
          <input type="number" id="cashInput" placeholder="0" min="0" step="10000">
        </div>
        <div id="changeBox" style="padding:12px 14px; background:#f4f0ea; border-left:3px solid #a8863f; display:flex; justify-content:space-between; font-size:0.82rem;">
          <span style="color:#8a8a8a;">Kembalian</span>
          <strong id="changeTxt" style="font-family:'Playfair Display',serif;">Rp 0</strong>
        </div>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalCheckout">Batal</button>
      <button class="btn-solid" id="btnKonfirmasi">
        <i class="fas fa-check"></i> Konfirmasi Bayar
      </button>
    </div>
  </div>
</div>

<!-- ===== MODAL: STRUK ===== -->
<div class="modal-bg" id="modalStruk">
  <div class="modal" style="max-width:480px;">
    <div class="modal-head">
      <div>
        <div class="kicker">Terima Kasih</div>
        <h3>Struk Pembelian</h3>
        <div class="sub">Simpan sebagai bukti pembayaran.</div>
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

<!-- ===== MODAL: FORM PRODUK ===== -->
<div class="modal-bg" id="modalProduk">
  <div class="modal">
    <div class="modal-head">
      <div>
        <div class="kicker">Data Koleksi</div>
        <h3 id="produkFormTitle">Tambah Item</h3>
        <div class="sub">Detail produk butik.</div>
      </div>
      <button class="modal-close" id="closeProduk"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <input type="hidden" id="editId">
      <div class="form-field">
        <label>Nama Item</label>
        <input type="text" id="fNama" placeholder="Contoh: Silk Blouse" maxlength="50">
      </div>
      <div class="form-field">
        <label>SKU</label>
        <input type="text" id="fSku" placeholder="AN-BL-001" maxlength="20" style="font-family:'Courier New',monospace; letter-spacing:1px; text-transform:uppercase;">
      </div>
      <div class="form-field">
        <label>Kategori</label>
        <select id="fKategori">
          <option value="atasan">Atasan</option>
          <option value="bawahan">Bawahan</option>
          <option value="outer">Outer</option>
          <option value="aksesoris">Aksesoris</option>
          <option value="sepatu">Sepatu</option>
        </select>
      </div>
      <div class="form-field">
        <label>Harga (Rp)</label>
        <input type="number" id="fHarga" placeholder="0" min="0" step="10000">
      </div>
      <div class="form-field">
        <label>Stok Total (semua ukuran)</label>
        <input type="number" id="fStok" placeholder="0" min="0">
      </div>
      <div class="form-field">
        <label>Ukuran Tersedia</label>
        <input type="text" id="fUkuran" placeholder="S,M,L,XL" value="S,M,L,XL">
      </div>
      <div class="form-field">
        <label>Warna Tersedia</label>
        <input type="text" id="fWarna" placeholder="Hitam, Putih, Krem" value="Hitam, Putih, Krem">
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

<!-- ===== MODAL: FORM VOUCHER ===== -->
<div class="modal-bg" id="modalVoucher">
  <div class="modal" style="max-width:440px;">
    <div class="modal-head">
      <div>
        <div class="kicker">Kode Promo</div>
        <h3>Tambah Voucher</h3>
        <div class="sub">Buat kode diskon untuk pelanggan.</div>
      </div>
      <button class="modal-close" id="closeVoucher"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="form-field">
        <label>Kode Voucher</label>
        <input type="text" id="vKode" placeholder="STYLE10" maxlength="15" style="font-family:'Courier New',monospace; letter-spacing:3px; text-transform:uppercase; font-weight:700;">
      </div>
      <div class="form-field">
        <label>Deskripsi</label>
        <input type="text" id="vDesc" placeholder="Diskon 10% semua item" maxlength="60">
      </div>
      <div class="form-field">
        <label>Tipe Diskon</label>
        <select id="vTipe">
          <option value="persen">Persen (%)</option>
          <option value="nominal">Nominal (Rp)</option>
        </select>
      </div>
      <div class="form-field">
        <label>Nilai Diskon</label>
        <input type="number" id="vNilai" placeholder="10" min="1">
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalVoucher">Batal</button>
      <button class="btn-solid" id="btnSimpanVoucher">
        <i class="fas fa-ticket"></i> Simpan Voucher
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
  const STORAGE_KEY = 'atelier_noir_v1';
  const VOUCHER_KEY = 'atelier_noir_voucher_v1';

  const ICON_BY_KAT = {
    atasan:'fa-shirt', bawahan:'fa-socks', outer:'fa-vest',
    aksesoris:'fa-gem', sepatu:'fa-shoe-prints'
  };

  const defaultProduk = [
    { id:1, sku:'AN-BL-001', nama:'Silk Blouse Ivory', harga:385000, kategori:'atasan', stok:12, ukuran:['S','M','L','XL'], warna:['Krem','Putih','Hitam'], badge:'new' },
    { id:2, sku:'AN-OT-002', nama:'Cashmere Turtleneck', harga:520000, kategori:'atasan', stok:8, ukuran:['S','M','L'], warna:['Hitam','Coklat','Abu'], badge:'' },
    { id:3, sku:'AN-OT-003', nama:'Linen Overshirt', harga:295000, kategori:'atasan', stok:15, ukuran:['M','L','XL'], warna:['Putih','Biru Muda'], badge:'' },
    { id:4, sku:'AN-JK-004', nama:'Wool Trench Coat', harga:1250000, kategori:'outer', stok:5, ukuran:['S','M','L'], warna:['Camel','Hitam'], badge:'new' },
    { id:5, sku:'AN-JK-005', nama:'Leather Biker Jacket', harga:1850000, kategori:'outer', stok:3, ukuran:['S','M'], warna:['Hitam'], badge:'sale' },
    { id:6, sku:'AN-PT-006', nama:'Tailored Wool Trousers', harga:425000, kategori:'bawahan', stok:10, ukuran:['S','M','L','XL'], warna:['Hitam','Abu','Navy'], badge:'' },
    { id:7, sku:'AN-PT-007', nama:'Pleated Midi Skirt', harga:365000, kategori:'bawahan', stok:11, ukuran:['S','M','L'], warna:['Krem','Hitam','Burgundy'], badge:'' },
    { id:8, sku:'AN-DR-008', nama:'Slip Dress Silk', harga:645000, kategori:'atasan', stok:7, ukuran:['S','M','L'], warna:['Champagne','Hitam'], badge:'' },
    { id:9, sku:'AN-AC-009', nama:'Leather Belt Slim', harga:185000, kategori:'aksesoris', stok:20, ukuran:['S','M','L'], warna:['Hitam','Coklat'], badge:'' },
    { id:10, sku:'AN-AC-010', nama:'Silk Scarf Classic', harga:225000, kategori:'aksesoris', stok:18, ukuran:['One Size'], warna:['Motif Bunga','Polos'], badge:'' },
    { id:11, sku:'AN-SH-011', nama:'Leather Loafers', harga:895000, kategori:'sepatu', stok:6, ukuran:['38','39','40','41'], warna:['Hitam','Coklat Tua'], badge:'new' },
    { id:12, sku:'AN-SH-012', nama:'Suede Ankle Boots', harga:1050000, kategori:'sepatu', stok:4, ukuran:['37','38','39','40'], warna:['Camel','Hitam'], badge:'' },
    { id:13, sku:'AN-AC-013', nama:'Gold Minimal Earrings', harga:155000, kategori:'aksesoris', stok:22, ukuran:['One Size'], warna:['Gold','Silver'], badge:'' },
    { id:14, sku:'AN-OT-014', nama:'Ribbed Knit Sweater', harga:425000, kategori:'atasan', stok:9, ukuran:['S','M','L'], warna:['Krem','Coklat'], badge:'' }
  ];

  const defaultVoucher = [
    { kode:'STYLE10', desc:'Diskon 10% semua item', tipe:'persen', nilai:10 },
    { kode:'WELCOME50', desc:'Potongan Rp 50.000 untuk pelanggan baru', tipe:'nominal', nilai:50000 }
  ];

  const COLOR_MAP = {
    'Hitam':'#1a1a1a', 'Putih':'#fafafa', 'Krem':'#efe6d5', 'Champagne':'#e8dcc4',
    'Coklat':'#6b4423', 'Coklat Tua':'#3d2817', 'Abu':'#8a8a8a', 'Navy':'#1a2a4a',
    'Camel':'#c19a6b', 'Burgundy':'#6b1f2a', 'Biru Muda':'#a8c8e0', 'Gold':'#c9a960',
    'Silver':'#c0c0c0', 'Motif Bunga':'#d4a8b0', 'Polos':'#e8e4dc', 'Merah':'#8a3a3a'
  };

  let produkList, voucherList;
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    produkList = raw ? JSON.parse(raw) : JSON.parse(JSON.stringify(defaultProduk));
    const rawV = localStorage.getItem(VOUCHER_KEY);
    voucherList = rawV ? JSON.parse(rawV) : JSON.parse(JSON.stringify(defaultVoucher));
  } catch(e) {
    produkList = JSON.parse(JSON.stringify(defaultProduk));
    voucherList = JSON.parse(JSON.stringify(defaultVoucher));
  }
  const saveProduk = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(produkList));
  const saveVoucher = () => localStorage.setItem(VOUCHER_KEY, JSON.stringify(voucherList));

  let bag = []; // { id, sku, nama, harga, qty, ukuran, warna, icon }
  let filterKat = 'semua';
  let searchQ = '';
  let pendingVarian = null;
  let appliedVoucher = null;
  let lastReceipt = null;

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
    toastTimer = setTimeout(() => t.classList.remove('show'), 2400);
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
    document.getElementById('userName').textContent = 'Renata';
    document.getElementById('userRole').textContent = 'Store Manager';
    document.getElementById('avatarInit').textContent = 'R';
    renderLookbook();
  });

  navAdmin.addEventListener('click', () => {
    navAdmin.classList.add('active');
    navKasir.classList.remove('active');
    pageAdmin.classList.add('active');
    pageKasir.classList.remove('active');
    document.getElementById('userName').textContent = 'Ibu Kartika';
    document.getElementById('userRole').textContent = 'Owner';
    document.getElementById('avatarInit').textContent = 'K';
    renderAdmin();
  });

  /* =========================================================
     RENDER LOOKBOOK
  ========================================================= */
  function renderLookbook() {
    const grid = document.getElementById('lbGrid');
    let data = produkList.slice();

    if (filterKat !== 'semua') data = data.filter(p => p.kategori === filterKat);
    if (searchQ.trim()) {
      const q = searchQ.toLowerCase();
      data = data.filter(p =>
        p.nama.toLowerCase().includes(q) ||
        p.sku.toLowerCase().includes(q) ||
        (p.warna || []).some(w => w.toLowerCase().includes(q))
      );
    }

    if (data.length === 0) {
      grid.innerHTML = '<div style="grid-column:1/-1; text-align:center; padding:60px 20px; color:#b8b4ac; font-family:\'Playfair Display\',serif; font-style:italic; font-size:1.05rem;">Tidak ada item ditemukan</div>';
      return;
    }

    // Tentukan ukuran kartu secara cyclis: hero, normal, tall, normal, wide, ...
    const sizes = ['hero','normal','tall','normal','wide','normal','tall','normal'];

    grid.innerHTML = data.map((p, i) => {
      const out = p.stok <= 0;
      const low = p.stok > 0 && p.stok <= 5;
      let stokLabel = `Stok ${p.stok}`;
      let stokClass = 'lb-stok';
      if (low) { stokClass += ' low'; stokLabel = `Terbatas · ${p.stok}`; }
      if (out) { stokClass += ' out'; stokLabel = 'Habis'; }

      const size = i < 8 ? sizes[i] : 'normal';
      const badgeHtml = p.badge
        ? `<span class="lb-badge ${p.badge}">${p.badge === 'new' ? 'New' : p.badge === 'sale' ? 'Sale' : ''}</span>`
        : '';

      return `
        <div class="lb-card ${size} ${out ? 'out' : ''}" data-id="${p.id}">
          <div class="lb-visual">
            ${badgeHtml}
            <i class="fas ${ICON_BY_KAT[p.kategori] || 'fa-shirt'}"></i>
          </div>
          <div class="lb-info">
            <div class="lb-name">${p.nama}</div>
            <div class="lb-sku">${p.sku}</div>
            <div class="lb-meta">
              <span class="lb-price">${rp(p.harga)}</span>
              <span class="${stokClass}">${stokLabel}</span>
            </div>
          </div>
        </div>
      `;
    }).join('');

    grid.querySelectorAll('.lb-card').forEach(card => {
      if (card.classList.contains('out')) return;
      card.addEventListener('click', () => {
        const id = parseInt(card.dataset.id);
        bukaModalVarian(id);
      });
    });
  }

  /* =========================================================
     SEARCH & FILTER
  ========================================================= */
  document.getElementById('searchInput').addEventListener('input', e => {
    searchQ = e.target.value;
    renderLookbook();
  });
  document.querySelectorAll('#katTabs .kat-tab').forEach(t => {
    t.addEventListener('click', () => {
      document.querySelectorAll('#katTabs .kat-tab').forEach(x => x.classList.remove('active'));
      t.classList.add('active');
      filterKat = t.dataset.kat;
      renderLookbook();
    });
  });

  /* =========================================================
     RENDER BAG
  ========================================================= */
  function renderBag() {
    const box = document.getElementById('bagBody');
    const totalQty = bag.reduce((s, it) => s + it.qty, 0);
    document.getElementById('bagCount').textContent = '(' + totalQty + ')';

    if (bag.length === 0) {
      box.innerHTML = `
        <div class="bag-empty">
          <i class="fas fa-shopping-bag"></i>
          <div class="empty-title">Bag masih kosong</div>
          <p>Pilih koleksi favorit Anda<br>dari lookbook di samping.</p>
        </div>`;
    } else {
      box.innerHTML = bag.map((it, idx) => {
        const swatchColor = COLOR_MAP[it.warna] || '#d8d4cc';
        const isLight = ['#fafafa','#efe6d5','#e8dcc4','#e8e4dc','#c0c0c0','#c9a960','#d4a8b0'].includes(swatchColor);
        return `
          <div class="bag-item">
            <div class="bi-visual"><i class="fas ${ICON_BY_KAT[it.kategori] || 'fa-shirt'}"></i></div>
            <div class="bi-info">
              <div class="bi-name">${it.nama}</div>
              <div class="bi-sku">${it.sku}</div>
              <div class="bi-variants">
                <span class="v">Uk. <strong>${it.ukuran}</strong></span>
                <span class="v">
                  <span class="swatch" style="background:${swatchColor}; ${isLight ? 'border:1px solid #b8b4ac;' : ''}"></span>
                  ${it.warna}
                </span>
              </div>
              <div class="bi-qty">
                <button data-act="min" data-idx="${idx}"><i class="fas fa-minus"></i></button>
                <span>${it.qty}</span>
                <button data-act="plus" data-idx="${idx}"><i class="fas fa-plus"></i></button>
              </div>
            </div>
            <div class="bi-right">
              <div class="bi-price">${rp(it.harga * it.qty)}</div>
              <button class="bi-del" data-act="del" data-idx="${idx}">Hapus</button>
            </div>
          </div>
        `;
      }).join('');
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

    // hitung total
    const subtotal = bag.reduce((s, it) => s + it.harga * it.qty, 0);
    let diskon = 0;
    if (appliedVoucher) {
      if (appliedVoucher.tipe === 'persen') {
        diskon = Math.round(subtotal * appliedVoucher.nilai / 100);
      } else {
        diskon = Math.min(appliedVoucher.nilai, subtotal);
      }
    }
    const afterDisc = subtotal - diskon;
    const tax = Math.round(afterDisc * 0.11);
    const total = afterDisc + tax;

    document.getElementById('subTxt').textContent = rp(subtotal);
    if (diskon > 0) {
      document.getElementById('discountRow').style.display = 'flex';
      document.getElementById('discTxt').textContent = '− ' + rp(diskon);
    } else {
      document.getElementById('discountRow').style.display = 'none';
    }
    document.getElementById('taxTxt').textContent = rp(tax);
    document.getElementById('totalTxt').textContent = rp(total);
    document.getElementById('btnCheckout').disabled = bag.length === 0;

    // voucher applied UI
    const vApp = document.getElementById('voucherApplied');
    const vRow = document.getElementById('voucherRow');
    if (appliedVoucher) {
      vRow.style.display = 'none';
      vApp.style.display = 'flex';
      vApp.className = 'voucher-applied';
      vApp.innerHTML = `
        <span><span class="vcode">${appliedVoucher.kode}</span> · ${appliedVoucher.desc}</span>
        <button class="vremove" id="btnRemoveVoucher"><i class="fas fa-times"></i></button>
      `;
      document.getElementById('btnRemoveVoucher').addEventListener('click', () => {
        appliedVoucher = null;
        renderBag();
      });
    } else {
      vRow.style.display = 'flex';
      vApp.style.display = 'none';
    }
  }

  function incItem(idx) {
    const it = bag[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (p && it.qty >= p.stok) {
      toast(`Stok tersisa ${p.stok}`, 'fa-exclamation-circle');
      return;
    }
    it.qty++;
    renderBag();
  }
  function decItem(idx) {
    const it = bag[idx]; if (!it) return;
    if (it.qty <= 1) bag.splice(idx, 1);
    else it.qty--;
    renderBag();
  }
  function delItem(idx) {
    bag.splice(idx, 1);
    renderBag();
  }

  /* =========================================================
     MODAL VARIAN
  ========================================================= */
  const modalVarian = document.getElementById('modalVarian');

  function bukaModalVarian(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (p.stok <= 0) { toast('Stok habis', 'fa-exclamation-circle'); return; }

    document.getElementById('varianTitle').textContent = p.nama;
    document.getElementById('varianSub').textContent = rp(p.harga) + ' · ' + p.sku;

    const ukuran = p.ukuran || ['S','M','L','XL'];
    const warna = p.warna || ['Hitam'];

    document.getElementById('varianBody').innerHTML = `
      <div class="varian-group">
        <label>Pilih Ukuran</label>
        <div class="size-options" id="sizeOptions">
          ${ukuran.map((u, i) => `
            <button class="size-btn ${i === 0 ? 'selected' : ''}" data-ukuran="${u}">${u}</button>
          `).join('')}
        </div>
      </div>
      <div class="varian-group">
        <label>Pilih Warna</label>
        <div class="color-options" id="colorOptions">
          ${warna.map((w, i) => {
            const c = COLOR_MAP[w] || '#d8d4cc';
            const isLight = ['#fafafa','#efe6d5','#e8dcc4','#e8e4dc','#c0c0c0','#c9a960','#d4a8b0'].includes(c);
            return `<button class="color-btn ${i === 0 ? 'selected' : ''}" data-warna="${w}" style="background:${c}; ${isLight ? 'border:1px solid #b8b4ac;' : ''}" title="${w}"></button>`;
          }).join('')}
        </div>
        <div class="color-name" id="colorName">${warna[0]}</div>
      </div>
      <div style="padding-top:16px; border-top:1px solid #ebe7e0; font-size:0.78rem; color:#8a8a8a;">
        <div style="display:flex; justify-content:space-between; margin-bottom:6px;">
          <span>Stok tersedia</span>
          <strong style="color:#1a1a1a;">${p.stok} unit</strong>
        </div>
        <div style="display:flex; justify-content:space-between;">
          <span>Harga</span>
          <strong style="color:#1a1a1a; font-family:'Playfair Display',serif; font-size:1rem;">${rp(p.harga)}</strong>
        </div>
      </div>
    `;

    // Event handler
    document.querySelectorAll('#sizeOptions .size-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('#sizeOptions .size-btn').forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');
      });
    });
    document.querySelectorAll('#colorOptions .color-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('#colorOptions .color-btn').forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');
        document.getElementById('colorName').textContent = btn.dataset.warna;
      });
    });

    pendingVarian = p;
    modalVarian.classList.add('show');
  }

  document.getElementById('closeVarian').addEventListener('click', () => modalVarian.classList.remove('show'));
  document.getElementById('btnBatalVarian').addEventListener('click', () => modalVarian.classList.remove('show'));

  document.getElementById('btnTambahVarian').addEventListener('click', () => {
    if (!pendingVarian) return;
    const p = pendingVarian;
    const ukuran = document.querySelector('#sizeOptions .size-btn.selected').dataset.ukuran;
    const warna = document.querySelector('#colorOptions .color-btn.selected').dataset.warna;

    // cari item di bag dengan kombinasi sama
    const existing = bag.find(it =>
      it.id === p.id && it.ukuran === ukuran && it.warna === warna
    );
    if (existing) {
      if (existing.qty >= p.stok) {
        toast(`Stok tersisa ${p.stok}`, 'fa-exclamation-circle');
        return;
      }
      existing.qty++;
    } else {
      bag.push({
        id: p.id, sku: p.sku, nama: p.nama,
        harga: p.harga, qty: 1, ukuran, warna,
        kategori: p.kategori
      });
    }
    renderBag();
    modalVarian.classList.remove('show');
    pendingVarian = null;
    toast(`${p.nama} · ${ukuran} · ${warna} ditambahkan`, 'fa-shopping-bag');
  });

  /* =========================================================
     VOUCHER
  ========================================================= */
  document.getElementById('btnApplyVoucher').addEventListener('click', () => {
    const kode = document.getElementById('voucherInput').value.trim().toUpperCase();
    if (!kode) { toast('Masukkan kode voucher', 'fa-exclamation-circle'); return; }
    const v = voucherList.find(x => x.kode === kode);
    if (!v) { toast('Kode voucher tidak valid', 'fa-times-circle'); return; }
    appliedVoucher = v;
    document.getElementById('voucherInput').value = '';
    renderBag();
    toast(`Voucher ${v.kode} berhasil dipakai`, 'fa-ticket');
  });

  document.getElementById('voucherInput').addEventListener('keypress', e => {
    if (e.key === 'Enter') {
      e.preventDefault();
      document.getElementById('btnApplyVoucher').click();
    }
  });

  /* =========================================================
     MODAL CHECKOUT
  ========================================================= */
  const modalCheckout = document.getElementById('modalCheckout');
  const cashInput = document.getElementById('cashInput');

  function getTotal() {
    const subtotal = bag.reduce((s, it) => s + it.harga * it.qty, 0);
    let diskon = 0;
    if (appliedVoucher) {
      if (appliedVoucher.tipe === 'persen') {
        diskon = Math.round(subtotal * appliedVoucher.nilai / 100);
      } else {
        diskon = Math.min(appliedVoucher.nilai, subtotal);
      }
    }
    const afterDisc = subtotal - diskon;
    const tax = Math.round(afterDisc * 0.11);
    return { subtotal, diskon, tax, total: afterDisc + tax };
  }

  document.getElementById('btnCheckout').addEventListener('click', () => {
    if (bag.length === 0) return;
    cashInput.value = '';
    updateChange();
    modalCheckout.classList.add('show');
  });

  document.getElementById('payMethod').addEventListener('change', e => {
    document.getElementById('cashSection').style.display =
      e.target.value === 'Tunai' ? 'block' : 'none';
  });

  function updateChange() {
    const t = getTotal();
    const cash = parseInt(cashInput.value) || 0;
    const box = document.getElementById('changeBox');
    const txt = document.getElementById('changeTxt');
    if (cash === 0) {
      box.style.borderLeftColor = '#a8863f';
      txt.textContent = rp(0);
      txt.style.color = '#1a1a1a';
      return;
    }
    const diff = cash - t.total;
    if (diff < 0) {
      box.style.borderLeftColor = '#8a3a3a';
      txt.style.color = '#8a3a3a';
      txt.textContent = '− ' + rp(Math.abs(diff));
    } else {
      box.style.borderLeftColor = '#a8863f';
      txt.style.color = '#1a1a1a';
      txt.textContent = rp(diff);
    }
  }
  cashInput.addEventListener('input', updateChange);

  document.getElementById('closeCheckout').addEventListener('click', () => modalCheckout.classList.remove('show'));
  document.getElementById('btnBatalCheckout').addEventListener('click', () => modalCheckout.classList.remove('show'));

  document.getElementById('btnKonfirmasi').addEventListener('click', () => {
    const t = getTotal();
    const method = document.getElementById('payMethod').value;
    const cash = parseInt(cashInput.value) || 0;
    if (method === 'Tunai' && cash < t.total) {
      toast('Uang diterima kurang dari total', 'fa-exclamation-circle');
      return;
    }
    prosesBayar(t, method, cash);
  });

  /* =========================================================
     PROSES BAYAR & STRUK
  ========================================================= */
  function prosesBayar(t, method, cash) {
    const change = method === 'Tunai' ? cash - t.total : 0;

    const now = new Date();
    const receipt = {
      nomor: 'AN-' + now.getFullYear() + String(now.getMonth()+1).padStart(2,'0') +
             String(now.getDate()).padStart(2,'0') + '-' +
             String(Math.floor(Math.random()*9000)+1000),
      tanggal: now.toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' }),
      kasir: document.getElementById('userName').textContent,
      items: bag.map(it => ({ ...it })),
      subtotal: t.subtotal,
      diskon: t.diskon,
      voucher: appliedVoucher ? appliedVoucher.kode : null,
      tax: t.tax,
      total: t.total,
      metode: method,
      cash: method === 'Tunai' ? cash : t.total,
      change
    };
    lastReceipt = receipt;

    // kurangi stok
    bag.forEach(it => {
      const p = produkList.find(x => x.id === it.id);
      if (p) p.stok = Math.max(0, p.stok - it.qty);
    });
    saveProduk();

    modalCheckout.classList.remove('show');
    tampilkanStruk(receipt);

    bag = [];
    appliedVoucher = null;
    renderBag();
    renderLookbook();
    toast('Transaksi selesai', 'fa-check');
  }

  function tampilkanStruk(r) {
    const itemsHtml = r.items.map(it => {
      const swatchColor = COLOR_MAP[it.warna] || '#d8d4cc';
      return `
        <div class="tr-item">
          <div class="tr-item-top">
            <div class="tr-item-name">${it.nama}</div>
            <div class="tr-item-price">${rp(it.harga * it.qty)}</div>
          </div>
          <div class="tr-item-meta">
            <span>${it.sku}</span>
            <span>Uk. ${it.ukuran}</span>
            <span>
              <span style="display:inline-block; width:9px; height:9px; border-radius:50%; background:${swatchColor}; border:1px solid #d8d4cc; vertical-align:middle; margin-right:4px;"></span>${it.warna}
            </span>
            <span>× ${it.qty}</span>
          </div>
        </div>
      `;
    }).join('');

    document.getElementById('strukBody').innerHTML = `
      <div class="tag-receipt">
        <div class="tr-head">
          <div class="logo">Atelier Noir</div>
          <small>Butik · Jakarta</small>
          <div style="font-size:0.7rem; color:#8a8a8a; margin-top:8px; line-height:1.6;">
            Jl. Senopati No. 45, Jakarta Selatan<br>
            Telp: 021-7788991
          </div>
        </div>

        <div class="tr-meta">
          <div class="m-item"><span class="lbl">No.</span><span class="val">${r.nomor}</span></div>
          <div class="m-item"><span class="lbl">Kasir</span><span class="val">${r.kasir}</span></div>
          <div class="m-item" style="grid-column:1/-1;"><span class="lbl">Tanggal</span><span class="val">${r.tanggal}</span></div>
        </div>

        <div class="tr-items">
          ${itemsHtml}
        </div>

        <div class="tr-totals">
          <div class="tr-total-row"><span>Subtotal</span><span>${rp(r.subtotal)}</span></div>
          ${r.diskon > 0 ? `<div class="tr-total-row" style="color:#a8863f;"><span>Voucher ${r.voucher}</span><span>− ${rp(r.diskon)}</span></div>` : ''}
          <div class="tr-total-row"><span>PPN 11%</span><span>${rp(r.tax)}</span></div>
          <div class="tr-total-row grand"><span>Total</span><span>${rp(r.total)}</span></div>
          <div class="tr-total-row" style="margin-top:12px;"><span>Bayar (${r.metode})</span><span>${rp(r.cash)}</span></div>
          <div class="tr-total-row"><span>Kembalian</span><span>${rp(r.change)}</span></div>
        </div>

        <div class="tr-footer">
          <div class="thankyou">Thank you for shopping with us</div>
          Barang yang sudah dibeli tidak dapat dikembalikan<br>
          Kecuali ada kerusakan dari pihak kami<br>
          <div class="qr"><i class="fas fa-qrcode"></i></div>
          <div style="font-size:0.62rem; letter-spacing:1.5px;">FOLLOW @ATELIERNOIR</div>
        </div>
      </div>
    `;
    document.getElementById('modalStruk').classList.add('show');
  }

  document.getElementById('closeStruk').addEventListener('click', () => document.getElementById('modalStruk').classList.remove('show'));
  document.getElementById('btnOrderBaru').addEventListener('click', () => document.getElementById('modalStruk').classList.remove('show'));
  document.getElementById('btnCetak').addEventListener('click', () => {
    if (!lastReceipt) return;
    const w = window.open('', '', 'width=520,height=780');
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
    const totalStok = produkList.reduce((s, p) => s + p.stok, 0);
    const low = produkList.filter(p => p.stok > 0 && p.stok <= 5).length;
    const nilai = produkList.reduce((s, p) => s + p.stok * p.harga, 0);

    document.getElementById('sTotal').textContent = total;
    document.getElementById('sStok').textContent = totalStok;
    document.getElementById('sLow').textContent = low;
    document.getElementById('sNilai').textContent = rp(nilai);
    document.getElementById('adminCount').textContent = total + ' item';
    document.getElementById('voucherCount').textContent = voucherList.length + ' kode';

    // Produk grid
    const grid = document.getElementById('adminGrid');
    if (produkList.length === 0) {
      grid.innerHTML = '<div style="grid-column:1/-1; text-align:center; padding:40px; color:#b8b4ac; font-style:italic; font-family:\'Playfair Display\',serif;">Belum ada koleksi</div>';
    } else {
      grid.innerHTML = produkList.map(p => {
        let stokClass = '';
        let stokLabel = `${p.stok} unit · ${(p.ukuran||[]).join(', ')}`;
        if (p.stok <= 0) { stokClass = 'out'; stokLabel = 'Habis'; }
        else if (p.stok <= 5) { stokClass = 'low'; }

        return `
          <div class="admin-card" data-id="${p.id}">
            <div class="admin-card-visual"><i class="fas ${ICON_BY_KAT[p.kategori] || 'fa-shirt'}"></i></div>
            <div class="admin-card-info">
              <div class="ac-name">${p.nama}</div>
              <div class="ac-sku">${p.sku}</div>
              <div class="ac-cat">${p.kategori}</div>
              <div class="ac-price">${rp(p.harga)}</div>
              <div class="ac-stock ${stokClass}">${stokLabel}</div>
              <div style="margin-top:10px; display:flex; gap:6px;">
                <button class="icon-btn" data-act="edit" data-id="${p.id}" style="border:1px solid #ebe7e0; background:#fff; color:#8a8a8a; width:28px; height:28px; cursor:pointer; font-size:0.7rem;">
                  <i class="fas fa-pen"></i>
                </button>
                <button class="icon-btn" data-act="del" data-id="${p.id}" style="border:1px solid #ebe7e0; background:#fff; color:#8a8a8a; width:28px; height:28px; cursor:pointer; font-size:0.7rem;">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
            </div>
          </div>
        `;
      }).join('');

      grid.querySelectorAll('button[data-act]').forEach(btn => {
        btn.addEventListener('click', e => {
          e.stopPropagation();
          const id = parseInt(btn.dataset.id);
          if (btn.dataset.act === 'edit') bukaFormProduk(id);
          else hapusProduk(id);
        });
      });
      grid.querySelectorAll('.admin-card').forEach(card => {
        card.addEventListener('click', () => bukaFormProduk(parseInt(card.dataset.id)));
      });
    }

    // Voucher
    const vGrid = document.getElementById('voucherGrid');
    if (voucherList.length === 0) {
      vGrid.innerHTML = '<div style="grid-column:1/-1; text-align:center; padding:30px; color:#b8b4ac; font-style:italic; font-family:\'Playfair Display\',serif;">Belum ada voucher</div>';
    } else {
      vGrid.innerHTML = voucherList.map(v => `
        <div class="voucher-card">
          <button class="vc-delete" data-kode="${v.kode}"><i class="fas fa-times"></i></button>
          <div class="vc-code">${v.kode}</div>
          <div class="vc-desc">${v.desc}</div>
          <div class="vc-meta">
            <span>${v.tipe === 'persen' ? v.nilai + '% off' : 'Rp ' + v.nilai.toLocaleString('id-ID') + ' off'}</span>
          </div>
        </div>
      `).join('');
      vGrid.querySelectorAll('.vc-delete').forEach(btn => {
        btn.addEventListener('click', () => {
          const kode = btn.dataset.kode;
          if (!confirm(`Hapus voucher ${kode}?`)) return;
          voucherList = voucherList.filter(x => x.kode !== kode);
          saveVoucher();
          renderAdmin();
          toast('Voucher dihapus', 'fa-trash');
        });
      });
    }
  }

  /* =========================================================
     FORM PRODUK
  ========================================================= */
  const modalProduk = document.getElementById('modalProduk');

  function bukaFormProduk(id) {
    const isEdit = id != null;
    document.getElementById('produkFormTitle').textContent = isEdit ? 'Edit Item' : 'Tambah Item';
    document.getElementById('editId').value = isEdit ? id : '';
    document.getElementById('fNama').value = '';
    document.getElementById('fSku').value = '';
    document.getElementById('fKategori').value = 'atasan';
    document.getElementById('fHarga').value = '';
    document.getElementById('fStok').value = '';
    document.getElementById('fUkuran').value = 'S,M,L,XL';
    document.getElementById('fWarna').value = 'Hitam, Putih, Krem';

    if (isEdit) {
      const p = produkList.find(x => x.id === id);
      if (p) {
        document.getElementById('fNama').value = p.nama;
        document.getElementById('fSku').value = p.sku;
        document.getElementById('fKategori').value = p.kategori;
        document.getElementById('fHarga').value = p.harga;
        document.getElementById('fStok').value = p.stok;
        document.getElementById('fUkuran').value = (p.ukuran || []).join(',');
        document.getElementById('fWarna').value = (p.warna || []).join(', ');
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
    const sku = document.getElementById('fSku').value.trim().toUpperCase();
    const kategori = document.getElementById('fKategori').value;
    const harga = parseInt(document.getElementById('fHarga').value);
    const stok = parseInt(document.getElementById('fStok').value);
    const ukuranStr = document.getElementById('fUkuran').value.trim();
    const warnaStr = document.getElementById('fWarna').value.trim();

    if (!nama) return toast('Nama item harus diisi', 'fa-exclamation-circle');
    if (!sku) return toast('SKU harus diisi', 'fa-exclamation-circle');
    if (isNaN(harga) || harga < 0) return toast('Harga tidak valid', 'fa-exclamation-circle');
    if (isNaN(stok) || stok < 0) return toast('Stok tidak valid', 'fa-exclamation-circle');

    const ukuran = ukuranStr.split(',').map(x => x.trim()).filter(x => x);
    const warna = warnaStr.split(',').map(x => x.trim()).filter(x => x);

    if (editId) {
      const p = produkList.find(x => x.id === parseInt(editId));
      if (p) Object.assign(p, { nama, sku, kategori, harga, stok, ukuran, warna });
      toast('Item diperbarui', 'fa-check');
    } else {
      if (produkList.some(p => p.sku === sku)) return toast('SKU sudah dipakai', 'fa-exclamation-circle');
      const newId = produkList.length ? Math.max(...produkList.map(p => p.id)) + 1 : 1;
      produkList.push({ id:newId, sku, nama, kategori, harga, stok, ukuran, warna, badge:'' });
      toast('Item baru ditambahkan', 'fa-check');
    }
    saveProduk();
    modalProduk.classList.remove('show');
    renderAdmin();
    renderLookbook();
  });

  function hapusProduk(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (!confirm(`Hapus "${p.nama}"?`)) return;
    produkList = produkList.filter(x => x.id !== id);
    saveProduk();
    renderAdmin();
    renderLookbook();
    toast('Item dihapus', 'fa-trash');
  }

  /* =========================================================
     FORM VOUCHER
  ========================================================= */
  const modalVoucher = document.getElementById('modalVoucher');

  document.getElementById('btnTambahVoucher').addEventListener('click', () => {
    document.getElementById('vKode').value = '';
    document.getElementById('vDesc').value = '';
    document.getElementById('vTipe').value = 'persen';
    document.getElementById('vNilai').value = '';
    modalVoucher.classList.add('show');
  });
  document.getElementById('closeVoucher').addEventListener('click', () => modalVoucher.classList.remove('show'));
  document.getElementById('btnBatalVoucher').addEventListener('click', () => modalVoucher.classList.remove('show'));

  document.getElementById('btnSimpanVoucher').addEventListener('click', () => {
    const kode = document.getElementById('vKode').value.trim().toUpperCase();
    const desc = document.getElementById('vDesc').value.trim();
    const tipe = document.getElementById('vTipe').value;
    const nilai = parseInt(document.getElementById('vNilai').value);

    if (!kode) return toast('Kode harus diisi', 'fa-exclamation-circle');
    if (!desc) return toast('Deskripsi harus diisi', 'fa-exclamation-circle');
    if (isNaN(nilai) || nilai <= 0) return toast('Nilai tidak valid', 'fa-exclamation-circle');
    if (voucherList.some(v => v.kode === kode)) return toast('Kode sudah ada', 'fa-exclamation-circle');

    voucherList.push({ kode, desc, tipe, nilai });
    saveVoucher();
    modalVoucher.classList.remove('show');
    renderAdmin();
    toast('Voucher ditambahkan', 'fa-ticket');
  });

  /* =========================================================
     RESET
  ========================================================= */
  document.getElementById('btnResetData').addEventListener('click', () => {
    if (!confirm('Reset semua data koleksi & voucher ke default?')) return;
    produkList = JSON.parse(JSON.stringify(defaultProduk));
    voucherList = JSON.parse(JSON.stringify(defaultVoucher));
    bag = [];
    appliedVoucher = null;
    saveProduk();
    saveVoucher();
    renderAdmin();
    renderLookbook();
    renderBag();
    toast('Data direset', 'fa-rotate');
  });

  /* =========================================================
     INIT
  ========================================================= */
  renderLookbook();
  renderBag();
  renderAdmin();
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>