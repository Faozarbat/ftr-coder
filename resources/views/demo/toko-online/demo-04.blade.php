@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="theme-color" content="#fff8f0">
<title>FoodExpress - Pesan Makanan Online</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;-webkit-tap-highlight-color:transparent}
:root{
  --cream:#fff8f0;--cream-2:#fff1e0;--paper:#ffffff;
  --ink:#2d1810;--ink-2:#5a3a2a;--ink-muted:#8b6b56;
  --line:#f0e0cc;--line-strong:#e0cbb0;
  --orange:#ff6b35;--orange-dark:#e04e1a;--orange-soft:#ffeadf;
  --yellow:#ffc233;--yellow-soft:#fff4d9;
  --matcha:#5d8a5d;--matcha-soft:#e6f0e6;
  --berry:#c72c5c;--berry-soft:#fbe0e8;
  --success:#5d8a5d;--danger:#d64545;--info:#3a7ca5;
  --r-sm:8px;--r:14px;--r-lg:22px;--r-xl:28px;
  --shadow-sm:0 1px 3px rgba(80,40,20,.06);
  --shadow:0 4px 16px rgba(80,40,20,.08);
  --shadow-lg:0 12px 40px rgba(80,40,20,.12);
}
body{font-family:"Plus Jakarta Sans","Inter",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;background:var(--cream);color:var(--ink);font-size:14px;line-height:1.55;overflow-x:hidden;-webkit-font-smoothing:antialiased}
button{font-family:inherit;cursor:pointer;border:none;background:none;color:inherit}
input,select,textarea{font-family:inherit;font-size:14px;outline:none;color:inherit}
.hidden{display:none!important}
.serif{font-family:Georgia,"Times New Roman",serif}

/* ===== FLOATING MODE SWITCH ===== */
.fx-mode-switch{
  position:fixed;bottom:88px;left:50%;transform:translateX(-50%);
  z-index:250;display:flex;background:var(--ink);border-radius:40px;padding:4px;
  box-shadow:0 8px 32px rgba(45,24,16,.35);
}
.fx-mode-btn{
  padding:9px 18px;border-radius:32px;font-size:11px;font-weight:700;
  letter-spacing:.02em;color:rgba(255,255,255,.65);
  display:flex;align-items:center;gap:6px;transition:.2s;white-space:nowrap;
}
.fx-mode-btn.active{background:var(--orange);color:#fff}

/* ===== HEADER ===== */
.fx-header{
  position:sticky;top:0;z-index:100;background:var(--orange);color:#fff;
  padding:14px 18px 12px;
  border-radius:0 0 20px 20px;box-shadow:0 2px 12px rgba(255,107,53,.2);
}
.fx-header-top{display:flex;align-items:center;gap:10px;margin-bottom:12px}
.fx-location{
  display:flex;align-items:center;gap:6px;font-size:12px;
  color:rgba(255,255,255,.9);cursor:pointer;
}
.fx-location strong{color:#fff;font-weight:700;display:flex;align-items:center;gap:4px}
.fx-admin-entry{
  margin-left:auto;display:flex;align-items:center;gap:5px;
  padding:7px 12px;background:rgba(255,255,255,.18);
  border:1px solid rgba(255,255,255,.3);border-radius:20px;
  color:#fff;font-size:11px;font-weight:700;
}
.fx-admin-entry:hover{background:rgba(255,255,255,.28)}
.fx-search{
  display:flex;align-items:center;gap:10px;background:#fff;
  border-radius:12px;padding:11px 14px;
  color:var(--ink-muted);font-size:13px;cursor:pointer;
}
.fx-search svg{color:var(--orange)}
.fx-header-info{
  display:flex;justify-content:space-between;align-items:center;
  margin-top:10px;padding-top:10px;border-top:1px solid rgba(255,255,255,.2);
  font-size:11px;color:rgba(255,255,255,.85);
}
.fx-header-info b{color:#fff;font-weight:700}

/* ===== KATEGORI PILL ===== */
.fx-cats{
  display:flex;gap:8px;padding:14px 16px;overflow-x:auto;
  scrollbar-width:none;background:var(--cream);
}
.fx-cats::-webkit-scrollbar{display:none}
.fx-cat{
  flex-shrink:0;display:flex;flex-direction:column;align-items:center;gap:6px;
  min-width:72px;padding:10px 8px;background:var(--paper);
  border-radius:var(--r);border:1px solid var(--line);
  font-size:11px;font-weight:600;color:var(--ink-2);
  transition:.15s;cursor:pointer;
}
.fx-cat:hover{border-color:var(--orange);color:var(--orange)}
.fx-cat.active{background:var(--orange);color:#fff;border-color:var(--orange)}
.fx-cat-icon{
  font-size:26px;line-height:1;filter:grayscale(.2);
}
.fx-cat.active .fx-cat-icon{filter:grayscale(0)}

/* ===== PROMO BANNER ===== */
.fx-promo{
  margin:0 16px 16px;border-radius:var(--r);overflow:hidden;
  position:relative;background:linear-gradient(135deg,var(--orange-soft) 0%,var(--yellow-soft) 100%);
  padding:18px;display:flex;align-items:center;gap:14px;
  border:1px solid var(--line);
}
.fx-promo-emoji{font-size:44px;flex-shrink:0}
.fx-promo-body{flex:1}
.fx-promo-title{font-size:15px;font-weight:800;color:var(--ink);margin-bottom:4px;letter-spacing:-.01em}
.fx-promo-sub{font-size:11px;color:var(--ink-muted);font-weight:500;margin-bottom:8px}
.fx-promo-code{
  display:inline-block;background:var(--orange);color:#fff;
  padding:4px 10px;border-radius:6px;font-size:10px;font-weight:800;
  letter-spacing:.08em;font-family:"SF Mono",monospace;
}

/* ===== SECTION ===== */
.fx-section{padding:0 0 20px}
.fx-section-head{
  display:flex;align-items:center;justify-content:space-between;
  padding:0 18px 12px;
}
.fx-section-title{font-size:17px;font-weight:800;letter-spacing:-.02em;color:var(--ink)}
.fx-section-sub{font-size:11px;color:var(--ink-muted);font-weight:500;margin-top:2px}
.fx-section-link{font-size:12px;font-weight:700;color:var(--orange)}

/* ===== HSCROLL ===== */
.fx-hscroll{
  display:flex;gap:12px;overflow-x:auto;padding:0 18px 4px;
  scrollbar-width:none;
}
.fx-hscroll::-webkit-scrollbar{display:none}

/* ===== CARD FOOD (HORIZONTAL) ===== */
.fx-food-card{
  display:flex;gap:12px;background:var(--paper);border-radius:var(--r);
  padding:12px;border:1px solid var(--line);margin-bottom:12px;
  cursor:pointer;transition:.15s;position:relative;
}
.fx-food-card:hover{border-color:var(--orange);transform:translateY(-2px);box-shadow:var(--shadow)}
.fx-food-img{
  width:96px;height:96px;border-radius:var(--r-sm);
  display:flex;align-items:center;justify-content:center;
  font-size:52px;flex-shrink:0;position:relative;
}
.fx-food-badge{
  position:absolute;top:-4px;left:-4px;background:var(--orange);color:#fff;
  font-size:9px;font-weight:800;padding:3px 7px;border-radius:8px;
  letter-spacing:.02em;box-shadow:0 2px 6px rgba(255,107,53,.3);
}
.fx-food-info{flex:1;min-width:0;display:flex;flex-direction:column;gap:4px}
.fx-food-cat{font-size:10px;font-weight:700;color:var(--orange);letter-spacing:.06em;text-transform:uppercase}
.fx-food-name{font-size:14px;font-weight:700;letter-spacing:-.01em;line-height:1.3;color:var(--ink)}
.fx-food-desc{font-size:11px;color:var(--ink-muted);line-height:1.4;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical}
.fx-food-meta{
  display:flex;align-items:center;gap:10px;font-size:11px;color:var(--ink-muted);
  margin-top:auto;padding-top:6px;
}
.fx-food-rating{display:flex;align-items:center;gap:3px;color:var(--ink-2);font-weight:600}
.fx-food-rating .star{color:var(--yellow);font-size:13px}
.fx-food-price{margin-left:auto;font-size:15px;font-weight:800;color:var(--ink);letter-spacing:-.01em}

/* ===== MENU VERTICAL CARD (untuk bestseller horizontal) ===== */
.fx-mini-card{
  flex-shrink:0;width:150px;background:var(--paper);
  border-radius:var(--r);padding:10px;border:1px solid var(--line);
  cursor:pointer;transition:.15s;position:relative;
}
.fx-mini-card:hover{border-color:var(--orange);box-shadow:var(--shadow)}
.fx-mini-img{
  width:100%;aspect-ratio:1;border-radius:var(--r-sm);
  display:flex;align-items:center;justify-content:center;
  font-size:56px;margin-bottom:8px;position:relative;
}
.fx-mini-badge{
  position:absolute;top:4px;left:4px;background:var(--berry);color:#fff;
  font-size:9px;font-weight:800;padding:3px 6px;border-radius:6px;
}
.fx-mini-name{font-size:12px;font-weight:700;line-height:1.3;color:var(--ink);margin-bottom:4px;
  display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;min-height:32px}
.fx-mini-price{font-size:13px;font-weight:800;color:var(--ink)}
.fx-mini-meta{font-size:10px;color:var(--ink-muted);margin-top:3px;display:flex;align-items:center;gap:4px}
.fx-mini-meta .star{color:var(--yellow)}

/* ===== RESTORAN CARD ===== */
.fx-rest-card{
  display:flex;gap:12px;background:var(--paper);border-radius:var(--r);
  padding:12px;border:1px solid var(--line);margin-bottom:12px;cursor:pointer;transition:.15s;
}
.fx-rest-card:hover{border-color:var(--orange);box-shadow:var(--shadow)}
.fx-rest-logo{
  width:80px;height:80px;border-radius:var(--r-sm);flex-shrink:0;
  display:flex;align-items:center;justify-content:center;font-size:44px;
}
.fx-rest-info{flex:1;min-width:0}
.fx-rest-name{font-size:14px;font-weight:700;color:var(--ink);margin-bottom:3px}
.fx-rest-tags{display:flex;gap:6px;font-size:10px;color:var(--ink-muted);margin-bottom:6px;flex-wrap:wrap}
.fx-rest-tag{padding:2px 8px;background:var(--cream-2);border-radius:10px;font-weight:600}
.fx-rest-meta{display:flex;align-items:center;gap:12px;font-size:11px;color:var(--ink-muted);margin-top:6px}
.fx-rest-meta .star{color:var(--yellow);font-weight:700}
.fx-rest-status{color:var(--matcha);font-weight:700}

/* ===== FLOATING CART BUTTON ===== */
.fx-cart-fab{
  position:fixed;bottom:100px;left:50%;transform:translateX(-50%);
  z-index:250;display:none;align-items:center;gap:12px;
  background:var(--ink);color:#fff;border-radius:32px;
  padding:12px 20px;box-shadow:0 12px 32px rgba(45,24,16,.35);
  transition:.25s;font-weight:700;font-size:13px;
}
.fx-cart-fab.show{display:flex}
.fx-cart-fab:active{transform:translateX(-50%) scale(.96)}
.fx-cart-count{
  background:var(--orange);width:26px;height:26px;border-radius:50%;
  display:flex;align-items:center;justify-content:center;
  font-size:12px;font-weight:800;
}
.fx-cart-total{font-size:14px;font-weight:800;letter-spacing:-.01em}
.fx-cart-arrow{font-size:16px;color:var(--yellow)}

/* ===== BOTTOM NAV (solid color) ===== */
.fx-nav{
  position:fixed;bottom:0;left:0;right:0;z-index:200;
  background:var(--paper);border-top:1px solid var(--line);
  display:flex;padding:8px 0 10px;box-shadow:0 -4px 20px rgba(80,40,20,.05);
}
.fx-nav-item{
  flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;
  color:var(--ink-muted);font-size:10px;font-weight:600;padding:4px 0;position:relative;
}
.fx-nav-item.active{color:var(--orange)}
.fx-nav-icon{font-size:22px;line-height:1}
.fx-nav-badge{
  position:absolute;top:-2px;right:calc(50% - 20px);
  background:var(--orange);color:#fff;font-size:9px;font-weight:800;
  min-width:17px;height:17px;border-radius:9px;
  display:flex;align-items:center;justify-content:center;padding:0 4px;
  border:2px solid var(--paper);
}

/* ===== DRAWER ===== */
.fx-overlay{
  position:fixed;inset:0;background:rgba(45,24,16,.4);z-index:300;
  opacity:0;visibility:hidden;transition:.25s;backdrop-filter:blur(4px);
}
.fx-overlay.open{opacity:1;visibility:visible}
.fx-drawer{
  position:fixed;bottom:0;left:0;right:0;background:var(--paper);
  z-index:301;border-radius:24px 24px 0 0;max-height:92vh;
  display:flex;flex-direction:column;
  transform:translateY(100%);transition:.32s cubic-bezier(.4,0,.2,1);
}
.fx-drawer.open{transform:translateY(0)}
.fx-drawer-handle{width:40px;height:4px;background:var(--line-strong);border-radius:2px;margin:12px auto 4px}
.fx-drawer-head{
  padding:8px 22px 16px;display:flex;align-items:center;justify-content:space-between;
  border-bottom:1px solid var(--line);
}
.fx-drawer-title{font-size:18px;font-weight:800;letter-spacing:-.01em}
.fx-drawer-title small{display:block;font-size:11px;font-weight:500;color:var(--ink-muted);margin-top:3px}
.fx-drawer-close{width:34px;height:34px;border-radius:50%;background:var(--cream-2);display:flex;align-items:center;justify-content:center;color:var(--ink-2)}
.fx-drawer-body{flex:1;overflow-y:auto;padding:16px 22px}
.fx-drawer-foot{padding:16px 22px 24px;border-top:1px solid var(--line);background:var(--paper)}

/* ===== CART ITEM ===== */
.fx-cart-item{display:flex;gap:12px;padding:14px 0;border-bottom:1px solid var(--line)}
.fx-cart-item:last-child{border-bottom:none}
.fx-cart-img{
  width:70px;height:70px;border-radius:var(--r-sm);
  display:flex;align-items:center;justify-content:center;font-size:36px;flex-shrink:0;
}
.fx-cart-info{flex:1;min-width:0;display:flex;flex-direction:column;gap:3px}
.fx-cart-name{font-size:13px;font-weight:700;line-height:1.3}
.fx-cart-note{font-size:11px;color:var(--ink-muted);font-style:italic}
.fx-cart-price{font-size:14px;font-weight:800;color:var(--ink);margin-top:3px}
.fx-cart-actions{display:flex;flex-direction:column;align-items:flex-end;justify-content:space-between}
.fx-cart-remove{font-size:11px;color:var(--danger);font-weight:600}
.fx-qty{display:flex;align-items:center;background:var(--cream-2);border-radius:20px;overflow:hidden;padding:2px}
.fx-qty button{width:26px;height:26px;font-size:14px;font-weight:800;color:var(--orange);border-radius:50%}
.fx-qty span{min-width:26px;text-align:center;font-size:13px;font-weight:800;color:var(--ink)}

/* ===== SUMMARY ===== */
.fx-sum-row{display:flex;justify-content:space-between;font-size:12px;margin-bottom:8px;color:var(--ink-2);font-weight:500}
.fx-sum-row.total{
  font-size:18px;font-weight:800;color:var(--ink);
  padding-top:12px;border-top:1px dashed var(--line-strong);margin-top:10px;
  letter-spacing:-.01em;
}
.fx-btn-primary{
  width:100%;background:var(--orange);color:#fff;border-radius:14px;
  padding:16px;font-size:14px;font-weight:800;letter-spacing:.01em;
  transition:.2s;margin-top:12px;
}
.fx-btn-primary:hover{background:var(--orange-dark)}
.fx-btn-primary:disabled{opacity:.4;cursor:not-allowed}
.fx-btn-secondary{
  width:100%;background:var(--paper);color:var(--ink);border:1.5px solid var(--line-strong);
  border-radius:14px;padding:14px;font-size:13px;font-weight:700;margin-top:8px;
}

/* ===== PDP ===== */
.fx-pdp{
  position:fixed;inset:0;background:var(--cream);z-index:500;
  transform:translateY(100%);transition:.32s cubic-bezier(.4,0,.2,1);
  overflow-y:auto;display:none;
}
.fx-pdp.open{transform:translateY(0);display:block}
.fx-pdp-top{
  position:sticky;top:0;background:rgba(255,248,240,.95);backdrop-filter:blur(12px);
  padding:14px 20px;display:flex;align-items:center;justify-content:space-between;
  border-bottom:1px solid var(--line);z-index:10;
}
.fx-pdp-top-title{font-size:11px;font-weight:700;color:var(--ink-muted);letter-spacing:.08em;text-transform:uppercase}
.fx-pdp-hero{
  aspect-ratio:1;display:flex;align-items:center;justify-content:center;
  font-size:180px;position:relative;
}
.fx-pdp-hero-badge{
  position:absolute;top:20px;left:20px;background:var(--orange);color:#fff;
  padding:8px 14px;border-radius:14px;font-size:12px;font-weight:800;
  letter-spacing:.02em;box-shadow:0 6px 20px rgba(255,107,53,.3);
}
.fx-pdp-body{padding:22px 22px 0}
.fx-pdp-cat{font-size:11px;font-weight:700;color:var(--orange);letter-spacing:.06em;text-transform:uppercase;margin-bottom:8px}
.fx-pdp-name{font-size:26px;font-weight:800;letter-spacing:-.02em;line-height:1.15;margin-bottom:12px}
.fx-pdp-price{display:flex;align-items:baseline;gap:10px;flex-wrap:wrap;margin-bottom:18px}
.fx-pdp-price-now{font-size:28px;font-weight:800;color:var(--ink);letter-spacing:-.01em}
.fx-pdp-price-old{font-size:15px;color:var(--ink-muted);text-decoration:line-through}
.fx-pdp-disc{background:var(--orange-soft);color:var(--orange-dark);padding:5px 10px;border-radius:10px;font-size:12px;font-weight:800}
.fx-pdp-meta{
  display:grid;grid-template-columns:repeat(3,1fr);gap:12px;
  padding:16px 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line);
  margin-bottom:20px;
}
.fx-pdp-meta-cell{text-align:center}
.fx-pdp-meta-label{font-size:10px;font-weight:700;color:var(--ink-muted);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px}
.fx-pdp-meta-value{font-size:15px;font-weight:800;color:var(--ink)}
.fx-pdp-opt-label{
  font-size:12px;font-weight:800;letter-spacing:.06em;text-transform:uppercase;
  color:var(--ink-2);margin-bottom:12px;
}
.fx-pdp-opt-label span{color:var(--ink-muted);font-weight:500;text-transform:none;letter-spacing:0;margin-left:6px}
.fx-pdp-opts{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:20px}
.fx-opt-chip{
  padding:10px 16px;border:1.5px solid var(--line-strong);background:var(--paper);
  border-radius:12px;font-size:13px;font-weight:700;color:var(--ink);transition:.15s;
}
.fx-opt-chip.active{background:var(--orange);color:#fff;border-color:var(--orange)}
.fx-opt-chip.disabled{opacity:.35;text-decoration:line-through;cursor:not-allowed}
.fx-pdp-desc{font-size:13px;line-height:1.75;color:var(--ink-2);margin-bottom:20px;padding:16px;background:var(--paper);border-radius:var(--r);border:1px solid var(--line)}
.fx-pdp-cta{
  position:sticky;bottom:0;background:var(--paper);border-top:1px solid var(--line);
  padding:14px 20px;display:flex;gap:10px;box-shadow:0 -4px 20px rgba(80,40,20,.06);
}
.fx-pdp-cta .fx-btn-primary{margin:0;flex:1;padding:16px}
.fx-pdp-fav{
  width:52px;height:52px;border:1.5px solid var(--line-strong);border-radius:14px;
  display:flex;align-items:center;justify-content:center;background:var(--paper);
}

/* ===== ADMIN - SIDEBAR KANAN ===== */
.fx-admin{display:flex;min-height:100vh;background:var(--cream);flex-direction:row-reverse}
.fx-sidebar{
  width:260px;background:var(--ink);color:#fff;
  position:fixed;top:0;right:0;bottom:0;z-index:100;
  display:flex;flex-direction:column;transition:transform .3s;
}
.fx-sidebar.collapsed{transform:translateX(100%)}
@media(min-width:1024px){.fx-sidebar.collapsed{transform:translateX(0)}}
.fx-sb-brand{padding:22px 20px 18px;border-bottom:1px solid rgba(255,255,255,.1)}
.fx-sb-brand-name{font-size:18px;font-weight:800;letter-spacing:-.02em}
.fx-sb-brand-name em{color:var(--orange);font-style:normal}
.fx-sb-brand-role{font-size:10px;font-weight:600;letter-spacing:.18em;color:rgba(255,255,255,.4);text-transform:uppercase;margin-top:5px}
.fx-sb-user{
  padding:16px 20px;display:flex;align-items:center;gap:10px;
  border-bottom:1px solid rgba(255,255,255,.1);background:rgba(255,107,53,.08);
}
.fx-sb-avatar{
  width:38px;height:38px;border-radius:50%;background:var(--orange);color:#fff;
  display:flex;align-items:center;justify-content:center;font-weight:800;font-size:12px;flex-shrink:0;
}
.fx-sb-user-info{flex:1;min-width:0}
.fx-sb-user-name{font-size:12px;font-weight:700}
.fx-sb-user-role{font-size:10px;color:var(--orange);font-weight:600}
.fx-sb-nav{flex:1;overflow-y:auto;padding:14px 12px}
.fx-sb-group{margin-bottom:16px}
.fx-sb-group-label{
  font-size:10px;font-weight:700;letter-spacing:.16em;color:rgba(255,255,255,.4);
  text-transform:uppercase;padding:8px 12px 6px;
}
.fx-sb-item{
  display:flex;align-items:center;gap:12px;padding:11px 12px;border-radius:10px;
  font-size:12px;font-weight:600;color:rgba(255,255,255,.7);width:100%;
  text-align:left;transition:.15s;margin-bottom:2px;position:relative;
}
.fx-sb-item:hover{background:rgba(255,255,255,.06);color:#fff}
.fx-sb-item.active{background:var(--orange);color:#fff}
.fx-sb-icon{font-size:16px;display:flex;width:20px;justify-content:center;flex-shrink:0}
.fx-sb-badge{
  margin-left:auto;background:var(--yellow);color:var(--ink);
  font-size:10px;font-weight:800;padding:2px 7px;border-radius:10px;min-width:20px;text-align:center;
}
.fx-sb-item.active .fx-sb-badge{background:#fff;color:var(--orange)}
.fx-sb-footer{padding:14px 16px;border-top:1px solid rgba(255,255,255,.1)}
.fx-sb-switch{
  width:100%;display:flex;align-items:center;justify-content:center;gap:8px;
  padding:12px;border-radius:10px;background:var(--orange);color:#fff;
  font-size:12px;font-weight:700;
}
.fx-sb-switch:hover{background:var(--orange-dark)}
.fx-sb-overlay{
  position:fixed;inset:0;background:rgba(45,24,16,.5);z-index:99;
  opacity:0;visibility:hidden;transition:.25s;
}
.fx-sb-overlay.show{opacity:1;visibility:visible}
@media(min-width:1024px){.fx-sb-overlay{display:none}}

.fx-main{flex:1;margin-right:260px;min-width:0}
@media(max-width:1023px){.fx-main{margin-right:0}}
.fx-topbar{
  position:sticky;top:0;background:rgba(255,248,240,.95);backdrop-filter:blur(12px);
  border-bottom:1px solid var(--line);padding:14px 24px;z-index:50;
  display:flex;align-items:center;gap:14px;
}
.fx-menu-btn{
  width:40px;height:40px;border-radius:50%;background:var(--paper);
  border:1px solid var(--line);display:none;align-items:center;justify-content:center;color:var(--ink-2);
}
@media(max-width:1023px){.fx-menu-btn{display:flex}}
.fx-breadcrumb{font-size:10px;font-weight:600;color:var(--ink-muted);letter-spacing:.06em;text-transform:uppercase}
.fx-breadcrumb span.active{color:var(--orange)}
.fx-page-title{font-size:20px;font-weight:800;letter-spacing:-.02em;margin-top:2px}
.fx-page-sub{font-size:11px;color:var(--ink-muted);margin-top:2px;font-weight:500}
.fx-top-right{margin-left:auto;display:flex;gap:8px;align-items:center}
.fx-switch-customer{
  display:flex;align-items:center;gap:8px;padding:9px 16px;
  background:var(--orange);color:#fff;border-radius:24px;
  font-size:12px;font-weight:700;white-space:nowrap;
}
.fx-switch-customer:hover{background:var(--orange-dark)}
.fx-icon-btn{
  width:40px;height:40px;border-radius:50%;background:var(--paper);
  border:1px solid var(--line);display:flex;align-items:center;justify-content:center;color:var(--ink-2);
}
.fx-content{padding:24px}
@media(max-width:639px){.fx-content{padding:16px}}

/* Admin menu grid */
.fx-menu-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-bottom:22px}
@media(min-width:640px){.fx-menu-grid{grid-template-columns:repeat(4,1fr)}}
.fx-menu-tile{
  background:var(--paper);border:1px solid var(--line);border-radius:var(--r);
  padding:18px;text-align:left;transition:.2s;position:relative;overflow:hidden;
  cursor:pointer;
}
.fx-menu-tile:hover{border-color:var(--orange);transform:translateY(-2px);box-shadow:var(--shadow)}
.fx-tile-icon{
  font-size:26px;margin-bottom:10px;line-height:1;
}
.fx-tile-title{font-size:13px;font-weight:800;color:var(--ink);margin-bottom:3px}
.fx-tile-sub{font-size:10px;color:var(--ink-muted);font-weight:500}
.fx-tile-badge{
  position:absolute;top:12px;right:12px;background:var(--orange);color:#fff;
  font-size:10px;font-weight:800;padding:3px 7px;border-radius:10px;min-width:20px;text-align:center;
}

/* KPI */
.fx-kpi-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-bottom:20px}
@media(min-width:640px){.fx-kpi-grid{grid-template-columns:repeat(4,1fr)}}
.fx-kpi{
  background:var(--paper);border-radius:var(--r);padding:18px;
  border:1px solid var(--line);position:relative;overflow:hidden;
}
.fx-kpi-icon{font-size:22px;margin-bottom:8px;opacity:.9}
.fx-kpi-label{font-size:10px;font-weight:700;color:var(--ink-muted);letter-spacing:.06em;text-transform:uppercase;margin-bottom:8px}
.fx-kpi-value{font-size:22px;font-weight:800;letter-spacing:-.02em;line-height:1.1;color:var(--ink)}
.fx-kpi-value.orange{color:var(--orange)}
.fx-kpi-trend{display:inline-flex;align-items:center;gap:4px;font-size:10px;font-weight:800;padding:3px 8px;border-radius:10px;margin-top:10px}
.fx-kpi-trend.up{background:var(--matcha-soft);color:var(--matcha)}
.fx-kpi-trend.down{background:var(--berry-soft);color:var(--berry)}

/* Card panel */
.fx-panel{background:var(--paper);border-radius:var(--r);border:1px solid var(--line);overflow:hidden;margin-bottom:16px}
.fx-panel-head{padding:18px 20px;border-bottom:1px solid var(--line);display:flex;align-items:center;justify-content:space-between;gap:12px}
.fx-panel-title{font-size:15px;font-weight:800;letter-spacing:-.01em}
.fx-panel-sub{font-size:11px;color:var(--ink-muted);margin-top:3px;font-weight:500}
.fx-panel-body{padding:20px}
.fx-panel-body-flush{padding:0}

/* Table */
.fx-tbl-wrap{overflow-x:auto}
.fx-tbl{width:100%;border-collapse:collapse;font-size:12px}
.fx-tbl th{
  text-align:left;padding:12px 16px;font-size:10px;font-weight:800;
  letter-spacing:.08em;text-transform:uppercase;color:var(--ink-muted);
  background:var(--cream-2);border-bottom:1px solid var(--line);white-space:nowrap;
}
.fx-tbl td{padding:14px 16px;border-bottom:1px solid var(--line);vertical-align:middle}
.fx-tbl tr:last-child td{border-bottom:none}
.fx-tbl tr:hover td{background:var(--cream)}

/* Buttons admin */
.fx-btn{
  padding:8px 14px;border-radius:10px;font-size:11px;font-weight:700;
  transition:.15s;display:inline-flex;align-items:center;gap:6px;
}
.fx-btn.primary{background:var(--orange);color:#fff}
.fx-btn.primary:hover{background:var(--orange-dark)}
.fx-btn.outline{background:var(--paper);color:var(--ink-2);border:1px solid var(--line-strong)}
.fx-btn.outline:hover{border-color:var(--orange);color:var(--orange)}
.fx-btn.danger{background:var(--danger);color:#fff}
.fx-btn.mint{background:var(--matcha);color:#fff}
.fx-btn-back{
  display:inline-flex;align-items:center;gap:6px;padding:8px 14px;
  background:var(--paper);border:1px solid var(--line);border-radius:12px;
  color:var(--ink-2);font-size:11px;font-weight:700;margin-bottom:16px;
}
.fx-btn-back:hover{border-color:var(--orange);color:var(--orange)}

/* Badges */
.fx-badge{
  display:inline-flex;align-items:center;gap:5px;padding:5px 10px;border-radius:12px;
  font-size:10px;font-weight:800;letter-spacing:.02em;white-space:nowrap;
}
.fx-badge.success{background:var(--matcha-soft);color:var(--matcha)}
.fx-badge.warning{background:var(--yellow-soft);color:#8a5a20}
.fx-badge.danger{background:var(--berry-soft);color:var(--berry)}
.fx-badge.info{background:#e0eaf3;color:var(--info)}
.fx-badge.neutral{background:var(--cream-2);color:var(--ink-muted)}
.fx-badge-dot{width:6px;height:6px;border-radius:50%;background:currentColor}

/* List item */
.fx-list-item{display:flex;align-items:center;gap:14px;padding:16px 0;border-bottom:1px solid var(--line)}
.fx-list-item:last-child{border-bottom:none}
.fx-list-avatar{
  width:44px;height:44px;border-radius:50%;background:var(--orange-soft);
  color:var(--orange-dark);display:flex;align-items:center;justify-content:center;
  font-weight:800;font-size:13px;flex-shrink:0;
}
.fx-list-info{flex:1;min-width:0}
.fx-list-name{font-size:13px;font-weight:700}
.fx-list-sub{font-size:11px;color:var(--ink-muted);margin-top:2px;font-weight:500}

/* Order card */
.fx-order{
  border:1px solid var(--line);border-radius:var(--r);padding:18px;
  margin-bottom:14px;background:var(--paper);
}
.fx-order-head{
  display:flex;justify-content:space-between;align-items:flex-start;gap:12px;
  margin-bottom:14px;padding-bottom:12px;border-bottom:1px solid var(--line);
}
.fx-order-id{font-size:14px;font-weight:800;color:var(--ink)}
.fx-order-meta{font-size:11px;color:var(--ink-muted);margin-top:3px;font-weight:500}
.fx-order-items{
  background:var(--cream);border-radius:10px;padding:12px;margin:12px 0;
  font-size:12px;line-height:1.7;color:var(--ink-2);
}
.fx-order-actions{display:flex;gap:8px;flex-wrap:wrap;padding-top:12px;border-top:1px solid var(--line)}

/* Variant */
.fx-variant-row{
  display:grid;grid-template-columns:1fr 1fr auto auto;gap:12px;align-items:center;
  padding:12px 16px;border-bottom:1px solid var(--line);font-size:12px;
}
.fx-variant-row:last-child{border-bottom:none}
.fx-variant-row:nth-child(odd){background:var(--cream)}
.fx-variant-input{
  width:70px;padding:7px 10px;border:1.5px solid var(--line-strong);border-radius:8px;
  text-align:center;font-weight:800;font-size:12px;background:var(--paper);
}
.fx-variant-input:focus{border-color:var(--orange)}

/* Filter */
.fx-filters{display:flex;gap:8px;overflow-x:auto;padding-bottom:14px;scrollbar-width:none}
.fx-filters::-webkit-scrollbar{display:none}
.fx-chip{
  flex-shrink:0;padding:8px 16px;background:var(--paper);
  border:1px solid var(--line);border-radius:20px;
  font-size:12px;font-weight:700;color:var(--ink-2);white-space:nowrap;
}
.fx-chip.active{background:var(--ink);color:#fff;border-color:var(--ink)}

/* Progress */
.fx-progress{height:8px;background:var(--cream-2);border-radius:4px;overflow:hidden;margin-top:10px}
.fx-progress-fill{height:100%;background:var(--orange);border-radius:4px;transition:.5s}

/* Chart */
.fx-chart{display:flex;align-items:flex-end;gap:6px;height:160px;padding-top:20px}
.fx-chart-bar{
  flex:1;background:var(--orange-soft);border-radius:8px 8px 0 0;
  position:relative;min-height:8px;transition:.3s;
}
.fx-chart-bar.active{background:var(--orange)}
.fx-chart-bar span{
  position:absolute;bottom:-22px;left:0;right:0;text-align:center;
  font-size:10px;color:var(--ink-muted);font-weight:700;
}
.fx-chart-bar b{
  position:absolute;top:-18px;left:0;right:0;text-align:center;
  font-size:10px;color:var(--ink);font-weight:800;
}

/* Live order status */
.fx-live-order{
  background:var(--ink);color:#fff;border-radius:var(--r);padding:16px;
  margin-bottom:16px;display:flex;align-items:center;gap:14px;
}
.fx-live-icon{
  width:48px;height:48px;background:var(--orange);border-radius:50%;
  display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;
}
.fx-live-body{flex:1}
.fx-live-title{font-size:12px;font-weight:700;margin-bottom:2px}
.fx-live-sub{font-size:10px;color:rgba(255,255,255,.7);font-weight:500}
.fx-live-progress{
  height:4px;background:rgba(255,255,255,.15);border-radius:2px;overflow:hidden;margin-top:8px;
}
.fx-live-progress-fill{height:100%;background:var(--yellow);border-radius:2px;transition:.5s}

/* Modal */
.fx-modal{
  position:fixed;inset:0;background:rgba(45,24,16,.5);z-index:600;
  display:flex;align-items:flex-end;justify-content:center;
  opacity:0;visibility:hidden;transition:.25s;padding:0;backdrop-filter:blur(4px);
}
@media(min-width:640px){.fx-modal{align-items:center;padding:16px}}
.fx-modal.open{opacity:1;visibility:visible}
.fx-modal-box{
  background:var(--paper);border-radius:24px 24px 0 0;width:100%;max-width:520px;
  transform:translateY(20px);transition:.28s;max-height:92vh;overflow-y:auto;padding:26px;
}
@media(min-width:640px){.fx-modal-box{border-radius:var(--r-lg)}}
.fx-modal.open .fx-modal-box{transform:translateY(0)}
.fx-modal-title{font-size:20px;font-weight:800;letter-spacing:-.02em;margin-bottom:6px}
.fx-modal-sub{font-size:12px;color:var(--ink-muted);margin-bottom:18px}

/* Success */
.fx-success{padding:40px 20px;text-align:center}
.fx-success-icon{
  width:80px;height:80px;border-radius:50%;background:var(--matcha-soft);color:var(--matcha);
  display:flex;align-items:center;justify-content:center;margin:0 auto 22px;font-size:34px;
}
.fx-success-title{font-size:24px;font-weight:800;letter-spacing:-.02em;margin-bottom:10px}
.fx-success-sub{font-size:13px;color:var(--ink-2);line-height:1.7;margin-bottom:24px}

/* Toast */
.fx-toast{
  position:fixed;bottom:160px;left:50%;transform:translateX(-50%) translateY(20px);
  background:var(--ink);color:#fff;padding:12px 24px;border-radius:24px;
  font-size:12px;font-weight:700;z-index:700;opacity:0;transition:.3s;
  pointer-events:none;white-space:nowrap;max-width:92vw;
  box-shadow:0 8px 24px rgba(45,24,16,.3);
}
.fx-toast.show{opacity:1;transform:translateX(-50%) translateY(0)}

/* Empty */
.fx-empty{text-align:center;padding:50px 20px;color:var(--ink-muted)}
.fx-empty-icon{font-size:52px;margin-bottom:14px;opacity:.4}
.fx-empty-title{font-size:15px;font-weight:700;color:var(--ink);margin-bottom:4px}
.fx-empty-desc{font-size:12px}

/* Form */
.fx-form-group{margin-bottom:16px}
.fx-form-label{display:block;font-size:11px;font-weight:800;letter-spacing:.04em;color:var(--ink-2);margin-bottom:7px;text-transform:uppercase}
.fx-form-input{
  width:100%;padding:12px 14px;border:1.5px solid var(--line);border-radius:12px;
  font-size:14px;background:var(--paper);transition:.15s;font-weight:500;
}
.fx-form-input:focus{border-color:var(--orange);box-shadow:0 0 0 4px var(--orange-soft)}
.fx-form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}

/* Search overlay */
.fx-search-overlay{
  position:fixed;inset:0;background:var(--cream);z-index:600;
  transform:translateY(-100%);transition:.3s;overflow-y:auto;
}
.fx-search-overlay.open{transform:translateY(0)}
.fx-search-head{
  background:var(--orange);padding:16px 20px;display:flex;gap:12px;align-items:center;
  position:sticky;top:0;z-index:10;
}
.fx-search-input{
  flex:1;padding:14px 18px;background:#fff;border-radius:12px;
  font-size:14px;font-weight:500;border:none;
}
.fx-search-cancel{color:#fff;font-size:12px;font-weight:700}
.fx-search-body{padding:22px}
.fx-search-tag-row{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:22px}
.fx-search-tag{
  padding:10px 16px;background:var(--paper);border:1px solid var(--line);
  border-radius:20px;font-size:12px;font-weight:600;color:var(--ink-2);
}
.fx-search-result{
  display:flex;gap:12px;padding:12px 0;border-bottom:1px solid var(--line);
  cursor:pointer;align-items:center;
}

/* Chat bubble */
.fx-chat-fab{
  position:fixed;bottom:160px;right:18px;width:54px;height:54px;border-radius:50%;
  background:var(--yellow);color:var(--ink);display:flex;align-items:center;justify-content:center;
  box-shadow:0 8px 24px rgba(255,194,51,.4);z-index:250;
}
.fx-chat{
  position:fixed;bottom:160px;right:18px;width:340px;max-width:calc(100vw - 36px);
  height:480px;max-height:72vh;background:var(--paper);border-radius:var(--r-lg);
  z-index:260;display:flex;flex-direction:column;transform:translateY(20px);
  opacity:0;visibility:hidden;transition:.25s;box-shadow:var(--shadow-lg);overflow:hidden;
}
.fx-chat.open{transform:translateY(0);opacity:1;visibility:visible}
.fx-chat-head{background:var(--orange);color:#fff;padding:14px 16px;display:flex;align-items:center;gap:10px}
.fx-chat-avatar{
  width:38px;height:38px;border-radius:50%;background:rgba(255,255,255,.25);
  display:flex;align-items:center;justify-content:center;font-size:16px;
}
.fx-chat-info{flex:1}
.fx-chat-name{font-size:13px;font-weight:700}
.fx-chat-status{font-size:10px;color:rgba(255,255,255,.85);display:flex;align-items:center;gap:4px;margin-top:2px;font-weight:500}
.fx-chat-live{width:6px;height:6px;background:var(--matcha);border-radius:50%;box-shadow:0 0 8px var(--matcha)}
.fx-chat-body{flex:1;overflow-y:auto;padding:14px;display:flex;flex-direction:column;gap:10px;background:var(--cream)}
.fx-chat-msg{max-width:82%;padding:10px 14px;border-radius:16px;font-size:12px;line-height:1.5}
.fx-chat-msg.bot{background:var(--paper);color:var(--ink);align-self:flex-start;border-bottom-left-radius:4px;box-shadow:var(--shadow-sm)}
.fx-chat-msg.user{background:var(--orange);color:#fff;align-self:flex-end;border-bottom-right-radius:4px}
.fx-chat-time{font-size:9px;opacity:.6;margin-top:4px;font-weight:600}
.fx-chat-input-row{border-top:1px solid var(--line);padding:10px;display:flex;gap:8px;background:var(--paper)}
.fx-chat-input{
  flex:1;padding:10px 16px;background:var(--cream-2);border:none;
  border-radius:20px;font-size:12px;
}
.fx-chat-send{
  width:38px;height:38px;border-radius:50%;background:var(--orange);color:#fff;
  display:flex;align-items:center;justify-content:center;
}

/* Alert */
.fx-alert{
  padding:14px 16px;border-radius:var(--r);font-size:12px;font-weight:500;
  display:flex;gap:10px;margin-bottom:14px;line-height:1.6;
}
.fx-alert.info{background:#e0eaf3;color:#3d5870}
.fx-alert.success{background:var(--matcha-soft);color:var(--matcha)}

/* Scrollbar */
::-webkit-scrollbar{width:8px;height:8px}
::-webkit-scrollbar-track{background:var(--cream)}
::-webkit-scrollbar-thumb{background:var(--line-strong);border-radius:4px}
::-webkit-scrollbar-thumb:hover{background:var(--ink-muted)}
</style>
</head>
<body>

<!-- ========== FLOATING MODE SWITCH ========== -->
<div class="fx-mode-switch">
  <button class="fx-mode-btn active" id="msCustomer" onclick="setMode('customer')">🍽 Order</button>
  <button class="fx-mode-btn" id="msAdmin" onclick="setMode('admin')">📊 Admin Panel</button>
</div>

<!-- ========== CUSTOMER ========== -->
<div id="customerApp">
  <header class="fx-header">
    <div class="fx-header-top">
      <div class="fx-location" onclick="showToast('Ubah alamat pengiriman')">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <div>
          <div style="font-size:10px;opacity:.8">Antar ke</div>
          <strong>Jakarta Selatan ▼</strong>
        </div>
      </div>
      <button class="fx-admin-entry" onclick="setMode('admin')">📊 Admin</button>
    </div>
    <div class="fx-search" onclick="openSearch()">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4"/></svg>
      <span>Cari makanan atau restoran...</span>
    </div>
    <div class="fx-header-info">
      <span>🛵 <b>Gratis ongkir</b> min. Rp50.000</span>
      <span>⏱ Estimasi <b>25-35 menit</b></span>
    </div>
  </header>

  <!-- Kategori -->
  <div class="fx-cats" id="catNav"></div>

  <!-- Live order tracking (jika ada order aktif) -->
  <div id="liveOrderContainer"></div>

  <!-- Promo banner -->
  <div class="fx-promo">
    <div class="fx-promo-emoji">🎉</div>
    <div class="fx-promo-body">
      <div class="fx-promo-title">Diskon 50% Menu Pilihan</div>
      <div class="fx-promo-sub">Berlaku untuk semua restoran partner</div>
      <span class="fx-promo-code">EXPRESS50</span>
    </div>
  </div>

  <!-- Bestseller horizontal -->
  <section class="fx-section">
    <div class="fx-section-head">
      <div>
        <div class="fx-section-title">🔥 Bestseller Hari Ini</div>
        <div class="fx-section-sub">Paling banyak dipesan</div>
      </div>
      <button class="fx-section-link" onclick="setCategory('all')">Lihat semua</button>
    </div>
    <div class="fx-hscroll" id="bestsellerScroll"></div>
  </section>

  <!-- Restoran terdekat -->
  <section class="fx-section">
    <div class="fx-section-head">
      <div>
        <div class="fx-section-title">🏪 Restoran Terdekat</div>
        <div class="fx-section-sub">Estimasi 20-40 menit</div>
      </div>
    </div>
    <div style="padding:0 18px" id="restaurantList"></div>
  </section>

  <!-- Menu vertikal -->
  <section class="fx-section">
    <div class="fx-section-head">
      <div>
        <div class="fx-section-title" id="sectionTitle">🍜 Semua Menu</div>
        <div class="fx-section-sub" id="sectionSub">Pilih menu favoritmu</div>
      </div>
    </div>
    <div style="padding:0 18px" id="menuList"></div>
  </section>
</div>

<!-- ========== ADMIN ========== -->
<div id="adminApp" class="fx-admin hidden">
  <aside class="fx-sidebar collapsed" id="fxSidebar">
    <div class="fx-sb-brand">
      <div class="fx-sb-brand-name">Food<em>Express</em></div>
      <div class="fx-sb-brand-role">Merchant Dashboard</div>
    </div>
    <div class="fx-sb-user">
      <div class="fx-sb-avatar">RS</div>
      <div class="fx-sb-user-info">
        <div class="fx-sb-user-name">Rina Suryani</div>
        <div class="fx-sb-user-role">Store Manager</div>
      </div>
    </div>
    <nav class="fx-sb-nav">
      <div class="fx-sb-group">
        <div class="fx-sb-group-label">Operasional</div>
        <button class="fx-sb-item active" data-tab="dashboard" onclick="switchAdminTab('dashboard')">
          <span class="fx-sb-icon">📊</span> Dashboard
        </button>
        <button class="fx-sb-item" data-tab="orders" onclick="switchAdminTab('orders')">
          <span class="fx-sb-icon">📋</span> Pesanan
          <span class="fx-sb-badge" id="fxOrderBadge">0</span>
        </button>
        <button class="fx-sb-item" data-tab="live" onclick="switchAdminTab('live')">
          <span class="fx-sb-icon">🛵</span> Live Order
        </button>
      </div>
      <div class="fx-sb-group">
        <div class="fx-sb-group-label">Menu</div>
        <button class="fx-sb-item" data-tab="menu" onclick="switchAdminTab('menu')">
          <span class="fx-sb-icon">🍜</span> Menu & Harga
        </button>
        <button class="fx-sb-item" data-tab="stock" onclick="switchAdminTab('stock')">
          <span class="fx-sb-icon">📦</span> Stok Harian
        </button>
        <button class="fx-sb-item" data-tab="categories" onclick="switchAdminTab('categories')">
          <span class="fx-sb-icon">🏷</span> Kategori
        </button>
      </div>
      <div class="fx-sb-group">
        <div class="fx-sb-group-label">Bisnis</div>
        <button class="fx-sb-item" data-tab="customers" onclick="switchAdminTab('customers')">
          <span class="fx-sb-icon">👥</span> Pelanggan
        </button>
        <button class="fx-sb-item" data-tab="promos" onclick="switchAdminTab('promos')">
          <span class="fx-sb-icon">🎁</span> Promo
        </button>
        <button class="fx-sb-item" data-tab="staff" onclick="switchAdminTab('staff')">
          <span class="fx-sb-icon">👨‍🍳</span> Staff
        </button>
        <button class="fx-sb-item" data-tab="reports" onclick="switchAdminTab('reports')">
          <span class="fx-sb-icon">📈</span> Laporan
        </button>
      </div>
      <div class="fx-sb-group">
        <div class="fx-sb-group-label">Sistem</div>
        <button class="fx-sb-item" data-tab="settings" onclick="switchAdminTab('settings')">
          <span class="fx-sb-icon">⚙</span> Pengaturan
        </button>
      </div>
    </nav>
    <div class="fx-sb-footer">
      <button class="fx-sb-switch" onclick="setMode('customer')">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
        Lihat Toko
      </button>
    </div>
  </aside>
  <div class="fx-sb-overlay" id="fxSidebarOverlay" onclick="toggleFxSidebar()"></div>

  <main class="fx-main">
    <div class="fx-topbar">
      <button class="fx-menu-btn" onclick="toggleFxSidebar()" aria-label="Menu">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
      <div>
        <div class="fx-breadcrumb" id="fxBreadcrumb">
          <span style="cursor:pointer" onclick="switchAdminTab('dashboard')">Dashboard</span>
          <span class="sep" style="opacity:.5">/</span>
          <span class="active">Overview</span>
        </div>
        <div class="fx-page-title" id="fxPageTitle">Dashboard</div>
        <div class="fx-page-sub" id="fxPageSub">Ringkasan performa hari ini</div>
      </div>
      <div class="fx-top-right">
        <button class="fx-switch-customer" onclick="setMode('customer')">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
          Lihat Toko
        </button>
        <button class="fx-icon-btn" onclick="showToast('Notifikasi')" aria-label="Notifikasi">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
        </button>
      </div>
    </div>
    <div class="fx-content" id="fxContent"></div>
  </main>
</div>

<!-- ========== FLOATING CART ========== -->
<button class="fx-cart-fab" id="cartFab" onclick="toggleCart()">
  <span class="fx-cart-count" id="cartFabCount">0</span>
  <span class="fx-cart-total" id="cartFabTotal">Rp0</span>
  <span class="fx-cart-arrow">→</span>
</button>

<!-- ========== BOTTOM NAV ========== -->
<nav class="fx-nav" id="bottomNav">
  <button class="fx-nav-item active" data-nav="home" onclick="navTo('home')">
    <span class="fx-nav-icon">🏠</span>
    Beranda
  </button>
  <button class="fx-nav-item" data-nav="search" onclick="openSearch()">
    <span class="fx-nav-icon">🔍</span>
    Cari
  </button>
  <button class="fx-nav-item" data-nav="orders" onclick="toggleOrders()">
    <span class="fx-nav-icon">📋</span>
    Pesanan
    <span class="fx-nav-badge" id="ordersBadge" style="display:none">0</span>
  </button>
  <button class="fx-nav-item" data-nav="favorites" onclick="toggleWishlist()">
    <span class="fx-nav-icon">❤</span>
    Favorit
    <span class="fx-nav-badge" id="favBadge" style="display:none">0</span>
  </button>
  <button class="fx-nav-item" data-nav="admin" onclick="setMode('admin')">
    <span class="fx-nav-icon">📊</span>
    Admin
  </button>
</nav>

<!-- ========== CHAT ========== -->
<button class="fx-chat-fab" id="fxChatFab" onclick="toggleChat()" aria-label="Chat">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
</button>
<div class="fx-chat" id="fxChat">
  <div class="fx-chat-head">
    <div class="fx-chat-avatar">🎧</div>
    <div class="fx-chat-info">
      <div class="fx-chat-name">FoodExpress Support</div>
      <div class="fx-chat-status"><span class="fx-chat-live"></span>Online - balas dalam 30 detik</div>
    </div>
    <button onclick="toggleChat()" style="color:#fff">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="fx-chat-body" id="fxChatBody"></div>
  <div class="fx-chat-input-row">
    <input class="fx-chat-input" id="fxChatInput" placeholder="Tanya tentang pesanan..." onkeydown="if(event.key==='Enter')sendChat()">
    <button class="fx-chat-send" onclick="sendChat()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
    </button>
  </div>
</div>

<!-- ========== CART DRAWER ========== -->
<div class="fx-overlay" id="cartOverlay" onclick="toggleCart()"></div>
<aside class="fx-drawer" id="cartDrawer">
  <div class="fx-drawer-handle"></div>
  <div class="fx-drawer-head">
    <div>
      <div class="fx-drawer-title">Keranjang</div>
      <small id="cartCountLabel" style="font-size:11px;color:var(--ink-muted);display:block;margin-top:3px">0 item</small>
    </div>
    <button class="fx-drawer-close" onclick="toggleCart()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="fx-drawer-body" id="cartBody"></div>
  <div class="fx-drawer-foot" id="cartFoot" style="display:none">
    <div class="fx-sum-row"><span>Subtotal</span><span id="subtotal">Rp0</span></div>
    <div class="fx-sum-row"><span>Ongkir</span><span id="ongkir" style="color:var(--matcha)">GRATIS</span></div>
    <div class="fx-sum-row"><span>Biaya Layanan</span><span id="service">Rp2.000</span></div>
    <div class="fx-sum-row total"><span>Total</span><span id="total">Rp0</span></div>
    <button class="fx-btn-primary" onclick="openCheckout()">Pesan Sekarang</button>
  </div>
</aside>

<!-- ========== ORDERS DRAWER ========== -->
<div class="fx-overlay" id="ordersOverlay" onclick="toggleOrders()"></div>
<aside class="fx-drawer" id="ordersDrawer">
  <div class="fx-drawer-handle"></div>
  <div class="fx-drawer-head">
    <div>
      <div class="fx-drawer-title">Pesanan Saya</div>
      <small style="font-size:11px;color:var(--ink-muted);display:block;margin-top:3px">Riwayat pesanan</small>
    </div>
    <button class="fx-drawer-close" onclick="toggleOrders()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="fx-drawer-body" id="ordersBody"></div>
</aside>

<!-- ========== FAVORITES DRAWER ========== -->
<div class="fx-overlay" id="favOverlay" onclick="toggleWishlist()"></div>
<aside class="fx-drawer" id="favDrawer">
  <div class="fx-drawer-handle"></div>
  <div class="fx-drawer-head">
    <div>
      <div class="fx-drawer-title">Favorit</div>
      <small id="favCountLabel" style="font-size:11px;color:var(--ink-muted);display:block;margin-top:3px">0 item</small>
    </div>
    <button class="fx-drawer-close" onclick="toggleWishlist()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="fx-drawer-body" id="favBody"></div>
</aside>

<!-- ========== SEARCH ========== -->
<div class="fx-search-overlay" id="fxSearchOverlay">
  <div class="fx-search-head">
    <input class="fx-search-input" id="fxSearchInput" placeholder="Cari makanan atau restoran..." oninput="handleSearch(this.value)">
    <button class="fx-search-cancel" onclick="closeSearch()">Batal</button>
  </div>
  <div class="fx-search-body">
    <div style="font-size:11px;font-weight:800;letter-spacing:.06em;color:var(--ink-muted);text-transform:uppercase;margin-bottom:12px">Pencarian Populer</div>
    <div class="fx-search-tag-row">
      <button class="fx-search-tag" onclick="quickSearch('nasi')">Nasi Goreng</button>
      <button class="fx-search-tag" onclick="quickSearch('ayam')">Ayam Geprek</button>
      <button class="fx-search-tag" onclick="quickSearch('mie')">Mie Ayam</button>
      <button class="fx-search-tag" onclick="quickSearch('kopi')">Kopi</button>
      <button class="fx-search-tag" onclick="quickSearch('burger')">Burger</button>
      <button class="fx-search-tag" onclick="quickSearch('boba')">Boba</button>
    </div>
    <div id="searchResults"></div>
  </div>
</div>

<!-- ========== PDP ========== -->
<div class="fx-pdp" id="pdpModal"></div>

<!-- ========== SUCCESS ========== -->
<div class="fx-modal" id="checkoutModal">
  <div class="fx-modal-box">
    <div class="fx-success">
      <div class="fx-success-icon">✓</div>
      <h2 class="fx-success-title">Pesanan Diterima!</h2>
      <p class="fx-success-sub">Order <b id="orderIdDisplay">FX-2026-XXXX</b> sedang diproses.<br>Estimasi tiba dalam <b>25-35 menit</b>.</p>
      <button class="fx-btn-primary" onclick="closeCheckout();toggleOrders()">Lacak Pesanan</button>
      <button class="fx-btn-secondary" onclick="closeCheckout()">Kembali Belanja</button>
    </div>
  </div>
</div>

<!-- ========== PRODUCT MODAL ========== -->
<div class="fx-modal" id="productModal">
  <div class="fx-modal-box">
    <div class="fx-modal-title" id="productModalTitle">Menu Baru</div>
    <div class="fx-modal-sub">Isi detail menu</div>
    <div class="fx-form-group"><label class="fx-form-label">Nama Menu</label><input class="fx-form-input" id="pmName"></div>
    <div class="fx-form-row">
      <div class="fx-form-group"><label class="fx-form-label">Kategori</label><select class="fx-form-input" id="pmCat"></select></div>
      <div class="fx-form-group"><label class="fx-form-label">Restoran</label><input class="fx-form-input" id="pmBrand"></div>
    </div>
    <div class="fx-form-row">
      <div class="fx-form-group"><label class="fx-form-label">Harga</label><input class="fx-form-input" id="pmPrice" type="number"></div>
      <div class="fx-form-group"><label class="fx-form-label">Harga Coret</label><input class="fx-form-input" id="pmOld" type="number"></div>
    </div>
    <div class="fx-form-group"><label class="fx-form-label">Deskripsi Singkat</label><input class="fx-form-input" id="pmSpec"></div>
    <div class="fx-form-group"><label class="fx-form-label">Varian (koma)</label><input class="fx-form-input" id="pmVariants" placeholder="Regular, Jumbo"></div>
    <button class="fx-btn-primary" onclick="saveProduct()">Simpan Menu</button>
    <button class="fx-btn-secondary" onclick="closeProductModal()">Batal</button>
  </div>
</div>

<!-- ========== STAFF MODAL ========== -->
<div class="fx-modal" id="staffModal">
  <div class="fx-modal-box">
    <div class="fx-modal-title" id="staffModalTitle">Tambah Staff</div>
    <div class="fx-modal-sub">Undang anggota tim</div>
    <div class="fx-form-group"><label class="fx-form-label">Nama</label><input class="fx-form-input" id="sfName"></div>
    <div class="fx-form-group"><label class="fx-form-label">Email</label><input class="fx-form-input" id="sfEmail"></div>
    <div class="fx-form-group"><label class="fx-form-label">Posisi</label>
      <select class="fx-form-input" id="sfRole">
        <option>Manager</option><option>Chef</option><option>Kasir</option>
        <option>Waiters</option><option>Kurir</option><option>Kitchen Helper</option>
      </select>
    </div>
    <button class="fx-btn-primary" onclick="saveStaff()">Simpan</button>
    <button class="fx-btn-secondary" onclick="closeStaffModal()">Batal</button>
  </div>
</div>

<div class="fx-toast" id="toast"></div>

<script>
/* ==================== DATA ==================== */
const CATEGORIES = [
  {id:'all',name:'Semua',icon:'🍽'},
  {id:'nasi',name:'Nasi',icon:'🍚'},
  {id:'mie',name:'Mie',icon:'🍜'},
  {id:'ayam',name:'Ayam',icon:'🍗'},
  {id:'burger',name:'Burger',icon:'🍔'},
  {id:'pizza',name:'Pizza',icon:'🍕'},
  {id:'minuman',name:'Minuman',icon:'🥤'},
  {id:'kopi',name:'Kopi',icon:'☕'},
  {id:'dessert',name:'Dessert',icon:'🍰'},
  {id:'sushi',name:'Sushi',icon:'🍣'}
];

let PRODUCTS = [
  {id:1,name:'Nasi Goreng Spesial',brand:'Warung Bu Tini',cat:'nasi',price:28000,old:35000,
   emoji:'🍚',bg:'#fff4d9',rating:4.8,sold:842,isNew:false,isSale:true,stock:120,
   spec:'Telur · Ayam · Udang · Kerupuk',variants:{'Regular':80,'Jumbo':40},
   desc:'Nasi goreng dengan bumbu rahasia Bu Tini, telur mata sapi, ayam suwir, dan udang segar. Disajikan dengan kerupuk dan acar.',
   reviews:[{name:'Rina',rating:5,date:'2 hari lalu',text:'Porsi banyak, rasanya juara!',variant:'Regular'}]},
  {id:2,name:'Ayam Geprek Sambal Bawang',brand:'Geprek Bensu',cat:'ayam',price:25000,old:0,
   emoji:'🍗',bg:'#fce5d8',rating:4.7,sold:1204,isNew:false,isSale:false,stock:200,
   spec:'Level 1-5 · Nasi · Lalapan',variants:{'Level 1':50,'Level 3':80,'Level 5':70},
   desc:'Ayam crispy digeprek dengan sambal bawang pedas. Tersedia level 1 sampai 5 sesuai selera.',
   reviews:[{name:'Budi',rating:5,date:'1 minggu lalu',text:'Level 3 mantap!',variant:'Level 3'}]},
  {id:3,name:'Mie Ayam Bakso Komplit',brand:'Mie Pak Yanto',cat:'mie',price:32000,old:38000,
   emoji:'🍜',bg:'#f0e0c8',rating:4.9,sold:678,isNew:false,isSale:true,stock:80,
   spec:'Mie + Bakso + Pangsit',variants:{'Regular':50,'Extra Bakso':30},
   desc:'Mie ayam dengan topping bakso urat, pangsit goreng, dan kuah kaldu sapi asli.',
   reviews:[]},
  {id:4,name:'Beef Burger Cheese',brand:'Burger Bangor',cat:'burger',price:42000,old:0,
   emoji:'🍔',bg:'#f5dcc0',rating:4.6,sold:432,isNew:true,isSale:false,stock:60,
   spec:'Beef patty · Cheddar · Fries',variants:{'Single':40,'Double':20},
   desc:'Burger dengan beef patty 150gr, keju cheddar meleleh, saus spesial, disajikan dengan kentang goreng.',
   reviews:[{name:'Andi',rating:4,date:'3 hari lalu',text:'Enak tapi agak mahal.',variant:'Double'}]},
  {id:5,name:'Pizza Margherita',brand:'Pizza Hut',cat:'pizza',price:89000,old:119000,
   emoji:'🍕',bg:'#ffe0cc',rating:4.7,sold:234,isNew:false,isSale:true,stock:25,
   spec:'8 slices · Keju · Basil',variants:{'Personal':10,'Regular':10,'Large':5},
   desc:'Pizza klasik Italia dengan saus tomat segar, mozzarella, dan daun basil.',
   reviews:[]},
  {id:6,name:'Es Kopi Susu Gula Aren',brand:'Kopi Kenangan',cat:'kopi',price:22000,old:0,
   emoji:'☕',bg:'#e8d0b0',rating:4.9,sold:2841,isNew:false,isSale:false,stock:300,
   spec:'Espresso · Susu · Gula Aren',variants:{'Regular':150,'Large':100,'Extra Shot':50},
   desc:'Es kopi susu dengan gula aren asli, espresso double shot, dan susu segar.',
   reviews:[{name:'Sarah',rating:5,date:'1 hari lalu',text:'Best seller! Rasanya pas.',variant:'Large'}]},
  {id:7,name:'Boba Milk Tea',brand:'Chatime',cat:'minuman',price:25000,old:28000,
   emoji:'🧋',bg:'#f0dcc0',rating:4.6,sold:1523,isNew:false,isSale:true,stock:180,
   spec:'Teh · Susu · Boba',variants:{'Regular':100,'Large':60,'Less Sugar':20},
   desc:'Milk tea dengan boba kenyal, tersedia berbagai pilihan topping.',
   reviews:[]},
  {id:8,name:'Sushi Salmon Roll',brand:'Sushi Tei',cat:'sushi',price:65000,old:0,
   emoji:'🍣',bg:'#ffe8d0',rating:4.8,sold:342,isNew:true,isSale:false,stock:40,
   spec:'8 pcs · Salmon · Nori',variants:{'8 pcs':25,'12 pcs':15},
   desc:'Salmon roll dengan nasi jepang, nori, dan wasabi. Disajikan dengan soy sauce dan jahe.',
   reviews:[]},
  {id:9,name:'Cheese Cake Slice',brand:'Union',cat:'dessert',price:45000,old:0,
   emoji:'🍰',bg:'#f5e0d0',rating:4.7,sold:287,isNew:false,isSale:false,stock:30,
   spec:'New York Cheese Cake',variants:{'Slice':20,'Whole':10},
   desc:'Cheese cake lembut dengan base biskuit, topping selai strawberry.',
   reviews:[]},
  {id:10,name:'Nasi Padang Rendang',brand:'Padang Sederhana',cat:'nasi',price:38000,old:0,
   emoji:'🍛',bg:'#fce8c8',rating:4.9,sold:1056,isNew:false,isSale:false,stock:100,
   spec:'Rendang · Sambal Ijo · Sayur',variants:{'Biasa':70,'Jumbo':30},
   desc:'Nasi padang lengkap dengan rendang daging empuk, sambal ijo, dan sayur nangka.',
   reviews:[{name:'Maya',rating:5,date:'3 hari lalu',text:'Rendangnya empuk banget!',variant:'Biasa'}]},
  {id:11,name:'Mie Goreng Jawa',brand:'Mie Pak Yanto',cat:'mie',price:26000,old:0,
   emoji:'🍝',bg:'#f0e0c8',rating:4.6,sold:432,isNew:false,isSale:false,stock:90,
   spec:'Telur · Sayur · Ayam',variants:{'Regular':60,'Jumbo':30},
   desc:'Mie goreng jawa dengan bumbu khas, telur, dan ayam suwir.',
   reviews:[]},
  {id:12,name:'Dimsum Ayam 6pcs',brand:'Imperial Kitchen',cat:'ayam',price:32000,old:0,
   emoji:'🥟',bg:'#f5e0d0',rating:4.7,sold:678,isNew:false,isSale:false,stock:70,
   spec:'Ayam · Udang · Saus',variants:{'Kukus':40,'Goreng':30},
   desc:'Dimsum ayam udang dengan saus asam manis dan sambal.',
   reviews:[]}
];

const RESTAURANTS = [
  {id:1,name:'Warung Bu Tini',emoji:'🍲',bg:'#fff4d9',tags:['Nasi','Indonesia'],rating:4.8,eta:'20-30',min:20000,promo:'Diskon 20%'},
  {id:2,name:'Geprek Bensu',emoji:'🍗',bg:'#fce5d8',tags:['Ayam','Geprek'],rating:4.7,eta:'25-35',min:25000,promo:''},
  {id:3,name:'Mie Pak Yanto',emoji:'🍜',bg:'#f0e0c8',tags:['Mie','Bakso'],rating:4.9,eta:'15-25',min:20000,promo:'Beli 2 Gratis 1'},
  {id:4,name:'Kopi Kenangan',emoji:'☕',bg:'#e8d0b0',tags:['Kopi','Minuman'],rating:4.9,eta:'10-20',min:15000,promo:'Diskon 30%'}
];

let ORDERS = [
  {id:'FX-2026-2341',customer:'Andi Pratama',total:56000,status:'preparing',time:'5 menit lalu',items:2,payment:'GoPay',address:'Jl. Kebayoran 12',items_list:[{name:'Nasi Goreng Spesial',variant:'Regular',qty:1},{name:'Es Kopi Susu',variant:'Large',qty:1}],trackingStep:2,eta:'25 menit'},
  {id:'FX-2026-2340',customer:'Siti Nurhaliza',total:78000,status:'delivering',time:'15 menit lalu',items:3,payment:'OVO',address:'Jl. Sudirman 45',items_list:[{name:'Ayam Geprek',variant:'Level 3',qty:2},{name:'Boba Milk Tea',variant:'Large',qty:1}],trackingStep:3,eta:'10 menit',courier:'Budi Santoso'},
  {id:'FX-2026-2339',customer:'Budi Hartono',total:120000,status:'delivered',time:'45 menit lalu',items:4,payment:'Kartu Kredit',address:'Jl. Thamrin 88',items_list:[{name:'Pizza Margherita',variant:'Large',qty:1},{name:'Boba Milk Tea',variant:'Regular',qty:3}],trackingStep:4,eta:'Selesai'},
  {id:'FX-2026-2338',customer:'Dewi Lestari',total:45000,status:'delivered',time:'2 jam lalu',items:1,payment:'GoPay',address:'Jl. Gatot Subroto 22',items_list:[{name:'Sushi Salmon Roll',variant:'8 pcs',qty:1}],trackingStep:4,eta:'Selesai'},
  {id:'FX-2026-2337',customer:'Rizki Aditya',total:89000,status:'cancelled',time:'3 jam lalu',items:2,payment:'COD',address:'Jl. Rasuna Said 10',items_list:[{name:'Beef Burger',variant:'Double',qty:1},{name:'Cheese Cake',variant:'Slice',qty:1}],trackingStep:1}
];

let STAFF = [
  {id:1,name:'Rina Suryani',email:'rina@foodexpress.id',role:'Manager',status:'active'},
  {id:2,name:'Chef Juna',email:'juna@foodexpress.id',role:'Chef',status:'active'},
  {id:3,name:'Budi Santoso',email:'budi@foodexpress.id',role:'Kurir',status:'active'},
  {id:4,name:'Sari Indah',email:'sari@foodexpress.id',role:'Kasir',status:'active'},
  {id:5,name:'Dedi Kurniawan',email:'dedi@foodexpress.id',role:'Waiters',status:'inactive'}
];

let CUSTOMERS = [
  {id:1,name:'Andi Pratama',email:'andi@email.com',orders:24,spent:2450000,city:'Jakarta',tier:'Platinum'},
  {id:2,name:'Siti Nurhaliza',email:'siti@email.com',orders:18,spent:1820000,city:'Jakarta',tier:'Gold'},
  {id:3,name:'Budi Hartono',email:'budi@email.com',orders:32,spent:3200000,city:'Depok',tier:'Platinum'},
  {id:4,name:'Dewi Lestari',email:'dewi@email.com',orders:12,spent:950000,city:'Tangerang',tier:'Silver'},
  {id:5,name:'Rizki Aditya',email:'rizki@email.com',orders:41,spent:4100000,city:'Bekasi',tier:'Platinum'}
];

let PROMOS = [
  {code:'EXPRESS50',type:'Persen',value:'50%',min:50000,quota:500,used:342,status:'active'},
  {code:'GRATISONGKIR',type:'Ongkir',value:'Rp15.000',min:40000,quota:2000,used:1287,status:'active'},
  {code:'NEWUSER',type:'Nominal',value:'Rp25.000',min:35000,quota:1000,used:678,status:'active'},
  {code:'FLASH30',type:'Persen',value:'30%',min:75000,quota:200,used:200,status:'expired'}
];

const PAGE_META = {
  dashboard:{title:'Dashboard',sub:'Ringkasan performa hari ini'},
  orders:{title:'Pesanan',sub:'Kelola pesanan masuk'},
  live:{title:'Live Order',sub:'Monitor pesanan aktif'},
  menu:{title:'Menu & Harga',sub:'Katalog menu restoran'},
  stock:{title:'Stok Harian',sub:'Ketersediaan menu hari ini'},
  categories:{title:'Kategori',sub:'Kelompok menu'},
  customers:{title:'Pelanggan',sub:'Database pelanggan'},
  promos:{title:'Promo',sub:'Voucher & diskon'},
  staff:{title:'Staff',sub:'Tim restoran'},
  reports:{title:'Laporan',sub:'Analitik & export'},
  settings:{title:'Pengaturan',sub:'Konfigurasi restoran'}
};

/* ==================== STATE ==================== */
let state = {
  mode:'customer',
  cart: JSON.parse(localStorage.getItem('fx_cart')||'[]'),
  favorites: JSON.parse(localStorage.getItem('fx_fav')||'[]'),
  category:'all', search:'', limit:12,
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
  localStorage.setItem('fx_cart',JSON.stringify(state.cart));
  localStorage.setItem('fx_fav',JSON.stringify(state.favorites));
  updateBadges();
}
function updateBadges(){
  const count = state.cart.reduce((s,i)=>s+i.qty,0);
  const fav = state.favorites.length;
  const activeOrders = ORDERS.filter(o=>o.status==='preparing'||o.status==='delivering').length;

  // Cart FAB
  const fab=document.getElementById('cartFab');
  const fabCount=document.getElementById('cartFabCount');
  const fabTotal=document.getElementById('cartFabTotal');
  if(count>0){
    fab.classList.add('show');
    fabCount.textContent=count;
    const total=state.cart.reduce((s,i)=>s+PRODUCTS.find(p=>p.id===i.id).price*i.qty,0);
    fabTotal.textContent=rupiah(total);
  } else {
    fab.classList.remove('show');
  }

  // Badges
  const ob=document.getElementById('ordersBadge');
  if(ob){ ob.textContent=activeOrders; ob.style.display=activeOrders>0?'flex':'none'; }
  const fb=document.getElementById('favBadge');
  if(fb){ fb.textContent=fav; fb.style.display=fav>0?'flex':'none'; }
  const sb=document.getElementById('fxOrderBadge');
  if(sb){ sb.textContent=ORDERS.filter(o=>o.status==='preparing').length; }

  document.getElementById('cartCountLabel').textContent=count+' item';
  document.getElementById('favCountLabel').textContent=fav+' item';
}

/* ==================== MODE ==================== */
function setMode(mode){
  state.mode=mode;
  document.getElementById('customerApp').classList.toggle('hidden',mode!=='customer');
  document.getElementById('adminApp').classList.toggle('hidden',mode!=='admin');
  document.getElementById('bottomNav').classList.toggle('hidden',mode!=='customer');
  document.getElementById('cartFab').classList.toggle('hidden',mode!=='customer');
  document.getElementById('fxChatFab').classList.toggle('hidden',mode!=='customer');
  document.getElementById('fxChat').classList.remove('open');

  document.getElementById('msCustomer').classList.toggle('active', mode==='customer');
  document.getElementById('msAdmin').classList.toggle('active', mode==='admin');

  // close drawers
  ['cartDrawer','ordersDrawer','favDrawer'].forEach(id=>document.getElementById(id).classList.remove('open'));
  ['cartOverlay','ordersOverlay','favOverlay'].forEach(id=>document.getElementById(id).classList.remove('open'));

  if(mode==='admin'){ renderAdmin(); initFxSidebar(); }
  window.scrollTo(0,0);
  showToast(mode==='admin' ? 'Beralih ke Admin Panel' : 'Beralih ke Toko');
}
function toggleFxSidebar(){
  const sb=document.getElementById('fxSidebar');
  const ov=document.getElementById('fxSidebarOverlay');
  sb.classList.toggle('collapsed');
  if(window.innerWidth<1024){
    if(sb.classList.contains('collapsed')) ov.classList.remove('show');
    else ov.classList.add('show');
  }
}
function initFxSidebar(){
  const sb=document.getElementById('fxSidebar');
  if(window.innerWidth>=1024) sb.classList.remove('collapsed');
  else sb.classList.add('collapsed');
}
window.addEventListener('resize',initFxSidebar);

/* ==================== CUSTOMER ==================== */
function renderCategories(){
  document.getElementById('catNav').innerHTML=CATEGORIES.map(c=>`
    <button class="fx-cat ${state.category===c.id?'active':''}" onclick="setCategory('${c.id}')">
      <span class="fx-cat-icon">${c.icon}</span>
      <span>${c.name}</span>
    </button>
  `).join('');
}
function setCategory(id){
  state.category=id;
  renderCategories(); renderBestseller(); renderMenu();
  const cat=CATEGORIES.find(c=>c.id===id);
  const el=document.getElementById('sectionTitle');
  const sub=document.getElementById('sectionSub');
  if(el) el.textContent = id==='all' ? '🍜 Semua Menu' : cat.icon+' '+cat.name;
  if(sub) sub.textContent = id==='all' ? 'Pilih menu favoritmu' : 'Menu '+cat.name.toLowerCase();
}

function getFiltered(){
  let arr=[...PRODUCTS];
  if(state.category!=='all') arr=arr.filter(p=>p.cat===state.category);
  if(state.search){
    const q=state.search.toLowerCase();
    arr=arr.filter(p=>p.name.toLowerCase().includes(q)||p.brand.toLowerCase().includes(q)||p.spec.toLowerCase().includes(q));
  }
  return arr;
}
function isFav(id){ return state.favorites.includes(id); }

/* Kartu menu horizontal (list) */
function menuCard(p){
  const disc=p.old>0?Math.round((p.old-p.price)/p.old*100):0;
  const fav=isFav(p.id);
  return `
    <div class="fx-food-card" onclick="openPDP(${p.id})">
      <div class="fx-food-img" style="background:${p.bg}">
        ${p.isNew?`<span class="fx-food-badge">BARU</span>`:disc?`<span class="fx-food-badge">-${disc}%</span>`:''}
        <span>${p.emoji}</span>
      </div>
      <div class="fx-food-info">
        <div class="fx-food-cat">${p.brand}</div>
        <div class="fx-food-name">${p.name}</div>
        <div class="fx-food-desc">${p.spec}</div>
        <div class="fx-food-meta">
          <div class="fx-food-rating"><span class="star">★</span> ${p.rating}</div>
          <div>${p.sold} terjual</div>
          <div class="fx-food-price">${rupiah(p.price)}</div>
        </div>
      </div>
    </div>`;
}
function renderMenu(){
  const arr=getFiltered().slice(0,state.limit);
  const el=document.getElementById('menuList');
  if(!arr.length){
    el.innerHTML=`<div class="fx-empty"><div class="fx-empty-icon">🍽</div><div class="fx-empty-title">Tidak ada menu</div><div class="fx-empty-desc">Coba kategori lain</div></div>`;
    return;
  }
  el.innerHTML=arr.map(menuCard).join('');
}

/* Kartu mini (horizontal scroll) */
function miniCard(p){
  const disc=p.old>0?Math.round((p.old-p.price)/p.old*100):0;
  return `
    <div class="fx-mini-card" onclick="openPDP(${p.id})">
      <div class="fx-mini-img" style="background:${p.bg}">
        ${disc?`<span class="fx-mini-badge">-${disc}%</span>`:''}
        <span>${p.emoji}</span>
      </div>
      <div class="fx-mini-name">${p.name}</div>
      <div class="fx-mini-price">${rupiah(p.price)}</div>
      <div class="fx-mini-meta"><span class="star">★</span> ${p.rating} · ${p.sold} terjual</div>
    </div>`;
}
function renderBestseller(){
  const best=PRODUCTS.slice().sort((a,b)=>b.sold-a.sold).slice(0,6);
  document.getElementById('bestsellerScroll').innerHTML=best.map(miniCard).join('');
}

/* Restoran */
function renderRestaurants(){
  document.getElementById('restaurantList').innerHTML=RESTAURANTS.map(r=>`
    <div class="fx-rest-card" onclick="showToast('Membuka ${r.name}')">
      <div class="fx-rest-logo" style="background:${r.bg}">${r.emoji}</div>
      <div class="fx-rest-info">
        <div class="fx-rest-name">${r.name}</div>
        <div class="fx-rest-tags">${r.tags.map(t=>`<span class="fx-rest-tag">${t}</span>`).join('')}</div>
        <div class="fx-rest-meta">
          <span><span class="star">★</span> ${r.rating}</span>
          <span>⏱ ${r.eta} menit</span>
          <span>Min. ${rupiah(r.min)}</span>
        </div>
        ${r.promo?`<div style="font-size:11px;color:var(--orange);font-weight:700;margin-top:6px">🎁 ${r.promo}</div>`:''}
      </div>
    </div>
  `).join('');
}

/* Live order tracking */
function renderLiveOrder(){
  const active=ORDERS.find(o=>o.status==='preparing'||o.status==='delivering');
  const el=document.getElementById('liveOrderContainer');
  if(!active){ el.innerHTML=''; return; }
  const steps=['Diterima','Dimasak','Diantar','Tiba'];
  const stepMap={preparing:1,delivering:2,delivered:3};
  const currentStep=stepMap[active.status]||0;
  const progress=(currentStep+1)/steps.length*100;
  el.innerHTML=`
    <div class="fx-live-order" onclick="viewTracking('${active.id}')" style="cursor:pointer;margin:0 16px 16px">
      <div class="fx-live-icon">${active.status==='preparing'?'👨‍🍳':'🛵'}</div>
      <div class="fx-live-body">
        <div class="fx-live-title">${active.status==='preparing'?'Pesanan sedang dimasak':'Pesanan sedang diantar'}</div>
        <div class="fx-live-sub">${active.id} · ${active.eta||'-'}</div>
        <div class="fx-live-progress"><div class="fx-live-progress-fill" style="width:${progress}%"></div></div>
      </div>
      <span style="color:var(--yellow);font-size:20px">→</span>
    </div>`;
}

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
  document.getElementById('pdpModal').innerHTML=`
    <div class="fx-pdp-top">
      <div class="fx-pdp-top-title">Detail Menu</div>
      <button class="fx-drawer-close" onclick="closePDP()">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div class="fx-pdp-hero" style="background:${p.bg}">
      <span>${p.emoji}</span>
      ${p.isNew?`<span class="fx-pdp-hero-badge">Menu Baru</span>`:disc?`<span class="fx-pdp-hero-badge">Hemat ${disc}%</span>`:''}
    </div>
    <div class="fx-pdp-body">
      <div class="fx-pdp-cat">${p.brand}</div>
      <h1 class="fx-pdp-name">${p.name}</h1>
      <div class="fx-pdp-price">
        <span class="fx-pdp-price-now">${rupiah(p.price)}</span>
        ${p.old?`<span class="fx-pdp-price-old">${rupiah(p.old)}</span><span class="fx-pdp-disc">-${disc}%</span>`:''}
      </div>
      <div class="fx-pdp-meta">
        <div class="fx-pdp-meta-cell">
          <div class="fx-pdp-meta-label">Rating</div>
          <div class="fx-pdp-meta-value">★ ${p.rating}</div>
        </div>
        <div class="fx-pdp-meta-cell">
          <div class="fx-pdp-meta-label">Terjual</div>
          <div class="fx-pdp-meta-value">${p.sold}</div>
        </div>
        <div class="fx-pdp-meta-cell">
          <div class="fx-pdp-meta-label">Tersedia</div>
          <div class="fx-pdp-meta-value">${curStock}</div>
        </div>
      </div>
      <div class="fx-pdp-opt-label">Pilih Varian <span>${state.pdpVariant}</span></div>
      <div class="fx-pdp-opts">
        ${Object.keys(p.variants).map(v=>{
          const stock=p.variants[v];
          return `<button class="fx-opt-chip ${state.pdpVariant===v?'active':''} ${stock<=0?'disabled':''}" onclick="selectPDPVariant('${v}',${stock})">${v} · ${rupiah(p.price)}</button>`;
        }).join('')}
      </div>
      <div class="fx-pdp-opt-label">Deskripsi</div>
      <div class="fx-pdp-desc">${p.desc}</div>
      ${totalRev?`
        <div class="fx-pdp-opt-label">Ulasan (${totalRev})</div>
        ${p.reviews.map(rv=>`
          <div style="padding:14px 0;border-bottom:1px solid var(--line)">
            <div style="display:flex;align-items:center;gap:10px;margin-bottom:8px">
              <div style="width:36px;height:36px;background:var(--orange-soft);color:var(--orange-dark);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:12px">${rv.name.slice(0,2)}</div>
              <div style="flex:1">
                <div style="font-size:12px;font-weight:700">${rv.name}</div>
                <div style="font-size:10px;color:var(--ink-muted)">${rv.date}</div>
              </div>
            </div>
            <div style="color:var(--yellow);font-size:13px;letter-spacing:1px;margin-bottom:6px">${'★'.repeat(rv.rating)}${'☆'.repeat(5-rv.rating)}</div>
            <p style="font-size:12px;color:var(--ink-2);line-height:1.6">${rv.text}</p>
          </div>`).join('')}
      `:''}
    </div>
    <div class="fx-pdp-cta">
      <button class="fx-pdp-fav" onclick="toggleFav(${p.id});renderPDP()">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="${isFav(p.id)?'var(--berry)':'none'}" stroke="${isFav(p.id)?'var(--berry)':'var(--ink-2)'}" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
      </button>
      <button class="fx-btn-primary" onclick="addPDPToCart()" ${curStock<=0?'disabled':''}>
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
    body.innerHTML=`<div class="fx-empty"><div class="fx-empty-icon">🛒</div><div class="fx-empty-title">Keranjang kosong</div><div class="fx-empty-desc">Yuk pilih menu favoritmu</div></div>`;
    foot.style.display='none'; return;
  }
  foot.style.display='block';
  let sub=0;
  body.innerHTML=state.cart.map((it,i)=>{
    const p=PRODUCTS.find(x=>x.id===it.id); if(!p) return '';
    sub+=p.price*it.qty;
    return `<div class="fx-cart-item">
      <div class="fx-cart-img" style="background:${p.bg}">${p.emoji}</div>
      <div class="fx-cart-info">
        <div class="fx-cart-name">${p.name}</div>
        <div class="fx-cart-note">${it.variant}</div>
        <div class="fx-cart-price">${rupiah(p.price*it.qty)}</div>
      </div>
      <div class="fx-cart-actions">
        <button class="fx-cart-remove" onclick="removeCartItem(${i})">Hapus</button>
        <div class="fx-qty">
          <button onclick="updateCartQty(${i},-1)">−</button>
          <span>${it.qty}</span>
          <button onclick="updateCartQty(${i},1)">+</button>
        </div>
      </div>
    </div>`;
  }).join('');
  const ongkir=0;
  const service=2000;
  const total=sub+service;
  document.getElementById('subtotal').textContent=rupiah(sub);
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
  const orderId='FX-2026-'+Math.floor(1000+Math.random()*9000);
  const total=state.cart.reduce((s,i)=>s+PRODUCTS.find(p=>p.id===i.id).price*i.qty,0);
  const itemsList=state.cart.map(i=>{
    const p=PRODUCTS.find(x=>x.id===i.id);
    return {name:p.name,variant:i.variant,qty:i.qty};
  });
  ORDERS.unshift({id:orderId,customer:'Anda',total:total+2000,status:'preparing',time:'Baru saja',items:state.cart.length,payment:'GoPay',address:'Jakarta Selatan',items_list:itemsList,trackingStep:1,eta:'25 menit'});
  document.getElementById('orderIdDisplay').textContent=orderId;
  state.cart=[]; save(); renderCart(); toggleCart();
  renderLiveOrder();
  document.getElementById('checkoutModal').classList.add('open');
}
function closeCheckout(){ document.getElementById('checkoutModal').classList.remove('open'); }

/* ==================== FAVORITES ==================== */
function toggleFav(id){
  if(state.favorites.includes(id)) state.favorites=state.favorites.filter(x=>x!==id);
  else state.favorites.push(id);
  save(); renderMenu(); renderFav();
  if(document.getElementById('pdpModal').classList.contains('open')) renderPDP();
}
function toggleWishlist(){
  const d=document.getElementById('favDrawer'), o=document.getElementById('favOverlay');
  if(d.classList.contains('open')){d.classList.remove('open');o.classList.remove('open');}
  else{ renderFav(); d.classList.add('open'); o.classList.add('open'); }
}
function renderFav(){
  const body=document.getElementById('favBody');
  if(!state.favorites.length){
    body.innerHTML=`<div class="fx-empty"><div class="fx-empty-icon">❤</div><div class="fx-empty-title">Belum ada favorit</div><div class="fx-empty-desc">Tap hati di menu untuk simpan</div></div>`;
    return;
  }
  body.innerHTML=state.favorites.map(id=>{
    const p=PRODUCTS.find(x=>x.id===id); if(!p) return '';
    return `<div class="fx-cart-item">
      <div class="fx-cart-img" style="background:${p.bg}">${p.emoji}</div>
      <div class="fx-cart-info">
        <div class="fx-cart-name">${p.name}</div>
        <div class="fx-cart-price">${rupiah(p.price)}</div>
      </div>
      <div class="fx-cart-actions">
        <button class="fx-cart-remove" onclick="toggleFav(${p.id})">Hapus</button>
        <button class="fx-btn primary" onclick="openPDP(${p.id});toggleWishlist()">Lihat</button>
      </div>
    </div>`;
  }).join('');
}

/* ==================== ORDERS ==================== */
function toggleOrders(){
  const d=document.getElementById('ordersDrawer'), o=document.getElementById('ordersOverlay');
  if(d.classList.contains('open')){d.classList.remove('open');o.classList.remove('open');}
  else{ renderOrders(); d.classList.add('open'); o.classList.add('open'); }
}
function renderOrders(){
  const body=document.getElementById('ordersBody');
  body.innerHTML=ORDERS.slice(0,6).map(o=>{
    const map={preparing:['warning','Dimasak'],delivering:['info','Diantar'],delivered:['success','Tiba'],cancelled:['danger','Batal']};
    const [color,label]=map[o.status]||['neutral',o.status];
    return `<div class="fx-order">
      <div class="fx-order-head">
        <div>
          <div class="fx-order-id">${o.id}</div>
          <div class="fx-order-meta">${o.time} · ${o.payment}</div>
        </div>
        <span class="fx-badge ${color}"><span class="fx-badge-dot"></span>${label}</span>
      </div>
      <div class="fx-order-items">
        ${o.items_list.map(it=>`${it.name} · <b>${it.variant}</b> × ${it.qty}`).join('<br>')}
      </div>
      <div style="display:flex;justify-content:space-between;align-items:center">
        <div style="font-size:16px;font-weight:800">${rupiah(o.total)}</div>
        <button class="fx-btn primary" onclick="viewTracking('${o.id}')">Lacak</button>
      </div>
    </div>`;
  }).join('') || `<div class="fx-empty"><div class="fx-empty-icon">📋</div><div class="fx-empty-title">Belum ada pesanan</div></div>`;
}
function viewTracking(orderId){
  const o=ORDERS.find(x=>x.id===orderId); if(!o) return;
  const steps=['Pesanan diterima','Sedang dimasak','Diantar kurir','Tiba di lokasi'];
  const stepMap={preparing:1,delivering:2,delivered:3,cancelled:0};
  const currentStep=stepMap[o.status]||0;
  const modal=document.createElement('div');
  modal.className='fx-modal open';
  modal.innerHTML=`
    <div class="fx-modal-box">
      <div class="fx-modal-title">Lacak Pesanan</div>
      <div class="fx-modal-sub">${o.id} · ${o.payment}</div>
      ${steps.map((s,i)=>{
        const done=i<currentStep;
        const active=i===currentStep;
        return `<div style="display:flex;gap:14px;padding:14px 0;border-bottom:1px solid var(--line)">
          <div style="width:36px;height:36px;border-radius:50%;background:${done?'var(--matcha)':active?'var(--orange)':'var(--cream-2)'};color:${done||active?'#fff':'var(--ink-muted)'};display:flex;align-items:center;justify-content:center;font-weight:800;flex-shrink:0">${done?'✓':i+1}</div>
          <div style="flex:1">
            <div style="font-weight:${active?'800':'600'};font-size:13px">${s}</div>
            <div style="font-size:11px;color:var(--ink-muted);margin-top:3px">${done?'Selesai':active?'Sedang berlangsung':'Menunggu'}</div>
          </div>
        </div>`;
      }).join('')}
      ${o.courier?`<div class="fx-alert info" style="margin-top:14px">🛵 Kurir: <b>${o.courier}</b></div>`:''}
      <button class="fx-btn-primary" style="margin-top:16px" onclick="this.closest('.fx-modal').remove()">Tutup</button>
    </div>`;
  modal.onclick=e=>{if(e.target===modal) modal.remove();};
  document.body.appendChild(modal);
}

/* ==================== SEARCH ==================== */
function openSearch(){
  document.getElementById('fxSearchOverlay').classList.add('open');
  setTimeout(()=>document.getElementById('fxSearchInput').focus(),280);
}
function closeSearch(){
  document.getElementById('fxSearchOverlay').classList.remove('open');
  document.getElementById('fxSearchInput').value='';
  document.getElementById('searchResults').innerHTML='';
  state.search=''; renderMenu();
}
function handleSearch(q){
  state.search=q;
  const res=document.getElementById('searchResults');
  if(!q.trim()){ res.innerHTML=''; return; }
  const found=getFiltered().slice(0,8);
  if(!found.length){ res.innerHTML=`<div class="fx-empty"><div class="fx-empty-icon">🔍</div><div class="fx-empty-desc">Tidak ada hasil untuk "${q}"</div></div>`; return; }
  res.innerHTML=found.map(p=>`
    <div class="fx-search-result" onclick="openPDP(${p.id});closeSearch()">
      <div class="fx-cart-img" style="background:${p.bg}">${p.emoji}</div>
      <div style="flex:1">
        <div style="font-size:10px;font-weight:700;color:var(--ink-muted);text-transform:uppercase;letter-spacing:.06em">${p.brand}</div>
        <div style="font-size:14px;font-weight:700;margin-top:2px">${p.name}</div>
      </div>
      <div style="font-size:14px;font-weight:800">${rupiah(p.price)}</div>
    </div>`).join('');
}
function quickSearch(q){ document.getElementById('fxSearchInput').value=q; handleSearch(q); }

/* ==================== CHAT ==================== */
let chatHistory=[
  {from:'bot',text:'Halo! Selamat datang di FoodExpress 🍽 Ada yang bisa kami bantu?',time:'10:24'}
];
function toggleChat(){
  document.getElementById('fxChat').classList.toggle('open');
  document.getElementById('fxChatFab').classList.toggle('hidden');
  if(document.getElementById('fxChat').classList.contains('open')) renderChat();
}
function renderChat(){
  const body=document.getElementById('fxChatBody');
  body.innerHTML=chatHistory.map(m=>`
    <div class="fx-chat-msg ${m.from}">${m.text}<div class="fx-chat-time">${m.time}</div></div>`).join('');
  body.scrollTop=body.scrollHeight;
}
function sendChat(){
  const input=document.getElementById('fxChatInput');
  const text=input.value.trim(); if(!text) return;
  const time=new Date().toTimeString().slice(0,5);
  chatHistory.push({from:'user',text,time});
  input.value=''; renderChat();
  setTimeout(()=>{
    const r=['Baik, kami cek dulu ya.','Pesanan Anda sedang diproses, estimasi 25 menit ya.','Untuk promo hari ini bisa pakai kode EXPRESS50.','Ada lagi yang bisa dibantu?'];
    chatHistory.push({from:'bot',text:r[Math.floor(Math.random()*r.length)],time});
    renderChat();
  },900);
}

/* ==================== ADMIN ==================== */
function renderAdmin(){ renderAdminTabs(); renderAdminContent(); updateBadges(); }
function renderAdminTabs(){
  document.querySelectorAll('.fx-sb-item').forEach(t=>t.classList.toggle('active',t.dataset.tab===state.adminTab));
  const meta=PAGE_META[state.adminTab]||PAGE_META.dashboard;
  document.getElementById('fxPageTitle').textContent=meta.title;
  document.getElementById('fxPageSub').textContent=meta.sub;
  document.getElementById('fxBreadcrumb').innerHTML=`
    <span style="cursor:pointer" onclick="switchAdminTab('dashboard')">Dashboard</span>
    <span style="opacity:.5">/</span>
    <span class="active">${meta.title}</span>
  `;
}
function switchAdminTab(tab){
  state.adminTab=tab; renderAdminTabs(); renderAdminContent();
  if(window.innerWidth<1024){
    document.getElementById('fxSidebar').classList.add('collapsed');
    document.getElementById('fxSidebarOverlay').classList.remove('show');
  }
  window.scrollTo(0,0);
}
function renderAdminContent(){
  const c=document.getElementById('fxContent');
  switch(state.adminTab){
    case 'dashboard': c.innerHTML=adminDashboard(); break;
    case 'orders': c.innerHTML=adminOrders(); break;
    case 'live': c.innerHTML=adminLive(); break;
    case 'menu': c.innerHTML=adminMenu(); break;
    case 'stock': c.innerHTML=adminStock(); break;
    case 'categories': c.innerHTML=adminCategories(); break;
    case 'customers': c.innerHTML=adminCustomers(); break;
    case 'promos': c.innerHTML=adminPromos(); break;
    case 'staff': c.innerHTML=adminStaff(); break;
    case 'reports': c.innerHTML=adminReports(); break;
    case 'settings': c.innerHTML=adminSettings(); break;
  }
}
function statusBadge(s){
  const map={preparing:'warning',delivering:'info',delivered:'success',cancelled:'danger'};
  return map[s]||'neutral';
}
function statusLabel(s){ return {preparing:'Dimasak',delivering:'Diantar',delivered:'Tiba',cancelled:'Batal'}[s]||s; }

function adminDashboard(){
  const hours=['08','10','12','14','16','18','20','22'];
  const data=[12,34,58,92,74,128,156,84];
  const max=Math.max(...data);
  const topProducts=PRODUCTS.slice().sort((a,b)=>b.sold-a.sold).slice(0,5);
  const preparing=ORDERS.filter(o=>o.status==='preparing').length;
  const delivering=ORDERS.filter(o=>o.status==='delivering').length;

  return `
    <div class="fx-menu-grid">
      <button class="fx-menu-tile" onclick="switchAdminTab('orders')">
        <div class="fx-tile-icon">📋</div>
        <div class="fx-tile-title">Pesanan</div>
        <div class="fx-tile-sub">Kelola order</div>
        ${preparing?`<span class="fx-tile-badge">${preparing}</span>`:''}
      </button>
      <button class="fx-menu-tile" onclick="switchAdminTab('live')">
        <div class="fx-tile-icon">🛵</div>
        <div class="fx-tile-title">Live Order</div>
        <div class="fx-tile-sub">${delivering} diantar</div>
      </button>
      <button class="fx-menu-tile" onclick="switchAdminTab('menu')">
        <div class="fx-tile-icon">🍜</div>
        <div class="fx-tile-title">Menu</div>
        <div class="fx-tile-sub">${PRODUCTS.length} item</div>
      </button>
      <button class="fx-menu-tile" onclick="switchAdminTab('stock')">
        <div class="fx-tile-icon">📦</div>
        <div class="fx-tile-title">Stok Harian</div>
        <div class="fx-tile-sub">Update ketersediaan</div>
      </button>
      <button class="fx-menu-tile" onclick="switchAdminTab('customers')">
        <div class="fx-tile-icon">👥</div>
        <div class="fx-tile-title">Pelanggan</div>
        <div class="fx-tile-sub">${CUSTOMERS.length} user</div>
      </button>
      <button class="fx-menu-tile" onclick="switchAdminTab('promos')">
        <div class="fx-tile-icon">🎁</div>
        <div class="fx-tile-title">Promo</div>
        <div class="fx-tile-sub">${PROMOS.length} voucher</div>
      </button>
      <button class="fx-menu-tile" onclick="switchAdminTab('staff')">
        <div class="fx-tile-icon">👨‍🍳</div>
        <div class="fx-tile-title">Staff</div>
        <div class="fx-tile-sub">${STAFF.length} anggota</div>
      </button>
      <button class="fx-menu-tile" onclick="switchAdminTab('reports')">
        <div class="fx-tile-icon">📈</div>
        <div class="fx-tile-title">Laporan</div>
        <div class="fx-tile-sub">Analitik</div>
      </button>
    </div>

    <div class="fx-kpi-grid">
      <div class="fx-kpi">
        <div class="fx-kpi-icon">💰</div>
        <div class="fx-kpi-label">Penjualan Hari Ini</div>
        <div class="fx-kpi-value orange">${rupiah(2450000+Math.floor(Math.random()*500000))}</div>
        <div class="fx-kpi-trend up">↑ 18% vs kemarin</div>
      </div>
      <div class="fx-kpi">
        <div class="fx-kpi-icon">📋</div>
        <div class="fx-kpi-label">Pesanan Baru</div>
        <div class="fx-kpi-value">${preparing}</div>
        <div class="fx-kpi-trend up">↑ 12 hari ini</div>
      </div>
      <div class="fx-kpi">
        <div class="fx-kpi-icon">🍜</div>
        <div class="fx-kpi-label">Menu Aktif</div>
        <div class="fx-kpi-value">${PRODUCTS.length}</div>
        <div class="fx-kpi-trend up">Semua tersedia</div>
      </div>
      <div class="fx-kpi">
        <div class="fx-kpi-icon">⏱</div>
        <div class="fx-kpi-label">Avg Prep Time</div>
        <div class="fx-kpi-value">12 mnt</div>
        <div class="fx-kpi-trend down">↓ 2 menit</div>
      </div>
    </div>

    <div class="fx-panel">
      <div class="fx-panel-head">
        <div>
          <div class="fx-panel-title">Penjualan Per 2 Jam</div>
          <div class="fx-panel-sub">Realtime hari ini</div>
        </div>
        <span class="fx-badge success"><span class="fx-badge-dot"></span>Live</span>
      </div>
      <div class="fx-panel-body">
        <div class="fx-chart">
          ${data.map((v,i)=>`<div class="fx-chart-bar ${v===max?'active':''}" style="height:${v/max*100}%"><b>${v}rb</b><span>${hours[i]}</span></div>`).join('')}
        </div>
        <div style="margin-top:26px"></div>
      </div>
    </div>

    <div class="fx-panel">
      <div class="fx-panel-head">
        <div><div class="fx-panel-title">Pesanan Terbaru</div></div>
        <button class="fx-btn outline" onclick="switchAdminTab('orders')">Semua →</button>
      </div>
      <div class="fx-panel-body-flush">
        ${ORDERS.slice(0,5).map(o=>`
          <div class="fx-list-item" style="padding:16px 20px">
            <div class="fx-list-avatar">${o.customer.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="fx-list-info">
              <div class="fx-list-name">${o.customer}</div>
              <div class="fx-list-sub">${o.id} · ${o.time} · ${rupiah(o.total)}</div>
            </div>
            <span class="fx-badge ${statusBadge(o.status)}"><span class="fx-badge-dot"></span>${statusLabel(o.status)}</span>
          </div>`).join('')}
      </div>
    </div>

    <div class="fx-panel">
      <div class="fx-panel-head"><div><div class="fx-panel-title">Menu Terlaris</div></div></div>
      <div class="fx-panel-body-flush">
        ${topProducts.map((p,i)=>`
          <div class="fx-list-item" style="padding:14px 20px">
            <div class="fx-list-avatar" style="background:var(--yellow-soft);color:#8a5a20">${i+1}</div>
            <div class="fx-list-info">
              <div class="fx-list-name">${p.emoji} ${p.name}</div>
              <div class="fx-list-sub">${p.brand} · ${p.sold} terjual</div>
            </div>
            <div style="font-weight:800;color:var(--orange)">${rupiah(p.price)}</div>
          </div>`).join('')}
      </div>
    </div>
  `;
}

function adminOrders(){
  const list=state.orderFilter==='all'?ORDERS:ORDERS.filter(o=>o.status===state.orderFilter);
  return `
    <button class="fx-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="fx-filters">
      ${['all','preparing','delivering','delivered','cancelled'].map(f=>`
        <button class="fx-chip ${state.orderFilter===f?'active':''}" onclick="state.orderFilter='${f}';renderAdminContent()">${f==='all'?'Semua':statusLabel(f)}</button>`).join('')}
    </div>
    ${list.map(o=>`
      <div class="fx-order">
        <div class="fx-order-head">
          <div>
            <div class="fx-order-id">${o.id}</div>
            <div class="fx-order-meta">${o.time} · ${o.payment} · ${o.customer}</div>
          </div>
          <span class="fx-badge ${statusBadge(o.status)}"><span class="fx-badge-dot"></span>${statusLabel(o.status)}</span>
        </div>
        <div class="fx-order-items">${o.items_list.map(it=>`${it.name} · <b>${it.variant}</b> × ${it.qty}`).join('<br>')}</div>
        <div style="font-size:16px;font-weight:800">${rupiah(o.total)}</div>
        <div class="fx-order-actions">
          ${o.status==='preparing'?`<button class="fx-btn primary" onclick="updateOrder('${o.id}','delivering')">Kirim ke Kurir</button>`:''}
          ${o.status==='delivering'?`<button class="fx-btn mint" onclick="updateOrder('${o.id}','delivered')">Tandai Tiba</button>`:''}
          ${o.status!=='delivered'&&o.status!=='cancelled'?`<button class="fx-btn danger" onclick="updateOrder('${o.id}','cancelled')">Batalkan</button>`:''}
        </div>
      </div>`).join('') || '<div class="fx-empty"><div class="fx-empty-icon">📋</div><div class="fx-empty-title">Tidak ada pesanan</div></div>'}
  `;
}
function updateOrder(id,status){
  const o=ORDERS.find(x=>x.id===id); if(!o) return;
  o.status=status;
  renderAdminContent(); updateBadges();
  showToast(o.id+' → '+statusLabel(status));
}

function adminLive(){
  const active=ORDERS.filter(o=>o.status==='preparing'||o.status==='delivering');
  return `
    <button class="fx-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="fx-alert info">🛵 <b>${active.length} pesanan aktif</b> sedang diproses atau diantar</div>
    ${active.map(o=>`
      <div class="fx-order">
        <div class="fx-order-head">
          <div>
            <div class="fx-order-id">${o.id}</div>
            <div class="fx-order-meta">${o.time} · ETA ${o.eta||'-'}</div>
          </div>
          <span class="fx-badge ${statusBadge(o.status)}"><span class="fx-badge-dot"></span>${statusLabel(o.status)}</span>
        </div>
        <div class="fx-order-items">${o.items_list.map(it=>`${it.name} × ${it.qty}`).join('<br>')}</div>
        <div class="fx-live-progress" style="margin-top:12px">
          <div class="fx-live-progress-fill" style="width:${o.status==='preparing'?'50%':'80%'};background:var(--orange)"></div>
        </div>
        <div class="fx-order-actions">
          ${o.status==='preparing'?`<button class="fx-btn primary" onclick="updateOrder('${o.id}','delivering')">Kirim</button>`:''}
          ${o.status==='delivering'?`<button class="fx-btn mint" onclick="updateOrder('${o.id}','delivered')">Selesai</button>`:''}
        </div>
      </div>`).join('') || '<div class="fx-empty"><div class="fx-empty-icon">🛵</div><div class="fx-empty-title">Tidak ada pesanan aktif</div></div>'}
  `;
}

function adminMenu(){
  return `
    <button class="fx-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;gap:12px;flex-wrap:wrap">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:600">${PRODUCTS.length} menu</div>
      <button class="fx-btn primary" onclick="openProductModal(null)">+ Menu Baru</button>
    </div>
    <div class="fx-panel">
      <div class="fx-tbl-wrap">
        <table class="fx-tbl">
          <thead><tr><th>Menu</th><th>Restoran</th><th>Kategori</th><th>Harga</th><th>Stok</th><th>Terjual</th><th></th></tr></thead>
          <tbody>
            ${PRODUCTS.map(p=>`
              <tr>
                <td><div style="display:flex;align-items:center;gap:10px"><span style="font-size:22px">${p.emoji}</span><div style="font-weight:700;font-size:12px">${p.name.slice(0,26)}</div></div></td>
                <td style="font-weight:600;font-size:11px">${p.brand}</td>
                <td style="font-size:11px;color:var(--ink-muted);text-transform:capitalize">${p.cat}</td>
                <td style="font-weight:800">${rupiah(p.price)}</td>
                <td><span class="fx-badge ${p.stock<=30?'danger':p.stock<=80?'warning':'success'}">${p.stock}</span></td>
                <td style="font-weight:700">${p.sold}</td>
                <td style="white-space:nowrap">
                  <button class="fx-btn outline" onclick="openProductModal(${p.id})">Edit</button>
                  <button class="fx-btn danger" onclick="deleteProduct(${p.id})" style="margin-left:4px">Hapus</button>
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
  renderAdminContent(); renderMenu(); showToast('Menu dihapus');
}

function adminStock(){
  return `
    <button class="fx-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="fx-alert info">📦 Update stok harian setiap pagi sebelum buka</div>
    ${PRODUCTS.map(p=>`
      <div class="fx-panel">
        <div class="fx-panel-head">
          <div>
            <div class="fx-panel-title">${p.emoji} ${p.name}</div>
            <div class="fx-panel-sub">${p.brand} · ${Object.keys(p.variants).length} varian</div>
          </div>
          <span class="fx-badge ${p.stock<=30?'danger':'success'}">${p.stock<=30?'Restock':'Tersedia'}</span>
        </div>
        <div class="fx-panel-body-flush">
          ${Object.entries(p.variants).map(([k,v])=>`
            <div class="fx-variant-row">
              <span style="font-weight:700">${k}</span>
              <span style="font-size:10px;color:var(--ink-muted);font-weight:600">STOK</span>
              <input class="fx-variant-input" type="number" value="${v}" onchange="updateVariant(${p.id},'${k}',this.value)">
              <span class="fx-badge ${v<=5?'danger':v<=20?'warning':'success'}">${v<=5?'Kritis':v<=20?'Rendah':'OK'}</span>
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

function adminCategories(){
  return `
    <button class="fx-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:600">${CATEGORIES.length} kategori</div>
      <button class="fx-btn primary" onclick="showToast('Kategori baru')">+ Kategori</button>
    </div>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:12px">
      ${CATEGORIES.map(c=>{
        const count=PRODUCTS.filter(p=>p.cat===c.id).length;
        return `
          <div class="fx-panel" style="margin-bottom:0">
            <div class="fx-panel-body" style="text-align:center">
              <div style="font-size:36px;margin-bottom:8px">${c.icon}</div>
              <div style="font-size:14px;font-weight:800">${c.name}</div>
              <div style="font-size:11px;color:var(--ink-muted);margin-top:4px">${c.id==='all'?PRODUCTS.length:count} menu</div>
            </div>
          </div>`;
      }).join('')}
    </div>`;
}

function adminCustomers(){
  return `
    <button class="fx-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="fx-panel">
      <div class="fx-panel-head"><div><div class="fx-panel-title">Pelanggan</div><div class="fx-panel-sub">${CUSTOMERS.length} pelanggan</div></div></div>
      <div class="fx-panel-body-flush">
        ${CUSTOMERS.map(c=>`
          <div class="fx-list-item" style="padding:16px 20px">
            <div class="fx-list-avatar">${c.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="fx-list-info">
              <div class="fx-list-name">${c.name} <span class="fx-badge ${c.tier==='Platinum'?'info':c.tier==='Gold'?'warning':'neutral'}" style="margin-left:6px">${c.tier}</span></div>
              <div class="fx-list-sub">${c.email} · ${c.city} · ${c.orders} pesanan</div>
            </div>
            <div style="font-weight:800;color:var(--orange);font-size:13px">${rupiah(c.spent)}</div>
          </div>`).join('')}
      </div>
    </div>`;
}

function adminPromos(){
  return `
    <button class="fx-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:600">${PROMOS.length} promo</div>
      <button class="fx-btn primary" onclick="showToast('Form promo baru')">+ Promo</button>
    </div>
    ${PROMOS.map(p=>`
      <div class="fx-panel">
        <div class="fx-panel-head">
          <div>
            <div class="fx-panel-title" style="color:var(--orange)">${p.code}</div>
            <div class="fx-panel-sub">${p.value} (${p.type}) · Min. ${rupiah(p.min)}</div>
          </div>
          <span class="fx-badge ${p.status==='active'?'success':'neutral'}">${p.status}</span>
        </div>
        <div class="fx-panel-body">
          <div style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:6px">
            <span style="color:var(--ink-muted);font-weight:600">Kuota terpakai</span>
            <b>${p.used}/${p.quota}</b>
          </div>
          <div class="fx-progress"><div class="fx-progress-fill" style="width:${(p.used/p.quota*100)}%"></div></div>
        </div>
      </div>`).join('')}`;
}

function adminStaff(){
  return `
    <button class="fx-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:600">${STAFF.length} anggota</div>
      <button class="fx-btn primary" onclick="openStaffModal(null)">+ Tambah Staff</button>
    </div>
    <div class="fx-panel">
      <div class="fx-panel-body-flush">
        ${STAFF.map(s=>`
          <div class="fx-list-item" style="padding:16px 20px">
            <div class="fx-list-avatar">${s.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="fx-list-info">
              <div class="fx-list-name">${s.name}</div>
              <div class="fx-list-sub">${s.role} · ${s.email}</div>
            </div>
            <span class="fx-badge ${s.status==='active'?'success':'neutral'}">${s.status}</span>
            <button class="fx-btn outline" onclick="openStaffModal(${s.id})">Edit</button>
            <button class="fx-btn danger" onclick="deleteStaff(${s.id})">Hapus</button>
          </div>`).join('')}
      </div>
    </div>`;
}
function deleteStaff(id){
  const s=STAFF.find(x=>x.id===id);
  if(!confirm('Hapus "'+s.name+'"?')) return;
  STAFF=STAFF.filter(x=>x.id!==id);
  renderAdminContent(); showToast('Staff dihapus');
}

function adminReports(){
  return `
    <button class="fx-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="fx-kpi-grid" style="grid-template-columns:repeat(2,1fr)">
      <div class="fx-kpi"><div class="fx-kpi-icon">💰</div><div class="fx-kpi-label">Total GMV</div><div class="fx-kpi-value orange" style="font-size:20px">Rp84.5jt</div><div class="fx-kpi-trend up">↑ 22% MoM</div></div>
      <div class="fx-kpi"><div class="fx-kpi-icon">📋</div><div class="fx-kpi-label">Total Orders</div><div class="fx-kpi-value">2,341</div><div class="fx-kpi-trend up">↑ 18% MoM</div></div>
      <div class="fx-kpi"><div class="fx-kpi-icon">📊</div><div class="fx-kpi-label">AOV</div><div class="fx-kpi-value" style="font-size:18px">Rp36rb</div><div class="fx-kpi-trend up">↑ 8% MoM</div></div>
      <div class="fx-kpi"><div class="fx-kpi-icon">⭐</div><div class="fx-kpi-label">Rating</div><div class="fx-kpi-value">4.8</div><div class="fx-kpi-trend up">↑ 0.2</div></div>
    </div>
    <div class="fx-panel">
      <div class="fx-panel-head"><div><div class="fx-panel-title">Performa Menu</div></div></div>
      <div class="fx-panel-body">
        ${PRODUCTS.slice().sort((a,b)=>b.sold-a.sold).slice(0,5).map(p=>{
          const maxSold=PRODUCTS[0].sold;
          return `
            <div style="margin-bottom:14px">
              <div style="display:flex;justify-content:space-between;font-size:12px;font-weight:700;margin-bottom:6px">
                <span>${p.emoji} ${p.name.slice(0,24)}</span>
                <span style="color:var(--orange)">${p.sold} terjual</span>
              </div>
              <div class="fx-progress"><div class="fx-progress-fill" style="width:${(p.sold/maxSold*100)}%"></div></div>
            </div>`;
        }).join('')}
      </div>
    </div>
    <div class="fx-panel">
      <div class="fx-panel-head"><div class="fx-panel-title">Export Laporan</div></div>
      <div class="fx-panel-body">
        <button class="fx-btn-primary" onclick="showToast('CSV diunduh')">Download CSV</button>
        <button class="fx-btn-secondary" onclick="showToast('PDF dibuat')">Download PDF</button>
      </div>
    </div>`;
}

function adminSettings(){
  return `
    <button class="fx-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="fx-panel">
      <div class="fx-panel-head"><div><div class="fx-panel-title">Informasi Restoran</div></div></div>
      <div class="fx-panel-body">
        <div class="fx-form-group"><label class="fx-form-label">Nama Restoran</label><input class="fx-form-input" value="FoodExpress Central"></div>
        <div class="fx-form-group"><label class="fx-form-label">Alamat</label><input class="fx-form-input" value="Jl. Sudirman No. 45, Jakarta Selatan"></div>
        <div class="fx-form-row">
          <div class="fx-form-group"><label class="fx-form-label">Jam Buka</label><input class="fx-form-input" value="08:00"></div>
          <div class="fx-form-group"><label class="fx-form-label">Jam Tutup</label><input class="fx-form-input" value="22:00"></div>
        </div>
        <div class="fx-form-row">
          <div class="fx-form-group"><label class="fx-form-label">Min. Gratis Ongkir</label><input class="fx-form-input" value="50000" type="number"></div>
          <div class="fx-form-group"><label class="fx-form-label">Biaya Layanan</label><input class="fx-form-input" value="2000" type="number"></div>
        </div>
        <div class="fx-form-group"><label class="fx-form-label">Radius Pengiriman (km)</label><input class="fx-form-input" value="8" type="number"></div>
        <button class="fx-btn-primary" onclick="showToast('Pengaturan disimpan')">Simpan Pengaturan</button>
      </div>
    </div>
    <div class="fx-panel">
      <div class="fx-panel-head"><div class="fx-panel-title">Metode Pembayaran</div></div>
      <div class="fx-panel-body-flush">
        ${[
          {icon:'📱',name:'GoPay',sub:'E-Wallet',status:'active'},
          {icon:'📱',name:'OVO',sub:'E-Wallet',status:'active'},
          {icon:'📱',name:'Dana',sub:'E-Wallet',status:'active'},
          {icon:'💳',name:'Kartu Kredit',sub:'Visa, Mastercard',status:'active'},
          {icon:'💵',name:'COD',sub:'Bayar di tempat',status:'active'}
        ].map(m=>`
          <div class="fx-list-item" style="padding:14px 20px">
            <div class="fx-list-avatar" style="background:var(--yellow-soft);color:#8a5a20">${m.icon}</div>
            <div class="fx-list-info">
              <div class="fx-list-name">${m.name}</div>
              <div class="fx-list-sub">${m.sub}</div>
            </div>
            <span class="fx-badge success">Aktif</span>
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
    document.getElementById('productModalTitle').textContent='Edit Menu';
    document.getElementById('pmName').value=p.name;
    document.getElementById('pmBrand').value=p.brand;
    document.getElementById('pmPrice').value=p.price;
    document.getElementById('pmOld').value=p.old||'';
    document.getElementById('pmCat').value=p.cat;
    document.getElementById('pmSpec').value=p.spec||'';
    document.getElementById('pmVariants').value=Object.keys(p.variants).join(',');
  } else {
    state.editingProduct=null;
    document.getElementById('productModalTitle').textContent='Menu Baru';
    ['pmName','pmBrand','pmPrice','pmOld','pmSpec','pmVariants'].forEach(f=>document.getElementById(f).value='');
  }
  document.getElementById('productModal').classList.add('open');
}
function closeProductModal(){ document.getElementById('productModal').classList.remove('open'); }
function saveProduct(){
  const name=document.getElementById('pmName').value.trim();
  const brand=document.getElementById('pmBrand').value.trim()||'Restoran';
  const price=+document.getElementById('pmPrice').value;
  const old=+document.getElementById('pmOld').value||0;
  const cat=document.getElementById('pmCat').value;
  const spec=document.getElementById('pmSpec').value.trim()||'-';
  const variantNames=document.getElementById('pmVariants').value.split(',').map(s=>s.trim()).filter(Boolean);
  if(!name||!price||!variantNames.length){ showToast('Lengkapi data'); return; }
  const variants={};
  variantNames.forEach(v=>variants[v]=50);
  if(state.editingProduct){
    const p=PRODUCTS.find(x=>x.id===state.editingProduct);
    Object.assign(p,{name,brand,price,old,cat,spec,variants,stock:Object.values(variants).reduce((s,v)=>s+v,0)});
    showToast('Menu diperbarui');
  } else {
    const id=Math.max(...PRODUCTS.map(p=>p.id))+1;
    PRODUCTS.push({id,name,brand,cat,price,old,variants,emoji:'🍽',bg:'#fff4d9',rating:5.0,sold:0,stock:Object.values(variants).reduce((s,v)=>s+v,0),isNew:true,isSale:old>0,spec,desc:'Menu baru',reviews:[]});
    showToast('Menu ditambahkan');
  }
  closeProductModal(); renderAdminContent(); renderMenu(); renderBestseller();
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
  if(nav==='search'){ openSearch(); return; }
  document.querySelectorAll('.fx-nav-item').forEach(n=>n.classList.toggle('active',n.dataset.nav===nav));
  if(nav==='home') window.scrollTo({top:0,behavior:'smooth'});
}

/* INIT */
renderCategories();
renderRestaurants();
renderBestseller();
renderMenu();
renderLiveOrder();
updateBadges();
initFxSidebar();
</script>
@endverbatim
@include('demo.toko-online.partials.demo-bar')
</body>
</html>