@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bumi Tani Nusantara — Pangan Sehat dari Petani Indonesia</title>
<meta name="description" content="Bumi Tani Nusantara — perusahaan agrikultur yang mengelola kebun kopi, sayur organik, dan peternakan dengan pendekatan berkelanjutan.">
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --bg: #f5f0e4;
  --bg-2: #ede4d0;
  --bg-3: #ddd1b4;
  --paper: #fbf7ee;
  --ink: #2a3319;
  --ink-2: #4a5238;
  --ink-3: #7a8060;
  --ink-4: #a8ab8e;
  --line: #d4c9ac;
  --line-2: #bdb092;
  --forest: #3d5733;
  --forest-2: #2d4325;
  --forest-soft: #e4ebdc;
  --forest-line: #b8c5a8;
  --soil: #6b4a2a;
  --soil-soft: #f0e5d5;
  --wheat: #c9a447;
  --wheat-soft: #f6eccd;
  --clay: #a8543a;
  --serif: 'Lora', Georgia, serif;
  --sans: 'Inter', -apple-system, sans-serif;
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

::selection { background: var(--forest); color: var(--bg); }
a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }
button { font-family: inherit; cursor: pointer; }

/* ============ LAYOUT ============ */
.wrap {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 40px;
}

.wrap-sm {
  max-width: 920px;
  margin: 0 auto;
  padding: 0 40px;
}

/* ============ TOP BAR ============ */
.topbar {
  background: var(--forest-2);
  color: var(--bg);
  padding: 11px 0;
  font-size: 13px;
}

.topbar-inner {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 14px;
}

.topbar-item {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: rgba(245, 240, 228, 0.8);
}

.topbar-item i {
  color: var(--wheat);
  font-size: 12px;
}

.topbar-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 4px 12px;
  background: var(--wheat);
  color: var(--forest-2);
  border-radius: 999px;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
}

.topbar-badge i { color: var(--forest-2); }

/* ============ NAV ============ */
.nav {
  background: var(--bg);
  border-bottom: 1px solid var(--line);
  position: sticky;
  top: 0;
  z-index: 100;
  transition: padding 0.3s, box-shadow 0.3s;
  padding: 20px 0;
}

.nav.scrolled {
  padding: 12px 0;
  box-shadow: 0 4px 20px rgba(42, 51, 25, 0.06);
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
  display: flex;
  align-items: center;
  gap: 14px;
  flex-shrink: 0;
}

.brand-mark {
  width: 46px;
  height: 46px;
  border-radius: 12px;
  background: var(--forest);
  color: var(--bg);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  position: relative;
}

.brand-mark::after {
  content: '';
  position: absolute;
  bottom: -3px;
  right: -3px;
  width: 14px;
  height: 14px;
  background: var(--wheat);
  border-radius: 50%;
  border: 2px solid var(--bg);
}

.brand-text {
  font-family: var(--serif);
  font-size: 20px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.01em;
  line-height: 1.1;
}

.brand-text small {
  display: block;
  font-family: var(--sans);
  font-size: 10px;
  font-weight: 500;
  color: var(--ink-3);
  letter-spacing: 0.2em;
  text-transform: uppercase;
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
  font-weight: 500;
  color: var(--ink-2);
  padding: 9px 16px;
  border-radius: 8px;
  transition: all 0.2s;
}

.nav-menu a:hover {
  background: var(--forest-soft);
  color: var(--forest);
}

.nav-cta {
  padding: 12px 24px;
  background: var(--forest);
  color: var(--bg);
  border-radius: 10px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.02em;
  transition: all 0.2s;
  flex-shrink: 0;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.nav-cta:hover {
  background: var(--forest-2);
  transform: translateY(-1px);
}

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

.hero-bg-pattern {
  position: absolute;
  top: 0;
  right: 0;
  width: 50%;
  height: 100%;
  background: var(--bg-2);
  clip-path: polygon(20% 0, 100% 0, 100% 100%, 0 100%);
  z-index: 0;
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
  border: 1px solid var(--line);
  border-radius: 999px;
  font-size: 12px;
  font-weight: 500;
  color: var(--ink-2);
  letter-spacing: 0.06em;
  margin-bottom: 28px;
  box-shadow: 0 2px 8px rgba(42, 51, 25, 0.04);
}

.hero-tag-icon {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: var(--forest-soft);
  color: var(--forest);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 11px;
}

.hero h1 {
  font-family: var(--serif);
  font-size: clamp(42px, 5.8vw, 76px);
  font-weight: 500;
  line-height: 1.05;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 28px;
}

.hero h1 em {
  font-style: italic;
  font-weight: 400;
  color: var(--forest);
}

.hero-lede {
  font-size: 17px;
  color: var(--ink-2);
  font-weight: 400;
  max-width: 560px;
  line-height: 1.8;
  margin-bottom: 40px;
}

.hero-actions {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
  margin-bottom: 48px;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 16px 30px;
  font-size: 14px;
  font-weight: 600;
  border-radius: 10px;
  border: 1px solid transparent;
  transition: all 0.25s;
  cursor: pointer;
  font-family: inherit;
  white-space: nowrap;
  letter-spacing: 0.01em;
}

.btn-forest {
  background: var(--forest);
  color: var(--bg);
  border-color: var(--forest);
}

.btn-forest:hover {
  background: var(--forest-2);
  border-color: var(--forest-2);
  transform: translateY(-2px);
  box-shadow: 0 12px 24px -8px rgba(61, 87, 51, 0.4);
}

.btn-outline {
  background: transparent;
  color: var(--ink);
  border-color: var(--line-2);
}

.btn-outline:hover {
  border-color: var(--forest);
  color: var(--forest);
}

.hero-stats {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
  padding-top: 32px;
  border-top: 1px solid var(--line);
}

.hero-stat {
  padding: 0 24px;
  border-right: 1px solid var(--line);
}

.hero-stat:first-child { padding-left: 0; }
.hero-stat:last-child { border-right: none; }

.hero-stat .num {
  font-family: var(--serif);
  font-size: 38px;
  font-weight: 600;
  color: var(--forest);
  line-height: 1;
  letter-spacing: -0.02em;
  margin-bottom: 8px;
  display: flex;
  align-items: baseline;
  gap: 3px;
}

.hero-stat .num span {
  font-size: 22px;
  color: var(--wheat);
}

.hero-stat .lbl {
  font-size: 13px;
  color: var(--ink-3);
  line-height: 1.5;
}

/* Hero visual */
.hero-visual {
  position: relative;
}

.hero-photo-main {
  border-radius: 20px;
  overflow: hidden;
  aspect-ratio: 4 / 5;
  background: var(--bg-3);
  box-shadow: 0 30px 60px -30px rgba(42, 51, 25, 0.25);
}

.hero-photo-main img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-photo-side {
  position: absolute;
  bottom: -30px;
  left: -40px;
  width: 180px;
  height: 220px;
  border-radius: 16px;
  overflow: hidden;
  background: var(--bg-3);
  border: 6px solid var(--bg);
  box-shadow: 0 20px 40px -20px rgba(42, 51, 25, 0.3);
}

.hero-photo-side img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-badge {
  position: absolute;
  top: 30px;
  right: -20px;
  padding: 18px 24px;
  background: var(--wheat);
  color: var(--forest-2);
  border-radius: 14px;
  box-shadow: 0 20px 40px -20px rgba(201, 164, 71, 0.5);
  transform: rotate(4deg);
}

.hero-badge-icon {
  font-size: 22px;
  margin-bottom: 6px;
  display: block;
}

.hero-badge-text {
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  line-height: 1.3;
}

/* ============ SERTIFIKASI STRIP ============ */
.cert-strip {
  padding: 32px 0;
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.cert-inner {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  flex-wrap: wrap;
}

.cert-label {
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--ink-3);
}

.cert-logos {
  display: flex;
  gap: 48px;
  flex-wrap: wrap;
  align-items: center;
}

.cert-item {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-family: var(--serif);
  font-size: 16px;
  font-weight: 600;
  color: var(--ink-3);
  letter-spacing: -0.01em;
  transition: color 0.2s;
}

.cert-item i {
  color: var(--forest);
  font-size: 16px;
}

.cert-item:hover { color: var(--forest); }

/* ============ SECTION ============ */
.section {
  padding: 100px 0;
  border-bottom: 1px solid var(--line);
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
  font-size: 12px;
  font-weight: 600;
  color: var(--clay);
  letter-spacing: 0.24em;
  text-transform: uppercase;
  margin-bottom: 20px;
}

.sec-eyebrow::before {
  content: '';
  width: 28px;
  height: 1px;
  background: var(--clay);
}

.section-head.center .sec-eyebrow::before { display: none; }

.section-head h2 {
  font-family: var(--serif);
  font-size: clamp(32px, 4.2vw, 50px);
  font-weight: 500;
  line-height: 1.12;
  letter-spacing: -0.02em;
  color: var(--ink);
  margin-bottom: 20px;
}

.section-head h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--forest);
}

.section-head p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.8;
}

/* ============ STORY ============ */
.story {
  background: var(--paper);
}

.story-grid {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: 80px;
  align-items: center;
}

.story-visual {
  position: relative;
  aspect-ratio: 4 / 5;
}

.story-img-1 {
  position: absolute;
  top: 0;
  left: 0;
  right: 40px;
  bottom: 60px;
  border-radius: 20px;
  overflow: hidden;
  background: var(--bg-3);
}

.story-img-1 img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.story-img-2 {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 200px;
  height: 240px;
  border-radius: 16px;
  overflow: hidden;
  background: var(--bg-3);
  border: 6px solid var(--paper);
  box-shadow: 0 20px 40px -20px rgba(42, 51, 25, 0.2);
}

.story-img-2 img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.story-badge {
  position: absolute;
  top: 40px;
  right: -20px;
  width: 130px;
  height: 130px;
  background: var(--forest);
  color: var(--bg);
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  transform: rotate(-8deg);
  box-shadow: 0 20px 40px -20px rgba(61, 87, 51, 0.5);
  border: 6px solid var(--paper);
}

.story-badge .year {
  font-family: var(--serif);
  font-size: 34px;
  font-weight: 700;
  line-height: 1;
  letter-spacing: -0.02em;
}

.story-badge .lbl {
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  margin-top: 4px;
}

.story-text h2 {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 500;
  line-height: 1.12;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 26px;
}

.story-text h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--forest);
}

.story-text > p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.85;
  margin-bottom: 22px;
}

.story-sign {
  margin-top: 36px;
  padding-top: 28px;
  border-top: 1px solid var(--line);
  display: flex;
  align-items: center;
  gap: 16px;
}

.story-sign img {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  object-fit: cover;
}

.story-sign-name {
  font-family: var(--serif);
  font-size: 18px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.005em;
}

.story-sign-role {
  font-size: 12px;
  color: var(--ink-3);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  margin-top: 3px;
}

/* ============ PRODUK ============ */
.products-section {
  background: var(--bg);
}

.products-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.product-card {
  background: var(--paper);
  border-radius: 20px;
  overflow: hidden;
  transition: all 0.35s;
  border: 1px solid transparent;
  display: flex;
  flex-direction: column;
}

.product-card:hover {
  border-color: var(--forest);
  transform: translateY(-6px);
  box-shadow: 0 30px 50px -30px rgba(42, 51, 25, 0.25);
}

.product-img {
  aspect-ratio: 4 / 3;
  overflow: hidden;
  background: var(--bg-2);
  position: relative;
}

.product-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.8s;
}

.product-card:hover .product-img img { transform: scale(1.05); }

.product-badge {
  position: absolute;
  top: 16px;
  left: 16px;
  padding: 6px 14px;
  background: var(--forest);
  color: var(--bg);
  border-radius: 999px;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
}

.product-badge.wheat { background: var(--wheat); color: var(--forest-2); }

.product-body {
  padding: 28px 26px 30px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.product-cat {
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--clay);
  margin-bottom: 10px;
}

.product-card h3 {
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.015em;
  margin-bottom: 12px;
  line-height: 1.2;
}

.product-card p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.7;
  margin-bottom: 22px;
  flex: 1;
}

.product-meta {
  display: flex;
  gap: 16px;
  padding-top: 18px;
  border-top: 1px solid var(--line);
  font-size: 12px;
  color: var(--ink-3);
  flex-wrap: wrap;
}

.product-meta span {
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.product-meta i {
  color: var(--forest);
  font-size: 11px;
}

/* ============ PROSES ============ */
.process {
  background: var(--paper);
}

.process-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  border: 1px solid var(--line);
  border-radius: 20px;
  overflow: hidden;
}

.process-step {
  padding: 40px 32px;
  border-right: 1px solid var(--line);
  background: var(--paper);
  transition: background 0.3s;
}

.process-step:last-child { border-right: none; }

.process-step:hover { background: var(--bg); }

.process-num {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: var(--forest-soft);
  color: var(--forest);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--serif);
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 24px;
}

.process-step h4 {
  font-family: var(--serif);
  font-size: 20px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 12px;
  letter-spacing: -0.01em;
}

.process-step p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.7;
}

/* ============ KOMITMEN ============ */
.commitment {
  background: var(--forest);
  color: var(--bg);
  padding: 100px 0;
  position: relative;
  overflow: hidden;
}

.commitment::before {
  content: '';
  position: absolute;
  top: -100px;
  right: -100px;
  width: 400px;
  height: 400px;
  border: 1px solid rgba(245, 240, 228, 0.08);
  border-radius: 50%;
  pointer-events: none;
}

.commitment::after {
  content: '';
  position: absolute;
  bottom: -150px;
  left: -80px;
  width: 350px;
  height: 350px;
  border: 1px solid rgba(245, 240, 228, 0.06);
  border-radius: 50%;
  pointer-events: none;
}

.commitment-inner {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 80px;
  align-items: center;
}

.commitment-text .sec-eyebrow {
  color: var(--wheat);
}

.commitment-text .sec-eyebrow::before {
  background: var(--wheat);
}

.commitment-text h2 {
  font-family: var(--serif);
  font-size: clamp(30px, 3.8vw, 46px);
  font-weight: 500;
  line-height: 1.15;
  letter-spacing: -0.02em;
  color: var(--bg);
  margin-bottom: 24px;
}

.commitment-text h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--wheat);
}

.commitment-text > p {
  font-size: 16px;
  color: rgba(245, 240, 228, 0.8);
  line-height: 1.85;
  margin-bottom: 22px;
}

.commitment-list {
  display: grid;
  gap: 20px;
  margin-top: 36px;
}

.commitment-item {
  display: flex;
  gap: 16px;
  align-items: flex-start;
  padding: 20px;
  background: rgba(245, 240, 228, 0.06);
  border-radius: 14px;
  border: 1px solid rgba(245, 240, 228, 0.1);
}

.commitment-item-icon {
  width: 44px;
  height: 44px;
  border-radius: 10px;
  background: var(--wheat);
  color: var(--forest-2);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 17px;
  flex-shrink: 0;
}

.commitment-item h4 {
  font-family: var(--serif);
  font-size: 17px;
  font-weight: 600;
  color: var(--bg);
  margin-bottom: 5px;
  letter-spacing: -0.005em;
}

.commitment-item p {
  font-size: 13px;
  color: rgba(245, 240, 228, 0.7);
  line-height: 1.65;
  margin: 0;
}

.commitment-visual {
  position: relative;
  aspect-ratio: 4 / 5;
}

.commitment-img {
  position: absolute;
  inset: 0;
  border-radius: 20px;
  overflow: hidden;
  background: var(--bg-3);
}

.commitment-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.commitment-badge {
  position: absolute;
  bottom: 30px;
  left: -30px;
  padding: 22px 26px;
  background: var(--paper);
  color: var(--ink);
  border-radius: 16px;
  box-shadow: 0 20px 40px -20px rgba(0, 0, 0, 0.3);
  min-width: 200px;
}

.commitment-badge-label {
  font-size: 10px;
  font-weight: 600;
  color: var(--ink-3);
  letter-spacing: 0.22em;
  text-transform: uppercase;
  margin-bottom: 8px;
}

.commitment-badge-value {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 700;
  color: var(--forest);
  letter-spacing: -0.015em;
  line-height: 1;
}

.commitment-badge-sub {
  font-size: 12px;
  color: var(--ink-3);
  margin-top: 6px;
  line-height: 1.5;
}

/* ============ TIM / PETANI ============ */
.team {
  background: var(--bg);
}

.team-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}

.team-card {
  text-align: center;
}

.team-photo {
  aspect-ratio: 4 / 5;
  border-radius: 16px;
  overflow: hidden;
  background: var(--bg-2);
  margin-bottom: 20px;
}

.team-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.7s;
}

.team-card:hover .team-photo img { transform: scale(1.05); }

.team-card h3 {
  font-family: var(--serif);
  font-size: 20px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 4px;
  letter-spacing: -0.01em;
}

.team-role {
  font-size: 12px;
  color: var(--clay);
  font-weight: 600;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  margin-bottom: 12px;
}

.team-info {
  font-size: 13px;
  color: var(--ink-3);
  line-height: 1.6;
  padding-top: 12px;
  border-top: 1px solid var(--line);
}

/* ============ QUOTES ============ */
.quotes {
  background: var(--paper);
}

.quotes-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.quote-card {
  padding: 40px 34px;
  background: var(--bg);
  border-radius: 20px;
  border: 1px solid var(--line);
  transition: all 0.3s;
  display: flex;
  flex-direction: column;
}

.quote-card:hover {
  border-color: var(--forest);
  transform: translateY(-4px);
  box-shadow: 0 25px 50px -25px rgba(42, 51, 25, 0.2);
}

.quote-mark {
  font-family: var(--serif);
  font-size: 60px;
  line-height: 0.5;
  color: var(--wheat);
  margin-bottom: 20px;
  font-weight: 700;
}

.quote-text {
  font-family: var(--serif);
  font-size: 18px;
  font-weight: 400;
  font-style: italic;
  line-height: 1.55;
  color: var(--ink);
  margin-bottom: 28px;
  letter-spacing: -0.005em;
  flex: 1;
}

.quote-author {
  display: flex;
  align-items: center;
  gap: 14px;
  padding-top: 22px;
  border-top: 1px solid var(--line);
}

.quote-author img {
  width: 46px;
  height: 46px;
  border-radius: 50%;
  object-fit: cover;
}

.quote-author .name {
  font-family: var(--serif);
  font-size: 16px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.005em;
}

.quote-author .role {
  font-size: 12px;
  color: var(--ink-3);
  margin-top: 2px;
  letter-spacing: 0.02em;
}

/* ============ NUMBERS ============ */
.numbers {
  padding: 90px 0;
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.numbers-grid {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 40px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
}

.number-item {
  padding-left: 24px;
  border-left: 3px solid var(--forest);
}

.number-item .num {
  font-family: var(--serif);
  font-size: clamp(40px, 5vw, 56px);
  font-weight: 600;
  color: var(--ink);
  line-height: 1;
  letter-spacing: -0.03em;
  margin-bottom: 12px;
  display: flex;
  align-items: baseline;
  gap: 3px;
}

.number-item .num span {
  font-size: 26px;
  color: var(--wheat);
}

.number-item .lbl {
  font-size: 14px;
  color: var(--ink-3);
  line-height: 1.55;
}

/* ============ CTA ============ */
.cta {
  padding: 110px 0;
  background: var(--bg);
  position: relative;
  overflow: hidden;
}

.cta-inner {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
  position: relative;
  z-index: 1;
}

.cta-inner .sec-eyebrow { justify-content: center; }

.cta h2 {
  font-family: var(--serif);
  font-size: clamp(34px, 4.5vw, 54px);
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 24px;
}

.cta h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--forest);
}

.cta p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.85;
  margin-bottom: 44px;
  max-width: 620px;
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
  background: var(--forest-2);
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
  border-bottom: 1px solid rgba(245, 240, 228, 0.12);
  margin-bottom: 32px;
}

.footer-brand {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 22px;
}

.footer-brand .brand-mark {
  background: var(--wheat);
  color: var(--forest-2);
}

.footer-brand .brand-mark::after {
  background: var(--bg);
  border-color: var(--forest-2);
}

.footer-brand .brand-text {
  color: var(--bg);
  font-size: 22px;
}

.footer-brand .brand-text small {
  color: rgba(245, 240, 228, 0.55);
}

.footer-desc {
  font-size: 14px;
  color: rgba(245, 240, 228, 0.7);
  line-height: 1.8;
  max-width: 340px;
  margin-bottom: 22px;
}

.footer-cert {
  padding: 16px 18px;
  background: rgba(245, 240, 228, 0.06);
  border: 1px solid rgba(245, 240, 228, 0.1);
  border-radius: 12px;
  font-size: 12px;
  color: rgba(245, 240, 228, 0.6);
  line-height: 1.75;
}

.footer-cert strong {
  color: var(--wheat);
  font-weight: 600;
}

.footer-col h4 {
  font-size: 11px;
  font-weight: 700;
  color: var(--wheat);
  letter-spacing: 0.22em;
  text-transform: uppercase;
  margin-bottom: 22px;
}

.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 12px; }

.footer-col a {
  font-size: 14px;
  color: rgba(245, 240, 228, 0.7);
  transition: color 0.2s;
}

.footer-col a:hover { color: var(--wheat); }

.footer-contact p {
  font-size: 14px;
  color: rgba(245, 240, 228, 0.7);
  margin-bottom: 14px;
  display: flex;
  gap: 12px;
  align-items: flex-start;
  line-height: 1.6;
}

.footer-contact i {
  color: var(--wheat);
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
  font-size: 13px;
  color: rgba(245, 240, 228, 0.5);
}

.footer-social {
  display: flex;
  gap: 8px;
}

.footer-social a {
  width: 38px;
  height: 38px;
  border-radius: 10px;
  background: rgba(245, 240, 228, 0.06);
  border: 1px solid rgba(245, 240, 228, 0.1);
  color: rgba(245, 240, 228, 0.65);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  transition: all 0.2s;
}

.footer-social a:hover {
  background: var(--wheat);
  border-color: var(--wheat);
  color: var(--forest-2);
  transform: translateY(-2px);
}

/* ============ REVEAL ============ */
.reveal {
  opacity: 0;
  transform: translateY(28px);
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
  background: var(--forest);
  color: var(--bg);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  text-decoration: none;
  border: none;
  cursor: pointer;
  transition: all 0.25s;
  box-shadow: 0 12px 28px -8px rgba(61, 87, 51, 0.5);
}

.float-btn:hover {
  background: var(--forest-2);
  transform: translateY(-3px);
}

/* ============ RESPONSIVE ============ */
@media (max-width: 1100px) {
  .hero-inner { grid-template-columns: 1fr; gap: 60px; }
  .hero-bg-pattern { display: none; }
  .hero-visual { max-width: 500px; margin: 0 auto; }
  .hero-photo-side { width: 140px; height: 180px; left: -20px; }
  .hero-badge { right: 20px; }
  .story-grid { grid-template-columns: 1fr; gap: 60px; }
  .story-visual { max-width: 500px; margin: 0 auto; }
  .products-grid { grid-template-columns: repeat(2, 1fr); }
  .process-grid { grid-template-columns: repeat(2, 1fr); }
  .process-step:nth-child(2) { border-right: none; }
  .process-step:nth-child(1),
  .process-step:nth-child(2) { border-bottom: 1px solid var(--line); }
  .commitment-inner { grid-template-columns: 1fr; gap: 60px; }
  .commitment-visual { max-width: 480px; margin: 0 auto; }
  .commitment-badge { left: 0; bottom: 20px; }
  .team-grid { grid-template-columns: repeat(2, 1fr); }
  .quotes-grid { grid-template-columns: 1fr; }
  .numbers-grid { grid-template-columns: repeat(2, 1fr); gap: 32px; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
  .footer-grid > div:first-child { grid-column: span 2; }
}

@media (max-width: 768px) {
  .wrap, .wrap-sm, .topbar-inner, .nav-inner, .cert-inner, .numbers-grid, .footer-grid, .footer-bottom { padding: 0 20px; }

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
  .nav-menu a { padding: 14px 18px; font-size: 15px; border-radius: 10px; }
  .nav-cta { display: none; }
  .nav-toggle { display: block; z-index: 1001; }

  .topbar-item:last-child { display: none; }

  .hero { padding: 60px 0 80px; }
  .hero h1 { font-size: 40px; }
  .hero-photo-side { width: 120px; height: 150px; }
  .hero-badge { top: 20px; right: 20px; padding: 14px 18px; }

  .section { padding: 72px 0; }

  .hero-stats { grid-template-columns: 1fr; gap: 0; }
  .hero-stat {
    padding: 20px 0;
    border-right: none;
    border-bottom: 1px solid var(--line);
  }
  .hero-stat:last-child { border-bottom: none; }

  .products-grid { grid-template-columns: 1fr; }
  .process-grid { grid-template-columns: 1fr; }
  .process-step { border-right: none !important; border-bottom: 1px solid var(--line); }
  .process-step:last-child { border-bottom: none; }

  .team-grid { grid-template-columns: 1fr; max-width: 320px; margin: 0 auto; }

  .story-img-2 { width: 140px; height: 170px; }
  .story-img-1 { right: 30px; bottom: 40px; }
  .story-badge { width: 100px; height: 100px; top: 20px; right: 0; }
  .story-badge .year { font-size: 26px; }

  .numbers-grid { grid-template-columns: 1fr; gap: 24px; }

  .footer-grid { grid-template-columns: 1fr; }
  .footer-grid > div:first-child { grid-column: span 1; }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 34px; }
  .section-head h2 { font-size: 28px; }
  .number-item .num { font-size: 34px; }
  .cta h2 { font-size: 28px; }
  .brand-text { font-size: 17px; }
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <div class="topbar-inner">
    <div style="display:flex; gap:24px; flex-wrap:wrap;">
      <span class="topbar-item">
        <i class="fas fa-map-marker-alt"></i> Kebun Utama: Lembang, Jawa Barat
      </span>
      <span class="topbar-item">
        <i class="fas fa-phone"></i> (022) 555-0180
      </span>
    </div>
    <span class="topbar-badge">
      <i class="fas fa-leaf"></i> Bersertifikat Organik Indonesia
    </span>
  </div>
</div>

<!-- NAV -->
<nav class="nav" id="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <div class="brand-mark"><i class="fas fa-seedling"></i></div>
      <div class="brand-text">
        Bumi Tani
        <small>Nusantara · Est. 1995</small>
      </div>
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#produk">Produk</a></li>
      <li><a href="#tentang">Tentang</a></li>
      <li><a href="#proses">Proses</a></li>
      <li><a href="#komitmen">Komitmen</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>

    <a href="#kontak" class="nav-cta">
      <i class="fas fa-handshake"></i> Jadi Mitra
    </a>

    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="hero-bg-pattern"></div>

  <div class="wrap">
    <div class="hero-inner">

      <div class="hero-text reveal">
        <div class="hero-tag">
          <span class="hero-tag-icon"><i class="fas fa-leaf"></i></span>
          Bertani sejak 1995 · Lembang, Jawa Barat
        </div>

        <h1>
          Pangan sehat dari <em>tangan yang merawat bumi.</em>
        </h1>

        <p class="hero-lede">
          Bumi Tani Nusantara mengelola kebun kopi, sayur organik, dan peternakan di dataran tinggi Lembang. Kami percaya pangan yang baik lahir dari tanah yang dirawat dengan sabar, bukan dari pupuk yang mempercepat semuanya.
        </p>

        <div class="hero-actions">
          <a href="#produk" class="btn btn-forest">
            Lihat Produk <i class="fas fa-arrow-right"></i>
          </a>
          <a href="#tentang" class="btn btn-outline">
            Cerita Kami
          </a>
        </div>

        <div class="hero-stats">
          <div class="hero-stat">
            <div class="num"><span class="counter" data-target="30">0</span><span>+</span></div>
            <div class="lbl">Tahun bertani<br>di tanah yang sama</div>
          </div>
          <div class="hero-stat">
            <div class="num"><span class="counter" data-target="240">0</span><span>+</span></div>
            <div class="lbl">Petani mitra<br>di seluruh Jawa</div>
          </div>
          <div class="hero-stat">
            <div class="num"><span class="counter" data-target="18">0</span></div>
            <div class="lbl">Hektar lahan<br>yang kami kelola</div>
          </div>
        </div>
      </div>

      <div class="hero-visual reveal">
        <div class="hero-photo-main">
          <img src="https://images.unsplash.com/photo-1500937386664-56d1dfef3854?w=800&q=80" alt="">
        </div>
        <div class="hero-photo-side">
          <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=600&q=80" alt="">
        </div>

        <div class="hero-badge">
          <i class="fas fa-award hero-badge-icon"></i>
          <div class="hero-badge-text">
            Organik<br>Indonesia
          </div>
        </div>
      </div>

    </div>
  </div>
</header>

<!-- CERT STRIP -->
<div class="cert-strip">
  <div class="cert-inner">
    <div class="cert-label">Sertifikasi & Kemitraan</div>
    <div class="cert-logos">
      <span class="cert-item"><i class="fas fa-certificate"></i> Organik Indonesia</span>
      <span class="cert-item"><i class="fas fa-leaf"></i> HACCP</span>
      <span class="cert-item"><i class="fas fa-seedling"></i> Fair Trade</span>
      <span class="cert-item"><i class="fas fa-handshake"></i> Gapoktan</span>
    </div>
  </div>
</div>

<!-- STORY -->
<section class="section story" id="tentang">
  <div class="wrap">
    <div class="story-grid">

      <div class="story-visual reveal">
        <div class="story-img-1">
          <img src="https://images.unsplash.com/photo-1595855759920-86582396756a?w=800&q=80" alt="">
        </div>
        <div class="story-img-2">
          <img src="https://images.unsplash.com/photo-1615729947596-a598e5de0ab3?w=600&q=80" alt="">
        </div>
        <div class="story-badge">
          <div class="year">1995</div>
          <div class="lbl">Sejak</div>
        </div>
      </div>

      <div class="story-text reveal">
        <div class="sec-eyebrow">Cerita Kami</div>
        <h2>
          Tanah yang dirawat <em>selama tiga generasi.</em>
        </h2>

        <p>
          Semua dimulai dari sepetak kebun sayur di Lembang pada 1995. Kakek kami, Pak Sukardi, memulai dengan menanam kol, wortel, dan kentang untuk pasar lokal. Waktu itu semua serba sederhana: cangkul, ember, dan satu truk tua untuk mengangkut hasil panen.
        </p>

        <p>
          Tiga puluh tahun kemudian, tanah yang sama masih kami rawat. Yang berubah hanya skala — dari sepetak kecil menjadi 18 hektar lahan yang kami kelola bersama 240 petani mitra di seluruh Jawa. Namun cara kami bertani tidak berubah: kami percaya pada musim, pada rotasi tanaman, dan pada kesabaran yang tidak bisa dipercepat oleh teknologi apapun.
        </p>

        <p>
          Setiap produk yang keluar dari kebun kami melewati pemeriksaan ketat. Kami tidak menjual sesuatu yang kami tidak akan makan sendiri di rumah.
        </p>

        <div class="story-sign">
          <img src="https://i.pravatar.cc/150?img=32" alt="">
          <div>
            <div class="story-sign-name">Bayu Sukardi, S.P.</div>
            <div class="story-sign-role">Generasi Ketiga · Direktur Utama</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PRODUK -->
<section class="section products-section" id="produk">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Produk Kami</div>
      <h2>
        Yang kami tanam, <em>kami kirim langsung.</em>
      </h2>
      <p>Tidak melalui perantara panjang. Kami mengirim langsung dari kebun ke dapur Anda atau ke mitra retail kami.</p>
    </div>

    <div class="products-grid">

      <div class="product-card reveal">
        <div class="product-img">
          <img src="https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=800&q=80" alt="">
          <div class="product-badge">Signature</div>
        </div>
        <div class="product-body">
          <div class="product-cat">Kopi Single Origin</div>
          <h3>Kopi Arabika Lembang</h3>
          <p>Ditanam di ketinggian 1.400 mdpl, dipanen manual, dan diolah dengan metode full washed. Rasanya bersih dengan sentuhan cokelat dan buah.</p>
          <div class="product-meta">
            <span><i class="fas fa-mountain"></i> 1.400 mdpl</span>
            <span><i class="fas fa-flask"></i> Full washed</span>
          </div>
        </div>
      </div>

      <div class="product-card reveal">
        <div class="product-img">
          <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?w=800&q=80" alt="">
          <div class="product-badge wheat">Segar Harian</div>
        </div>
        <div class="product-body">
          <div class="product-cat">Sayur Organik</div>
          <h3>Paket Sayur Mingguan</h3>
          <p>Paket berisi 8 jenis sayur musiman yang dipanen pagi hari dan dikirim di hari yang sama. Cukup untuk keluarga 3 hingga 4 orang selama seminggu.</p>
          <div class="product-meta">
            <span><i class="fas fa-box"></i> 5 kg per paket</span>
            <span><i class="fas fa-truck-fast"></i> Dikirim hari yang sama</span>
          </div>
        </div>
      </div>

      <div class="product-card reveal">
        <div class="product-img">
          <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?w=800&q=80" alt="">
        </div>
        <div class="product-body">
          <div class="product-cat">Peternakan</div>
          <h3>Susu Sapi Segar</h3>
          <p>Dari sapi perah yang kami rawat sendiri. Susu dipasteurisasi ringan, tanpa tambahan pengawet atau perasa. Dikirim dalam botol kaca yang bisa dikembalikan.</p>
          <div class="product-meta">
            <span><i class="fas fa-bottle-water"></i> Botol kaca 1L</span>
            <span><i class="fas fa-snowflake"></i> Rantai dingin</span>
          </div>
        </div>
      </div>

      <div class="product-card reveal">
        <div class="product-img">
          <img src="https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e?w=800&q=80" alt="">
        </div>
        <div class="product-body">
          <div class="product-cat">Beras Pilihan</div>
          <h3>Beras Merah Organik</h3>
          <p>Beras merah dari sawah organik di Ciwidey. Diproses dengan huller kecil agar lapisan aleuron tetap utuh. Teksturnya pulen, aromanya khas.</p>
          <div class="product-meta">
            <span><i class="fas fa-seedling"></i> Tanpa pestisida</span>
            <span><i class="fas fa-box"></i> Kemasan 5 kg</span>
          </div>
        </div>
      </div>

      <div class="product-card reveal">
        <div class="product-img">
          <img src="https://images.unsplash.com/photo-1587049352846-4a222e784d38?w=800&q=80" alt="">
        </div>
        <div class="product-body">
          <div class="product-cat">Madu</div>
          <h3>Madu Hutan Multiflora</h3>
          <p>Dipanen dari sarang lebah hutan di kaki Gunung Tangkuban Perahu. Murni tanpa campuran, dikemas dalam botol kaca gelap agar kualitas terjaga.</p>
          <div class="product-meta">
            <span><i class="fas fa-droplet"></i> 500 ml</span>
            <span><i class="fas fa-certificate"></i> Uji lab</span>
          </div>
        </div>
      </div>

      <div class="product-card reveal">
        <div class="product-img">
          <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?w=800&q=80" alt="">
        </div>
        <div class="product-body">
          <div class="product-cat">Bumbu Dapur</div>
          <h3>Rempah & Bumbu Segar</h3>
          <p>Paket rempah segar berisi lengkuas, jahe, kunyit, sereh, dan daun jeruk. Semua ditanam tanpa bahan kimia di kebun kami sendiri.</p>
          <div class="product-meta">
            <span><i class="fas fa-leaf"></i> Organik</span>
            <span><i class="fas fa-box"></i> Paket 1 kg</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PROSES -->
<section class="section process" id="proses">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-eyebrow">Proses Kami</div>
      <h2>
        Dari benih sampai <em>meja makan Anda.</em>
      </h2>
      <p>Empat langkah sederhana yang kami pegang sejak hari pertama. Tidak ada jalan pintas, tidak ada yang dipercepat.</p>
    </div>

    <div class="process-grid">

      <div class="process-step reveal">
        <div class="process-num">1</div>
        <h4>Pemilihan Benih</h4>
        <p>Kami memilih benih sendiri dari tanaman terbaik musim sebelumnya. Tidak pernah beli dari luar untuk menjaga kualitas keturunan.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">2</div>
        <h4>Penanaman Sabar</h4>
        <p>Tanam mengikuti musim, bukan memaksa hasil dengan pupuk kimia. Rotasi tanaman kami jaga agar tanah tetap subur.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">3</div>
        <h4>Panen Tangan</h4>
        <p>Setiap sayur, buah, dan kopi dipanen dengan tangan. Tidak pakai mesin yang bisa merusak produk sebelum sampai ke Anda.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">4</div>
        <h4>Kirim Hari Itu</h4>
        <p>Untuk sayur dan produk segar, kami kirim di hari yang sama dengan panen. Untuk produk kering, dikemas dalam 48 jam.</p>
      </div>

    </div>
  </div>
</section>

<!-- KOMITMEN -->
<section class="commitment" id="komitmen">
  <div class="wrap">
    <div class="commitment-inner">

      <div class="commitment-text reveal">
        <div class="sec-eyebrow">Komitmen Kami</div>
        <h2>
          Bumi ini bukan <em>warisan, tapi titipan.</em>
        </h2>

        <p>
          Kami percaya bahwa cara kami bertani hari ini akan menentukan apakah anak cucu kita masih bisa bertani esok. Itu sebabnya setiap keputusan yang kami ambil selalu mempertimbangkan dampaknya untuk tanah, air, dan petani yang bekerja bersama kami.
        </p>

        <div class="commitment-list">

          <div class="commitment-item">
            <div class="commitment-item-icon"><i class="fas fa-seedling"></i></div>
            <div>
              <h4>Tanpa Pestisida Kimia</h4>
              <p>Kami gunakan pestisida nabati dan pengendalian hayati untuk menjaga tanaman dari hama.</p>
            </div>
          </div>

          <div class="commitment-item">
            <div class="commitment-item-icon"><i class="fas fa-droplet"></i></div>
            <div>
              <h4>Irigasi Tetes Hemat Air</h4>
              <p>Sistem irigasi kami menghemat 40% air dibanding cara konvensional.</p>
            </div>
          </div>

          <div class="commitment-item">
            <div class="commitment-item-icon"><i class="fas fa-hand-holding-heart"></i></div>
            <div>
              <h4>Harga Adil untuk Petani</h4>
              <p>Kami beli hasil panen petani mitra 15% di atas harga pasar untuk memastikan mereka sejahtera.</p>
            </div>
          </div>

          <div class="commitment-item">
            <div class="commitment-item-icon"><i class="fas fa-recycle"></i></div>
            <div>
              <h4>Kemasan Ramah Lingkungan</h4>
              <p>Kami pakai kemasan kertas daur ulang dan botol kaca yang bisa dikembalikan untuk dipakai ulang.</p>
            </div>
          </div>

        </div>
      </div>

      <div class="commitment-visual reveal">
        <div class="commitment-img">
          <img src="https://images.unsplash.com/photo-1592982537447-7440770cbfc9?w=800&q=80" alt="">
        </div>

        <div class="commitment-badge">
          <div class="commitment-badge-label">Berkelanjutan</div>
          <div class="commitment-badge-value">100%</div>
          <div class="commitment-badge-sub">Kebun kami bebas<br>pestisida kimia</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- TIM -->
<section class="section team">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Orang-Orang di Baliknya</div>
      <h2>
        Mereka yang <em>merawat tanah setiap hari.</em>
      </h2>
      <p>Di balik setiap sayur dan biji kopi yang Anda terima, ada orang-orang yang bangun pukul empat pagi untuk memulai harinya di kebun.</p>
    </div>

    <div class="team-grid">

      <div class="team-card reveal">
        <div class="team-photo">
          <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?w=600&q=80" alt="">
        </div>
        <h3>Pak Sukardi</h3>
        <div class="team-role">Pendiri</div>
        <div class="team-info">
          Memulai kebun pertama pada 1995. Masih turun ke ladang setiap pagi.
        </div>
      </div>

      <div class="team-card reveal">
        <div class="team-photo">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80" alt="">
        </div>
        <h3>Bayu Sukardi</h3>
        <div class="team-role">Direktur Utama</div>
        <div class="team-info">
          Generasi ketiga. Sarjana pertanian yang membawa Bumi Tani ke era digital.
        </div>
      </div>

      <div class="team-card reveal">
        <div class="team-photo">
          <img src="https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?w=600&q=80" alt="">
        </div>
        <h3>Bu Sri Rahayu</h3>
        <div class="team-role">Kepala Kebun</div>
        <div class="team-info">
          Sudah 20 tahun mengelola kebun sayur. Ahli dalam rotasi tanaman dan kompos.
        </div>
      </div>

      <div class="team-card reveal">
        <div class="team-photo">
          <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&q=80" alt="">
        </div>
        <h3>Pak Hendra</h3>
        <div class="team-role">Kepala Peternakan</div>
        <div class="team-info">
          Merawat 60 sapi perah kami. Percaya bahwa susu enak dimulai dari sapi yang bahagia.
        </div>
      </div>

    </div>
  </div>
</section>

<!-- QUOTES -->
<section class="section quotes">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Kata Mitra & Pelanggan</div>
      <h2>
        Apa yang mereka <em>bilang tentang kami.</em>
      </h2>
    </div>

    <div class="quotes-grid">

      <div class="quote-card reveal">
        <div class="quote-mark">"</div>
        <p class="quote-text">
          Kami sudah bekerja dengan banyak pemasok sayur untuk restoran kami. Bumi Tani adalah satu-satunya yang benar-benar konsisten soal kualitas dan ketepatan waktu.
        </p>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=68" alt="">
          <div>
            <div class="name">Chef Andra Wijaya</div>
            <div class="role">Restoran Fine Dining, Jakarta</div>
          </div>
        </div>
      </div>

      <div class="quote-card reveal">
        <div class="quote-mark">"</div>
        <p class="quote-text">
          Sebagai petani mitra, saya merasa dihargai. Harga yang mereka bayar selalu di atas pasar, dan pembayaran tidak pernah telat. Itu jarang di industri ini.
        </p>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=52" alt="">
          <div>
            <div class="name">Pak Wagiman</div>
            <div class="role">Petani Mitra, Ciwidey</div>
          </div>
        </div>
      </div>

      <div class="quote-card reveal">
        <div class="quote-mark">"</div>
        <p class="quote-text">
          Saya langganan paket sayur mingguan sejak pandemi. Rasanya beda sekali dengan sayur supermarket. Anak saya yang dulu tidak suka sayur sekarang mau makan wortel mentah.
        </p>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=47" alt="">
          <div>
            <div class="name">Ibu Ratna Kusuma</div>
            <div class="role">Pelanggan Setia, Bandung</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- NUMBERS -->
<section class="numbers">
  <div class="numbers-grid">

    <div class="number-item reveal">
      <div class="num"><span class="counter" data-target="30">0</span><span>+</span></div>
      <div class="lbl">Tahun bertani<br>di tanah yang sama</div>
    </div>

    <div class="number-item reveal">
      <div class="num"><span class="counter" data-target="240">0</span><span>+</span></div>
      <div class="lbl">Petani mitra<br>di seluruh Jawa</div>
    </div>

    <div class="number-item reveal">
      <div class="num"><span class="counter" data-target="18">0</span></div>
      <div class="lbl">Hektar lahan<br>yang kami kelola</div>
    </div>

    <div class="number-item reveal">
      <div class="num"><span class="counter" data-target="100">0</span><span>%</span></div>
      <div class="lbl">Bebas pestisida<br>kimia sintetis</div>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="cta" id="kontak">
  <div class="wrap">
    <div class="cta-inner reveal">
      <div class="sec-eyebrow">Mari Bekerja Sama</div>
      <h2>
        Butuh pemasok pangan <em>yang bisa dipercaya?</em>
      </h2>
      <p>
        Kami menerima kerja sama dengan restoran, hotel, katering, dan retail. Untuk pelanggan rumah tangga, tersedia langganan paket sayur mingguan yang diantar langsung ke rumah Anda.
      </p>
      <div class="cta-actions">
        <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2014" class="btn btn-forest" target="_blank">
          <i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
        </a>
        <a href="mailto:halo@bumitani.id" class="btn btn-outline">
          <i class="fas fa-envelope"></i> Kirim Email
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
        <div class="brand-mark"><i class="fas fa-seedling"></i></div>
        <div class="brand-text">
          Bumi Tani
          <small>Nusantara · Est. 1995</small>
        </div>
      </div>
      <p class="footer-desc">
        Perusahaan agrikultur yang mengelola kebun kopi, sayur organik, dan peternakan di Lembang, Jawa Barat. Bertani dengan sabar sejak 1995.
      </p>
      <div class="footer-cert">
        <strong>Sertifikasi:</strong><br>
        Organik Indonesia (INOFICE)<br>
        HACCP Food Safety<br>
        Fair Trade Certified
      </div>
    </div>

    <div class="footer-col">
      <h4>Produk</h4>
      <ul>
        <li><a href="#">Kopi Single Origin</a></li>
        <li><a href="#">Sayur Organik</a></li>
        <li><a href="#">Susu Segar</a></li>
        <li><a href="#">Beras Merah</a></li>
        <li><a href="#">Madu Hutan</a></li>
        <li><a href="#">Rempah Segar</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Perusahaan</h4>
      <ul>
        <li><a href="#">Cerita Kami</a></li>
        <li><a href="#">Tim</a></li>
        <li><a href="#">Kebun & Fasilitas</a></li>
        <li><a href="#">Karier</a></li>
        <li><a href="#">Jurnal Tani</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>

    <div class="footer-col footer-contact">
      <h4>Hubungi Kami</h4>
      <p><i class="fas fa-location-dot"></i> Jl. Raya Lembang 245<br>Lembang, Bandung Barat 40391</p>
      <p><i class="fas fa-phone"></i> (022) 555-0180</p>
      <p><i class="fab fa-whatsapp"></i> +62 812 3456 7890</p>
      <p><i class="fas fa-envelope"></i> halo@bumitani.id</p>
    </div>

  </div>

  <div class="footer-bottom">
    <div>© 2025 Bumi Tani Nusantara. Semua hak dilindungi.</div>
    <div class="footer-social">
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
    </div>
  </div>
</footer>

<!-- FLOAT -->
<div class="float-group">
  <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2014" class="float-btn" target="_blank" aria-label="WhatsApp">
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