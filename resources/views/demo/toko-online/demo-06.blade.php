@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="theme-color" content="#f7f7f5">
<title>AutoParts Pro - Sparepart & Bengkel</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;-webkit-tap-highlight-color:transparent}
:root{
  --bg:#f7f7f5;--bg-2:#efefec;--paper:#ffffff;
  --ink:#1c1c1a;--ink-2:#4a4a46;--ink-muted:#8a8a83;
  --line:#e4e4df;--line-strong:#d0d0c8;
  --yellow:#c99a1f;--yellow-dark:#a67c10;--yellow-soft:#faf3dc;
  --slate:#3a4a5a;--slate-soft:#e8edf2;
  --green:#4a7c59;--green-soft:#e6efe8;
  --red:#a83e3e;--red-soft:#f2e2e2;
  --amber:#a87632;--amber-soft:#f2ead8;
  --r-xs:4px;--r-sm:8px;--r:10px;--r-lg:14px;
  --shadow-xs:0 1px 2px rgba(28,28,26,.04);
  --shadow-sm:0 1px 3px rgba(28,28,26,.05);
  --shadow:0 3px 12px rgba(28,28,26,.06);
}
body{font-family:"Inter",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;background:var(--bg);color:var(--ink);font-size:14px;line-height:1.55;overflow-x:hidden;-webkit-font-smoothing:antialiased}
button{font-family:inherit;cursor:pointer;border:none;background:none;color:inherit}
input,select,textarea{font-family:inherit;font-size:14px;outline:none;color:inherit}
.hidden{display:none!important}
.mono{font-family:"SF Mono",Monaco,Consolas,monospace;font-weight:600;letter-spacing:-.01em}

/* ===== MODE SWITCH ===== */
.ap-mode{
  position:fixed;bottom:78px;left:50%;transform:translateX(-50%);
  z-index:250;display:flex;background:var(--paper);
  border:1px solid var(--line-strong);border-radius:24px;padding:3px;
  box-shadow:var(--shadow);
}
.ap-mode-btn{
  padding:8px 16px;border-radius:20px;font-size:11px;font-weight:700;
  color:var(--ink-muted);display:flex;align-items:center;gap:6px;
  transition:.15s;white-space:nowrap;
}
.ap-mode-btn.active{background:var(--ink);color:var(--paper)}

/* ===== HEADER ===== */
.ap-header{
  position:sticky;top:0;z-index:100;background:var(--paper);
  border-bottom:1px solid var(--line);
}
.ap-band{
  padding:6px 16px;background:var(--yellow-soft);color:var(--yellow-dark);
  font-size:10px;font-weight:700;letter-spacing:.08em;text-transform:uppercase;
  text-align:center;
}
.ap-head{display:flex;align-items:center;gap:12px;padding:14px 16px 12px}
.ap-brand{display:flex;align-items:center;gap:10px}
.ap-logo{
  width:36px;height:36px;border-radius:8px;background:var(--ink);color:var(--yellow);
  display:flex;align-items:center;justify-content:center;font-size:16px;font-weight:800;
}
.ap-brand-name{font-size:16px;font-weight:800;letter-spacing:-.02em;line-height:1}
.ap-brand-sub{font-size:9px;color:var(--ink-muted);font-weight:700;letter-spacing:.12em;text-transform:uppercase;margin-top:3px}
.ap-head-right{margin-left:auto;display:flex;gap:6px;align-items:center}
.ap-admin-entry{
  display:flex;align-items:center;gap:5px;padding:7px 12px;
  background:var(--yellow-soft);border:1px solid var(--yellow);
  border-radius:8px;color:var(--yellow-dark);
  font-size:11px;font-weight:700;
}
.ap-admin-entry:hover{background:var(--yellow);color:var(--paper)}
.ap-icon{
  width:36px;height:36px;border-radius:8px;background:var(--bg-2);
  display:flex;align-items:center;justify-content:center;
  color:var(--ink-2);position:relative;transition:.15s;
}
.ap-icon:hover{background:var(--line);color:var(--ink)}
.ap-badge{
  position:absolute;top:-2px;right:-2px;background:var(--yellow-dark);color:var(--paper);
  font-size:9px;font-weight:800;min-width:16px;height:16px;border-radius:8px;
  display:flex;align-items:center;justify-content:center;padding:0 4px;
  border:2px solid var(--paper);
}
.ap-search{
  display:flex;align-items:center;gap:10px;background:var(--bg);
  border-radius:8px;padding:10px 14px;margin:0 16px 12px;
  color:var(--ink-muted);font-size:13px;cursor:pointer;
  border:1px solid transparent;transition:.15s;
}
.ap-search:hover{border-color:var(--yellow);background:var(--paper)}

/* ===== KENDARAAN PICKER ===== */
.ap-vehicle{
  padding:0 16px 14px;
}
.ap-vehicle-label{
  font-size:10px;font-weight:700;letter-spacing:.1em;color:var(--ink-muted);
  text-transform:uppercase;margin-bottom:8px;
}
.ap-vehicle-row{
  display:grid;grid-template-columns:1fr 1fr 1fr;gap:8px;
}
.ap-select{
  display:flex;align-items:center;justify-content:space-between;
  padding:11px 12px;background:var(--paper);border:1px solid var(--line);
  border-radius:var(--r-sm);font-size:12px;font-weight:600;color:var(--ink-2);
  cursor:pointer;transition:.15s;text-align:left;
}
.ap-select:hover{border-color:var(--yellow)}
.ap-select.filled{color:var(--ink);background:var(--yellow-soft);border-color:var(--yellow)}
.ap-select small{
  display:block;font-size:9px;font-weight:700;color:var(--ink-muted);
  letter-spacing:.06em;text-transform:uppercase;margin-bottom:2px;
}
.ap-select .val{font-size:12px;font-weight:700;color:var(--ink);line-height:1.2}
.ap-select .caret{color:var(--ink-muted);font-size:11px;margin-left:6px}

/* ===== KATEGORI PART ===== */
.ap-cats{
  display:flex;gap:6px;padding:0 16px 14px;overflow-x:auto;scrollbar-width:none;
}
.ap-cats::-webkit-scrollbar{display:none}
.ap-cat{
  flex-shrink:0;padding:8px 14px;background:var(--paper);
  border:1px solid var(--line);border-radius:var(--r-sm);
  font-size:12px;font-weight:600;color:var(--ink-2);
  white-space:nowrap;transition:.15s;
}
.ap-cat:hover{border-color:var(--yellow)}
.ap-cat.active{background:var(--ink);color:var(--paper);border-color:var(--ink)}

/* ===== VEHICLE BANNER ===== */
.ap-vbanner{
  margin:0 16px 14px;padding:12px 14px;
  background:var(--paper);border:1px solid var(--line);
  border-radius:var(--r-sm);display:flex;align-items:center;gap:12px;
}
.ap-vbanner-icon{
  width:36px;height:36px;border-radius:50%;background:var(--yellow-soft);
  color:var(--yellow-dark);display:flex;align-items:center;justify-content:center;
  font-size:18px;flex-shrink:0;
}
.ap-vbanner-body{flex:1;min-width:0}
.ap-vbanner-title{font-size:12px;font-weight:700;color:var(--ink);line-height:1.3}
.ap-vbanner-sub{font-size:11px;color:var(--ink-muted);font-weight:500;margin-top:2px}
.ap-vbanner-action{
  font-size:11px;font-weight:700;color:var(--yellow-dark);
  padding:5px 10px;border:1px solid var(--yellow);border-radius:6px;
}
.ap-vbanner-action:hover{background:var(--yellow);color:var(--paper)}

/* ===== SECTION ===== */
.ap-section{padding:0 0 18px}
.ap-section-head{
  display:flex;align-items:center;justify-content:space-between;
  padding:0 18px 10px;
}
.ap-section-title{font-size:15px;font-weight:700;letter-spacing:-.01em}
.ap-section-sub{font-size:11px;color:var(--ink-muted);font-weight:500;margin-top:2px}
.ap-section-link{font-size:12px;font-weight:600;color:var(--yellow-dark)}

/* ===== PART CARD ===== */
.ap-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;padding:0 16px}
@media(min-width:640px){.ap-grid{grid-template-columns:repeat(3,1fr)}}
@media(min-width:900px){.ap-grid{grid-template-columns:repeat(4,1fr)}}
.ap-card{
  background:var(--paper);border:1px solid var(--line);border-radius:var(--r);
  overflow:hidden;cursor:pointer;transition:.15s;
  display:flex;flex-direction:column;
}
.ap-card:hover{border-color:var(--yellow);box-shadow:var(--shadow-sm)}
.ap-card-img{
  aspect-ratio:1.1;background:var(--bg-2);
  display:flex;align-items:center;justify-content:center;
  font-size:54px;position:relative;border-bottom:1px solid var(--line);
}
.ap-card-brand{
  position:absolute;top:8px;left:8px;
  background:var(--paper);color:var(--ink-2);
  font-size:9px;font-weight:800;padding:3px 7px;border-radius:4px;
  letter-spacing:.06em;text-transform:uppercase;border:1px solid var(--line);
}
.ap-card-tag{
  position:absolute;top:8px;right:8px;
  font-size:9px;font-weight:800;padding:3px 7px;border-radius:4px;
  letter-spacing:.04em;
}
.ap-card-tag.oem{background:var(--green-soft);color:var(--green)}
.ap-card-tag.after{background:var(--slate-soft);color:var(--slate)}
.ap-card-tag.promo{background:var(--red-soft);color:var(--red)}
.ap-card-body{padding:10px 12px;display:flex;flex-direction:column;gap:5px;flex:1}
.ap-card-oem{
  font-family:"SF Mono",Monaco,Consolas,monospace;
  font-size:10px;font-weight:700;color:var(--yellow-dark);
  background:var(--yellow-soft);padding:3px 6px;border-radius:4px;
  align-self:flex-start;letter-spacing:.02em;
}
.ap-card-name{
  font-size:12px;font-weight:700;color:var(--ink);line-height:1.3;
  display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;
  min-height:32px;
}
.ap-card-fit{font-size:10px;color:var(--ink-muted);font-weight:500;line-height:1.4}
.ap-card-footer{
  margin-top:auto;padding-top:8px;display:flex;align-items:flex-end;
  justify-content:space-between;gap:6px;border-top:1px solid var(--line);
}
.ap-card-price-block{display:flex;flex-direction:column;gap:2px}
.ap-card-price{font-size:14px;font-weight:800;color:var(--ink)}
.ap-card-old{font-size:10px;color:var(--ink-muted);text-decoration:line-through}
.ap-card-stock{
  font-size:10px;font-weight:700;padding:3px 7px;border-radius:6px;
  background:var(--green-soft);color:var(--green);
}
.ap-card-stock.low{background:var(--amber-soft);color:var(--amber)}
.ap-card-stock.out{background:var(--red-soft);color:var(--red)}

/* ===== SERVICE CARDS ===== */
.ap-services{
  display:grid;grid-template-columns:repeat(2,1fr);gap:10px;padding:0 16px;
}
.ap-service{
  background:var(--paper);border:1px solid var(--line);border-radius:var(--r);
  padding:16px 14px;cursor:pointer;transition:.15s;
  display:flex;gap:12px;align-items:flex-start;
}
.ap-service:hover{border-color:var(--yellow);box-shadow:var(--shadow-sm)}
.ap-service-icon{
  width:38px;height:38px;border-radius:8px;background:var(--bg-2);
  display:flex;align-items:center;justify-content:center;
  font-size:18px;flex-shrink:0;color:var(--ink-2);
}
.ap-service-body{flex:1;min-width:0}
.ap-service-title{font-size:13px;font-weight:700;color:var(--ink);margin-bottom:3px}
.ap-service-sub{font-size:11px;color:var(--ink-muted);line-height:1.4}

/* ===== BOTTOM NAV ===== */
.ap-nav{
  position:fixed;bottom:0;left:0;right:0;background:var(--paper);
  border-top:1px solid var(--line);z-index:200;
  display:flex;padding:6px 0 8px;
}
.ap-nav-item{
  flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;
  color:var(--ink-muted);font-size:10px;font-weight:600;
  padding:4px 0;position:relative;
}
.ap-nav-item.active{color:var(--yellow-dark)}
.ap-nav-icon{font-size:20px;line-height:1}
.ap-nav-badge{
  position:absolute;top:-2px;right:calc(50% - 22px);
  background:var(--yellow-dark);color:var(--paper);
  font-size:9px;font-weight:800;min-width:16px;height:16px;border-radius:8px;
  display:flex;align-items:center;justify-content:center;padding:0 4px;
  border:2px solid var(--paper);
}

/* ===== DRAWER ===== */
.ap-overlay{
  position:fixed;inset:0;background:rgba(28,28,26,.35);z-index:300;
  opacity:0;visibility:hidden;transition:.2s;backdrop-filter:blur(2px);
}
.ap-overlay.open{opacity:1;visibility:visible}
.ap-drawer{
  position:fixed;bottom:0;left:0;right:0;background:var(--paper);
  z-index:301;border-radius:16px 16px 0 0;max-height:92vh;
  display:flex;flex-direction:column;
  transform:translateY(100%);transition:.28s cubic-bezier(.4,0,.2,1);
}
.ap-drawer.open{transform:translateY(0)}
.ap-drawer-handle{width:36px;height:3px;background:var(--line-strong);border-radius:2px;margin:10px auto 4px}
.ap-drawer-head{
  padding:8px 20px 14px;display:flex;align-items:center;justify-content:space-between;
  border-bottom:1px solid var(--line);
}
.ap-drawer-title{font-size:15px;font-weight:800;letter-spacing:-.01em}
.ap-drawer-title small{display:block;font-size:11px;font-weight:500;color:var(--ink-muted);margin-top:3px}
.ap-drawer-close{
  width:32px;height:32px;border-radius:6px;background:var(--bg-2);
  display:flex;align-items:center;justify-content:center;color:var(--ink-2);
}
.ap-drawer-body{flex:1;overflow-y:auto;padding:14px 20px}
.ap-drawer-foot{padding:14px 20px 22px;border-top:1px solid var(--line)}

/* ===== CART ===== */
.ap-cart-item{display:flex;gap:12px;padding:12px 0;border-bottom:1px solid var(--line)}
.ap-cart-item:last-child{border-bottom:none}
.ap-cart-img{
  width:60px;height:60px;border-radius:8px;flex-shrink:0;
  background:var(--bg-2);display:flex;align-items:center;
  justify-content:center;font-size:28px;
}
.ap-cart-info{flex:1;min-width:0;display:flex;flex-direction:column;gap:3px}
.ap-cart-oem{
  font-family:"SF Mono",Monaco,monospace;font-size:10px;
  font-weight:700;color:var(--yellow-dark);
}
.ap-cart-name{font-size:12px;font-weight:700;line-height:1.3}
.ap-cart-meta{font-size:10px;color:var(--ink-muted);font-weight:500}
.ap-cart-price{font-size:13px;font-weight:800;color:var(--ink);margin-top:3px}
.ap-cart-actions{display:flex;flex-direction:column;align-items:flex-end;justify-content:space-between}
.ap-cart-remove{font-size:10px;color:var(--red);font-weight:600}
.ap-qty{display:flex;align-items:center;background:var(--bg-2);border-radius:6px;overflow:hidden}
.ap-qty button{width:26px;height:26px;font-size:13px;font-weight:800;color:var(--ink-2)}
.ap-qty span{min-width:24px;text-align:center;font-size:12px;font-weight:800}
.ap-sum-row{
  display:flex;justify-content:space-between;font-size:12px;
  margin-bottom:6px;color:var(--ink-2);font-weight:500;
}
.ap-sum-row.total{
  font-size:16px;font-weight:800;color:var(--ink);
  padding-top:10px;border-top:1px solid var(--line);margin-top:8px;
}
.ap-btn-primary{
  width:100%;background:var(--ink);color:var(--paper);
  border-radius:8px;padding:13px;font-size:13px;font-weight:700;
  transition:.15s;margin-top:10px;
}
.ap-btn-primary:hover{background:var(--yellow-dark)}
.ap-btn-primary:disabled{opacity:.4;cursor:not-allowed}
.ap-btn-secondary{
  width:100%;background:var(--paper);color:var(--ink);
  border:1px solid var(--line-strong);border-radius:8px;
  padding:12px;font-size:12px;font-weight:700;margin-top:8px;
}
.ap-btn-secondary:hover{border-color:var(--ink)}

/* ===== PDP ===== */
.ap-pdp{
  position:fixed;inset:0;background:var(--bg);z-index:500;
  transform:translateY(100%);transition:.28s cubic-bezier(.4,0,.2,1);
  overflow-y:auto;display:none;
}
.ap-pdp.open{transform:translateY(0);display:block}
.ap-pdp-top{
  position:sticky;top:0;background:var(--paper);padding:12px 16px;
  display:flex;align-items:center;justify-content:space-between;
  border-bottom:1px solid var(--line);z-index:10;
}
.ap-pdp-top-title{
  font-size:11px;font-weight:700;color:var(--ink-muted);
  letter-spacing:.08em;text-transform:uppercase;
}
.ap-pdp-hero{
  aspect-ratio:1.2;background:var(--paper);
  display:flex;align-items:center;justify-content:center;
  font-size:140px;position:relative;border-bottom:1px solid var(--line);
}
.ap-pdp-hero-brand{
  position:absolute;top:14px;left:14px;
  background:var(--bg-2);color:var(--ink-2);
  font-size:10px;font-weight:800;padding:5px 10px;
  border-radius:6px;letter-spacing:.08em;text-transform:uppercase;
}
.ap-pdp-hero-oem{
  position:absolute;top:14px;right:14px;
  background:var(--yellow-soft);color:var(--yellow-dark);
  font-family:"SF Mono",monospace;font-size:10px;font-weight:800;
  padding:5px 10px;border-radius:6px;letter-spacing:.04em;
}
.ap-pdp-body{padding:18px 20px 0}
.ap-pdp-cat{
  font-size:11px;font-weight:700;color:var(--yellow-dark);
  letter-spacing:.08em;text-transform:uppercase;margin-bottom:6px;
}
.ap-pdp-name{font-size:20px;font-weight:800;letter-spacing:-.02em;line-height:1.2;margin-bottom:10px}
.ap-pdp-price{display:flex;align-items:baseline;gap:10px;flex-wrap:wrap;margin-bottom:14px}
.ap-pdp-price-now{font-size:24px;font-weight:800;color:var(--ink)}
.ap-pdp-price-old{font-size:13px;color:var(--ink-muted);text-decoration:line-through}
.ap-pdp-disc{background:var(--red-soft);color:var(--red);padding:4px 10px;border-radius:6px;font-size:11px;font-weight:800}

/* Fitment check */
.ap-fitment{
  background:var(--green-soft);border-left:3px solid var(--green);
  padding:12px 14px;border-radius:var(--r-sm);margin-bottom:16px;
  font-size:12px;color:var(--green);font-weight:600;line-height:1.5;
}
.ap-fitment.warn{background:var(--amber-soft);border-color:var(--amber);color:var(--amber)}

/* Spec table */
.ap-spec-table{
  background:var(--paper);border:1px solid var(--line);
  border-radius:var(--r);overflow:hidden;margin-bottom:16px;
}
.ap-spec-row{
  display:grid;grid-template-columns:1fr 1.3fr;font-size:12px;
  border-bottom:1px solid var(--line);
}
.ap-spec-row:last-child{border-bottom:none}
.ap-spec-row:nth-child(odd){background:var(--bg)}
.ap-spec-key{
  padding:10px 14px;color:var(--ink-muted);font-weight:600;
  border-right:1px solid var(--line);font-size:11px;
}
.ap-spec-val{padding:10px 14px;color:var(--ink);font-weight:700}

/* Opts */
.ap-opt-label{
  display:flex;justify-content:space-between;align-items:baseline;
  font-size:12px;font-weight:700;color:var(--ink-2);margin-bottom:10px;
}
.ap-opt-label span{color:var(--ink-muted);font-weight:500;font-size:11px}
.ap-opt-chips{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:16px}
.ap-opt-chip{
  padding:9px 14px;border:1px solid var(--line-strong);background:var(--paper);
  border-radius:6px;font-size:12px;font-weight:700;color:var(--ink);
  transition:.15s;text-align:center;
}
.ap-opt-chip:hover{border-color:var(--yellow)}
.ap-opt-chip.active{background:var(--ink);color:var(--paper);border-color:var(--ink)}
.ap-opt-chip.disabled{opacity:.35;text-decoration:line-through;cursor:not-allowed}

/* Warranty block */
.ap-warranty{
  display:flex;gap:12px;padding:14px;background:var(--bg);
  border:1px solid var(--line);border-radius:var(--r-sm);margin-bottom:16px;
}
.ap-warranty-icon{
  width:36px;height:36px;border-radius:50%;background:var(--paper);
  border:1px solid var(--line);display:flex;align-items:center;justify-content:center;
  font-size:16px;flex-shrink:0;
}
.ap-warranty-body{flex:1;min-width:0}
.ap-warranty-title{font-size:12px;font-weight:700;color:var(--ink);margin-bottom:2px}
.ap-warranty-sub{font-size:11px;color:var(--ink-muted);line-height:1.5}

.ap-pdp-cta{
  position:sticky;bottom:0;background:var(--paper);
  border-top:1px solid var(--line);padding:12px 20px;
  display:flex;gap:10px;
}
.ap-pdp-cta .ap-btn-primary{margin:0;flex:1}
.ap-pdp-wish{
  width:48px;height:48px;border:1px solid var(--line-strong);
  border-radius:8px;display:flex;align-items:center;justify-content:center;
  background:var(--paper);color:var(--ink-2);
}
.ap-pdp-wish:hover{border-color:var(--yellow);color:var(--yellow-dark)}

/* ===== ADMIN ===== */
.ap-admin{display:flex;min-height:100vh;background:var(--bg)}
.ap-sidebar{
  width:200px;background:var(--paper);border-right:1px solid var(--line);
  position:fixed;top:0;left:0;bottom:0;z-index:100;
  display:flex;flex-direction:column;transition:transform .25s;
}
.ap-sidebar.collapsed{transform:translateX(-100%)}
@media(min-width:1024px){.ap-sidebar.collapsed{transform:translateX(0)}}
.ap-sb-brand{padding:18px 18px 16px;border-bottom:1px solid var(--line)}
.ap-sb-brand-logo{
  width:32px;height:32px;border-radius:6px;background:var(--ink);color:var(--yellow);
  display:flex;align-items:center;justify-content:center;
  font-size:14px;font-weight:800;margin-bottom:10px;
}
.ap-sb-brand-name{font-size:14px;font-weight:800;letter-spacing:-.01em;line-height:1}
.ap-sb-brand-sub{font-size:9px;font-weight:700;color:var(--ink-muted);letter-spacing:.14em;text-transform:uppercase;margin-top:3px}
.ap-sb-user{
  padding:12px 16px;display:flex;align-items:center;gap:10px;
  border-bottom:1px solid var(--line);background:var(--bg);
}
.ap-sb-avatar{
  width:34px;height:34px;border-radius:50%;background:var(--yellow);
  color:var(--paper);display:flex;align-items:center;justify-content:center;
  font-weight:800;font-size:11px;flex-shrink:0;letter-spacing:.02em;
}
.ap-sb-user-info{flex:1;min-width:0}
.ap-sb-user-name{font-size:11px;font-weight:700}
.ap-sb-user-role{font-size:9px;color:var(--ink-muted);font-weight:600;letter-spacing:.04em;text-transform:uppercase;margin-top:1px}
.ap-sb-nav{flex:1;overflow-y:auto;padding:10px 8px}
.ap-sb-group{margin-bottom:12px}
.ap-sb-group-label{
  font-size:9px;font-weight:800;letter-spacing:.14em;
  color:var(--ink-muted);text-transform:uppercase;
  padding:6px 10px 4px;
}
.ap-sb-item{
  display:flex;align-items:center;gap:10px;padding:9px 10px;
  border-radius:6px;font-size:12px;font-weight:600;
  color:var(--ink-2);width:100%;text-align:left;
  transition:.15s;margin-bottom:1px;position:relative;
}
.ap-sb-item:hover{background:var(--bg-2);color:var(--ink)}
.ap-sb-item.active{background:var(--yellow-soft);color:var(--yellow-dark)}
.ap-sb-icon{font-size:14px;width:18px;text-align:center;flex-shrink:0}
.ap-sb-badge{
  margin-left:auto;background:var(--yellow-dark);color:var(--paper);
  font-size:9px;font-weight:800;padding:2px 6px;border-radius:8px;
  min-width:18px;text-align:center;
}
.ap-sb-foot{padding:12px;border-top:1px solid var(--line)}
.ap-sb-switch{
  width:100%;padding:10px;background:var(--bg);border:1px solid var(--line);
  border-radius:6px;color:var(--ink-2);font-size:11px;font-weight:700;
  display:flex;align-items:center;justify-content:center;gap:6px;
}
.ap-sb-switch:hover{background:var(--ink);color:var(--paper);border-color:var(--ink)}
.ap-sb-overlay{
  position:fixed;inset:0;background:rgba(28,28,26,.4);z-index:99;
  opacity:0;visibility:hidden;transition:.2s;
}
.ap-sb-overlay.show{opacity:1;visibility:visible}
@media(min-width:1024px){.ap-sb-overlay{display:none}}

.ap-main{flex:1;margin-left:200px;min-width:0}
@media(max-width:1023px){.ap-main{margin-left:0}}
.ap-topbar{
  position:sticky;top:0;background:var(--paper);
  border-bottom:1px solid var(--line);padding:12px 20px;z-index:50;
  display:flex;align-items:center;gap:12px;
}
.ap-menu-btn{
  width:36px;height:36px;border-radius:6px;background:var(--bg-2);
  display:none;align-items:center;justify-content:center;color:var(--ink-2);
}
@media(max-width:1023px){.ap-menu-btn{display:flex}}
.ap-page-title{font-size:16px;font-weight:800;letter-spacing:-.01em}
.ap-page-sub{font-size:11px;color:var(--ink-muted);font-weight:500;margin-top:2px}
.ap-top-right{margin-left:auto;display:flex;gap:6px;align-items:center}
.ap-switch-customer{
  display:flex;align-items:center;gap:6px;padding:8px 14px;
  background:var(--ink);color:var(--paper);border-radius:6px;
  font-size:11px;font-weight:700;white-space:nowrap;
}
.ap-switch-customer:hover{background:var(--yellow-dark)}
.ap-icon-btn{
  width:36px;height:36px;border-radius:6px;background:var(--bg-2);
  display:flex;align-items:center;justify-content:center;color:var(--ink-2);
  position:relative;
}
.ap-icon-btn:hover{background:var(--line)}
.ap-content{padding:20px}
@media(max-width:639px){.ap-content{padding:14px}}

/* KPI */
.ap-kpi-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:10px;margin-bottom:18px}
@media(min-width:640px){.ap-kpi-grid{grid-template-columns:repeat(4,1fr)}}
.ap-kpi{
  background:var(--paper);border:1px solid var(--line);border-radius:var(--r);
  padding:14px;
}
.ap-kpi-label{
  font-size:10px;font-weight:700;letter-spacing:.08em;
  color:var(--ink-muted);text-transform:uppercase;margin-bottom:8px;
}
.ap-kpi-value{font-size:20px;font-weight:800;letter-spacing:-.02em;color:var(--ink);line-height:1.1}
.ap-kpi-value.yellow{color:var(--yellow-dark)}
.ap-kpi-trend{
  display:inline-flex;align-items:center;gap:4px;font-size:10px;
  font-weight:700;padding:2px 7px;border-radius:8px;margin-top:8px;
}
.ap-kpi-trend.up{background:var(--green-soft);color:var(--green)}
.ap-kpi-trend.down{background:var(--red-soft);color:var(--red)}
.ap-kpi-trend.neutral{background:var(--bg-2);color:var(--ink-muted)}

/* Panel */
.ap-panel{
  background:var(--paper);border:1px solid var(--line);
  border-radius:var(--r);overflow:hidden;margin-bottom:14px;
}
.ap-panel-head{
  padding:14px 18px;border-bottom:1px solid var(--line);
  display:flex;align-items:center;justify-content:space-between;gap:12px;
}
.ap-panel-title{font-size:13px;font-weight:800;letter-spacing:-.01em}
.ap-panel-sub{font-size:11px;color:var(--ink-muted);font-weight:500;margin-top:3px}
.ap-panel-body{padding:16px}
.ap-panel-body-flush{padding:0}

/* Table */
.ap-tbl-wrap{overflow-x:auto}
.ap-tbl{width:100%;border-collapse:collapse;font-size:12px}
.ap-tbl th{
  text-align:left;padding:10px 14px;font-size:10px;font-weight:800;
  letter-spacing:.08em;text-transform:uppercase;color:var(--ink-muted);
  background:var(--bg);border-bottom:1px solid var(--line);white-space:nowrap;
}
.ap-tbl td{padding:12px 14px;border-bottom:1px solid var(--line);vertical-align:middle}
.ap-tbl tr:last-child td{border-bottom:none}
.ap-tbl tr:hover td{background:var(--bg)}

/* Buttons */
.ap-btn{
  padding:7px 12px;border-radius:6px;font-size:11px;font-weight:700;
  transition:.15s;display:inline-flex;align-items:center;gap:5px;
}
.ap-btn.primary{background:var(--ink);color:var(--paper)}
.ap-btn.primary:hover{background:var(--yellow-dark)}
.ap-btn.outline{background:var(--paper);color:var(--ink-2);border:1px solid var(--line-strong)}
.ap-btn.outline:hover{border-color:var(--ink);color:var(--ink)}
.ap-btn.danger{background:var(--red);color:var(--paper)}
.ap-btn.success{background:var(--green);color:var(--paper)}
.ap-btn-back{
  display:inline-flex;align-items:center;gap:6px;
  padding:7px 12px;background:var(--paper);border:1px solid var(--line);
  border-radius:6px;color:var(--ink-2);font-size:11px;font-weight:700;
  margin-bottom:14px;
}
.ap-btn-back:hover{border-color:var(--ink);color:var(--ink)}

/* Badges */
.ap-bdg{
  display:inline-flex;align-items:center;gap:5px;
  padding:4px 9px;border-radius:6px;font-size:10px;font-weight:700;
  white-space:nowrap;
}
.ap-bdg.success{background:var(--green-soft);color:var(--green)}
.ap-bdg.warning{background:var(--amber-soft);color:var(--amber)}
.ap-bdg.danger{background:var(--red-soft);color:var(--red)}
.ap-bdg.info{background:var(--slate-soft);color:var(--slate)}
.ap-bdg.yellow{background:var(--yellow-soft);color:var(--yellow-dark)}
.ap-bdg.neutral{background:var(--bg-2);color:var(--ink-muted)}
.ap-bdg-dot{width:5px;height:5px;border-radius:50%;background:currentColor}

/* List */
.ap-list-item{
  display:flex;align-items:center;gap:12px;padding:14px 0;
  border-bottom:1px solid var(--line);
}
.ap-list-item:last-child{border-bottom:none}
.ap-list-avatar{
  width:38px;height:38px;border-radius:8px;
  background:var(--bg-2);color:var(--ink-2);
  display:flex;align-items:center;justify-content:center;
  font-weight:800;font-size:12px;flex-shrink:0;
}
.ap-list-info{flex:1;min-width:0}
.ap-list-name{font-size:12px;font-weight:700}
.ap-list-sub{font-size:11px;color:var(--ink-muted);margin-top:2px;font-weight:500}

/* Order card */
.ap-order{
  border:1px solid var(--line);border-radius:var(--r);
  padding:14px;margin-bottom:10px;background:var(--paper);
}
.ap-order-head{
  display:flex;justify-content:space-between;align-items:flex-start;
  gap:12px;margin-bottom:12px;padding-bottom:10px;
  border-bottom:1px solid var(--line);
}
.ap-order-id{font-size:13px;font-weight:800;color:var(--ink)}
.ap-order-meta{font-size:11px;color:var(--ink-muted);margin-top:3px}
.ap-order-items{
  background:var(--bg);border-radius:6px;padding:10px;
  margin:10px 0;font-size:11px;line-height:1.7;color:var(--ink-2);
}
.ap-order-actions{
  display:flex;gap:6px;flex-wrap:wrap;
  padding-top:10px;border-top:1px solid var(--line);
}

/* Filters */
.ap-filters{
  display:flex;gap:6px;overflow-x:auto;padding-bottom:12px;
  scrollbar-width:none;
}
.ap-filters::-webkit-scrollbar{display:none}
.ap-chip{
  flex-shrink:0;padding:7px 13px;background:var(--paper);
  border:1px solid var(--line);border-radius:6px;
  font-size:11px;font-weight:700;color:var(--ink-2);
  white-space:nowrap;transition:.15s;
}
.ap-chip:hover{border-color:var(--yellow)}
.ap-chip.active{background:var(--ink);color:var(--paper);border-color:var(--ink)}

/* Chart */
.ap-chart{display:flex;align-items:flex-end;gap:6px;height:140px;padding-top:16px}
.ap-chart-bar{
  flex:1;background:var(--bg-2);border-radius:4px 4px 0 0;
  position:relative;min-height:6px;transition:.3s;
}
.ap-chart-bar.active{background:var(--yellow)}
.ap-chart-bar span{
  position:absolute;bottom:-20px;left:0;right:0;text-align:center;
  font-size:9px;color:var(--ink-muted);font-weight:700;
}
.ap-chart-bar b{
  position:absolute;top:-16px;left:0;right:0;text-align:center;
  font-size:9px;color:var(--ink);font-weight:800;
}

/* Modal */
.ap-modal{
  position:fixed;inset:0;background:rgba(28,28,26,.45);z-index:600;
  display:flex;align-items:flex-end;justify-content:center;
  opacity:0;visibility:hidden;transition:.2s;padding:0;
}
@media(min-width:640px){.ap-modal{align-items:center;padding:16px}}
.ap-modal.open{opacity:1;visibility:visible}
.ap-modal-box{
  background:var(--paper);border-radius:14px 14px 0 0;width:100%;max-width:500px;
  transform:translateY(16px);transition:.24s;max-height:92vh;overflow-y:auto;padding:22px;
}
@media(min-width:640px){.ap-modal-box{border-radius:var(--r-lg)}}
.ap-modal.open .ap-modal-box{transform:translateY(0)}
.ap-modal-title{font-size:17px;font-weight:800;letter-spacing:-.01em;margin-bottom:5px}
.ap-modal-sub{font-size:12px;color:var(--ink-muted);margin-bottom:16px}

/* Success */
.ap-success{padding:36px 20px;text-align:center}
.ap-success-icon{
  width:68px;height:68px;border-radius:50%;background:var(--green-soft);color:var(--green);
  display:flex;align-items:center;justify-content:center;margin:0 auto 20px;font-size:28px;
}
.ap-success-title{font-size:20px;font-weight:800;letter-spacing:-.02em;margin-bottom:8px}
.ap-success-sub{font-size:13px;color:var(--ink-2);line-height:1.7;margin-bottom:22px}

/* Toast */
.ap-toast{
  position:fixed;bottom:142px;left:50%;
  transform:translateX(-50%) translateY(16px);
  background:var(--ink);color:var(--paper);
  padding:10px 20px;border-radius:20px;font-size:12px;font-weight:600;
  z-index:700;opacity:0;transition:.25s;pointer-events:none;
  white-space:nowrap;max-width:92vw;overflow:hidden;text-overflow:ellipsis;
}
.ap-toast.show{opacity:1;transform:translateX(-50%) translateY(0)}

/* Empty */
.ap-empty{text-align:center;padding:40px 20px;color:var(--ink-muted)}
.ap-empty-icon{font-size:40px;margin-bottom:10px;opacity:.4}
.ap-empty-title{font-size:14px;font-weight:700;color:var(--ink);margin-bottom:4px}
.ap-empty-desc{font-size:11px}

/* Form */
.ap-form-group{margin-bottom:14px}
.ap-form-label{
  display:block;font-size:11px;font-weight:700;letter-spacing:.04em;
  color:var(--ink-2);margin-bottom:6px;
}
.ap-form-input{
  width:100%;padding:10px 12px;border:1px solid var(--line);
  border-radius:6px;font-size:13px;background:var(--paper);
  transition:.15s;font-weight:500;
}
.ap-form-input:focus{border-color:var(--yellow);box-shadow:0 0 0 3px var(--yellow-soft)}
.ap-form-row{display:grid;grid-template-columns:1fr 1fr;gap:12px}

/* Search overlay */
.ap-search-overlay{
  position:fixed;inset:0;background:var(--bg);z-index:600;
  transform:translateY(-100%);transition:.28s;overflow-y:auto;
}
.ap-search-overlay.open{transform:translateY(0)}
.ap-search-head{
  background:var(--paper);padding:14px 18px;display:flex;gap:10px;
  align-items:center;border-bottom:1px solid var(--line);
  position:sticky;top:0;z-index:10;
}
.ap-search-input{
  flex:1;padding:12px 16px;background:var(--bg);
  border-radius:8px;font-size:14px;border:1px solid transparent;
  font-weight:500;
}
.ap-search-input:focus{border-color:var(--yellow);background:var(--paper)}
.ap-search-cancel{font-size:12px;font-weight:700;color:var(--ink-2)}
.ap-search-body{padding:20px}
.ap-search-tag-row{display:flex;flex-wrap:wrap;gap:6px;margin-bottom:20px}
.ap-search-tag{
  padding:8px 14px;background:var(--paper);border:1px solid var(--line);
  border-radius:6px;font-size:11px;font-weight:600;color:var(--ink-2);
}
.ap-search-tag:hover{border-color:var(--yellow);color:var(--yellow-dark)}
.ap-search-result{
  display:flex;gap:10px;padding:10px 0;border-bottom:1px solid var(--line);
  cursor:pointer;align-items:center;
}

/* Alert */
.ap-alert{
  padding:12px 14px;border-radius:var(--r-sm);font-size:12px;
  font-weight:500;display:flex;gap:10px;margin-bottom:12px;line-height:1.6;
}
.ap-alert.info{background:var(--slate-soft);color:var(--slate)}
.ap-alert.success{background:var(--green-soft);color:var(--green)}
.ap-alert.warn{background:var(--amber-soft);color:var(--amber)}

/* Chat */
.ap-chat-fab{
  position:fixed;bottom:142px;right:16px;width:48px;height:48px;
  border-radius:50%;background:var(--ink);color:var(--paper);
  display:flex;align-items:center;justify-content:center;
  box-shadow:var(--shadow);z-index:250;
}
.ap-chat{
  position:fixed;bottom:142px;right:16px;width:320px;
  max-width:calc(100vw - 32px);height:440px;max-height:70vh;
  background:var(--paper);border-radius:var(--r-lg);z-index:260;
  display:flex;flex-direction:column;transform:translateY(16px);
  opacity:0;visibility:hidden;transition:.2s;
  box-shadow:var(--shadow);overflow:hidden;
  border:1px solid var(--line);
}
.ap-chat.open{transform:translateY(0);opacity:1;visibility:visible}
.ap-chat-head{
  background:var(--ink);color:var(--paper);padding:12px 14px;
  display:flex;align-items:center;gap:10px;
}
.ap-chat-avatar{
  width:34px;height:34px;border-radius:50%;background:var(--yellow);
  color:var(--ink);display:flex;align-items:center;justify-content:center;
  font-size:14px;
}
.ap-chat-info{flex:1}
.ap-chat-name{font-size:12px;font-weight:700}
.ap-chat-status{
  font-size:10px;opacity:.85;display:flex;align-items:center;gap:4px;
  margin-top:2px;
}
.ap-chat-live{width:5px;height:5px;background:#86efac;border-radius:50%}
.ap-chat-body{
  flex:1;overflow-y:auto;padding:12px;display:flex;flex-direction:column;
  gap:8px;background:var(--bg);
}
.ap-chat-msg{
  max-width:82%;padding:9px 12px;border-radius:12px;
  font-size:12px;line-height:1.5;
}
.ap-chat-msg.bot{
  background:var(--paper);color:var(--ink);align-self:flex-start;
  border-bottom-left-radius:3px;border:1px solid var(--line);
}
.ap-chat-msg.user{
  background:var(--ink);color:var(--paper);align-self:flex-end;
  border-bottom-right-radius:3px;
}
.ap-chat-time{font-size:9px;opacity:.55;margin-top:3px}
.ap-chat-input-row{
  border-top:1px solid var(--line);padding:8px;
  display:flex;gap:6px;background:var(--paper);
}
.ap-chat-input{
  flex:1;padding:9px 14px;background:var(--bg);border:none;
  border-radius:18px;font-size:12px;
}
.ap-chat-send{
  width:34px;height:34px;border-radius:50%;background:var(--yellow);
  color:var(--ink);display:flex;align-items:center;justify-content:center;
}

::-webkit-scrollbar{width:6px;height:6px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--line-strong);border-radius:3px}
::-webkit-scrollbar-thumb:hover{background:var(--ink-muted)}
</style>
</head>
<body>

<!-- MODE SWITCH -->
<div class="ap-mode">
  <button class="ap-mode-btn active" id="msCustomer" onclick="setMode('customer')">🔧 Toko</button>
  <button class="ap-mode-btn" id="msAdmin" onclick="setMode('admin')">📋 Admin</button>
</div>

<!-- =================== CUSTOMER =================== -->
<div id="customerApp">
  <header class="ap-header">
    <div class="ap-band">Garansi resmi · Original OEM & Aftermarket · Kirim se-Indonesia</div>
    <div class="ap-head">
      <div class="ap-brand">
        <div class="ap-logo">AP</div>
        <div>
          <div class="ap-brand-name">AutoParts Pro</div>
          <div class="ap-brand-sub">Sparepart Original</div>
        </div>
      </div>
      <div class="ap-head-right">
        <button class="ap-admin-entry" onclick="setMode('admin')">📋 Admin</button>
        <button class="ap-icon" onclick="toggleOrders()" aria-label="Pesanan">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </button>
        <button class="ap-icon" onclick="toggleCart()" aria-label="Keranjang">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          <span class="ap-badge" id="cartBadge" style="display:none">0</span>
        </button>
      </div>
    </div>
    <div class="ap-search" onclick="openSearch()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4"/></svg>
      <span>Cari part berdasarkan nomor OEM, nama, atau brand</span>
    </div>
  </header>

  <!-- VEHICLE PICKER -->
  <div class="ap-vehicle">
    <div class="ap-vehicle-label">Pilih kendaraan Anda</div>
    <div class="ap-vehicle-row">
      <button class="ap-select" id="selBrand" onclick="pickVehicle('brand')">
        <div>
          <small>Merek</small>
          <div class="val" id="valBrand">Pilih</div>
        </div>
        <span class="caret">▼</span>
      </button>
      <button class="ap-select" id="selModel" onclick="pickVehicle('model')">
        <div>
          <small>Model</small>
          <div class="val" id="valModel">Pilih</div>
        </div>
        <span class="caret">▼</span>
      </button>
      <button class="ap-select" id="selYear" onclick="pickVehicle('year')">
        <div>
          <small>Tahun</small>
          <div class="val" id="valYear">Pilih</div>
        </div>
        <span class="caret">▼</span>
      </button>
    </div>
  </div>

  <!-- VEHICLE BANNER (muncul jika sudah pilih) -->
  <div id="vehicleBanner"></div>

  <!-- KATEGORI PART -->
  <div class="ap-cats" id="catNav"></div>

  <!-- SERVICES -->
  <section class="ap-section">
    <div class="ap-section-head">
      <div>
        <div class="ap-section-title">Layanan Bengkel</div>
        <div class="ap-section-sub">Booking service tanpa antri</div>
      </div>
    </div>
    <div class="ap-services">
      <div class="ap-service" onclick="showToast('Booking service')">
        <div class="ap-service-icon">🔧</div>
        <div class="ap-service-body">
          <div class="ap-service-title">Service Rutin</div>
          <div class="ap-service-sub">Ganti oli, tune up</div>
        </div>
      </div>
      <div class="ap-service" onclick="showToast('Cek kendaraan')">
        <div class="ap-service-icon">🔍</div>
        <div class="ap-service-body">
          <div class="ap-service-title">Diagnosa</div>
          <div class="ap-service-sub">Scan komputer</div>
        </div>
      </div>
      <div class="ap-service" onclick="showToast('Pemasangan part')">
        <div class="ap-service-icon">🛠</div>
        <div class="ap-service-body">
          <div class="ap-service-title">Pasang Part</div>
          <div class="ap-service-sub">Jasa pemasangan</div>
        </div>
      </div>
      <div class="ap-service" onclick="showToast('Home service')">
        <div class="ap-service-icon">🚗</div>
        <div class="ap-service-body">
          <div class="ap-service-title">Home Service</div>
          <div class="ap-service-sub">Kami datang ke Anda</div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRODUCTS -->
  <section class="ap-section" id="katalog">
    <div class="ap-section-head">
      <div>
        <div class="ap-section-title" id="sectionTitle">Sparepart Populer</div>
        <div class="ap-section-sub" id="sectionSub">Original & aftermarket</div>
      </div>
      <button class="ap-section-link" onclick="loadMore()">Semua →</button>
    </div>
    <div class="ap-grid" id="productGrid"></div>
  </section>
</div>

<!-- =================== ADMIN =================== -->
<div id="adminApp" class="ap-admin hidden">
  <aside class="ap-sidebar collapsed" id="apSidebar">
    <div class="ap-sb-brand">
      <div class="ap-sb-brand-logo">AP</div>
      <div class="ap-sb-brand-name">AutoParts Pro</div>
      <div class="ap-sb-brand-sub">Backoffice</div>
    </div>
    <div class="ap-sb-user">
      <div class="ap-sb-avatar">BW</div>
      <div class="ap-sb-user-info">
        <div class="ap-sb-user-name">Budi Wijaya</div>
        <div class="ap-sb-user-role">Manager</div>
      </div>
    </div>
    <nav class="ap-sb-nav">
      <div class="ap-sb-group">
        <div class="ap-sb-group-label">Operasional</div>
        <button class="ap-sb-item active" data-tab="dashboard" onclick="switchAdminTab('dashboard')">
          <span class="ap-sb-icon">📊</span> Dashboard
        </button>
        <button class="ap-sb-item" data-tab="orders" onclick="switchAdminTab('orders')">
          <span class="ap-sb-icon">📋</span> Pesanan
          <span class="ap-sb-badge" id="sbOrderBadge">0</span>
        </button>
        <button class="ap-sb-item" data-tab="service" onclick="switchAdminTab('service')">
          <span class="ap-sb-icon">🔧</span> Service
          <span class="ap-sb-badge" id="sbServiceBadge">0</span>
        </button>
      </div>
      <div class="ap-sb-group">
        <div class="ap-sb-group-label">Katalog</div>
        <button class="ap-sb-item" data-tab="products" onclick="switchAdminTab('products')">
          <span class="ap-sb-icon">⚙</span> Produk
        </button>
        <button class="ap-sb-item" data-tab="inventory" onclick="switchAdminTab('inventory')">
          <span class="ap-sb-icon">📦</span> Stok
        </button>
        <button class="ap-sb-item" data-tab="fitment" onclick="switchAdminTab('fitment')">
          <span class="ap-sb-icon">🚗</span> Fitment
        </button>
      </div>
      <div class="ap-sb-group">
        <div class="ap-sb-group-label">Bisnis</div>
        <button class="ap-sb-item" data-tab="customers" onclick="switchAdminTab('customers')">
          <span class="ap-sb-icon">👥</span> Pelanggan
        </button>
        <button class="ap-sb-item" data-tab="staff" onclick="switchAdminTab('staff')">
          <span class="ap-sb-icon">👨‍🔧</span> Mekanik
        </button>
        <button class="ap-sb-item" data-tab="reports" onclick="switchAdminTab('reports')">
          <span class="ap-sb-icon">📈</span> Laporan
        </button>
      </div>
      <div class="ap-sb-group">
        <div class="ap-sb-group-label">Sistem</div>
        <button class="ap-sb-item" data-tab="settings" onclick="switchAdminTab('settings')">
          <span class="ap-sb-icon">⚙</span> Pengaturan
        </button>
      </div>
    </nav>
    <div class="ap-sb-foot">
      <button class="ap-sb-switch" onclick="setMode('customer')">
        <span>🏪</span> Lihat Toko
      </button>
    </div>
  </aside>
  <div class="ap-sb-overlay" id="apSidebarOverlay" onclick="toggleApSidebar()"></div>

  <main class="ap-main">
    <div class="ap-topbar">
      <button class="ap-menu-btn" onclick="toggleApSidebar()" aria-label="Menu">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
      <div>
        <div class="ap-page-title" id="apPageTitle">Dashboard</div>
        <div class="ap-page-sub" id="apPageSub">Ringkasan operasional</div>
      </div>
      <div class="ap-top-right">
        <button class="ap-switch-customer" onclick="setMode('customer')">🏪 Lihat Toko</button>
        <button class="ap-icon-btn" onclick="showToast('Notifikasi')" style="position:relative">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
        </button>
      </div>
    </div>
    <div class="ap-content" id="apContent"></div>
  </main>
</div>

<!-- BOTTOM NAV -->
<nav class="ap-nav" id="bottomNav">
  <button class="ap-nav-item active" data-nav="home" onclick="navTo('home')">
    <span class="ap-nav-icon">🏠</span>
    Beranda
  </button>
  <button class="ap-nav-item" data-nav="search" onclick="openSearch()">
    <span class="ap-nav-icon">🔍</span>
    Cari
  </button>
  <button class="ap-nav-item" data-nav="orders" onclick="toggleOrders()">
    <span class="ap-nav-icon">📋</span>
    Pesanan
    <span class="ap-nav-badge" id="ordersBadge" style="display:none">0</span>
  </button>
  <button class="ap-nav-item" data-nav="service" onclick="showToast('Booking service')">
    <span class="ap-nav-icon">🔧</span>
    Service
  </button>
  <button class="ap-nav-item" data-nav="admin" onclick="setMode('admin')">
    <span class="ap-nav-icon">📋</span>
    Admin
  </button>
</nav>

<!-- CHAT -->
<button class="ap-chat-fab" id="apChatFab" onclick="toggleChat()" aria-label="Chat">
  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
</button>
<div class="ap-chat" id="apChat">
  <div class="ap-chat-head">
    <div class="ap-chat-avatar">🔧</div>
    <div class="ap-chat-info">
      <div class="ap-chat-name">Konsultan Teknis</div>
      <div class="ap-chat-status"><span class="ap-chat-live"></span>Online</div>
    </div>
    <button onclick="toggleChat()" style="color:var(--paper)">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="ap-chat-body" id="apChatBody"></div>
  <div class="ap-chat-input-row">
    <input class="ap-chat-input" id="apChatInput" placeholder="Tanya soal part..." onkeydown="if(event.key==='Enter')sendChat()">
    <button class="ap-chat-send" onclick="sendChat()">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
    </button>
  </div>
</div>

<!-- CART -->
<div class="ap-overlay" id="cartOverlay" onclick="toggleCart()"></div>
<aside class="ap-drawer" id="cartDrawer">
  <div class="ap-drawer-handle"></div>
  <div class="ap-drawer-head">
    <div>
      <div class="ap-drawer-title">Keranjang</div>
      <small id="cartCountLabel" style="display:block;font-size:11px;color:var(--ink-muted);margin-top:3px">0 item</small>
    </div>
    <button class="ap-drawer-close" onclick="toggleCart()">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="ap-drawer-body" id="cartBody"></div>
  <div class="ap-drawer-foot" id="cartFoot" style="display:none">
    <div class="ap-sum-row"><span>Subtotal</span><span id="subtotal">Rp0</span></div>
    <div class="ap-sum-row"><span>Ongkir</span><span id="ongkir">Rp0</span></div>
    <div class="ap-sum-row"><span>Asuransi</span><span id="asuransi">Rp0</span></div>
    <div class="ap-sum-row total"><span>Total</span><span id="total">Rp0</span></div>
    <button class="ap-btn-primary" onclick="openCheckout()">Checkout</button>
  </div>
</aside>

<!-- ORDERS -->
<div class="ap-overlay" id="ordersOverlay" onclick="toggleOrders()"></div>
<aside class="ap-drawer" id="ordersDrawer">
  <div class="ap-drawer-handle"></div>
  <div class="ap-drawer-head">
    <div>
      <div class="ap-drawer-title">Pesanan Saya</div>
      <small style="display:block;font-size:11px;color:var(--ink-muted);margin-top:3px">Riwayat pembelian</small>
    </div>
    <button class="ap-drawer-close" onclick="toggleOrders()">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="ap-drawer-body" id="ordersBody"></div>
</aside>

<!-- SEARCH -->
<div class="ap-search-overlay" id="apSearchOverlay">
  <div class="ap-search-head">
    <input class="ap-search-input" id="apSearchInput" placeholder="Nomor OEM, nama part, brand..." oninput="handleSearch(this.value)">
    <button class="ap-search-cancel" onclick="closeSearch()">Batal</button>
  </div>
  <div class="ap-search-body">
    <div style="font-size:11px;font-weight:700;letter-spacing:.08em;color:var(--ink-muted);text-transform:uppercase;margin-bottom:10px">Nomor OEM Populer</div>
    <div class="ap-search-tag-row">
      <button class="ap-search-tag" onclick="quickSearch('oil filter')">Oil Filter</button>
      <button class="ap-search-tag" onclick="quickSearch('brake')">Brake Pad</button>
      <button class="ap-search-tag" onclick="quickSearch('spark')">Busi</button>
      <button class="ap-search-tag" onclick="quickSearch('air filter')">Air Filter</button>
      <button class="ap-search-tag" onclick="quickSearch('shock')">Shockbreaker</button>
      <button class="ap-search-tag" onclick="quickSearch('lamp')">Lampu</button>
    </div>
    <div id="searchResults"></div>
  </div>
</div>

<!-- PDP -->
<div class="ap-pdp" id="pdpModal"></div>

<!-- VEHICLE PICKER MODAL -->
<div class="ap-modal" id="vehicleModal">
  <div class="ap-modal-box">
    <div class="ap-modal-title" id="vehicleModalTitle">Pilih Kendaraan</div>
    <div class="ap-modal-sub" id="vehicleModalSub">Pilih untuk filter part yang cocok</div>
    <div id="vehicleModalBody"></div>
  </div>
</div>

<!-- CHECKOUT SUCCESS -->
<div class="ap-modal" id="checkoutModal">
  <div class="ap-modal-box">
    <div class="ap-success">
      <div class="ap-success-icon">✓</div>
      <h2 class="ap-success-title">Pesanan Diterima</h2>
      <p class="ap-success-sub">Order <b id="orderIdDisplay" class="mono">AP-2026-XXXX</b> sedang diproses.<br>Estimasi kirim 1-3 hari kerja.</p>
      <button class="ap-btn-primary" onclick="closeCheckout();toggleOrders()">Lacak Pesanan</button>
      <button class="ap-btn-secondary" onclick="closeCheckout()">Kembali Belanja</button>
    </div>
  </div>
</div>

<!-- PRODUCT MODAL -->
<div class="ap-modal" id="productModal">
  <div class="ap-modal-box">
    <div class="ap-modal-title" id="productModalTitle">Produk Baru</div>
    <div class="ap-modal-sub">Isi data part</div>
    <div class="ap-form-group"><label class="ap-form-label">Nama Part</label><input class="ap-form-input" id="pmName"></div>
    <div class="ap-form-row">
      <div class="ap-form-group"><label class="ap-form-label">Kategori</label><select class="ap-form-input" id="pmCat"></select></div>
      <div class="ap-form-group"><label class="ap-form-label">Brand</label><input class="ap-form-input" id="pmBrand"></div>
    </div>
    <div class="ap-form-group"><label class="ap-form-label">Nomor OEM</label><input class="ap-form-input" id="pmOem" placeholder="90919-01253"></div>
    <div class="ap-form-row">
      <div class="ap-form-group"><label class="ap-form-label">Harga</label><input class="ap-form-input" id="pmPrice" type="number"></div>
      <div class="ap-form-group"><label class="ap-form-label">Harga Coret</label><input class="ap-form-input" id="pmOld" type="number"></div>
    </div>
    <div class="ap-form-group"><label class="ap-form-label">Cocok untuk (koma)</label><input class="ap-form-input" id="pmFit" placeholder="Avanza 2018-2022, Xenia 2018-2022"></div>
    <div class="ap-form-group"><label class="ap-form-label">Varian (koma)</label><input class="ap-form-input" id="pmVariants" placeholder="Original, Aftermarket"></div>
    <button class="ap-btn-primary" onclick="saveProduct()">Simpan</button>
    <button class="ap-btn-secondary" onclick="closeProductModal()">Batal</button>
  </div>
</div>

<!-- STAFF MODAL -->
<div class="ap-modal" id="staffModal">
  <div class="ap-modal-box">
    <div class="ap-modal-title" id="staffModalTitle">Tambah Mekanik</div>
    <div class="ap-modal-sub">Data teknisi bengkel</div>
    <div class="ap-form-group"><label class="ap-form-label">Nama</label><input class="ap-form-input" id="sfName"></div>
    <div class="ap-form-group"><label class="ap-form-label">Email</label><input class="ap-form-input" id="sfEmail"></div>
    <div class="ap-form-group"><label class="ap-form-label">Posisi</label>
      <select class="ap-form-input" id="sfRole">
        <option>Kepala Mekanik</option>
        <option>Mekanik Senior</option>
        <option>Mekanik Junior</option>
        <option>Kasir</option>
        <option>Kurir</option>
      </select>
    </div>
    <div class="ap-form-group"><label class="ap-form-label">Spesialisasi</label><input class="ap-form-input" id="sfSpec" placeholder="Mesin, Kelistrikan, Body"></div>
    <button class="ap-btn-primary" onclick="saveStaff()">Simpan</button>
    <button class="ap-btn-secondary" onclick="closeStaffModal()">Batal</button>
  </div>
</div>

<div class="ap-toast" id="toast"></div>

<script>
/* ==================== DATA ==================== */
const CATEGORIES = [
  {id:'all',name:'Semua',icon:'🔧'},
  {id:'mesin',name:'Mesin',icon:'⚙'},
  {id:'rem',name:'Rem',icon:'🛑'},
  {id:'suspensi',name:'Suspensi',icon:'🔩'},
  {id:'kelistrikan',name:'Kelistrikan',icon:'⚡'},
  {id:'filter',name:'Filter',icon:'🔍'},
  {id:'oli',name:'Oli & Cairan',icon:'🛢'},
  {id:'body',name:'Body & Eksterior',icon:'🚗'},
  {id:'ban',name:'Ban & Velg',icon:'⭕'}
];

const VEHICLES = {
  'Toyota': {'Avanza':[2018,2019,2020,2021,2022],'Innova':[2019,2020,2021,2022,2023],'Fortuner':[2018,2019,2020,2021,2022]},
  'Honda': {'Mobilio':[2019,2020,2021,2022],'BRV':[2018,2019,2020,2021],'CRV':[2019,2020,2021,2022]},
  'Daihatsu': {'Xenia':[2018,2019,2020,2021,2022],'Terios':[2019,2020,2021,2022],'Ayla':[2019,2020,2021,2022]},
  'Suzuki': {'Ertiga':[2019,2020,2021,2022],'XL7':[2020,2021,2022,2023],'Ignis':[2018,2019,2020,2021]},
  'Mitsubishi': {'Xpander':[2019,2020,2021,2022],'Pajero':[2018,2019,2020,2021]}
};

let PRODUCTS = [
  {id:1,name:'Oil Filter Original',brand:'Toyota Genuine',cat:'filter',price:45000,old:0,
   emoji:'🔍',bg:'#efefec',rating:4.9,sold:1247,isOem:true,stock:340,
   oem:'90915-YZZD4',fit:['Avanza 2018-2022','Xenia 2018-2022','Mobilio 2019-2022'],
   spec:{'Tipe':'Cartridge','Diameter':'65mm','Thread':'3/4-16 UNF','Warranty':'3 bulan'},
   variants:{'Original':240,'Aftermarket':100},
   desc:'Oil filter original Toyota dengan media filtrasi presisi untuk melindungi mesin dari partikel halus.'},
  {id:2,name:'Brake Pad Set Depan',brand:'Aisin',cat:'rem',price:285000,old:325000,
   emoji:'🛑',bg:'#efefec',rating:4.8,sold:432,isOem:true,stock:78,
   oem:'04465-0K290',fit:['Avanza 2018-2022','Fortuner 2018-2022','Innova 2019-2022'],
   spec:{'Tipe':'Ceramic','Posisi':'Depan','Warranty':'6 bulan','Set':'4 pcs'},
   variants:{'Original':50,'Aftermarket':28},
   desc:'Brake pad ceramic dengan daya cengkeram kuat, minim debu, dan tidak berisik.'},
  {id:3,name:'Busi Iridium',brand:'NGK',cat:'kelistrikan',price:85000,old:0,
   emoji:'⚡',bg:'#efefec',rating:4.9,sold:2103,isOem:false,stock:520,
   oem:'90919-01253',fit:['Avanza 2018-2022','Xenia 2018-2022','Ertiga 2019-2022'],
   spec:{'Tipe':'Iridium','Gap':'0.8mm','Thread':'M14x1.25','Warranty':'1 tahun'},
   variants:{'Iridium':320,'Platinum':200},
   desc:'Busi iridium dengan elektroda presisi, meningkatkan performa dan efisiensi bahan bakar.'},
  {id:4,name:'Air Filter Panel',brand:'Denso',cat:'filter',price:125000,old:145000,
   emoji:'🔍',bg:'#efefec',rating:4.7,sold:876,isOem:true,stock:245,
   oem:'17801-0Y040',fit:['Avanza 2018-2022','Xenia 2018-2022','Mobilio 2019-2022'],
   spec:{'Tipe':'Dry Panel','Media':'Paper','Warranty':'3 bulan'},
   variants:{'Original':145,'Aftermarket':100},
   desc:'Air filter dengan media kertas berkualitas, menyaring debu dan partikel sebelum masuk ke mesin.'},
  {id:5,name:'Shockbreaker Depan',brand:'KYB',cat:'suspensi',price:685000,old:780000,
   emoji:'🔩',bg:'#efefec',rating:4.8,sold:234,isOem:false,stock:42,
   oem:'48510-BZ090',fit:['Avanza 2018-2022','Xenia 2018-2022'],
   spec:{'Tipe':'Gas','Posisi':'Depan','Warranty':'1 tahun','Set':'Per pcs'},
   variants:{'KYB Gas':28,'KYB Excel-G':14},
   desc:'Shockbreaker gas dengan peredaman stabil, cocok untuk penggunaan harian dan jalan tidak rata.'},
  {id:6,name:'Oli Mesin 5W-30 Full Synthetic',brand:'Toyota',cat:'oli',price:325000,old:0,
   emoji:'🛢',bg:'#efefec',rating:4.9,sold:1876,isOem:true,stock:380,
   oem:'08880-10705',fit:['Universal'],
   spec:{'SAE':'5W-30','Tipe':'Full Synthetic','Volume':'4 Liter','Warranty':'Sesuai manual'},
   variants:{'4 Liter':250,'1 Liter':130},
   desc:'Oli mesin full synthetic untuk perlindungan maksimal dan interval penggantian lebih panjang.'},
  {id:7,name:'Lampu LED Headlamp H4',brand:'Philips',cat:'kelistrikan',price:185000,old:0,
   emoji:'💡',bg:'#efefec',rating:4.7,sold:1120,isOem:false,stock:234,
   oem:'PH-H4-LED',fit:['Universal H4'],
   spec:{'Tipe':'LED','Socket':'H4','Watt':'25W','Warranty':'1 tahun'},
   variants:{'Standard':150,'Plus Bright':84},
   desc:'Lampu LED H4 dengan cahaya putih terang 6000K, konsumsi daya rendah, umur pakai panjang.'},
  {id:8,name:'V-Belt Alternator',brand:'Mitsuboshi',cat:'mesin',price:145000,old:0,
   emoji:'⚙',bg:'#efefec',rating:4.8,sold:567,isOem:false,stock:168,
   oem:'9004A-91016',fit:['Avanza 2018-2022','Xenia 2018-2022'],
   spec:{'Tipe':'V-Belt','Material':'EPDM','Warranty':'6 bulan'},
   variants:{'Mitsuboshi':98,'Bando':70},
   desc:'V-belt alternator dengan karet EPDM tahan panas, usia pakai panjang, minim getaran.'},
  {id:9,name:'Radiator Coolant 1L',brand:'Toyota',cat:'oli',price:65000,old:0,
   emoji:'🛢',bg:'#efefec',rating:4.8,sold:987,isOem:true,stock:520,
   oem:'08889-80077',fit:['Universal'],
   spec:{'Tipe':'Coolant','Volume':'1 Liter','Warna':'Merah','Warranty':'-'},
   variants:{'1 Liter':350,'4 Liter':170},
   desc:'Cairan radiator dengan formula ethylene glycol untuk menjaga suhu mesin stabil.'},
  {id:10,name:'Wiper Blade Set',brand:'Denso',cat:'body',price:145000,old:0,
   emoji:'🚗',bg:'#efefec',rating:4.7,sold:1234,isOem:true,stock:198,
   oem:'85212-BZ050',fit:['Avanza 2018-2022','Mobilio 2019-2022','Ertiga 2019-2022'],
   spec:{'Panjang':'24 inch + 16 inch','Tipe':'Conventional','Warranty':'3 bulan'},
   variants:{'24+16 inch':120,'26+18 inch':78},
   desc:'Wiper blade set dengan karet berkualitas, menyapu bersih tanpa garis air.'},
  {id:11,name:'Tie Rod End',brand:'555',cat:'suspensi',price:235000,old:0,
   emoji:'🔩',bg:'#efefec',rating:4.8,sold:345,isOem:false,stock:98,
   oem:'45046-09280',fit:['Avanza 2018-2022','Fortuner 2018-2022'],
   spec:{'Tipe':'Tie Rod End','Posisi':'Kiri/Kanan','Warranty':'1 tahun'},
   variants:{'Kiri':50,'Kanan':48},
   desc:'Tie rod end dengan presisi tinggi, mengurangi getaran setir dan menjaga kestabilan kemudi.'},
  {id:12,name:'Ban Mobil 185/65 R15',brand:'Bridgestone',cat:'ban',price:875000,old:0,
   emoji:'⭕',bg:'#efefec',rating:4.8,sold:234,isOem:false,stock:56,
   oem:'BR-TURANZA-18565R15',fit:['Avanza 2018-2022','Mobilio 2019-2022'],
   spec:{'Ukuran':'185/65 R15','Tipe':'Turanza','Load':'88H','Warranty':'3 tahun'},
   variants:{'Turanza':30,'Ecopia':26},
   desc:'Ban dengan compound khusus, cengkeraman baik di basah maupun kering, senyap.'}
];

let ORDERS = [
  {id:'AP-2026-0842',customer:'Andi Pratama',total:415000,status:'pending',time:'10 menit lalu',items:2,payment:'Transfer',address:'Jakarta Selatan',items_list:[{name:'Oil Filter Original',variant:'Original',qty:2},{name:'Air Filter Panel',variant:'Original',qty:1}],trackingStep:1},
  {id:'AP-2026-0841',customer:'Siti Nurhaliza',total:285000,status:'processing',time:'30 menit lalu',items:1,payment:'GoPay',address:'Jakarta Pusat',items_list:[{name:'Brake Pad Set Depan',variant:'Original',qty:1}],trackingStep:2},
  {id:'AP-2026-0840',customer:'Budi Hartono',total:1370000,status:'shipped',time:'1 jam lalu',items:2,payment:'Kartu Kredit',address:'Depok',items_list:[{name:'Shockbreaker Depan',variant:'KYB Gas',qty:2}],trackingStep:3,resi:'JNE-AP-9876'},
  {id:'AP-2026-0839',customer:'Dewi Lestari',total:170000,status:'completed',time:'3 jam lalu',items:2,payment:'GoPay',address:'Tangerang',items_list:[{name:'Busi Iridium',variant:'Iridium',qty:2}],trackingStep:4},
  {id:'AP-2026-0838',customer:'Rizki Aditya',total:325000,status:'completed',time:'5 jam lalu',items:1,payment:'Transfer',address:'Bekasi',items_list:[{name:'Oli Mesin 5W-30',variant:'4 Liter',qty:1}],trackingStep:4},
  {id:'AP-2026-0837',customer:'Maya Sari',total:145000,status:'cancelled',time:'8 jam lalu',items:1,payment:'COD',address:'Jakarta Barat',items_list:[{name:'Wiper Blade Set',variant:'24+16 inch',qty:1}],trackingStep:0}
];

let SERVICE_TICKETS = [
  {id:'SV-2026-101',customer:'Andi P.',vehicle:'Avanza 2018',service:'Service Rutin',mechanic:'Joko Susilo',status:'in_progress',date:'Hari ini',eta:'2 jam'},
  {id:'SV-2026-102',customer:'Rina W.',vehicle:'Mobilio 2020',service:'Ganti Oli',mechanic:'Budi Tarno',status:'done',date:'Kemarin',eta:'Selesai'},
  {id:'SV-2026-103',customer:'Dian K.',vehicle:'Xenia 2019',service:'Diagnosa Mesin',mechanic:'-',status:'pending',date:'Hari ini',eta:'-'},
  {id:'SV-2026-104',customer:'Budi S.',vehicle:'Innova 2021',service:'Ganti Kampas Rem',mechanic:'Joko Susilo',status:'in_progress',date:'Hari ini',eta:'3 jam'}
];

let STAFF = [
  {id:1,name:'Budi Wijaya',email:'budi@autopartspro.id',role:'Manager',spec:'Manajemen',status:'active'},
  {id:2,name:'Joko Susilo',email:'joko@autopartspro.id',role:'Kepala Mekanik',spec:'Mesin & Kelistrikan',status:'active'},
  {id:3,name:'Budi Tarno',email:'budi.t@autopartspro.id',role:'Mekanik Senior',spec:'Suspensi & Rem',status:'active'},
  {id:4,name:'Sari Indah',email:'sari@autopartspro.id',role:'Kasir',spec:'-',status:'active'},
  {id:5,name:'Dedi Kurniawan',email:'dedi@autopartspro.id',role:'Kurir',spec:'-',status:'active'}
];

let CUSTOMERS = [
  {id:1,name:'Andi Pratama',email:'andi@email.com',orders:14,spent:5240000,phone:'0812-3456-7890',city:'Jakarta',vehicles:'Avanza 2018, Innova 2021'},
  {id:2,name:'Siti Nurhaliza',email:'siti@email.com',orders:8,spent:2850000,phone:'0812-3456-7891',city:'Jakarta',vehicles:'Mobilio 2020'},
  {id:3,name:'Budi Hartono',email:'budi@email.com',orders:22,spent:8200000,phone:'0812-3456-7892',city:'Depok',vehicles:'Fortuner 2020, Avanza 2019'},
  {id:4,name:'Dewi Lestari',email:'dewi@email.com',orders:6,spent:1890000,phone:'0812-3456-7893',city:'Tangerang',vehicles:'Brio 2021'},
  {id:5,name:'Rizki Aditya',email:'rizki@email.com',orders:11,spent:3850000,phone:'0812-3456-7894',city:'Bekasi',vehicles:'Xenia 2019, Terios 2021'}
];

const PAGE_META = {
  dashboard:{title:'Dashboard',sub:'Ringkasan operasional'},
  orders:{title:'Pesanan',sub:'Kelola pesanan masuk'},
  service:{title:'Service',sub:'Antrian service bengkel'},
  products:{title:'Produk',sub:'Katalog sparepart'},
  inventory:{title:'Stok',sub:'Manajemen inventori'},
  fitment:{title:'Fitment',sub:'Kesesuaian part dengan kendaraan'},
  customers:{title:'Pelanggan',sub:'Database pelanggan'},
  staff:{title:'Mekanik',sub:'Tim teknisi bengkel'},
  reports:{title:'Laporan',sub:'Analitik & export'},
  settings:{title:'Pengaturan',sub:'Konfigurasi toko'}
};

/* ==================== STATE ==================== */
let state = {
  mode:'customer',
  cart: JSON.parse(localStorage.getItem('ap_cart')||'[]'),
  category:'all', search:'', limit:12,
  selectedVehicle:{brand:null,model:null,year:null},
  vehiclePickStep:null,
  adminTab:'dashboard', orderFilter:'all',
  currentPDP:null, pdpVariant:null, editingProduct:null, editingStaff:null
};

/* ==================== UTILS ==================== */
const rupiah = n => 'Rp' + Math.round(n).toLocaleString('id-ID');
function showToast(msg){
  const t=document.getElementById('toast');
  t.textContent=msg; t.classList.add('show');
  clearTimeout(t._t); t._t=setTimeout(()=>t.classList.remove('show'),2200);
}
function save(){
  localStorage.setItem('ap_cart',JSON.stringify(state.cart));
  updateBadges();
}
function updateBadges(){
  const count = state.cart.reduce((s,i)=>s+i.qty,0);
  const cb=document.getElementById('cartBadge');
  if(cb){ cb.textContent=count; cb.style.display=count>0?'flex':'none'; }
  document.getElementById('cartCountLabel').textContent=count+' item';

  const activeOrders=ORDERS.filter(o=>o.status==='pending'||o.status==='processing'||o.status==='shipped').length;
  const ob=document.getElementById('ordersBadge');
  if(ob){ ob.textContent=activeOrders; ob.style.display=activeOrders>0?'flex':'none'; }

  const sob=document.getElementById('sbOrderBadge');
  if(sob) sob.textContent=ORDERS.filter(o=>o.status==='pending').length;
  const svb=document.getElementById('sbServiceBadge');
  if(svb) svb.textContent=SERVICE_TICKETS.filter(s=>s.status==='pending'||s.status==='in_progress').length;
}

/* ==================== MODE ==================== */
function setMode(mode){
  state.mode=mode;
  document.getElementById('customerApp').classList.toggle('hidden',mode!=='customer');
  document.getElementById('adminApp').classList.toggle('hidden',mode!=='admin');
  document.getElementById('bottomNav').classList.toggle('hidden',mode!=='customer');
  document.getElementById('apChatFab').classList.toggle('hidden',mode!=='customer');
  document.getElementById('apChat').classList.remove('open');

  document.getElementById('msCustomer').classList.toggle('active', mode==='customer');
  document.getElementById('msAdmin').classList.toggle('active', mode==='admin');

  ['cartDrawer','ordersDrawer'].forEach(id=>document.getElementById(id).classList.remove('open'));
  ['cartOverlay','ordersOverlay'].forEach(id=>document.getElementById(id).classList.remove('open'));

  if(mode==='admin'){ renderAdmin(); }
  window.scrollTo(0,0);
  showToast(mode==='admin' ? 'Beralih ke Admin Panel' : 'Beralih ke Toko');
}
function toggleApSidebar(){
  const sb=document.getElementById('apSidebar');
  const ov=document.getElementById('apSidebarOverlay');
  sb.classList.toggle('collapsed');
  if(window.innerWidth<1024){
    if(sb.classList.contains('collapsed')) ov.classList.remove('show');
    else ov.classList.add('show');
  }
}
function initApSidebar(){
  const sb=document.getElementById('apSidebar');
  if(window.innerWidth>=1024) sb.classList.remove('collapsed');
  else sb.classList.add('collapsed');
}
window.addEventListener('resize',initApSidebar);

/* ==================== VEHICLE PICKER ==================== */
function pickVehicle(step){
  state.vehiclePickStep=step;
  const modal=document.getElementById('vehicleModal');
  modal.classList.add('open');
  renderVehicleModal();
}
function renderVehicleModal(){
  const step=state.vehiclePickStep;
  const title=document.getElementById('vehicleModalTitle');
  const sub=document.getElementById('vehicleModalSub');
  const body=document.getElementById('vehicleModalBody');

  if(step==='brand'){
    title.textContent='Pilih Merek Mobil';
    sub.textContent='Pilih merek kendaraan Anda';
    body.innerHTML=Object.keys(VEHICLES).map(b=>`
      <button class="ap-btn outline" style="width:100%;justify-content:space-between;margin-bottom:6px;padding:12px 14px;font-size:13px" onclick="selectBrand('${b}')">
        <span>${b}</span>
        <span style="color:var(--ink-muted)">${Object.keys(VEHICLES[b]).length} model</span>
      </button>`).join('');
  } else if(step==='model'){
    if(!state.selectedVehicle.brand){ showToast('Pilih merek dulu'); closeVehicleModal(); return; }
    title.textContent='Pilih Model';
    sub.textContent=state.selectedVehicle.brand;
    body.innerHTML=Object.keys(VEHICLES[state.selectedVehicle.brand]).map(m=>`
      <button class="ap-btn outline" style="width:100%;justify-content:space-between;margin-bottom:6px;padding:12px 14px;font-size:13px" onclick="selectModel('${m}')">
        <span>${m}</span>
        <span style="color:var(--ink-muted)">${VEHICLES[state.selectedVehicle.brand][m].length} tahun</span>
      </button>`).join('');
  } else if(step==='year'){
    if(!state.selectedVehicle.model){ showToast('Pilih model dulu'); closeVehicleModal(); return; }
    title.textContent='Pilih Tahun';
    sub.textContent=state.selectedVehicle.brand+' '+state.selectedVehicle.model;
    body.innerHTML=VEHICLES[state.selectedVehicle.brand][state.selectedVehicle.model].map(y=>`
      <button class="ap-btn outline" style="width:100%;margin-bottom:6px;padding:12px 14px;font-size:13px;text-align:left" onclick="selectYear(${y})">${y}</button>`).join('');
  }
}
function selectBrand(b){
  state.selectedVehicle.brand=b;
  state.selectedVehicle.model=null;
  state.selectedVehicle.year=null;
  updateVehicleUI();
  state.vehiclePickStep='model';
  renderVehicleModal();
  renderProducts(); renderVehicleBanner();
}
function selectModel(m){
  state.selectedVehicle.model=m;
  state.selectedVehicle.year=null;
  updateVehicleUI();
  state.vehiclePickStep='year';
  renderVehicleModal();
  renderProducts(); renderVehicleBanner();
}
function selectYear(y){
  state.selectedVehicle.year=y;
  updateVehicleUI();
  closeVehicleModal();
  renderProducts(); renderVehicleBanner();
  showToast('Filter: '+state.selectedVehicle.brand+' '+state.selectedVehicle.model+' '+y);
}
function closeVehicleModal(){ document.getElementById('vehicleModal').classList.remove('open'); }
function updateVehicleUI(){
  const {brand,model,year}=state.selectedVehicle;
  ['selBrand','selModel','selYear'].forEach(id=>document.getElementById(id).classList.remove('filled'));
  if(brand){
    document.getElementById('valBrand').textContent=brand;
    document.getElementById('selBrand').classList.add('filled');
  }
  if(model){
    document.getElementById('valModel').textContent=model;
    document.getElementById('selModel').classList.add('filled');
  }
  if(year){
    document.getElementById('valYear').textContent=year;
    document.getElementById('selYear').classList.add('filled');
  }
}
function resetVehicle(){
  state.selectedVehicle={brand:null,model:null,year:null};
  document.getElementById('valBrand').textContent='Pilih';
  document.getElementById('valModel').textContent='Pilih';
  document.getElementById('valYear').textContent='Pilih';
  ['selBrand','selModel','selYear'].forEach(id=>document.getElementById(id).classList.remove('filled'));
  renderVehicleBanner(); renderProducts();
}
function renderVehicleBanner(){
  const el=document.getElementById('vehicleBanner');
  const {brand,model,year}=state.selectedVehicle;
  if(!brand||!model||!year){ el.innerHTML=''; return; }
  const count=PRODUCTS.filter(p=>isFitmentMatch(p,[brand+' '+model+' '+year])).length;
  el.innerHTML=`
    <div class="ap-vbanner">
      <div class="ap-vbanner-icon">🚗</div>
      <div class="ap-vbanner-body">
        <div class="ap-vbanner-title">${brand} ${model} ${year}</div>
        <div class="ap-vbanner-sub">${count} part cocok untuk kendaraan Anda</div>
      </div>
      <button class="ap-vbanner-action" onclick="resetVehicle()">Ganti</button>
    </div>`;
}
function isFitmentMatch(p,queries){
  if(!queries||!queries.length) return true;
  return p.fit.some(f=>f==='Universal'||queries.some(q=>f.toLowerCase().includes(q.toLowerCase())));
}
function getVehicleQuery(){
  const {brand,model,year}=state.selectedVehicle;
  if(brand&&model&&year) return [brand+' '+model+' '+year];
  return null;
}

/* ==================== CATEGORY ==================== */
function renderCategories(){
  document.getElementById('catNav').innerHTML=CATEGORIES.map(c=>`
    <button class="ap-cat ${state.category===c.id?'active':''}" onclick="setCategory('${c.id}')">
      ${c.icon} ${c.name}
    </button>
  `).join('');
}
function setCategory(id){
  state.category=id;
  renderCategories(); renderProducts();
  const cat=CATEGORIES.find(c=>c.id===id);
  document.getElementById('sectionTitle').textContent = id==='all' ? 'Sparepart Populer' : cat.name;
  document.getElementById('sectionSub').textContent = id==='all' ? 'Original & aftermarket' : 'Kategori '+cat.name.toLowerCase();
}

/* ==================== PRODUCTS ==================== */
function getFiltered(){
  let arr=[...PRODUCTS];
  if(state.category!=='all') arr=arr.filter(p=>p.cat===state.category);
  if(state.search){
    const q=state.search.toLowerCase();
    arr=arr.filter(p=>p.name.toLowerCase().includes(q)||p.brand.toLowerCase().includes(q)||p.oem.toLowerCase().includes(q));
  }
  const vq=getVehicleQuery();
  if(vq) arr=arr.filter(p=>isFitmentMatch(p,vq));
  return arr;
}
function productCard(p){
  const disc=p.old>0?Math.round((p.old-p.price)/p.old*100):0;
  const stockClass=p.stock<=20?'low':p.stock<=0?'out':'';
  return `
    <div class="ap-card" onclick="openPDP(${p.id})">
      <div class="ap-card-img" style="background:${p.bg}">
        <span class="ap-card-brand">${p.brand}</span>
        ${p.isOem?`<span class="ap-card-tag oem">OEM</span>`:disc?`<span class="ap-card-tag promo">-${disc}%</span>`:`<span class="ap-card-tag after">AFTER</span>`}
        <span>${p.emoji}</span>
      </div>
      <div class="ap-card-body">
        <span class="ap-card-oem">${p.oem}</span>
        <div class="ap-card-name">${p.name}</div>
        <div class="ap-card-fit">${p.fit[0]}${p.fit.length>1?` +${p.fit.length-1} lainnya`:''}</div>
        <div class="ap-card-footer">
          <div class="ap-card-price-block">
            <span class="ap-card-price">${rupiah(p.price)}</span>
            ${p.old?`<span class="ap-card-old">${rupiah(p.old)}</span>`:''}
          </div>
          <span class="ap-card-stock ${stockClass}">${p.stock<=0?'Habis':p.stock<=20?'Sisa '+p.stock:'Tersedia'}</span>
        </div>
      </div>
    </div>`;
}
function renderProducts(){
  const arr=getFiltered().slice(0,state.limit);
  const grid=document.getElementById('productGrid');
  if(!arr.length){
    grid.innerHTML=`<div class="ap-empty" style="grid-column:1/-1"><div class="ap-empty-icon">🔍</div><div class="ap-empty-title">Tidak ada part cocok</div><div class="ap-empty-desc">Coba ubah filter kendaraan atau kategori</div></div>`;
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
  setTimeout(()=>{ if(!m.classList.contains('open')) m.style.display='none'; },280);
}
function renderPDP(){
  const p=PRODUCTS.find(x=>x.id===state.currentPDP); if(!p) return;
  const disc=p.old>0?Math.round((p.old-p.price)/p.old*100):0;
  const curStock=p.variants[state.pdpVariant]||0;
  const vq=getVehicleQuery();
  const match = !vq || isFitmentMatch(p,vq);
  const specEntries=Object.entries(p.spec||{});

  document.getElementById('pdpModal').innerHTML=`
    <div class="ap-pdp-top">
      <div class="ap-pdp-top-title">Detail Part</div>
      <button class="ap-drawer-close" onclick="closePDP()">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div class="ap-pdp-hero" style="background:${p.bg}">
      <span class="ap-pdp-hero-brand">${p.brand}</span>
      <span class="ap-pdp-hero-oem">${p.oem}</span>
      <span>${p.emoji}</span>
    </div>
    <div class="ap-pdp-body">
      <div class="ap-pdp-cat">${p.cat}</div>
      <h1 class="ap-pdp-name">${p.name}</h1>
      <div class="ap-pdp-price">
        <span class="ap-pdp-price-now">${rupiah(p.price)}</span>
        ${p.old?`<span class="ap-pdp-price-old">${rupiah(p.old)}</span><span class="ap-pdp-disc">-${disc}%</span>`:''}
      </div>

      ${vq?`
        <div class="ap-fitment ${match?'':'warn'}">
          ${match?'✓':'⚠'} ${match?'Cocok dengan':'Perlu dicek'} <b>${vq[0]}</b>
        </div>
      `:`
        <div class="ap-alert info">
          <span>ℹ</span>
          <div>Pilih kendaraan Anda terlebih dahulu untuk memastikan part ini cocok.</div>
        </div>
      `}

      <div class="ap-opt-label">
        <span>Pilih Varian</span>
        <span>${state.pdpVariant}</span>
      </div>
      <div class="ap-opt-chips">
        ${Object.keys(p.variants).map(v=>{
          const stock=p.variants[v];
          return `<button class="ap-opt-chip ${state.pdpVariant===v?'active':''} ${stock<=0?'disabled':''}" onclick="selectPDPVariant('${v}',${stock})">${v}${stock<=0?' · Habis':''}</button>`;
        }).join('')}
      </div>

      ${specEntries.length?`
        <div class="ap-opt-label" style="margin-top:4px"><span>Spesifikasi</span></div>
        <div class="ap-spec-table">
          ${specEntries.map(([k,v])=>`
            <div class="ap-spec-row">
              <div class="ap-spec-key">${k}</div>
              <div class="ap-spec-val">${v}</div>
            </div>`).join('')}
        </div>
      `:''}

      <div class="ap-opt-label" style="margin-top:4px"><span>Cocok untuk</span></div>
      <div class="ap-spec-table" style="margin-bottom:16px">
        ${p.fit.map(f=>`
          <div class="ap-spec-row" style="grid-template-columns:1fr">
            <div class="ap-spec-val" style="font-weight:600">🚗 ${f}</div>
          </div>`).join('')}
      </div>

      <div class="ap-opt-label" style="margin-top:4px"><span>Deskripsi</span></div>
      <div style="font-size:13px;line-height:1.75;color:var(--ink-2);margin-bottom:16px">${p.desc}</div>

      <div class="ap-warranty">
        <div class="ap-warranty-icon">🛡</div>
        <div class="ap-warranty-body">
          <div class="ap-warranty-title">${p.spec?.Warranty||'Garansi Resmi'}</div>
          <div class="ap-warranty-sub">Klaim garansi mudah · Ganti unit baru jika cacat produksi</div>
        </div>
      </div>
    </div>
    <div class="ap-pdp-cta">
      <button class="ap-pdp-wish" onclick="showToast('Ditambahkan ke favorit')">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
      </button>
      <button class="ap-btn-primary" onclick="addPDPToCart()" ${curStock<=0?'disabled':''}>
        ${curStock<=0?'Stok Habis':'Tambah · '+rupiah(p.price)}
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
  if(stock<=0){ showToast('Stok habis'); return; }
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
  const d=document.getElementById('cartDrawer'), o=document.getElementById('cartOverlay');
  if(d.classList.contains('open')){d.classList.remove('open');o.classList.remove('open');}
  else{ renderCart(); d.classList.add('open'); o.classList.add('open'); }
}
function renderCart(){
  const body=document.getElementById('cartBody'), foot=document.getElementById('cartFoot');
  if(!state.cart.length){
    body.innerHTML=`<div class="ap-empty"><div class="ap-empty-icon">🛒</div><div class="ap-empty-title">Keranjang kosong</div><div class="ap-empty-desc">Pilih part untuk kendaraan Anda</div></div>`;
    foot.style.display='none'; return;
  }
  foot.style.display='block';
  let sub=0;
  body.innerHTML=state.cart.map((it,i)=>{
    const p=PRODUCTS.find(x=>x.id===it.id); if(!p) return '';
    sub+=p.price*it.qty;
    return `<div class="ap-cart-item">
      <div class="ap-cart-img">${p.emoji}</div>
      <div class="ap-cart-info">
        <div class="ap-cart-oem">${p.oem}</div>
        <div class="ap-cart-name">${p.name}</div>
        <div class="ap-cart-meta">${it.variant}</div>
        <div class="ap-cart-price">${rupiah(p.price*it.qty)}</div>
      </div>
      <div class="ap-cart-actions">
        <button class="ap-cart-remove" onclick="removeCartItem(${i})">Hapus</button>
        <div class="ap-qty">
          <button onclick="updateCartQty(${i},-1)">−</button>
          <span>${it.qty}</span>
          <button onclick="updateCartQty(${i},1)">+</button>
        </div>
      </div>
    </div>`;
  }).join('');
  const ongkir=sub>=500000?0:25000;
  const asuransi=Math.round(sub*0.01);
  const total=sub+ongkir+asuransi;
  document.getElementById('subtotal').textContent=rupiah(sub);
  document.getElementById('ongkir').textContent=ongkir===0?'GRATIS':rupiah(ongkir);
  document.getElementById('asuransi').textContent=rupiah(asuransi);
  document.getElementById('total').textContent=rupiah(total);
}
function updateCartQty(idx,delta){
  const it=state.cart[idx]; if(!it) return;
  const p=PRODUCTS.find(x=>x.id===it.id);
  const stock=p.variants[it.variant]||0;
  it.qty+=delta;
  if(it.qty<=0) state.cart.splice(idx,1);
  else if(it.qty>stock){ it.qty=stock; showToast('Maksimal '+stock); }
  save(); renderCart();
}
function removeCartItem(idx){ state.cart.splice(idx,1); save(); renderCart(); showToast('Item dihapus'); }
function openCheckout(){
  if(!state.cart.length) return;
  const orderId='AP-2026-'+Math.floor(1000+Math.random()*9000);
  const total=state.cart.reduce((s,i)=>s+PRODUCTS.find(p=>p.id===i.id).price*i.qty,0);
  const itemsList=state.cart.map(i=>{
    const p=PRODUCTS.find(x=>x.id===i.id);
    return {name:p.name,variant:i.variant,qty:i.qty};
  });
  ORDERS.unshift({id:orderId,customer:'Anda',total:total+25000,status:'pending',time:'Baru saja',items:state.cart.length,payment:'Transfer',address:'Jakarta Selatan',items_list:itemsList,trackingStep:1});
  document.getElementById('orderIdDisplay').textContent=orderId;
  state.cart=[]; save(); renderCart(); toggleCart();
  document.getElementById('checkoutModal').classList.add('open');
}
function closeCheckout(){ document.getElementById('checkoutModal').classList.remove('open'); }

/* ==================== ORDERS ==================== */
function toggleOrders(){
  const d=document.getElementById('ordersDrawer'), o=document.getElementById('ordersOverlay');
  if(d.classList.contains('open')){d.classList.remove('open');o.classList.remove('open');}
  else{ renderOrders(); d.classList.add('open'); o.classList.add('open'); }
}
function renderOrders(){
  const body=document.getElementById('ordersBody');
  body.innerHTML=ORDERS.slice(0,5).map(o=>{
    const map={pending:['warning','Pending'],processing:['info','Diproses'],shipped:['info','Dikirim'],completed:['success','Selesai'],cancelled:['danger','Batal']};
    const [color,label]=map[o.status]||['neutral',o.status];
    return `<div class="ap-order">
      <div class="ap-order-head">
        <div>
          <div class="ap-order-id">${o.id}</div>
          <div class="ap-order-meta">${o.time} · ${o.payment}</div>
        </div>
        <span class="ap-bdg ${color}"><span class="ap-bdg-dot"></span>${label}</span>
      </div>
      <div class="ap-order-items">
        ${o.items_list.map(it=>`${it.name} · <b>${it.variant}</b> × ${it.qty}`).join('<br>')}
      </div>
      <div style="display:flex;justify-content:space-between;align-items:center">
        <div style="font-size:15px;font-weight:800">${rupiah(o.total)}</div>
        <button class="ap-btn primary" onclick="viewTracking('${o.id}')">Lacak</button>
      </div>
    </div>`;
  }).join('') || `<div class="ap-empty"><div class="ap-empty-icon">📋</div><div class="ap-empty-title">Belum ada pesanan</div></div>`;
}
function viewTracking(orderId){
  const o=ORDERS.find(x=>x.id===orderId); if(!o) return;
  const steps=['Order dibuat','Diproses gudang','Dikirim','Tiba di lokasi'];
  const stepMap={pending:0,processing:1,shipped:2,completed:3,cancelled:0};
  const currentStep=stepMap[o.status]||0;
  const modal=document.createElement('div');
  modal.className='ap-modal open';
  modal.innerHTML=`
    <div class="ap-modal-box">
      <div class="ap-modal-title">Lacak Pesanan</div>
      <div class="ap-modal-sub">${o.id} · ${o.payment}</div>
      ${steps.map((s,i)=>{
        const done=i<currentStep;
        const active=i===currentStep;
        return `<div style="display:flex;gap:12px;padding:12px 0;border-bottom:1px solid var(--line)">
          <div style="width:32px;height:32px;border-radius:50%;background:${done?'var(--green)':active?'var(--yellow)':'var(--bg-2)'};color:${done||active?'#fff':'var(--ink-muted)'};display:flex;align-items:center;justify-content:center;font-weight:800;font-size:12px;flex-shrink:0">${done?'✓':i+1}</div>
          <div style="flex:1">
            <div style="font-weight:${active?'700':'600'};font-size:12px">${s}</div>
            <div style="font-size:10px;color:var(--ink-muted);margin-top:2px">${done?'Selesai':active?'Berlangsung':'Menunggu'}</div>
          </div>
        </div>`;
      }).join('')}
      ${o.resi?`<div class="ap-alert info" style="margin-top:12px">Resi: <b class="mono">${o.resi}</b></div>`:''}
      <button class="ap-btn-primary" style="margin-top:14px" onclick="this.closest('.ap-modal').remove()">Tutup</button>
    </div>`;
  modal.onclick=e=>{if(e.target===modal) modal.remove();};
  document.body.appendChild(modal);
}

/* ==================== SEARCH ==================== */
function openSearch(){
  document.getElementById('apSearchOverlay').classList.add('open');
  setTimeout(()=>document.getElementById('apSearchInput').focus(),250);
}
function closeSearch(){
  document.getElementById('apSearchOverlay').classList.remove('open');
  document.getElementById('apSearchInput').value='';
  document.getElementById('searchResults').innerHTML='';
  state.search=''; renderProducts();
}
function handleSearch(q){
  state.search=q;
  const res=document.getElementById('searchResults');
  if(!q.trim()){ res.innerHTML=''; return; }
  const found=getFiltered().slice(0,8);
  if(!found.length){ res.innerHTML=`<div class="ap-empty"><div class="ap-empty-icon">🔍</div><div class="ap-empty-desc">Tidak ada part untuk "${q}"</div></div>`; return; }
  res.innerHTML=found.map(p=>`
    <div class="ap-search-result" onclick="openPDP(${p.id});closeSearch()">
      <div style="width:48px;height:48px;background:${p.bg};border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0">${p.emoji}</div>
      <div style="flex:1">
        <div class="mono" style="font-size:10px;font-weight:700;color:var(--yellow-dark)">${p.oem}</div>
        <div style="font-size:13px;font-weight:700;margin-top:2px">${p.name}</div>
        <div style="font-size:10px;color:var(--ink-muted);margin-top:2px">${p.brand}</div>
      </div>
      <div style="font-size:13px;font-weight:800">${rupiah(p.price)}</div>
    </div>`).join('');
}
function quickSearch(q){ document.getElementById('apSearchInput').value=q; handleSearch(q); }

/* ==================== CHAT ==================== */
let chatHistory=[
  {from:'bot',text:'Selamat datang di AutoParts Pro! Saya teknisi konsultan. Ada yang bisa saya bantu?',time:'10:24'},
  {from:'bot',text:'Anda bisa tanya soal part, kompatibilitas kendaraan, atau booking service.',time:'10:24'}
];
function toggleChat(){
  document.getElementById('apChat').classList.toggle('open');
  document.getElementById('apChatFab').classList.toggle('hidden');
  if(document.getElementById('apChat').classList.contains('open')) renderChat();
}
function renderChat(){
  const body=document.getElementById('apChatBody');
  body.innerHTML=chatHistory.map(m=>`
    <div class="ap-chat-msg ${m.from}">${m.text}<div class="ap-chat-time">${m.time}</div></div>`).join('');
  body.scrollTop=body.scrollHeight;
}
function sendChat(){
  const input=document.getElementById('apChatInput');
  const text=input.value.trim(); if(!text) return;
  const time=new Date().toTimeString().slice(0,5);
  chatHistory.push({from:'user',text,time});
  input.value=''; renderChat();
  setTimeout(()=>{
    const r=['Untuk Avanza 2018-2022, oil filter 90915-YZZD4 cocok ya.','Brake pad original Toyota lebih awet dibanding aftermarket.','Busi iridium bisa tahan hingga 80.000 km.','Kalau mau booking service, bisa langsung chat saya.','Ada lagi yang bisa dibantu?'];
    chatHistory.push({from:'bot',text:r[Math.floor(Math.random()*r.length)],time});
    renderChat();
  },800);
}

/* ==================== ADMIN ==================== */
function renderAdmin(){ renderAdminTabs(); renderAdminContent(); updateBadges(); }
function renderAdminTabs(){
  document.querySelectorAll('.ap-sb-item').forEach(t=>t.classList.toggle('active',t.dataset.tab===state.adminTab));
  const meta=PAGE_META[state.adminTab]||PAGE_META.dashboard;
  document.getElementById('apPageTitle').textContent=meta.title;
  document.getElementById('apPageSub').textContent=meta.sub;
}
function switchAdminTab(tab){
  state.adminTab=tab; renderAdminTabs(); renderAdminContent();
  if(window.innerWidth<1024){
    document.getElementById('apSidebar').classList.add('collapsed');
    document.getElementById('apSidebarOverlay').classList.remove('show');
  }
  window.scrollTo(0,0);
}
function renderAdminContent(){
  const c=document.getElementById('apContent');
  switch(state.adminTab){
    case 'dashboard': c.innerHTML=adminDashboard(); break;
    case 'orders': c.innerHTML=adminOrders(); break;
    case 'service': c.innerHTML=adminService(); break;
    case 'products': c.innerHTML=adminProducts(); break;
    case 'inventory': c.innerHTML=adminInventory(); break;
    case 'fitment': c.innerHTML=adminFitment(); break;
    case 'customers': c.innerHTML=adminCustomers(); break;
    case 'staff': c.innerHTML=adminStaff(); break;
    case 'reports': c.innerHTML=adminReports(); break;
    case 'settings': c.innerHTML=adminSettings(); break;
  }
}
function statusBadge(s){
  const map={pending:'warning',processing:'info',shipped:'info',completed:'success',cancelled:'danger',in_progress:'info',done:'success'};
  return map[s]||'neutral';
}
function statusLabel(s){
  return {pending:'Pending',processing:'Diproses',shipped:'Dikirim',completed:'Selesai',cancelled:'Batal',in_progress:'Dikerjakan',done:'Selesai'}[s]||s;
}

function adminDashboard(){
  const hours=['08','10','12','14','16','18','20','22'];
  const data=[12,28,42,56,48,68,82,44];
  const max=Math.max(...data);
  const topProducts=PRODUCTS.slice().sort((a,b)=>b.sold-a.sold).slice(0,5);
  const activeService=SERVICE_TICKETS.filter(s=>s.status==='in_progress').length;

  return `
    <div class="ap-kpi-grid">
      <div class="ap-kpi">
        <div class="ap-kpi-label">Penjualan Hari Ini</div>
        <div class="ap-kpi-value yellow">${rupiah(4850000+Math.floor(Math.random()*500000))}</div>
        <div class="ap-kpi-trend up">↑ 14% vs kemarin</div>
      </div>
      <div class="ap-kpi">
        <div class="ap-kpi-label">Pesanan Baru</div>
        <div class="ap-kpi-value">${ORDERS.filter(o=>o.status==='pending').length}</div>
        <div class="ap-kpi-trend up">+5 hari ini</div>
      </div>
      <div class="ap-kpi">
        <div class="ap-kpi-label">Service Aktif</div>
        <div class="ap-kpi-value">${activeService}</div>
        <div class="ap-kpi-trend neutral">${SERVICE_TICKETS.length} total tiket</div>
      </div>
      <div class="ap-kpi">
        <div class="ap-kpi-label">SKU Aktif</div>
        <div class="ap-kpi-value">${PRODUCTS.length}</div>
        <div class="ap-kpi-trend up">Semua tersedia</div>
      </div>
    </div>

    <div class="ap-panel">
      <div class="ap-panel-head">
        <div>
          <div class="ap-panel-title">Penjualan Per 2 Jam</div>
          <div class="ap-panel-sub">Realtime hari ini</div>
        </div>
        <span class="ap-bdg success"><span class="ap-bdg-dot"></span>Live</span>
      </div>
      <div class="ap-panel-body">
        <div class="ap-chart">
          ${data.map((v,i)=>`<div class="ap-chart-bar ${v===max?'active':''}" style="height:${v/max*100}%"><b>${v}rb</b><span>${hours[i]}</span></div>`).join('')}
        </div>
        <div style="margin-top:24px"></div>
      </div>
    </div>

    <div class="ap-panel">
      <div class="ap-panel-head">
        <div><div class="ap-panel-title">Pesanan Terbaru</div></div>
        <button class="ap-btn outline" onclick="switchAdminTab('orders')">Semua →</button>
      </div>
      <div class="ap-panel-body-flush">
        ${ORDERS.slice(0,4).map(o=>`
          <div class="ap-list-item" style="padding:14px 18px">
            <div class="ap-list-avatar">${o.customer.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="ap-list-info">
              <div class="ap-list-name">${o.customer}</div>
              <div class="ap-list-sub">${o.id} · ${o.time} · ${rupiah(o.total)}</div>
            </div>
            <span class="ap-bdg ${statusBadge(o.status)}"><span class="ap-bdg-dot"></span>${statusLabel(o.status)}</span>
          </div>`).join('')}
      </div>
    </div>

    <div class="ap-panel">
      <div class="ap-panel-head"><div><div class="ap-panel-title">Part Terlaris</div></div></div>
      <div class="ap-panel-body-flush">
        ${topProducts.map((p,i)=>`
          <div class="ap-list-item" style="padding:12px 18px">
            <div class="ap-list-avatar" style="background:var(--yellow-soft);color:var(--yellow-dark)">${i+1}</div>
            <div class="ap-list-info">
              <div class="ap-list-name">${p.emoji} ${p.name}</div>
              <div class="ap-list-sub"><span class="mono">${p.oem}</span> · ${p.sold} terjual</div>
            </div>
            <div style="font-weight:800;color:var(--yellow-dark);font-size:12px">${rupiah(p.price)}</div>
          </div>`).join('')}
      </div>
    </div>
  `;
}

function adminOrders(){
  const list=state.orderFilter==='all'?ORDERS:ORDERS.filter(o=>o.status===state.orderFilter);
  return `
    <button class="ap-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="ap-filters">
      ${['all','pending','processing','shipped','completed','cancelled'].map(f=>`
        <button class="ap-chip ${state.orderFilter===f?'active':''}" onclick="state.orderFilter='${f}';renderAdminContent()">${f==='all'?'Semua':statusLabel(f)}</button>`).join('')}
    </div>
    ${list.map(o=>`
      <div class="ap-order">
        <div class="ap-order-head">
          <div>
            <div class="ap-order-id">${o.id}</div>
            <div class="ap-order-meta">${o.time} · ${o.payment} · ${o.customer}</div>
          </div>
          <span class="ap-bdg ${statusBadge(o.status)}"><span class="ap-bdg-dot"></span>${statusLabel(o.status)}</span>
        </div>
        <div class="ap-order-items">${o.items_list.map(it=>`${it.name} · <b>${it.variant}</b> × ${it.qty}`).join('<br>')}</div>
        <div style="font-size:15px;font-weight:800">${rupiah(o.total)}</div>
        <div class="ap-order-actions">
          ${o.status==='pending'?`<button class="ap-btn primary" onclick="updateOrder('${o.id}','processing')">Proses</button>`:''}
          ${o.status==='processing'?`<button class="ap-btn primary" onclick="updateOrder('${o.id}','shipped')">Kirim</button>`:''}
          ${o.status==='shipped'?`<button class="ap-btn success" onclick="updateOrder('${o.id}','completed')">Selesai</button>`:''}
          ${o.status!=='completed'&&o.status!=='cancelled'?`<button class="ap-btn danger" onclick="updateOrder('${o.id}','cancelled')">Batal</button>`:''}
        </div>
      </div>`).join('') || '<div class="ap-empty"><div class="ap-empty-icon">📋</div><div class="ap-empty-title">Tidak ada pesanan</div></div>'}
  `;
}
function updateOrder(id,status){
  const o=ORDERS.find(x=>x.id===id); if(!o) return;
  o.status=status;
  renderAdminContent(); updateBadges();
  showToast(o.id+' → '+statusLabel(status));
}

function adminService(){
  return `
    <button class="ap-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:14px">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:600">${SERVICE_TICKETS.length} tiket</div>
      <button class="ap-btn primary" onclick="showToast('Tiket service baru')">+ Tiket</button>
    </div>
    ${SERVICE_TICKETS.map(s=>{
      const meta={pending:['warning','Menunggu'],in_progress:['info','Dikerjakan'],done:['success','Selesai']}[s.status]||['neutral',s.status];
      return `
      <div class="ap-order">
        <div class="ap-order-head">
          <div>
            <div class="ap-order-id">${s.id}</div>
            <div class="ap-order-meta">${s.customer} · ${s.vehicle} · ${s.date}</div>
          </div>
          <span class="ap-bdg ${meta[0]}"><span class="ap-bdg-dot"></span>${meta[1]}</span>
        </div>
        <div class="ap-order-items">
          <b>Keluhan:</b> ${s.service}<br>
          <b>Mekanik:</b> ${s.mechanic}<br>
          <b>ETA:</b> ${s.eta}
        </div>
        <div class="ap-order-actions">
          ${s.status==='pending'?`<button class="ap-btn primary" onclick="updateService('${s.id}','in_progress')">Assign</button>`:''}
          ${s.status==='in_progress'?`<button class="ap-btn success" onclick="updateService('${s.id}','done')">Selesai</button>`:''}
        </div>
      </div>`;
    }).join('')}`;
}
function updateService(id,status){
  const s=SERVICE_TICKETS.find(x=>x.id===id); if(!s) return;
  s.status=status;
  if(status==='in_progress'&&s.mechanic==='-') s.mechanic='Joko Susilo';
  renderAdminContent(); updateBadges();
  showToast(id+' → '+statusLabel(status));
}

function adminProducts(){
  return `
    <button class="ap-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:14px">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:600">${PRODUCTS.length} produk</div>
      <button class="ap-btn primary" onclick="openProductModal(null)">+ Produk</button>
    </div>
    <div class="ap-panel">
      <div class="ap-tbl-wrap">
        <table class="ap-tbl">
          <thead><tr><th>Part</th><th>OEM</th><th>Brand</th><th>Harga</th><th>Stok</th><th></th></tr></thead>
          <tbody>
            ${PRODUCTS.map(p=>`
              <tr>
                <td><div style="display:flex;align-items:center;gap:10px"><span style="font-size:20px">${p.emoji}</span><div style="font-weight:700;font-size:12px">${p.name.slice(0,24)}</div></div></td>
                <td><span class="mono" style="font-size:10px;color:var(--yellow-dark);font-weight:700">${p.oem}</span></td>
                <td style="font-size:11px;font-weight:600">${p.brand}</td>
                <td style="font-weight:800">${rupiah(p.price)}</td>
                <td><span class="ap-bdg ${p.stock<=20?'danger':p.stock<=60?'warning':'success'}">${p.stock}</span></td>
                <td style="white-space:nowrap">
                  <button class="ap-btn outline" onclick="openProductModal(${p.id})">Edit</button>
                  <button class="ap-btn danger" onclick="deleteProduct(${p.id})" style="margin-left:4px">Hapus</button>
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
    <button class="ap-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="ap-kpi-grid" style="grid-template-columns:repeat(3,1fr)">
      <div class="ap-kpi"><div class="ap-kpi-label">Nilai Inventory</div><div class="ap-kpi-value yellow" style="font-size:16px">${rupiah(totalValue)}</div></div>
      <div class="ap-kpi"><div class="ap-kpi-label">Total Stok</div><div class="ap-kpi-value">${totalStock}</div></div>
      <div class="ap-kpi"><div class="ap-kpi-label">SKU Aktif</div><div class="ap-kpi-value">${PRODUCTS.length}</div></div>
    </div>
    ${PRODUCTS.map(p=>`
      <div class="ap-panel">
        <div class="ap-panel-head">
          <div>
            <div class="ap-panel-title">${p.emoji} ${p.name}</div>
            <div class="ap-panel-sub"><span class="mono">${p.oem}</span> · ${Object.keys(p.variants).length} varian</div>
          </div>
          <span class="ap-bdg ${p.stock<=20?'danger':p.stock<=60?'warning':'success'}">${p.stock<=20?'Restock':'Tersedia'}</span>
        </div>
        <div class="ap-panel-body-flush">
          ${Object.entries(p.variants).map(([k,v])=>`
            <div style="display:grid;grid-template-columns:1fr auto auto;gap:12px;align-items:center;padding:10px 18px;border-bottom:1px solid var(--line);font-size:12px">
              <span style="font-weight:700">${k}</span>
              <input class="ap-form-input" type="number" value="${v}" style="width:70px;padding:5px 8px;text-align:center" onchange="updateVariant(${p.id},'${k}',this.value)">
              <span class="ap-bdg ${v<=10?'danger':v<=30?'warning':'success'}">${v<=10?'Kritis':v<=30?'Rendah':'OK'}</span>
            </div>`).join('')}
        </div>
      </div>`).join('')}`;
}
function updateVariant(pid,key,val){
  const p=PRODUCTS.find(x=>x.id===pid);
  p.variants[key]=+val;
  p.stock=Object.values(p.variants).reduce((s,v)=>s+v,0);
  renderAdminContent(); showToast('Stok diperbarui');
}

function adminFitment(){
  const brands=Object.keys(VEHICLES);
  return `
    <button class="ap-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="ap-alert info">
      <span>ℹ</span>
      <div>Kelola kompatibilitas part dengan kendaraan. Data ini dipakai untuk filter otomatis di customer app.</div>
    </div>
    ${PRODUCTS.map(p=>`
      <div class="ap-panel">
        <div class="ap-panel-head">
          <div>
            <div class="ap-panel-title">${p.emoji} ${p.name}</div>
            <div class="ap-panel-sub"><span class="mono">${p.oem}</span></div>
          </div>
          <button class="ap-btn outline" onclick="showToast('Edit fitment')">Edit</button>
        </div>
        <div class="ap-panel-body-flush">
          ${p.fit.map(f=>`
            <div style="padding:10px 18px;border-bottom:1px solid var(--line);font-size:12px;display:flex;justify-content:space-between;align-items:center">
              <span>🚗 ${f}</span>
              <button class="ap-btn outline" onclick="showToast('Hapus fitment')" style="font-size:10px;padding:4px 8px">Hapus</button>
            </div>`).join('')}
          <div style="padding:12px 18px">
            <button class="ap-btn outline" onclick="showToast('Tambah kendaraan')">+ Tambah Kendaraan</button>
          </div>
        </div>
      </div>`).join('')}`;
}

function adminCustomers(){
  return `
    <button class="ap-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="ap-panel">
      <div class="ap-panel-head"><div><div class="ap-panel-title">Pelanggan Terdaftar</div><div class="ap-panel-sub">${CUSTOMERS.length} pelanggan</div></div></div>
      <div class="ap-panel-body-flush">
        ${CUSTOMERS.map(c=>`
          <div class="ap-list-item" style="padding:14px 18px">
            <div class="ap-list-avatar">${c.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="ap-list-info">
              <div class="ap-list-name">${c.name}</div>
              <div class="ap-list-sub">${c.phone} · ${c.orders} pesanan · 🚗 ${c.vehicles}</div>
            </div>
            <div style="font-weight:800;color:var(--yellow-dark);font-size:12px">${rupiah(c.spent)}</div>
          </div>`).join('')}
      </div>
    </div>`;
}

function adminStaff(){
  return `
    <button class="ap-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:14px">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:600">${STAFF.length} anggota</div>
      <button class="ap-btn primary" onclick="openStaffModal(null)">+ Tambah</button>
    </div>
    <div class="ap-panel">
      <div class="ap-panel-body-flush">
        ${STAFF.map(s=>`
          <div class="ap-list-item" style="padding:14px 18px">
            <div class="ap-list-avatar">${s.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="ap-list-info">
              <div class="ap-list-name">${s.name}</div>
              <div class="ap-list-sub">${s.role}${s.spec!=='-'?' · '+s.spec:''}</div>
            </div>
            <span class="ap-bdg ${s.status==='active'?'success':'neutral'}">${s.status}</span>
            <button class="ap-btn outline" onclick="openStaffModal(${s.id})">Edit</button>
          </div>`).join('')}
      </div>
    </div>`;
}

function adminReports(){
  return `
    <button class="ap-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="ap-kpi-grid" style="grid-template-columns:repeat(2,1fr)">
      <div class="ap-kpi"><div class="ap-kpi-label">Total Penjualan</div><div class="ap-kpi-value yellow" style="font-size:18px">Rp84jt</div><div class="ap-kpi-trend up">↑ 22% MoM</div></div>
      <div class="ap-kpi"><div class="ap-kpi-label">Total Orders</div><div class="ap-kpi-value">2,841</div><div class="ap-kpi-trend up">↑ 18% MoM</div></div>
      <div class="ap-kpi"><div class="ap-kpi-label">Service Selesai</div><div class="ap-kpi-value">342</div><div class="ap-kpi-trend up">↑ 15% MoM</div></div>
      <div class="ap-kpi"><div class="ap-kpi-label">Return Rate</div><div class="ap-kpi-value">1.8%</div><div class="ap-kpi-trend neutral">Stabil</div></div>
    </div>
    <div class="ap-panel">
      <div class="ap-panel-head"><div><div class="ap-panel-title">Performa Kategori</div></div></div>
      <div class="ap-panel-body">
        ${CATEGORIES.filter(c=>c.id!=='all').map(c=>{
          const total=PRODUCTS.filter(p=>p.cat===c.id).reduce((s,p)=>s+p.sold*p.price,0);
          const maxV=20000000;
          return `
            <div style="margin-bottom:12px">
              <div style="display:flex;justify-content:space-between;font-size:12px;font-weight:700;margin-bottom:6px">
                <span>${c.icon} ${c.name}</span>
                <span style="color:var(--yellow-dark)">${rupiah(total)}</span>
              </div>
              <div style="height:6px;background:var(--bg-2);border-radius:3px;overflow:hidden">
                <div style="height:100%;background:var(--yellow);width:${Math.min(total/maxV*100,100)}%;border-radius:3px"></div>
              </div>
            </div>`;
        }).join('')}
      </div>
    </div>
    <div class="ap-panel">
      <div class="ap-panel-head"><div class="ap-panel-title">Export Laporan</div></div>
      <div class="ap-panel-body">
        <button class="ap-btn-primary" onclick="showToast('CSV diunduh')">Download CSV</button>
        <button class="ap-btn-secondary" onclick="showToast('PDF dibuat')">Download PDF</button>
      </div>
    </div>`;
}

function adminSettings(){
  return `
    <button class="ap-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="ap-panel">
      <div class="ap-panel-head"><div><div class="ap-panel-title">Informasi Toko</div></div></div>
      <div class="ap-panel-body">
        <div class="ap-form-group"><label class="ap-form-label">Nama Toko</label><input class="ap-form-input" value="AutoParts Pro"></div>
        <div class="ap-form-group"><label class="ap-form-label">Alamat</label><input class="ap-form-input" value="Jl. Industri Raya No. 88, Jakarta Utara"></div>
        <div class="ap-form-row">
          <div class="ap-form-group"><label class="ap-form-label">Jam Buka</label><input class="ap-form-input" value="08:00"></div>
          <div class="ap-form-group"><label class="ap-form-label">Jam Tutup</label><input class="ap-form-input" value="20:00"></div>
        </div>
        <div class="ap-form-row">
          <div class="ap-form-group"><label class="ap-form-label">Min. Gratis Ongkir</label><input class="ap-form-input" value="500000" type="number"></div>
          <div class="ap-form-group"><label class="ap-form-label">Ongkir Default</label><input class="ap-form-input" value="25000" type="number"></div>
        </div>
        <div class="ap-form-group"><label class="ap-form-label">Asuransi (%)</label><input class="ap-form-input" value="1" type="number"></div>
        <button class="ap-btn-primary" onclick="showToast('Pengaturan disimpan')">Simpan Pengaturan</button>
      </div>
    </div>
    <div class="ap-panel">
      <div class="ap-panel-head"><div class="ap-panel-title">Metode Pembayaran</div></div>
      <div class="ap-panel-body-flush">
        ${[
          {name:'Transfer Bank',sub:'BCA, Mandiri, BNI, BRI',status:'active'},
          {name:'E-Wallet',sub:'GoPay, OVO, Dana',status:'active'},
          {name:'Kartu Kredit',sub:'Visa, Mastercard · Cicilan 0%',status:'active'},
          {name:'COD',sub:'Bayar di tempat',status:'active'}
        ].map(m=>`
          <div class="ap-list-item" style="padding:12px 18px">
            <div class="ap-list-avatar" style="font-size:14px">💳</div>
            <div class="ap-list-info">
              <div class="ap-list-name">${m.name}</div>
              <div class="ap-list-sub">${m.sub}</div>
            </div>
            <span class="ap-bdg success">Aktif</span>
          </div>`).join('')}
      </div>
    </div>`;
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
    document.getElementById('pmOem').value=p.oem;
    document.getElementById('pmPrice').value=p.price;
    document.getElementById('pmOld').value=p.old||'';
    document.getElementById('pmCat').value=p.cat;
    document.getElementById('pmFit').value=p.fit.join(', ');
    document.getElementById('pmVariants').value=Object.keys(p.variants).join(',');
  } else {
    state.editingProduct=null;
    document.getElementById('productModalTitle').textContent='Produk Baru';
    ['pmName','pmBrand','pmOem','pmPrice','pmOld','pmFit','pmVariants'].forEach(f=>document.getElementById(f).value='');
  }
  document.getElementById('productModal').classList.add('open');
}
function closeProductModal(){ document.getElementById('productModal').classList.remove('open'); }
function saveProduct(){
  const name=document.getElementById('pmName').value.trim();
  const brand=document.getElementById('pmBrand').value.trim()||'Generic';
  const oem=document.getElementById('pmOem').value.trim()||'-';
  const price=+document.getElementById('pmPrice').value;
  const old=+document.getElementById('pmOld').value||0;
  const cat=document.getElementById('pmCat').value;
  const fit=document.getElementById('pmFit').value.split(',').map(s=>s.trim()).filter(Boolean);
  const variantNames=document.getElementById('pmVariants').value.split(',').map(s=>s.trim()).filter(Boolean);
  if(!name||!price||!variantNames.length){ showToast('Lengkapi data'); return; }
  const variants={};
  variantNames.forEach(v=>variants[v]=50);
  if(state.editingProduct){
    const p=PRODUCTS.find(x=>x.id===state.editingProduct);
    Object.assign(p,{name,brand,oem,price,old,cat,fit,variants,stock:Object.values(variants).reduce((s,v)=>s+v,0)});
    showToast('Produk diperbarui');
  } else {
    const id=Math.max(...PRODUCTS.map(p=>p.id))+1;
    PRODUCTS.push({id,name,brand,oem,cat,price,old,fit:fit.length?fit:['Universal'],variants,emoji:'⚙',bg:'#efefec',rating:5.0,sold:0,stock:Object.values(variants).reduce((s,v)=>s+v,0),isOem:false,spec:{'Warranty':'3 bulan'},desc:'Produk baru'});
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
    document.getElementById('sfSpec').value=s.spec;
  } else {
    state.editingStaff=null;
    document.getElementById('staffModalTitle').textContent='Tambah Mekanik';
    ['sfName','sfEmail','sfSpec'].forEach(f=>document.getElementById(f).value='');
  }
  document.getElementById('staffModal').classList.add('open');
}
function closeStaffModal(){ document.getElementById('staffModal').classList.remove('open'); }
function saveStaff(){
  const name=document.getElementById('sfName').value.trim();
  const email=document.getElementById('sfEmail').value.trim();
  const role=document.getElementById('sfRole').value;
  const spec=document.getElementById('sfSpec').value.trim()||'-';
  if(!name||!email){ showToast('Lengkapi data'); return; }
  if(state.editingStaff){
    const s=STAFF.find(x=>x.id===state.editingStaff);
    Object.assign(s,{name,email,role,spec});
    showToast('Data diperbarui');
  } else {
    STAFF.push({id:Date.now(),name,email,role,spec,status:'active'});
    showToast('Staff ditambahkan');
  }
  closeStaffModal(); renderAdminContent();
}

/* NAV */
function navTo(nav){
  if(nav==='admin'){ setMode('admin'); return; }
  if(nav==='search'){ openSearch(); return; }
  document.querySelectorAll('.ap-nav-item').forEach(n=>n.classList.toggle('active',n.dataset.nav===nav));
  if(nav==='home') window.scrollTo({top:0,behavior:'smooth'});
}

/* INIT */
renderCategories();
renderProducts();
updateBadges();
initApSidebar();
</script>
@endverbatim
@include('demo.toko-online.partials.demo-bar')
</body>
</html>