@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NexaTech Studio — Digital Company Profile</title>
<meta name="description" content="NexaTech Studio - Solusi Digital Kreatif untuk Bisnis Modern">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
/* ============ RESET & VARIABEL ============ */
*{margin:0;padding:0;box-sizing:border-box}
:root{
  --primary:#6366f1;
  --primary-dark:#4f46e5;
  --secondary:#ec4899;
  --accent:#06b6d4;
  --dark:#0f172a;
  --dark-2:#1e293b;
  --light:#f8fafc;
  --gray:#64748b;
  --gradient:linear-gradient(135deg,#6366f1 0%,#ec4899 100%);
  --gradient-2:linear-gradient(135deg,#06b6d4 0%,#6366f1 100%);
  --shadow:0 10px 40px rgba(99,102,241,.15);
  --shadow-lg:0 20px 60px rgba(99,102,241,.25);
}
html{scroll-behavior:smooth}
body{
  font-family:'Plus Jakarta Sans',sans-serif;
  background:var(--light);
  color:var(--dark);
  overflow-x:hidden;
  line-height:1.6;
}
::selection{background:var(--primary);color:#fff}

/* Scrollbar */
::-webkit-scrollbar{width:10px}
::-webkit-scrollbar-track{background:#e2e8f0}
::-webkit-scrollbar-thumb{background:var(--gradient);border-radius:10px}

/* ============ LOADER ============ */
.loader{
  position:fixed;inset:0;background:var(--dark);z-index:9999;
  display:flex;align-items:center;justify-content:center;
  transition:opacity .6s,visibility .6s;
}
.loader.hidden{opacity:0;visibility:hidden}
.loader-ring{
  width:60px;height:60px;border:4px solid rgba(255,255,255,.1);
  border-top-color:var(--primary);border-radius:50%;
  animation:spin 1s linear infinite;
}
@keyframes spin{to{transform:rotate(360deg)}}

/* ============ NAVBAR ============ */
nav{
  position:fixed;top:0;left:0;right:0;z-index:1000;
  padding:20px 5%;transition:all .4s ease;
  background:transparent;
}
nav.scrolled{
  background:rgba(255,255,255,.9);
  backdrop-filter:blur(20px);
  box-shadow:0 5px 30px rgba(0,0,0,.08);
  padding:12px 5%;
}
.nav-container{
  max-width:1300px;margin:0 auto;
  display:flex;justify-content:space-between;align-items:center;
}
.logo{
  font-size:1.5rem;font-weight:800;
  color:#fff;text-decoration:none;display:flex;align-items:center;gap:10px;
  transition:color .3s;
}
nav.scrolled .logo{color:var(--dark)}
.logo-icon{
  width:40px;height:40px;background:var(--gradient);
  border-radius:12px;display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:1.1rem;
  box-shadow:var(--shadow);
}
.nav-links{display:flex;gap:35px;list-style:none}
.nav-links a{
  color:rgba(255,255,255,.85);text-decoration:none;
  font-weight:500;font-size:.95rem;position:relative;
  transition:color .3s;
}
nav.scrolled .nav-links a{color:var(--dark-2)}
.nav-links a::after{
  content:'';position:absolute;bottom:-6px;left:0;
  width:0;height:2px;background:var(--gradient);
  transition:width .3s;
}
.nav-links a:hover{color:var(--primary)}
.nav-links a:hover::after{width:100%}
.nav-cta{
  padding:12px 26px;background:var(--gradient);color:#fff;
  border-radius:50px;text-decoration:none;font-weight:600;
  font-size:.9rem;transition:transform .3s,box-shadow .3s;
  box-shadow:var(--shadow);
}
.nav-cta:hover{transform:translateY(-3px);box-shadow:var(--shadow-lg)}

/* Mobile toggle */
.menu-toggle{
  display:none;flex-direction:column;gap:5px;cursor:pointer;
  background:none;border:none;padding:5px;
}
.menu-toggle span{
  width:25px;height:2.5px;background:#fff;border-radius:5px;
  transition:all .3s;
}
nav.scrolled .menu-toggle span{background:var(--dark)}

/* ============ HERO ============ */
.hero{
  min-height:100vh;position:relative;
  background:var(--dark);overflow:hidden;
  display:flex;align-items:center;padding:120px 5% 80px;
}
.hero-bg{
  position:absolute;inset:0;overflow:hidden;
}
.hero-blob{
  position:absolute;border-radius:50%;filter:blur(80px);opacity:.5;
  animation:float 8s ease-in-out infinite;
}
.blob-1{width:500px;height:500px;background:var(--primary);top:-100px;left:-100px}
.blob-2{width:400px;height:400px;background:var(--secondary);bottom:-100px;right:-100px;animation-delay:2s}
.blob-3{width:350px;height:350px;background:var(--accent);top:40%;left:50%;animation-delay:4s}
@keyframes float{
  0%,100%{transform:translate(0,0) scale(1)}
  50%{transform:translate(30px,-30px) scale(1.1)}
}
.hero-grid{
  position:absolute;inset:0;
  background-image:
    linear-gradient(rgba(255,255,255,.03) 1px,transparent 1px),
    linear-gradient(90deg,rgba(255,255,255,.03) 1px,transparent 1px);
  background-size:60px 60px;
  mask-image:radial-gradient(ellipse at center,black 40%,transparent 80%);
}
.hero-content{
  position:relative;z-index:2;
  max-width:1300px;margin:0 auto;width:100%;
  display:grid;grid-template-columns:1.1fr .9fr;gap:60px;align-items:center;
}
.hero-badge{
  display:inline-flex;align-items:center;gap:8px;
  padding:8px 18px;background:rgba(99,102,241,.15);
  border:1px solid rgba(99,102,241,.3);
  border-radius:50px;color:#a5b4fc;font-size:.85rem;
  font-weight:500;margin-bottom:25px;
  animation:fadeUp .8s ease both;
}
.hero-badge .dot{
  width:8px;height:8px;background:#22c55e;border-radius:50%;
  animation:pulse 2s infinite;
}
@keyframes pulse{
  0%,100%{box-shadow:0 0 0 0 rgba(34,197,94,.7)}
  50%{box-shadow:0 0 0 10px rgba(34,197,94,0)}
}
.hero h1{
  font-size:clamp(2.2rem,5vw,4rem);
  font-weight:800;line-height:1.1;
  color:#fff;margin-bottom:24px;
  animation:fadeUp .8s ease .1s both;
}
.hero h1 .gradient-text{
  background:var(--gradient);
  -webkit-background-clip:text;background-clip:text;
  -webkit-text-fill-color:transparent;
}
.hero p{
  font-size:1.15rem;color:rgba(255,255,255,.7);
  margin-bottom:35px;max-width:550px;
  animation:fadeUp .8s ease .2s both;
}
.hero-buttons{
  display:flex;gap:15px;flex-wrap:wrap;
  animation:fadeUp .8s ease .3s both;
}
.btn{
  padding:15px 32px;border-radius:50px;
  font-weight:600;font-size:.95rem;text-decoration:none;
  display:inline-flex;align-items:center;gap:10px;
  transition:all .3s;cursor:pointer;border:none;font-family:inherit;
}
.btn-primary{
  background:var(--gradient);color:#fff;
  box-shadow:var(--shadow);
}
.btn-primary:hover{transform:translateY(-3px);box-shadow:var(--shadow-lg)}
.btn-outline{
  background:transparent;color:#fff;
  border:2px solid rgba(255,255,255,.2);
}
.btn-outline:hover{
  background:rgba(255,255,255,.1);
  border-color:rgba(255,255,255,.4);
}
.hero-stats{
  display:flex;gap:40px;margin-top:50px;
  animation:fadeUp .8s ease .4s both;
}
.stat-item h3{
  font-size:2rem;font-weight:800;
  background:var(--gradient);
  -webkit-background-clip:text;background-clip:text;
  -webkit-text-fill-color:transparent;
}
.stat-item p{font-size:.85rem;color:rgba(255,255,255,.6);margin:0}

/* Hero visual */
.hero-visual{
  position:relative;
  animation:fadeIn 1s ease .5s both;
}
.hero-card{
  background:rgba(255,255,255,.05);
  backdrop-filter:blur(20px);
  border:1px solid rgba(255,255,255,.1);
  border-radius:24px;padding:30px;
  box-shadow:0 30px 60px rgba(0,0,0,.3);
  position:relative;z-index:2;
  animation:floatY 6s ease-in-out infinite;
}
@keyframes floatY{
  0%,100%{transform:translateY(0)}
  50%{transform:translateY(-15px)}
}
.hero-card-header{
  display:flex;gap:8px;margin-bottom:20px;
}
.hero-card-header span{
  width:12px;height:12px;border-radius:50%;
}
.hero-card-header span:nth-child(1){background:#ef4444}
.hero-card-header span:nth-child(2){background:#f59e0b}
.hero-card-header span:nth-child(3){background:#22c55e}
.chart{
  display:flex;align-items:flex-end;gap:8px;height:150px;
  margin:20px 0;padding:15px 0;
  border-bottom:1px solid rgba(255,255,255,.1);
}
.chart-bar{
  flex:1;background:var(--gradient);border-radius:6px 6px 0 0;
  animation:grow 1.5s ease both;
}
.chart-bar:nth-child(1){height:40%;animation-delay:.1s}
.chart-bar:nth-child(2){height:65%;animation-delay:.2s}
.chart-bar:nth-child(3){height:50%;animation-delay:.3s}
.chart-bar:nth-child(4){height:85%;animation-delay:.4s}
.chart-bar:nth-child(5){height:70%;animation-delay:.5s}
.chart-bar:nth-child(6){height:95%;animation-delay:.6s}
@keyframes grow{from{height:0;opacity:0}}
.hero-card-info h4{color:#fff;font-size:1rem;margin-bottom:5px}
.hero-card-info p{color:rgba(255,255,255,.5);font-size:.85rem;margin:0}

.floating-icon{
  position:absolute;width:60px;height:60px;
  background:rgba(255,255,255,.1);
  backdrop-filter:blur(10px);
  border:1px solid rgba(255,255,255,.2);
  border-radius:16px;display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:1.5rem;z-index:3;
  animation:floatY 4s ease-in-out infinite;
}
.float-1{top:-20px;right:-20px;color:#ec4899}
.float-2{bottom:40px;left:-30px;color:#06b6d4;animation-delay:1s}
.float-3{top:40%;right:-40px;color:#6366f1;animation-delay:2s}

@keyframes fadeUp{
  from{opacity:0;transform:translateY(30px)}
  to{opacity:1;transform:translateY(0)}
}
@keyframes fadeIn{
  from{opacity:0}
  to{opacity:1}
}

/* ============ SECTION UMUM ============ */
section{padding:100px 5%;position:relative}
.container{max-width:1300px;margin:0 auto}
.section-header{
  text-align:center;margin-bottom:70px;
}
.section-label{
  display:inline-block;padding:6px 16px;
  background:rgba(99,102,241,.1);color:var(--primary);
  border-radius:50px;font-size:.85rem;font-weight:600;
  margin-bottom:15px;text-transform:uppercase;letter-spacing:1px;
}
.section-header h2{
  font-size:clamp(1.8rem,4vw,2.8rem);
  font-weight:800;color:var(--dark);margin-bottom:15px;
  line-height:1.2;
}
.section-header h2 .gradient-text{
  background:var(--gradient);
  -webkit-background-clip:text;background-clip:text;
  -webkit-text-fill-color:transparent;
}
.section-header p{
  color:var(--gray);max-width:600px;margin:0 auto;font-size:1.05rem;
}

/* Reveal on scroll */
.reveal{opacity:0;transform:translateY(40px);transition:all .8s cubic-bezier(.4,0,.2,1)}
.reveal.active{opacity:1;transform:translateY(0)}

/* ============ ABOUT ============ */
.about-grid{
  display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;
}
.about-visual{
  position:relative;border-radius:24px;overflow:hidden;
  box-shadow:var(--shadow-lg);
}
.about-visual img{
  width:100%;display:block;border-radius:24px;
  transition:transform .6s;
}
.about-visual:hover img{transform:scale(1.05)}
.about-badge{
  position:absolute;bottom:20px;left:20px;
  background:rgba(255,255,255,.95);backdrop-filter:blur(10px);
  padding:16px 24px;border-radius:16px;
  box-shadow:var(--shadow);
}
.about-badge h3{font-size:1.5rem;color:var(--primary);font-weight:800}
.about-badge p{font-size:.85rem;color:var(--gray);margin:0}
.about-content h2{
  font-size:clamp(1.8rem,3.5vw,2.5rem);font-weight:800;
  margin-bottom:20px;line-height:1.2;
}
.about-content > p{color:var(--gray);margin-bottom:30px;font-size:1.05rem}
.about-features{display:grid;gap:20px;margin-bottom:35px}
.feature-item{display:flex;gap:16px;align-items:flex-start}
.feature-icon{
  flex-shrink:0;width:48px;height:48px;
  background:var(--gradient);border-radius:14px;
  display:flex;align-items:center;justify-content:center;
  color:#fff;font-size:1.2rem;
  box-shadow:var(--shadow);
}
.feature-item h4{font-size:1.05rem;margin-bottom:5px;color:var(--dark)}
.feature-item p{color:var(--gray);font-size:.9rem;margin:0}

/* ============ SERVICES ============ */
#services{background:#fff}
.services-grid{
  display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;
}
.service-card{
  background:var(--light);border-radius:24px;padding:40px 30px;
  position:relative;overflow:hidden;
  transition:all .4s cubic-bezier(.4,0,.2,1);
  border:1px solid transparent;
}
.service-card::before{
  content:'';position:absolute;inset:0;
  background:var(--gradient);opacity:0;
  transition:opacity .4s;z-index:0;
}
.service-card:hover{
  transform:translateY(-10px);
  box-shadow:var(--shadow-lg);
}
.service-card:hover::before{opacity:1}
.service-card > *{position:relative;z-index:1}
.service-icon{
  width:70px;height:70px;border-radius:20px;
  background:var(--gradient);color:#fff;
  display:flex;align-items:center;justify-content:center;
  font-size:1.8rem;margin-bottom:25px;
  transition:all .4s;
}
.service-card:hover .service-icon{
  background:rgba(255,255,255,.2);backdrop-filter:blur(10px);
  transform:rotate(-10deg) scale(1.1);
}
.service-card h3{
  font-size:1.3rem;margin-bottom:15px;
  transition:color .4s;
}
.service-card p{
  color:var(--gray);font-size:.95rem;margin-bottom:20px;
  transition:color .4s;
}
.service-card:hover h3,
.service-card:hover p{color:#fff}
.service-link{
  color:var(--primary);text-decoration:none;font-weight:600;
  font-size:.9rem;display:inline-flex;align-items:center;gap:8px;
  transition:all .4s;
}
.service-card:hover .service-link{color:#fff;gap:14px}

/* ============ PORTFOLIO ============ */
.portfolio-filter{
  display:flex;justify-content:center;gap:10px;
  margin-bottom:50px;flex-wrap:wrap;
}
.filter-btn{
  padding:10px 24px;border-radius:50px;
  background:transparent;border:2px solid #e2e8f0;
  color:var(--gray);font-weight:600;font-size:.9rem;
  cursor:pointer;transition:all .3s;font-family:inherit;
}
.filter-btn.active,
.filter-btn:hover{
  background:var(--gradient);color:#fff;border-color:transparent;
  box-shadow:var(--shadow);
}
.portfolio-grid{
  display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:30px;
}
.portfolio-item{
  border-radius:24px;overflow:hidden;position:relative;
  aspect-ratio:4/3;cursor:pointer;
  transition:all .5s cubic-bezier(.4,0,.2,1);
}
.portfolio-item img{
  width:100%;height:100%;object-fit:cover;
  transition:transform .6s;
}
.portfolio-overlay{
  position:absolute;inset:0;
  background:linear-gradient(to top,rgba(15,23,42,.95) 0%,transparent 60%);
  display:flex;flex-direction:column;justify-content:flex-end;
  padding:30px;opacity:0;transition:opacity .4s;
}
.portfolio-item:hover .portfolio-overlay{opacity:1}
.portfolio-item:hover img{transform:scale(1.1)}
.portfolio-overlay .tag{
  display:inline-block;padding:4px 12px;
  background:var(--primary);color:#fff;
  border-radius:50px;font-size:.75rem;font-weight:600;
  margin-bottom:12px;width:fit-content;
}
.portfolio-overlay h3{color:#fff;font-size:1.3rem;margin-bottom:8px}
.portfolio-overlay p{color:rgba(255,255,255,.7);font-size:.9rem;margin:0}
.portfolio-overlay .arrow{
  position:absolute;top:30px;right:30px;
  width:45px;height:45px;border-radius:50%;
  background:#fff;color:var(--dark);
  display:flex;align-items:center;justify-content:center;
  transform:translateY(-10px);opacity:0;
  transition:all .4s .1s;
}
.portfolio-item:hover .arrow{transform:translateY(0);opacity:1}

/* ============ STATS ============ */
#stats{
  background:var(--dark);color:#fff;
  position:relative;overflow:hidden;
}
#stats::before{
  content:'';position:absolute;inset:0;
  background:radial-gradient(circle at 30% 50%,rgba(99,102,241,.3),transparent 60%),
             radial-gradient(circle at 70% 50%,rgba(236,72,153,.2),transparent 60%);
}
.stats-grid{
  position:relative;z-index:1;
  display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
  gap:40px;text-align:center;
}
.stat-box{padding:20px}
.stat-box .icon{
  font-size:2.5rem;margin-bottom:15px;
  background:var(--gradient);
  -webkit-background-clip:text;background-clip:text;
  -webkit-text-fill-color:transparent;
}
.stat-box h3{
  font-size:3rem;font-weight:800;margin-bottom:8px;
  background:var(--gradient);
  -webkit-background-clip:text;background-clip:text;
  -webkit-text-fill-color:transparent;
}
.stat-box p{color:rgba(255,255,255,.7);font-size:.95rem}

/* ============ TESTIMONIALS ============ */
.testimonials-grid{
  display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:30px;
}
.testimonial-card{
  background:#fff;border-radius:24px;padding:35px;
  box-shadow:0 5px 30px rgba(0,0,0,.06);
  transition:all .4s;position:relative;
}
.testimonial-card::before{
  content:'"';position:absolute;top:10px;right:30px;
  font-size:6rem;font-family:Georgia,serif;
  color:rgba(99,102,241,.1);line-height:1;
}
.testimonial-card:hover{
  transform:translateY(-8px);
  box-shadow:var(--shadow-lg);
}
.stars{color:#f59e0b;margin-bottom:20px;font-size:.9rem}
.testimonial-card p{
  color:var(--dark-2);font-size:1rem;margin-bottom:25px;
  position:relative;z-index:1;line-height:1.7;
}
.testimonial-author{display:flex;align-items:center;gap:15px}
.testimonial-author img{
  width:55px;height:55px;border-radius:50%;object-fit:cover;
  border:3px solid var(--primary);
}
.testimonial-author h4{font-size:1rem;color:var(--dark)}
.testimonial-author p{font-size:.85rem;color:var(--gray);margin:0}

/* ============ CTA ============ */
#cta{padding:100px 5%}
.cta-box{
  background:var(--gradient);border-radius:32px;
  padding:80px 40px;text-align:center;color:#fff;
  position:relative;overflow:hidden;
  box-shadow:var(--shadow-lg);
}
.cta-box::before{
  content:'';position:absolute;top:-50%;left:-50%;
  width:200%;height:200%;
  background:radial-gradient(circle,rgba(255,255,255,.15),transparent 70%);
  animation:rotate 20s linear infinite;
}
@keyframes rotate{to{transform:rotate(360deg)}}
.cta-box > *{position:relative;z-index:1}
.cta-box h2{
  font-size:clamp(1.8rem,4vw,2.8rem);font-weight:800;
  margin-bottom:15px;
}
.cta-box p{font-size:1.1rem;opacity:.9;margin-bottom:35px;max-width:600px;margin-left:auto;margin-right:auto}
.cta-btn{
  background:#fff;color:var(--primary);
  padding:16px 40px;border-radius:50px;
  text-decoration:none;font-weight:700;font-size:1rem;
  display:inline-flex;align-items:center;gap:10px;
  transition:all .3s;
}
.cta-btn:hover{transform:translateY(-3px) scale(1.05);box-shadow:0 20px 40px rgba(0,0,0,.2)}

/* ============ FOOTER ============ */
footer{
  background:var(--dark);color:rgba(255,255,255,.7);
  padding:80px 5% 30px;
}
.footer-grid{
  max-width:1300px;margin:0 auto;
  display:grid;grid-template-columns:2fr 1fr 1fr 1.5fr;gap:50px;
  margin-bottom:50px;
}
.footer-brand .logo{color:#fff;margin-bottom:20px;display:inline-flex}
.footer-brand p{font-size:.95rem;margin-bottom:25px;max-width:300px}
.social-links{display:flex;gap:12px}
.social-links a{
  width:42px;height:42px;border-radius:12px;
  background:rgba(255,255,255,.08);
  display:flex;align-items:center;justify-content:center;
  color:#fff;text-decoration:none;
  transition:all .3s;
}
.social-links a:hover{background:var(--gradient);transform:translateY(-3px)}
.footer-col h4{color:#fff;font-size:1.05rem;margin-bottom:20px}
.footer-col ul{list-style:none}
.footer-col ul li{margin-bottom:12px}
.footer-col ul a{
  color:rgba(255,255,255,.6);text-decoration:none;
  font-size:.9rem;transition:all .3s;
}
.footer-col ul a:hover{color:#fff;padding-left:5px}
.newsletter{display:flex;gap:10px;margin-top:15px}
.newsletter input{
  flex:1;padding:12px 18px;border-radius:50px;
  background:rgba(255,255,255,.08);
  border:1px solid rgba(255,255,255,.1);
  color:#fff;font-family:inherit;font-size:.9rem;outline:none;
}
.newsletter input::placeholder{color:rgba(255,255,255,.4)}
.newsletter button{
  padding:12px 20px;border-radius:50px;
  background:var(--gradient);color:#fff;border:none;
  cursor:pointer;transition:transform .3s;
}
.newsletter button:hover{transform:scale(1.05)}
.footer-bottom{
  max-width:1300px;margin:0 auto;
  padding-top:30px;border-top:1px solid rgba(255,255,255,.08);
  display:flex;justify-content:space-between;align-items:center;
  flex-wrap:wrap;gap:15px;font-size:.85rem;
}
.footer-bottom a{color:rgba(255,255,255,.6);text-decoration:none}
.footer-bottom a:hover{color:#fff}

/* ============ BACK TO TOP ============ */
.back-to-top{
  position:fixed;bottom:30px;right:30px;
  width:50px;height:50px;border-radius:50%;
  background:var(--gradient);color:#fff;
  border:none;cursor:pointer;font-size:1.1rem;
  box-shadow:var(--shadow-lg);
  opacity:0;visibility:hidden;transition:all .4s;
  z-index:999;
}
.back-to-top.show{opacity:1;visibility:visible}
.back-to-top:hover{transform:translateY(-5px)}

/* ============ WHATSAPP FLOAT ============ */
.wa-float{
  position:fixed;bottom:30px;left:30px;
  width:60px;height:60px;border-radius:50%;
  background:#25d366;color:#fff;
  display:flex;align-items:center;justify-content:center;
  font-size:1.8rem;text-decoration:none;
  box-shadow:0 10px 30px rgba(37,211,102,.4);
  z-index:999;
  animation:pulseWa 2s infinite;
}
@keyframes pulseWa{
  0%,100%{box-shadow:0 10px 30px rgba(37,211,102,.4),0 0 0 0 rgba(37,211,102,.7)}
  50%{box-shadow:0 10px 30px rgba(37,211,102,.4),0 0 0 20px rgba(37,211,102,0)}
}
.wa-float:hover{transform:scale(1.1)}

/* ============ RESPONSIVE ============ */
@media(max-width:968px){
  .hero-content,.about-grid{grid-template-columns:1fr;gap:50px}
  .hero-visual{max-width:500px;margin:0 auto}
  .footer-grid{grid-template-columns:1fr 1fr}
  .nav-links{
    position:fixed;top:0;right:-100%;height:100vh;width:75%;max-width:320px;
    background:#fff;flex-direction:column;
    padding:100px 30px;gap:25px;
    box-shadow:-10px 0 40px rgba(0,0,0,.1);
    transition:right .4s;
  }
  .nav-links.active{right:0}
  .nav-links a{color:var(--dark)!important;font-size:1.1rem}
  .menu-toggle{display:flex;z-index:1001}
  .nav-cta{display:none}
}
@media(max-width:600px){
  section{padding:70px 5%}
  .hero{padding:100px 5% 60px}
  .hero-stats{gap:25px;flex-wrap:wrap}
  .stat-item h3{font-size:1.5rem}
  .footer-grid{grid-template-columns:1fr}
  .footer-bottom{justify-content:center;text-align:center}
  .cta-box{padding:50px 25px}
  .wa-float{width:50px;height:50px;font-size:1.5rem;bottom:20px;left:20px}
  .back-to-top{width:45px;height:45px;bottom:20px;right:20px}
}
</style>
</head>
<body>

<!-- LOADER -->
<div class="loader" id="loader">
  <div class="loader-ring"></div>
</div>

<!-- NAVBAR -->
<nav id="navbar">
  <div class="nav-container">
    <a href="#" class="logo">
      <div class="logo-icon"><i class="fas fa-bolt"></i></div>
      NexaTech
    </a>
    <ul class="nav-links" id="navLinks">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">Tentang</a></li>
      <li><a href="#services">Layanan</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#testimonials">Testimoni</a></li>
      <li><a href="#contact">Kontak</a></li>
    </ul>
    <a href="#contact" class="nav-cta">Hubungi Kami <i class="fas fa-arrow-right"></i></a>
    <button class="menu-toggle" id="menuToggle">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-bg">
    <div class="hero-blob blob-1"></div>
    <div class="hero-blob blob-2"></div>
    <div class="hero-blob blob-3"></div>
    <div class="hero-grid"></div>
  </div>
  <div class="hero-content">
    <div class="hero-text">
      <div class="hero-badge">
        <span class="dot"></span>
        Tersedia untuk Proyek Baru 2025
      </div>
      <h1>Solusi Digital <span class="gradient-text">Kreatif</span> untuk Bisnis Modern</h1>
      <p>Kami membantu bisnis Anda tumbuh melalui desain yang memukau, teknologi terkini, dan strategi digital yang terukur.</p>
      <div class="hero-buttons">
        <a href="#contact" class="btn btn-primary">Mulai Proyek <i class="fas fa-arrow-right"></i></a>
        <a href="#portfolio" class="btn btn-outline"><i class="fas fa-play"></i> Lihat Portfolio</a>
      </div>
      <div class="hero-stats">
        <div class="stat-item">
          <h3><span class="counter" data-target="250">0</span>+</h3>
          <p>Proyek Selesai</p>
        </div>
        <div class="stat-item">
          <h3><span class="counter" data-target="180">0</span>+</h3>
          <p>Klien Puas</p>
        </div>
        <div class="stat-item">
          <h3><span class="counter" data-target="8">0</span>+</h3>
          <p>Tahun Pengalaman</p>
        </div>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-card">
        <div class="hero-card-header">
          <span></span><span></span><span></span>
        </div>
        <div style="color:#fff;font-weight:600;font-size:.9rem">Growth Analytics</div>
        <div class="chart">
          <div class="chart-bar"></div>
          <div class="chart-bar"></div>
          <div class="chart-bar"></div>
          <div class="chart-bar"></div>
          <div class="chart-bar"></div>
          <div class="chart-bar"></div>
        </div>
        <div class="hero-card-info">
          <h4>+245% Pertumbuhan</h4>
          <p>Dalam 12 bulan terakhir</p>
        </div>
      </div>
      <div class="floating-icon float-1"><i class="fas fa-palette"></i></div>
      <div class="floating-icon float-2"><i class="fas fa-code"></i></div>
      <div class="floating-icon float-3"><i class="fas fa-chart-line"></i></div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="container">
    <div class="about-grid">
      <div class="about-visual reveal">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80" alt="Tim NexaTech">
        <div class="about-badge">
          <h3>8+ Tahun</h3>
          <p>Pengalaman</p>
        </div>
      </div>
      <div class="about-content reveal">
        <span class="section-label">Tentang Kami</span>
        <h2>Partner Digital Terpercaya untuk <span style="background:var(--gradient);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent">Pertumbuhan Bisnis</span></h2>
        <p>NexaTech Studio adalah agensi digital kreatif yang berfokus pada hasil. Kami menggabungkan desain estetis dengan teknologi terkini untuk menciptakan pengalaman digital yang tak terlupakan.</p>
        <div class="about-features">
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-rocket"></i></div>
            <div>
              <h4>Hasil Cepat & Terukur</h4>
              <p>Setiap strategi berbasis data untuk hasil maksimal</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-users"></i></div>
            <div>
              <h4>Tim Profesional</h4>
              <p>Tim ahli di bidang desain, development & marketing</p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon"><i class="fas fa-headset"></i></div>
            <div>
              <h4>Support 24/7</h4>
              <p>Dukungan penuh setiap saat untuk kebutuhan Anda</p>
            </div>
          </div>
        </div>
        <a href="#contact" class="btn btn-primary">Konsultasi Gratis <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Layanan Kami</span>
      <h2>Apa yang <span class="gradient-text">Kami Tawarkan</span></h2>
      <p>Layanan lengkap untuk kebutuhan digital bisnis Anda dari hulu ke hilir.</p>
    </div>
    <div class="services-grid">
      <div class="service-card reveal">
        <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
        <h3>UI/UX Design</h3>
        <p>Desain antarmuka yang menarik, fungsional, dan berpusat pada pengguna untuk pengalaman terbaik.</p>
        <a href="#contact" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card reveal">
        <div class="service-icon"><i class="fas fa-code"></i></div>
        <h3>Web Development</h3>
        <p>Website cepat, aman, dan responsif dengan teknologi modern untuk performa maksimal.</p>
        <a href="#contact" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card reveal">
        <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
        <h3>Mobile App</h3>
        <p>Aplikasi mobile Android & iOS yang powerful untuk menjangkau pelanggan lebih luas.</p>
        <a href="#contact" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card reveal">
        <div class="service-icon"><i class="fas fa-bullhorn"></i></div>
        <h3>Digital Marketing</h3>
        <p>Strategi pemasaran digital yang tepat sasaran untuk meningkatkan penjualan bisnis Anda.</p>
        <a href="#contact" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card reveal">
        <div class="service-icon"><i class="fas fa-chart-pie"></i></div>
        <h3>Branding & Identity</h3>
        <p>Bangun identitas brand yang kuat dan mudah diingat oleh target pasar Anda.</p>
        <a href="#contact" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card reveal">
        <div class="service-icon"><i class="fas fa-search"></i></div>
        <h3>SEO Optimization</h3>
        <p>Optimasi mesin pencari untuk meningkatkan visibilitas dan traffic organik website Anda.</p>
        <a href="#contact" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- PORTFOLIO -->
<section id="portfolio" style="background:#fff">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Portfolio</span>
      <h2>Karya <span class="gradient-text">Terbaik Kami</span></h2>
      <p>Beberapa proyek yang telah kami kerjakan untuk klien dari berbagai industri.</p>
    </div>
    <div class="portfolio-filter reveal">
      <button class="filter-btn active" data-filter="all">Semua</button>
      <button class="filter-btn" data-filter="web">Web</button>
      <button class="filter-btn" data-filter="app">Mobile App</button>
      <button class="filter-btn" data-filter="brand">Branding</button>
    </div>
    <div class="portfolio-grid">
      <div class="portfolio-item reveal" data-category="web">
        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=800&q=80" alt="Project">
        <div class="portfolio-overlay">
          <span class="tag">Web Design</span>
          <h3>E-Commerce Fashion</h3>
          <p>Platform belanja online modern dengan pengalaman pengguna terbaik</p>
          <div class="arrow"><i class="fas fa-arrow-up-right-from-square"></i></div>
        </div>
      </div>
      <div class="portfolio-item reveal" data-category="app">
        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&q=80" alt="Project">
        <div class="portfolio-overlay">
          <span class="tag">Mobile App</span>
          <h3>Aplikasi Fintech</h3>
          <p>Dompet digital dengan keamanan tingkat tinggi dan UI yang intuitif</p>
          <div class="arrow"><i class="fas fa-arrow-up-right-from-square"></i></div>
        </div>
      </div>
      <div class="portfolio-item reveal" data-category="brand">
        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&q=80" alt="Project">
        <div class="portfolio-overlay">
          <span class="tag">Branding</span>
          <h3>Rebranding Coffee Shop</h3>
          <p>Identitas visual baru yang modern untuk brand kopi lokal</p>
          <div class="arrow"><i class="fas fa-arrow-up-right-from-square"></i></div>
        </div>
      </div>
      <div class="portfolio-item reveal" data-category="web">
        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80" alt="Project">
        <div class="portfolio-overlay">
          <span class="tag">Web App</span>
          <h3>Dashboard Analytics</h3>
          <p>Sistem monitoring data real-time untuk perusahaan teknologi</p>
          <div class="arrow"><i class="fas fa-arrow-up-right-from-square"></i></div>
        </div>
      </div>
      <div class="portfolio-item reveal" data-category="app">
        <img src="https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?w=800&q=80" alt="Project">
        <div class="portfolio-overlay">
          <span class="tag">Mobile App</span>
          <h3>Aplikasi Kesehatan</h3>
          <p>Platform kesehatan digital dengan fitur konsultasi dokter online</p>
          <div class="arrow"><i class="fas fa-arrow-up-right-from-square"></i></div>
        </div>
      </div>
      <div class="portfolio-item reveal" data-category="brand">
        <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?w=800&q=80" alt="Project">
        <div class="portfolio-overlay">
          <span class="tag">Branding</span>
          <h3>Visual Identity Startup</h3>
          <p>Perancangan logo dan brand guideline untuk startup teknologi</p>
          <div class="arrow"><i class="fas fa-arrow-up-right-from-square"></i></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section id="stats">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-box reveal">
        <div class="icon"><i class="fas fa-trophy"></i></div>
        <h3><span class="counter" data-target="250">0</span>+</h3>
        <p>Proyek Selesai</p>
      </div>
      <div class="stat-box reveal">
        <div class="icon"><i class="fas fa-smile"></i></div>
        <h3><span class="counter" data-target="180">0</span>+</h3>
        <p>Klien Puas</p>
      </div>
      <div class="stat-box reveal">
        <div class="icon"><i class="fas fa-user-tie"></i></div>
        <h3><span class="counter" data-target="35">0</span>+</h3>
        <p>Tim Ahli</p>
      </div>
      <div class="stat-box reveal">
        <div class="icon"><i class="fas fa-award"></i></div>
        <h3><span class="counter" data-target="15">0</span>+</h3>
        <p>Penghargaan</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials">
  <div class="container">
    <div class="section-header reveal">
      <span class="section-label">Testimoni</span>
      <h2>Apa Kata <span class="gradient-text">Klien Kami</span></h2>
      <p>Kepuasan klien adalah prioritas utama kami.</p>
    </div>
    <div class="testimonials-grid">
      <div class="testimonial-card reveal">
        <div class="stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p>Kerja sama dengan NexaTech benar-benar mengubah bisnis kami. Website baru kami meningkatkan penjualan hingga 200% dalam 6 bulan!</p>
        <div class="testimonial-author">
          <img src="https://i.pravatar.cc/150?img=12" alt="Client">
          <div>
            <h4>Andi Wijaya</h4>
            <p>CEO, Fashion Store</p>
          </div>
        </div>
      </div>
      <div class="testimonial-card reveal">
        <div class="stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p>Tim yang sangat profesional dan responsif. Setiap request kami direspon dengan cepat dan hasilnya selalu melebihi ekspektasi.</p>
        <div class="testimonial-author">
          <img src="https://i.pravatar.cc/150?img=45" alt="Client">
          <div>
            <h4>Siti Nurhaliza</h4>
            <p>Founder, Beauty Brand</p>
          </div>
        </div>
      </div>
      <div class="testimonial-card reveal">
        <div class="stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p>Aplikasi mobile yang mereka buat sangat user-friendly. Feedback dari user kami sangat positif. Highly recommended!</p>
        <div class="testimonial-author">
          <img src="https://i.pravatar.cc/150?img=33" alt="Client">
          <div>
            <h4>Budi Santoso</h4>
            <p>CTO, Fintech Startup</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta">
  <div class="container">
    <div class="cta-box reveal">
      <h2>Siap Memulai Proyek Anda?</h2>
      <p>Konsultasikan kebutuhan digital bisnis Anda dengan tim kami. Gratis, tanpa komitmen!</p>
      <a href="#contact" class="cta-btn">Konsultasi Sekarang <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer id="contact">
  <div class="footer-grid">
    <div class="footer-brand">
      <a href="#" class="logo">
        <div class="logo-icon"><i class="fas fa-bolt"></i></div>
        NexaTech
      </a>
      <p>Agensi digital kreatif yang membantu bisnis Anda tumbuh melalui solusi digital inovatif.</p>
      <div class="social-links">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div class="footer-col">
      <h4>Layanan</h4>
      <ul>
        <li><a href="#">UI/UX Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Mobile App</a></li>
        <li><a href="#">Digital Marketing</a></li>
        <li><a href="#">Branding</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Perusahaan</h4>
      <ul>
        <li><a href="#about">Tentang Kami</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#">Karier</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Newsletter</h4>
      <p style="font-size:.9rem;margin-bottom:15px">Dapatkan tips digital terbaru langsung di inbox Anda.</p>
      <form class="newsletter" onsubmit="event.preventDefault();alert('Terima kasih telah berlangganan!')">
        <input type="email" placeholder="Email Anda" required>
        <button type="submit"><i class="fas fa-paper-plane"></i></button>
      </form>
      <div style="margin-top:20px;font-size:.9rem">
        <p><i class="fas fa-envelope" style="color:var(--primary);margin-right:8px"></i> hello@nexatech.id</p>
        <p style="margin-top:8px"><i class="fas fa-phone" style="color:var(--primary);margin-right:8px"></i> +62 812 3456 7890</p>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2025 NexaTech Studio. All rights reserved.</p>
    <p><a href="#">Privacy Policy</a> • <a href="#">Terms of Service</a></p>
  </div>
</footer>

<!-- BACK TO TOP -->
<button class="back-to-top" id="backToTop"><i class="fas fa-arrow-up"></i></button>

<!-- WHATSAPP FLOAT -->
<a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2001" class="wa-float" target="_blank" title="Chat WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

<script>
/* ============ LOADER ============ */
window.addEventListener('load',()=>{
  setTimeout(()=>document.getElementById('loader').classList.add('hidden'),600);
});

/* ============ NAVBAR SCROLL ============ */
const navbar=document.getElementById('navbar');
const backToTop=document.getElementById('backToTop');
window.addEventListener('scroll',()=>{
  if(window.scrollY>50){
    navbar.classList.add('scrolled');
    backToTop.classList.add('show');
  }else{
    navbar.classList.remove('scrolled');
    backToTop.classList.remove('show');
  }
});

/* ============ MOBILE MENU ============ */
const menuToggle=document.getElementById('menuToggle');
const navLinks=document.getElementById('navLinks');
menuToggle.addEventListener('click',()=>{
  navLinks.classList.toggle('active');
});
document.querySelectorAll('.nav-links a').forEach(link=>{
  link.addEventListener('click',()=>navLinks.classList.remove('active'));
});

/* ============ BACK TO TOP ============ */
backToTop.addEventListener('click',()=>{
  window.scrollTo({top:0,behavior:'smooth'});
});

/* ============ REVEAL ON SCROLL ============ */
const revealObserver=new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      entry.target.classList.add('active');
    }
  });
},{threshold:0.1});
document.querySelectorAll('.reveal').forEach(el=>revealObserver.observe(el));

/* ============ COUNTER ANIMATION ============ */
const counterObserver=new IntersectionObserver((entries)=>{
  entries.forEach(entry=>{
    if(entry.isIntersecting){
      const counter=entry.target;
      const target=+counter.dataset.target;
      const duration=2000;
      const increment=target/(duration/16);
      let current=0;
      const updateCounter=()=>{
        current+=increment;
        if(current<target){
          counter.textContent=Math.ceil(current);
          requestAnimationFrame(updateCounter);
        }else{
          counter.textContent=target;
        }
      };
      updateCounter();
      counterObserver.unobserve(counter);
    }
  });
},{threshold:0.5});
document.querySelectorAll('.counter').forEach(el=>counterObserver.observe(el));

/* ============ PORTFOLIO FILTER ============ */
const filterBtns=document.querySelectorAll('.filter-btn');
const portfolioItems=document.querySelectorAll('.portfolio-item');
filterBtns.forEach(btn=>{
  btn.addEventListener('click',()=>{
    filterBtns.forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    const filter=btn.dataset.filter;
    portfolioItems.forEach(item=>{
      if(filter==='all'||item.dataset.category===filter){
        item.style.display='block';
        setTimeout(()=>item.style.opacity='1',50);
      }else{
        item.style.opacity='0';
        setTimeout(()=>item.style.display='none',300);
      }
    });
  });
});

/* ============ SMOOTH SCROLL ============ */
document.querySelectorAll('a[href^="#"]').forEach(anchor=>{
  anchor.addEventListener('click',function(e){
    const id=this.getAttribute('href'); const target=id.length>1?document.querySelector(id):null;
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