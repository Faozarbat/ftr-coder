@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rosée Beauty Studio — Perawatan Kulit & Kecantikan Premium</title>
<meta name="description" content="Rosée Beauty Studio — klinik kecantikan dan skincare dengan perawatan facial, body treatment, dan produk skincare buatan sendiri.">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --bg: #fdfaf7;
  --bg-2: #f7efe9;
  --bg-3: #f0e3da;
  --paper: #ffffff;
  --ink: #2a1f1a;
  --ink-2: #5a4a42;
  --ink-3: #8a7a70;
  --ink-4: #b8a8a0;
  --line: #ecdfd6;
  --line-2: #dcc9bc;
  --rose: #b8726e;
  --rose-2: #a05e5c;
  --rose-soft: #f4e4e0;
  --rose-line: #e0c2bc;
  --gold: #b8965f;
  --gold-soft: #f4ead5;
  --mauve: #7a5c5a;
  --serif: 'Cormorant Garamond', Georgia, serif;
  --sans: 'Jost', -apple-system, sans-serif;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--sans);
  background: var(--bg);
  color: var(--ink);
  font-size: 16px;
  line-height: 1.7;
  font-weight: 400;
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

::selection { background: var(--rose); color: #fff; }
a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }
button { font-family: inherit; cursor: pointer; }

/* ============ LAYOUT ============ */
.wrap {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 40px;
}

/* ============ NAV ============ */
.nav {
  padding: 26px 0;
  position: sticky;
  top: 0;
  z-index: 100;
  background: var(--bg);
  transition: padding 0.35s, box-shadow 0.35s;
  border-bottom: 1px solid transparent;
}

.nav.scrolled {
  padding: 16px 0;
  border-bottom-color: var(--line);
  box-shadow: 0 4px 20px rgba(42, 31, 26, 0.03);
}

.nav-inner {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;
}

.brand {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 500;
  color: var(--ink);
  letter-spacing: 0.02em;
  flex-shrink: 0;
  display: flex;
  align-items: center;
  gap: 12px;
}

.brand-mark {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: var(--rose-soft);
  border: 1px solid var(--rose-line);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--rose);
  font-size: 17px;
  transition: all 0.3s;
}

.brand:hover .brand-mark {
  background: var(--rose);
  color: #fff;
  border-color: var(--rose);
}

.brand-text { line-height: 1; }

.brand-text small {
  display: block;
  font-family: var(--sans);
  font-size: 9px;
  font-weight: 500;
  color: var(--ink-3);
  letter-spacing: 0.32em;
  text-transform: uppercase;
  margin-top: 5px;
}

.nav-menu {
  display: flex;
  gap: 6px;
  list-style: none;
  flex: 1;
  justify-content: center;
}

.nav-menu a {
  font-size: 13px;
  font-weight: 400;
  color: var(--ink-2);
  padding: 10px 18px;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  transition: color 0.2s;
  position: relative;
}

.nav-menu a:hover { color: var(--rose); }

.nav-menu a::after {
  content: '';
  position: absolute;
  bottom: 4px;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 1px;
  background: var(--rose);
  transition: width 0.3s;
}

.nav-menu a:hover::after { width: 18px; }

.nav-actions {
  display: flex;
  gap: 10px;
  align-items: center;
  flex-shrink: 0;
}

.btn-nav-icon {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid var(--line-2);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--ink-2);
  font-size: 14px;
  transition: all 0.2s;
  background: transparent;
}

.btn-nav-icon:hover {
  border-color: var(--rose);
  color: var(--rose);
}

.nav-cta {
  padding: 12px 26px;
  background: var(--ink);
  color: #fff;
  border-radius: 999px;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  transition: all 0.25s;
}

.nav-cta:hover {
  background: var(--rose);
  transform: translateY(-1px);
}

.nav-toggle {
  display: none;
  background: none;
  border: none;
  color: var(--ink);
  font-size: 20px;
  padding: 8px;
}

/* ============ HERO ============ */
.hero {
  padding: 60px 0 100px;
  position: relative;
  overflow: hidden;
}

.hero-bg-circle {
  position: absolute;
  border-radius: 50%;
  pointer-events: none;
  z-index: 0;
}

.hero-bg-circle.c1 {
  width: 500px;
  height: 500px;
  background: var(--rose-soft);
  top: -100px;
  right: -150px;
  opacity: 0.6;
}

.hero-bg-circle.c2 {
  width: 300px;
  height: 300px;
  background: var(--gold-soft);
  bottom: 50px;
  left: -100px;
  opacity: 0.5;
}

.hero-inner {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.05fr 1fr;
  gap: 80px;
  align-items: center;
}

.hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 8px 18px;
  background: var(--paper);
  border: 1px solid var(--line-2);
  border-radius: 999px;
  font-size: 11px;
  font-weight: 500;
  color: var(--ink-2);
  letter-spacing: 0.22em;
  text-transform: uppercase;
  margin-bottom: 30px;
}

.hero-tag i { color: var(--gold); font-size: 11px; }

.hero h1 {
  font-family: var(--serif);
  font-size: clamp(44px, 6vw, 82px);
  font-weight: 400;
  line-height: 1.02;
  letter-spacing: -0.02em;
  color: var(--ink);
  margin-bottom: 28px;
}

.hero h1 em {
  font-style: italic;
  font-weight: 300;
  color: var(--rose);
}

.hero-lede {
  font-size: 17px;
  color: var(--ink-2);
  font-weight: 300;
  max-width: 500px;
  line-height: 1.85;
  margin-bottom: 44px;
}

.hero-actions {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
  align-items: center;
  margin-bottom: 56px;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 16px 32px;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  border-radius: 999px;
  border: 1px solid transparent;
  transition: all 0.25s;
  cursor: pointer;
  font-family: inherit;
  white-space: nowrap;
}

.btn-rose {
  background: var(--rose);
  color: #fff;
  border-color: var(--rose);
}

.btn-rose:hover {
  background: var(--rose-2);
  border-color: var(--rose-2);
  transform: translateY(-2px);
  box-shadow: 0 12px 28px -10px rgba(184, 114, 110, 0.4);
}

.btn-outline {
  background: transparent;
  color: var(--ink);
  border-color: var(--line-2);
}

.btn-outline:hover {
  border-color: var(--rose);
  color: var(--rose);
}

.hero-mini {
  display: flex;
  gap: 40px;
  flex-wrap: wrap;
  padding-top: 32px;
  border-top: 1px solid var(--line);
}

.hero-mini-item {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 13px;
  color: var(--ink-2);
  font-weight: 400;
  letter-spacing: 0.02em;
}

.hero-mini-item i { color: var(--gold); font-size: 15px; }

/* Hero visual */
.hero-visual {
  position: relative;
  aspect-ratio: 4 / 5;
}

.hero-img-main {
  position: absolute;
  inset: 0;
  border-radius: 200px 200px 0 0;
  overflow: hidden;
  background: var(--bg-2);
  border: 1px solid var(--line);
}

.hero-img-main img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-badge {
  position: absolute;
  bottom: 40px;
  left: -40px;
  padding: 22px 26px;
  background: var(--paper);
  border-radius: 20px;
  border: 1px solid var(--line);
  box-shadow: 0 20px 40px -20px rgba(42, 31, 26, 0.15);
  min-width: 200px;
  z-index: 2;
}

.hero-badge-label {
  font-size: 10px;
  font-weight: 500;
  color: var(--ink-3);
  letter-spacing: 0.24em;
  text-transform: uppercase;
  margin-bottom: 10px;
}

.hero-badge-rating {
  display: flex;
  align-items: center;
  gap: 10px;
}

.hero-badge-stars {
  color: var(--gold);
  font-size: 14px;
  letter-spacing: 2px;
}

.hero-badge-num {
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 500;
  color: var(--ink);
  letter-spacing: -0.01em;
}

.hero-badge-sub {
  font-size: 12px;
  color: var(--ink-3);
  margin-top: 6px;
  letter-spacing: 0.02em;
}

.hero-badge-2 {
  position: absolute;
  top: 40px;
  right: -30px;
  padding: 16px 22px;
  background: var(--rose);
  color: #fff;
  border-radius: 999px;
  font-size: 11px;
  font-weight: 500;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  z-index: 2;
  transform: rotate(-6deg);
}

.hero-badge-2 i { color: #fff; font-size: 12px; margin-right: 4px; }

/* ============ TICKER ============ */
.ticker {
  padding: 32px 0;
  background: var(--bg-2);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  overflow: hidden;
}

.ticker-track {
  display: flex;
  gap: 80px;
  width: fit-content;
  animation: tickerScroll 40s linear infinite;
}

.ticker-item {
  display: flex;
  align-items: center;
  gap: 80px;
  font-family: var(--serif);
  font-size: 20px;
  font-weight: 400;
  font-style: italic;
  color: var(--ink-2);
  letter-spacing: 0.01em;
  white-space: nowrap;
}

.ticker-item i { color: var(--rose); font-size: 12px; }

@keyframes tickerScroll {
  to { transform: translateX(-50%); }
}

/* ============ SECTION ============ */
.section { padding: 110px 0; }

.section-head {
  margin-bottom: 60px;
  max-width: 720px;
}

.section-head.center {
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

.sec-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  font-size: 11px;
  font-weight: 500;
  color: var(--rose);
  letter-spacing: 0.32em;
  text-transform: uppercase;
  margin-bottom: 24px;
}

.sec-eyebrow::before,
.sec-eyebrow::after {
  content: '';
  width: 20px;
  height: 1px;
  background: var(--rose);
}

.section-head.center .sec-eyebrow::before { display: none; }

.section-head h2 {
  font-family: var(--serif);
  font-size: clamp(34px, 4.5vw, 52px);
  font-weight: 400;
  line-height: 1.15;
  letter-spacing: -0.02em;
  color: var(--ink);
  margin-bottom: 20px;
}

.section-head h2 em {
  font-style: italic;
  font-weight: 300;
  color: var(--rose);
}

.section-head p {
  font-size: 16px;
  color: var(--ink-2);
  font-weight: 300;
  line-height: 1.85;
}

/* ============ TREATMENTS ============ */
.treatments {
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.treatment-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.treatment-card {
  background: var(--bg);
  border-radius: 24px;
  overflow: hidden;
  transition: all 0.35s;
  border: 1px solid transparent;
  display: flex;
  flex-direction: column;
}

.treatment-card:hover {
  border-color: var(--rose);
  transform: translateY(-5px);
  box-shadow: 0 30px 50px -30px rgba(184, 114, 110, 0.25);
}

.treatment-img {
  aspect-ratio: 5 / 4;
  overflow: hidden;
  background: var(--bg-2);
  position: relative;
}

.treatment-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.9s;
}

.treatment-card:hover .treatment-img img { transform: scale(1.05); }

.treatment-dur {
  position: absolute;
  top: 16px;
  right: 16px;
  padding: 6px 14px;
  background: rgba(253, 250, 247, 0.95);
  color: var(--ink-2);
  border-radius: 999px;
  font-size: 11px;
  font-weight: 500;
  letter-spacing: 0.1em;
  backdrop-filter: blur(8px);
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.treatment-dur i { color: var(--rose); font-size: 10px; }

.treatment-body {
  padding: 30px 28px 32px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.treatment-cat {
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 0.28em;
  text-transform: uppercase;
  color: var(--gold);
  margin-bottom: 12px;
}

.treatment-card h3 {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 500;
  color: var(--ink);
  letter-spacing: -0.01em;
  margin-bottom: 12px;
  line-height: 1.2;
}

.treatment-card p {
  font-size: 14px;
  color: var(--ink-2);
  font-weight: 300;
  line-height: 1.75;
  margin-bottom: 22px;
  flex: 1;
}

.treatment-benefits {
  display: flex;
  gap: 8px;
  flex-wrap: wrap;
  padding-top: 20px;
  border-top: 1px solid var(--line);
  margin-bottom: 20px;
}

.treatment-tag {
  padding: 4px 12px;
  background: var(--rose-soft);
  color: var(--rose-2);
  border-radius: 999px;
  font-size: 11px;
  font-weight: 400;
  letter-spacing: 0.04em;
}

.treatment-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 18px;
  gap: 12px;
}

.treatment-price {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 500;
  color: var(--ink);
  letter-spacing: -0.01em;
}

.treatment-price small {
  display: block;
  font-family: var(--sans);
  font-size: 10px;
  color: var(--ink-3);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  font-weight: 400;
  margin-top: 3px;
}

.treatment-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 12px;
  font-weight: 500;
  color: var(--rose);
  letter-spacing: 0.12em;
  text-transform: uppercase;
  transition: gap 0.25s;
}

.treatment-card:hover .treatment-btn { gap: 14px; }

/* ============ ABOUT ============ */
.about { background: var(--bg-2); }

.about-grid {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 90px;
  align-items: center;
}

.about-visual {
  position: relative;
  aspect-ratio: 4 / 5;
}

.about-img-main {
  position: absolute;
  top: 0;
  left: 0;
  right: 60px;
  bottom: 80px;
  border-radius: 20px;
  overflow: hidden;
  background: var(--bg-3);
}

.about-img-main img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.about-img-sub {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 220px;
  height: 260px;
  border-radius: 20px;
  overflow: hidden;
  background: var(--bg-3);
  border: 6px solid var(--bg-2);
  box-shadow: 0 20px 40px -20px rgba(42, 31, 26, 0.2);
}

.about-img-sub img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.about-text h2 {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 400;
  line-height: 1.15;
  letter-spacing: -0.02em;
  color: var(--ink);
  margin-bottom: 26px;
}

.about-text h2 em {
  font-style: italic;
  font-weight: 300;
  color: var(--rose);
}

.about-text > p {
  font-size: 16px;
  color: var(--ink-2);
  font-weight: 300;
  line-height: 1.9;
  margin-bottom: 22px;
}

.about-values {
  margin-top: 40px;
  padding-top: 36px;
  border-top: 1px solid var(--line-2);
  display: grid;
  gap: 26px;
}

.about-value {
  display: flex;
  gap: 20px;
  align-items: flex-start;
}

.about-value-icon {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: var(--paper);
  border: 1px solid var(--line);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--rose);
  font-size: 17px;
  flex-shrink: 0;
}

.about-value h4 {
  font-family: var(--serif);
  font-size: 20px;
  font-weight: 500;
  color: var(--ink);
  margin-bottom: 6px;
  letter-spacing: -0.005em;
}

.about-value p {
  font-size: 14px;
  color: var(--ink-2);
  font-weight: 300;
  line-height: 1.7;
  margin: 0;
}

/* ============ SERVICES MENU ============ */
.services-menu {
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.menu-tabs {
  display: flex;
  gap: 6px;
  justify-content: center;
  margin-bottom: 60px;
  flex-wrap: wrap;
}

.menu-tab {
  padding: 12px 26px;
  background: transparent;
  border: 1px solid var(--line-2);
  color: var(--ink-2);
  font-family: inherit;
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  border-radius: 999px;
  transition: all 0.25s;
  cursor: pointer;
}

.menu-tab:hover {
  border-color: var(--rose);
  color: var(--rose);
}

.menu-tab.active {
  background: var(--ink);
  border-color: var(--ink);
  color: #fff;
}

.services-list {
  max-width: 900px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 32px 60px;
}

.service-item {
  padding-bottom: 24px;
  border-bottom: 1px dashed var(--line-2);
}

.service-row {
  display: flex;
  justify-content: space-between;
  align-items: baseline;
  gap: 16px;
  margin-bottom: 8px;
}

.service-row h3 {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 500;
  color: var(--ink);
  letter-spacing: -0.005em;
  line-height: 1.25;
}

.service-price {
  font-family: var(--serif);
  font-size: 19px;
  font-weight: 500;
  color: var(--rose);
  white-space: nowrap;
  letter-spacing: -0.01em;
}

.service-desc {
  font-size: 13px;
  color: var(--ink-3);
  font-weight: 300;
  line-height: 1.65;
  margin-bottom: 10px;
}

.service-meta {
  display: flex;
  gap: 16px;
  font-size: 12px;
  color: var(--ink-3);
  font-weight: 300;
  letter-spacing: 0.05em;
  flex-wrap: wrap;
}

.service-meta span {
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.service-meta i { color: var(--rose); font-size: 11px; }

.service-badge {
  display: inline-block;
  padding: 3px 10px;
  background: var(--gold-soft);
  color: var(--gold);
  border-radius: 999px;
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  margin-left: 8px;
  vertical-align: middle;
}

/* ============ GALLERY ============ */
.gallery { background: var(--bg); }

.gallery-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-auto-rows: 200px;
  gap: 16px;
}

.gallery-item {
  border-radius: 16px;
  overflow: hidden;
  position: relative;
  cursor: pointer;
  background: var(--bg-3);
}

.gallery-item.tall { grid-row: span 2; }

.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.8s;
}

.gallery-item:hover img { transform: scale(1.06); }

.gallery-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(42, 31, 26, 0.75), transparent 60%);
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 20px;
  color: #fff;
  opacity: 0;
  transition: opacity 0.3s;
}

.gallery-item:hover .gallery-overlay { opacity: 1; }

.gallery-overlay .cat {
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 0.24em;
  text-transform: uppercase;
  color: var(--rose-soft);
  margin-bottom: 6px;
}

.gallery-overlay h3 {
  font-family: var(--serif);
  font-size: 20px;
  font-weight: 500;
  letter-spacing: -0.005em;
}

/* ============ TESTIMONI ============ */
.testi { background: var(--bg-2); }

.testi-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.testi-card {
  padding: 40px 34px;
  background: var(--paper);
  border-radius: 24px;
  border: 1px solid var(--line);
  transition: all 0.3s;
}

.testi-card:hover {
  border-color: var(--rose-line);
  transform: translateY(-4px);
  box-shadow: 0 25px 50px -25px rgba(184, 114, 110, 0.2);
}

.testi-quote {
  font-family: var(--serif);
  font-size: 60px;
  line-height: 0.6;
  color: var(--rose);
  margin-bottom: 16px;
  font-weight: 500;
  font-style: italic;
}

.testi-text {
  font-family: var(--serif);
  font-size: 18px;
  font-weight: 400;
  font-style: italic;
  line-height: 1.55;
  color: var(--ink-2);
  margin-bottom: 28px;
  letter-spacing: -0.005em;
}

.testi-author {
  display: flex;
  align-items: center;
  gap: 14px;
  padding-top: 22px;
  border-top: 1px solid var(--line);
}

.testi-author img {
  width: 46px;
  height: 46px;
  border-radius: 50%;
  object-fit: cover;
}

.testi-author .name {
  font-family: var(--serif);
  font-size: 16px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.005em;
}

.testi-author .role {
  font-size: 12px;
  color: var(--ink-3);
  letter-spacing: 0.05em;
  margin-top: 2px;
  font-weight: 300;
}

/* ============ PRODUCTS ============ */
.products {
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.products-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}

.product-card {
  text-align: center;
  transition: all 0.3s;
  cursor: pointer;
}

.product-img {
  aspect-ratio: 3 / 4;
  border-radius: 16px;
  overflow: hidden;
  background: var(--bg-2);
  margin-bottom: 20px;
  position: relative;
}

.product-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.7s;
}

.product-card:hover .product-img img { transform: scale(1.05); }

.product-tag {
  position: absolute;
  top: 14px;
  left: 14px;
  padding: 5px 12px;
  background: var(--rose);
  color: #fff;
  border-radius: 999px;
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 0.16em;
  text-transform: uppercase;
}

.product-card h3 {
  font-family: var(--serif);
  font-size: 19px;
  font-weight: 500;
  color: var(--ink);
  margin-bottom: 6px;
  letter-spacing: -0.005em;
}

.product-cat {
  font-size: 11px;
  color: var(--ink-3);
  letter-spacing: 0.16em;
  text-transform: uppercase;
  margin-bottom: 10px;
  font-weight: 400;
}

.product-price {
  font-family: var(--serif);
  font-size: 20px;
  font-weight: 500;
  color: var(--rose);
  letter-spacing: -0.005em;
}

/* ============ CTA ============ */
.cta {
  padding: 110px 0;
  background: var(--bg);
  position: relative;
  overflow: hidden;
}

.cta::before {
  content: '';
  position: absolute;
  top: -200px;
  right: -150px;
  width: 500px;
  height: 500px;
  background: var(--rose-soft);
  border-radius: 50%;
  opacity: 0.5;
  pointer-events: none;
}

.cta::after {
  content: '';
  position: absolute;
  bottom: -150px;
  left: -100px;
  width: 350px;
  height: 350px;
  background: var(--gold-soft);
  border-radius: 50%;
  opacity: 0.5;
  pointer-events: none;
}

.cta-inner {
  position: relative;
  z-index: 1;
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
}

.cta-inner .sec-eyebrow { justify-content: center; }
.cta-inner .sec-eyebrow::after { display: block; }

.cta h2 {
  font-family: var(--serif);
  font-size: clamp(34px, 4.5vw, 54px);
  font-weight: 400;
  line-height: 1.1;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 24px;
}

.cta h2 em {
  font-style: italic;
  font-weight: 300;
  color: var(--rose);
}

.cta p {
  font-size: 16px;
  color: var(--ink-2);
  font-weight: 300;
  line-height: 1.85;
  margin-bottom: 44px;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

.cta-actions {
  display: flex;
  gap: 14px;
  justify-content: center;
  flex-wrap: wrap;
}

/* ============ FOOTER ============ */
.footer {
  background: var(--ink);
  color: var(--bg);
  padding: 80px 0 32px;
}

.footer-grid {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 40px;
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.3fr;
  gap: 56px;
  padding-bottom: 56px;
  border-bottom: 1px solid rgba(253, 250, 247, 0.12);
  margin-bottom: 32px;
}

.footer-brand {
  display: flex;
  align-items: center;
  gap: 12px;
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 500;
  color: var(--bg);
  margin-bottom: 22px;
}

.footer-brand .brand-mark {
  background: rgba(184, 114, 110, 0.15);
  border-color: rgba(184, 114, 110, 0.3);
  color: var(--rose-soft);
}

.footer-desc {
  font-size: 14px;
  color: rgba(253, 250, 247, 0.6);
  line-height: 1.8;
  font-weight: 300;
  max-width: 340px;
  margin-bottom: 22px;
}

.footer-hours {
  padding: 16px 18px;
  background: rgba(253, 250, 247, 0.05);
  border: 1px solid rgba(253, 250, 247, 0.1);
  border-radius: 12px;
  font-size: 12px;
  color: rgba(253, 250, 247, 0.7);
  line-height: 1.75;
  font-weight: 300;
}

.footer-hours strong {
  color: var(--rose-soft);
  font-weight: 500;
  letter-spacing: 0.12em;
}

.footer-col h4 {
  font-size: 11px;
  font-weight: 500;
  color: var(--rose-soft);
  letter-spacing: 0.28em;
  text-transform: uppercase;
  margin-bottom: 22px;
}

.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 12px; }

.footer-col a {
  font-size: 14px;
  color: rgba(253, 250, 247, 0.65);
  font-weight: 300;
  transition: color 0.2s;
}

.footer-col a:hover { color: var(--rose-soft); }

.footer-contact p {
  font-size: 14px;
  color: rgba(253, 250, 247, 0.65);
  font-weight: 300;
  margin-bottom: 14px;
  display: flex;
  gap: 12px;
  align-items: flex-start;
  line-height: 1.6;
}

.footer-contact i {
  color: var(--rose);
  font-size: 13px;
  margin-top: 4px;
  width: 14px;
}

.footer-bottom {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 16px;
  flex-wrap: wrap;
  font-size: 12px;
  color: rgba(253, 250, 247, 0.5);
  font-weight: 300;
  letter-spacing: 0.04em;
}

.footer-social {
  display: flex;
  gap: 8px;
}

.footer-social a {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: rgba(253, 250, 247, 0.06);
  border: 1px solid rgba(253, 250, 247, 0.1);
  color: rgba(253, 250, 247, 0.6);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  transition: all 0.2s;
}

.footer-social a:hover {
  background: var(--rose);
  border-color: var(--rose);
  color: #fff;
}

/* ============ REVEAL ============ */
.reveal {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.85s ease, transform 0.85s ease;
}

.reveal.on {
  opacity: 1;
  transform: translateY(0);
}

/* ============ FLOAT ============ */
.float-group {
  position: fixed;
  bottom: 26px;
  right: 26px;
  z-index: 200;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.float-btn {
  width: 54px;
  height: 54px;
  border-radius: 50%;
  background: var(--rose);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  text-decoration: none;
  border: none;
  cursor: pointer;
  transition: all 0.25s;
  box-shadow: 0 12px 28px -8px rgba(184, 114, 110, 0.5);
}

.float-btn:hover {
  background: var(--rose-2);
  transform: translateY(-3px);
}

/* ============ RESPONSIVE ============ */
@media (max-width: 1100px) {
  .hero-inner { grid-template-columns: 1fr; gap: 60px; }
  .hero-visual { max-width: 480px; margin: 0 auto; }
  .hero-badge { left: 0; }
  .hero-badge-2 { right: 0; }
  .treatment-grid { grid-template-columns: repeat(2, 1fr); }
  .about-grid { grid-template-columns: 1fr; gap: 60px; }
  .about-visual { max-width: 480px; margin: 0 auto; }
  .services-list { grid-template-columns: 1fr; }
  .gallery-grid { grid-template-columns: repeat(3, 1fr); }
  .testi-grid { grid-template-columns: 1fr; }
  .products-grid { grid-template-columns: repeat(2, 1fr); }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
  .footer-grid > div:first-child { grid-column: span 2; }
}

@media (max-width: 768px) {
  .wrap, .nav-inner, .footer-grid, .footer-bottom { padding: 0 20px; }

  .nav-menu {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    width: 300px;
    height: 100vh;
    background: var(--paper);
    flex-direction: column;
    padding: 100px 32px 40px;
    gap: 6px;
    border-left: 1px solid var(--line);
    transition: right 0.35s;
    z-index: 99;
    align-items: stretch;
    justify-content: flex-start;
  }

  .nav-menu.open { display: flex; }
  .nav-menu a { padding: 14px 18px; font-size: 14px; border-radius: 999px; }
  .nav-menu a::after { display: none; }
  .nav-cta { padding: 10px 18px; font-size: 11px; }
  .nav-toggle { display: block; z-index: 1001; }

  .hero { padding: 40px 0 70px; }
  .hero h1 { font-size: 42px; }
  .hero-badge { bottom: 20px; left: 20px; padding: 16px 20px; min-width: 0; }
  .hero-badge-num { font-size: 20px; }
  .hero-badge-2 { top: 20px; right: 20px; transform: rotate(0); padding: 12px 18px; font-size: 10px; }

  .section { padding: 72px 0; }

  .treatment-grid { grid-template-columns: 1fr; }
  .gallery-grid { grid-template-columns: repeat(2, 1fr); grid-auto-rows: 160px; }
  .products-grid { grid-template-columns: 1fr; }

  .menu-tabs { justify-content: flex-start; overflow-x: auto; padding-bottom: 8px; }
  .menu-tab { flex-shrink: 0; }

  .footer-grid { grid-template-columns: 1fr; }
  .footer-grid > div:first-child { grid-column: span 1; }

  .about-img-sub { width: 140px; height: 170px; }
  .about-img-main { right: 40px; bottom: 50px; }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 34px; }
  .section-head h2 { font-size: 30px; }
  .brand-text small { display: none; }
  .footer-bottom { justify-content: center; text-align: center; }
}
</style>
</head>
<body>

<!-- NAV -->
<nav class="nav" id="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <div class="brand-mark"><i class="fas fa-spa"></i></div>
      <div class="brand-text">
        Rosée
        <small>Beauty Studio</small>
      </div>
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#treatments">Perawatan</a></li>
      <li><a href="#tentang">Tentang</a></li>
      <li><a href="#layanan">Layanan</a></li>
      <li><a href="#produk">Produk</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>

    <div class="nav-actions">
      <a href="#" class="btn-nav-icon" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
      <a href="#kontak" class="nav-cta">Booking</a>
      <button class="nav-toggle" id="navToggle" aria-label="Menu">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="hero-bg-circle c1"></div>
  <div class="hero-bg-circle c2"></div>

  <div class="wrap">
    <div class="hero-inner">

      <div class="hero-text reveal">
        <div class="hero-tag">
          <i class="fas fa-leaf"></i>
          Klinik Kecantikan & Skincare
        </div>

        <h1>
          Kulit sehat, <em>perawatan yang tepat.</em>
        </h1>

        <p class="hero-lede">
          Rosée Beauty Studio adalah klinik kecantikan yang percaya bahwa kulit sehat lahir dari perawatan yang tepat, bukan dari janji hasil instan. Kami merawat setiap kulit sesuai kondisinya masing-masing.
        </p>

        <div class="hero-actions">
          <a href="#kontak" class="btn btn-rose">
            Booking Konsultasi <i class="fas fa-arrow-right"></i>
          </a>
          <a href="#treatments" class="btn btn-outline">
            Lihat Perawatan
          </a>
        </div>

        <div class="hero-mini">
          <div class="hero-mini-item">
            <i class="fas fa-award"></i>
            <span>Dokter kulit bersertifikat</span>
          </div>
          <div class="hero-mini-item">
            <i class="fas fa-flask"></i>
            <span>Produk formulasi sendiri</span>
          </div>
          <div class="hero-mini-item">
            <i class="fas fa-leaf"></i>
            <span>Bahan alami & aman</span>
          </div>
        </div>
      </div>

      <div class="hero-visual reveal">
        <div class="hero-img-main">
          <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=800&q=80" alt="">
        </div>

        <div class="hero-badge">
          <div class="hero-badge-label">Kepuasan Klien</div>
          <div class="hero-badge-rating">
            <span class="hero-badge-stars">★★★★★</span>
            <span class="hero-badge-num">4.9</span>
          </div>
          <div class="hero-badge-sub">Dari 850+ ulasan</div>
        </div>

        <div class="hero-badge-2">
          <i class="fas fa-circle"></i> Buka Hari Ini
        </div>
      </div>

    </div>
  </div>
</header>

<!-- TICKER -->
<div class="ticker">
  <div class="ticker-track">
    <div class="ticker-item">
      Facial Treatment <i class="fas fa-circle"></i>
      Body Spa <i class="fas fa-circle"></i>
      Chemical Peeling <i class="fas fa-circle"></i>
      Skincare Consultation <i class="fas fa-circle"></i>
      Microdermabrasion <i class="fas fa-circle"></i>
      Laser Treatment <i class="fas fa-circle"></i>
      Facial Treatment <i class="fas fa-circle"></i>
      Body Spa <i class="fas fa-circle"></i>
      Chemical Peeling <i class="fas fa-circle"></i>
      Skincare Consultation <i class="fas fa-circle"></i>
      Microdermabrasion <i class="fas fa-circle"></i>
      Laser Treatment <i class="fas fa-circle"></i>
    </div>
  </div>
</div>

<!-- TREATMENTS -->
<section class="section treatments" id="treatments">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Perawatan Unggulan</div>
      <h2>
        Dirawat dengan <em>teliti, penuh perhatian.</em>
      </h2>
      <p>Setiap perawatan dimulai dari konsultasi dan analisa kulit. Kami tidak menawarkan paket yang seragam untuk semua orang.</p>
    </div>

    <div class="treatment-grid">

      <div class="treatment-card reveal">
        <div class="treatment-img">
          <img src="https://images.unsplash.com/photo-1616394584738-fc6e612e71b9?w=800&q=80" alt="">
          <div class="treatment-dur"><i class="fas fa-clock"></i> 90 menit</div>
        </div>
        <div class="treatment-body">
          <div class="treatment-cat">Facial Treatment</div>
          <h3>Signature Glow Facial</h3>
          <p>Pembersihan mendalam, eksfoliasi lembut, dan masker pencerah yang disesuaikan dengan jenis kulit Anda. Hasilnya kulit tampak segar dan bercahaya alami.</p>
          <div class="treatment-benefits">
            <span class="treatment-tag">Cocok semua kulit</span>
            <span class="treatment-tag">Hasil instan</span>
          </div>
          <div class="treatment-footer">
            <div class="treatment-price">
              Rp 550rb
              <small>per sesi</small>
            </div>
            <a href="#kontak" class="treatment-btn">
              Booking <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="treatment-card reveal">
        <div class="treatment-img">
          <img src="https://images.unsplash.com/photo-1512290923902-8a9f81dc236c?w=800&q=80" alt="">
          <div class="treatment-dur"><i class="fas fa-clock"></i> 120 menit</div>
        </div>
        <div class="treatment-body">
          <div class="treatment-cat">Anti-Aging</div>
          <h3>Rejuvenating Treatment</h3>
          <p>Perawatan intensif untuk mengurangi tanda penuaan dini dengan teknologi microneedling dan serum antioksidan berkonsentrasi tinggi.</p>
          <div class="treatment-benefits">
            <span class="treatment-tag">Anti-aging</span>
            <span class="treatment-tag">Kulit kencang</span>
          </div>
          <div class="treatment-footer">
            <div class="treatment-price">
              Rp 1.200rb
              <small>per sesi</small>
            </div>
            <a href="#kontak" class="treatment-btn">
              Booking <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="treatment-card reveal">
        <div class="treatment-img">
          <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=800&q=80" alt="">
          <div class="treatment-dur"><i class="fas fa-clock"></i> 150 menit</div>
        </div>
        <div class="treatment-body">
          <div class="treatment-cat">Body Treatment</div>
          <h3>Full Body Spa Ritual</h3>
          <p>Rangkaian perawatan tubuh lengkap — scrub, masker, dan pijat relaksasi dengan minyak esensial pilihan. Cocok untuk melepas penat setelah minggu yang panjang.</p>
          <div class="treatment-benefits">
            <span class="treatment-tag">Relaksasi</span>
            <span class="treatment-tag">Kulit halus</span>
          </div>
          <div class="treatment-footer">
            <div class="treatment-price">
              Rp 780rb
              <small>per sesi</small>
            </div>
            <a href="#kontak" class="treatment-btn">
              Booking <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="section about" id="tentang">
  <div class="wrap">
    <div class="about-grid">

      <div class="about-visual reveal">
        <div class="about-img-main">
          <img src="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?w=800&q=80" alt="">
        </div>
        <div class="about-img-sub">
          <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=600&q=80" alt="">
        </div>
      </div>

      <div class="about-text reveal">
        <div class="sec-eyebrow">Tentang Kami</div>
        <h2>
          Kami percaya kulit sehat <em>tidak perlu instan.</em>
        </h2>

        <p>
          Rosée Beauty Studio didirikan pada 2016 oleh dua sahabat — seorang dokter kulit dan seorang apoteker. Mereka prihatin dengan banyaknya klinik yang menjanjikan hasil putih dalam semalam, tanpa mempertimbangkan kesehatan kulit jangka panjang.
        </p>

        <p>
          Kami memilih jalan yang berbeda. Setiap klien baru wajib melewati konsultasi kulit terlebih dahulu. Kami memotret, menganalisa, dan baru kemudian merekomendasikan perawatan yang sesuai. Tidak ada paket seragam, tidak ada janji hasil instan.
        </p>

        <p>
          Produk yang kami gunakan juga kami formulasikan sendiri bersama apoteker kami. Bekerja sama dengan laboratorium kosmetik di Bandung, kami pastikan setiap bahan aktif aman, efektif, dan disesuaikan untuk kulit orang Indonesia.
        </p>

        <div class="about-values">

          <div class="about-value">
            <div class="about-value-icon"><i class="fas fa-user-doctor"></i></div>
            <div>
              <h4>Konsultasi Dulu, Perawatan Kemudian</h4>
              <p>Setiap klien baru wajib menjalani analisa kulit gratis sebelum treatment apapun.</p>
            </div>
          </div>

          <div class="about-value">
            <div class="about-value-icon"><i class="fas fa-flask-vial"></i></div>
            <div>
              <h4>Produk Formulasi Sendiri</h4>
              <p>Kami formulasikan sendiri produk perawatan kami bersama apoteker berpengalaman.</p>
            </div>
          </div>

          <div class="about-value">
            <div class="about-value-icon"><i class="fas fa-heart"></i></div>
            <div>
              <h4>Tidak Ada Paksaan</h4>
              <p>Kami tidak akan menawarkan perawatan yang tidak Anda butuhkan. Kalau tidak perlu, kami bilang.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- SERVICES MENU -->
<section class="section services-menu" id="layanan">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Daftar Layanan</div>
      <h2>
        Semua yang <em>kami tawarkan.</em>
      </h2>
      <p>Harga transparan, tanpa biaya tersembunyi. Konsultasi awal selalu gratis.</p>
    </div>

    <div class="menu-tabs reveal">
      <button class="menu-tab active" data-cat="all">Semua</button>
      <button class="menu-tab" data-cat="facial">Facial</button>
      <button class="menu-tab" data-cat="body">Body</button>
      <button class="menu-tab" data-cat="hair">Rambut</button>
      <button class="menu-tab" data-cat="addon">Tambahan</button>
    </div>

    <div class="services-list">

      <div class="service-item reveal" data-cat="facial">
        <div class="service-row">
          <h3>Signature Glow Facial <span class="service-badge">Populer</span></h3>
          <div class="service-price">550rb</div>
        </div>
        <p class="service-desc">Pembersihan mendalam, eksfoliasi lembut, dan masker pencerah yang disesuaikan dengan jenis kulit.</p>
        <div class="service-meta">
          <span><i class="fas fa-clock"></i> 90 menit</span>
          <span><i class="fas fa-user"></i> Semua jenis kulit</span>
        </div>
      </div>

      <div class="service-item reveal" data-cat="facial">
        <div class="service-row">
          <h3>Rejuvenating Treatment</h3>
          <div class="service-price">1.200rb</div>
        </div>
        <p class="service-desc">Perawatan anti-aging dengan microneedling dan serum antioksidan berkonsentrasi tinggi.</p>
        <div class="service-meta">
          <span><i class="fas fa-clock"></i> 120 menit</span>
          <span><i class="fas fa-user"></i> Kulit matang</span>
        </div>
      </div>

      <div class="service-item reveal" data-cat="facial">
        <div class="service-row">
          <h3>Brightening Peel</h3>
          <div class="service-price">680rb</div>
        </div>
        <p class="service-desc">Chemical peeling ringan untuk menyamarkan noda hitam dan meratakan warna kulit.</p>
        <div class="service-meta">
          <span><i class="fas fa-clock"></i> 60 menit</span>
          <span><i class="fas fa-user"></i> Semua jenis kulit</span>
        </div>
      </div>

      <div class="service-item reveal" data-cat="facial">
        <div class="service-row">
          <h3>Acne Clear Treatment</h3>
          <div class="service-price">620rb</div>
        </div>
        <p class="service-desc">Perawatan khusus kulit berjerawat dengan ekstraksi lembut dan masker antibakteri.</p>
        <div class="service-meta">
          <span><i class="fas fa-clock"></i> 75 menit</span>
          <span><i class="fas fa-user"></i> Kulit berjerawat</span>
        </div>
      </div>

      <div class="service-item reveal" data-cat="body">
        <div class="service-row">
          <h3>Full Body Spa Ritual <span class="service-badge">Favorit</span></h3>
          <div class="service-price">780rb</div>
        </div>
        <p class="service-desc">Scrub, masker tubuh, dan pijat relaksasi dengan minyak esensial pilihan.</p>
        <div class="service-meta">
          <span><i class="fas fa-clock"></i> 150 menit</span>
          <span><i class="fas fa-user"></i> Relaksasi</span>
        </div>
      </div>

      <div class="service-item reveal" data-cat="body">
        <div class="service-row">
          <h3>Body Whitening Treatment</h3>
          <div class="service-price">950rb</div>
        </div>
        <p class="service-desc">Perawatan pencerah tubuh dengan bahan alami untuk meratakan warna kulit.</p>
        <div class="service-meta">
          <span><i class="fas fa-clock"></i> 120 menit</span>
          <span><i class="fas fa-user"></i> Semua jenis kulit</span>
        </div>
      </div>

      <div class="service-item reveal" data-cat="hair">
        <div class="service-row">
          <h3>Hair Spa Premium</h3>
          <div class="service-price">420rb</div>
        </div>
        <p class="service-desc">Perawatan kulit kepala dan rambut dengan serum penumbuh dan pijat relaksasi.</p>
        <div class="service-meta">
          <span><i class="fas fa-clock"></i> 60 menit</span>
          <span><i class="fas fa-user"></i> Semua jenis rambut</span>
        </div>
      </div>

      <div class="service-item reveal" data-cat="hair">
        <div class="service-row">
          <h3>Scalp Detox Treatment</h3>
          <div class="service-price">380rb</div>
        </div>
        <p class="service-desc">Membersihkan kulit kepala dari penumpukan produk dan minyak berlebih.</p>
        <div class="service-meta">
          <span><i class="fas fa-clock"></i> 45 menit</span>
          <span><i class="fas fa-user"></i> Kulit kepala berminyak</span>
        </div>
      </div>

      <div class="service-item reveal" data-cat="addon">
        <div class="service-row">
          <h3>Eye Rejuvenation</h3>
          <div class="service-price">280rb</div>
        </div>
        <p class="service-desc">Perawatan area mata untuk mengurangi kantung mata dan garis halus.</p>
        <div class="service-meta">
          <span><i class="fas fa-clock"></i> 30 menit</span>
          <span><i class="fas fa-user"></i> Tambahan</span>
        </div>
      </div>

      <div class="service-item reveal" data-cat="addon">
        <div class="service-row">
          <h3>Neck Firming Treatment</h3>
          <div class="service-price">320rb</div>
        </div>
        <p class="service-desc">Perawatan area leher untuk mengencangkan dan mengurangi garis halus.</p>
        <div class="service-meta">
          <span><i class="fas fa-clock"></i> 40 menit</span>
          <span><i class="fas fa-user"></i> Tambahan</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- GALLERY -->
<section class="section gallery">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-eyebrow">Studio Kami</div>
      <h2>
        Ruang yang <em>menenangkan.</em>
      </h2>
      <p>Kami percaya lingkungan yang tenang dan bersih adalah bagian dari perawatan itu sendiri.</p>
    </div>

    <div class="gallery-grid">

      <div class="gallery-item tall reveal">
        <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=800&q=80" alt="">
        <div class="gallery-overlay">
          <div class="cat">Ruang Perawatan</div>
          <h3>Treatment Room</h3>
        </div>
      </div>

      <div class="gallery-item reveal">
        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?w=800&q=80" alt="">
        <div class="gallery-overlay">
          <div class="cat">Lobby</div>
          <h3>Reception Area</h3>
        </div>
      </div>

      <div class="gallery-item reveal">
        <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?w=800&q=80" alt="">
        <div class="gallery-overlay">
          <div class="cat">Detail</div>
          <h3>Skincare Display</h3>
        </div>
      </div>

      <div class="gallery-item reveal">
        <img src="https://images.unsplash.com/photo-1633681926022-84c23e8cb2d6?w=800&q=80" alt="">
        <div class="gallery-overlay">
          <div class="cat">Ruang Tunggu</div>
          <h3>Waiting Lounge</h3>
        </div>
      </div>

      <div class="gallery-item reveal">
        <img src="https://images.unsplash.com/photo-1487412912498-0447578fcca8?w=800&q=80" alt="">
        <div class="gallery-overlay">
          <div class="cat">Detail</div>
          <h3>Essential Oils</h3>
        </div>
      </div>

      <div class="gallery-item tall reveal">
        <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?w=800&q=80" alt="">
        <div class="gallery-overlay">
          <div class="cat">Facial Room</div>
          <h3>Facial Suite</h3>
        </div>
      </div>

      <div class="gallery-item reveal">
        <img src="https://images.unsplash.com/photo-1596178065887-1198b6148b2b?w=800&q=80" alt="">
        <div class="gallery-overlay">
          <div class="cat">Detail</div>
          <h3>Product Corner</h3>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PRODUCTS -->
<section class="section products" id="produk">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Produk Kami</div>
      <h2>
        Skincare yang <em>kami formulasikan sendiri.</em>
      </h2>
      <p>Setiap produk dibuat dengan bahan aktif yang sudah terbukti, dalam konsentrasi yang aman untuk pemakaian jangka panjang.</p>
    </div>

    <div class="products-grid">

      <div class="product-card reveal">
        <div class="product-img">
          <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=600&q=80" alt="">
          <div class="product-tag">Best Seller</div>
        </div>
        <h3>Rosée Glow Serum</h3>
        <div class="product-cat">Serum</div>
        <div class="product-price">Rp 285rb</div>
      </div>

      <div class="product-card reveal">
        <div class="product-img">
          <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=600&q=80" alt="">
        </div>
        <h3>Gentle Cleanser</h3>
        <div class="product-cat">Pembersih</div>
        <div class="product-price">Rp 165rb</div>
      </div>

      <div class="product-card reveal">
        <div class="product-img">
          <img src="https://images.unsplash.com/photo-1611930022073-b7a4ba5fcccd?w=600&q=80" alt="">
        </div>
        <h3>Hydrating Moisturizer</h3>
        <div class="product-cat">Pelembap</div>
        <div class="product-price">Rp 220rb</div>
      </div>

      <div class="product-card reveal">
        <div class="product-img">
          <img src="https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?w=600&q=80" alt="">
          <div class="product-tag">Baru</div>
        </div>
        <h3>Brightening Toner</h3>
        <div class="product-cat">Toner</div>
        <div class="product-price">Rp 195rb</div>
      </div>

    </div>
  </div>
</section>

<!-- TESTIMONI -->
<section class="section testi">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Kata Klien</div>
      <h2>
        Pengalaman mereka <em>di Rosée.</em>
      </h2>
    </div>

    <div class="testi-grid">

      <div class="testi-card reveal">
        <div class="testi-quote">"</div>
        <p class="testi-text">
          Yang saya suka, mereka tidak langsung menawarkan paket. Ada konsultasi dulu, dianalisa kulit saya, baru direkomendasikan. Rasanya dihargai sebagai klien.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=47" alt="">
          <div>
            <div class="name">Ibu Ratna Kusuma</div>
            <div class="role">Klien sejak 2020</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal">
        <div class="testi-quote">"</div>
        <p class="testi-text">
          Saya sudah coba banyak klinik untuk jerawat. Baru di Rosée ini jerawat saya benar-benar ditangani dengan sabar. Enam bulan konsisten, hasilnya luar biasa.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=20" alt="">
          <div>
            <div class="name">Maya Anggraini</div>
            <div class="role">Klien acne treatment</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal">
        <div class="testi-quote">"</div>
        <p class="testi-text">
          Full body spa-nya jadi favorit saya. Tempatnya tenang, terapisnya teliti, dan produk yang mereka pakai wangi tapi tidak berlebihan. Pilihan sempurna untuk weekend.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=45" alt="">
          <div>
            <div class="name">Sarah Wijaya</div>
            <div class="role">Klien body treatment</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta" id="kontak">
  <div class="wrap">
    <div class="cta-inner reveal">
      <div class="sec-eyebrow">Booking Sekarang</div>
      <h2>
        Mulai perjalanan kulit Anda <em>bersama kami.</em>
      </h2>
      <p>
        Konsultasi pertama gratis. Kami akan analisa kondisi kulit Anda, dengarkan kekhawatiran Anda, dan rekomendasikan perawatan yang benar-benar sesuai.
      </p>
      <div class="cta-actions">
        <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2013" class="btn btn-rose" target="_blank">
          <i class="fab fa-whatsapp"></i> Booking via WhatsApp
        </a>
        <a href="tel:0215550220" class="btn btn-outline">
          <i class="fas fa-phone"></i> Telepon Studio
        </a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-grid">

    <div>
      <div class="footer-brand">
        <div class="brand-mark"><i class="fas fa-spa"></i></div>
        <div class="brand-text">
          Rosée
          <small style="color: rgba(253,250,247,0.5);">Beauty Studio</small>
        </div>
      </div>
      <p class="footer-desc">
        Klinik kecantikan dan skin care yang percaya bahwa kulit sehat lahir dari perawatan yang tepat, bukan janji hasil instan.
      </p>
      <div class="footer-hours">
        <strong>JAM OPERASIONAL</strong><br>
        Senin – Jumat: 10.00 – 20.00<br>
        Sabtu: 09.00 – 19.00<br>
        Minggu: 10.00 – 17.00
      </div>
    </div>

    <div class="footer-col">
      <h4>Perawatan</h4>
      <ul>
        <li><a href="#">Facial Treatment</a></li>
        <li><a href="#">Body Spa</a></li>
        <li><a href="#">Anti-Aging</a></li>
        <li><a href="#">Acne Care</a></li>
        <li><a href="#">Hair Treatment</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Studio</h4>
      <ul>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Tim Dokter</a></li>
        <li><a href="#">Karier</a></li>
        <li><a href="#">Jurnal</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>

    <div class="footer-col footer-contact">
      <h4>Kunjungi Kami</h4>
      <p><i class="fas fa-location-dot"></i> Jl. Senopati Raya 45<br>Kebayoran Baru, Jakarta Selatan 12190</p>
      <p><i class="fas fa-phone"></i> (021) 555-0220</p>
      <p><i class="fab fa-whatsapp"></i> +62 812 3456 7890</p>
      <p><i class="fas fa-envelope"></i> hello@roseebeauty.id</p>
    </div>

  </div>

  <div class="footer-bottom">
    <div>© 2025 Rosée Beauty Studio. Semua hak dilindungi.</div>
    <div class="footer-social">
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</footer>

<!-- FLOAT -->
<div class="float-group">
  <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2013" class="float-btn" target="_blank" aria-label="WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

<script>
// Nav scroll
const nav = document.getElementById('nav');
window.addEventListener('scroll', () => {
  nav.classList.toggle('scrolled', window.scrollY > 30);
});

// Mobile nav
const navToggle = document.getElementById('navToggle');
const navMenu = document.getElementById('navMenu');
navToggle.addEventListener('click', () => {
  navMenu.classList.toggle('open');
  const icon = navToggle.querySelector('i');
  icon.className = navMenu.classList.contains('open') ? 'fas fa-times' : 'fas fa-bars';
});
document.querySelectorAll('.nav-menu a').forEach(a => {
  a.addEventListener('click', () => {
    navMenu.classList.remove('open');
    navToggle.querySelector('i').className = 'fas fa-bars';
  });
});

// Reveal
const revealObs = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('on');
      revealObs.unobserve(entry.target);
    }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));

// Menu filter
const menuTabs = document.querySelectorAll('.menu-tab');
const serviceItems = document.querySelectorAll('.service-item');

menuTabs.forEach(tab => {
  tab.addEventListener('click', () => {
    menuTabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    const cat = tab.dataset.cat;

    serviceItems.forEach(item => {
      const show = cat === 'all' || item.dataset.cat === cat;
      item.style.display = show ? 'block' : 'none';
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