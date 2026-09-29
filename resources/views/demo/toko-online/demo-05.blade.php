@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="theme-color" content="#ffffff">
<title>MediCare - Apotek Online</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;-webkit-tap-highlight-color:transparent}
:root{
  --white:#ffffff;--bg:#f7fafc;--bg-2:#eff5f9;
  --ink:#0d2538;--ink-2:#3f5765;--ink-muted:#7d92a1;
  --line:#e1e9ef;--line-strong:#c8d6e0;
  --teal:#0fa8a1;--teal-dark:#0a7d78;--teal-soft:#e0f5f4;
  --blue:#2b7fd4;--blue-soft:#e3effa;
  --mint:#4dbf8f;--mint-soft:#e4f6ee;
  --amber:#f0a028;--amber-soft:#fdf2dd;
  --red:#e04848;--red-soft:#fce4e4;
  --violet:#7e5bd9;--violet-soft:#ece4fb;
  --r-xs:6px;--r-sm:10px;--r:14px;--r-lg:20px;
  --shadow-xs:0 1px 2px rgba(13,37,56,.04);
  --shadow-sm:0 2px 8px rgba(13,37,56,.05);
  --shadow:0 6px 20px rgba(13,37,56,.08);
  --shadow-lg:0 16px 48px rgba(13,37,56,.12);
}
body{font-family:"Inter",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;background:var(--bg);color:var(--ink);font-size:14px;line-height:1.55;overflow-x:hidden;-webkit-font-smoothing:antialiased}
button{font-family:inherit;cursor:pointer;border:none;background:none;color:inherit}
input,select,textarea{font-family:inherit;font-size:14px;outline:none;color:inherit}
.hidden{display:none!important}
.mono{font-family:"SF Mono",Monaco,Consolas,monospace;font-weight:600}
.rx{font-family:Georgia,serif;font-style:italic;font-weight:700}

/* ===== FLOATING MODE SWITCH ===== */
.mc-mode{
  position:fixed;bottom:84px;left:50%;transform:translateX(-50%);
  z-index:250;display:flex;background:var(--white);
  border:1.5px solid var(--teal);border-radius:40px;padding:4px;
  box-shadow:0 8px 28px rgba(15,168,161,.25);
}
.mc-mode-btn{
  padding:9px 18px;border-radius:32px;font-size:11px;font-weight:800;
  letter-spacing:.02em;color:var(--ink-muted);
  display:flex;align-items:center;gap:6px;transition:.2s;white-space:nowrap;
}
.mc-mode-btn.active{background:var(--teal);color:#fff}

/* ===== HEADER ===== */
.mc-header{
  position:sticky;top:0;z-index:100;background:var(--white);
  border-bottom:1px solid var(--line);
}
.mc-band{
  background:var(--teal-soft);color:var(--teal-dark);
  padding:7px 16px;font-size:10px;font-weight:700;
  letter-spacing:.1em;text-transform:uppercase;text-align:center;
  display:flex;align-items:center;justify-content:center;gap:8px;
}
.mc-band::before{content:"✓";font-weight:900;font-size:12px}
.mc-head{display:flex;align-items:center;gap:12px;padding:14px 16px 12px}
.mc-brand{display:flex;align-items:center;gap:10px}
.mc-brand-logo{
  width:38px;height:38px;border-radius:12px;
  background:linear-gradient(135deg,var(--teal) 0%,var(--blue) 100%);
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-size:18px;box-shadow:0 4px 12px rgba(15,168,161,.25);
}
.mc-brand-name{font-size:17px;font-weight:800;letter-spacing:-.02em;color:var(--ink);line-height:1}
.mc-brand-sub{font-size:10px;color:var(--ink-muted);font-weight:600;letter-spacing:.08em;text-transform:uppercase;margin-top:3px}
.mc-head-right{margin-left:auto;display:flex;gap:6px;align-items:center}
.mc-admin-entry{
  display:flex;align-items:center;gap:5px;padding:7px 12px;
  background:var(--teal-soft);border:1px solid var(--teal);border-radius:20px;
  color:var(--teal-dark);font-size:11px;font-weight:800;
}
.mc-admin-entry:hover{background:var(--teal);color:#fff}
.mc-icon{
  width:38px;height:38px;border-radius:10px;background:var(--bg-2);
  display:flex;align-items:center;justify-content:center;
  color:var(--ink-2);position:relative;transition:.15s;
}
.mc-icon:hover{background:var(--teal-soft);color:var(--teal)}
.mc-badge{
  position:absolute;top:-2px;right:-2px;background:var(--red);color:#fff;
  font-size:9px;font-weight:800;min-width:16px;height:16px;border-radius:8px;
  display:flex;align-items:center;justify-content:center;padding:0 4px;
  border:2px solid var(--white);
}
.mc-search{
  display:flex;align-items:center;gap:10px;background:var(--bg);
  border-radius:12px;padding:12px 16px;margin:0 16px 12px;
  color:var(--ink-muted);font-size:13px;cursor:pointer;
  border:1px solid transparent;transition:.15s;
}
.mc-search:hover{border-color:var(--teal);background:var(--white)}
.mc-search .ic{color:var(--teal)}

/* ===== KATEGORI ===== */
.mc-cats{
  display:flex;gap:6px;padding:0 16px 14px;overflow-x:auto;
  scrollbar-width:none;
}
.mc-cats::-webkit-scrollbar{display:none}
.mc-cat{
  flex-shrink:0;padding:8px 14px;background:var(--white);
  border:1px solid var(--line);border-radius:20px;
  font-size:12px;font-weight:600;color:var(--ink-2);
  white-space:nowrap;transition:.15s;
}
.mc-cat:hover{border-color:var(--teal);color:var(--teal)}
.mc-cat.active{background:var(--teal);color:#fff;border-color:var(--teal)}

/* ===== ALPHABET INDEX BAR ===== */
.mc-alphabet{
  position:sticky;top:0;z-index:90;background:var(--white);
  border-bottom:1px solid var(--line);
  padding:8px 12px;display:flex;gap:2px;overflow-x:auto;
  scrollbar-width:none;box-shadow:var(--shadow-xs);
}
.mc-alphabet::-webkit-scrollbar{display:none}
.mc-alph{
  flex-shrink:0;min-width:26px;height:26px;padding:0 6px;
  border-radius:6px;font-size:11px;font-weight:700;
  color:var(--ink-muted);background:transparent;
  display:flex;align-items:center;justify-content:center;
  transition:.1s;font-family:"SF Mono",monospace;
}
.mc-alph:hover{background:var(--teal-soft);color:var(--teal)}
.mc-alph.active{background:var(--teal);color:#fff}

/* ===== RX CARD (Resep) ===== */
.mc-rx-hero{
  margin:16px;padding:20px;background:var(--white);
  border:2px dashed var(--teal);border-radius:var(--r-lg);
  display:flex;gap:16px;align-items:center;cursor:pointer;
  transition:.2s;position:relative;overflow:hidden;
}
.mc-rx-hero:hover{background:var(--teal-soft);border-style:solid;transform:translateY(-2px);box-shadow:var(--shadow)}
.mc-rx-hero::after{
  content:"℞";position:absolute;top:-30px;right:-10px;
  font-family:Georgia,serif;font-size:120px;font-weight:900;
  color:var(--teal);opacity:.08;font-style:italic;
}
.mc-rx-icon{
  width:60px;height:60px;border-radius:16px;background:var(--teal);
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-family:Georgia,serif;font-style:italic;font-weight:900;
  font-size:32px;flex-shrink:0;box-shadow:0 6px 16px rgba(15,168,161,.3);
}
.mc-rx-body{flex:1;position:relative;z-index:1}
.mc-rx-title{font-size:16px;font-weight:800;color:var(--ink);margin-bottom:4px;letter-spacing:-.01em}
.mc-rx-sub{font-size:12px;color:var(--ink-2);margin-bottom:8px;font-weight:500}
.mc-rx-cta{
  display:inline-flex;align-items:center;gap:6px;
  font-size:12px;font-weight:800;color:var(--teal-dark);
  border-bottom:2px solid var(--teal);padding-bottom:2px;
}

/* ===== QUICK SERVICES ===== */
.mc-quick{
  display:grid;grid-template-columns:repeat(4,1fr);gap:8px;
  padding:0 16px 18px;
}
.mc-quick-item{
  background:var(--white);border-radius:var(--r);
  padding:14px 6px;text-align:center;cursor:pointer;
  border:1px solid var(--line);transition:.15s;
}
.mc-quick-item:hover{border-color:var(--teal);transform:translateY(-2px);box-shadow:var(--shadow-sm)}
.mc-quick-icon{
  font-size:22px;margin-bottom:6px;display:block;
}
.mc-quick-label{font-size:10px;font-weight:700;color:var(--ink-2);line-height:1.3}

/* ===== SECTION ===== */
.mc-section{padding:0 0 20px}
.mc-section-head{
  display:flex;align-items:center;justify-content:space-between;
  padding:0 18px 12px;
}
.mc-section-title{font-size:16px;font-weight:800;letter-spacing:-.01em;color:var(--ink)}
.mc-section-sub{font-size:11px;color:var(--ink-muted);font-weight:600;margin-top:2px}
.mc-section-link{font-size:12px;font-weight:700;color:var(--teal-dark)}

/* ===== PRODUCT CARD ===== */
.mc-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;padding:0 16px}
@media(min-width:640px){.mc-grid{grid-template-columns:repeat(3,1fr)}}
@media(min-width:900px){.mc-grid{grid-template-columns:repeat(4,1fr)}}
.mc-card{
  background:var(--white);border-radius:var(--r);overflow:hidden;
  border:1px solid var(--line);cursor:pointer;transition:.2s;
  display:flex;flex-direction:column;
}
.mc-card:hover{border-color:var(--teal);transform:translateY(-3px);box-shadow:var(--shadow)}
.mc-card-img{
  aspect-ratio:1;background:var(--bg-2);
  display:flex;align-items:center;justify-content:center;
  font-size:60px;position:relative;border-bottom:1px solid var(--line);
}
.mc-card-tag{
  position:absolute;top:8px;left:8px;
  background:var(--teal);color:#fff;font-size:9px;font-weight:800;
  padding:4px 8px;border-radius:8px;letter-spacing:.04em;
}
.mc-card-tag.rx{background:var(--violet)}
.mc-card-tag.promo{background:var(--red)}
.mc-card-tag.new{background:var(--mint)}
.mc-card-bpom{
  position:absolute;bottom:8px;left:8px;right:8px;
  background:rgba(15,168,161,.95);color:#fff;
  font-family:"SF Mono",monospace;font-size:9px;font-weight:800;
  padding:3px 6px;border-radius:6px;
  text-align:center;letter-spacing:.05em;
}
.mc-card-body{padding:12px;display:flex;flex-direction:column;gap:6px;flex:1}
.mc-card-brand{font-size:9px;font-weight:800;color:var(--teal);letter-spacing:.1em;text-transform:uppercase}
.mc-card-name{
  font-size:13px;font-weight:700;line-height:1.3;color:var(--ink);
  display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;
  min-height:34px;
}
.mc-card-indication{
  font-size:10px;color:var(--ink-muted);font-weight:500;line-height:1.4;
  display:-webkit-box;-webkit-line-clamp:1;-webkit-box-orient:vertical;overflow:hidden;
}
.mc-card-footer{margin-top:auto;padding-top:6px;display:flex;align-items:flex-end;justify-content:space-between;gap:6px;border-top:1px solid var(--line)}
.mc-card-price-block{display:flex;flex-direction:column;gap:2px}
.mc-card-price{font-size:14px;font-weight:800;color:var(--ink);letter-spacing:-.01em}
.mc-card-old{font-size:10px;color:var(--ink-muted);text-decoration:line-through}
.mc-card-stock{
  font-size:10px;font-weight:700;padding:3px 6px;border-radius:6px;
  background:var(--mint-soft);color:var(--mint);
}
.mc-card-stock.low{background:var(--amber-soft);color:var(--amber)}
.mc-card-stock.out{background:var(--red-soft);color:var(--red)}

/* ===== PROMO STRIP ===== */
.mc-promo-row{
  display:flex;gap:12px;overflow-x:auto;padding:0 16px 4px;
  scrollbar-width:none;
}
.mc-promo-row::-webkit-scrollbar{display:none}
.mc-promo-card{
  flex-shrink:0;width:260px;padding:16px;border-radius:var(--r);
  background:var(--white);border:1px solid var(--line);
  display:flex;align-items:center;gap:14px;cursor:pointer;transition:.2s;
}
.mc-promo-card:hover{border-color:var(--teal);transform:translateY(-2px);box-shadow:var(--shadow-sm)}
.mc-promo-icon{
  width:52px;height:52px;border-radius:14px;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;font-size:24px;
}
.mc-promo-icon.teal{background:var(--teal-soft);color:var(--teal)}
.mc-promo-icon.blue{background:var(--blue-soft);color:var(--blue)}
.mc-promo-icon.violet{background:var(--violet-soft);color:var(--violet)}
.mc-promo-icon.amber{background:var(--amber-soft);color:var(--amber)}
.mc-promo-body{flex:1;min-width:0}
.mc-promo-title{font-size:13px;font-weight:800;color:var(--ink);margin-bottom:3px}
.mc-promo-sub{font-size:11px;color:var(--ink-muted);font-weight:500}

/* ===== BOTTOM NAV ===== */
.mc-nav{
  position:fixed;bottom:0;left:0;right:0;background:var(--white);
  border-top:1px solid var(--line);z-index:200;
  display:flex;padding:8px 0 10px;
  box-shadow:0 -4px 16px rgba(13,37,56,.05);
}
.mc-nav-item{
  flex:1;display:flex;flex-direction:column;align-items:center;gap:3px;
  color:var(--ink-muted);font-size:10px;font-weight:700;
  padding:4px 0;position:relative;letter-spacing:.01em;
}
.mc-nav-item.active{color:var(--teal)}
.mc-nav-icon{font-size:20px;line-height:1}
.mc-nav-badge{
  position:absolute;top:-2px;right:calc(50% - 22px);
  background:var(--red);color:#fff;font-size:9px;font-weight:800;
  min-width:16px;height:16px;border-radius:8px;
  display:flex;align-items:center;justify-content:center;padding:0 4px;
  border:2px solid var(--white);
}

/* ===== DRAWER ===== */
.mc-overlay{
  position:fixed;inset:0;background:rgba(13,37,56,.4);z-index:300;
  opacity:0;visibility:hidden;transition:.25s;backdrop-filter:blur(4px);
}
.mc-overlay.open{opacity:1;visibility:visible}
.mc-drawer{
  position:fixed;bottom:0;left:0;right:0;background:var(--white);
  z-index:301;border-radius:20px 20px 0 0;max-height:92vh;
  display:flex;flex-direction:column;
  transform:translateY(100%);transition:.32s cubic-bezier(.4,0,.2,1);
}
.mc-drawer.open{transform:translateY(0)}
.mc-drawer-handle{width:38px;height:4px;background:var(--line-strong);border-radius:2px;margin:10px auto 4px}
.mc-drawer-head{
  padding:8px 20px 14px;display:flex;align-items:center;justify-content:space-between;
  border-bottom:1px solid var(--line);
}
.mc-drawer-title{font-size:16px;font-weight:800;letter-spacing:-.01em}
.mc-drawer-title small{display:block;font-size:11px;font-weight:500;color:var(--ink-muted);margin-top:3px}
.mc-drawer-close{
  width:34px;height:34px;border-radius:50%;background:var(--bg-2);
  display:flex;align-items:center;justify-content:center;color:var(--ink-2);
}
.mc-drawer-body{flex:1;overflow-y:auto;padding:16px 20px}
.mc-drawer-foot{padding:14px 20px 22px;border-top:1px solid var(--line);background:var(--white)}

/* ===== CART ===== */
.mc-cart-item{display:flex;gap:12px;padding:14px 0;border-bottom:1px solid var(--line)}
.mc-cart-item:last-child{border-bottom:none}
.mc-cart-img{
  width:66px;height:66px;border-radius:var(--r-sm);flex-shrink:0;
  display:flex;align-items:center;justify-content:center;font-size:32px;
  background:var(--bg-2);
}
.mc-cart-info{flex:1;min-width:0;display:flex;flex-direction:column;gap:3px}
.mc-cart-name{font-size:13px;font-weight:700;line-height:1.3}
.mc-cart-meta{font-size:11px;color:var(--ink-muted);font-weight:500}
.mc-cart-price{font-size:14px;font-weight:800;color:var(--ink);margin-top:3px}
.mc-cart-actions{display:flex;flex-direction:column;align-items:flex-end;justify-content:space-between}
.mc-cart-remove{font-size:11px;color:var(--red);font-weight:600}
.mc-qty{display:flex;align-items:center;background:var(--bg-2);border-radius:20px;padding:2px}
.mc-qty button{width:26px;height:26px;font-size:14px;font-weight:800;color:var(--teal)}
.mc-qty span{min-width:26px;text-align:center;font-size:13px;font-weight:800}
.mc-sum-row{display:flex;justify-content:space-between;font-size:12px;margin-bottom:8px;color:var(--ink-2);font-weight:500}
.mc-sum-row.total{
  font-size:18px;font-weight:800;color:var(--ink);
  padding-top:12px;border-top:1px dashed var(--line-strong);margin-top:10px;
}
.mc-btn-primary{
  width:100%;background:var(--teal);color:#fff;border-radius:12px;
  padding:14px;font-size:14px;font-weight:800;transition:.2s;margin-top:12px;
}
.mc-btn-primary:hover{background:var(--teal-dark)}
.mc-btn-secondary{
  width:100%;background:var(--white);color:var(--ink);border:1.5px solid var(--line-strong);
  border-radius:12px;padding:13px;font-size:13px;font-weight:700;margin-top:8px;
}

/* ===== PDP ===== */
.mc-pdp{
  position:fixed;inset:0;background:var(--bg);z-index:500;
  transform:translateY(100%);transition:.32s cubic-bezier(.4,0,.2,1);
  overflow-y:auto;display:none;
}
.mc-pdp.open{transform:translateY(0);display:block}
.mc-pdp-top{
  position:sticky;top:0;background:var(--white);
  padding:12px 16px;display:flex;align-items:center;justify-content:space-between;
  border-bottom:1px solid var(--line);z-index:10;
}
.mc-pdp-top-title{font-size:11px;font-weight:700;color:var(--ink-muted);letter-spacing:.08em;text-transform:uppercase}
.mc-pdp-hero{
  aspect-ratio:1;background:var(--white);
  display:flex;align-items:center;justify-content:center;
  font-size:160px;position:relative;border-bottom:1px solid var(--line);
}
.mc-pdp-bpom{
  position:absolute;top:16px;right:16px;
  background:var(--teal);color:#fff;
  font-family:"SF Mono",monospace;font-size:11px;font-weight:800;
  padding:6px 12px;border-radius:8px;letter-spacing:.06em;
}
.mc-pdp-body{padding:22px 20px 0}
.mc-pdp-cat{font-size:11px;font-weight:800;color:var(--teal);letter-spacing:.1em;text-transform:uppercase;margin-bottom:6px}
.mc-pdp-name{font-size:22px;font-weight:800;letter-spacing:-.02em;line-height:1.2;margin-bottom:6px}
.mc-pdp-generic{font-size:12px;color:var(--ink-muted);font-weight:500;margin-bottom:14px;font-style:italic}
.mc-pdp-price{display:flex;align-items:baseline;gap:10px;flex-wrap:wrap;margin-bottom:16px}
.mc-pdp-price-now{font-size:26px;font-weight:800;color:var(--ink);letter-spacing:-.01em}
.mc-pdp-price-old{font-size:14px;color:var(--ink-muted);text-decoration:line-through}
.mc-pdp-disc{background:var(--red-soft);color:var(--red);padding:5px 10px;border-radius:10px;font-size:12px;font-weight:800}

/* Medical info block */
.mc-info-block{
  background:var(--white);border-radius:var(--r);padding:16px;
  border:1px solid var(--line);margin-bottom:16px;
}
.mc-info-title{
  display:flex;align-items:center;gap:8px;
  font-size:12px;font-weight:800;color:var(--ink-2);
  letter-spacing:.06em;text-transform:uppercase;
  margin-bottom:12px;padding-bottom:10px;border-bottom:1px solid var(--line);
}
.mc-info-icon{
  width:24px;height:24px;border-radius:8px;background:var(--teal-soft);
  color:var(--teal);display:flex;align-items:center;justify-content:center;
  font-size:13px;font-weight:900;
}
.mc-info-text{font-size:13px;line-height:1.7;color:var(--ink-2)}
.mc-info-list{list-style:none;font-size:13px;line-height:1.9;color:var(--ink-2)}
.mc-info-list li{padding-left:16px;position:relative}
.mc-info-list li::before{
  content:"";position:absolute;left:0;top:11px;
  width:6px;height:6px;border-radius:50%;background:var(--teal);
}

/* Dosage row */
.mc-dosage-row{
  display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-bottom:16px;
}
.mc-dosage-cell{
  background:var(--teal-soft);border-radius:var(--r);padding:14px;
  border:1px solid var(--teal);
}
.mc-dosage-label{font-size:10px;font-weight:800;color:var(--teal-dark);letter-spacing:.08em;text-transform:uppercase;margin-bottom:6px}
.mc-dosage-value{font-size:13px;font-weight:700;color:var(--ink)}

.mc-pdp-opt-label{
  display:flex;justify-content:space-between;align-items:baseline;
  font-size:12px;font-weight:800;color:var(--ink-2);
  letter-spacing:.04em;margin-bottom:10px;
}
.mc-pdp-opt-label span{color:var(--ink-muted);font-weight:500;font-size:12px}
.mc-pdp-opts{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:16px}
.mc-opt-chip{
  padding:10px 16px;border:1.5px solid var(--line-strong);background:var(--white);
  border-radius:10px;font-size:13px;font-weight:700;color:var(--ink);transition:.15s;
}
.mc-opt-chip.active{background:var(--teal);color:#fff;border-color:var(--teal)}
.mc-opt-chip.disabled{opacity:.35;text-decoration:line-through;cursor:not-allowed}

.mc-warning{
  display:flex;gap:10px;padding:12px 14px;background:var(--amber-soft);
  border-radius:var(--r);border-left:3px solid var(--amber);
  font-size:12px;color:#7a5312;font-weight:500;line-height:1.6;
  margin-bottom:16px;
}
.mc-pdp-cta{
  position:sticky;bottom:0;background:var(--white);border-top:1px solid var(--line);
  padding:14px 20px;display:flex;gap:10px;
  box-shadow:0 -4px 16px rgba(13,37,56,.06);
}
.mc-pdp-cta .mc-btn-primary{margin:0;flex:1}
.mc-pdp-fav{
  width:52px;height:52px;border:1.5px solid var(--line-strong);
  border-radius:12px;display:flex;align-items:center;justify-content:center;
  background:var(--white);
}

/* ===== ADMIN - SLIM SIDEBAR ===== */
.mc-admin{display:flex;min-height:100vh;background:var(--bg)}
.mc-sidebar{
  width:72px;background:var(--white);border-right:1px solid var(--line);
  position:fixed;top:0;left:0;bottom:0;z-index:100;
  display:flex;flex-direction:column;transition:width .28s ease;
  overflow:hidden;
}
.mc-sidebar.expanded{width:240px}
.mc-sidebar-brand{
  padding:18px 0;display:flex;align-items:center;
  border-bottom:1px solid var(--line);flex-shrink:0;justify-content:center;
}
.mc-sidebar.expanded .mc-sidebar-brand{justify-content:flex-start;padding-left:20px;gap:12px}
.mc-sidebar-logo{
  width:36px;height:36px;border-radius:10px;
  background:linear-gradient(135deg,var(--teal),var(--blue));
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-size:16px;font-weight:800;flex-shrink:0;
}
.mc-sidebar-brand-text{display:none}
.mc-sidebar.expanded .mc-sidebar-brand-text{display:block}
.mc-sidebar-brand-name{font-size:15px;font-weight:800;letter-spacing:-.02em;line-height:1}
.mc-sidebar-brand-sub{font-size:9px;font-weight:700;color:var(--teal);letter-spacing:.14em;text-transform:uppercase;margin-top:3px}

.mc-sidebar-nav{flex:1;overflow-y:auto;padding:10px 0;overflow-x:hidden}
.mc-sb-item{
  display:flex;align-items:center;gap:14px;
  width:100%;padding:12px 0;justify-content:center;
  font-size:12px;font-weight:600;color:var(--ink-2);
  transition:.15s;position:relative;flex-shrink:0;cursor:pointer;
}
.mc-sb-item:hover{background:var(--teal-soft);color:var(--teal)}
.mc-sb-item.active{background:var(--teal-soft);color:var(--teal)}
.mc-sb-item.active::before{
  content:"";position:absolute;left:0;top:8px;bottom:8px;
  width:3px;background:var(--teal);border-radius:0 3px 3px 0;
}
.mc-sidebar.expanded .mc-sb-item{justify-content:flex-start;padding:12px 20px}
.mc-sb-icon{
  font-size:20px;line-height:1;width:24px;text-align:center;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
}
.mc-sb-label{display:none;white-space:nowrap;flex:1;text-align:left}
.mc-sidebar.expanded .mc-sb-label{display:block}
.mc-sb-badge{
  position:absolute;top:6px;right:22px;
  background:var(--red);color:#fff;font-size:9px;font-weight:800;
  min-width:18px;height:18px;border-radius:9px;
  display:flex;align-items:center;justify-content:center;padding:0 5px;
  border:2px solid var(--white);
}
.mc-sidebar.expanded .mc-sb-badge{
  position:static;margin-left:auto;border:none;
}
.mc-sidebar-footer{
  padding:14px 0;border-top:1px solid var(--line);
  display:flex;justify-content:center;flex-shrink:0;
}
.mc-sidebar.expanded .mc-sidebar-footer{padding:14px 16px}
.mc-sidebar-switch{
  width:44px;height:44px;border-radius:10px;background:var(--teal);
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-size:16px;transition:.2s;
}
.mc-sidebar.expanded .mc-sidebar-switch{
  width:100%;gap:10px;padding:12px;font-size:12px;font-weight:800;
}
.mc-sidebar-switch:hover{background:var(--teal-dark)}
.mc-sidebar-switch-text{display:none}
.mc-sidebar.expanded .mc-sidebar-switch-text{display:block}
.mc-sidebar-toggle{
  position:absolute;top:50%;right:-14px;transform:translateY(-50%);
  width:28px;height:28px;border-radius:50%;
  background:var(--white);border:1px solid var(--line);
  display:flex;align-items:center;justify-content:center;
  color:var(--ink-2);font-size:11px;font-weight:800;
  box-shadow:var(--shadow-sm);z-index:101;cursor:pointer;
  transition:.15s;
}
.mc-sidebar-toggle:hover{background:var(--teal);color:#fff;border-color:var(--teal)}
@media(max-width:1023px){.mc-sidebar-toggle{display:none}}

.mc-main{flex:1;margin-left:72px;min-width:0;transition:margin-left .28s ease}
.mc-main.expanded{margin-left:240px}
@media(max-width:1023px){
  .mc-sidebar{transform:translateX(-100%);width:240px}
  .mc-sidebar.mobile-open{transform:translateX(0)}
  .mc-sidebar .mc-sidebar-brand-text,
  .mc-sidebar .mc-sb-label,
  .mc-sidebar .mc-sidebar-switch-text{display:block}
  .mc-sidebar .mc-sb-item{justify-content:flex-start;padding:12px 20px}
  .mc-sidebar .mc-sidebar-brand{justify-content:flex-start;padding-left:20px;gap:12px}
  .mc-sidebar .mc-sidebar-switch{width:100%;gap:10px;padding:12px;font-size:12px;font-weight:800}
  .mc-sidebar .mc-sb-badge{position:static;margin-left:auto;border:none}
  .mc-main{margin-left:0}
}
.mc-topbar{
  position:sticky;top:0;background:rgba(255,255,255,.95);backdrop-filter:blur(12px);
  border-bottom:1px solid var(--line);padding:12px 24px;z-index:50;
  display:flex;align-items:center;gap:14px;
}
.mc-menu-btn{
  width:38px;height:38px;border-radius:10px;background:var(--bg-2);
  display:none;align-items:center;justify-content:center;color:var(--ink-2);
}
@media(max-width:1023px){.mc-menu-btn{display:flex}}
.mc-page-title{font-size:18px;font-weight:800;letter-spacing:-.02em}
.mc-page-sub{font-size:11px;color:var(--ink-muted);font-weight:600;margin-top:2px}
.mc-top-right{margin-left:auto;display:flex;gap:8px;align-items:center}
.mc-switch-customer{
  display:flex;align-items:center;gap:8px;padding:9px 16px;
  background:var(--teal);color:#fff;border-radius:10px;
  font-size:12px;font-weight:800;white-space:nowrap;
}
.mc-switch-customer:hover{background:var(--teal-dark)}
.mc-icon-btn{
  width:38px;height:38px;border-radius:10px;background:var(--bg-2);
  display:flex;align-items:center;justify-content:center;color:var(--ink-2);
  position:relative;
}
.mc-content{padding:24px}
@media(max-width:639px){.mc-content{padding:16px}}

/* KPIs */
.mc-kpi-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-bottom:20px}
@media(min-width:640px){.mc-kpi-grid{grid-template-columns:repeat(4,1fr)}}
.mc-kpi{
  background:var(--white);border-radius:var(--r);padding:18px;
  border:1px solid var(--line);position:relative;overflow:hidden;
}
.mc-kpi::before{
  content:"";position:absolute;top:0;right:0;width:80px;height:80px;
  border-radius:50%;transform:translate(30%,-30%);opacity:.5;
}
.mc-kpi.teal::before{background:var(--teal-soft)}
.mc-kpi.blue::before{background:var(--blue-soft)}
.mc-kpi.violet::before{background:var(--violet-soft)}
.mc-kpi.mint::before{background:var(--mint-soft)}
.mc-kpi-icon{font-size:22px;margin-bottom:8px;position:relative;z-index:1}
.mc-kpi-label{
  font-size:10px;font-weight:800;color:var(--ink-muted);
  letter-spacing:.08em;text-transform:uppercase;margin-bottom:8px;
  position:relative;z-index:1;
}
.mc-kpi-value{
  font-size:22px;font-weight:800;letter-spacing:-.02em;line-height:1.1;
  color:var(--ink);position:relative;z-index:1;
}
.mc-kpi-value.teal{color:var(--teal)}
.mc-kpi-trend{
  display:inline-flex;align-items:center;gap:4px;
  font-size:10px;font-weight:800;padding:3px 8px;border-radius:10px;
  margin-top:10px;position:relative;z-index:1;
}
.mc-kpi-trend.up{background:var(--mint-soft);color:var(--mint)}
.mc-kpi-trend.down{background:var(--red-soft);color:var(--red)}

/* Panel */
.mc-panel{
  background:var(--white);border-radius:var(--r);border:1px solid var(--line);
  overflow:hidden;margin-bottom:16px;
}
.mc-panel-head{
  padding:18px 20px;border-bottom:1px solid var(--line);
  display:flex;align-items:center;justify-content:space-between;gap:12px;
}
.mc-panel-title{font-size:15px;font-weight:800;letter-spacing:-.01em}
.mc-panel-sub{font-size:11px;color:var(--ink-muted);font-weight:500;margin-top:3px}
.mc-panel-body{padding:20px}
.mc-panel-body-flush{padding:0}

/* Table */
.mc-tbl-wrap{overflow-x:auto}
.mc-tbl{width:100%;border-collapse:collapse;font-size:12px}
.mc-tbl th{
  text-align:left;padding:12px 16px;font-size:10px;font-weight:800;
  letter-spacing:.08em;text-transform:uppercase;color:var(--ink-muted);
  background:var(--bg);border-bottom:1px solid var(--line);white-space:nowrap;
}
.mc-tbl td{padding:14px 16px;border-bottom:1px solid var(--line);vertical-align:middle}
.mc-tbl tr:last-child td{border-bottom:none}
.mc-tbl tr:hover td{background:var(--bg)}

/* Buttons */
.mc-btn{
  padding:8px 14px;border-radius:8px;font-size:11px;font-weight:800;
  letter-spacing:.02em;transition:.15s;display:inline-flex;align-items:center;gap:6px;
}
.mc-btn.primary{background:var(--teal);color:#fff}
.mc-btn.primary:hover{background:var(--teal-dark)}
.mc-btn.outline{background:var(--white);color:var(--ink-2);border:1px solid var(--line-strong)}
.mc-btn.outline:hover{border-color:var(--teal);color:var(--teal)}
.mc-btn.danger{background:var(--red);color:#fff}
.mc-btn.mint{background:var(--mint);color:#fff}
.mc-btn.violet{background:var(--violet);color:#fff}
.mc-btn-back{
  display:inline-flex;align-items:center;gap:6px;
  padding:8px 14px;background:var(--white);border:1px solid var(--line);
  border-radius:10px;color:var(--ink-2);font-size:11px;font-weight:700;
  margin-bottom:16px;
}
.mc-btn-back:hover{border-color:var(--teal);color:var(--teal)}

/* Badges */
.mc-badge{
  display:inline-flex;align-items:center;gap:5px;
  padding:5px 10px;border-radius:10px;font-size:10px;font-weight:800;
  white-space:nowrap;
}
.mc-badge.success{background:var(--mint-soft);color:var(--mint)}
.mc-badge.warning{background:var(--amber-soft);color:var(--amber)}
.mc-badge.danger{background:var(--red-soft);color:var(--red)}
.mc-badge.info{background:var(--blue-soft);color:var(--blue)}
.mc-badge.violet{background:var(--violet-soft);color:var(--violet)}
.mc-badge.teal{background:var(--teal-soft);color:var(--teal)}
.mc-badge.neutral{background:var(--bg-2);color:var(--ink-muted)}
.mc-badge-dot{width:6px;height:6px;border-radius:50%;background:currentColor}

/* List */
.mc-list-item{display:flex;align-items:center;gap:14px;padding:16px 0;border-bottom:1px solid var(--line)}
.mc-list-item:last-child{border-bottom:none}
.mc-list-avatar{
  width:42px;height:42px;border-radius:50%;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
  font-weight:800;font-size:13px;
  background:var(--teal-soft);color:var(--teal);
}
.mc-list-info{flex:1;min-width:0}
.mc-list-name{font-size:13px;font-weight:700}
.mc-list-sub{font-size:11px;color:var(--ink-muted);margin-top:3px;font-weight:500}

/* Order card */
.mc-order{
  border:1px solid var(--line);border-radius:var(--r);padding:18px;
  margin-bottom:14px;background:var(--white);
}
.mc-order-head{
  display:flex;justify-content:space-between;align-items:flex-start;
  gap:12px;margin-bottom:14px;padding-bottom:12px;
  border-bottom:1px solid var(--line);
}
.mc-order-id{font-size:14px;font-weight:800;color:var(--ink)}
.mc-order-meta{font-size:11px;color:var(--ink-muted);margin-top:3px;font-weight:500}
.mc-order-items{
  background:var(--bg);border-radius:10px;padding:12px;margin:12px 0;
  font-size:12px;line-height:1.7;color:var(--ink-2);
}
.mc-order-actions{
  display:flex;gap:8px;flex-wrap:wrap;
  padding-top:12px;border-top:1px solid var(--line);
}

/* Batch row */
.mc-batch-row{
  display:grid;grid-template-columns:1fr auto auto auto;gap:12px;
  align-items:center;padding:12px 16px;
  border-bottom:1px solid var(--line);font-size:12px;
}
.mc-batch-row:last-child{border-bottom:none}
.mc-batch-row:nth-child(odd){background:var(--bg)}
.mc-batch-input{
  width:60px;padding:6px 10px;border:1.5px solid var(--line-strong);
  border-radius:8px;text-align:center;font-weight:700;font-size:12px;
  background:var(--white);
}
.mc-batch-input:focus{border-color:var(--teal)}

/* Filter */
.mc-filters{display:flex;gap:8px;overflow-x:auto;padding-bottom:14px;scrollbar-width:none}
.mc-filters::-webkit-scrollbar{display:none}
.mc-chip{
  flex-shrink:0;padding:8px 14px;background:var(--white);
  border:1px solid var(--line);border-radius:20px;
  font-size:12px;font-weight:700;color:var(--ink-2);white-space:nowrap;
}
.mc-chip.active{background:var(--ink);color:#fff;border-color:var(--ink)}

/* Chart */
.mc-chart{display:flex;align-items:flex-end;gap:6px;height:160px;padding-top:20px}
.mc-chart-bar{
  flex:1;background:var(--teal-soft);border-radius:6px 6px 0 0;
  position:relative;min-height:8px;transition:.3s;
}
.mc-chart-bar.active{background:var(--teal)}
.mc-chart-bar span{
  position:absolute;bottom:-22px;left:0;right:0;text-align:center;
  font-size:10px;color:var(--ink-muted);font-weight:700;
}
.mc-chart-bar b{
  position:absolute;top:-18px;left:0;right:0;text-align:center;
  font-size:10px;color:var(--ink);font-weight:800;
}

/* Reminder card */
.mc-reminder{
  display:flex;gap:12px;padding:14px;
  background:var(--blue-soft);border-radius:var(--r);
  border-left:3px solid var(--blue);margin-bottom:12px;
}
.mc-reminder-icon{
  width:42px;height:42px;border-radius:12px;background:var(--blue);
  color:#fff;display:flex;align-items:center;justify-content:center;
  font-size:18px;flex-shrink:0;
}
.mc-reminder-body{flex:1}
.mc-reminder-title{font-size:13px;font-weight:800;color:var(--ink);margin-bottom:3px}
.mc-reminder-sub{font-size:11px;color:var(--ink-2);font-weight:500;line-height:1.5}

/* Modal */
.mc-modal{
  position:fixed;inset:0;background:rgba(13,37,56,.5);z-index:600;
  display:flex;align-items:flex-end;justify-content:center;
  opacity:0;visibility:hidden;transition:.25s;padding:0;backdrop-filter:blur(4px);
}
@media(min-width:640px){.mc-modal{align-items:center;padding:16px}}
.mc-modal.open{opacity:1;visibility:visible}
.mc-modal-box{
  background:var(--white);border-radius:20px 20px 0 0;width:100%;max-width:520px;
  transform:translateY(20px);transition:.28s;max-height:92vh;overflow-y:auto;padding:26px;
}
@media(min-width:640px){.mc-modal-box{border-radius:var(--r-lg)}}
.mc-modal.open .mc-modal-box{transform:translateY(0)}
.mc-modal-title{font-size:20px;font-weight:800;letter-spacing:-.02em;margin-bottom:6px}
.mc-modal-sub{font-size:12px;color:var(--ink-muted);margin-bottom:18px}

/* Success */
.mc-success{padding:40px 20px;text-align:center}
.mc-success-icon{
  width:76px;height:76px;border-radius:50%;
  background:var(--mint-soft);color:var(--mint);
  display:flex;align-items:center;justify-content:center;
  margin:0 auto 22px;font-size:34px;
}
.mc-success-title{font-size:24px;font-weight:800;letter-spacing:-.02em;margin-bottom:10px}
.mc-success-sub{font-size:13px;color:var(--ink-2);line-height:1.7;margin-bottom:24px}

/* Toast */
.mc-toast{
  position:fixed;bottom:150px;left:50%;
  transform:translateX(-50%) translateY(20px);
  background:var(--ink);color:#fff;padding:12px 24px;border-radius:24px;
  font-size:12px;font-weight:700;z-index:700;opacity:0;transition:.3s;
  pointer-events:none;white-space:nowrap;max-width:92vw;
  box-shadow:0 8px 24px rgba(13,37,56,.3);
}
.mc-toast.show{opacity:1;transform:translateX(-50%) translateY(0)}

/* Empty */
.mc-empty{text-align:center;padding:50px 20px;color:var(--ink-muted)}
.mc-empty-icon{font-size:48px;margin-bottom:12px;opacity:.4}
.mc-empty-title{font-size:15px;font-weight:700;color:var(--ink);margin-bottom:4px}
.mc-empty-desc{font-size:12px}

/* Form */
.mc-form-group{margin-bottom:16px}
.mc-form-label{
  display:block;font-size:11px;font-weight:800;
  letter-spacing:.06em;color:var(--ink-2);
  margin-bottom:7px;text-transform:uppercase;
}
.mc-form-input{
  width:100%;padding:12px 14px;border:1.5px solid var(--line);
  border-radius:10px;font-size:14px;background:var(--white);transition:.15s;
}
.mc-form-input:focus{border-color:var(--teal);box-shadow:0 0 0 4px var(--teal-soft)}
.mc-form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px}
.mc-upload-area{
  border:2px dashed var(--teal);border-radius:var(--r);padding:32px 20px;
  text-align:center;background:var(--teal-soft);cursor:pointer;transition:.2s;
}
.mc-upload-area:hover{background:var(--white);border-style:solid}
.mc-upload-icon{font-size:42px;margin-bottom:10px;display:block}
.mc-upload-title{font-size:14px;font-weight:800;color:var(--ink);margin-bottom:4px}
.mc-upload-sub{font-size:11px;color:var(--ink-muted);font-weight:500}

/* Search overlay */
.mc-search-overlay{
  position:fixed;inset:0;background:var(--bg);z-index:600;
  transform:translateY(-100%);transition:.3s;overflow-y:auto;
}
.mc-search-overlay.open{transform:translateY(0)}
.mc-search-head{
  background:var(--white);padding:16px 20px;display:flex;gap:12px;
  align-items:center;border-bottom:1px solid var(--line);
  position:sticky;top:0;z-index:10;
}
.mc-search-input{
  flex:1;padding:14px 18px;background:var(--bg);border-radius:12px;
  font-size:14px;border:1.5px solid transparent;font-weight:500;
}
.mc-search-input:focus{border-color:var(--teal);background:var(--white)}
.mc-search-cancel{font-size:12px;font-weight:700;color:var(--ink-2)}
.mc-search-body{padding:22px}
.mc-search-tag-row{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:22px}
.mc-search-tag{
  padding:10px 16px;background:var(--white);border:1px solid var(--line);
  border-radius:20px;font-size:12px;font-weight:600;color:var(--ink-2);
}
.mc-search-result{
  display:flex;gap:12px;padding:12px 0;border-bottom:1px solid var(--line);
  cursor:pointer;align-items:center;
}

/* Alert */
.mc-alert{
  padding:14px 16px;border-radius:var(--r);font-size:12px;font-weight:500;
  display:flex;gap:10px;margin-bottom:14px;line-height:1.6;
}
.mc-alert.info{background:var(--blue-soft);color:#1e4f78}
.mc-alert.success{background:var(--mint-soft);color:#256148}
.mc-alert.warn{background:var(--amber-soft);color:#7a5312}

/* Chat */
.mc-chat-fab{
  position:fixed;bottom:150px;right:18px;width:54px;height:54px;
  border-radius:50%;background:var(--teal);color:#fff;
  display:flex;align-items:center;justify-content:center;
  box-shadow:0 8px 24px rgba(15,168,161,.35);z-index:250;
}
.mc-chat{
  position:fixed;bottom:150px;right:18px;width:340px;
  max-width:calc(100vw - 36px);height:480px;max-height:72vh;
  background:var(--white);border-radius:var(--r-lg);z-index:260;
  display:flex;flex-direction:column;transform:translateY(20px);
  opacity:0;visibility:hidden;transition:.25s;
  box-shadow:var(--shadow-lg);overflow:hidden;
}
.mc-chat.open{transform:translateY(0);opacity:1;visibility:visible}
.mc-chat-head{
  background:var(--teal);color:#fff;padding:14px 16px;
  display:flex;align-items:center;gap:10px;
}
.mc-chat-avatar{
  width:38px;height:38px;border-radius:50%;
  background:rgba(255,255,255,.25);display:flex;align-items:center;
  justify-content:center;font-size:16px;
}
.mc-chat-info{flex:1}
.mc-chat-name{font-size:13px;font-weight:800}
.mc-chat-status{
  font-size:10px;color:rgba(255,255,255,.85);
  display:flex;align-items:center;gap:4px;margin-top:2px;font-weight:500;
}
.mc-chat-live{
  width:6px;height:6px;background:#a7f3d0;border-radius:50%;
  box-shadow:0 0 8px #a7f3d0;
}
.mc-chat-body{
  flex:1;overflow-y:auto;padding:14px;
  display:flex;flex-direction:column;gap:10px;background:var(--bg);
}
.mc-chat-msg{
  max-width:82%;padding:10px 14px;border-radius:16px;
  font-size:12px;line-height:1.5;
}
.mc-chat-msg.bot{
  background:var(--white);color:var(--ink);
  align-self:flex-start;border-bottom-left-radius:4px;
  box-shadow:var(--shadow-xs);
}
.mc-chat-msg.user{
  background:var(--teal);color:#fff;align-self:flex-end;
  border-bottom-right-radius:4px;
}
.mc-chat-time{font-size:9px;opacity:.6;margin-top:4px;font-weight:600}
.mc-chat-input-row{
  border-top:1px solid var(--line);padding:10px;
  display:flex;gap:8px;background:var(--white);
}
.mc-chat-input{
  flex:1;padding:10px 16px;background:var(--bg);border:none;
  border-radius:20px;font-size:12px;
}
.mc-chat-send{
  width:38px;height:38px;border-radius:50%;background:var(--teal);
  color:#fff;display:flex;align-items:center;justify-content:center;
}

::-webkit-scrollbar{width:8px;height:8px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:var(--line-strong);border-radius:4px}
::-webkit-scrollbar-thumb:hover{background:var(--ink-muted)}
</style>
</head>
<body>

<!-- FLOATING MODE SWITCH -->
<div class="mc-mode">
  <button class="mc-mode-btn active" id="msCustomer" onclick="setMode('customer')">💊 Apotek</button>
  <button class="mc-mode-btn" id="msAdmin" onclick="setMode('admin')">📋 Admin Panel</button>
</div>

<!-- =================== CUSTOMER =================== -->
<div id="customerApp">
  <header class="mc-header">
    <div class="mc-band">Semua produk BPOM resmi · Apoteker bersertifikat · Gratis konsultasi</div>
    <div class="mc-head">
      <div class="mc-brand">
        <div class="mc-brand-logo">℞</div>
        <div>
          <div class="mc-brand-name">MediCare</div>
          <div class="mc-brand-sub">Apotek Online</div>
        </div>
      </div>
      <div class="mc-head-right">
        <button class="mc-admin-entry" onclick="setMode('admin')">📋 Admin</button>
        <button class="mc-icon" onclick="toggleOrders()" aria-label="Pesanan">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </button>
        <button class="mc-icon" onclick="toggleCart()" aria-label="Keranjang">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          <span class="mc-badge" id="cartBadge" style="display:none">0</span>
        </button>
      </div>
    </div>
    <div class="mc-search" onclick="openSearch()">
      <span class="ic">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="7"/><path d="m21 21-4-4"/></svg>
      </span>
      <span>Cari obat, vitamin, alat kesehatan...</span>
    </div>
    <div class="mc-cats" id="catNav"></div>
  </header>

  <!-- RX HERO -->
  <div class="mc-rx-hero" onclick="openUploadResep()">
    <div class="mc-rx-icon">℞</div>
    <div class="mc-rx-body">
      <div class="mc-rx-title">Punya resep dokter?</div>
      <div class="mc-rx-sub">Upload foto resep, apoteker kami akan verifikasi dalam 15 menit</div>
      <div class="mc-rx-cta">Upload Resep Sekarang →</div>
    </div>
  </div>

  <!-- QUICK SERVICES -->
  <div class="mc-quick">
    <div class="mc-quick-item" onclick="showToast('Chat dengan apoteker')">
      <span class="mc-quick-icon">💬</span>
      <div class="mc-quick-label">Chat<br>Apoteker</div>
    </div>
    <div class="mc-quick-item" onclick="showToast('Cek tekanan darah')">
      <span class="mc-quick-icon">🩺</span>
      <div class="mc-quick-label">Cek<br>Kesehatan</div>
    </div>
    <div class="mc-quick-item" onclick="showToast('Reminder obat')">
      <span class="mc-quick-icon">⏰</span>
      <div class="mc-quick-label">Reminder<br>Obat</div>
    </div>
    <div class="mc-quick-item" onclick="showToast('Riwayat resep')">
      <span class="mc-quick-icon">📋</span>
      <div class="mc-quick-label">Riwayat<br>Resep</div>
    </div>
  </div>

  <!-- PROMO -->
  <section class="mc-section">
    <div class="mc-section-head">
      <div>
        <div class="mc-section-title">Layanan Kami</div>
        <div class="mc-section-sub">Solusi kesehatan lengkap</div>
      </div>
    </div>
    <div class="mc-promo-row">
      <div class="mc-promo-card" onclick="showToast('Konsultasi dokter online')">
        <div class="mc-promo-icon teal">👨‍⚕️</div>
        <div class="mc-promo-body">
          <div class="mc-promo-title">Konsultasi Dokter</div>
          <div class="mc-promo-sub">Mulai Rp25.000 · 24 jam</div>
        </div>
      </div>
      <div class="mc-promo-card" onclick="showToast('Cek laboratorium')">
        <div class="mc-promo-icon blue">🧪</div>
        <div class="mc-promo-body">
          <div class="mc-promo-title">Cek Lab di Rumah</div>
          <div class="mc-promo-sub">Home service · Hasil 1 hari</div>
        </div>
      </div>
      <div class="mc-promo-card" onclick="showToast('Vaksinasi')">
        <div class="mc-promo-icon violet">💉</div>
        <div class="mc-promo-body">
          <div class="mc-promo-title">Vaksinasi Lengkap</div>
          <div class="mc-promo-sub">Semua usia · BPOM resmi</div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRODUCTS -->
  <section class="mc-section" id="katalog">
    <div class="mc-section-head">
      <div>
        <div class="mc-section-title" id="sectionTitle">💊 Obat & Vitamin</div>
        <div class="mc-section-sub" id="sectionSub">Semua produk resmi BPOM</div>
      </div>
      <button class="mc-section-link" onclick="loadMore()">Semua →</button>
    </div>
    <div class="mc-grid" id="productGrid"></div>
  </section>
</div>

<!-- =================== ADMIN =================== -->
<div id="adminApp" class="mc-admin hidden">
  <aside class="mc-sidebar" id="mcSidebar">
    <div class="mc-sidebar-brand">
      <div class="mc-sidebar-logo">℞</div>
      <div class="mc-sidebar-brand-text">
        <div class="mc-sidebar-brand-name">MediCare</div>
        <div class="mc-sidebar-brand-sub">Backoffice</div>
      </div>
    </div>
    <nav class="mc-sidebar-nav">
      <button class="mc-sb-item active" data-tab="dashboard" onclick="switchAdminTab('dashboard')">
        <span class="mc-sb-icon">📊</span>
        <span class="mc-sb-label">Dashboard</span>
      </button>
      <button class="mc-sb-item" data-tab="resep" onclick="switchAdminTab('resep')">
        <span class="mc-sb-icon">℞</span>
        <span class="mc-sb-label">Verifikasi Resep</span>
        <span class="mc-sb-badge" id="sbResepBadge">0</span>
      </button>
      <button class="mc-sb-item" data-tab="orders" onclick="switchAdminTab('orders')">
        <span class="mc-sb-icon">📋</span>
        <span class="mc-sb-label">Pesanan</span>
        <span class="mc-sb-badge" id="sbOrderBadge">0</span>
      </button>
      <button class="mc-sb-item" data-tab="products" onclick="switchAdminTab('products')">
        <span class="mc-sb-icon">💊</span>
        <span class="mc-sb-label">Produk</span>
      </button>
      <button class="mc-sb-item" data-tab="batches" onclick="switchAdminTab('batches')">
        <span class="mc-sb-icon">📦</span>
        <span class="mc-sb-label">Batch & Expired</span>
      </button>
      <button class="mc-sb-item" data-tab="consult" onclick="switchAdminTab('consult')">
        <span class="mc-sb-icon">💬</span>
        <span class="mc-sb-label">Konsultasi</span>
      </button>
      <button class="mc-sb-item" data-tab="customers" onclick="switchAdminTab('customers')">
        <span class="mc-sb-icon">👥</span>
        <span class="mc-sb-label">Pelanggan</span>
      </button>
      <button class="mc-sb-item" data-tab="pharmacists" onclick="switchAdminTab('pharmacists')">
        <span class="mc-sb-icon">👨‍⚕️</span>
        <span class="mc-sb-label">Apoteker</span>
      </button>
      <button class="mc-sb-item" data-tab="reports" onclick="switchAdminTab('reports')">
        <span class="mc-sb-icon">📈</span>
        <span class="mc-sb-label">Laporan</span>
      </button>
      <button class="mc-sb-item" data-tab="settings" onclick="switchAdminTab('settings')">
        <span class="mc-sb-icon">⚙</span>
        <span class="mc-sb-label">Pengaturan</span>
      </button>
    </nav>
    <div class="mc-sidebar-footer">
      <button class="mc-sidebar-switch" onclick="setMode('customer')">
        <span>🏪</span>
        <span class="mc-sidebar-switch-text">Lihat Toko</span>
      </button>
    </div>
    <button class="mc-sidebar-toggle" id="mcSidebarToggle" onclick="toggleMcSidebar()" title="Expand/Collapse">›</button>
  </aside>

  <main class="mc-main" id="mcMain">
    <div class="mc-topbar">
      <button class="mc-menu-btn" onclick="toggleMcSidebar()" aria-label="Menu">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </button>
      <div>
        <div style="font-size:10px;font-weight:700;color:var(--ink-muted);letter-spacing:.06em;text-transform:uppercase">
          Backoffice <span style="color:var(--teal)">/</span> <span id="mcCrumb" style="color:var(--teal)">Dashboard</span>
        </div>
        <div class="mc-page-title" id="mcPageTitle">Dashboard</div>
        <div class="mc-page-sub" id="mcPageSub">Ringkasan operasional apotek</div>
      </div>
      <div class="mc-top-right">
        <button class="mc-switch-customer" onclick="setMode('customer')">🏪 Lihat Toko</button>
        <button class="mc-icon-btn" onclick="showToast('Notifikasi')" style="position:relative">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
          <span class="mc-badge" style="display:flex;top:-2px;right:-2px">3</span>
        </button>
      </div>
    </div>
    <div class="mc-content" id="mcContent"></div>
  </main>
</div>

<!-- BOTTOM NAV -->
<nav class="mc-nav" id="bottomNav">
  <button class="mc-nav-item active" data-nav="home" onclick="navTo('home')">
    <span class="mc-nav-icon">🏠</span>
    Beranda
  </button>
  <button class="mc-nav-item" data-nav="search" onclick="openSearch()">
    <span class="mc-nav-icon">🔍</span>
    Cari
  </button>
  <button class="mc-nav-item" data-nav="orders" onclick="toggleOrders()">
    <span class="mc-nav-icon">📋</span>
    Pesanan
    <span class="mc-nav-badge" id="ordersBadge" style="display:none">0</span>
  </button>
  <button class="mc-nav-item" data-nav="reminder" onclick="showToast('Fitur reminder obat')">
    <span class="mc-nav-icon">⏰</span>
    Reminder
  </button>
  <button class="mc-nav-item" data-nav="admin" onclick="setMode('admin')">
    <span class="mc-nav-icon">📋</span>
    Admin
  </button>
</nav>

<!-- CHAT -->
<button class="mc-chat-fab" id="mcChatFab" onclick="toggleChat()" aria-label="Chat">
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
</button>
<div class="mc-chat" id="mcChat">
  <div class="mc-chat-head">
    <div class="mc-chat-avatar">👨‍⚕️</div>
    <div class="mc-chat-info">
      <div class="mc-chat-name">Apoteker Sari, S.Farm</div>
      <div class="mc-chat-status"><span class="mc-chat-live"></span>Online · Balas dalam 2 menit</div>
    </div>
    <button onclick="toggleChat()" style="color:#fff">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="mc-chat-body" id="mcChatBody"></div>
  <div class="mc-chat-input-row">
    <input class="mc-chat-input" id="mcChatInput" placeholder="Tanya apoteker..." onkeydown="if(event.key==='Enter')sendChat()">
    <button class="mc-chat-send" onclick="sendChat()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
    </button>
  </div>
</div>

<!-- CART DRAWER -->
<div class="mc-overlay" id="cartOverlay" onclick="toggleCart()"></div>
<aside class="mc-drawer" id="cartDrawer">
  <div class="mc-drawer-handle"></div>
  <div class="mc-drawer-head">
    <div>
      <div class="mc-drawer-title">Keranjang</div>
      <small id="cartCountLabel" style="display:block;font-size:11px;color:var(--ink-muted);margin-top:3px">0 item</small>
    </div>
    <button class="mc-drawer-close" onclick="toggleCart()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="mc-drawer-body" id="cartBody"></div>
  <div class="mc-drawer-foot" id="cartFoot" style="display:none">
    <div class="mc-sum-row"><span>Subtotal</span><span id="subtotal">Rp0</span></div>
    <div class="mc-sum-row"><span>Ongkir</span><span id="ongkir" style="color:var(--mint);font-weight:800">GRATIS</span></div>
    <div class="mc-sum-row"><span>Biaya Apoteker</span><span id="service">Rp1.000</span></div>
    <div class="mc-sum-row total"><span>Total</span><span id="total">Rp0</span></div>
    <button class="mc-btn-primary" onclick="openCheckout()">Pesan Sekarang</button>
    <div style="font-size:10px;color:var(--ink-muted);text-align:center;margin-top:10px;line-height:1.5">
      🔒 Transaksi aman · Resep diverifikasi apoteker bersertifikat
    </div>
  </div>
</aside>

<!-- ORDERS DRAWER -->
<div class="mc-overlay" id="ordersOverlay" onclick="toggleOrders()"></div>
<aside class="mc-drawer" id="ordersDrawer">
  <div class="mc-drawer-handle"></div>
  <div class="mc-drawer-head">
    <div>
      <div class="mc-drawer-title">Pesanan Saya</div>
      <small style="display:block;font-size:11px;color:var(--ink-muted);margin-top:3px">Riwayat pembelian</small>
    </div>
    <button class="mc-drawer-close" onclick="toggleOrders()">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>
  <div class="mc-drawer-body" id="ordersBody"></div>
</aside>

<!-- SEARCH -->
<div class="mc-search-overlay" id="mcSearchOverlay">
  <div class="mc-search-head">
    <input class="mc-search-input" id="mcSearchInput" placeholder="Cari obat, vitamin, alat kesehatan..." oninput="handleSearch(this.value)">
    <button class="mc-search-cancel" onclick="closeSearch()">Batal</button>
  </div>
  <div class="mc-search-body">
    <div style="font-size:11px;font-weight:800;letter-spacing:.06em;color:var(--ink-muted);text-transform:uppercase;margin-bottom:12px">Pencarian Populer</div>
    <div class="mc-search-tag-row">
      <button class="mc-search-tag" onclick="quickSearch('paracetamol')">Paracetamol</button>
      <button class="mc-search-tag" onclick="quickSearch('vitamin')">Vitamin C</button>
      <button class="mc-search-tag" onclick="quickSearch('batuk')">Obat Batuk</button>
      <button class="mc-search-tag" onclick="quickSearch('maag')">Obat Maag</button>
      <button class="mc-search-tag" onclick="quickSearch('masker')">Masker</button>
      <button class="mc-search-tag" onclick="quickSearch('tensimeter')">Tensimeter</button>
    </div>
    <div id="searchResults"></div>
  </div>
</div>

<!-- PDP -->
<div class="mc-pdp" id="pdpModal"></div>

<!-- RESEP UPLOAD MODAL -->
<div class="mc-modal" id="resepModal">
  <div class="mc-modal-box">
    <div class="mc-modal-title">Upload Resep Dokter</div>
    <div class="mc-modal-sub">Foto resep dengan jelas · Apoteker verifikasi 15 menit</div>
    <div class="mc-upload-area" onclick="showToast('Pilih file dari galeri')">
      <span class="mc-upload-icon">📷</span>
      <div class="mc-upload-title">Tap untuk upload foto resep</div>
      <div class="mc-upload-sub">Format JPG/PNG maksimal 5MB</div>
    </div>
    <div class="mc-form-group" style="margin-top:16px">
      <label class="mc-form-label">Catatan untuk Apoteker</label>
      <input class="mc-form-input" id="resepNote" placeholder="Contoh: alergi penisilin">
    </div>
    <button class="mc-btn-primary" onclick="submitResep()">Kirim Resep</button>
    <button class="mc-btn-secondary" onclick="closeUploadResep()">Batal</button>
  </div>
</div>

<!-- CHECKOUT SUCCESS -->
<div class="mc-modal" id="checkoutModal">
  <div class="mc-modal-box">
    <div class="mc-success">
      <div class="mc-success-icon">✓</div>
      <h2 class="mc-success-title">Pesanan Diterima!</h2>
      <p class="mc-success-sub">Order <b id="orderIdDisplay" class="mono">MC-2026-XXXX</b> sedang disiapkan.<br>Apoteker kami akan verifikasi dan mengirim dalam <b>1-2 jam</b>.</p>
      <button class="mc-btn-primary" onclick="closeCheckout();toggleOrders()">Lacak Pesanan</button>
      <button class="mc-btn-secondary" onclick="closeCheckout()">Kembali Belanja</button>
    </div>
  </div>
</div>

<!-- PRODUCT MODAL -->
<div class="mc-modal" id="productModal">
  <div class="mc-modal-box">
    <div class="mc-modal-title" id="productModalTitle">Produk Baru</div>
    <div class="mc-modal-sub">Isi detail produk farmasi</div>
    <div class="mc-form-group"><label class="mc-form-label">Nama Produk</label><input class="mc-form-input" id="pmName"></div>
    <div class="mc-form-row">
      <div class="mc-form-group"><label class="mc-form-label">Kategori</label><select class="mc-form-input" id="pmCat"></select></div>
      <div class="mc-form-group"><label class="mc-form-label">Brand</label><input class="mc-form-input" id="pmBrand"></div>
    </div>
    <div class="mc-form-row">
      <div class="mc-form-group"><label class="mc-form-label">Harga</label><input class="mc-form-input" id="pmPrice" type="number"></div>
      <div class="mc-form-group"><label class="mc-form-label">Harga Coret</label><input class="mc-form-input" id="pmOld" type="number"></div>
    </div>
    <div class="mc-form-group"><label class="mc-form-label">Nomor BPOM</label><input class="mc-form-input" id="pmBpom" placeholder="DBL1234567890A1"></div>
    <div class="mc-form-group"><label class="mc-form-label">Komposisi / Indikasi</label><input class="mc-form-input" id="pmSpec" placeholder="Paracetamol 500mg"></div>
    <div class="mc-form-group"><label class="mc-form-label">Varian (koma)</label><input class="mc-form-input" id="pmVariants" placeholder="Strip 10, Box 100"></div>
    <button class="mc-btn-primary" onclick="saveProduct()">Simpan Produk</button>
    <button class="mc-btn-secondary" onclick="closeProductModal()">Batal</button>
  </div>
</div>

<!-- STAFF MODAL -->
<div class="mc-modal" id="staffModal">
  <div class="mc-modal-box">
    <div class="mc-modal-title" id="staffModalTitle">Tambah Apoteker</div>
    <div class="mc-modal-sub">Apoteker dengan STR aktif</div>
    <div class="mc-form-group"><label class="mc-form-label">Nama Lengkap</label><input class="mc-form-input" id="sfName"></div>
    <div class="mc-form-group"><label class="mc-form-label">Email</label><input class="mc-form-input" id="sfEmail"></div>
    <div class="mc-form-group"><label class="mc-form-label">Jabatan</label>
      <select class="mc-form-input" id="sfRole">
        <option>Apoteker Penanggung Jawab</option><option>Apoteker Pendamping</option>
        <option>Tenaga Teknis Kefarmasian</option><option>Kasir</option><option>Kurir Obat</option>
      </select>
    </div>
    <div class="mc-form-group"><label class="mc-form-label">Nomor STR</label><input class="mc-form-input" id="sfStr" placeholder="17.01.1.100.123"></div>
    <button class="mc-btn-primary" onclick="saveStaff()">Simpan</button>
    <button class="mc-btn-secondary" onclick="closeStaffModal()">Batal</button>
  </div>
</div>

<div class="mc-toast" id="toast"></div>

<script>
/* ==================== DATA ==================== */
const CATEGORIES = [
  {id:'all',name:'Semua',icon:'💊',letter:'*'},
  {id:'obat',name:'Obat',icon:'💊',letter:'O'},
  {id:'vitamin',name:'Vitamin',icon:'🟡',letter:'V'},
  {id:'herbal',name:'Herbal',icon:'🌿',letter:'H'},
  {id:'alkes',name:'Alat Kesehatan',icon:'🩺',letter:'A'},
  {id:'perawatan',name:'Perawatan',icon:'🧴',letter:'P'},
  {id:'bayi',name:'Bayi & Ibu',icon:'🍼',letter:'B'},
  {id:'masker',name:'Masker',icon:'😷',letter:'M'}
];

let PRODUCTS = [
  {id:1,name:'Paracetamol 500mg',brand:'Sanmol',cat:'obat',price:8500,old:12000,
   emoji:'💊',bg:'#e0f5f4',rating:4.9,sold:3421,isRx:false,isNew:false,stock:520,
   bpom:'DBL1234567890A1',spec:'Paracetamol 500mg · 1 strip (10 tablet)',
   indication:'Menurunkan demam dan meredakan nyeri ringan hingga sedang seperti sakit kepala, sakit gigi, dan nyeri otot.',
   dosage:{dewasa:'1 tablet, 3-4x sehari',anak:'Setengah tablet, 3x sehari (usia 6-12)'},
   warning:'Jangan melebihi 8 tablet per hari. Hindari penggunaan alkohol saat mengonsumsi obat ini.',
   variants:{'Strip 10':300,'Box 100':220},
   desc:'Paracetamol generik untuk menurunkan demam dan nyeri ringan.'},
  {id:2,name:'Amoxicillin 500mg',brand:'Kimia Farma',cat:'obat',price:32000,old:0,
   emoji:'💊',bg:'#e3effa',rating:4.8,sold:1247,isRx:true,isNew:false,stock:180,
   bpom:'GKL0012345678B1',spec:'Amoxicillin 500mg · 1 strip',
   indication:'Antibiotik untuk infeksi saluran pernapasan, saluran kemih, dan kulit.',
   dosage:{dewasa:'1 kapsul, 3x sehari',anak:'Sesuai berat badan (konsultasi dokter)'},
   warning:'Wajib resep dokter. Habiskan seluruh dosis meski gejala sudah membaik.',
   variants:{'Strip 10':120,'Box 60':60},
   desc:'Antibiotik golongan penisilin untuk infeksi bakteri.'},
  {id:3,name:'Vitamin C 1000mg IPI',brand:'IPI',cat:'vitamin',price:15000,old:20000,
   emoji:'🟡',bg:'#fdf2dd',rating:4.7,sold:5621,isRx:false,isNew:false,stock:800,
   bpom:'SD1234567890A1',spec:'Vitamin C 1000mg · 1 botol (100 tablet)',
   indication:'Membantu memelihara daya tahan tubuh dan mencegah defisiensi vitamin C.',
   dosage:{dewasa:'1 tablet, 1x sehari',anak:'Setengah tablet, 1x sehari'},
   warning:'Jangan melebihi dosis. Simpan di tempat sejuk dan kering.',
   variants:{'Botol 100':500,'Botol 30':300},
   desc:'Suplemen vitamin C untuk daya tahan tubuh.'},
  {id:4,name:'OBH Combi Batuk Flu',brand:'Combiphar',cat:'obat',price:28000,old:0,
   emoji:'🍯',bg:'#fdf2dd',rating:4.6,sold:1876,isRx:false,isNew:false,stock:240,
   bpom:'DBL2345678901B1',spec:'Sirup 60ml · Rasa madu',
   indication:'Meredakan batuk berdahak, demam, dan gejala flu.',
   dosage:{dewasa:'1 sendok takar 3x sehari',anak:'Setengah sendok takar 3x sehari'},
   warning:'Tidak untuk anak di bawah 2 tahun. Jangan digunakan lebih dari 5 hari.',
   variants:{'60ml':150,'100ml':90},
   desc:'Obat batuk dan flu untuk dewasa dan anak.'},
  {id:5,name:'Omeprazole 20mg',brand:'Dexa',cat:'obat',price:42000,old:0,
   emoji:'💊',bg:'#e3effa',rating:4.7,sold:432,isRx:true,isNew:false,stock:95,
   bpom:'GKL3456789012C1',spec:'Omeprazole 20mg · 1 strip',
   indication:'Untuk tukak lambung, GERD, dan gangguan asam lambung lainnya.',
   dosage:{dewasa:'1 kapsul, 1x sehari sebelum makan',anak:'Konsultasi dokter'},
   warning:'Wajib resep dokter. Diminum 30 menit sebelum makan.',
   variants:{'Strip 10':60,'Box 30':35},
   desc:'Obat asam lambung golongan PPI.'},
  {id:6,name:'Tolak Angin Cair',brand:'Sido Muncul',cat:'herbal',price:25000,old:30000,
   emoji:'🌿',bg:'#e4f6ee',rating:4.9,sold:4210,isRx:false,isNew:false,stock:650,
   bpom:'TR1234567890A1',spec:'Herbal cair 15ml · 12 sachet',
   indication:'Meredakan gejala masuk angin seperti mual, perut kembung, dan badan lemas.',
   dosage:{dewasa:'1 sachet, 1-3x sehari',anak:'Setengah sachet, 2x sehari'},
   warning:'Kocok dahulu sebelum diminum.',
   variants:{'12 sachet':400,'30 sachet':250},
   desc:'Obat herbal untuk masuk angin.'},
  {id:7,name:'Tensimeter Digital Omron',brand:'Omron',cat:'alkes',price:450000,old:520000,
   emoji:'🩺',bg:'#e3effa',rating:4.8,sold:287,isRx:false,isNew:false,stock:32,
   bpom:'AKL12345678901',spec:'Upper arm · Auto inflate',
   indication:'Alat pengukur tekanan darah digital untuk penggunaan di rumah.',
   dosage:{dewasa:'Ukur 2x sehari (pagi & malam)',anak:'Tidak disarankan <12 tahun'},
   warning:'Istirahat 5 menit sebelum pengukuran. Jangan bergerak saat mengukur.',
   variants:{'HEM-7156':20,'HEM-7361T':12},
   desc:'Tensimeter digital upper arm dengan akurasi klinis.'},
  {id:8,name:'Surgical Mask 3ply',brand:'Sensi',cat:'masker',price:35000,old:45000,
   emoji:'😷',bg:'#e0f5f4',rating:4.7,sold:3421,isRx:false,isNew:false,stock:1200,
   bpom:'AKL23456789012',spec:'3-ply · Earloop · 50 pcs',
   indication:'Melindungi dari droplet dan partikel di udara.',
   dosage:{dewasa:'Ganti setiap 4 jam',anak:'Tersedia ukuran anak'},
   warning:'Masker sekali pakai. Jangan digunakan ulang.',
   variants:{'50 pcs':800,'100 pcs':400},
   desc:'Masker medis 3 lapis dengan efisiensi filtrasi 95%.'},
  {id:9,name:'Pampers Baby M52',brand:'MamyPoko',cat:'bayi',price:145000,old:170000,
   emoji:'🍼',bg:'#ece4fb',rating:4.8,sold:876,isRx:false,isNew:false,stock:180,
   bpom:'NA',spec:'Size M · 52 pcs · Ekonomis',
   indication:'Popok bayi dengan daya serap tinggi.',
   dosage:{dewasa:'-',anak:'Ganti setiap 3-4 jam'},
   warning:'Segera ganti jika sudah penuh untuk mencegah ruam.',
   variants:{'M52':100,'L44':80},
   desc:'Popok bayi dengan teknologi anti bocor.'},
  {id:10,name:'Sabun Antiseptik Dettol',brand:'Dettol',cat:'perawatan',price:28000,old:0,
   emoji:'🧴',bg:'#e0f5f4',rating:4.6,sold:1520,isRx:false,isNew:false,stock:340,
   bpom:'NA',spec:'250ml · Botol pump',
   indication:'Membunuh kuman dan bakteri pada kulit.',
   dosage:{dewasa:'Gunakan sesuai kebutuhan',anak:'Untuk anak >3 tahun'},
   warning:'Hindari kontak dengan mata.',
   variants:{'250ml':200,'500ml':140},
   desc:'Sabun cair antiseptik untuk mandi.'},
  {id:11,name:'Betadine Solution 60ml',brand:'Betadine',cat:'perawatan',price:38000,old:0,
   emoji:'🧴',bg:'#fdf2dd',rating:4.9,sold:678,isRx:false,isNew:false,stock:210,
   bpom:'DBL4567890123D1',spec:'Povidone iodine 10% · 60ml',
   indication:'Antiseptik untuk luka terbuka dan luka bakar ringan.',
   dosage:{dewasa:'Oleskan pada luka 2-3x sehari',anak:'Sama dengan dewasa'},
   warning:'Hindari penggunaan pada luka bakar luas tanpa konsultasi dokter.',
   variants:{'60ml':150,'30ml':60},
   desc:'Antiseptik luka dengan povidone iodine.'},
  {id:12,name:'Enervon-C Multivitamin',brand:'Enervon',cat:'vitamin',price:38000,old:45000,
   emoji:'🟡',bg:'#fdf2dd',rating:4.8,sold:2187,isRx:false,isNew:false,stock:420,
   bpom:'SD2345678901B1',spec:'30 tablet · Multivitamin',
   indication:'Membantu memelihara daya tahan tubuh dan mengatasi kelelahan.',
   dosage:{dewasa:'1 tablet, 1x sehari',anak:'Konsultasi dokter'},
   warning:'Jangan diminum bersamaan dengan susu.',
   variants:{'30 tablet':300,'60 tablet':120},
   desc:'Multivitamin lengkap untuk stamina.'}
];

let RESEP = [
  {id:'RX-2026-001',customer:'Andi Pratama',uploaded:'5 menit lalu',status:'pending',note:'Alergi penisilin',items:'Amoxicillin 500mg x1, Paracetamol 500mg x1',doctor:'dr. Sinta, Sp.PD'},
  {id:'RX-2026-002',customer:'Siti Nurhaliza',uploaded:'25 menit lalu',status:'verified',note:'-',items:'Omeprazole 20mg x2',doctor:'dr. Budi, Sp.PD',pharmacist:'Apoteker Sari'},
  {id:'RX-2026-003',customer:'Budi Hartono',uploaded:'1 jam lalu',status:'rejected',note:'Resep tidak jelas',items:'-',doctor:'-',reason:'Foto blur, tidak bisa dibaca'}
];

let ORDERS = [
  {id:'MC-2026-0812',customer:'Andi Pratama',total:128500,status:'preparing',time:'5 menit lalu',items:3,payment:'GoPay',address:'Jl. Kebayoran 12',items_list:[{name:'Paracetamol 500mg',variant:'Strip 10',qty:2},{name:'Vitamin C 1000mg',variant:'Botol 30',qty:1}],trackingStep:1,eta:'1 jam'},
  {id:'MC-2026-0811',customer:'Siti Nurhaliza',total:78000,status:'shipping',time:'20 menit lalu',items:2,payment:'Transfer',address:'Jl. Sudirman 45',items_list:[{name:'Amoxicillin 500mg',variant:'Strip 10',qty:2}],trackingStep:2,eta:'30 menit',courier:'Budi Santoso'},
  {id:'MC-2026-0810',customer:'Budi Hartono',total:320000,status:'delivered',time:'2 jam lalu',items:4,payment:'Kartu Kredit',address:'Jl. Thamrin 88',items_list:[{name:'Omeprazole 20mg',variant:'Box 30',qty:2},{name:'Tolak Angin Cair',variant:'12 sachet',qty:2}],trackingStep:3,eta:'Selesai'},
  {id:'MC-2026-0809',customer:'Dewi Lestari',total:450000,status:'delivered',time:'5 jam lalu',items:1,payment:'GoPay',address:'Jl. Gatot Subroto 22',items_list:[{name:'Tensimeter Digital',variant:'HEM-7156',qty:1}],trackingStep:3,eta:'Selesai'},
  {id:'MC-2026-0808',customer:'Rizki Aditya',total:65000,status:'cancelled',time:'1 hari lalu',items:2,payment:'COD',address:'Jl. Rasuna Said 10',items_list:[{name:'Paracetamol',variant:'Box 100',qty:1}],trackingStep:0}
];

let PHARMACISTS = [
  {id:1,name:'Apoteker Sari Dewi',email:'sari@medicare.id',str:'17.01.1.100.1234',role:'Apoteker Penanggung Jawab',status:'active',shift:'Pagi'},
  {id:2,name:'Apoteker Budi Santoso',email:'budi@medicare.id',str:'17.01.1.100.2345',role:'Apoteker Pendamping',status:'active',shift:'Siang'},
  {id:3,name:'TTK Rina Wulandari',email:'rina@medicare.id',str:'17.01.2.200.3456',role:'Tenaga Teknis Kefarmasian',status:'active',shift:'Pagi'},
  {id:4,name:'TTK Joko Susilo',email:'joko@medicare.id',str:'17.01.2.200.4567',role:'Tenaga Teknis Kefarmasian',status:'active',shift:'Malam'},
  {id:5,name:'Dedi Kurniawan',email:'dedi@medicare.id',str:'-',role:'Kurir Obat',status:'active',shift:'Siang'}
];

let CUSTOMERS = [
  {id:1,name:'Andi Pratama',email:'andi@email.com',orders:14,spent:2450000,phone:'0812-3456-7890',city:'Jakarta',tier:'Platinum',allergies:'Penisilin'},
  {id:2,name:'Siti Nurhaliza',email:'siti@email.com',orders:8,spent:1250000,phone:'0812-3456-7891',city:'Jakarta',tier:'Gold',allergies:'-'},
  {id:3,name:'Budi Hartono',email:'budi@email.com',orders:22,spent:3200000,phone:'0812-3456-7892',city:'Depok',tier:'Platinum',allergies:'Sulfa'},
  {id:4,name:'Dewi Lestari',email:'dewi@email.com',orders:6,spent:890000,phone:'0812-3456-7893',city:'Tangerang',tier:'Silver',allergies:'-'},
  {id:5,name:'Rizki Aditya',email:'rizki@email.com',orders:11,spent:1850000,phone:'0812-3456-7894',city:'Bekasi',tier:'Gold',allergies:'-'}
];

const PAGE_META = {
  dashboard:{title:'Dashboard',sub:'Ringkasan operasional apotek'},
  resep:{title:'Verifikasi Resep',sub:'Resep dokter menunggu review'},
  orders:{title:'Pesanan',sub:'Kelola pesanan masuk'},
  products:{title:'Produk',sub:'Katalog produk farmasi'},
  batches:{title:'Batch & Expired',sub:'Manajemen nomor batch dan kadaluarsa'},
  consult:{title:'Konsultasi',sub:'Chat dengan pelanggan'},
  customers:{title:'Pelanggan',sub:'Database pelanggan & riwayat alergi'},
  pharmacists:{title:'Apoteker',sub:'Tenaga kefarmasian bersertifikat'},
  reports:{title:'Laporan',sub:'Analitik penjualan & compliance'},
  settings:{title:'Pengaturan',sub:'Konfigurasi apotek'}
};

/* ==================== STATE ==================== */
let state = {
  mode:'customer',
  cart: JSON.parse(localStorage.getItem('mc_cart')||'[]'),
  category:'all', search:'', limit:12,
  adminTab:'dashboard', orderFilter:'all', resepFilter:'all', alphFilter:'all',
  currentPDP:null, pdpVariant:null, editingProduct:null, editingStaff:null,
  sidebarExpanded:false
};

/* ==================== UTILS ==================== */
const rupiah = n => 'Rp' + Math.round(n).toLocaleString('id-ID');
function showToast(msg){
  const t=document.getElementById('toast');
  t.textContent=msg; t.classList.add('show');
  clearTimeout(t._t); t._t=setTimeout(()=>t.classList.remove('show'),2200);
}
function save(){
  localStorage.setItem('mc_cart',JSON.stringify(state.cart));
  updateBadges();
}
function updateBadges(){
  const count = state.cart.reduce((s,i)=>s+i.qty,0);
  const cb=document.getElementById('cartBadge');
  if(cb){ cb.textContent=count; cb.style.display=count>0?'flex':'none'; }
  document.getElementById('cartCountLabel').textContent=count+' item';

  const activeOrders=ORDERS.filter(o=>o.status==='preparing'||o.status==='shipping').length;
  const ob=document.getElementById('ordersBadge');
  if(ob){ ob.textContent=activeOrders; ob.style.display=activeOrders>0?'flex':'none'; }

  const pendingResep=RESEP.filter(r=>r.status==='pending').length;
  const rb=document.getElementById('sbResepBadge');
  if(rb) rb.textContent=pendingResep;
  const sob=document.getElementById('sbOrderBadge');
  if(sob) sob.textContent=ORDERS.filter(o=>o.status==='preparing').length;
}

/* ==================== MODE ==================== */
function setMode(mode){
  state.mode=mode;
  document.getElementById('customerApp').classList.toggle('hidden',mode!=='customer');
  document.getElementById('adminApp').classList.toggle('hidden',mode!=='admin');
  document.getElementById('bottomNav').classList.toggle('hidden',mode!=='customer');
  document.getElementById('mcChatFab').classList.toggle('hidden',mode!=='customer');
  document.getElementById('mcChat').classList.remove('open');

  document.getElementById('msCustomer').classList.toggle('active', mode==='customer');
  document.getElementById('msAdmin').classList.toggle('active', mode==='admin');

  ['cartDrawer','ordersDrawer'].forEach(id=>document.getElementById(id).classList.remove('open'));
  ['cartOverlay','ordersOverlay'].forEach(id=>document.getElementById(id).classList.remove('open'));

  if(mode==='admin'){ renderAdmin(); }
  window.scrollTo(0,0);
  showToast(mode==='admin' ? 'Beralih ke Admin Panel' : 'Beralih ke Apotek');
}

/* Slim sidebar toggle */
function toggleMcSidebar(){
  const sb=document.getElementById('mcSidebar');
  const main=document.getElementById('mcMain');
  const toggle=document.getElementById('mcSidebarToggle');
  const isMobile=window.innerWidth<1024;

  if(isMobile){
    sb.classList.toggle('mobile-open');
  } else {
    sb.classList.toggle('expanded');
    main.classList.toggle('expanded');
    state.sidebarExpanded = sb.classList.contains('expanded');
    toggle.textContent = state.sidebarExpanded ? '‹' : '›';
  }
}
// Auto-expand on desktop initially? No, keep slim. User can expand.
// Add overlay close for mobile
function initMcSidebar(){
  if(window.innerWidth<1024){
    document.getElementById('mcSidebar').classList.remove('expanded');
    document.getElementById('mcMain').classList.remove('expanded');
  }
}
window.addEventListener('resize',()=>{
  if(window.innerWidth<1024){
    document.getElementById('mcSidebar').classList.remove('expanded');
    document.getElementById('mcMain').classList.remove('expanded');
  }
});

/* ==================== CUSTOMER ==================== */
function renderCategories(){
  document.getElementById('catNav').innerHTML=CATEGORIES.map(c=>`
    <button class="mc-cat ${state.category===c.id?'active':''}" onclick="setCategory('${c.id}')">
      ${c.icon} ${c.name}
    </button>
  `).join('');
}
function setCategory(id){
  state.category=id;
  renderCategories(); renderProducts();
  const cat=CATEGORIES.find(c=>c.id===id);
  document.getElementById('sectionTitle').textContent = id==='all' ? '💊 Obat & Vitamin' : cat.icon+' '+cat.name;
  document.getElementById('sectionSub').textContent = id==='all' ? 'Semua produk resmi BPOM' : 'Produk '+cat.name.toLowerCase();
}
function getFiltered(){
  let arr=[...PRODUCTS];
  if(state.category!=='all') arr=arr.filter(p=>p.cat===state.category);
  if(state.search){
    const q=state.search.toLowerCase();
    arr=arr.filter(p=>p.name.toLowerCase().includes(q)||p.brand.toLowerCase().includes(q)||p.spec.toLowerCase().includes(q)||(p.indication||'').toLowerCase().includes(q));
  }
  return arr;
}
function productCard(p){
  const disc=p.old>0?Math.round((p.old-p.price)/p.old*100):0;
  const stockClass=p.stock<=20?'low':p.stock<=0?'out':'';
  return `
    <div class="mc-card" onclick="openPDP(${p.id})">
      <div class="mc-card-img" style="background:${p.bg}">
        ${p.isRx?`<span class="mc-card-tag rx">℞ RESEP</span>`:p.isNew?`<span class="mc-card-tag new">BARU</span>`:disc?`<span class="mc-card-tag promo">-${disc}%</span>`:''}
        <span>${p.emoji}</span>
        ${p.bpom&&p.bpom!=='NA'?`<span class="mc-card-bpom">BPOM: ${p.bpom}</span>`:''}
      </div>
      <div class="mc-card-body">
        <div class="mc-card-brand">${p.brand}</div>
        <div class="mc-card-name">${p.name}</div>
        <div class="mc-card-indication">${p.indication||p.spec}</div>
        <div class="mc-card-footer">
          <div class="mc-card-price-block">
            <span class="mc-card-price">${rupiah(p.price)}</span>
            ${p.old?`<span class="mc-card-old">${rupiah(p.old)}</span>`:''}
          </div>
          <span class="mc-card-stock ${stockClass}">${p.stock<=0?'Habis':p.stock<=20?'Sisa '+p.stock:'Tersedia'}</span>
        </div>
      </div>
    </div>`;
}
function renderProducts(){
  const arr=getFiltered().slice(0,state.limit);
  const grid=document.getElementById('productGrid');
  if(!arr.length){
    grid.innerHTML=`<div class="mc-empty" style="grid-column:1/-1"><div class="mc-empty-icon">💊</div><div class="mc-empty-title">Produk tidak ditemukan</div><div class="mc-empty-desc">Coba kata kunci lain</div></div>`;
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
  document.getElementById('pdpModal').innerHTML=`
    <div class="mc-pdp-top">
      <div class="mc-pdp-top-title">Detail Produk</div>
      <button class="mc-drawer-close" onclick="closePDP()">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div class="mc-pdp-hero" style="background:${p.bg}">
      <span>${p.emoji}</span>
      ${p.bpom&&p.bpom!=='NA'?`<span class="mc-pdp-bpom">BPOM ${p.bpom}</span>`:''}
    </div>
    <div class="mc-pdp-body">
      <div class="mc-pdp-cat">${p.brand} · ${p.cat}</div>
      <h1 class="mc-pdp-name">${p.name}</h1>
      <div class="mc-pdp-generic">${p.spec}</div>
      <div class="mc-pdp-price">
        <span class="mc-pdp-price-now">${rupiah(p.price)}</span>
        ${p.old?`<span class="mc-pdp-price-old">${rupiah(p.old)}</span><span class="mc-pdp-disc">-${disc}%</span>`:''}
      </div>

      ${p.isRx?`<div class="mc-warning">℞ <div>Produk ini <b>memerlukan resep dokter</b>. Upload resep Anda saat checkout untuk diverifikasi apoteker.</div></div>`:''}

      ${p.dosage?`
        <div class="mc-dosage-row">
          <div class="mc-dosage-cell">
            <div class="mc-dosage-label">Dosis Dewasa</div>
            <div class="mc-dosage-value">${p.dosage.dewasa}</div>
          </div>
          <div class="mc-dosage-cell">
            <div class="mc-dosage-label">Dosis Anak</div>
            <div class="mc-dosage-value">${p.dosage.anak}</div>
          </div>
        </div>
      `:''}

      <div class="mc-info-block">
        <div class="mc-info-title">
          <span class="mc-info-icon">ℹ</span>
          Indikasi
        </div>
        <div class="mc-info-text">${p.indication||'-'}</div>
      </div>

      ${p.warning?`
        <div class="mc-info-block">
          <div class="mc-info-title">
            <span class="mc-info-icon" style="background:var(--amber-soft);color:var(--amber)">!</span>
            Peringatan
          </div>
          <div class="mc-info-text">${p.warning}</div>
        </div>
      `:''}

      <div class="mc-pdp-opt-label">
        <span>Pilih Kemasan</span>
        <span>${state.pdpVariant}</span>
      </div>
      <div class="mc-pdp-opts">
        ${Object.keys(p.variants).map(v=>{
          const stock=p.variants[v];
          return `<button class="mc-opt-chip ${state.pdpVariant===v?'active':''} ${stock<=0?'disabled':''}" onclick="selectPDPVariant('${v}',${stock})">${v} · ${stock<=0?'Habis':'Stok '+stock}</button>`;
        }).join('')}
      </div>
    </div>
    <div class="mc-pdp-cta">
      <button class="mc-pdp-fav" onclick="showToast('Ditambahkan ke favorit')">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--teal)" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
      </button>
      <button class="mc-btn-primary" onclick="addPDPToCart()" ${curStock<=0?'disabled':''}>
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
    body.innerHTML=`<div class="mc-empty"><div class="mc-empty-icon">🛒</div><div class="mc-empty-title">Keranjang kosong</div><div class="mc-empty-desc">Yuk pilih obat atau vitamin</div></div>`;
    foot.style.display='none'; return;
  }
  foot.style.display='block';
  let sub=0;
  body.innerHTML=state.cart.map((it,i)=>{
    const p=PRODUCTS.find(x=>x.id===it.id); if(!p) return '';
    sub+=p.price*it.qty;
    return `<div class="mc-cart-item">
      <div class="mc-cart-img">${p.emoji}</div>
      <div class="mc-cart-info">
        <div class="mc-cart-name">${p.name}</div>
        <div class="mc-cart-meta">${it.variant}${p.isRx?' · ℞ resep':''}</div>
        <div class="mc-cart-price">${rupiah(p.price*it.qty)}</div>
      </div>
      <div class="mc-cart-actions">
        <button class="mc-cart-remove" onclick="removeCartItem(${i})">Hapus</button>
        <div class="mc-qty">
          <button onclick="updateCartQty(${i},-1)">−</button>
          <span>${it.qty}</span>
          <button onclick="updateCartQty(${i},1)">+</button>
        </div>
      </div>
    </div>`;
  }).join('');
  const service=1000;
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
  else if(it.qty>stock){ it.qty=stock; showToast('Stok maksimal '+stock); }
  save(); renderCart();
}
function removeCartItem(idx){ state.cart.splice(idx,1); save(); renderCart(); showToast('Item dihapus'); }
function openCheckout(){
  if(!state.cart.length) return;
  const hasRx=state.cart.some(i=>PRODUCTS.find(p=>p.id===i.id).isRx);
  if(hasRx){
    showToast('Produk resep memerlukan verifikasi apoteker');
  }
  const orderId='MC-2026-'+Math.floor(1000+Math.random()*9000);
  const total=state.cart.reduce((s,i)=>s+PRODUCTS.find(p=>p.id===i.id).price*i.qty,0);
  const itemsList=state.cart.map(i=>{
    const p=PRODUCTS.find(x=>x.id===i.id);
    return {name:p.name,variant:i.variant,qty:i.qty};
  });
  ORDERS.unshift({id:orderId,customer:'Anda',total:total+1000,status:'preparing',time:'Baru saja',items:state.cart.length,payment:'GoPay',address:'Jakarta Selatan',items_list:itemsList,trackingStep:1,eta:'1 jam'});
  document.getElementById('orderIdDisplay').textContent=orderId;
  state.cart=[]; save(); renderCart(); toggleCart();
  document.getElementById('checkoutModal').classList.add('open');
}
function closeCheckout(){ document.getElementById('checkoutModal').classList.remove('open'); }

/* ==================== RESEP ==================== */
function openUploadResep(){ document.getElementById('resepModal').classList.add('open'); }
function closeUploadResep(){ document.getElementById('resepModal').classList.remove('open'); }
function submitResep(){
  RESEP.unshift({id:'RX-2026-'+String(Math.floor(100+Math.random()*900)),customer:'Anda',uploaded:'Baru saja',status:'pending',note:document.getElementById('resepNote').value||'-',items:'Menunggu verifikasi',doctor:'-'});
  closeUploadResep();
  updateBadges();
  showToast('Resep terkirim · Menunggu verifikasi apoteker');
}

/* ==================== ORDERS (customer) ==================== */
function toggleOrders(){
  const d=document.getElementById('ordersDrawer'), o=document.getElementById('ordersOverlay');
  if(d.classList.contains('open')){d.classList.remove('open');o.classList.remove('open');}
  else{ renderOrders(); d.classList.add('open'); o.classList.add('open'); }
}
function renderOrders(){
  const body=document.getElementById('ordersBody');
  body.innerHTML=ORDERS.slice(0,5).map(o=>{
    const map={preparing:['warning','Disiapkan'],shipping:['info','Dikirim'],delivered:['success','Tiba'],cancelled:['danger','Batal']};
    const [color,label]=map[o.status]||['neutral',o.status];
    return `<div class="mc-order">
      <div class="mc-order-head">
        <div>
          <div class="mc-order-id">${o.id}</div>
          <div class="mc-order-meta">${o.time} · ${o.payment}</div>
        </div>
        <span class="mc-badge ${color}"><span class="mc-badge-dot"></span>${label}</span>
      </div>
      <div class="mc-order-items">
        ${o.items_list.map(it=>`${it.name} · <b>${it.variant}</b> × ${it.qty}`).join('<br>')}
      </div>
      <div style="display:flex;justify-content:space-between;align-items:center">
        <div style="font-size:16px;font-weight:800">${rupiah(o.total)}</div>
        <button class="mc-btn primary" onclick="viewTracking('${o.id}')">Lacak</button>
      </div>
    </div>`;
  }).join('') || `<div class="mc-empty"><div class="mc-empty-icon">📋</div><div class="mc-empty-title">Belum ada pesanan</div></div>`;
}
function viewTracking(orderId){
  const o=ORDERS.find(x=>x.id===orderId); if(!o) return;
  const steps=['Diverifikasi apoteker','Disiapkan','Dikirim','Tiba di lokasi'];
  const stepMap={preparing:1,shipping:2,delivered:3,cancelled:0};
  const currentStep=stepMap[o.status]||0;
  const modal=document.createElement('div');
  modal.className='mc-modal open';
  modal.innerHTML=`
    <div class="mc-modal-box">
      <div class="mc-modal-title">Lacak Pesanan</div>
      <div class="mc-modal-sub">${o.id} · ${o.payment}</div>
      ${steps.map((s,i)=>{
        const done=i<currentStep;
        const active=i===currentStep;
        return `<div style="display:flex;gap:14px;padding:14px 0;border-bottom:1px solid var(--line)">
          <div style="width:36px;height:36px;border-radius:50%;background:${done?'var(--mint)':active?'var(--teal)':'var(--bg-2)'};color:${done||active?'#fff':'var(--ink-muted)'};display:flex;align-items:center;justify-content:center;font-weight:800;flex-shrink:0">${done?'✓':i+1}</div>
          <div style="flex:1">
            <div style="font-weight:${active?'800':'600'};font-size:13px">${s}</div>
            <div style="font-size:11px;color:var(--ink-muted);margin-top:3px">${done?'Selesai':active?'Berlangsung':'Menunggu'}</div>
          </div>
        </div>`;
      }).join('')}
      ${o.courier?`<div class="mc-alert info" style="margin-top:14px">🛵 Kurir: <b>${o.courier}</b></div>`:''}
      <button class="mc-btn-primary" style="margin-top:16px" onclick="this.closest('.mc-modal').remove()">Tutup</button>
    </div>`;
  modal.onclick=e=>{if(e.target===modal) modal.remove();};
  document.body.appendChild(modal);
}

/* ==================== SEARCH ==================== */
function openSearch(){
  document.getElementById('mcSearchOverlay').classList.add('open');
  setTimeout(()=>document.getElementById('mcSearchInput').focus(),280);
}
function closeSearch(){
  document.getElementById('mcSearchOverlay').classList.remove('open');
  document.getElementById('mcSearchInput').value='';
  document.getElementById('searchResults').innerHTML='';
  state.search=''; renderProducts();
}
function handleSearch(q){
  state.search=q;
  const res=document.getElementById('searchResults');
  if(!q.trim()){ res.innerHTML=''; return; }
  const found=getFiltered().slice(0,8);
  if(!found.length){ res.innerHTML=`<div class="mc-empty"><div class="mc-empty-icon">🔍</div><div class="mc-empty-desc">Tidak ada hasil</div></div>`; return; }
  res.innerHTML=found.map(p=>`
    <div class="mc-search-result" onclick="openPDP(${p.id});closeSearch()">
      <div style="width:56px;height:56px;background:${p.bg};border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:26px;flex-shrink:0">${p.emoji}</div>
      <div style="flex:1">
        <div style="font-size:10px;font-weight:800;color:var(--teal);text-transform:uppercase;letter-spacing:.08em">${p.brand}</div>
        <div style="font-size:14px;font-weight:700;margin-top:3px">${p.name}</div>
        ${p.isRx?`<div style="font-size:10px;color:var(--violet);font-weight:700;margin-top:2px">℞ Butuh resep</div>`:''}
      </div>
      <div style="font-size:14px;font-weight:800">${rupiah(p.price)}</div>
    </div>`).join('');
}
function quickSearch(q){ document.getElementById('mcSearchInput').value=q; handleSearch(q); }

/* ==================== CHAT ==================== */
let chatHistory=[
  {from:'bot',text:'Selamat datang di MediCare! Saya Apoteker Sari, S.Farm. Ada yang bisa saya bantu?',time:'10:24'},
  {from:'bot',text:'Anda bisa tanya tentang obat, interaksi, dosis, atau upload resep.',time:'10:24'}
];
function toggleChat(){
  document.getElementById('mcChat').classList.toggle('open');
  document.getElementById('mcChatFab').classList.toggle('hidden');
  if(document.getElementById('mcChat').classList.contains('open')) renderChat();
}
function renderChat(){
  const body=document.getElementById('mcChatBody');
  body.innerHTML=chatHistory.map(m=>`
    <div class="mc-chat-msg ${m.from}">${m.text}<div class="mc-chat-time">${m.time}</div></div>`).join('');
  body.scrollTop=body.scrollHeight;
}
function sendChat(){
  const input=document.getElementById('mcChatInput');
  const text=input.value.trim(); if(!text) return;
  const time=new Date().toTimeString().slice(0,5);
  chatHistory.push({from:'user',text,time});
  input.value=''; renderChat();
  setTimeout(()=>{
    const r=['Baik, saya bantu cek ya.','Paracetamol aman untuk ibu hamil trimester 2-3.','Untuk antibiotik wajib resep dokter ya.','Dosis dewasa 1 tablet 3x sehari setelah makan.','Anda punya alergi obat tertentu?','Ada lagi yang bisa saya bantu?'];
    chatHistory.push({from:'bot',text:r[Math.floor(Math.random()*r.length)],time});
    renderChat();
  },900);
}

/* ==================== ADMIN ==================== */
function renderAdmin(){ renderAdminTabs(); renderAdminContent(); updateBadges(); }
function renderAdminTabs(){
  document.querySelectorAll('.mc-sb-item').forEach(t=>t.classList.toggle('active',t.dataset.tab===state.adminTab));
  const meta=PAGE_META[state.adminTab]||PAGE_META.dashboard;
  document.getElementById('mcPageTitle').textContent=meta.title;
  document.getElementById('mcPageSub').textContent=meta.sub;
  document.getElementById('mcCrumb').textContent=meta.title;
}
function switchAdminTab(tab){
  state.adminTab=tab; renderAdminTabs(); renderAdminContent();
  if(window.innerWidth<1024){
    document.getElementById('mcSidebar').classList.remove('mobile-open');
  }
  window.scrollTo(0,0);
}
function renderAdminContent(){
  const c=document.getElementById('mcContent');
  switch(state.adminTab){
    case 'dashboard': c.innerHTML=adminDashboard(); break;
    case 'resep': c.innerHTML=adminResep(); break;
    case 'orders': c.innerHTML=adminOrders(); break;
    case 'products': c.innerHTML=adminProducts(); break;
    case 'batches': c.innerHTML=adminBatches(); break;
    case 'consult': c.innerHTML=adminConsult(); break;
    case 'customers': c.innerHTML=adminCustomers(); break;
    case 'pharmacists': c.innerHTML=adminPharmacists(); break;
    case 'reports': c.innerHTML=adminReports(); break;
    case 'settings': c.innerHTML=adminSettings(); break;
  }
}
function statusBadge(s){
  const map={preparing:'warning',shipping:'info',delivered:'success',cancelled:'danger',pending:'warning',verified:'success',rejected:'danger'};
  return map[s]||'neutral';
}
function statusLabel(s){
  return {preparing:'Disiapkan',shipping:'Dikirim',delivered:'Tiba',cancelled:'Batal',pending:'Pending',verified:'Terverifikasi',rejected:'Ditolak'}[s]||s;
}

function adminDashboard(){
  const hours=['08','10','12','14','16','18','20','22'];
  const data=[8,14,22,18,28,42,36,16];
  const max=Math.max(...data);
  const topProducts=PRODUCTS.slice().sort((a,b)=>b.sold-a.sold).slice(0,5);
  const pendingRx=RESEP.filter(r=>r.status==='pending').length;

  return `
    <div class="mc-kpi-grid">
      <div class="mc-kpi teal">
        <div class="mc-kpi-icon">💰</div>
        <div class="mc-kpi-label">Penjualan Hari Ini</div>
        <div class="mc-kpi-value teal">${rupiah(8450000+Math.floor(Math.random()*500000))}</div>
        <div class="mc-kpi-trend up">↑ 12% vs kemarin</div>
      </div>
      <div class="mc-kpi violet">
        <div class="mc-kpi-icon">℞</div>
        <div class="mc-kpi-label">Resep Pending</div>
        <div class="mc-kpi-value">${pendingRx}</div>
        <div class="mc-kpi-trend down">Perlu verifikasi</div>
      </div>
      <div class="mc-kpi blue">
        <div class="mc-kpi-icon">📋</div>
        <div class="mc-kpi-label">Order Aktif</div>
        <div class="mc-kpi-value">${ORDERS.filter(o=>o.status==='preparing'||o.status==='shipping').length}</div>
        <div class="mc-kpi-trend up">Normal</div>
      </div>
      <div class="mc-kpi mint">
        <div class="mc-kpi-icon">✓</div>
        <div class="mc-kpi-label">Compliance</div>
        <div class="mc-kpi-value">100%</div>
        <div class="mc-kpi-trend up">BPOM verified</div>
      </div>
    </div>

    ${pendingRx?`
      <div class="mc-panel">
        <div class="mc-panel-head">
          <div>
            <div class="mc-panel-title">⚠ Resep Menunggu Verifikasi</div>
            <div class="mc-panel-sub">${pendingRx} resep perlu direview apoteker</div>
          </div>
          <button class="mc-btn primary" onclick="switchAdminTab('resep')">Verifikasi →</button>
        </div>
      </div>
    `:''}

    <div class="mc-panel">
      <div class="mc-panel-head">
        <div>
          <div class="mc-panel-title">Penjualan Per 2 Jam</div>
          <div class="mc-panel-sub">Realtime hari ini</div>
        </div>
        <span class="mc-badge success"><span class="mc-badge-dot"></span>Live</span>
      </div>
      <div class="mc-panel-body">
        <div class="mc-chart">
          ${data.map((v,i)=>`<div class="mc-chart-bar ${v===max?'active':''}" style="height:${v/max*100}%"><b>${v}rb</b><span>${hours[i]}</span></div>`).join('')}
        </div>
        <div style="margin-top:26px"></div>
      </div>
    </div>

    <div class="mc-panel">
      <div class="mc-panel-head">
        <div><div class="mc-panel-title">Pesanan Terbaru</div></div>
        <button class="mc-btn outline" onclick="switchAdminTab('orders')">Semua →</button>
      </div>
      <div class="mc-panel-body-flush">
        ${ORDERS.slice(0,5).map(o=>`
          <div class="mc-list-item" style="padding:16px 20px">
            <div class="mc-list-avatar">${o.customer.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="mc-list-info">
              <div class="mc-list-name">${o.customer}</div>
              <div class="mc-list-sub">${o.id} · ${o.time} · ${rupiah(o.total)}</div>
            </div>
            <span class="mc-badge ${statusBadge(o.status)}"><span class="mc-badge-dot"></span>${statusLabel(o.status)}</span>
          </div>`).join('')}
      </div>
    </div>

    <div class="mc-panel">
      <div class="mc-panel-head"><div><div class="mc-panel-title">Produk Terlaris</div></div></div>
      <div class="mc-panel-body-flush">
        ${topProducts.map((p,i)=>`
          <div class="mc-list-item" style="padding:14px 20px">
            <div class="mc-list-avatar" style="background:var(--amber-soft);color:var(--amber)">${i+1}</div>
            <div class="mc-list-info">
              <div class="mc-list-name">${p.emoji} ${p.name}</div>
              <div class="mc-list-sub">${p.brand} · ${p.sold} terjual</div>
            </div>
            <div style="font-weight:800;color:var(--teal)">${rupiah(p.price)}</div>
          </div>`).join('')}
      </div>
    </div>
  `;
}

function adminResep(){
  const list=state.resepFilter==='all'?RESEP:RESEP.filter(r=>r.status===state.resepFilter);
  return `
    <button class="mc-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="mc-filters">
      ${['all','pending','verified','rejected'].map(f=>`
        <button class="mc-chip ${state.resepFilter===f?'active':''}" onclick="state.resepFilter='${f}';renderAdminContent()">${f==='all'?'Semua':statusLabel(f)}</button>`).join('')}
    </div>
    ${list.map(r=>`
      <div class="mc-order">
        <div class="mc-order-head">
          <div>
            <div class="mc-order-id">℞ ${r.id}</div>
            <div class="mc-order-meta">${r.customer} · ${r.uploaded} · Dokter: ${r.doctor}</div>
          </div>
          <span class="mc-badge ${statusBadge(r.status)}"><span class="mc-badge-dot"></span>${statusLabel(r.status)}</span>
        </div>
        <div class="mc-order-items">
          <b>Item resep:</b><br>${r.items}<br>
          ${r.note!=='-'?`<b>Catatan:</b> ${r.note}<br>`:''}
          ${r.pharmacist?`<b>Diverifikasi oleh:</b> ${r.pharmacist}`:''}
          ${r.reason?`<b>Alasan ditolak:</b> ${r.reason}`:''}
        </div>
        ${r.status==='pending'?`
          <div class="mc-order-actions">
            <button class="mc-btn mint" onclick="updateResep('${r.id}','verified')">✓ Verifikasi</button>
            <button class="mc-btn danger" onclick="updateResep('${r.id}','rejected')">✗ Tolak</button>
            <button class="mc-btn outline" onclick="showToast('Lihat foto resep')">Lihat Resep</button>
          </div>`:''}
      </div>`).join('') || '<div class="mc-empty"><div class="mc-empty-icon">℞</div><div class="mc-empty-title">Tidak ada resep</div></div>'}
  `;
}
function updateResep(id,status){
  const r=RESEP.find(x=>x.id===id); if(!r) return;
  r.status=status;
  if(status==='verified') r.pharmacist='Apoteker Sari';
  if(status==='rejected') r.reason='Foto tidak jelas';
  renderAdminContent(); updateBadges();
  showToast(id+' → '+statusLabel(status));
}

function adminOrders(){
  const list=state.orderFilter==='all'?ORDERS:ORDERS.filter(o=>o.status===state.orderFilter);
  return `
    <button class="mc-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="mc-filters">
      ${['all','preparing','shipping','delivered','cancelled'].map(f=>`
        <button class="mc-chip ${state.orderFilter===f?'active':''}" onclick="state.orderFilter='${f}';renderAdminContent()">${f==='all'?'Semua':statusLabel(f)}</button>`).join('')}
    </div>
    ${list.map(o=>`
      <div class="mc-order">
        <div class="mc-order-head">
          <div>
            <div class="mc-order-id">${o.id}</div>
            <div class="mc-order-meta">${o.time} · ${o.payment} · ${o.customer}</div>
          </div>
          <span class="mc-badge ${statusBadge(o.status)}"><span class="mc-badge-dot"></span>${statusLabel(o.status)}</span>
        </div>
        <div class="mc-order-items">${o.items_list.map(it=>`${it.name} · <b>${it.variant}</b> × ${it.qty}`).join('<br>')}</div>
        <div style="font-size:16px;font-weight:800">${rupiah(o.total)}</div>
        <div class="mc-order-actions">
          ${o.status==='preparing'?`<button class="mc-btn primary" onclick="updateOrder('${o.id}','shipping')">Kirim ke Kurir</button>`:''}
          ${o.status==='shipping'?`<button class="mc-btn mint" onclick="updateOrder('${o.id}','delivered')">Tandai Tiba</button>`:''}
          ${o.status!=='delivered'&&o.status!=='cancelled'?`<button class="mc-btn danger" onclick="updateOrder('${o.id}','cancelled')">Batalkan</button>`:''}
        </div>
      </div>`).join('') || '<div class="mc-empty"><div class="mc-empty-icon">📋</div><div class="mc-empty-title">Tidak ada pesanan</div></div>'}
  `;
}
function updateOrder(id,status){
  const o=ORDERS.find(x=>x.id===id); if(!o) return;
  o.status=status;
  renderAdminContent(); updateBadges();
  showToast(o.id+' → '+statusLabel(status));
}

function adminProducts(){
  return `
    <button class="mc-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;gap:12px;flex-wrap:wrap">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:600">${PRODUCTS.length} produk</div>
      <button class="mc-btn primary" onclick="openProductModal(null)">+ Produk Baru</button>
    </div>
    <div class="mc-panel">
      <div class="mc-tbl-wrap">
        <table class="mc-tbl">
          <thead><tr><th>Produk</th><th>BPOM</th><th>Harga</th><th>Stok</th><th>Resep</th><th></th></tr></thead>
          <tbody>
            ${PRODUCTS.map(p=>`
              <tr>
                <td><div style="display:flex;align-items:center;gap:10px"><span style="font-size:22px">${p.emoji}</span><div><div style="font-weight:700;font-size:12px">${p.name}</div><div style="font-size:10px;color:var(--ink-muted)">${p.brand}</div></div></div></td>
                <td><span class="mono" style="font-size:10px;color:var(--teal);font-weight:800">${p.bpom||'NA'}</span></td>
                <td style="font-weight:800">${rupiah(p.price)}</td>
                <td><span class="mc-badge ${p.stock<=20?'danger':p.stock<=60?'warning':'success'}">${p.stock}</span></td>
                <td>${p.isRx?'<span class="mc-badge violet">℞</span>':'<span class="mc-badge neutral">-</span>'}</td>
                <td style="white-space:nowrap">
                  <button class="mc-btn outline" onclick="openProductModal(${p.id})">Edit</button>
                  <button class="mc-btn danger" onclick="deleteProduct(${p.id})" style="margin-left:4px">Hapus</button>
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

function adminBatches(){
  return `
    <button class="mc-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="mc-alert warn">⚠ <div><b>3 produk</b> mendekati kadaluarsa dalam 30 hari. Segera lakukan rotasi stok.</div></div>
    ${PRODUCTS.slice(0,6).map(p=>{
      const batches=[
        {no:'B'+p.id+'240915',exp:'2026-09-15',qty:Math.floor(p.stock*0.4)},
        {no:'B'+p.id+'241120',exp:'2027-03-20',qty:Math.floor(p.stock*0.35)},
        {no:'B'+p.id+'250210',exp:'2027-08-10',qty:Math.floor(p.stock*0.25)}
      ];
      return `
      <div class="mc-panel">
        <div class="mc-panel-head">
          <div>
            <div class="mc-panel-title">${p.emoji} ${p.name}</div>
            <div class="mc-panel-sub">${p.brand} · ${batches.length} batch tersedia</div>
          </div>
        </div>
        <div class="mc-panel-body-flush">
          ${batches.map(b=>{
            const expDate=new Date(b.exp);
            const now=new Date();
            const days=Math.floor((expDate-now)/(24*3600*1000));
            return `
              <div class="mc-batch-row">
                <span class="mono" style="font-size:11px;font-weight:700">${b.no}</span>
                <span class="mono" style="font-size:11px;color:var(--ink-muted)">Exp: ${b.exp}</span>
                <input class="mc-batch-input" type="number" value="${b.qty}">
                <span class="mc-badge ${days<30?'danger':days<180?'warning':'success'}">${days<30?'Kritis':days<180?'Perhatian':'Aman'}</span>
              </div>`;
          }).join('')}
        </div>
      </div>`;
    }).join('')}`;
}

function adminConsult(){
  return `
    <button class="mc-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="mc-panel">
      <div class="mc-panel-head">
        <div>
          <div class="mc-panel-title">Konsultasi Aktif</div>
          <div class="mc-panel-sub">3 percakapan berlangsung</div>
        </div>
        <span class="mc-badge success"><span class="mc-badge-dot"></span>Online</span>
      </div>
      <div class="mc-panel-body-flush">
        ${[
          {name:'Andi Pratama',last:'Paracetamol aman untuk ibu hamil?',time:'2 mnt',unread:2},
          {name:'Siti Nurhaliza',last:'Resep saya sudah diverifikasi?',time:'15 mnt',unread:0},
          {name:'Budi Hartono',last:'Interaksi obat dengan vitamin C?',time:'1 jam',unread:1}
        ].map(c=>`
          <div class="mc-list-item" style="padding:16px 20px;cursor:pointer" onclick="showToast('Buka chat dengan ${c.name}')">
            <div class="mc-list-avatar">${c.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="mc-list-info">
              <div class="mc-list-name">${c.name}</div>
              <div class="mc-list-sub">${c.last}</div>
            </div>
            <div style="text-align:right">
              <div style="font-size:10px;color:var(--ink-muted);font-weight:600">${c.time}</div>
              ${c.unread?`<span class="mc-badge danger" style="margin-top:4px">${c.unread}</span>`:''}
            </div>
          </div>`).join('')}
      </div>
    </div>`;
}

function adminCustomers(){
  return `
    <button class="mc-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="mc-alert info">ℹ <div><b>Riwayat alergi</b> pelanggan ditampilkan untuk mencegah kesalahan pemberian obat.</div></div>
    <div class="mc-panel">
      <div class="mc-panel-head"><div><div class="mc-panel-title">Pelanggan Terdaftar</div><div class="mc-panel-sub">${CUSTOMERS.length} pelanggan</div></div></div>
      <div class="mc-panel-body-flush">
        ${CUSTOMERS.map(c=>`
          <div class="mc-list-item" style="padding:16px 20px">
            <div class="mc-list-avatar">${c.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="mc-list-info">
              <div class="mc-list-name">${c.name} <span class="mc-badge ${c.tier==='Platinum'?'info':c.tier==='Gold'?'warning':'neutral'}" style="margin-left:6px">${c.tier}</span></div>
              <div class="mc-list-sub">${c.phone} · ${c.orders} pesanan · Alergi: <b style="color:${c.allergies!=='-'?'var(--red)':'var(--ink-muted)'}">${c.allergies}</b></div>
            </div>
            <div style="font-weight:800;color:var(--teal);font-size:13px">${rupiah(c.spent)}</div>
          </div>`).join('')}
      </div>
    </div>`;
}

function adminPharmacists(){
  return `
    <button class="mc-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
      <div style="font-size:12px;color:var(--ink-muted);font-weight:600">${PHARMACISTS.length} anggota</div>
      <button class="mc-btn primary" onclick="openStaffModal(null)">+ Tambah</button>
    </div>
    <div class="mc-panel">
      <div class="mc-panel-head"><div><div class="mc-panel-title">Tenaga Kefarmasian</div><div class="mc-panel-sub">Semua dengan STR aktif</div></div></div>
      <div class="mc-panel-body-flush">
        ${PHARMACISTS.map(s=>`
          <div class="mc-list-item" style="padding:16px 20px">
            <div class="mc-list-avatar">${s.name.split(' ').map(n=>n[0]).join('').slice(0,2)}</div>
            <div class="mc-list-info">
              <div class="mc-list-name">${s.name}</div>
              <div class="mc-list-sub">${s.role} · STR: <span class="mono">${s.str}</span> · Shift ${s.shift}</div>
            </div>
            <span class="mc-badge ${s.status==='active'?'success':'neutral'}">${s.status}</span>
            <button class="mc-btn outline" onclick="openStaffModal(${s.id})">Edit</button>
          </div>`).join('')}
      </div>
    </div>
    <div class="mc-panel">
      <div class="mc-panel-head"><div><div class="mc-panel-title">Kepatuhan Regulasi</div></div></div>
      <div class="mc-panel-body">
        <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:14px">
          <div class="mc-dosage-cell">
            <div class="mc-dosage-label">Izin Apotek</div>
            <div class="mc-dosage-value">✓ Aktif</div>
          </div>
          <div class="mc-dosage-cell">
            <div class="mc-dosage-label">SIPA</div>
            <div class="mc-dosage-value">✓ Berlaku</div>
          </div>
          <div class="mc-dosage-cell">
            <div class="mc-dosage-label">STR Apoteker</div>
            <div class="mc-dosage-value">✓ Valid</div>
          </div>
          <div class="mc-dosage-cell">
            <div class="mc-dosage-label">BPOM Audit</div>
            <div class="mc-dosage-value">✓ 2025</div>
          </div>
        </div>
      </div>
    </div>`;
}

function adminReports(){
  return `
    <button class="mc-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="mc-kpi-grid" style="grid-template-columns:repeat(2,1fr)">
      <div class="mc-kpi teal"><div class="mc-kpi-icon">💰</div><div class="mc-kpi-label">Total Penjualan</div><div class="mc-kpi-value teal" style="font-size:20px">Rp124jt</div><div class="mc-kpi-trend up">↑ 18% MoM</div></div>
      <div class="mc-kpi blue"><div class="mc-kpi-icon">📋</div><div class="mc-kpi-label">Total Orders</div><div class="mc-kpi-value">3,842</div><div class="mc-kpi-trend up">↑ 22% MoM</div></div>
      <div class="mc-kpi violet"><div class="mc-kpi-icon">℞</div><div class="mc-kpi-label">Resep Diproses</div><div class="mc-kpi-value">487</div><div class="mc-kpi-trend up">↑ 15% MoM</div></div>
      <div class="mc-kpi mint"><div class="mc-kpi-icon">⭐</div><div class="mc-kpi-label">Kepuasan</div><div class="mc-kpi-value">4.9</div><div class="mc-kpi-trend up">↑ 0.1</div></div>
    </div>
    <div class="mc-panel">
      <div class="mc-panel-head"><div><div class="mc-panel-title">Performa Kategori</div></div></div>
      <div class="mc-panel-body">
        ${CATEGORIES.filter(c=>c.id!=='all').map(c=>{
          const total=PRODUCTS.filter(p=>p.cat===c.id).reduce((s,p)=>s+p.sold*p.price,0);
          const maxV=15000000;
          return `
            <div style="margin-bottom:14px">
              <div style="display:flex;justify-content:space-between;font-size:12px;font-weight:700;margin-bottom:6px">
                <span>${c.icon} ${c.name}</span>
                <span style="color:var(--teal)">${rupiah(total)}</span>
              </div>
              <div style="height:8px;background:var(--bg-2);border-radius:4px;overflow:hidden">
                <div style="height:100%;background:var(--teal);width:${Math.min(total/maxV*100,100)}%;border-radius:4px"></div>
              </div>
            </div>`;
        }).join('')}
      </div>
    </div>
    <div class="mc-panel">
      <div class="mc-panel-head"><div class="mc-panel-title">Export Laporan</div></div>
      <div class="mc-panel-body">
        <button class="mc-btn-primary" onclick="showToast('CSV diunduh')">Download CSV</button>
        <button class="mc-btn-secondary" onclick="showToast('PDF dibuat')">Download PDF</button>
        <button class="mc-btn-secondary" onclick="showToast('Laporan BPOM dibuat')">Export Laporan BPOM</button>
      </div>
    </div>`;
}

function adminSettings(){
  return `
    <button class="mc-btn-back" onclick="switchAdminTab('dashboard')">← Dashboard</button>
    <div class="mc-panel">
      <div class="mc-panel-head"><div><div class="mc-panel-title">Informasi Apotek</div><div class="mc-panel-sub">Data legal dan operasional</div></div></div>
      <div class="mc-panel-body">
        <div class="mc-form-group"><label class="mc-form-label">Nama Apotek</label><input class="mc-form-input" value="MediCare Pharmacy"></div>
        <div class="mc-form-group"><label class="mc-form-label">Alamat</label><input class="mc-form-input" value="Jl. Sudirman No. 45, Jakarta Selatan"></div>
        <div class="mc-form-row">
          <div class="mc-form-group"><label class="mc-form-label">Izin Apotek</label><input class="mc-form-input" value="IPA-2024-00123"></div>
          <div class="mc-form-group"><label class="mc-form-label">SIPA</label><input class="mc-form-input" value="SIPA-2024-0456"></div>
        </div>
        <div class="mc-form-row">
          <div class="mc-form-group"><label class="mc-form-label">Jam Buka</label><input class="mc-form-input" value="08:00"></div>
          <div class="mc-form-group"><label class="mc-form-label">Jam Tutup</label><input class="mc-form-input" value="22:00"></div>
        </div>
        <div class="mc-form-group"><label class="mc-form-label">Min. Gratis Ongkir</label><input class="mc-form-input" value="50000" type="number"></div>
        <button class="mc-btn-primary" onclick="showToast('Pengaturan disimpan')">Simpan Pengaturan</button>
      </div>
    </div>
    <div class="mc-panel">
      <div class="mc-panel-head"><div class="mc-panel-title">Metode Pembayaran</div></div>
      <div class="mc-panel-body-flush">
        ${[
          {icon:'📱',name:'GoPay / OVO / Dana',sub:'E-Wallet',status:'active'},
          {icon:'🏦',name:'Transfer Bank',sub:'BCA, Mandiri, BNI',status:'active'},
          {icon:'💳',name:'Kartu Kredit',sub:'Visa, Mastercard',status:'active'},
          {icon:'🛡',name:'BPJS Kesehatan',sub:'Klaim otomatis',status:'active'},
          {icon:'💵',name:'COD',sub:'Bayar di tempat',status:'active'}
        ].map(m=>`
          <div class="mc-list-item" style="padding:14px 20px">
            <div class="mc-list-avatar" style="background:var(--teal-soft);color:var(--teal);font-size:16px">${m.icon}</div>
            <div class="mc-list-info">
              <div class="mc-list-name">${m.name}</div>
              <div class="mc-list-sub">${m.sub}</div>
            </div>
            <span class="mc-badge success">Aktif</span>
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
    document.getElementById('pmPrice').value=p.price;
    document.getElementById('pmOld').value=p.old||'';
    document.getElementById('pmCat').value=p.cat;
    document.getElementById('pmBpom').value=p.bpom||'';
    document.getElementById('pmSpec').value=p.spec||'';
    document.getElementById('pmVariants').value=Object.keys(p.variants).join(',');
  } else {
    state.editingProduct=null;
    document.getElementById('productModalTitle').textContent='Produk Baru';
    ['pmName','pmBrand','pmPrice','pmOld','pmBpom','pmSpec','pmVariants'].forEach(f=>document.getElementById(f).value='');
  }
  document.getElementById('productModal').classList.add('open');
}
function closeProductModal(){ document.getElementById('productModal').classList.remove('open'); }
function saveProduct(){
  const name=document.getElementById('pmName').value.trim();
  const brand=document.getElementById('pmBrand').value.trim()||'Generic';
  const price=+document.getElementById('pmPrice').value;
  const old=+document.getElementById('pmOld').value||0;
  const cat=document.getElementById('pmCat').value;
  const bpom=document.getElementById('pmBpom').value.trim()||'NA';
  const spec=document.getElementById('pmSpec').value.trim()||'-';
  const variantNames=document.getElementById('pmVariants').value.split(',').map(s=>s.trim()).filter(Boolean);
  if(!name||!price||!variantNames.length){ showToast('Lengkapi data'); return; }
  const variants={};
  variantNames.forEach(v=>variants[v]=100);
  if(state.editingProduct){
    const p=PRODUCTS.find(x=>x.id===state.editingProduct);
    Object.assign(p,{name,brand,price,old,cat,bpom,spec,variants,stock:Object.values(variants).reduce((s,v)=>s+v,0)});
    showToast('Produk diperbarui');
  } else {
    const id=Math.max(...PRODUCTS.map(p=>p.id))+1;
    PRODUCTS.push({id,name,brand,cat,price,old,variants,emoji:'💊',bg:'#e0f5f4',rating:5.0,sold:0,stock:Object.values(variants).reduce((s,v)=>s+v,0),isRx:false,isNew:true,bpom,spec,indication:'-',desc:'Produk baru',variants});
    showToast('Produk ditambahkan');
  }
  closeProductModal(); renderAdminContent(); renderProducts();
}

function openStaffModal(id){
  if(id){
    const s=PHARMACISTS.find(x=>x.id===id);
    state.editingStaff=id;
    document.getElementById('staffModalTitle').textContent='Edit Tenaga Kefarmasian';
    document.getElementById('sfName').value=s.name;
    document.getElementById('sfEmail').value=s.email;
    document.getElementById('sfRole').value=s.role;
    document.getElementById('sfStr').value=s.str;
  } else {
    state.editingStaff=null;
    document.getElementById('staffModalTitle').textContent='Tambah Tenaga Kefarmasian';
    document.getElementById('sfName').value='';
    document.getElementById('sfEmail').value='';
    document.getElementById('sfStr').value='';
  }
  document.getElementById('staffModal').classList.add('open');
}
function closeStaffModal(){ document.getElementById('staffModal').classList.remove('open'); }
function saveStaff(){
  const name=document.getElementById('sfName').value.trim();
  const email=document.getElementById('sfEmail').value.trim();
  const role=document.getElementById('sfRole').value;
  const str=document.getElementById('sfStr').value.trim()||'-';
  if(!name||!email){ showToast('Lengkapi data'); return; }
  if(state.editingStaff){
    const s=PHARMACISTS.find(x=>x.id===state.editingStaff);
    Object.assign(s,{name,email,role,str});
    showToast('Data diperbarui');
  } else {
    PHARMACISTS.push({id:Date.now(),name,email,role,str,status:'active',shift:'Pagi'});
    showToast('Staff ditambahkan');
  }
  closeStaffModal(); renderAdminContent();
}

/* NAV */
function navTo(nav){
  if(nav==='admin'){ setMode('admin'); return; }
  if(nav==='search'){ openSearch(); return; }
  document.querySelectorAll('.mc-nav-item').forEach(n=>n.classList.toggle('active',n.dataset.nav===nav));
  if(nav==='home') window.scrollTo({top:0,behavior:'smooth'});
}

/* INIT */
renderCategories();
renderProducts();
updateBadges();
initMcSidebar();
</script>
@endverbatim
@include('demo.toko-online.partials.demo-bar')
</body>
</html>