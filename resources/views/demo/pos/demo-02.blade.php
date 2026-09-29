@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kopi Senja — POS Kafe</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
* { margin:0; padding:0; box-sizing:border-box; }
body {
  font-family:'Inter',system-ui,sans-serif;
  background:#2a1e14;
  color:#2a1e14;
  min-height:100vh;
  padding:14px;
}

/* ===== APP FRAME ===== */
.app {
  max-width:1480px; margin:0 auto;
  background:#f7f0e4;
  border-radius:20px;
  overflow:hidden;
  min-height:calc(100vh - 28px);
  display:flex; flex-direction:column;
}

/* ===== HEADER DUA TINGKAT ===== */
.hd-top {
  background:#2a1e14; color:#f7f0e4;
  padding:18px 26px;
  display:flex; align-items:center; justify-content:space-between;
  flex-wrap:wrap; gap:14px;
}
.hd-brand { display:flex; align-items:center; gap:14px; }
.hd-mark {
  width:44px; height:44px; border-radius:50%;
  background:#d9a86b; color:#2a1e14;
  display:flex; align-items:center; justify-content:center;
  font-size:1.3rem;
}
.hd-title {
  font-family:'Georgia',serif;
  font-size:1.4rem; font-weight:700; letter-spacing:0.3px;
  line-height:1;
}
.hd-title small {
  display:block; font-family:'Inter',sans-serif;
  font-size:0.66rem; font-weight:400; letter-spacing:2px;
  color:#a89078; text-transform:uppercase; margin-top:4px;
}
.hd-nav {
  display:flex; gap:4px;
  background:#1f150c; padding:5px; border-radius:12px;
}
.hd-nav button {
  background:transparent; border:none; color:#a89078;
  padding:9px 18px; border-radius:8px; cursor:pointer;
  font-family:'Inter',sans-serif; font-size:0.82rem; font-weight:500;
  display:flex; align-items:center; gap:7px; transition:all 0.12s;
}
.hd-nav button:hover { color:#f7f0e4; }
.hd-nav button.active { background:#d9a86b; color:#2a1e14; }

/* BAR INFO TIPIS */
.hd-bar {
  background:#3a281a; color:#c9b39a;
  padding:10px 26px; font-size:0.78rem;
  display:flex; align-items:center; justify-content:space-between;
  flex-wrap:wrap; gap:12px;
  border-bottom:1px solid #4a3421;
}
.hd-bar .info-group { display:flex; gap:22px; flex-wrap:wrap; }
.hd-bar .info-item {
  display:flex; align-items:center; gap:7px;
}
.hd-bar .info-item i { color:#d9a86b; font-size:0.8rem; }
.hd-bar .info-item strong { color:#f7f0e4; font-weight:600; }
.hd-bar .live-dot {
  width:7px; height:7px; border-radius:50%; background:#7ac074;
  display:inline-block; margin-right:6px;
}

/* ===== PAGE WRAP ===== */
.page { display:none; flex:1; overflow:hidden; }
.page.active { display:flex; flex-direction:column; }

/* ====== KASIR: LAYOUT 2 KOLOM ====== */
.kasir-wrap {
  display:grid;
  grid-template-columns:1fr 380px;
  gap:0; flex:1; min-height:0;
}

/* === KIRI: BUKU MENU === */
.menu-side {
  padding:22px 26px;
  overflow-y:auto;
  display:flex; flex-direction:column;
}
.menu-head {
  display:flex; align-items:flex-end; justify-content:space-between;
  gap:20px; margin-bottom:18px; flex-wrap:wrap;
}
.menu-head h2 {
  font-family:'Georgia',serif;
  font-size:1.5rem; font-weight:700; color:#2a1e14;
  line-height:1.1;
}
.menu-head h2 small {
  display:block; font-family:'Inter',sans-serif;
  font-size:0.74rem; font-weight:400; color:#8a6f54;
  letter-spacing:1.5px; text-transform:uppercase;
  margin-top:6px;
}
.menu-search {
  position:relative; min-width:220px;
  border-bottom:2px solid #d9c4a8;
  display:flex; align-items:center;
  padding-bottom:6px;
}
.menu-search i { color:#a89078; font-size:0.85rem; margin-right:10px; }
.menu-search input {
  border:none; background:transparent; outline:none;
  padding:6px 0; width:100%; font-size:0.9rem;
  color:#2a1e14; font-family:'Inter',sans-serif;
}
.menu-search input::placeholder { color:#a89078; }

/* TAB KATEGORI (underline style) */
.kat-tabs {
  display:flex; gap:0; margin-bottom:20px;
  border-bottom:1px solid #e2d3bf;
  overflow-x:auto;
}
.kat-tab {
  background:transparent; border:none;
  padding:12px 20px 14px 20px;
  font-family:'Inter',sans-serif; font-size:0.86rem; font-weight:500;
  color:#8a6f54; cursor:pointer; white-space:nowrap;
  border-bottom:3px solid transparent; margin-bottom:-1px;
  display:flex; align-items:center; gap:8px;
  transition:all 0.12s;
}
.kat-tab:hover { color:#2a1e14; }
.kat-tab.active {
  color:#2a1e14; font-weight:700;
  border-bottom-color:#c94f2b;
}
.kat-tab.active i { color:#c94f2b; }
.kat-tab i { font-size:0.82rem; color:#a89078; }

/* LIST MENU (baris lebar) */
.menu-list { display:flex; flex-direction:column; gap:2px; }
.menu-row {
  display:grid; grid-template-columns:64px 1fr auto;
  gap:18px; align-items:center;
  padding:16px 8px; border-radius:10px;
  cursor:pointer; transition:background 0.12s;
  border-bottom:1px dashed #e2d3bf;
}
.menu-row:last-child { border-bottom:none; }
.menu-row:hover { background:#fffaf4; }
.menu-row.out { opacity:0.42; cursor:not-allowed; }
.menu-row.out:hover { background:transparent; }
.menu-thumb {
  width:64px; height:64px; border-radius:50%;
  background:#f0e3d0; color:#8a5a2b;
  display:flex; align-items:center; justify-content:center;
  font-size:1.5rem; flex-shrink:0;
  border:2px solid #e2d3bf;
}
.menu-row:hover .menu-thumb { border-color:#d9a86b; }
.menu-info { min-width:0; }
.menu-info h3 {
  font-family:'Georgia',serif;
  font-size:1.05rem; font-weight:700; color:#2a1e14;
  margin-bottom:3px;
}
.menu-info p {
  font-size:0.78rem; color:#8a6f54; line-height:1.4;
  overflow:hidden; text-overflow:ellipsis; white-space:nowrap;
}
.menu-info .menu-tags {
  display:flex; gap:6px; margin-top:6px; flex-wrap:wrap;
}
.menu-tag {
  font-size:0.66rem; background:#f0e3d0; color:#6b4d38;
  padding:2px 9px; border-radius:20px; font-weight:500;
  letter-spacing:0.3px; text-transform:uppercase;
}
.menu-tag.stock-low { background:#fde8cc; color:#a05a1f; }
.menu-tag.stock-out { background:#f2d7d0; color:#8b3a2a; }

.menu-right { text-align:right; display:flex; flex-direction:column; align-items:flex-end; gap:8px; }
.menu-price {
  font-family:'Georgia',serif; font-size:1.1rem;
  font-weight:700; color:#a0451e;
}
.btn-add-menu {
  width:34px; height:34px; border-radius:50%;
  background:#2a1e14; color:#f7f0e4; border:none;
  cursor:pointer; font-size:0.85rem;
  display:flex; align-items:center; justify-content:center;
  transition:transform 0.12s;
}
.menu-row:hover .btn-add-menu { background:#c94f2b; }
.btn-add-menu:active { transform:scale(0.92); }

/* === KANAN: NOTA ===== */
.nota-side {
  background:#2a1e14;
  padding:24px 22px;
  display:flex; flex-direction:column;
  gap:16px; overflow:hidden;
}
.nota-paper {
  background:#fdf6e8;
  border-radius:4px;
  padding:24px 20px;
  flex:1;
  display:flex; flex-direction:column;
  min-height:0;
  box-shadow:
    0 2px 0 #e8d7b8,
    0 4px 0 #dbc79a,
    0 12px 28px -10px rgba(0,0,0,0.5);
  position:relative;
}
.nota-paper::before {
  content:'';
  position:absolute; top:0; left:0; right:0; height:6px;
  background:repeating-linear-gradient(
    90deg, transparent 0 6px, #2a1e14 6px 8px
  );
  opacity:0.15;
}

.nota-head {
  text-align:center; padding-bottom:14px;
  border-bottom:1px dashed #a89078;
  margin-bottom:14px;
}
.nota-head h3 {
  font-family:'Georgia',serif; font-size:1.1rem;
  font-weight:700; letter-spacing:2px; color:#2a1e14;
}
.nota-head p {
  font-family:'Courier New',monospace;
  font-size:0.7rem; color:#8a6f54; margin-top:4px;
  letter-spacing:0.5px;
}
.nota-meja {
  background:#2a1e14; color:#f7f0e4;
  display:inline-block; padding:5px 14px; border-radius:20px;
  font-size:0.72rem; font-weight:600; letter-spacing:1px;
  margin-top:8px;
}
.nota-meja select {
  background:transparent; color:#f7f0e4; border:none;
  outline:none; font-family:'Inter',sans-serif; font-weight:600;
  font-size:0.72rem; letter-spacing:1px; cursor:pointer;
}
.nota-meja select option { background:#2a1e14; color:#f7f0e4; }

.nota-items {
  flex:1; overflow-y:auto;
  font-family:'Courier New',monospace;
  font-size:0.78rem; color:#2a1e14;
  padding-right:4px;
}
.nota-empty {
  text-align:center; padding:36px 0; color:#a89078;
  font-family:'Inter',sans-serif; font-size:0.84rem;
}
.nota-empty i { display:block; font-size:2rem; margin-bottom:10px; color:#d9c4a8; }

.nota-item {
  padding:10px 0;
  border-bottom:1px dashed #d9c4a8;
}
.nota-item:last-child { border-bottom:none; }
.nota-item .it-top {
  display:flex; justify-content:space-between; gap:8px;
  font-weight:700;
}
.nota-item .it-name { color:#2a1e14; }
.nota-item .it-price { color:#a0451e; }
.nota-item .it-custom {
  font-size:0.68rem; color:#8a6f54; font-style:italic;
  margin-top:2px; padding-left:6px;
}
.nota-item .it-bottom {
  display:flex; justify-content:space-between; align-items:center;
  margin-top:6px;
}
.nota-qty {
  display:flex; align-items:center; gap:8px;
  font-family:'Inter',sans-serif;
}
.nota-qty button {
  width:22px; height:22px; border:1px solid #a89078;
  background:transparent; color:#2a1e14;
  border-radius:4px; cursor:pointer; font-size:0.65rem;
  display:flex; align-items:center; justify-content:center;
}
.nota-qty button:hover { background:#2a1e14; color:#fdf6e8; }
.nota-qty span { font-weight:700; min-width:18px; text-align:center; font-size:0.78rem; }

.nota-del {
  background:transparent; border:none; color:#a89078;
  cursor:pointer; font-size:0.75rem;
}
.nota-del:hover { color:#c94f2b; }

.nota-line { border-top:1px dashed #a89078; margin:12px 0; }
.nota-total {
  font-family:'Courier New',monospace;
  font-size:0.82rem; color:#2a1e14;
  padding-top:4px;
}
.nota-total .t-row {
  display:flex; justify-content:space-between;
  margin-bottom:5px;
}
.nota-total .t-grand {
  font-family:'Georgia',serif;
  font-size:1.25rem; font-weight:700;
  padding-top:8px; margin-top:6px;
  border-top:1px dashed #a89078;
  display:flex; justify-content:space-between;
  color:#a0451e;
}

/* FAB BAYAR */
.nota-actions {
  display:flex; gap:10px; margin-top:14px;
}
.btn-clear {
  background:transparent; border:1px solid #a89078;
  color:#8a6f54; padding:12px 14px; border-radius:8px;
  cursor:pointer; font-family:'Inter',sans-serif;
  font-size:0.78rem; font-weight:500;
}
.btn-clear:hover { background:#f0e3d0; }
.btn-pay {
  flex:1; background:#c94f2b; color:#fdf6e8; border:none;
  padding:14px; border-radius:8px; cursor:pointer;
  font-family:'Inter',sans-serif; font-size:0.95rem; font-weight:700;
  display:flex; align-items:center; justify-content:center; gap:10px;
  letter-spacing:0.5px;
}
.btn-pay:hover { background:#a83f1f; }
.btn-pay:disabled { background:#8a6f54; cursor:not-allowed; }
.btn-pay i { color:#fdf6e8; }

/* ====== ADMIN: KANBAN ====== */
.admin-wrap {
  padding:22px 26px;
  flex:1; overflow-y:auto;
}
.admin-head {
  display:flex; align-items:flex-end; justify-content:space-between;
  margin-bottom:22px; flex-wrap:wrap; gap:14px;
}
.admin-head h2 {
  font-family:'Georgia',serif; font-size:1.5rem;
  font-weight:700; color:#2a1e14;
}
.admin-head h2 small {
  display:block; font-family:'Inter',sans-serif;
  font-size:0.74rem; font-weight:400; color:#8a6f54;
  letter-spacing:1.5px; text-transform:uppercase; margin-top:6px;
}
.admin-actions { display:flex; gap:10px; }
.btn-outline {
  background:transparent; border:1px solid #2a1e14;
  color:#2a1e14; padding:10px 18px; border-radius:8px;
  cursor:pointer; font-family:'Inter',sans-serif;
  font-size:0.82rem; font-weight:600;
  display:flex; align-items:center; gap:8px;
}
.btn-outline:hover { background:#2a1e14; color:#f7f0e4; }
.btn-outline:hover i { color:#d9a86b; }

/* STATS BAR */
.stats-bar {
  display:grid; grid-template-columns:repeat(auto-fit,minmax(140px,1fr));
  gap:12px; margin-bottom:22px;
}
.stat-mini {
  background:#fffaf4; border:1px solid #e2d3bf;
  padding:14px 16px; border-radius:12px;
}
.stat-mini .lbl {
  font-size:0.68rem; color:#8a6f54;
  text-transform:uppercase; letter-spacing:0.8px;
  margin-bottom:6px;
}
.stat-mini .val {
  font-family:'Georgia',serif; font-size:1.4rem;
  font-weight:700; color:#2a1e14;
}
.stat-mini .val.warn { color:#c94f2b; }

/* KANBAN BOARD */
.kanban {
  display:grid;
  grid-template-columns:repeat(4, 1fr);
  gap:16px;
  min-height:400px;
}
.kanban-col {
  background:#f0e3d0;
  border-radius:14px;
  padding:14px;
  display:flex; flex-direction:column;
  gap:12px;
  min-height:0;
}
.col-head {
  display:flex; align-items:center; justify-content:space-between;
  padding-bottom:10px; border-bottom:2px solid #d9c4a8;
}
.col-head .col-title {
  font-family:'Georgia',serif; font-weight:700;
  font-size:0.95rem; color:#2a1e14;
  display:flex; align-items:center; gap:8px;
}
.col-head .col-title i { color:#a0451e; font-size:0.85rem; }
.col-head .col-count {
  background:#2a1e14; color:#f7f0e4;
  font-size:0.7rem; font-weight:700;
  padding:3px 9px; border-radius:20px;
  min-width:24px; text-align:center;
}
.col-body {
  display:flex; flex-direction:column; gap:10px;
  overflow-y:auto; max-height:520px;
  padding-right:2px;
}
.kanban-card {
  background:#fffaf4;
  border-radius:10px;
  padding:13px 14px;
  border:1px solid #e2d3bf;
  cursor:pointer;
  transition:all 0.12s;
}
.kanban-card:hover {
  border-color:#c94f2b;
  transform:translateY(-1px);
  box-shadow:0 4px 10px -4px rgba(42,30,20,0.15);
}
.kanban-card .kc-head {
  display:flex; justify-content:space-between;
  align-items:flex-start; gap:8px;
  margin-bottom:6px;
}
.kanban-card .kc-name {
  font-family:'Georgia',serif;
  font-size:0.92rem; font-weight:700;
  color:#2a1e14; line-height:1.25;
}
.kanban-card .kc-price {
  font-size:0.85rem; font-weight:700;
  color:#a0451e; white-space:nowrap;
}
.kanban-card .kc-foot {
  display:flex; justify-content:space-between;
  align-items:center; margin-top:8px;
  padding-top:8px; border-top:1px dashed #e2d3bf;
}
.stok-bar {
  display:flex; align-items:center; gap:7px;
  font-size:0.72rem; font-weight:600;
  color:#6b4d38;
}
.stok-dot {
  width:8px; height:8px; border-radius:50%;
  background:#7ac074;
}
.stok-dot.low { background:#e8a04c; }
.stok-dot.out { background:#c94f2b; }
.kc-actions {
  display:flex; gap:4px; opacity:0;
  transition:opacity 0.12s;
}
.kanban-card:hover .kc-actions { opacity:1; }
.kc-btn {
  width:26px; height:26px; border-radius:6px;
  background:transparent; border:1px solid #e2d3bf;
  color:#8a6f54; cursor:pointer; font-size:0.7rem;
  display:flex; align-items:center; justify-content:center;
}
.kc-btn:hover { background:#2a1e14; color:#f7f0e4; border-color:#2a1e14; }
.kc-btn.danger:hover { background:#c94f2b; border-color:#c94f2b; }

/* ====== DRAWER (slide-in) ====== */
.drawer-bg {
  position:fixed; inset:0; background:rgba(42,30,20,0.5);
  opacity:0; pointer-events:none; transition:opacity 0.2s;
  z-index:90;
}
.drawer-bg.show { opacity:1; pointer-events:auto; }

.drawer {
  position:fixed; top:0; right:0; bottom:0;
  width:100%; max-width:420px;
  background:#fdf6e8;
  box-shadow:-12px 0 40px -10px rgba(0,0,0,0.4);
  transform:translateX(100%);
  transition:transform 0.25s ease-out;
  z-index:100;
  display:flex; flex-direction:column;
}
.drawer.show { transform:translateX(0); }

.drawer-head {
  padding:24px 26px 18px;
  border-bottom:1px dashed #a89078;
  position:relative;
}
.drawer-head .dh-kicker {
  font-size:0.7rem; color:#a0451e; font-weight:700;
  letter-spacing:2px; text-transform:uppercase;
  margin-bottom:8px;
}
.drawer-head h3 {
  font-family:'Georgia',serif; font-size:1.35rem;
  font-weight:700; color:#2a1e14; line-height:1.2;
  padding-right:40px;
}
.drawer-head .dh-sub {
  font-size:0.82rem; color:#8a6f54; margin-top:6px;
}
.drawer-close {
  position:absolute; top:22px; right:22px;
  width:32px; height:32px; border-radius:50%;
  background:transparent; border:1px solid #d9c4a8;
  color:#8a6f54; cursor:pointer;
  display:flex; align-items:center; justify-content:center;
}
.drawer-close:hover { background:#2a1e14; color:#f7f0e4; border-color:#2a1e14; }

.drawer-body {
  flex:1; overflow-y:auto; padding:24px 26px;
}

/* CUSTOM OPTIONS */
.custom-group { margin-bottom:22px; }
.custom-group > label {
  font-size:0.72rem; font-weight:700; color:#a0451e;
  letter-spacing:1.5px; text-transform:uppercase;
  display:block; margin-bottom:10px;
}
.opt-list { display:flex; flex-wrap:wrap; gap:8px; }
.opt-chip {
  border:1.5px solid #d9c4a8; background:#fffaf4;
  padding:9px 16px; border-radius:40px;
  font-size:0.82rem; font-weight:500; color:#6b4d38;
  cursor:pointer; font-family:'Inter',sans-serif;
  display:flex; align-items:center; gap:7px;
  transition:all 0.12s;
}
.opt-chip:hover { border-color:#2a1e14; }
.opt-chip.selected {
  background:#2a1e14; border-color:#2a1e14; color:#fdf6e8;
}
.opt-chip.selected .chip-price { color:#d9a86b; }
.opt-chip i { font-size:0.78rem; }
.chip-price {
  font-size:0.72rem; color:#a0451e; font-weight:700;
  margin-left:2px;
}
.chip-size {
  font-family:'Georgia',serif;
  font-weight:700; font-size:0.9rem;
}

/* DRAWER FOOTER */
.drawer-foot {
  padding:18px 26px 22px;
  border-top:1px dashed #a89078;
  background:#f7f0e4;
}
.df-summary {
  display:flex; justify-content:space-between;
  align-items:baseline; margin-bottom:14px;
}
.df-summary .lbl {
  font-size:0.78rem; color:#8a6f54;
}
.df-summary .val {
  font-family:'Georgia',serif; font-size:1.5rem;
  font-weight:700; color:#a0451e;
}
.df-buttons { display:flex; gap:10px; }
.btn-text {
  background:transparent; border:1px solid #d9c4a8;
  padding:13px 20px; border-radius:8px; cursor:pointer;
  font-family:'Inter',sans-serif; font-size:0.88rem;
  font-weight:500; color:#6b4d38;
}
.btn-text:hover { background:#f0e3d0; }
.btn-solid {
  flex:1; background:#2a1e14; color:#fdf6e8; border:none;
  padding:13px 20px; border-radius:8px; cursor:pointer;
  font-family:'Inter',sans-serif; font-size:0.92rem; font-weight:600;
  display:flex; align-items:center; justify-content:center; gap:8px;
}
.btn-solid:hover { background:#c94f2b; }
.btn-solid i { color:#d9a86b; }
.btn-solid:hover i { color:#fdf6e8; }

/* FORM FIELD (drawer) */
.field { margin-bottom:16px; }
.field label {
  font-size:0.78rem; font-weight:600; color:#6b4d38;
  display:block; margin-bottom:7px;
}
.field input, .field select {
  width:100%; border:1.5px solid #d9c4a8; background:#fffaf4;
  padding:12px 14px; border-radius:9px;
  font-family:'Inter',sans-serif; font-size:0.92rem;
  color:#2a1e14; outline:none;
}
.field input:focus, .field select:focus { border-color:#2a1e14; }

/* PAYMENT EXTRAS */
.pay-tabs {
  display:grid; grid-template-columns:repeat(3,1fr);
  gap:8px; margin-bottom:16px;
}
.pay-tab {
  border:1.5px solid #d9c4a8; background:#fffaf4;
  padding:14px 6px; border-radius:10px;
  cursor:pointer; text-align:center;
  font-size:0.78rem; font-weight:600; color:#6b4d38;
}
.pay-tab i {
  display:block; font-size:1.15rem;
  margin-bottom:6px; color:#2a1e14;
}
.pay-tab.selected {
  background:#2a1e14; border-color:#2a1e14; color:#fdf6e8;
}
.pay-tab.selected i { color:#d9a86b; }

/* STRUK dalam drawer */
.struk-paper {
  background:#fffaf4;
  border:1px dashed #a89078;
  border-radius:6px;
  padding:22px 20px;
  font-family:'Courier New',monospace;
  font-size:0.78rem; color:#2a1e14;
  line-height:1.6;
}
.struk-paper .s-head {
  text-align:center; padding-bottom:12px;
  border-bottom:1px dashed #a89078; margin-bottom:12px;
}
.struk-paper .s-head h4 {
  font-family:'Georgia',serif; font-size:1rem;
  letter-spacing:2px; font-weight:700; margin-bottom:4px;
}
.struk-paper .s-head p { font-size:0.7rem; color:#8a6f54; }
.struk-paper .s-meta {
  font-size:0.72rem; color:#6b4d38;
  line-height:1.7; margin-bottom:12px;
}
.struk-paper .s-item { margin-bottom:8px; }
.struk-paper .s-line1 {
  display:flex; justify-content:space-between; font-weight:700;
}
.struk-paper .s-line2 {
  display:flex; justify-content:space-between; color:#8a6f54;
  font-size:0.7rem;
}
.struk-paper .s-custom {
  font-size:0.68rem; color:#a89078; font-style:italic;
  padding-left:8px;
}
.struk-paper .s-total {
  border-top:1px dashed #a89078; padding-top:10px; margin-top:12px;
}
.struk-paper .s-total .s-row {
  display:flex; justify-content:space-between; margin-bottom:5px;
}
.struk-paper .s-total .s-grand {
  font-family:'Georgia',serif; font-size:1.1rem;
  font-weight:700; color:#a0451e;
  border-top:1px dashed #a89078;
  padding-top:8px; margin-top:8px;
  display:flex; justify-content:space-between;
}
.struk-paper .s-foot {
  text-align:center; font-size:0.68rem;
  color:#8a6f54; margin-top:14px; padding-top:12px;
  border-top:1px dashed #a89078;
}

/* TOAST */
.toast {
  position:fixed; bottom:26px; left:50%; transform:translateX(-50%);
  background:#2a1e14; color:#f7f0e4;
  padding:13px 22px; border-radius:40px;
  font-size:0.85rem; font-weight:500;
  display:flex; align-items:center; gap:10px;
  opacity:0; pointer-events:none; transition:opacity 0.2s; z-index:200;
  box-shadow:0 10px 25px -8px rgba(0,0,0,0.5); max-width:90vw;
}
.toast.show { opacity:1; }
.toast i { color:#d9a86b; }

/* SCROLLBAR */
::-webkit-scrollbar { width:6px; height:6px; }
::-webkit-scrollbar-track { background:transparent; }
::-webkit-scrollbar-thumb { background:#d9c4a8; border-radius:10px; }
.nota-items::-webkit-scrollbar-thumb { background:#a89078; }

/* RESPONSIF */
@media (max-width: 1000px) {
  .kasir-wrap { grid-template-columns:1fr; }
  .nota-side { order:-1; }
  .nota-paper { max-height:340px; }
  .kanban { grid-template-columns:repeat(2, 1fr); }
}
@media (max-width: 620px) {
  body { padding:8px; }
  .app { border-radius:14px; }
  .hd-top { padding:14px 16px; }
  .hd-title { font-size:1.15rem; }
  .hd-bar { padding:9px 16px; font-size:0.72rem; }
  .hd-bar .info-group { gap:14px; }
  .menu-side { padding:16px; }
  .nota-side { padding:16px; }
  .admin-wrap { padding:16px; }
  .menu-head h2 { font-size:1.2rem; }
  .menu-row { grid-template-columns:52px 1fr auto; gap:12px; padding:12px 4px; }
  .menu-thumb { width:52px; height:52px; font-size:1.2rem; }
  .menu-info h3 { font-size:0.95rem; }
  .menu-info p { display:none; }
  .menu-price { font-size:1rem; }
  .kanban { grid-template-columns:1fr; }
  .drawer { max-width:100%; }
  .hd-nav button span { display:none; }
  .hd-nav button { padding:9px 12px; }
}
</style>
</head>
<body>

<div class="app">

  <!-- ===== HEADER TOP ===== -->
  <header class="hd-top">
    <div class="hd-brand">
      <div class="hd-mark"><i class="fas fa-mug-hot"></i></div>
      <div>
        <div class="hd-title">Kopi Senja<small>Roastery & Kitchen</small></div>
      </div>
    </div>
    <nav class="hd-nav">
      <button id="navKasir" class="active">
        <i class="fas fa-cash-register"></i> <span>Kasir</span>
      </button>
      <button id="navAdmin">
        <i class="fas fa-table-columns"></i> <span>Dapur & Stok</span>
      </button>
    </nav>
  </header>

  <!-- ===== BAR INFO ===== -->
  <div class="hd-bar">
    <div class="info-group">
      <div class="info-item">
        <span class="live-dot"></span>
        <span>Shift aktif</span>
      </div>
      <div class="info-item">
        <i class="fas fa-user"></i>
        <span id="infoUser">Dewi — Barista</span>
      </div>
      <div class="info-item">
        <i class="fas fa-clock"></i>
        <span id="infoClock">--:--:--</span>
      </div>
    </div>
    <div class="info-group">
      <div class="info-item">
        <i class="fas fa-receipt"></i>
        <span>Order hari ini: <strong id="infoOrderCount">0</strong></span>
      </div>
      <div class="info-item">
        <i class="fas fa-coins"></i>
        <span>Pendapatan: <strong id="infoRevenue">Rp 0</strong></span>
      </div>
    </div>
  </div>

  <!-- ===== PAGE KASIR ===== -->
  <div class="page active" id="pageKasir">
    <div class="kasir-wrap">

      <!-- KIRI: BUKU MENU -->
      <section class="menu-side">
        <div class="menu-head">
          <h2>Menu Hari Ini<small id="menuCountLabel">15 item tersedia</small></h2>
          <div class="menu-search">
            <i class="fas fa-search"></i>
            <input type="text" id="searchInput" placeholder="Cari menu...">
          </div>
        </div>

        <div class="kat-tabs" id="katTabs">
          <button class="kat-tab active" data-kat="semua"><i class="fas fa-th-large"></i> Semua</button>
          <button class="kat-tab" data-kat="kopi"><i class="fas fa-mug-hot"></i> Kopi</button>
          <button class="kat-tab" data-kat="non-kopi"><i class="fas fa-mug-saucer"></i> Non-Kopi</button>
          <button class="kat-tab" data-kat="makanan"><i class="fas fa-utensils"></i> Makanan</button>
          <button class="kat-tab" data-kat="snack"><i class="fas fa-cookie-bite"></i> Snack</button>
        </div>

        <div class="menu-list" id="menuList"></div>
      </section>

      <!-- KANAN: NOTA -->
      <aside class="nota-side">
        <div class="nota-paper">
          <div class="nota-head">
            <h3>KOPI SENJA</h3>
            <p>Jl. Cendana 45, Bandung</p>
            <div class="nota-meja">
              <i class="fas fa-chair" style="margin-right:6px;"></i>
              <select id="mejaSelect">
                <option>Meja 01</option>
                <option>Meja 02</option>
                <option>Meja 03</option>
                <option>Meja 04</option>
                <option>Meja 05</option>
                <option>Take Away</option>
                <option>Delivery</option>
              </select>
            </div>
          </div>

          <div class="nota-items" id="notaItems">
            <div class="nota-empty">
              <i class="fas fa-mug-saucer"></i>
              Nota masih kosong
            </div>
          </div>

          <div class="nota-line"></div>
          <div class="nota-total">
            <div class="t-row"><span>Subtotal</span><span id="subTxt">Rp 0</span></div>
            <div class="t-row"><span>Pajak 10%</span><span id="taxTxt">Rp 0</span></div>
            <div class="t-grand"><span>TOTAL</span><span id="totalTxt">Rp 0</span></div>
          </div>
          <div class="nota-actions">
            <button class="btn-clear" id="btnClear" title="Kosongkan"><i class="fas fa-trash"></i></button>
            <button class="btn-pay" id="btnBayar" disabled>
              <i class="fas fa-money-bill-wave"></i> Bayar
            </button>
          </div>
        </div>
      </aside>
    </div>
  </div>

  <!-- ===== PAGE ADMIN (KANBAN) ===== -->
  <div class="page" id="pageAdmin">
    <div class="admin-wrap">
      <div class="admin-head">
        <h2>Dapur & Stok<small>Kelola menu per kategori</small></h2>
        <div class="admin-actions">
          <button class="btn-outline" id="btnResetData">
            <i class="fas fa-rotate"></i> Reset Data
          </button>
          <button class="btn-outline" id="btnTambahMenu">
            <i class="fas fa-plus"></i> Menu Baru
          </button>
        </div>
      </div>

      <div class="stats-bar">
        <div class="stat-mini">
          <div class="lbl">Total Menu</div>
          <div class="val" id="sTotal">0</div>
        </div>
        <div class="stat-mini">
          <div class="lbl">Total Stok</div>
          <div class="val" id="sStok">0</div>
        </div>
        <div class="stat-mini">
          <div class="lbl">Stok Menipis</div>
          <div class="val warn" id="sLow">0</div>
        </div>
        <div class="stat-mini">
          <div class="lbl">Nilai Inventaris</div>
          <div class="val" id="sNilai" style="font-size:1.1rem;">Rp 0</div>
        </div>
      </div>

      <div class="kanban" id="kanban"></div>
    </div>
  </div>
</div>

<!-- ===== DRAWER BACKGROUND ===== -->
<div class="drawer-bg" id="drawerBg"></div>

<!-- ===== DRAWER: KUSTOMISASI ===== -->
<aside class="drawer" id="drawerCustom">
  <div class="drawer-head">
    <div class="dh-kicker">Sesuaikan Pesanan</div>
    <h3 id="customTitle">Menu</h3>
    <div class="dh-sub" id="customPrice">Rp 0</div>
    <button class="drawer-close" id="closeCustom"><i class="fas fa-times"></i></button>
  </div>
  <div class="drawer-body" id="customBody"></div>
  <div class="drawer-foot">
    <div class="df-summary">
      <span class="lbl">Total item</span>
      <span class="val" id="customTotal">Rp 0</span>
    </div>
    <div class="df-buttons">
      <button class="btn-text" id="cancelCustom">Batal</button>
      <button class="btn-solid" id="confirmCustom">
        <i class="fas fa-plus"></i> Tambah ke Nota
      </button>
    </div>
  </div>
</aside>

<!-- ===== DRAWER: PEMBAYARAN ===== -->
<aside class="drawer" id="drawerPay">
  <div class="drawer-head">
    <div class="dh-kicker">Pembayaran</div>
    <h3>Konfirmasi Order</h3>
    <div class="dh-sub">Pilih metode dan selesaikan transaksi.</div>
    <button class="drawer-close" id="closePay"><i class="fas fa-times"></i></button>
  </div>
  <div class="drawer-body">
    <div class="custom-group">
      <label>Metode Pembayaran</label>
      <div class="pay-tabs" id="payTabs">
        <div class="pay-tab selected" data-method="Tunai"><i class="fas fa-money-bill"></i>Tunai</div>
        <div class="pay-tab" data-method="Debit"><i class="fas fa-credit-card"></i>Debit</div>
        <div class="pay-tab" data-method="QRIS"><i class="fas fa-qrcode"></i>QRIS</div>
      </div>
    </div>

    <div class="custom-group" id="cashGroup">
      <label>Uang Diterima</label>
      <div class="field" style="margin:0;">
        <input type="number" id="cashInput" placeholder="0" min="0" step="1000">
      </div>
      <div id="changeBox" style="margin-top:10px; font-size:0.82rem; color:#7ac074; display:flex; justify-content:space-between; font-weight:600;">
        <span>Kembalian</span>
        <span id="changeTxt">Rp 0</span>
      </div>
    </div>
  </div>
  <div class="drawer-foot">
    <div class="df-summary">
      <span class="lbl">Total bayar</span>
      <span class="val" id="payTotalDisplay">Rp 0</span>
    </div>
    <div class="df-buttons">
      <button class="btn-text" id="cancelPay">Batal</button>
      <button class="btn-solid" id="confirmPay">
        <i class="fas fa-check"></i> Selesaikan
      </button>
    </div>
  </div>
</aside>

<!-- ===== DRAWER: STRUK ===== -->
<aside class="drawer" id="drawerStruk">
  <div class="drawer-head">
    <div class="dh-kicker">Transaksi Selesai</div>
    <h3>Struk</h3>
    <div class="dh-sub">Serahkan struk ke pelanggan.</div>
    <button class="drawer-close" id="closeStruk"><i class="fas fa-times"></i></button>
  </div>
  <div class="drawer-body" id="strukBody"></div>
  <div class="drawer-foot">
    <div class="df-buttons">
      <button class="btn-text" id="btnNewOrder">Order Baru</button>
      <button class="btn-solid" id="btnCetak">
        <i class="fas fa-print"></i> Cetak Struk
      </button>
    </div>
  </div>
</aside>

<!-- ===== DRAWER: FORM PRODUK (ADMIN) ===== -->
<aside class="drawer" id="drawerProduk">
  <div class="drawer-head">
    <div class="dh-kicker">Data Menu</div>
    <h3 id="produkFormTitle">Tambah Menu</h3>
    <div class="dh-sub">Isi detail menu dengan lengkap.</div>
    <button class="drawer-close" id="closeProduk"><i class="fas fa-times"></i></button>
  </div>
  <div class="drawer-body">
    <input type="hidden" id="editId">
    <div class="field">
      <label>Nama Menu</label>
      <input type="text" id="fNama" placeholder="Contoh: Cappuccino" maxlength="40">
    </div>
    <div class="field">
      <label>Kategori</label>
      <select id="fKategori">
        <option value="kopi">Kopi</option>
        <option value="non-kopi">Non-Kopi</option>
        <option value="makanan">Makanan</option>
        <option value="snack">Snack</option>
      </select>
    </div>
    <div class="field">
      <label>Harga (Rp)</label>
      <input type="number" id="fHarga" placeholder="0" min="0" step="500">
    </div>
    <div class="field">
      <label>Stok</label>
      <input type="number" id="fStok" placeholder="0" min="0">
    </div>
    <div class="field">
      <label>Deskripsi Singkat</label>
      <input type="text" id="fDesc" placeholder="Contoh: Espresso dengan susu steamed" maxlength="80">
    </div>
  </div>
  <div class="drawer-foot">
    <div class="df-buttons">
      <button class="btn-text" id="cancelProduk">Batal</button>
      <button class="btn-solid" id="saveProduk">
        <i class="fas fa-floppy-disk"></i> Simpan
      </button>
    </div>
  </div>
</aside>

<div class="toast" id="toast"><i class="fas fa-circle-check"></i> <span id="toastTxt"></span></div>

<script>
(function(){
  /* =========================================================
     DATA & STATE
  ========================================================= */
  const STORAGE_KEY = 'kopi_senja_v2';

  const defaultProduk = [
    { id:1, nama:'Espresso', harga:18000, kategori:'kopi', stok:50, desc:'Single shot, bold & pekat' },
    { id:2, nama:'Americano', harga:22000, kategori:'kopi', stok:45, desc:'Espresso + air panas, segar' },
    { id:3, nama:'Cappuccino', harga:28000, kategori:'kopi', stok:40, desc:'Espresso, susu steamed, foam tebal' },
    { id:4, nama:'Cafe Latte', harga:28000, kategori:'kopi', stok:38, desc:'Espresso dengan susu steamed lembut' },
    { id:5, nama:'Kopi Susu Senja', harga:25000, kategori:'kopi', stok:60, desc:'Signature, espresso + susu + gula aren' },
    { id:6, nama:'Es Kopi Aren', harga:26000, kategori:'kopi', stok:35, desc:'Dingin, gula aren, espresso kental' },
    { id:7, nama:'Matcha Latte', harga:30000, kategori:'non-kopi', stok:28, desc:'Matcha Jepang + susu creamy' },
    { id:8, nama:'Chocolate', harga:26000, kategori:'non-kopi', stok:32, desc:'Coklat pekat dengan susu hangat' },
    { id:9, nama:'Teh Melati', harga:15000, kategori:'non-kopi', stok:40, desc:'Teh wangi melati, diseduh segar' },
    { id:10, nama:'Lemon Tea', harga:18000, kategori:'non-kopi', stok:30, desc:'Teh dingin dengan perasan lemon' },
    { id:11, nama:'Nasi Goreng Senja', harga:32000, kategori:'makanan', stok:18, desc:'Nasi goreng kampung + telur ceplok' },
    { id:12, nama:'Mie Goreng Jawa', harga:28000, kategori:'makanan', stok:15, desc:'Mie goreng bumbu jawa, telur, ayam' },
    { id:13, nama:'Roti Bakar Srikaya', harga:20000, kategori:'snack', stok:22, desc:'Roti bakar + srikaya homemade' },
    { id:14, nama:'Pisang Goreng Madu', harga:18000, kategori:'snack', stok:20, desc:'Pisang goreng + madu + keju' },
    { id:15, nama:'Croissant Butter', harga:24000, kategori:'snack', stok:12, desc:'Croissant panggang, butter premium' }
  ];

  const CUSTOM_OPTIONS = {
    kopi: [
      { key:'suhu', label:'Suhu', options:[
        { v:'Panas', x:0, i:'fa-mug-hot' },
        { v:'Es', x:0, i:'fa-snowflake' }
      ]},
      { key:'gula', label:'Level Gula', options:[
        { v:'Normal', x:0 }, { v:'Less Sugar', x:0 }, { v:'No Sugar', x:0 }
      ]},
      { key:'ukuran', label:'Ukuran', options:[
        { v:'M', x:0, big:true },
        { v:'L', x:4000, big:true },
        { v:'XL', x:8000, big:true }
      ]},
      { key:'topping', label:'Topping', options:[
        { v:'Tanpa Topping', x:0 }, { v:'Extra Shot', x:8000 }, { v:'Whipped Cream', x:5000 }
      ]}
    ],
    'non-kopi': [
      { key:'suhu', label:'Suhu', options:[
        { v:'Panas', x:0, i:'fa-mug-hot' },
        { v:'Es', x:0, i:'fa-snowflake' }
      ]},
      { key:'gula', label:'Level Gula', options:[
        { v:'Normal', x:0 }, { v:'Less Sugar', x:0 }, { v:'No Sugar', x:0 }
      ]},
      { key:'ukuran', label:'Ukuran', options:[
        { v:'M', x:0, big:true },
        { v:'L', x:3000, big:true },
        { v:'XL', x:6000, big:true }
      ]}
    ],
    makanan: [
      { key:'pedas', label:'Level Pedas', options:[
        { v:'Tidak Pedas', x:0 }, { v:'Sedang', x:0 },
        { v:'Pedas', x:0 }, { v:'Extra Pedas', x:0 }
      ]},
      { key:'tambahan', label:'Tambahan', options:[
        { v:'Tanpa Tambahan', x:0 }, { v:'Extra Telur', x:5000 }, { v:'Extra Nasi', x:4000 }
      ]}
    ],
    snack: [
      { key:'saus', label:'Saus', options:[
        { v:'Original', x:0 }, { v:'Mayo', x:2000 }, { v:'Keju', x:4000 }
      ]}
    ]
  };

  let produkList, cart = [];
  let filterKat = 'semua', searchQ = '';
  let payMethod = 'Tunai';
  let pendingCustom = null;
  let lastReceipt = null;
  let orderCount = 0, revenue = 0;

  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    produkList = raw ? JSON.parse(raw) : JSON.parse(JSON.stringify(defaultProduk));
  } catch(e) { produkList = JSON.parse(JSON.stringify(defaultProduk)); }

  const save = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(produkList));

  /* =========================================================
     UTIL
  ========================================================= */
  const rp = n => 'Rp ' + Number(n).toLocaleString('id-ID');
  const iconByKat = { kopi:'fa-mug-hot','non-kopi':'fa-mug-saucer',makanan:'fa-utensils',snack:'fa-cookie-bite' };

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
     JAM REAL-TIME
  ========================================================= */
  function updateClock() {
    const d = new Date();
    const hh = String(d.getHours()).padStart(2,'0');
    const mm = String(d.getMinutes()).padStart(2,'0');
    const ss = String(d.getSeconds()).padStart(2,'0');
    document.getElementById('infoClock').textContent = hh + ':' + mm + ':' + ss + ' WIB';
  }
  setInterval(updateClock, 1000);
  updateClock();

  function updateHeaderStats() {
    document.getElementById('infoOrderCount').textContent = orderCount;
    document.getElementById('infoRevenue').textContent = rp(revenue);
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
    document.getElementById('infoUser').textContent = 'Dewi — Barista';
    renderMenu();
  });

  navAdmin.addEventListener('click', () => {
    navAdmin.classList.add('active');
    navKasir.classList.remove('active');
    pageAdmin.classList.add('active');
    pageKasir.classList.remove('active');
    document.getElementById('infoUser').textContent = 'Pak Andi — Manajer';
    renderKanban();
  });

  /* =========================================================
     RENDER MENU (list baris)
  ========================================================= */
  function renderMenu() {
    const list = document.getElementById('menuList');
    let data = produkList.slice();
    if (filterKat !== 'semua') data = data.filter(p => p.kategori === filterKat);
    if (searchQ.trim()) {
      const q = searchQ.toLowerCase();
      data = data.filter(p => p.nama.toLowerCase().includes(q) || (p.desc||'').toLowerCase().includes(q));
    }

    document.getElementById('menuCountLabel').textContent = data.length + ' item tersedia';

    if (data.length === 0) {
      list.innerHTML = '<div style="text-align:center; padding:50px 0; color:#8a6f54; font-size:0.9rem;"><i class="fas fa-mug-saucer" style="font-size:2.2rem; display:block; margin-bottom:12px; color:#d9c4a8;"></i>Menu tidak ditemukan</div>';
      return;
    }

    list.innerHTML = data.map(p => {
      const out = p.stok <= 0;
      const low = p.stok > 0 && p.stok <= 5;
      let stockTag = `<span class="menu-tag">Stok ${p.stok}</span>`;
      if (low) stockTag = `<span class="menu-tag stock-low">Stok menipis · ${p.stok}</span>`;
      if (out) stockTag = `<span class="menu-tag stock-out">Stok habis</span>`;

      // Tampilkan tag ukuran kalau kategori kopi / non-kopi
      const sizeTag = (p.kategori === 'kopi' || p.kategori === 'non-kopi')
        ? '<span class="menu-tag">M · L · XL</span>' : '';

      return `
        <div class="menu-row ${out ? 'out' : ''}" data-id="${p.id}">
          <div class="menu-thumb"><i class="fas ${iconByKat[p.kategori] || 'fa-mug-saucer'}"></i></div>
          <div class="menu-info">
            <h3>${p.nama}</h3>
            <p>${p.desc || 'Menu kafe'}</p>
            <div class="menu-tags">${stockTag}${sizeTag}</div>
          </div>
          <div class="menu-right">
            <div class="menu-price">${rp(p.harga)}</div>
            <button class="btn-add-menu" tabindex="-1"><i class="fas fa-plus"></i></button>
          </div>
        </div>
      `;
    }).join('');

    list.querySelectorAll('.menu-row').forEach(row => {
      if (row.classList.contains('out')) return;
      row.addEventListener('click', () => {
        const id = parseInt(row.dataset.id);
        openCustomDrawer(id);
      });
    });
  }

  /* =========================================================
     RENDER NOTA
  ========================================================= */
  function renderNota() {
    const box = document.getElementById('notaItems');
    if (cart.length === 0) {
      box.innerHTML = '<div class="nota-empty"><i class="fas fa-mug-saucer"></i>Nota masih kosong</div>';
    } else {
      box.innerHTML = cart.map((it, idx) => `
        <div class="nota-item">
          <div class="it-top">
            <span class="it-name">${it.nama}</span>
            <span class="it-price">${rp(it.harga * it.qty)}</span>
          </div>
          ${it.customText ? `<div class="it-custom">${it.customText}</div>` : ''}
          <div class="it-bottom">
            <div class="nota-qty">
              <button data-act="min" data-idx="${idx}"><i class="fas fa-minus"></i></button>
              <span>${it.qty}</span>
              <button data-act="plus" data-idx="${idx}"><i class="fas fa-plus"></i></button>
            </div>
            <button class="nota-del" data-act="del" data-idx="${idx}"><i class="fas fa-times"></i></button>
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
    const tax = Math.round(sub * 0.1);
    document.getElementById('subTxt').textContent = rp(sub);
    document.getElementById('taxTxt').textContent = rp(tax);
    document.getElementById('totalTxt').textContent = rp(sub + tax);
    document.getElementById('btnBayar').disabled = cart.length === 0;
  }

  function incItem(idx) {
    const it = cart[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (!p || it.qty >= p.stok) { toast(`Stok ${it.nama} tersisa ${p ? p.stok : 0}`, 'fa-circle-exclamation'); return; }
    it.qty++; p.stok--; save();
    renderMenu(); renderNota();
  }
  function decItem(idx) {
    const it = cart[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (it.qty <= 1) cart.splice(idx, 1); else it.qty--;
    if (p) p.stok++;
    save(); renderMenu(); renderNota();
  }
  function delItem(idx) {
    const it = cart[idx]; if (!it) return;
    const p = produkList.find(x => x.id === it.id);
    if (p) p.stok += it.qty;
    cart.splice(idx, 1);
    save(); renderMenu(); renderNota();
  }

  /* =========================================================
     SEARCH & TAB
  ========================================================= */
  document.getElementById('searchInput').addEventListener('input', e => {
    searchQ = e.target.value; renderMenu();
  });
  document.querySelectorAll('#katTabs .kat-tab').forEach(t => {
    t.addEventListener('click', () => {
      document.querySelectorAll('#katTabs .kat-tab').forEach(x => x.classList.remove('active'));
      t.classList.add('active');
      filterKat = t.dataset.kat;
      renderMenu();
    });
  });

  /* =========================================================
     DRAWER HELPERS
  ========================================================= */
  const drawerBg = document.getElementById('drawerBg');
  function openDrawer(id) {
    drawerBg.classList.add('show');
    document.getElementById(id).classList.add('show');
  }
  function closeDrawer(id) {
    document.getElementById(id).classList.remove('show');
    if (!document.querySelector('.drawer.show')) drawerBg.classList.remove('show');
  }
  drawerBg.addEventListener('click', () => {
    document.querySelectorAll('.drawer.show').forEach(d => d.classList.remove('show'));
    drawerBg.classList.remove('show');
  });

  /* =========================================================
     DRAWER: KUSTOMISASI
  ========================================================= */
  const drawerCustom = document.getElementById('drawerCustom');

  function openCustomDrawer(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (p.stok <= 0) { toast('Stok habis', 'fa-circle-exclamation'); return; }

    document.getElementById('customTitle').textContent = p.nama;
    document.getElementById('customPrice').textContent = rp(p.harga) + ' · stok ' + p.stok;

    const groups = CUSTOM_OPTIONS[p.kategori] || [];
    const body = document.getElementById('customBody');

    if (groups.length === 0) {
      body.innerHTML = '<p style="color:#8a6f54; font-size:0.88rem; text-align:center; padding:20px;">Menu ini tidak memiliki opsi kustomisasi.</p>';
    } else {
      body.innerHTML = groups.map(g => `
        <div class="custom-group" data-key="${g.key}">
          <label>${g.label}</label>
          <div class="opt-list">
            ${g.options.map((o, i) => `
              <button type="button" class="opt-chip ${i===0?'selected':''}"
                data-key="${g.key}" data-value="${o.v}" data-extra="${o.x}">
                ${o.i ? `<i class="fas ${o.i}"></i>` : ''}
                <span class="${o.big ? 'chip-size' : ''}">${o.v}</span>
                ${o.x > 0 ? `<span class="chip-price">+${(o.x/1000)}k</span>` : ''}
              </button>
            `).join('')}
          </div>
        </div>
      `).join('');
      body.querySelectorAll('.opt-chip').forEach(chip => {
        chip.addEventListener('click', () => {
          const key = chip.dataset.key;
          body.querySelectorAll(`.opt-chip[data-key="${key}"]`).forEach(c => c.classList.remove('selected'));
          chip.classList.add('selected');
          updateCustomTotal();
        });
      });
    }

    pendingCustom = { id, produk: p };
    updateCustomTotal();
    openDrawer('drawerCustom');
  }

  function computeCustom() {
    if (!pendingCustom) return { total:0, extra:0, text:'' };
    const p = pendingCustom.produk;
    const body = document.getElementById('customBody');
    const parts = [];
    let extra = 0;
    body.querySelectorAll('.custom-group').forEach(sec => {
      const active = sec.querySelector('.opt-chip.selected');
      if (!active) return;
      const val = active.dataset.value;
      const ex = parseInt(active.dataset.extra) || 0;
      extra += ex;
      // skip nilai default (yang tidak perlu ditulis)
      const skipDefaults = ['Normal','Tanpa Topping','Tanpa Tambahan','Tidak Pedas','Original'];
      // Ukuran M tidak perlu ditulis karena itu default, L & XL ditulis
      if (val === 'M') return;
      if (!skipDefaults.includes(val)) parts.push(val);
    });
    return { total: p.harga + extra, extra, text: parts.join(' · ') };
  }

  function updateCustomTotal() {
    const r = computeCustom();
    document.getElementById('customTotal').textContent = rp(r.total);
  }

  document.getElementById('closeCustom').addEventListener('click', () => closeDrawer('drawerCustom'));
  document.getElementById('cancelCustom').addEventListener('click', () => closeDrawer('drawerCustom'));

  document.getElementById('confirmCustom').addEventListener('click', () => {
    if (!pendingCustom) return;
    const r = computeCustom();
    const p = pendingCustom.produk;
    const existing = cart.find(it => it.id === p.id && it.customText === r.text);

    if (existing) {
      if (existing.qty >= p.stok) { toast(`Stok ${p.nama} tersisa ${p.stok}`, 'fa-circle-exclamation'); return; }
      existing.qty++;
    } else {
      cart.push({
        id: p.id, nama: p.nama, harga: r.total,
        qty: 1, customText: r.text, kategori: p.kategori
      });
    }
    p.stok--; save();
    renderMenu(); renderNota();
    closeDrawer('drawerCustom');
    pendingCustom = null;
    toast(`${p.nama} ditambahkan ke nota`, 'fa-cart-plus');
  });

  /* =========================================================
     DRAWER: PEMBAYARAN
  ========================================================= */
  const drawerPay = document.getElementById('drawerPay');

  document.getElementById('btnBayar').addEventListener('click', () => {
    if (cart.length === 0) return;
    const sub = cart.reduce((s, it) => s + it.harga * it.qty, 0);
    const total = sub + Math.round(sub * 0.1);
    document.getElementById('payTotalDisplay').textContent = rp(total);
    document.getElementById('cashInput').value = '';
    updateChange();
    openDrawer('drawerPay');
  });

  document.querySelectorAll('#payTabs .pay-tab').forEach(t => {
    t.addEventListener('click', () => {
      document.querySelectorAll('#payTabs .pay-tab').forEach(x => x.classList.remove('selected'));
      t.classList.add('selected');
      payMethod = t.dataset.method;
      document.getElementById('cashGroup').style.display = payMethod === 'Tunai' ? 'block' : 'none';
    });
  });

  function getTotal() {
    const sub = cart.reduce((s, it) => s + it.harga * it.qty, 0);
    return sub + Math.round(sub * 0.1);
  }

  function updateChange() {
    if (payMethod !== 'Tunai') return;
    const total = getTotal();
    const cash = parseInt(document.getElementById('cashInput').value) || 0;
    const box = document.getElementById('changeBox');
    const txt = document.getElementById('changeTxt');
    if (cash === 0) { txt.textContent = rp(0); box.style.color = '#7ac074'; return; }
    const diff = cash - total;
    if (diff < 0) { txt.textContent = '− ' + rp(Math.abs(diff)); box.style.color = '#c94f2b'; }
    else { txt.textContent = rp(diff); box.style.color = '#7ac074'; }
  }
  document.getElementById('cashInput').addEventListener('input', updateChange);

  document.getElementById('closePay').addEventListener('click', () => closeDrawer('drawerPay'));
  document.getElementById('cancelPay').addEventListener('click', () => closeDrawer('drawerPay'));

  document.getElementById('confirmPay').addEventListener('click', () => {
    const total = getTotal();
    if (payMethod === 'Tunai') {
      const cash = parseInt(document.getElementById('cashInput').value) || 0;
      if (cash < total) { toast('Uang diterima kurang dari total', 'fa-circle-exclamation'); return; }
    }
    finishPayment(total);
  });

  /* =========================================================
     SELESAI BAYAR & STRUK
  ========================================================= */
  function finishPayment(total) {
    const sub = cart.reduce((s, it) => s + it.harga * it.qty, 0);
    const tax = total - sub;
    const cash = parseInt(document.getElementById('cashInput').value) || 0;
    const change = payMethod === 'Tunai' ? cash - total : 0;
    const meja = document.getElementById('mejaSelect').value;

    const now = new Date();
    const receipt = {
      nomor: 'KS-' + now.getFullYear() +
             String(now.getMonth()+1).padStart(2,'0') +
             String(now.getDate()).padStart(2,'0') + '-' +
             String(Math.floor(Math.random()*9000)+1000),
      tanggal: now.toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' }),
      kasir: 'Dewi', meja,
      items: cart.map(it => ({ ...it })),
      sub, tax, total,
      metode: payMethod,
      cash: payMethod === 'Tunai' ? cash : total,
      change
    };
    lastReceipt = receipt;

    orderCount++;
    revenue += total;
    updateHeaderStats();

    closeDrawer('drawerPay');
    showReceipt(receipt);

    cart = [];
    renderNota(); renderMenu();
    toast('Transaksi selesai', 'fa-circle-check');
  }

  function showReceipt(r) {
    const itemsHtml = r.items.map(it => `
      <div class="s-item">
        <div class="s-line1"><span>${it.nama}</span><span>${rp(it.harga * it.qty)}</span></div>
        <div class="s-line2"><span>${it.qty} × ${rp(it.harga)}</span></div>
        ${it.customText ? `<div class="s-custom">${it.customText}</div>` : ''}
      </div>
    `).join('');

    document.getElementById('strukBody').innerHTML = `
      <div class="struk-paper">
        <div class="s-head">
          <h4>KOPI SENJA</h4>
          <p>Roastery & Kitchen<br>Jl. Cendana 45, Bandung · 022-7788990</p>
        </div>
        <div class="s-meta">
          No: <strong>${r.nomor}</strong><br>
          ${r.tanggal}<br>
          Kasir: ${r.kasir}<br>
          Order: <strong>${r.meja}</strong>
        </div>
        <div style="border-top:1px dashed #a89078; margin:10px 0;"></div>
        ${itemsHtml}
        <div class="s-total">
          <div class="s-row"><span>Subtotal</span><span>${rp(r.sub)}</span></div>
          <div class="s-row"><span>Pajak 10%</span><span>${rp(r.tax)}</span></div>
          <div class="s-grand"><span>TOTAL</span><span>${rp(r.total)}</span></div>
          <div class="s-row" style="margin-top:8px;"><span>Bayar (${r.metode})</span><span>${rp(r.cash)}</span></div>
          <div class="s-row"><span>Kembalian</span><span>${rp(r.change)}</span></div>
        </div>
        <div class="s-foot">Terima kasih telah berkunjung<br>Sampai jumpa lagi di Kopi Senja</div>
      </div>
    `;
    openDrawer('drawerStruk');
  }

  document.getElementById('closeStruk').addEventListener('click', () => closeDrawer('drawerStruk'));
  document.getElementById('btnNewOrder').addEventListener('click', () => closeDrawer('drawerStruk'));

  document.getElementById('btnCetak').addEventListener('click', () => {
    if (!lastReceipt) return;
    const w = window.open('', '', 'width=420,height=650');
    w.document.write('<pre style="font-family:Courier New,monospace; font-size:12px; padding:20px;">' +
      document.getElementById('strukBody').innerText + '</pre>');
    w.document.close(); w.focus(); w.print();
    toast('Struk dikirim ke printer', 'fa-print');
  });

  /* =========================================================
     KOSONGKAN NOTA
  ========================================================= */
  document.getElementById('btnClear').addEventListener('click', () => {
    if (cart.length === 0) return;
    if (!confirm('Kosongkan nota? Semua item dikembalikan ke stok.')) return;
    cart.forEach(it => {
      const p = produkList.find(x => x.id === it.id);
      if (p) p.stok += it.qty;
    });
    cart = [];
    save(); renderMenu(); renderNota();
    toast('Nota dikosongkan', 'fa-trash');
  });

  /* =========================================================
     ADMIN — KANBAN
  ========================================================= */
  function renderKanban() {
    const sTotal = produkList.length;
    const sStok = produkList.reduce((s, p) => s + p.stok, 0);
    const sLow = produkList.filter(p => p.stok > 0 && p.stok <= 5).length;
    const sNilai = produkList.reduce((s, p) => s + p.stok * p.harga, 0);

    document.getElementById('sTotal').textContent = sTotal;
    document.getElementById('sStok').textContent = sStok;
    document.getElementById('sLow').textContent = sLow;
    document.getElementById('sNilai').textContent = rp(sNilai);

    const cols = [
      { kat:'kopi', label:'Kopi', icon:'fa-mug-hot' },
      { kat:'non-kopi', label:'Non-Kopi', icon:'fa-mug-saucer' },
      { kat:'makanan', label:'Makanan', icon:'fa-utensils' },
      { kat:'snack', label:'Snack', icon:'fa-cookie-bite' }
    ];

    const board = document.getElementById('kanban');
    board.innerHTML = cols.map(c => {
      const items = produkList.filter(p => p.kategori === c.kat);
      return `
        <div class="kanban-col">
          <div class="col-head">
            <div class="col-title"><i class="fas ${c.icon}"></i> ${c.label}</div>
            <span class="col-count">${items.length}</span>
          </div>
          <div class="col-body">
            ${items.length === 0
              ? '<div style="text-align:center; padding:20px 0; color:#a89078; font-size:0.78rem; font-style:italic;">Kosong</div>'
              : items.map(p => {
                let dot = 'stok-dot', stokText = p.stok + ' unit';
                if (p.stok <= 0) { dot += ' out'; stokText = 'Habis'; }
                else if (p.stok <= 5) { dot += ' low'; }
                return `
                  <div class="kanban-card" data-id="${p.id}">
                    <div class="kc-head">
                      <div class="kc-name">${p.nama}</div>
                      <div class="kc-price">${rp(p.harga)}</div>
                    </div>
                    <div class="kc-foot">
                      <div class="stok-bar"><span class="${dot}"></span>${stokText}</div>
                      <div class="kc-actions">
                        <button class="kc-btn" data-act="edit" data-id="${p.id}" title="Edit"><i class="fas fa-pen"></i></button>
                        <button class="kc-btn danger" data-act="del" data-id="${p.id}" title="Hapus"><i class="fas fa-trash"></i></button>
                      </div>
                    </div>
                  </div>
                `;
              }).join('')
            }
          </div>
        </div>
      `;
    }).join('');

    board.querySelectorAll('.kc-btn').forEach(btn => {
      btn.addEventListener('click', e => {
        e.stopPropagation();
        const id = parseInt(btn.dataset.id);
        if (btn.dataset.act === 'edit') openFormProduk(id);
        else if (btn.dataset.act === 'del') hapusProduk(id);
      });
    });

    board.querySelectorAll('.kanban-card').forEach(card => {
      card.addEventListener('click', () => openFormProduk(parseInt(card.dataset.id)));
    });
  }

  /* =========================================================
     DRAWER FORM PRODUK
  ========================================================= */
  const drawerProduk = document.getElementById('drawerProduk');

  function openFormProduk(id) {
    const isEdit = id != null;
    document.getElementById('produkFormTitle').textContent = isEdit ? 'Edit Menu' : 'Tambah Menu';
    document.getElementById('editId').value = isEdit ? id : '';
    document.getElementById('fNama').value = '';
    document.getElementById('fKategori').value = 'kopi';
    document.getElementById('fHarga').value = '';
    document.getElementById('fStok').value = '';
    document.getElementById('fDesc').value = '';

    if (isEdit) {
      const p = produkList.find(x => x.id === id);
      if (p) {
        document.getElementById('fNama').value = p.nama;
        document.getElementById('fKategori').value = p.kategori;
        document.getElementById('fHarga').value = p.harga;
        document.getElementById('fStok').value = p.stok;
        document.getElementById('fDesc').value = p.desc || '';
      }
    }
    openDrawer('drawerProduk');
  }

  document.getElementById('btnTambahMenu').addEventListener('click', () => openFormProduk(null));
  document.getElementById('closeProduk').addEventListener('click', () => closeDrawer('drawerProduk'));
  document.getElementById('cancelProduk').addEventListener('click', () => closeDrawer('drawerProduk'));

  document.getElementById('saveProduk').addEventListener('click', () => {
    const editId = document.getElementById('editId').value;
    const nama = document.getElementById('fNama').value.trim();
    const kategori = document.getElementById('fKategori').value;
    const harga = parseInt(document.getElementById('fHarga').value);
    const stok = parseInt(document.getElementById('fStok').value);
    const desc = document.getElementById('fDesc').value.trim();

    if (!nama) return toast('Nama menu harus diisi', 'fa-circle-exclamation');
    if (isNaN(harga) || harga < 0) return toast('Harga tidak valid', 'fa-circle-exclamation');
    if (isNaN(stok) || stok < 0) return toast('Stok tidak valid', 'fa-circle-exclamation');

    if (editId) {
      const p = produkList.find(x => x.id === parseInt(editId));
      if (p) Object.assign(p, { nama, kategori, harga, stok, desc });
      toast('Menu diperbarui', 'fa-circle-check');
    } else {
      const newId = produkList.length ? Math.max(...produkList.map(p => p.id)) + 1 : 1;
      produkList.push({ id:newId, nama, kategori, harga, stok, desc });
      toast('Menu baru ditambahkan', 'fa-circle-check');
    }
    save();
    closeDrawer('drawerProduk');
    renderKanban();
    renderMenu();
  });

  function hapusProduk(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (!confirm(`Hapus menu "${p.nama}"?`)) return;
    produkList = produkList.filter(x => x.id !== id);
    save(); renderKanban(); renderMenu();
    toast('Menu dihapus', 'fa-trash');
  }

  /* =========================================================
     RESET DATA
  ========================================================= */
  document.getElementById('btnResetData').addEventListener('click', () => {
    if (!confirm('Reset semua data menu ke default? Data saat ini akan hilang.')) return;
    produkList = JSON.parse(JSON.stringify(defaultProduk));
    cart = [];
    save();
    renderKanban(); renderMenu(); renderNota();
    toast('Data direset ke default', 'fa-rotate');
  });

  /* =========================================================
     INIT
  ========================================================= */
  renderMenu();
  renderNota();
  updateHeaderStats();
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>