@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Cinema 21 — POS Tiket Bioskop</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;600;700&display=swap" rel="stylesheet">
<style>
* { margin:0; padding:0; box-sizing:border-box; -webkit-tap-highlight-color:transparent; }
body {
  font-family:'Inter',system-ui,sans-serif;
  background:#0a0a0a;
  color:#e8e8e8;
  min-height:100vh;
  font-size:14px;
}

:root {
  --hitam:#0a0a0a;
  --hitam-2:#141414;
  --hitam-3:#1c1c1c;
  --line:#2a2a2a;
  --line-2:#3a3a3a;
  --merah:#a01818;
  --merah-tua:#6b0f0f;
  --merah-muda:#d43030;
  --kuning:#f5d500;
  --kuning-tua:#c9a800;
  --abu:#7a7a7a;
  --abu-tua:#4a4a4a;
  --hijau:#4a9e5c;
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
  height:66px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  border-bottom:2px solid var(--merah);
  position:sticky;
  top:0;
  z-index:50;
}
.brand { display:flex; align-items:center; gap:14px; }
.brand-mark {
  width:42px; height:42px;
  background:var(--merah);
  color:var(--kuning);
  display:flex; align-items:center; justify-content:center;
  border-radius:6px;
  font-size:1.3rem;
  box-shadow:0 4px 12px -2px rgba(160,24,24,0.5);
}
.brand h1 {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.5rem;
  font-weight:400;
  letter-spacing:2px;
  color:var(--kuning);
  line-height:1;
}
.brand h1 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.6rem;
  font-weight:500;
  color:var(--abu);
  letter-spacing:2.5px;
  text-transform:uppercase;
  margin-top:5px;
}

.topbar-right { display:flex; align-items:center; gap:12px; }
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
  color:var(--abu);
  padding:8px 14px;
  border-radius:6px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.72rem;
  font-weight:600;
  display:flex; align-items:center; gap:6px;
  transition:all 0.15s;
}
.mode-nav button:hover { color:var(--kuning); }
.mode-nav button.active {
  background:var(--merah);
  color:var(--kuning);
}
.user-badge {
  display:flex; align-items:center; gap:8px;
}
.user-badge .avatar {
  width:34px; height:34px;
  background:var(--merah);
  color:var(--kuning);
  border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  font-family:'Bebas Neue',sans-serif;
  font-weight:400;
  font-size:1.05rem;
  letter-spacing:1px;
}

/* ==================== PAGE ==================== */
.page { display:none; flex:1; }
.page.active { display:flex; flex-direction:column; }

/* ==================== KASIR LAYOUT ==================== */
.kasir-grid {
  display:grid;
  grid-template-columns:1fr 400px;
  flex:1;
  min-height:0;
}

.col-utama {
  padding:20px 24px;
  overflow-y:auto;
  min-height:0;
}

/* ==================== STEP INDICATOR ==================== */
.step-bar {
  display:flex;
  align-items:center;
  gap:8px;
  margin-bottom:20px;
  padding:14px 18px;
  background:var(--hitam-3);
  border-radius:12px;
  overflow-x:auto;
}
.step-item {
  display:flex;
  align-items:center;
  gap:8px;
  padding:6px 12px;
  border-radius:8px;
  font-size:0.74rem;
  font-weight:600;
  color:var(--abu);
  white-space:nowrap;
  flex-shrink:0;
}
.step-item.active {
  background:var(--merah);
  color:var(--kuning);
}
.step-item.done {
  color:var(--hijau);
}
.step-item .num {
  width:20px; height:20px;
  border-radius:50%;
  background:var(--hitam);
  color:var(--abu);
  display:flex;
  align-items:center;
  justify-content:center;
  font-family:'Bebas Neue',sans-serif;
  font-size:0.85rem;
  letter-spacing:0.5px;
}
.step-item.active .num {
  background:var(--kuning);
  color:var(--merah-tua);
}
.step-item.done .num {
  background:var(--hijau);
  color:white;
}
.step-item .arrow {
  color:var(--abu-tua);
  font-size:0.7rem;
}

/* ==================== FILM SECTION ==================== */
.section-title {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.5rem;
  font-weight:400;
  letter-spacing:2px;
  color:var(--kuning);
  margin-bottom:14px;
  display:flex;
  align-items:center;
  gap:10px;
}
.section-title i { color:var(--merah-muda); font-size:1.2rem; }

.film-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(200px,1fr));
  gap:14px;
  margin-bottom:22px;
}
.film-card {
  background:linear-gradient(180deg, #1c1c1c 0%, #141414 100%);
  border:1.5px solid var(--line-2);
  border-radius:12px;
  overflow:hidden;
  cursor:pointer;
  transition:all 0.2s;
}
.film-card:hover {
  border-color:var(--merah);
  transform:translateY(-3px);
  box-shadow:0 12px 24px -10px rgba(160,24,24,0.5);
}
.film-card.selected {
  border-color:var(--kuning);
  box-shadow:0 0 0 2px var(--kuning);
}
.film-poster {
  height:140px;
  background:linear-gradient(135deg, var(--merah-tua) 0%, var(--hitam) 100%);
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:3rem;
  color:var(--kuning);
  position:relative;
  overflow:hidden;
}
.film-poster::after {
  content:'';
  position:absolute;
  inset:0;
  background:repeating-linear-gradient(
    45deg,
    transparent 0 20px,
    rgba(245,213,0,0.06) 20px 40px
  );
}
.film-info {
  padding:12px 14px;
}
.film-title {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.05rem;
  letter-spacing:1.5px;
  color:var(--kuning);
  margin-bottom:4px;
  line-height:1.1;
}
.film-meta {
  font-size:0.7rem;
  color:var(--abu);
  display:flex;
  gap:8px;
  flex-wrap:wrap;
}
.film-meta .rating {
  background:var(--merah);
  color:var(--kuning);
  padding:2px 6px;
  border-radius:3px;
  font-weight:700;
  font-size:0.65rem;
  letter-spacing:0.5px;
}

/* ==================== JADWAL ==================== */
.jadwal-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(140px,1fr));
  gap:10px;
  margin-bottom:22px;
}
.jadwal-btn {
  background:linear-gradient(180deg, #1c1c1c 0%, #141414 100%);
  border:1.5px solid var(--line-2);
  padding:14px 12px;
  border-radius:10px;
  cursor:pointer;
  text-align:center;
  transition:all 0.15s;
}
.jadwal-btn:hover {
  border-color:var(--merah);
}
.jadwal-btn.selected {
  background:var(--merah);
  border-color:var(--kuning);
}
.jadwal-btn .jam {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.5rem;
  letter-spacing:2px;
  color:var(--kuning);
  margin-bottom:3px;
}
.jadwal-btn .studio {
  font-size:0.7rem;
  color:var(--abu);
  letter-spacing:0.5px;
}
.jadwal-btn.selected .studio { color:var(--kuning); }
.jadwal-btn .harga-start {
  font-size:0.68rem;
  color:var(--abu);
  margin-top:6px;
  padding-top:6px;
  border-top:1px dashed var(--line-2);
}
.jadwal-btn.selected .harga-start { color:var(--kuning); border-color:rgba(245,213,0,0.3); }

/* ==================== DENAH STUDIO ==================== */
.studio-wrap {
  background:linear-gradient(180deg, #1c1c1c 0%, #0f0f0f 100%);
  border:1.5px solid var(--line-2);
  border-radius:14px;
  padding:24px 20px;
  margin-bottom:20px;
  overflow-x:auto;
}
.screen {
  background:linear-gradient(180deg, var(--merah-muda) 0%, var(--merah) 100%);
  height:8px;
  border-radius:20px;
  margin:0 auto 8px;
  max-width:70%;
  box-shadow:0 0 30px -5px rgba(212,48,48,0.6);
}
.screen-label {
  text-align:center;
  font-family:'Bebas Neue',sans-serif;
  font-size:0.7rem;
  letter-spacing:4px;
  color:var(--abu);
  margin-bottom:24px;
}

.seat-map {
  display:flex;
  flex-direction:column;
  gap:8px;
  align-items:center;
  min-width:fit-content;
}
.seat-row {
  display:flex;
  align-items:center;
  gap:8px;
}
.seat-row-label {
  font-family:'Bebas Neue',sans-serif;
  font-size:0.9rem;
  letter-spacing:1.5px;
  color:var(--abu);
  width:24px;
  text-align:center;
  flex-shrink:0;
}
.seat-grid {
  display:flex;
  gap:6px;
}
.seat-aisle { width:20px; }

.seat {
  width:28px;
  height:28px;
  border-radius:6px;
  cursor:pointer;
  transition:all 0.15s;
  border:1.5px solid var(--line-2);
  background:var(--hitam-3);
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:0.6rem;
  color:var(--abu);
  font-family:'JetBrains Mono',monospace;
  font-weight:700;
}
.seat:hover:not(.occupied) {
  border-color:var(--kuning);
  transform:scale(1.1);
}
.seat.available { background:#2a2a2a; }
.seat.vip {
  background:#3a2a0a;
  border-color:#5a4010;
  color:#d9a715;
}
.seat.couple {
  background:#3a0a18;
  border-color:#5a1020;
  color:#d43070;
  width:28px;
}
.seat.occupied {
  background:#0a0a0a;
  border-color:#1a1a1a;
  cursor:not-allowed;
  color:#3a3a3a;
}
.seat.selected {
  background:var(--kuning);
  border-color:var(--kuning);
  color:var(--hitam);
  transform:scale(1.1);
  box-shadow:0 0 12px rgba(245,213,0,0.6);
}

.seat-legend {
  display:flex;
  gap:18px;
  justify-content:center;
  margin-top:24px;
  padding-top:18px;
  border-top:1px dashed var(--line-2);
  flex-wrap:wrap;
}
.legend-item {
  display:flex;
  align-items:center;
  gap:8px;
  font-size:0.72rem;
  color:var(--abu);
  letter-spacing:0.5px;
}
.legend-box {
  width:18px;
  height:18px;
  border-radius:4px;
  border:1.5px solid var(--line-2);
}
.legend-box.available { background:#2a2a2a; }
.legend-box.vip { background:#3a2a0a; border-color:#5a4010; }
.legend-box.couple { background:#3a0a18; border-color:#5a1020; }
.legend-box.occupied { background:#0a0a0a; border-color:#1a1a1a; }
.legend-box.selected { background:var(--kuning); border-color:var(--kuning); }

/* ==================== SNACK BAR ==================== */
.snack-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(160px,1fr));
  gap:10px;
  margin-bottom:20px;
}
.snack-card {
  background:linear-gradient(180deg, #1c1c1c 0%, #141414 100%);
  border:1.5px solid var(--line-2);
  border-radius:10px;
  padding:14px 12px;
  cursor:pointer;
  transition:all 0.15s;
  display:flex;
  flex-direction:column;
  align-items:center;
  gap:8px;
  text-align:center;
}
.snack-card:hover {
  border-color:var(--merah);
}
.snack-card .s-icon {
  width:44px; height:44px;
  background:var(--merah-tua);
  color:var(--kuning);
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:1.2rem;
}
.snack-card .s-nama {
  font-family:'Bebas Neue',sans-serif;
  font-size:0.9rem;
  letter-spacing:1.2px;
  color:var(--kuning);
  line-height:1.1;
}
.snack-card .s-harga {
  font-family:'JetBrains Mono',monospace;
  font-size:0.85rem;
  font-weight:700;
  color:#e8e8e8;
}

/* ==================== KERANJANG ==================== */
.col-keranjang {
  background:var(--hitam);
  border-left:2px solid var(--merah);
  display:flex;
  flex-direction:column;
  min-height:0;
}
.keranjang-head {
  background:linear-gradient(135deg, var(--merah-tua) 0%, var(--merah) 100%);
  padding:18px 22px;
  border-bottom:2px solid var(--kuning);
}
.keranjang-head h3 {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.3rem;
  letter-spacing:2px;
  color:var(--kuning);
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:8px;
}
.keranjang-head h3 i { color:var(--kuning); }
.keranjang-head .info {
  font-size:0.72rem;
  color:rgba(245,213,0,0.85);
  margin-top:6px;
  display:flex;
  align-items:center;
  gap:8px;
}
.keranjang-head .info i { color:var(--kuning); font-size:0.68rem; }

.keranjang-body {
  flex:1;
  overflow-y:auto;
  padding:14px 18px;
  min-height:0;
}
.keranjang-empty {
  text-align:center;
  padding:50px 20px;
  color:var(--abu);
}
.keranjang-empty i {
  font-size:2.5rem;
  display:block;
  margin-bottom:14px;
  color:var(--line-2);
}
.keranjang-empty strong {
  display:block;
  color:var(--abu);
  font-size:0.95rem;
  margin-bottom:5px;
  font-family:'Bebas Neue',sans-serif;
  letter-spacing:1.5px;
  font-weight:400;
}

/* Section header keranjang */
.krj-section {
  font-family:'Bebas Neue',sans-serif;
  font-size:0.85rem;
  letter-spacing:2px;
  color:var(--kuning);
  padding:10px 0 8px;
  border-bottom:1px dashed var(--line-2);
  margin-bottom:8px;
  display:flex;
  align-items:center;
  gap:8px;
}
.krj-section:not(:first-child) { margin-top:16px; }
.krj-section i { color:var(--merah-muda); }

.krj-item {
  padding:11px 0;
  border-bottom:1px dashed var(--line);
}
.krj-item:last-child { border-bottom:none; }
.krj-top {
  display:flex;
  justify-content:space-between;
  gap:10px;
  margin-bottom:4px;
}
.krj-nama {
  font-size:0.86rem;
  font-weight:600;
  color:var(--kuning);
  line-height:1.25;
}
.krj-harga {
  font-family:'JetBrains Mono',monospace;
  font-weight:700;
  color:#e8e8e8;
  white-space:nowrap;
  font-size:0.86rem;
}
.krj-detail {
  font-size:0.7rem;
  color:var(--abu);
  margin-bottom:8px;
  letter-spacing:0.3px;
}
.krj-detail strong { color:var(--kuning); }
.krj-actions {
  display:flex;
  justify-content:space-between;
  align-items:center;
}
.krj-qty {
  display:flex; align-items:center; gap:0;
  border:1.5px solid var(--line-2);
  border-radius:6px;
  overflow:hidden;
}
.krj-qty button {
  background:var(--hitam-3);
  border:none;
  width:26px; height:26px;
  color:var(--kuning);
  cursor:pointer;
  font-size:0.72rem;
  font-weight:700;
}
.krj-qty button:hover { background:var(--merah); color:var(--kuning); }
.krj-qty span {
  padding:0 10px;
  font-size:0.82rem;
  font-weight:700;
  min-width:28px;
  text-align:center;
  line-height:26px;
  color:#e8e8e8;
}
.krj-del {
  background:transparent;
  border:none;
  color:var(--abu-tua);
  cursor:pointer;
  font-size:0.72rem;
  padding:4px 8px;
}
.krj-del:hover { color:var(--merah-muda); }

.keranjang-foot {
  background:var(--hitam-3);
  border-top:2px solid var(--merah);
  padding:16px 20px;
}
.kf-row {
  display:flex;
  justify-content:space-between;
  font-size:0.8rem;
  color:var(--abu);
  margin-bottom:6px;
}
.kf-row .val {
  font-family:'JetBrains Mono',monospace;
  font-weight:600;
  color:#e8e8e8;
}
.kf-row.grand {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.6rem;
  font-weight:400;
  letter-spacing:1.5px;
  color:var(--kuning);
  padding-top:12px;
  margin-top:10px;
  border-top:1px dashed var(--line-2);
  margin-bottom:14px;
  display:flex;
  justify-content:space-between;
}
.btn-proses {
  width:100%;
  background:var(--merah);
  color:var(--kuning);
  border:none;
  padding:15px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Bebas Neue',sans-serif;
  font-size:1.1rem;
  letter-spacing:3px;
  display:flex;
  align-items:center;
  justify-content:center;
  gap:10px;
  transition:all 0.15s;
}
.btn-proses:hover {
  background:var(--merah-muda);
  box-shadow:0 6px 20px -4px rgba(212,48,48,0.6);
}
.btn-proses:disabled {
  background:var(--line-2);
  color:var(--abu-tua);
  cursor:not-allowed;
  box-shadow:none;
}

/* ==================== MODAL ==================== */
.modal-bg {
  position:fixed;
  inset:0;
  background:rgba(0,0,0,0.9);
  backdrop-filter:blur(6px);
  display:none;
  align-items:center;
  justify-content:center;
  z-index:100;
  padding:16px;
}
.modal-bg.show { display:flex; }
.modal {
  background:linear-gradient(180deg, #1a1a1a 0%, #0f0f0f 100%);
  border:2px solid var(--merah);
  border-radius:14px;
  width:100%;
  max-width:540px;
  max-height:92vh;
  overflow-y:auto;
  box-shadow:0 25px 60px -15px rgba(160,24,24,0.4);
}
.modal-head {
  padding:24px 26px 18px;
  border-bottom:1px solid var(--line);
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
}
.modal-head .kicker {
  font-family:'Bebas Neue',sans-serif;
  font-size:0.75rem;
  letter-spacing:3px;
  color:var(--merah-muda);
  margin-bottom:6px;
}
.modal-head h3 {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.6rem;
  letter-spacing:2px;
  color:var(--kuning);
  display:flex; align-items:center; gap:10px;
  padding-right:30px;
  line-height:1;
}
.modal-head h3 i { color:var(--merah-muda); font-size:1.3rem; }
.modal-head .sub {
  font-size:0.76rem;
  color:var(--abu);
  margin-top:6px;
}
.modal-close {
  background:transparent;
  border:1.5px solid var(--line-2);
  width:34px; height:34px;
  border-radius:50%;
  color:var(--abu);
  cursor:pointer;
}
.modal-close:hover {
  background:var(--merah);
  color:var(--kuning);
  border-color:var(--merah);
}
.modal-body { padding:22px 26px; }
.modal-foot {
  padding:18px 26px 22px;
  border-top:1px solid var(--line);
  background:var(--hitam);
  display:flex;
  gap:10px;
  border-radius:0 0 14px 14px;
}
.btn-outline {
  background:transparent;
  border:1.5px solid var(--line-2);
  color:var(--abu);
  padding:13px 20px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Inter',sans-serif;
  font-size:0.82rem;
  font-weight:600;
  display:flex; align-items:center; gap:8px; justify-content:center;
  transition:all 0.15s;
}
.btn-outline:hover {
  border-color:var(--merah);
  color:var(--kuning);
}
.btn-solid {
  background:var(--merah);
  border:none;
  color:var(--kuning);
  padding:13px 20px;
  border-radius:8px;
  cursor:pointer;
  font-family:'Bebas Neue',sans-serif;
  font-size:1rem;
  letter-spacing:2px;
  display:flex; align-items:center; gap:8px; justify-content:center;
  flex:2;
  transition:all 0.15s;
}
.btn-solid:hover { background:var(--merah-muda); }
.modal-foot .btn-outline { flex:1; }

/* ==================== FORM ==================== */
.field { margin-bottom:14px; }
.field label {
  display:block;
  font-size:0.68rem;
  font-weight:700;
  color:var(--kuning);
  text-transform:uppercase;
  letter-spacing:1.2px;
  margin-bottom:6px;
}
.field input,
.field select,
.field textarea {
  width:100%;
  padding:11px 14px;
  background:var(--hitam);
  border:1.5px solid var(--line-2);
  border-radius:8px;
  outline:none;
  font-family:'Inter',sans-serif;
  font-size:0.88rem;
  color:#e8e8e8;
  transition:border-color 0.15s;
}
.field input:focus,
.field select:focus,
.field textarea:focus {
  border-color:var(--merah);
  box-shadow:0 0 0 3px rgba(160,24,24,0.2);
}
.field input::placeholder { color:var(--abu-tua); }

/* ==================== STRUK TIKET ==================== */
.tiket {
  background:linear-gradient(180deg, #1a1a1a 0%, #0a0a0a 100%);
  border:2px solid var(--kuning);
  border-radius:8px;
  padding:22px 20px;
  color:#e8e8e8;
  position:relative;
  overflow:hidden;
  font-size:0.78rem;
}
.tiket::before {
  content:'';
  position:absolute;
  left:-10px; top:50%;
  width:20px; height:20px;
  border-radius:50%;
  background:var(--hitam);
}
.tiket::after {
  content:'';
  position:absolute;
  right:-10px; top:50%;
  width:20px; height:20px;
  border-radius:50%;
  background:var(--hitam);
}
.tiket-dashed {
  border-top:2px dashed var(--line-2);
  margin:14px -20px;
  position:relative;
}
.tiket-head {
  text-align:center;
  padding-bottom:16px;
  border-bottom:2px dashed var(--line-2);
  margin-bottom:16px;
}
.tiket-head .logo {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.7rem;
  letter-spacing:4px;
  color:var(--kuning);
  margin-bottom:4px;
}
.tiket-head .sub {
  font-size:0.68rem;
  color:var(--abu);
  letter-spacing:2px;
  text-transform:uppercase;
}
.tiket-film {
  background:var(--merah-tua);
  border-radius:6px;
  padding:14px;
  text-align:center;
  margin-bottom:14px;
}
.tiket-film h4 {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.3rem;
  letter-spacing:2px;
  color:var(--kuning);
  margin-bottom:4px;
}
.tiket-film .meta {
  font-size:0.7rem;
  color:rgba(245,213,0,0.75);
  letter-spacing:1px;
}
.tiket-info {
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:8px 16px;
  padding:14px;
  background:var(--hitam-3);
  border-radius:8px;
  margin-bottom:14px;
  font-size:0.74rem;
}
.tiket-info .item {
  display:flex;
  gap:8px;
}
.tiket-info .lbl {
  color:var(--abu);
  min-width:70px;
  font-size:0.68rem;
  text-transform:uppercase;
  letter-spacing:0.5px;
}
.tiket-info .val {
  color:var(--kuning);
  font-weight:600;
  font-family:'JetBrains Mono',monospace;
}

.tiket-seats {
  background:var(--hitam-3);
  border-radius:8px;
  padding:12px 14px;
  margin-bottom:14px;
}
.tiket-seats .lbl {
  font-size:0.68rem;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:1px;
  margin-bottom:8px;
}
.tiket-seats .list {
  display:flex;
  flex-wrap:wrap;
  gap:6px;
}
.tiket-seats .seat-pill {
  background:var(--kuning);
  color:var(--merah-tua);
  font-family:'Bebas Neue',sans-serif;
  font-size:1rem;
  letter-spacing:1.5px;
  padding:6px 12px;
  border-radius:6px;
  font-weight:400;
}

.tiket-qr {
  background:white;
  padding:14px;
  border-radius:8px;
  margin:16px auto;
  width:fit-content;
  display:flex;
  flex-direction:column;
  align-items:center;
  gap:6px;
}
.tiket-qr .qr-box {
  width:110px; height:110px;
  background:#0a0a0a;
  color:white;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:3rem;
  border-radius:4px;
}
.tiket-qr .qr-label {
  font-family:'JetBrains Mono',monospace;
  font-size:0.62rem;
  color:#0a0a0a;
  font-weight:700;
  letter-spacing:1px;
  text-align:center;
}

.tiket-total {
  border-top:2px dashed var(--line-2);
  padding-top:14px;
  margin-top:14px;
}
.tiket-total .row {
  display:flex;
  justify-content:space-between;
  font-size:0.76rem;
  margin-bottom:5px;
  color:var(--abu);
}
.tiket-total .row.grand {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.4rem;
  font-weight:400;
  letter-spacing:2px;
  color:var(--kuning);
  padding-top:10px;
  margin-top:8px;
  border-top:1px dashed var(--line-2);
}

.tiket-foot {
  text-align:center;
  padding-top:14px;
  margin-top:14px;
  border-top:2px dashed var(--line-2);
  font-size:0.68rem;
  color:var(--abu);
  line-height:1.7;
}
.tiket-foot .thank {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.05rem;
  letter-spacing:3px;
  color:var(--kuning);
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
  border-bottom:2px solid var(--merah);
}
.admin-head h2 {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.7rem;
  letter-spacing:2px;
  color:var(--kuning);
}
.admin-head h2 small {
  display:block;
  font-family:'Inter',sans-serif;
  font-size:0.7rem;
  font-weight:500;
  color:var(--abu);
  letter-spacing:1.5px;
  text-transform:uppercase;
  margin-top:6px;
}
.admin-actions { display:flex; gap:10px; }

.stats-row {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:12px;
  margin-bottom:20px;
}
.stat-card {
  background:linear-gradient(180deg, #1c1c1c 0%, #141414 100%);
  border:1.5px solid var(--line-2);
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
  background:var(--merah);
}
.stat-card.kuning::before { background:var(--kuning); }
.stat-card.hijau::before { background:var(--hijau); }
.stat-card .lbl {
  font-size:0.66rem;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:1.2px;
  font-weight:600;
  margin-bottom:8px;
}
.stat-card .val {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.7rem;
  letter-spacing:1.5px;
  color:var(--kuning);
  line-height:1;
}
.stat-card .val.rp {
  font-family:'JetBrains Mono',monospace;
  font-size:1.15rem;
  letter-spacing:0;
  font-weight:700;
}
.stat-card .sub {
  font-size:0.66rem;
  color:var(--abu);
  margin-top:5px;
}

.admin-section {
  background:linear-gradient(180deg, #1a1a1a 0%, #0f0f0f 100%);
  border:1.5px solid var(--line-2);
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
  font-family:'Bebas Neue',sans-serif;
  font-size:1.1rem;
  letter-spacing:2px;
  color:var(--kuning);
}
.section-head i { color:var(--merah-muda); }
.section-head .spacer { flex:1; }
.section-head .hint {
  font-family:'Inter',sans-serif;
  font-size:0.7rem;
  color:var(--abu);
  letter-spacing:0;
}

.film-admin-grid {
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(260px,1fr));
  gap:12px;
  padding:18px 20px;
}
.film-admin-card {
  background:var(--hitam);
  border:1.5px solid var(--line-2);
  border-radius:10px;
  padding:14px 16px;
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
  gap:10px;
}
.film-admin-card .info { flex:1; min-width:0; }
.film-admin-card .title {
  font-family:'Bebas Neue',sans-serif;
  font-size:1.05rem;
  letter-spacing:1.5px;
  color:var(--kuning);
  margin-bottom:4px;
  line-height:1.1;
}
.film-admin-card .meta {
  font-size:0.7rem;
  color:var(--abu);
  display:flex;
  gap:8px;
  flex-wrap:wrap;
  margin-bottom:6px;
}
.film-admin-card .meta .rating-badge {
  background:var(--merah);
  color:var(--kuning);
  padding:1px 6px;
  border-radius:3px;
  font-weight:700;
  font-size:0.62rem;
}
.film-admin-card .jadwal-count {
  font-family:'JetBrains Mono',monospace;
  font-size:0.72rem;
  color:var(--hijau);
  margin-top:4px;
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
  background:var(--hitam);
  font-size:0.66rem;
  font-weight:700;
  color:var(--abu);
  text-transform:uppercase;
  letter-spacing:1px;
  border-bottom:1px solid var(--line-2);
}
.riwayat-table td {
  padding:13px 16px;
  border-bottom:1px solid var(--line);
  color:#e8e8e8;
}
.riwayat-table tr:last-child td { border-bottom:none; }
.riwayat-table tr:hover { background:var(--hitam-3); }
.rt-num {
  font-family:'JetBrains Mono',monospace;
  font-weight:700;
  color:var(--kuning);
  font-size:0.78rem;
}
.rt-film {
  font-family:'Bebas Neue',sans-serif;
  font-size:0.95rem;
  letter-spacing:1px;
  color:var(--kuning);
}
.rt-seats {
  font-family:'JetBrains Mono',monospace;
  font-size:0.72rem;
  color:var(--merah-muda);
  font-weight:700;
}

/* ==================== TOAST ==================== */
.toast {
  position:fixed;
  bottom:24px; left:50%;
  transform:translateX(-50%) translateY(80px);
  background:var(--merah);
  color:var(--kuning);
  padding:13px 24px;
  border-radius:40px;
  font-family:'Bebas Neue',sans-serif;
  font-size:1rem;
  letter-spacing:2px;
  display:flex;
  align-items:center;
  gap:10px;
  opacity:0;
  transition:all 0.3s;
  z-index:200;
  box-shadow:0 10px 30px -8px rgba(160,24,24,0.6);
  max-width:90vw;
}
.toast.show {
  opacity:1;
  transform:translateX(-50%) translateY(0);
}

/* ==================== SCROLLBAR ==================== */
::-webkit-scrollbar { width:6px; height:6px; }
::-webkit-scrollbar-track { background:transparent; }
::-webkit-scrollbar-thumb { background:var(--line-2); border-radius:10px; }
::-webkit-scrollbar-thumb:hover { background:var(--merah); }

/* ==================== RESPONSIVE ==================== */
@media (max-width: 1100px) {
  .kasir-grid { grid-template-columns:1fr 340px; }
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
  .brand-mark { width:36px; height:36px; font-size:1.1rem; }
  .brand h1 { font-size:1.2rem; letter-spacing:1.5px; }
  .brand h1 small { font-size:0.55rem; letter-spacing:1.5px; }
  .mode-nav button span { display:none; }
  .mode-nav button { padding:7px 10px; }
  .user-badge .avatar { width:30px; height:30px; font-size:0.9rem; }

  .kasir-grid { grid-template-columns:1fr; padding-bottom:80px; }
  .col-utama { padding:14px 14px 100px; }

  .step-bar { padding:10px 12px; gap:6px; }
  .step-item { font-size:0.68rem; padding:5px 9px; }
  .step-item .num { width:18px; height:18px; font-size:0.75rem; }

  .section-title { font-size:1.2rem; letter-spacing:1.5px; }

  .film-grid { grid-template-columns:repeat(2,1fr); gap:10px; }
  .film-poster { height:110px; font-size:2.2rem; }
  .film-title { font-size:0.9rem; letter-spacing:1px; }

  .jadwal-grid { grid-template-columns:repeat(2,1fr); gap:8px; }
  .jadwal-btn { padding:10px 8px; }
  .jadwal-btn .jam { font-size:1.2rem; }

  .studio-wrap { padding:16px 12px; }
  .seat {
    width:24px;
    height:24px;
    font-size:0.55rem;
  }
  .seat-row-label { width:20px; font-size:0.8rem; }
  .seat-grid { gap:4px; }
  .seat-row { gap:6px; }

  .snack-grid { grid-template-columns:repeat(2,1fr); gap:8px; }

  .col-keranjang {
    position:fixed;
    bottom:0; left:0; right:0;
    max-height:80vh;
    border-left:none;
    border-top:2px solid var(--merah);
    border-radius:20px 20px 0 0;
    transform:translateY(calc(100% - 74px));
    transition:transform 0.3s ease-out;
    z-index:60;
    box-shadow:0 -10px 30px -10px rgba(0,0,0,0.3);
    overflow:hidden;
  }
  .col-keranjang.expanded {
    transform:translateY(0);
    box-shadow:0 -15px 40px -10px rgba(0,0,0,0.5);
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
    background:rgba(245,213,0,0.4);
    border-radius:2px;
  }
  .keranjang-head h3 { font-size:1.1rem; }
  .keranjang-body { max-height:calc(80vh - 210px); }
  .toggle-arrow { display:flex; transition:transform 0.3s; }
  .col-keranjang.expanded .toggle-arrow { transform:rotate(180deg); }

  .admin-wrap { padding:16px 14px; }
  .admin-head { flex-direction:column; align-items:stretch; }
  .admin-head h2 { font-size:1.4rem; }
  .admin-actions { flex-wrap:wrap; }
  .admin-actions button { flex:1; min-width:130px; justify-content:center; }
  .stats-row { grid-template-columns:1fr 1fr; gap:10px; }
  .stat-card { padding:13px 14px; }
  .stat-card .val { font-size:1.3rem; }
  .stat-card .val.rp { font-size:0.95rem; }
  .film-admin-grid { grid-template-columns:1fr; padding:14px; }
  .riwayat-table th, .riwayat-table td { padding:10px 12px; font-size:0.74rem; }
  .riwayat-table th:nth-child(3), .riwayat-table td:nth-child(3) { display:none; }

  .modal { border-radius:14px 14px 0 0; }
  .modal-bg { align-items:flex-end; padding:0; }
  .modal-head { padding:20px 20px 14px; }
  .modal-body { padding:20px; }
  .modal-foot { padding:14px 20px 20px; flex-direction:column-reverse; }
  .modal-foot button { width:100%; justify-content:center; padding:14px; }

  .tiket-info { grid-template-columns:1fr; gap:6px; }
}

.toggle-arrow { display:none; }
</style>
</head>
<body>

<div class="app">

<!-- ==================== HEADER ==================== -->
<header class="topbar">
  <div class="brand">
    <div class="brand-mark"><i class="fas fa-film"></i></div>
    <h1>Cinema 21<small>Tiket Bioskop & Snack Bar</small></h1>
  </div>
  <div class="topbar-right">
    <nav class="mode-nav">
      <button id="navKasir" class="active">
        <i class="fas fa-ticket"></i> <span>Kasir</span>
      </button>
      <button id="navAdmin">
        <i class="fas fa-chart-simple"></i> <span>Admin</span>
      </button>
    </nav>
    <div class="user-badge">
      <div class="avatar" id="avatarInit">R</div>
    </div>
  </div>
</header>

<!-- ==================== PAGE KASIR ==================== -->
<div class="page active" id="pageKasir">
  <div class="kasir-grid">

    <section class="col-utama">

      <!-- Step indicator -->
      <div class="step-bar" id="stepBar">
        <div class="step-item active" data-step="1">
          <span class="num">1</span> Pilih Film
          <span class="arrow"><i class="fas fa-chevron-right"></i></span>
        </div>
        <div class="step-item" data-step="2">
          <span class="num">2</span> Pilih Jadwal
          <span class="arrow"><i class="fas fa-chevron-right"></i></span>
        </div>
        <div class="step-item" data-step="3">
          <span class="num">3</span> Pilih Kursi
        </div>
      </div>

      <!-- Film grid -->
      <div id="stepFilm">
        <div class="section-title"><i class="fas fa-film"></i> Film Sedang Tayang</div>
        <div class="film-grid" id="filmGrid"></div>
      </div>

      <!-- Jadwal -->
      <div id="stepJadwal" style="display:none;">
        <div class="section-title"><i class="fas fa-clock"></i> Pilih Jadwal Tayang</div>
        <div class="jadwal-grid" id="jadwalGrid"></div>
      </div>

      <!-- Denah kursi -->
      <div id="stepKursi" style="display:none;">
        <div class="section-title"><i class="fas fa-couch"></i> Pilih Kursi</div>
        <div class="studio-wrap">
          <div class="screen"></div>
          <div class="screen-label">L A Y A R</div>
          <div class="seat-map" id="seatMap"></div>
          <div class="seat-legend">
            <div class="legend-item"><div class="legend-box available"></div> Reguler</div>
            <div class="legend-item"><div class="legend-box vip"></div> VIP</div>
            <div class="legend-item"><div class="legend-box couple"></div> Couple</div>
            <div class="legend-item"><div class="legend-box occupied"></div> Terisi</div>
            <div class="legend-item"><div class="legend-box selected"></div> Dipilih</div>
          </div>
        </div>
      </div>

      <!-- Snack bar -->
      <div id="stepSnack" style="display:none;">
        <div class="section-title"><i class="fas fa-burger"></i> Snack Bar (Opsional)</div>
        <div class="snack-grid" id="snackGrid"></div>
      </div>

    </section>

    <!-- KERANJANG -->
    <aside class="col-keranjang" id="colKeranjang">
      <div class="keranjang-head" id="keranjangHead">
        <h3>
          <span><i class="fas fa-shopping-bag"></i> Pesanan</span>
          <span style="display:flex; align-items:center; gap:10px;">
            <span id="krjCount" style="font-family:'JetBrains Mono',monospace; font-size:0.72rem; background:rgba(0,0,0,0.3); padding:3px 10px; border-radius:20px;">0</span>
            <span class="toggle-arrow"><i class="fas fa-chevron-up"></i></span>
          </span>
        </h3>
        <div class="info" id="krjInfo">
          <i class="fas fa-info-circle"></i> <span>Belum ada film dipilih</span>
        </div>
      </div>

      <div class="keranjang-body" id="keranjangBody">
        <div class="keranjang-empty">
          <i class="fas fa-ticket"></i>
          <strong>Belum ada pesanan</strong>
          Pilih film untuk memulai
        </div>
      </div>

      <div class="keranjang-foot">
        <div class="kf-row"><span>Subtotal</span><span class="val" id="subTxt">Rp 0</span></div>
        <div class="kf-row"><span>Biaya Layanan</span><span class="val" id="feeTxt">Rp 0</span></div>
        <div class="kf-row grand"><span>TOTAL</span><span id="totalTxt">Rp 0</span></div>
        <button class="btn-proses" id="btnProses" disabled>
          <i class="fas fa-cash-register"></i> Bayar Sekarang
        </button>
      </div>
    </aside>

  </div>
</div>

<!-- ==================== PAGE ADMIN ==================== -->
<div class="page" id="pageAdmin">
  <div class="admin-wrap">
    <div class="admin-head">
      <h2>Dashboard<small>Film, jadwal & penjualan</small></h2>
      <div class="admin-actions">
        <button class="btn-outline" id="btnResetData">
          <i class="fas fa-rotate"></i> Reset
        </button>
      </div>
    </div>

    <div class="stats-row">
      <div class="stat-card">
        <div class="lbl">Tiket Terjual Hari Ini</div>
        <div class="val" id="sTiket">0</div>
        <div class="sub">lembar tiket</div>
      </div>
      <div class="stat-card kuning">
        <div class="lbl">Pendapatan Hari Ini</div>
        <div class="val rp" id="sPendapatan">Rp 0</div>
        <div class="sub">tiket + snack</div>
      </div>
      <div class="stat-card hijau">
        <div class="lbl">Okupansi Rata-rata</div>
        <div class="val" id="sOkupansi">0%</div>
        <div class="sub">kursi terisi</div>
      </div>
      <div class="stat-card">
        <div class="lbl">Film Tayang</div>
        <div class="val" id="sFilm">0</div>
        <div class="sub">film aktif</div>
      </div>
    </div>

    <div class="admin-section">
      <div class="section-head">
        <i class="fas fa-clapperboard"></i> Film & Jadwal
        <span class="spacer"></span>
        <span class="hint" id="filmCount">0 film</span>
      </div>
      <div class="film-admin-grid" id="filmAdminGrid"></div>
    </div>

    <div class="admin-section">
      <div class="section-head">
        <i class="fas fa-clock-rotate-left"></i> Riwayat Transaksi
      </div>
      <table class="riwayat-table">
        <thead>
          <tr>
            <th>No. Transaksi</th>
            <th>Film & Jadwal</th>
            <th>Kursi</th>
            <th>Waktu</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody id="riwayatBody"></tbody>
      </table>
    </div>
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
        <div class="sub" id="bayarSub">Transaksi #---</div>
      </div>
      <button class="modal-close" id="closeBayar"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <div class="field">
        <label>Nama Pelanggan</label>
        <input type="text" id="bayarNama" placeholder="Nama pelanggan" maxlength="40">
      </div>

      <div class="field">
        <label>Metode Pembayaran</label>
        <select id="bayarMetode">
          <option value="Tunai">Tunai</option>
          <option value="Debit">Kartu Debit</option>
          <option value="QRIS">QRIS</option>
        </select>
      </div>

      <div id="cashSection">
        <div class="field">
          <label>Uang Diterima</label>
          <input type="number" id="cashInput" placeholder="0" min="0" step="10000" style="font-family:'JetBrains Mono',monospace; font-size:1.1rem; font-weight:700; text-align:right;">
        </div>
        <div id="changeBox" style="background:rgba(245,213,0,0.15); border:1px solid var(--kuning); color:var(--kuning); padding:14px 16px; border-radius:8px; display:flex; justify-content:space-between; font-weight:700; font-family:'JetBrains Mono',monospace; letter-spacing:0.5px;">
          <span>Kembalian</span>
          <span id="changeTxt">Rp 0</span>
        </div>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnBatalBayar">Batal</button>
      <button class="btn-solid" id="btnKonfirmasiBayar">
        <i class="fas fa-check"></i> Konfirmasi & Cetak Tiket
      </button>
    </div>
  </div>
</div>

<!-- ==================== MODAL: TIKET ==================== -->
<div class="modal-bg" id="modalTiket">
  <div class="modal" style="max-width:460px;">
    <div class="modal-head">
      <div>
        <div class="kicker">Bukti Pembayaran</div>
        <h3><i class="fas fa-ticket"></i> E-Ticket</h3>
        <div class="sub">Tunjukkan QR code di pintu masuk studio</div>
      </div>
      <button class="modal-close" id="closeTiket"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body" id="tiketBody"></div>
    <div class="modal-foot">
      <button class="btn-outline" id="btnTutupTiket">Selesai</button>
      <button class="btn-solid" id="btnCetakTiket">
        <i class="fas fa-print"></i> Cetak
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
  const STORAGE_KEY = 'cinema_21_v1';

  const defaultFilm = [
    {
      id:1, judul:'AVATAR 3', rating:'13+', durasi:'2j 45m', genre:'Sci-Fi · Action',
      poster:'fa-mountain-sun',
      jadwal:[
        { jam:'10:30', studio:'Studio 1', hargaReg:45000, hargaVip:65000, hargaCouple:120000, occupied:[] },
        { jam:'13:15', studio:'Studio 1', hargaReg:45000, hargaVip:65000, hargaCouple:120000, occupied:['A1','A2','B3','C5','D4','E7'] },
        { jam:'16:00', studio:'Studio 1', hargaReg:45000, hargaVip:65000, hargaCouple:120000, occupied:[] },
        { jam:'19:30', studio:'Studio 2', hargaReg:50000, hargaVip:75000, hargaCouple:130000, occupied:['A5','A6','B4','B5'] }
      ]
    },
    {
      id:2, judul:'INSIDIOUS 5', rating:'17+', durasi:'1j 52m', genre:'Horror',
      poster:'fa-ghost',
      jadwal:[
        { jam:'11:00', studio:'Studio 3', hargaReg:40000, hargaVip:60000, hargaCouple:110000, occupied:[] },
        { jam:'14:20', studio:'Studio 3', hargaReg:40000, hargaVip:60000, hargaCouple:110000, occupied:['C3','C4','D5'] },
        { jam:'18:00', studio:'Studio 3', hargaReg:40000, hargaVip:60000, hargaCouple:110000, occupied:[] },
        { jam:'21:30', studio:'Studio 4', hargaReg:45000, hargaVip:65000, hargaCouple:120000, occupied:[] }
      ]
    },
    {
      id:3, judul:'KUNG FU PANDA 4', rating:'SU', durasi:'1j 34m', genre:'Animation · Comedy',
      poster:'fa-dragon',
      jadwal:[
        { jam:'09:45', studio:'Studio 4', hargaReg:40000, hargaVip:60000, hargaCouple:110000, occupied:[] },
        { jam:'12:30', studio:'Studio 4', hargaReg:40000, hargaVip:60000, hargaCouple:110000, occupied:['A3','A4','B1'] },
        { jam:'15:20', studio:'Studio 5', hargaReg:40000, hargaVip:60000, hargaCouple:110000, occupied:[] }
      ]
    },
    {
      id:4, judul:'OPPENHEIMER', rating:'17+', durasi:'3j', genre:'Biography · Drama',
      poster:'fa-atom',
      jadwal:[
        { jam:'11:30', studio:'Studio 2', hargaReg:50000, hargaVip:75000, hargaCouple:130000, occupied:[] },
        { jam:'16:45', studio:'Studio 2', hargaReg:50000, hargaVip:75000, hargaCouple:130000, occupied:['A1','A2','A3','B2','B3'] },
        { jam:'20:00', studio:'Studio 2', hargaReg:50000, hargaVip:75000, hargaCouple:130000, occupied:[] }
      ]
    },
    {
      id:5, judul:'DUNE PART 2', rating:'13+', durasi:'2j 46m', genre:'Sci-Fi · Adventure',
      poster:'fa-sun',
      jadwal:[
        { jam:'10:15', studio:'Studio 5', hargaReg:45000, hargaVip:65000, hargaCouple:120000, occupied:[] },
        { jam:'13:30', studio:'Studio 5', hargaReg:45000, hargaVip:65000, hargaCouple:120000, occupied:['D2','D3','E4','E5','F1'] },
        { jam:'17:00', studio:'Studio 5', hargaReg:45000, hargaVip:65000, hargaCouple:120000, occupied:[] }
      ]
    },
    {
      id:6, judul:'AGAK LAEN', rating:'13+', durasi:'1j 58m', genre:'Comedy · Horror',
      poster:'fa-masks-theater',
      jadwal:[
        { jam:'11:45', studio:'Studio 1', hargaReg:40000, hargaVip:60000, hargaCouple:110000, occupied:[] },
        { jam:'14:30', studio:'Studio 1', hargaReg:40000, hargaVip:60000, hargaCouple:110000, occupied:['A3','A4','B1','B2','C1','C2','C3'] },
        { jam:'19:00', studio:'Studio 3', hargaReg:40000, hargaVip:60000, hargaCouple:110000, occupied:[] }
      ]
    }
  ];

  const SNACK_ITEMS = [
    { id:'s1', nama:'Popcorn Reguler', harga:25000, icon:'fa-box' },
    { id:'s2', nama:'Popcorn Large', harga:40000, icon:'fa-box-open' },
    { id:'s3', nama:'Caramel Popcorn', harga:45000, icon:'fa-cookie-bite' },
    { id:'s4', nama:'Coca Cola 22oz', harga:25000, icon:'fa-bottle-water' },
    { id:'s5', nama:'Combo Popcorn + Cola', harga:55000, icon:'fa-burger' },
    { id:'s6', nama:'Nachos + Cheese', harga:40000, icon:'fa-utensils' },
    { id:'s7', nama:'Hot Dog', harga:35000, icon:'fa-hotdog' },
    { id:'s8', nama:'French Fries', harga:30000, icon:'fa-bowl-food' }
  ];

  const SEAT_LAYOUT = {
    rows:['A','B','C','D','E','F','G','H'],
    colsPerRow:12,
    aisleAfter:6, // aisle setelah kolom 6
    vipRows:['D','E'], // baris tengah jadi VIP
    coupleRows:['G','H'] // baris belakang jadi couple
  };

  let data;
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    data = raw ? JSON.parse(raw) : null;
  } catch(e) { data = null; }

  if (!data) {
    data = {
      film: JSON.parse(JSON.stringify(defaultFilm)),
      transaksi: [],
      counter: 1
    };
  }
  const save = () => localStorage.setItem(STORAGE_KEY, JSON.stringify(data));

  /* =========================================================
     STATE
  ========================================================= */
  let step = 1;
  let filmTerpilih = null;
  let jadwalTerpilih = null;
  let seatsTerpilih = []; // [{baris, kolom, tipe, harga}]
  let snacksTerpilih = []; // { id, nama, harga, qty }
  let payMetode = 'Tunai';
  let lastTransaksi = null;

  /* =========================================================
     UTIL
  ========================================================= */
  const rp = n => 'Rp ' + Math.round(Number(n)).toLocaleString('id-ID');

  let toastTimer;
  function toast(msg, icon='fa-circle-check') {
    const t = document.getElementById('toast');
    document.getElementById('toastTxt').textContent = msg;
    t.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => t.classList.remove('show'), 2200);
  }

  function getTipeKursi(row) {
    if (SEAT_LAYOUT.vipRows.includes(row)) return 'vip';
    if (SEAT_LAYOUT.coupleRows.includes(row)) return 'couple';
    return 'reg';
  }

  function getHargaKursi(tipe) {
    if (!jadwalTerpilih) return 0;
    if (tipe === 'vip') return jadwalTerpilih.hargaVip;
    if (tipe === 'couple') return jadwalTerpilih.hargaCouple;
    return jadwalTerpilih.hargaReg;
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
    document.getElementById('avatarInit').textContent = 'R';
    renderFilm();
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
     STEP NAVIGATION
  ========================================================= */
  function setStep(s) {
    step = s;
    document.querySelectorAll('.step-item').forEach(el => {
      const stepNum = parseInt(el.dataset.step);
      el.classList.remove('active', 'done');
      if (stepNum === s) el.classList.add('active');
      else if (stepNum < s) el.classList.add('done');
    });

    document.getElementById('stepFilm').style.display = s === 1 ? 'block' : 'none';
    document.getElementById('stepJadwal').style.display = s === 2 ? 'block' : 'none';
    document.getElementById('stepKursi').style.display = s === 3 ? 'block' : 'none';
    document.getElementById('stepSnack').style.display = s === 4 ? 'block' : 'none';
  }

  /* =========================================================
     RENDER FILM
  ========================================================= */
  function renderFilm() {
    const grid = document.getElementById('filmGrid');
    grid.innerHTML = data.film.map(f => `
      <div class="film-card ${filmTerpilih && filmTerpilih.id === f.id ? 'selected' : ''}" data-id="${f.id}">
        <div class="film-poster"><i class="fas ${f.poster}"></i></div>
        <div class="film-info">
          <div class="film-title">${f.judul}</div>
          <div class="film-meta">
            <span class="rating">${f.rating}</span>
            <span>${f.durasi}</span>
          </div>
          <div class="film-meta" style="margin-top:4px;">
            <span style="font-size:0.65rem;">${f.genre}</span>
          </div>
        </div>
      </div>
    `).join('');

    grid.querySelectorAll('.film-card').forEach(card => {
      card.addEventListener('click', () => {
        const id = parseInt(card.dataset.id);
        filmTerpilih = data.film.find(f => f.id === id);
        jadwalTerpilih = null;
        seatsTerpilih = [];
        snacksTerpilih = [];
        renderFilm();
        renderJadwal();
        renderKeranjang();
        updateInfo();
        setStep(2);
      });
    });
  }

  /* =========================================================
     RENDER JADWAL
  ========================================================= */
  function renderJadwal() {
    if (!filmTerpilih) return;
    const grid = document.getElementById('jadwalGrid');
    grid.innerHTML = filmTerpilih.jadwal.map((j, i) => `
      <div class="jadwal-btn ${jadwalTerpilih === j ? 'selected' : ''}" data-idx="${i}">
        <div class="jam">${j.jam}</div>
        <div class="studio">${j.studio}</div>
        <div class="harga-start">Mulai ${rp(j.hargaReg)}</div>
      </div>
    `).join('');

    grid.querySelectorAll('.jadwal-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const idx = parseInt(btn.dataset.idx);
        jadwalTerpilih = filmTerpilih.jadwal[idx];
        seatsTerpilih = [];
        renderJadwal();
        renderSeatMap();
        renderKeranjang();
        updateInfo();
        setStep(3);
      });
    });
  }

  /* =========================================================
     RENDER SEAT MAP
  ========================================================= */
  function renderSeatMap() {
    if (!jadwalTerpilih) return;
    const map = document.getElementById('seatMap');
    const rows = SEAT_LAYOUT.rows;
    const cols = SEAT_LAYOUT.colsPerRow;

    map.innerHTML = rows.map(row => {
      let seatsHtml = '';
      for (let c = 1; c <= cols; c++) {
        if (c === SEAT_LAYOUT.aisleAfter + 1) {
          seatsHtml += '<div class="seat-aisle"></div>';
        }
        const kode = row + c;
        const tipe = getTipeKursi(row);
        const occupied = jadwalTerpilih.occupied.includes(kode);
        const selected = seatsTerpilih.some(s => s.baris === row && s.kolom === c);
        let cls = 'seat';
        if (occupied) cls += ' occupied';
        else {
          if (tipe === 'vip') cls += ' vip';
          else if (tipe === 'couple') cls += ' couple';
          else cls += ' available';
          if (selected) cls += ' selected';
        }
        seatsHtml += `<div class="${cls}" data-bar="${row}" data-kol="${c}" data-kode="${kode}" data-tipe="${tipe}">${c}</div>`;
      }

      return `
        <div class="seat-row">
          <div class="seat-row-label">${row}</div>
          <div class="seat-grid">${seatsHtml}</div>
        </div>
      `;
    }).join('');

    map.querySelectorAll('.seat').forEach(seat => {
      if (seat.classList.contains('occupied')) return;
      seat.addEventListener('click', () => {
        const bar = seat.dataset.bar;
        const kol = parseInt(seat.dataset.kol);
        const tipe = seat.dataset.tipe;
        toggleSeat(bar, kol, tipe);
      });
    });
  }

  function toggleSeat(bar, kol, tipe) {
    const idx = seatsTerpilih.findIndex(s => s.baris === bar && s.kolom === kol);
    if (idx >= 0) {
      seatsTerpilih.splice(idx, 1);
    } else {
      if (seatsTerpilih.length >= 10) {
        toast('Maksimal 10 kursi per transaksi', 'fa-exclamation-circle');
        return;
      }
      seatsTerpilih.push({
        baris: bar,
        kolom: kol,
        kode: bar + kol,
        tipe: tipe,
        harga: getHargaKursi(tipe)
      });
    }
    renderSeatMap();
    renderKeranjang();
    // Kalau sudah ada kursi, tampilkan snack
    if (seatsTerpilih.length > 0 && step === 3) {
      setStep(4);
    } else if (seatsTerpilih.length === 0 && step === 4) {
      setStep(3);
    }
  }

  /* =========================================================
     RENDER SNACK
  ========================================================= */
  function renderSnack() {
    const grid = document.getElementById('snackGrid');
    grid.innerHTML = SNACK_ITEMS.map(s => `
      <div class="snack-card" data-id="${s.id}">
        <div class="s-icon"><i class="fas ${s.icon}"></i></div>
        <div class="s-nama">${s.nama}</div>
        <div class="s-harga">${rp(s.harga)}</div>
      </div>
    `).join('');

    grid.querySelectorAll('.snack-card').forEach(card => {
      card.addEventListener('click', () => {
        const id = card.dataset.id;
        const snack = SNACK_ITEMS.find(s => s.id === id);
        if (!snack) return;
        const existing = snacksTerpilih.find(s => s.id === id);
        if (existing) existing.qty++;
        else snacksTerpilih.push({ ...snack, qty: 1 });
        renderKeranjang();
        toast(`${snack.nama} ditambahkan`, 'fa-plus');
      });
    });
  }

  /* =========================================================
     UPDATE INFO KERANJANG
  ========================================================= */
  function updateInfo() {
    const info = document.getElementById('krjInfo');
    if (filmTerpilih && jadwalTerpilih) {
      info.innerHTML = `<i class="fas fa-film"></i> <span>${filmTerpilih.judul} · ${jadwalTerpilih.jam} · ${jadwalTerpilih.studio}</span>`;
    } else if (filmTerpilih) {
      info.innerHTML = `<i class="fas fa-film"></i> <span>${filmTerpilih.judul} · Pilih jadwal</span>`;
    } else {
      info.innerHTML = '<i class="fas fa-info-circle"></i> <span>Belum ada film dipilih</span>';
    }
  }

  /* =========================================================
     RENDER KERANJANG
  ========================================================= */
  function renderKeranjang() {
    const body = document.getElementById('keranjangBody');
    const totalQty = seatsTerpilih.length + snacksTerpilih.reduce((s, it) => s + it.qty, 0);
    document.getElementById('krjCount').textContent = totalQty;

    let html = '';
    if (filmTerpilih && jadwalTerpilih && seatsTerpilih.length === 0 && snacksTerpilih.length === 0) {
      html = `
        <div class="keranjang-empty">
          <i class="fas fa-couch"></i>
          <strong>Belum ada kursi dipilih</strong>
          Klik kursi di denah studio
        </div>`;
    } else if (seatsTerpilih.length === 0 && snacksTerpilih.length === 0) {
      html = `
        <div class="keranjang-empty">
          <i class="fas fa-ticket"></i>
          <strong>Belum ada pesanan</strong>
          Pilih film untuk memulai
        </div>`;
    } else {
      if (seatsTerpilih.length > 0) {
        html += `<div class="krj-section"><i class="fas fa-ticket"></i> Tiket Bioskop</div>`;
        const grouped = {};
        seatsTerpilih.forEach(s => {
          if (!grouped[s.tipe]) grouped[s.tipe] = [];
          grouped[s.tipe].push(s);
        });
        Object.keys(grouped).forEach(tipe => {
          const list = grouped[tipe];
          const label = tipe === 'vip' ? 'VIP' : tipe === 'couple' ? 'Couple' : 'Reguler';
          html += `
            <div class="krj-item">
              <div class="krj-top">
                <div class="krj-nama">${label} · ${list.length} kursi</div>
                <div class="krj-harga">${rp(list.reduce((s, x) => s + x.harga, 0))}</div>
              </div>
              <div class="krj-detail">
                Kursi: <strong>${list.map(s => s.kode).join(', ')}</strong><br>
                ${rp(list[0].harga)} × ${list.length}
              </div>
            </div>
          `;
        });
      }

      if (snacksTerpilih.length > 0) {
        html += `<div class="krj-section"><i class="fas fa-burger"></i> Snack Bar</div>`;
        snacksTerpilih.forEach((s, idx) => {
          html += `
            <div class="krj-item">
              <div class="krj-top">
                <div class="krj-nama">${s.nama}</div>
                <div class="krj-harga">${rp(s.harga * s.qty)}</div>
              </div>
              <div class="krj-detail">${rp(s.harga)} × ${s.qty}</div>
              <div class="krj-actions">
                <div class="krj-qty">
                  <button data-act="min" data-type="snack" data-idx="${idx}">−</button>
                  <span>${s.qty}</span>
                  <button data-act="plus" data-type="snack" data-idx="${idx}">+</button>
                </div>
                <button class="krj-del" data-act="del" data-type="snack" data-idx="${idx}"><i class="fas fa-times"></i></button>
              </div>
            </div>
          `;
        });
      }
    }
    body.innerHTML = html;

    body.querySelectorAll('button[data-act]').forEach(btn => {
      btn.addEventListener('click', () => {
        const idx = parseInt(btn.dataset.idx);
        const act = btn.dataset.act;
        if (act === 'plus') snacksTerpilih[idx].qty++;
        else if (act === 'min') {
          if (snacksTerpilih[idx].qty <= 1) snacksTerpilih.splice(idx, 1);
          else snacksTerpilih[idx].qty--;
        } else if (act === 'del') snacksTerpilih.splice(idx, 1);
        renderKeranjang();
      });
    });

    const ticketTotal = seatsTerpilih.reduce((s, x) => s + x.harga, 0);
    const snackTotal = snacksTerpilih.reduce((s, x) => s + x.harga * x.qty, 0);
    const subtotal = ticketTotal + snackTotal;
    const fee = seatsTerpilih.length > 0 ? 1000 * seatsTerpilih.length : 0;
    const total = subtotal + fee;

    document.getElementById('subTxt').textContent = rp(subtotal);
    document.getElementById('feeTxt').textContent = rp(fee);
    document.getElementById('totalTxt').textContent = rp(total);
    document.getElementById('btnProses').disabled = subtotal === 0;
  }

  /* =========================================================
     PROSES BAYAR
  ========================================================= */
  const modalBayar = document.getElementById('modalBayar');
  const cashInput = document.getElementById('cashInput');

  document.getElementById('btnProses').addEventListener('click', () => {
    if (seatsTerpilih.length === 0 && snacksTerpilih.length === 0) return;
    payMetode = 'Tunai';
    document.getElementById('bayarMetode').value = 'Tunai';
    document.getElementById('cashSection').style.display = 'block';
    document.getElementById('bayarSub').textContent = `Transaksi #TRX-${String(data.counter).padStart(4,'0')}`;
    cashInput.value = '';
    updateChange();
    modalBayar.classList.add('show');
  });

  document.getElementById('closeBayar').addEventListener('click', () => modalBayar.classList.remove('show'));
  document.getElementById('btnBatalBayar').addEventListener('click', () => modalBayar.classList.remove('show'));

  document.getElementById('bayarMetode').addEventListener('change', e => {
    payMetode = e.target.value;
    document.getElementById('cashSection').style.display = payMetode === 'Tunai' ? 'block' : 'none';
  });

  function getTotal() {
    const ticketTotal = seatsTerpilih.reduce((s, x) => s + x.harga, 0);
    const snackTotal = snacksTerpilih.reduce((s, x) => s + x.harga * x.qty, 0);
    const fee = seatsTerpilih.length > 0 ? 1000 * seatsTerpilih.length : 0;
    return ticketTotal + snackTotal + fee;
  }

  function updateChange() {
    if (payMetode !== 'Tunai') return;
    const total = getTotal();
    const cash = parseInt(cashInput.value) || 0;
    const box = document.getElementById('changeBox');
    const txt = document.getElementById('changeTxt');
    if (cash === 0) {
      box.style.background = 'rgba(245,213,0,0.15)';
      box.style.borderColor = 'var(--kuning)';
      box.style.color = 'var(--kuning)';
      txt.textContent = rp(0);
      return;
    }
    const diff = cash - total;
    if (diff < 0) {
      box.style.background = 'rgba(212,48,48,0.15)';
      box.style.borderColor = 'var(--merah-muda)';
      box.style.color = 'var(--merah-muda)';
      txt.textContent = '− ' + rp(Math.abs(diff));
    } else {
      box.style.background = 'rgba(74,158,92,0.15)';
      box.style.borderColor = 'var(--hijau)';
      box.style.color = 'var(--hijau)';
      txt.textContent = rp(diff);
    }
  }
  cashInput.addEventListener('input', updateChange);

  document.getElementById('btnKonfirmasiBayar').addEventListener('click', () => {
    const total = getTotal();
    const cash = parseInt(cashInput.value) || 0;
    if (payMetode === 'Tunai' && cash < total) {
      toast('Uang tidak cukup', 'fa-exclamation-circle');
      return;
    }
    prosesBayar(total, cash);
  });

  /* =========================================================
     PROSES TRANSAKSI
  ========================================================= */
  function prosesBayar(total, cash) {
    const nama = document.getElementById('bayarNama').value.trim() || 'Pelanggan';
    const change = payMetode === 'Tunai' ? cash - total : 0;
    const now = new Date();
    const nomor = 'TRX-' + String(data.counter).padStart(4, '0');

    const trx = {
      nomor: nomor,
      tanggal: now.toISOString(),
      nama: nama,
      film: filmTerpilih ? filmTerpilih.judul : null,
      filmId: filmTerpilih ? filmTerpilih.id : null,
      jadwal: jadwalTerpilih ? { jam: jadwalTerpilih.jam, studio: jadwalTerpilih.studio } : null,
      seats: seatsTerpilih.map(s => ({ kode: s.kode, tipe: s.tipe, harga: s.harga })),
      snacks: snacksTerpilih.map(s => ({ nama: s.nama, harga: s.harga, qty: s.qty })),
      total: total,
      metode: payMetode,
      cash: payMetode === 'Tunai' ? cash : total,
      change: change
    };

    // Update occupied di film
    if (filmTerpilih && jadwalTerpilih) {
      const f = data.film.find(x => x.id === filmTerpilih.id);
      if (f) {
        const j = f.jadwal.find(x => x.jam === jadwalTerpilih.jam && x.studio === jadwalTerpilih.studio);
        if (j) {
          seatsTerpilih.forEach(s => j.occupied.push(s.kode));
        }
      }
    }

    data.transaksi.unshift(trx);
    data.counter++;
    save();
    lastTransaksi = trx;

    modalBayar.classList.remove('show');
    tampilkanTiket(trx);

    // Reset
    seatsTerpilih = [];
    snacksTerpilih = [];
    if (filmTerpilih) {
      // Refresh filmTerpilih dari data
      filmTerpilih = data.film.find(f => f.id === filmTerpilih.id);
      renderSeatMap();
    }
    renderKeranjang();
    toast('Transaksi berhasil', 'fa-check-circle');
  }

  /* =========================================================
     TIKET
  ========================================================= */
  function tampilkanTiket(t) {
    const tgl = new Date(t.tanggal).toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' });

    const seatsHtml = t.seats.length > 0
      ? `
        <div class="tiket-seats">
          <div class="lbl">Kursi</div>
          <div class="list">
            ${t.seats.map(s => `<span class="seat-pill">${s.kode}</span>`).join('')}
          </div>
        </div>
      ` : '';

    const snacksHtml = t.snacks.length > 0
      ? `<div style="background:var(--hitam-3); border-radius:8px; padding:12px 14px; margin-bottom:14px;">
          <div style="font-size:0.68rem; color:var(--abu); text-transform:uppercase; letter-spacing:1px; margin-bottom:8px;">Snack Bar</div>
          ${t.snacks.map(s => `
            <div style="display:flex; justify-content:space-between; font-size:0.78rem; padding:3px 0;">
              <span>${s.nama} × ${s.qty}</span>
              <span style="color:var(--kuning); font-family:'JetBrains Mono',monospace; font-weight:700;">${rp(s.harga * s.qty)}</span>
            </div>
          `).join('')}
        </div>`
      : '';

    document.getElementById('tiketBody').innerHTML = `
      <div class="tiket">
        <div class="tiket-head">
          <div class="logo">CINEMA 21</div>
          <div class="sub">E-Ticket · Bukti Masuk Studio</div>
        </div>

        ${t.film ? `
          <div class="tiket-film">
            <h4>${t.film}</h4>
            <div class="meta">${t.jadwal.studio} · ${t.jadwal.jam}</div>
          </div>
        ` : ''}

        <div class="tiket-info">
          <div class="item"><span class="lbl">No</span><span class="val">${t.nomor}</span></div>
          <div class="item"><span class="lbl">Nama</span><span class="val">${t.nama}</span></div>
          <div class="item" style="grid-column:1/-1;"><span class="lbl">Tanggal</span><span class="val">${tgl}</span></div>
        </div>

        ${seatsHtml}
        ${snacksHtml}

        <div class="tiket-qr">
          <div class="qr-box"><i class="fas fa-qrcode"></i></div>
          <div class="qr-label">SCAN DI PINTU MASUK</div>
        </div>

        <div class="tiket-total">
          <div class="row"><span>Subtotal</span><span>${rp(t.total - (t.seats.length * 1000))}</span></div>
          <div class="row"><span>Biaya Layanan</span><span>${rp(t.seats.length * 1000)}</span></div>
          <div class="row grand"><span>TOTAL</span><span>${rp(t.total)}</span></div>
          <div class="row" style="margin-top:8px;"><span>Bayar (${t.metode})</span><span>${rp(t.cash)}</span></div>
          <div class="row"><span>Kembalian</span><span>${rp(t.change)}</span></div>
        </div>

        <div class="tiket-foot">
          <div class="thank">ENJOY THE MOVIE</div>
          Tiket berlaku hanya untuk jadwal yang tertera<br>
          Dilarang membawa makanan dari luar<br>
          Simpan tiket Anda selama menonton
        </div>
      </div>
    `;
    document.getElementById('modalTiket').classList.add('show');
  }

  document.getElementById('closeTiket').addEventListener('click', () => document.getElementById('modalTiket').classList.remove('show'));
  document.getElementById('btnTutupTiket').addEventListener('click', () => document.getElementById('modalTiket').classList.remove('show'));
  document.getElementById('btnCetakTiket').addEventListener('click', () => {
    const w = window.open('', '', 'width=520,height=780');
    w.document.write('<pre style="font-family:Courier New,monospace; font-size:12px; padding:20px; white-space:pre-wrap;">' +
      document.getElementById('tiketBody').innerText + '</pre>');
    w.document.close(); w.focus(); w.print();
    toast('Tiket dikirim ke printer', 'fa-print');
  });

  /* =========================================================
     ADMIN
  ========================================================= */
  function renderAdmin() {
    const today = new Date().toDateString();
    const trxHariIni = data.transaksi.filter(t => new Date(t.tanggal).toDateString() === today);
    const totalTiket = trxHariIni.reduce((s, t) => s + (t.seats ? t.seats.length : 0), 0);
    const pendapatan = trxHariIni.reduce((s, t) => s + t.total, 0);

    // Rata-rata okupansi: total kursi terisi / total kursi semua jadwal
    let totalSeats = 0;
    let totalOccupied = 0;
    data.film.forEach(f => {
      f.jadwal.forEach(j => {
        const seatCount = SEAT_LAYOUT.rows.length * SEAT_LAYOUT.colsPerRow;
        totalSeats += seatCount;
        totalOccupied += j.occupied.length;
      });
    });
    const okupansi = totalSeats > 0 ? Math.round((totalOccupied / totalSeats) * 100) : 0;

    document.getElementById('sTiket').textContent = totalTiket;
    document.getElementById('sPendapatan').textContent = rp(pendapatan);
    document.getElementById('sOkupansi').textContent = okupansi + '%';
    document.getElementById('sFilm').textContent = data.film.length;

    // Film admin grid
    const grid = document.getElementById('filmAdminGrid');
    document.getElementById('filmCount').textContent = data.film.length + ' film';

    grid.innerHTML = data.film.map(f => {
      const seatPerJadwal = SEAT_LAYOUT.rows.length * SEAT_LAYOUT.colsPerRow;
      const totalOccupied = f.jadwal.reduce((s, j) => s + j.occupied.length, 0);
      const totalSeats = seatPerJadwal * f.jadwal.length;
      const okupansiFilm = Math.round((totalOccupied / totalSeats) * 100);

      return `
        <div class="film-admin-card">
          <div class="info">
            <div class="title">${f.judul}</div>
            <div class="meta">
              <span class="rating-badge">${f.rating}</span>
              <span>${f.durasi}</span>
            </div>
            <div class="meta">${f.genre}</div>
            <div class="jadwal-count">
              <i class="fas fa-clock"></i> ${f.jadwal.length} jadwal · okupansi ${okupansiFilm}%
            </div>
          </div>
        </div>
      `;
    }).join('');

    // Riwayat
    const tbody = document.getElementById('riwayatBody');
    if (data.transaksi.length === 0) {
      tbody.innerHTML = '<tr><td colspan="5" style="text-align:center; padding:30px; color:var(--abu);">Belum ada transaksi</td></tr>';
    } else {
      tbody.innerHTML = data.transaksi.slice(0, 20).map(t => {
        const tgl = new Date(t.tanggal).toLocaleString('id-ID', { dateStyle:'short', timeStyle:'short' });
        const filmInfo = t.film ? `${t.film} · ${t.jadwal ? t.jadwal.jam : ''} ${t.jadwal ? t.jadwal.studio : ''}` : 'Snack only';
        const seatsInfo = t.seats && t.seats.length > 0
          ? t.seats.map(s => s.kode).join(', ')
          : '-';
        return `
          <tr>
            <td><span class="rt-num">${t.nomor}</span></td>
            <td><span class="rt-film">${filmInfo}</span></td>
            <td><span class="rt-seats">${seatsInfo}</span></td>
            <td>${tgl}</td>
            <td style="font-family:'JetBrains Mono',monospace; font-weight:700; color:var(--kuning);">${rp(t.total)}</td>
          </tr>
        `;
      }).join('');
    }
  }

  /* =========================================================
     RESET
  ========================================================= */
  document.getElementById('btnResetData').addEventListener('click', () => {
    if (!confirm('Reset semua data ke default?')) return;
    data = {
      film: JSON.parse(JSON.stringify(defaultFilm)),
      transaksi: [],
      counter: 1
    };
    filmTerpilih = null;
    jadwalTerpilih = null;
    seatsTerpilih = [];
    snacksTerpilih = [];
    save();
    renderFilm();
    renderKeranjang();
    updateInfo();
    setStep(1);
    renderAdmin();
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

  /* =========================================================
     INIT
  ========================================================= */
  renderFilm();
  renderSnack();
  renderKeranjang();
  updateInfo();
  setStep(1);
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>