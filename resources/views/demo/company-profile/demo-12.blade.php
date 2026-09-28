@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rosée Beauty Studio — Perawatan Kulit & Kecantikan Premium</title>
<meta name="description" content="Rosée Beauty Studio — klinik kecantikan dan skin care dengan perawatan facial, body treatment, dan produk skincare buatan sendiri.">
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

.wrap-narrow {
  max-width: 920px;
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

.brand-text {
  line-height: 1;
}

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

.hero-tag i {
  color: var(--gold);
  font-size: 11px;
}

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

.hero-mini-item i {
  color: var(--gold);
  font-size: 15px;
}

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

.hero-badge-2 i {
  color: #fff;
  font-size: 12px;
  margin-right: 4px;
}

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

.ticker-item i {
  color: var(--rose);
  font-size: 12px;
}

@keyframes tickerScroll {
  to { transform: translateX(-50%); }
}

/* ============ SECTION ============ */
.section {
  padding: 110px 0;
}

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
  padding: 0;
  background: var(--bg);
  border-radius: 24px;
  overflow: hidden;
  transition: all 0.35s;
  border: 1px solid transparent;
  display: flex;
  flex-direction: column;
  position: relative;
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

.treatment-dur i {
  color: var(--rose);
  font-size: 10px;
}

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
.about {
  background: var(--bg-2);
}

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
  padding-bottom: 4px;
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

.service-meta i {
  color: var(--rose);
  font-size: 11px;
}

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
.gallery {
  background: var(--bg);
}

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
.testi {
  background: var(--bg-2);
}

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
  position: relative;
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
  gap: 14px;
  margin-bottom: 22px;
}

.footer-brand .brand-mark {
  width: 44px;
  height: 44px;
  border-color: rgba(255, 255, 255, 0.15);
  color: var(--burgundy-soft);
}

.footer-brand .brand-text {
  color: #fff;
  font-size: 22px;
}

.footer-brand .brand-text small {
  color: rgba(255, 255, 255, 0.5);
}

.footer-desc {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.6);
  line-height: 1.8;
  max-width: 340px;
  margin-bottom: 24px;
}

.footer-license {
  padding: 16px 18px;
  background: rgba(255, 255, 255, 0.04);
  border: 1px solid rgba(255, 255, 255, 0.1);
  font-size: 12px;
  color: rgba(255, 255, 255, 0.55);
  line-height: 1.75;
  letter-spacing: 0.02em;
}

.footer-license strong {
  color: rgba(255, 255, 255, 0.85);
  font-weight: 600;
}

.footer-col h4 {
  font-family: var(--sans);
  font-size: 11px;
  font-weight: 700;
  color: rgba(255, 255, 255, 0.4);
  letter-spacing: 0.22em;
  text-transform: uppercase;
  margin-bottom: 22px;
}

.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 13px; }

.footer-col a {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.65);
  transition: color 0.2s;
}

.footer-col a:hover { color: #fff; }

.footer-contact p {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.65);
  margin-bottom: 14px;
  display: flex;
  gap: 12px;
  align-items: flex-start;
  line-height: 1.6;
}

.footer-contact i {
  color: var(--burgundy-soft);
  font-size: 13px;
  margin-top: 4px;
  width: 14px;
}

.footer-bottom {
  max-width: 1220px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 16px;
  flex-wrap: wrap;
  font-size: 12px;
  color: rgba(255, 255, 255, 0.45);
  letter-spacing: 0.02em;
}

.footer-social {
  display: flex;
  gap: 8px;
}

.footer-social a {
  width: 36px;
  height: 36px;
  border: 1px solid rgba(255, 255, 255, 0.12);
  color: rgba(255, 255, 255, 0.6);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  transition: all 0.2s;
}

.footer-social a:hover {
  background: var(--burgundy);
  border-color: var(--burgundy);
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
  background: var(--burgundy);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  text-decoration: none;
  transition: all 0.25s;
  box-shadow: 0 12px 28px -8px rgba(107, 31, 42, 0.5);
}

.float-btn:hover {
  background: var(--burgundy-2);
  transform: translateY(-3px);
}

/* ============ RESPONSIVE ============ */
@media (max-width: 1100px) {
  .hero-inner { grid-template-columns: 1fr; gap: 60px; }
  .hero-visual { max-width: 480px; margin: 0 auto; }
  .hero-bg-letter { font-size: 340px; }
  .quick-info-inner { grid-template-columns: repeat(2, 1fr); gap: 28px 40px; }
  .qi-item { border-right: none; padding: 0; }
  .practice-grid { grid-template-columns: repeat(2, 1fr); }
  .about-grid { grid-template-columns: 1fr; gap: 60px; }
  .about-visual { max-width: 480px; margin: 0 auto; }
  .lawyers-grid { grid-template-columns: repeat(2, 1fr); }
  .quotes-grid { grid-template-columns: 1fr; gap: 40px; }
  .quote-side { padding-top: 0; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
  .footer-grid > div:first-child { grid-column: span 2; }
}

@media (max-width: 768px) {
  .wrap, .wrap-sm, .topbar-inner, .nav-inner, .quick-info-inner { padding: 0 20px; }

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
  .nav-menu a { padding: 14px 0; font-size: 15px; }
  .nav-menu a::after { display: none; }
  .nav-cta { display: none; }
  .nav-toggle { display: block; z-index: 1001; }

  .hero { padding: 60px 0 80px; }
  .hero-bg-letter { display: none; }
  .hero h1 { font-size: 40px; }
  .hero-badge { left: 20px; padding: 18px 24px; min-width: 0; }
  .hero-badge-year { font-size: 32px; }

  .section { padding: 72px 0; }

  .practice-grid { grid-template-columns: 1fr; }
  .practice-card { padding: 32px 26px; }

  .lawyers-grid { grid-template-columns: 1fr; max-width: 320px; margin: 0 auto; }

  .case-row {
    grid-template-columns: 1fr;
    gap: 10px;
    padding: 24px 0;
  }

  .case-status { justify-self: start; }
  .case-category { font-size: 10px; }

  .footer-grid { grid-template-columns: 1fr; }
  .footer-grid > div:first-child { grid-column: span 1; }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 34px; }
  .section-head h2 { font-size: 28px; }
  .about-badge { position: static; margin-top: 24px; }
  .about-badge-value { font-size: 34px; }
  .cta h2 { font-size: 28px; }
  .brand-text { font-size: 16px; }
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <div class="topbar-inner">
    <div style="display:flex; gap:24px; flex-wrap:wrap;">
      <span class="topbar-item">
        <i class="fas fa-phone"></i> (021) 555-0150
      </span>
      <span class="topbar-item">
        <i class="fas fa-envelope"></i> office@hartono-rekan.co.id
      </span>
      <span class="topbar-item">
        <i class="fas fa-clock"></i> Senin – Jumat, 09.00 – 18.00
      </span>
    </div>
    <div class="topbar-right">
      <a href="#klien">Portal Klien</a>
      <a href="#kontak">Jadwalkan Konsultasi</a>
    </div>
  </div>
</div>

<!-- NAV -->
<nav class="nav" id="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <div class="brand-mark">H</div>
      <div class="brand-text">
        Hartono & Rekan
        <small>Firma Hukum · Est. 1989</small>
      </div>
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#praktik">Bidang Praktik</a></li>
      <li><a href="#tentang">Tentang Kami</a></li>
      <li><a href="#advokat">Advokat</a></li>
      <li><a href="#perkara">Perkara</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>

    <a href="#kontak" class="nav-cta">Konsultasi Awal</a>

    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="hero-bg-letter">H</div>

  <div class="wrap">
    <div class="hero-inner">

      <div class="hero-text reveal">
        <div class="hero-eyebrow">Firma Hukum · Jakarta · Est. 1989</div>

        <h1>
          Nasihat hukum yang <em>jelas, tegas,</em> dan bisa diandalkan.
        </h1>

        <p class="hero-lede">
          Kami melayani perusahaan dan individu dalam perkara korporat, perdata, ketenagakerjaan, dan sengketa bisnis. Selama lebih dari tiga dekade, kami memegang satu prinsip: klien harus paham setiap langkah yang kami ambil.
        </p>

        <div class="hero-actions">
          <a href="#kontak" class="btn btn-primary">
            Jadwalkan Konsultasi <i class="fas fa-arrow-right"></i>
          </a>
          <a href="#praktik" class="btn btn-outline">
            Bidang Praktik
          </a>
        </div>

        <div class="hero-trust">
          <div class="trust-item">
            <i class="fas fa-scale-balanced"></i>
            <span>Terdaftar di <strong>PERADI</strong></span>
          </div>
          <div class="trust-item">
            <i class="fas fa-award"></i>
            <span>Peringkat <strong>Tier 1</strong> Legal 500</span>
          </div>
          <div class="trust-item">
            <i class="fas fa-shield-halved"></i>
            <span><strong>Kerahasiaan</strong> terjamin</span>
          </div>
        </div>
      </div>

      <div class="hero-visual reveal">
        <div class="hero-photo">
          <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=800&q=80" alt="">
        </div>
        <div class="hero-badge">
          <div class="hero-badge-year">36</div>
          <div class="hero-badge-label">Tahun Melayani</div>
        </div>
      </div>

    </div>
  </div>
</header>

<!-- QUICK INFO -->
<div class="quick-info">
  <div class="quick-info-inner">

    <div class="qi-item reveal">
      <div class="qi-label">Kantor Pusat</div>
      <div class="qi-value">
        Jakarta Selatan
        <small>Jl. Sudirman Kav. 52</small>
      </div>
    </div>

    <div class="qi-item reveal">
      <div class="qi-label">Jam Operasional</div>
      <div class="qi-value">
        Senin – Jumat
        <small>09.00 – 18.00 WIB</small>
      </div>
    </div>

    <div class="qi-item reveal">
      <div class="qi-label">Jumlah Advokat</div>
      <div class="qi-value">
        22 Advokat
        <small>Termasuk 6 partner</small>
      </div>
    </div>

    <div class="qi-item reveal">
      <div class="qi-label">Bahasa Layanan</div>
      <div class="qi-value">
        Indonesia · Inggris
        <small>Mandarin tersedia</small>
      </div>
    </div>

  </div>
</div>

<!-- PRACTICE AREAS -->
<section class="section practice" id="praktik">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-eyebrow">Bidang Praktik</div>
      <h2>
        Kami menangani perkara <em>yang serius.</em>
      </h2>
      <p>Bidang praktik kami dibagi berdasarkan keahlian mendalam. Setiap perkara ditangani oleh partner yang benar-benar memahami industrinya.</p>
    </div>

    <div class="practice-grid">

      <div class="practice-card reveal">
        <div class="practice-num">— 01</div>
        <h3>Hukum Korporat & Komersial</h3>
        <p>Pendirian perusahaan, merger dan akuisisi, restrukturisasi, dan perjanjian komersial lintas negara.</p>
        <ul class="practice-list">
          <li>Merger & Akuisisi</li>
          <li>Due Diligence</li>
          <li>Perjanjian Bisnis</li>
          <li>Tata Kelola Perusahaan</li>
        </ul>
      </div>

      <div class="practice-card reveal">
        <div class="practice-num">— 02</div>
        <h3>Sengketa & Arbitrase</h3>
        <p>Mewakili klien dalam sengketa perdata, arbitrase BANI, dan penyelesaian sengketa bisnis di luar pengadilan.</p>
        <ul class="practice-list">
          <li>Arbitrase BANI & SIAC</li>
          <li>Sengketa Kontrak</li>
          <li>Mediasi Komersial</li>
          <li>Eksekusi Putusan</li>
        </ul>
      </div>

      <div class="practice-card reveal">
        <div class="practice-num">— 03</div>
        <h3>Ketenagakerjaan</h3>
        <p>Dari penyusunan perjanjian kerja sampai pendampingan di Pengadilan Hubungan Industrial.</p>
        <ul class="practice-list">
          <li>Perjanjian Kerja</li>
          <li>PHK & Pesangon</li>
          <li>Peraturan Perusahaan</li>
          <li>Perselisihan Industrial</li>
        </ul>
      </div>

      <div class="practice-card reveal">
        <div class="practice-num">— 04</div>
        <h3>Hukum Pertanahan & Properti</h3>
        <p>Transaksi properti, sengketa tanah, dan pengurusan sertifikat untuk perusahaan dan individu.</p>
        <ul class="practice-list">
          <li>Jual Beli Properti</li>
          <li>Sengketa Tanah</li>
          <li>Sertifikasi</li>
          <li>Perizinan Bangunan</li>
        </ul>
      </div>

      <div class="practice-card reveal">
        <div class="practice-num">— 05</div>
        <h3>Kekayaan Intelektual</h3>
        <p>Pendaftaran merek, paten, hak cipta, dan penanganan sengketa pelanggaran kekayaan intelektual.</p>
        <ul class="practice-list">
          <li>Pendaftaran Merek</li>
          <li>Paten & Hak Cipta</li>
          <li>Sengketa Merek</li>
          <li>Lisensi & Waralaba</li>
        </ul>
      </div>

      <div class="practice-card reveal">
        <div class="practice-num">— 06</div>
        <h3>Hukum Keluarga & Waris</h3>
        <p>Perkara perceraian, hak asuh anak, pembagian harta waris, dan perencanaan warisan.</p>
        <ul class="practice-list">
          <li>Perceraian & Hak Asuh</li>
          <li>Pembagian Waris</li>
          <li>Perjanjian Pranikah</li>
          <li>Wasiat & Hibah</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="section about" id="tentang">
  <div class="wrap">
    <div class="about-grid">

      <div class="about-visual reveal">
        <div class="about-photo">
          <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=800&q=80" alt="">
        </div>
        <div class="about-badge">
          <div class="about-badge-label">Sejak Berdiri</div>
          <div class="about-badge-value">
            1989
            <small>36 tahun praktik</small>
          </div>
        </div>
      </div>

      <div class="about-text reveal">
        <div class="sec-eyebrow">Tentang Kami</div>
        <h2>
          Firma kecil dengan <em>keahlian yang mendalam.</em>
        </h2>

        <p>
          Hartono & Rekan didirikan pada 1989 oleh advokat Hartono Wijaya, seorang lulusan Universitas Indonesia yang memulai kariernya sebagai notaris di Jakarta Pusat. Firma ini tumbuh dari satu ruang kecil di Jalan Sabang menjadi kantor modern di Sudirman, tapi tetap menjaga pendekatan personal ke setiap klien.
        </p>

        <p>
          Kami tidak mengejar jumlah perkara terbanyak. Yang kami kejar adalah kualitas penanganan dan hubungan jangka panjang dengan klien. Hampir 70% pekerjaan kami berasal dari klien yang sudah bersama kami lebih dari sepuluh tahun.
        </p>

        <p>
          Setiap advokat di firma ini diminta memahami bisnis kliennya, bukan hanya perkara hukumnya. Kami percaya nasihat hukum yang baik lahir dari pemahaman konteks, bukan hanya pasal dan ayat.
        </p>

        <div class="about-sign">
          <img src="https://i.pravatar.cc/150?img=68" alt="">
          <div>
            <div class="about-sign-name">Hartono Wijaya, S.H., M.H.</div>
            <div class="about-sign-role">Founding Partner</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- LAWYERS -->
<section class="section lawyers" id="advokat">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Tim Advokat</div>
      <h2>
        Advokat yang akan <em>mendampingi Anda.</em>
      </h2>
      <p>Setiap advokat kami memiliki spesialisasi mendalam dan pengalaman lebih dari sepuluh tahun di bidangnya.</p>
    </div>

    <div class="lawyers-grid">

      <div class="lawyer-card reveal">
        <div class="lawyer-photo">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80" alt="">
        </div>
        <h3>Hartono Wijaya</h3>
        <div class="lawyer-role">Founding Partner</div>
        <div class="lawyer-spec">
          Korporat & Merger-Akuisisi<br>
          Universitas Indonesia
        </div>
      </div>

      <div class="lawyer-card reveal">
        <div class="lawyer-photo">
          <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=600&q=80" alt="">
        </div>
        <h3>Ratna Sari Dewi</h3>
        <div class="lawyer-role">Managing Partner</div>
        <div class="lawyer-spec">
          Sengketa & Arbitrase<br>
          Universitas Gadjah Mada
        </div>
      </div>

      <div class="lawyer-card reveal">
        <div class="lawyer-photo">
          <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?w=600&q=80" alt="">
        </div>
        <h3>Budi Santoso</h3>
        <div class="lawyer-role">Senior Partner</div>
        <div class="lawyer-spec">
          Ketenagakerjaan<br>
          Universitas Padjadjaran
        </div>
      </div>

      <div class="lawyer-card reveal">
        <div class="lawyer-photo">
          <img src="https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?w=600&q=80" alt="">
        </div>
        <h3>Maya Anggraini</h3>
        <div class="lawyer-role">Partner</div>
        <div class="lawyer-spec">
          Kekayaan Intelektual<br>
          Universitas Airlangga
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CASES -->
<section class="section cases" id="perkara">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-eyebrow">Perkara Pilihan</div>
      <h2>
        Sebagian perkara <em>yang kami tangani.</em>
      </h2>
      <p>Kami hanya menampilkan perkara yang sudah mendapat izin dari klien untuk dipublikasikan.</p>
    </div>

    <div class="cases-list">

      <div class="case-row reveal">
        <div class="case-year">2024</div>
        <div>
          <div class="case-title">Akuisisi perusahaan manufaktur</div>
          <div class="case-sub">Pendampingan due diligence dan negosiasi untuk akuisisi senilai Rp 850 miliar</div>
        </div>
        <div class="case-category">Korporat</div>
        <div class="case-status">Selesai</div>
      </div>

      <div class="case-row reveal">
        <div class="case-year">2024</div>
        <div>
          <div class="case-title">Sengketa kontrak konstruksi</div>
          <div class="case-sub">Mewakili kontraktor dalam arbitrase BANI melawan pemilik proyek</div>
        </div>
        <div class="case-category">Arbitrase</div>
        <div class="case-status">Selesai</div>
      </div>

      <div class="case-row reveal">
        <div class="case-year">2023</div>
        <div>
          <div class="case-title">Restrukturisasi utang perusahaan tambang</div>
          <div class="case-sub">Negosiasi dengan 12 kreditur untuk restrukturisasi utang Rp 2,3 triliun</div>
        </div>
        <div class="case-category">Korporat</div>
        <div class="case-status">Selesai</div>
      </div>

      <div class="case-row reveal">
        <div class="case-year">2023</div>
        <div>
          <div class="case-title">Sengketa merek dagang internasional</div>
          <div class="case-sub">Pembelaan merek klien dari klaim pelanggaran oleh perusahaan asing</div>
        </div>
        <div class="case-category">KI</div>
        <div class="case-status">Selesai</div>
      </div>

      <div class="case-row reveal">
        <div class="case-year">2022</div>
        <div>
          <div class="case-title">PHK massal perusahaan tekstil</div>
          <div class="case-sub">Pendampingan 340 pekerja dalam perselisihan pesangon di PHI</div>
        </div>
        <div class="case-category">Ketenagakerjaan</div>
        <div class="case-status">Selesai</div>
      </div>

    </div>
  </div>
</section>

<!-- QUOTES -->
<section class="section quotes">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-eyebrow">Kata Klien</div>
      <h2>
        Apa yang mereka <em>katakan tentang kami.</em>
      </h2>
    </div>

    <div class="quotes-grid">

      <div class="quote-main reveal">
        <div class="quote-mark-lg">"</div>
        <p class="quote-main-text">
          Kami sudah bekerja dengan banyak firma hukum untuk urusan korporat. Yang membedakan Hartono & Rekan adalah kejelasan komunikasi. Setiap langkah dijelaskan, setiap risiko diungkap, dan setiap keputusan dibuat bersama.
        </p>
        <div class="quote-main-author">
          <img src="https://i.pravatar.cc/150?img=33" alt="">
          <div>
            <div class="quote-main-name">Hendra Wijaya</div>
            <div class="quote-main-role">Direktur Utama · Perusahaan Manufaktur</div>
          </div>
        </div>
      </div>

      <div class="quote-side">

        <div class="quote-side-item reveal">
          <p class="quote-side-text">
            "Tim ketenagakerjaan mereka sangat paham regulasi Indonesia. Kasus PHK kami selesai jauh lebih cepat dari perkiraan."
          </p>
          <div class="quote-side-name">
            <strong>Ratna Kusuma</strong> · HR Director
          </div>
        </div>

        <div class="quote-side-item reveal">
          <p class="quote-side-text">
            "Untuk sengketa merek, saya tidak akan pakai firma lain. Mereka sudah menangani tiga kasus kami dengan hasil yang konsisten."
          </p>
          <div class="quote-side-name">
            <strong>Bayu Setiawan</strong> · Pemilik Merek Fashion
          </div>
        </div>

        <div class="quote-side-item reveal">
          <p class="quote-side-text">
            "Saya klien individu, bukan perusahaan besar. Tapi perhatian yang saya dapat sama seperti klien korporat mereka."
          </p>
          <div class="quote-side-name">
            <strong>Siti Handayani</strong> · Klien Perkara Waris
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
      <div class="sec-eyebrow" style="justify-content:center;">Konsultasi Awal</div>
      <h2>
        Butuh nasihat hukum <em>yang jujur?</em>
      </h2>
      <p>
        Konsultasi awal kami tanpa biaya. Kami akan mendengar perkara Anda, menjelaskan opsi yang tersedia, dan memberi pendapat yang jujur, termasuk jika kami berpikir Anda tidak memerlukan advokat.
      </p>
      <div class="cta-actions">
        <a href="mailto:office@hartono-rekan.co.id" class="btn btn-white">
          <i class="fas fa-envelope"></i> Kirim Email
        </a>
        <a href="tel:0215550150" class="btn btn-ghost-light">
          <i class="fas fa-phone"></i> Telepon Kantor
        </a>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="wrap">
    <div class="footer-grid">

      <div>
        <div class="footer-brand">
          <div class="brand-mark">H</div>
          <div class="brand-text">
            Hartono & Rekan
            <small>Firma Hukum · Est. 1989</small>
          </div>
        </div>
        <p class="footer-desc">
          Firma hukum yang melayani perusahaan dan individu di Indonesia sejak 1989. Kami percaya nasihat hukum yang baik lahir dari pemahaman konteks klien.
        </p>
        <div class="footer-license">
          <strong>Izin Praktik:</strong><br>
          Terdaftar di PERADI<br>
          No. Reg. 89.012.345<br>
          Anggota IKADIN & AKHI
        </div>
      </div>

      <div class="footer-col">
        <h4>Praktik</h4>
        <ul>
          <li><a href="#">Korporat & Komersial</a></li>
          <li><a href="#">Sengketa & Arbitrase</a></li>
          <li><a href="#">Ketenagakerjaan</a></li>
          <li><a href="#">Pertanahan</a></li>
          <li><a href="#">Kekayaan Intelektual</a></li>
          <li><a href="#">Keluarga & Waris</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Firma</h4>
        <ul>
          <li><a href="#">Profil Firma</a></li>
          <li><a href="#">Tim Advokat</a></li>
          <li><a href="#">Karier</a></li>
          <li><a href="#">Publikasi</a></li>
          <li><a href="#">Berita</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
      </div>

      <div class="footer-col footer-contact">
        <h4>Kantor</h4>
        <p><i class="fas fa-location-dot"></i> Wisma Sudirman Lantai 22<br>Jl. Jend. Sudirman Kav. 52<br>Jakarta Selatan 12190</p>
        <p><i class="fas fa-phone"></i> (021) 555-0150</p>
        <p><i class="fas fa-envelope"></i> office@hartono-rekan.co.id</p>
      </div>

    </div>

    <div class="footer-bottom">
      <div>© 2025 Hartono & Rekan. Seluruh hak cipta dilindungi.</div>
      <div class="footer-social">
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- FLOAT -->
<div class="float-group">
  <a href="mailto:office@hartono-rekan.co.id" class="float-btn" aria-label="Email">
    <i class="fas fa-envelope"></i>
  </a>
</div>

<script>
const nav = document.getElementById('nav');
window.addEventListener('scroll', () => {
  nav.classList.toggle('scrolled', window.scrollY > 30);
});

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

const revealObs = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('on');
      revealObs.unobserve(entry.target);
    }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));

document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', function(e) {
    const id = this.getAttribute('href');
    if (id === '#') return;
    const target = document.querySelector(id);
    if (target) {
      e.preventDefault();
      const top = target.getBoundingClientRect().top + window.scrollY - 90;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  });
});
</script>

@endverbatim
@include('demo.company-profile.partials.demo-bar')
</body>
</html>