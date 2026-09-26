<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LPK Maju Bersama — Demo Sistem Kursus & Pelatihan (FTR-Coder)</title>
<style>
:root{
  --ink:#0f2a43; --ink2:#3a5169; --mut:#6b7d90; --line:#e2e8ee; --bg:#f3f6f9; --card:#fff;
  --teal:#0e7c86; --teal2:#0a5f67; --tealbg:#e2f3f4;
  --hv:#f5b81c; --hvbg:#fff5d6; --hvink:#4a3500;
  --green:#1a9560; --greenbg:#e1f5ec; --red:#d24343; --redbg:#fdeaea; --blue:#2f6fd0; --bluebg:#e7effc;
  --barh:52px;
}
*{box-sizing:border-box;margin:0}
html,body{min-height:100%}
body{font-family:"Segoe UI",system-ui,-apple-system,Roboto,"Helvetica Neue",Arial,sans-serif;background:var(--bg);color:var(--ink);font-size:14.5px;line-height:1.5}
button,input,select,textarea{font:inherit;color:inherit}
h1,h2,h3,h4{line-height:1.2;letter-spacing:-.015em}
button{cursor:pointer}
:focus-visible{outline:3px solid #7ab8ff;outline-offset:2px}
.sp{flex:1}
.muted{color:var(--mut)} .sm{font-size:12.5px} .right{text-align:right} .b{font-weight:700}

/* ===== Demo bar ===== */
#demobar{position:sticky;top:0;z-index:60;min-height:var(--barh);background:#08182a;color:#cfe0ee;display:flex;gap:12px;align-items:center;padding:8px 16px;flex-wrap:wrap;font-size:13px}
#demobar .tag{font-weight:800;color:#fff;font-size:14px;display:flex;gap:8px;align-items:center}
#demobar .tag i{font-style:normal;background:var(--hv);color:var(--hvink);border-radius:6px;padding:1px 8px;font-size:11.5px;font-weight:800}
.seg{display:inline-flex;background:#12304c;border-radius:10px;padding:3px}
.seg button{border:0;background:transparent;color:#9db6cb;padding:6px 14px;border-radius:8px;font-weight:600}
.seg button.on{background:var(--hv);color:var(--hvink)}
#demobar select{background:#12304c;color:#fff;border:1px solid #244763;border-radius:8px;padding:6px 8px}
.dbtn{background:transparent;border:1px solid #2a4c69;color:#cfe0ee;border-radius:8px;padding:6px 12px}
.dbtn:hover{background:#12304c}
.dbtn.on{background:#12304c;border-color:var(--hv);color:#fff}

/* ===== Komponen umum ===== */
.btn{border:1px solid transparent;border-radius:10px;padding:0 16px;min-height:44px;font-weight:650;display:inline-flex;align-items:center;justify-content:center;gap:8px;background:var(--ink);color:#fff;transition:background .15s}
.btn:hover{background:#1b3f61}
.btn.primary{background:var(--teal)} .btn.primary:hover{background:var(--teal2)}
.btn.hv{background:var(--hv);color:var(--hvink)} .btn.hv:hover{background:#e6a90b}
.btn.ghost{background:#fff;border-color:#cdd8e2;color:var(--ink)} .btn.ghost:hover{background:#f0f4f8}
.btn.ok{background:var(--green)} .btn.ok:hover{background:#127a4b}
.btn.danger{background:#fff;border-color:#efb8b8;color:var(--red)} .btn.danger:hover{background:var(--redbg)}
.btn.sm{min-height:34px;padding:0 12px;font-size:13px;border-radius:8px}
.btn[disabled]{opacity:.45;pointer-events:none}
.lnk{background:none;border:0;color:var(--teal);font-weight:650;padding:4px 0;font-size:inherit}
.lnk.red{color:var(--red)}
.card{background:var(--card);border:1px solid var(--line);border-radius:14px;padding:20px}
.card h3{font-size:16px;margin-bottom:12px}
.bd{display:inline-flex;align-items:center;gap:6px;padding:2px 10px;border-radius:99px;font-size:12px;font-weight:700;white-space:nowrap}
.bd::before{content:"";width:7px;height:7px;border-radius:50%;background:currentColor}
.bd.gray{background:#eceff3;color:#55657a} .bd.amber{background:var(--hvbg);color:#8a5e00} .bd.green{background:var(--greenbg);color:#127a4b}
.bd.red{background:var(--redbg);color:#b32e2e} .bd.blue{background:var(--bluebg);color:#2458a8} .bd.teal{background:var(--tealbg);color:var(--teal2)}
label{display:block;font-size:12.5px;font-weight:650;color:var(--ink2)}
input,select,textarea{width:100%;margin-top:4px;min-height:44px;border:1px solid #cbd6e0;border-radius:10px;padding:8px 12px;background:#fff;font-weight:400;color:var(--ink)}
textarea{min-height:80px;resize:vertical}
input:focus,select:focus,textarea:focus{border-color:var(--teal);outline:none;box-shadow:0 0 0 3px #0e7c8625}
.fg{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
.fg .full{grid-column:1/-1}
.tw{overflow-x:auto;border:1px solid var(--line);border-radius:12px;background:#fff}
table{width:100%;border-collapse:collapse;font-size:13.5px}
th{text-align:left;font-size:12.5px;color:var(--mut);font-weight:700;padding:11px 14px;background:#f7f9fb;border-bottom:1px solid var(--line);white-space:nowrap}
td{padding:12px 14px;border-bottom:1px solid #eef2f5;vertical-align:middle}
tr:last-child td{border-bottom:0}
tbody tr:hover{background:#fafcfd}
.bar{height:8px;border-radius:99px;background:#e6edf3;overflow:hidden;min-width:90px}
.bar>i{display:block;height:100%;background:var(--teal);border-radius:99px}
.bar.warn>i{background:#e69b00} .bar.full>i{background:var(--red)}
.toolbar{display:flex;gap:10px;align-items:center;flex-wrap:wrap;margin-bottom:14px}
.toolbar input,.toolbar select{margin:0;width:auto;min-width:180px}
.pager{display:flex;gap:6px;align-items:center;justify-content:flex-end;margin-top:12px}
.pager button{min-width:36px;height:36px;border:1px solid #cdd8e2;border-radius:8px;background:#fff}
.pager button.on{background:var(--ink);color:#fff;border-color:var(--ink)}
.empty{padding:36px;text-align:center;color:var(--mut)}
.note{background:var(--hvbg);border:1px solid #f0d788;color:#6b4d00;border-radius:10px;padding:10px 14px;font-size:13px}
.note.info{background:var(--bluebg);border-color:#bcd2f3;color:#22497f}
.note.bad{background:var(--redbg);border-color:#efb8b8;color:#8f2525}
.tabs{display:flex;gap:4px;border-bottom:1px solid var(--line);margin-bottom:16px;overflow-x:auto}
.tabs button{border:0;background:none;padding:10px 14px;font-weight:650;color:var(--mut);border-bottom:3px solid transparent;white-space:nowrap}
.tabs button.on{color:var(--ink);border-color:var(--hv)}
.tabs .n{background:#e6edf3;border-radius:99px;padding:0 7px;font-size:11.5px;margin-left:4px}

/* Stripe hazard */
.hazard{height:8px;background:repeating-linear-gradient(-45deg,var(--hv) 0 12px,#0f2a43 12px 24px)}

/* ===== Modal ===== */
.overlay{position:fixed;inset:0;background:#08182acc;z-index:100;display:grid;place-items:center;padding:16px;overflow:auto}
.modal{background:#fff;border-radius:16px;width:min(720px,100%);max-height:calc(100vh - 32px);overflow:auto;padding:26px;position:relative;box-shadow:0 30px 80px #0006}
.modal.wide{width:min(900px,100%)} .modal.narrow{width:min(520px,100%)}
.modal h2{font-size:20px;margin-bottom:4px;padding-right:30px}
.modal .x{position:absolute;right:14px;top:12px;width:36px;height:36px;border:0;background:#eef2f6;border-radius:50%;font-size:20px;line-height:1}
.modal .foot{display:flex;gap:10px;justify-content:flex-end;margin-top:20px;flex-wrap:wrap}
#toasts{position:fixed;right:16px;bottom:16px;z-index:200;display:grid;gap:8px}
.toast{background:var(--ink);color:#fff;padding:12px 16px;border-radius:10px;font-weight:600;box-shadow:0 10px 30px #0004;max-width:360px;border-left:5px solid var(--hv)}
.toast.ok{border-color:#3ccf8e} .toast.err{border-color:#ff6b6b}

/* ===== PORTAL ===== */
.phonewrap{padding:16px 0}
.phone{width:392px;height:calc(100vh - 92px);min-height:620px;margin:0 auto;border:11px solid #08182a;border-radius:40px;overflow:auto;background:var(--bg);box-shadow:0 20px 60px #0003}
.portal{container-type:inline-size;container-name:portal;background:var(--bg);min-height:calc(100vh - var(--barh))}
.phone .portal{min-height:100%}
.p-head{background:#fff;border-bottom:1px solid var(--line);position:sticky;top:var(--barh);z-index:20}
.phone .p-head{top:0}
.p-head .in{max-width:1120px;margin:0 auto;padding:10px 20px;display:flex;align-items:center;gap:18px}
.brand{display:flex;gap:10px;align-items:center;font-weight:800;font-size:17px;cursor:pointer;letter-spacing:-.01em}
.brand small{display:block;font-weight:500;font-size:11px;color:var(--mut);letter-spacing:0}
.logo{width:36px;height:36px;border-radius:9px;background:var(--ink);color:var(--hv);display:grid;place-items:center;font-weight:900;font-size:13px;position:relative;overflow:hidden}
.logo::after{content:"";position:absolute;left:0;right:0;bottom:0;height:5px;background:repeating-linear-gradient(-45deg,var(--hv) 0 5px,var(--ink) 5px 10px)}
.p-nav{display:flex;gap:2px}
.p-nav button{border:0;background:none;padding:9px 14px;border-radius:9px;font-weight:650;color:var(--ink2)}
.p-nav button.on{background:var(--tealbg);color:var(--teal2)}
.who{display:flex;align-items:center;gap:10px}
.av{width:34px;height:34px;border-radius:50%;background:var(--teal);color:#fff;display:grid;place-items:center;font-weight:700}
.wt b{display:block;font-size:13px;line-height:1.2} .wt small{color:var(--mut);font-size:11.5px}
.wrap{max-width:1120px;margin:0 auto;padding:24px 20px 40px}
.hero{background:var(--ink);color:#fff;border-radius:20px;overflow:hidden;position:relative}
.hero .hz{height:10px}
.hero .hb{display:grid;grid-template-columns:1.15fr 1fr;gap:32px;padding:38px 36px;align-items:center}
.hero h1{font-size:38px;font-weight:800;margin-bottom:14px;letter-spacing:-.025em}
.hero p{color:#b9cde0;max-width:46ch;font-size:16px;margin-bottom:22px}
.hero .cta{display:flex;gap:10px;flex-wrap:wrap}
.board{background:#0a2036;border:1px solid #23496b;border-radius:14px;padding:14px 16px}
.board h4{font-size:13px;color:#8fb0cc;font-weight:650;margin-bottom:8px}
.brow{display:grid;grid-template-columns:70px 1fr auto;gap:10px;align-items:center;padding:9px 0;border-top:1px solid #1b3c5a;font-size:13.5px}
.brow:first-of-type{border-top:0}
.brow .d{font-weight:800;color:var(--hv);font-variant-numeric:tabular-nums}
.brow .s{font-size:12px;color:#8fb0cc;display:block}
.seat{font-weight:800;font-variant-numeric:tabular-nums;text-align:right}
.seat small{display:block;font-weight:500;color:#8fb0cc;font-size:11px}
.sec-h{display:flex;align-items:end;justify-content:space-between;margin:34px 0 14px;gap:12px;flex-wrap:wrap}
.sec-h h2{font-size:24px}
.g3{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
.g2{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}
.tc{background:#fff;border:1px solid var(--line);border-radius:14px;overflow:hidden;display:flex;flex-direction:column}
.tc .cv{height:112px;position:relative;display:flex;align-items:flex-end;padding:12px 14px;color:#fff;font-weight:800;font-size:34px;letter-spacing:-.03em;overflow:hidden}
.tc .cv span{position:relative;z-index:1;opacity:.95}
.tc .cv::before{content:"";position:absolute;inset:0;background:repeating-linear-gradient(-45deg,#ffffff14 0 14px,transparent 14px 28px)}
.tc .cv .kt{position:absolute;right:12px;top:12px;font-size:11.5px;background:#0009;padding:2px 10px;border-radius:99px;font-weight:700;letter-spacing:0}
.tc .bd2{padding:16px;display:flex;flex-direction:column;gap:8px;flex:1}
.tc h3{font-size:16.5px}
.tc .meta{display:flex;gap:14px;color:var(--mut);font-size:13px;flex-wrap:wrap}
.tc .price{font-size:19px;font-weight:800}
.tc .price small{font-weight:500;color:var(--mut);font-size:12px}
.tc .nx{background:#f6f9fb;border-radius:10px;padding:9px 12px;font-size:13px;display:flex;justify-content:space-between;gap:8px;align-items:center;flex-wrap:wrap}
.feat{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:26px}
.feat div{padding:16px;border:1px dashed #c5d3df;border-radius:12px;background:#fbfdfe}
.feat b{display:block;margin-bottom:4px}
.auth{max-width:460px;margin:10px auto}
.regl{display:grid;grid-template-columns:1fr 340px;gap:20px;align-items:start}
.sticky{position:sticky;top:calc(var(--barh) + 76px)}
.phone .sticky{position:static}
.sch{display:grid;gap:8px}
.sch label.opt{display:flex;gap:12px;align-items:center;border:1.5px solid #d3dde6;border-radius:12px;padding:12px 14px;cursor:pointer;background:#fff;color:var(--ink);font-size:14px}
.sch label.opt input{width:auto;min-height:0;margin:0}
.sch label.opt.sel{border-color:var(--teal);background:var(--tealbg)}
.sch label.opt.dis{opacity:.5;cursor:not-allowed}
.pcard{border:1px solid var(--line);background:#fbfdfe;border-radius:12px;padding:14px;margin-bottom:12px}
.pcard .ph{display:flex;justify-content:space-between;margin-bottom:8px}
.sum{display:grid;gap:8px;font-size:14px}
.sum div{display:flex;justify-content:space-between;gap:10px}
.sum .tot{border-top:2px solid var(--ink);padding-top:10px;margin-top:4px;font-size:20px;font-weight:800}
.rcard{background:#fff;border:1px solid var(--line);border-radius:14px;padding:16px 18px;display:grid;grid-template-columns:1fr auto;gap:8px 14px;align-items:center;margin-bottom:12px}
.steps{display:flex;list-style:none;padding:0;gap:0;margin:6px 0 4px}
.steps li{flex:1;text-align:center;position:relative;font-size:12.5px;color:var(--mut);font-weight:650}
.steps li::before{content:attr(data-n);display:grid;place-items:center;width:30px;height:30px;border-radius:50%;background:#e6edf3;margin:0 auto 6px;font-weight:800;position:relative;z-index:1;color:var(--mut)}
.steps li::after{content:"";position:absolute;top:14px;left:50%;width:100%;height:3px;background:#e6edf3}
.steps li:last-child::after{display:none}
.steps li.done{color:var(--ink)} .steps li.done::before{background:var(--teal);color:#fff;content:"✓"} .steps li.done::after{background:var(--teal)}
.steps li.cur{color:var(--ink)} .steps li.cur::before{background:var(--hv);color:var(--hvink)}
.steps li.bad::before{background:var(--red);color:#fff;content:"!"}
.pay3{display:grid;grid-template-columns:repeat(3,1fr);gap:12px}
.pay3>div{border:1px solid var(--line);border-radius:12px;padding:14px;background:#fbfdfe;font-size:13px}
.pay3 b{display:block;font-size:14px;margin-bottom:4px}
.pay3 .num{font-size:16px;font-weight:800;letter-spacing:.02em;margin:4px 0;font-variant-numeric:tabular-nums}
.prev{border:1px solid var(--line);border-radius:12px;background:#f0f4f7;padding:10px;text-align:center}
.prev img{width:100%;max-width:400px;height:300px;object-fit:contain;display:block;margin:0 auto}
.drop{border:2px dashed #b7c7d6;border-radius:12px;padding:22px;text-align:center;background:#fafcfd}
.drop input{border:0;min-height:0;padding:0;background:none}
.foot-p{text-align:center;color:var(--mut);font-size:12.5px;padding:24px 20px 40px}

/* ===== STAFF ===== */
.staff{container-type:inline-size;container-name:staff;display:grid;grid-template-columns:238px 1fr;min-height:calc(100vh - var(--barh))}
.side{background:var(--ink);color:#c7d8e8;padding:18px 12px;position:sticky;top:var(--barh);height:calc(100vh - var(--barh));overflow:auto}
.side .brand{color:#fff;padding:0 8px 16px;border-bottom:1px solid #22415e;margin-bottom:12px;cursor:default}
.side .brand small{color:#8fb0cc}
.side .logo{background:var(--hv);color:var(--hvink)} .side .logo::after{background:repeating-linear-gradient(-45deg,var(--ink) 0 5px,var(--hv) 5px 10px)}
.nav{display:grid;gap:3px}
.nav button{display:flex;gap:11px;align-items:center;border:0;background:none;color:#c7d8e8;text-align:left;padding:10px 12px;border-radius:9px;font-weight:600;min-height:44px;width:100%}
.nav button:hover{background:#17385a}
.nav button.on{background:var(--hv);color:var(--hvink)}
.nav button.lock{opacity:.5}
.nav svg{width:18px;height:18px;flex:none;fill:none;stroke:currentColor;stroke-width:2;stroke-linecap:round;stroke-linejoin:round}
.nav .lk{margin-left:auto;font-size:11px}
.side .me{margin-top:18px;padding:12px;background:#12304c;border-radius:12px;font-size:12.5px}
.side .me b{color:#fff;display:block;font-size:13.5px}
.main{padding:24px 28px 44px;min-width:0}
.ph1{display:flex;justify-content:space-between;align-items:flex-start;gap:14px;margin-bottom:18px;flex-wrap:wrap}
.ph1 h1{font-size:25px}
.ph1 p{color:var(--mut);margin-top:2px}
.kpis{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-bottom:16px}
.kpi{background:#fff;border:1px solid var(--line);border-radius:14px;padding:16px 18px;border-top:4px solid var(--teal)}
.kpi.a{border-top-color:var(--hv)} .kpi.g{border-top-color:var(--green)} .kpi.k{border-top-color:var(--ink)}
.kpi small{color:var(--mut);font-weight:650;display:block}
.kpi b{font-size:27px;letter-spacing:-.02em;display:block;margin-top:2px;font-variant-numeric:tabular-nums}
.kpi span{font-size:12px;color:var(--mut)}
.dash2{display:grid;grid-template-columns:1.4fr 1fr;gap:16px;margin-bottom:16px}
.hb{display:grid;grid-template-columns:150px 1fr 34px;gap:10px;align-items:center;margin:9px 0;font-size:13px}
.hb .bar{height:12px}
.donut{width:150px;height:150px;border-radius:50%;margin:4px auto 14px;display:grid;place-items:center;position:relative}
.donut::after{content:"";position:absolute;inset:26px;background:#fff;border-radius:50%}
.donut b{position:relative;z-index:1;font-size:26px}
.leg{display:grid;gap:6px;font-size:13px}
.leg div{display:flex;gap:8px;align-items:center}
.leg i{width:11px;height:11px;border-radius:3px}
.mx td,.mx th{text-align:center} .mx td:first-child,.mx th:first-child{text-align:left}
.mx .y{color:var(--green);font-weight:800} .mx .n{color:#b9c4cf}
.f403{max-width:520px;margin:50px auto;text-align:center}
.f403 .big{font-size:70px;font-weight:900;color:var(--red);letter-spacing:-.04em}
.rv{display:grid;grid-template-columns:1fr 1fr;gap:20px}
.kv{display:grid;grid-template-columns:120px 1fr;gap:6px 12px;font-size:13.5px}
.kv dt{color:var(--mut)} .kv dd{margin:0;font-weight:600}

/* Kwitansi */
.rc{border:2px solid var(--ink);padding:26px 28px;position:relative;background:#fff;color:#111;font-family:Georgia,"Times New Roman",serif}
.rc .rh{display:flex;justify-content:space-between;gap:16px;border-bottom:3px double var(--ink);padding-bottom:12px;margin-bottom:14px;flex-wrap:wrap}
.rc .rh h3{font-family:"Segoe UI",system-ui,sans-serif;font-size:17px}
.rc .rh .t{text-align:right;font-family:"Segoe UI",system-ui,sans-serif}
.rc .rh .t b{font-size:22px;letter-spacing:.04em;display:block}
.rc dl{display:grid;grid-template-columns:150px 1fr;gap:9px 10px;font-size:14.5px}
.rc dt{color:#555} .rc dd{margin:0;font-weight:600}
.rc .tb{font-style:italic;background:#f6f6f6;padding:6px 10px;border-left:4px solid var(--hv);font-weight:600}
.rc .tot{margin:18px 0 6px;display:flex;justify-content:space-between;align-items:end;gap:16px;flex-wrap:wrap}
.rc .tot .amt{border:2px solid var(--ink);padding:8px 18px;font-size:24px;font-weight:800;font-family:"Segoe UI",system-ui,sans-serif}
.rc .sg{text-align:center;font-size:13.5px;min-width:170px}
.rc .sg .ln{height:56px;border-bottom:1px solid #222;margin-bottom:4px}
.stamp{position:absolute;right:34px;top:98px;border:4px solid #1a9560;color:#1a9560;font-weight:900;font-size:26px;padding:2px 14px;transform:rotate(-12deg);border-radius:8px;letter-spacing:.1em;opacity:.8;font-family:"Segoe UI",system-ui,sans-serif}

/* ===== Responsive via container query ===== */
@container portal (max-width:760px){
  .hero .hb{grid-template-columns:1fr;padding:24px 20px;gap:22px} .hero h1{font-size:28px}
  .g3,.feat{grid-template-columns:1fr} .g2,.regl,.pay3{grid-template-columns:1fr}
  .p-head .in{flex-wrap:wrap;gap:8px 12px;padding:10px 14px} .p-nav{order:3;width:100%;overflow-x:auto} .wt{display:none}
  .wrap{padding:16px 14px 30px} .sticky{position:static} .fg{grid-template-columns:1fr}
  .rcard{grid-template-columns:1fr} .sec-h h2{font-size:21px} .steps li{font-size:11px}
}
@container staff (max-width:860px){
  .staff{grid-template-columns:1fr}
  .side{position:static;height:auto;padding:10px}
  .nav{grid-auto-flow:column;grid-auto-columns:max-content;overflow-x:auto}
  .side .me,.side .brand{display:none}
  .kpis{grid-template-columns:repeat(2,1fr)} .dash2,.rv{grid-template-columns:1fr} .main{padding:16px 14px 30px}
  .fg{grid-template-columns:1fr}
}
@media (max-width:640px){.fg{grid-template-columns:1fr}.rc dl{grid-template-columns:1fr}}

@media print{
  body{background:#fff}
  #demobar,#toasts,.modal .x,.noprint{display:none!important}
  #stage>*:not(.overlay){display:none!important}
  .overlay{position:static!important;background:none!important;padding:0!important;display:block!important}
  .modal{box-shadow:none!important;max-height:none!important;overflow:visible!important;width:auto!important;padding:0!important}
}
@media (prefers-reduced-motion:reduce){*{transition:none!important}}
</style>
</head>
<body>
<div id="demobar"></div>
<main id="stage"></main>
<div id="toasts"></div>
<div id="sessionLockOverlay" class="overlay" style="display:none">
  <div class="modal narrow" style="text-align:center">
    <div style="font-size:34px;margin-bottom:8px">⏰</div>
    <h2 style="margin-bottom:6px">Sesi Demo Berakhir</h2>
    <p class="muted" style="margin-bottom:20px">Waktu demo kamu sudah habis. Muat ulang halaman untuk memulai sesi baru dengan token.</p>
    <button class="btn primary" style="width:100%;justify-content:center" onclick="location.reload()">Muat Ulang Halaman</button>
  </div>
</div>

<script>
/* =====================================================================
   LPK Maju Bersama — Demo Sistem Kursus & Pelatihan (PT Maju Jaya Multi Teknologi - FTR Coder)
   Semua data berupa data contoh, tersimpan di browser (localStorage).
   ===================================================================== */
const $ = s => document.querySelector(s);
const esc = s => String(s ?? '').replace(/[&<>"']/g, c => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]));
const rp = n => 'Rp ' + Math.round(n).toLocaleString('id-ID');
const sum = (a, f) => a.reduce((t, x) => t + f(x), 0);
const NOW = new Date(2026, 8, 22);              // tanggal demo tetap: 22 Sep 2026
const TODAY = '2026-09-22';
const D = s => new Date(s + 'T00:00:00');
const fd = s => D(s).toLocaleDateString('id-ID', {day:'numeric', month:'short', year:'numeric'});
const fr = (a, b) => { const x = D(a), y = D(b); if (a === b) return fd(a);
  if (x.getMonth() === y.getMonth()) return x.getDate() + '–' + y.getDate() + ' ' + y.toLocaleDateString('id-ID', {month:'short', year:'numeric'});
  return fd(a) + ' – ' + fd(b); };

function terbilang(n){
  const s=['','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan','sepuluh','sebelas']; n=Math.floor(n);
  if(n<12)return s[n]; if(n<20)return terbilang(n-10)+' belas';
  if(n<100)return terbilang(Math.floor(n/10))+' puluh'+(n%10?' '+terbilang(n%10):'');
  if(n<200)return 'seratus'+(n-100?' '+terbilang(n-100):'');
  if(n<1000)return terbilang(Math.floor(n/100))+' ratus'+(n%100?' '+terbilang(n%100):'');
  if(n<2000)return 'seribu'+(n-1000?' '+terbilang(n-1000):'');
  if(n<1e6)return terbilang(Math.floor(n/1000))+' ribu'+(n%1000?' '+terbilang(n%1000):'');
  if(n<1e9)return terbilang(Math.floor(n/1e6))+' juta'+(n%1e6?' '+terbilang(n%1e6):'');
  return terbilang(Math.floor(n/1e9))+' miliar'+(n%1e9?' '+terbilang(n%1e9):'');
}

/* ---------- Bukti transfer contoh (digambar via canvas) ---------- */
function makeBukti(nominal, bank, ref, tgl){
  const c = document.createElement('canvas'); c.width = 480; c.height = 640;
  const x = c.getContext('2d'); if(!x) return '';
  x.fillStyle = '#fff'; x.fillRect(0,0,480,640);
  x.fillStyle = bank === 'QRIS' ? '#c8102e' : '#0b4ea2'; x.fillRect(0,0,480,96);
  x.fillStyle = '#fff'; x.font = 'bold 28px sans-serif'; x.fillText(bank === 'QRIS' ? 'QRIS' : 'm-Banking ' + bank, 28, 52);
  x.font = '15px sans-serif'; x.fillText('Bukti Transaksi Berhasil', 28, 78);
  x.fillStyle = '#1a9560'; x.beginPath(); x.arc(240, 158, 30, 0, 7); x.fill();
  x.strokeStyle = '#fff'; x.lineWidth = 6; x.beginPath(); x.moveTo(226,158); x.lineTo(237,170); x.lineTo(257,146); x.stroke();
  x.fillStyle = '#222'; x.textAlign = 'center'; x.font = '15px sans-serif'; x.fillText('Total Transfer', 240, 224);
  x.font = 'bold 34px sans-serif'; x.fillText(rp(nominal), 240, 264); x.textAlign = 'left';
  const rows = [['Tanggal', fd(tgl)], ['No. Referensi', ref], ['Penerima', 'PT Maju Jaya Multi Teknologi - FTR Coder'], ['Rekening Tujuan', '•••• •••• 7890'], ['Berita', 'Pembayaran training']];
  rows.forEach((r,i) => { const y = 326 + i*50; x.fillStyle = '#888'; x.font = '14px sans-serif'; x.fillText(r[0], 32, y);
    x.fillStyle = '#111'; x.font = 'bold 15px sans-serif'; x.textAlign = 'right'; x.fillText(r[1], 448, y); x.textAlign = 'left';
    x.strokeStyle = '#e5e5e5'; x.lineWidth = 1; x.beginPath(); x.moveTo(32,y+14); x.lineTo(448,y+14); x.stroke(); });
  x.fillStyle = '#aaa'; x.font = '12px sans-serif'; x.fillText('Contoh bukti transfer untuk keperluan demo', 32, 618);
  return c.toDataURL('image/jpeg', .72);
}

/* ---------- Data awal ---------- */
const NAMES=['Agus Salim','Budi Hartono','Citra Dewi','Dedi Kurniawan','Eko Prasetyo','Fitri Handayani','Gunawan Saputra','Hendra Wijaya','Indah Permata','Joko Susilo','Kartika Sari','Lukman Hakim','Maya Anggraini','Nanda Putra','Oki Setiawan','Putri Ayu','Rudi Hermawan','Sri Wahyuni','Teguh Santoso','Umar Faruq','Vina Melati','Wahyu Nugroho','Yusuf Ramadhan','Zainal Abidin'];
const JAB=['Welder','Fitter','Safety Officer','Supervisor','Operator Crane','Foreman','Teknisi','Staff HSE'];
const mkP=(n,o)=>Array.from({length:n},(_,i)=>({nama:NAMES[(o+i)%NAMES.length],jabatan:JAB[(o+i)%JAB.length],jk:(o+i)%3===1?'Perempuan':'Laki-laki',email:'',hp:''}));
const COORD=['Budi Santoso','Dewi Lestari','Andi Prasetyo'];

function seed(){
  const T=[
    {id:'t1',nama:'Basic Safety Training (BST)',kat:'K3',hari:3,harga:2500000,hue:196,init:'BST',desk:'Dasar keselamatan kerja untuk area industri, galangan, dan offshore.'},
    {id:'t2',nama:'Ahli K3 Umum',kat:'Sertifikasi',hari:5,harga:6500000,hue:222,init:'K3',desk:'Persiapan sertifikasi Ahli K3 Umum sesuai regulasi Kemnaker.'},
    {id:'t3',nama:'Operator Forklift',kat:'Operator',hari:3,harga:3000000,hue:30,init:'FL',desk:'Pengoperasian forklift yang aman, pemeriksaan harian, dan praktik lapangan.'},
    {id:'t4',nama:'Working at Height',kat:'K3',hari:2,harga:2200000,hue:266,init:'WAH',desk:'Pekerjaan di ketinggian: perencanaan, APD, dan prosedur penyelamatan.'},
    {id:'t5',nama:'Confined Space Entry',kat:'K3',hari:2,harga:2800000,hue:340,init:'CSE',desk:'Izin kerja, pengujian gas, dan prosedur masuk ruang terbatas.'},
    {id:'t6',nama:'First Aid & Fire Fighting',kat:'Tanggap Darurat',hari:2,harga:1800000,hue:8,init:'FA',desk:'Pertolongan pertama dan pemadaman api awal di tempat kerja.'}
  ];
  const J=[
    {id:'s1',tid:'t1',mulai:'2026-10-05',selesai:'2026-10-07',lokasi:'Batam Centre',kuota:30,coord:COORD[0]},
    {id:'s2',tid:'t1',mulai:'2026-11-09',selesai:'2026-11-11',lokasi:'Batam Centre',kuota:30,coord:COORD[0]},
    {id:'s3',tid:'t2',mulai:'2026-10-12',selesai:'2026-10-16',lokasi:'Nagoya, Batam',kuota:25,coord:COORD[1]},
    {id:'s4',tid:'t3',mulai:'2026-10-19',selesai:'2026-10-21',lokasi:'Batu Ampar',kuota:15,coord:COORD[2]},
    {id:'s5',tid:'t4',mulai:'2026-10-26',selesai:'2026-10-27',lokasi:'Batam Centre',kuota:20,coord:COORD[2]},
    {id:'s6',tid:'t5',mulai:'2026-11-02',selesai:'2026-11-03',lokasi:'Batu Ampar',kuota:12,coord:COORD[1]},
    {id:'s7',tid:'t6',mulai:'2026-10-08',selesai:'2026-10-09',lokasi:'Nagoya, Batam',kuota:40,coord:COORD[0]},
    {id:'s8',tid:'t3',mulai:'2026-09-14',selesai:'2026-09-16',lokasi:'Batu Ampar',kuota:20,coord:COORD[2]},
    {id:'s9',tid:'t4',mulai:'2026-09-21',selesai:'2026-09-23',lokasi:'Batam Centre',kuota:20,coord:COORD[1]}
  ];
  const C=[
    {id:'c1',email:'hrd@batammarine.co.id',pass:'demo123',jenis:'perusahaan',nama:'Sinta Marlina',perusahaan:'PT Batam Marine Works',alamat:'Kawasan Industri Batu Ampar, Batam',telp:'0778 411 200'},
    {id:'c2',email:'k3@nusaoffshore.co.id',pass:'demo123',jenis:'perusahaan',nama:'Hari Purnomo',perusahaan:'PT Nusa Offshore Indonesia',alamat:'Jl. Laksamana Bintan, Batam',telp:'0778 462 118'},
    {id:'c3',email:'rina@mail.com',pass:'demo123',jenis:'individu',nama:'Rina Wulandari',perusahaan:'',alamat:'',telp:'0812 7700 1234'},
    {id:'c4',email:'hse@sinargalangan.co.id',pass:'demo123',jenis:'perusahaan',nama:'Tomi Wijaya',perusahaan:'PT Sinar Galangan',alamat:'Tanjung Uncang, Batam',telp:'0778 391 552'}
  ];
  // [klien, jadwal, jml peserta, offset nama, tgl daftar, status, metode, bukti tgl, alasan]
  const R=[
    ['c2','s8',12,0,'2026-08-25','diterima','Transfer Bank'],
    ['c1','s8',6,4,'2026-08-28','diterima','Transfer Bank'],
    ['c2','s3',5,2,'2026-09-02','diterima','Transfer Bank'],
    ['c4','s1',8,6,'2026-09-03','diterima','QRIS'],
    ['c4','s4',6,9,'2026-09-05','diterima','Virtual Account'],
    ['c3','s9',1,11,'2026-09-10','diterima','QRIS'],
    ['c1','s5',4,3,'2026-09-15','ditolak','Transfer Bank','Nominal transfer tidak sesuai tagihan. Mohon transfer sesuai total dan upload ulang bukti.'],
    ['c1','s1',10,12,'2026-09-18','menunggu','Transfer Bank'],
    ['c2','s6',10,5,'2026-09-19','menunggu','Transfer Bank'],
    ['c4','s3',12,14,'2026-09-20','menunggu','Virtual Account'],
    ['c3','s7',1,7,'2026-09-20','belum_bayar'],
    ['c1','s2',5,8,'2026-09-21','belum_bayar']
  ];
  let kw=0;
  const regs=R.map((x,i)=>{
    const j=J.find(a=>a.id===x[1]), t=T.find(a=>a.id===j.tid), total=t.harga*x[2];
    const r={id:'r'+(i+1),no:'REG-2026-'+String(i+1).padStart(4,'0'),clientId:x[0],scheduleId:x[1],peserta:mkP(x[2],x[3]),total,tgl:x[4],status:x[5],metode:x[6]||null,bukti:null,tglBayar:null,alasan:x[7]||null,kwt:null};
    if(x[5]!=='belum_bayar'){ const bt=x[4]; r.tglBayar=bt; r.bukti=makeBukti(total,(x[6]==='QRIS'?'QRIS':x[6]==='Virtual Account'?'Mandiri':'BCA'),'TRX'+(880000+i*137),bt); }
    if(x[5]==='diterima'){ kw++; r.kwt={no:'KWT/2026/'+String(kw).padStart(4,'0'),tgl:x[4],by:'Maya (Accounting)'}; }
    return r;
  });
  const users=[['Faozaro Batee','admin','Aktif'],['Nadia Rahma','registration','Aktif'],['Budi Santoso','coordinator','Aktif'],['Maya Lestari','accounting','Aktif'],['Ibu Direktur','management','Aktif']];
  return {trainings:T,jadwal:J,clients:C,regs,users};
}

/* ---------- State ---------- */
const KEY='ftrcoder_demo_kursus_v1';
let DB;
function load(){ try{ const s=localStorage.getItem(KEY); if(s) return JSON.parse(s);}catch(e){} return null; }
function save(){ try{ localStorage.setItem(KEY,JSON.stringify(DB)); }catch(e){} }
DB = load() || seed(); save();

let S={mode:'portal',role:'admin',spage:'dashboard',ppage:'home',clientId:null,phone:false,modal:null,draft:null,params:{},upload:null,after:null,fails:0,authTab:'in',regJenis:'perusahaan',
       f:{q:'',st:'all',pg:1,pay:'menunggu',jtab:'jenis'}};

/* ---------- Helper domain ---------- */
const client=()=>DB.clients.find(c=>c.id===S.clientId)||null;
const trn=id=>DB.trainings.find(t=>t.id===id);
const jdw=id=>DB.jadwal.find(j=>j.id===id);
const clt=id=>DB.clients.find(c=>c.id===id);
const terisi=j=>sum(DB.regs.filter(r=>r.scheduleId===j.id),r=>r.peserta.length);
const sisa=j=>j.kuota-terisi(j);
const stJ=j=>NOW<D(j.mulai)?'Akan datang':NOW>D(j.selesai)?'Selesai':'Berjalan';
const namaKlien=c=>c.jenis==='perusahaan'?c.perusahaan:c.nama;
const nextJ=tid=>DB.jadwal.filter(j=>j.tid===tid&&stJ(j)==='Akan datang').sort((a,b)=>a.mulai.localeCompare(b.mulai))[0];
const upcoming=()=>DB.jadwal.filter(j=>stJ(j)!=='Selesai').sort((a,b)=>a.mulai.localeCompare(b.mulai));
const badge=(t,c)=>`<span class="bd ${c}">${t}</span>`;
const PAYL={belum_bayar:['Belum bayar','gray'],menunggu:['Menunggu konfirmasi','amber'],diterima:['Diterima','green'],ditolak:['Ditolak','red']};
const payB=(st,cl)=>{const m=PAYL[st];let t=m[0];if(cl){if(st==='belum_bayar')t='Menunggu pembayaran';if(st==='diterima')t='Lunas';}return badge(t,m[1])};
const kuotaChip=j=>{const s=sisa(j);return s<=0?badge('Penuh','red'):s<=Math.ceil(j.kuota*.2)?badge('Sisa '+s+' kursi','amber'):badge('Sisa '+s+' kursi','green')};
const nextRegNo=()=>'REG-2026-'+String(DB.regs.length+1).padStart(4,'0');
const nextKwt=()=>'KWT/2026/'+String(DB.regs.filter(r=>r.kwt).length+1).padStart(4,'0');
const hitungTotal=(tid,n)=>trn(tid).harga*n;   // di sistem asli: dihitung di backend

function toast(msg,type){const d=document.createElement('div');d.className='toast '+(type||'');d.textContent=msg;$('#toasts').appendChild(d);setTimeout(()=>d.remove(),3800)}
function toTop(){window.scrollTo(0,0);const p=$('.phone');if(p)p.scrollTop=0}
function setPath(o,p,v){const k=p.split('.');let x=o;for(let i=0;i<k.length-1;i++)x=x[k[i]];x[k[k.length-1]]=v}
function blankP(c){return {nama:c?c.nama:'',jabatan:'',jk:'Laki-laki',email:c?c.email:'',hp:c?c.telp:''}}
function initDraft(tid){const c=client();S.draft={tid:tid||'',sid:'',peserta:[blankP(c&&c.jenis==='individu'?c:null)]};
  if(tid){const n=nextJ(tid);if(n&&sisa(n)>0)S.draft.sid=n.id}}
function pending(){return DB.regs.filter(r=>r.status==='menunggu').length}

/* ---------- Ikon ---------- */
const IC={
 dashboard:'<rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>',
 training:'<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>',
 registrasi:'<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',
 pembayaran:'<rect x="1" y="4" width="22" height="16" rx="2"/><path d="M1 10h22"/>',
 kwitansi:'<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8"/>',
 laporan:'<path d="M12 20V10M18 20V4M6 20v-4"/>',
 pengguna:'<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>'
};
const ico=k=>`<svg viewBox="0 0 24 24">${IC[k]}</svg>`;

/* ---------- Role ---------- */
const ROLES={
 admin:{n:'Administrator',pages:['dashboard','training','registrasi','pembayaran','kwitansi','laporan','pengguna'],who:'Faozaro Batee'},
 registration:{n:'Registration',pages:['registrasi','training'],who:'Nadia Rahma'},
 coordinator:{n:'Training Coordinator',pages:['training','registrasi'],who:'Budi Santoso'},
 accounting:{n:'Accounting',pages:['dashboard','pembayaran','kwitansi','laporan'],who:'Maya Lestari'},
 management:{n:'Management',pages:['dashboard','laporan'],who:'Ibu Direktur'}
};
const CAN={trainingEdit:['admin','coordinator'],regCreate:['admin','registration'],verify:['admin','accounting'],exp:['admin','accounting']};
const can=a=>CAN[a].includes(S.role);
const PAGES=[['dashboard','Dashboard'],['training','Training & Jadwal'],['registrasi','Registrasi Peserta'],['pembayaran','Pembayaran'],['kwitansi','Kwitansi'],['laporan','Laporan & Export'],['pengguna','Pengguna & Hak Akses']];
const PTITLE=Object.fromEntries(PAGES);

/* =====================================================================
   RENDER
   ===================================================================== */
function bar(){
  $('#demobar').innerHTML=`
   <div class="tag"><i>DEMO</i> LPK Maju Bersama — Kursus &amp; Pelatihan</div>
   <div class="seg" role="tablist"><button data-a="mode" data-v="portal" class="${S.mode==='portal'?'on':''}">Portal Klien</button><button data-a="mode" data-v="staff" class="${S.mode==='staff'?'on':''}">Panel Staff</button></div>
   ${S.mode==='staff'?`<label style="color:#9db6cb;font-size:12.5px;display:flex;align-items:center;gap:8px">Masuk sebagai
      <select id="roleSel" style="margin:0;min-height:34px;width:auto">${Object.entries(ROLES).map(([k,v])=>`<option value="${k}" ${S.role===k?'selected':''}>${v.n}</option>`).join('')}</select></label>`
    :`<button class="dbtn ${S.phone?'on':''}" data-a="phone">${S.phone?'Tampilan HP: ON':'Lihat tampilan HP'}</button>`}
   <div class="sp"></div>
   <div class="muted sm" id="timerDisplay" style="color:#9db6cb"></div>
   <button class="dbtn" data-a="guide">Panduan demo</button>
   <button class="dbtn" data-a="reset">Reset data</button>
   <a class="dbtn" href="/" style="text-decoration:none;display:inline-block">← Kembali ke Website</a>`;
}

function render(){
  const ph=$('.phone'), pst=ph?ph.scrollTop:0;
  bar();
  $('#stage').innerHTML=(S.mode==='portal'?portal():staff())+modalHTML();
  const p2=$('.phone'); if(p2)p2.scrollTop=pst;
}

/* ===================== PORTAL KLIEN ===================== */
function portal(){
  const html=`<div class="portal">${pHead()}<div class="wrap">${pBody()}</div><div class="foot-p">© 2026 LPK Maju Bersama — PT Maju Jaya Multi Teknologi - FTR Coder · Batam, Kepulauan Riau<br>Data pada demo ini hanya contoh.</div></div>`;
  return S.phone?`<div class="phonewrap"><div class="phone">${html}</div></div>`:html;
}
function pHead(){
  const c=client();
  return `<header class="p-head"><div class="in">
   <div class="brand" data-a="pnav" data-p="home"><div class="logo">LM</div><div>LPK Maju Bersama<small>PT Maju Jaya Multi Teknologi - FTR Coder</small></div></div>
   <nav class="p-nav"><button data-a="pnav" data-p="home" class="${S.ppage==='home'?'on':''}">Beranda</button>
     <button data-a="pnav" data-p="riwayat" class="${['riwayat','detail'].includes(S.ppage)?'on':''}">Riwayat pendaftaran</button></nav>
   <div class="sp"></div>
   ${c?`<div class="who"><div class="av">${esc(namaKlien(c)[0])}</div><div class="wt"><b>${esc(namaKlien(c))}</b><small>${c.jenis==='perusahaan'?'Akun perusahaan':'Akun individu'}</small></div><button class="btn ghost sm" data-a="logout">Keluar</button></div>`
        :`<button class="btn primary sm" data-a="pnav" data-p="login">Masuk / Daftar</button>`}
  </div></header>`;
}
function pBody(){ return ({home:pHome,login:pLogin,daftar:pDaftar,riwayat:pRiwayat,detail:pDetail})[S.ppage](); }

function pHome(){
  const up=upcoming().filter(j=>stJ(j)==='Akan datang').slice(0,4);
  return `
  <section class="hero"><div class="hz hazard"></div><div class="hb">
    <div>
      <h1>Pelatihan K3 dan operator bersertifikat, daftar dari mana saja</h1>
      <p>Pilih jadwal, daftarkan seluruh tim sekaligus, unggah bukti bayar, dan unduh kwitansi resmi. Semuanya dari satu halaman.</p>
      <div class="cta"><button class="btn hv" data-a="goto" data-id="katalog">Lihat katalog training</button><button class="btn" style="background:#1b4266" data-a="pnav" data-p="login">Masuk / Daftar akun</button></div>
    </div>
    <div class="board"><h4>Jadwal terdekat</h4>
      ${up.map(j=>{const s=sisa(j);return `<div class="brow"><div class="d">${D(j.mulai).toLocaleDateString('id-ID',{day:'2-digit',month:'short'})}</div><div>${esc(trn(j.tid).nama)}<span class="s">${esc(j.lokasi)} · ${trn(j.tid).hari} hari</span></div><div class="seat">${s}<small>kursi tersisa</small></div></div>`}).join('')}
    </div></div></section>

  <div class="feat">
    <div><b>Daftar sendiri, 24 jam</b><span class="muted">Individu maupun perusahaan. Perusahaan bisa mendaftarkan banyak peserta dalam satu transaksi.</span></div>
    <div><b>Status terlihat langsung</b><span class="muted">Pantau dari menunggu pembayaran sampai lunas, tanpa perlu menghubungi admin.</span></div>
    <div><b>Kwitansi digital</b><span class="muted">Setelah pembayaran dikonfirmasi, kwitansi PDF langsung bisa diunduh.</span></div>
  </div>

  <div class="sec-h" id="katalog"><div><h2>Katalog training</h2><span class="muted">Harga per peserta. Kuota diperbarui otomatis.</span></div></div>
  <div class="g3">${DB.trainings.map(t=>{const n=nextJ(t.id);return `
    <article class="tc"><div class="cv" style="background:linear-gradient(135deg,hsl(${t.hue} 62% 30%),hsl(${t.hue} 55% 20%))"><span class="kt">${esc(t.kat)}</span><span>${esc(t.init)}</span></div>
     <div class="bd2"><h3>${esc(t.nama)}</h3><div class="muted sm">${esc(t.desk)}</div>
      <div class="meta"><span>${t.hari} hari</span></div>
      <div class="price">${rp(t.harga)} <small>/ peserta</small></div>
      <div class="nx">${n?`<span><b>${fr(n.mulai,n.selesai)}</b><br><span class="muted">${esc(n.lokasi)}</span></span>${kuotaChip(n)}`:`<span class="muted">Belum ada jadwal terbuka</span>`}</div>
      <div style="margin-top:auto"><button class="btn primary" style="width:100%" ${n&&sisa(n)>0?'':'disabled'} data-a="daftar" data-tid="${t.id}">Daftar training ini</button></div></div></article>`}).join('')}</div>`;
}

function pLogin(){
  const reg=S.authTab==='up';
  return `<div class="auth"><div class="card">
   <div class="tabs"><button class="${!reg?'on':''}" data-a="authtab" data-v="in">Masuk</button><button class="${reg?'on':''}" data-a="authtab" data-v="up">Daftar akun baru</button></div>
   ${!reg?`
     <div style="display:grid;gap:12px">
      <label>Email<input id="lEmail" type="email" autocomplete="off" placeholder="nama@perusahaan.co.id"></label>
      <label>Kata sandi<input id="lPass" type="password" placeholder="••••••••"></label>
      <button class="btn primary" data-a="doLogin">Masuk</button>
      <div class="note info sm"><b>Akun demo</b> (klik untuk mengisi otomatis)<br>
        <button class="lnk" data-a="fill" data-e="hrd@batammarine.co.id">Perusahaan: PT Batam Marine Works</button><br>
        <button class="lnk" data-a="fill" data-e="rina@mail.com">Individu: Rina Wulandari</button><br><span class="muted">Kata sandi: demo123</span></div>
      <div class="muted sm">Keamanan: akun terkunci sementara setelah 5 kali salah kata sandi.</div>
     </div>`:`
     <div style="display:grid;gap:12px">
      <div class="fg"><label style="grid-column:1/-1">Jenis klien</label>
        <button class="btn ${S.regJenis==='perusahaan'?'primary':'ghost'}" data-a="jenis" data-v="perusahaan">Perusahaan</button>
        <button class="btn ${S.regJenis==='individu'?'primary':'ghost'}" data-a="jenis" data-v="individu">Individu</button></div>
      ${S.regJenis==='perusahaan'?`<label>Nama perusahaan<input id="rPers"></label>`:''}
      <label>${S.regJenis==='perusahaan'?'Nama PIC / penanggung jawab':'Nama lengkap'}<input id="rNama"></label>
      <label>Email<input id="rEmail" type="email"></label>
      <label>No. HP<input id="rTelp" type="tel" inputmode="tel"></label>
      ${S.regJenis==='perusahaan'?`<label>Alamat<input id="rAlamat"></label>`:''}
      <label>Kata sandi<input id="rPass" type="password"></label>
      <button class="btn primary" data-a="doRegister">Buat akun</button>
      <div class="muted sm">Pendaftaran publik dilindungi rate limit dan anti-spam pada Paket Premium.</div>
     </div>`}
  </div></div>`;
}

function peserta(multi){
  return S.draft.peserta.map((p,i)=>`<div class="pcard"><div class="ph"><b>Peserta ${i+1}</b>${multi&&i>0?`<button class="lnk red" data-a="delP" data-i="${i}">Hapus</button>`:''}</div>
    <div class="fg">
     <label class="full">Nama lengkap *<input data-draft="peserta.${i}.nama" value="${esc(p.nama)}" placeholder="Sesuai KTP"></label>
     <label>Jabatan<input data-draft="peserta.${i}.jabatan" value="${esc(p.jabatan)}"></label>
     <label>Jenis kelamin<select data-draft="peserta.${i}.jk"><option ${p.jk==='Laki-laki'?'selected':''}>Laki-laki</option><option ${p.jk==='Perempuan'?'selected':''}>Perempuan</option></select></label>
     <label>Email<input type="email" data-draft="peserta.${i}.email" value="${esc(p.email)}"></label>
     <label>No. HP<input type="tel" inputmode="tel" data-draft="peserta.${i}.hp" value="${esc(p.hp)}"></label>
    </div></div>`).join('')+(multi?`<button class="btn ghost" data-a="addP">+ Tambah peserta</button>`:'');
}
function schedOpts(tid,rr){
  const list=DB.jadwal.filter(j=>j.tid===tid&&stJ(j)==='Akan datang').sort((a,b)=>a.mulai.localeCompare(b.mulai));
  if(!tid)return `<div class="muted">Pilih training terlebih dahulu.</div>`;
  if(!list.length)return `<div class="note">Belum ada jadwal yang dibuka untuk training ini.</div>`;
  return `<div class="sch">${list.map(j=>{const full=sisa(j)<=0;return `<label class="opt ${S.draft.sid===j.id?'sel':''} ${full?'dis':''}"><input type="radio" name="sid" data-draft="sid" data-rr="1" value="${j.id}" ${S.draft.sid===j.id?'checked':''} ${full?'disabled':''}>
     <span style="flex:1"><b>${fr(j.mulai,j.selesai)}</b><br><span class="muted sm">${esc(j.lokasi)} · Koordinator ${esc(j.coord)}</span></span>${kuotaChip(j)}</label>`}).join('')}</div>`;
}
function pDaftar(){
  const c=client(),dr=S.draft,multi=c.jenis==='perusahaan',t=dr.tid?trn(dr.tid):null,j=dr.sid?jdw(dr.sid):null,n=dr.peserta.length;
  return `<div class="sec-h" style="margin-top:0"><div><h2>Pendaftaran training</h2><span class="muted">Akun ${c.jenis==='perusahaan'?'perusahaan: Anda dapat mendaftarkan banyak peserta sekaligus.':'individu: satu peserta per pendaftaran.'}</span></div></div>
  <div class="regl"><div style="display:grid;gap:16px">
    <div class="card"><h3>1. Pilih training</h3><label>Jenis training<select data-draft="tid" data-rr="1"><option value="">— Pilih training —</option>${DB.trainings.map(x=>`<option value="${x.id}" ${dr.tid===x.id?'selected':''}>${esc(x.nama)} — ${rp(x.harga)}</option>`).join('')}</select></label></div>
    <div class="card"><h3>2. Pilih jadwal</h3>${schedOpts(dr.tid)}</div>
    <div class="card"><h3>3. Data peserta</h3>${peserta(multi)}</div>
  </div>
  <aside class="card sticky"><h3>Ringkasan biaya</h3><div class="sum">
     <div><span class="muted">Training</span><b style="text-align:right">${t?esc(t.nama):'—'}</b></div>
     <div><span class="muted">Jadwal</span><b>${j?fr(j.mulai,j.selesai):'—'}</b></div>
     <div><span class="muted">Jumlah peserta</span><b>${n}</b></div>
     <div><span class="muted">Harga / peserta</span><b>${t?rp(t.harga):'—'}</b></div>
     <div class="tot"><span>Total</span><span>${t?rp(hitungTotal(t.id,n)):'—'}</span></div></div>
     <div class="muted sm" style="margin:10px 0 14px">Total dihitung ulang dan divalidasi oleh server saat pendaftaran dikirim.</div>
     <button class="btn hv" style="width:100%" data-a="submitReg">Daftar &amp; lanjut ke pembayaran</button></aside></div>`;
}

function pRiwayat(){
  const c=client(),list=DB.regs.filter(r=>r.clientId===c.id).sort((a,b)=>b.tgl.localeCompare(a.tgl)||b.no.localeCompare(a.no));
  return `<div class="sec-h" style="margin-top:0"><div><h2>Riwayat pendaftaran</h2><span class="muted">Status diperbarui otomatis saat staff memproses pembayaran Anda.</span></div><button class="btn hv" data-a="pnav" data-p="home">+ Daftar training baru</button></div>
  ${list.length?list.map(r=>{const j=jdw(r.scheduleId),t=trn(j.tid);return `<div class="rcard"><div><b>${esc(t.nama)}</b> <span class="muted sm">· ${r.no}</span><div class="muted sm">${fr(j.mulai,j.selesai)} · ${r.peserta.length} peserta · ${rp(r.total)}</div></div>
    <div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">${payB(r.status,1)}<button class="btn ghost sm" data-a="detail" data-id="${r.id}">Lihat detail</button></div></div>`}).join(''):`<div class="card empty">Belum ada pendaftaran. Pilih training di beranda untuk mulai mendaftar.</div>`}`;
}

function qrSvg(seed){let s=seed;const rnd=()=>(s=(s*1664525+1013904223)%4294967296)/4294967296,n=25;let r='';
  for(let y=0;y<n;y++)for(let x=0;x<n;x++){const f=(x<8&&y<8)||(x>n-9&&y<8)||(x<8&&y>n-9);if(f)continue;if(rnd()>.5)r+=`<rect x="${x}" y="${y}" width="1" height="1"/>`}
  const fp=(x,y)=>`<rect x="${x}" y="${y}" width="7" height="7"/><rect x="${x+1}" y="${y+1}" width="5" height="5" fill="#fff"/><rect x="${x+2}" y="${y+2}" width="3" height="3"/>`;
  return `<svg viewBox="-1 -1 ${n+2} ${n+2}" width="92" height="92" style="display:block;margin:6px 0"><rect x="-1" y="-1" width="${n+2}" height="${n+2}" fill="#fff"/><g fill="#0f2a43">${r}${fp(0,0)}${fp(n-7,0)}${fp(0,n-7)}</g></svg>`;}

function pDetail(){
  const r=DB.regs.find(x=>x.id===S.params.id); if(!r)return `<div class="card empty">Pendaftaran tidak ditemukan.</div>`;
  const c=client(); if(r.clientId!==c.id)return `<div class="card empty"><b>Akses ditolak.</b> Pendaftaran ini bukan milik akun Anda.</div>`;   // object-level permission
  const j=jdw(r.scheduleId),t=trn(j.tid),st=r.status;
  const cur=st==='belum_bayar'||st==='ditolak'?1:st==='menunggu'?2:3;
  const step=(i,l)=>`<li data-n="${i+1}" class="${i<cur?'done':i===cur?(st==='ditolak'?'bad':'cur'):''}">${l}</li>`;
  const canPay=st==='belum_bayar'||st==='ditolak';
  return `<div class="sec-h" style="margin-top:0"><div><button class="lnk" data-a="pnav" data-p="riwayat">‹ Kembali ke riwayat</button><h2>${esc(t.nama)}</h2><span class="muted">${r.no} · Didaftarkan ${fd(r.tgl)}</span></div>${payB(st,1)}</div>
  <div class="card" style="margin-bottom:16px"><ol class="steps">${step(0,'Terdaftar')}${step(1,'Pembayaran')}${step(2,'Verifikasi staff')}${step(3,'Lunas')}</ol>
   ${st==='ditolak'?`<div class="note bad" style="margin-top:14px"><b>Bukti pembayaran ditolak.</b> ${esc(r.alasan||'')}</div>`:''}
   ${st==='menunggu'?`<div class="note info" style="margin-top:14px">Bukti pembayaran Anda sudah diterima dan sedang diperiksa oleh tim Accounting.</div>`:''}
   ${st==='diterima'?`<div class="note info" style="margin-top:14px;background:var(--greenbg);border-color:#a9dcc3;color:#0f6a41"><b>Pembayaran dikonfirmasi.</b> Kwitansi ${esc(r.kwt.no)} sudah terbit.</div>`:''}</div>
  <div class="g2" style="align-items:start">
   <div style="display:grid;gap:16px">
    <div class="card"><h3>Rincian</h3><dl class="kv"><dt>Jadwal</dt><dd>${fr(j.mulai,j.selesai)}</dd><dt>Lokasi</dt><dd>${esc(j.lokasi)}</dd><dt>Jumlah peserta</dt><dd>${r.peserta.length}</dd><dt>Harga / peserta</dt><dd>${rp(t.harga)}</dd><dt>Total tagihan</dt><dd style="font-size:18px">${rp(r.total)}</dd></dl>
      ${st==='diterima'?`<button class="btn primary" style="margin-top:14px;width:100%" data-a="kwt" data-id="${r.id}">Lihat &amp; unduh kwitansi (PDF)</button>`:''}</div>
    <div class="card"><h3>Daftar peserta</h3><div class="tw"><table><thead><tr><th>Nama</th><th>Jabatan</th></tr></thead><tbody>${r.peserta.map(p=>`<tr><td>${esc(p.nama)}</td><td>${esc(p.jabatan||'-')}</td></tr>`).join('')}</tbody></table></div></div>
   </div>
   <div style="display:grid;gap:16px">
    ${canPay?`<div class="card"><h3>Cara pembayaran</h3><div class="pay3">
       <div><b>Transfer bank</b>BCA<div class="num">123 456 7890</div><span class="muted">a.n. PT Maju Jaya Multi Teknologi - FTR Coder</span></div>
       <div><b>QRIS</b>${qrSvg(r.no.length*977+r.peserta.length)}<span class="muted">Scan dengan aplikasi apa pun</span></div>
       <div><b>Virtual account</b>Mandiri<div class="num">8808 ${r.no.slice(-4)} 0001</div><span class="muted">Khusus registrasi ini</span></div></div>
       <div class="muted sm" style="margin-top:10px">Transfer sesuai total <b>${rp(r.total)}</b>, lalu unggah bukti di bawah. (Data rekening pada demo hanya contoh.)</div></div>
     <div class="card"><h3>Unggah bukti pembayaran</h3>
       <label>Metode pembayaran<select id="metode"><option>Transfer Bank</option><option>QRIS</option><option>Virtual Account</option></select></label>
       <div class="drop" style="margin:12px 0">${S.upload?`<div class="prev"><img src="${S.upload}" alt="Pratinjau bukti"></div><div class="muted sm" style="margin-top:6px">Pratinjau: gambar tampil utuh (tidak dipotong).</div>`:`<b>Pilih file bukti transfer</b><div class="muted sm" style="margin:4px 0 10px">JPG atau PNG, maksimal 5 MB</div><input id="fileBukti" type="file" accept="image/jpeg,image/png">`}
       </div>
       <div style="display:flex;gap:10px;flex-wrap:wrap">${S.upload?`<button class="btn ghost" data-a="clearUp">Ganti file</button>`:`<button class="btn ghost" data-a="sample" data-id="${r.id}">Pakai contoh bukti transfer</button>`}
         <button class="btn hv" data-a="sendBukti" data-id="${r.id}" ${S.upload?'':'disabled'}>Kirim bukti pembayaran</button></div></div>`
    :`<div class="card"><h3>Bukti pembayaran</h3><div class="prev"><img src="${r.bukti}" alt="Bukti pembayaran"></div><div class="muted sm" style="margin-top:8px">${esc(r.metode)} · dikirim ${fd(r.tglBayar)}</div></div>`}
   </div></div>`;
}

/* ===================== PANEL STAFF ===================== */
function staff(){
  const ro=ROLES[S.role],allowed=ro.pages;
  let page=S.spage;
  const denied=page==='403';
  const nav=PAGES.map(([k,l])=>{const ok=allowed.includes(k);return `<button class="${S.spage===k?'on':''} ${ok?'':'lock'}" data-a="snav" data-p="${k}">${ico(k)}<span>${l}</span>${!ok?'<span class="lk">terkunci</span>':(k==='pembayaran'&&pending()?`<span class="lk" style="background:var(--hv);color:var(--hvink);border-radius:99px;padding:0 7px;font-weight:800">${pending()}</span>`:'')}</button>`}).join('');
  let body;
  if(denied)body=v403();
  else body=({dashboard:sDash,training:sTraining,registrasi:sReg,pembayaran:sPay,kwitansi:sKwt,laporan:sLap,pengguna:sUsers})[page]();
  return `<div class="staff"><aside class="side"><div class="brand"><div class="logo">LM</div><div>LPK Maju Bersama<small>Panel internal</small></div></div><nav class="nav">${nav}</nav>
   <div class="me"><b>${ro.who}</b>${ro.n}</div></aside><section class="main">${body}</section></div>`;
}
function v403(){
  return `<div class="f403"><div class="big">403</div><h2>Akses ditolak</h2>
    <p class="muted" style="margin:10px 0 18px">Role <b>${ROLES[S.role].n}</b> tidak memiliki izin membuka halaman <b>${PTITLE[S.denied]||''}</b>. Pembatasan ini dijaga di sisi server, bukan hanya dengan menyembunyikan menu.</p>
    <button class="btn primary" data-a="snav" data-p="${ROLES[S.role].pages[0]}">Kembali ke halaman saya</button></div>`;
}
function head(t,p,right){return `<div class="ph1"><div><h1>${t}</h1><p>${p||''}</p></div><div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap">${right||''}</div></div>`}
const roBadge=()=>badge('Hanya lihat','blue');

function sDash(){
  const R=DB.regs,pes=sum(R,r=>r.peserta.length),men=pending(),inc=sum(R.filter(r=>r.status==='diterima'),r=>r.total);
  const bill=sum(R.filter(r=>r.status==='menunggu'||r.status==='belum_bayar'||r.status==='ditolak'),r=>r.total);
  const per=DB.trainings.map(t=>({t,n:sum(R.filter(r=>jdw(r.scheduleId).tid===t.id),r=>r.peserta.length)})).sort((a,b)=>b.n-a.n),mx=Math.max(1,...per.map(x=>x.n));
  const cnt=k=>R.filter(r=>r.status===k).length,tot=R.length||1,cols={diterima:'#1a9560',menunggu:'#f5b81c',belum_bayar:'#b8c4d0',ditolak:'#d24343'};
  let acc=0;const grad=Object.keys(cols).map(k=>{const a=acc/tot*360;acc+=cnt(k);return `${cols[k]} ${a}deg ${acc/tot*360}deg`}).join(',');
  const up=upcoming().slice(0,6),J=DB.jadwal;
  return head('Dashboard','Ringkasan operasional training',S.role==='management'?roBadge():'')+`
  <div class="kpis"><div class="kpi"><small>Total pendaftaran</small><b>${R.length}</b><span>${DB.clients.length} klien terdaftar</span></div>
   <div class="kpi k"><small>Total peserta</small><b>${pes}</b><span>di semua jadwal</span></div>
   <div class="kpi a"><small>Menunggu verifikasi</small><b>${men}</b><span>bukti bayar perlu dicek</span></div>
   <div class="kpi g"><small>Pendapatan terverifikasi</small><b style="font-size:22px;padding-top:5px">${rp(inc)}</b><span>Belum lunas: ${rp(bill)}</span></div></div>
  <div class="kpis" style="grid-template-columns:repeat(3,1fr)"><div class="kpi"><small>Training berjalan</small><b>${J.filter(j=>stJ(j)==='Berjalan').length}</b></div><div class="kpi"><small>Akan datang</small><b>${J.filter(j=>stJ(j)==='Akan datang').length}</b></div><div class="kpi"><small>Selesai</small><b>${J.filter(j=>stJ(j)==='Selesai').length}</b></div></div>
  <div class="dash2"><div class="card"><h3>Peserta per jenis training</h3>${per.map(x=>`<div class="hb"><span>${esc(x.t.nama.replace(/\(.*\)/,'').trim())}</span><div class="bar"><i style="width:${x.n/mx*100}%"></i></div><b>${x.n}</b></div>`).join('')}</div>
   <div class="card"><h3>Status pembayaran</h3><div class="donut" style="background:conic-gradient(${grad})"><b>${R.length}</b></div>
    <div class="leg">${Object.keys(cols).map(k=>`<div><i style="background:${cols[k]}"></i>${PAYL[k][0]}<b style="margin-left:auto">${cnt(k)}</b></div>`).join('')}</div></div></div>
  <div class="card"><h3>Jadwal berjalan &amp; mendatang</h3><div class="tw"><table><thead><tr><th>Training</th><th>Tanggal</th><th>Koordinator</th><th>Kuota</th><th>Status</th></tr></thead><tbody>
   ${up.map(j=>{const pc=terisi(j)/j.kuota*100;return `<tr><td><b>${esc(trn(j.tid).nama)}</b></td><td>${fr(j.mulai,j.selesai)}</td><td>${esc(j.coord)}</td><td><div style="display:flex;gap:8px;align-items:center"><div class="bar ${pc>=100?'full':pc>=80?'warn':''}" style="flex:1"><i style="width:${Math.min(100,pc)}%"></i></div><span class="sm">${terisi(j)}/${j.kuota}</span></div></td><td>${badge(stJ(j),stJ(j)==='Berjalan'?'teal':'blue')}</td></tr>`}).join('')}</tbody></table></div></div>`;
}

function sTraining(){
  const ed=can('trainingEdit'),tab=S.f.jtab;
  return head('Training & Jadwal','Kelola jenis training, jadwal, kuota, dan koordinator',ed?(tab==='jenis'?`<button class="btn primary" data-a="newT">+ Jenis training</button>`:`<button class="btn primary" data-a="newJ">+ Jadwal baru</button>`):roBadge())+`
  <div class="tabs"><button class="${tab==='jenis'?'on':''}" data-a="jtab" data-v="jenis">Jenis training <span class="n">${DB.trainings.length}</span></button><button class="${tab==='jadwal'?'on':''}" data-a="jtab" data-v="jadwal">Jadwal &amp; kuota <span class="n">${DB.jadwal.length}</span></button></div>
  ${tab==='jenis'?`<div class="tw"><table><thead><tr><th>Nama training</th><th>Kategori</th><th>Durasi</th><th>Harga / peserta</th><th></th></tr></thead><tbody>${DB.trainings.map(t=>`<tr><td><b>${esc(t.nama)}</b><div class="muted sm">${esc(t.desk)}</div></td><td>${badge(esc(t.kat),'teal')}</td><td>${t.hari} hari</td><td>${rp(t.harga)}</td><td class="right">${ed?`<button class="btn ghost sm" data-a="editT" data-id="${t.id}">Ubah</button>`:''}</td></tr>`).join('')}</tbody></table></div>`
  :`<div class="tw"><table><thead><tr><th>Training</th><th>Tanggal</th><th>Lokasi</th><th>Koordinator</th><th>Kuota terisi</th><th>Status</th></tr></thead><tbody>${[...DB.jadwal].sort((a,b)=>a.mulai.localeCompare(b.mulai)).map(j=>{const pc=terisi(j)/j.kuota*100;return `<tr><td><b>${esc(trn(j.tid).nama)}</b></td><td>${fr(j.mulai,j.selesai)}</td><td>${esc(j.lokasi)}</td><td>${esc(j.coord)}</td><td><div style="display:flex;gap:8px;align-items:center;min-width:150px"><div class="bar ${pc>=100?'full':pc>=80?'warn':''}" style="flex:1"><i style="width:${Math.min(100,pc)}%"></i></div><span class="sm">${terisi(j)}/${j.kuota}</span></div></td><td>${badge(stJ(j),stJ(j)==='Selesai'?'gray':stJ(j)==='Berjalan'?'teal':'blue')}</td></tr>`}).join('')}</tbody></table></div>`}`;
}

function sReg(){
  const f=S.f,q=f.q.toLowerCase();
  let list=[...DB.regs].reverse().filter(r=>(f.st==='all'||r.status===f.st)&&(!q||(r.no+' '+namaKlien(clt(r.clientId))+' '+trn(jdw(r.scheduleId).tid).nama).toLowerCase().includes(q)));
  const per=8,pages=Math.max(1,Math.ceil(list.length/per));f.pg=Math.min(f.pg,pages);const rows=list.slice((f.pg-1)*per,f.pg*per);
  return head('Registrasi Peserta','Semua pendaftaran, baik dari portal klien maupun input staff',can('regCreate')?`<button class="btn primary" data-a="newReg">+ Pendaftaran baru (input staff)</button>`:roBadge())+`
  <div class="toolbar"><input id="q" type="search" placeholder="Cari no. registrasi, klien, training…" value="${esc(f.q)}"><select id="fst"><option value="all">Semua status bayar</option>${Object.keys(PAYL).map(k=>`<option value="${k}" ${f.st===k?'selected':''}>${PAYL[k][0]}</option>`).join('')}</select><span class="muted sm">${list.length} data</span></div>
  <div class="tw"><table><thead><tr><th>No. registrasi</th><th>Klien</th><th>Training &amp; jadwal</th><th>Peserta</th><th>Total</th><th>Pembayaran</th><th></th></tr></thead><tbody>
  ${rows.length?rows.map(r=>{const c=clt(r.clientId),j=jdw(r.scheduleId);return `<tr><td><b>${r.no}</b><div class="muted sm">${fd(r.tgl)}</div></td><td>${esc(namaKlien(c))}<div class="muted sm">${c.jenis==='perusahaan'?'Perusahaan':'Individu'}</div></td><td>${esc(trn(j.tid).nama)}<div class="muted sm">${fr(j.mulai,j.selesai)}</div></td><td>${r.peserta.length}</td><td>${rp(r.total)}</td><td>${payB(r.status)}</td><td class="right"><button class="btn ghost sm" data-a="regd" data-id="${r.id}">Detail</button></td></tr>`}).join(''):`<tr><td colspan="7" class="empty">Tidak ada data yang cocok.</td></tr>`}</tbody></table></div>
  <div class="pager">${Array.from({length:pages},(_,i)=>`<button class="${f.pg===i+1?'on':''}" data-a="pg" data-v="${i+1}">${i+1}</button>`).join('')}</div>`;
}

function sPay(){
  const f=S.f,tabs=[['menunggu','Menunggu'],['diterima','Diterima'],['ditolak','Ditolak'],['all','Semua']];
  const list=[...DB.regs].filter(r=>r.status!=='belum_bayar'&&(f.pay==='all'||r.status===f.pay)).sort((a,b)=>(b.tglBayar||'').localeCompare(a.tglBayar||''));
  const cn=k=>DB.regs.filter(r=>k==='all'?r.status!=='belum_bayar':r.status===k).length;
  return head('Verifikasi Pembayaran','Periksa bukti transfer dari klien, lalu terima atau tolak',can('verify')?'':roBadge())+`
  <div class="tabs">${tabs.map(([k,l])=>`<button class="${f.pay===k?'on':''}" data-a="paytab" data-v="${k}">${l}<span class="n">${cn(k)}</span></button>`).join('')}</div>
  <div class="tw"><table><thead><tr><th>No. registrasi</th><th>Klien</th><th>Nominal tagihan</th><th>Metode</th><th>Tgl kirim</th><th>Status</th><th></th></tr></thead><tbody>
  ${list.length?list.map(r=>`<tr><td><b>${r.no}</b></td><td>${esc(namaKlien(clt(r.clientId)))}</td><td>${rp(r.total)}</td><td>${esc(r.metode)}</td><td>${fd(r.tglBayar)}</td><td>${payB(r.status)}</td><td class="right"><button class="btn ${r.status==='menunggu'&&can('verify')?'hv':'ghost'} sm" data-a="review" data-id="${r.id}">${r.status==='menunggu'&&can('verify')?'Tinjau bukti':'Lihat'}</button></td></tr>`).join(''):`<tr><td colspan="7" class="empty">Tidak ada pembayaran pada tab ini.</td></tr>`}</tbody></table></div>`;
}

function sKwt(){
  const list=DB.regs.filter(r=>r.kwt).sort((a,b)=>b.kwt.no.localeCompare(a.kwt.no));
  return head('Kwitansi','Nomor kwitansi terbit otomatis saat pembayaran diterima')+`<div class="tw"><table><thead><tr><th>No. kwitansi</th><th>Tanggal</th><th>Klien</th><th>Untuk pembayaran</th><th>Jumlah</th><th></th></tr></thead><tbody>
  ${list.map(r=>`<tr><td><b>${r.kwt.no}</b></td><td>${fd(r.kwt.tgl)}</td><td>${esc(namaKlien(clt(r.clientId)))}</td><td>${esc(trn(jdw(r.scheduleId).tid).nama)} (${r.peserta.length} peserta)</td><td>${rp(r.total)}</td><td class="right"><button class="btn ghost sm" data-a="kwt" data-id="${r.id}">Lihat / cetak</button></td></tr>`).join('')}</tbody></table></div>`;
}

function sLap(){
  const R=DB.regs,ex=can('exp');
  const rows=DB.trainings.map(t=>{const rr=R.filter(r=>jdw(r.scheduleId).tid===t.id);return {t,reg:rr.length,pes:sum(rr,r=>r.peserta.length),inc:sum(rr.filter(r=>r.status==='diterima'),r=>r.total),pot:sum(rr.filter(r=>r.status==='menunggu'||r.status==='belum_bayar'),r=>r.total)}});
  return head('Laporan & Export','Rekap transaksi siap dipakai tim accounting',ex?`<button class="btn primary" data-a="exp" data-k="trx">Export transaksi (Excel/CSV)</button><button class="btn ghost" data-a="exp" data-k="peserta">Export daftar peserta</button>`:roBadge())+`
  <div class="kpis" style="grid-template-columns:repeat(3,1fr)"><div class="kpi g"><small>Sudah diterima</small><b style="font-size:22px;padding-top:5px">${rp(sum(R.filter(r=>r.status==='diterima'),r=>r.total))}</b><span>${R.filter(r=>r.status==='diterima').length} transaksi</span></div>
   <div class="kpi a"><small>Menunggu konfirmasi</small><b style="font-size:22px;padding-top:5px">${rp(sum(R.filter(r=>r.status==='menunggu'),r=>r.total))}</b><span>${R.filter(r=>r.status==='menunggu').length} transaksi</span></div>
   <div class="kpi"><small>Belum dibayar</small><b style="font-size:22px;padding-top:5px">${rp(sum(R.filter(r=>r.status==='belum_bayar'||r.status==='ditolak'),r=>r.total))}</b><span>${R.filter(r=>r.status==='belum_bayar'||r.status==='ditolak').length} transaksi</span></div></div>
  <div class="card"><h3>Rekap per jenis training</h3><div class="tw"><table><thead><tr><th>Training</th><th class="right">Pendaftaran</th><th class="right">Peserta</th><th class="right">Pendapatan diterima</th><th class="right">Potensi (belum lunas)</th></tr></thead><tbody>
  ${rows.map(x=>`<tr><td><b>${esc(x.t.nama)}</b></td><td class="right">${x.reg}</td><td class="right">${x.pes}</td><td class="right">${rp(x.inc)}</td><td class="right muted">${rp(x.pot)}</td></tr>`).join('')}
  <tr style="background:#f7f9fb"><td><b>Total</b></td><td class="right"><b>${sum(rows,x=>x.reg)}</b></td><td class="right"><b>${sum(rows,x=>x.pes)}</b></td><td class="right"><b>${rp(sum(rows,x=>x.inc))}</b></td><td class="right"><b>${rp(sum(rows,x=>x.pot))}</b></td></tr></tbody></table></div></div>
  ${ex?'':`<div class="note info" style="margin-top:14px">Role Management hanya dapat melihat laporan. Export data tersedia untuk Administrator dan Accounting.</div>`}`;
}

function sUsers(){
  const feat=[['Dashboard','admin','accounting','management'],['Training & jadwal (ubah)','admin','coordinator'],['Training & jadwal (lihat)','admin','registration','coordinator'],['Registrasi peserta (lihat)','admin','registration','coordinator'],['Registrasi peserta (input)','admin','registration'],['Verifikasi pembayaran','admin','accounting'],['Kwitansi','admin','accounting'],['Laporan (lihat)','admin','accounting','management'],['Export data','admin','accounting'],['Kelola pengguna','admin']];
  const rk=Object.keys(ROLES);
  return head('Pengguna & Hak Akses','Lima role staff internal, terpisah total dari akun klien')+`
  <div class="card" style="margin-bottom:16px"><h3>Akun staff</h3><div class="tw"><table><thead><tr><th>Nama</th><th>Role</th><th>Status</th></tr></thead><tbody>${DB.users.map(u=>`<tr><td><b>${u[0]}</b></td><td>${ROLES[u[1]].n}</td><td>${badge(u[2],'green')}</td></tr>`).join('')}</tbody></table></div></div>
  <div class="card"><h3>Matriks role dan fitur</h3><div class="tw"><table class="mx"><thead><tr><th>Fitur</th>${rk.map(k=>`<th>${ROLES[k].n}</th>`).join('')}</tr></thead><tbody>${feat.map(f=>`<tr><td>${f[0]}</td>${rk.map(k=>`<td class="${f.includes(k)?'y':'n'}">${f.includes(k)?'✔':'–'}</td>`).join('')}</tr>`).join('')}</tbody></table></div>
  <div class="muted sm" style="margin-top:10px">Coba ganti role lewat pilihan di bilah atas untuk melihat perbedaan menu dan tombol.</div></div>`;
}

/* ===================== MODAL ===================== */
function receiptHTML(r){
  const c=clt(r.clientId),j=jdw(r.scheduleId),t=trn(j.tid);
  return `<div class="rc"><div class="rh"><div><h3>PT. Maju Jaya Multi Teknologi - FTR Coder</h3><div class="sm" style="font-family:'Segoe UI',sans-serif;color:#555">Batam, Kepulauan Riau</div></div><div class="t"><b>KWITANSI</b><span class="sm">No. ${r.kwt.no}</span></div></div>
  <div class="stamp">LUNAS</div>
  <dl><dt>Telah terima dari</dt><dd>${esc(namaKlien(c))}</dd>
   <dt>Uang sejumlah</dt><dd><div class="tb">${terbilang(r.total).replace(/^./,m=>m.toUpperCase())} rupiah</div></dd>
   <dt>Untuk pembayaran</dt><dd>Training ${esc(t.nama)}, ${fr(j.mulai,j.selesai)}<br><span style="font-weight:400">${r.peserta.length} peserta × ${rp(t.harga)}</span></dd>
   <dt>No. registrasi</dt><dd>${r.no}</dd><dt>Metode bayar</dt><dd>${esc(r.metode)}</dd></dl>
  <div class="tot"><div class="amt">${rp(r.total)}</div><div class="sg">Batam, ${fd(r.kwt.tgl)}<div class="ln"></div><b>${esc(r.kwt.by)}</b><br><span class="sm">Accounting</span></div></div></div>`;
}
function modalHTML(){
  const m=S.modal; if(!m)return '';
  let inner='',cls='';
  if(m.t==='resetConfirm'){inner=`<div style="text-align:center"><div style="font-size:34px;margin-bottom:8px">🗑️</div><h2 style="margin-bottom:6px">Reset Demo?</h2><p class="muted" style="margin-bottom:20px">Semua data pendaftaran, pembayaran, dan perubahan katalog akan dikembalikan ke kondisi awal. Aksi ini tidak bisa dibatalkan.</p><div class="foot" style="justify-content:center"><button class="btn ghost" data-a="close">Batal</button><button class="btn danger" style="background:var(--red);color:#fff;border-color:var(--red)" data-a="doReset">Ya, Reset</button></div></div>`;}
  if(m.t==='guide'){cls='';inner=`<h2>Panduan demo</h2><p class="muted" style="margin-bottom:14px">Alur presentasi sekitar 10 menit. Semua data pada demo ini adalah data contoh.</p>
   <ol style="padding-left:20px;display:grid;gap:9px">
    <li><b>Portal Klien</b>: tunjukkan beranda dan katalog. Aktifkan <i>Lihat tampilan HP</i> untuk menunjukkan tampilan mobile.</li>
    <li>Klik <b>Masuk / Daftar</b>, pilih akun demo <b>PT Batam Marine Works</b> (perusahaan). Kata sandi: <code>demo123</code>.</li>
    <li>Klik <b>Daftar training</b> pada BST. Tambah 2–3 peserta, lihat total berubah otomatis. Coba training dengan kuota tipis (Confined Space Entry) untuk menunjukkan validasi kuota.</li>
    <li>Setelah daftar, buka detail registrasi: klik <b>Pakai contoh bukti transfer</b>, lalu <b>Kirim bukti</b>. Status berubah menjadi <i>Menunggu konfirmasi</i>.</li>
    <li>Pindah ke <b>Panel Staff</b>, pilih role <b>Accounting</b>, buka <b>Pembayaran</b>, klik <b>Tinjau bukti</b>, lalu <b>Terima</b>. Kwitansi terbit otomatis.</li>
    <li>Kembali ke <b>Portal Klien</b>: status sudah <i>Lunas</i>, klik <b>Lihat &amp; unduh kwitansi</b>, lalu <b>Cetak / simpan PDF</b>.</li>
    <li>Ganti role ke <b>Management</b> atau <b>Registration</b>: tunjukkan menu terkunci dan halaman 403. Lihat matriks di <b>Pengguna &amp; Hak Akses</b> (role Administrator).</li>
    <li>Role Accounting → <b>Laporan &amp; Export</b> → unduh CSV, buka di Excel.</li></ol>
   <div class="note info" style="margin-top:14px">Akun demo: <b>hrd@batammarine.co.id</b> (perusahaan) dan <b>rina@mail.com</b> (individu), sandi <b>demo123</b>. Klik <i>Reset data</i> untuk mengulang dari awal.</div>
   <div class="foot"><button class="btn primary" data-a="close">Mulai demo</button></div>`;}
  if(m.t==='kwt'){cls='wide';const r=DB.regs.find(x=>x.id===m.id);inner=`<h2>Kwitansi ${r.kwt.no}</h2><p class="muted noprint" style="margin-bottom:14px">Pada sistem asli, kwitansi dihasilkan sebagai PDF oleh server. Di demo ini gunakan tombol cetak lalu pilih “Simpan sebagai PDF”.</p>${receiptHTML(r)}<div class="foot noprint"><button class="btn ghost" data-a="close">Tutup</button><button class="btn primary" data-a="print" data-no="${r.kwt.no}">Cetak / simpan PDF</button></div>`;}
  if(m.t==='review'){cls='wide';const r=DB.regs.find(x=>x.id===m.id),c=clt(r.clientId),j=jdw(r.scheduleId),t=trn(j.tid),vf=can('verify')&&r.status==='menunggu';
    inner=`<h2>Tinjau bukti pembayaran</h2><p class="muted" style="margin-bottom:14px">${r.no} · ${payB(r.status)}</p><div class="rv">
     <div class="prev"><img src="${r.bukti}" alt="Bukti transfer" style="height:400px;max-width:100%"></div>
     <div><dl class="kv"><dt>Klien</dt><dd>${esc(namaKlien(c))}</dd><dt>Training</dt><dd>${esc(t.nama)}</dd><dt>Jadwal</dt><dd>${fr(j.mulai,j.selesai)}</dd><dt>Peserta</dt><dd>${r.peserta.length} × ${rp(t.harga)}</dd><dt>Total tagihan</dt><dd style="font-size:19px">${rp(r.total)}</dd><dt>Metode</dt><dd>${esc(r.metode)}</dd><dt>Dikirim</dt><dd>${fd(r.tglBayar)}</dd>
       ${r.status==='ditolak'?`<dt>Alasan tolak</dt><dd>${esc(r.alasan)}</dd>`:''}${r.status==='diterima'?`<dt>Kwitansi</dt><dd>${r.kwt.no}</dd>`:''}</dl>
       ${vf?`<label style="margin-top:14px">Alasan penolakan (wajib diisi bila ditolak)<textarea id="alasan" placeholder="Contoh: nominal tidak sesuai tagihan"></textarea></label>`:''}
       ${!can('verify')?`<div class="note info" style="margin-top:14px">Role Anda hanya dapat melihat. Verifikasi dilakukan oleh Accounting atau Administrator.</div>`:''}</div></div>
     <div class="foot"><button class="btn ghost" data-a="close">Tutup</button>${vf?`<button class="btn danger" data-a="reject" data-id="${r.id}">Tolak</button><button class="btn ok" data-a="approve" data-id="${r.id}">Terima &amp; terbitkan kwitansi</button>`:''}</div>`;}
  if(m.t==='regd'){const r=DB.regs.find(x=>x.id===m.id),c=clt(r.clientId),j=jdw(r.scheduleId),t=trn(j.tid);
    inner=`<h2>${r.no}</h2><p class="muted" style="margin-bottom:14px">${payB(r.status)}</p><dl class="kv" style="margin-bottom:14px"><dt>Klien</dt><dd>${esc(namaKlien(c))} (${c.jenis})</dd><dt>Kontak</dt><dd>${esc(c.email)} · ${esc(c.telp)}</dd><dt>Training</dt><dd>${esc(t.nama)}</dd><dt>Jadwal</dt><dd>${fr(j.mulai,j.selesai)} · ${esc(j.lokasi)}</dd><dt>Total</dt><dd>${rp(r.total)}</dd></dl>
     <div class="tw"><table><thead><tr><th>#</th><th>Nama peserta</th><th>Jabatan</th><th>JK</th></tr></thead><tbody>${r.peserta.map((p,i)=>`<tr><td>${i+1}</td><td>${esc(p.nama)}</td><td>${esc(p.jabatan||'-')}</td><td>${esc(p.jk)}</td></tr>`).join('')}</tbody></table></div><div class="foot"><button class="btn primary" data-a="close">Tutup</button></div>`;}
  if(m.t==='newT'||m.t==='editT'){const t=m.id?trn(m.id):{nama:'',kat:'K3',hari:2,harga:2000000,desk:''};
    inner=`<h2>${m.id?'Ubah':'Tambah'} jenis training</h2><div class="fg" style="margin-top:14px"><label class="full">Nama training<input id="tNama" value="${esc(t.nama)}"></label>
     <label>Kategori<select id="tKat">${['K3','Sertifikasi','Operator','Tanggap Darurat'].map(k=>`<option ${t.kat===k?'selected':''}>${k}</option>`).join('')}</select></label><label>Durasi (hari)<input id="tHari" type="number" min="1" value="${t.hari}"></label>
     <label class="full">Harga per peserta (Rp)<input id="tHarga" type="number" min="0" step="50000" value="${t.harga}"></label><label class="full">Deskripsi singkat<textarea id="tDesk">${esc(t.desk)}</textarea></label></div>
     <div class="foot"><button class="btn ghost" data-a="close">Batal</button><button class="btn primary" data-a="saveT" data-id="${m.id||''}">Simpan</button></div>`;}
  if(m.t==='newJ'){inner=`<h2>Tambah jadwal training</h2><div class="fg" style="margin-top:14px"><label class="full">Jenis training<select id="jT">${DB.trainings.map(t=>`<option value="${t.id}">${esc(t.nama)}</option>`).join('')}</select></label>
     <label>Tanggal mulai<input id="jM" type="date" value="2026-12-07"></label><label>Tanggal selesai<input id="jS" type="date" value="2026-12-09"></label><label>Lokasi<input id="jL" value="Batam Centre"></label><label>Kuota<input id="jK" type="number" min="1" value="25"></label>
     <label class="full">Koordinator<select id="jC">${COORD.map(c=>`<option>${c}</option>`).join('')}</select></label></div>
     <div class="foot"><button class="btn ghost" data-a="close">Batal</button><button class="btn primary" data-a="saveJ">Simpan jadwal</button></div>`;}
  if(m.t==='newReg'){const dr=S.draft,c=dr.cid?clt(dr.cid):null,multi=!c||c.jenis==='perusahaan',t=dr.tid?trn(dr.tid):null;
    inner=`<h2>Pendaftaran baru (input staff)</h2><p class="muted" style="margin-bottom:14px">Untuk klien yang mendaftar lewat telepon atau datang langsung.</p>
     <div class="fg"><label class="full">Klien<select data-draft="cid" data-rr="1"><option value="">— Pilih klien —</option>${DB.clients.map(x=>`<option value="${x.id}" ${dr.cid===x.id?'selected':''}>${esc(namaKlien(x))} (${x.jenis})</option>`).join('')}</select></label>
     <label class="full">Training<select data-draft="tid" data-rr="1"><option value="">— Pilih training —</option>${DB.trainings.map(x=>`<option value="${x.id}" ${dr.tid===x.id?'selected':''}>${esc(x.nama)}</option>`).join('')}</select></label></div>
     <div style="margin:14px 0"><label>Jadwal</label>${schedOpts(dr.tid)}</div>${peserta(multi)}
     <div class="note info" style="margin-top:10px">Total: <b>${t?rp(hitungTotal(t.id,dr.peserta.length)):'—'}</b> (${dr.peserta.length} peserta). Dihitung ulang oleh server saat disimpan.</div>
     <div class="foot"><button class="btn ghost" data-a="close">Batal</button><button class="btn primary" data-a="saveReg">Simpan pendaftaran</button></div>`;cls='wide';}
  return `<div class="overlay"><div class="modal ${cls}" role="dialog" aria-modal="true"><button class="x" data-a="close" aria-label="Tutup">×</button>${inner}</div></div>`;
}

/* =====================================================================
   ACTIONS
   ===================================================================== */
function pgo(p,prm){
  prm=prm||{};
  if(['daftar','riwayat','detail'].includes(p)&&!client()){S.after={p,prm};p='login';S.authTab='in';toast('Silakan masuk terlebih dahulu','');}
  if(p==='daftar')initDraft(prm.tid);
  S.ppage=p;S.params=prm;S.upload=null;S.modal=null;render();toTop();
}
function createReg(cid,sid,pes){
  const j=jdw(sid),r={id:'r'+Date.now(),no:nextRegNo(),clientId:cid,scheduleId:sid,peserta:JSON.parse(JSON.stringify(pes)),total:hitungTotal(j.tid,pes.length),tgl:TODAY,status:'belum_bayar',metode:null,bukti:null,tglBayar:null,alasan:null,kwt:null};
  DB.regs.push(r);save();return r;
}
function validasiDaftar(dr){
  if(!dr.sid)return 'Pilih jadwal training terlebih dahulu.';
  if(dr.peserta.some(p=>!p.nama.trim()))return 'Nama semua peserta wajib diisi.';
  const j=jdw(dr.sid);if(dr.peserta.length>sisa(j))return `Kuota tidak mencukupi. Sisa ${sisa(j)} kursi, Anda mendaftarkan ${dr.peserta.length} peserta.`;
  return '';
}
function csv(name,rows){
  const t='\ufeff'+rows.map(r=>r.map(v=>'"'+String(v==null?'':v).replace(/"/g,'""')+'"').join(';')).join('\r\n');
  const a=document.createElement('a');a.href=URL.createObjectURL(new Blob([t],{type:'text/csv;charset=utf-8'}));a.download=name;document.body.appendChild(a);a.click();a.remove();
}
function loginAs(c){S.clientId=c.id;S.fails=0;const a=S.after;S.after=null;toast('Selamat datang, '+c.nama,'ok');if(a)pgo(a.p,a.prm);else pgo('riwayat')}

const A={
  mode:d=>{S.mode=d.v;S.modal=null;render();toTop()},
  phone:()=>{S.phone=!S.phone;render()},
  guide:()=>{S.modal={t:'guide'};render()},
  close:()=>{S.modal=null;render()},
  reset:()=>{S.modal={t:'resetConfirm'};render()},
  doReset:()=>{DB=seed();save();S.clientId=null;S.ppage='home';S.spage='dashboard';S.draft=null;S.modal=null;S.upload=null;S.f={q:'',st:'all',pg:1,pay:'menunggu',jtab:'jenis'};render();toast('Data demo dikembalikan ke awal','ok')},
  goto:d=>{const e=document.getElementById(d.id);if(e)e.scrollIntoView({behavior:'smooth',block:'start'})},
  /* Portal */
  pnav:d=>pgo(d.p),
  daftar:d=>pgo('daftar',{tid:d.tid}),
  authtab:d=>{S.authTab=d.v;render()},
  jenis:d=>{S.regJenis=d.v;render()},
  fill:d=>{$('#lEmail').value=d.e;$('#lPass').value='demo123'},
  doLogin:()=>{
    if(S.fails>=5)return toast('Akun terkunci sementara. Coba lagi dalam 1 jam.','err');
    const e=$('#lEmail').value.trim().toLowerCase(),p=$('#lPass').value,c=DB.clients.find(x=>x.email===e&&x.pass===p);
    if(!c){S.fails++;return toast('Email atau kata sandi salah. ('+S.fails+'/5)','err')}
    loginAs(c);
  },
  doRegister:()=>{
    const v=id=>{const e=$('#'+id);return e?e.value.trim():''},jn=S.regJenis;
    if(!v('rNama')||!v('rEmail')||!v('rTelp')||!v('rPass')||(jn==='perusahaan'&&!v('rPers')))return toast('Lengkapi semua kolom wajib.','err');
    if(DB.clients.some(c=>c.email===v('rEmail').toLowerCase()))return toast('Email sudah terdaftar.','err');
    const c={id:'c'+Date.now(),email:v('rEmail').toLowerCase(),pass:v('rPass'),jenis:jn,nama:v('rNama'),perusahaan:v('rPers'),alamat:v('rAlamat'),telp:v('rTelp')};
    DB.clients.push(c);save();loginAs(c);
  },
  logout:()=>{S.clientId=null;S.after=null;pgo('home');toast('Anda telah keluar','')},
  addP:()=>{S.draft.peserta.push(blankP());render()},
  delP:d=>{S.draft.peserta.splice(+d.i,1);render()},
  submitReg:()=>{
    const er=validasiDaftar(S.draft);if(er)return toast(er,'err');
    const r=createReg(S.clientId,S.draft.sid,S.draft.peserta);toast('Pendaftaran berhasil. Nomor '+r.no,'ok');pgo('detail',{id:r.id});
  },
  detail:d=>pgo('detail',{id:d.id}),
  sample:d=>{const r=DB.regs.find(x=>x.id===d.id);S.upload=makeBukti(r.total,'BCA','TRX'+Math.floor(Math.random()*900000+100000),TODAY);render()},
  clearUp:()=>{S.upload=null;render()},
  sendBukti:d=>{const r=DB.regs.find(x=>x.id===d.id);if(!S.upload)return;
    r.bukti=S.upload;r.metode=$('#metode').value;r.tglBayar=TODAY;r.status='menunggu';r.alasan=null;save();S.upload=null;toast('Bukti pembayaran terkirim. Menunggu verifikasi.','ok');render()},
  kwt:d=>{S.modal={t:'kwt',id:d.id};render()},
  print:d=>{const old=document.title;document.title=d.no.replace(/\//g,'-');window.print();setTimeout(()=>document.title=old,500)},
  /* Staff */
  snav:d=>{S.f.pg=1;if(ROLES[S.role].pages.includes(d.p)){S.spage=d.p;S.denied=null}else{S.spage='403';S.denied=d.p}render();toTop()},
  jtab:d=>{S.f.jtab=d.v;render()},
  paytab:d=>{S.f.pay=d.v;render()},
  pg:d=>{S.f.pg=+d.v;render()},
  regd:d=>{S.modal={t:'regd',id:d.id};render()},
  review:d=>{S.modal={t:'review',id:d.id};render()},
  approve:d=>{if(!can('verify'))return toast('Tidak berwenang','err');const r=DB.regs.find(x=>x.id===d.id);
    r.status='diterima';r.kwt={no:nextKwt(),tgl:TODAY,by:ROLES[S.role].who+' ('+ROLES[S.role].n+')'};save();S.modal=null;toast('Pembayaran diterima. Kwitansi '+r.kwt.no+' terbit.','ok');render()},
  reject:d=>{if(!can('verify'))return toast('Tidak berwenang','err');const al=$('#alasan').value.trim();if(!al)return toast('Isi alasan penolakan terlebih dahulu.','err');
    const r=DB.regs.find(x=>x.id===d.id);r.status='ditolak';r.alasan=al;save();S.modal=null;toast('Pembayaran ditolak. Klien diminta upload ulang.','');render()},
  newT:()=>{S.modal={t:'newT'};render()}, editT:d=>{S.modal={t:'editT',id:d.id};render()},
  saveT:d=>{const nama=$('#tNama').value.trim(),harga=+$('#tHarga').value,hari=+$('#tHari').value;if(!nama||!(harga>=0)||!(hari>0))return toast('Nama, durasi, dan harga wajib diisi.','err');
    if(d.id){Object.assign(trn(d.id),{nama,kat:$('#tKat').value,hari,harga,desk:$('#tDesk').value})}
    else DB.trainings.push({id:'t'+Date.now(),nama,kat:$('#tKat').value,hari,harga,desk:$('#tDesk').value,hue:Math.floor(Math.random()*360),init:nama.split(/\s+/).map(w=>w[0]).join('').slice(0,3).toUpperCase()});
    save();S.modal=null;toast('Jenis training disimpan.','ok');render()},
  newJ:()=>{S.modal={t:'newJ'};render()},
  saveJ:()=>{const m=$('#jM').value,s=$('#jS').value,k=+$('#jK').value;if(!m||!s||s<m||!(k>0))return toast('Periksa tanggal dan kuota.','err');
    DB.jadwal.push({id:'s'+Date.now(),tid:$('#jT').value,mulai:m,selesai:s,lokasi:$('#jL').value||'-',kuota:k,coord:$('#jC').value});save();S.modal=null;toast('Jadwal ditambahkan.','ok');render()},
  newReg:()=>{S.draft={cid:'',tid:'',sid:'',peserta:[blankP()]};S.modal={t:'newReg'};render()},
  saveReg:()=>{const dr=S.draft;if(!dr.cid)return toast('Pilih klien terlebih dahulu.','err');const er=validasiDaftar(dr);if(er)return toast(er,'err');
    const r=createReg(dr.cid,dr.sid,dr.peserta);S.modal=null;toast('Pendaftaran '+r.no+' tersimpan.','ok');render()},
  exp:d=>{if(!can('exp'))return toast('Tidak berwenang','err');
    if(d.k==='trx')csv('transaksi_lpk_maju_bersama.csv',[['No Registrasi','Tgl Daftar','Klien','Jenis Klien','Training','Jadwal','Jumlah Peserta','Harga/Peserta','Total','Status Pembayaran','No Kwitansi']].concat(DB.regs.map(r=>{const c=clt(r.clientId),j=jdw(r.scheduleId),t=trn(j.tid);return [r.no,r.tgl,namaKlien(c),c.jenis,t.nama,fr(j.mulai,j.selesai),r.peserta.length,t.harga,r.total,PAYL[r.status][0],r.kwt?r.kwt.no:'']})));
    else csv('peserta_lpk_maju_bersama.csv',[['No Registrasi','Nama','Jabatan','Jenis Kelamin','Klien','Training','Jadwal']].concat(DB.regs.flatMap(r=>r.peserta.map(p=>[r.no,p.nama,p.jabatan,p.jk,namaKlien(clt(r.clientId)),trn(jdw(r.scheduleId).tid).nama,fr(jdw(r.scheduleId).mulai,jdw(r.scheduleId).selesai)]))));
    toast('File CSV diunduh. Buka dengan Excel.','ok')}
};

/* ---------- Event listeners ---------- */
document.addEventListener('click',e=>{
  const ov=e.target.closest('.overlay');if(ov&&e.target===ov){S.modal=null;render();return}
  const el=e.target.closest('[data-a]');if(!el)return;
  const f=A[el.dataset.a];if(f)f(el.dataset,el,e);
});
document.addEventListener('input',e=>{
  const el=e.target;
  if(el.id==='q'){S.f.q=el.value;S.f.pg=1;render();const n=$('#q');n.focus();n.setSelectionRange(n.value.length,n.value.length);return}
  if(el.dataset&&el.dataset.draft&&S.draft){
    if(el.type==='radio'&&!el.checked)return;
    setPath(S.draft,el.dataset.draft,el.value);
    if(el.dataset.draft==='tid'||el.dataset.draft==='cid'){ if(el.dataset.draft==='tid'){S.draft.sid='';const n=el.value?nextJ(el.value):null;if(n&&sisa(n)>0)S.draft.sid=n.id}
      if(el.dataset.draft==='cid'){const c=el.value?clt(el.value):null;if(c&&c.jenis==='individu')S.draft.peserta=[blankP(c)]}}
    if(el.dataset.rr)render();
  }
});
document.addEventListener('change',e=>{
  const el=e.target;
  if(el.id==='roleSel'){S.role=el.value;S.denied=null;if(!ROLES[S.role].pages.includes(S.spage))S.spage=ROLES[S.role].pages[0];S.modal=null;render();toast('Sekarang masuk sebagai '+ROLES[S.role].n,'ok');return}
  if(el.id==='fst'){S.f.st=el.value;S.f.pg=1;render();return}
  if(el.id==='fileBukti'){const f=el.files[0];if(!f)return;
    if(!/^image\/(jpeg|png)$/.test(f.type)){el.value='';return toast('File ditolak: hanya JPG atau PNG yang diizinkan.','err')}
    if(f.size>5*1024*1024){el.value='';return toast('File ditolak: ukuran maksimal 5 MB.','err')}
    const rd=new FileReader();rd.onload=()=>{const im=new Image();im.onload=()=>{const k=Math.min(1,1200/Math.max(im.width,im.height)),c=document.createElement('canvas');c.width=im.width*k;c.height=im.height*k;c.getContext('2d').drawImage(im,0,0,c.width,c.height);S.upload=c.toDataURL('image/jpeg',.85);render()};im.onerror=()=>toast('File bukan gambar yang valid.','err');im.src=rd.result};rd.readAsDataURL(f);
  }
});

/* ================= Session timer & lock (konvensi wajib FTR-Coder) ================= */
const EXPIRES_AT = @json($expiresAt ?? null);
let sessionLocked = false;
function tickTimer(){
  const el = document.getElementById('timerDisplay');
  if(!el) return;
  if(!EXPIRES_AT){ el.textContent=''; return; }
  const diff = new Date(EXPIRES_AT) - new Date();
  if(diff <= 0){
    el.textContent = 'Sesi demo berakhir';
    if(!sessionLocked) lockSession();
    return;
  }
  const m = Math.floor(diff/60000), s = Math.floor((diff%60000)/1000);
  el.textContent = `Sesi berakhir dalam ${m}:${String(s).padStart(2,'0')}`;
}
function lockSession(){
  sessionLocked = true;
  document.getElementById('sessionLockOverlay').style.display = 'grid';
}

render();
setInterval(tickTimer, 1000);
tickTimer();
</script>
</body>
</html>