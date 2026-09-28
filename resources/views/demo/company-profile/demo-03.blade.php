@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Arsitek Digital — Company Profile</title>
<meta name="description" content="Arsitek Digital - Studio desain dan pengembangan web untuk bisnis serius">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --ink: #111111;
  --ink-soft: #3a3a3a;
  --ink-mute: #6b6b6b;
  --paper: #ffffff;
  --paper-2: #f4f4f2;
  --paper-3: #e8e8e4;
  --line: #dcdcd6;
  --line-dark: #111111;
  --accent: #1a3a5c;
  --accent-hover: #0f2740;
  --serif: 'Fraunces', Georgia, serif;
  --sans: 'Inter', -apple-system, sans-serif;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--sans);
  background: var(--paper);
  color: var(--ink);
  line-height: 1.6;
  font-size: 16px;
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

::selection { background: var(--ink); color: var(--paper); }

a { color: inherit; text-decoration: none; }

img { display: block; max-width: 100%; }

/* ============ LAYOUT ============ */
.wrap {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 32px;
}

.wrap-narrow {
  max-width: 900px;
  margin: 0 auto;
  padding: 0 32px;
}

/* ============ TOP BAR ============ */
.topbar {
  border-bottom: 1px solid var(--line);
  padding: 14px 0;
  font-size: 13px;
  color: var(--ink-mute);
}

.topbar-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 32px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 12px;
}

.topbar span { display: inline-flex; align-items: center; gap: 8px; }

.topbar i { color: var(--accent); font-size: 12px; }

/* ============ NAV ============ */
.nav {
  border-bottom: 1px solid var(--line);
  background: var(--paper);
  position: sticky;
  top: 0;
  z-index: 100;
}

.nav-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 22px 32px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.brand {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 600;
  letter-spacing: -0.01em;
  display: flex;
  align-items: center;
  gap: 10px;
}

.brand-mark {
  width: 30px;
  height: 30px;
  background: var(--ink);
  color: var(--paper);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--serif);
  font-size: 16px;
  font-weight: 700;
}

.nav-links {
  display: flex;
  gap: 36px;
  list-style: none;
}

.nav-links a {
  font-size: 14px;
  font-weight: 500;
  color: var(--ink-soft);
  transition: color 0.2s;
  position: relative;
}

.nav-links a:hover { color: var(--ink); }

.nav-links a::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -6px;
  width: 0;
  height: 1px;
  background: var(--ink);
  transition: width 0.3s;
}

.nav-links a:hover::after { width: 100%; }

.nav-cta {
  padding: 10px 20px;
  background: var(--ink);
  color: var(--paper);
  font-size: 13px;
  font-weight: 500;
  border: 1px solid var(--ink);
  transition: all 0.2s;
}

.nav-cta:hover {
  background: transparent;
  color: var(--ink);
}

.nav-toggle {
  display: none;
  background: none;
  border: none;
  font-size: 20px;
  color: var(--ink);
  cursor: pointer;
  padding: 4px;
}

/* ============ HERO ============ */
.hero {
  padding: 100px 0 80px;
  border-bottom: 1px solid var(--line);
}

.hero-grid {
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: 80px;
  align-items: end;
}

.hero-eyebrow {
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--ink-mute);
  margin-bottom: 28px;
  display: flex;
  align-items: center;
  gap: 14px;
}

.hero-eyebrow::before {
  content: '';
  width: 32px;
  height: 1px;
  background: var(--ink);
}

.hero h1 {
  font-family: var(--serif);
  font-size: clamp(44px, 6vw, 76px);
  font-weight: 500;
  line-height: 1.02;
  letter-spacing: -0.025em;
  margin-bottom: 32px;
  color: var(--ink);
}

.hero h1 em {
  font-style: italic;
  font-weight: 400;
}

.hero-lede {
  font-size: 18px;
  color: var(--ink-soft);
  max-width: 540px;
  margin-bottom: 40px;
  line-height: 1.65;
}

.hero-actions {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 14px 26px;
  font-size: 14px;
  font-weight: 500;
  border: 1px solid var(--ink);
  transition: all 0.2s;
  cursor: pointer;
  font-family: inherit;
}

.btn-solid {
  background: var(--ink);
  color: var(--paper);
}

.btn-solid:hover {
  background: var(--accent);
  border-color: var(--accent);
}

.btn-ghost {
  background: transparent;
  color: var(--ink);
}

.btn-ghost:hover {
  background: var(--ink);
  color: var(--paper);
}

.hero-side {
  border-left: 1px solid var(--line);
  padding-left: 40px;
}

.hero-side-label {
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--ink-mute);
  margin-bottom: 20px;
}

.hero-facts {
  list-style: none;
}

.hero-facts li {
  padding: 16px 0;
  border-bottom: 1px solid var(--line);
  display: flex;
  justify-content: space-between;
  align-items: baseline;
  font-size: 14px;
}

.hero-facts li:last-child { border-bottom: none; }

.hero-facts .num {
  font-family: var(--serif);
  font-size: 28px;
  font-weight: 600;
  letter-spacing: -0.02em;
  color: var(--ink);
}

.hero-facts .lbl {
  font-size: 13px;
  color: var(--ink-mute);
}

/* ============ SECTIONS ============ */
.section {
  padding: 100px 0;
  border-bottom: 1px solid var(--line);
}

.section-head {
  display: grid;
  grid-template-columns: 1fr 2fr;
  gap: 60px;
  margin-bottom: 70px;
  padding-bottom: 40px;
  border-bottom: 1px solid var(--line);
}

.section-num {
  font-family: var(--serif);
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0.1em;
  color: var(--ink-mute);
}

.section-title {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: -0.02em;
  color: var(--ink);
}

.section-title em {
  font-style: italic;
  font-weight: 400;
}

.section-desc {
  margin-top: 20px;
  color: var(--ink-soft);
  font-size: 16px;
  max-width: 600px;
}

/* ============ ABOUT ============ */
.about-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: start;
}

.about-img {
  border: 1px solid var(--line);
  padding: 12px;
  background: var(--paper-2);
}

.about-img img {
  width: 100%;
  aspect-ratio: 4 / 5;
  object-fit: cover;
  filter: grayscale(100%);
  transition: filter 0.5s;
}

.about-img:hover img { filter: grayscale(0%); }

.about-text p {
  font-size: 17px;
  color: var(--ink-soft);
  margin-bottom: 24px;
  line-height: 1.75;
}

.about-text p:first-of-type::first-letter {
  font-family: var(--serif);
  font-size: 62px;
  font-weight: 600;
  float: left;
  line-height: 0.85;
  padding: 8px 12px 0 0;
  color: var(--ink);
}

.about-stats {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  margin-top: 40px;
  border-top: 1px solid var(--line);
}

.about-stats > div {
  padding: 24px 0;
  border-bottom: 1px solid var(--line);
}

.about-stats > div:nth-child(odd) {
  border-right: 1px solid var(--line);
  padding-right: 20px;
}

.about-stats > div:nth-child(even) {
  padding-left: 20px;
}

.about-stats .num {
  font-family: var(--serif);
  font-size: 42px;
  font-weight: 600;
  letter-spacing: -0.02em;
  line-height: 1;
  margin-bottom: 6px;
}

.about-stats .lbl {
  font-size: 13px;
  color: var(--ink-mute);
}

/* ============ SERVICES ============ */
.services-list {
  border-top: 1px solid var(--line-dark);
}

.service-row {
  display: grid;
  grid-template-columns: 60px 1fr 2fr 40px;
  gap: 40px;
  align-items: center;
  padding: 36px 0;
  border-bottom: 1px solid var(--line);
  transition: background 0.3s, padding 0.3s;
  cursor: pointer;
}

.service-row:hover {
  background: var(--paper-2);
  padding-left: 20px;
  padding-right: 20px;
}

.service-row .idx {
  font-family: var(--serif);
  font-size: 14px;
  color: var(--ink-mute);
  font-weight: 500;
}

.service-row h3 {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 500;
  letter-spacing: -0.01em;
  color: var(--ink);
}

.service-row p {
  color: var(--ink-soft);
  font-size: 15px;
}

.service-row .arr {
  font-size: 16px;
  color: var(--ink-mute);
  transition: transform 0.3s, color 0.3s;
}

.service-row:hover .arr {
  transform: translateX(8px);
  color: var(--accent);
}

/* ============ PORTFOLIO ============ */
.pf-filter {
  display: flex;
  gap: 8px;
  margin-bottom: 40px;
  flex-wrap: wrap;
}

.pf-filter button {
  padding: 8px 18px;
  background: transparent;
  border: 1px solid var(--line);
  font-family: inherit;
  font-size: 13px;
  font-weight: 500;
  color: var(--ink-soft);
  cursor: pointer;
  transition: all 0.2s;
}

.pf-filter button:hover {
  border-color: var(--ink);
  color: var(--ink);
}

.pf-filter button.active {
  background: var(--ink);
  color: var(--paper);
  border-color: var(--ink);
}

.pf-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1px;
  background: var(--line);
  border: 1px solid var(--line);
}

.pf-item {
  background: var(--paper);
  padding: 0;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  aspect-ratio: 4 / 3;
}

.pf-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: grayscale(100%);
  transition: filter 0.6s, transform 0.6s;
}

.pf-item:hover img {
  filter: grayscale(0%);
  transform: scale(1.03);
}

.pf-info {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  padding: 24px;
  background: var(--paper);
  transform: translateY(100%);
  transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  border-top: 1px solid var(--line);
}

.pf-item:hover .pf-info { transform: translateY(0); }

.pf-cat {
  font-size: 11px;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--accent);
  font-weight: 600;
  margin-bottom: 8px;
}

.pf-info h3 {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 500;
  letter-spacing: -0.01em;
}

.pf-info h3 a { color: var(--ink); }

/* ============ PROCESS ============ */
.process-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  border-top: 1px solid var(--line);
  border-left: 1px solid var(--line);
}

.process-step {
  padding: 36px 28px;
  border-right: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  background: var(--paper);
  transition: background 0.3s;
}

.process-step:hover { background: var(--paper-2); }

.process-num {
  font-family: var(--serif);
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.1em;
  color: var(--accent);
  margin-bottom: 24px;
}

.process-step h4 {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 500;
  letter-spacing: -0.01em;
  margin-bottom: 12px;
}

.process-step p {
  font-size: 14px;
  color: var(--ink-soft);
  line-height: 1.6;
}

/* ============ TESTIMONIAL ============ */
.quote-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1px;
  background: var(--line);
  border: 1px solid var(--line);
}

.quote {
  background: var(--paper);
  padding: 48px 40px;
}

.quote-mark {
  font-family: var(--serif);
  font-size: 56px;
  line-height: 1;
  color: var(--line);
  margin-bottom: 8px;
  font-weight: 600;
}

.quote-text {
  font-family: var(--serif);
  font-size: 20px;
  line-height: 1.5;
  color: var(--ink);
  margin-bottom: 32px;
  font-weight: 400;
}

.quote-text em { font-style: italic; }

.quote-author {
  display: flex;
  align-items: center;
  gap: 16px;
  padding-top: 24px;
  border-top: 1px solid var(--line);
}

.quote-author img {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  object-fit: cover;
  filter: grayscale(100%);
}

.quote-author .name {
  font-size: 14px;
  font-weight: 600;
  color: var(--ink);
}

.quote-author .role {
  font-size: 12px;
  color: var(--ink-mute);
}

/* ============ CTA ============ */
.cta {
  padding: 100px 0;
  background: var(--ink);
  color: var(--paper);
  border-bottom: 1px solid var(--line);
}

.cta-grid {
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 60px;
  align-items: center;
}

.cta h2 {
  font-family: var(--serif);
  font-size: clamp(34px, 4.5vw, 56px);
  font-weight: 500;
  line-height: 1.08;
  letter-spacing: -0.025em;
  margin-bottom: 20px;
}

.cta h2 em { font-style: italic; font-weight: 400; }

.cta p {
  font-size: 17px;
  color: rgba(255, 255, 255, 0.7);
  max-width: 520px;
}

.cta-actions {
  display: flex;
  flex-direction: column;
  gap: 12px;
  align-items: flex-end;
}

.btn-inverse {
  background: var(--paper);
  color: var(--ink);
  border-color: var(--paper);
}

.btn-inverse:hover {
  background: transparent;
  color: var(--paper);
}

.btn-outline-light {
  background: transparent;
  color: var(--paper);
  border-color: rgba(255, 255, 255, 0.3);
}

.btn-outline-light:hover {
  border-color: var(--paper);
  background: rgba(255, 255, 255, 0.05);
}

/* ============ FOOTER ============ */
.footer {
  padding: 80px 0 32px;
  background: var(--paper);
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1fr;
  gap: 60px;
  padding-bottom: 60px;
  border-bottom: 1px solid var(--line);
  margin-bottom: 32px;
}

.footer-brand {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.footer-brand .brand-mark {
  width: 28px;
  height: 28px;
  font-size: 15px;
}

.footer-desc {
  font-size: 14px;
  color: var(--ink-mute);
  max-width: 320px;
  line-height: 1.7;
}

.footer-col h4 {
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--ink);
  margin-bottom: 24px;
}

.footer-col ul { list-style: none; }

.footer-col li { margin-bottom: 12px; }

.footer-col a {
  font-size: 14px;
  color: var(--ink-soft);
  transition: color 0.2s;
}

.footer-col a:hover { color: var(--accent); }

.footer-bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 16px;
  font-size: 13px;
  color: var(--ink-mute);
}

.footer-bottom a:hover { color: var(--ink); }

.footer-social {
  display: flex;
  gap: 8px;
}

.footer-social a {
  width: 36px;
  height: 36px;
  border: 1px solid var(--line);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--ink-soft);
  font-size: 14px;
  transition: all 0.2s;
}

.footer-social a:hover {
  background: var(--ink);
  color: var(--paper);
  border-color: var(--ink);
}

/* ============ SCROLL REVEAL ============ */
.reveal {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}

.reveal.on {
  opacity: 1;
  transform: translateY(0);
}

/* ============ RESPONSIVE ============ */
@media (max-width: 968px) {
  .hero-grid,
  .about-grid,
  .section-head,
  .cta-grid,
  .quote-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }

  .hero-side {
    border-left: none;
    border-top: 1px solid var(--line);
    padding-left: 0;
    padding-top: 32px;
  }

  .section-head {
    padding-bottom: 24px;
    margin-bottom: 40px;
  }

  .process-grid { grid-template-columns: repeat(2, 1fr); }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }

  .nav-links {
    position: fixed;
    top: 0;
    right: -100%;
    height: 100vh;
    width: 280px;
    background: var(--paper);
    flex-direction: column;
    padding: 100px 32px 32px;
    gap: 24px;
    border-left: 1px solid var(--line);
    transition: right 0.3s;
    z-index: 99;
  }

  .nav-links.open { right: 0; }
  .nav-links a { font-size: 18px; }
  .nav-cta { display: none; }
  .nav-toggle { display: block; }
}

@media (max-width: 640px) {
  .wrap, .wrap-narrow, .topbar-inner, .nav-inner { padding: 0 20px; }
  .section, .hero, .cta { padding: 64px 0; }

  .pf-grid { grid-template-columns: 1fr; }
  .process-grid { grid-template-columns: 1fr; }
  .footer-grid { grid-template-columns: 1fr; }

  .service-row {
    grid-template-columns: 40px 1fr;
    gap: 20px;
    padding: 24px 0;
  }

  .service-row p,
  .service-row .arr { display: none; }

  .service-row h3 { font-size: 20px; }

  .cta-actions {
    align-items: stretch;
  }

  .btn { justify-content: center; }

  .quote { padding: 32px 24px; }
}

/* ============ FLOATING WA ============ */
.wa-float {
  position: fixed;
  bottom: 24px;
  right: 24px;
  width: 52px;
  height: 52px;
  background: var(--ink);
  color: var(--paper);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  z-index: 200;
  transition: background 0.2s, transform 0.2s;
}

.wa-float:hover {
  background: var(--accent);
  transform: translateY(-3px);
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <div class="topbar-inner">
    <span><i class="fas fa-circle" style="font-size:6px;color:#2e7d32"></i> Tersedia untuk proyek baru</span>
    <span><i class="fas fa-phone"></i> +62 812 3456 7890</span>
  </div>
</div>

<!-- NAV -->
<nav class="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <span class="brand-mark">A</span>
      Arsitek Digital
    </a>

    <ul class="nav-links" id="navLinks">
      <li><a href="#about">Tentang</a></li>
      <li><a href="#services">Layanan</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#process">Proses</a></li>
      <li><a href="#contact">Kontak</a></li>
    </ul>

    <a href="#contact" class="nav-cta">Mulai Proyek</a>

    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="wrap">
    <div class="hero-grid">

      <div class="hero-main reveal">
        <div class="hero-eyebrow">Studio Desain & Pengembangan — Est. 2015</div>
        <h1>
          Kami bangun produk digital yang <em>bertahan lama.</em>
        </h1>
        <p class="hero-lede">
          Arsitek Digital adalah studio kecil yang bekerja dengan klien serius. Kami tidak mengejar tren. Kami merancang sistem, membangun fondasi, dan menyelesaikan pekerjaan dengan rapi.
        </p>
        <div class="hero-actions">
          <a href="#contact" class="btn btn-solid">
            Mulai Percakapan <i class="fas fa-arrow-right"></i>
          </a>
          <a href="#portfolio" class="btn btn-ghost">
            Lihat Karya
          </a>
        </div>
      </div>

      <aside class="hero-side reveal">
        <div class="hero-side-label">Angka</div>
        <ul class="hero-facts">
          <li>
            <span class="num">142</span>
            <span class="lbl">Proyek selesai</span>
          </li>
          <li>
            <span class="num">68</span>
            <span class="lbl">Klien aktif</span>
          </li>
          <li>
            <span class="num">10</span>
            <span class="lbl">Tahun bekerja</span>
          </li>
          <li>
            <span class="num">4.9</span>
            <span class="lbl">Rating rata-rata</span>
          </li>
        </ul>
      </aside>

    </div>
  </div>
</header>

<!-- ABOUT -->
<section class="section" id="about">
  <div class="wrap">
    <div class="section-head">
      <div class="section-num reveal">01 — Tentang</div>
      <div class="reveal">
        <h2 class="section-title">
          Studio kecil, <em>fokus mendalam,</em> hasil yang rapi.
        </h2>
        <p class="section-desc">
          Kami percaya pekerjaan yang baik lahir dari perhatian pada detail. Bukan dari banyaknya orang di ruangan, tapi dari seberapa serius satu tim menekuni masalah klien.
        </p>
      </div>
    </div>

    <div class="about-grid">
      <div class="about-img reveal">
        <img src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?w=800&q=80" alt="Studio">
      </div>

      <div class="about-text reveal">
        <p>
          Berdiri sejak 2015, Arsitek Digital dimulai dari dua orang yang percaya bahwa web bisa dibuat lebih baik. Hari ini kami adalah tim kecil berisi delapan orang — desainer, engineer, dan satu orang yang khusus memikirkan pengalaman pengguna.
        </p>
        <p>
          Klien kami kebanyakan adalah perusahaan yang sudah melewati tahap awal. Mereka tahu apa yang mereka butuhkan, dan mereka ingin pekerjaan yang bisa diandalkan dalam jangka panjang, bukan yang kelihatan bagus selama tiga bulan.
        </p>

        <div class="about-stats">
          <div>
            <div class="num">8</div>
            <div class="lbl">Orang di tim</div>
          </div>
          <div>
            <div class="num">10</div>
            <div class="lbl">Tahun berdiri</div>
          </div>
          <div>
            <div class="num">142</div>
            <div class="lbl">Proyek selesai</div>
          </div>
          <div>
            <div class="num">92%</div>
            <div class="lbl">Klien kembali</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="section" id="services">
  <div class="wrap">
    <div class="section-head">
      <div class="section-num reveal">02 — Layanan</div>
      <div class="reveal">
        <h2 class="section-title">
          Yang kami <em>kerjakan dengan baik.</em>
        </h2>
        <p class="section-desc">
          Kami tidak mengambil semua pekerjaan. Hanya yang kami yakin bisa selesaikan dengan standar kami.
        </p>
      </div>
    </div>

    <div class="services-list">

      <div class="service-row reveal">
        <span class="idx">01</span>
        <h3>Perancangan Produk</h3>
        <p>Riset, wireframe, prototipe, hingga desain akhir yang siap dikembangkan.</p>
        <i class="fas fa-arrow-right arr"></i>
      </div>

      <div class="service-row reveal">
        <span class="idx">02</span>
        <h3>Pengembangan Web</h3>
        <p>Frontend dan backend yang cepat, aman, dan mudah dirawat dalam jangka panjang.</p>
        <i class="fas fa-arrow-right arr"></i>
      </div>

      <div class="service-row reveal">
        <span class="idx">03</span>
        <h3>Aplikasi Mobile</h3>
        <p>iOS dan Android dengan pengalaman pengguna yang konsisten di kedua platform.</p>
        <i class="fas fa-arrow-right arr"></i>
      </div>

      <div class="service-row reveal">
        <span class="idx">04</span>
        <h3>Identitas Merek</h3>
        <p>Logo, sistem visual, dan pedoman merek yang bisa dipakai bertahun-tahun.</p>
        <i class="fas fa-arrow-right arr"></i>
      </div>

      <div class="service-row reveal">
        <span class="idx">05</span>
        <h3>Pemeliharaan & Dukungan</h3>
        <p>Perawatan berkala, pembaruan, dan dukungan teknis untuk produk yang sudah berjalan.</p>
        <i class="fas fa-arrow-right arr"></i>
      </div>

    </div>
  </div>
</section>

<!-- PORTFOLIO -->
<section class="section" id="portfolio">
  <div class="wrap">
    <div class="section-head">
      <div class="section-num reveal">03 — Portfolio</div>
      <div class="reveal">
        <h2 class="section-title">
          Sebagian pekerjaan <em>yang kami banggakan.</em>
        </h2>
        <p class="section-desc">
          Setiap proyek punya cerita. Ini beberapa di antaranya.
        </p>
      </div>
    </div>

    <div class="pf-filter reveal">
      <button class="active" data-filter="all">Semua</button>
      <button data-filter="web">Web</button>
      <button data-filter="app">Aplikasi</button>
      <button data-filter="brand">Merek</button>
    </div>

    <div class="pf-grid" id="pfGrid">

      <div class="pf-item reveal" data-cat="web">
        <img src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?w=800&q=80" alt="Proyek">
        <div class="pf-info">
          <div class="pf-cat">Web</div>
          <h3><a href="#">Platform Belanja Serat</a></h3>
        </div>
      </div>

      <div class="pf-item reveal" data-cat="app">
        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&q=80" alt="Proyek">
        <div class="pf-info">
          <div class="pf-cat">Aplikasi</div>
          <h3><a href="#">Dompet Digital Sejahtera</a></h3>
        </div>
      </div>

      <div class="pf-item reveal" data-cat="brand">
        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&q=80" alt="Proyek">
        <div class="pf-info">
          <div class="pf-cat">Merek</div>
          <h3><a href="#">Kopi Ruang Tengah</a></h3>
        </div>
      </div>

      <div class="pf-item reveal" data-cat="web">
        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80" alt="Proyek">
        <div class="pf-info">
          <div class="pf-cat">Web</div>
          <h3><a href="#">Dasbor Analitik Nusantara</a></h3>
        </div>
      </div>

      <div class="pf-item reveal" data-cat="app">
        <img src="https://images.unsplash.com/photo-1607252650355-f7fd0460ccdb?w=800&q=80" alt="Proyek">
        <div class="pf-info">
          <div class="pf-cat">Aplikasi</div>
          <h3><a href="#">Jurnal Kesehatan Harian</a></h3>
        </div>
      </div>

      <div class="pf-item reveal" data-cat="brand">
        <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?w=800&q=80" alt="Proyek">
        <div class="pf-info">
          <div class="pf-cat">Merek</div>
          <h3><a href="#">Identitas Lembah Teknologi</a></h3>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="section" id="process">
  <div class="wrap">
    <div class="section-head">
      <div class="section-num reveal">04 — Proses</div>
      <div class="reveal">
        <h2 class="section-title">
          Cara kami <em>bekerja.</em>
        </h2>
        <p class="section-desc">
          Empat langkah sederhana. Tidak ada kejutan, tidak ada drama.
        </p>
      </div>
    </div>

    <div class="process-grid">

      <div class="process-step reveal">
        <div class="process-num">LANGKAH 01</div>
        <h4>Dengar</h4>
        <p>Kami mulai dari memahami masalah Anda, bukan dari menyiapkan solusi.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">LANGKAH 02</div>
        <h4>Rancang</h4>
        <p>Kami tuangkan pemahaman itu ke dalam rencana visual dan teknis.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">LANGKAH 03</div>
        <h4>Bangun</h4>
        <p>Tim kami mengerjakan dengan tenggat yang jelas dan laporan berkala.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">LANGKAH 04</div>
        <h4>Rawat</h4>
        <p>Setelah diluncurkan, kami tetap ada untuk memastikan semuanya berjalan.</p>
      </div>

    </div>
  </div>
</section>

<!-- TESTIMONIAL -->
<section class="section">
  <div class="wrap">
    <div class="section-head">
      <div class="section-num reveal">05 — Klien</div>
      <div class="reveal">
        <h2 class="section-title">
          Kata mereka <em>tentang kami.</em>
        </h2>
      </div>
    </div>

    <div class="quote-grid">

      <div class="quote reveal">
        <div class="quote-mark">"</div>
        <div class="quote-text">
          Mereka tidak buru-buru. Setiap keputusan dijelaskan dengan alasan yang masuk akal. Itu yang membuat kami percaya.
        </div>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=12" alt="">
          <div>
            <div class="name">Andi Wijaya</div>
            <div class="role">Direktur, Serat Nusantara</div>
          </div>
        </div>
      </div>

      <div class="quote reveal">
        <div class="quote-mark">"</div>
        <div class="quote-text">
          Pekerjaan mereka rapi. Setahun setelah peluncuran, kode masih mudah dibaca dan diubah. Itu jarang.
        </div>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=33" alt="">
          <div>
            <div class="name">Budi Santoso</div>
            <div class="role">CTO, Sejahtera Pay</div>
          </div>
        </div>
      </div>

      <div class="quote reveal">
        <div class="quote-mark">"</div>
        <div class="quote-text">
          Komunikasi jelas, tenggat dipegang, dan hasilnya sesuai janji. Kami sudah pakai mereka untuk tiga proyek.
        </div>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=45" alt="">
          <div>
            <div class="name">Siti Nurhaliza</div>
            <div class="role">Pendiri, Ruang Tengah</div>
          </div>
        </div>
      </div>

      <div class="quote reveal">
        <div class="quote-mark">"</div>
        <div class="quote-text">
          Bukan yang paling murah, tapi yang paling tenang dikerjakan. Tidak ada drama, semua sesuai rencana.
        </div>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=68" alt="">
          <div>
            <div class="name">Maya Anggraini</div>
            <div class="role">Kepala Pemasaran, Lembah Teknologi</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="wrap">
    <div class="cta-grid">
      <div class="reveal">
        <h2>
          Ada proyek yang <em>perlu diselesaikan dengan benar?</em>
        </h2>
        <p>
          Ceritakan kepada kami. Kami akan bilang terus terang apakah kami cocok untuk pekerjaan itu, dan kalau tidak, kami akan merekomendasikan orang yang tepat.
        </p>
      </div>
      <div class="cta-actions reveal">
        <a href="#contact" class="btn btn-inverse">
          Hubungi Kami <i class="fas fa-arrow-right"></i>
        </a>
        <a href="#" class="btn btn-outline-light">
          Unduh Profil Perusahaan
        </a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer" id="contact">
  <div class="wrap">
    <div class="footer-grid">

      <div>
        <div class="footer-brand">
          <span class="brand-mark">A</span>
          Arsitek Digital
        </div>
        <p class="footer-desc">
          Studio desain dan pengembangan web yang bekerja dengan perusahaan yang menghargai kerapian dan ketenangan.
        </p>
      </div>

      <div class="footer-col">
        <h4>Layanan</h4>
        <ul>
          <li><a href="#">Perancangan Produk</a></li>
          <li><a href="#">Pengembangan Web</a></li>
          <li><a href="#">Aplikasi Mobile</a></li>
          <li><a href="#">Identitas Merek</a></li>
          <li><a href="#">Pemeliharaan</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Perusahaan</h4>
        <ul>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#">Karier</a></li>
          <li><a href="#">Catatan</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Hubungi</h4>
        <ul>
          <li><a href="mailto:halo@arsitekdigital.id">halo@arsitekdigital.id</a></li>
          <li><a href="tel:+6281234567890">+62 812 3456 7890</a></li>
          <li><a href="#">Jalan Sudirman 45, Jakarta</a></li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <div>© 2025 Arsitek Digital. Semua hak dilindungi.</div>
      <div class="footer-social">
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" aria-label="Dribbble"><i class="fab fa-dribbble"></i></a>
        <a href="#" aria-label="Behance"><i class="fab fa-behance"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- WA FLOAT -->
<a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2003" class="wa-float" target="_blank" aria-label="WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

<script>
// Mobile nav
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');
navToggle.addEventListener('click', () => {
  navLinks.classList.toggle('open');
  const icon = navToggle.querySelector('i');
  icon.className = navLinks.classList.contains('open') ? 'fas fa-times' : 'fas fa-bars';
});

document.querySelectorAll('.nav-links a').forEach(a => {
  a.addEventListener('click', () => {
    navLinks.classList.remove('open');
    navToggle.querySelector('i').className = 'fas fa-bars';
  });
});

// Reveal on scroll
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('on');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// Portfolio filter
const filterBtns = document.querySelectorAll('.pf-filter button');
const pfItems = document.querySelectorAll('.pf-item');

filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    filterBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const filter = btn.dataset.filter;

    pfItems.forEach(item => {
      const match = filter === 'all' || item.dataset.cat === filter;
      item.style.display = match ? 'block' : 'none';
    });
  });
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', function(e) {
    const id = this.getAttribute('href');
    if (id === '#') return;
    const target = document.querySelector(id);
    if (target) {
      e.preventDefault();
      const top = target.getBoundingClientRect().top + window.scrollY - 80;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  });
});
</script>

@endverbatim
@include('demo.company-profile.partials.demo-bar')
</body>
</html>