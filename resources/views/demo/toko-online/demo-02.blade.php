@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="theme-color" content="#f4f1ec">
<title>StyleHub - Fashion Editorial</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;-webkit-tap-highlight-color:transparent}
:root{
  --bg:#f4f1ec;--bg-soft:#eae5dd;--paper:#ffffff;
  --ink:#2a2724;--ink-soft:#5c5651;--ink-muted:#9c948c;
  --line:#e6dfd5;--line-strong:#d4cabb;
  --rose:#e8b4b8;--rose-deep:#c98b8f;--rose-soft:#f5e2e4;
  --sage:#b8c8b5;--sage-deep:#7f9a7c;--sage-soft:#e5ece3;
  --cream:#faf7f2;--success:#7f9a7c;--danger:#c9847f;
  --warning:#d4a373;--radius:14px;--radius-lg:22px;
  --shadow-sm:0 1px 3px rgba(42,39,36,.04);
  --shadow:0 2px 12px rgba(42,39,36,.05);
  --shadow-lg:0 12px 40px rgba(42,39,36,.08);
}
body{font-family:"Inter",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;background:var(--bg);color:var(--ink);font-size:14px;line-height:1.55;overflow-x:hidden;-webkit-font-smoothing:antialiased}
button{font-family:inherit;cursor:pointer;border:none;background:none;color:inherit}
input,select,textarea{font-family:inherit;font-size:14px;outline:none;color:inherit}
.hidden{display:none!important}
.mono{font-family:"SF Mono",Monaco,Consolas,monospace}

/* ===== FLOATING MODE SWITCHER ===== */
.mode-switch{
  position:fixed;bottom:80px;left:50%;transform:translateX(-50%);
  z-index:250;display:flex;background:var(--paper);border:1.5px solid var(--rose-deep);
  border-radius:40px;padding:4px;box-shadow:0 8px 32px rgba(201,139,143,.3);
  backdrop-filter:blur(12px);
}
.mode-switch-btn{
  padding:10px 18px;border-radius:32px;font-size:11px;font-weight:700;
  letter-spacing:.05em;color:var(--ink-muted);
  display:flex;align-items:center;gap:6px;transition:.2s;white-space:nowrap;
}
.mode-switch-btn:hover{color:var(--ink)}
.mode-switch-btn.active{background:var(--rose-deep);color:var(--paper)}
.mode-switch-btn .ms-icon{font-size:14px}

/* ===== ADMIN ENTRY IN CUSTOMER HEADER ===== */
.sh-admin-entry{
  display:flex;align-items:center;gap:6px;padding:7px 13px;
  background:var(--rose-soft);border:1px solid var(--rose-deep);border-radius:20px;
  color:var(--rose-deep);font-size:11px;font-weight:700;letter-spacing:.02em;
  transition:.2s;white-space:nowrap;
}
.sh-admin-entry:hover{background:var(--rose-deep);color:#fff}
.sh-admin-entry .mono{font-size:13px}

/* ===== ADMIN BREADCRUMB + BACK ===== */
.sh-breadcrumb{
  display:flex;align-items:center;gap:8px;font-size:10px;font-weight:600;
  color:var(--ink-muted);letter-spacing:.05em;text-transform:uppercase;
}
.sh-breadcrumb .crumb{color:var(--ink-soft)}
.sh-breadcrumb .crumb.active{color:var(--rose-deep)}
.sh-breadcrumb .sep{opacity:.5}
.sh-back-btn{
  display:inline-flex;align-items:center;gap:6px;padding:8px 14px;
  background:var(--paper);border:1px solid var(--line-strong);border-radius:20px;
  color:var(--ink-soft);font-size:11px;font-weight:600;letter-spacing:.02em;
  transition:.15s;margin-bottom:16px;
}
.sh-back-btn:hover{border-color:var(--rose-deep);color:var(--rose-deep)}

/* ===== ADMIN MENU GRID ===== */
.admin-menu-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin-bottom:22px}
@media(min-width:640px){.admin-menu-grid{grid-template-columns:repeat(4,1fr)}}
.admin-menu-tile{
  background:var(--paper);border:1px solid var(--line);border-radius:var(--radius);
  padding:16px;text-align:left;transition:.2s;position:relative;overflow:hidden;
  box-shadow:var(--shadow-sm);
}
.admin-menu-tile:hover{border-color:var(--rose-deep);transform:translateY(-2px);box-shadow:var(--shadow)}
.admin-menu-tile .tile-icon{
  font-size:22px;color:var(--rose-deep);margin-bottom:10px;line-height:1;
}
.admin-menu-tile .tile-title{font-size:13px;font-weight:700;margin-bottom:4px;color:var(--ink)}
.admin-menu-tile .tile-sub{font-size:10px;color:var(--ink-muted);font-weight:500}
.admin-menu-tile .tile-badge{
  position:absolute;top:12px;right:12px;background:var(--rose-deep);color:#fff;
  font-size:9px;font-weight:800;padding:3px 7px;border-radius:10px;min-width:20px;text-align:center;
}

/* ===== ADMIN SWITCH CUSTOMER ===== */
.sh-switch-customer{
  display:flex;align-items:center;gap:8px;padding:9px 16px;
  background:var(--rose-deep);color:#fff;border-radius:24px;
  font-size:11px;font-weight:700;letter-spacing:.03em;
  transition:.15s;white-space:nowrap;
}
.sh-switch-customer:hover{background:var(--rose)}

/* ============ CUSTOMER HEADER ============ */
.sh-header{position:sticky;top:0;z-index:100;background:var(--paper);border-bottom:1px solid var(--line)}
.sh-announce{background:var(--rose-soft);color:var(--rose-deep);padding:7px 14px;font-size:11px;font-weight:600;text-align:center;letter-spacing:.02em}
.sh-head{display:flex;align-items:center;gap:12px;padding:16px 18px}
.sh-brand{display:flex;flex-direction:column;line-height:1}
.sh-brand-name{font-family:Georgia,serif;font-weight:400;font-size:24px;letter-spacing:-.01em}
.sh-brand-name em{font-style:italic;color:var(--rose-deep)}
.sh-brand-tag{font-size:9px;font-weight:600;letter-spacing:.22em;color:var(--ink-muted);text-transform:uppercase;margin-top:5px}
.sh-head-right{margin-left:auto;display:flex;gap:8px;align-items:center}
.sh-icons{display:flex;gap:4px}
.sh-icon{width:40px;height:40px;border-radius:50%;background:var(--bg-soft);display:flex;align-items:center;justify-content:center;position:relative;color:var(--ink-soft);transition:.15s}
.sh-icon:hover{background:var(--line)}
.sh-badge{position:absolute;top:-2px;right:-2px;background:var(--rose-deep);color:#fff;font-size:10px;font-weight:700;min-width:18px;height:18px;border-radius:9px;display:flex;align-items:center;justify-content:center;padding:0 5px;border:2px solid var(--paper)}
.sh-search{display:flex;align-items:center;gap:10px;background:var(--bg);border-radius:24px;padding:11px 18px;margin:0 18px 14px;color:var(--ink-muted);font-size:13px;cursor:pointer;transition:.15s}
.sh-search:hover{background:var(--line)}
.sh-cats{display:flex;gap:22px;overflow-x:auto;padding:0 18px;scrollbar-width:none;border-top:1px solid var(--line)}
.sh-cats::-webkit-scrollbar{display:none}
.sh-cat{flex-shrink:0;padding:14px 0;font-size:12px;font-weight:500;color:var(--ink-soft);white-space:nowrap;border-bottom:2px solid transparent;margin-bottom:-1px;letter-spacing:.02em}
.sh-cat.active{color:var(--ink);border-bottom-color:var(--rose-deep);font-weight:600}

/* ============ HERO ============ */
.sh-hero{margin:20px 18px;border-radius:var(--radius-lg);background:linear-gradient(180deg,var(--rose-soft) 0%,var(--cream) 100%);padding:32px 24px;position:relative;overflow:hidden;min-height:320px;display:flex;flex-direction:column;justify-content:space-between}
.sh-hero::before{content:"";position:absolute;top:-40px;right:-40px;width:180px;height:180px;border-radius:50%;background:var(--rose);opacity:.35}
.sh-hero::after{content:"";position:absolute;bottom:-60px;left:-30px;width:200px;height:200px;border-radius:50%;background:var(--sage);opacity:.3}
.sh-hero-content{position:relative;z-index:2}
.sh-hero-eyebrow{font-size:10px;font-weight:700;letter-spacing:.24em;color:var(--rose-deep);text-transform:uppercase;margin-bottom:14px}
.sh-hero-title{font-family:Georgia,serif;font-weight:400;font-size:38px;line-height:1.05;letter-spacing:-.02em;margin-bottom:14px;color:var(--ink)}
.sh-hero-title em{font-style:italic;color:var(--rose-deep)}
.sh-hero-sub{font-size:13px;color:var(--ink-soft);line-height:1.7;max-width:300px;margin-bottom:22px}
.sh-hero-actions{display:flex;gap:10px;flex-wrap:wrap;position:relative;z-index:2}
.sh-btn-hero{padding:12px 22px;border-radius:26px;font-size:12px;font-weight:600;letter-spacing:.03em;transition:.2s}
.sh-btn-hero.primary{background:var(--ink);color:var(--paper)}
.sh-btn-hero.primary:hover{background:var(--rose-deep)}
.sh-btn-hero.ghost{background:rgba(255,255,255,.7);color:var(--ink);border:1px solid var(--line-strong)}
.sh-btn-hero.ghost:hover{background:#fff}

/* ============ SECTION ============ */
.sh-section{padding:24px 18px}
.sh-section-head{display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:16px}
.sh-section-title-wrap{display:flex;flex-direction:column}
.sh-section-eyebrow{font-size:10px;font-weight:700;letter-spacing:.2em;color:var(--rose-deep);text-transform:uppercase;margin-bottom:6px}
.sh-section-title{font-family:Georgia,serif;font-weight:400;font-size:24px;letter-spacing:-.02em;line-height:1.1}
.sh-section-title em{font-style:italic}
.sh-section-link{font-size:12px;font-weight:600;color:var(--ink-soft);border-bottom:1px solid var(--line-strong);padding-bottom:2px}

/* LOOKBOOK */
.sh-lookbook-scroll{display:flex;gap:14px;overflow-x:auto;padding:0 18px 4px;scrollbar-width:none;margin:0 -18px}
.sh-lookbook-scroll::-webkit-scrollbar{display:none}
.sh-lb-item{flex-shrink:0;width:200px;height:260px;border-radius:var(--radius);position:relative;overflow:hidden;cursor:pointer;transition:.25s;box-shadow:var(--shadow-sm)}
.sh-lb-item:hover{transform:translateY(-3px);box-shadow:var(--shadow)}
.sh-lb-emoji{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-size:80px;opacity:.7}
.sh-lb-info{position:absolute;bottom:0;left:0;right:0;padding:16px;background:linear-gradient(to top,rgba(255,255,255,.98),rgba(255,255,255,.85) 60%,transparent)}
.sh-lb-name{font-family:Georgia,serif;font-size:16px;font-weight:400;margin-bottom:3px}
.sh-lb-count{font-size:10px;font-weight:600;color:var(--ink-muted);letter-spacing:.08em;text-transform:uppercase}
.sh-lb-item.rose{background:var(--rose-soft)}
.sh-lb-item.sage{background:var(--sage-soft)}
.sh-lb-item.cream{background:var(--cream)}
.sh-lb-item.bg2{background:#e8e0d5}

/* FLASH PROMO */
.sh-flash-bar{margin:24px 18px;background:var(--rose-soft);border-radius:var(--radius);padding:14px 18px;display:flex;align-items:center;gap:14px}
.sh-flash-icon{width:40px;height:40px;border-radius:50%;background:var(--rose-deep);color:#fff;display:flex;align-items:center;justify-content:center;font-size:18px;flex-shrink:0}
.sh-flash-text{flex:1}
.sh-flash-title{font-size:12px;font-weight:700;color:var(--rose-deep);letter-spacing:.05em;text-transform:uppercase;margin-bottom:2px}
.sh-flash-sub{font-size:11px;color:var(--ink-soft)}
.sh-flash-timer{font-family:Georgia,serif;font-size:18px;font-variant-numeric:tabular-nums;color:var(--ink);font-weight:400}

/* FILTER */
.sh-filter-row{display:flex;gap:8px;overflow-x:auto;padding:0 0 16px;scrollbar-width:none}
.sh-filter-row::-webkit-scrollbar{display:none}
.sh-pill{flex-shrink:0;padding:8px 16px;border-radius:20px;background:var(--paper);border:1px solid var(--line);font-size:12px;font-weight:500;color:var(--ink-soft);white-space:nowrap;transition:.15s}
.sh-pill:hover{border-color:var(--line-strong)}
.sh-pill.active{background:var(--ink);color:var(--paper);border-color:var(--ink)}

/* PRODUCT GRID */
.sh-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:14px}
@media(min-width:640px){.sh-grid{grid-template-columns:repeat(3,1fr);gap:18px}}
@media(min-width:900px){.sh-grid{grid-template-columns:repeat(4,1fr)}}
.sh-card{background:var(--paper);border-radius:var(--radius);overflow:hidden;cursor:pointer;transition:.25s;box-shadow:var(--shadow-sm);display:flex;flex-direction:column}
.sh-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-lg)}
.sh-card-img{aspect-ratio:1;display:flex;align-items:center;justify-content:center;font-size:72px;position:relative}
.sh-card-tag{position:absolute;top:10px;left:10px;background:var(--paper);color:var(--rose-deep);padding:5px 10px;font-size:10px;font-weight:700;border-radius:12px;letter-spacing:.05em}
.sh-card-tag.new{background:var(--sage-soft);color:var(--sage-deep)}
.sh-card-wish{position:absolute;top:10px;right:10px;width:32px;height:32px;border-radius:50%;background:rgba(255,255,255,.9);display:flex;align-items:center;justify-content:center;color:var(--ink-soft);transition:.15s}
.sh-card-wish:hover{background:#fff;transform:scale(1.08)}
.sh-card-wish.active{color:var(--rose-deep)}
.sh-card-body{padding:12px 14px 14px;display:flex;flex-direction:column;gap:6px;flex:1}
.sh-card-brand{font-size:10px;font-weight:700;letter-spacing:.14em;color:var(--ink-muted);text-transform:uppercase}
.sh-card-name{font-family:Georgia,serif;font-size:14px;line-height:1.3;color:var(--ink);display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;min-height:37px}
.sh-card-bottom{margin-top:auto;display:flex;align-items:center;justify-content:space-between;gap:8px;padding-top:6px}
.sh-card-price{display:flex;flex-direction:column;gap:2px}
.sh-card-price-now{font-size:14px;font-weight:700;color:var(--ink)}
.sh-card-price-old{font-size:10px;color:var(--ink-muted);text-decoration:line-through}
.sh-card-rating{display:flex;align-items:center;gap:4px;font-size:11px;color:var(--ink-muted);font-weight:500}
.sh-card-rating .star{color:var(--warning)}
.sh-card-colors{display:flex;gap:4px;margin-top:4px}
.sh-color-dot{width:12px;height:12px;border-radius:50%;border:1.5px solid var(--paper);box-shadow:0 0 0 1px var(--line)}

/* BOTTOM NAV */
.sh-nav{position:fixed;bottom:0;left:0;right:0;background:var(--paper);z-index:200;display:flex;border-top:1px solid var(--line);padding:6px 0 8px;box-shadow:0 -4px 20px rgba(42,39,36,.05)}
.sh-nav-item{flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;color:var(--ink-muted);font-size:10px;font-weight:600;padding:6px 0;position:relative;letter-spacing:.02em}
.sh-nav-item.active{color:var(--rose-deep)}
.sh-nav-item .nav-icon{font-size:20px;display:flex}

/* DRAWER */
.sh-overlay{position:fixed;inset:0;background:rgba(42,39,36,.35);z-index:300;opacity:0;visibility:hidden;transition:.25s;backdrop-filter:blur(4px)}
.sh-overlay.open{opacity:1;visibility:visible}
.sh-drawer{position:fixed;bottom:0;left:0;right:0;background:var(--paper);z-index:301;border-radius:24px 24px 0 0;max-height:92vh;display:flex;flex-direction:column;transform:translateY(100%);transition:.32s cubic-bezier(.4,0,.2,1)}
.sh-drawer.open{transform:translateY(0)}
.sh-drawer-handle{width:38px;height:4px;background:var(--line-strong);border-radius:2px;margin:10px auto}
.sh-drawer-head{padding:4px 22px 16px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--line)}
.sh-drawer-title{font-family:Georgia,serif;font-size:22px;font-weight:400;letter-spacing:-.01em}
.sh-drawer-title small{font-size:11px;color:var(--ink-muted);margin-top:3px;font-weight:500;display:block}
.sh-drawer-close{width:36px;height:36px;border-radius:50%;background:var(--bg-soft);display:flex;align-items:center;justify-content:center;color:var(--ink-soft)}
.sh-drawer-body{flex:1;overflow-y:auto;padding:16px 22px}
.sh-drawer-foot{padding:16px 22px 24px;border-top:1px solid var(--line);background:var(--paper)}

.sh-cart-row{display:flex;gap:14px;padding:14px 0;border-bottom:1px solid var(--line)}
.sh-cart-row:last-child{border-bottom:none}
.sh-cart-img{width:72px;height:88px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:36px;flex-shrink:0}
.sh-cart-info{flex:1;min-width:0;display:flex;flex-direction:column;gap:3px}
.sh-cart-brand{font-size:10px;font-weight:700;letter-spacing:.12em;color:var(--ink-muted);text-transform:uppercase}
.sh-cart-name{font-family:Georgia,serif;font-size:14px;line-height:1.25}
.sh-cart-var{font-size:11px;color:var(--ink-muted);font-weight:500}
.sh-cart-price{font-size:14px;font-weight:700;margin-top:4px}
.sh-cart-actions{display:flex;flex-direction:column;align-items:flex-end;justify-content:space-between}
.sh-cart-remove{font-size:11px;color:var(--danger);font-weight:600;text-decoration:underline}
.sh-qty{display:flex;align-items:center;background:var(--bg-soft);border-radius:20px;overflow:hidden}
.sh-qty button{width:28px;height:28px;font-size:14px;font-weight:700;color:var(--ink-soft)}
.sh-qty span{width:26px;text-align:center;font-size:12px;font-weight:700}
.sh-sum-row{display:flex;justify-content:space-between;font-size:12px;margin-bottom:8px;color:var(--ink-soft)}
.sh-sum-row.total{font-family:Georgia,serif;font-size:20px;font-weight:400;color:var(--ink);padding-top:12px;border-top:1px solid var(--line);margin-top:10px}
.sh-btn-primary{width:100%;background:var(--ink);color:var(--paper);border-radius:26px;padding:14px;font-size:13px;font-weight:600;letter-spacing:.02em;transition:.2s;margin-top:12px}
.sh-btn-primary:hover{background:var(--rose-deep)}
.sh-btn-secondary{width:100%;background:var(--paper);color:var(--ink);border:1px solid var(--line-strong);border-radius:26px;padding:13px;font-size:12px;font-weight:600;margin-top:8px}

/* PDP */
.sh-pdp{position:fixed;inset:0;background:var(--paper);z-index:500;transform:translateY(100%);transition:.32s cubic-bezier(.4,0,.2,1);overflow-y:auto;display:none}
.sh-pdp.open{transform:translateY(0);display:block}
.sh-pdp-top{position:sticky;top:0;background:rgba(255,255,255,.95);backdrop-filter:blur(12px);padding:14px 20px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--line);z-index:10}
.sh-pdp-top-title{font-size:11px;font-weight:600;color:var(--ink-muted);letter-spacing:.14em;text-transform:uppercase}
.sh-pdp-hero{aspect-ratio:4/5;background:var(--cream);display:flex;align-items:center;justify-content:center;font-size:180px;position:relative}
.sh-pdp-hero-tag{position:absolute;top:20px;left:20px;background:var(--paper);padding:8px 14px;border-radius:14px;font-size:11px;font-weight:700;color:var(--rose-deep);box-shadow:var(--shadow-sm)}
.sh-pdp-content{padding:22px 22px 0}
.sh-pdp-brand{font-size:11px;font-weight:700;letter-spacing:.16em;color:var(--ink-muted);text-transform:uppercase;margin-bottom:8px}
.sh-pdp-name{font-family:Georgia,serif;font-size:26px;line-height:1.15;font-weight:400;margin-bottom:14px;letter-spacing:-.01em}
.sh-pdp-price{display:flex;align-items:baseline;gap:10px;flex-wrap:wrap;margin-bottom:18px}
.sh-pdp-price-now{font-family:Georgia,serif;font-size:26px;font-weight:400}
.sh-pdp-price-old{font-size:14px;color:var(--ink-muted);text-decoration:line-through}
.sh-pdp-discount{background:var(--rose-soft);color:var(--rose-deep);padding:4px 10px;border-radius:12px;font-size:11px;font-weight:700}
.sh-pdp-meta{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-bottom:24px;padding:18px 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line)}
.sh-pdp-meta-item{text-align:center}
.sh-pdp-meta-label{font-size:10px;font-weight:600;letter-spacing:.14em;color:var(--ink-muted);text-transform:uppercase;margin-bottom:5px}
.sh-pdp-meta-value{font-family:Georgia,serif;font-size:16px}
.sh-pdp-opt{margin-bottom:20px}
.sh-pdp-opt-head{display:flex;justify-content:space-between;align-items:baseline;margin-bottom:10px}
.sh-pdp-opt-label{font-size:11px;font-weight:700;letter-spacing:.14em;color:var(--ink-muted);text-transform:uppercase}
.sh-pdp-opt-value{font-family:Georgia,serif;font-size:14px}
.sh-color-chips{display:flex;gap:10px;flex-wrap:wrap}
.sh-color-chip{width:36px;height:36px;border-radius:50%;position:relative;transition:.15s;box-shadow:inset 0 0 0 1.5px rgba(255,255,255,.8),0 0 0 1.5px var(--line-strong)}
.sh-color-chip.active{box-shadow:inset 0 0 0 2px var(--paper),0 0 0 2px var(--ink)}
.sh-size-chips{display:flex;gap:8px;flex-wrap:wrap}
.sh-size-chip{padding:10px 18px;border:1px solid var(--line-strong);background:var(--paper);border-radius:8px;font-size:13px;font-weight:600;transition:.15s;min-width:52px;text-align:center}
.sh-size-chip.active{background:var(--ink);color:var(--paper);border-color:var(--ink)}
.sh-size-chip.disabled{opacity:.35;text-decoration:line-through;cursor:not-allowed}
.sh-pdp-desc{font-size:13px;line-height:1.75;color:var(--ink-soft);margin-bottom:26px}
.sh-pdp-cta{position:sticky;bottom:0;background:var(--paper);border-top:1px solid var(--line);padding:14px 20px;display:flex;gap:10px;box-shadow:0 -4px 20px rgba(42,39,36,.05)}
.sh-pdp-wish{width:52px;height:52px;border:1px solid var(--line-strong);border-radius:50%;display:flex;align-items:center;justify-content:center;background:var(--paper)}
.sh-pdp-cta .sh-btn-primary{margin:0;flex:1;padding:16px}

/* ============ ADMIN LAYOUT ============ */
.sh-admin{display:flex;min-height:100vh;background:var(--bg)}
.sh-sidebar{width:260px;background:var(--paper);border-right:1px solid var(--line);position:fixed;top:0;left:0;bottom:0;z-index:100;display:flex;flex-direction:column;transition:transform .3s}
.sh-sidebar.collapsed{transform:translateX(-100%)}
@media(min-width:1024px){.sh-sidebar.collapsed{transform:translateX(0)}}
.sh-sb-brand{padding:22px 20px 18px;border-bottom:1px solid var(--line)}
.sh-sb-brand-name{font-family:Georgia,serif;font-size:22px;font-weight:400}
.sh-sb-brand-name em{font-style:italic;color:var(--rose-deep)}
.sh-sb-brand-role{font-size:10px;font-weight:600;letter-spacing:.18em;color:var(--ink-muted);text-transform:uppercase;margin-top:5px}
.sh-sb-user{padding:16px 20px;display:flex;align-items:center;gap:10px;border-bottom:1px solid var(--line);background:var(--rose-soft)}
.sh-sb-avatar{width:38px;height:38px;border-radius:50%;background:var(--rose-deep);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:12px;flex-shrink:0}
.sh-sb-user-info{flex:1;min-width:0}
.sh-sb-user-name{font-size:12px;font-weight:700}
.sh-sb-user-role{font-size:10px;color:var(--rose-deep);font-weight:600;letter-spacing:.04em}
.sh-sb-nav{flex:1;overflow-y:auto;padding:14px 12px}
.sh-sb-group{margin-bottom:18px}
.sh-sb-group-label{font-size:10px;font-weight:700;letter-spacing:.18em;color:var(--ink-muted);text-transform:uppercase;padding:8px 12px 6px}
.sh-sb-item{display:flex;align-items:center;gap:12px;padding:11px 12px;border-radius:10px;font-size:12px;font-weight:600;color:var(--ink-soft);width:100%;text-align:left;transition:.15s;margin-bottom:2px;position:relative}
.sh-sb-item:hover{background:var(--bg)}
.sh-sb-item.active{background:var(--rose-soft);color:var(--rose-deep)}
.sh-sb-icon{font-size:16px;display:flex;width:20px;justify-content:center;flex-shrink:0}
.sh-sb-badge{margin-left:auto;background:var(--rose-deep);color:#fff;font-size:10px;font-weight:700;padding:2px 7px;border-radius:10px;min-width:20px;text-align:center}
.sh-sb-footer{padding:14px 16px;border-top:1px solid var(--line);display:flex;flex-direction:column;gap:8px}
.sh-sb-switch{width:100%;display:flex;align-items:center;justify-content:center;gap:8px;padding:12px;border-radius:10px;background:var(--rose-deep);color:#fff;font-size:11px;font-weight:700;letter-spacing:.03em}
.sh-sb-switch:hover{background:var(--rose)}
.sh-sb-overlay{position:fixed;inset:0;background:rgba(42,39,36,.4);z-index:99;opacity:0;visibility:hidden;transition:.25s}
.sh-sb-overlay.show{opacity:1;visibility:visible}
@media(min-width:1024px){.sh-sb-overlay{display:none}}

.sh-main{flex:1;margin-left:260px;min-width:0}
@media(max-width:1023px){.sh-main{margin-left:0}}
.sh-topbar{position:sticky;top:0;background:rgba(255,255,255,.9);backdrop-filter:blur(12px);border-bottom:1px solid var(--line);padding:14px 24px;z-index:50;display:flex;align-items:center;gap:14px}
.sh-menu-btn{width:40px;height:40px;border-radius:10px;background:var(--bg);display:none;align-items:center;justify-content:center;color:var(--ink-soft)}
@media(max-width:1023px){.sh-menu-btn{display:flex}}
.sh-page-title{font-family:Georgia,serif;font-size:22px;font-weight:400;letter-spacing:-.01em;margin-top:4px}
.sh-page-sub{font-size:11px;color:var(--ink-muted);font-weight:500;margin-top:2px}
.sh-top-right{margin-left:auto;display:flex;gap:8px;align-items:center}
.sh-icon-btn{width:40px;height:40px;border-radius:50%;background:var(--bg);display:flex;align-items:center;justify-content:center;color:var(--ink-soft);position:relative}
.sh-icon-btn:hover{background:var(--line)}
.sh-content{padding:24px}
@media(max-width:639px){.sh-content{padding:16px}}

/* KPI */
.sh-kpi-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-bottom:22px}
@media(min-width:640px){.sh-kpi-grid{grid-template-columns:repeat(4,1fr)}}
.sh-kpi{background:var(--paper);border-radius:var(--radius);padding:18px;box-shadow:var(--shadow-sm);position:relative;overflow:hidden}
.sh-kpi::before{content:"";position:absolute;top:0;right:0;width:60px;height:60px;border-radius:50%;opacity:.4;transform:translate(30%,-30%)}
.sh-kpi.rose::before{background:var(--rose-soft)}
.sh-kpi.sage::before{background:var(--sage-soft)}
.sh-kpi.cream::before{background:var(--cream)}
.sh-kpi.warm::before{background:var(--bg-soft)}
.sh-kpi-label{font-size:10px;font-weight:700;letter-spacing:.14em;color:var(--ink-muted);text-transform:uppercase;margin-bottom:10px}
.sh-kpi-value{font-family:Georgia,serif;font-size:24px;font-weight:400;letter-spacing:-.02em;line-height:1.1;position:relative;z-index:1}
.sh-kpi-trend{display:inline-flex;align-items:center;gap:4px;font-size:10px;font-weight:700;padding:3px 8px;border-radius:10px;margin-top:10px;position:relative;z-index:1}
.sh-kpi-trend.up{background:var(--sage-soft);color:var(--sage-deep)}
.sh-kpi-trend.down{background:var(--rose-soft);color:var(--rose-deep)}

.sh-card-panel{background:var(--paper);border-radius:var(--radius);box-shadow:var(--shadow-sm);overflow:hidden;margin-bottom:18px}
.sh-card-head{padding:18px 20px;border-bottom:1px solid var(--line);display:flex;align-items:center;justify-content:space-between;gap:12px}
.sh-card-title{font-family:Georgia,serif;font-size:16px;font-weight:400;letter-spacing:-.01em}
.sh-card-sub{font-size:11px;color:var(--ink-muted);margin-top:3px}
.sh-card-body{padding:20px}
.sh-card-body-flush{padding:0}

.sh-tbl-wrap{overflow-x:auto}
.sh-tbl{width:100%;border-collapse:collapse;font-size:12px}
.sh-tbl th{text-align:left;padding:12px 16px;font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:var(--ink-muted);background:var(--cream);border-bottom:1px solid var(--line);white-space:nowrap}
.sh-tbl td{padding:14px 16px;border-bottom:1px solid var(--line);vertical-align:middle}
.sh-tbl tr:last-child td{border-bottom:none}
.sh-tbl tr:hover td{background:var(--cream)}

.sh-btn-sm{padding:7px 14px;border-radius:8px;font-size:11px;font-weight:600;transition:.15s;display:inline-flex;align-items:center;gap:6px}
.sh-btn-sm.primary{background:var(--ink);color:var(--paper)}
.sh-btn-sm.primary:hover{background:var(--rose-deep)}
.sh-btn-sm.outline{background:var(--paper);color:var(--ink-soft);border:1px solid var(--line)}
.sh-btn-sm.outline:hover{border-color:var(--ink-soft);color:var(--ink)}
.sh-btn-sm.danger{background:var(--danger);color:#fff}
.sh-btn-sm.rose{background:var(--rose-deep);color:#fff}
.sh-btn-sm.rose:hover{background:var(--rose)}

.sh-badge{display:inline-flex;align-items:center;gap:5px;padding:5px 10px;border-radius:14px;font-size:10px;font-weight:700;letter-spacing:.03em;white-space:nowrap}
.sh-badge.success{background:var(--sage-soft);color:var(--sage-deep)}
.sh-badge.warning{background:#fdf1e1;color:var(--warning)}
.sh-badge.danger{background:var(--rose-soft);color:var(--rose-deep)}
.sh-badge.info{background:#e0e8f0;color:#5c7a94}
.sh-badge.neutral{background:var(--bg-soft);color:var(--ink-muted)}
.sh-badge-dot{width:6px;height:6px;border-radius:50%;background:currentColor}

.sh-form-group{margin-bottom:16px}
.sh-form-label{display:block;font-size:11px;font-weight:700;letter-spacing:.06em;color:var(--ink-soft);margin-bottom:7px}
.sh-form-input{width:100%;padding:11px 14px;border:1px solid var(--line);border-radius:10px;font-size:13px;background:var(--paper);transition:.15s}
.sh-form-input:focus{border-color:var(--rose-deep);box-shadow:0 0 0 3px var(--rose-soft)}
.sh-form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}

.sh-chart{display:flex;align-items:flex-end;gap:8px;height:180px;padding-top:20px}
.sh-chart-bar{flex:1;background:var(--rose-soft);border-radius:8px 8px 0 0;position:relative;min-height:8px;transition:.3s}
.sh-chart-bar.active{background:var(--rose-deep)}
.sh-chart-bar span{position:absolute;bottom:-22px;left:0;right:0;text-align:center;font-size:10px;color:var(--ink-muted);font-weight:600}
.sh-chart-bar b{position:absolute;top:-18px;left:0;right:0;text-align:center;font-size:10px;color:var(--ink);font-weight:700}

.sh-list-item{display:flex;align-items:center;gap:14px;padding:16px 0;border-bottom:1px solid var(--line)}
.sh-list-item:last-child{border-bottom:none}
.sh-list-avatar{width:44px;height:44px;border-radius:50%;background:var(--rose-soft);color:var(--rose-deep);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px;flex-shrink:0}
.sh-list-info{flex:1;min-width:0}
.sh-list-name{font-size:13px;font-weight:700;color:var(--ink)}
.sh-list-sub{font-size:11px;color:var(--ink-muted);margin-top:2px;font-weight:500}

.sh-order-card{border:1px solid var(--line);border-radius:var(--radius);padding:18px;margin-bottom:14px;background:var(--paper);transition:.15s}
.sh-order-card:hover{box-shadow:var(--shadow)}
.sh-order-head{display:flex;justify-content:space-between;align-items:flex-start;gap:12px;margin-bottom:14px}
.sh-order-id{font-family:Georgia,serif;font-size:15px;font-weight:400}
.sh-order-meta{font-size:11px;color:var(--ink-muted);margin-top:3px}
.sh-order-body{font-size:12px;line-height:1.7;color:var(--ink-soft)}
.sh-order-items{background:var(--cream);border-radius:10px;padding:12px;margin:12px 0;font-size:11px;line-height:1.8;color:var(--ink-soft)}
.sh-order-actions{display:flex;gap:8px;flex-wrap:wrap;padding-top:12px;border-top:1px solid var(--line)}

.sh-variant-row{display:grid;grid-template-columns:1fr 1fr auto auto;gap:12px;align-items:center;padding:11px 14px;border-bottom:1px solid var(--line);font-size:12px}
.sh-variant-row:last-child{border-bottom:none}
.sh-variant-row:nth-child(odd){background:var(--cream)}
.sh-variant-input{width:70px;padding:6px 10px;border:1px solid var(--line);border-radius:8px;text-align:center;font-weight:700;font-size:12px;background:var(--paper)}
.sh-variant-input:focus{border-color:var(--rose-deep)}

.sh-filter-chips{display:flex;gap:8px;overflow-x:auto;padding-bottom:14px;scrollbar-width:none}
.sh-filter-chips::-webkit-scrollbar{display:none}
.sh-chip{flex-shrink:0;padding:8px 16px;border-radius:20px;background:var(--paper);border:1px solid var(--line);font-size:12px;font-weight:600;color:var(--ink-soft);white-space:nowrap}
.sh-chip.active{background:var(--ink);color:var(--paper);border-color:var(--ink)}

.sh-progress{height:8px;background:var(--bg-soft);border-radius:4px;overflow:hidden;margin-top:10px}
.sh-progress-fill{height:100%;background:var(--rose-deep);border-radius:4px}

/* Modal */
.sh-modal{position:fixed;inset:0;background:rgba(42,39,36,.4);z-index:500;display:flex;align-items:flex-end;justify-content:center;opacity:0;visibility:hidden;transition:.25s;padding:0;backdrop-filter:blur(4px)}
@media(min-width:640px){.sh-modal{align-items:center;padding:16px}}
.sh-modal.open{opacity:1;visibility:visible}
.sh-modal-box{background:var(--paper);border-radius:24px 24px 0 0;width:100%;max-width:560px;transform:translateY(20px);transition:.28s;max-height:92vh;overflow-y:auto;padding:26px}
@media(min-width:640px){.sh-modal-box{border-radius:var(--radius-lg);transform:scale(.95)}}
.sh-modal.open .sh-modal-box{transform:translateY(0)}
@media(min-width:640px){.sh-modal.open .sh-modal-box{transform:scale(1)}}
.sh-modal-title{font-family:Georgia,serif;font-size:22px;font-weight:400;letter-spacing:-.01em;margin-bottom:6px}
.sh-modal-sub{font-size:12px;color:var(--ink-muted);margin-bottom:18px}

.sh-success{padding:40px 20px;text-align:center}
.sh-success-icon{width:76px;height:76px;border-radius:50%;background:var(--sage-soft);color:var(--sage-deep);display:flex;align-items:center;justify-content:center;margin:0 auto 22px;font-size:32px}
.sh-success-title{font-family:Georgia,serif;font-size:28px;font-weight:400;letter-spacing:-.02em;margin-bottom:10px}
.sh-success-sub{font-size:13px;color:var(--ink-soft);line-height:1.7;margin-bottom:26px}

.sh-toast{position:fixed;bottom:150px;left:50%;transform:translateX(-50%) translateY(20px);background:var(--ink);color:var(--paper);padding:12px 22px;border-radius:24px;font-size:12px;font-weight:600;z-index:700;opacity:0;transition:.3s;pointer-events:none;white-space:nowrap;max-width:92vw}
.sh-toast.show{opacity:1;transform:translateX(-50%) translateY(0)}

.sh-empty{text-align:center;padding:50px 20px;color:var(--ink-muted)}
.sh-empty-icon{font-size:44px;margin-bottom:12px;opacity:.4}
.sh-empty-title{font-family:Georgia,serif;font-size:18px;color:var(--ink);margin-bottom:4px}
.sh-empty-desc{font-size:12px}

.sh-alert{padding:14px 16px;border-radius:var(--radius);font-size:12px;font-weight:500;display:flex;gap:10px;margin-bottom:14px;line-height:1.6}
.sh-alert.info{background:#e0e8f0;color:#3d5870}
.sh-alert.success{background:var(--sage-soft);color:var(--sage-deep)}

/* Chat */
.sh-chat-fab{position:fixed;bottom:150px;right:18px;width:56px;height:56px;border-radius:50%;background:var(--rose-deep);color:#fff;display:flex;align-items:center;justify-content:center;box-shadow:0 8px 24px rgba(201,139,143,.4);z-index:250;transition:.2s}
.sh-chat-fab:hover{transform:scale(1.05)}
.sh-chat{position:fixed;bottom:150px;right:18px;width:340px;max-width:calc(100vw - 36px);height:480px;max-height:72vh;background:var(--paper);border-radius:var(--radius-lg);z-index:260;display:flex;flex-direction:column;transform:translateY(20px);opacity:0;visibility:hidden;transition:.25s;box-shadow:var(--shadow-lg);overflow:hidden}
.sh-chat.open{transform:translateY(0);opacity:1;visibility:visible}
.sh-chat-head{background:var(--rose-soft);padding:16px;display:flex;align-items:center;gap:12px}
.sh-chat-avatar{width:40px;height:40px;border-radius:50%;background:var(--rose-deep);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px}
.sh-chat-info{flex:1}
.sh-chat-name{font-size:13px;font-weight:700;color:var(--ink)}
.sh-chat-status{font-size:10px;color:var(--rose-deep);display:flex;align-items:center;gap:4px;margin-top:2px;font-weight:600}
.sh-chat-live{width:6px;height:6px;background:var(--sage-deep);border-radius:50%}
.sh-chat-body{flex:1;overflow-y:auto;padding:16px;display:flex;flex-direction:column;gap:10px;background:var(--cream)}
.sh-chat-msg{max-width:82%;padding:10px 14px;border-radius:16px;font-size:12px;line-height:1.55}
.sh-chat-msg.bot{background:var(--paper);color:var(--ink);align-self:flex-start;border-bottom-left-radius:4px;box-shadow:var(--shadow-sm)}
.sh-chat-msg.user{background:var(--ink);color:var(--paper);align-self:flex-end;border-bottom-right-radius:4px}
.sh-chat-time{font-size:9px;opacity:.55;margin-top:4px}
.sh-chat-input-row{border-top:1px solid var(--line);padding:10px;display:flex;gap:8px;background:var(--paper)}
.sh-chat-input{flex:1;padding:10px 16px;border:1px solid var(--line);border-radius:20px;font-size:12px;background:var(--bg)}
.sh-chat-send{width:40px;height:40px;border-radius:50%;background:var(--rose-deep);color:#fff;display:flex;align-items:center;justify-content:center}

/* Search */
.sh-search-overlay{position:fixed;inset:0;background:var(--bg);z-index:600;transform:translateY(-100%);transition:.3s;overflow-y:auto}
.sh-search-overlay.open{transform:translateY(0)}
.sh-search-head{padding:16px 20px;display:flex;align-items:center;gap:12px;background:var(--paper);border-bottom:1px solid var(--line);position:sticky;top:0;z-index:10}
.sh-search-input{flex:1;padding:12px 18px;background:var(--bg);border-radius:24px;font-size:14px;border:1px solid transparent}
.sh-search-input:focus{border-color:var(--rose-deep);background:var(--paper)}
.sh-search-cancel{font-size:12px;font-weight:600;color:var(--ink-soft)}
.sh-search-body{padding:22px}
.sh-search-tag-row{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:24px}
.sh-search-tag{padding:9px 16px;background:var(--paper);border:1px solid var(--line);border-radius:20px;font-size:12px;font-weight:500;color:var(--ink-soft)}
.sh-search-result{display:flex;gap:12px;padding:12px 0;border-bottom:1px solid var(--line);cursor:pointer;align-items:center}
.sh-search-result-img{width:60px;height:72px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:28px;flex-shrink:0}

::-webkit-scrollbar{width:8px;height:8px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--line-strong);border-radius:4px}
::-webkit-scrollbar-thumb:hover{background:var(--ink-muted)}
</style>
</head>
<body>

<!-- =================== FLOATING MODE SWITCHER =================== -->
<div class="mode-switch">
  <button class="mode-switch-btn active" id="msCustomer" onclick="setMode('customer')">
    <span class="ms-icon">◉</span> Toko
  </button>
  <button class="mode-switch-btn" id="msAdmin" onclick="setMode('admin')">
    <span class="ms-icon">◈</span> Admin Panel
  </button>
</div>

<!-- =================== CUSTOMER =================== -->
<div id="customerApp">
  <header class="sh-header">
    <div class="sh-announce">Gratis Ongkir Min. Rp300.000 - Retur 30 Hari</div>
    <div class="sh-head">
      <div class="sh-brand">
        <div class="sh-brand-name">Style<em>Hub</em></div>
        <div class="sh-brand-tag">Fashion Editorial</div>
      </div>
      <div class="sh-head-right">
        <button class="sh-admin-entry" onclick="setMode('admin')">
          <span class="mono">◈</span> Admin
        </button>
        <div class="sh-icons">
          <button class="sh-icon" onclick="openSearch()" aria-label="Cari">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4"/></svg>
          </button>
          <button class="sh-icon" onclick="toggleOrders()" aria-label="Pesanan">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/></svg>
          </button>
          <button class="sh-icon" onclick="toggleWishlist()" aria-label="Wishlist">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            <span class="sh-badge" id="wishBadge" style="display:none">0</span>
          </button>
          <button class="sh-icon" onclick="toggleCart()" aria-label="Keranjang">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            <span class="sh-badge" id="cartBadge" style="display:none">0</span>
          </button>
        </div>
      </div>
    </div>
    <div class="sh-search" onclick="openSearch()">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4"/></svg>
      <span>Cari produk, brand, atau kategori</span>
    </div>
    <div class="sh-cats" id="catNav"></div>
  </header>

  <section class="sh-hero">
    <div class="sh-hero-content">
      <div class="sh-hero-eyebrow">Koleksi Spring 2026</div>
      <h1 class="sh-hero-title">Lembut, tenang,<br><em>abadi</em>.</h1>
      <p class="sh-hero-sub">Kurasi pakaian dengan bahan alami dan potongan yang bertahan lebih dari satu musim.</p>
    </div>
    <div class="sh-hero-actions">
      <button class="sh-btn-hero primary" onclick="document.getElementById('koleksi').scrollIntoView({behavior:'smooth'})">Belanja</button>
      <button class="sh-btn-hero ghost" onclick="setMode('admin')">Buka Admin Panel →</button>
    </div>
  </section>

  <section class="sh-section" style="padding-top:8px">
    <div class="sh-section-head">
      <div class="sh-section-title-wrap">
        <span class="sh-section-eyebrow">Lookbook</span>
        <h2 class="sh-section-title">Inspirasi <em>gaya</em></h2>
      </div>
      <button class="sh-section-link" onclick="showToast('Semua lookbook')">Semua</button>
    </div>
    <div class="sh-lookbook-scroll" id="lookbookScroll"></div>
  </section>

  <div class="sh-flash-bar">
    <div class="sh-flash-icon">✦</div>
    <div class="sh-flash-text">
      <div class="sh-flash-title">Flash Sale Hari Ini</div>
      <div class="sh-flash-sub">Diskon hingga 40% - berakhir dalam</div>
    </div>
    <div class="sh-flash-timer" id="flashTimer">00:00:00</div>
  </div>

  <section class="sh-section" id="koleksi">
    <div class="sh-section-head">
      <div class="sh-section-title-wrap">
        <span class="sh-section-eyebrow">Katalog</span>
        <h2 class="sh-section-title" id="sectionTitle">Semua <em>produk</em></h2>
      </div>
      <button class="sh-section-link" onclick="loadMore()">Semua</button>
    </div>
    <div class="sh-filter-row">
      <button class="sh-pill active" data-sort="new">Terbaru</button>
      <button class="sh-pill" data-sort="popular">Populer</button>
      <button class="sh-pill" data-sort="cheap">Termurah</button>
      <button class="sh-pill" data-sort="expensive">Termahal</button>
      <button class="sh-pill" data-sort="discount">Diskon</button>
      <button class="sh-pill" data-sort="rating">Rating</button>
    </div>
    <div class="sh-grid" id="productGrid"></div>
  </section>
</div>

<!-- =================== ADMIN =================== -->
<div id="adminApp" class="sh-admin hidden">
  <aside class="sh-sidebar collapsed" id="shSidebar">
    <div class="sh-sb-brand">
      <div class="sh-sb-brand-name">Style<em>Hub</em></div>
      <div class="sh-sb-brand-role">Backoffice</div>
    </div>
    <div class="sh-sb-user">
      <div class="sh-sb-avatar">AF</div>
      <div class="sh-sb-user-info">
        <div class="sh-sb-user-name">Ahmad Fauzi</div>
        <div class="sh-sb-user-role">Manager</div>
      </div>
    </div>
    <nav class="sh-sb-nav">
      <div class="sh-sb-group">
        <div class="sh-sb-group-label">Utama</div>
        <button class="sh-sb-item active" data-tab="dashboard" onclick="switchAdminTab('dashboard')">
          <span class="sh-sb-icon">◉</span> Dashboard
        </button>
        <button class="sh-sb-item" data-tab="orders" onclick="switchAdminTab('orders')">
          <span class="sh-sb-icon">◇</span> Pesanan
          <span class="sh-sb-badge" id="shOrderBadge">0</span>
        </button>
        <button class="sh-sb-item" data-tab="returns" onclick="switchAdminTab('returns')">
          <span class="sh-sb-icon">↺</span> Retur
          <span class="sh-sb-badge" id="shReturnBadge">0</span>
        </button>
      </div>
      <div class="sh-sb-group">
        <div class="sh-sb-group-label">Katalog</div>
        <button class="sh-sb-item" data-tab="products" onclick="switchAdminTab('products')">
          <span class="sh-sb-icon">□</span> Produk
        </button>
        <button class="sh-sb-item" data-tab="inventory" onclick="switchAdminTab('inventory')">
          <span class="sh-sb-icon">▤</span> Varian & Stok
        </button>
      </div>
      <div class="sh-sb-group">
        <div class="sh-sb-group-label">Bisnis</div>
        <button class="sh-sb-item" data-tab="customers" onclick="switchAdminTab('customers')">
          <span class="sh-sb-icon">◐</span> Pelanggan
        </button>
        <button class="sh-sb-item" data-tab="staff" onclick="switchAdminTab('staff')">
          <span class="sh-sb-icon">◑</span> Tim
        </button>
        <button class="sh-sb-item" data-tab="vouchers" onclick="switchAdminTab('vouchers')">
          <span class="sh-sb-icon">◇</span> Promo
        </button>
        <button class="sh-sb-item" data-tab="reports" onclick="switchAdminTab('reports')">
          <span class="sh-sb-icon">◈</span> Laporan
        </button>
      </div>
      <div class="sh-sb-group">
        <div class="sh-sb-group-label">Lainnya</div>
        <button class="sh-sb-item" data-tab="settings" onclick="switchAdminTab('settings')">
          <span class="sh-sb-icon">⚙</span> Pengaturan
        </button>
      </div>
    </nav>
    <div class="sh-sb-footer">
      <button class="sh-sb-switch" onclick="setMode('customer')">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
        Lihat Toko
      </button>
    </div>
  </aside>
  <div class="sh-sb-overlay" id="shSidebarOverlay" onclick="toggleShSidebar()"></div>

  <main class="sh-main">
    <div class="sh-topbar">
      <button class="sh-menu-btn" onclick="toggleShSidebar()" aria-label="Menu">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
      <div>
        <div class="sh-breadcrumb" id="shBreadcrumb">
          <span class="crumb" style="cursor:pointer" onclick="switchAdminTab('dashboard')">Backoffice</span>
          <span class="sep">/</span>
          <span class="crumb active">Dashboard</span>
        </div>
        <div class="sh-page-title" id="shPageTitle">Dashboard</div>
        <div class="sh-page-sub" id="shPageSub">Ringkasan performa toko</div>
      </div>
      <div class="sh-top-right">
        <button class="sh-switch-customer" onclick="setMode('customer')">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
          Lihat Toko
        </button>
        <button class="sh-icon-btn" onclick="showToast('Notifikasi')" aria-label="Notifikasi">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
        </button>
      </div>
    </div>
    <div class="sh-content" id="shContent"></div>
  </main>
</div>

<!-- BOTTOM NAV -->
<nav class="sh-nav" id="bottomNav">
  <button class="sh-nav-item active" data-nav="home" onclick="navTo('home')">
    <span class="nav-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg></span>
    Beranda
  </button>
  <button class="sh-nav-item" data-nav="shop" onclick="navTo('shop')">
    <span class="nav-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg></span>
    Katalog
  </button>
  <button class="sh-nav-item" data-nav="wish" onclick="toggleWishlist()">
    <span class="nav-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
    Favorit
    <span class="sh-badge" id="wishBadge2" style="display:none">0</span>
  </button>
  <button class="sh-nav-item" data-nav="cart" onclick="toggleCart()">
    <span class="nav-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/></svg></span>
    Keranjang
    <span class="sh-badge" id="cartBadge2" style="display:none">0</span>
  </button>
  <button class="sh-nav-item" data-nav="admin" onclick="setMode('admin')">
    <span class="nav-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg></span>
    Admin
  </button>
</nav>

<!-- CHAT -->
<button class="sh-chat-fab" id="shChatFab" onclick="toggleChat()" aria-label="Chat">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
</button>
<div class="sh-chat" id="shChat">
  <div class="sh-chat-head">
    <div class="sh-chat-avatar">SH</div>
    <div class="sh-chat-info">
      <div class="sh-chat-name">StyleHub Concierge</div>
      <div class="sh-chat-status"><span class="sh-chat-live"></span>Online - balas dalam 1 menit</div>
    </div>
    <button onclick="toggleChat()" style="color:var(--ink-soft)">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="sh-chat-body" id="shChatBody"></div>
  <div class="sh-chat-input-row">
    <input class="sh-chat-input" id="shChatInput" placeholder="Tulis pesan..." onkeydown="if(event.key==='Enter')sendChat()">
    <button class="sh-chat-send" onclick="sendChat()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
    </button>
  </div>
</div>

<!-- CART -->
<div class="sh-overlay" id="cartOverlay" onclick="toggleCart()"></div>
<aside class="sh-drawer" id="cartDrawer">
  <div class="sh-drawer-handle"></div>
  <div class="sh-drawer-head">
    <div>
      <div class="sh-drawer-title">Keranjang</div>
      <small id="cartCountLabel" style="font-size:11px;color:var(--ink-muted);display:block;margin-top:4px">0 item</small>
    </div>
    <button class="sh-drawer-close" onclick="toggleCart()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="sh-drawer-body" id="cartBody"></div>
  <div class="sh-drawer-foot" id="cartFoot" style="display:none">
    <div class="sh-sum-row"><span>Subtotal</span><span id="subtotal">Rp0</span></div>
    <div class="sh-sum-row"><span>Ongkir</span><span id="ongkir">Rp0</span></div>
    <div class="sh-sum-row"><span>Diskon</span><span id="diskon" style="color:var(--sage-deep)">-Rp0</span></div>
    <div class="sh-sum-row total"><span>Total</span><span id="total">Rp0</span></div>
    <button class="sh-btn-primary" onclick="openCheckout()">Lanjut Checkout</button>
  </div>
</aside>

<!-- WISHLIST -->
<div class="sh-overlay" id="wishOverlay" onclick="toggleWishlist()"></div>
<aside class="sh-drawer" id="wishDrawer">
  <div class="sh-drawer-handle"></div>
  <div class="sh-drawer-head">
    <div>
      <div class="sh-drawer-title">Favorit</div>
      <small id="wishCountLabel" style="font-size:11px;color:var(--ink-muted);display:block;margin-top:4px">0 item tersimpan</small>
    </div>
    <button class="sh-drawer-close" onclick="toggleWishlist()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="sh-drawer-body" id="wishBody"></div>
</aside>

<!-- ORDERS -->
<div class="sh-overlay" id="ordersOverlay" onclick="toggleOrders()"></div>
<aside class="sh-drawer" id="ordersDrawer">
  <div class="sh-drawer-handle"></div>
  <div class="sh-drawer-head">
    <div>
      <div class="sh-drawer-title">Pesanan</div>
      <small style="font-size:11px;color:var(--ink-muted);display:block;margin-top:4px">Riwayat transaksi Anda</small>
    </div>
    <button class="sh-drawer-close" onclick="toggleOrders()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="sh-drawer-body" id="ordersBody"></div>
</aside>

<!-- SEARCH -->
<div class="sh-search-overlay" id="shSearchOverlay">
  <div class="sh-search-head">
    <input class="sh-search-input" id="shSearchInput" placeholder="Cari produk..." oninput="handleSearch(this.value)">
    <button class="sh-search-cancel" onclick="closeSearch()">Batal</button>
  </div>
  <div class="sh-search-body">
    <div style="font-size:11px;font-weight:700;letter-spacing:.14em;color:var(--ink-muted);text-transform:uppercase;margin-bottom:12px">Pencarian Populer</div>
    <div class="sh-search-tag-row">
      <button class="sh-search-tag" onclick="quickSearch('kemeja')">Kemeja</button>
      <button class="sh-search-tag" onclick="quickSearch('dress')">Dress</button>
      <button class="sh-search-tag" onclick="quickSearch('oversized')">Oversized</button>
      <button class="sh-search-tag" onclick="quickSearch('sneakers')">Sneakers</button>
      <button class="sh-search-tag" onclick="quickSearch('blazer')">Blazer</button>
      <button class="sh-search-tag" onclick="quickSearch('tote')">Tote Bag</button>
    </div>
    <div id="shSearchResults"></div>
  </div>
</div>

<!-- PDP -->
<div class="sh-pdp" id="pdpModal"></div>

<!-- CHECKOUT SUCCESS -->
<div class="sh-modal" id="checkoutModal">
  <div class="sh-modal-box">
    <div class="sh-success">
      <div class="sh-success-icon">✓</div>
      <h2 class="sh-success-title">Terima kasih!</h2>
      <p class="sh-success-sub">Pesanan <b id="orderIdDisplay">SH-2026-XXXX</b> sudah kami terima.<br>Konfirmasi akan dikirim ke email Anda.</p>
      <button class="sh-btn-primary" onclick="closeCheckout();toggleOrders()">Lacak Pesanan</button>
      <button class="sh-btn-secondary" onclick="closeCheckout()">Kembali Belanja</button>
    </div>
  </div>
</div>

<!-- PRODUCT MODAL -->
<div class="sh-modal" id="productModal">
  <div class="sh-modal-box">
    <div class="sh-modal-title" id="productModalTitle">Produk Baru</div>
    <div class="sh-modal-sub">Isi detail produk</div>
    <div class="sh-form-group"><label class="sh-form-label">Nama Produk</label><input class="sh-form-input" id="pmName"></div>
    <div class="sh-form-group"><label class="sh-form-label">Brand</label><input class="sh-form-input" id="pmBrand"></div>
    <div class="sh-form-row">
      <div class="sh-form-group"><label class="sh-form-label">Harga</label><input class="sh-form-input" id="pmPrice" type="number"></div>
      <div class="sh-form-group"><label class="sh-form-label">Harga Coret</label><input class="sh-form-input" id="pmOld" type="number"></div>
    </div>
    <div class="sh-form-group"><label class="sh-form-label">Kategori</label><select class="sh-form-input" id="pmCat"></select></div>
    <div class="sh-form-group"><label class="sh-form-label">Size (koma)</label><input class="sh-form-input" id="pmSizes" placeholder="S,M,L,XL"></div>
    <div class="sh-form-group"><label class="sh-form-label">Warna (koma)</label><input class="sh-form-input" id="pmColors" placeholder="Hitam,Putih"></div>
    <div class="sh-form-group"><label class="sh-form-label">Deskripsi</label><textarea class="sh-form-input" id="pmDesc" rows="3"></textarea></div>
    <button class="sh-btn-primary" onclick="saveProduct()">Simpan Produk</button>
    <button class="sh-btn-secondary" onclick="closeProductModal()">Batal</button>
  </div>
</div>

<!-- STAFF MODAL -->
<div class="sh-modal" id="staffModal">
  <div class="sh-modal-box">
    <div class="sh-modal-title" id="staffModalTitle">Tambah Staff</div>
    <div class="sh-modal-sub">Undang anggota tim baru</div>
    <div class="sh-form-group"><label class="sh-form-label">Nama Lengkap</label><input class="sh-form-input" id="sfName"></div>
    <div class="sh-form-group"><label class="sh-form-label">Email</label><input class="sh-form-input" id="sfEmail"></div>
    <div class="sh-form-group"><label class="sh-form-label">Role</label>
      <select class="sh-form-input" id="sfRole">
        <option>Manager</option><option>Kasir</option><option>Admin Gudang</option>
        <option>Customer Service</option><option>Kurir</option><option>Content Creator</option>
      </select>
    </div>
    <button class="sh-btn-primary" onclick="saveStaff()">Simpan</button>
    <button class="sh-btn-secondary" onclick="closeStaffModal()">Batal</button>
  </div>
</div>

<div class="sh-toast" id="toast"></div>

<script>
/* ==================== DATA ==================== */
const CATEGORIES = [
  {id:'all',name:'Semua'},{id:'wanita',name:'Wanita'},{id:'pria',name:'Pria'},
  {id:'atasan',name:'Atasan'},{id:'bawahan',name:'Bawahan'},{id:'dress',name:'Dress'},
  {id:'outerwear',name:'Outerwear'},{id:'sepatu',name:'Sepatu'},{id:'tas',name:'Tas'},
  {id:'aksesoris',name:'Aksesoris'}
];

const LOOKBOOKS = [
  {title:'Monokrom Tenang', sub:'18 produk', emoji:'👔', cls:'cream'},
  {title:'Bumi Hangat', sub:'24 produk', emoji:'🧥', cls:'rose'},
  {title:'Pesisir', sub:'14 produk', emoji:'👗', cls:'sage'},
  {title:'Klasik Modern', sub:'20 produk', emoji:'👚', cls:'bg2'},
  {title:'Akhir Pekan', sub:'16 produk', emoji:'👖', cls:'cream'}
];

let PRODUCTS = [
  {id:1,name:'Kemeja Linen Premium Relaxed Fit',brand:'AETERNA',cat:'atasan',price:389000,old:549000,
   colors:[{name:'Putih',hex:'#fafafa'},{name:'Cream',hex:'#f5e9d0'},{name:'Navy',hex:'#3a4a6b'},{name:'Olive',hex:'#8a9a7b'}],
   sizes:['S','M','L','XL'],emoji:'👔',bg:'#f5efe4',rating:4.8,sold:412,isNew:true,isSale:true,stock:87,
   desc:'Kemeja linen dengan potongan relaxed yang lembut. Bahan breathable, cocok untuk iklim tropis.',
   variants:{'Putih-S':12,'Putih-M':15,'Putih-L':10,'Putih-XL':5,'Cream-S':8,'Cream-M':12,'Cream-L':9,'Cream-XL':3,'Navy-S':5,'Navy-M':8,'Navy-L':0,'Navy-XL':0,'Olive-S':3,'Olive-M':5,'Olive-L':2,'Olive-XL':0},
   reviews:[{name:'Rina S.',rating:5,date:'2 hari lalu',text:'Bahan adem, jahitan rapi.',variant:'Putih, M'},{name:'Budi P.',rating:4,date:'1 minggu lalu',text:'Bagus, agak longgar di lengan.',variant:'Navy, L'}]},
  {id:2,name:'Dress Midi Satin Wrap',brand:'LUNA',cat:'dress',price:459000,old:0,
   colors:[{name:'Black',hex:'#3a3330'},{name:'Maroon',hex:'#8b5a5a'},{name:'Champagne',hex:'#f0e0c8'}],
   sizes:['XS','S','M','L'],emoji:'👗',bg:'#f5e0e0',rating:4.9,sold:287,isNew:true,isSale:false,stock:52,
   desc:'Dress satin dengan detail wrap yang menonjolkan siluet.',
   variants:{'Black-XS':3,'Black-S':8,'Black-M':10,'Black-L':5,'Maroon-S':4,'Maroon-M':6,'Maroon-L':3,'Champagne-S':5,'Champagne-M':5,'Champagne-L':3},
   reviews:[{name:'Sinta D.',rating:5,date:'3 hari lalu',text:'Jatuh di badan dengan cantik.',variant:'Maroon, S'}]},
  {id:3,name:'Kaos Oversized Cotton Combed 30s',brand:'BASIC.CO',cat:'atasan',price:129000,old:179000,
   colors:[{name:'Hitam',hex:'#3a3330'},{name:'Putih',hex:'#f5f5f5'},{name:'Abu',hex:'#a8a29e'},{name:'Sage',hex:'#b8c8b5'}],
   sizes:['S','M','L','XL','XXL'],emoji:'👕',bg:'#e5e5f0',rating:4.7,sold:1893,isNew:false,isSale:true,stock:340,
   desc:'Kaos oversize dengan bahan cotton combed 30s.',
   variants:{'Hitam-S':30,'Hitam-M':50,'Hitam-L':45,'Hitam-XL':20,'Hitam-XXL':10,'Putih-S':25,'Putih-M':40,'Putih-L':35,'Putih-XL':15,'Putih-XXL':8,'Abu-S':15,'Abu-M':20,'Abu-L':15,'Abu-XL':10,'Sage-S':1,'Sage-M':1,'Sage-L':0,'Sage-XL':0,'Sage-XXL':0},
   reviews:[{name:'Andi K.',rating:5,date:'5 hari lalu',text:'Bahan tebal, adem.',variant:'Hitam, L'}]},
  {id:4,name:'Jeans Straight High Waist',brand:'DENIMLAB',cat:'bawahan',price:379000,old:449000,
   colors:[{name:'Light Blue',hex:'#b8cbe0'},{name:'Dark Blue',hex:'#3d5573'},{name:'Black',hex:'#3a3330'}],
   sizes:['26','27','28','29','30','31'],emoji:'👖',bg:'#dce6f0',rating:4.6,sold:542,isNew:false,isSale:true,stock:145,
   desc:'Jeans high waist dengan potongan straight leg.',
   variants:{'Light Blue-26':8,'Light Blue-27':12,'Light Blue-28':15,'Light Blue-29':10,'Light Blue-30':8,'Light Blue-31':5,'Dark Blue-26':6,'Dark Blue-27':10,'Dark Blue-28':12,'Dark Blue-29':8,'Dark Blue-30':6,'Dark Blue-31':4,'Black-26':4,'Black-27':8,'Black-28':10,'Black-29':6,'Black-30':5,'Black-31':3},
   reviews:[]},
  {id:5,name:'Blazer Oversized Wool Blend',brand:'AETERNA',cat:'outerwear',price:689000,old:0,
   colors:[{name:'Camel',hex:'#c9a678'},{name:'Black',hex:'#3a3330'},{name:'Grey',hex:'#9a958e'}],
   sizes:['S','M','L'],emoji:'🧥',bg:'#f0e5d0',rating:4.9,sold:178,isNew:true,isSale:false,stock:38,
   desc:'Blazer oversized dengan bahan wool blend premium.',
   variants:{'Camel-S':4,'Camel-M':6,'Camel-L':4,'Black-S':5,'Black-M':7,'Black-L':4,'Grey-S':3,'Grey-M':3,'Grey-L':2},
   reviews:[{name:'Nadia P.',rating:5,date:'4 hari lalu',text:'Kualitas juara.',variant:'Camel, M'}]},
  {id:6,name:'Sneakers Leather Minimalist',brand:'STRIDE',cat:'sepatu',price:749000,old:899000,
   colors:[{name:'White',hex:'#f5f5f5'},{name:'Black',hex:'#3a3330'},{name:'Tan',hex:'#c9a678'}],
   sizes:['39','40','41','42','43','44'],emoji:'👟',bg:'#e8e8e8',rating:4.8,sold:623,isNew:false,isSale:true,stock:98,
   desc:'Sneakers kulit asli dengan desain minimalis.',
   variants:{'White-39':5,'White-40':10,'White-41':12,'White-42':10,'White-43':6,'White-44':3,'Black-39':4,'Black-40':8,'Black-41':10,'Black-42':8,'Black-43':5,'Black-44':3,'Tan-39':2,'Tan-40':4,'Tan-41':5,'Tan-42':3,'Tan-43':0,'Tan-44':0},
   reviews:[{name:'Reza M.',rating:5,date:'2 hari lalu',text:'Kulit asli, nyaman.',variant:'White, 42'}]},
  {id:7,name:'Tote Bag Canvas Large',brand:'CARRYON',cat:'tas',price:219000,old:279000,
   colors:[{name:'Natural',hex:'#e8d5b0'},{name:'Black',hex:'#3a3330'},{name:'Navy',hex:'#3a4a6b'}],
   sizes:['One Size'],emoji:'👜',bg:'#f0e5d0',rating:4.7,sold:891,isNew:false,isSale:true,stock:210,
   desc:'Tote bag kanvas tebal dengan banyak kompartemen.',
   variants:{'Natural-One Size':80,'Black-One Size':65,'Navy-One Size':65},reviews:[]},
  {id:8,name:'Celana Cargo Jogger Pria',brand:'URBANCO',cat:'bawahan',price:279000,old:349000,
   colors:[{name:'Khaki',hex:'#c9b896'},{name:'Black',hex:'#3a3330'},{name:'Army',hex:'#7a8560'}],
   sizes:['28','29','30','31','32','33','34'],emoji:'👖',bg:'#e8ebd8',rating:4.6,sold:445,isNew:false,isSale:true,stock:167,
   desc:'Celana cargo jogger dengan bahan ripstop.',
   variants:{'Khaki-28':6,'Khaki-29':8,'Khaki-30':10,'Khaki-31':8,'Khaki-32':6,'Khaki-33':4,'Khaki-34':2,'Black-28':5,'Black-29':8,'Black-30':12,'Black-31':10,'Black-32':8,'Black-33':5,'Black-34':3,'Army-28':4,'Army-29':6,'Army-30':8,'Army-31':6,'Army-32':5,'Army-33':3,'Army-34':2},reviews:[]},
  {id:9,name:'Kemeja Flanel Kotak',brand:'URBANCO',cat:'atasan',price:249000,old:0,
   colors:[{name:'Red Plaid',hex:'#a87070'},{name:'Blue Plaid',hex:'#7a8fa8'},{name:'Green Plaid',hex:'#7a9a80'}],
   sizes:['S','M','L','XL','XXL'],emoji:'👔',bg:'#f5dcdc',rating:4.5,sold:512,isNew:false,isSale:false,stock:98,
   desc:'Kemeja flanel motif kotak klasik.',
   variants:{'Red Plaid-S':3,'Red Plaid-M':5,'Red Plaid-L':4,'Red Plaid-XL':2,'Red Plaid-XXL':1,'Blue Plaid-S':4,'Blue Plaid-M':6,'Blue Plaid-L':5,'Blue Plaid-XL':3,'Blue Plaid-XXL':2,'Green Plaid-S':5,'Green Plaid-M':8,'Green Plaid-L':6,'Green Plaid-XL':4,'Green Plaid-XXL':2},reviews:[]},
  {id:10,name:'Rok Plisket Midi',brand:'LUNA',cat:'bawahan',price:189000,old:249000,
   colors:[{name:'Black',hex:'#3a3330'},{name:'Beige',hex:'#e8dcc8'},{name:'Rose',hex:'#e8b4b8'}],
   sizes:['S','M','L','XL'],emoji:'👗',bg:'#f5e0e0',rating:4.7,sold:721,isNew:false,isSale:true,stock:132,
   desc:'Rok plisket midi dengan bahan airflow.',
   variants:{'Black-S':12,'Black-M':15,'Black-L':10,'Black-XL':5,'Beige-S':8,'Beige-M':12,'Beige-L':8,'Beige-XL':4,'Rose-S':10,'Rose-M':14,'Rose-L':9,'Rose-XL':5},reviews:[]},
  {id:11,name:'Topi Baseball Premium',brand:'STRIDE',cat:'aksesoris',price:129000,old:169000,
   colors:[{name:'Black',hex:'#3a3330'},{name:'Navy',hex:'#3a4a6b'},{name:'Cream',hex:'#f0e0c8'}],
   sizes:['One Size'],emoji:'🧢',bg:'#e8e8e8',rating:4.6,sold:1120,isNew:false,isSale:true,stock:280,
   desc:'Topi baseball dengan bordir logo timbul.',
   variants:{'Black-One Size':120,'Navy-One Size':90,'Cream-One Size':70},reviews:[]},
  {id:12,name:'Loafers Suede Wanita',brand:'STRIDE',cat:'sepatu',price:429000,old:0,
   colors:[{name:'Tan',hex:'#c9a678'},{name:'Black',hex:'#3a3330'}],
   sizes:['36','37','38','39','40'],emoji:'🥿',bg:'#f0e5d0',rating:4.8,sold:298,isNew:true,isSale:false,stock:67,
   desc:'Loafers suede dengan sol karet.',
   variants:{'Tan-36':3,'Tan-37':5,'Tan-38':6,'Tan-39':4,'Tan-40':2,'Black-36':4,'Black-37':7,'Black-38':8,'Black-39':5,'Black-40':3},reviews:[]}
];

let ORDERS = [
  {id:'SH-2026-1187',customer:'Andi Pratama',total:657000,status:'pending',time:'10 menit lalu',items:2,payment:'Transfer Bank',address:'Jakarta Selatan',items_list:[{name:'Kemeja Linen Premium',variant:'Putih, M',qty:1},{name:'Kaos Oversized',variant:'Hitam, L',qty:1}],trackingStep:1},
  {id:'SH-2026-1186',customer:'Siti Nurhaliza',total:459000,status:'processing',time:'25 menit lalu',items:1,payment:'E-Wallet',address:'Jakarta Pusat',items_list:[{name:'Dress Midi Satin Wrap',variant:'Maroon, S',qty:1}],trackingStep:2},
  {id:'SH-2026-1185',customer:'Budi Hartono',total:1230000,status:'shipped',time:'1 jam lalu',items:3,payment:'Kartu Kredit',address:'Depok',items_list:[{name:'Blazer Oversized',variant:'Camel, M',qty:1},{name:'Kemeja Flanel',variant:'Blue Plaid, L',qty:1},{name:'Topi Baseball',variant:'Black',qty:1}],trackingStep:3,resi:'JNE-9876543210'},
  {id:'SH-2026-1184',customer:'Dewi Lestari',total:389000,status:'completed',time:'3 jam lalu',items:1,payment:'Transfer Bank',address:'Tangerang',items_list:[{name:'Kemeja Linen Premium',variant:'Cream, M',qty:1}],trackingStep:4},
  {id:'SH-2026-1183',customer:'Rizki Aditya',total:1508000,status:'completed',time:'5 jam lalu',items:2,payment:'E-Wallet',address:'Bekasi',items_list:[{name:'Sneakers Leather',variant:'White, 42',qty:1},{name:'Tote Bag Canvas',variant:'Natural',qty:1}],trackingStep:4},
  {id:'SH-2026-1182',customer:'Maya Sari',total:279000,status:'cancelled',time:'8 jam lalu',items:1,payment:'COD',address:'Jakarta Barat',items_list:[{name:'Celana Cargo Jogger',variant:'Khaki, 30',qty:1}],trackingStep:1}
];

let RETURNS = [
  {id:'RT-001',orderId:'SH-2026-1180',customer:'Fitri A.',product:'Jeans Straight High Waist',reason:'Ukuran tidak sesuai',status:'pending',date:'2 hari lalu',amount:379000,note:'Minta tukar size 29'},
  {id:'RT-002',orderId:'SH-2026-1178',customer:'Rina S.',product:'Kaos Oversized Cotton',reason:'Warna berbeda',status:'approved',date:'5 hari lalu',amount:129000,note:'Warna tidak sesuai foto'},
  {id:'RT-003',orderId:'SH-2026-1175',customer:'Adit W.',product:'Sneakers Leather',reason:'Produk cacat',status:'refunded',date:'1 minggu lalu',amount:749000,note:'Sol terlepas'}
];

let STAFF = [
  {id:1,name:'Ahmad Fauzi',email:'ahmad@stylehub.id',role:'Manager',status:'active'},
  {id:2,name:'Rina Wulandari',email:'rina@stylehub.id',role:'Kasir',status:'active'},
  {id:3,name:'Joko Susilo',email:'joko@stylehub.id',role:'Admin Gudang',status:'active'},
  {id:4,name:'Sari Indah',email:'sari@stylehub.id',role:'Customer Service',status:'active'},
  {id:5,name:'Dedi Kurniawan',email:'dedi@stylehub.id',role:'Kurir',status:'active'},
  {id:6,name:'Putri Amelia',email:'putri@stylehub.id',role:'Content Creator',status:'active'}
];

let CUSTOMERS = [
  {id:1,name:'Andi Pratama',email:'andi@email.com',orders:24,spent:12450000,joined:'Jan 2024',tier:'Platinum',city:'Jakarta'},
  {id:2,name:'Siti Nurhaliza',email:'siti@email.com',orders:18,spent:8210000,joined:'Feb 2024',tier:'Gold',city:'Jakarta'},
  {id:3,name:'Budi Hartono',email:'budi@email.com',orders:32,spent:18200000,joined:'Nov 2023',tier:'Platinum',city:'Depok'},
  {id:4,name:'Dewi Lestari',email:'dewi@email.com',orders:12,spent:4650000,joined:'Mar 2024',tier:'Silver',city:'Tangerang'},
  {id:5,name:'Rizki Aditya',email:'rizki@email.com',orders:41,spent:23800000,joined:'Sep 2023',tier:'Platinum',city:'Bekasi'}
];

let VOUCHERS = [
  {code:'WELCOME30',type:'Persen',value:'30%',min:200000,quota:500,used:342,status:'active'},
  {code:'FREESHIP',type:'Ongkir',value:'Rp25.000',min:150000,quota:2000,used:1287,status:'active'},
  {code:'NEWMEMBER',type:'Nominal',value:'Rp50.000',min:300000,quota:1000,used:678,status:'active'},
  {code:'FLASH50',type:'Nominal',value:'Rp50.000',min:400000,quota:100,used:100,status:'expired'}
];

const PAGE_META = {
  dashboard:{title:'Dashboard',sub:'Ringkasan performa toko'},
  orders:{title:'Pesanan',sub:'Kelola semua pesanan masuk'},
  returns:{title:'Retur',sub:'Proses pengajuan pengembalian'},
  products:{title:'Produk',sub:'Katalog produk toko'},
  inventory:{title:'Varian & Stok',sub:'Matriks warna × ukuran'},
  customers:{title:'Pelanggan',sub:'Database pelanggan terdaftar'},
  staff:{title:'Tim',sub:'Anggota tim dan akses'},
  vouchers:{title:'Promo',sub:'Voucher dan kode diskon'},
  reports:{title:'Laporan',sub:'Analitik dan export data'},
  settings:{title:'Pengaturan',sub:'Konfigurasi toko'}
};

/* ==================== STATE ==================== */
let state = {
  mode:'customer',
  cart: JSON.parse(localStorage.getItem('sh5_cart')||'[]'),
  wishlist: JSON.parse(localStorage.getItem('sh5_wish')||'[]'),
  category:'all', sort:'new', search:'', limit:12,
  adminTab:'dashboard', orderFilter:'all',
  currentPDP:null, pdpColor:null, pdpSize:null, editingProduct:null, editingStaff:null
};

/* ==================== UTILS ==================== */
const rupiah = n => 'Rp' + Math.round(n).toLocaleString('id-ID');
function showToast(msg){
  const t=document.getElementById('toast');
  t.textContent=msg; t.classList.add('show');
  clearTimeout(t._t); t._t=setTimeout(()=>t.classList.remove('show'),2200);
}
function save(){
  localStorage.setItem('sh5_cart',JSON.stringify(state.cart));
  localStorage.setItem('sh5_wish',JSON.stringify(state.wishlist));
  updateBadges();
}
function updateBadges(){
  const count = state.cart.reduce((s,i)=>s+i.qty,0);
  const wish = state.wishlist.length;
  ['cartBadge','cartBadge2'].forEach(id=>{
    const el=document.getElementById(id); if(!el) return;
    el.textContent=count; el.style.display=count>0?'flex':'none';
  });
  ['wishBadge','wishBadge2'].forEach(id=>{
    const el=document.getElementById(id); if(!el) return;
    el.textContent=wish; el.style.display=wish>0?'flex':'none';
  });
  document.getElementById('cartCountLabel').textContent=count+' item';
  document.getElementById('wishCountLabel').textContent=wish+' item tersimpan';
  const po=ORDERS.filter(o=>o.status==='pending').length;
  const pr=RETURNS.filter(r=>r.status==='pending').length;
  const ob=document.getElementById('shOrderBadge'); if(ob) ob.textContent=po;
  const rb=document.getElementById('shReturnBadge'); if(rb) rb.textContent=pr;
}

/* ==================== MODE SWITCH ==================== */
function setMode(mode){
  state.mode=mode;
  document.getElementById('customerApp').classList.toggle('hidden',mode!=='customer');
  document.getElementById('adminApp').classList.toggle('hidden',mode!=='admin');
  document.getElementById('bottomNav').classList.toggle('hidden',mode!=='customer');
  document.getElementById('shChatFab').classList.toggle('hidden',mode!=='customer');
  document.getElementById('shChat').classList.remove('open');

  document.getElementById('msCustomer').classList.toggle('active', mode==='customer');
  document.getElementById('msAdmin').classList.toggle('active', mode==='admin');

  ['cartDrawer','wishDrawer','ordersDrawer'].forEach(id=>document.getElementById(id).classList.remove('open'));
  ['cartOverlay','wishOverlay','ordersOverlay'].forEach(id=>document.getElementById(id).classList.remove('open'));

  if(mode==='admin'){ renderAdmin(); initShSidebar(); }
  window.scrollTo(0,0);
  showToast(mode==='admin' ? 'Beralih ke Admin Panel' : 'Beralih ke Toko');
}

function toggleShSidebar(){
  const sb=document.getElementById('shSidebar');
  const ov=document.getElementById('shSidebarOverlay');
  sb.classList.toggle('collapsed');
  if(window.innerWidth<1024){
    if(sb.classList.contains('collapsed')) ov.classList.remove('show');
    else ov.classList.add('show');
  }
}
function initShSidebar(){
  const sb=document.getElementById('shSidebar');
  if(window.innerWidth>=1024) sb.classList.remove('collapsed');
  else sb.classList.add('collapsed');
}
window.addEventListener('resize',initShSidebar);

/* ==================== CUSTOMER ==================== */
function renderNavCategories(){
  document.getElementById('catNav').innerHTML=CATEGORIES.map(c=>`
    <button class="sh-cat ${state.category===c.id?'active':''}" onclick="setCategory('${c.id}')">${c.name}</button>
  `).join('');
}
function setCategory(id){
  state.category=id; state.limit=12;
  renderNavCategories(); renderProducts();
  const cat=CATEGORIES.find(c=>c.id===id);
  const el=document.getElementById('sectionTitle');
  if(el) el.innerHTML = id==='all' ? 'Semua <em>produk</em>' : cat.name;
}
function renderLookbooks(){
  document.getElementById('lookbookScroll').innerHTML=LOOKBOOKS.map(lb=>`
    <div class="sh-lb-item ${lb.cls}" onclick="showToast('Lookbook: ${lb.title}')">
      <span class="sh-lb-emoji">${lb.emoji}</span>
      <div class="sh-lb-info">
        <div class="sh-lb-name">${lb.title}</div>
        <div class="sh-lb-count">${lb.sub}</div>
      </div>
    </div>
  `).join('');
}
function getFiltered(){
  let arr=[...PRODUCTS];
  if(state.category!=='all') arr=arr.filter(p=>p.cat===state.category);
  if(state.search){
    const q=state.search.toLowerCase();
    arr=arr.filter(p=>p.name.toLowerCase().includes(q)||p.brand.toLowerCase().includes(q));
  }
  switch(state.sort){
    case 'cheap': arr.sort((a,b)=>a.price-b.price); break;
    case 'expensive': arr.sort((a,b)=>b.price-a.price); break;
    case 'discount': arr=arr.filter(p=>p.old>0).sort((a,b)=>(b.old-b.price)-(a.old-a.price)); break;
    case 'rating': arr.sort((a,b)=>b.rating-a.rating); break;
    case 'popular': arr.sort((a,b)=>b.sold-a.sold); break;
    default: arr.sort((a,b)=>(b.isNew?1:0)-(a.isNew?1:0)||b.id-a.id);
  }
  return arr;
}
function isWished(id){ return state.wishlist.includes(id); }

function productCard(p){
  const disc=p.old>0?Math.round((p.old-p.price)/p.old*100):0;
  const wished=isWished(p.id);
  const colorDots=p.colors.slice(0,4).map(c=>`<span class="sh-color-dot" style="background:${c.hex}"></span>`).join('');
  const tagHtml = p.isNew
    ? `<span class="sh-card-tag new">Baru</span>`
    : disc ? `<span class="sh-card-tag">-${disc}%</span>` : '';
  return `
    <div class="sh-card" onclick="openPDP(${p.id})">
      <div class="sh-card-img" style="background:${p.bg}">
        ${tagHtml}
        <span>${p.emoji}</span>
        <button class="sh-card-wish ${wished?'active':''}" onclick="event.stopPropagation();toggleWish(${p.id})">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="${wished?'currentColor':'none'}" stroke="currentColor" stroke-width="1.8"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        </button>
      </div>
      <div class="sh-card-body">
        <div class="sh-card-brand">${p.brand}</div>
        <div class="sh-card-name">${p.name}</div>
        <div class="sh-card-colors">${colorDots}${p.colors.length>4?`<span style="font-size:10px;color:var(--ink-muted);margin-left:4px">+${p.colors.length-4}</span>`:''}</div>
        <div class="sh-card-bottom">
          <div class="sh-card-price">
            <span class="sh-card-price-now">${rupiah(p.price)}</span>
            ${p.old?`<span class="sh-card-price-old">${rupiah(p.old)}</span>`:''}
          </div>
          <div class="sh-card-rating"><span class="star">★</span> ${p.rating}</div>
        </div>
      </div>
    </div>`;
}
function renderProducts(){
  const arr=getFiltered().slice(0,state.limit);
  const grid=document.getElementById('productGrid');
  if(!arr.length){
    grid.innerHTML=`<div class="sh-empty" style="grid-column:1/-1"><div class="sh-empty-icon">⌕</div><div class="sh-empty-title">Tidak ada produk</div><div class="sh-empty-desc">Coba kata kunci lain</div></div>`;
    return;
  }
  grid.innerHTML=arr.map(productCard).join('');
}
function loadMore(){ state.limit=PRODUCTS.length; renderProducts(); showToast('Semua produk ditampilkan'); }

/* PDP */
function openPDP(id){
  const p=PRODUCTS.find(x=>x.id===id); if(!p) return;
  state.currentPDP=id;
  state.pdpColor=p.colors[0].name;
  const availSize=p.sizes.find(s=>p.variants[p.colors[0].name+'-'+s]>0)||p.sizes[0];
  state.pdpSize=availSize;
  renderPDP();
  const m=document.getElementById('pdpModal');
  m.classList.add('open'); m.style.display='block';
  document.body.style.overflow='hidden';
  m.scrollTop=0;
}
function closePDP(){
  const m=document.getElementById('pdpModal');
  m.classList.remove('open');
  document.body.style.overflow='';
  setTimeout(()=>{ if(!m.classList.contains('open')) m.style.display='none'; },320);
}
function renderPDP(){
  const p=PRODUCTS.find(x=>x.id===state.currentPDP); if(!p) return;
  const disc=p.old>0?Math.round((p.old-p.price)/p.old*100):0;
  const curStock=p.variants[state.pdpColor+'-'+state.pdpSize]||0;
  const totalRev=p.reviews.length;
  document.getElementById('pdpModal').innerHTML=`
    <div class="sh-pdp-top">
      <div class="sh-pdp-top-title">Product / ${p.brand}</div>
      <button class="sh-drawer-close" onclick="closePDP()">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div class="sh-pdp-hero" style="background:${p.bg}">
      <span>${p.emoji}</span>
      ${p.isNew?`<span class="sh-pdp-hero-tag">Koleksi Baru</span>`:disc?`<span class="sh-pdp-hero-tag">-${disc}%</span>`:''}
    </div>
    <div class="sh-pdp-content">
      <div class="sh-pdp-brand">${p.brand}</div>
      <h1 class="sh-pdp-name">${p.name}</h1>
      <div class="sh-pdp-price">
        <span class="sh-pdp-price-now">${rupiah(p.price)}</span>
        ${p.old?`<span class="sh-pdp-price-old">${rupiah(p.old)}</span><span class="sh-pdp-discount">Hemat ${disc}%</span>`:''}
      </div>
      <div class="sh-pdp-meta">
        <div class="sh-pdp-meta-item"><div class="sh-pdp-meta-label">Rating</div><div class="sh-pdp-meta-value">${p.rating}</div></div>
        <div class="sh-pdp-meta-item"><div class="sh-pdp-meta-label">Terjual</div><div class="sh-pdp-meta-value">${p.sold}</div></div>
        <div class="sh-pdp-meta-item"><div class="sh-pdp-meta-label">Stok</div><div class="sh-pdp-meta-value">${curStock}</div></div>
      </div>
      <div class="sh-pdp-opt">
        <div class="sh-pdp-opt-head">
          <span class="sh-pdp-opt-label">Warna</span>
          <span class="sh-pdp-opt-value">${state.pdpColor}</span>
        </div>
        <div class="sh-color-chips">
          ${p.colors.map(c=>`<button class="sh-color-chip ${state.pdpColor===c.name?'active':''}" style="background:${c.hex}" onclick="selectPDPColor('${c.name}')"></button>`).join('')}
        </div>
      </div>
      <div class="sh-pdp-opt">
        <div class="sh-pdp-opt-head">
          <span class="sh-pdp-opt-label">Ukuran</span>
          <span class="sh-pdp-opt-value">${state.pdpSize}</span>
        </div>
        <div class="sh-size-chips">
          ${p.sizes.map(s=>{
            const stock=p.variants[state.pdpColor+'-'+s]||0;
            return `<button class="sh-size-chip ${state.pdpSize===s?'active':''} ${stock<=0?'disabled':''}" onclick="selectPDPSize('${s}',${stock})">${s}</button>`;
          }).join('')}
        </div>
      </div>
      <div class="sh-pdp-opt">
        <div class="sh-pdp-opt-label" style="margin-bottom:10px">Deskripsi</div>
        <p class="sh-pdp-desc">${p.desc}</p>
      </div>
      ${totalRev?`
        <div class="sh-pdp-opt">
          <div class="sh-pdp-opt-label" style="margin-bottom:12px">Ulasan (${totalRev})</div>
          ${p.reviews.map(rv=>`
            <div style="padding:14px 0;border-bottom:1px solid var(--line)">
              <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px">
                <div style="width:38px;height:38px;background:var(--rose-soft);color:var(--rose-deep);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:13px">${rv.name.slice(0,2)}</div>
                <div style="flex:1">
                  <div style="font-size:12px;font-weight:700">${rv.name}</div>
                  <div style="font-size:10px;color:var(--ink-muted)">${rv.date}</div>
                </div>
              </div>
              <div style="color:var(--warning);font-size:13px;letter-spacing:1px;margin-bottom:6px">${'★'.repeat(rv.rating)}${'☆'.repeat(5-rv.rating)}</div>
              <p style="font-size:12px;color:var(--ink-soft);line-height:1.65">${rv.text}</p>
              <div style="font-size:10px;color:var(--ink-muted);margin-top:6px;font-style:italic">${rv.variant}</div>
            </div>`).join('')}
        </div>
      `:''}
    </div>
    <div class="sh-pdp-cta">
      <button class="sh-pdp-wish" onclick="toggleWish(${p.id});renderPDP()">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="${isWished(p.id)?'var(--rose-deep)':'none'}" stroke="${isWished(p.id)?'var(--rose-deep)':'var(--ink)'}" stroke-width="1.8"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
      </button>
      <button class="sh-btn-primary" onclick="addPDPToCart()" ${curStock<=0?'disabled':''}>
        ${curStock<=0?'Stok Habis':'Tambah ke Keranjang'}
      </button>
    </div>
  `;
}
function selectPDPColor(name){
  state.pdpColor=name;
  const p=PRODUCTS.find(x=>x.id===state.currentPDP);
  const curStock=p.variants[name+'-'+state.pdpSize]||0;
  if(curStock<=0){
    const avail=p.sizes.find(s=>p.variants[name+'-'+s]>0);
    if(avail) state.pdpSize=avail;
  }
  renderPDP();
}
function selectPDPSize(size,stock){
  if(stock<=0){ showToast('Ukuran habis'); return; }
  state.pdpSize=size; renderPDP();
}
function addPDPToCart(){
  const p=PRODUCTS.find(x=>x.id===state.currentPDP);
  const key=state.pdpColor+'-'+state.pdpSize;
  const stock=p.variants[key]||0;
  if(stock<=0){ showToast('Varian habis'); return; }
  const existing=state.cart.find(i=>i.id===p.id&&i.color===state.pdpColor&&i.size===state.pdpSize);
  if(existing){
    if(existing.qty>=stock){ showToast('Stok tidak cukup'); return; }
    existing.qty++;
  } else {
    state.cart.push({id:p.id,color:state.pdpColor,size:state.pdpSize,qty:1});
  }
  save(); closePDP(); toggleCart();
  showToast('Ditambahkan ke keranjang');
}

/* CART */
function toggleCart(){
  const d=document.getElementById('cartDrawer'), o=document.getElementById('cartOverlay');
  if(d.classList.contains('open')){d.classList.remove('open');o.classList.remove('open');}
  else{ renderCart(); d.classList.add('open'); o.classList.add('open'); }
}
function renderCart(){
  const body=document.getElementById('cartBody'), foot=document.getElementById('cartFoot');
  if(!state.cart.length){
    body.innerHTML=`<div class="sh-empty"><div class="sh-empty-icon">🛍</div><div class="sh-empty-title">Keranjang masih kosong</div><div class="sh-empty-desc">Mulai jelajahi koleksi kami</div></div>`;
    foot.style.display='none'; return;
  }
  foot.style.display='block';
  let sub=0;
  body.innerHTML=state.cart.map((it,i)=>{
    const p=PRODUCTS.find(x=>x.id===it.id); if(!p) return '';
    sub+=p.price*it.qty;
    return `<div class="sh-cart-row">
      <div class="sh-cart-img" style="background:${p.bg}">${p.emoji}</div>
      <div class="sh-cart-info">
        <div class="sh-cart-brand">${p.brand}</div>
        <div class="sh-cart-name">${p.name}</div>
        <div class="sh-cart-var">${it.color} · ${it.size}</div>
        <div class="sh-cart-price">${rupiah(p.price*it.qty)}</div>
      </div>
      <div class="sh-cart-actions">
        <button class="sh-cart-remove" onclick="removeCartItem(${i})">Hapus</button>
        <div class="sh-qty">
          <button onclick="updateCartQty(${i},-1)">−</button>
          <span>${it.qty}</span>
          <button onclick="updateCartQty(${i},1)">+</button>
        </div>
      </div>
    </div>`;
  }).join('');
  const ongkir=sub>=300000?0:25000;
  const diskon=sub>=500000?50000:0;
  const total=sub+ongkir-diskon;
  document.getElementById('subtotal').textContent=rupiah(sub);
  document.getElementById('ongkir').textContent=ongkir===0?'GRATIS':rupiah(ongkir);
  document.getElementById('diskon').textContent='-'+rupiah(diskon);
  document.getElementById('total').textContent=rupiah(total);
}
function updateCartQty(idx,delta){
  const it=state.cart[idx]; if(!it) return;
  const p=PRODUCTS.find(x=>x.id===it.id);
  const stock=p.variants[it.color+'-'+it.size]||0;
  it.qty+=delta;
  if(it.qty<=0) state.cart.splice(idx,1);
  else if(it.qty>stock){ it.qty=stock; showToast('Stok maksimal '+stock); }
  save(); renderCart();
}
function removeCartItem(idx){ state.cart.splice(idx,1); save(); renderCart(); showToast('Item dihapus'); }
function openCheckout(){
  if(!state.cart.length) return;
  const orderId='SH-2026-'+Math.floor(1000+Math.random()*9000);
  const total=state.cart.reduce((s,i)=>s+PRODUCTS.find(p=>p.id===i.id).price*i.qty,0);
  const itemsList=state.cart.map(i=>{
    const p=PRODUCTS.find(x=>x.id===i.id);
    return {name:p.name,variant:`${i.color}, ${i.size}`,qty:i.qty};
  });
  ORDERS.unshift({id:orderId,customer:'Anda',total:total+25000,status:'pending',time:'Baru saja',items:state.cart.length,payment:'Transfer Bank',address:'Jakarta Selatan',items_list:itemsList,trackingStep:0});
  document.getElementById('orderIdDisplay').textContent=orderId;
  state.cart=[]; save(); renderCart(); toggleCart();
  document.getElementById('checkoutModal').classList.add('open');
}
function closeCheckout(){ document.getElementById('checkoutModal').classList.remove('open'); }

/* WISHLIST */
function toggleWish(id){
  if(state.wishlist.includes(id)) state.wishlist=state.wishlist.filter(x=>x!==id);
  else state.wishlist.push(id);
  save(); renderProducts(); renderWishlist();
  if(document.getElementById('pdpModal').classList.contains('open')) renderPDP();
}
function toggleWishlist(){
  const d=document.getElementById('wishDrawer'), o=document.getElementById('wishOverlay');
  if(d.classList.contains('open')){d.classList.remove('open');o.classList.remove('open');}
  else{ renderWishlist(); d.classList.add('open'); o.classList.add('open'); }
}
function renderWishlist(){
  const body=document.getElementById('wishBody');
  if(!state.wishlist.length){
    body.innerHTML=`<div class="sh-empty"><div class="sh-empty-icon">♡</div><div class="sh-empty-title">Belum ada favorit</div><div class="sh-empty-desc">Tap ikon hati untuk menyimpan</div></div>`;
    return;
  }
  body.innerHTML=state.wishlist.map(id=>{
    const p=PRODUCTS.find(x=>x.id===id); if(!p) return '';
    return `<div class="sh-cart-row">
      <div class="sh-cart-img" style="background:${p.bg}">${p.emoji}</div>
      <div class="sh-cart-info">
        <div class="sh-cart-brand">${p.brand}</div>
        <div class="sh-cart-name">${p.name}</div>
        <div class="sh-cart-price">${rupiah(p.price)}</div>
      </div>
      <div class="sh-cart-actions">
        <button class="sh-cart-remove" onclick="toggleWish(${p.id})">Hapus</button>
        <button class="sh-btn-sm primary" onclick="openPDP(${p.id});toggleWishlist()">Lihat</button>
      </div>
    </div>`;
  }).join('');
}

/* ORDERS */
function toggleOrders(){
  const d=document.getElementById('ordersDrawer'), o=document.getElementById('ordersOverlay');
  if(d.classList.contains('open')){d.classList.remove('open');o.classList.remove('open');}
  else{ renderOrders(); d.classList.add('open'); o.classList.add('open'); }
}
function renderOrders(){
  const body=document.getElementById('ordersBody');
  body.innerHTML=ORDERS.slice(0,5).map(o=>{
    const map={pending:['warning','Menunggu'],processing:['info','Diproses'],shipped:['info','Dikirim'],completed:['success','Selesai'],cancelled:['danger','Batal']};
    const [color,label]=map[o.status]||['neutral',o.status];
    return `<div class="sh-order-card">
      <div class="sh-order-head">
        <div>
          <div class="sh-order-id">${o.id}</div>
          <div class="sh-order-meta">${o.time}</div>
        </div>
        <span class="sh-badge ${color}"><span class="sh-badge-dot"></span>${label}</span>
      </div>
      <div class="sh-order-items">
        ${o.items_list.map(it=>`${it.name} · <b>${it.variant}</b> × ${it.qty}`).join('<br>')}
      </div>
      <div style="display:flex;justify-content:space-between;align-items:center;margin-top:10px">
        <div style="font-family:Georgia,serif;font-size:18px">${rupiah(o.total)}</div>
        <button class="sh-btn-sm primary" onclick="viewTracking('${o.id}')">Lacak</button>
      </div>
    </div>`;
  }).join('') || `<div class="sh-empty"><div class="sh-empty-icon">□</div><div class="sh-empty-title">Belum ada pesanan</div></div>`;
}
function viewTracking(orderId){
  const o=ORDERS.find(x=>x.id===orderId); if(!o) return;
  const steps=['Order dibuat','Pembayaran dikonfirmasi','Diproses gudang','Dikirim','Selesai'];
  const modal=document.createElement('div');
  modal.className='sh-modal open';
  modal.innerHTML=`
    <div class="sh-modal-box">
      <div class="sh-modal-title">Lacak Pesanan</div>
      <div class="sh-modal-sub">${o.id}</div>
      ${steps.map((s,i)=>{
        const done=i<o.trackingStep;
        const active=i===o.trackingStep;
        const color=done?'var(--sage-deep)':active?'var(--rose-deep)':'var(--line-strong)';
        return `<div style="display:flex;gap:14px;padding:12px 0;border-bottom:1px solid var(--line)">
          <div style="width:22px;height:22px;border-radius:50%;border:2px solid ${color};background:${done||active?color:'transparent'};flex-shrink:0"></div>
          <div style="flex:1">
            <div style="font-weight:${active?'700':'600'};font-size:13px">${s}</div>
            <div style="font-size:10px;color:var(--ink-muted);margin-top:2px">${done?'Selesai':active?'Berlangsung':'Menunggu'}</div>
          </div>
        </div>`;
      }).join('')}
      ${o.resi?`<div class="sh-alert info" style="margin-top:14px">Resi: <b>${o.resi}</b></div>`:''}
      <button class="sh-btn-primary" style="margin-top:16px" onclick="this.closest('.sh-modal').remove()">Tutup</button>
    </div>`;
  modal.onclick=e=>{if(e.target===modal) modal.remove();};
  document.body.appendChild(modal);
}

/* SEARCH */
function openSearch(){ document.getElementById('shSearchOverlay').classList.add('open'); setTimeout(()=>document.getElementById('shSearchInput').focus(),280); }
function closeSearch(){
  document.getElementById('shSearchOverlay').classList.remove('open');
  document.getElementById('shSearchInput').value='';
  document.getElementById('shSearchResults').innerHTML='';
  state.search=''; renderProducts();
}
function handleSearch(q){
  state.search=q;
  const res=document.getElementById('shSearchResults');
  if(!q.trim()){ res.innerHTML=''; return; }
  const found=getFiltered().slice(0,8);
  if(!found.length){ res.innerHTML=`<div class="sh-empty"><div class="sh-empty-desc">Tidak ada hasil untuk "${q}"</div></div>`; return; }
  res.innerHTML=found.map(p=>`
    <div class="sh-search-result" onclick="openPDP(${p.id});closeSearch()">
      <div class="sh-search-result-img" style="background:${p.bg}">${p.emoji}</div>
      <div style="flex:1;min-width:0">
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;color:var(--ink-muted);text-transform:uppercase">${p.brand}</div>
        <div style="font-family:Georgia,serif;font-size:14px;margin-top:2px">${p.name}</div>
      </div>
      <div style="font-size:13px;font-weight:700">${rupiah(p.price)}</div>
    </div>`).join('');
}
function quickSearch(q){ document.getElementById('shSearchInput').value=q; handleSearch(q); }

/* CHAT */
let chatHistory=[
  {from:'bot',text:'Halo! Saya Sarah dari StyleHub. Ada yang bisa saya bantu hari ini?',time:'10:24'},
  {from:'bot',text:'Bisa tanya soal ukuran, stok, pengiriman, atau retur.',time:'10:24'}
];
function toggleChat(){
  document.getElementById('shChat').classList.toggle('open');
  document.getElementById('shChatFab').classList.toggle('hidden');
  if(document.getElementById('shChat').classList.contains('open')) renderChat();
}
function renderChat(){
  const body=document.getElementById('shChatBody');
  body.innerHTML=chatHistory.map(m=>`
    <div class="sh-chat-msg ${m.from}">${m.text}<div class="sh-chat-time">${m.time}</div></div>`).join('');
  body.scrollTop=body.scrollHeight;
}
function sendChat(){
  const input=document.getElementById('shChatInput');
  const text=input.value.trim(); if(!text) return;
  const time=new Date().toTimeString().slice(0,5);
  chatHistory.push({from:'user',text,time});
  input.value=''; renderChat();
  setTimeout(()=>{
    const r=['Baik, saya cek dulu ya.','Stok masih tersedia.','Untuk ukuran, ambil satu size di bawah kalau ingin lebih fitted.','Pengiriman Jabodetabek 2-3 hari kerja.','Retur gratis 30 hari.','Terima kasih! Ada lagi yang bisa dibantu?'];
    chatHistory.push({from:'bot',text:r[Math.floor(Math.random()*r.length)],time});
    renderChat();
  },900);
}

/* ==================== ADMIN ==================== */
function renderAdmin(){ renderAdminTabs(); renderAdminContent(); updateBadges(); }
function renderAdminTabs(){
  document.querySelectorAll('.sh-sb-item').forEach(t=>t.classList.toggle('active',t.dataset.tab===state.adminTab));
  const meta=PAGE_META[state.adminTab]||PAGE_META.dashboard;
  document.getElementById('shPageTitle').textContent=meta.title;
  document.getElementById('shPageSub').textContent=meta.sub;
  document.getElementById('shBreadcrumb').innerHTML=`
    <span class="crumb" style="cursor:pointer" onclick="switchAdminTab('dashboard')">Backoffice</span>
    <span class="sep">/</span>
    <span class="crumb active">${meta.title}</span>
  `;
}
function switchAdminTab(tab){
  state.adminTab=tab; renderAdminTabs(); renderAdminContent();
  if(window.innerWidth<1024){
    document.getElementById('shSidebar').classList.add('collapsed');
    document.getElementById('shSidebarOverlay').classList.remove('show');
  }
  window.scrollTo(0,0);
}
function renderAdminContent(){
  const c=document.getElementById('shContent');
  switch(state.adminTab){
    case 'dashboard': c.innerHTML=adminDashboard(); break;
    case 'orders': c.innerHTML=adminOrders(); break;
    case 'products': c.innerHTML=adminProducts(); break;
    case 'inventory': c.innerHTML=adminInventory(); break;
    case 'returns': c.innerHTML=adminReturns(); break;
    case 'customers': c.innerHTML=adminCustomers(); break;
    case 'staff': c.innerHTML=adminStaff(); break;
    case 'vouchers': c.innerHTML=adminVouchers(); break;
    case 'reports': c.innerHTML=adminReports(); break;
    case 'settings': c.innerHTML=adminSettings(); break;
  }
}
function statusBadge(s){
  const map={pending:'warning',processing:'info',shipped:'info',completed:'success',cancelled:'danger'};
  return map[s]||'neutral';
}
function statusLabel(s){ return {pending:'Menunggu',processing:'Diproses',shipped:'Dikirim',completed:'Selesai',cancelled:'Batal'}[s]||s; }

function adminDashboard(){
  const hours=['08','10','12','14','16','18','20','22'];
  const data=[210,480,890,1240,1580,2240,2880,1740];
  const max=Math.max(...data);
  const topProducts=PRODUCTS.slice().sort((a,b)=>b.sold-a.sold).slice(0,5);
  const pendingOrders=ORDERS.filter(o=>o.status==='pending').length;
  const pendingReturns=RETURNS.filter(r=>r.status==='pending').length;
  const lowStock=PRODUCTS.filter(p=>p.stock<=30).length;

  return `
    <div style="margin-bottom:22px">
      <div style="font-size:13px;font-weight:700;color:var(--ink-soft);margin-bottom:14px">Menu Utama</div>
      <div class="admin-menu-grid">
        <button class="admin-menu-tile" onclick="switchAdminTab('orders')">
          <div class="tile-icon">◇</div>
          <div class="tile-title">Pesanan</div>
          <div class="tile-sub">Kelola order</div>
          ${pendingOrders?`<span class="tile-badge">${pendingOrders}</span>`:''}
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('products')">
          <div class="tile-icon">□</div>
          <div class="tile-title">Produk</div>
          <div class="tile-sub">${PRODUCTS.length} SKU</div>
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('returns')">
          <div class="tile-icon">↺</div>
          <div class="tile-title">Retur</div>
          <div class="tile-sub">${RETURNS.length} total</div>
          ${pendingReturns?`<span class="tile-badge">${pendingReturns}</span>`:''}
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('inventory')">
          <div class="tile-icon">▤</div>
          <div class="tile-title">Varian & Stok</div>
          <div class="tile-sub">${lowStock} kritis</div>
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('customers')">
          <div class="tile-icon">◐</div>
          <div class="tile-title">Pelanggan</div>
          <div class="tile-sub">${CUSTOMERS.length} user</div>
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('staff')">
          <div class="tile-icon">◑</div>
          <div class="tile-title">Tim</div>
          <div class="tile-sub">${STAFF.length} anggota</div>
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('vouchers')">
          <div class="tile-icon">◇</div>
          <div class="tile-title">Promo</div>
          <div class="tile-sub">${VOUCHERS.length} voucher</div>
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('reports')">
          <div class="tile-icon">◈</div>
          <div class="tile-title">Laporan</div>
          <div class="tile-sub">Analitik</div>
        </button>
      </div>
    </div>

    <div class="sh-kpi-grid">
      <div class="sh-kpi rose">
        <div class="sh-kpi-label">GMV Hari Ini</div>
        <div class="sh-kpi-value">${rupiah(18540000+Math.floor(Math.random()*1000000))}</div>
        <div class="sh-kpi-trend up">↑ 22% vs kemarin</div>
      </div>
      <div class="sh-kpi sage">
        <div class="sh-kpi-label">Pesanan Baru</div>
        <div class="sh-kpi-value">${pendingOrders}</div>
        <div class="sh-kpi-trend up">↑ 5 hari ini</div>
      </div>
      <div class="sh-kpi cream">
        <div class="sh-kpi-label">SKU Aktif</div>
        <div class="sh-kpi-value">${PRODUCTS.length}</div>
        <div class="sh-kpi-trend up">Semua live</div>
      </div>
      <div class="sh-kpi warm">
        <div class="sh-kpi-label">Retur Pending</div>
        <div class="sh-kpi-value">${pendingReturns}</div>
        <div class="sh-kpi-trend down">Perlu review</div>
      </div>
    </div>

    <div class="sh-card-panel">
      <div class="sh-card-head">
        <div>
          <div class="sh-card-title">Penjualan per 2 Jam</div>
          <div class="sh-card-sub">Data hari ini, realtime</div>
        </div>
        <span class="sh-badge success"><span class="sh-badge-dot"></span>Live</span>
      </div>
      <div class="sh-card-body">
        <div class="sh-chart">
          ${data.map((v,i)=>`<div class="sh-chart-bar ${v===max?'active':''}" style="height:${v/max*100}%"><b>${Math.round(v/100)/10}jt</b><span>${hours[i]}</span></div>`).join('')}
        </div>
        <div style="margin-top:26px"></div>
      </div>
    </div>

    <div class="sh-card-panel">
      <div class="sh-card-head">
        <div><div class="sh-card-title">Pesanan Terbaru</div></div>
        <button class="sh-btn-sm outline" onclick="switchAdminTab('orders')">Lihat semua</button>
      </div>
      <div class="sh-card-body-flush">
        ${ORDERS.slice(0,4).map(o=>`
          <div class="sh-list-item" style="padding:16px 20px">
            <div class="sh-list-avatar">${o.customer.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="sh-list-info">
              <div class="sh-list-name">${o.customer}</div>
              <div class="sh-list-sub">${o.id} · ${o.time} · <b>${rupiah(o.total)}</b></div>
            </div>
            <span class="sh-badge ${statusBadge(o.status)}"><span class="sh-badge-dot"></span>${statusLabel(o.status)}</span>
          </div>`).join('')}
      </div>
    </div>

    <div class="sh-card-panel">
      <div class="sh-card-head"><div><div class="sh-card-title">Produk Terlaris</div></div></div>
      <div class="sh-card-body-flush">
        ${topProducts.map((p,i)=>`
          <div class="sh-list-item" style="padding:14px 20px">
            <div class="sh-list-avatar" style="background:var(--sage-soft);color:var(--sage-deep)">${i+1}</div>
            <div class="sh-list-info">
              <div class="sh-list-name">${p.emoji} ${p.name.slice(0,32)}</div>
              <div class="sh-list-sub">${p.brand} · ${p.sold} terjual</div>
            </div>
          </div>`).join('')}
      </div>
    </div>

    <div class="sh-card-panel">
      <div class="sh-card-head"><div><div class="sh-card-title">Stok Kritis</div></div></div>
      <div class="sh-card-body-flush">
        ${PRODUCTS.filter(p=>p.stock<=30).slice(0,4).map(p=>`
          <div class="sh-list-item" style="padding:14px 20px">
            <div class="sh-list-avatar" style="background:var(--rose-soft);color:var(--rose-deep)">!</div>
            <div class="sh-list-info">
              <div class="sh-list-name">${p.name.slice(0,30)}</div>
              <div class="sh-list-sub">${p.brand} · Sisa ${p.stock}</div>
            </div>
            <button class="sh-btn-sm primary" onclick="restockProduct(${p.id})">+50</button>
          </div>`).join('') || '<div style="padding:24px;text-align:center;color:var(--ink-muted);font-size:12px">Semua stok aman</div>'}
      </div>
    </div>
  `;
}
function restockProduct(id){
  const p=PRODUCTS.find(x=>x.id===id);
  p.stock+=50; Object.keys(p.variants).forEach(k=>p.variants[k]+=2);
  renderAdminContent(); showToast('Restock +50');
}

function adminOrders(){
  const list=state.orderFilter==='all'?ORDERS:ORDERS.filter(o=>o.status===state.orderFilter);
  return `
    <button class="sh-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="sh-filter-chips">
      ${['all','pending','processing','shipped','completed','cancelled'].map(f=>`
        <button class="sh-chip ${state.orderFilter===f?'active':''}" onclick="state.orderFilter='${f}';renderAdminContent()">${f==='all'?'Semua':statusLabel(f)}</button>`).join('')}
    </div>
    ${list.map(o=>`
      <div class="sh-order-card">
        <div class="sh-order-head">
          <div>
            <div class="sh-order-id">${o.id}</div>
            <div class="sh-order-meta">${o.time} · ${o.payment}</div>
          </div>
          <span class="sh-badge ${statusBadge(o.status)}"><span class="sh-badge-dot"></span>${statusLabel(o.status)}</span>
        </div>
        <div class="sh-order-body"><b>${o.customer}</b> · ${o.address}</div>
        <div class="sh-order-items">${o.items_list.map(it=>`${it.name} · <b>${it.variant}</b> × ${it.qty}`).join('<br>')}</div>
        <div style="font-family:Georgia,serif;font-size:20px">${rupiah(o.total)}</div>
        <div class="sh-order-actions">
          ${o.status==='pending'?`<button class="sh-btn-sm primary" onclick="updateOrder('${o.id}','processing')">Proses</button>`:''}
          ${o.status==='processing'?`<button class="sh-btn-sm primary" onclick="updateOrder('${o.id}','shipped')">Kirim</button>`:''}
          ${o.status==='shipped'?`<button class="sh-btn-sm primary" onclick="updateOrder('${o.id}','completed')">Selesaikan</button>`:''}
          ${o.status!=='completed'&&o.status!=='cancelled'?`<button class="sh-btn-sm danger" onclick="updateOrder('${o.id}','cancelled')">Batalkan</button>`:''}
        </div>
      </div>`).join('') || '<div class="sh-empty"><div class="sh-empty-icon">□</div><div class="sh-empty-title">Tidak ada pesanan</div></div>'}
  `;
}
function updateOrder(id,status){
  const o=ORDERS.find(x=>x.id===id); if(!o) return;
  o.status=status;
  o.trackingStep={pending:0,processing:2,shipped:3,completed:4,cancelled:1}[status]||0;
  renderAdminContent(); updateBadges();
  showToast(o.id+' → '+statusLabel(status));
}

function adminProducts(){
  return `
    <button class="sh-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:18px;gap:12px;flex-wrap:wrap">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:500">${PRODUCTS.length} SKU total</div>
      <button class="sh-btn-sm rose" onclick="openProductModal(null)">+ Produk Baru</button>
    </div>
    <div class="sh-card-panel">
      <div class="sh-tbl-wrap">
        <table class="sh-tbl">
          <thead><tr><th>Produk</th><th>Brand</th><th>Harga</th><th>Stok</th><th>Varian</th><th>Terjual</th><th></th></tr></thead>
          <tbody>
            ${PRODUCTS.map(p=>`
              <tr>
                <td><div style="display:flex;align-items:center;gap:12px"><span style="font-size:22px">${p.emoji}</span><div style="font-weight:600;font-size:12px">${p.name.slice(0,32)}${p.name.length>32?'…':''}</div></div></td>
                <td style="font-weight:600;font-size:11px;letter-spacing:.05em">${p.brand}</td>
                <td style="font-weight:600">${rupiah(p.price)}</td>
                <td><span class="sh-badge ${p.stock<=30?'danger':p.stock<=80?'warning':'success'}">${p.stock}</span></td>
                <td style="font-size:11px;color:var(--ink-muted)">${p.colors.length}w · ${p.sizes.length}s</td>
                <td style="font-weight:600">${p.sold}</td>
                <td style="white-space:nowrap">
                  <button class="sh-btn-sm outline" onclick="openProductModal(${p.id})">Edit</button>
                  <button class="sh-btn-sm danger" onclick="deleteProduct(${p.id})" style="margin-left:4px">Hapus</button>
                </td>
              </tr>`).join('')}
          </tbody>
        </table>
      </div>
    </div>`;
}
function deleteProduct(id){
  const p=PRODUCTS.find(x=>x.id===id);
  if(!confirm('Hapus "'+p.name+'"?')) return;
  PRODUCTS=PRODUCTS.filter(x=>x.id!==id);
  renderAdminContent(); renderProducts(); showToast('Produk dihapus');
}

function adminInventory(){
  const totalValue=PRODUCTS.reduce((s,p)=>s+p.price*p.stock,0);
  const totalStock=PRODUCTS.reduce((s,p)=>s+p.stock,0);
  return `
    <button class="sh-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="sh-kpi-grid" style="grid-template-columns:repeat(2,1fr)">
      <div class="sh-kpi cream"><div class="sh-kpi-label">Nilai Inventory</div><div class="sh-kpi-value" style="font-size:18px">${rupiah(totalValue)}</div></div>
      <div class="sh-kpi sage"><div class="sh-kpi-label">Total Stok</div><div class="sh-kpi-value">${totalStock}</div></div>
    </div>
    ${PRODUCTS.map(p=>{
      const pVar=Object.entries(p.variants);
      const low=pVar.filter(([k,v])=>v<=2);
      return `
      <div class="sh-card-panel">
        <div class="sh-card-head">
          <div>
            <div class="sh-card-title">${p.emoji} ${p.name.slice(0,36)}</div>
            <div class="sh-card-sub">${p.brand} · ${pVar.length} varian</div>
          </div>
          <span class="sh-badge ${low.length>0?'danger':'success'}">${low.length>0?low.length+' kritis':'Aman'}</span>
        </div>
        <div class="sh-card-body-flush">
          ${pVar.map(([k,v])=>`
            <div class="sh-variant-row">
              <span>${k.split('-')[0]}</span>
              <span>${k.split('-')[1]}</span>
              <input class="sh-variant-input" type="number" value="${v}" onchange="updateVariant(${p.id},'${k}',this.value)">
              <span class="sh-badge ${v<=2?'danger':v<=5?'warning':'success'}">${v<=2?'Kritis':v<=5?'Rendah':'OK'}</span>
            </div>`).join('')}
        </div>
      </div>`;
    }).join('')}`;
}
function updateVariant(pid,key,val){
  const p=PRODUCTS.find(x=>x.id===pid);
  p.variants[key]=+val;
  p.stock=Object.values(p.variants).reduce((s,v)=>s+v,0);
  renderAdminContent(); showToast('Stok diperbarui');
}

function adminReturns(){
  return `
    <button class="sh-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="margin-bottom:16px">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:500">${RETURNS.length} pengajuan</div>
    </div>
    ${RETURNS.map(r=>`
      <div class="sh-card-panel">
        <div class="sh-card-head">
          <div>
            <div class="sh-card-title">${r.id}</div>
            <div class="sh-card-sub">${r.orderId} · ${r.customer} · ${r.date}</div>
          </div>
          <span class="sh-badge ${r.status==='pending'?'warning':r.status==='approved'?'info':r.status==='refunded'?'success':'danger'}">${r.status}</span>
        </div>
        <div class="sh-card-body">
          <div style="font-size:12px;line-height:1.9;color:var(--ink-soft)">
            Produk: <b>${r.product}</b><br>
            Alasan: ${r.reason}<br>
            Catatan: ${r.note}<br>
            Nominal: <b>${rupiah(r.amount)}</b>
          </div>
          ${r.status==='pending'?`<div class="sh-order-actions"><button class="sh-btn-sm primary" onclick="updateReturn('${r.id}','approved')">Setujui</button><button class="sh-btn-sm danger" onclick="updateReturn('${r.id}','rejected')">Tolak</button></div>`:''}
          ${r.status==='approved'?`<div class="sh-order-actions"><button class="sh-btn-sm rose" onclick="updateReturn('${r.id}','refunded')">Proses Refund</button></div>`:''}
        </div>
      </div>`).join('')}`;
}
function updateReturn(id,status){
  const r=RETURNS.find(x=>x.id===id); if(!r) return;
  r.status=status; renderAdminContent(); updateBadges();
  showToast(id+' → '+status);
}

function adminCustomers(){
  return `
    <button class="sh-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="sh-card-panel">
      <div class="sh-card-head"><div><div class="sh-card-title">Pelanggan Terdaftar</div><div class="sh-card-sub">${CUSTOMERS.length} pelanggan</div></div></div>
      <div class="sh-card-body-flush">
        ${CUSTOMERS.map(c=>`
          <div class="sh-list-item" style="padding:16px 20px">
            <div class="sh-list-avatar">${c.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="sh-list-info">
              <div class="sh-list-name">${c.name} <span class="sh-badge ${c.tier==='Platinum'?'info':c.tier==='Gold'?'warning':'neutral'}" style="margin-left:6px">${c.tier}</span></div>
              <div class="sh-list-sub">${c.email} · ${c.city} · ${c.orders} pesanan · ${rupiah(c.spent)}</div>
            </div>
          </div>`).join('')}
      </div>
    </div>`;
}

function adminStaff(){
  return `
    <button class="sh-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:18px">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:500">${STAFF.length} anggota tim</div>
      <button class="sh-btn-sm rose" onclick="openStaffModal(null)">+ Tambah Staff</button>
    </div>
    <div class="sh-card-panel">
      <div class="sh-card-head"><div class="sh-card-title">Anggota Tim</div></div>
      <div class="sh-card-body-flush">
        ${STAFF.map(s=>`
          <div class="sh-list-item" style="padding:16px 20px">
            <div class="sh-list-avatar">${s.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="sh-list-info">
              <div class="sh-list-name">${s.name}</div>
              <div class="sh-list-sub">${s.role} · ${s.email}</div>
            </div>
            <span class="sh-badge ${s.status==='active'?'success':'neutral'}">${s.status}</span>
            <button class="sh-btn-sm outline" onclick="openStaffModal(${s.id})">Edit</button>
            <button class="sh-btn-sm danger" onclick="deleteStaff(${s.id})">Hapus</button>
          </div>`).join('')}
      </div>
    </div>
    <div class="sh-card-panel">
      <div class="sh-card-head"><div class="sh-card-title">Matriks Role & Akses</div></div>
      <div class="sh-card-body-flush">
        <div class="sh-tbl-wrap">
          <table class="sh-tbl">
            <thead><tr><th>Role</th><th>Akses</th></tr></thead>
            <tbody>
              <tr><td><b>Manager</b></td><td>Akses penuh semua modul</td></tr>
              <tr><td><b>Kasir</b></td><td>Pesanan, Pelanggan, Promo</td></tr>
              <tr><td><b>Admin Gudang</b></td><td>Produk, Varian & Stok, Restock</td></tr>
              <tr><td><b>Customer Service</b></td><td>Pesanan, Retur, Chat</td></tr>
              <tr><td><b>Kurir</b></td><td>Pesanan (lihat), Tracking</td></tr>
              <tr><td><b>Content Creator</b></td><td>Produk (lihat), Lookbook</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>`;
}
function deleteStaff(id){
  const s=STAFF.find(x=>x.id===id);
  if(!confirm('Hapus "'+s.name+'"?')) return;
  STAFF=STAFF.filter(x=>x.id!==id);
  renderAdminContent(); showToast('Staff dihapus');
}

function adminVouchers(){
  return `
    <button class="sh-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:18px">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:500">${VOUCHERS.length} voucher</div>
      <button class="sh-btn-sm rose" onclick="showToast('Form voucher baru')">+ Voucher</button>
    </div>
    ${VOUCHERS.map(v=>`
      <div class="sh-card-panel">
        <div class="sh-card-head">
          <div>
            <div class="sh-card-title" style="color:var(--rose-deep)">${v.code}</div>
            <div class="sh-card-sub">${v.value} (${v.type}) · Min. ${rupiah(v.min)}</div>
          </div>
          <span class="sh-badge ${v.status==='active'?'success':'neutral'}">${v.status}</span>
        </div>
        <div class="sh-card-body">
          <div style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:6px">
            <span style="color:var(--ink-muted)">Kuota terpakai</span>
            <b>${v.used}/${v.quota}</b>
          </div>
          <div class="sh-progress"><div class="sh-progress-fill" style="width:${(v.used/v.quota*100)}%"></div></div>
        </div>
      </div>`).join('')}`;
}

function adminReports(){
  return `
    <button class="sh-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="sh-kpi-grid" style="grid-template-columns:repeat(2,1fr)">
      <div class="sh-kpi rose"><div class="sh-kpi-label">Total GMV</div><div class="sh-kpi-value" style="font-size:22px">Rp892jt</div><div class="sh-kpi-trend up">↑ 28% MoM</div></div>
      <div class="sh-kpi sage"><div class="sh-kpi-label">Total Orders</div><div class="sh-kpi-value">3,241</div><div class="sh-kpi-trend up">↑ 18% MoM</div></div>
      <div class="sh-kpi cream"><div class="sh-kpi-label">AOV</div><div class="sh-kpi-value" style="font-size:20px">Rp275rb</div><div class="sh-kpi-trend up">↑ 8% MoM</div></div>
      <div class="sh-kpi warm"><div class="sh-kpi-label">Return Rate</div><div class="sh-kpi-value">4.2%</div><div class="sh-kpi-trend down">↓ 0.8% MoM</div></div>
    </div>
    <div class="sh-card-panel">
      <div class="sh-card-head"><div class="sh-card-title">Performa Brand</div></div>
      <div class="sh-card-body">
        ${['AETERNA','LUNA','URBANCO','STRIDE','DENIMLAB','BASIC.CO','CARRYON'].map(b=>{
          const total=PRODUCTS.filter(p=>p.brand===b).reduce((s,p)=>s+p.sold*p.price,0);
          const maxV=24000000;
          return `
            <div style="margin-bottom:16px">
              <div style="display:flex;justify-content:space-between;font-size:12px;font-weight:600;margin-bottom:8px">
                <span>${b}</span><span style="color:var(--ink-muted)">${rupiah(total)}</span>
              </div>
              <div class="sh-progress"><div class="sh-progress-fill" style="width:${Math.min(total/maxV*100,100)}%;background:var(--ink)"></div></div>
            </div>`;
        }).join('')}
      </div>
    </div>
    <div class="sh-card-panel">
      <div class="sh-card-head"><div class="sh-card-title">Export Laporan</div></div>
      <div class="sh-card-body">
        <button class="sh-btn-primary" onclick="showToast('CSV diunduh')">Download CSV</button>
        <button class="sh-btn-secondary" onclick="showToast('PDF dibuat')">Download PDF</button>
      </div>
    </div>`;
}

function adminSettings(){
  return `
    <button class="sh-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="sh-card-panel">
      <div class="sh-card-head"><div><div class="sh-card-title">Informasi Toko</div><div class="sh-card-sub">Detail dan kebijakan</div></div></div>
      <div class="sh-card-body">
        <div class="sh-form-group"><label class="sh-form-label">Nama Toko</label><input class="sh-form-input" value="StyleHub"></div>
        <div class="sh-form-group"><label class="sh-form-label">Tagline</label><input class="sh-form-input" value="Fashion Editorial Marketplace"></div>
        <div class="sh-form-group"><label class="sh-form-label">Alamat Gudang</label><input class="sh-form-input" value="Jl. Panjang No. 88, Jakarta Barat"></div>
        <div class="sh-form-row">
          <div class="sh-form-group"><label class="sh-form-label">Min. Gratis Ongkir</label><input class="sh-form-input" value="300000" type="number"></div>
          <div class="sh-form-group"><label class="sh-form-label">Ongkir Default</label><input class="sh-form-input" value="25000" type="number"></div>
        </div>
        <div class="sh-form-group"><label class="sh-form-label">Kebijakan Retur (hari)</label><input class="sh-form-input" value="30" type="number"></div>
        <button class="sh-btn-primary" onclick="showToast('Pengaturan disimpan')">Simpan Pengaturan</button>
      </div>
    </div>
    <div class="sh-card-panel">
      <div class="sh-card-head"><div class="sh-card-title">Metode Pembayaran</div></div>
      <div class="sh-card-body-flush">
        ${[
          {icon:'TF',name:'Transfer Bank',sub:'BCA, Mandiri, BNI, BRI',status:'active'},
          {icon:'EW',name:'E-Wallet',sub:'GoPay, OVO, Dana, ShopeePay',status:'active'},
          {icon:'CC',name:'Kartu Kredit',sub:'Visa, Mastercard, JCB — Cicilan 0%',status:'active'},
          {icon:'CD',name:'COD',sub:'Bayar di tempat (Jabodetabek)',status:'limited'}
        ].map(m=>`
          <div class="sh-list-item" style="padding:16px 20px">
            <div class="sh-list-avatar" style="background:var(--sage-soft);color:var(--sage-deep);font-size:11px">${m.icon}</div>
            <div class="sh-list-info">
              <div class="sh-list-name">${m.name}</div>
              <div class="sh-list-sub">${m.sub}</div>
            </div>
            <span class="sh-badge ${m.status==='active'?'success':'warning'}">${m.status==='active'?'Aktif':'Terbatas'}</span>
          </div>`).join('')}
      </div>
    </div>
    <div class="sh-alert success">Semua perubahan diterapkan realtime ke aplikasi pembeli.</div>`;
}

/* MODALS */
function openProductModal(id){
  document.getElementById('pmCat').innerHTML=CATEGORIES.filter(c=>c.id!=='all').map(c=>`<option value="${c.id}">${c.name}</option>`).join('');
  if(id){
    const p=PRODUCTS.find(x=>x.id===id);
    state.editingProduct=id;
    document.getElementById('productModalTitle').textContent='Edit Produk';
    document.getElementById('pmName').value=p.name;
    document.getElementById('pmBrand').value=p.brand;
    document.getElementById('pmPrice').value=p.price;
    document.getElementById('pmOld').value=p.old||'';
    document.getElementById('pmCat').value=p.cat;
    document.getElementById('pmSizes').value=p.sizes.join(',');
    document.getElementById('pmColors').value=p.colors.map(c=>c.name).join(',');
    document.getElementById('pmDesc').value=p.desc||'';
  } else {
    state.editingProduct=null;
    document.getElementById('productModalTitle').textContent='Produk Baru';
    ['pmName','pmBrand','pmPrice','pmOld','pmSizes','pmColors','pmDesc'].forEach(f=>document.getElementById(f).value='');
  }
  document.getElementById('productModal').classList.add('open');
}
function closeProductModal(){ document.getElementById('productModal').classList.remove('open'); }
function saveProduct(){
  const name=document.getElementById('pmName').value.trim();
  const brand=document.getElementById('pmBrand').value.trim()||'NEW';
  const price=+document.getElementById('pmPrice').value;
  const old=+document.getElementById('pmOld').value||0;
  const cat=document.getElementById('pmCat').value;
  const sizes=document.getElementById('pmSizes').value.split(',').map(s=>s.trim()).filter(Boolean);
  const colorNames=document.getElementById('pmColors').value.split(',').map(s=>s.trim()).filter(Boolean);
  const desc=document.getElementById('pmDesc').value.trim()||'Produk baru';
  if(!name||!price||!sizes.length||!colorNames.length){ showToast('Lengkapi data'); return; }
  const cMap={hitam:'#3a3330',putih:'#f5f5f5',navy:'#3a4a6b',cream:'#f5e9d0',olive:'#8a9a7b',maroon:'#8b5a5a',grey:'#9a958e',abu:'#a8a29e',tan:'#c9a678',rose:'#e8b4b8',sage:'#b8c8b5',khaki:'#c9b896',army:'#7a8560'};
  const colors=colorNames.map(cn=>({name:cn,hex:cMap[cn.toLowerCase()]||'#d0c9c0'}));
  const variants={};
  colors.forEach(c=>sizes.forEach(s=>variants[c.name+'-'+s]=10));
  if(state.editingProduct){
    const p=PRODUCTS.find(x=>x.id===state.editingProduct);
    Object.assign(p,{name,brand,price,old,cat,sizes,colors,variants,desc,stock:Object.values(variants).reduce((s,v)=>s+v,0)});
    showToast('Produk diperbarui');
  } else {
    const id=Math.max(...PRODUCTS.map(p=>p.id))+1;
    PRODUCTS.push({id,name,brand,cat,price,old,colors,sizes,variants,emoji:'👕',bg:'#f0e5d0',rating:5.0,sold:0,stock:Object.values(variants).reduce((s,v)=>s+v,0),isNew:true,isSale:old>0,desc,reviews:[]});
    showToast('Produk ditambahkan');
  }
  closeProductModal(); renderAdminContent(); renderProducts();
}

function openStaffModal(id){
  if(id){
    const s=STAFF.find(x=>x.id===id);
    state.editingStaff=id;
    document.getElementById('staffModalTitle').textContent='Edit Staff';
    document.getElementById('sfName').value=s.name;
    document.getElementById('sfEmail').value=s.email;
    document.getElementById('sfRole').value=s.role;
  } else {
    state.editingStaff=null;
    document.getElementById('staffModalTitle').textContent='Tambah Staff';
    document.getElementById('sfName').value='';
    document.getElementById('sfEmail').value='';
  }
  document.getElementById('staffModal').classList.add('open');
}
function closeStaffModal(){ document.getElementById('staffModal').classList.remove('open'); }
function saveStaff(){
  const name=document.getElementById('sfName').value.trim();
  const email=document.getElementById('sfEmail').value.trim();
  const role=document.getElementById('sfRole').value;
  if(!name||!email){ showToast('Lengkapi data'); return; }
  if(state.editingStaff){
    const s=STAFF.find(x=>x.id===state.editingStaff);
    Object.assign(s,{name,email,role});
    showToast('Staff diperbarui');
  } else {
    STAFF.push({id:Date.now(),name,email,role,status:'active'});
    showToast('Staff ditambahkan');
  }
  closeStaffModal(); renderAdminContent();
}

/* NAV */
function navTo(nav){
  if(nav==='admin'){ setMode('admin'); return; }
  document.querySelectorAll('.sh-nav-item').forEach(n=>n.classList.toggle('active',n.dataset.nav===nav));
  if(nav==='home') window.scrollTo({top:0,behavior:'smooth'});
  if(nav==='shop') document.getElementById('koleksi').scrollIntoView({behavior:'smooth'});
}

document.querySelectorAll('.sh-pill').forEach(btn=>{
  btn.addEventListener('click',()=>{
    document.querySelectorAll('.sh-pill').forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    state.sort=btn.dataset.sort;
    renderProducts();
  });
});

function updateFlashTimer(){
  const now=new Date(); const end=new Date(); end.setHours(23,59,59,999);
  const diff=Math.max(0,end-now);
  const h=String(Math.floor(diff/3600000)).padStart(2,'0');
  const m=String(Math.floor(diff%3600000/60000)).padStart(2,'0');
  const s=String(Math.floor(diff%60000/1000)).padStart(2,'0');
  const el=document.getElementById('flashTimer'); if(el) el.textContent=`${h}:${m}:${s}`;
}
setInterval(updateFlashTimer,1000); updateFlashTimer();

/* INIT */
renderNavCategories();
renderLookbooks();
renderProducts();
updateBadges();
initShSidebar();
</script>
@endverbatim
@include('demo.toko-online.partials.demo-bar')
</body>
</html>