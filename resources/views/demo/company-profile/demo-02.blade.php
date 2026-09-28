@verbatim
<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lumina Digital — Creative Agency Profile</title>
<meta name="description" content="Lumina Digital - Agensi Kreatif Digital Masa Depan">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
/* ============ THEME VARIABLES ============ */
:root[data-theme="light"]{
  --bg:#ffffff;
  --bg-2:#f5f7fb;
  --bg-3:#eef2f9;
  --card:#ffffff;
  --text:#0a0e1a;
  --text-2:#4a5568;
  --text-3:#8892a6;
  --border:rgba(10,14,26,.08);
  --primary:#2563eb;
  --primary-2:#3b82f6;
  --accent:#06b6d4;
  --neon:#00d4ff;
  --shadow:0 4px 24px rgba(37,99,235,.08);
  --shadow-lg:0 20px 60px rgba(37,99,235,.18);
  --glow:0 0 40px rgba(37,99,235,.3);
}
:root[data-theme="dark"]{
  --bg:#0a0e1a;
  --bg-2:#111827;
  --bg-3:#1a2332;
  --card:#131b2e;
  --text:#ffffff;
  --text-2:#a0aec0;
  --text-3:#64748b;
  --border:rgba(255,255,255,.08);
  --primary:#3b82f6;
  --primary-2:#60a5fa;
  --accent:#00d4ff;
  --neon:#00e5ff;
  --shadow:0 4px 24px rgba(0,0,0,.3);
  --shadow-lg:0 20px 60px rgba(0,0,0,.5);
  --glow:0 0 60px rgba(59,130,246,.4);
}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{
  font-family:'Inter',sans-serif;
  background:var(--bg);
  color:var(--text);
  overflow-x:hidden;
  line-height:1.6;
  transition:background .5s ease,color .5s ease;
}
h1,h2,h3,h4,.logo-text,.stat-num{font-family:'Space Grotesk',sans-serif;letter-spacing:-.02em}
::selection{background:var(--primary);color:#fff}
::-webkit-scrollbar{width:10px}
::-webkit-scrollbar-track{background:var(--bg-2)}
::-webkit-scrollbar-thumb{background:linear-gradient(var(--primary),var(--accent));border-radius:10px}

/* ============ SCROLL PROGRESS ============ */
.scroll-progress{
  position:fixed;top:0;left:0;height:3px;
  background:linear-gradient(90deg,var(--primary),var(--accent),var(--neon));
  width:0%;z-index:9999;transition:width .1s;
  box-shadow:0 0 10px var(--neon);
}

/* ============ CUSTOM CURSOR ============ */
.cursor-dot,.cursor-ring{
  position:fixed;pointer-events:none;z-index:9998;
  border-radius:50%;transform:translate(-50%,-50%);
  transition:transform .15s ease,opacity .3s;
  mix-blend-mode:difference;
}
.cursor-dot{
  width:8px;height:8px;background:#fff;
}
.cursor-ring{
  width:40px;height:40px;border:2px solid rgba(255,255,255,.5);
  transition:transform .3s ease,width .3s,height .3s;
}
.cursor-ring.hover{width:70px;height:70px;background:rgba(255,255,255,.1)}
@media(max-width:968px){.cursor-dot,.cursor-ring{display:none}}

/* ============ LOADER ============ */
.loader{
  position:fixed;inset:0;background:var(--bg);z-index:10000;
  display:flex;align-items:center;justify-content:center;flex-direction:column;gap:30px;
  transition:opacity .6s,visibility .6s;
}
.loader.hidden{opacity:0;visibility:hidden}
.loader-text{
  font-family:'Space Grotesk',sans-serif;
  font-size:1.5rem;font-weight:700;letter-spacing:4px;
  background:linear-gradient(90deg,var(--primary),var(--accent),var(--primary));
  background-size:200% 100%;
  -webkit-background-clip:text;background-clip:text;
  -webkit-text-fill-color:transparent;
  animation:shine 2s linear infinite;
}
@keyframes shine{to{background-position:-200% 0}}
.loader-bar{
  width:200px;height:3px;background:var(--bg-3);border-radius:10px;overflow:hidden;
}
.loader-bar::after{
  content:'';display:block;height:100%;width:40%;
  background:linear-gradient(90deg,var(--primary),var(--accent));
  animation:loadBar 1.5s ease infinite;
}
@keyframes loadBar{
  0%{transform:translateX(-100%)}
  100%{transform:translateX(350%)}
}

/* ============ NAVBAR ============ */
nav{
  position:fixed;top:0;left:0;right:0;z-index:1000;
  padding:18px 5%;transition:all .4s ease;
  background:transparent;
}
nav.scrolled{
  background:color-mix(in srgb,var(--bg) 85%,transparent);
  backdrop-filter:blur(20px);
  -webkit-backdrop-filter:blur(20px);
  border-bottom:1px solid var(--border);
  padding:12px 5%;
}
.nav-container{
  max-width:1300px;margin:0 auto;
  display:flex;justify-content:space-between;align-items:center;
}
.logo{
  display:flex;align-items:center;gap:12px;
  text-decoration:none;color:var(--text);
  font-size:1.35rem;font-weight:700;
}
.logo-mark{
  width:42px;height:42px;position:relative;
  background:linear-gradient(135deg,var(--primary),var(--accent));
  border-radius:12px;display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:1.1rem;
  box-shadow:var(--glow);
  transition:transform .4s;
}
.logo:hover .logo-mark{transform:rotate(15deg) scale(1.05)}
.nav-menu{
  display:flex;gap:8px;list-style:none;
  background:color-mix(in srgb,var(--bg-2) 70%,transparent);
  padding:6px;border-radius:50px;
  border:1px solid var(--border);
}
.nav-menu a{
  color:var(--text-2);text-decoration:none;
  font-weight:500;font-size:.9rem;
  padding:10px 18px;border-radius:50px;
  transition:all .3s;
}
.nav-menu a:hover{color:var(--text);background:var(--bg-3)}
.nav-menu a.active{color:#fff;background:var(--primary)}
.nav-actions{display:flex;align-items:center;gap:12px}

/* Theme toggle */
.theme-toggle{
  width:46px;height:46px;border-radius:50%;
  background:var(--bg-2);border:1px solid var(--border);
  color:var(--text);cursor:pointer;
  display:flex;align-items:center;justify-content:center;
  font-size:1.1rem;transition:all .4s;
  position:relative;overflow:hidden;
}
.theme-toggle:hover{
  transform:scale(1.1) rotate(15deg);
  box-shadow:var(--glow);
  border-color:var(--primary);
}
.theme-toggle i{
  position:absolute;
  transition:transform .5s cubic-bezier(.4,0,.2,1),opacity .5s;
}
.theme-toggle .fa-sun{transform:translateY(0) rotate(0);opacity:1;color:#f59e0b}
.theme-toggle .fa-moon{transform:translateY(30px) rotate(-90deg);opacity:0;color:#60a5fa}
:root[data-theme="dark"] .theme-toggle .fa-sun{transform:translateY(-30px) rotate(90deg);opacity:0}
:root[data-theme="dark"] .theme-toggle .fa-moon{transform:translateY(0) rotate(0);opacity:1}

.btn-nav{
  padding:12px 24px;background:var(--primary);color:#fff;
  border-radius:50px;text-decoration:none;font-weight:600;
  font-size:.9rem;transition:all .3s;
  box-shadow:var(--shadow);
}
.btn-nav:hover{transform:translateY(-2px);box-shadow:var(--shadow-lg)}

.menu-toggle{
  display:none;background:none;border:none;cursor:pointer;
  width:46px;height:46px;border-radius:12px;
  background:var(--bg-2);border:1px solid var(--border);
  position:relative;
}
.menu-toggle span{
  position:absolute;left:50%;transform:translateX(-50%);
  width:20px;height:2px;background:var(--text);border-radius:2px;
  transition:all .3s;
}
.menu-toggle span:nth-child(1){top:16px}
.menu-toggle span:nth-child(2){top:22px}
.menu-toggle span:nth-child(3){top:28px}
.menu-toggle.active span:nth-child(1){top:22px;transform:translateX(-50%) rotate(45deg)}
.menu-toggle.active span:nth-child(2){opacity:0}
.menu-toggle.active span:nth-child(3){top:22px;transform:translateX(-50%) rotate(-45deg)}

/* ============ HERO ============ */
.hero{
  min-height:100vh;position:relative;
  display:flex;align-items:center;
  padding:140px 5% 80px;overflow:hidden;
}
.hero-bg{position:absolute;inset:0;overflow:hidden;z-index:0}
.hero-orb{
  position:absolute;border-radius:50%;filter:blur(100px);
  opacity:.4;animation:orbFloat 12s ease-in-out infinite;
}
.orb-1{width:600px;height:600px;background:var(--primary);top:-200px;left:-200px}
.orb-2{width:500px;height:500px;background:var(--accent);bottom:-200px;right:-150px;animation-delay:3s}
.orb-3{width:400px;height:400px;background:var(--neon);top:30%;right:20%;animation-delay:6s;opacity:.2}
@keyframes orbFloat{
  0%,100%{transform:translate(0,0) scale(1)}
  33%{transform:translate(50px,-50px) scale(1.1)}
  66%{transform:translate(-30px,30px) scale(.95)}
}
.hero-noise{
  position:absolute;inset:0;z-index:1;opacity:.03;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
  pointer-events:none;
}
.hero-content{
  position:relative;z-index:2;
  max-width:1300px;margin:0 auto;width:100%;
  text-align:center;
}
.hero-pill{
  display:inline-flex;align-items:center;gap:10px;
  padding:8px 20px;border-radius:50px;
  background:var(--card);border:1px solid var(--border);
  font-size:.85rem;color:var(--text-2);
  margin-bottom:30px;
  box-shadow:var(--shadow);
  animation:fadeUp .8s ease both;
}
.hero-pill .pulse-dot{
  width:8px;height:8px;background:#22c55e;border-radius:50%;
  animation:pulse 2s infinite;
}
@keyframes pulse{
  0%,100%{box-shadow:0 0 0 0 rgba(34,197,94,.7)}
  50%{box-shadow:0 0 0 8px rgba(34,197,94,0)}
}
.hero h1{
  font-size:clamp(2.5rem,7vw,6rem);
  font-weight:700;line-height:1;
  margin-bottom:30px;
  animation:fadeUp .8s ease .1s both;
}
.hero h1 .accent{
  background:linear-gradient(135deg,var(--primary),var(--accent),var(--neon));
  -webkit-background-clip:text;background-clip:text;
  -webkit-text-fill-color:transparent;
  position:relative;display:inline-block;
}
.hero h1 .accent::after{
  content:'';position:absolute;bottom:-5px;left:0;right:0;
  height:4px;background:linear-gradient(90deg,var(--primary),var(--accent));
  border-radius:10px;
}
.hero-sub{
  font-size:clamp(1rem,1.5vw,1.25rem);
  color:var(--text-2);max-width:700px;margin:0 auto 45px;
  animation:fadeUp .8s ease .2s both;
}
.hero-cta{
  display:flex;gap:15px;justify-content:center;flex-wrap:wrap;
  animation:fadeUp .8s ease .3s both;
}
.btn{
  padding:16px 34px;border-radius:50px;
  font-weight:600;font-size:.95rem;text-decoration:none;
  display:inline-flex;align-items:center;gap:10px;
  transition:all .3s;cursor:pointer;border:none;font-family:inherit;
}
.btn-primary{
  background:var(--primary);color:#fff;
  box-shadow:0 10px 30px rgba(37,99,235,.35);
  position:relative;overflow:hidden;
}
.btn-primary::before{
  content:'';position:absolute;inset:0;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,.3),transparent);
  transform:translateX(-100%);
  transition:transform .6s;
}
.btn-primary:hover::before{transform:translateX(100%)}
.btn-primary:hover{transform:translateY(-3px);box-shadow:var(--shadow-lg)}
.btn-ghost{
  background:var(--card);color:var(--text);
  border:1px solid var(--border);
}
.btn-ghost:hover{
  border-color:var(--primary);color:var(--primary);
  transform:translateY(-3px);
}

/* Hero bento mini stats */
.hero-bento{
  display:grid;grid-template-columns:repeat(4,1fr);gap:20px;
  max-width:1000px;margin:80px auto 0;
  animation:fadeUp .8s ease .4s both;
}
.bento-mini{
  background:var(--card);border:1px solid var(--border);
  border-radius:20px;padding:24px;text-align:left;
  transition:all .4s;position:relative;overflow:hidden;
}
.bento-mini::before{
  content:'';position:absolute;top:0;left:0;right:0;height:2px;
  background:linear-gradient(90deg,var(--primary),var(--accent));
  transform:scaleX(0);transform-origin:left;
  transition:transform .5s;
}
.bento-mini:hover::before{transform:scaleX(1)}
.bento-mini:hover{
  transform:translateY(-5px);
  box-shadow:var(--shadow-lg);
  border-color:var(--primary);
}
.bento-mini .icon{
  width:40px;height:40px;border-radius:12px;
  background:linear-gradient(135deg,var(--primary),var(--accent));
  display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:.9rem;margin-bottom:16px;
}
.bento-mini h4{font-size:1.5rem;font-weight:700;margin-bottom:4px}
.bento-mini p{font-size:.8rem;color:var(--text-3);margin:0}

@keyframes fadeUp{
  from{opacity:0;transform:translateY(30px)}
  to{opacity:1;transform:translateY(0)}
}

/* ============ SECTION BASE ============ */
section{padding:100px 5%;position:relative}
.container{max-width:1300px;margin:0 auto}
.sec-head{margin-bottom:70px;max-width:750px}
.sec-head.center{margin-left:auto;margin-right:auto;text-align:center}
.sec-tag{
  display:inline-flex;align-items:center;gap:8px;
  padding:6px 16px;border-radius:50px;
  background:var(--bg-2);border:1px solid var(--border);
  font-size:.8rem;font-weight:600;color:var(--text-2);
  margin-bottom:20px;text-transform:uppercase;letter-spacing:1.5px;
}
.sec-tag::before{
  content:'';width:6px;height:6px;background:var(--primary);
  border-radius:50%;box-shadow:0 0 10px var(--primary);
}
.sec-head h2{
  font-size:clamp(2rem,4.5vw,3.5rem);
  font-weight:700;line-height:1.1;margin-bottom:20px;
}
.sec-head p{color:var(--text-2);font-size:1.05rem}
.sec-head h2 .accent{
  background:linear-gradient(135deg,var(--primary),var(--accent));
  -webkit-background-clip:text;background-clip:text;
  -webkit-text-fill-color:transparent;
}

/* Reveal */
.reveal{opacity:0;transform:translateY(40px);transition:all .9s cubic-bezier(.4,0,.2,1)}
.reveal.active{opacity:1;transform:translateY(0)}
.reveal-delay-1{transition-delay:.1s}
.reveal-delay-2{transition-delay:.2s}
.reveal-delay-3{transition-delay:.3s}

/* ============ MARQUEE ============ */
.marquee{
  padding:30px 0;overflow:hidden;
  border-top:1px solid var(--border);
  border-bottom:1px solid var(--border);
  background:var(--bg-2);
}
.marquee-track{
  display:flex;gap:80px;width:fit-content;
  animation:scroll 30s linear infinite;
}
.marquee-item{
  font-family:'Space Grotesk',sans-serif;
  font-size:1.8rem;font-weight:700;
  color:var(--text-3);white-space:nowrap;
  display:flex;align-items:center;gap:80px;
  opacity:.5;transition:opacity .3s;
}
.marquee-item:hover{opacity:1;color:var(--primary)}
.marquee-item i{color:var(--primary);font-size:1.2rem}
@keyframes scroll{to{transform:translateX(-50%)}}

/* ============ ABOUT ============ */
.about-wrap{
  display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;
}
.about-visual{position:relative}
.about-img-main{
  border-radius:30px;overflow:hidden;
  box-shadow:var(--shadow-lg);
  aspect-ratio:4/5;position:relative;
}
.about-img-main img{width:100%;height:100%;object-fit:cover;transition:transform .8s}
.about-img-main:hover img{transform:scale(1.05)}
.about-float-card{
  position:absolute;bottom:-30px;right:-30px;
  background:var(--card);border:1px solid var(--border);
  border-radius:24px;padding:24px;
  box-shadow:var(--shadow-lg);
  width:220px;
  animation:floatY 5s ease-in-out infinite;
}
.about-float-card .icon{
  width:48px;height:48px;border-radius:14px;
  background:linear-gradient(135deg,var(--primary),var(--accent));
  display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:1.2rem;margin-bottom:15px;
}
.about-float-card h4{font-size:1.6rem;margin-bottom:4px}
.about-float-card p{font-size:.85rem;color:var(--text-3);margin:0}
@keyframes floatY{
  0%,100%{transform:translateY(0)}
  50%{transform:translateY(-15px)}
}
.about-list{display:grid;gap:16px;margin:30px 0}
.about-list-item{
  display:flex;align-items:flex-start;gap:14px;
  padding:18px;background:var(--card);border:1px solid var(--border);
  border-radius:16px;transition:all .3s;
}
.about-list-item:hover{
  transform:translateX(8px);
  border-color:var(--primary);
  box-shadow:var(--shadow);
}
.about-list-item .check{
  width:32px;height:32px;border-radius:50%;flex-shrink:0;
  background:linear-gradient(135deg,var(--primary),var(--accent));
  display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:.8rem;
}
.about-list-item h4{font-size:.95rem;margin-bottom:3px}
.about-list-item p{font-size:.85rem;color:var(--text-3);margin:0}

/* ============ SERVICES BENTO ============ */
.bento-grid{
  display:grid;grid-template-columns:repeat(6,1fr);
  grid-auto-rows:180px;gap:20px;
}
.bento-card{
  background:var(--card);border:1px solid var(--border);
  border-radius:24px;padding:30px;overflow:hidden;
  position:relative;transition:all .4s cubic-bezier(.4,0,.2,1);
  display:flex;flex-direction:column;justify-content:space-between;
}
.bento-card::before{
  content:'';position:absolute;inset:0;
  background:linear-gradient(135deg,rgba(37,99,235,.08),rgba(0,212,255,.08));
  opacity:0;transition:opacity .4s;
}
.bento-card:hover::before{opacity:1}
.bento-card:hover{
  transform:translateY(-5px);
  border-color:var(--primary);
  box-shadow:var(--shadow-lg);
}
.bento-card > *{position:relative;z-index:1}
.bento-large{grid-column:span 3;grid-row:span 2}
.bento-medium{grid-column:span 3;grid-row:span 1}
.bento-small{grid-column:span 2;grid-row:span 1}
.bento-tall{grid-column:span 2;grid-row:span 2}

.bento-icon{
  width:56px;height:56px;border-radius:16px;
  background:linear-gradient(135deg,var(--primary),var(--accent));
  display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:1.4rem;
  box-shadow:var(--glow);
  transition:transform .4s;
}
.bento-card:hover .bento-icon{transform:rotate(-10deg) scale(1.1)}
.bento-card h3{font-size:1.3rem;margin-bottom:8px;font-weight:600}
.bento-card p{color:var(--text-2);font-size:.9rem;margin:0}
.bento-large h3{font-size:1.8rem}
.bento-num{
  position:absolute;top:20px;right:24px;
  font-family:'Space Grotesk',sans-serif;
  font-size:3rem;font-weight:700;
  color:var(--text-3);opacity:.15;line-height:1;
}

/* ============ PORTFOLIO MASONRY ============ */
.portfolio-masonry{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  grid-auto-rows:200px;gap:20px;
}
.pf-item{
  border-radius:24px;overflow:hidden;position:relative;
  cursor:pointer;transition:all .4s;
}
.pf-item img{
  width:100%;height:100%;object-fit:cover;
  transition:transform .8s cubic-bezier(.4,0,.2,1);
}
.pf-item:hover img{transform:scale(1.1)}
.pf-item.tall{grid-row:span 2}
.pf-item.wide{grid-column:span 2}
.pf-overlay{
  position:absolute;inset:0;
  background:linear-gradient(to top,rgba(10,14,26,.95),transparent 60%);
  display:flex;flex-direction:column;justify-content:flex-end;
  padding:28px;opacity:0;transition:opacity .4s;
}
.pf-item:hover .pf-overlay{opacity:1}
.pf-overlay .pf-tag{
  display:inline-block;padding:5px 14px;
  background:var(--primary);color:#fff;
  border-radius:50px;font-size:.75rem;font-weight:600;
  margin-bottom:12px;width:fit-content;
}
.pf-overlay h3{color:#fff;font-size:1.3rem;margin-bottom:6px}
.pf-overlay p{color:rgba(255,255,255,.7);font-size:.85rem;margin:0}
.pf-plus{
  position:absolute;top:20px;right:20px;
  width:44px;height:44px;border-radius:50%;
  background:#fff;color:var(--text);
  display:flex;align-items:center;justify-content:center;
  transform:scale(0) rotate(-90deg);
  transition:transform .4s .1s;
}
.pf-item:hover .pf-plus{transform:scale(1) rotate(0)}

/* Lightbox */
.lightbox{
  position:fixed;inset:0;z-index:9999;
  background:rgba(10,14,26,.95);backdrop-filter:blur(20px);
  display:flex;align-items:center;justify-content:center;
  opacity:0;visibility:hidden;transition:all .4s;
  padding:5%;
}
.lightbox.active{opacity:1;visibility:visible}
.lightbox img{
  max-width:90%;max-height:85vh;border-radius:20px;
  box-shadow:0 30px 80px rgba(0,0,0,.6);
  transform:scale(.9);transition:transform .4s;
}
.lightbox.active img{transform:scale(1)}
.lightbox-close{
  position:absolute;top:30px;right:30px;
  width:50px;height:50px;border-radius:50%;
  background:rgba(255,255,255,.1);color:#fff;
  border:1px solid rgba(255,255,255,.2);
  font-size:1.2rem;cursor:pointer;
  display:flex;align-items:center;justify-content:center;
  transition:all .3s;
}
.lightbox-close:hover{background:var(--primary);transform:rotate(90deg)}

/* ============ TESTIMONIAL CAROUSEL ============ */
.testi-wrap{
  position:relative;overflow:hidden;
  padding:0 60px;
}
.testi-track{
  display:flex;gap:30px;
  transition:transform .6s cubic-bezier(.4,0,.2,1);
}
.testi-card{
  flex:0 0 calc(33.333% - 20px);
  background:var(--card);border:1px solid var(--border);
  border-radius:24px;padding:36px;
  position:relative;transition:all .4s;
}
.testi-card:hover{
  border-color:var(--primary);
  box-shadow:var(--shadow-lg);
  transform:translateY(-5px);
}
.testi-quote{
  font-family:'Space Grotesk',sans-serif;
  font-size:4rem;line-height:1;
  background:linear-gradient(135deg,var(--primary),var(--accent));
  -webkit-background-clip:text;background-clip:text;
  -webkit-text-fill-color:transparent;
  margin-bottom:-10px;
}
.testi-card .stars{color:#f59e0b;margin-bottom:16px;font-size:.85rem}
.testi-card p{color:var(--text);font-size:1rem;line-height:1.7;margin-bottom:24px}
.testi-author{display:flex;align-items:center;gap:14px}
.testi-author img{
  width:52px;height:52px;border-radius:50%;object-fit:cover;
  border:2px solid var(--primary);
}
.testi-author h4{font-size:.95rem;margin-bottom:2px}
.testi-author p{font-size:.8rem;color:var(--text-3);margin:0}
.testi-nav{
  position:absolute;top:50%;transform:translateY(-50%);
  width:50px;height:50px;border-radius:50%;
  background:var(--card);border:1px solid var(--border);
  color:var(--text);cursor:pointer;
  display:flex;align-items:center;justify-content:center;
  transition:all .3s;z-index:2;
}
.testi-nav:hover{background:var(--primary);color:#fff;border-color:var(--primary)}
.testi-prev{left:0}
.testi-next{right:0}
.testi-dots{
  display:flex;justify-content:center;gap:8px;margin-top:40px;
}
.testi-dot{
  width:8px;height:8px;border-radius:50%;
  background:var(--text-3);border:none;cursor:pointer;
  transition:all .3s;
}
.testi-dot.active{width:30px;border-radius:10px;background:var(--primary)}

/* ============ CTA ============ */
.cta-wrap{
  background:linear-gradient(135deg,var(--primary),var(--accent));
  border-radius:32px;padding:80px 60px;
  position:relative;overflow:hidden;text-align:center;color:#fff;
}
.cta-wrap::before{
  content:'';position:absolute;top:-50%;left:-50%;
  width:200%;height:200%;
  background:radial-gradient(circle,rgba(255,255,255,.1),transparent 60%);
  animation:rotate 30s linear infinite;
}
@keyframes rotate{to{transform:rotate(360deg)}}
.cta-wrap > *{position:relative;z-index:1}
.cta-wrap h2{
  font-size:clamp(2rem,4vw,3rem);
  font-weight:700;margin-bottom:20px;
}
.cta-wrap p{font-size:1.1rem;opacity:.95;margin-bottom:35px;max-width:600px;margin-left:auto;margin-right:auto}
.cta-btn{
  background:#fff;color:var(--primary);
  padding:18px 42px;border-radius:50px;
  font-weight:700;text-decoration:none;
  display:inline-flex;align-items:center;gap:10px;
  transition:all .3s;
}
.cta-btn:hover{transform:translateY(-3px) scale(1.03);box-shadow:0 20px 50px rgba(0,0,0,.25)}

/* ============ FOOTER ============ */
footer{
  background:var(--bg-2);border-top:1px solid var(--border);
  padding:80px 5% 30px;
}
.footer-grid{
  max-width:1300px;margin:0 auto;
  display:grid;grid-template-columns:2fr 1fr 1fr 1.5fr;gap:60px;
  margin-bottom:50px;
}
.footer-brand .logo{margin-bottom:20px;font-size:1.3rem}
.footer-brand > p{color:var(--text-2);font-size:.95rem;margin-bottom:25px;max-width:320px}
.soc-list{display:flex;gap:10px}
.soc-list a{
  width:42px;height:42px;border-radius:12px;
  background:var(--card);border:1px solid var(--border);
  display:flex;align-items:center;justify-content:center;
  color:var(--text-2);text-decoration:none;
  transition:all .3s;
}
.soc-list a:hover{
  background:var(--primary);color:#fff;
  border-color:var(--primary);
  transform:translateY(-3px);
  box-shadow:var(--shadow);
}
.footer-col h4{
  font-size:1rem;margin-bottom:22px;
  color:var(--text);font-weight:600;
}
.footer-col ul{list-style:none}
.footer-col ul li{margin-bottom:12px}
.footer-col ul a{
  color:var(--text-2);text-decoration:none;
  font-size:.9rem;transition:all .3s;
  display:inline-flex;align-items:center;gap:6px;
}
.footer-col ul a::before{
  content:'';width:0;height:1px;background:var(--primary);
  transition:width .3s;
}
.footer-col ul a:hover{color:var(--primary)}
.footer-col ul a:hover::before{width:10px}

.news-form{
  display:flex;gap:8px;margin-top:16px;
  background:var(--card);border:1px solid var(--border);
  border-radius:50px;padding:5px;transition:all .3s;
}
.news-form:focus-within{border-color:var(--primary);box-shadow:var(--glow)}
.news-form input{
  flex:1;padding:12px 18px;background:transparent;
  border:none;color:var(--text);font-family:inherit;
  font-size:.9rem;outline:none;
}
.news-form input::placeholder{color:var(--text-3)}
.news-form button{
  width:44px;height:44px;border-radius:50%;
  background:linear-gradient(135deg,var(--primary),var(--accent));
  color:#fff;border:none;cursor:pointer;
  transition:transform .3s;
}
.news-form button:hover{transform:rotate(45deg)}

.footer-info{margin-top:22px;display:grid;gap:10px}
.footer-info p{
  display:flex;align-items:center;gap:10px;
  font-size:.88rem;color:var(--text-2);
}
.footer-info i{color:var(--primary);width:16px}

.footer-bottom{
  max-width:1300px;margin:0 auto;
  padding-top:30px;border-top:1px solid var(--border);
  display:flex;justify-content:space-between;align-items:center;
  flex-wrap:wrap;gap:15px;font-size:.85rem;
  color:var(--text-3);
}
.footer-bottom a{color:var(--text-3);text-decoration:none}
.footer-bottom a:hover{color:var(--primary)}

/* ============ FLOATING BUTTONS ============ */
.float-btns{
  position:fixed;bottom:30px;right:30px;z-index:998;
  display:flex;flex-direction:column;gap:12px;
}
.float-btn{
  width:54px;height:54px;border-radius:50%;
  display:flex;align-items:center;justify-content:center;
  color:#fff;text-decoration:none;cursor:pointer;
  font-size:1.1rem;border:none;
  transition:all .3s;
  box-shadow:0 10px 30px rgba(0,0,0,.2);
}
.float-wa{background:#25d366}
.float-wa:hover{transform:scale(1.1) rotate(-10deg)}
.float-top{
  background:var(--primary);
  opacity:0;visibility:hidden;transform:translateY(20px);
}
.float-top.show{opacity:1;visibility:visible;transform:translateY(0)}
.float-top:hover{transform:translateY(-5px)}

/* ============ RESPONSIVE ============ */
@media(max-width:1100px){
  .bento-grid{grid-template-columns:repeat(4,1fr)}
  .bento-large{grid-column:span 4;grid-row:span 2}
  .bento-medium{grid-column:span 2}
  .bento-small{grid-column:span 2}
  .bento-tall{grid-column:span 2;grid-row:span 2}
}
@media(max-width:968px){
  .hero-bento{grid-template-columns:repeat(2,1fr);margin-top:50px}
  .about-wrap{grid-template-columns:1fr;gap:60px}
  .about-float-card{right:20px;bottom:20px}
  .portfolio-masonry{grid-template-columns:repeat(2,1fr)}
  .pf-item.wide{grid-column:span 2}
  .testi-card{flex:0 0 calc(50% - 15px)}
  .footer-grid{grid-template-columns:1fr 1fr;gap:40px}
  
  .nav-menu{
    position:fixed;top:0;right:-100%;height:100vh;width:80%;max-width:340px;
    background:var(--bg);flex-direction:column;
    padding:100px 30px 30px;gap:8px;border-radius:0;
    border-left:1px solid var(--border);
    box-shadow:-20px 0 60px rgba(0,0,0,.2);
    transition:right .4s cubic-bezier(.4,0,.2,1);
    z-index:999;
  }
  .nav-menu.active{right:0}
  .nav-menu a{width:100%;padding:14px 20px;font-size:1rem}
  .menu-toggle{display:block;z-index:1001}
  .btn-nav{display:none}
}
@media(max-width:640px){
  section{padding:70px 5%}
  .hero{padding:120px 5% 60px}
  .hero-bento{grid-template-columns:1fr;gap:12px}
  .bento-mini{padding:18px}
  .bento-mini h4{font-size:1.2rem}
  
  .bento-grid{grid-template-columns:1fr;grid-auto-rows:auto}
  .bento-card{grid-column:span 1 !important;grid-row:span 1 !important;min-height:160px}
  
  .portfolio-masonry{grid-template-columns:1fr}
  .pf-item.wide,.pf-item.tall{grid-column:span 1;grid-row:span 1}
  
  .testi-wrap{padding:0}
  .testi-card{flex:0 0 100%}
  .testi-nav{display:none}
  
  .footer-grid{grid-template-columns:1fr;gap:35px}
  .footer-bottom{justify-content:center;text-align:center}
  
  .cta-wrap{padding:50px 25px;border-radius:24px}
  .float-btns{bottom:20px;right:20px}
  .float-btn{width:48px;height:48px;font-size:1rem}
  
  .marquee-item{font-size:1.3rem;gap:40px}
  .marquee-track{gap:40px}
}
</style>
</head>
<body>

<!-- SCROLL PROGRESS -->
<div class="scroll-progress" id="scrollProgress"></div>

<!-- CUSTOM CURSOR -->
<div class="cursor-dot" id="cursorDot"></div>
<div class="cursor-ring" id="cursorRing"></div>

<!-- LOADER -->
<div class="loader" id="loader">
  <div class="loader-text">LUMINA</div>
  <div class="loader-bar"></div>
</div>

<!-- NAVBAR -->
<nav id="navbar">
  <div class="nav-container">
    <a href="#" class="logo">
      <div class="logo-mark"><i class="fas fa-cube"></i></div>
      <span class="logo-text">Lumina</span>
    </a>
    
    <ul class="nav-menu" id="navMenu">
      <li><a href="#home" class="active">Home</a></li>
      <li><a href="#about">Tentang</a></li>
      <li><a href="#services">Layanan</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#testimonials">Testimoni</a></li>
      <li><a href="#contact">Kontak</a></li>
    </ul>
    
    <div class="nav-actions">
      <button class="theme-toggle" id="themeToggle" title="Ganti Tema">
        <i class="fas fa-sun"></i>
        <i class="fas fa-moon"></i>
      </button>
      <a href="#contact" class="btn-nav">Mulai Proyek</a>
      <button class="menu-toggle" id="menuToggle">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-bg">
    <div class="hero-orb orb-1"></div>
    <div class="hero-orb orb-2"></div>
    <div class="hero-orb orb-3"></div>
  </div>
  <div class="hero-noise"></div>
  
  <div class="hero-content">
    <div class="hero-pill">
      <span class="pulse-dot"></span>
      Available for Projects · 2025
    </div>
    <h1>
      Kami Bangun <br>
      <span class="accent">Masa Depan Digital</span> <br>
      Bisnis Anda
    </h1>
    <p class="hero-sub">
      Studio kreatif yang menggabungkan desain futuristik, teknologi mutakhir, dan strategi tajam untuk mengubah ide menjadi kenyataan digital.
    </p>
    <div class="hero-cta">
      <a href="#contact" class="btn btn-primary">Mulai Sekarang <i class="fas fa-arrow-right"></i></a>
      <a href="#portfolio" class="btn btn-ghost"><i class="fas fa-circle-play"></i> Lihat Karya</a>
    </div>
    
    <div class="hero-bento">
      <div class="bento-mini">
        <div class="icon"><i class="fas fa-rocket"></i></div>
        <h4><span class="counter" data-target="320">0</span>+</h4>
        <p>Proyek Sukses</p>
      </div>
      <div class="bento-mini">
        <div class="icon"><i class="fas fa-heart"></i></div>
        <h4><span class="counter" data-target="240">0</span>+</h4>
        <p>Klien Bahagia</p>
      </div>
      <div class="bento-mini">
        <div class="icon"><i class="fas fa-star"></i></div>
        <h4><span class="counter" data-target="49">0</span>★</h4>
        <p>Rating Klien</p>
      </div>
      <div class="bento-mini">
        <div class="icon"><i class="fas fa-clock"></i></div>
        <h4><span class="counter" data-target="10">0</span>+</h4>
        <p>Tahun Pengalaman</p>
      </div>
    </div>
  </div>
</section>

<!-- MARQUEE -->
<div class="marquee">
  <div class="marquee-track">
    <div class="marquee-item"><i class="fas fa-star"></i> Web Development</div>
    <div class="marquee-item"><i class="fas fa-star"></i> UI/UX Design</div>
    <div class="marquee-item"><i class="fas fa-star"></i> Mobile Apps</div>
    <div class="marquee-item"><i class="fas fa-star"></i> Branding</div>
    <div class="marquee-item"><i class="fas fa-star"></i> Digital Marketing</div>
    <div class="marquee-item"><i class="fas fa-star"></i> SEO Optimization</div>
    <div class="marquee-item"><i class="fas fa-star"></i> Web Development</div>
    <div class="marquee-item"><i class="fas fa-star"></i> UI/UX Design</div>
    <div class="marquee-item"><i class="fas fa-star"></i> Mobile Apps</div>
    <div class="marquee-item"><i class="fas fa-star"></i> Branding</div>
    <div class="marquee-item"><i class="fas fa-star"></i> Digital Marketing</div>
    <div class="marquee-item"><i class="fas fa-star"></i> SEO Optimization</div>
  </div>
</div>

<!-- ABOUT -->
<section id="about">
  <div class="container">
    <div class="about-wrap">
      <div class="about-visual reveal">
        <div class="about-img-main">
          <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&q=80" alt="Team">
        </div>
        <div class="about-float-card">
          <div class="icon"><i class="fas fa-medal"></i></div>
          <h4><span class="counter" data-target="10">0</span>+ Tahun</h4>
          <p>Pengalaman Terpercaya</p>
        </div>
      </div>
      
      <div class="about-content reveal reveal-delay-1">
        <div class="sec-tag">Tentang Kami</div>
        <h2 style="font-size:clamp(1.8rem,3.5vw,2.8rem);line-height:1.15;margin-bottom:20px">
          Bukan Sekadar Agensi,<br>
          Kami <span style="background:linear-gradient(135deg,var(--primary),var(--accent));-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent">Partner Pertumbuhan</span> Anda
        </h2>
        <p style="color:var(--text-2);font-size:1.05rem;margin-bottom:15px">
          Lumina Digital hadir untuk membantu bisnis Anda tampil beda di era digital. Kami percaya bahwa desain yang baik dan teknologi tepat guna adalah kunci kesuksesan.
        </p>
        
        <div class="about-list">
          <div class="about-list-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <div>
              <h4>Strategi Berbasis Data</h4>
              <p>Setiap keputusan didasari riset mendalam dan analisis pasar</p>
            </div>
          </div>
          <div class="about-list-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <div>
              <h4>Tim Multi-Disiplin</h4>
              <p>Desainer, developer, dan marketer bersatu dalam satu visi</p>
            </div>
          </div>
          <div class="about-list-item">
            <div class="check"><i class="fas fa-check"></i></div>
            <div>
              <h4>Hasil Terukur & Transparan</h4>
              <p>Laporan progres berkala dan komunikasi terbuka setiap saat</p>
            </div>
          </div>
        </div>
        
        <a href="#contact" class="btn btn-primary">Diskusi Gratis <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES BENTO -->
<section id="services" style="background:var(--bg-2)">
  <div class="container">
    <div class="sec-head center reveal">
      <div class="sec-tag">Layanan</div>
      <h2>Solusi <span class="accent">Lengkap & Modern</span></h2>
      <p>Dari konsep hingga peluncuran, kami tangani semua aspek kebutuhan digital bisnis Anda.</p>
    </div>
    
    <div class="bento-grid">
      <div class="bento-card bento-large reveal">
        <span class="bento-num">01</span>
        <div>
          <div class="bento-icon"><i class="fas fa-code"></i></div>
        </div>
        <div>
          <h3>Web Development</h3>
          <p>Website modern, cepat, dan scalable dengan teknologi terkini. Dari landing page hingga platform e-commerce kompleks, kami bangun dengan performa optimal.</p>
        </div>
      </div>
      
      <div class="bento-card bento-small reveal reveal-delay-1">
        <span class="bento-num">02</span>
        <div class="bento-icon"><i class="fas fa-palette"></i></div>
        <div>
          <h3>UI/UX Design</h3>
          <p>Desain yang memukau & fungsional</p>
        </div>
      </div>
      
      <div class="bento-card bento-small reveal reveal-delay-2">
        <span class="bento-num">03</span>
        <div class="bento-icon"><i class="fas fa-mobile-screen"></i></div>
        <div>
          <h3>Mobile App</h3>
          <p>iOS & Android native</p>
        </div>
      </div>
      
      <div class="bento-card bento-tall reveal reveal-delay-1">
        <span class="bento-num">04</span>
        <div class="bento-icon"><i class="fas fa-bullhorn"></i></div>
        <div>
          <h3>Digital Marketing</h3>
          <p>Strategi pemasaran digital yang tepat sasaran — dari social media, SEO, hingga paid ads untuk meningkatkan konversi.</p>
        </div>
      </div>
      
      <div class="bento-card bento-small reveal reveal-delay-2">
        <span class="bento-num">05</span>
        <div class="bento-icon"><i class="fas fa-fingerprint"></i></div>
        <div>
          <h3>Branding</h3>
          <p>Identitas visual yang kuat</p>
        </div>
      </div>
      
      <div class="bento-card bento-small reveal reveal-delay-3">
        <span class="bento-num">06</span>
        <div class="bento-icon"><i class="fas fa-magnifying-glass-chart"></i></div>
        <div>
          <h3>SEO</h3>
          <p>Optimasi visibilitas online</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PORTFOLIO MASONRY -->
<section id="portfolio">
  <div class="container">
    <div class="sec-head center reveal">
      <div class="sec-tag">Portfolio</div>
      <h2>Karya yang <span class="accent">Berbicara</span></h2>
      <p>Klik untuk melihat detail proyek yang telah kami kerjakan.</p>
    </div>
    
    <div class="portfolio-masonry">
      <div class="pf-item tall reveal" data-img="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&q=80" alt="Project">
        <div class="pf-overlay">
          <span class="pf-tag">Web Design</span>
          <h3>E-Commerce Platform</h3>
          <p>Belanja online dengan pengalaman terbaik</p>
        </div>
        <div class="pf-plus"><i class="fas fa-plus"></i></div>
      </div>
      
      <div class="pf-item wide reveal reveal-delay-1" data-img="https://images.unsplash.com/photo-1618761714954-0b8cd0026356?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1618761714954-0b8cd0026356?w=800&q=80" alt="Project">
        <div class="pf-overlay">
          <span class="pf-tag">Mobile App</span>
          <h3>Fintech Dashboard</h3>
          <p>Aplikasi keuangan digital modern</p>
        </div>
        <div class="pf-plus"><i class="fas fa-plus"></i></div>
      </div>
      
      <div class="pf-item reveal reveal-delay-2" data-img="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&q=80" alt="Project">
        <div class="pf-overlay">
          <span class="pf-tag">Branding</span>
          <h3>Coffee Brand</h3>
          <p>Rebranding visual modern</p>
        </div>
        <div class="pf-plus"><i class="fas fa-plus"></i></div>
      </div>
      
      <div class="pf-item reveal" data-img="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80" alt="Project">
        <div class="pf-overlay">
          <span class="pf-tag">Web App</span>
          <h3>Analytics SaaS</h3>
          <p>Dashboard data real-time</p>
        </div>
        <div class="pf-plus"><i class="fas fa-plus"></i></div>
      </div>
      
      <div class="pf-item reveal reveal-delay-1" data-img="https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?w=800&q=80" alt="Project">
        <div class="pf-overlay">
          <span class="pf-tag">Mobile App</span>
          <h3>Health Tracker</h3>
          <p>Aplikasi kesehatan pribadi</p>
        </div>
        <div class="pf-plus"><i class="fas fa-plus"></i></div>
      </div>
      
      <div class="pf-item reveal reveal-delay-2" data-img="https://images.unsplash.com/photo-1626785774573-4b799315345d?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?w=800&q=80" alt="Project">
        <div class="pf-overlay">
          <span class="pf-tag">Branding</span>
          <h3>Startup Identity</h3>
          <p>Logo & brand guideline</p>
        </div>
        <div class="pf-plus"><i class="fas fa-plus"></i></div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIAL CAROUSEL -->
<section id="testimonials" style="background:var(--bg-2)">
  <div class="container">
    <div class="sec-head center reveal">
      <div class="sec-tag">Testimoni</div>
      <h2>Cerita <span class="accent">Klien Kami</span></h2>
      <p>Pengalaman nyata dari mereka yang telah bekerja sama dengan kami.</p>
    </div>
    
    <div class="testi-wrap reveal">
      <button class="testi-nav testi-prev" id="testiPrev"><i class="fas fa-arrow-left"></i></button>
      <button class="testi-nav testi-next" id="testiNext"><i class="fas fa-arrow-right"></i></button>
      
      <div class="testi-track" id="testiTrack">
        <div class="testi-card">
          <div class="testi-quote">"</div>
          <div class="stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p>Lumina mengubah cara kami berbisnis. Website baru meningkatkan konversi 3x lipat dalam 6 bulan. Tim mereka sangat profesional dan responsif!</p>
          <div class="testi-author">
            <img src="https://i.pravatar.cc/150?img=12" alt="Client">
            <div>
              <h4>Andi Wijaya</h4>
              <p>CEO, Fashion Store</p>
            </div>
          </div>
        </div>
        
        <div class="testi-card">
          <div class="testi-quote">"</div>
          <div class="stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p>Kerja sama yang menyenangkan. Setiap request direspon cepat, hasilnya selalu melebihi ekspektasi. Highly recommended untuk bisnis Anda!</p>
          <div class="testi-author">
            <img src="https://i.pravatar.cc/150?img=45" alt="Client">
            <div>
              <h4>Siti Nurhaliza</h4>
              <p>Founder, Beauty Brand</p>
            </div>
          </div>
        </div>
        
        <div class="testi-card">
          <div class="testi-quote">"</div>
          <div class="stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p>Aplikasi mobile yang dibangun sangat user-friendly. Feedback user kami sangat positif. Lumina benar-benar paham kebutuhan bisnis kami.</p>
          <div class="testi-author">
            <img src="https://i.pravatar.cc/150?img=33" alt="Client">
            <div>
              <h4>Budi Santoso</h4>
              <p>CTO, Fintech Startup</p>
            </div>
          </div>
        </div>
        
        <div class="testi-card">
          <div class="testi-quote">"</div>
          <div class="stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p>Branding yang mereka buat sangat cocok dengan visi kami. Sekarang brand kami jauh lebih dikenal dan mudah diingat pelanggan.</p>
          <div class="testi-author">
            <img src="https://i.pravatar.cc/150?img=68" alt="Client">
            <div>
              <h4>Maya Anggraini</h4>
              <p>Marketing Director, F&B</p>
            </div>
          </div>
        </div>
        
        <div class="testi-card">
          <div class="testi-quote">"</div>
          <div class="stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p>Investasi terbaik untuk bisnis kami. ROI dari digital marketing yang mereka jalankan sangat memuaskan. Terima kasih Lumina!</p>
          <div class="testi-author">
            <img src="https://i.pravatar.cc/150?img=52" alt="Client">
            <div>
              <h4>Reza Pratama</h4>
              <p>Owner, EduTech</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="testi-dots" id="testiDots"></div>
    </div>
  </div>
</section>

<!-- CTA -->
<section>
  <div class="container">
    <div class="cta-wrap reveal">
      <h2>Punya Ide? Mari Wujudkan Bersama</h2>
      <p>Konsultasi gratis dengan tim ahli kami. Ceritakan visi Anda, kami bantu wujudkan dengan teknologi dan desain terbaik.</p>
      <a href="#contact" class="cta-btn">Mulai Konsultasi <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer id="contact">
  <div class="footer-grid">
    <div class="footer-brand">
      <a href="#" class="logo">
        <div class="logo-mark"><i class="fas fa-cube"></i></div>
        <span class="logo-text">Lumina</span>
      </a>
      <p>Studio kreatif digital yang membantu bisnis Anda tumbuh melalui desain inovatif dan teknologi masa depan.</p>
      <div class="soc-list">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-x-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
      </div>
    </div>
    
    <div class="footer-col">
      <h4>Layanan</h4>
      <ul>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">UI/UX Design</a></li>
        <li><a href="#">Mobile App</a></li>
        <li><a href="#">Digital Marketing</a></li>
        <li><a href="#">Branding</a></li>
      </ul>
    </div>
    
    <div class="footer-col">
      <h4>Perusahaan</h4>
      <ul>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#">Karier</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>
    
    <div class="footer-col">
      <h4>Newsletter</h4>
      <p style="color:var(--text-2);font-size:.9rem">Tips digital & insight terbaru langsung ke inbox Anda.</p>
      <form class="news-form" onsubmit="event.preventDefault();alert('Terima kasih telah berlangganan! 🎉')">
        <input type="email" placeholder="Email Anda" required>
        <button type="submit"><i class="fas fa-paper-plane"></i></button>
      </form>
      <div class="footer-info">
        <p><i class="fas fa-envelope"></i> hello@lumina.id</p>
        <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
        <p><i class="fas fa-location-dot"></i> Jakarta, Indonesia</p>
      </div>
    </div>
  </div>
  
  <div class="footer-bottom">
    <p>© 2025 Lumina Digital Studio. All rights reserved.</p>
    <p><a href="#">Privacy</a> · <a href="#">Terms</a> · <a href="#">Cookies</a></p>
  </div>
</footer>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
  <button class="lightbox-close" id="lightboxClose"><i class="fas fa-times"></i></button>
  <img src="" alt="Preview" id="lightboxImg">
</div>

<!-- FLOATING BUTTONS -->
<div class="float-btns">
  <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2002" class="float-btn float-wa" target="_blank" title="Chat WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
  <button class="float-btn float-top" id="backTop" title="Kembali ke Atas">
    <i class="fas fa-arrow-up"></i>
  </button>
</div>

<script>
/* ============ THEME TOGGLE ============ */
const themeToggle = document.getElementById('themeToggle');
const html = document.documentElement;

// Load saved theme
const savedTheme = localStorage.getItem('lumina-theme') || 'light';
html.setAttribute('data-theme', savedTheme);

themeToggle.addEventListener('click', () => {
  const current = html.getAttribute('data-theme');
  const next = current === 'light' ? 'dark' : 'light';
  html.setAttribute('data-theme', next);
  localStorage.setItem('lumina-theme', next);
  // Small feedback animation
  themeToggle.style.transform = 'scale(.85) rotate(180deg)';
  setTimeout(() => themeToggle.style.transform = '', 300);
});

/* ============ LOADER ============ */
window.addEventListener('load', () => {
  setTimeout(() => document.getElementById('loader').classList.add('hidden'), 800);
});

/* ============ CUSTOM CURSOR ============ */
const cursorDot = document.getElementById('cursorDot');
const cursorRing = document.getElementById('cursorRing');
let mouseX = 0, mouseY = 0;
let ringX = 0, ringY = 0;

document.addEventListener('mousemove', e => {
  mouseX = e.clientX;
  mouseY = e.clientY;
  cursorDot.style.left = mouseX + 'px';
  cursorDot.style.top = mouseY + 'px';
});

function animateRing(){
  ringX += (mouseX - ringX) * 0.15;
  ringY += (mouseY - ringY) * 0.15;
  cursorRing.style.left = ringX + 'px';
  cursorRing.style.top = ringY + 'px';
  requestAnimationFrame(animateRing);
}
animateRing();

// Hover effect on interactive elements
const hoverEls = document.querySelectorAll('a, button, .bento-card, .pf-item, .testi-card, .about-list-item');
hoverEls.forEach(el => {
  el.addEventListener('mouseenter', () => cursorRing.classList.add('hover'));
  el.addEventListener('mouseleave', () => cursorRing.classList.remove('hover'));
});

/* ============ SCROLL PROGRESS ============ */
const scrollProgress = document.getElementById('scrollProgress');
window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const percent = (scrollTop / docHeight) * 100;
  scrollProgress.style.width = percent + '%';
});

/* ============ NAVBAR ============ */
const navbar = document.getElementById('navbar');
const backTop = document.getElementById('backTop');
window.addEventListener('scroll', () => {
  if(window.scrollY > 50){
    navbar.classList.add('scrolled');
    backTop.classList.add('show');
  } else {
    navbar.classList.remove('scrolled');
    backTop.classList.remove('show');
  }
});

backTop.addEventListener('click', () => window.scrollTo({top:0,behavior:'smooth'}));

/* ============ MOBILE MENU ============ */
const menuToggle = document.getElementById('menuToggle');
const navMenu = document.getElementById('navMenu');
menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  navMenu.classList.toggle('active');
});
document.querySelectorAll('.nav-menu a').forEach(a => {
  a.addEventListener('click', () => {
    menuToggle.classList.remove('active');
    navMenu.classList.remove('active');
  });
});

/* ============ ACTIVE NAV LINK ============ */
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-menu a');
window.addEventListener('scroll', () => {
  let current = '';
  sections.forEach(sec => {
    const top = sec.offsetTop - 100;
    if(window.scrollY >= top) current = sec.getAttribute('id');
  });
  navLinks.forEach(link => {
    link.classList.remove('active');
    if(link.getAttribute('href') === '#' + current) link.classList.add('active');
  });
});

/* ============ REVEAL ON SCROLL ============ */
const revealObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if(entry.isIntersecting){
      entry.target.classList.add('active');
    }
  });
}, {threshold:0.1});
document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

/* ============ COUNTER ANIMATION ============ */
const counterObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if(entry.isIntersecting){
      const el = entry.target;
      const target = +el.dataset.target;
      const duration = 1800;
      const step = target / (duration / 16);
      let current = 0;
      const update = () => {
        current += step;
        if(current < target){
          el.textContent = Math.ceil(current);
          requestAnimationFrame(update);
        } else {
          el.textContent = target;
        }
      };
      update();
      counterObserver.unobserve(el);
    }
  });
}, {threshold:0.5});
document.querySelectorAll('.counter').forEach(el => counterObserver.observe(el));

/* ============ LIGHTBOX PORTFOLIO ============ */
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightboxImg');
const lightboxClose = document.getElementById('lightboxClose');

document.querySelectorAll('.pf-item').forEach(item => {
  item.addEventListener('click', () => {
    lightboxImg.src = item.dataset.img;
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
  });
});
lightboxClose.addEventListener('click', closeLightbox);
lightbox.addEventListener('click', e => {
  if(e.target === lightbox) closeLightbox();
});
document.addEventListener('keydown', e => {
  if(e.key === 'Escape') closeLightbox();
});
function closeLightbox(){
  lightbox.classList.remove('active');
  document.body.style.overflow = '';
}

/* ============ TESTIMONIAL CAROUSEL ============ */
const track = document.getElementById('testiTrack');
const cards = track.querySelectorAll('.testi-card');
const prevBtn = document.getElementById('testiPrev');
const nextBtn = document.getElementById('testiNext');
const dotsContainer = document.getElementById('testiDots');

let currentIndex = 0;
let cardsPerView = window.innerWidth <= 640 ? 1 : window.innerWidth <= 968 ? 2 : 3;
const totalSlides = Math.ceil(cards.length / cardsPerView);
let autoPlayInterval;

function renderDots(){
  dotsContainer.innerHTML = '';
  const dots = Math.ceil(cards.length - cardsPerView + 1);
  for(let i = 0; i < dots; i++){
    const dot = document.createElement('button');
    dot.className = 'testi-dot' + (i === currentIndex ? ' active' : '');
    dot.addEventListener('click', () => goToSlide(i));
    dotsContainer.appendChild(dot);
  }
}

function goToSlide(index){
  const maxIndex = cards.length - cardsPerView;
  currentIndex = Math.max(0, Math.min(index, maxIndex));
  const cardWidth = cards[0].offsetWidth + 30;
  track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
  
  const dots = dotsContainer.querySelectorAll('.testi-dot');
  dots.forEach((d, i) => d.classList.toggle('active', i === currentIndex));
}

prevBtn.addEventListener('click', () => {
  goToSlide(currentIndex - 1);
  resetAutoPlay();
});
nextBtn.addEventListener('click', () => {
  const maxIndex = cards.length - cardsPerView;
  goToSlide(currentIndex >= maxIndex ? 0 : currentIndex + 1);
  resetAutoPlay();
});

function startAutoPlay(){
  autoPlayInterval = setInterval(() => {
    const maxIndex = cards.length - cardsPerView;
    goToSlide(currentIndex >= maxIndex ? 0 : currentIndex + 1);
  }, 4500);
}
function resetAutoPlay(){
  clearInterval(autoPlayInterval);
  startAutoPlay();
}

function initCarousel(){
  cardsPerView = window.innerWidth <= 640 ? 1 : window.innerWidth <= 968 ? 2 : 3;
  currentIndex = 0;
  renderDots();
  goToSlide(0);
}
initCarousel();
startAutoPlay();

let resizeTimer;
window.addEventListener('resize', () => {
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(initCarousel, 250);
});

/* ============ SMOOTH SCROLL ============ */
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', function(e){
    const target = document.querySelector(this.getAttribute('href'));
    if(target){
      e.preventDefault();
      target.scrollIntoView({behavior:'smooth',block:'start'});
    }
  });
});
</script>

@endverbatim
@include('demo.company-profile.partials.demo-bar')
</body>
</html>