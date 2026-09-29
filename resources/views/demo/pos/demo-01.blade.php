@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>POS Kasir - Demo</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
* { margin:0; padding:0; box-sizing:border-box; font-family:'Inter',system-ui,-apple-system,sans-serif; }
body { background:#e9eef4; color:#1e293b; min-height:100vh; }

/* ===== HEADER ===== */
.topbar {
  background:#1e3a5f; color:#fff; padding:0 20px; height:60px;
  display:flex; align-items:center; justify-content:space-between;
  position:sticky; top:0; z-index:50;
}
.brand { display:flex; align-items:center; gap:10px; }
.brand i { font-size:22px; color:#ffb74d; }
.brand h1 { font-size:1.15rem; font-weight:600; }
.topbar-right { display:flex; align-items:center; gap:10px; font-size:0.85rem; }
.mode-switch {
  display:flex; background:#2d4a6e; border-radius:10px; padding:4px; gap:2px;
}
.mode-switch button {
  background:transparent; border:none; color:#cbd5e1; padding:7px 14px;
  border-radius:7px; cursor:pointer; font-size:0.82rem; font-weight:500;
  display:flex; align-items:center; gap:6px;
}
.mode-switch button.active { background:#ffb74d; color:#1e3a5f; }
.mode-switch button.active i { color:#1e3a5f; }
.user-chip {
  background:#2d4a6e; padding:7px 14px; border-radius:40px;
  display:flex; align-items:center; gap:8px;
}
.user-chip i { color:#ffb74d; }

/* ===== PAGE ===== */
.page { display:none; }
.page.active { display:block; }

/* ===== KASIR LAYOUT ===== */
.pos-layout {
  display:grid; grid-template-columns:1fr 380px;
  gap:16px; padding:16px; max-width:1500px; margin:0 auto;
  align-items:start;
}
.panel {
  background:#fff; border-radius:16px; border:1px solid #dbe3ec;
  padding:18px;
}
.panel-head {
  display:flex; align-items:center; justify-content:space-between;
  margin-bottom:14px; padding-bottom:12px; border-bottom:1px solid #eef2f7;
}
.panel-head h2 {
  font-size:1.05rem; font-weight:600; color:#1e3a5f;
  display:flex; align-items:center; gap:8px;
}
.panel-head h2 i { color:#ffb74d; }
.panel-head .count { font-size:0.8rem; color:#64748b; }

.search-box {
  display:flex; align-items:center; background:#f6f8fb;
  border:1px solid #dbe3ec; border-radius:10px; padding:0 14px;
  margin-bottom:14px;
}
.search-box i { color:#94a3b8; font-size:0.85rem; }
.search-box input {
  border:none; background:transparent; outline:none;
  padding:11px 10px; width:100%; font-size:0.9rem;
}
.kat-bar { display:flex; gap:8px; flex-wrap:wrap; margin-bottom:14px; }
.kat-btn {
  background:#f6f8fb; border:1px solid #dbe3ec; padding:8px 16px;
  border-radius:40px; font-size:0.82rem; font-weight:500; color:#475569;
  cursor:pointer; display:flex; align-items:center; gap:6px;
}
.kat-btn.active { background:#1e3a5f; border-color:#1e3a5f; color:#fff; }
.kat-btn.active i { color:#ffb74d; }

.product-grid {
  display:grid; grid-template-columns:repeat(auto-fill,minmax(150px,1fr));
  gap:12px;
}
.product-card {
  background:#fff; border:1px solid #e5eaf1; border-radius:14px;
  padding:16px 12px; cursor:pointer; text-align:center;
  transition:all 0.12s; display:flex; flex-direction:column;
  align-items:center; gap:8px;
}
.product-card:hover { border-color:#1e3a5f; transform:translateY(-1px); }
.product-card.out { opacity:0.45; cursor:not-allowed; }
.product-card .p-icon {
  width:52px; height:52px; border-radius:14px; background:#eef4fa;
  color:#1e3a5f; display:flex; align-items:center; justify-content:center;
  font-size:1.35rem;
}
.product-card h3 { font-size:0.88rem; font-weight:600; color:#0f172a; line-height:1.3; }
.product-card .p-price { font-size:0.95rem; font-weight:700; color:#1e3a5f; }
.product-card .p-stock {
  font-size:0.72rem; color:#64748b; background:#f1f5f9;
  padding:3px 10px; border-radius:20px;
}
.product-card .p-stock.low { background:#fff3e0; color:#b45309; }

/* ===== CART ===== */
.cart-panel { display:flex; flex-direction:column; gap:14px; }
.cart-items { max-height:340px; overflow-y:auto; display:flex; flex-direction:column; gap:8px; }
.cart-empty {
  text-align:center; padding:32px 0; color:#94a3b8; font-size:0.88rem;
}
.cart-empty i { font-size:2rem; display:block; margin-bottom:10px; color:#cbd5e1; }
.cart-row {
  display:grid; grid-template-columns:1fr auto; gap:8px;
  background:#f9fbfd; border-radius:12px; padding:10px 12px;
  border:1px solid #eef2f7;
}
.cart-row .nama { font-size:0.88rem; font-weight:600; color:#0f172a; }
.cart-row .harga { font-size:0.76rem; color:#64748b; margin-top:2px; }
.cart-row .qty-ctrl { display:flex; align-items:center; gap:6px; margin-top:6px; }
.qty-btn {
  width:26px; height:26px; border-radius:7px; border:1px solid #dbe3ec;
  background:#fff; color:#1e3a5f; cursor:pointer; font-size:0.75rem;
  display:flex; align-items:center; justify-content:center;
}
.qty-btn:hover { background:#1e3a5f; color:#fff; }
.qty-num { font-size:0.85rem; font-weight:600; min-width:22px; text-align:center; }
.cart-row .kanan { text-align:right; display:flex; flex-direction:column; justify-content:space-between; }
.cart-row .subtotal { font-size:0.9rem; font-weight:700; color:#1e3a5f; }
.btn-del {
  background:transparent; border:none; color:#cbd5e1; cursor:pointer;
  font-size:0.8rem; padding:2px; align-self:flex-end;
}
.btn-del:hover { color:#dc2626; }

.summary-box {
  background:#f6f8fb; border-radius:14px; padding:16px;
  border:1px solid #e5eaf1;
}
.sum-row {
  display:flex; justify-content:space-between; font-size:0.88rem;
  color:#475569; margin-bottom:8px;
}
.sum-row.total {
  font-size:1.25rem; font-weight:700; color:#1e3a5f;
  padding-top:12px; border-top:1px dashed #cbd5e1; margin-top:8px;
  margin-bottom:0;
}
.btn-primary {
  width:100%; background:#1e3a5f; color:#fff; border:none;
  padding:15px; border-radius:12px; font-size:0.98rem; font-weight:600;
  cursor:pointer; display:flex; align-items:center; justify-content:center;
  gap:10px; transition:background 0.15s;
}
.btn-primary:hover { background:#15293f; }
.btn-primary i { color:#ffb74d; }
.btn-primary:disabled { background:#94a3b8; cursor:not-allowed; }
.btn-primary:disabled i { color:#cbd5e1; }

/* ===== ADMIN LAYOUT ===== */
.admin-wrap { max-width:1200px; margin:0 auto; padding:16px; }
.stats-grid {
  display:grid; grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:14px; margin-bottom:16px;
}
.stat-card {
  background:#fff; border-radius:14px; padding:18px;
  border:1px solid #dbe3ec; display:flex; align-items:center; gap:14px;
}
.stat-card .s-icon {
  width:48px; height:48px; border-radius:12px; background:#eef4fa;
  color:#1e3a5f; display:flex; align-items:center; justify-content:center;
  font-size:1.3rem; flex-shrink:0;
}
.stat-card .s-label { font-size:0.78rem; color:#64748b; }
.stat-card .s-value { font-size:1.3rem; font-weight:700; color:#1e3a5f; margin-top:2px; }

.admin-toolbar {
  display:flex; justify-content:space-between; align-items:center;
  margin-bottom:14px; flex-wrap:wrap; gap:10px;
}
.admin-toolbar h2 {
  font-size:1.1rem; font-weight:600; color:#1e3a5f;
  display:flex; align-items:center; gap:8px;
}
.admin-toolbar h2 i { color:#ffb74d; }
.btn-add {
  background:#ffb74d; color:#1e3a5f; border:none; padding:11px 20px;
  border-radius:10px; font-size:0.88rem; font-weight:600; cursor:pointer;
  display:flex; align-items:center; gap:8px;
}
.btn-add:hover { background:#ffa726; }

.table-wrap {
  background:#fff; border-radius:14px; border:1px solid #dbe3ec;
  overflow:hidden;
}
table { width:100%; border-collapse:collapse; font-size:0.88rem; }
thead { background:#f6f8fb; }
th {
  text-align:left; padding:14px 16px; font-weight:600; color:#475569;
  font-size:0.78rem; text-transform:uppercase; letter-spacing:0.4px;
  border-bottom:1px solid #e5eaf1;
}
td { padding:14px 16px; border-bottom:1px solid #eef2f7; color:#1e293b; }
tbody tr:last-child td { border-bottom:none; }
tbody tr:hover { background:#f9fbfd; }
.cell-icon {
  display:inline-flex; width:34px; height:34px; border-radius:9px;
  background:#eef4fa; color:#1e3a5f; align-items:center; justify-content:center;
  font-size:0.9rem; margin-right:10px; vertical-align:middle;
}
.badge-kat {
  display:inline-block; padding:4px 12px; border-radius:20px;
  font-size:0.72rem; font-weight:600;
}
.badge-kat.makanan { background:#fef3c7; color:#92400e; }
.badge-kat.minuman { background:#dbeafe; color:#1e40af; }
.badge-kat.snack { background:#fce7f3; color:#9d174d; }
.stock-pill {
  display:inline-block; padding:4px 12px; border-radius:20px;
  font-size:0.78rem; font-weight:600;
}
.stock-pill.ok { background:#dcfce7; color:#166534; }
.stock-pill.low { background:#fff3e0; color:#b45309; }
.stock-pill.out { background:#fee2e2; color:#b91c1c; }
.row-actions { display:flex; gap:6px; }
.icon-btn {
  width:32px; height:32px; border-radius:8px; border:1px solid #dbe3ec;
  background:#fff; color:#475569; cursor:pointer; font-size:0.8rem;
  display:flex; align-items:center; justify-content:center;
}
.icon-btn:hover { background:#1e3a5f; color:#fff; border-color:#1e3a5f; }
.icon-btn.danger:hover { background:#dc2626; border-color:#dc2626; }

/* ===== MODAL ===== */
.modal-overlay {
  position:fixed; inset:0; background:rgba(15,23,42,0.55);
  display:none; align-items:center; justify-content:center;
  z-index:100; padding:16px;
}
.modal-overlay.show { display:flex; }
.modal {
  background:#fff; border-radius:18px; width:100%; max-width:440px;
  padding:26px; max-height:92vh; overflow-y:auto;
}
.modal h3 {
  font-size:1.15rem; font-weight:700; color:#1e3a5f;
  margin-bottom:4px; display:flex; align-items:center; gap:10px;
}
.modal h3 i { color:#ffb74d; }
.modal .sub { font-size:0.82rem; color:#64748b; margin-bottom:20px; }
.pay-total {
  background:#1e3a5f; color:#fff; border-radius:14px;
  padding:18px; text-align:center; margin-bottom:18px;
}
.pay-total span { font-size:0.8rem; opacity:0.85; display:block; margin-bottom:4px; }
.pay-total strong { font-size:1.7rem; font-weight:700; }
.pay-methods { display:grid; grid-template-columns:repeat(3,1fr); gap:8px; margin-bottom:18px; }
.pay-method {
  border:2px solid #dbe3ec; border-radius:12px; padding:12px 6px;
  text-align:center; cursor:pointer; font-size:0.78rem; font-weight:500;
  color:#475569; background:#fff;
}
.pay-method i { display:block; font-size:1.15rem; margin-bottom:6px; color:#1e3a5f; }
.pay-method.selected { border-color:#1e3a5f; background:#f2f6fb; color:#1e3a5f; }
.pay-method.selected i { color:#ffb74d; }

.field { margin-bottom:14px; }
.field label {
  font-size:0.82rem; font-weight:500; color:#334155;
  display:block; margin-bottom:6px;
}
.field .input-wrap {
  display:flex; align-items:center; background:#f6f8fb;
  border:1px solid #dbe3ec; border-radius:10px; padding:0 14px;
}
.field .input-wrap:focus-within { border-color:#1e3a5f; background:#fff; }
.field .input-wrap span { color:#94a3b8; font-size:0.9rem; }
.field input, .field select {
  border:none; background:transparent; outline:none;
  padding:13px 10px; width:100%; font-size:0.95rem; color:#1e293b;
}
.field select { padding-left:0; }
.change-info {
  margin-top:10px; font-size:0.85rem; padding:10px 14px;
  background:#f0fdf4; border-radius:10px; color:#166534;
  display:flex; justify-content:space-between;
}
.change-info.less { background:#fef2f2; color:#b91c1c; }
.modal-actions { display:flex; gap:10px; margin-top:22px; }
.btn-ghost {
  flex:1; background:#fff; border:1px solid #dbe3ec; padding:14px;
  border-radius:12px; font-size:0.92rem; font-weight:600; color:#475569;
  cursor:pointer;
}
.btn-ghost:hover { background:#f6f8fb; }
.btn-confirm {
  flex:2; background:#1e3a5f; color:#fff; border:none;
  padding:14px; border-radius:12px; font-size:0.95rem; font-weight:600;
  cursor:pointer; display:flex; align-items:center; justify-content:center; gap:8px;
}
.btn-confirm:hover { background:#15293f; }
.btn-confirm i { color:#ffb74d; }

/* ===== STRUK ===== */
.receipt {
  background:#fff; border-radius:14px; padding:24px 20px;
  font-family:'Courier New',monospace; color:#1e293b;
  border:1px dashed #cbd5e1; margin-bottom:18px;
}
.receipt-head { text-align:center; padding-bottom:14px; border-bottom:1px dashed #cbd5e1; margin-bottom:14px; }
.receipt-head h4 { font-size:1.05rem; font-weight:700; color:#1e3a5f; margin-bottom:2px; }
.receipt-head p { font-size:0.72rem; color:#64748b; line-height:1.5; }
.receipt-meta { font-size:0.72rem; color:#64748b; margin-bottom:12px; line-height:1.7; }
.receipt-item { font-size:0.78rem; margin-bottom:8px; }
.receipt-item .row1 { display:flex; justify-content:space-between; }
.receipt-item .row2 { display:flex; justify-content:space-between; color:#64748b; font-size:0.72rem; }
.receipt-line { border-top:1px dashed #cbd5e1; margin:12px 0; }
.receipt-total { font-size:0.85rem; }
.receipt-total .row { display:flex; justify-content:space-between; margin-bottom:6px; }
.receipt-total .row.grand {
  font-size:1.05rem; font-weight:700; color:#1e3a5f;
  padding-top:8px; border-top:1px dashed #cbd5e1; margin-top:6px;
}
.receipt-foot {
  text-align:center; font-size:0.72rem; color:#64748b;
  margin-top:16px; padding-top:12px; border-top:1px dashed #cbd5e1;
  line-height:1.7;
}

/* ===== TOAST ===== */
.toast {
  position:fixed; bottom:24px; left:50%; transform:translateX(-50%);
  background:#1e3a5f; color:#fff; padding:13px 22px; border-radius:40px;
  font-size:0.86rem; font-weight:500; display:flex; align-items:center; gap:10px;
  opacity:0; pointer-events:none; transition:opacity 0.2s; z-index:200;
  box-shadow:0 10px 25px -8px rgba(0,0,0,0.35); max-width:90vw;
}
.toast.show { opacity:1; }
.toast i { color:#ffb74d; }

/* ===== RESPONSIF ===== */
@media (max-width: 900px) {
  .pos-layout { grid-template-columns:1fr; }
  .cart-panel { order:-1; }
}
@media (max-width: 520px) {
  .topbar { padding:0 12px; height:auto; min-height:60px; flex-wrap:wrap; padding-top:10px; padding-bottom:10px; gap:8px; }
  .brand h1 { font-size:1rem; }
  .topbar-right { width:100%; justify-content:space-between; }
  .mode-switch button span { display:none; }
  .mode-switch button { padding:8px 12px; }
  .user-chip span { display:none; }
  .pos-layout { padding:12px; gap:12px; }
  .panel { padding:14px; }
  .product-grid { grid-template-columns:repeat(2,1fr); gap:10px; }
  .pay-methods { grid-template-columns:1fr; }
  th, td { padding:10px 12px; }
  .cell-icon { display:none; }
}
</style>
</head>
<body>

<!-- ===== HEADER ===== -->
<header class="topbar">
  <div class="brand">
    <i class="fas fa-cash-register"></i>
    <h1>POS Kasir</h1>
  </div>
  <div class="topbar-right">
    <div class="mode-switch">
      <button id="modeKasir" class="active"><i class="fas fa-user-tie"></i> <span>Kasir</span></button>
      <button id="modeAdmin"><i class="fas fa-user-shield"></i> <span>Admin</span></button>
    </div>
    <div class="user-chip">
      <i class="fas fa-circle-user"></i>
      <span id="userName">Rina</span>
    </div>
  </div>
</header>

<!-- ============================================================ -->
<!-- ===================== HALAMAN KASIR ========================= -->
<!-- ============================================================ -->
<div class="page active" id="pageKasir">
  <main class="pos-layout">
    <!-- PRODUK -->
    <section class="panel">
      <div class="panel-head">
        <h2><i class="fas fa-store"></i> Daftar Produk</h2>
        <span class="count" id="produkCount">0 produk</span>
      </div>

      <div class="search-box">
        <i class="fas fa-search"></i>
        <input type="text" id="searchInput" placeholder="Cari nama produk...">
      </div>

      <div class="kat-bar" id="katBar">
        <button class="kat-btn active" data-kat="semua"><i class="fas fa-th-large"></i> Semua</button>
        <button class="kat-btn" data-kat="makanan"><i class="fas fa-utensils"></i> Makanan</button>
        <button class="kat-btn" data-kat="minuman"><i class="fas fa-mug-hot"></i> Minuman</button>
        <button class="kat-btn" data-kat="snack"><i class="fas fa-cookie-bite"></i> Snack</button>
      </div>

      <div class="product-grid" id="productGrid"></div>
    </section>

    <!-- KERANJANG -->
    <aside class="panel cart-panel">
      <div class="panel-head">
        <h2><i class="fas fa-shopping-cart"></i> Keranjang</h2>
        <span class="count" id="cartCount">0 item</span>
      </div>

      <div class="cart-items" id="cartItems">
        <div class="cart-empty">
          <i class="fas fa-basket-shopping"></i>
          Keranjang masih kosong.<br>Pilih produk di sebelah kiri.
        </div>
      </div>

      <div class="summary-box">
        <div class="sum-row"><span>Subtotal</span><span id="subtotalTxt">Rp 0</span></div>
        <div class="sum-row"><span>Pajak (10%)</span><span id="pajakTxt">Rp 0</span></div>
        <div class="sum-row total"><span>Total</span><span id="totalTxt">Rp 0</span></div>
      </div>

      <button class="btn-primary" id="btnBayar" disabled>
        <i class="fas fa-money-bill-wave"></i> Bayar Sekarang
      </button>
    </aside>
  </main>
</div>

<!-- ============================================================ -->
<!-- ===================== HALAMAN ADMIN ========================= -->
<!-- ============================================================ -->
<div class="page" id="pageAdmin">
  <div class="admin-wrap">
    <!-- STATISTIK -->
    <div class="stats-grid">
      <div class="stat-card">
        <div class="s-icon"><i class="fas fa-boxes-stacked"></i></div>
        <div>
          <div class="s-label">Total Produk</div>
          <div class="s-value" id="statProduk">0</div>
        </div>
      </div>
      <div class="stat-card">
        <div class="s-icon"><i class="fas fa-cubes"></i></div>
        <div>
          <div class="s-label">Total Stok</div>
          <div class="s-value" id="statStok">0</div>
        </div>
      </div>
      <div class="stat-card">
        <div class="s-icon"><i class="fas fa-triangle-exclamation"></i></div>
        <div>
          <div class="s-label">Stok Menipis</div>
          <div class="s-value" id="statLow">0</div>
        </div>
      </div>
      <div class="stat-card">
        <div class="s-icon"><i class="fas fa-money-bill-trend-up"></i></div>
        <div>
          <div class="s-label">Nilai Inventaris</div>
          <div class="s-value" id="statNilai" style="font-size:1rem;">Rp 0</div>
        </div>
      </div>
    </div>

    <!-- TOOLBAR -->
    <div class="admin-toolbar">
      <h2><i class="fas fa-list-check"></i> Manajemen Stok Produk</h2>
      <button class="btn-add" id="btnTambahProduk">
        <i class="fas fa-plus"></i> Tambah Produk
      </button>
    </div>

    <!-- TABEL -->
    <div class="table-wrap">
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
        <tbody id="adminTableBody"></tbody>
      </table>
    </div>
  </div>
</div>

<!-- ===== MODAL PEMBAYARAN ===== -->
<div class="modal-overlay" id="modalBayar">
  <div class="modal">
    <h3><i class="fas fa-money-bill-wave"></i> Pembayaran</h3>
    <p class="sub">Pilih metode pembayaran lalu konfirmasi transaksi.</p>

    <div class="pay-total">
      <span>Total Tagihan</span>
      <strong id="modalTotal">Rp 0</strong>
    </div>

    <div class="pay-methods" id="payMethods">
      <div class="pay-method selected" data-method="Tunai">
        <i class="fas fa-money-bill"></i> Tunai
      </div>
      <div class="pay-method" data-method="Debit">
        <i class="fas fa-credit-card"></i> Debit
      </div>
      <div class="pay-method" data-method="QRIS">
        <i class="fas fa-qrcode"></i> QRIS
      </div>
    </div>

    <div class="field" id="cashSection">
      <label>Uang Diterima</label>
      <div class="input-wrap">
        <span>Rp</span>
        <input type="number" id="cashInput" placeholder="0" min="0" step="1000">
      </div>
      <div class="change-info" id="changeInfo">
        <span>Kembalian</span>
        <strong id="changeTxt">Rp 0</strong>
      </div>
    </div>

    <div class="modal-actions">
      <button class="btn-ghost" id="btnBatal">Batal</button>
      <button class="btn-confirm" id="btnKonfirmasi">
        <i class="fas fa-check"></i> Konfirmasi Bayar
      </button>
    </div>
  </div>
</div>

<!-- ===== MODAL STRUK ===== -->
<div class="modal-overlay" id="modalStruk">
  <div class="modal" style="max-width:420px;">
    <h3 style="margin-bottom:16px;"><i class="fas fa-receipt"></i> Struk Pembayaran</h3>
    <div class="receipt" id="receiptContent"></div>
    <div class="modal-actions">
      <button class="btn-ghost" id="btnTutupStruk">Tutup</button>
      <button class="btn-confirm" id="btnCetak">
        <i class="fas fa-print"></i> Cetak
      </button>
    </div>
  </div>
</div>

<!-- ===== MODAL PRODUK (ADMIN) ===== -->
<div class="modal-overlay" id="modalProduk">
  <div class="modal">
    <h3><i class="fas fa-box"></i> <span id="produkModalTitle">Tambah Produk</span></h3>
    <p class="sub">Isi data produk dengan lengkap.</p>

    <input type="hidden" id="editId">

    <div class="field">
      <label>Nama Produk</label>
      <div class="input-wrap">
        <i class="fas fa-tag" style="color:#94a3b8; font-size:0.85rem;"></i>
        <input type="text" id="fNama" placeholder="Contoh: Nasi Goreng" maxlength="40">
      </div>
    </div>

    <div class="field">
      <label>Kategori</label>
      <div class="input-wrap">
        <i class="fas fa-layer-group" style="color:#94a3b8; font-size:0.85rem;"></i>
        <select id="fKategori">
          <option value="makanan">Makanan</option>
          <option value="minuman">Minuman</option>
          <option value="snack">Snack</option>
        </select>
      </div>
    </div>

    <div class="field">
      <label>Harga (Rp)</label>
      <div class="input-wrap">
        <span>Rp</span>
        <input type="number" id="fHarga" placeholder="0" min="0" step="500">
      </div>
    </div>

    <div class="field">
      <label>Stok</label>
      <div class="input-wrap">
        <i class="fas fa-cubes" style="color:#94a3b8; font-size:0.85rem;"></i>
        <input type="number" id="fStok" placeholder="0" min="0">
      </div>
    </div>

    <div class="modal-actions">
      <button class="btn-ghost" id="btnBatalProduk">Batal</button>
      <button class="btn-confirm" id="btnSimpanProduk">
        <i class="fas fa-floppy-disk"></i> Simpan
      </button>
    </div>
  </div>
</div>

<div class="toast" id="toast"><i class="fas fa-circle-check"></i> <span id="toastTxt"></span></div>

<script>
(function(){
  /* =========================================================
     STATE
  ========================================================= */
  const STORAGE_KEY = 'pos_produk_demo';

  const defaultProduk = [
    { id:1, nama:'Nasi Goreng Spesial', harga:25000, kategori:'makanan', stok:15, icon:'fa-utensils' },
    { id:2, nama:'Mie Ayam Bakso', harga:20000, kategori:'makanan', stok:12, icon:'fa-bowl-food' },
    { id:3, nama:'Ayam Geprek', harga:22000, kategori:'makanan', stok:10, icon:'fa-drumstick-bite' },
    { id:4, nama:'Sate Ayam', harga:27000, kategori:'makanan', stok:8, icon:'fa-utensils' },
    { id:5, nama:'Es Teh Manis', harga:8000, kategori:'minuman', stok:25, icon:'fa-mug-hot' },
    { id:6, nama:'Kopi Susu Gula Aren', harga:15000, kategori:'minuman', stok:18, icon:'fa-mug-saucer' },
    { id:7, nama:'Jus Alpukat', harga:18000, kategori:'minuman', stok:9, icon:'fa-glass-water' },
    { id:8, nama:'Air Mineral 600ml', harga:5000, kategori:'minuman', stok:40, icon:'fa-bottle-water' },
    { id:9, nama:'Kentang Goreng', harga:12000, kategori:'snack', stok:20, icon:'fa-cookie-bite' },
    { id:10, nama:'Pisang Goreng Keju', harga:10000, kategori:'snack', stok:14, icon:'fa-cookie-bite' },
    { id:11, nama:'Donat Gula', harga:9000, kategori:'snack', stok:16, icon:'fa-cookie' },
    { id:12, nama:'Roti Bakar', harga:13000, kategori:'snack', stok:11, icon:'fa-bread-slice' }
  ];

  let produkList = loadProduk();
  let cart = [];
  let filterKat = 'semua';
  let searchQ = '';
  let payMethod = 'Tunai';
  let lastReceipt = null;

  /* =========================================================
     UTIL
  ========================================================= */
  const rp = (n) => 'Rp ' + Number(n).toLocaleString('id-ID');

  function loadProduk() {
    try {
      const raw = localStorage.getItem(STORAGE_KEY);
      if (raw) return JSON.parse(raw);
    } catch(e){}
    localStorage.setItem(STORAGE_KEY, JSON.stringify(defaultProduk));
    return JSON.parse(JSON.stringify(defaultProduk));
  }
  function saveProduk() {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(produkList));
  }

  let toastTimer = null;
  function showToast(msg, icon='fa-circle-check') {
    const t = document.getElementById('toast');
    document.getElementById('toastTxt').textContent = msg;
    t.querySelector('i').className = 'fas ' + icon;
    t.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => t.classList.remove('show'), 2200);
  }

  const iconByKategori = {
    makanan: 'fa-utensils',
    minuman: 'fa-mug-hot',
    snack: 'fa-cookie-bite'
  };

  /* =========================================================
     MODE SWITCH (KASIR / ADMIN)
  ========================================================= */
  const btnModeKasir = document.getElementById('modeKasir');
  const btnModeAdmin = document.getElementById('modeAdmin');
  const pageKasir = document.getElementById('pageKasir');
  const pageAdmin = document.getElementById('pageAdmin');

  btnModeKasir.addEventListener('click', () => {
    btnModeKasir.classList.add('active');
    btnModeAdmin.classList.remove('active');
    pageKasir.classList.add('active');
    pageAdmin.classList.remove('active');
    renderProduk();
  });

  btnModeAdmin.addEventListener('click', () => {
    btnModeAdmin.classList.add('active');
    btnModeKasir.classList.remove('active');
    pageAdmin.classList.add('active');
    pageKasir.classList.remove('active');
    renderAdmin();
  });

  /* =========================================================
     RENDER PRODUK (KASIR)
  ========================================================= */
  function renderProduk() {
    const grid = document.getElementById('productGrid');
    let data = produkList.slice();

    if (filterKat !== 'semua') data = data.filter(p => p.kategori === filterKat);
    if (searchQ.trim()) {
      const q = searchQ.toLowerCase();
      data = data.filter(p => p.nama.toLowerCase().includes(q));
    }

    document.getElementById('produkCount').textContent = data.length + ' produk';

    if (data.length === 0) {
      grid.innerHTML = '<div style="grid-column:1/-1; text-align:center; padding:40px 0; color:#94a3b8; font-size:0.88rem;"><i class="fas fa-box-open" style="font-size:2rem; display:block; margin-bottom:10px; color:#cbd5e1;"></i>Tidak ada produk ditemukan</div>';
      return;
    }

    grid.innerHTML = data.map(p => {
      const out = p.stok <= 0;
      const low = p.stok > 0 && p.stok <= 5;
      return `
        <div class="product-card ${out ? 'out' : ''}" data-id="${p.id}">
          <div class="p-icon"><i class="fas ${p.icon || iconByKategori[p.kategori] || 'fa-box'}"></i></div>
          <h3>${p.nama}</h3>
          <div class="p-price">${rp(p.harga)}</div>
          <div class="p-stock ${low ? 'low' : ''}">Stok: ${p.stok}</div>
        </div>
      `;
    }).join('');

    document.querySelectorAll('.product-card').forEach(card => {
      if (card.classList.contains('out')) return;
      card.addEventListener('click', () => {
        const id = parseInt(card.dataset.id);
        tambahKeCart(id);
      });
    });
  }

  /* =========================================================
     RENDER CART
  ========================================================= */
  function renderCart() {
    const container = document.getElementById('cartItems');
    const totalQty = cart.reduce((s, it) => s + it.qty, 0);
    document.getElementById('cartCount').textContent = totalQty + ' item';

    if (cart.length === 0) {
      container.innerHTML = `
        <div class="cart-empty">
          <i class="fas fa-basket-shopping"></i>
          Keranjang masih kosong.<br>Pilih produk di sebelah kiri.
        </div>`;
    } else {
      container.innerHTML = cart.map(it => `
        <div class="cart-row" data-id="${it.id}">
          <div>
            <div class="nama">${it.nama}</div>
            <div class="harga">${rp(it.harga)}</div>
            <div class="qty-ctrl">
              <button class="qty-btn" data-act="min" data-id="${it.id}"><i class="fas fa-minus"></i></button>
              <span class="qty-num">${it.qty}</span>
              <button class="qty-btn" data-act="plus" data-id="${it.id}"><i class="fas fa-plus"></i></button>
            </div>
          </div>
          <div class="kanan">
            <button class="btn-del" data-act="del" data-id="${it.id}"><i class="fas fa-trash"></i></button>
            <div class="subtotal">${rp(it.qty * it.harga)}</div>
          </div>
        </div>
      `).join('');
    }

    container.querySelectorAll('button[data-act]').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = parseInt(btn.dataset.id);
        const act = btn.dataset.act;
        if (act === 'plus') tambahKeCart(id);
        else if (act === 'min') kurangCart(id);
        else if (act === 'del') hapusCart(id);
      });
    });

    const subtotal = cart.reduce((s, it) => s + it.qty * it.harga, 0);
    const pajak = Math.round(subtotal * 0.1);
    const total = subtotal + pajak;

    document.getElementById('subtotalTxt').textContent = rp(subtotal);
    document.getElementById('pajakTxt').textContent = rp(pajak);
    document.getElementById('totalTxt').textContent = rp(total);
    document.getElementById('btnBayar').disabled = cart.length === 0;
  }

  /* =========================================================
     AKSI CART
  ========================================================= */
  function tambahKeCart(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (p.stok <= 0) { showToast('Stok habis', 'fa-circle-exclamation'); return; }

    const existing = cart.find(x => x.id === id);
    if (existing) {
      if (existing.qty >= p.stok) {
        showToast(`Stok ${p.nama} tersisa ${p.stok}`, 'fa-circle-exclamation');
        return;
      }
      existing.qty++;
    } else {
      cart.push({ id: p.id, nama: p.nama, harga: p.harga, qty: 1 });
    }
    p.stok--;
    saveProduk();
    renderProduk();
    renderCart();
  }

  function kurangCart(id) {
    const idx = cart.findIndex(x => x.id === id);
    if (idx < 0) return;
    const p = produkList.find(x => x.id === id);
    if (cart[idx].qty <= 1) {
      cart.splice(idx, 1);
    } else {
      cart[idx].qty--;
    }
    if (p) p.stok++;
    saveProduk();
    renderProduk();
    renderCart();
  }

  function hapusCart(id) {
    const idx = cart.findIndex(x => x.id === id);
    if (idx < 0) return;
    const item = cart[idx];
    const p = produkList.find(x => x.id === id);
    if (p) p.stok += item.qty;
    cart.splice(idx, 1);
    saveProduk();
    renderProduk();
    renderCart();
  }

  /* =========================================================
     SEARCH & FILTER
  ========================================================= */
  document.getElementById('searchInput').addEventListener('input', e => {
    searchQ = e.target.value;
    renderProduk();
  });

  document.querySelectorAll('#katBar .kat-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('#katBar .kat-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      filterKat = btn.dataset.kat;
      renderProduk();
    });
  });

  /* =========================================================
     MODAL PEMBAYARAN
  ========================================================= */
  const modalBayar = document.getElementById('modalBayar');
  const cashInput = document.getElementById('cashInput');
  const changeInfo = document.getElementById('changeInfo');
  const changeTxt = document.getElementById('changeTxt');

  document.getElementById('btnBayar').addEventListener('click', () => {
    if (cart.length === 0) return;
    const subtotal = cart.reduce((s, it) => s + it.qty * it.harga, 0);
    const total = subtotal + Math.round(subtotal * 0.1);
    document.getElementById('modalTotal').textContent = rp(total);
    cashInput.value = '';
    updateChange();
    modalBayar.classList.add('show');
  });

  document.getElementById('btnBatal').addEventListener('click', () => {
    modalBayar.classList.remove('show');
  });

  document.querySelectorAll('.pay-method').forEach(m => {
    m.addEventListener('click', () => {
      document.querySelectorAll('.pay-method').forEach(x => x.classList.remove('selected'));
      m.classList.add('selected');
      payMethod = m.dataset.method;
      const cashSec = document.getElementById('cashSection');
      cashSec.style.display = (payMethod === 'Tunai') ? 'block' : 'none';
    });
  });

  function getTotal() {
    const subtotal = cart.reduce((s, it) => s + it.qty * it.harga, 0);
    return subtotal + Math.round(subtotal * 0.1);
  }

  function updateChange() {
    if (payMethod !== 'Tunai') return;
    const total = getTotal();
    const cash = parseInt(cashInput.value) || 0;
    const diff = cash - total;
    if (cash === 0) {
      changeInfo.classList.remove('less');
      changeTxt.textContent = rp(0);
      return;
    }
    if (diff < 0) {
      changeInfo.classList.add('less');
      changeTxt.textContent = 'Kurang ' + rp(Math.abs(diff));
    } else {
      changeInfo.classList.remove('less');
      changeTxt.textContent = rp(diff);
    }
  }

  cashInput.addEventListener('input', updateChange);

  document.getElementById('btnKonfirmasi').addEventListener('click', () => {
    const total = getTotal();
    if (payMethod === 'Tunai') {
      const cash = parseInt(cashInput.value) || 0;
      if (cash < total) {
        showToast('Uang diterima kurang dari total', 'fa-circle-exclamation');
        return;
      }
    }
    prosesBayar(total);
  });

  /* =========================================================
     PROSES BAYAR & STRUK
  ========================================================= */
  function prosesBayar(total) {
    const subtotal = cart.reduce((s, it) => s + it.qty * it.harga, 0);
    const pajak = total - subtotal;
    const cash = parseInt(cashInput.value) || 0;
    const kembalian = payMethod === 'Tunai' ? cash - total : 0;

    const now = new Date();
    const receiptData = {
      nomor: 'INV-' + now.getFullYear() + String(now.getMonth()+1).padStart(2,'0') + String(now.getDate()).padStart(2,'0') + '-' + String(Math.floor(Math.random()*9000)+1000),
      tanggal: now.toLocaleString('id-ID', { dateStyle:'long', timeStyle:'short' }),
      kasir: document.getElementById('userName').textContent,
      items: cart.map(it => ({ ...it })),
      subtotal, pajak, total,
      metode: payMethod,
      cash: payMethod === 'Tunai' ? cash : total,
      kembalian
    };
    lastReceipt = receiptData;

    modalBayar.classList.remove('show');
    tampilkanStruk(receiptData);

    // Kosongkan cart (stok sudah dikurangi saat tambah ke cart)
    cart = [];
    renderCart();
    renderProduk();
    showToast('Transaksi berhasil', 'fa-circle-check');
  }

  function tampilkanStruk(data) {
    const container = document.getElementById('receiptContent');
    const itemsHtml = data.items.map(it => `
      <div class="receipt-item">
        <div class="row1"><span>${it.nama}</span><span>${rp(it.qty * it.harga)}</span></div>
        <div class="row2"><span>${it.qty} x ${rp(it.harga)}</span></div>
      </div>
    `).join('');

    container.innerHTML = `
      <div class="receipt-head">
        <h4>TOKO SERBA ADA</h4>
        <p>Jl. Merdeka No. 123, Jakarta<br>Telp: 021-1234567</p>
      </div>
      <div class="receipt-meta">
        No: ${data.nomor}<br>
        ${data.tanggal}<br>
        Kasir: ${data.kasir}
      </div>
      <div class="receipt-line"></div>
      ${itemsHtml}
      <div class="receipt-line"></div>
      <div class="receipt-total">
        <div class="row"><span>Subtotal</span><span>${rp(data.subtotal)}</span></div>
        <div class="row"><span>Pajak 10%</span><span>${rp(data.pajak)}</span></div>
        <div class="row grand"><span>TOTAL</span><span>${rp(data.total)}</span></div>
        <div class="row" style="margin-top:8px;"><span>Bayar (${data.metode})</span><span>${rp(data.cash)}</span></div>
        <div class="row"><span>Kembalian</span><span>${rp(data.kembalian)}</span></div>
      </div>
      <div class="receipt-foot">
        Terima kasih telah berbelanja<br>
        Barang yang sudah dibeli tidak dapat ditukar
      </div>
    `;

    document.getElementById('modalStruk').classList.add('show');
  }

  document.getElementById('btnTutupStruk').addEventListener('click', () => {
    document.getElementById('modalStruk').classList.remove('show');
  });

  document.getElementById('btnCetak').addEventListener('click', () => {
    if (!lastReceipt) return;
    const w = window.open('', '', 'width=400,height=600');
    w.document.write('<pre style="font-family:Courier New,monospace; font-size:12px; padding:20px;">' + document.getElementById('receiptContent').innerText + '</pre>');
    w.document.close();
    w.focus();
    w.print();
    showToast('Struk dikirim ke printer', 'fa-print');
  });

  /* =========================================================
     ADMIN - RENDER
  ========================================================= */
  function renderAdmin() {
    // Stats
    const totalProduk = produkList.length;
    const totalStok = produkList.reduce((s, p) => s + p.stok, 0);
    const lowStok = produkList.filter(p => p.stok > 0 && p.stok <= 5).length;
    const nilai = produkList.reduce((s, p) => s + p.stok * p.harga, 0);

    document.getElementById('statProduk').textContent = totalProduk;
    document.getElementById('statStok').textContent = totalStok;
    document.getElementById('statLow').textContent = lowStok;
    document.getElementById('statNilai').textContent = rp(nilai);

    // Table
    const tbody = document.getElementById('adminTableBody');
    if (produkList.length === 0) {
      tbody.innerHTML = '<tr><td colspan="5" style="text-align:center; padding:30px; color:#94a3b8;">Belum ada produk</td></tr>';
      return;
    }

    tbody.innerHTML = produkList.map(p => {
      let stockClass = 'ok', stockLabel = p.stok + ' unit';
      if (p.stok <= 0) { stockClass = 'out'; stockLabel = 'Habis'; }
      else if (p.stok <= 5) { stockClass = 'low'; stockLabel = p.stok + ' unit'; }

      return `
        <tr>
          <td>
            <span class="cell-icon"><i class="fas ${p.icon || iconByKategori[p.kategori] || 'fa-box'}"></i></span>
            <strong>${p.nama}</strong>
          </td>
          <td><span class="badge-kat ${p.kategori}">${p.kategori.charAt(0).toUpperCase() + p.kategori.slice(1)}</span></td>
          <td>${rp(p.harga)}</td>
          <td><span class="stock-pill ${stockClass}">${stockLabel}</span></td>
          <td style="text-align:right;">
            <div class="row-actions" style="justify-content:flex-end;">
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
        if (btn.dataset.act === 'edit') bukaModalProduk(id);
        else if (btn.dataset.act === 'del') hapusProduk(id);
      });
    });
  }

  /* =========================================================
     ADMIN - MODAL PRODUK
  ========================================================= */
  const modalProduk = document.getElementById('modalProduk');

  function bukaModalProduk(id) {
    const isEdit = id !== undefined && id !== null;
    document.getElementById('produkModalTitle').textContent = isEdit ? 'Edit Produk' : 'Tambah Produk';
    document.getElementById('editId').value = isEdit ? id : '';
    document.getElementById('fNama').value = '';
    document.getElementById('fKategori').value = 'makanan';
    document.getElementById('fHarga').value = '';
    document.getElementById('fStok').value = '';

    if (isEdit) {
      const p = produkList.find(x => x.id === id);
      if (p) {
        document.getElementById('fNama').value = p.nama;
        document.getElementById('fKategori').value = p.kategori;
        document.getElementById('fHarga').value = p.harga;
        document.getElementById('fStok').value = p.stok;
      }
    }
    modalProduk.classList.add('show');
  }

  document.getElementById('btnTambahProduk').addEventListener('click', () => bukaModalProduk(null));
  document.getElementById('btnBatalProduk').addEventListener('click', () => modalProduk.classList.remove('show'));

  document.getElementById('btnSimpanProduk').addEventListener('click', () => {
    const editId = document.getElementById('editId').value;
    const nama = document.getElementById('fNama').value.trim();
    const kategori = document.getElementById('fKategori').value;
    const harga = parseInt(document.getElementById('fHarga').value);
    const stok = parseInt(document.getElementById('fStok').value);

    if (!nama) { showToast('Nama produk harus diisi', 'fa-circle-exclamation'); return; }
    if (isNaN(harga) || harga < 0) { showToast('Harga tidak valid', 'fa-circle-exclamation'); return; }
    if (isNaN(stok) || stok < 0) { showToast('Stok tidak valid', 'fa-circle-exclamation'); return; }

    const icon = iconByKategori[kategori] || 'fa-box';

    if (editId) {
      const p = produkList.find(x => x.id === parseInt(editId));
      if (p) {
        Object.assign(p, { nama, kategori, harga, stok, icon });
      }
      showToast('Produk diperbarui', 'fa-circle-check');
    } else {
      const newId = produkList.length > 0 ? Math.max(...produkList.map(p => p.id)) + 1 : 1;
      produkList.push({ id: newId, nama, kategori, harga, stok, icon });
      showToast('Produk ditambahkan', 'fa-circle-check');
    }

    saveProduk();
    modalProduk.classList.remove('show');
    renderAdmin();
    renderProduk();
  });

  function hapusProduk(id) {
    const p = produkList.find(x => x.id === id);
    if (!p) return;
    if (!confirm(`Hapus produk "${p.nama}"?`)) return;
    produkList = produkList.filter(x => x.id !== id);
    saveProduk();
    renderAdmin();
    renderProduk();
    showToast('Produk dihapus', 'fa-trash');
  }

  /* =========================================================
     INIT
  ========================================================= */
  renderProduk();
  renderCart();
  renderAdmin();
})();
</script>
@endverbatim
@include('demo.pos.partials.demo-bar')
</body>
</html>