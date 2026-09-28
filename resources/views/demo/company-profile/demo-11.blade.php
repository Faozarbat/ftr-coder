@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Garasi Merah — Dealer & Bengkel Mobil Terpercaya</title>
<meta name="description" content="Garasi Merah — dealer mobil baru dan bekas berkualitas, bengkel resmi, dan layanan perawatan kendaraan di Jakarta.">
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700;800;900&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --bg: #0d0d0d;
  --bg-2: #161616;
  --bg-3: #1f1f1f;
  --bg-4: #2a2a2a;
  --line: #262626;
  --line-2: #383838;
  --ink: #f5f5f5;
  --ink-2: #b8b8b8;
  --ink-3: #787878;
  --ink-4: #4a4a4a;
  --red: #d91e18;
  --red-2: #ff3028;
  --red-soft: #3a1310;
  --paper: #ffffff;
  --yellow: #f5b800;
  --green: #2e9950;
  --sans: 'Archivo', -apple-system, sans-serif;
  --mono: 'IBM Plex Mono', monospace;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--sans);
  background: var(--bg);
  color: var(--ink);
  font-size: 16px;
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

::selection { background: var(--red); color: #fff; }
a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }
button { font-family: inherit; cursor: pointer; }

/* ============ UTIL ============ */
.wrap {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 32px;
}

.mono-tag {
  font-family: var(--mono);
  font-size: 11px;
  font-weight: 500;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--red-2);
}

/* ============ TOP BAR ============ */
.topbar {
  background: var(--red);
  color: #fff;
  padding: 10px 0;
  font-size: 13px;
  font-weight: 500;
}

.topbar-inner {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 32px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 20px;
  flex-wrap: wrap;
}

.topbar-item {
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.topbar-item i { font-size: 12px; }

.topbar-hotline {
  padding: 3px 12px;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 4px;
  font-family: var(--mono);
  font-size: 12px;
  letter-spacing: 0.05em;
}

/* ============ NAV ============ */
.nav {
  background: var(--bg);
  border-bottom: 1px solid var(--line);
  position: sticky;
  top: 0;
  z-index: 100;
  transition: all 0.3s;
  padding: 18px 0;
}

.nav.scrolled {
  padding: 12px 0;
  background: rgba(13, 13, 13, 0.96);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}

.nav-inner {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 32px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 32px;
}

.brand {
  display: flex;
  align-items: center;
  gap: 12px;
  flex-shrink: 0;
}

.brand-mark {
  width: 44px;
  height: 44px;
  background: var(--red);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 22px;
  clip-path: polygon(15% 0, 100% 0, 100% 85%, 85% 100%, 0 100%, 0 15%);
}

.brand-text {
  font-size: 19px;
  font-weight: 900;
  color: var(--ink);
  letter-spacing: 0.02em;
  line-height: 1;
  text-transform: uppercase;
}

.brand-text small {
  display: block;
  font-family: var(--mono);
  font-size: 10px;
  font-weight: 500;
  color: var(--red-2);
  letter-spacing: 0.2em;
  margin-top: 4px;
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
  font-weight: 700;
  color: var(--ink-2);
  padding: 10px 18px;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  transition: color 0.15s;
  position: relative;
}

.nav-menu a:hover {
  color: var(--red-2);
}

.nav-menu a::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 2px;
  background: var(--red);
  transition: all 0.25s;
  transform: translateX(-50%);
}

.nav-menu a:hover::after { width: 20px; }

.nav-cta {
  padding: 12px 24px;
  background: var(--red);
  color: #fff;
  font-size: 13px;
  font-weight: 800;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  clip-path: polygon(8px 0, 100% 0, 100% calc(100% - 8px), calc(100% - 8px) 100%, 0 100%, 0 8px);
  transition: background 0.2s;
  flex-shrink: 0;
}

.nav-cta:hover { background: var(--red-2); }

.nav-toggle {
  display: none;
  background: none;
  border: none;
  color: var(--ink);
  font-size: 22px;
  padding: 8px;
}

/* ============ HERO ============ */
.hero {
  padding: 80px 0 100px;
  position: relative;
  overflow: hidden;
}

.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(var(--line) 1px, transparent 1px),
    linear-gradient(90deg, var(--line) 1px, transparent 1px);
  background-size: 80px 80px;
  opacity: 0.25;
  mask-image: radial-gradient(ellipse 70% 60% at 50% 50%, #000 20%, transparent 75%);
  -webkit-mask-image: radial-gradient(ellipse 70% 60% at 50% 50%, #000 20%, transparent 75%);
  pointer-events: none;
}

.hero-inner {
  position: relative;
  display: grid;
  grid-template-columns: 1.05fr 1fr;
  gap: 70px;
  align-items: center;
}

.hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 7px 16px;
  background: var(--red-soft);
  border: 1px solid var(--red);
  color: var(--red-2);
  font-family: var(--mono);
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  margin-bottom: 28px;
}

.hero-tag .dot {
  width: 6px;
  height: 6px;
  background: var(--red-2);
  border-radius: 50%;
  animation: blink 1.4s ease infinite;
}

@keyframes blink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.3; }
}

.hero h1 {
  font-size: clamp(42px, 6.5vw, 88px);
  font-weight: 900;
  line-height: 0.94;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 28px;
  text-transform: uppercase;
}

.hero h1 em {
  font-style: normal;
  color: var(--red-2);
  position: relative;
  display: inline-block;
}

.hero h1 em::after {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  bottom: 8px;
  height: 12px;
  background: var(--red-soft);
  z-index: -1;
}

.hero-lede {
  font-size: 17px;
  color: var(--ink-2);
  max-width: 520px;
  line-height: 1.75;
  margin-bottom: 40px;
}

.hero-actions {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
  margin-bottom: 44px;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 16px 30px;
  font-size: 13px;
  font-weight: 800;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  border: none;
  transition: all 0.2s;
  cursor: pointer;
  font-family: inherit;
  clip-path: polygon(10px 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%, 0 10px);
}

.btn-red {
  background: var(--red);
  color: #fff;
}

.btn-red:hover {
  background: var(--red-2);
  transform: translateY(-2px);
}

.btn-dark {
  background: var(--bg-3);
  color: var(--ink);
  border: 1px solid var(--line-2);
}

.btn-dark:hover {
  background: var(--bg-4);
  border-color: var(--ink-3);
}

.hero-stats {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
  border-top: 1px solid var(--line);
  padding-top: 32px;
}

.hero-stat {
  border-right: 1px solid var(--line);
  padding: 0 24px;
}

.hero-stat:first-child { padding-left: 0; }
.hero-stat:last-child { border-right: none; }

.hero-stat .num {
  font-family: var(--mono);
  font-size: 36px;
  font-weight: 600;
  color: var(--ink);
  line-height: 1;
  letter-spacing: -0.02em;
  margin-bottom: 10px;
  display: flex;
  align-items: baseline;
  gap: 3px;
}

.hero-stat .num span { color: var(--red-2); font-size: 22px; }

.hero-stat .lbl {
  font-size: 12px;
  color: var(--ink-3);
  letter-spacing: 0.05em;
  line-height: 1.5;
  text-transform: uppercase;
  font-weight: 500;
}

/* Hero visual */
.hero-visual {
  position: relative;
}

.hero-photo {
  aspect-ratio: 4 / 3;
  overflow: hidden;
  background: var(--bg-3);
  position: relative;
  border: 1px solid var(--line);
}

.hero-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 1s;
}

.hero-photo:hover img { transform: scale(1.03); }

.hero-photo-badge {
  position: absolute;
  top: 20px;
  left: 20px;
  padding: 8px 14px;
  background: var(--red);
  color: #fff;
  font-family: var(--mono);
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.15em;
  text-transform: uppercase;
}

.hero-specs {
  position: absolute;
  bottom: -24px;
  left: 24px;
  right: 24px;
  background: var(--bg-2);
  border: 1px solid var(--line-2);
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
}

.spec-item {
  padding: 18px 16px;
  border-right: 1px solid var(--line);
  text-align: center;
}

.spec-item:last-child { border-right: none; }

.spec-item .val {
  font-family: var(--mono);
  font-size: 15px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.01em;
  margin-bottom: 4px;
}

.spec-item .key {
  font-size: 10px;
  font-weight: 600;
  color: var(--ink-3);
  letter-spacing: 0.14em;
  text-transform: uppercase;
}

/* ============ MENU STRIP ============ */
.menu-strip {
  background: var(--bg-2);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  padding: 26px 0;
  overflow: hidden;
}

.menu-strip-inner {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 32px;
  display: flex;
  align-items: center;
  gap: 40px;
  flex-wrap: wrap;
  justify-content: space-between;
}

.menu-item-strip {
  display: flex;
  align-items: center;
  gap: 14px;
  font-size: 14px;
  font-weight: 600;
  color: var(--ink-2);
  letter-spacing: 0.04em;
  text-transform: uppercase;
  transition: color 0.2s;
}

.menu-item-strip:hover { color: var(--ink); }

.menu-item-strip i {
  color: var(--red-2);
  font-size: 18px;
}

/* ============ SECTION ============ */
.section {
  padding: 100px 0;
  border-bottom: 1px solid var(--line);
}

.section-head {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  margin-bottom: 56px;
  gap: 40px;
  flex-wrap: wrap;
}

.section-head-text {
  max-width: 640px;
}

.section-head h2 {
  font-size: clamp(30px, 4vw, 46px);
  font-weight: 800;
  line-height: 1.05;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-top: 12px;
  margin-bottom: 16px;
  text-transform: uppercase;
}

.section-head h2 em {
  font-style: normal;
  color: var(--red-2);
}

.section-head p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.7;
}

.section-link {
  font-family: var(--mono);
  font-size: 12px;
  font-weight: 600;
  color: var(--red-2);
  letter-spacing: 0.15em;
  text-transform: uppercase;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  transition: gap 0.25s;
  padding-bottom: 4px;
  border-bottom: 1px solid var(--red);
}

.section-link:hover { gap: 16px; }

/* ============ INVENTORY ============ */
.inventory-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.car-card {
  background: var(--bg-2);
  border: 1px solid var(--line);
  transition: all 0.3s;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.car-card:hover {
  border-color: var(--red);
  transform: translateY(-4px);
}

.car-img {
  aspect-ratio: 4 / 3;
  overflow: hidden;
  position: relative;
  background: var(--bg-3);
}

.car-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.7s;
}

.car-card:hover .car-img img { transform: scale(1.05); }

.car-badge {
  position: absolute;
  top: 14px;
  left: 14px;
  padding: 5px 10px;
  background: var(--bg);
  color: var(--red-2);
  font-family: var(--mono);
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  border: 1px solid var(--red);
}

.car-badge.new {
  background: var(--red);
  color: #fff;
  border-color: var(--red);
}

.car-year {
  position: absolute;
  top: 14px;
  right: 14px;
  padding: 5px 10px;
  background: rgba(13, 13, 13, 0.85);
  color: var(--ink-2);
  font-family: var(--mono);
  font-size: 11px;
  font-weight: 500;
  backdrop-filter: blur(8px);
  letter-spacing: 0.05em;
}

.car-body {
  padding: 22px 22px 24px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.car-brand-name {
  font-family: var(--mono);
  font-size: 11px;
  font-weight: 500;
  color: var(--ink-3);
  letter-spacing: 0.18em;
  text-transform: uppercase;
  margin-bottom: 8px;
}

.car-body h3 {
  font-size: 20px;
  font-weight: 700;
  color: var(--ink);
  letter-spacing: -0.01em;
  line-height: 1.2;
  margin-bottom: 16px;
  text-transform: uppercase;
}

.car-specs {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px 16px;
  padding: 16px 0;
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  margin-bottom: 18px;
}

.car-spec {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 12px;
  color: var(--ink-2);
  font-family: var(--mono);
  letter-spacing: 0.02em;
}

.car-spec i {
  color: var(--red-2);
  font-size: 12px;
  width: 14px;
}

.car-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 4px;
  gap: 12px;
}

.car-price {
  font-family: var(--mono);
  font-size: 18px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.01em;
}

.car-price small {
  display: block;
  font-size: 10px;
  color: var(--ink-3);
  font-weight: 500;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  margin-top: 3px;
}

.car-btn {
  padding: 9px 16px;
  background: transparent;
  color: var(--red-2);
  border: 1px solid var(--red);
  font-family: var(--mono);
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  transition: all 0.2s;
  white-space: nowrap;
}

.car-card:hover .car-btn {
  background: var(--red);
  color: #fff;
}

/* ============ LAYANAN ============ */
.services {
  background: var(--bg-2);
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  border: 1px solid var(--line);
}

.service-block {
  padding: 40px 32px;
  border-right: 1px solid var(--line);
  transition: background 0.2s;
  position: relative;
  display: flex;
  flex-direction: column;
}

.service-block:last-child { border-right: none; }

.service-block:hover { background: var(--bg-3); }

.service-icon-box {
  width: 56px;
  height: 56px;
  background: var(--red-soft);
  color: var(--red-2);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  margin-bottom: 24px;
  clip-path: polygon(10% 0, 100% 0, 100% 90%, 90% 100%, 0 100%, 0 10%);
  transition: all 0.25s;
}

.service-block:hover .service-icon-box {
  background: var(--red);
  color: #fff;
}

.service-block h3 {
  font-size: 18px;
  font-weight: 800;
  color: var(--ink);
  margin-bottom: 12px;
  letter-spacing: -0.005em;
  text-transform: uppercase;
}

.service-block p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.65;
  margin-bottom: 20px;
  flex: 1;
}

.service-list {
  list-style: none;
  padding-top: 16px;
  border-top: 1px solid var(--line);
  display: grid;
  gap: 8px;
}

.service-list li {
  font-family: var(--mono);
  font-size: 12px;
  color: var(--ink-3);
  display: flex;
  align-items: center;
  gap: 8px;
  letter-spacing: 0.02em;
}

.service-list li::before {
  content: '—';
  color: var(--red-2);
}

/* ============ KEUNGGULAN ============ */
.advantages {
  padding: 100px 0;
  background: var(--bg);
  border-bottom: 1px solid var(--line);
}

.advantages-inner {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 80px;
  align-items: center;
}

.adv-photo {
  aspect-ratio: 4 / 5;
  overflow: hidden;
  background: var(--bg-3);
  position: relative;
  border: 1px solid var(--line);
}

.adv-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.adv-badge {
  position: absolute;
  bottom: 30px;
  left: -20px;
  background: var(--red);
  color: #fff;
  padding: 22px 28px;
  font-family: var(--mono);
  clip-path: polygon(12px 0, 100% 0, 100% calc(100% - 12px), calc(100% - 12px) 100%, 0 100%, 0 12px);
}

.adv-badge .num {
  font-size: 40px;
  font-weight: 700;
  line-height: 1;
  letter-spacing: -0.02em;
  margin-bottom: 6px;
}

.adv-badge .lbl {
  font-size: 11px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  opacity: 0.9;
}

.adv-content h2 {
  font-size: clamp(30px, 3.8vw, 44px);
  font-weight: 800;
  line-height: 1.05;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-top: 12px;
  margin-bottom: 24px;
  text-transform: uppercase;
}

.adv-content h2 em {
  font-style: normal;
  color: var(--red-2);
}

.adv-content > p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.8;
  margin-bottom: 36px;
}

.adv-list {
  display: grid;
  gap: 0;
  border-top: 1px solid var(--line);
}

.adv-item {
  padding: 24px 0;
  border-bottom: 1px solid var(--line);
  display: grid;
  grid-template-columns: 50px 1fr;
  gap: 20px;
  align-items: flex-start;
}

.adv-item-num {
  font-family: var(--mono);
  font-size: 14px;
  font-weight: 600;
  color: var(--red-2);
  letter-spacing: 0.05em;
  padding-top: 4px;
}

.adv-item h4 {
  font-size: 17px;
  font-weight: 700;
  color: var(--ink);
  margin-bottom: 6px;
  letter-spacing: -0.005em;
  text-transform: uppercase;
}

.adv-item p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.65;
  margin: 0;
}

/* ============ PROSES ============ */
.process-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  border: 1px solid var(--line);
}

.process-step {
  padding: 40px 28px;
  border-right: 1px solid var(--line);
  position: relative;
}

.process-step:last-child { border-right: none; }

.process-num {
  font-family: var(--mono);
  font-size: 48px;
  font-weight: 600;
  color: var(--bg-4);
  line-height: 1;
  letter-spacing: -0.03em;
  margin-bottom: 20px;
}

.process-step h4 {
  font-size: 16px;
  font-weight: 800;
  color: var(--ink);
  letter-spacing: 0.02em;
  text-transform: uppercase;
  margin-bottom: 10px;
}

.process-step p {
  font-size: 13px;
  color: var(--ink-2);
  line-height: 1.65;
}

/* ============ TESTIMONI ============ */
.testi {
  background: var(--bg-2);
}

.testi-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.testi-card {
  padding: 32px 28px;
  background: var(--bg);
  border: 1px solid var(--line);
  transition: all 0.3s;
  display: flex;
  flex-direction: column;
  position: relative;
}

.testi-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 60px;
  height: 3px;
  background: var(--red);
}

.testi-card:hover {
  border-color: var(--red);
  transform: translateY(-4px);
}

.testi-stars {
  display: flex;
  gap: 3px;
  color: var(--yellow);
  font-size: 13px;
  margin-bottom: 18px;
  padding-top: 8px;
}

.testi-text {
  font-size: 15px;
  color: var(--ink-2);
  line-height: 1.75;
  margin-bottom: 24px;
  flex: 1;
}

.testi-author {
  display: flex;
  align-items: center;
  gap: 14px;
  padding-top: 20px;
  border-top: 1px solid var(--line);
}

.testi-author img {
  width: 46px;
  height: 46px;
  border-radius: 50%;
  object-fit: cover;
  filter: grayscale(100%);
  border: 2px solid var(--line-2);
}

.testi-author .name {
  font-size: 14px;
  font-weight: 700;
  color: var(--ink);
  letter-spacing: -0.005em;
}

.testi-author .role {
  font-family: var(--mono);
  font-size: 11px;
  color: var(--ink-3);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-top: 2px;
}

/* ============ CTA ============ */
.cta {
  padding: 100px 0;
  background: var(--red);
  color: #fff;
  position: relative;
  overflow: hidden;
}

.cta::before {
  content: '';
  position: absolute;
  top: -50px;
  right: -50px;
  width: 400px;
  height: 400px;
  background: rgba(0, 0, 0, 0.1);
  border-radius: 50%;
}

.cta::after {
  content: '';
  position: absolute;
  bottom: -100px;
  left: -100px;
  width: 350px;
  height: 350px;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 50%;
}

.cta-inner {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: 60px;
  align-items: center;
}

.cta h2 {
  font-size: clamp(32px, 4.5vw, 52px);
  font-weight: 900;
  line-height: 1.02;
  letter-spacing: -0.025em;
  text-transform: uppercase;
  margin-bottom: 20px;
}

.cta h2 em {
  font-style: normal;
  color: #fff;
  background: rgba(0, 0, 0, 0.25);
  padding: 0 12px;
}

.cta p {
  font-size: 17px;
  line-height: 1.7;
  max-width: 520px;
  color: rgba(255, 255, 255, 0.9);
}

.cta-actions {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.btn-white {
  background: #fff;
  color: var(--red);
}

.btn-white:hover {
  background: var(--ink);
  color: #fff;
}

.btn-outline-light {
  background: transparent;
  color: #fff;
  border: 2px solid #fff;
  padding: 14px 28px;
}

.btn-outline-light:hover {
  background: #fff;
  color: var(--red);
}

/* ============ FOOTER ============ */
.footer {
  background: var(--bg);
  padding: 72px 0 28px;
  border-top: 1px solid var(--line);
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.3fr;
  gap: 56px;
  padding-bottom: 48px;
  border-bottom: 1px solid var(--line);
  margin-bottom: 28px;
}

.footer-brand {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 20px;
}

.footer-desc {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.75;
  max-width: 340px;
  margin-bottom: 22px;
}

.footer-hours {
  padding: 16px 18px;
  background: var(--bg-2);
  border-left: 3px solid var(--red);
  font-family: var(--mono);
  font-size: 12px;
  color: var(--ink-2);
  line-height: 1.8;
}

.footer-hours strong {
  color: var(--ink);
  letter-spacing: 0.08em;
  font-weight: 600;
}

.footer-col h4 {
  font-family: var(--mono);
  font-size: 11px;
  font-weight: 600;
  color: var(--red-2);
  letter-spacing: 0.22em;
  text-transform: uppercase;
  margin-bottom: 22px;
}

.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 12px; }

.footer-col a {
  font-size: 14px;
  color: var(--ink-2);
  transition: color 0.2s;
}

.footer-col a:hover { color: var(--red-2); }

.footer-contact p {
  font-size: 14px;
  color: var(--ink-2);
  margin-bottom: 14px;
  display: flex;
  gap: 12px;
  align-items: flex-start;
  line-height: 1.55;
}

.footer-contact i {
  color: var(--red-2);
  font-size: 13px;
  margin-top: 4px;
  width: 14px;
}

.footer-bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 16px;
  flex-wrap: wrap;
  font-family: var(--mono);
  font-size: 12px;
  color: var(--ink-3);
  letter-spacing: 0.05em;
}

.footer-social {
  display: flex;
  gap: 8px;
}

.footer-social a {
  width: 38px;
  height: 38px;
  background: var(--bg-2);
  border: 1px solid var(--line);
  color: var(--ink-2);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  transition: all 0.2s;
  clip-path: polygon(20% 0, 100% 0, 100% 80%, 80% 100%, 0 100%, 0 20%);
}

.footer-social a:hover {
  background: var(--red);
  border-color: var(--red);
  color: #fff;
}

/* ============ REVEAL ============ */
.reveal {
  opacity: 0;
  transform: translateY(28px);
  transition: opacity 0.8s ease, transform 0.8s ease;
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
  background: var(--red);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  border: none;
  cursor: pointer;
  transition: all 0.25s;
  clip-path: polygon(15% 0, 100% 0, 100% 85%, 85% 100%, 0 100%, 0 15%);
  text-decoration: none;
}

.float-btn:hover {
  background: var(--red-2);
  transform: translateY(-3px);
}

/* ============ RESPONSIVE ============ */
@media (max-width: 1100px) {
  .hero-inner { grid-template-columns: 1fr; gap: 60px; }
  .hero-visual { max-width: 560px; margin: 0 auto; padding-bottom: 40px; }
  .inventory-grid { grid-template-columns: repeat(2, 1fr); }
  .services-grid { grid-template-columns: repeat(2, 1fr); }
  .service-block:nth-child(2) { border-right: none; }
  .service-block:nth-child(1),
  .service-block:nth-child(2) { border-bottom: 1px solid var(--line); }
  .advantages-inner { grid-template-columns: 1fr; gap: 60px; }
  .adv-photo { max-width: 520px; margin: 0 auto; }
  .process-grid { grid-template-columns: repeat(2, 1fr); }
  .process-step:nth-child(2) { border-right: none; }
  .process-step:nth-child(1),
  .process-step:nth-child(2) { border-bottom: 1px solid var(--line); }
  .testi-grid { grid-template-columns: 1fr; }
  .cta-inner { grid-template-columns: 1fr; gap: 40px; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
  .footer-grid > div:first-child { grid-column: span 2; }
}

@media (max-width: 768px) {
  .wrap, .topbar-inner, .nav-inner, .menu-strip-inner { padding: 0 20px; }

  .nav-menu {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    width: 300px;
    height: 100vh;
    background: var(--bg-2);
    flex-direction: column;
    padding: 100px 32px 40px;
    gap: 6px;
    border-left: 1px solid var(--line);
    transition: right 0.35s;
    z-index: 99;
    align-items: stretch;
    justify-content: flex-start;
    box-shadow: -20px 0 60px rgba(0, 0, 0, 0.4);
  }

  .nav-menu.open { display: flex; }
  .nav-menu a { padding: 16px 18px; font-size: 14px; border-radius: 6px; }
  .nav-menu a:hover { background: var(--bg-3); }
  .nav-menu a::after { display: none; }
  .nav-cta { display: none; }
  .nav-toggle { display: block; z-index: 1001; }

  .topbar-item { font-size: 12px; }

  .hero { padding: 60px 0 80px; }
  .hero h1 { font-size: 44px; }
  .hero-specs { position: static; margin-top: 20px; left: 0; right: 0; }

  .section { padding: 72px 0; }

  .inventory-grid { grid-template-columns: 1fr; }
  .services-grid { grid-template-columns: 1fr; }
  .service-block { border-right: none !important; border-bottom: 1px solid var(--line); }
  .service-block:last-child { border-bottom: none; }
  .process-grid { grid-template-columns: 1fr; }
  .process-step { border-right: none !important; border-bottom: 1px solid var(--line); }
  .process-step:last-child { border-bottom: none; }

  .section-head { flex-direction: column; align-items: flex-start; }

  .adv-badge { left: 0; padding: 18px 22px; }
  .adv-badge .num { font-size: 32px; }

  .footer-grid { grid-template-columns: 1fr; }
  .footer-grid > div:first-child { grid-column: span 1; }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 36px; }
  .section-head h2 { font-size: 28px; }
  .hero-stats { grid-template-columns: 1fr; }
  .hero-stat {
    padding: 20px 0;
    border-right: none;
    border-bottom: 1px solid var(--line);
  }
  .hero-stat:last-child { border-bottom: none; }
  .brand-text { font-size: 16px; }
  .brand-mark { width: 38px; height: 38px; font-size: 18px; }
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <div class="topbar-inner">
    <div style="display:flex; gap:24px; flex-wrap:wrap;">
      <span class="topbar-item">
        <i class="fas fa-phone-volume"></i>
        Hotline: <span class="topbar-hotline">021-5550-111</span>
      </span>
      <span class="topbar-item">
        <i class="fas fa-location-dot"></i>
        Jl. MT Haryono 45, Jakarta Timur
      </span>
    </div>
    <span class="topbar-item">
      <i class="fas fa-truck-fast"></i>
      Layanan darurat 24 jam untuk mogok di jalan
    </span>
  </div>
</div>

<!-- NAV -->
<nav class="nav" id="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <div class="brand-mark"><i class="fas fa-car-side"></i></div>
      <div class="brand-text">
        Garasi Merah
        <small>Est. 2008</small>
      </div>
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#inventory">Stok Mobil</a></li>
      <li><a href="#layanan">Layanan</a></li>
      <li><a href="#keunggulan">Kenapa Kami</a></li>
      <li><a href="#proses">Proses</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>

    <a href="#kontak" class="nav-cta">
      Booking Service
    </a>

    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="wrap">
    <div class="hero-inner">

      <div class="hero-text reveal">
        <div class="hero-tag">
          <span class="dot"></span>
          Showroom Buka Setiap Hari
        </div>

        <h1>
          Mobil <em>berkualitas,</em> harga <em>jujur.</em>
        </h1>

        <p class="hero-lede">
          Dealer mobil baru dan bekas terpercaya di Jakarta sejak 2008. Setiap unit kami melalui 175 titik inspeksi sebelum dijual. Tidak ada kejutan, tidak ada cerita yang ditutupi.
        </p>

        <div class="hero-actions">
          <a href="#inventory" class="btn btn-red">
            Lihat Stok <i class="fas fa-arrow-right"></i>
          </a>
          <a href="#layanan" class="btn btn-dark">
            Booking Service
          </a>
        </div>

        <div class="hero-stats">
          <div class="hero-stat">
            <div class="num"><span class="counter" data-target="4200">0</span><span>+</span></div>
            <div class="lbl">Mobil terjual<br>sejak 2008</div>
          </div>
          <div class="hero-stat">
            <div class="num"><span class="counter" data-target="17">0</span></div>
            <div class="lbl">Tahun di industri<br>otomotif</div>
          </div>
          <div class="hero-stat">
            <div class="num"><span class="counter" data-target="98">0</span><span>%</span></div>
            <div class="lbl">Pelanggan yang<br>kembali lagi</div>
          </div>
        </div>
      </div>

      <div class="hero-visual reveal">
        <div class="hero-photo">
          <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=1200&q=80" alt="">
          <div class="hero-photo-badge">Featured Unit</div>
        </div>

        <div class="hero-specs">
          <div class="spec-item">
            <div class="val">2023</div>
            <div class="key">Tahun</div>
          </div>
          <div class="spec-item">
            <div class="val">12K</div>
            <div class="key">KM</div>
          </div>
          <div class="spec-item">
            <div class="val">Bensin</div>
            <div class="key">Bahan Bakar</div>
          </div>
          <div class="spec-item">
            <div class="val">Auto</div>
            <div class="key">Transmisi</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</header>

<!-- MENU STRIP -->
<div class="menu-strip">
  <div class="menu-strip-inner">
    <div class="menu-item-strip">
      <i class="fas fa-car"></i>
      Jual Beli Mobil
    </div>
    <div class="menu-item-strip">
      <i class="fas fa-wrench"></i>
      Service & Perawatan
    </div>
    <div class="menu-item-strip">
      <i class="fas fa-file-signature"></i>
      Tukar Tambah
    </div>
    <div class="menu-item-strip">
      <i class="fas fa-credit-card"></i>
      Kredit & Leasing
    </div>
    <div class="menu-item-strip">
      <i class="fas fa-shield-halved"></i>
      Asuransi Kendaraan
    </div>
  </div>
</div>

<!-- INVENTORY -->
<section class="section" id="inventory">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="section-head-text">
        <div class="mono-tag">— Stok Terbaru</div>
        <h2>
          Unit <em>pilihan</em> minggu ini.
        </h2>
        <p>Setiap unit sudah melalui inspeksi 175 titik. Kami tampilkan apa adanya — termasuk goresan kecil, jika ada.</p>
      </div>
      <a href="#" class="section-link">
        Lihat Semua Stok <i class="fas fa-arrow-right"></i>
      </a>
    </div>

    <div class="inventory-grid">

      <div class="car-card reveal">
        <div class="car-img">
          <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=800&q=80" alt="">
          <div class="car-badge">Bekas</div>
          <div class="car-year">2021</div>
        </div>
        <div class="car-body">
          <div class="car-brand-name">Toyota</div>
          <h3>Alphard 2.5 G</h3>
          <div class="car-specs">
            <div class="car-spec"><i class="fas fa-gauge"></i> 42.000 KM</div>
            <div class="car-spec"><i class="fas fa-gas-pump"></i> Bensin</div>
            <div class="car-spec"><i class="fas fa-cog"></i> Otomatis</div>
            <div class="car-spec"><i class="fas fa-palette"></i> Putih</div>
          </div>
          <div class="car-footer">
            <div class="car-price">
              Rp 785 jt
              <small>Cash / Kredit</small>
            </div>
            <button class="car-btn">Detail</button>
          </div>
        </div>
      </div>

      <div class="car-card reveal">
        <div class="car-img">
          <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=800&q=80" alt="">
          <div class="car-badge new">Baru</div>
          <div class="car-year">2024</div>
        </div>
        <div class="car-body">
          <div class="car-brand-name">Honda</div>
          <h3>CR-V 1.5 Turbo</h3>
          <div class="car-specs">
            <div class="car-spec"><i class="fas fa-gauge"></i> 0 KM</div>
            <div class="car-spec"><i class="fas fa-gas-pump"></i> Bensin</div>
            <div class="car-spec"><i class="fas fa-cog"></i> Otomatis</div>
            <div class="car-spec"><i class="fas fa-palette"></i> Hitam</div>
          </div>
          <div class="car-footer">
            <div class="car-price">
              Rp 620 jt
              <small>OTR Jakarta</small>
            </div>
            <button class="car-btn">Detail</button>
          </div>
        </div>
      </div>

      <div class="car-card reveal">
        <div class="car-img">
          <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?w=800&q=80" alt="">
          <div class="car-badge">Bekas</div>
          <div class="car-year">2022</div>
        </div>
        <div class="car-body">
          <div class="car-brand-name">Mitsubishi</div>
          <h3>Pajero Sport Dakar</h3>
          <div class="car-specs">
            <div class="car-spec"><i class="fas fa-gauge"></i> 28.000 KM</div>
            <div class="car-spec"><i class="fas fa-gas-pump"></i> Diesel</div>
            <div class="car-spec"><i class="fas fa-cog"></i> Otomatis</div>
            <div class="car-spec"><i class="fas fa-palette"></i> Silver</div>
          </div>
          <div class="car-footer">
            <div class="car-price">
              Rp 545 jt
              <small>Cash / Kredit</small>
            </div>
            <button class="car-btn">Detail</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- LAYANAN -->
<section class="section services" id="layanan">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="section-head-text">
        <div class="mono-tag">— Layanan Kami</div>
        <h2>
          Bukan cuma jual <em>mobil.</em>
        </h2>
        <p>Kami juga bantu Anda merawat, memperbaiki, dan mengurus semua kebutuhan kendaraan — dari servis rutin sampai perpanjangan STNK.</p>
      </div>
    </div>

    <div class="services-grid">

      <div class="service-block reveal">
        <div class="service-icon-box"><i class="fas fa-wrench"></i></div>
        <h3>Service Rutin</h3>
        <p>Servis berkala sesuai kilometer dengan mekanik bersertifikasi dan spare part original.</p>
        <ul class="service-list">
          <li>Ganti oli & filter</li>
          <li>Tune up mesin</li>
          <li>Cek rem & ban</li>
        </ul>
      </div>

      <div class="service-block reveal">
        <div class="service-icon-box"><i class="fas fa-car-battery"></i></div>
        <h3>Perbaikan Berat</h3>
        <p>Penanganan kerusakan mesin, transmisi, kelistrikan, dan sistem suspensi oleh tim spesialis.</p>
        <ul class="service-list">
          <li>Overhaul mesin</li>
          <li>Perbaikan transmisi</li>
          <li>Kelistrikan mobil</li>
        </ul>
      </div>

      <div class="service-block reveal">
        <div class="service-icon-box"><i class="fas fa-file-signature"></i></div>
        <h3>Bantuan Legal</h3>
        <p>Kami bantu proses perpanjangan STNK, balik nama, dan pengurusan surat-surat kendaraan.</p>
        <ul class="service-list">
          <li>Perpanjangan STNK</li>
          <li>Balik nama</li>
          <li>Uji kir</li>
        </ul>
      </div>

      <div class="service-block reveal">
        <div class="service-icon-box"><i class="fas fa-truck-pickup"></i></div>
        <h3>Darurat 24 Jam</h3>
        <p>Mogok di jalan? Kami siap menjemput kendaraan Anda kapan saja, di mana saja.</p>
        <ul class="service-list">
          <li>Towing gratis</li>
          <li>Jump start aki</li>
          <li>Ganti ban darurat</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- KEUNGGULAN -->
<section class="advantages" id="keunggulan">
  <div class="wrap">
    <div class="advantages-inner">

      <div class="reveal">
        <div class="adv-photo">
          <img src="https://images.unsplash.com/photo-1487754180451-c456f719a1fc?w=800&q=80" alt="">
        </div>
        <div class="adv-badge">
          <div class="num">175</div>
          <div class="lbl">Titik Inspeksi</div>
        </div>
      </div>

      <div class="adv-content reveal">
        <div class="mono-tag">— Kenapa Garasi Merah</div>
        <h2>
          Setiap mobil <em>kami periksa sendiri.</em>
        </h2>

        <p>
          Kami tidak percaya pada "kondisi mulus seperti baru". Setiap unit yang masuk ke showroom kami melalui proses inspeksi 175 titik yang dilakukan oleh mekanik senior kami. Hasilnya kami dokumentasikan dan berikan ke calon pembeli.
        </p>

        <div class="adv-list">

          <div class="adv-item">
            <div class="adv-item-num">01</div>
            <div>
              <h4>Inspeksi Transparan</h4>
              <p>Laporan tertulis semua temuan — dari kondisi mesin sampai body. Anda tahu persis apa yang Anda beli.</p>
            </div>
          </div>

          <div class="adv-item">
            <div class="adv-item-num">02</div>
            <div>
              <h4>Garansi Mesin 1 Tahun</h4>
              <p>Setiap mobil bekas yang kami jual dilindungi garansi mesin dan transmisi selama 12 bulan.</p>
            </div>
          </div>

          <div class="adv-item">
            <div class="adv-item-num">03</div>
            <div>
              <h4>Harga Pasar Wajar</h4>
              <p>Kami sesuaikan harga dengan kondisi asli. Tidak dilebihkan, tidak diobral untuk mengelabui.</p>
            </div>
          </div>

          <div class="adv-item">
            <div class="adv-item-num">04</div>
            <div>
              <h4>Bisa Tukar Tambah</h4>
              <p>Mobil lama Anda bisa jadi DP untuk mobil baru. Kami taksir harga dengan penilaian yang jujur.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- PROSES -->
<section class="section" id="proses">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="section-head-text">
        <div class="mono-tag">— Proses</div>
        <h2>
          Empat langkah <em>beli mobil</em> di sini.
        </h2>
      </div>
    </div>

    <div class="process-grid">

      <div class="process-step reveal">
        <div class="process-num">01</div>
        <h4>Pilih Unit</h4>
        <p>Kunjungi showroom atau lihat stok online. Kami siapkan semua data unit yang Anda minati.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">02</div>
        <h4>Test Drive</h4>
        <p>Coba langsung di jalan. Rute bisa menyesuaikan kondisi jalan yang Anda inginkan.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">03</div>
        <h4>Inspeksi & Nego</h4>
        <p>Bawa mekanik sendiri untuk inspeksi mandiri — kami terbuka. Nego harga di ruangan tertutup.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">04</div>
        <h4>Serah Terima</h4>
        <p>Bayar tunai atau kredit, kami urus semua berkas. Mobil siap bawa pulang di hari yang sama.</p>
      </div>

    </div>
  </div>
</section>

<!-- TESTIMONI -->
<section class="section testi">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="section-head-text">
        <div class="mono-tag">— Kata Pelanggan</div>
        <h2>
          Cerita mereka <em>yang sudah beli di sini.</em>
        </h2>
      </div>
    </div>

    <div class="testi-grid">

      <div class="testi-card reveal">
        <div class="testi-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="testi-text">
          Saya bawa mekanik langganan sendiri untuk cek mobil. Yang bikin saya kagum, hasil inspeksi mereka sama persis dengan temuan mekanik saya. Transparan sekali.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=11" alt="">
          <div>
            <div class="name">Pak Hendra Wijaya</div>
            <div class="role">Pembeli Alphard 2021</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal">
        <div class="testi-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="testi-text">
          Sudah tiga kali service di bengkel mereka. Harga wajar, pengerjaan rapi, dan mekaniknya tidak pernah kasih biaya yang tidak perlu. Sudah langganan.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=32" alt="">
          <div>
            <div class="name">Ibu Maya Anggraini</div>
            <div class="role">Pelanggan service</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal">
        <div class="testi-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="testi-text">
          Tukar tambah mobil lama saya. Taksiran mereka paling tinggi dari tiga dealer yang saya datangi. Prosesnya juga cepat, setengah hari selesai.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=52" alt="">
          <div>
            <div class="name">Pak Reza Pratama</div>
            <div class="role">Tukar tambah CR-V</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta" id="kontak">
  <div class="wrap">
    <div class="cta-inner">

      <div class="reveal">
        <h2>
          Siap cari mobil <em>yang tepat?</em>
        </h2>
        <p>
          Hubungi kami sekarang. Tim sales kami siap membantu Anda memilih unit sesuai anggaran dan kebutuhan. Tidak ada paksaan, hanya informasi yang jujur.
        </p>
      </div>

      <div class="cta-actions reveal">
        <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2011" class="btn btn-white" target="_blank">
          <i class="fab fa-whatsapp"></i> Chat Sales
        </a>
        <a href="tel:0215550111" class="btn btn-outline-light">
          <i class="fas fa-phone"></i> Telepon Showroom
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
          <div class="brand-mark"><i class="fas fa-car-side"></i></div>
          <div class="brand-text">
            Garasi Merah
            <small>Est. 2008</small>
          </div>
        </div>
        <p class="footer-desc">
          Dealer mobil baru dan bekas terpercaya di Jakarta. Kami jual dengan data, bukan cerita.
        </p>
        <div class="footer-hours">
          <strong>JAM OPERASIONAL</strong><br>
          Senin – Sabtu: 08.00 – 19.00<br>
          Minggu: 09.00 – 16.00<br>
          Darurat 24/7: 021-5550-111
        </div>
      </div>

      <div class="footer-col">
        <h4>Kategori</h4>
        <ul>
          <li><a href="#">Mobil Baru</a></li>
          <li><a href="#">Mobil Bekas</a></li>
          <li><a href="#">SUV & MPV</a></li>
          <li><a href="#">Sedan</a></li>
          <li><a href="#">Komersial</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Layanan</h4>
        <ul>
          <li><a href="#">Jual Beli</a></li>
          <li><a href="#">Tukar Tambah</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#">Kredit</a></li>
          <li><a href="#">Asuransi</a></li>
        </ul>
      </div>

      <div class="footer-col footer-contact">
        <h4>Kontak</h4>
        <p><i class="fas fa-location-dot"></i> Jl. MT Haryono 45<br>Jakarta Timur 13340</p>
        <p><i class="fas fa-phone"></i> 021-5550-111</p>
        <p><i class="fab fa-whatsapp"></i> +62 812 3456 7890</p>
        <p><i class="fas fa-envelope"></i> sales@garasimerah.id</p>
      </div>

    </div>

    <div class="footer-bottom">
      <div>© 2025 Garasi Merah. SIUP No. 503/2345/PM/2008</div>
      <div class="footer-social">
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- FLOAT -->
<div class="float-group">
  <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2011" class="float-btn" target="_blank" aria-label="WhatsApp">
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

// Counter
const counterObs = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const target = +el.dataset.target;
      const duration = 1600;
      const step = target / (duration / 16);
      let cur = 0;
      const tick = () => {
        cur += step;
        if (cur < target) {
          el.textContent = Math.ceil(cur).toLocaleString('id-ID');
          requestAnimationFrame(tick);
        } else {
          el.textContent = target.toLocaleString('id-ID');
        }
      };
      tick();
      counterObs.unobserve(el);
    }
  });
}, { threshold: 0.5 });
document.querySelectorAll('.counter').forEach(el => counterObs.observe(el));

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