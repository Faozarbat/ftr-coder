@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="theme-color" content="#0a7d3e">
<title>FreshMart - Grocery Platform</title>
<link rel="manifest" href='data:application/manifest+json,{"name":"FreshMart","short_name":"FreshMart","start_url":".","display":"standalone","background_color":"#ffffff","theme_color":"#0a7d3e"}'>
<style>
*{margin:0;padding:0;box-sizing:border-box;-webkit-tap-highlight-color:transparent}
:root{
  --primary:#0a7d3e;--primary-dark:#065c2c;--primary-light:#e8f5ee;
  --accent:#f59e0b;--danger:#dc2626;--info:#2563eb;
  --text:#0f172a;--text-muted:#64748b;--border:#e2e8f0;
  --bg:#f1f5f9;--card:#fff;--radius:12px;
  --shadow:0 1px 3px rgba(0,0,0,.06),0 1px 2px rgba(0,0,0,.04);
  --shadow-lg:0 10px 30px rgba(0,0,0,.12);
}
body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;background:var(--bg);color:var(--text);font-size:14px;line-height:1.5;overflow-x:hidden}
button{font-family:inherit;cursor:pointer;border:none;background:none;color:inherit}
input,select,textarea{font-family:inherit;font-size:14px;outline:none}
.hidden{display:none!important}
.flex{display:flex}.between{justify-content:space-between}.center{align-items:center}
.gap-4{gap:4px}.gap-8{gap:8px}.gap-12{gap:12px}

/* ============ APP CONTAINER ============ */
#app{min-height:100vh;padding-bottom:74px}

/* ============ HEADER ============ */
.app-header{position:sticky;top:0;z-index:100;background:var(--primary);color:#fff;padding:10px 14px;box-shadow:var(--shadow)}
.header-top{display:flex;align-items:center;gap:8px;margin-bottom:8px}
.logo{font-weight:800;font-size:17px;letter-spacing:-.4px}
.logo span{color:#fde68a}
.header-icon{width:36px;height:36px;border-radius:50%;background:rgba(255,255,255,.14);display:flex;align-items:center;justify-content:center;position:relative;color:#fff;transition:.15s}
.header-icon:active{transform:scale(.9)}
.badge-count{position:absolute;top:-3px;right:-3px;background:var(--accent);color:#fff;font-size:10px;font-weight:700;min-width:18px;height:18px;border-radius:9px;display:flex;align-items:center;justify-content:center;padding:0 4px;border:2px solid var(--primary)}
.header-actions{margin-left:auto;display:flex;gap:6px}
.search-bar{display:flex;align-items:center;gap:8px;background:#fff;border-radius:10px;padding:9px 12px}
.search-bar input{flex:1;border:none;background:transparent;font-size:13px;color:var(--text)}
.location-bar{display:flex;align-items:center;gap:5px;font-size:11px;color:rgba(255,255,255,.92);margin-top:6px}
.location-bar strong{color:#fff;font-weight:600}

/* ============ MODE SWITCH ============ */
.mode-switch{display:flex;background:rgba(255,255,255,.12);border-radius:8px;padding:3px;margin-bottom:8px;font-size:11px;font-weight:700}
.mode-switch button{flex:1;padding:6px;border-radius:6px;color:rgba(255,255,255,.7);transition:.15s}
.mode-switch button.active{background:#fff;color:var(--primary)}

/* ============ BOTTOM NAV ============ */
.bottom-nav{position:fixed;bottom:0;left:0;right:0;background:#fff;z-index:200;display:flex;border-top:1px solid var(--border);padding:5px 0 6px;box-shadow:0 -2px 12px rgba(0,0,0,.06)}
.nav-item{flex:1;display:flex;flex-direction:column;align-items:center;gap:2px;color:var(--text-muted);font-size:10px;font-weight:600;padding:5px 0;position:relative}
.nav-item.active{color:var(--primary)}
.nav-item .nav-icon{font-size:19px;display:flex}
.nav-item .badge-count{top:0;right:calc(50% - 22px);border-color:#fff}

/* ============ CATEGORY SCROLL ============ */
.category-scroll{background:#fff;padding:10px 0;overflow-x:auto;white-space:nowrap;scrollbar-width:none;border-bottom:1px solid var(--border)}
.category-scroll::-webkit-scrollbar{display:none}
.cat-chip{display:inline-flex;flex-direction:column;align-items:center;gap:5px;padding:0 12px;font-size:11px;color:var(--text-muted);font-weight:500}
.cat-chip .cat-icon{width:48px;height:48px;border-radius:12px;background:var(--primary-light);display:flex;align-items:center;justify-content:center;font-size:20px;transition:.15s}
.cat-chip.active .cat-icon{background:var(--primary);color:#fff}
.cat-chip.active{color:var(--primary);font-weight:700}

/* ============ SECTION ============ */
.section{padding:14px}
.section-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:10px}
.section-title{font-size:15px;font-weight:700}
.section-link{font-size:12px;color:var(--primary);font-weight:700}

/* ============ FILTER ROW ============ */
.filter-row{display:flex;gap:6px;overflow-x:auto;padding:10px 14px;scrollbar-width:none;background:#fff;border-bottom:1px solid var(--border)}
.filter-row::-webkit-scrollbar{display:none}
.filter-chip{flex-shrink:0;padding:6px 12px;border-radius:18px;border:1px solid var(--border);background:#fff;font-size:11px;font-weight:600;color:var(--text-muted)}
.filter-chip.active{background:var(--primary);color:#fff;border-color:var(--primary)}

/* ============ PRODUCT GRID ============ */
.product-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:10px}
@media(min-width:640px){.product-grid{grid-template-columns:repeat(3,1fr)}}
@media(min-width:900px){.product-grid{grid-template-columns:repeat(4,1fr)}}
.product-card{background:var(--card);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow);display:flex;flex-direction:column;position:relative;transition:.15s}
.product-card:active{transform:scale(.98)}
.product-img{aspect-ratio:1;background:var(--primary-light);display:flex;align-items:center;justify-content:center;font-size:44px;position:relative}
.discount-tag{position:absolute;top:6px;left:6px;background:var(--danger);color:#fff;font-size:10px;font-weight:700;padding:3px 6px;border-radius:6px}
.stock-tag{position:absolute;top:6px;right:6px;background:rgba(0,0,0,.75);color:#fff;font-size:9px;font-weight:600;padding:3px 6px;border-radius:6px}
.stock-tag.low{background:var(--danger)}
.product-info{padding:9px;display:flex;flex-direction:column;gap:5px;flex:1}
.product-name{font-size:12px;font-weight:600;line-height:1.3;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;min-height:32px}
.product-unit{font-size:10px;color:var(--text-muted)}
.product-price{display:flex;align-items:baseline;gap:5px;flex-wrap:wrap}
.price-now{font-size:14px;font-weight:800;color:var(--primary)}
.price-old{font-size:10px;color:var(--text-muted);text-decoration:line-through}
.product-rating{display:flex;align-items:center;gap:3px;font-size:10px;color:var(--text-muted)}
.stars{color:var(--accent);letter-spacing:-1px}
.product-footer{margin-top:auto;display:flex;gap:5px;align-items:center}
.qty-control{display:flex;align-items:center;border:1px solid var(--border);border-radius:8px;overflow:hidden}
.qty-btn{width:26px;height:30px;color:var(--primary);font-size:15px;font-weight:700}
.qty-btn:active{background:var(--primary-light)}
.qty-val{width:24px;text-align:center;font-weight:700;font-size:12px}
.btn-add{flex:1;background:var(--primary);color:#fff;border-radius:8px;padding:7px;font-size:11px;font-weight:700;display:flex;align-items:center;justify-content:center;gap:4px}
.btn-add:active{background:var(--primary-dark)}

/* ============ BANNER ============ */
.promo-banner{margin:14px;border-radius:var(--radius);background:var(--primary-dark);color:#fff;padding:18px;position:relative;overflow:hidden}
.promo-banner h3{font-size:15px;font-weight:800;margin-bottom:4px}
.promo-banner p{font-size:11px;opacity:.92;margin-bottom:10px}
.promo-btn{background:#fff;color:var(--primary);padding:7px 14px;border-radius:8px;font-size:11px;font-weight:700}

/* ============ DRAWER ============ */
.drawer-overlay{position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:300;opacity:0;visibility:hidden;transition:.22s}
.drawer-overlay.open{opacity:1;visibility:visible}
.drawer{position:fixed;bottom:0;left:0;right:0;background:#fff;z-index:301;border-radius:18px 18px 0 0;max-height:88vh;display:flex;flex-direction:column;transform:translateY(100%);transition:.28s cubic-bezier(.4,0,.2,1)}
.drawer.open{transform:translateY(0)}
.drawer-handle{width:38px;height:4px;background:var(--border);border-radius:2px;margin:8px auto}
.drawer-head{padding:0 14px 10px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--border)}
.drawer-title{font-size:15px;font-weight:800}
.drawer-body{flex:1;overflow-y:auto;padding:10px 14px}
.drawer-foot{padding:12px 14px;border-top:1px solid var(--border);background:#fff}
.cart-item{display:flex;gap:10px;padding:10px 0;border-bottom:1px solid var(--border)}
.cart-item-img{width:56px;height:56px;border-radius:10px;background:var(--primary-light);display:flex;align-items:center;justify-content:center;font-size:26px;flex-shrink:0}
.cart-item-info{flex:1;min-width:0}
.cart-item-name{font-size:12px;font-weight:600;margin-bottom:2px}
.cart-item-price{font-size:12px;font-weight:800;color:var(--primary);margin-top:4px}
.cart-item-actions{display:flex;flex-direction:column;align-items:flex-end;justify-content:space-between}
.btn-remove{color:var(--danger);font-size:10px;font-weight:600}
.summary-row{display:flex;justify-content:space-between;font-size:12px;margin-bottom:6px;color:var(--text-muted)}
.summary-row.total{font-size:15px;font-weight:800;color:var(--text);padding-top:8px;border-top:1px dashed var(--border);margin-top:6px}
.btn-primary{width:100%;background:var(--primary);color:#fff;border-radius:10px;padding:12px;font-size:13px;font-weight:700;display:flex;align-items:center;justify-content:center;gap:6px;margin-top:6px}
.btn-primary:active{background:var(--primary-dark)}
.btn-primary:disabled{opacity:.5;cursor:not-allowed}
.btn-secondary{width:100%;background:#fff;color:var(--primary);border:1px solid var(--primary);border-radius:10px;padding:11px;font-size:12px;font-weight:700}

/* ============ TOAST ============ */
.toast{position:fixed;bottom:90px;left:50%;transform:translateX(-50%) translateY(20px);background:var(--text);color:#fff;padding:9px 16px;border-radius:22px;font-size:12px;font-weight:600;z-index:600;opacity:0;transition:.28s;pointer-events:none;white-space:nowrap;max-width:90vw;overflow:hidden;text-overflow:ellipsis}
.toast.show{opacity:1;transform:translateX(-50%) translateY(0)}

/* ============ MODAL ============ */
.modal{position:fixed;inset:0;background:rgba(0,0,0,.55);z-index:500;display:flex;align-items:center;justify-content:center;padding:16px;opacity:0;visibility:hidden;transition:.22s}
.modal.open{opacity:1;visibility:visible}
.modal-content{background:#fff;border-radius:16px;padding:22px;max-width:440px;width:100%;transform:scale(.94);transition:.22s;max-height:90vh;overflow-y:auto}
.modal.open .modal-content{transform:scale(1)}
.modal-icon{width:56px;height:56px;border-radius:50%;background:var(--primary-light);display:flex;align-items:center;justify-content:center;margin:0 auto 12px;font-size:28px}
.modal h3{font-size:16px;font-weight:800;margin-bottom:6px;text-align:center}
.modal p{font-size:12px;color:var(--text-muted);margin-bottom:16px;text-align:center}

/* ============ SEARCH OVERLAY ============ */
.search-overlay{position:fixed;inset:0;background:#fff;z-index:500;padding:14px;transform:translateY(-100%);transition:.28s;overflow-y:auto}
.search-overlay.open{transform:translateY(0)}
.search-full{display:flex;align-items:center;gap:8px;background:var(--bg);border-radius:10px;padding:10px 12px}
.search-full input{flex:1;border:none;background:transparent;font-size:14px}
.search-results{margin-top:14px}
.search-result-item{display:flex;gap:10px;padding:9px 0;border-bottom:1px solid var(--border);cursor:pointer}
.search-result-img{width:44px;height:44px;background:var(--primary-light);border-radius:9px;display:flex;align-items:center;justify-content:center;font-size:20px;flex-shrink:0}

/* ============ EMPTY ============ */
.empty{text-align:center;padding:34px 16px;color:var(--text-muted)}
.empty-icon{font-size:40px;margin-bottom:10px;opacity:.4}
.empty-title{font-size:13px;font-weight:600;margin-bottom:4px;color:var(--text)}
.empty-desc{font-size:11px}

/* ============ ADMIN PANEL ============ */
.admin-wrap{padding:14px;max-width:1200px;margin:0 auto}
.kpi-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin-bottom:14px}
@media(min-width:640px){.kpi-grid{grid-template-columns:repeat(4,1fr)}}
.kpi-card{background:#fff;border-radius:12px;padding:14px;box-shadow:var(--shadow);position:relative;overflow:hidden}
.kpi-card .kpi-label{font-size:10px;color:var(--text-muted);font-weight:600;text-transform:uppercase;letter-spacing:.4px;margin-bottom:6px}
.kpi-card .kpi-value{font-size:20px;font-weight:800;color:var(--text);line-height:1.1}
.kpi-card .kpi-trend{font-size:10px;font-weight:700;margin-top:6px;display:inline-flex;align-items:center;gap:3px;padding:2px 6px;border-radius:6px}
.kpi-trend.up{background:#dcfce7;color:#166534}
.kpi-trend.down{background:#fee2e2;color:#991b1b}
.kpi-icon{position:absolute;top:10px;right:10px;font-size:20px;opacity:.22}

/* Admin Tabs */
.admin-tabs{display:flex;gap:4px;background:#fff;padding:5px;border-radius:10px;margin-bottom:14px;overflow-x:auto;scrollbar-width:none;box-shadow:var(--shadow)}
.admin-tabs::-webkit-scrollbar{display:none}
.admin-tab{flex-shrink:0;padding:8px 12px;border-radius:7px;font-size:12px;font-weight:700;color:var(--text-muted);white-space:nowrap}
.admin-tab.active{background:var(--primary);color:#fff}

/* Admin Card */
.admin-card{background:#fff;border-radius:12px;padding:14px;box-shadow:var(--shadow);margin-bottom:12px}
.admin-card-head{display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;flex-wrap:wrap;gap:8px}
.admin-card-title{font-size:13px;font-weight:800}
.admin-table{width:100%;border-collapse:collapse;font-size:12px}
.admin-table th{text-align:left;padding:8px 6px;border-bottom:2px solid var(--border);color:var(--text-muted);font-weight:700;font-size:10px;text-transform:uppercase;letter-spacing:.3px;white-space:nowrap}
.admin-table td{padding:9px 6px;border-bottom:1px solid var(--border);vertical-align:middle}
.admin-table tr:last-child td{border-bottom:none}
.admin-table-wrap{overflow-x:auto;margin:0 -14px;padding:0 14px}
.badge{display:inline-block;padding:3px 8px;border-radius:20px;font-size:10px;font-weight:700;white-space:nowrap}
.badge-green{background:#dcfce7;color:#166534}
.badge-yellow{background:#fef3c7;color:#92400e}
.badge-red{background:#fee2e2;color:#991b1b}
.badge-blue{background:#dbeafe;color:#1e40af}
.badge-gray{background:#f1f5f9;color:#475569}

/* Admin buttons */
.btn-sm{padding:5px 10px;border-radius:6px;font-size:11px;font-weight:700}
.btn-sm.primary{background:var(--primary);color:#fff}
.btn-sm.danger{background:var(--danger);color:#fff}
.btn-sm.outline{border:1px solid var(--border);background:#fff;color:var(--text)}
.btn-block{width:100%;padding:10px;border-radius:9px;font-size:12px;font-weight:700;background:var(--primary);color:#fff;margin-top:8px}

/* Form */
.form-group{margin-bottom:12px}
.form-label{display:block;font-size:11px;font-weight:700;color:var(--text-muted);margin-bottom:5px;text-transform:uppercase;letter-spacing:.3px}
.form-input{width:100%;padding:9px 11px;border:1px solid var(--border);border-radius:9px;font-size:13px;background:#fff;color:var(--text)}
.form-input:focus{border-color:var(--primary)}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:10px}

/* Order list */
.order-item{background:#fff;border:1px solid var(--border);border-radius:10px;padding:12px;margin-bottom:8px}
.order-head{display:flex;justify-content:space-between;align-items:flex-start;gap:8px;margin-bottom:8px}
.order-id{font-size:11px;font-weight:800;color:var(--text)}
.order-time{font-size:10px;color:var(--text-muted);margin-top:2px}
.order-body{font-size:11px;color:var(--text-muted);line-height:1.6}
.order-actions{display:flex;gap:6px;margin-top:10px;flex-wrap:wrap}

/* Staff card */
.staff-card{display:flex;align-items:center;gap:10px;padding:10px 0;border-bottom:1px solid var(--border)}
.staff-card:last-child{border-bottom:none}
.staff-avatar{width:38px;height:38px;border-radius:50%;background:var(--primary-light);display:flex;align-items:center;justify-content:center;font-weight:800;color:var(--primary);font-size:13px;flex-shrink:0}
.staff-info{flex:1;min-width:0}
.staff-name{font-size:12px;font-weight:700}
.staff-role{font-size:10px;color:var(--text-muted)}

/* Chart bars */
.chart{display:flex;align-items:flex-end;gap:6px;height:120px;padding-top:8px}
.chart-bar{flex:1;background:var(--primary-light);border-radius:6px 6px 0 0;position:relative;min-height:6px;transition:.3s}
.chart-bar.active{background:var(--primary)}
.chart-bar span{position:absolute;bottom:-18px;left:0;right:0;text-align:center;font-size:9px;color:var(--text-muted);font-weight:600}
.chart-bar b{position:absolute;top:-16px;left:0;right:0;text-align:center;font-size:9px;color:var(--text);font-weight:700}

/* Admin header */
.admin-header{background:var(--primary-dark);color:#fff;padding:12px 14px;display:flex;align-items:center;gap:10px;position:sticky;top:0;z-index:100}
.admin-header h2{font-size:15px;font-weight:800}
.admin-header p{font-size:10px;opacity:.85}

/* Alert */
.alert{padding:10px 12px;border-radius:9px;font-size:11px;font-weight:600;display:flex;align-items:flex-start;gap:8px;margin-bottom:10px}
.alert-warn{background:#fef3c7;color:#92400e}
.alert-info{background:#dbeafe;color:#1e40af}

/* Notification badge dot */
.dot{width:7px;height:7px;background:var(--danger);border-radius:50%;display:inline-block;margin-left:5px;vertical-align:middle}
</style>
</head>
<body>

<!-- =================== CUSTOMER APP =================== -->
<div id="customerApp">
  <header class="app-header">
    <div class="mode-switch">
      <button class="active" onclick="setMode('customer')">Pembeli</button>
      <button onclick="setMode('admin')">Admin / Staff</button>
    </div>
    <div class="header-top">
      <div class="logo">Fresh<span>Mart</span></div>
      <div class="header-actions">
        <button class="header-icon" onclick="openSearch()" aria-label="Cari">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        </button>
        <button class="header-icon" onclick="toggleWishlist()" aria-label="Wishlist">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
          <span class="badge-count" id="wishBadge" style="display:none">0</span>
        </button>
        <button class="header-icon" onclick="openNotifications()" aria-label="Notifikasi">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
          <span class="badge-count" id="notifBadge">3</span>
        </button>
        <button class="header-icon" onclick="toggleCart()" aria-label="Keranjang">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          <span class="badge-count" id="cartBadge" style="display:none">0</span>
        </button>
      </div>
    </div>
    <div class="search-bar" onclick="openSearch()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--text-muted)" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
      <input type="text" placeholder="Cari beras, minyak, telur..." readonly>
    </div>
    <div class="location-bar">
      <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
      Antar ke: <strong id="currentAddress">Jakarta Selatan</strong>
    </div>
  </header>

  <!-- Category -->
  <div class="category-scroll" id="catScroll"></div>

  <!-- Filter -->
  <div class="filter-row" id="filterRow">
    <button class="filter-chip active" data-sort="popular">Populer</button>
    <button class="filter-chip" data-sort="cheap">Termurah</button>
    <button class="filter-chip" data-sort="expensive">Termahal</button>
    <button class="filter-chip" data-sort="discount">Diskon</button>
    <button class="filter-chip" data-sort="rating">Rating</button>
    <button class="filter-chip" data-sort="stock">Stok Banyak</button>
  </div>

  <!-- Promo -->
  <div class="promo-banner">
    <h3>Gratis Ongkir Hari Ini</h3>
    <p>Min. belanja Rp50.000 - khusus area Jakarta</p>
    <button class="promo-btn" onclick="claimVoucher()">Klaim Voucher</button>
  </div>

  <!-- Products -->
  <section class="section">
    <div class="section-head">
      <div class="section-title" id="sectionTitle">Produk Populer</div>
      <button class="section-link" onclick="loadMore()">Lihat Semua</button>
    </div>
    <div class="product-grid" id="productGrid"></div>
  </section>
</div>

<!-- =================== ADMIN APP =================== -->
<div id="adminApp" class="hidden">
  <header class="admin-header">
    <div class="logo" style="flex:1">Fresh<span>Mart</span> <span style="font-size:10px;font-weight:600;opacity:.7">Dashboard</span></div>
    <div class="mode-switch" style="margin:0;width:190px">
      <button onclick="setMode('customer')">Pembeli</button>
      <button class="active">Admin / Staff</button>
    </div>
  </header>

  <div class="admin-wrap">
    <!-- KPI Cards -->
    <div class="kpi-grid">
      <div class="kpi-card">
        <div class="kpi-label">Penjualan Hari Ini</div>
        <div class="kpi-value" id="kpiSales">Rp0</div>
        <div class="kpi-trend up">+12.5% vs kemarin</div>
        <div class="kpi-icon">$</div>
      </div>
      <div class="kpi-card">
        <div class="kpi-label">Pesanan Baru</div>
        <div class="kpi-value" id="kpiOrders">0</div>
        <div class="kpi-trend up">+8 pesanan</div>
        <div class="kpi-icon">#</div>
      </div>
      <div class="kpi-card">
        <div class="kpi-label">Produk Aktif</div>
        <div class="kpi-value" id="kpiProducts">0</div>
        <div class="kpi-trend up">Semua aktif</div>
        <div class="kpi-icon">=</div>
      </div>
      <div class="kpi-card">
        <div class="kpi-label">Stok Rendah</div>
        <div class="kpi-value" id="kpiLowStock" style="color:var(--danger)">0</div>
        <div class="kpi-trend down">Perlu restock</div>
        <div class="kpi-icon">!</div>
      </div>
    </div>

    <!-- Tabs -->
    <div class="admin-tabs" id="adminTabs">
      <button class="admin-tab active" data-tab="dashboard">Dashboard</button>
      <button class="admin-tab" data-tab="orders">Pesanan <span class="dot"></span></button>
      <button class="admin-tab" data-tab="products">Produk</button>
      <button class="admin-tab" data-tab="inventory">Inventory</button>
      <button class="admin-tab" data-tab="customers">Pelanggan</button>
      <button class="admin-tab" data-tab="staff">Staff</button>
      <button class="admin-tab" data-tab="vouchers">Voucher</button>
      <button class="admin-tab" data-tab="reports">Laporan</button>
      <button class="admin-tab" data-tab="settings">Pengaturan</button>
    </div>

    <div id="adminContent"></div>
  </div>
</div>

<!-- =================== CART DRAWER =================== -->
<div class="drawer-overlay" id="drawerOverlay" onclick="toggleCart()"></div>
<aside class="drawer" id="cartDrawer">
  <div class="drawer-handle"></div>
  <div class="drawer-head">
    <div class="drawer-title">Keranjang (<span id="cartCount">0</span>)</div>
    <button class="header-icon" style="background:var(--bg);color:var(--text);width:32px;height:32px" onclick="toggleCart()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="drawer-body" id="cartBody"></div>
  <div class="drawer-foot" id="cartFoot" style="display:none">
    <div class="summary-row"><span>Subtotal</span><span id="subtotal">Rp0</span></div>
    <div class="summary-row"><span>Ongkir</span><span id="ongkir">Rp0</span></div>
    <div class="summary-row"><span>Diskon</span><span id="diskon" style="color:var(--primary)">-Rp0</span></div>
    <div class="summary-row total"><span>Total</span><span id="total">Rp0</span></div>
    <button class="btn-primary" onclick="openCheckout()">
      Checkout Sekarang
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
    </button>
  </div>
</aside>

<!-- =================== WISHLIST DRAWER =================== -->
<div class="drawer-overlay" id="wishOverlay" onclick="toggleWishlist()"></div>
<aside class="drawer" id="wishDrawer">
  <div class="drawer-handle"></div>
  <div class="drawer-head">
    <div class="drawer-title">Wishlist</div>
    <button class="header-icon" style="background:var(--bg);color:var(--text);width:32px;height:32px" onclick="toggleWishlist()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="drawer-body" id="wishBody"></div>
</aside>

<!-- =================== NOTIFICATIONS DRAWER =================== -->
<div class="drawer-overlay" id="notifOverlay" onclick="openNotifications()"></div>
<aside class="drawer" id="notifDrawer">
  <div class="drawer-handle"></div>
  <div class="drawer-head">
    <div class="drawer-title">Notifikasi</div>
    <button class="header-icon" style="background:var(--bg);color:var(--text);width:32px;height:32px" onclick="openNotifications()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="drawer-body" id="notifBody"></div>
</aside>

<!-- =================== SEARCH OVERLAY =================== -->
<div class="search-overlay" id="searchOverlay">
  <div class="search-full">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--text-muted)" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
    <input type="text" id="searchInput" placeholder="Cari produk..." oninput="handleSearch(this.value)">
    <button class="btn-sm outline" onclick="closeSearch()">Batal</button>
  </div>
  <div style="margin-top:12px">
    <div style="font-size:11px;color:var(--text-muted);font-weight:700;margin-bottom:8px;text-transform:uppercase">Pencarian Populer</div>
    <div style="display:flex;flex-wrap:wrap;gap:6px">
      <button class="filter-chip" onclick="quickSearch('beras')">beras</button>
      <button class="filter-chip" onclick="quickSearch('minyak')">minyak</button>
      <button class="filter-chip" onclick="quickSearch('telur')">telur</button>
      <button class="filter-chip" onclick="quickSearch('gula')">gula</button>
      <button class="filter-chip" onclick="quickSearch('susu')">susu</button>
    </div>
  </div>
  <div class="search-results" id="searchResults"></div>
</div>

<!-- =================== CHECKOUT MODAL =================== -->
<div class="modal" id="checkoutModal">
  <div class="modal-content">
    <div class="modal-icon">OK</div>
    <h3>Pesanan Berhasil Dibuat</h3>
    <p>Order ID: <b id="orderIdDisplay">-</b><br>Estimasi tiba dalam 1-2 jam. Anda akan menerima notifikasi saat kurir dalam perjalanan.</p>
    <button class="btn-primary" onclick="closeCheckout()">Lacak Pesanan</button>
    <button class="btn-secondary" style="margin-top:8px" onclick="closeCheckout()">Kembali Belanja</button>
  </div>
</div>

<!-- =================== PRODUCT EDIT MODAL (ADMIN) =================== -->
<div class="modal" id="productModal">
  <div class="modal-content">
    <h3 id="productModalTitle">Edit Produk</h3>
    <p style="text-align:left;margin-bottom:14px">Ubah data produk</p>
    <div class="form-group">
      <label class="form-label">Nama Produk</label>
      <input class="form-input" id="pmName" type="text">
    </div>
    <div class="form-row">
      <div class="form-group">
        <label class="form-label">Harga</label>
        <input class="form-input" id="pmPrice" type="number">
      </div>
      <div class="form-group">
        <label class="form-label">Stok</label>
        <input class="form-input" id="pmStock" type="number">
      </div>
    </div>
    <div class="form-group">
      <label class="form-label">Kategori</label>
      <select class="form-input" id="pmCat"></select>
    </div>
    <button class="btn-primary" onclick="saveProduct()">Simpan Perubahan</button>
    <button class="btn-secondary" style="margin-top:8px" onclick="closeProductModal()">Batal</button>
  </div>
</div>

<!-- =================== STAFF MODAL =================== -->
<div class="modal" id="staffModal">
  <div class="modal-content">
    <h3>Tambah Staff Baru</h3>
    <p style="text-align:left;margin-bottom:14px">Isi data staff</p>
    <div class="form-group">
      <label class="form-label">Nama Lengkap</label>
      <input class="form-input" id="sfName" type="text" placeholder="Contoh: Budi Santoso">
    </div>
    <div class="form-group">
      <label class="form-label">Email</label>
      <input class="form-input" id="sfEmail" type="email" placeholder="budi@freshmart.id">
    </div>
    <div class="form-group">
      <label class="form-label">Role</label>
      <select class="form-input" id="sfRole">
        <option>Kasir</option>
        <option>Admin Gudang</option>
        <option>Kurir</option>
        <option>Customer Service</option>
        <option>Manager</option>
      </select>
    </div>
    <button class="btn-primary" onclick="saveStaff()">Tambah Staff</button>
    <button class="btn-secondary" style="margin-top:8px" onclick="closeStaffModal()">Batal</button>
  </div>
</div>

<!-- =================== TOAST =================== -->
<div class="toast" id="toast"></div>

<script>
/* ==================== DATA ==================== */
const CATEGORIES = [
  {id:'all',name:'Semua',icon:'🛒'},
  {id:'beras',name:'Beras',icon:'🍚'},
  {id:'minyak',name:'Minyak',icon:'🫒'},
  {id:'telur',name:'Telur',icon:'🥚'},
  {id:'sayur',name:'Sayur',icon:'🥬'},
  {id:'buah',name:'Buah',icon:'🍎'},
  {id:'daging',name:'Daging',icon:'🥩'},
  {id:'susu',name:'Susu',icon:'🥛'},
  {id:'bumbu',name:'Bumbu',icon:'🧄'},
  {id:'snack',name:'Snack',icon:'🍪'}
];

let PRODUCTS = [
  {id:1,name:'Beras Premium Pandan Wangi 5kg',cat:'beras',price:68500,old:78000,unit:'5 kg',rating:4.8,sold:1240,stock:45,icon:'🍚'},
  {id:2,name:'Minyak Goreng Sawit 2L',cat:'minyak',price:32000,old:38000,unit:'2 liter',rating:4.7,sold:890,stock:12,icon:'🫒'},
  {id:3,name:'Telur Ayam Negeri 1kg',cat:'telur',price:28000,old:0,unit:'1 kg',rating:4.9,sold:2100,stock:80,icon:'🥚'},
  {id:4,name:'Bayam Segar Ikat',cat:'sayur',price:5000,old:7000,unit:'1 ikat',rating:4.6,sold:340,stock:30,icon:'🥬'},
  {id:5,name:'Apel Fuji Premium 1kg',cat:'buah',price:45000,old:52000,unit:'1 kg',rating:4.8,sold:560,stock:25,icon:'🍎'},
  {id:6,name:'Daging Sapi Giling 500gr',cat:'daging',price:65000,old:0,unit:'500 gr',rating:4.7,sold:420,stock:8,icon:'🥩'},
  {id:7,name:'Susu UHT Full Cream 1L',cat:'susu',price:22000,old:25000,unit:'1 liter',rating:4.9,sold:1500,stock:100,icon:'🥛'},
  {id:8,name:'Bawang Merah 250gr',cat:'bumbu',price:12000,old:0,unit:'250 gr',rating:4.5,sold:780,stock:60,icon:'🧅'},
  {id:9,name:'Biskuit Cokelat 300gr',cat:'snack',price:18000,old:22000,unit:'300 gr',rating:4.6,sold:920,stock:55,icon:'🍪'},
  {id:10,name:'Beras Merah Organik 2kg',cat:'beras',price:42000,old:0,unit:'2 kg',rating:4.7,sold:280,stock:20,icon:'🌾'},
  {id:11,name:'Minyak Zaitun Extra Virgin 500ml',cat:'minyak',price:85000,old:95000,unit:'500 ml',rating:4.9,sold:150,stock:5,icon:'🫒'},
  {id:12,name:'Wortel Segar 500gr',cat:'sayur',price:9000,old:0,unit:'500 gr',rating:4.4,sold:410,stock:40,icon:'🥕'},
  {id:13,name:'Pisang Cavendish 1 sisir',cat:'buah',price:25000,old:30000,unit:'1 sisir',rating:4.7,sold:670,stock:35,icon:'🍌'},
  {id:14,name:'Ayam Fillet Dada 500gr',cat:'daging',price:38000,old:0,unit:'500 gr',rating:4.8,sold:530,stock:15,icon:'🍗'},
  {id:15,name:'Keju Cheddar 170gr',cat:'susu',price:28000,old:32000,unit:'170 gr',rating:4.6,sold:340,stock:22,icon:'🧀'},
  {id:16,name:'Merica Bubuk 50gr',cat:'bumbu',price:15000,old:0,unit:'50 gr',rating:4.5,sold:290,stock:70,icon:'🌶️'}
];

let ORDERS = [
  {id:'FM-2024-1187',customer:'Andi Pratama',total:145000,status:'pending',time:'10 menit lalu',items:3,payment:'Transfer Bank',address:'Jakarta Selatan'},
  {id:'FM-2024-1186',customer:'Siti Nurhaliza',total:89500,status:'processing',time:'25 menit lalu',items:2,payment:'COD',address:'Jakarta Pusat'},
  {id:'FM-2024-1185',customer:'Budi Hartono',total:230000,status:'shipped',time:'1 jam lalu',items:5,payment:'E-Wallet',address:'Depok'},
  {id:'FM-2024-1184',customer:'Dewi Lestari',total:67500,status:'completed',time:'3 jam lalu',items:2,payment:'Transfer Bank',address:'Tangerang'},
  {id:'FM-2024-1183',customer:'Rizki Aditya',total:340000,status:'completed',time:'5 jam lalu',items:6,payment:'Kartu Kredit',address:'Bekasi'},
  {id:'FM-2024-1182',customer:'Maya Sari',total:120000,status:'cancelled',time:'8 jam lalu',items:3,payment:'COD',address:'Jakarta Barat'}
];

let STAFF = [
  {id:1,name:'Ahmad Fauzi',email:'ahmad@freshmart.id',role:'Manager',status:'active'},
  {id:2,name:'Rina Wulandari',email:'rina@freshmart.id',role:'Kasir',status:'active'},
  {id:3,name:'Joko Susilo',email:'joko@freshmart.id',role:'Admin Gudang',status:'active'},
  {id:4,name:'Sari Indah',email:'sari@freshmart.id',role:'Customer Service',status:'active'},
  {id:5,name:'Dedi Kurniawan',email:'dedi@freshmart.id',role:'Kurir',status:'inactive'}
];

let CUSTOMERS = [
  {id:1,name:'Andi Pratama',email:'andi@email.com',orders:24,spent:3450000,joined:'Jan 2024',tier:'Gold'},
  {id:2,name:'Siti Nurhaliza',email:'siti@email.com',orders:18,spent:2100000,joined:'Feb 2024',tier:'Silver'},
  {id:3,name:'Budi Hartono',email:'budi@email.com',orders:32,spent:5200000,joined:'Nov 2023',tier:'Platinum'},
  {id:4,name:'Dewi Lestari',email:'dewi@email.com',orders:12,spent:1450000,joined:'Mar 2024',tier:'Silver'},
  {id:5,name:'Rizki Aditya',email:'rizki@email.com',orders:41,spent:7800000,joined:'Sep 2023',tier:'Platinum'}
];

let VOUCHERS = [
  {code:'GRATISONGKIR',type:'Ongkir',value:'Rp10.000',min:50000,quota:500,used:342,status:'active'},
  {code:'HEMAT10',type:'Persen',value:'10%',min:100000,quota:200,used:87,status:'active'},
  {code:'NEWUSER',type:'Nominal',value:'Rp25.000',min:75000,quota:1000,used:678,status:'active'},
  {code:'FLASH50',type:'Nominal',value:'Rp50.000',min:200000,quota:50,used:50,status:'expired'}
];

let NOTIFICATIONS = [
  {id:1,title:'Pesanan #FM-2024-1185 dikirim',desc:'Kurir sedang menuju lokasi Anda',time:'5 menit lalu',unread:true},
  {id:2,title:'Promo baru: Diskon 30%',desc:'Berlaku hingga akhir bulan',time:'1 jam lalu',unread:true},
  {id:3,title:'Pesanan #FM-2024-1184 selesai',desc:'Terima kasih telah berbelanja',time:'3 jam lalu',unread:true},
  {id:4,title:'Voucher GRATISONGKIR ditambahkan',desc:'Berlaku 7 hari',time:'1 hari lalu',unread:false}
];

/* ==================== STATE ==================== */
let state = {
  mode: 'customer',
  cart: JSON.parse(localStorage.getItem('fm_cart')||'[]'),
  wishlist: JSON.parse(localStorage.getItem('fm_wish')||'[]'),
  category:'all', sort:'popular', search:'', limit:8,
  adminTab:'dashboard',
  editingProduct:null
};

/* ==================== UTILS ==================== */
const rupiah = n => 'Rp' + Math.round(n).toLocaleString('id-ID');
function showToast(msg){
  const t = document.getElementById('toast');
  t.textContent = msg; t.classList.add('show');
  clearTimeout(t._t); t._t = setTimeout(()=>t.classList.remove('show'),2200);
}
function save(){
  localStorage.setItem('fm_cart',JSON.stringify(state.cart));
  localStorage.setItem('fm_wish',JSON.stringify(state.wishlist));
  updateBadges();
}
function updateBadges(){
  const count = state.cart.reduce((s,i)=>s+i.qty,0);
  const cb = document.getElementById('cartBadge');
  cb.textContent = count; cb.style.display = count>0?'flex':'none';
  document.getElementById('cartCount').textContent = count;
  const wb = document.getElementById('wishBadge');
  wb.textContent = state.wishlist.length; wb.style.display = state.wishlist.length>0?'flex':'none';
}

/* ==================== MODE SWITCH ==================== */
function setMode(mode){
  state.mode = mode;
  document.getElementById('customerApp').classList.toggle('hidden', mode!=='customer');
  document.getElementById('adminApp').classList.toggle('hidden', mode!=='admin');
  if(mode==='admin') renderAdmin();
  window.scrollTo(0,0);
}

/* ==================== CUSTOMER: CATEGORY ==================== */
function renderCategories(){
  document.getElementById('catScroll').innerHTML = CATEGORIES.map(c=>`
    <button class="cat-chip ${state.category===c.id?'active':''}" onclick="setCategory('${c.id}')">
      <span class="cat-icon">${c.icon}</span>${c.name}
    </button>`).join('');
}
function setCategory(id){
  state.category=id; state.limit=8;
  renderCategories(); renderProducts();
  document.getElementById('sectionTitle').textContent =
    id==='all'?'Produk Populer':CATEGORIES.find(c=>c.id===id).name;
}

/* ==================== CUSTOMER: PRODUCTS ==================== */
function getFiltered(){
  let arr=[...PRODUCTS];
  if(state.category!=='all') arr=arr.filter(p=>p.cat===state.category);
  if(state.search){
    const q=state.search.toLowerCase();
    arr=arr.filter(p=>p.name.toLowerCase().includes(q));
  }
  switch(state.sort){
    case 'cheap': arr.sort((a,b)=>a.price-b.price); break;
    case 'expensive': arr.sort((a,b)=>b.price-a.price); break;
    case 'discount': arr=arr.filter(p=>p.old>0).sort((a,b)=>(b.old-b.price)-(a.old-a.price)); break;
    case 'rating': arr.sort((a,b)=>b.rating-a.rating); break;
    case 'stock': arr.sort((a,b)=>b.stock-a.stock); break;
    default: arr.sort((a,b)=>b.sold-a.sold);
  }
  return arr;
}
function getQty(id){ const it=state.cart.find(i=>i.id===id); return it?it.qty:0; }
function isWished(id){ return state.wishlist.includes(id); }

function productCard(p){
  const disc = p.old>0?Math.round((p.old-p.price)/p.old*100):0;
  const low = p.stock<=10;
  const wished = isWished(p.id);
  return `
    <div class="product-card">
      <div class="product-img">
        ${p.icon}
        ${disc?`<span class="discount-tag">-${disc}%</span>`:''}
        ${low?`<span class="stock-tag low">Sisa ${p.stock}</span>`:`<span class="stock-tag">Stok ${p.stock}</span>`}
        <button style="position:absolute;bottom:6px;right:6px;width:28px;height:28px;border-radius:50%;background:#fff;display:flex;align-items:center;justify-content:center;box-shadow:var(--shadow)" onclick="event.stopPropagation();toggleWish(${p.id})">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="${wished?'#dc2626':'none'}" stroke="${wished?'#dc2626':'#64748b'}" stroke-width="2.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        </button>
      </div>
      <div class="product-info">
        <div class="product-name">${p.name}</div>
        <div class="product-unit">${p.unit}</div>
        <div class="product-price">
          <span class="price-now">${rupiah(p.price)}</span>
          ${p.old?`<span class="price-old">${rupiah(p.old)}</span>`:''}
        </div>
        <div class="product-rating">
          <span class="stars">★★★★★</span><span>${p.rating}</span><span>| ${p.sold}</span>
        </div>
        <div class="product-footer">
          <div class="qty-control">
            <button class="qty-btn" onclick="changeQty(${p.id},-1)">-</button>
            <span class="qty-val">${getQty(p.id)}</span>
            <button class="qty-btn" onclick="changeQty(${p.id},1)">+</button>
          </div>
          <button class="btn-add" onclick="addToCart(${p.id})">
            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
            Tambah
          </button>
        </div>
      </div>
    </div>`;
}
function renderProducts(){
  const arr=getFiltered().slice(0,state.limit);
  const grid=document.getElementById('productGrid');
  if(!arr.length){
    grid.innerHTML=`<div class="empty" style="grid-column:1/-1"><div class="empty-icon">🔍</div><div class="empty-title">Produk tidak ditemukan</div><div class="empty-desc">Coba kata kunci lain</div></div>`;
    return;
  }
  grid.innerHTML=arr.map(productCard).join('');
}
function loadMore(){ state.limit=PRODUCTS.length; renderProducts(); showToast('Menampilkan semua produk'); }

/* ==================== CART ==================== */
function changeQty(id,delta){
  const p=PRODUCTS.find(x=>x.id===id); if(!p) return;
  let it=state.cart.find(i=>i.id===id);
  if(!it){ if(delta<=0) return; if(p.stock<=0){showToast('Stok habis');return;} state.cart.push({id,qty:1}); }
  else { it.qty+=delta; if(it.qty<=0) state.cart=state.cart.filter(i=>i.id!==id); }
  save(); renderProducts(); renderCart();
}
function addToCart(id){
  const p=PRODUCTS.find(x=>x.id===id);
  if(p.stock<=0){ showToast('Stok habis'); return; }
  changeQty(id,1); showToast(p.name.slice(0,28)+'... ditambahkan');
}
function toggleCart(){
  const d=document.getElementById('cartDrawer'), o=document.getElementById('drawerOverlay');
  const open=d.classList.contains('open');
  if(open){d.classList.remove('open');o.classList.remove('open');}
  else{ renderCart(); d.classList.add('open'); o.classList.add('open'); }
}
function renderCart(){
  const body=document.getElementById('cartBody'), foot=document.getElementById('cartFoot');
  if(!state.cart.length){
    body.innerHTML=`<div class="empty"><div class="empty-icon">🛒</div><div class="empty-title">Keranjang kosong</div><div class="empty-desc">Mulai belanja kebutuhan harian</div></div>`;
    foot.style.display='none'; return;
  }
  foot.style.display='block';
  let sub=0;
  body.innerHTML=state.cart.map(it=>{
    const p=PRODUCTS.find(x=>x.id===it.id); if(!p) return '';
    sub+=p.price*it.qty;
    return `<div class="cart-item">
      <div class="cart-item-img">${p.icon}</div>
      <div class="cart-item-info">
        <div class="cart-item-name">${p.name}</div>
        <div class="cart-item-price">${rupiah(p.price*it.qty)}</div>
      </div>
      <div class="cart-item-actions">
        <button class="btn-remove" onclick="removeItem(${p.id})">Hapus</button>
        <div class="qty-control">
          <button class="qty-btn" onclick="changeQty(${p.id},-1)">-</button>
          <span class="qty-val">${it.qty}</span>
          <button class="qty-btn" onclick="changeQty(${p.id},1)">+</button>
        </div>
      </div>
    </div>`;
  }).join('');
  const ongkir=sub>=50000?0:10000;
  const diskon=sub>=100000?10000:0;
  const total=sub+ongkir-diskon;
  document.getElementById('subtotal').textContent=rupiah(sub);
  document.getElementById('ongkir').textContent=ongkir===0?'GRATIS':rupiah(ongkir);
  document.getElementById('diskon').textContent='-'+rupiah(diskon);
  document.getElementById('total').textContent=rupiah(total);
}
function removeItem(id){
  state.cart=state.cart.filter(i=>i.id!==id);
  save(); renderProducts(); renderCart(); showToast('Item dihapus');
}
function openCheckout(){
  if(!state.cart.length) return;
  const orderId='FM-2024-'+Math.floor(1000+Math.random()*9000);
  document.getElementById('orderIdDisplay').textContent=orderId;
  // Create order in admin
  const total=state.cart.reduce((s,i)=>s+PRODUCTS.find(p=>p.id===i.id).price*i.qty,0);
  ORDERS.unshift({id:orderId,customer:'Anda',total:total+10000,status:'pending',time:'Baru saja',items:state.cart.length,payment:'Transfer Bank',address:'Jakarta Selatan'});
  state.cart=[]; save(); renderProducts(); renderCart(); toggleCart();
  document.getElementById('checkoutModal').classList.add('open');
}
function closeCheckout(){ document.getElementById('checkoutModal').classList.remove('open'); }

/* ==================== WISHLIST ==================== */
function toggleWish(id){
  if(state.wishlist.includes(id)){
    state.wishlist=state.wishlist.filter(x=>x!==id); showToast('Dihapus dari wishlist');
  } else { state.wishlist.push(id); showToast('Ditambahkan ke wishlist'); }
  save(); renderProducts(); renderWishlist();
}
function toggleWishlist(){
  const d=document.getElementById('wishDrawer'), o=document.getElementById('wishOverlay');
  const open=d.classList.contains('open');
  if(open){d.classList.remove('open');o.classList.remove('open');}
  else{ renderWishlist(); d.classList.add('open'); o.classList.add('open'); }
}
function renderWishlist(){
  const body=document.getElementById('wishBody');
  if(!state.wishlist.length){
    body.innerHTML=`<div class="empty"><div class="empty-icon">H</div><div class="empty-title">Wishlist kosong</div><div class="empty-desc">Tandai produk favorit Anda</div></div>`;
    return;
  }
  body.innerHTML=state.wishlist.map(id=>{
    const p=PRODUCTS.find(x=>x.id===id); if(!p) return '';
    return `<div class="cart-item">
      <div class="cart-item-img">${p.icon}</div>
      <div class="cart-item-info">
        <div class="cart-item-name">${p.name}</div>
        <div class="cart-item-price">${rupiah(p.price)}</div>
      </div>
      <div class="cart-item-actions">
        <button class="btn-remove" onclick="toggleWish(${p.id})">Hapus</button>
        <button class="btn-sm primary" onclick="addToCart(${p.id})">+ Cart</button>
      </div>
    </div>`;
  }).join('');
}

/* ==================== NOTIFICATIONS ==================== */
function openNotifications(){
  const d=document.getElementById('notifDrawer'), o=document.getElementById('notifOverlay');
  const open=d.classList.contains('open');
  if(open){d.classList.remove('open');o.classList.remove('open');}
  else{ renderNotif(); d.classList.add('open'); o.classList.add('open'); }
}
function renderNotif(){
  document.getElementById('notifBody').innerHTML=NOTIFICATIONS.map(n=>`
    <div style="padding:11px 0;border-bottom:1px solid var(--border)">
      <div style="display:flex;justify-content:space-between;align-items:flex-start;gap:8px">
        <div style="font-size:12px;font-weight:700">${n.title}${n.unread?'<span class="dot"></span>':''}</div>
        <div style="font-size:9px;color:var(--text-muted);flex-shrink:0">${n.time}</div>
      </div>
      <div style="font-size:11px;color:var(--text-muted);margin-top:3px">${n.desc}</div>
    </div>`).join('');
  NOTIFICATIONS.forEach(n=>n.unread=false);
  document.getElementById('notifBadge').style.display='none';
}

/* ==================== SEARCH ==================== */
function openSearch(){
  document.getElementById('searchOverlay').classList.add('open');
  setTimeout(()=>document.getElementById('searchInput').focus(),280);
}
function closeSearch(){
  document.getElementById('searchOverlay').classList.remove('open');
  document.getElementById('searchInput').value='';
  document.getElementById('searchResults').innerHTML='';
  state.search=''; renderProducts();
}
function handleSearch(q){
  state.search=q;
  const res=document.getElementById('searchResults');
  if(!q.trim()){ res.innerHTML=''; return; }
  const found=getFiltered().slice(0,8);
  if(!found.length){ res.innerHTML=`<div class="empty"><div class="empty-desc">Tidak ada hasil untuk "${q}"</div></div>`; return; }
  res.innerHTML=found.map(p=>`
    <div class="search-result-item" onclick="pickSearch(${p.id})">
      <div class="search-result-img">${p.icon}</div>
      <div style="flex:1">
        <div style="font-size:12px;font-weight:600">${p.name}</div>
        <div style="font-size:11px;color:var(--primary);font-weight:700;margin-top:2px">${rupiah(p.price)}</div>
      </div>
    </div>`).join('');
}
function quickSearch(q){ document.getElementById('searchInput').value=q; handleSearch(q); }
function pickSearch(id){ addToCart(id); closeSearch(); }

/* ==================== PROMO ==================== */
function claimVoucher(){ showToast('Voucher GRATIS ONGKIR berhasil diklaim'); }

/* ==================== ADMIN PANEL ==================== */
function renderAdmin(){
  renderKPIs();
  renderAdminTabs();
  renderAdminContent();
}
function renderKPIs(){
  const salesToday = 8450000 + Math.floor(Math.random()*500000);
  document.getElementById('kpiSales').textContent = rupiah(salesToday);
  document.getElementById('kpiOrders').textContent = ORDERS.filter(o=>o.status==='pending').length;
  document.getElementById('kpiProducts').textContent = PRODUCTS.length;
  document.getElementById('kpiLowStock').textContent = PRODUCTS.filter(p=>p.stock<=10).length;
}
function renderAdminTabs(){
  document.querySelectorAll('.admin-tab').forEach(t=>{
    t.classList.toggle('active', t.dataset.tab===state.adminTab);
  });
}
function switchAdminTab(tab){
  state.adminTab=tab;
  renderAdminTabs();
  renderAdminContent();
  window.scrollTo(0,0);
}
document.addEventListener('click',e=>{
  const tab=e.target.closest('.admin-tab');
  if(tab) switchAdminTab(tab.dataset.tab);
});

function renderAdminContent(){
  const c=document.getElementById('adminContent');
  switch(state.adminTab){
    case 'dashboard': c.innerHTML=adminDashboard(); break;
    case 'orders': c.innerHTML=adminOrders(); break;
    case 'products': c.innerHTML=adminProducts(); break;
    case 'inventory': c.innerHTML=adminInventory(); break;
    case 'customers': c.innerHTML=adminCustomers(); break;
    case 'staff': c.innerHTML=adminStaff(); break;
    case 'vouchers': c.innerHTML=adminVouchers(); break;
    case 'reports': c.innerHTML=adminReports(); break;
    case 'settings': c.innerHTML=adminSettings(); break;
  }
}

/* --- Dashboard --- */
function adminDashboard(){
  const hours=['08','10','12','14','16','18','20','22'];
  const data=[120,340,580,720,890,1240,1680,940];
  const max=Math.max(...data);
  return `
    <div class="admin-card">
      <div class="admin-card-head">
        <div class="admin-card-title">Penjualan Hari Ini (Per 2 Jam)</div>
        <span class="badge badge-green">Live</span>
      </div>
      <div class="chart">
        ${data.map((v,i)=>`
          <div class="chart-bar ${v===max?'active':''}" style="height:${(v/max*100)}%">
            <b>${Math.round(v/10)}k</b>
            <span>${hours[i]}</span>
          </div>`).join('')}
      </div>
      <div style="margin-top:26px"></div>
    </div>

    <div class="admin-card">
      <div class="admin-card-head">
        <div class="admin-card-title">Pesanan Terbaru</div>
        <button class="btn-sm outline" onclick="switchAdminTab('orders')">Lihat Semua</button>
      </div>
      ${ORDERS.slice(0,4).map(o=>`
        <div class="order-item">
          <div class="order-head">
            <div>
              <div class="order-id">${o.id}</div>
              <div class="order-time">${o.time}</div>
            </div>
            <span class="badge ${statusBadge(o.status)}">${statusLabel(o.status)}</span>
          </div>
          <div class="order-body">
            ${o.customer} - ${o.items} item - <b>${rupiah(o.total)}</b><br>
            ${o.payment} - ${o.address}
          </div>
        </div>`).join('')}
    </div>

    <div class="admin-card">
      <div class="admin-card-head">
        <div class="admin-card-title">Peringatan Stok</div>
      </div>
      ${PRODUCTS.filter(p=>p.stock<=10).map(p=>`
        <div class="staff-card">
          <div class="staff-avatar" style="background:#fee2e2;color:#991b1b">!</div>
          <div class="staff-info">
            <div class="staff-name">${p.name}</div>
            <div class="staff-role">Sisa ${p.stock} ${p.unit} - Restock segera</div>
          </div>
          <button class="btn-sm primary" onclick="restockProduct(${p.id})">Restock</button>
        </div>`).join('') || '<div class="empty"><div class="empty-desc">Semua stok aman</div></div>'}
    </div>
  `;
}
function statusBadge(s){
  return {pending:'badge-yellow',processing:'badge-blue',shipped:'badge-blue',completed:'badge-green',cancelled:'badge-red'}[s]||'badge-gray';
}
function statusLabel(s){
  return {pending:'Menunggu',processing:'Diproses',shipped:'Dikirim',completed:'Selesai',cancelled:'Batal'}[s]||s;
}
function restockProduct(id){
  const p=PRODUCTS.find(x=>x.id===id);
  p.stock+=50; renderKPIs(); renderAdminContent(); showToast('Restock +50 untuk '+p.name.slice(0,25));
}

/* --- Orders --- */
let orderFilter='all';
function adminOrders(){
  const list=orderFilter==='all'?ORDERS:ORDERS.filter(o=>o.status===orderFilter);
  return `
    <div class="admin-card">
      <div class="admin-card-head">
        <div class="admin-card-title">Manajemen Pesanan (${list.length})</div>
      </div>
      <div class="filter-row" style="padding:8px 0;border:none;background:transparent">
        ${['all','pending','processing','shipped','completed','cancelled'].map(f=>`
          <button class="filter-chip ${orderFilter===f?'active':''}" onclick="orderFilter='${f}';renderAdminContent()">${f==='all'?'Semua':statusLabel(f)}</button>
        `).join('')}
      </div>
      ${list.map(o=>`
        <div class="order-item">
          <div class="order-head">
            <div>
              <div class="order-id">${o.id}</div>
              <div class="order-time">${o.time}</div>
            </div>
            <span class="badge ${statusBadge(o.status)}">${statusLabel(o.status)}</span>
          </div>
          <div class="order-body">
            <b>${o.customer}</b><br>
            ${o.items} item - ${rupiah(o.total)}<br>
            ${o.payment} - ${o.address}
          </div>
          <div class="order-actions">
            ${o.status==='pending'?`<button class="btn-sm primary" onclick="updateOrder('${o.id}','processing')">Proses</button>`:''}
            ${o.status==='processing'?`<button class="btn-sm primary" onclick="updateOrder('${o.id}','shipped')">Kirim</button>`:''}
            ${o.status==='shipped'?`<button class="btn-sm primary" onclick="updateOrder('${o.id}','completed')">Selesai</button>`:''}
            <button class="btn-sm outline" onclick="showToast('Detail ${o.id}')">Detail</button>
            ${o.status!=='completed'&&o.status!=='cancelled'?`<button class="btn-sm danger" onclick="updateOrder('${o.id}','cancelled')">Batal</button>`:''}
          </div>
        </div>`).join('') || '<div class="empty"><div class="empty-desc">Tidak ada pesanan</div></div>'}
    </div>`;
}
function updateOrder(id,status){
  const o=ORDERS.find(x=>x.id===id); if(!o) return;
  o.status=status; renderKPIs(); renderAdminContent();
  showToast('Pesanan '+id+' -> '+statusLabel(status));
}

/* --- Products --- */
function adminProducts(){
  return `
    <div class="admin-card">
      <div class="admin-card-head">
        <div class="admin-card-title">Katalog Produk (${PRODUCTS.length})</div>
        <button class="btn-sm primary" onclick="openProductModal(null)">+ Produk Baru</button>
      </div>
      <div class="admin-table-wrap">
        <table class="admin-table">
          <thead><tr><th>Produk</th><th>Harga</th><th>Stok</th><th>Terjual</th><th>Status</th><th></th></tr></thead>
          <tbody>
            ${PRODUCTS.map(p=>`
              <tr>
                <td><div style="display:flex;align-items:center;gap:8px"><span style="font-size:18px">${p.icon}</span><div><div style="font-weight:700">${p.name.slice(0,28)}${p.name.length>28?'...':''}</div><div style="font-size:10px;color:var(--text-muted)">${p.unit}</div></div></div></td>
                <td style="font-weight:700;color:var(--primary)">${rupiah(p.price)}</td>
                <td><span class="badge ${p.stock<=10?'badge-red':p.stock<=30?'badge-yellow':'badge-green'}">${p.stock}</span></td>
                <td>${p.sold}</td>
                <td><span class="badge badge-green">Aktif</span></td>
                <td><button class="btn-sm outline" onclick="openProductModal(${p.id})">Edit</button></td>
              </tr>`).join('')}
          </tbody>
        </table>
      </div>
    </div>`;
}

/* --- Inventory --- */
function adminInventory(){
  const totalValue=PRODUCTS.reduce((s,p)=>s+p.price*p.stock,0);
  const totalStock=PRODUCTS.reduce((s,p)=>s+p.stock,0);
  return `
    <div class="kpi-grid" style="grid-template-columns:repeat(2,1fr)">
      <div class="kpi-card"><div class="kpi-label">Total Nilai Inventory</div><div class="kpi-value" style="font-size:15px">${rupiah(totalValue)}</div></div>
      <div class="kpi-card"><div class="kpi-label">Total Item Stok</div><div class="kpi-value">${totalStock}</div></div>
    </div>
    <div class="admin-card">
      <div class="admin-card-head">
        <div class="admin-card-title">Status Stok per Produk</div>
      </div>
      <div class="admin-table-wrap">
        <table class="admin-table">
          <thead><tr><th>Produk</th><th>Stok</th><th>Nilai</th><th>Status</th><th>Aksi</th></tr></thead>
          <tbody>
            ${PRODUCTS.sort((a,b)=>a.stock-b.stock).map(p=>`
              <tr>
                <td><div style="font-weight:700">${p.icon} ${p.name.slice(0,24)}</div><div style="font-size:10px;color:var(--text-muted)">${p.unit}</div></td>
                <td><b>${p.stock}</b></td>
                <td>${rupiah(p.price*p.stock)}</td>
                <td><span class="badge ${p.stock<=10?'badge-red':p.stock<=30?'badge-yellow':'badge-green'}">${p.stock<=10?'Kritis':p.stock<=30?'Rendah':'Aman'}</span></td>
                <td><button class="btn-sm primary" onclick="restockProduct(${p.id})">+50</button></td>
              </tr>`).join('')}
          </tbody>
        </table>
      </div>
    </div>`;
}

/* --- Customers --- */
function adminCustomers(){
  return `
    <div class="admin-card">
      <div class="admin-card-head">
        <div class="admin-card-title">Data Pelanggan (${CUSTOMERS.length})</div>
      </div>
      ${CUSTOMERS.map(c=>`
        <div class="staff-card">
          <div class="staff-avatar">${c.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
          <div class="staff-info">
            <div class="staff-name">${c.name}</div>
            <div class="staff-role">${c.email} - ${c.orders} pesanan - ${rupiah(c.spent)}</div>
          </div>
          <span class="badge ${c.tier==='Platinum'?'badge-blue':c.tier==='Gold'?'badge-yellow':'badge-gray'}">${c.tier}</span>
        </div>`).join('')}
    </div>`;
}

/* --- Staff --- */
function adminStaff(){
  return `
    <div class="admin-card">
      <div class="admin-card-head">
        <div class="admin-card-title">Tim Staff (${STAFF.length})</div>
        <button class="btn-sm primary" onclick="document.getElementById('staffModal').classList.add('open')">+ Tambah Staff</button>
      </div>
      ${STAFF.map(s=>`
        <div class="staff-card">
          <div class="staff-avatar">${s.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
          <div class="staff-info">
            <div class="staff-name">${s.name}</div>
            <div class="staff-role">${s.role} - ${s.email}</div>
          </div>
          <span class="badge ${s.status==='active'?'badge-green':'badge-gray'}">${s.status==='active'?'Aktif':'Nonaktif'}</span>
        </div>`).join('')}
    </div>
    <div class="admin-card">
      <div class="admin-card-title" style="margin-bottom:10px">Izin & Role</div>
      <div style="font-size:11px;color:var(--text-muted);line-height:1.8">
        <b>Manager</b> - Akses penuh semua modul<br>
        <b>Kasir</b> - Pesanan, Pelanggan, Voucher<br>
        <b>Admin Gudang</b> - Produk, Inventory<br>
        <b>Customer Service</b> - Pesanan, Pelanggan, Chat<br>
        <b>Kurir</b> - Pesanan (view only), Tracking
      </div>
    </div>`;
}

/* --- Vouchers --- */
function adminVouchers(){
  return `
    <div class="admin-card">
      <div class="admin-card-head">
        <div class="admin-card-title">Voucher & Promo (${VOUCHERS.length})</div>
        <button class="btn-sm primary" onclick="showToast('Form voucher baru')">+ Voucher</button>
      </div>
      ${VOUCHERS.map(v=>`
        <div class="order-item">
          <div class="order-head">
            <div>
              <div class="order-id" style="font-size:13px;color:var(--primary)">${v.code}</div>
              <div class="order-time">${v.type} - ${v.value} - Min. ${rupiah(v.min)}</div>
            </div>
            <span class="badge ${v.status==='active'?'badge-green':'badge-gray'}">${v.status==='active'?'Aktif':'Kadaluarsa'}</span>
          </div>
          <div class="order-body">
            Kuota: <b>${v.used}/${v.quota}</b>
          </div>
          <div style="margin-top:8px;background:var(--bg);height:6px;border-radius:3px;overflow:hidden">
            <div style="height:100%;background:var(--primary);width:${(v.used/v.quota*100)}%"></div>
          </div>
        </div>`).join('')}
    </div>`;
}

/* --- Reports --- */
function adminReports(){
  return `
    <div class="admin-card">
      <div class="admin-card-title" style="margin-bottom:10px">Ringkasan Bulan Ini</div>
      <div class="kpi-grid" style="grid-template-columns:repeat(2,1fr)">
        <div class="kpi-card"><div class="kpi-label">Total Penjualan</div><div class="kpi-value" style="font-size:15px">Rp245.8jt</div><div class="kpi-trend up">+18% MoM</div></div>
        <div class="kpi-card"><div class="kpi-label">Total Pesanan</div><div class="kpi-value" style="font-size:15px">1,847</div><div class="kpi-trend up">+12% MoM</div></div>
        <div class="kpi-card"><div class="kpi-label">AOV</div><div class="kpi-value" style="font-size:15px">Rp133rb</div><div class="kpi-trend up">+5% MoM</div></div>
        <div class="kpi-card"><div class="kpi-label">Repeat Rate</div><div class="kpi-value" style="font-size:15px">68%</div><div class="kpi-trend up">+3% MoM</div></div>
      </div>
    </div>
    <div class="admin-card">
      <div class="admin-card-title" style="margin-bottom:10px">Produk Terlaris</div>
      ${PRODUCTS.slice().sort((a,b)=>b.sold-a.sold).slice(0,5).map((p,i)=>`
        <div class="staff-card">
          <div class="staff-avatar" style="background:var(--primary);color:#fff">${i+1}</div>
          <div class="staff-info">
            <div class="staff-name">${p.icon} ${p.name.slice(0,30)}</div>
            <div class="staff-role">${p.sold} terjual - ${rupiah(p.price*p.sold)}</div>
          </div>
        </div>`).join('')}
    </div>
    <div class="admin-card">
      <div class="admin-card-title" style="margin-bottom:10px">Export Laporan</div>
      <button class="btn-block" onclick="showToast('Laporan CSV diunduh')">Download CSV</button>
      <button class="btn-secondary" style="margin-top:8px" onclick="showToast('Laporan PDF dibuat')">Download PDF</button>
    </div>`;
}

/* --- Settings --- */
function adminSettings(){
  return `
    <div class="admin-card">
      <div class="admin-card-title" style="margin-bottom:12px">Pengaturan Toko</div>
      <div class="form-group"><label class="form-label">Nama Toko</label><input class="form-input" value="FreshMart"></div>
      <div class="form-group"><label class="form-label">Alamat</label><input class="form-input" value="Jl. Sudirman No. 45, Jakarta Selatan"></div>
      <div class="form-row">
        <div class="form-group"><label class="form-label">Jam Buka</label><input class="form-input" value="06:00"></div>
        <div class="form-group"><label class="form-label">Jam Tutup</label><input class="form-input" value="22:00"></div>
      </div>
      <div class="form-group"><label class="form-label">Min. Gratis Ongkir</label><input class="form-input" value="50000"></div>
      <div class="form-group"><label class="form-label">Ongkir Default</label><input class="form-input" value="10000"></div>
      <button class="btn-primary" onclick="showToast('Pengaturan disimpan')">Simpan Pengaturan</button>
    </div>
    <div class="admin-card">
      <div class="admin-card-title" style="margin-bottom:12px">Metode Pembayaran</div>
      <div class="staff-card"><div class="staff-avatar">TF</div><div class="staff-info"><div class="staff-name">Transfer Bank</div><div class="staff-role">BCA, Mandiri, BNI</div></div><span class="badge badge-green">Aktif</span></div>
      <div class="staff-card"><div class="staff-avatar">EW</div><div class="staff-info"><div class="staff-name">E-Wallet</div><div class="staff-role">GoPay, OVO, Dana</div></div><span class="badge badge-green">Aktif</span></div>
      <div class="staff-card"><div class="staff-avatar">CD</div><div class="staff-info"><div class="staff-name">COD</div><div class="staff-role">Bayar di tempat</div></div><span class="badge badge-green">Aktif</span></div>
      <div class="staff-card"><div class="staff-avatar">CC</div><div class="staff-info"><div class="staff-name">Kartu Kredit</div><div class="staff-role">Visa, Mastercard</div></div><span class="badge badge-yellow">Review</span></div>
    </div>
    <div class="alert alert-info">Semua perubahan diterapkan realtime ke aplikasi pembeli.</div>`;
}

/* --- Product Modal --- */
function openProductModal(id){
  const modal=document.getElementById('productModal');
  document.getElementById('pmCat').innerHTML=CATEGORIES.filter(c=>c.id!=='all').map(c=>`<option value="${c.id}">${c.name}</option>`).join('');
  if(id){
    const p=PRODUCTS.find(x=>x.id===id);
    state.editingProduct=id;
    document.getElementById('productModalTitle').textContent='Edit Produk';
    document.getElementById('pmName').value=p.name;
    document.getElementById('pmPrice').value=p.price;
    document.getElementById('pmStock').value=p.stock;
    document.getElementById('pmCat').value=p.cat;
  } else {
    state.editingProduct=null;
    document.getElementById('productModalTitle').textContent='Produk Baru';
    document.getElementById('pmName').value='';
    document.getElementById('pmPrice').value='';
    document.getElementById('pmStock').value='';
  }
  modal.classList.add('open');
}
function closeProductModal(){ document.getElementById('productModal').classList.remove('open'); }
function saveProduct(){
  const name=document.getElementById('pmName').value.trim();
  const price=+document.getElementById('pmPrice').value;
  const stock=+document.getElementById('pmStock').value;
  const cat=document.getElementById('pmCat').value;
  if(!name||!price||stock<0){ showToast('Lengkapi data'); return; }
  if(state.editingProduct){
    const p=PRODUCTS.find(x=>x.id===state.editingProduct);
    p.name=name; p.price=price; p.stock=stock; p.cat=cat;
    showToast('Produk diperbarui');
  } else {
    const id=Math.max(...PRODUCTS.map(p=>p.id))+1;
    PRODUCTS.push({id,name,cat,price,old:0,unit:'1 pcs',rating:5.0,sold:0,stock,icon:'📦'});
    showToast('Produk ditambahkan');
  }
  closeProductModal();
  renderKPIs(); renderAdminContent(); renderProducts();
}

/* --- Staff Modal --- */
function closeStaffModal(){ document.getElementById('staffModal').classList.remove('open'); }
function saveStaff(){
  const name=document.getElementById('sfName').value.trim();
  const email=document.getElementById('sfEmail').value.trim();
  const role=document.getElementById('sfRole').value;
  if(!name||!email){ showToast('Lengkapi data'); return; }
  STAFF.push({id:Date.now(),name,email,role,status:'active'});
  closeStaffModal();
  document.getElementById('sfName').value='';
  document.getElementById('sfEmail').value='';
  renderAdminContent(); showToast('Staff ditambahkan');
}

/* ==================== INIT ==================== */
renderCategories();
renderProducts();
updateBadges();
</script>
@endverbatim
@include('demo.toko-online.partials.demo-bar')
</body>
</html>