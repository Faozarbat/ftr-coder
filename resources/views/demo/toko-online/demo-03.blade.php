@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="theme-color" content="#0b1220">
<title>GadgetZone — Elektronik & Gadget</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;-webkit-tap-highlight-color:transparent}
:root{
  --navy:#0b1220;--navy-soft:#111a2e;--navy-card:#16203a;--navy-line:#243052;
  --ink:#e6ecf5;--ink-mid:#a4b1c9;--ink-muted:#6b7897;
  --cyan:#00d9e0;--cyan-dark:#00a8ae;--cyan-glow:rgba(0,217,224,.15);
  --amber:#f5a623;--green:#22c55e;--red:#ef4444;--blue:#3b82f6;
  --radius:10px;--radius-lg:16px;
  --mono:"SF Mono","Monaco","Cascadia Code","Roboto Mono",Consolas,monospace;
}
body{font-family:"Inter",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;background:var(--navy);color:var(--ink);font-size:14px;line-height:1.55;overflow-x:hidden;-webkit-font-smoothing:antialiased}
button{font-family:inherit;cursor:pointer;border:none;background:none;color:inherit}
input,select,textarea{font-family:inherit;font-size:14px;outline:none;color:inherit}
.hidden{display:none!important}
.mono{font-family:var(--mono)}

/* ===== FLOATING MODE SWITCHER — SELALU MUNCUL ===== */
.mode-switch{
  position:fixed;bottom:80px;left:50%;transform:translateX(-50%);
  z-index:250;display:flex;background:var(--navy-card);border:2px solid var(--cyan);
  border-radius:40px;padding:4px;box-shadow:0 8px 32px rgba(0,217,224,.35);
  backdrop-filter:blur(12px);
}
.mode-switch-btn{
  padding:10px 18px;border-radius:32px;font-size:11px;font-weight:800;
  letter-spacing:.08em;text-transform:uppercase;color:var(--ink-mid);
  display:flex;align-items:center;gap:6px;transition:.2s;white-space:nowrap;
}
.mode-switch-btn:hover{color:var(--ink)}
.mode-switch-btn.active{background:var(--cyan);color:var(--navy)}
.mode-switch-btn .ms-icon{font-family:var(--mono);font-size:14px;font-weight:900}

/* ===== ADMIN ENTRY BUTTON IN CUSTOMER HEADER ===== */
.cz-admin-entry{
  display:flex;align-items:center;gap:6px;padding:6px 12px;
  background:var(--cyan-glow);border:1px solid var(--cyan);border-radius:20px;
  color:var(--cyan);font-size:11px;font-weight:800;letter-spacing:.04em;
  transition:.2s;white-space:nowrap;
}
.cz-admin-entry:hover{background:var(--cyan);color:var(--navy)}
.cz-admin-entry .mono{font-size:13px}

/* ===== ADMIN BREADCRUMB + QUICK NAV ===== */
.gz-breadcrumb{
  display:flex;align-items:center;gap:8px;font-family:var(--mono);
  font-size:10px;font-weight:700;color:var(--ink-muted);
  letter-spacing:.06em;text-transform:uppercase;
}
.gz-breadcrumb .crumb{color:var(--ink-mid)}
.gz-breadcrumb .crumb.active{color:var(--cyan)}
.gz-breadcrumb .sep{opacity:.5}

.gz-back-btn{
  display:inline-flex;align-items:center;gap:6px;padding:6px 12px;
  background:transparent;border:1px solid var(--navy-line);border-radius:8px;
  color:var(--ink-mid);font-size:11px;font-weight:700;letter-spacing:.04em;
  text-transform:uppercase;transition:.15s;margin-bottom:16px;
}
.gz-back-btn:hover{border-color:var(--cyan);color:var(--cyan)}

/* ===== ADMIN MAIN MENU GRID (Dashboard) ===== */
.admin-menu-grid{
  display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin-bottom:20px;
}
@media(min-width:640px){.admin-menu-grid{grid-template-columns:repeat(4,1fr)}}
.admin-menu-tile{
  background:var(--navy-card);border:1px solid var(--navy-line);border-radius:var(--radius);
  padding:16px;text-align:left;transition:.2s;position:relative;overflow:hidden;
}
.admin-menu-tile:hover{border-color:var(--cyan);transform:translateY(-2px)}
.admin-menu-tile .tile-icon{
  font-family:var(--mono);font-size:24px;font-weight:900;color:var(--cyan);
  margin-bottom:10px;line-height:1;
}
.admin-menu-tile .tile-title{font-size:12px;font-weight:800;margin-bottom:4px;letter-spacing:-.01em}
.admin-menu-tile .tile-sub{font-family:var(--mono);font-size:10px;color:var(--ink-muted);letter-spacing:.02em}
.admin-menu-tile .tile-badge{
  position:absolute;top:12px;right:12px;background:var(--amber);color:var(--navy);
  font-family:var(--mono);font-size:9px;font-weight:800;padding:3px 7px;
  border-radius:10px;min-width:20px;text-align:center;
}

/* ===== BACK TO CUSTOMER BUTTON (TOP RIGHT OF ADMIN) ===== */
.gz-switch-customer{
  display:flex;align-items:center;gap:8px;padding:8px 14px;
  background:var(--cyan);color:var(--navy);border-radius:8px;
  font-size:11px;font-weight:800;letter-spacing:.06em;text-transform:uppercase;
  transition:.15s;white-space:nowrap;
}
.gz-switch-customer:hover{background:var(--cyan-dark)}

/* ============ HEADER CZ ============ */
.cz-header{position:sticky;top:0;z-index:100;background:var(--navy-soft);border-bottom:1px solid var(--navy-line)}
.cz-band{padding:8px 16px;background:linear-gradient(90deg,var(--cyan),var(--blue));color:var(--navy);font-size:10px;font-weight:800;letter-spacing:.15em;text-transform:uppercase;text-align:center}
.cz-head{display:flex;align-items:center;gap:10px;padding:14px 16px}
.cz-logo{display:flex;align-items:center;gap:10px;font-weight:800;font-size:18px;letter-spacing:-.02em}
.cz-logo-mark{width:32px;height:32px;background:var(--cyan);color:var(--navy);border-radius:8px;display:flex;align-items:center;justify-content:center;font-family:var(--mono);font-weight:900;font-size:14px}
.cz-logo span{color:var(--cyan)}
.cz-head-right{margin-left:auto;display:flex;gap:8px;align-items:center}
.cz-icons{display:flex;gap:4px}
.cz-icon{width:38px;height:38px;border-radius:8px;background:var(--navy-card);display:flex;align-items:center;justify-content:center;color:var(--ink-mid);position:relative;transition:.15s}
.cz-icon:hover{color:var(--cyan);background:var(--navy-line)}
.cz-badge{position:absolute;top:-3px;right:-3px;background:var(--cyan);color:var(--navy);font-size:9px;font-weight:800;min-width:17px;height:17px;border-radius:9px;display:flex;align-items:center;justify-content:center;padding:0 4px;border:2px solid var(--navy-soft)}

.cz-search{margin:0 16px 12px;display:flex;align-items:center;gap:10px;background:var(--navy-card);border:1px solid var(--navy-line);border-radius:8px;padding:10px 14px;color:var(--ink-muted);font-size:13px;cursor:pointer;transition:.15s}
.cz-search:hover{border-color:var(--cyan)}
.cz-search .mono{color:var(--cyan);font-size:11px}
.cz-cats{display:flex;gap:6px;padding:0 16px 12px;overflow-x:auto;scrollbar-width:none}
.cz-cats::-webkit-scrollbar{display:none}
.cz-cat{flex-shrink:0;padding:8px 14px;background:var(--navy-card);border:1px solid var(--navy-line);border-radius:20px;font-size:12px;font-weight:600;color:var(--ink-mid);white-space:nowrap;transition:.15s}
.cz-cat:hover{border-color:var(--cyan);color:var(--cyan)}
.cz-cat.active{background:var(--cyan);color:var(--navy);border-color:var(--cyan);font-weight:700}

/* ============ HERO ============ */
.cz-hero{margin:16px;border-radius:var(--radius-lg);background:var(--navy-card);border:1px solid var(--navy-line);padding:24px;position:relative;overflow:hidden}
.cz-hero::before{content:"";position:absolute;top:-100px;right:-100px;width:300px;height:300px;border-radius:50%;background:radial-gradient(circle,var(--cyan-glow),transparent 70%)}
.cz-hero::after{content:"</>";position:absolute;bottom:-20px;right:20px;font-family:var(--mono);font-size:120px;color:var(--navy-line);font-weight:900;pointer-events:none;line-height:1}
.cz-hero-tag{display:inline-flex;align-items:center;gap:6px;padding:5px 12px;background:var(--cyan-glow);border:1px solid var(--cyan);border-radius:20px;font-size:10px;font-weight:800;color:var(--cyan);letter-spacing:.1em;text-transform:uppercase;margin-bottom:16px}
.cz-hero-tag::before{content:"";width:6px;height:6px;background:var(--cyan);border-radius:50%;animation:pulse 1.5s infinite}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.3}}
.cz-hero-title{font-size:32px;font-weight:800;line-height:1.1;letter-spacing:-.03em;margin-bottom:12px;position:relative;z-index:1}
.cz-hero-title em{font-style:normal;color:var(--cyan);font-family:var(--mono)}
.cz-hero-sub{font-size:13px;color:var(--ink-mid);max-width:340px;margin-bottom:20px;position:relative;z-index:1;line-height:1.65}
.cz-hero-btns{display:flex;gap:10px;flex-wrap:wrap;position:relative;z-index:1}
.cz-btn-hero{padding:11px 20px;border-radius:8px;font-size:12px;font-weight:700;letter-spacing:.02em;transition:.2s}
.cz-btn-hero.primary{background:var(--cyan);color:var(--navy)}
.cz-btn-hero.ghost{background:transparent;color:var(--ink);border:1px solid var(--navy-line)}
.cz-btn-hero.ghost:hover{border-color:var(--cyan);color:var(--cyan)}

.cz-stats{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--navy-line);border:1px solid var(--navy-line);margin:0 16px 16px;border-radius:var(--radius);overflow:hidden}
.cz-stat{background:var(--navy-card);padding:16px;text-align:center}
.cz-stat-icon{font-size:20px;color:var(--cyan);margin-bottom:6px;font-family:var(--mono)}
.cz-stat-title{font-size:11px;font-weight:700;color:var(--ink);margin-bottom:2px}
.cz-stat-sub{font-size:10px;color:var(--ink-muted)}

.cz-section{padding:20px 16px}
.cz-section-head{display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:14px}
.cz-section-eyebrow{font-size:10px;font-weight:800;letter-spacing:.15em;color:var(--cyan);text-transform:uppercase;margin-bottom:4px;font-family:var(--mono)}
.cz-section-title{font-size:20px;font-weight:800;letter-spacing:-.02em}
.cz-section-link{font-size:12px;font-weight:700;color:var(--cyan)}

.cz-sort{display:flex;gap:6px;overflow-x:auto;padding:0 0 14px;scrollbar-width:none}
.cz-sort::-webkit-scrollbar{display:none}
.cz-sort-chip{flex-shrink:0;padding:8px 14px;background:var(--navy-card);border:1px solid var(--navy-line);border-radius:8px;font-size:11px;font-weight:700;color:var(--ink-mid);white-space:nowrap}
.cz-sort-chip.active{background:var(--cyan);color:var(--navy);border-color:var(--cyan)}

.cz-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
@media(min-width:640px){.cz-grid{grid-template-columns:repeat(3,1fr);gap:16px}}
@media(min-width:900px){.cz-grid{grid-template-columns:repeat(4,1fr)}}
.cz-card{background:var(--navy-card);border:1px solid var(--navy-line);border-radius:var(--radius);overflow:hidden;cursor:pointer;transition:.2s;display:flex;flex-direction:column}
.cz-card:hover{border-color:var(--cyan);transform:translateY(-2px)}
.cz-card-img{aspect-ratio:1;background:var(--navy-soft);display:flex;align-items:center;justify-content:center;font-size:64px;position:relative;border-bottom:1px solid var(--navy-line)}
.cz-card-tag{position:absolute;top:8px;left:8px;padding:4px 8px;background:var(--cyan);color:var(--navy);font-size:9px;font-weight:800;border-radius:4px;font-family:var(--mono)}
.cz-card-tag.hot{background:var(--amber)}
.cz-card-wish{position:absolute;top:8px;right:8px;width:30px;height:30px;border-radius:6px;background:rgba(11,18,32,.75);display:flex;align-items:center;justify-content:center;color:var(--ink-mid)}
.cz-card-wish.active{color:var(--cyan)}
.cz-card-body{padding:12px;display:flex;flex-direction:column;gap:6px;flex:1}
.cz-card-brand{font-size:9px;font-weight:800;letter-spacing:.12em;color:var(--cyan);text-transform:uppercase;font-family:var(--mono)}
.cz-card-name{font-size:12px;font-weight:600;line-height:1.35;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;min-height:32px}
.cz-card-spec{font-family:var(--mono);font-size:10px;color:var(--ink-muted);background:var(--navy-soft);padding:4px 8px;border-radius:4px;align-self:flex-start;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:100%}
.cz-card-price{display:flex;align-items:baseline;gap:6px;flex-wrap:wrap;margin-top:auto;padding-top:6px}
.cz-card-price-now{font-size:14px;font-weight:800}
.cz-card-price-old{font-size:10px;color:var(--ink-muted);text-decoration:line-through}
.cz-card-disc{font-size:10px;font-weight:800;color:var(--amber);font-family:var(--mono)}
.cz-card-meta{display:flex;align-items:center;justify-content:space-between;font-size:10px;color:var(--ink-muted);padding-top:4px;border-top:1px solid var(--navy-line);margin-top:4px}
.cz-card-rating{color:var(--amber);font-weight:700}
.cz-card-cicil{font-family:var(--mono);font-size:9px;background:var(--cyan-glow);color:var(--cyan);padding:3px 6px;border-radius:4px;font-weight:700}

.cz-nav{position:fixed;bottom:0;left:0;right:0;background:var(--navy-soft);border-top:1px solid var(--navy-line);z-index:200;display:flex;padding:6px 0 8px}
.cz-nav-item{flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;color:var(--ink-muted);font-size:9px;font-weight:700;padding:6px 0;position:relative}
.cz-nav-item.active{color:var(--cyan)}
.cz-nav-item .nav-icon{font-size:20px;display:flex}

.cz-overlay{position:fixed;inset:0;background:rgba(4,8,16,.75);z-index:300;opacity:0;visibility:hidden;transition:.25s;backdrop-filter:blur(4px)}
.cz-overlay.open{opacity:1;visibility:visible}
.cz-drawer{position:fixed;bottom:0;left:0;right:0;background:var(--navy-soft);z-index:301;border-radius:20px 20px 0 0;max-height:92vh;display:flex;flex-direction:column;transform:translateY(100%);transition:.32s cubic-bezier(.4,0,.2,1);border-top:1px solid var(--cyan)}
.cz-drawer.open{transform:translateY(0)}
.cz-drawer-handle{width:40px;height:4px;background:var(--navy-line);border-radius:2px;margin:10px auto}
.cz-drawer-head{padding:6px 20px 14px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--navy-line)}
.cz-drawer-title{font-size:16px;font-weight:800}
.cz-drawer-title small{display:block;font-size:10px;font-weight:600;color:var(--ink-muted);letter-spacing:.08em;text-transform:uppercase;margin-top:3px;font-family:var(--mono)}
.cz-drawer-close{width:34px;height:34px;border-radius:8px;background:var(--navy-card);color:var(--ink-mid);display:flex;align-items:center;justify-content:center}
.cz-drawer-body{flex:1;overflow-y:auto;padding:16px 20px}
.cz-drawer-foot{padding:14px 20px 22px;border-top:1px solid var(--navy-line);background:var(--navy-soft)}

.cz-cart-item{display:flex;gap:12px;padding:14px 0;border-bottom:1px solid var(--navy-line)}
.cz-cart-item:last-child{border-bottom:none}
.cz-cart-img{width:64px;height:64px;background:var(--navy-card);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:30px;flex-shrink:0}
.cz-cart-info{flex:1;min-width:0;display:flex;flex-direction:column;gap:3px}
.cz-cart-brand{font-size:9px;font-weight:800;letter-spacing:.12em;color:var(--cyan);text-transform:uppercase;font-family:var(--mono)}
.cz-cart-name{font-size:12px;font-weight:600;line-height:1.3}
.cz-cart-var{font-family:var(--mono);font-size:10px;color:var(--ink-muted)}
.cz-cart-price{font-size:13px;font-weight:800;color:var(--cyan);margin-top:3px}
.cz-cart-actions{display:flex;flex-direction:column;align-items:flex-end;justify-content:space-between}
.cz-cart-remove{font-size:10px;color:var(--red);font-weight:700;text-decoration:underline}
.cz-qty{display:flex;align-items:center;background:var(--navy-card);border:1px solid var(--navy-line);border-radius:6px;overflow:hidden}
.cz-qty button{width:28px;height:28px;color:var(--cyan);font-size:14px;font-weight:700}
.cz-qty span{width:28px;text-align:center;font-family:var(--mono);font-size:12px;font-weight:700}
.cz-sum-row{display:flex;justify-content:space-between;font-size:12px;margin-bottom:8px;color:var(--ink-mid)}
.cz-sum-row.total{font-size:16px;font-weight:800;color:var(--ink);padding-top:10px;border-top:1px solid var(--navy-line);margin-top:8px}
.cz-btn-primary{width:100%;background:var(--cyan);color:var(--navy);border-radius:10px;padding:14px;font-size:13px;font-weight:800;margin-top:12px}
.cz-btn-ghost{width:100%;background:transparent;color:var(--ink);border:1px solid var(--navy-line);border-radius:10px;padding:13px;font-size:12px;font-weight:700;margin-top:8px}

/* PDP */
.cz-pdp{position:fixed;inset:0;background:var(--navy);z-index:500;transform:translateY(100%);transition:.32s cubic-bezier(.4,0,.2,1);overflow-y:auto;display:none}
.cz-pdp.open{transform:translateY(0);display:block}
.cz-pdp-top{position:sticky;top:0;background:var(--navy-soft);padding:12px 16px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--navy-line);z-index:10}
.cz-pdp-top-title{font-family:var(--mono);font-size:11px;font-weight:700;color:var(--cyan);letter-spacing:.08em;text-transform:uppercase}
.cz-pdp-hero{aspect-ratio:1;background:var(--navy-card);display:flex;align-items:center;justify-content:center;font-size:160px;position:relative;border-bottom:1px solid var(--navy-line)}
.cz-pdp-hero-tag{position:absolute;top:16px;left:16px;background:var(--cyan);color:var(--navy);padding:6px 12px;border-radius:6px;font-family:var(--mono);font-size:10px;font-weight:800}
.cz-pdp-body{padding:20px 20px 0}
.cz-pdp-brand{font-family:var(--mono);font-size:11px;font-weight:700;color:var(--cyan);letter-spacing:.12em;text-transform:uppercase;margin-bottom:8px}
.cz-pdp-name{font-size:22px;font-weight:800;line-height:1.2;letter-spacing:-.02em;margin-bottom:14px}
.cz-pdp-price{display:flex;align-items:baseline;gap:10px;flex-wrap:wrap;margin-bottom:8px}
.cz-pdp-price-now{font-size:26px;font-weight:800;color:var(--cyan)}
.cz-pdp-price-old{font-size:14px;color:var(--ink-muted);text-decoration:line-through}
.cz-pdp-disc{background:var(--amber);color:var(--navy);padding:4px 10px;border-radius:4px;font-size:11px;font-weight:800;font-family:var(--mono)}
.cz-pdp-installment{background:var(--cyan-glow);border-left:3px solid var(--cyan);padding:12px 14px;border-radius:8px;margin-bottom:18px;font-size:12px;color:var(--ink-mid);line-height:1.6}
.cz-pdp-installment b{color:var(--cyan);font-family:var(--mono)}
.cz-pdp-rating{display:flex;align-items:center;gap:14px;padding:14px 0;border-top:1px solid var(--navy-line);border-bottom:1px solid var(--navy-line);margin-bottom:18px;font-size:12px}
.cz-pdp-rating .star{color:var(--amber);font-size:14px}
.cz-pdp-rating .sep{color:var(--navy-line)}
.cz-specs{background:var(--navy-card);border-radius:var(--radius);padding:16px;margin-bottom:18px;border:1px solid var(--navy-line)}
.cz-specs-title{font-family:var(--mono);font-size:11px;font-weight:800;color:var(--cyan);letter-spacing:.12em;text-transform:uppercase;margin-bottom:12px;padding-bottom:10px;border-bottom:1px solid var(--navy-line)}
.cz-spec-row{display:flex;justify-content:space-between;padding:8px 0;border-bottom:1px dashed var(--navy-line);font-size:12px}
.cz-spec-row:last-child{border-bottom:none}
.cz-spec-key{color:var(--ink-muted);font-family:var(--mono);font-size:11px}
.cz-spec-val{color:var(--ink);font-weight:600;text-align:right;max-width:60%}
.cz-opt{margin-bottom:18px}
.cz-opt-head{display:flex;justify-content:space-between;align-items:baseline;margin-bottom:10px}
.cz-opt-label{font-family:var(--mono);font-size:10px;font-weight:800;color:var(--ink-muted);letter-spacing:.12em;text-transform:uppercase}
.cz-opt-value{font-size:13px;font-weight:700;color:var(--cyan)}
.cz-opt-chips{display:flex;gap:8px;flex-wrap:wrap}
.cz-opt-chip{padding:9px 16px;background:var(--navy-card);border:1px solid var(--navy-line);border-radius:8px;font-size:12px;font-weight:600;color:var(--ink);min-width:50px;text-align:center}
.cz-opt-chip.active{background:var(--cyan);color:var(--navy);border-color:var(--cyan);font-weight:700}
.cz-opt-chip.disabled{opacity:.35;text-decoration:line-through;cursor:not-allowed}
.cz-opt-chip small{display:block;font-family:var(--mono);font-size:9px;color:var(--ink-muted);margin-top:2px}
.cz-opt-chip.active small{color:var(--navy);opacity:.7}
.cz-pdp-cta{position:sticky;bottom:0;background:var(--navy-soft);border-top:1px solid var(--navy-line);padding:14px 16px;display:flex;gap:10px;box-shadow:0 -8px 24px rgba(0,0,0,.4)}
.cz-pdp-wish{width:52px;height:52px;background:var(--navy-card);border:1px solid var(--navy-line);border-radius:10px;display:flex;align-items:center;justify-content:center;color:var(--ink-mid)}
.cz-pdp-wish.active{color:var(--cyan);border-color:var(--cyan)}
.cz-pdp-cta .cz-btn-primary{margin:0;flex:1;padding:16px}

/* ADMIN */
.gz-admin{display:flex;min-height:100vh;background:var(--navy)}
.gz-sidebar{width:250px;background:var(--navy-soft);border-right:1px solid var(--navy-line);position:fixed;top:0;left:0;bottom:0;z-index:100;display:flex;flex-direction:column;transition:transform .3s}
.gz-sidebar.collapsed{transform:translateX(-100%)}
@media(min-width:1024px){.gz-sidebar.collapsed{transform:translateX(0)}}
.gz-sb-brand{padding:20px;border-bottom:1px solid var(--navy-line)}
.gz-sb-logo{display:flex;align-items:center;gap:10px;font-weight:800;font-size:16px}
.gz-sb-logo-mark{width:30px;height:30px;background:var(--cyan);color:var(--navy);border-radius:6px;display:flex;align-items:center;justify-content:center;font-family:var(--mono);font-weight:900;font-size:13px}
.gz-sb-logo span{color:var(--cyan)}
.gz-sb-sub{font-family:var(--mono);font-size:9px;font-weight:700;color:var(--ink-muted);letter-spacing:.15em;text-transform:uppercase;margin-top:6px}
.gz-sb-user{padding:14px 20px;display:flex;align-items:center;gap:10px;border-bottom:1px solid var(--navy-line);background:var(--navy-card)}
.gz-sb-avatar{width:36px;height:36px;background:var(--cyan);color:var(--navy);border-radius:8px;display:flex;align-items:center;justify-content:center;font-family:var(--mono);font-weight:800;font-size:12px;flex-shrink:0}
.gz-sb-user-info{flex:1;min-width:0}
.gz-sb-user-name{font-size:12px;font-weight:700}
.gz-sb-user-role{font-family:var(--mono);font-size:10px;color:var(--cyan)}
.gz-sb-nav{flex:1;overflow-y:auto;padding:14px 10px}
.gz-sb-group{margin-bottom:16px}
.gz-sb-group-label{font-family:var(--mono);font-size:9px;font-weight:800;color:var(--ink-muted);letter-spacing:.2em;text-transform:uppercase;padding:8px 12px 6px}
.gz-sb-item{display:flex;align-items:center;gap:12px;padding:10px 12px;border-radius:8px;font-size:12px;font-weight:600;color:var(--ink-mid);width:100%;text-align:left;transition:.15s;margin-bottom:2px}
.gz-sb-item:hover{background:var(--navy-card);color:var(--ink)}
.gz-sb-item.active{background:var(--cyan-glow);color:var(--cyan);border-left:3px solid var(--cyan)}
.gz-sb-icon{font-family:var(--mono);font-size:13px;font-weight:800;display:flex;width:22px;justify-content:center;flex-shrink:0}
.gz-sb-badge{margin-left:auto;background:var(--cyan);color:var(--navy);font-size:9px;font-weight:800;padding:2px 7px;border-radius:10px;min-width:18px;text-align:center;font-family:var(--mono)}
.gz-sb-footer{padding:14px;border-top:1px solid var(--navy-line);display:flex;flex-direction:column;gap:8px}
.gz-sb-switch{width:100%;padding:12px;background:var(--cyan);border:none;border-radius:8px;color:var(--navy);font-size:11px;font-weight:800;letter-spacing:.04em;text-transform:uppercase;display:flex;align-items:center;justify-content:center;gap:6px}
.gz-sb-switch:hover{background:var(--cyan-dark)}
.gz-sb-overlay{position:fixed;inset:0;background:rgba(4,8,16,.75);z-index:99;opacity:0;visibility:hidden;transition:.25s}
.gz-sb-overlay.show{opacity:1;visibility:visible}
@media(min-width:1024px){.gz-sb-overlay{display:none}}
.gz-main{flex:1;margin-left:250px;min-width:0}
@media(max-width:1023px){.gz-main{margin-left:0}}
.gz-topbar{position:sticky;top:0;background:rgba(11,18,32,.92);backdrop-filter:blur(12px);border-bottom:1px solid var(--navy-line);padding:12px 20px;z-index:50;display:flex;align-items:center;gap:12px}
.gz-menu-btn{width:38px;height:38px;border-radius:8px;background:var(--navy-card);border:1px solid var(--navy-line);display:none;align-items:center;justify-content:center;color:var(--ink-mid)}
@media(max-width:1023px){.gz-menu-btn{display:flex}}
.gz-page-title{font-size:18px;font-weight:800;letter-spacing:-.02em}
.gz-page-sub{font-family:var(--mono);font-size:10px;font-weight:600;color:var(--ink-muted);letter-spacing:.08em;text-transform:uppercase;margin-top:2px}
.gz-top-right{margin-left:auto;display:flex;gap:8px;align-items:center}
.gz-icon-btn{width:38px;height:38px;border-radius:8px;background:var(--navy-card);border:1px solid var(--navy-line);display:flex;align-items:center;justify-content:center;color:var(--ink-mid);position:relative}
.gz-icon-btn:hover{color:var(--cyan);border-color:var(--cyan)}
.gz-content{padding:20px}
@media(max-width:639px){.gz-content{padding:14px}}

.gz-kpi-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-bottom:18px}
@media(min-width:640px){.gz-kpi-grid{grid-template-columns:repeat(4,1fr)}}
.gz-kpi{background:var(--navy-card);border:1px solid var(--navy-line);border-radius:var(--radius);padding:16px;position:relative;overflow:hidden}
.gz-kpi::before{content:"";position:absolute;top:0;right:0;width:80px;height:80px;border-radius:50%;background:var(--cyan-glow);transform:translate(30%,-30%)}
.gz-kpi-label{font-family:var(--mono);font-size:10px;font-weight:700;color:var(--ink-muted);letter-spacing:.12em;text-transform:uppercase;margin-bottom:10px;position:relative;z-index:1}
.gz-kpi-value{font-size:24px;font-weight:800;letter-spacing:-.02em;line-height:1.1;position:relative;z-index:1}
.gz-kpi-value.cyan{color:var(--cyan)}
.gz-kpi-trend{display:inline-flex;align-items:center;gap:4px;font-family:var(--mono);font-size:10px;font-weight:800;padding:3px 8px;border-radius:10px;margin-top:10px;position:relative;z-index:1}
.gz-kpi-trend.up{background:rgba(34,197,94,.15);color:var(--green)}
.gz-kpi-trend.down{background:rgba(239,68,68,.15);color:var(--red)}
.gz-card{background:var(--navy-card);border:1px solid var(--navy-line);border-radius:var(--radius);overflow:hidden;margin-bottom:16px}
.gz-card-head{padding:16px 20px;border-bottom:1px solid var(--navy-line);display:flex;align-items:center;justify-content:space-between;gap:12px}
.gz-card-title{font-size:14px;font-weight:800}
.gz-card-sub{font-family:var(--mono);font-size:10px;font-weight:600;color:var(--ink-muted);letter-spacing:.08em;margin-top:3px}
.gz-card-body{padding:20px}
.gz-card-body-flush{padding:0}
.gz-tbl-wrap{overflow-x:auto}
.gz-tbl{width:100%;border-collapse:collapse;font-size:12px}
.gz-tbl th{text-align:left;padding:12px 16px;font-family:var(--mono);font-size:10px;font-weight:800;letter-spacing:.12em;text-transform:uppercase;color:var(--ink-muted);background:var(--navy-soft);border-bottom:1px solid var(--navy-line);white-space:nowrap}
.gz-tbl td{padding:14px 16px;border-bottom:1px solid var(--navy-line);vertical-align:middle}
.gz-tbl tr:last-child td{border-bottom:none}
.gz-tbl tr:hover td{background:var(--navy-soft)}
.gz-btn{padding:8px 14px;border-radius:8px;font-family:var(--mono);font-size:10px;font-weight:800;letter-spacing:.08em;text-transform:uppercase;display:inline-flex;align-items:center;gap:6px}
.gz-btn.primary{background:var(--cyan);color:var(--navy)}
.gz-btn.outline{background:transparent;color:var(--ink-mid);border:1px solid var(--navy-line)}
.gz-btn.outline:hover{border-color:var(--cyan);color:var(--cyan)}
.gz-btn.danger{background:var(--red);color:#fff}
.gz-btn.amber{background:var(--amber);color:var(--navy)}
.gz-badge{display:inline-flex;align-items:center;gap:5px;padding:4px 10px;border-radius:14px;font-family:var(--mono);font-size:10px;font-weight:700;white-space:nowrap}
.gz-badge.success{background:rgba(34,197,94,.15);color:var(--green)}
.gz-badge.warning{background:rgba(245,166,35,.15);color:var(--amber)}
.gz-badge.danger{background:rgba(239,68,68,.15);color:var(--red)}
.gz-badge.info{background:rgba(59,130,246,.15);color:var(--blue)}
.gz-badge.cyan{background:var(--cyan-glow);color:var(--cyan)}
.gz-badge.neutral{background:var(--navy-line);color:var(--ink-mid)}
.gz-badge-dot{width:6px;height:6px;border-radius:50%;background:currentColor}
.gz-form-group{margin-bottom:14px}
.gz-form-label{display:block;font-family:var(--mono);font-size:10px;font-weight:800;color:var(--ink-muted);letter-spacing:.12em;text-transform:uppercase;margin-bottom:6px}
.gz-form-input{width:100%;padding:11px 14px;background:var(--navy-soft);border:1px solid var(--navy-line);border-radius:8px;font-size:13px;color:var(--ink)}
.gz-form-input:focus{border-color:var(--cyan);box-shadow:0 0 0 3px var(--cyan-glow)}
.gz-form-row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.gz-chart{display:flex;align-items:flex-end;gap:6px;height:160px;padding-top:20px}
.gz-bar{flex:1;background:var(--navy-soft);border-radius:6px 6px 0 0;position:relative;min-height:6px;border:1px solid var(--navy-line);border-bottom:none}
.gz-bar.active{background:var(--cyan);border-color:var(--cyan)}
.gz-bar span{position:absolute;bottom:-20px;left:0;right:0;text-align:center;font-family:var(--mono);font-size:10px;color:var(--ink-muted);font-weight:700}
.gz-bar b{position:absolute;top:-16px;left:0;right:0;text-align:center;font-family:var(--mono);font-size:10px;color:var(--cyan);font-weight:800}
.gz-list-item{display:flex;align-items:center;gap:14px;padding:14px 0;border-bottom:1px solid var(--navy-line)}
.gz-list-item:last-child{border-bottom:none}
.gz-list-avatar{width:42px;height:42px;background:var(--navy-soft);border:1px solid var(--navy-line);color:var(--cyan);display:flex;align-items:center;justify-content:center;font-family:var(--mono);font-weight:800;font-size:12px;flex-shrink:0;border-radius:8px}
.gz-list-info{flex:1;min-width:0}
.gz-list-name{font-size:13px;font-weight:700}
.gz-list-sub{font-family:var(--mono);font-size:10px;color:var(--ink-muted);margin-top:3px}
.gz-order{border:1px solid var(--navy-line);border-radius:var(--radius);padding:16px;margin-bottom:12px;background:var(--navy-card)}
.gz-order-head{display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;padding-bottom:12px;border-bottom:1px solid var(--navy-line);gap:12px}
.gz-order-id{font-family:var(--mono);font-size:14px;font-weight:800;color:var(--cyan)}
.gz-order-meta{font-family:var(--mono);font-size:10px;color:var(--ink-muted);margin-top:4px}
.gz-order-body{font-size:12px;line-height:1.7;color:var(--ink-mid)}
.gz-order-items{background:var(--navy-soft);border-radius:8px;padding:12px;margin:10px 0;font-family:var(--mono);font-size:11px;line-height:1.7;color:var(--ink-mid)}
.gz-order-actions{display:flex;gap:8px;flex-wrap:wrap;padding-top:12px;border-top:1px solid var(--navy-line);margin-top:10px}
.gz-variant-row{display:grid;grid-template-columns:1fr 1fr auto auto;gap:12px;align-items:center;padding:12px 16px;border-bottom:1px solid var(--navy-line);font-family:var(--mono);font-size:11px}
.gz-variant-row:last-child{border-bottom:none}
.gz-variant-row:nth-child(odd){background:var(--navy-soft)}
.gz-variant-input{width:70px;padding:6px 10px;background:var(--navy-soft);border:1px solid var(--navy-line);border-radius:6px;text-align:center;font-weight:700;font-size:12px;color:var(--ink);font-family:var(--mono)}
.gz-variant-input:focus{border-color:var(--cyan)}
.gz-filter-row{display:flex;gap:6px;overflow-x:auto;padding-bottom:14px;scrollbar-width:none}
.gz-filter-row::-webkit-scrollbar{display:none}
.gz-chip{flex-shrink:0;padding:8px 14px;background:var(--navy-card);border:1px solid var(--navy-line);border-radius:8px;font-size:11px;font-weight:700;color:var(--ink-mid);white-space:nowrap;font-family:var(--mono)}
.gz-chip.active{background:var(--cyan);color:var(--navy);border-color:var(--cyan)}
.gz-progress{height:8px;background:var(--navy-soft);border-radius:4px;overflow:hidden;margin-top:10px}
.gz-progress-fill{height:100%;background:var(--cyan);border-radius:4px}
.audit-row{display:grid;grid-template-columns:120px 100px 1fr auto;gap:14px;padding:12px 16px;border-bottom:1px solid var(--navy-line);font-size:12px;align-items:center}
.audit-row:hover{background:var(--navy-soft)}
.audit-time{font-family:var(--mono);font-size:10px;color:var(--ink-muted)}
.audit-user{font-family:var(--mono);font-size:10px;color:var(--cyan);font-weight:700}
.audit-action .target{color:var(--cyan);font-family:var(--mono);font-size:11px}
.role-tbl{width:100%;border-collapse:collapse;font-size:11px;font-family:var(--mono)}
.role-tbl th{padding:10px 8px;background:var(--navy-soft);color:var(--ink-muted);font-weight:800;font-size:9px;border:1px solid var(--navy-line);text-align:center;text-transform:uppercase}
.role-tbl th:first-child{text-align:left}
.role-tbl td{padding:10px 8px;border:1px solid var(--navy-line);text-align:center}
.role-tbl td:first-child{text-align:left;font-weight:700;color:var(--ink);font-family:Inter,sans-serif;font-size:12px}
.role-tbl .yes{color:var(--green);font-weight:900}
.role-tbl .no{color:var(--navy-line)}
.svc-card{border:1px solid var(--navy-line);border-radius:var(--radius);padding:16px;background:var(--navy-card);margin-bottom:12px}
.svc-head{display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:12px;padding-bottom:12px;border-bottom:1px solid var(--navy-line);gap:12px}
.svc-id{font-family:var(--mono);font-size:13px;font-weight:800;color:var(--cyan)}
.svc-meta{font-family:var(--mono);font-size:10px;color:var(--ink-muted);margin-top:4px}
.svc-body{font-size:12px;line-height:1.8;color:var(--ink-mid)}
.svc-body b{color:var(--ink)}
.svc-timeline{display:flex;gap:0;margin-top:14px}
.svc-step{flex:1;padding:8px 4px;text-align:center;font-family:var(--mono);font-size:9px;font-weight:700;text-transform:uppercase;color:var(--ink-muted);border-top:3px solid var(--navy-line)}
.svc-step.done{color:var(--cyan);border-top-color:var(--cyan)}
.svc-step.active{color:var(--amber);border-top-color:var(--amber)}
.gz-modal{position:fixed;inset:0;background:rgba(4,8,16,.75);z-index:500;display:flex;align-items:flex-end;justify-content:center;opacity:0;visibility:hidden;transition:.25s;padding:0;backdrop-filter:blur(4px)}
@media(min-width:640px){.gz-modal{align-items:center;padding:16px}}
.gz-modal.open{opacity:1;visibility:visible}
.gz-modal-box{background:var(--navy-soft);border:1px solid var(--navy-line);border-radius:20px 20px 0 0;width:100%;max-width:560px;transform:translateY(20px);transition:.28s;max-height:92vh;overflow-y:auto;padding:24px}
@media(min-width:640px){.gz-modal-box{border-radius:var(--radius-lg)}}
.gz-modal.open .gz-modal-box{transform:translateY(0)}
.gz-modal-title{font-size:18px;font-weight:800;margin-bottom:6px}
.gz-modal-sub{font-family:var(--mono);font-size:11px;color:var(--ink-muted);letter-spacing:.05em;margin-bottom:18px}
.gz-success{padding:40px 20px;text-align:center}
.gz-success-icon{width:72px;height:72px;border-radius:50%;background:var(--cyan-glow);border:2px solid var(--cyan);color:var(--cyan);display:flex;align-items:center;justify-content:center;margin:0 auto 22px;font-size:28px;font-family:var(--mono);font-weight:900}
.gz-success-title{font-size:24px;font-weight:800;margin-bottom:10px}
.gz-success-sub{font-size:13px;color:var(--ink-mid);line-height:1.7;margin-bottom:24px}
.gz-toast{position:fixed;bottom:150px;left:50%;transform:translateX(-50%) translateY(20px);background:var(--cyan);color:var(--navy);padding:11px 22px;border-radius:24px;font-family:var(--mono);font-size:11px;font-weight:800;z-index:700;opacity:0;transition:.3s;pointer-events:none;white-space:nowrap;max-width:92vw}
.gz-toast.show{opacity:1;transform:translateX(-50%) translateY(0)}
.gz-empty{text-align:center;padding:44px 20px;color:var(--ink-muted)}
.gz-empty-icon{font-family:var(--mono);font-size:36px;font-weight:900;color:var(--navy-line);margin-bottom:12px}
.gz-empty-title{font-size:14px;font-weight:700;color:var(--ink);margin-bottom:6px}
.gz-empty-desc{font-size:11px;font-family:var(--mono)}
.gz-alert{padding:12px 16px;border-radius:var(--radius);font-size:12px;font-weight:500;display:flex;gap:10px;margin-bottom:12px;line-height:1.6;border:1px solid}
.gz-alert.info{background:rgba(59,130,246,.1);border-color:rgba(59,130,246,.3);color:#93c5fd}
.gz-alert.success{background:rgba(34,197,94,.1);border-color:rgba(34,197,94,.3);color:#86efac}
.gz-chat-fab{position:fixed;bottom:150px;right:18px;width:54px;height:54px;border-radius:14px;background:var(--cyan);color:var(--navy);display:flex;align-items:center;justify-content:center;box-shadow:0 8px 24px rgba(0,217,224,.3);z-index:250}
.gz-chat{position:fixed;bottom:150px;right:18px;width:340px;max-width:calc(100vw - 36px);height:480px;max-height:72vh;background:var(--navy-soft);border:1px solid var(--cyan);border-radius:var(--radius-lg);z-index:260;display:flex;flex-direction:column;transform:translateY(20px);opacity:0;visibility:hidden;transition:.25s;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,.5)}
.gz-chat.open{transform:translateY(0);opacity:1;visibility:visible}
.gz-chat-head{background:var(--navy-card);padding:14px 16px;display:flex;align-items:center;gap:10px;border-bottom:1px solid var(--navy-line)}
.gz-chat-avatar{width:36px;height:36px;border-radius:8px;background:var(--cyan);color:var(--navy);display:flex;align-items:center;justify-content:center;font-family:var(--mono);font-weight:800;font-size:12px}
.gz-chat-info{flex:1}
.gz-chat-name{font-size:12px;font-weight:700}
.gz-chat-status{font-family:var(--mono);font-size:10px;color:var(--green);display:flex;align-items:center;gap:4px;margin-top:2px}
.gz-chat-live{width:6px;height:6px;background:var(--green);border-radius:50%}
.gz-chat-body{flex:1;overflow-y:auto;padding:14px;display:flex;flex-direction:column;gap:10px;background:var(--navy)}
.gz-chat-msg{max-width:82%;padding:10px 14px;border-radius:12px;font-size:12px;line-height:1.55}
.gz-chat-msg.bot{background:var(--navy-card);color:var(--ink);border:1px solid var(--navy-line);align-self:flex-start}
.gz-chat-msg.user{background:var(--cyan);color:var(--navy);align-self:flex-end;font-weight:600}
.gz-chat-time{font-family:var(--mono);font-size:9px;opacity:.5;margin-top:4px}
.gz-chat-input-row{border-top:1px solid var(--navy-line);padding:10px;display:flex;gap:8px;background:var(--navy-soft)}
.gz-chat-input{flex:1;padding:10px 14px;background:var(--navy-card);border:1px solid var(--navy-line);border-radius:20px;font-size:12px;color:var(--ink)}
.gz-chat-send{width:38px;height:38px;border-radius:50%;background:var(--cyan);color:var(--navy);display:flex;align-items:center;justify-content:center}
.gz-search-overlay{position:fixed;inset:0;background:var(--navy);z-index:600;transform:translateY(-100%);transition:.3s;overflow-y:auto}
.gz-search-overlay.open{transform:translateY(0)}
.gz-search-head{background:var(--navy-soft);padding:16px 20px;display:flex;gap:12px;align-items:center;border-bottom:1px solid var(--navy-line);position:sticky;top:0;z-index:10}
.gz-search-input{flex:1;padding:12px 16px;background:var(--navy-card);border:1px solid var(--navy-line);border-radius:8px;font-size:14px;color:var(--ink);font-family:var(--mono)}
.gz-search-cancel{font-family:var(--mono);font-size:11px;font-weight:800;color:var(--cyan);text-transform:uppercase}
.gz-search-body{padding:20px}
.gz-search-tag-row{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:22px}
.gz-search-tag{padding:8px 14px;background:var(--navy-card);border:1px solid var(--navy-line);border-radius:20px;font-size:12px;font-weight:600;color:var(--ink-mid);font-family:var(--mono)}
.gz-search-result{display:flex;gap:12px;padding:12px 0;border-bottom:1px solid var(--navy-line);cursor:pointer;align-items:center}
.gz-search-result-img{width:56px;height:56px;background:var(--navy-card);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:26px;flex-shrink:0}
.gz-search-result-brand{font-family:var(--mono);font-size:10px;font-weight:800;color:var(--cyan);text-transform:uppercase}
.gz-search-result-name{font-size:13px;font-weight:600;margin-top:3px}
.gz-search-result-price{font-size:13px;font-weight:800;color:var(--cyan);text-align:right}
::-webkit-scrollbar{width:8px;height:8px}
::-webkit-scrollbar-track{background:var(--navy)}
::-webkit-scrollbar-thumb{background:var(--navy-line);border-radius:4px}
::-webkit-scrollbar-thumb:hover{background:var(--cyan)}
</style>
</head>
<body>

<!-- =================== FLOATING MODE SWITCHER (ALWAYS VISIBLE) =================== -->
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
  <div class="cz-band">Cicilan 0% 3/6/12 bulan • Trade-in gadget lama • Garansi resmi 1 tahun</div>

  <header class="cz-header">
    <div class="cz-head">
      <div class="cz-logo">
        <div class="cz-logo-mark">GZ</div>
        <div>Gadget<span>Zone</span></div>
      </div>
      <div class="cz-head-right">
        <button class="cz-admin-entry" onclick="setMode('admin')">
          <span class="mono">◈</span> Admin
        </button>
        <div class="cz-icons">
          <button class="cz-icon" onclick="openSearch()" aria-label="Cari">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4"/></svg>
          </button>
          <button class="cz-icon" onclick="toggleOrders()" aria-label="Pesanan">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </button>
          <button class="cz-icon" onclick="toggleWishlist()" aria-label="Wishlist">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            <span class="cz-badge" id="wishBadge" style="display:none">0</span>
          </button>
          <button class="cz-icon" onclick="toggleCart()" aria-label="Keranjang">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
            <span class="cz-badge" id="cartBadge" style="display:none">0</span>
          </button>
        </div>
      </div>
    </div>
    <div class="cz-search" onclick="openSearch()">
      <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4"/></svg>
      <span class="mono" style="color:var(--cyan)">⌘K</span>
      <span>Cari laptop, HP, kamera...</span>
    </div>
    <div class="cz-cats" id="catNav"></div>
  </header>

  <section class="cz-hero">
    <div class="cz-hero-tag">Tech Week 2026</div>
    <h1 class="cz-hero-title">Gadget terbaru,<br>harga <em>terbaik</em>.</h1>
    <p class="cz-hero-sub">Kurasi produk elektronik original dengan garansi resmi. Cicilan 0% untuk semua kartu kredit.</p>
    <div class="cz-hero-btns">
      <button class="cz-btn-hero primary" onclick="document.getElementById('katalog').scrollIntoView({behavior:'smooth'})">Belanja Sekarang</button>
      <button class="cz-btn-hero ghost" onclick="setMode('admin')">Buka Admin Panel →</button>
    </div>
  </section>

  <div class="cz-stats">
    <div class="cz-stat"><div class="cz-stat-icon">✓</div><div class="cz-stat-title">100% Original</div><div class="cz-stat-sub mono">garansi resmi</div></div>
    <div class="cz-stat"><div class="cz-stat-icon">⚡</div><div class="cz-stat-title">Kirim Cepat</div><div class="cz-stat-sub mono">same-day JABODETABEK</div></div>
    <div class="cz-stat"><div class="cz-stat-icon">↺</div><div class="cz-stat-title">Trade-in</div><div class="cz-stat-sub mono">tukar gadget lama</div></div>
  </div>

  <section class="cz-section" id="katalog">
    <div class="cz-section-head">
      <div>
        <div class="cz-section-eyebrow">// katalog</div>
        <h2 class="cz-section-title" id="sectionTitle">Produk Terbaru</h2>
      </div>
      <button class="cz-section-link" onclick="loadMore()">Lihat semua →</button>
    </div>
    <div class="cz-sort">
      <button class="cz-sort-chip active" data-sort="new">Terbaru</button>
      <button class="cz-sort-chip" data-sort="popular">Populer</button>
      <button class="cz-sort-chip" data-sort="cheap">Termurah</button>
      <button class="cz-sort-chip" data-sort="expensive">Termahal</button>
      <button class="cz-sort-chip" data-sort="discount">Diskon</button>
      <button class="cz-sort-chip" data-sort="rating">Rating</button>
    </div>
    <div class="cz-grid" id="productGrid"></div>
  </section>
</div>

<!-- =================== ADMIN =================== -->
<div id="adminApp" class="gz-admin hidden">
  <aside class="gz-sidebar collapsed" id="gzSidebar">
    <div class="gz-sb-brand">
      <div class="gz-sb-logo"><div class="gz-sb-logo-mark">GZ</div><div>Gadget<span>Zone</span></div></div>
      <div class="gz-sb-sub">// backoffice v2.0</div>
    </div>
    <div class="gz-sb-user">
      <div class="gz-sb-avatar">AR</div>
      <div class="gz-sb-user-info">
        <div class="gz-sb-user-name">Arif Rahman</div>
        <div class="gz-sb-user-role">// manager</div>
      </div>
    </div>
    <nav class="gz-sb-nav">
      <div class="gz-sb-group">
        <div class="gz-sb-group-label">Operasional</div>
        <button class="gz-sb-item active" data-tab="dashboard" onclick="switchAdminTab('dashboard')">
          <span class="gz-sb-icon">◈</span> Dashboard
        </button>
        <button class="gz-sb-item" data-tab="orders" onclick="switchAdminTab('orders')">
          <span class="gz-sb-icon">▤</span> Pesanan
          <span class="gz-sb-badge" id="gzOrderBadge">0</span>
        </button>
        <button class="gz-sb-item" data-tab="returns" onclick="switchAdminTab('returns')">
          <span class="gz-sb-icon">↺</span> Retur
          <span class="gz-sb-badge" id="gzReturnBadge">0</span>
        </button>
        <button class="gz-sb-item" data-tab="service" onclick="switchAdminTab('service')">
          <span class="gz-sb-icon">⚙</span> Service Center
        </button>
      </div>
      <div class="gz-sb-group">
        <div class="gz-sb-group-label">Katalog</div>
        <button class="gz-sb-item" data-tab="products" onclick="switchAdminTab('products')">
          <span class="gz-sb-icon">□</span> Produk
        </button>
        <button class="gz-sb-item" data-tab="inventory" onclick="switchAdminTab('inventory')">
          <span class="gz-sb-icon">▥</span> Stok & Varian
        </button>
        <button class="gz-sb-item" data-tab="brands" onclick="switchAdminTab('brands')">
          <span class="gz-sb-icon">◆</span> Brand
        </button>
      </div>
      <div class="gz-sb-group">
        <div class="gz-sb-group-label">Pengguna</div>
        <button class="gz-sb-item" data-tab="customers" onclick="switchAdminTab('customers')">
          <span class="gz-sb-icon">◐</span> Pelanggan
        </button>
        <button class="gz-sb-item" data-tab="staff" onclick="switchAdminTab('staff')">
          <span class="gz-sb-icon">◑</span> Tim / Staff
        </button>
        <button class="gz-sb-item" data-tab="roles" onclick="switchAdminTab('roles')">
          <span class="gz-sb-icon">◭</span> Role & Akses
        </button>
      </div>
      <div class="gz-sb-group">
        <div class="gz-sb-group-label">Keuangan</div>
        <button class="gz-sb-item" data-tab="vouchers" onclick="switchAdminTab('vouchers')">
          <span class="gz-sb-icon">◇</span> Voucher
        </button>
        <button class="gz-sb-item" data-tab="reports" onclick="switchAdminTab('reports')">
          <span class="gz-sb-icon">◪</span> Laporan
        </button>
      </div>
      <div class="gz-sb-group">
        <div class="gz-sb-group-label">Sistem</div>
        <button class="gz-sb-item" data-tab="audit" onclick="switchAdminTab('audit')">
          <span class="gz-sb-icon">◫</span> Audit Log
        </button>
        <button class="gz-sb-item" data-tab="settings" onclick="switchAdminTab('settings')">
          <span class="gz-sb-icon">⚙</span> Pengaturan
        </button>
      </div>
    </nav>
    <div class="gz-sb-footer">
      <button class="gz-sb-switch" onclick="setMode('customer')">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
        Lihat Toko
      </button>
    </div>
  </aside>
  <div class="gz-sb-overlay" id="gzSidebarOverlay" onclick="toggleGzSidebar()"></div>

  <main class="gz-main">
    <div class="gz-topbar">
      <button class="gz-menu-btn" onclick="toggleGzSidebar()" aria-label="Menu">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
      <div>
        <div class="gz-breadcrumb" id="gzBreadcrumb">
          <span class="crumb">Backoffice</span>
          <span class="sep">/</span>
          <span class="crumb active">Dashboard</span>
        </div>
        <div class="gz-page-title" id="gzPageTitle" style="margin-top:4px">Dashboard</div>
        <div class="gz-page-sub" id="gzPageSub">// overview</div>
      </div>
      <div class="gz-top-right">
        <button class="gz-switch-customer" onclick="setMode('customer')">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
          Lihat Toko
        </button>
        <button class="gz-icon-btn" onclick="showToast('Notifikasi')" aria-label="Notifikasi">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
        </button>
      </div>
    </div>
    <div class="gz-content" id="gzContent"></div>
  </main>
</div>

<!-- BOTTOM NAV -->
<nav class="cz-nav" id="bottomNav">
  <button class="cz-nav-item active" data-nav="home" onclick="navTo('home')">
    <span class="nav-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg></span>
    Home
  </button>
  <button class="cz-nav-item" data-nav="shop" onclick="navTo('shop')">
    <span class="nav-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/></svg></span>
    Katalog
  </button>
  <button class="cz-nav-item" data-nav="wish" onclick="toggleWishlist()">
    <span class="nav-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
    Wishlist
    <span class="cz-badge" id="wishBadge2" style="display:none">0</span>
  </button>
  <button class="cz-nav-item" data-nav="cart" onclick="toggleCart()">
    <span class="nav-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg></span>
    Keranjang
    <span class="cz-badge" id="cartBadge2" style="display:none">0</span>
  </button>
  <button class="cz-nav-item" data-nav="admin" onclick="setMode('admin')">
    <span class="nav-icon"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg></span>
    Admin
  </button>
</nav>

<!-- CHAT -->
<button class="gz-chat-fab" id="gzChatFab" onclick="toggleChat()" aria-label="Chat">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
</button>
<div class="gz-chat" id="gzChat">
  <div class="gz-chat-head">
    <div class="gz-chat-avatar">CS</div>
    <div class="gz-chat-info">
      <div class="gz-chat-name">GadgetZone Support</div>
      <div class="gz-chat-status"><span class="gz-chat-live"></span>online • avg 30 detik</div>
    </div>
    <button onclick="toggleChat()" style="color:var(--ink-mid)">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="gz-chat-body" id="gzChatBody"></div>
  <div class="gz-chat-input-row">
    <input class="gz-chat-input" id="gzChatInput" placeholder="Tanya soal spesifikasi..." onkeydown="if(event.key==='Enter')sendChat()">
    <button class="gz-chat-send" onclick="sendChat()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
    </button>
  </div>
</div>

<!-- CART -->
<div class="cz-overlay" id="czCartOverlay" onclick="toggleCart()"></div>
<aside class="cz-drawer" id="czCartDrawer">
  <div class="cz-drawer-handle"></div>
  <div class="cz-drawer-head">
    <div class="cz-drawer-title">Keranjang <small id="cartCountLabel">0 item</small></div>
    <button class="cz-drawer-close" onclick="toggleCart()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="cz-drawer-body" id="cartBody"></div>
  <div class="cz-drawer-foot" id="cartFoot" style="display:none">
    <div class="cz-sum-row"><span>Subtotal</span><span class="mono" id="subtotal">Rp0</span></div>
    <div class="cz-sum-row"><span>Ongkir</span><span class="mono" id="ongkir">Rp0</span></div>
    <div class="cz-sum-row"><span>Diskon</span><span class="mono" id="diskon" style="color:var(--green)">-Rp0</span></div>
    <div class="cz-sum-row total"><span>Total</span><span class="mono" id="total">Rp0</span></div>
    <button class="cz-btn-primary" onclick="openCheckout()">Checkout Sekarang</button>
  </div>
</aside>

<!-- WISHLIST -->
<div class="cz-overlay" id="czWishOverlay" onclick="toggleWishlist()"></div>
<aside class="cz-drawer" id="czWishDrawer">
  <div class="cz-drawer-handle"></div>
  <div class="cz-drawer-head">
    <div class="cz-drawer-title">Wishlist <small id="wishCountLabel">0 item</small></div>
    <button class="cz-drawer-close" onclick="toggleWishlist()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="cz-drawer-body" id="wishBody"></div>
</aside>

<!-- ORDERS -->
<div class="cz-overlay" id="czOrdersOverlay" onclick="toggleOrders()"></div>
<aside class="cz-drawer" id="czOrdersDrawer">
  <div class="cz-drawer-handle"></div>
  <div class="cz-drawer-head">
    <div class="cz-drawer-title">Pesanan <small>riwayat transaksi</small></div>
    <button class="cz-drawer-close" onclick="toggleOrders()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="cz-drawer-body" id="ordersBody"></div>
</aside>

<!-- SEARCH -->
<div class="gz-search-overlay" id="gzSearchOverlay">
  <div class="gz-search-head">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--cyan)" stroke-width="2.5"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4"/></svg>
    <input class="gz-search-input" id="gzSearchInput" placeholder="Cari produk, brand..." oninput="handleSearch(this.value)">
    <button class="gz-search-cancel" onclick="closeSearch()">ESC</button>
  </div>
  <div class="gz-search-body">
    <div class="gz-form-label">// pencarian populer</div>
    <div class="gz-search-tag-row">
      <button class="gz-search-tag" onclick="quickSearch('laptop')">laptop</button>
      <button class="gz-search-tag" onclick="quickSearch('iphone')">iphone</button>
      <button class="gz-search-tag" onclick="quickSearch('headphone')">headphone</button>
      <button class="gz-search-tag" onclick="quickSearch('kamera')">kamera</button>
      <button class="gz-search-tag" onclick="quickSearch('samsung')">samsung</button>
      <button class="gz-search-tag" onclick="quickSearch('monitor')">monitor</button>
    </div>
    <div id="searchResults"></div>
  </div>
</div>

<!-- PDP -->
<div class="cz-pdp" id="pdpModal"></div>

<!-- CHECKOUT SUCCESS -->
<div class="gz-modal" id="checkoutModal">
  <div class="gz-modal-box">
    <div class="gz-success">
      <div class="gz-success-icon">✓</div>
      <h2 class="gz-success-title">Pesanan Dikonfirmasi</h2>
      <p class="gz-success-sub">Order <b class="mono" id="orderIdDisplay" style="color:var(--cyan)">GZ-2026-XXXX</b> sudah diterima.<br>Estimasi pengiriman 1-3 hari kerja.</p>
      <button class="cz-btn-primary" onclick="closeCheckout();toggleOrders()">Lacak Pesanan</button>
      <button class="cz-btn-ghost" onclick="closeCheckout()">Kembali Belanja</button>
    </div>
  </div>
</div>

<!-- PRODUCT MODAL -->
<div class="gz-modal" id="productModal">
  <div class="gz-modal-box">
    <div class="gz-modal-title" id="productModalTitle">Produk Baru</div>
    <div class="gz-modal-sub">// isi detail produk</div>
    <div class="gz-form-group"><label class="gz-form-label">Nama Produk</label><input class="gz-form-input" id="pmName"></div>
    <div class="gz-form-row">
      <div class="gz-form-group"><label class="gz-form-label">Brand</label><input class="gz-form-input" id="pmBrand"></div>
      <div class="gz-form-group"><label class="gz-form-label">Kategori</label><select class="gz-form-input" id="pmCat"></select></div>
    </div>
    <div class="gz-form-row">
      <div class="gz-form-group"><label class="gz-form-label">Harga</label><input class="gz-form-input" id="pmPrice" type="number"></div>
      <div class="gz-form-group"><label class="gz-form-label">Harga Coret</label><input class="gz-form-input" id="pmOld" type="number"></div>
    </div>
    <div class="gz-form-group"><label class="gz-form-label">Spec Singkat</label><input class="gz-form-input" id="pmSpec"></div>
    <div class="gz-form-group"><label class="gz-form-label">Varian (koma)</label><input class="gz-form-input" id="pmVariants" placeholder="8/128GB, 8/256GB"></div>
    <button class="cz-btn-primary" onclick="saveProduct()">Simpan Produk</button>
    <button class="cz-btn-ghost" onclick="closeProductModal()">Batal</button>
  </div>
</div>

<!-- STAFF MODAL -->
<div class="gz-modal" id="staffModal">
  <div class="gz-modal-box">
    <div class="gz-modal-title" id="staffModalTitle">Tambah Staff</div>
    <div class="gz-modal-sub">// undang anggota tim</div>
    <div class="gz-form-group"><label class="gz-form-label">Nama</label><input class="gz-form-input" id="sfName"></div>
    <div class="gz-form-group"><label class="gz-form-label">Email</label><input class="gz-form-input" id="sfEmail"></div>
    <div class="gz-form-group"><label class="gz-form-label">Role</label>
      <select class="gz-form-input" id="sfRole">
        <option>Manager</option><option>Kasir</option><option>Teknisi</option>
        <option>Customer Service</option><option>Kurir</option><option>Warehouse</option>
      </select>
    </div>
    <button class="cz-btn-primary" onclick="saveStaff()">Simpan</button>
    <button class="cz-btn-ghost" onclick="closeStaffModal()">Batal</button>
  </div>
</div>

<div class="gz-toast" id="toast"></div>

<script>
/* ==================== DATA (sama seperti sebelumnya) ==================== */
const CATEGORIES = [
  {id:'all',name:'Semua'},{id:'smartphone',name:'Smartphone'},{id:'laptop',name:'Laptop'},
  {id:'tablet',name:'Tablet'},{id:'audio',name:'Audio'},{id:'kamera',name:'Kamera'},
  {id:'wearable',name:'Wearable'},{id:'gaming',name:'Gaming'},{id:'monitor',name:'Monitor'},
  {id:'aksesoris',name:'Aksesoris'}
];

let PRODUCTS = [
  {id:1,name:'MacBook Pro 14" M3 Pro',brand:'APPLE',cat:'laptop',price:31999000,old:34999000,emoji:'💻',bg:'#1a1f2e',rating:4.9,sold:342,isNew:true,isSale:true,stock:24,spec:'M3 Pro · 18GB · 512GB SSD',variants:{'18GB/512GB':12,'18GB/1TB':8,'36GB/1TB':4},desc:'Chip M3 Pro dengan performa revolusioner.',specs:{'Chip':'Apple M3 Pro','RAM':'18GB','Storage':'512GB SSD','Garansi':'1 tahun'},reviews:[{name:'Rian K.',rating:5,date:'2 hari lalu',text:'Performa gila.',variant:'18GB/512GB'}]},
  {id:2,name:'iPhone 15 Pro Max 256GB',brand:'APPLE',cat:'smartphone',price:21999000,old:24999000,emoji:'📱',bg:'#2a2d3a',rating:4.9,sold:1247,isNew:false,isSale:true,stock:56,spec:'A17 Pro · 256GB · Titanium',variants:{'Natural Titanium':15,'Black Titanium':18,'Blue Titanium':14,'White Titanium':9},desc:'Titanium aerospace-grade.',specs:{'Chip':'A17 Pro','Storage':'256GB','Garansi':'1 tahun'},reviews:[{name:'Bagus W.',rating:5,date:'3 hari lalu',text:'Kamera amazing.',variant:'Natural'}]},
  {id:3,name:'Samsung Galaxy S24 Ultra',brand:'SAMSUNG',cat:'smartphone',price:19499000,old:22999000,emoji:'📱',bg:'#2e2a2a',rating:4.8,sold:876,isNew:true,isSale:true,stock:42,spec:'Snapdragon 8 Gen 3 · 12GB · 512GB',variants:{'Titanium Black':12,'Titanium Gray':10,'Titanium Violet':11,'Titanium Yellow':9},desc:'Galaxy AI dengan S Pen.',specs:{'Chip':'Snapdragon 8 Gen 3','RAM':'12GB','Garansi':'1 tahun'},reviews:[{name:'Ahmad F.',rating:5,date:'1 hari lalu',text:'S Pen berguna.',variant:'Titanium Black'}]},
  {id:4,name:'Sony WH-1000XM5',brand:'SONY',cat:'audio',price:4499000,old:5499000,emoji:'🎧',bg:'#1e1e26',rating:4.9,sold:2103,isNew:false,isSale:true,stock:87,spec:'Noise Cancelling · 30 jam',variants:{'Black':45,'Silver':28,'Midnight Blue':14},desc:'ANC terbaik di kelasnya.',specs:{'Driver':'30mm','Baterai':'30 jam','Garansi':'1 tahun'},reviews:[{name:'Wulan S.',rating:5,date:'4 hari lalu',text:'ANC bikin sunyi.',variant:'Black'}]},
  {id:5,name:'iPad Air M2 11" 256GB',brand:'APPLE',cat:'tablet',price:11299000,old:0,emoji:'📱',bg:'#2a3346',rating:4.8,sold:534,isNew:true,isSale:false,stock:38,spec:'M2 · 8GB · 256GB · WiFi',variants:{'Space Gray':14,'Blue':10,'Purple':8,'Starlight':6},desc:'Chip M2 dengan Liquid Retina.',specs:{'Chip':'M2','Storage':'256GB','Garansi':'1 tahun'},reviews:[]},
  {id:6,name:'Sony A7 IV Mirrorless',brand:'SONY',cat:'kamera',price:29999000,old:33999000,emoji:'📷',bg:'#1e1e26',rating:4.9,sold:187,isNew:false,isSale:true,stock:15,spec:'33MP Full-Frame · 4K60',variants:{'Body Only':8,'+ Kit 28-70mm':7},desc:'Full-frame 33MP.',specs:{'Sensor':'33MP','Video':'4K60','Garansi':'1 tahun'},reviews:[]},
  {id:7,name:'Apple Watch Series 9',brand:'APPLE',cat:'wearable',price:6499000,old:7299000,emoji:'⌚',bg:'#2a2a3a',rating:4.8,sold:1632,isNew:false,isSale:true,stock:78,spec:'S9 SiP · 45mm · GPS',variants:{'41mm Midnight':20,'45mm Midnight':22,'41mm Silver':18,'45mm Silver':18},desc:'Chip S9 dengan Double Tap.',specs:{'Chip':'S9','Baterai':'18 jam','Garansi':'1 tahun'},reviews:[]},
  {id:8,name:'PlayStation 5 Slim Disc',brand:'SONY',cat:'gaming',price:8299000,old:8999000,emoji:'🎮',bg:'#1e2438',rating:4.9,sold:2841,isNew:false,isSale:true,stock:64,spec:'825GB SSD · 4K 120Hz',variants:{'Disc Edition':40,'Digital Edition':24},desc:'PS5 Slim dengan drive disk.',specs:{'Storage':'825GB SSD','Output':'4K 120Hz','Garansi':'1 tahun'},reviews:[]},
  {id:9,name:'LG UltraGear 27" 240Hz',brand:'LG',cat:'monitor',price:5499000,old:6499000,emoji:'🖥',bg:'#1a2436',rating:4.7,sold:432,isNew:false,isSale:true,stock:52,spec:'QHD · 240Hz · 1ms · IPS',variants:{'27GR95QE':30,'27GP850':22},desc:'Monitor gaming QHD 240Hz.',specs:{'Panel':'27" IPS','Refresh':'240Hz','Garansi':'3 tahun'},reviews:[]},
  {id:10,name:'AirPods Pro 2 USB-C',brand:'APPLE',cat:'audio',price:3499000,old:3999000,emoji:'🎧',bg:'#2a2d3a',rating:4.8,sold:3214,isNew:false,isSale:true,stock:120,spec:'ANC · Adaptive Audio · USB-C',variants:{'Standard':120},desc:'AirPods Pro dengan Adaptive Audio.',specs:{'Chip':'H2','Baterai':'6 jam','Garansi':'1 tahun'},reviews:[{name:'Nadia K.',rating:5,date:'1 hari lalu',text:'ANC lebih bagus.',variant:'Standard'}]},
  {id:11,name:'Logitech MX Master 3S',brand:'LOGITECH',cat:'aksesoris',price:1599000,old:1899000,emoji:'🖱',bg:'#1e1e26',rating:4.9,sold:1876,isNew:false,isSale:true,stock:156,spec:'8000 DPI · Silent · Multi-device',variants:{'Graphite':60,'Pale Gray':48,'Black':48},desc:'Mouse produktivitas wireless.',specs:{'Sensor':'8000 DPI','Baterai':'70 hari','Garansi':'1 tahun'},reviews:[]},
  {id:12,name:'DJI Mini 4 Pro',brand:'DJI',cat:'kamera',price:11999000,old:13999000,emoji:'🚁',bg:'#2a2e3e',rating:4.9,sold:298,isNew:true,isSale:true,stock:28,spec:'4K/60fps · 34 menit',variants:{'Standard':18,'Fly More Combo':10},desc:'Drone ultra-ringan 249g.',specs:{'Berat':'249 g','Video':'4K60','Garansi':'1 tahun'},reviews:[]}
];

let ORDERS = [
  {id:'GZ-2026-1187',customer:'Andi Pratama',total:31999000,status:'pending',time:'10 menit lalu',items:1,payment:'Kartu Kredit (12x)',address:'Jakarta Selatan',items_list:[{name:'MacBook Pro 14" M3 Pro',variant:'18GB/512GB',qty:1}],trackingStep:1},
  {id:'GZ-2026-1186',customer:'Siti Nurhaliza',total:4499000,status:'processing',time:'25 menit lalu',items:1,payment:'Transfer Bank',address:'Jakarta Pusat',items_list:[{name:'Sony WH-1000XM5',variant:'Black',qty:1}],trackingStep:2},
  {id:'GZ-2026-1185',customer:'Budi Hartono',total:23998000,status:'shipped',time:'1 jam lalu',items:2,payment:'Kartu Kredit (6x)',address:'Depok',items_list:[{name:'iPhone 15 Pro Max',variant:'Natural Titanium',qty:1},{name:'AirPods Pro 2',variant:'Standard',qty:1}],trackingStep:3,resi:'JNE-TECH-9876543210'},
  {id:'GZ-2026-1184',customer:'Dewi Lestari',total:6499000,status:'completed',time:'3 jam lalu',items:1,payment:'E-Wallet',address:'Tangerang',items_list:[{name:'Apple Watch Series 9',variant:'45mm Midnight',qty:1}],trackingStep:4},
  {id:'GZ-2026-1183',customer:'Rizki Aditya',total:8299000,status:'completed',time:'5 jam lalu',items:1,payment:'Transfer Bank',address:'Bekasi',items_list:[{name:'PlayStation 5 Slim',variant:'Disc Edition',qty:1}],trackingStep:4},
  {id:'GZ-2026-1182',customer:'Maya Sari',total:1599000,status:'cancelled',time:'8 jam lalu',items:1,payment:'COD',address:'Jakarta Barat',items_list:[{name:'Logitech MX Master 3S',variant:'Graphite',qty:1}],trackingStep:1}
];

let RETURNS = [
  {id:'RT-GZ-001',orderId:'GZ-2026-1180',customer:'Fitri A.',product:'iPad Air M2',reason:'Produk cacat',status:'pending',date:'2 hari lalu',amount:11299000,note:'Dead pixel'},
  {id:'RT-GZ-002',orderId:'GZ-2026-1178',customer:'Rina S.',product:'Sony WH-1000XM5',reason:'Tidak sesuai',status:'approved',date:'5 hari lalu',amount:4499000,note:'Warna beda'},
  {id:'RT-GZ-003',orderId:'GZ-2026-1175',customer:'Adit W.',product:'Logitech MX Master',reason:'Berubah pikiran',status:'refunded',date:'1 minggu lalu',amount:1599000,note:'Refund done'}
];

let SERVICE_TICKETS = [
  {id:'SV-001',customer:'Andi P.',device:'MacBook Pro 13" 2020',issue:'Keyboard tidak berfungsi',status:'in_progress',technician:'Joko S.',eta:'2 hari',date:'Kemarin',steps:['Diterima','Diagnosa','Perbaikan','Selesai'],currentStep:2},
  {id:'SV-002',customer:'Rina W.',device:'iPhone 12 Pro',issue:'Ganti LCD',status:'ready',technician:'Budi T.',eta:'Selesai',date:'3 hari lalu',steps:['Diterima','Diagnosa','Perbaikan','Selesai'],currentStep:4},
  {id:'SV-003',customer:'Dian K.',device:'PS5 Slim',issue:'Overheat',status:'pending',technician:'-',eta:'-',date:'Hari ini',steps:['Diterima','Diagnosa','Perbaikan','Selesai'],currentStep:1}
];

let STAFF = [
  {id:1,name:'Arif Rahman',email:'arif@gadgetzone.id',role:'Manager',status:'active',lastLogin:'Hari ini 08:32'},
  {id:2,name:'Joko Susilo',email:'joko@gadgetzone.id',role:'Teknisi',status:'active',lastLogin:'Hari ini 09:15'},
  {id:3,name:'Budi Tarno',email:'budi@gadgetzone.id',role:'Teknisi',status:'active',lastLogin:'Kemarin 16:44'},
  {id:4,name:'Sari Indah',email:'sari@gadgetzone.id',role:'Customer Service',status:'active',lastLogin:'Hari ini 08:01'},
  {id:5,name:'Dedi Kurniawan',email:'dedi@gadgetzone.id',role:'Kurir',status:'active',lastLogin:'Hari ini 07:30'},
  {id:6,name:'Putri Amelia',email:'putri@gadgetzone.id',role:'Warehouse',status:'inactive',lastLogin:'3 hari lalu'}
];

let CUSTOMERS = [
  {id:1,name:'Andi Pratama',email:'andi@email.com',orders:14,spent:124500000,joined:'Jan 2024',tier:'Platinum',city:'Jakarta'},
  {id:2,name:'Siti Nurhaliza',email:'siti@email.com',orders:8,spent:32000000,joined:'Feb 2024',tier:'Gold',city:'Jakarta'},
  {id:3,name:'Budi Hartono',email:'budi@email.com',orders:22,spent:182000000,joined:'Nov 2023',tier:'Platinum',city:'Depok'},
  {id:4,name:'Dewi Lestari',email:'dewi@email.com',orders:6,spent:18500000,joined:'Mar 2024',tier:'Silver',city:'Tangerang'},
  {id:5,name:'Rizki Aditya',email:'rizki@email.com',orders:31,spent:238000000,joined:'Sep 2023',tier:'Platinum',city:'Bekasi'}
];

let VOUCHERS = [
  {code:'TECHNEW30',type:'Persen',value:'30%',min:5000000,quota:200,used:142,status:'active'},
  {code:'FREESHIP10JT',type:'Ongkir',value:'Gratis',min:10000000,quota:500,used:287,status:'active'},
  {code:'TRADEIN2JT',type:'Nominal',value:'Rp2.000.000',min:15000000,quota:100,used:78,status:'active'},
  {code:'FLASHTECH',type:'Nominal',value:'Rp500.000',min:3000000,quota:150,used:150,status:'expired'}
];

let AUDIT_LOG = [
  {time:'08:32',user:'arif',action:'Login ke backoffice',target:'session',type:'auth'},
  {time:'08:35',user:'arif',action:'Update harga produk',target:'MacBook Pro 14"',type:'update'},
  {time:'08:42',user:'sari',action:'Approve retur',target:'RT-GZ-002',type:'update'},
  {time:'09:15',user:'joko',action:'Update status service',target:'SV-001',type:'update'},
  {time:'09:23',user:'arif',action:'Tambah produk baru',target:'Samsung Galaxy Watch 6',type:'create'},
  {time:'09:45',user:'sari',action:'Refund pembayaran',target:'GZ-2026-1178',type:'update'},
  {time:'10:15',user:'budi',action:'Update stok varian',target:'MacBook Pro',type:'update'},
  {time:'10:44',user:'arif',action:'Export laporan penjualan',target:'report.october',type:'export'}
];

const ROLES = [
  {name:'Manager',perms:['dashboard','orders','returns','service','products','inventory','brands','customers','staff','vouchers','reports','audit','settings']},
  {name:'Teknisi',perms:['dashboard','service','inventory']},
  {name:'Kasir',perms:['dashboard','orders','customers','vouchers']},
  {name:'Customer Service',perms:['dashboard','orders','returns','customers']},
  {name:'Kurir',perms:['dashboard','orders']},
  {name:'Warehouse',perms:['dashboard','products','inventory','brands']}
];

const PAGE_META = {
  dashboard:{title:'Dashboard',sub:'// overview performa'},
  orders:{title:'Pesanan',sub:'// kelola order masuk'},
  returns:{title:'Retur & Klaim',sub:'// pengembalian produk'},
  service:{title:'Service Center',sub:'// tiket perbaikan'},
  products:{title:'Produk',sub:'// katalog SKU'},
  inventory:{title:'Stok & Varian',sub:'// matriks SKU'},
  brands:{title:'Brand',sub:'// partner resmi'},
  customers:{title:'Pelanggan',sub:'// database pelanggan'},
  staff:{title:'Tim / Staff',sub:'// anggota tim internal'},
  roles:{title:'Role & Akses',sub:'// permission matrix'},
  vouchers:{title:'Voucher',sub:'// kode promo'},
  reports:{title:'Laporan',sub:'// analitik & export'},
  audit:{title:'Audit Log',sub:'// riwayat aktivitas'},
  settings:{title:'Pengaturan',sub:'// konfigurasi toko'}
};

/* ==================== STATE ==================== */
let state = {
  mode:'customer',
  cart: JSON.parse(localStorage.getItem('gz5_cart')||'[]'),
  wishlist: JSON.parse(localStorage.getItem('gz5_wish')||'[]'),
  category:'all', sort:'new', search:'', limit:12,
  adminTab:'dashboard', orderFilter:'all',
  currentPDP:null, pdpVariant:null, editingProduct:null, editingStaff:null,
  auditFilter:'all'
};

/* ==================== UTILS ==================== */
const rupiah = n => 'Rp' + Math.round(n).toLocaleString('id-ID');
function showToast(msg){
  const t=document.getElementById('toast');
  t.textContent=msg; t.classList.add('show');
  clearTimeout(t._t); t._t=setTimeout(()=>t.classList.remove('show'),2200);
}
function save(){
  localStorage.setItem('gz5_cart',JSON.stringify(state.cart));
  localStorage.setItem('gz5_wish',JSON.stringify(state.wishlist));
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
  document.getElementById('wishCountLabel').textContent=wish+' item';
  const po=ORDERS.filter(o=>o.status==='pending').length;
  const pr=RETURNS.filter(r=>r.status==='pending').length;
  const ob=document.getElementById('gzOrderBadge'); if(ob) ob.textContent=po;
  const rb=document.getElementById('gzReturnBadge'); if(rb) rb.textContent=pr;
}

/* ==================== MODE SWITCH (TOMBOL UI) ==================== */
function setMode(mode){
  state.mode=mode;
  document.getElementById('customerApp').classList.toggle('hidden',mode!=='customer');
  document.getElementById('adminApp').classList.toggle('hidden',mode!=='admin');
  document.getElementById('bottomNav').classList.toggle('hidden',mode!=='customer');
  document.getElementById('gzChatFab').classList.toggle('hidden',mode!=='customer');
  document.getElementById('gzChat').classList.remove('open');

  // Update floating switch button state
  document.getElementById('msCustomer').classList.toggle('active', mode==='customer');
  document.getElementById('msAdmin').classList.toggle('active', mode==='admin');

  // Close any open drawer
  ['czCartDrawer','czWishDrawer','czOrdersDrawer'].forEach(id=>{
    document.getElementById(id).classList.remove('open');
  });
  ['czCartOverlay','czWishOverlay','czOrdersOverlay'].forEach(id=>{
    document.getElementById(id).classList.remove('open');
  });

  if(mode==='admin') {
    renderAdmin();
    initGzSidebar();
  }
  window.scrollTo(0,0);
  showToast(mode==='admin' ? 'Beralih ke Admin Panel' : 'Beralih ke Toko');
}

function toggleGzSidebar(){
  const sb=document.getElementById('gzSidebar');
  const ov=document.getElementById('gzSidebarOverlay');
  sb.classList.toggle('collapsed');
  if(window.innerWidth<1024){
    if(sb.classList.contains('collapsed')) ov.classList.remove('show');
    else ov.classList.add('show');
  }
}
function initGzSidebar(){
  const sb=document.getElementById('gzSidebar');
  if(window.innerWidth>=1024) sb.classList.remove('collapsed');
  else sb.classList.add('collapsed');
}
window.addEventListener('resize',initGzSidebar);

/* ==================== CUSTOMER FUNCTIONS ==================== */
function renderNavCategories(){
  document.getElementById('catNav').innerHTML=CATEGORIES.map(c=>`
    <button class="cz-cat ${state.category===c.id?'active':''}" onclick="setCategory('${c.id}')">${c.name}</button>
  `).join('');
}
function setCategory(id){
  state.category=id; state.limit=12;
  renderNavCategories(); renderProducts();
  const cat=CATEGORIES.find(c=>c.id===id);
  const el=document.getElementById('sectionTitle');
  if(el) el.textContent = id==='all' ? 'Produk Terbaru' : cat.name;
}
function getFiltered(){
  let arr=[...PRODUCTS];
  if(state.category!=='all') arr=arr.filter(p=>p.cat===state.category);
  if(state.search){
    const q=state.search.toLowerCase();
    arr=arr.filter(p=>p.name.toLowerCase().includes(q)||p.brand.toLowerCase().includes(q)||(p.spec||'').toLowerCase().includes(q));
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
  const installment=Math.round(p.price/12/1000)*1000;
  const tagHtml = p.isNew
    ? `<span class="cz-card-tag">NEW</span>`
    : disc>=20 ? `<span class="cz-card-tag hot">-${disc}%</span>`
    : disc ? `<span class="cz-card-tag">-${disc}%</span>` : '';
  return `
    <div class="cz-card" onclick="openPDP(${p.id})">
      <div class="cz-card-img" style="background:${p.bg}">
        ${tagHtml}
        <span>${p.emoji}</span>
        <button class="cz-card-wish ${wished?'active':''}" onclick="event.stopPropagation();toggleWish(${p.id})">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="${wished?'currentColor':'none'}" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        </button>
      </div>
      <div class="cz-card-body">
        <div class="cz-card-brand">${p.brand}</div>
        <div class="cz-card-name">${p.name}</div>
        <div class="cz-card-spec">${p.spec}</div>
        <div class="cz-card-price">
          <span class="cz-card-price-now">${rupiah(p.price)}</span>
          ${p.old?`<span class="cz-card-price-old">${rupiah(p.old)}</span><span class="cz-card-disc">-${disc}%</span>`:''}
        </div>
        <div class="cz-card-cicil">≈ ${rupiah(installment)}/bln · 12x</div>
        <div class="cz-card-meta">
          <span class="cz-card-rating">★ ${p.rating}</span>
          <span>${p.sold} terjual</span>
        </div>
      </div>
    </div>`;
}
function renderProducts(){
  const arr=getFiltered().slice(0,state.limit);
  const grid=document.getElementById('productGrid');
  if(!arr.length){
    grid.innerHTML=`<div class="gz-empty" style="grid-column:1/-1"><div class="gz-empty-icon">//</div><div class="gz-empty-title">Tidak ada produk</div><div class="gz-empty-desc">Coba kata kunci lain</div></div>`;
    return;
  }
  grid.innerHTML=arr.map(productCard).join('');
}
function loadMore(){ state.limit=PRODUCTS.length; renderProducts(); showToast('Semua produk ditampilkan'); }

/* ==================== PDP ==================== */
function openPDP(id){
  const p=PRODUCTS.find(x=>x.id===id); if(!p) return;
  state.currentPDP=id;
  state.pdpVariant=Object.keys(p.variants)[0];
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
  const curStock=p.variants[state.pdpVariant]||0;
  const totalRev=p.reviews.length;
  const installment=Math.round(p.price/12/1000)*1000;
  const specEntries=Object.entries(p.specs||{});

  document.getElementById('pdpModal').innerHTML=`
    <div class="cz-pdp-top">
      <div class="cz-pdp-top-title">// ${p.brand} · ${p.cat}</div>
      <button class="cz-drawer-close" onclick="closePDP()">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div class="cz-pdp-hero" style="background:${p.bg}">
      <span>${p.emoji}</span>
      ${p.isNew?`<span class="cz-pdp-hero-tag">NEW ARRIVAL</span>`:disc?`<span class="cz-pdp-hero-tag">-${disc}%</span>`:''}
    </div>
    <div class="cz-pdp-body">
      <div class="cz-pdp-brand">${p.brand}</div>
      <h1 class="cz-pdp-name">${p.name}</h1>
      <div class="cz-pdp-price">
        <span class="cz-pdp-price-now">${rupiah(p.price)}</span>
        ${p.old?`<span class="cz-pdp-price-old">${rupiah(p.old)}</span><span class="cz-pdp-disc">-${disc}%</span>`:''}
      </div>
      <div class="cz-pdp-installment">
        Cicilan mulai <b>${rupiah(installment)}/bulan</b> · 12x tanpa bunga
      </div>
      <div class="cz-pdp-rating">
        <span class="star">★</span>
        <b>${p.rating}</b>
        <span class="sep">|</span>
        <span>${totalRev} ulasan</span>
        <span class="sep">|</span>
        <span>${p.sold} terjual</span>
        <span class="sep">|</span>
        <span>Stok: <b>${curStock}</b></span>
      </div>

      <div class="cz-opt">
        <div class="cz-opt-head">
          <span class="cz-opt-label">// varian</span>
          <span class="cz-opt-value">${state.pdpVariant}</span>
        </div>
        <div class="cz-opt-chips">
          ${Object.keys(p.variants).map(v=>{
            const stock=p.variants[v];
            return `<button class="cz-opt-chip ${state.pdpVariant===v?'active':''} ${stock<=0?'disabled':''}" onclick="selectPDPVariant('${v}',${stock})">${v}<small>${stock} unit</small></button>`;
          }).join('')}
        </div>
      </div>

      ${specEntries.length?`
        <div class="cz-specs">
          <div class="cz-specs-title">// spesifikasi</div>
          ${specEntries.map(([k,v])=>`
            <div class="cz-spec-row">
              <span class="cz-spec-key">${k}</span>
              <span class="cz-spec-val">${v}</span>
            </div>`).join('')}
        </div>
      `:''}

      <div class="cz-opt">
        <div class="cz-opt-label" style="margin-bottom:10px">// deskripsi</div>
        <p style="font-size:13px;line-height:1.75;color:var(--ink-mid)">${p.desc}</p>
      </div>

      ${totalRev?`
        <div class="cz-opt">
          <div class="cz-opt-label" style="margin-bottom:12px">// ulasan pembeli</div>
          ${p.reviews.map(rv=>`
            <div style="padding:14px 0;border-bottom:1px solid var(--navy-line)">
              <div style="display:flex;gap:10px;align-items:center;margin-bottom:8px">
                <div style="width:36px;height:36px;background:var(--cyan-glow);color:var(--cyan);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:12px;font-family:var(--mono)">${rv.name.slice(0,2)}</div>
                <div style="flex:1">
                  <div style="font-size:12px;font-weight:700">${rv.name}</div>
                  <div class="mono" style="font-size:10px;color:var(--ink-muted)">${rv.date}</div>
                </div>
              </div>
              <div style="color:var(--amber);font-size:12px;letter-spacing:1px;margin-bottom:6px">${'★'.repeat(rv.rating)}${'☆'.repeat(5-rv.rating)}</div>
              <p style="font-size:12px;color:var(--ink-mid);line-height:1.7">${rv.text}</p>
            </div>`).join('')}
        </div>
      `:''}
    </div>
    <div class="cz-pdp-cta">
      <button class="cz-pdp-wish ${isWished(p.id)?'active':''}" onclick="toggleWish(${p.id});renderPDP()">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="${isWished(p.id)?'currentColor':'none'}" stroke="currentColor" stroke-width="1.8"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
      </button>
      <button class="cz-btn-primary" onclick="addPDPToCart()" ${curStock<=0?'disabled':''}>
        ${curStock<=0?'Stok Habis':'Tambah ke Keranjang'}
      </button>
    </div>
  `;
}
function selectPDPVariant(v,stock){
  if(stock<=0){ showToast('Varian habis'); return; }
  state.pdpVariant=v; renderPDP();
}
function addPDPToCart(){
  const p=PRODUCTS.find(x=>x.id===state.currentPDP);
  const stock=p.variants[state.pdpVariant]||0;
  if(stock<=0){ showToast('Varian habis'); return; }
  const existing=state.cart.find(i=>i.id===p.id&&i.variant===state.pdpVariant);
  if(existing){
    if(existing.qty>=stock){ showToast('Stok tidak cukup'); return; }
    existing.qty++;
  } else {
    state.cart.push({id:p.id,variant:state.pdpVariant,qty:1});
  }
  save(); closePDP(); toggleCart();
  showToast('Ditambahkan ke keranjang');
}

/* ==================== CART ==================== */
function toggleCart(){
  const d=document.getElementById('czCartDrawer'), o=document.getElementById('czCartOverlay');
  if(d.classList.contains('open')){d.classList.remove('open');o.classList.remove('open');}
  else{ renderCart(); d.classList.add('open'); o.classList.add('open'); }
}
function renderCart(){
  const body=document.getElementById('cartBody'), foot=document.getElementById('cartFoot');
  if(!state.cart.length){
    body.innerHTML=`<div class="gz-empty"><div class="gz-empty-icon">//</div><div class="gz-empty-title">Keranjang kosong</div><div class="gz-empty-desc">mulai belanja gadget</div></div>`;
    foot.style.display='none'; return;
  }
  foot.style.display='block';
  let sub=0;
  body.innerHTML=state.cart.map((it,i)=>{
    const p=PRODUCTS.find(x=>x.id===it.id); if(!p) return '';
    sub+=p.price*it.qty;
    return `<div class="cz-cart-item">
      <div class="cz-cart-img" style="background:${p.bg}">${p.emoji}</div>
      <div class="cz-cart-info">
        <div class="cz-cart-brand">${p.brand}</div>
        <div class="cz-cart-name">${p.name}</div>
        <div class="cz-cart-var">${it.variant}</div>
        <div class="cz-cart-price">${rupiah(p.price*it.qty)}</div>
      </div>
      <div class="cz-cart-actions">
        <button class="cz-cart-remove" onclick="removeCartItem(${i})">hapus</button>
        <div class="cz-qty">
          <button onclick="updateCartQty(${i},-1)">−</button>
          <span>${it.qty}</span>
          <button onclick="updateCartQty(${i},1)">+</button>
        </div>
      </div>
    </div>`;
  }).join('');
  const ongkir=sub>=10000000?0:150000;
  const diskon=sub>=20000000?500000:0;
  const total=sub+ongkir-diskon;
  document.getElementById('subtotal').textContent=rupiah(sub);
  document.getElementById('ongkir').textContent=ongkir===0?'GRATIS':rupiah(ongkir);
  document.getElementById('diskon').textContent='-'+rupiah(diskon);
  document.getElementById('total').textContent=rupiah(total);
}
function updateCartQty(idx,delta){
  const it=state.cart[idx]; if(!it) return;
  const p=PRODUCTS.find(x=>x.id===it.id);
  const stock=p.variants[it.variant]||0;
  it.qty+=delta;
  if(it.qty<=0) state.cart.splice(idx,1);
  else if(it.qty>stock){ it.qty=stock; showToast('Max '+stock); }
  save(); renderCart();
}
function removeCartItem(idx){ state.cart.splice(idx,1); save(); renderCart(); showToast('Item dihapus'); }
function openCheckout(){
  if(!state.cart.length) return;
  const orderId='GZ-2026-'+Math.floor(1000+Math.random()*9000);
  const total=state.cart.reduce((s,i)=>s+PRODUCTS.find(p=>p.id===i.id).price*i.qty,0);
  const itemsList=state.cart.map(i=>{
    const p=PRODUCTS.find(x=>x.id===i.id);
    return {name:p.name,variant:i.variant,qty:i.qty};
  });
  ORDERS.unshift({id:orderId,customer:'Anda',total:total+150000,status:'pending',time:'Baru saja',items:state.cart.length,payment:'Kartu Kredit (12x)',address:'Jakarta Selatan',items_list:itemsList,trackingStep:0});
  AUDIT_LOG.unshift({time:new Date().toTimeString().slice(0,5),user:'customer',action:'Buat pesanan',target:orderId,type:'create'});
  document.getElementById('orderIdDisplay').textContent=orderId;
  state.cart=[]; save(); renderCart(); toggleCart();
  document.getElementById('checkoutModal').classList.add('open');
}
function closeCheckout(){ document.getElementById('checkoutModal').classList.remove('open'); }

/* ==================== WISHLIST ==================== */
function toggleWish(id){
  if(state.wishlist.includes(id)) state.wishlist=state.wishlist.filter(x=>x!==id);
  else state.wishlist.push(id);
  save(); renderProducts(); renderWishlist();
  if(document.getElementById('pdpModal').classList.contains('open')) renderPDP();
}
function toggleWishlist(){
  const d=document.getElementById('czWishDrawer'), o=document.getElementById('czWishOverlay');
  if(d.classList.contains('open')){d.classList.remove('open');o.classList.remove('open');}
  else{ renderWishlist(); d.classList.add('open'); o.classList.add('open'); }
}
function renderWishlist(){
  const body=document.getElementById('wishBody');
  if(!state.wishlist.length){
    body.innerHTML=`<div class="gz-empty"><div class="gz-empty-icon">♡</div><div class="gz-empty-title">Wishlist kosong</div></div>`;
    return;
  }
  body.innerHTML=state.wishlist.map(id=>{
    const p=PRODUCTS.find(x=>x.id===id); if(!p) return '';
    return `<div class="cz-cart-item">
      <div class="cz-cart-img" style="background:${p.bg}">${p.emoji}</div>
      <div class="cz-cart-info">
        <div class="cz-cart-brand">${p.brand}</div>
        <div class="cz-cart-name">${p.name}</div>
        <div class="cz-cart-price">${rupiah(p.price)}</div>
      </div>
      <div class="cz-cart-actions">
        <button class="cz-cart-remove" onclick="toggleWish(${p.id})">hapus</button>
        <button class="gz-btn primary" onclick="openPDP(${p.id});toggleWishlist()">Lihat</button>
      </div>
    </div>`;
  }).join('');
}

/* ==================== ORDERS (customer) ==================== */
function toggleOrders(){
  const d=document.getElementById('czOrdersDrawer'), o=document.getElementById('czOrdersOverlay');
  if(d.classList.contains('open')){d.classList.remove('open');o.classList.remove('open');}
  else{ renderOrders(); d.classList.add('open'); o.classList.add('open'); }
}
function renderOrders(){
  const body=document.getElementById('ordersBody');
  body.innerHTML=ORDERS.slice(0,5).map(o=>{
    const map={pending:['warning','Menunggu'],processing:['info','Diproses'],shipped:['cyan','Dikirim'],completed:['success','Selesai'],cancelled:['danger','Batal']};
    const [color,label]=map[o.status]||['neutral',o.status];
    return `<div class="gz-order">
      <div class="gz-order-head">
        <div>
          <div class="gz-order-id">${o.id}</div>
          <div class="gz-order-meta">${o.time} · ${o.payment}</div>
        </div>
        <span class="gz-badge ${color}"><span class="gz-badge-dot"></span>${label}</span>
      </div>
      <div class="gz-order-items">
        ${o.items_list.map(it=>`${it.name} · <b>${it.variant}</b> × ${it.qty}`).join('<br>')}
      </div>
      <div style="display:flex;justify-content:space-between;align-items:center">
        <div class="mono" style="font-size:14px;font-weight:800;color:var(--cyan)">${rupiah(o.total)}</div>
        <button class="gz-btn primary" onclick="viewTracking('${o.id}')">Lacak</button>
      </div>
    </div>`;
  }).join('') || `<div class="gz-empty"><div class="gz-empty-icon">//</div><div class="gz-empty-desc">belum ada pesanan</div></div>`;
}
function viewTracking(orderId){
  const o=ORDERS.find(x=>x.id===orderId); if(!o) return;
  const steps=['Order dibuat','Pembayaran dikonfirmasi','Diproses gudang','Dikirim','Selesai'];
  const modal=document.createElement('div');
  modal.className='gz-modal open';
  modal.innerHTML=`
    <div class="gz-modal-box">
      <div class="gz-modal-title">Lacak Pesanan</div>
      <div class="gz-modal-sub">// ${o.id}</div>
      ${steps.map((s,i)=>{
        const done=i<o.trackingStep;
        const active=i===o.trackingStep;
        const color=done?'var(--green)':active?'var(--cyan)':'var(--navy-line)';
        return `<div style="display:flex;gap:14px;padding:12px 0;border-bottom:1px solid var(--navy-line)">
          <div style="width:22px;height:22px;border-radius:50%;border:2px solid ${color};background:${done||active?color:'transparent'};flex-shrink:0"></div>
          <div style="flex:1">
            <div style="font-weight:${active?'700':'600'};font-size:13px">${s}</div>
            <div class="mono" style="font-size:10px;color:var(--ink-muted);margin-top:3px">${done?'✓ selesai':active?'◐ berlangsung':'○ menunggu'}</div>
          </div>
        </div>`;
      }).join('')}
      ${o.resi?`<div class="gz-alert info" style="margin-top:14px">Resi: <b class="mono">${o.resi}</b></div>`:''}
      <button class="cz-btn-primary" style="margin-top:16px" onclick="this.closest('.gz-modal').remove()">Tutup</button>
    </div>`;
  modal.onclick=e=>{if(e.target===modal) modal.remove();};
  document.body.appendChild(modal);
}

/* ==================== SEARCH ==================== */
function openSearch(){
  document.getElementById('gzSearchOverlay').classList.add('open');
  setTimeout(()=>document.getElementById('gzSearchInput').focus(),280);
}
function closeSearch(){
  document.getElementById('gzSearchOverlay').classList.remove('open');
  document.getElementById('gzSearchInput').value='';
  document.getElementById('searchResults').innerHTML='';
  state.search=''; renderProducts();
}
function handleSearch(q){
  state.search=q;
  const res=document.getElementById('searchResults');
  if(!q.trim()){ res.innerHTML=''; return; }
  const found=getFiltered().slice(0,8);
  if(!found.length){ res.innerHTML=`<div class="gz-empty"><div class="gz-empty-icon">404</div><div class="gz-empty-desc">tidak ada hasil</div></div>`; return; }
  res.innerHTML=found.map(p=>`
    <div class="gz-search-result" onclick="openPDP(${p.id});closeSearch()">
      <div class="gz-search-result-img" style="background:${p.bg}">${p.emoji}</div>
      <div style="flex:1;min-width:0">
        <div class="gz-search-result-brand">${p.brand}</div>
        <div class="gz-search-result-name">${p.name}</div>
      </div>
      <div class="gz-search-result-price">${rupiah(p.price)}</div>
    </div>`).join('');
}
function quickSearch(q){ document.getElementById('gzSearchInput').value=q; handleSearch(q); }

/* ==================== CHAT ==================== */
let chatHistory=[
  {from:'bot',text:'Halo! Saya teknisi GadgetZone. Bisa bantu rekomendasi?',time:'10:24'}
];
function toggleChat(){
  document.getElementById('gzChat').classList.toggle('open');
  document.getElementById('gzChatFab').classList.toggle('hidden');
  if(document.getElementById('gzChat').classList.contains('open')) renderChat();
}
function renderChat(){
  const body=document.getElementById('gzChatBody');
  body.innerHTML=chatHistory.map(m=>`
    <div class="gz-chat-msg ${m.from}">${m.text}<div class="gz-chat-time">${m.time}</div></div>`).join('');
  body.scrollTop=body.scrollHeight;
}
function sendChat(){
  const input=document.getElementById('gzChatInput');
  const text=input.value.trim(); if(!text) return;
  const time=new Date().toTimeString().slice(0,5);
  chatHistory.push({from:'user',text,time});
  input.value=''; renderChat();
  setTimeout(()=>{
    const r=['Stok tersedia.','Cicilan 0% untuk kartu kredit BCA/Mandiri.','Garansi resmi 1 tahun.','Trade-in bisa hemat Rp2jt.','Ada lagi yang bisa dibantu?'];
    chatHistory.push({from:'bot',text:r[Math.floor(Math.random()*r.length)],time});
    renderChat();
  },900);
}

/* ==================== ADMIN ==================== */
function renderAdmin(){ renderAdminTabs(); renderAdminContent(); updateBadges(); }
function renderAdminTabs(){
  document.querySelectorAll('.gz-sb-item').forEach(t=>t.classList.toggle('active',t.dataset.tab===state.adminTab));
  const meta=PAGE_META[state.adminTab]||PAGE_META.dashboard;
  document.getElementById('gzPageTitle').textContent=meta.title;
  document.getElementById('gzPageSub').textContent=meta.sub;
  document.getElementById('gzBreadcrumb').innerHTML=`
    <span class="crumb" style="cursor:pointer" onclick="switchAdminTab('dashboard')">Backoffice</span>
    <span class="sep">/</span>
    <span class="crumb active">${meta.title}</span>
  `;
}
function switchAdminTab(tab){
  state.adminTab=tab; renderAdminTabs(); renderAdminContent();
  if(window.innerWidth<1024){
    document.getElementById('gzSidebar').classList.add('collapsed');
    document.getElementById('gzSidebarOverlay').classList.remove('show');
  }
  window.scrollTo(0,0);
}
function renderAdminContent(){
  const c=document.getElementById('gzContent');
  switch(state.adminTab){
    case 'dashboard': c.innerHTML=adminDashboard(); break;
    case 'orders': c.innerHTML=adminOrders(); break;
    case 'products': c.innerHTML=adminProducts(); break;
    case 'inventory': c.innerHTML=adminInventory(); break;
    case 'returns': c.innerHTML=adminReturns(); break;
    case 'service': c.innerHTML=adminService(); break;
    case 'brands': c.innerHTML=adminBrands(); break;
    case 'customers': c.innerHTML=adminCustomers(); break;
    case 'staff': c.innerHTML=adminStaff(); break;
    case 'roles': c.innerHTML=adminRoles(); break;
    case 'vouchers': c.innerHTML=adminVouchers(); break;
    case 'reports': c.innerHTML=adminReports(); break;
    case 'audit': c.innerHTML=adminAudit(); break;
    case 'settings': c.innerHTML=adminSettings(); break;
  }
}
function statusBadge(s){
  const map={pending:'warning',processing:'info',shipped:'cyan',completed:'success',cancelled:'danger'};
  return map[s]||'neutral';
}
function statusLabel(s){ return {pending:'Menunggu',processing:'Diproses',shipped:'Dikirim',completed:'Selesai',cancelled:'Batal'}[s]||s; }
function addAudit(user,action,target,type){ AUDIT_LOG.unshift({time:new Date().toTimeString().slice(0,5),user,action,target,type}); }

/* ---- DASHBOARD with Menu Grid ---- */
function adminDashboard(){
  const hours=['08','10','12','14','16','18','20','22'];
  const data=[420,890,1240,2180,1890,3240,4180,2640];
  const max=Math.max(...data);
  const topProducts=PRODUCTS.slice().sort((a,b)=>b.sold-a.sold).slice(0,5);
  const pendingOrders=ORDERS.filter(o=>o.status==='pending').length;
  const pendingReturns=RETURNS.filter(r=>r.status==='pending').length;
  const openService=SERVICE_TICKETS.filter(s=>s.status!=='ready').length;
  const lowStock=PRODUCTS.filter(p=>p.stock<=30).length;

  return `
    <div style="margin-bottom:20px">
      <div style="font-size:13px;font-weight:700;color:var(--ink-mid);margin-bottom:12px">Menu Utama</div>
      <div class="admin-menu-grid">
        <button class="admin-menu-tile" onclick="switchAdminTab('orders')">
          <div class="tile-icon">▤</div>
          <div class="tile-title">Pesanan</div>
          <div class="tile-sub">// kelola order</div>
          ${pendingOrders?`<span class="tile-badge">${pendingOrders}</span>`:''}
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('products')">
          <div class="tile-icon">□</div>
          <div class="tile-title">Produk</div>
          <div class="tile-sub">// ${PRODUCTS.length} SKU</div>
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('returns')">
          <div class="tile-icon">↺</div>
          <div class="tile-title">Retur</div>
          <div class="tile-sub">// ${RETURNS.length} total</div>
          ${pendingReturns?`<span class="tile-badge">${pendingReturns}</span>`:''}
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('service')">
          <div class="tile-icon">⚙</div>
          <div class="tile-title">Service</div>
          <div class="tile-sub">// ${SERVICE_TICKETS.length} tiket</div>
          ${openService?`<span class="tile-badge">${openService}</span>`:''}
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('inventory')">
          <div class="tile-icon">▥</div>
          <div class="tile-title">Stok</div>
          <div class="tile-sub">// ${lowStock} kritis</div>
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('customers')">
          <div class="tile-icon">◐</div>
          <div class="tile-title">Pelanggan</div>
          <div class="tile-sub">// ${CUSTOMERS.length} user</div>
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('staff')">
          <div class="tile-icon">◑</div>
          <div class="tile-title">Staff</div>
          <div class="tile-sub">// ${STAFF.length} anggota</div>
        </button>
        <button class="admin-menu-tile" onclick="switchAdminTab('reports')">
          <div class="tile-icon">◪</div>
          <div class="tile-title">Laporan</div>
          <div class="tile-sub">// analitik</div>
        </button>
      </div>
    </div>

    <div class="gz-kpi-grid">
      <div class="gz-kpi">
        <div class="gz-kpi-label">GMV Hari Ini</div>
        <div class="gz-kpi-value cyan">${rupiah(285400000)}</div>
        <div class="gz-kpi-trend up">↑ 22%</div>
      </div>
      <div class="gz-kpi">
        <div class="gz-kpi-label">Order Baru</div>
        <div class="gz-kpi-value">${pendingOrders}</div>
        <div class="gz-kpi-trend up">↑ 12</div>
      </div>
      <div class="gz-kpi">
        <div class="gz-kpi-label">SKU Aktif</div>
        <div class="gz-kpi-value">${PRODUCTS.length}</div>
        <div class="gz-kpi-trend up">ALL LIVE</div>
      </div>
      <div class="gz-kpi">
        <div class="gz-kpi-label">Service Ticket</div>
        <div class="gz-kpi-value" style="color:var(--amber)">${openService}</div>
        <div class="gz-kpi-trend down">FOLLOW UP</div>
      </div>
    </div>

    <div class="gz-card">
      <div class="gz-card-head">
        <div><div class="gz-card-title">Penjualan per 2 Jam</div><div class="gz-card-sub">// realtime</div></div>
        <span class="gz-badge success"><span class="gz-badge-dot"></span>Live</span>
      </div>
      <div class="gz-card-body">
        <div class="gz-chart">
          ${data.map((v,i)=>`<div class="gz-bar ${v===max?'active':''}" style="height:${v/max*100}%"><b>${Math.round(v/100)/10}jt</b><span>${hours[i]}</span></div>`).join('')}
        </div>
        <div style="margin-top:26px"></div>
      </div>
    </div>

    <div class="gz-card">
      <div class="gz-card-head">
        <div><div class="gz-card-title">Pesanan Terbaru</div></div>
        <button class="gz-btn outline" onclick="switchAdminTab('orders')">Semua →</button>
      </div>
      <div class="gz-card-body-flush">
        ${ORDERS.slice(0,4).map(o=>`
          <div class="gz-list-item" style="padding:14px 20px">
            <div class="gz-list-avatar">${o.customer.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="gz-list-info">
              <div class="gz-list-name">${o.customer}</div>
              <div class="gz-list-sub">${o.id} · ${o.time}</div>
            </div>
            <span class="gz-badge ${statusBadge(o.status)}"><span class="gz-badge-dot"></span>${statusLabel(o.status)}</span>
          </div>`).join('')}
      </div>
    </div>
  `;
}
function restockProduct(id){
  const p=PRODUCTS.find(x=>x.id===id);
  p.stock+=20; Object.keys(p.variants).forEach(k=>p.variants[k]+=2);
  addAudit('arif','Restock produk',p.name,'update');
  renderAdminContent(); showToast('Restock +20');
}

function adminOrders(){
  const list=state.orderFilter==='all'?ORDERS:ORDERS.filter(o=>o.status===state.orderFilter);
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="gz-filter-row">
      ${['all','pending','processing','shipped','completed','cancelled'].map(f=>`
        <button class="gz-chip ${state.orderFilter===f?'active':''}" onclick="state.orderFilter='${f}';renderAdminContent()">${f==='all'?'semua':statusLabel(f)}</button>`).join('')}
    </div>
    ${list.map(o=>`
      <div class="gz-order">
        <div class="gz-order-head">
          <div>
            <div class="gz-order-id">${o.id}</div>
            <div class="gz-order-meta">${o.time} · ${o.payment}</div>
          </div>
          <span class="gz-badge ${statusBadge(o.status)}"><span class="gz-badge-dot"></span>${statusLabel(o.status)}</span>
        </div>
        <div class="gz-order-body"><b>${o.customer}</b> · ${o.address}</div>
        <div class="gz-order-items">${o.items_list.map(it=>`${it.name} · <b>${it.variant}</b> × ${it.qty}`).join('<br>')}</div>
        <div class="mono" style="font-size:16px;font-weight:800;color:var(--cyan)">${rupiah(o.total)}</div>
        <div class="gz-order-actions">
          ${o.status==='pending'?`<button class="gz-btn primary" onclick="updateOrder('${o.id}','processing')">Proses</button>`:''}
          ${o.status==='processing'?`<button class="gz-btn primary" onclick="updateOrder('${o.id}','shipped')">Kirim</button>`:''}
          ${o.status==='shipped'?`<button class="gz-btn primary" onclick="updateOrder('${o.id}','completed')">Selesai</button>`:''}
          ${o.status!=='completed'&&o.status!=='cancelled'?`<button class="gz-btn danger" onclick="updateOrder('${o.id}','cancelled')">Batal</button>`:''}
        </div>
      </div>`).join('') || '<div class="gz-empty"><div class="gz-empty-icon">//</div><div class="gz-empty-desc">tidak ada pesanan</div></div>'}
  `;
}
function updateOrder(id,status){
  const o=ORDERS.find(x=>x.id===id); if(!o) return;
  o.status=status;
  o.trackingStep={pending:0,processing:2,shipped:3,completed:4,cancelled:1}[status]||0;
  addAudit('arif','Update pesanan',id,'update');
  renderAdminContent(); updateBadges();
  showToast(o.id+' → '+statusLabel(status));
}

function adminProducts(){
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;gap:12px;flex-wrap:wrap">
      <div class="mono" style="font-size:11px;color:var(--ink-muted)">// ${PRODUCTS.length} SKU</div>
      <button class="gz-btn primary" onclick="openProductModal(null)">+ Produk Baru</button>
    </div>
    <div class="gz-card">
      <div class="gz-tbl-wrap">
        <table class="gz-tbl">
          <thead><tr><th>Produk</th><th>Brand</th><th>Harga</th><th>Stok</th><th>Sold</th><th></th></tr></thead>
          <tbody>
            ${PRODUCTS.map(p=>`
              <tr>
                <td><div style="display:flex;align-items:center;gap:10px"><span style="font-size:20px">${p.emoji}</span><div style="font-weight:700;font-size:12px">${p.name.slice(0,28)}</div></div></td>
                <td class="mono" style="font-size:10px;color:var(--cyan);font-weight:800">${p.brand}</td>
                <td class="mono" style="font-weight:800">${rupiah(p.price)}</td>
                <td><span class="gz-badge ${p.stock<=30?'danger':p.stock<=80?'warning':'success'}">${p.stock}</span></td>
                <td class="mono" style="font-weight:700">${p.sold}</td>
                <td style="white-space:nowrap">
                  <button class="gz-btn outline" onclick="openProductModal(${p.id})">Edit</button>
                  <button class="gz-btn danger" onclick="deleteProduct(${p.id})" style="margin-left:4px">Hapus</button>
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
  addAudit('arif','Hapus produk',p.name,'delete');
  renderAdminContent(); renderProducts(); showToast('Produk dihapus');
}

function adminInventory(){
  const totalValue=PRODUCTS.reduce((s,p)=>s+p.price*p.stock,0);
  const totalStock=PRODUCTS.reduce((s,p)=>s+p.stock,0);
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="gz-kpi-grid" style="grid-template-columns:repeat(2,1fr)">
      <div class="gz-kpi"><div class="gz-kpi-label">Nilai Inventory</div><div class="gz-kpi-value cyan" style="font-size:18px">${rupiah(totalValue)}</div></div>
      <div class="gz-kpi"><div class="gz-kpi-label">Total Stok</div><div class="gz-kpi-value">${totalStock}</div></div>
    </div>
    ${PRODUCTS.map(p=>{
      const pVar=Object.entries(p.variants);
      const low=pVar.filter(([k,v])=>v<=2);
      return `
      <div class="gz-card">
        <div class="gz-card-head">
          <div>
            <div class="gz-card-title">${p.emoji} ${p.name.slice(0,36)}</div>
            <div class="gz-card-sub">// ${p.brand} · ${pVar.length} varian</div>
          </div>
          <span class="gz-badge ${low.length>0?'danger':'success'}">${low.length>0?low.length+' kritis':'aman'}</span>
        </div>
        <div class="gz-card-body-flush">
          ${pVar.map(([k,v])=>`
            <div class="gz-variant-row">
              <span>${k}</span>
              <span class="mono" style="color:var(--ink-muted);font-size:10px">stock</span>
              <input class="gz-variant-input" type="number" value="${v}" onchange="updateVariant(${p.id},'${k}',this.value)">
              <span class="gz-badge ${v<=2?'danger':v<=5?'warning':'success'}">${v<=2?'kritis':v<=5?'rendah':'ok'}</span>
            </div>`).join('')}
        </div>
      </div>`;
    }).join('')}`;
}
function updateVariant(pid,key,val){
  const p=PRODUCTS.find(x=>x.id===pid);
  p.variants[key]=+val;
  p.stock=Object.values(p.variants).reduce((s,v)=>s+v,0);
  addAudit('arif','Update varian',p.name+' - '+key,'update');
  renderAdminContent(); showToast('Stok diperbarui');
}

function adminReturns(){
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="mono" style="font-size:11px;color:var(--ink-muted);margin-bottom:16px">// ${RETURNS.length} pengajuan</div>
    ${RETURNS.map(r=>`
      <div class="gz-card">
        <div class="gz-card-head">
          <div>
            <div class="gz-card-title">${r.id}</div>
            <div class="gz-card-sub">// ${r.orderId} · ${r.customer} · ${r.date}</div>
          </div>
          <span class="gz-badge ${r.status==='pending'?'warning':r.status==='approved'?'info':r.status==='refunded'?'success':'danger'}">${r.status}</span>
        </div>
        <div class="gz-card-body">
          <div style="font-size:12px;line-height:1.9;color:var(--ink-mid)">
            Produk: <b style="color:var(--ink)">${r.product}</b><br>
            Alasan: ${r.reason}<br>
            Nominal: <b class="mono" style="color:var(--cyan)">${rupiah(r.amount)}</b>
          </div>
          ${r.status==='pending'?`<div class="gz-order-actions"><button class="gz-btn primary" onclick="updateReturn('${r.id}','approved')">Setujui</button><button class="gz-btn danger" onclick="updateReturn('${r.id}','rejected')">Tolak</button></div>`:''}
          ${r.status==='approved'?`<div class="gz-order-actions"><button class="gz-btn amber" onclick="updateReturn('${r.id}','refunded')">Proses Refund</button></div>`:''}
        </div>
      </div>`).join('')}`;
}
function updateReturn(id,status){
  const r=RETURNS.find(x=>x.id===id); if(!r) return;
  r.status=status;
  addAudit('sari','Update retur',id,'update');
  renderAdminContent(); updateBadges();
  showToast(id+' → '+status);
}

function adminService(){
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
      <div class="mono" style="font-size:11px;color:var(--ink-muted)">// ${SERVICE_TICKETS.length} tiket</div>
      <button class="gz-btn primary" onclick="showToast('Tiket baru')">+ Tiket</button>
    </div>
    ${SERVICE_TICKETS.map(s=>{
      const st={pending:['warning','Menunggu'],in_progress:['info','Dikerjakan'],ready:['success','Selesai']}[s.status]||['neutral',s.status];
      return `
      <div class="svc-card">
        <div class="svc-head">
          <div>
            <div class="svc-id">${s.id}</div>
            <div class="svc-meta">// ${s.customer} · ${s.device} · ${s.date}</div>
          </div>
          <span class="gz-badge ${st[0]}"><span class="gz-badge-dot"></span>${st[1]}</span>
        </div>
        <div class="svc-body">
          Kerusakan: <b>${s.issue}</b><br>
          Teknisi: <span class="mono" style="color:var(--cyan)">${s.technician}</span> · ETA: <span class="mono">${s.eta}</span>
        </div>
        <div class="svc-timeline">
          ${s.steps.map((step,i)=>{
            const done=i<s.currentStep-1;
            const active=i===s.currentStep-1;
            return `<div class="svc-step ${done?'done':active?'active':''}">${step}</div>`;
          }).join('')}
        </div>
        <div class="gz-order-actions">
          ${s.status==='pending'?`<button class="gz-btn primary" onclick="updateService('${s.id}','in_progress')">Assign Teknisi</button>`:''}
          ${s.status==='in_progress'?`<button class="gz-btn primary" onclick="updateService('${s.id}','ready')">Tandai Selesai</button>`:''}
        </div>
      </div>`;
    }).join('')}`;
}
function updateService(id,status){
  const s=SERVICE_TICKETS.find(x=>x.id===id); if(!s) return;
  s.status=status;
  if(status==='in_progress'){ s.technician=s.technician==='-'?'Joko S.':s.technician; s.eta='2 hari'; s.currentStep=2; }
  if(status==='ready'){ s.eta='Selesai'; s.currentStep=4; }
  addAudit('joko','Update service',id,'update');
  renderAdminContent(); showToast(id+' → '+status);
}

function adminBrands(){
  const brands=[...new Set(PRODUCTS.map(p=>p.brand))];
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="mono" style="font-size:11px;color:var(--ink-muted);margin-bottom:16px">// ${brands.length} brand partner</div>
    ${brands.map(b=>{
      const products=PRODUCTS.filter(p=>p.brand===b);
      const totalSold=products.reduce((s,p)=>s+p.sold,0);
      const totalValue=products.reduce((s,p)=>s+p.sold*p.price,0);
      return `
        <div class="gz-card">
          <div class="gz-card-head">
            <div>
              <div class="gz-card-title">${b}</div>
              <div class="gz-card-sub">// ${products.length} produk · ${totalSold} terjual</div>
            </div>
            <span class="gz-badge cyan">${rupiah(totalValue)}</span>
          </div>
          <div class="gz-card-body-flush">
            ${products.map(p=>`
              <div class="gz-list-item" style="padding:12px 20px">
                <div class="gz-list-avatar" style="background:${p.bg}">${p.emoji}</div>
                <div class="gz-list-info">
                  <div class="gz-list-name">${p.name}</div>
                  <div class="gz-list-sub">${p.spec}</div>
                </div>
                <span class="mono" style="font-size:12px;font-weight:700;color:var(--cyan)">${rupiah(p.price)}</span>
              </div>`).join('')}
          </div>
        </div>`;
    }).join('')}`;
}

function adminCustomers(){
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="gz-card">
      <div class="gz-card-head"><div><div class="gz-card-title">Pelanggan Terdaftar</div><div class="gz-card-sub">// ${CUSTOMERS.length} pelanggan</div></div></div>
      <div class="gz-card-body-flush">
        ${CUSTOMERS.map(c=>`
          <div class="gz-list-item" style="padding:14px 20px">
            <div class="gz-list-avatar">${c.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="gz-list-info">
              <div class="gz-list-name">${c.name} <span class="gz-badge ${c.tier==='Platinum'?'cyan':c.tier==='Gold'?'warning':'neutral'}" style="margin-left:6px">${c.tier}</span></div>
              <div class="gz-list-sub">${c.email} · ${c.city} · ${c.orders} order</div>
            </div>
          </div>`).join('')}
      </div>
    </div>`;
}

function adminStaff(){
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
      <div class="mono" style="font-size:11px;color:var(--ink-muted)">// ${STAFF.length} anggota</div>
      <button class="gz-btn primary" onclick="openStaffModal(null)">+ Tambah Staff</button>
    </div>
    <div class="gz-card">
      <div class="gz-tbl-wrap">
        <table class="gz-tbl">
          <thead><tr><th>Nama</th><th>Email</th><th>Role</th><th>Status</th><th>Last Login</th><th></th></tr></thead>
          <tbody>
            ${STAFF.map(s=>`
              <tr>
                <td><b>${s.name}</b></td>
                <td class="mono" style="font-size:11px;color:var(--ink-muted)">${s.email}</td>
                <td><span class="gz-badge ${s.role==='Manager'?'cyan':s.role==='Teknisi'?'info':'neutral'}">${s.role}</span></td>
                <td><span class="gz-badge ${s.status==='active'?'success':'neutral'}">${s.status}</span></td>
                <td class="mono" style="font-size:10px;color:var(--ink-muted)">${s.lastLogin}</td>
                <td style="white-space:nowrap">
                  <button class="gz-btn outline" onclick="openStaffModal(${s.id})">Edit</button>
                  <button class="gz-btn danger" onclick="deleteStaff(${s.id})" style="margin-left:4px">Hapus</button>
                </td>
              </tr>`).join('')}
          </tbody>
        </table>
      </div>
    </div>`;
}
function deleteStaff(id){
  const s=STAFF.find(x=>x.id===id);
  if(!confirm('Hapus "'+s.name+'"?')) return;
  STAFF=STAFF.filter(x=>x.id!==id);
  addAudit('arif','Hapus staff',s.name,'delete');
  renderAdminContent(); showToast('Staff dihapus');
}

function adminRoles(){
  const allPerms=['dashboard','orders','returns','service','products','inventory','brands','customers','staff','vouchers','reports','audit','settings'];
  const permLabels={dashboard:'Dash',orders:'Order',returns:'Retur',service:'Svc',products:'Prod',inventory:'Stok',brands:'Brand',customers:'Cust',staff:'Staff',vouchers:'Vouch',reports:'Rpt',audit:'Audit',settings:'Set'};
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="gz-card">
      <div class="gz-card-head">
        <div><div class="gz-card-title">Matriks Role & Permission</div><div class="gz-card-sub">// siapa bisa akses apa</div></div>
      </div>
      <div class="gz-card-body-flush">
        <div class="gz-tbl-wrap">
          <table class="role-tbl">
            <thead>
              <tr>
                <th>Role</th>
                ${allPerms.map(p=>`<th>${permLabels[p]}</th>`).join('')}
              </tr>
            </thead>
            <tbody>
              ${ROLES.map(r=>`
                <tr>
                  <td>${r.name}</td>
                  ${allPerms.map(p=>`<td>${r.perms.includes(p)?'<span class="yes">✓</span>':'<span class="no">—</span>'}</td>`).join('')}
                </tr>`).join('')}
            </tbody>
          </table>
        </div>
      </div>
    </div>`;
}

function adminVouchers(){
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
      <div class="mono" style="font-size:11px;color:var(--ink-muted)">// ${VOUCHERS.length} voucher</div>
      <button class="gz-btn primary" onclick="showToast('Form voucher')">+ Voucher</button>
    </div>
    ${VOUCHERS.map(v=>`
      <div class="gz-card">
        <div class="gz-card-head">
          <div>
            <div class="gz-card-title mono" style="color:var(--cyan)">${v.code}</div>
            <div class="gz-card-sub">// ${v.value} (${v.type}) · min. ${rupiah(v.min)}</div>
          </div>
          <span class="gz-badge ${v.status==='active'?'success':'neutral'}">${v.status}</span>
        </div>
        <div class="gz-card-body">
          <div style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:6px">
            <span style="color:var(--ink-muted)">Kuota</span>
            <b class="mono">${v.used}/${v.quota}</b>
          </div>
          <div class="gz-progress"><div class="gz-progress-fill" style="width:${(v.used/v.quota*100)}%"></div></div>
        </div>
      </div>`).join('')}`;
}

function adminReports(){
  const brands=[...new Set(PRODUCTS.map(p=>p.brand))];
  const brandRevenue=brands.map(b=>({b,total:PRODUCTS.filter(p=>p.brand===b).reduce((s,p)=>s+p.sold*p.price,0)}));
  const maxV=Math.max(...brandRevenue.map(x=>x.total));
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="gz-kpi-grid" style="grid-template-columns:repeat(2,1fr)">
      <div class="gz-kpi"><div class="gz-kpi-label">Total GMV</div><div class="gz-kpi-value cyan" style="font-size:20px">Rp8.9M</div><div class="gz-kpi-trend up">↑ 28%</div></div>
      <div class="gz-kpi"><div class="gz-kpi-label">Total Orders</div><div class="gz-kpi-value">12,341</div><div class="gz-kpi-trend up">↑ 18%</div></div>
      <div class="gz-kpi"><div class="gz-kpi-label">AOV</div><div class="gz-kpi-value" style="font-size:18px">Rp725rb</div><div class="gz-kpi-trend up">↑ 8%</div></div>
      <div class="gz-kpi"><div class="gz-kpi-label">Return Rate</div><div class="gz-kpi-value">2.8%</div><div class="gz-kpi-trend down">↓ 0.5%</div></div>
    </div>
    <div class="gz-card">
      <div class="gz-card-head"><div><div class="gz-card-title">Performa Brand</div></div></div>
      <div class="gz-card-body">
        ${brandRevenue.map(x=>`
          <div style="margin-bottom:14px">
            <div style="display:flex;justify-content:space-between;font-size:11px;font-weight:700;margin-bottom:6px" class="mono">
              <span>${x.b}</span><span style="color:var(--cyan)">${rupiah(x.total)}</span>
            </div>
            <div class="gz-progress"><div class="gz-progress-fill" style="width:${(x.total/maxV*100)}%"></div></div>
          </div>`).join('')}
      </div>
    </div>
    <div class="gz-card">
      <div class="gz-card-head"><div><div class="gz-card-title">Export Laporan</div></div></div>
      <div class="gz-card-body">
        <button class="cz-btn-primary" onclick="exportReport('csv')">Download CSV</button>
        <button class="cz-btn-ghost" onclick="exportReport('pdf')">Download PDF</button>
      </div>
    </div>`;
}
function exportReport(type){
  addAudit('arif','Export laporan',type.toUpperCase(),'export');
  showToast(type.toUpperCase()+' berhasil diunduh');
}

function adminAudit(){
  const types=[...new Set(AUDIT_LOG.map(a=>a.type))];
  const filtered=state.auditFilter==='all'?AUDIT_LOG:AUDIT_LOG.filter(a=>a.type===state.auditFilter);
  const typeBadge={create:'success',update:'info',delete:'danger',auth:'cyan',config:'warning',export:'neutral'};
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="gz-filter-row">
      <button class="gz-chip ${state.auditFilter==='all'?'active':''}" onclick="state.auditFilter='all';renderAdminContent()">semua</button>
      ${types.map(t=>`<button class="gz-chip ${state.auditFilter===t?'active':''}" onclick="state.auditFilter='${t}';renderAdminContent()">${t}</button>`).join('')}
    </div>
    <div class="gz-card">
      <div class="gz-card-head"><div><div class="gz-card-title">Audit Log</div><div class="gz-card-sub">// ${filtered.length} entri</div></div></div>
      <div class="gz-card-body-flush">
        ${filtered.map(a=>`
          <div class="audit-row">
            <span class="audit-time">${a.time}</span>
            <span class="audit-user">@${a.user}</span>
            <div class="audit-action">${a.action} · <span class="target">${a.target}</span></div>
            <span class="gz-badge ${typeBadge[a.type]||'neutral'}">${a.type}</span>
          </div>`).join('')}
      </div>
    </div>`;
}

function adminSettings(){
  return `
    <button class="gz-back-btn" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="gz-card">
      <div class="gz-card-head"><div><div class="gz-card-title">Informasi Toko</div></div></div>
      <div class="gz-card-body">
        <div class="gz-form-group"><label class="gz-form-label">Nama Toko</label><input class="gz-form-input" value="GadgetZone"></div>
        <div class="gz-form-group"><label class="gz-form-label">Tagline</label><input class="gz-form-input" value="Elektronik & Gadget Original"></div>
        <div class="gz-form-group"><label class="gz-form-label">Alamat Gudang</label><input class="gz-form-input" value="Jl. Mangga Dua Raya No. 88"></div>
        <div class="gz-form-row">
          <div class="gz-form-group"><label class="gz-form-label">Min. Gratis Ongkir</label><input class="gz-form-input" value="10000000" type="number"></div>
          <div class="gz-form-group"><label class="gz-form-label">Ongkir Default</label><input class="gz-form-input" value="150000" type="number"></div>
        </div>
        <button class="cz-btn-primary" onclick="addAudit('arif','Update settings','settings','config');showToast('Disimpan')">Simpan</button>
      </div>
    </div>
    <div class="gz-card">
      <div class="gz-card-head"><div><div class="gz-card-title">Metode Pembayaran</div></div></div>
      <div class="gz-card-body-flush">
        ${[
          {icon:'CC',name:'Kartu Kredit',sub:'Cicilan 0%',status:'active'},
          {icon:'TF',name:'Transfer Bank',sub:'BCA, Mandiri, BNI',status:'active'},
          {icon:'VA',name:'Virtual Account',sub:'Auto verify',status:'active'},
          {icon:'EW',name:'E-Wallet',sub:'GoPay, OVO, Dana',status:'active'}
        ].map(m=>`
          <div class="gz-list-item" style="padding:14px 20px">
            <div class="gz-list-avatar" style="background:var(--cyan-glow);color:var(--cyan)">${m.icon}</div>
            <div class="gz-list-info">
              <div class="gz-list-name">${m.name}</div>
              <div class="gz-list-sub">${m.sub}</div>
            </div>
            <span class="gz-badge success">aktif</span>
          </div>`).join('')}
      </div>
    </div>`;
}

/* ==================== MODALS ==================== */
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
    document.getElementById('pmSpec').value=p.spec||'';
    document.getElementById('pmVariants').value=Object.keys(p.variants).join(',');
  } else {
    state.editingProduct=null;
    document.getElementById('productModalTitle').textContent='Produk Baru';
    ['pmName','pmBrand','pmPrice','pmOld','pmSpec','pmVariants'].forEach(f=>document.getElementById(f).value='');
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
  const spec=document.getElementById('pmSpec').value.trim()||'-';
  const variantNames=document.getElementById('pmVariants').value.split(',').map(s=>s.trim()).filter(Boolean);
  if(!name||!price||!variantNames.length){ showToast('Lengkapi data'); return; }
  const variants={};
  variantNames.forEach(v=>variants[v]=10);
  if(state.editingProduct){
    const p=PRODUCTS.find(x=>x.id===state.editingProduct);
    Object.assign(p,{name,brand,price,old,cat,spec,variants,stock:Object.values(variants).reduce((s,v)=>s+v,0)});
    addAudit('arif','Update produk',name,'update');
    showToast('Produk diperbarui');
  } else {
    const id=Math.max(...PRODUCTS.map(p=>p.id))+1;
    PRODUCTS.push({id,name,brand,cat,price,old,variants,emoji:'📦',bg:'#1e2438',rating:5.0,sold:0,stock:Object.values(variants).reduce((s,v)=>s+v,0),isNew:true,isSale:old>0,spec,desc:'Produk baru',specs:{},reviews:[]});
    addAudit('arif','Tambah produk',name,'create');
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
    addAudit('arif','Update staff',name,'update');
    showToast('Staff diperbarui');
  } else {
    STAFF.push({id:Date.now(),name,email,role,status:'active',lastLogin:'-'});
    addAudit('arif','Tambah staff',name,'create');
    showToast('Staff ditambahkan');
  }
  closeStaffModal(); renderAdminContent();
}

/* ==================== NAV ==================== */
function navTo(nav){
  if(nav==='admin'){ setMode('admin'); return; }
  document.querySelectorAll('.cz-nav-item').forEach(n=>n.classList.toggle('active',n.dataset.nav===nav));
  if(nav==='home') window.scrollTo({top:0,behavior:'smooth'});
  if(nav==='shop') document.getElementById('katalog').scrollIntoView({behavior:'smooth'});
}

document.querySelectorAll('.cz-sort-chip').forEach(btn=>{
  btn.addEventListener('click',()=>{
    document.querySelectorAll('.cz-sort-chip').forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    state.sort=btn.dataset.sort;
    renderProducts();
  });
});

/* ==================== INIT ==================== */
renderNavCategories();
renderProducts();
updateBadges();
initGzSidebar();
</script>
@endverbatim
@include('demo.toko-online.partials.demo-bar')
</body>
</html>