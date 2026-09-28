@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aksara Properti — Rumah & Investasi Properti Terpercaya</title>
<meta name="description" content="Aksara Properti — agen properti terpercaya untuk jual-beli rumah, apartemen, dan properti komersial di Jabodetabek.">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --bg: #14110d;
  --bg-2: #1c1814;
  --bg-3: #262019;
  --bg-4: #322a20;
  --line: #2f2820;
  --line-2: #443a2c;
  --ink: #f5efe6;
  --ink-2: #c9bda9;
  --ink-3: #8a7d6a;
  --ink-4: #5a5044;
  --gold: #b8935a;
  --gold-2: #d4b078;
  --gold-soft: #d9be8c;
  --paper: #ede5d6;
  --serif: 'Cormorant Garamond', Georgia, serif;
  --sans: 'Inter', -apple-system, sans-serif;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--sans);
  background: var(--bg);
  color: var(--ink);
  font-size: 16px;
  line-height: 1.65;
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

::selection { background: var(--gold); color: var(--bg); }
a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }
button { font-family: inherit; cursor: pointer; }

/* ============ LAYOUT ============ */
.wrap {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 40px;
}

/* ============ TOP BAR ============ */
.topbar {
  background: var(--bg-2);
  border-bottom: 1px solid var(--line);
  padding: 14px 0;
  font-size: 13px;
}

.topbar-inner {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 16px;
}

.topbar-left {
  display: flex;
  gap: 28px;
  flex-wrap: wrap;
}

.topbar-item {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: var(--ink-3);
}

.topbar-item i {
  color: var(--gold);
  font-size: 12px;
}

.topbar-right {
  display: flex;
  gap: 20px;
  align-items: center;
}

.topbar-right a {
  color: var(--ink-2);
  transition: color 0.2s;
}

.topbar-right a:hover { color: var(--gold-2); }

.topbar-lang {
  padding: 4px 10px;
  border: 1px solid var(--line-2);
  border-radius: 4px;
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
  transition: padding 0.3s;
  padding: 20px 0;
}

.nav.scrolled {
  padding: 14px 0;
  background: rgba(20, 17, 13, 0.96);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
}

.nav-inner {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
}

.brand {
  display: flex;
  align-items: center;
  gap: 14px;
  flex-shrink: 0;
}

.brand-mark {
  width: 44px;
  height: 44px;
  border: 1px solid var(--gold);
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--gold);
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 600;
  position: relative;
}

.brand-mark::after {
  content: '';
  position: absolute;
  inset: 4px;
  border: 1px solid var(--line-2);
  border-radius: 3px;
  opacity: 0.4;
}

.brand-text {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: 0.02em;
  line-height: 1.1;
}

.brand-text small {
  display: block;
  font-family: var(--sans);
  font-size: 10px;
  font-weight: 500;
  color: var(--gold);
  letter-spacing: 0.28em;
  text-transform: uppercase;
  margin-top: 4px;
}

.nav-menu {
  display: flex;
  gap: 34px;
  list-style: none;
  align-items: center;
  flex: 1;
  justify-content: center;
}

.nav-menu a {
  font-size: 13px;
  font-weight: 500;
  color: var(--ink-2);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  transition: color 0.2s;
  position: relative;
}

.nav-menu a::after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 0;
  right: 0;
  height: 1px;
  background: var(--gold);
  transform: scaleX(0);
  transition: transform 0.3s;
}

.nav-menu a:hover { color: var(--gold-2); }
.nav-menu a:hover::after { transform: scaleX(1); }

.nav-cta {
  padding: 13px 26px;
  border: 1px solid var(--gold);
  color: var(--gold-2);
  border-radius: 4px;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  transition: all 0.25s;
  white-space: nowrap;
}

.nav-cta:hover {
  background: var(--gold);
  color: var(--bg);
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
  padding: 100px 0 120px;
  position: relative;
  overflow: hidden;
  border-bottom: 1px solid var(--line);
}

.hero-bg-number {
  position: absolute;
  top: 20px;
  right: 40px;
  font-family: var(--serif);
  font-size: 400px;
  font-weight: 500;
  color: var(--bg-2);
  line-height: 1;
  letter-spacing: -0.05em;
  pointer-events: none;
  user-select: none;
  z-index: 0;
}

.hero-inner {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: 80px;
  align-items: center;
}

.hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 14px;
  font-family: var(--sans);
  font-size: 11px;
  font-weight: 600;
  color: var(--gold);
  letter-spacing: 0.32em;
  text-transform: uppercase;
  margin-bottom: 36px;
}

.hero-eyebrow::before {
  content: '';
  width: 40px;
  height: 1px;
  background: var(--gold);
}

.hero h1 {
  font-family: var(--serif);
  font-size: clamp(48px, 6.5vw, 92px);
  font-weight: 500;
  line-height: 0.98;
  letter-spacing: -0.02em;
  color: var(--ink);
  margin-bottom: 36px;
}

.hero h1 em {
  font-style: italic;
  font-weight: 400;
  color: var(--gold-2);
}

.hero-lede {
  font-size: 17px;
  color: var(--ink-2);
  max-width: 520px;
  line-height: 1.8;
  margin-bottom: 44px;
}

.hero-actions {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
  margin-bottom: 60px;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  padding: 17px 32px;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  border: 1px solid transparent;
  border-radius: 4px;
  transition: all 0.25s;
  cursor: pointer;
  font-family: inherit;
  white-space: nowrap;
}

.btn-gold {
  background: var(--gold);
  color: var(--bg);
  border-color: var(--gold);
}

.btn-gold:hover {
  background: var(--gold-2);
  border-color: var(--gold-2);
  transform: translateY(-2px);
}

.btn-outline {
  background: transparent;
  color: var(--ink);
  border-color: var(--line-2);
}

.btn-outline:hover {
  border-color: var(--gold);
  color: var(--gold-2);
}

.hero-stats {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
  padding-top: 40px;
  border-top: 1px solid var(--line);
}

.hero-stat {
  padding: 0 24px;
  border-right: 1px solid var(--line);
}

.hero-stat:first-child { padding-left: 0; }
.hero-stat:last-child { border-right: none; }

.hero-stat-num {
  font-family: var(--serif);
  font-size: 42px;
  font-weight: 500;
  color: var(--ink);
  line-height: 1;
  letter-spacing: -0.02em;
  margin-bottom: 10px;
  display: flex;
  align-items: baseline;
  gap: 4px;
}

.hero-stat-num span {
  color: var(--gold);
  font-size: 26px;
}

.hero-stat-lbl {
  font-size: 12px;
  color: var(--ink-3);
  letter-spacing: 0.05em;
  line-height: 1.5;
}

/* Hero visual */
.hero-visual {
  position: relative;
}

.hero-photo-main {
  border-radius: 4px;
  overflow: hidden;
  aspect-ratio: 4 / 5;
  position: relative;
  background: var(--bg-3);
}

.hero-photo-main img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 1s;
}

.hero-photo-main:hover img { transform: scale(1.04); }

.hero-photo-label {
  position: absolute;
  top: 24px;
  left: 24px;
  padding: 8px 14px;
  background: rgba(20, 17, 13, 0.85);
  border: 1px solid var(--gold);
  color: var(--gold-2);
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.24em;
  text-transform: uppercase;
  backdrop-filter: blur(10px);
}

.hero-photo-info {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 32px 28px;
  background: linear-gradient(to top, rgba(20, 17, 13, 0.95), transparent 90%);
  color: var(--ink);
}

.hero-photo-info h3 {
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 500;
  color: #fff;
  letter-spacing: -0.01em;
  margin-bottom: 6px;
}

.hero-photo-info .meta {
  display: flex;
  gap: 18px;
  font-size: 13px;
  color: var(--ink-2);
  flex-wrap: wrap;
}

.hero-photo-info .meta span {
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.hero-photo-info .meta i {
  color: var(--gold-2);
  font-size: 11px;
}

.hero-photo-side {
  position: absolute;
  bottom: -40px;
  right: -40px;
  width: 200px;
  height: 260px;
  border-radius: 4px;
  overflow: hidden;
  border: 6px solid var(--bg);
  background: var(--bg-3);
  box-shadow: 0 30px 60px -20px rgba(0, 0, 0, 0.5);
}

.hero-photo-side img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* ============ SEARCH BAR ============ */
.search-section {
  padding: 0 0 100px;
  margin-top: -60px;
  position: relative;
  z-index: 2;
}

.search-box {
  background: var(--bg-2);
  border: 1px solid var(--line);
  border-radius: 4px;
  padding: 32px 40px;
  box-shadow: 0 30px 60px -20px rgba(0, 0, 0, 0.4);
}

.search-label {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.24em;
  text-transform: uppercase;
  color: var(--gold);
  margin-bottom: 22px;
}

.search-label::before {
  content: '';
  width: 30px;
  height: 1px;
  background: var(--gold);
}

.search-grid {
  display: grid;
  grid-template-columns: 1.3fr 1fr 1fr 1fr auto;
  gap: 0;
  align-items: center;
  border: 1px solid var(--line-2);
  border-radius: 3px;
  overflow: hidden;
}

.search-field {
  padding: 16px 22px;
  border-right: 1px solid var(--line-2);
  background: var(--bg);
}

.search-field:last-child { border-right: none; }

.search-field label {
  display: block;
  font-size: 10px;
  font-weight: 600;
  color: var(--ink-3);
  letter-spacing: 0.16em;
  text-transform: uppercase;
  margin-bottom: 6px;
}

.search-field select,
.search-field input {
  width: 100%;
  background: transparent;
  border: none;
  color: var(--ink);
  font-family: inherit;
  font-size: 14px;
  font-weight: 500;
  outline: none;
  cursor: pointer;
  -webkit-appearance: none;
  appearance: none;
}

.search-field input::placeholder { color: var(--ink-4); }

.search-field select {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10' viewBox='0 0 24 24' fill='none' stroke='%23b8935a' stroke-width='2.5'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right center;
  padding-right: 20px;
}

.search-field select option {
  background: var(--bg);
  color: var(--ink);
}

.search-btn {
  padding: 24px 32px;
  background: var(--gold);
  color: var(--bg);
  border: none;
  font-family: inherit;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  cursor: pointer;
  transition: background 0.2s;
  display: flex;
  align-items: center;
  gap: 10px;
  height: 100%;
}

.search-btn:hover { background: var(--gold-2); }

/* ============ SECTION ============ */
.section {
  padding: 110px 0;
  border-bottom: 1px solid var(--line);
}

.section-head {
  margin-bottom: 72px;
  max-width: 780px;
}

.section-head.center {
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

.sec-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 14px;
  font-size: 11px;
  font-weight: 600;
  color: var(--gold);
  letter-spacing: 0.32em;
  text-transform: uppercase;
  margin-bottom: 24px;
}

.sec-eyebrow::before {
  content: '';
  width: 32px;
  height: 1px;
  background: var(--gold);
}

.section-head.center .sec-eyebrow::before { display: none; }

.section-head h2 {
  font-family: var(--serif);
  font-size: clamp(36px, 5vw, 60px);
  font-weight: 500;
  line-height: 1.05;
  letter-spacing: -0.02em;
  color: var(--ink);
  margin-bottom: 22px;
}

.section-head h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--gold-2);
}

.section-head p {
  font-size: 17px;
  color: var(--ink-2);
  line-height: 1.8;
}

/* ============ LISTING ============ */
.listings {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 32px;
}

.listing {
  background: var(--bg-2);
  border: 1px solid var(--line);
  border-radius: 4px;
  overflow: hidden;
  transition: all 0.35s;
  cursor: pointer;
  display: flex;
  flex-direction: column;
}

.listing:hover {
  border-color: var(--gold);
  transform: translateY(-6px);
  box-shadow: 0 30px 60px -30px rgba(184, 147, 90, 0.3);
}

.listing-photo {
  aspect-ratio: 4 / 3;
  overflow: hidden;
  position: relative;
  background: var(--bg-3);
}

.listing-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.8s;
}

.listing:hover .listing-photo img { transform: scale(1.06); }

.listing-tag {
  position: absolute;
  top: 16px;
  left: 16px;
  padding: 6px 12px;
  background: var(--bg);
  color: var(--gold-2);
  border: 1px solid var(--gold);
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.18em;
  text-transform: uppercase;
}

.listing-tag.primary {
  background: var(--gold);
  color: var(--bg);
  border-color: var(--gold);
}

.listing-fav {
  position: absolute;
  top: 16px;
  right: 16px;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: rgba(20, 17, 13, 0.8);
  border: 1px solid var(--line-2);
  color: var(--ink-2);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  transition: all 0.25s;
  backdrop-filter: blur(10px);
  cursor: pointer;
}

.listing-fav:hover,
.listing-fav.active {
  background: var(--gold);
  border-color: var(--gold);
  color: var(--bg);
}

.listing-body {
  padding: 26px 24px 28px;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.listing-price {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 600;
  color: var(--gold-2);
  letter-spacing: -0.01em;
  margin-bottom: 14px;
  line-height: 1;
}

.listing h3 {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 500;
  color: var(--ink);
  letter-spacing: -0.01em;
  line-height: 1.25;
  margin-bottom: 10px;
}

.listing-loc {
  font-size: 13px;
  color: var(--ink-3);
  display: flex;
  align-items: center;
  gap: 6px;
  margin-bottom: 20px;
}

.listing-loc i {
  color: var(--gold);
  font-size: 11px;
}

.listing-specs {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
  padding: 18px 0;
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  margin-bottom: 20px;
}

.listing-spec {
  text-align: center;
  border-right: 1px solid var(--line);
  font-size: 12px;
  color: var(--ink-2);
  padding: 0 8px;
}

.listing-spec:last-child { border-right: none; }

.listing-spec i {
  display: block;
  color: var(--gold);
  font-size: 15px;
  margin-bottom: 6px;
}

.listing-spec strong {
  color: var(--ink);
  font-weight: 600;
  font-size: 14px;
}

.listing-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 4px;
  font-size: 12px;
  color: var(--ink-3);
}

.listing-footer .agent {
  display: flex;
  align-items: center;
  gap: 8px;
}

.listing-footer .agent img {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  object-fit: cover;
}

.listing-link {
  color: var(--gold-2);
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  font-size: 11px;
  transition: gap 0.2s;
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.listing:hover .listing-link { gap: 12px; }

/* ============ LAYANAN ============ */
.services {
  background: var(--bg-2);
}

.services-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  border: 1px solid var(--line);
}

.service-block {
  padding: 48px 44px;
  border-bottom: 1px solid var(--line);
  border-right: 1px solid var(--line);
  transition: background 0.3s;
  position: relative;
}

.service-block:nth-child(2n) { border-right: none; }
.service-block:nth-last-child(-n+2) { border-bottom: none; }

.service-block:hover { background: var(--bg-3); }

.service-num {
  font-family: var(--serif);
  font-size: 14px;
  font-weight: 500;
  color: var(--gold);
  letter-spacing: 0.16em;
  margin-bottom: 24px;
  display: flex;
  align-items: center;
  gap: 12px;
}

.service-num::before {
  content: '';
  width: 24px;
  height: 1px;
  background: var(--gold);
}

.service-block h3 {
  font-family: var(--serif);
  font-size: 30px;
  font-weight: 500;
  color: var(--ink);
  letter-spacing: -0.015em;
  line-height: 1.15;
  margin-bottom: 18px;
}

.service-block p {
  font-size: 15px;
  color: var(--ink-2);
  line-height: 1.75;
  margin-bottom: 26px;
}

.service-list {
  list-style: none;
  display: grid;
  gap: 10px;
}

.service-list li {
  font-size: 14px;
  color: var(--ink-2);
  display: flex;
  align-items: flex-start;
  gap: 12px;
  line-height: 1.5;
}

.service-list li i {
  color: var(--gold);
  font-size: 10px;
  margin-top: 7px;
}

/* ============ KEUNGGULAN ============ */
.about-grid {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: 90px;
  align-items: center;
}

.about-visual {
  position: relative;
}

.about-photo {
  border-radius: 4px;
  overflow: hidden;
  aspect-ratio: 4 / 5;
  position: relative;
}

.about-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.about-badge {
  position: absolute;
  bottom: -30px;
  right: -30px;
  width: 180px;
  height: 180px;
  background: var(--gold);
  color: var(--bg);
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  border: 8px solid var(--bg);
  transform: rotate(-6deg);
}

.about-badge-num {
  font-family: var(--serif);
  font-size: 52px;
  font-weight: 600;
  line-height: 1;
  letter-spacing: -0.03em;
}

.about-badge-lbl {
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  margin-top: 6px;
}

.about-text h2 {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 500;
  line-height: 1.08;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 28px;
}

.about-text h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--gold-2);
}

.about-text > p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.85;
  margin-bottom: 24px;
}

.about-text > p:first-of-type::first-letter {
  font-family: var(--serif);
  font-size: 72px;
  font-weight: 500;
  float: left;
  line-height: 0.85;
  padding: 8px 14px 0 0;
  color: var(--gold);
}

.about-facts {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  margin-top: 40px;
  border-top: 1px solid var(--line);
}

.about-fact {
  padding: 24px 0;
  border-bottom: 1px solid var(--line);
}

.about-fact:nth-child(odd) {
  border-right: 1px solid var(--line);
  padding-right: 24px;
}

.about-fact:nth-child(even) {
  padding-left: 24px;
}

.about-fact-num {
  font-family: var(--serif);
  font-size: 36px;
  font-weight: 500;
  color: var(--ink);
  line-height: 1;
  letter-spacing: -0.02em;
  margin-bottom: 8px;
}

.about-fact-num span { color: var(--gold); }

.about-fact-lbl {
  font-size: 13px;
  color: var(--ink-3);
  line-height: 1.5;
}

/* ============ AGEN ============ */
.agents-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}

.agent-card {
  text-align: center;
}

.agent-photo {
  aspect-ratio: 4 / 5;
  border-radius: 4px;
  overflow: hidden;
  background: var(--bg-3);
  margin-bottom: 20px;
  position: relative;
}

.agent-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s;
}

.agent-card:hover .agent-photo img { transform: scale(1.05); }

.agent-card h3 {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 500;
  color: var(--ink);
  letter-spacing: -0.01em;
  margin-bottom: 4px;
}

.agent-card .role {
  font-size: 11px;
  color: var(--gold);
  letter-spacing: 0.22em;
  text-transform: uppercase;
  font-weight: 600;
  margin-bottom: 10px;
}

.agent-card .contact {
  font-size: 13px;
  color: var(--ink-3);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
}

.agent-card .contact i {
  color: var(--gold-2);
  font-size: 11px;
}

/* ============ QUOTES ============ */
.quotes {
  background: var(--bg-2);
}

.quotes-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
  border: 1px solid var(--line);
}

.quote-card {
  padding: 48px 40px;
  border-right: 1px solid var(--line);
  position: relative;
  transition: background 0.3s;
}

.quote-card:last-child { border-right: none; }
.quote-card:hover { background: var(--bg-3); }

.quote-mark {
  font-family: var(--serif);
  font-size: 80px;
  line-height: 0.5;
  color: var(--gold);
  opacity: 0.4;
  margin-bottom: 20px;
  font-weight: 500;
}

.quote-text {
  font-family: var(--serif);
  font-size: 19px;
  font-weight: 400;
  font-style: italic;
  line-height: 1.55;
  color: var(--ink);
  letter-spacing: -0.005em;
  margin-bottom: 30px;
}

.quote-author {
  display: flex;
  align-items: center;
  gap: 14px;
  padding-top: 24px;
  border-top: 1px solid var(--line);
}

.quote-author img {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  object-fit: cover;
}

.quote-author .name {
  font-family: var(--serif);
  font-size: 17px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.005em;
}

.quote-author .role {
  font-size: 11px;
  color: var(--ink-3);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-top: 3px;
}

/* ============ CTA ============ */
.cta {
  padding: 120px 0;
  background: var(--bg);
  position: relative;
  overflow: hidden;
}

.cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(var(--line) 1px, transparent 1px),
    linear-gradient(90deg, var(--line) 1px, transparent 1px);
  background-size: 80px 80px;
  opacity: 0.4;
  mask-image: radial-gradient(ellipse at center, #000 20%, transparent 70%);
  -webkit-mask-image: radial-gradient(ellipse at center, #000 20%, transparent 70%);
}

.cta-inner {
  position: relative;
  max-width: 780px;
  margin: 0 auto;
  text-align: center;
}

.cta-inner .sec-eyebrow {
  justify-content: center;
}

.cta-inner h2 {
  font-family: var(--serif);
  font-size: clamp(36px, 5vw, 60px);
  font-weight: 500;
  line-height: 1.05;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 24px;
}

.cta-inner h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--gold-2);
}

.cta-inner p {
  font-size: 17px;
  color: var(--ink-2);
  line-height: 1.8;
  margin-bottom: 44px;
}

.cta-actions {
  display: flex;
  gap: 16px;
  justify-content: center;
  flex-wrap: wrap;
}

/* ============ FOOTER ============ */
.footer {
  background: var(--bg-2);
  border-top: 1px solid var(--line);
  padding: 80px 0 32px;
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.3fr;
  gap: 64px;
  padding-bottom: 56px;
  border-bottom: 1px solid var(--line);
  margin-bottom: 32px;
}

.footer-brand {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 22px;
}

.footer-desc {
  font-size: 14px;
  color: var(--ink-3);
  line-height: 1.75;
  max-width: 340px;
  margin-bottom: 26px;
}

.footer-license {
  padding: 16px 18px;
  background: var(--bg);
  border: 1px solid var(--line);
  border-radius: 4px;
  font-size: 12px;
  color: var(--ink-3);
  line-height: 1.7;
}

.footer-license strong {
  color: var(--gold-2);
  font-weight: 600;
  letter-spacing: 0.05em;
}

.footer-col h4 {
  font-family: var(--sans);
  font-size: 11px;
  font-weight: 700;
  color: var(--gold);
  letter-spacing: 0.22em;
  text-transform: uppercase;
  margin-bottom: 24px;
}

.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 13px; }

.footer-col a {
  font-size: 14px;
  color: var(--ink-2);
  transition: color 0.2s;
}

.footer-col a:hover { color: var(--gold-2); }

.footer-contact p {
  font-size: 14px;
  color: var(--ink-2);
  margin-bottom: 16px;
  display: flex;
  gap: 12px;
  align-items: flex-start;
  line-height: 1.55;
}

.footer-contact i {
  color: var(--gold);
  font-size: 13px;
  margin-top: 4px;
  width: 14px;
}

.footer-bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 16px;
  font-size: 13px;
  color: var(--ink-3);
}

.footer-social {
  display: flex;
  gap: 8px;
}

.footer-social a {
  width: 38px;
  height: 38px;
  border-radius: 4px;
  border: 1px solid var(--line-2);
  color: var(--ink-2);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  transition: all 0.2s;
}

.footer-social a:hover {
  background: var(--gold);
  border-color: var(--gold);
  color: var(--bg);
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

/* ============ WA FLOAT ============ */
.wa-float {
  position: fixed;
  bottom: 28px;
  right: 28px;
  width: 56px;
  height: 56px;
  background: var(--gold);
  color: var(--bg);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  box-shadow: 0 14px 32px -10px rgba(184, 147, 90, 0.5);
  z-index: 200;
  transition: all 0.25s;
}

.wa-float:hover {
  background: var(--gold-2);
  transform: translateY(-3px) scale(1.05);
}

/* ============ RESPONSIVE ============ */
@media (max-width: 1100px) {
  .hero-inner { grid-template-columns: 1fr; gap: 60px; }
  .hero-visual { max-width: 480px; margin: 0 auto; }
  .hero-bg-number { font-size: 300px; }
  .search-grid { grid-template-columns: 1fr 1fr; }
  .search-field { border-right: none; border-bottom: 1px solid var(--line-2); }
  .search-field:nth-child(odd) { border-right: 1px solid var(--line-2); }
  .search-btn { grid-column: span 2; justify-content: center; }
  .listings { grid-template-columns: repeat(2, 1fr); }
  .services-grid { grid-template-columns: 1fr; }
  .service-block { border-right: none; }
  .about-grid { grid-template-columns: 1fr; gap: 70px; }
  .about-visual { max-width: 480px; margin: 0 auto; }
  .agents-grid { grid-template-columns: repeat(2, 1fr); }
  .quotes-grid { grid-template-columns: 1fr; }
  .quote-card { border-right: none; border-bottom: 1px solid var(--line); }
  .quote-card:last-child { border-bottom: none; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 48px; }
  .footer-grid > div:first-child { grid-column: span 2; }
}

@media (max-width: 768px) {
  .wrap, .topbar-inner, .nav-inner { padding: 0 20px; }

  .topbar-left { display: none; }

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
    gap: 0;
    border-left: 1px solid var(--line);
    transition: right 0.35s;
    z-index: 99;
    align-items: stretch;
    justify-content: flex-start;
  }

  .nav-menu.open { display: flex; }

  .nav-menu li {
    border-bottom: 1px solid var(--line);
  }

  .nav-menu a {
    padding: 18px 0;
    font-size: 13px;
    display: block;
    color: var(--ink-2);
  }

  .nav-menu a::after { display: none; }

  .nav-cta { display: none; }
  .nav-toggle { display: block; z-index: 1001; }

  .hero { padding: 60px 0 80px; }
  .hero-bg-number { display: none; }
  .hero h1 { font-size: 44px; }
  .hero-photo-side { width: 140px; height: 180px; bottom: -20px; right: -20px; border-width: 4px; }

  .section { padding: 72px 0; }

  .search-section { padding-bottom: 60px; margin-top: -40px; }
  .search-box { padding: 24px 20px; }
  .search-grid { grid-template-columns: 1fr; }
  .search-field { border-right: none !important; }
  .search-btn { grid-column: span 1; padding: 18px 24px; }

  .listings { grid-template-columns: 1fr; gap: 24px; }
  .agents-grid { grid-template-columns: 1fr; }

  .hero-stats { grid-template-columns: 1fr; gap: 0; }
  .hero-stat {
    padding: 20px 0;
    border-right: none;
    border-bottom: 1px solid var(--line);
  }
  .hero-stat:last-child { border-bottom: none; }
  .hero-stat-num { font-size: 34px; }

  .about-badge { width: 130px; height: 130px; bottom: -20px; right: -20px; }
  .about-badge-num { font-size: 38px; }
  .about-badge-lbl { font-size: 9px; }

  .footer-grid { grid-template-columns: 1fr; gap: 40px; }
  .footer-grid > div:first-child { grid-column: span 1; }

  .cta { padding: 72px 0; }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 36px; }
  .section-head h2 { font-size: 32px; }
  .service-block { padding: 32px 24px; }
  .quote-card { padding: 32px 24px; }
  .about-badge { display: none; }
  .brand-text { font-size: 18px; }
  .brand-mark { width: 38px; height: 38px; font-size: 18px; }
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <div class="topbar-inner">
    <div class="topbar-left">
      <span class="topbar-item">
        <i class="fas fa-phone"></i> (021) 555-0177
      </span>
      <span class="topbar-item">
        <i class="fas fa-envelope"></i> info@aksaraproperti.id
      </span>
      <span class="topbar-item">
        <i class="fas fa-location-dot"></i> SCBD, Jakarta Selatan
      </span>
    </div>
    <div class="topbar-right">
      <a href="#" class="topbar-lang">ID</a>
      <a href="#kontak">Jadwalkan Kunjungan</a>
    </div>
  </div>
</div>

<!-- NAV -->
<nav class="nav" id="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <div class="brand-mark">A</div>
      <div class="brand-text">
        Aksara
        <small>Properti</small>
      </div>
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#listing">Properti</a></li>
      <li><a href="#layanan">Layanan</a></li>
      <li><a href="#tentang">Tentang</a></li>
      <li><a href="#agen">Agen</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>

    <a href="#kontak" class="nav-cta">Konsultasi Gratis</a>

    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="hero-bg-number">A</div>

  <div class="wrap">
    <div class="hero-inner">

      <div class="hero-text reveal">
        <div class="hero-eyebrow">Est. 2008 — Properti Terpercaya</div>

        <h1>
          Menemukan rumah <em>yang tepat</em> untuk hidup Anda.
        </h1>

        <p class="hero-lede">
          Aksara Properti membantu keluarga dan investor menemukan properti yang sesuai kebutuhan — bukan sekadar yang tersedia. Kami menangani jual-beli, sewa, dan investasi properti di Jabodetabek.
        </p>

        <div class="hero-actions">
          <a href="#listing" class="btn btn-gold">
            Lihat Properti <i class="fas fa-arrow-right"></i>
          </a>
          <a href="#kontak" class="btn btn-outline">
            Jadwalkan Tur
          </a>
        </div>

        <div class="hero-stats">
          <div class="hero-stat">
            <div class="hero-stat-num"><span class="counter" data-target="17">0</span><span>+</span></div>
            <div class="hero-stat-lbl">Tahun pengalaman<br>di industri properti</div>
          </div>
          <div class="hero-stat">
            <div class="hero-stat-num"><span class="counter" data-target="2400">0</span><span>+</span></div>
            <div class="hero-stat-lbl">Transaksi berhasil<br>diselesaikan</div>
          </div>
          <div class="hero-stat">
            <div class="hero-stat-num"><span class="counter" data-target="450">0</span><span>+</span></div>
            <div class="hero-stat-lbl">Properti aktif<br>di Jabodetabek</div>
          </div>
        </div>
      </div>

      <div class="hero-visual reveal">
        <div class="hero-photo-main">
          <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?w=800&q=80" alt="">
          <div class="hero-photo-label">Featured</div>
          <div class="hero-photo-info">
            <h3>Villa Kemang Estate</h3>
            <div class="meta">
              <span><i class="fas fa-location-dot"></i> Kemang, Jakarta Selatan</span>
              <span><i class="fas fa-bed"></i> 5 KT</span>
              <span><i class="fas fa-ruler-combined"></i> 450 m²</span>
            </div>
          </div>
        </div>

        <div class="hero-photo-side">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=400&q=80" alt="">
        </div>
      </div>

    </div>
  </div>
</header>

<!-- SEARCH BAR -->
<section class="search-section">
  <div class="wrap">
    <div class="search-box reveal">
      <div class="search-label">Cari Properti</div>
      <form class="search-grid" onsubmit="event.preventDefault(); alert('Pencarian Anda sedang diproses.')">

        <div class="search-field">
          <label>Lokasi</label>
          <input type="text" placeholder="Jakarta, Bogor, Depok...">
        </div>

        <div class="search-field">
          <label>Jenis</label>
          <select>
            <option>Rumah</option>
            <option>Apartemen</option>
            <option>Ruko</option>
            <option>Tanah</option>
            <option>Villa</option>
          </select>
        </div>

        <div class="search-field">
          <label>Kamar</label>
          <select>
            <option>Semua</option>
            <option>1+</option>
            <option>2+</option>
            <option>3+</option>
            <option>4+</option>
          </select>
        </div>

        <div class="search-field">
          <label>Harga Maks</label>
          <select>
            <option>Tanpa batas</option>
            <option>&lt; 1 M</option>
            <option>1 – 3 M</option>
            <option>3 – 5 M</option>
            <option>&gt; 5 M</option>
          </select>
        </div>

        <button type="submit" class="search-btn">
          <i class="fas fa-magnifying-glass"></i>
          Cari
        </button>

      </form>
    </div>
  </div>
</section>

<!-- LISTING -->
<section class="section" id="listing">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-eyebrow">Properti Pilihan</div>
      <h2>Beberapa properti <em>terbaik kami.</em></h2>
      <p>Setiap properti telah kami verifikasi legalitas, kondisi, dan harga pasarnya. Kami hanya menampilkan yang kami rekomendasikan sendiri.</p>
    </div>

    <div class="listings">

      <div class="listing reveal">
        <div class="listing-photo">
          <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?w=800&q=80" alt="">
          <div class="listing-tag primary">Hot</div>
          <button class="listing-fav" aria-label="Simpan"><i class="far fa-heart"></i></button>
        </div>
        <div class="listing-body">
          <div class="listing-price">Rp 4,8 M</div>
          <h3>Rumah Modern Kebayoran</h3>
          <div class="listing-loc">
            <i class="fas fa-location-dot"></i>
            Kebayoran Baru, Jakarta Selatan
          </div>
          <div class="listing-specs">
            <div class="listing-spec">
              <i class="fas fa-bed"></i>
              <strong>4</strong> KT
            </div>
            <div class="listing-spec">
              <i class="fas fa-bath"></i>
              <strong>3</strong> KM
            </div>
            <div class="listing-spec">
              <i class="fas fa-ruler-combined"></i>
              <strong>280</strong> m²
            </div>
          </div>
          <div class="listing-footer">
            <div class="agent">
              <img src="https://i.pravatar.cc/150?img=12" alt="">
              <span>Sarah W.</span>
            </div>
            <a href="#" class="listing-link">Detail <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="listing reveal">
        <div class="listing-photo">
          <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=800&q=80" alt="">
          <div class="listing-tag">Baru</div>
          <button class="listing-fav" aria-label="Simpan"><i class="far fa-heart"></i></button>
        </div>
        <div class="listing-body">
          <div class="listing-price">Rp 2,3 M</div>
          <h3>Apartemen Sky Garden</h3>
          <div class="listing-loc">
            <i class="fas fa-location-dot"></i>
            SCBD, Jakarta Selatan
          </div>
          <div class="listing-specs">
            <div class="listing-spec">
              <i class="fas fa-bed"></i>
              <strong>2</strong> KT
            </div>
            <div class="listing-spec">
              <i class="fas fa-bath"></i>
              <strong>2</strong> KM
            </div>
            <div class="listing-spec">
              <i class="fas fa-ruler-combined"></i>
              <strong>120</strong> m²
            </div>
          </div>
          <div class="listing-footer">
            <div class="agent">
              <img src="https://i.pravatar.cc/150?img=32" alt="">
              <span>Hendra P.</span>
            </div>
            <a href="#" class="listing-link">Detail <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="listing reveal">
        <div class="listing-photo">
          <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&q=80" alt="">
          <div class="listing-tag">Investasi</div>
          <button class="listing-fav" aria-label="Simpan"><i class="far fa-heart"></i></button>
        </div>
        <div class="listing-body">
          <div class="listing-price">Rp 6,2 M</div>
          <h3>Villa Pinggir Danau</h3>
          <div class="listing-loc">
            <i class="fas fa-location-dot"></i>
            Sentul, Bogor
          </div>
          <div class="listing-specs">
            <div class="listing-spec">
              <i class="fas fa-bed"></i>
              <strong>5</strong> KT
            </div>
            <div class="listing-spec">
              <i class="fas fa-bath"></i>
              <strong>4</strong> KM
            </div>
            <div class="listing-spec">
              <i class="fas fa-ruler-combined"></i>
              <strong>500</strong> m²
            </div>
          </div>
          <div class="listing-footer">
            <div class="agent">
              <img src="https://i.pravatar.cc/150?img=48" alt="">
              <span>Maya A.</span>
            </div>
            <a href="#" class="listing-link">Detail <i class="fas fa-arrow-right"></i></a>
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
      <div class="sec-eyebrow">Layanan Kami</div>
      <h2>Kami dampingi dari <em>awal sampai akad.</em></h2>
      <p>Bukan hanya menunjukkan properti. Kami bantu Anda menavigasi seluruh proses — dari mencari, meninjau, hingga menandatangani akta.</p>
    </div>

    <div class="services-grid">

      <div class="service-block reveal">
        <div class="service-num">01 — Pembelian</div>
        <h3>Bantu Beli Properti</h3>
        <p>Kami cari properti sesuai kriteria Anda, verifikasi legalitas, negosiasi harga, dan dampingi hingga akad jual-beli selesai.</p>
        <ul class="service-list">
          <li><i class="fas fa-circle"></i> Verifikasi sertifikat dan legalitas</li>
          <li><i class="fas fa-circle"></i> Pengecekan harga pasar</li>
          <li><i class="fas fa-circle"></i> Negosiasi atas nama Anda</li>
          <li><i class="fas fa-circle"></i> Dampingi akad di notaris</li>
        </ul>
      </div>

      <div class="service-block reveal">
        <div class="service-num">02 — Penjualan</div>
        <h3>Bantu Jual Properti</h3>
        <p>Kami pasarkan properti Anda secara profesional — foto, video, virtual tour, dan iklan berbayar di platform utama.</p>
        <ul class="service-list">
          <li><i class="fas fa-circle"></i> Foto dan video profesional</li>
          <li><i class="fas fa-circle"></i> Virtual tour 360°</li>
          <li><i class="fas fa-circle"></i> Iklan di portal properti</li>
          <li><i class="fas fa-circle"></i> Screening calon pembeli</li>
        </ul>
      </div>

      <div class="service-block reveal">
        <div class="service-num">03 — Sewa</div>
        <h3>Sewa & Kontrak</h3>
        <p>Untuk pemilik dan penyewa. Kami kelola pencarian penyewa, pembuatan kontrak, dan pengelolaan properti sewa.</p>
        <ul class="service-list">
          <li><i class="fas fa-circle"></i> Pencarian penyewa terverifikasi</li>
          <li><i class="fas fa-circle"></i> Kontrak sewa sesuai hukum</li>
          <li><i class="fas fa-circle"></i> Pengelolaan pembayaran</li>
          <li><i class="fas fa-circle"></i> Layanan perawatan properti</li>
        </ul>
      </div>

      <div class="service-block reveal">
        <div class="service-num">04 — Investasi</div>
        <h3>Konsultasi Investasi</h3>
        <p>Analisa potensi keuntungan properti, proyeksi kenaikan nilai, dan strategi portofolio untuk investor.</p>
        <ul class="service-list">
          <li><i class="fas fa-circle"></i> Analisa ROI dan yield sewa</li>
          <li><i class="fas fa-circle"></i> Proyeksi 5 dan 10 tahun</li>
          <li><i class="fas fa-circle"></i> Rekomendasi area berkembang</li>
          <li><i class="fas fa-circle"></i> Strategi diversifikasi</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- TENTANG -->
<section class="section" id="tentang">
  <div class="wrap">
    <div class="about-grid">

      <div class="about-visual reveal">
        <div class="about-photo">
          <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&q=80" alt="">
        </div>
        <div class="about-badge">
          <div class="about-badge-num">17</div>
          <div class="about-badge-lbl">Tahun</div>
        </div>
      </div>

      <div class="about-text reveal">
        <div class="sec-eyebrow">Tentang Aksara</div>
        <h2>Kami percaya properti <em>bukan sekadar transaksi.</em></h2>

        <p>
          Aksara Properti dimulai pada 2008 dari kantor kecil di Kebayoran. Saat itu hanya ada tiga agen dan satu prinsip: bangun kepercayaan dulu, jualan belakangan. Prinsip itu masih kami pegang sampai hari ini.
        </p>

        <p>
          Kami tidak mengejar jumlah transaksi terbanyak. Kami mengejar jumlah klien yang kembali untuk properti kedua, ketiga, dan seterusnya. Hampir 70% klien kami datang dari rekomendasi klien sebelumnya — angka yang membuat kami bangga.
        </p>

        <div class="about-facts">
          <div class="about-fact">
            <div class="about-fact-num">70<span>%</span></div>
            <div class="about-fact-lbl">Klien dari rekomendasi<br>pelanggan sebelumnya</div>
          </div>
          <div class="about-fact">
            <div class="about-fact-num">2.400<span>+</span></div>
            <div class="about-fact-lbl">Transaksi berhasil<br>sejak 2008</div>
          </div>
          <div class="about-fact">
            <div class="about-fact-num">32</div>
            <div class="about-fact-lbl">Agen profesional<br>tersebar di Jabodetabek</div>
          </div>
          <div class="about-fact">
            <div class="about-fact-num">14</div>
            <div class="about-fact-lbl">Penghargaan industri<br>properti nasional</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- AGEN -->
<section class="section" id="agen">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Tim Agen</div>
      <h2>Orang-orang yang akan <em>mendampingi Anda.</em></h2>
      <p>Semua agen kami bersertifikasi dan berpengalaman lebih dari lima tahun di industri properti.</p>
    </div>

    <div class="agents-grid">

      <div class="agent-card reveal">
        <div class="agent-photo">
          <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=600&q=80" alt="">
        </div>
        <h3>Sarah Wijaya</h3>
        <div class="role">Senior Agent</div>
        <div class="contact">
          <i class="fab fa-whatsapp"></i> 0812-1111-2222
        </div>
      </div>

      <div class="agent-card reveal">
        <div class="agent-photo">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=600&q=80" alt="">
        </div>
        <h3>Hendra Prasetyo</h3>
        <div class="role">Commercial Specialist</div>
        <div class="contact">
          <i class="fab fa-whatsapp"></i> 0812-3333-4444
        </div>
      </div>

      <div class="agent-card reveal">
        <div class="agent-photo">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=600&q=80" alt="">
        </div>
        <h3>Maya Anggraini</h3>
        <div class="role">Investment Advisor</div>
        <div class="contact">
          <i class="fab fa-whatsapp"></i> 0812-5555-6666
        </div>
      </div>

      <div class="agent-card reveal">
        <div class="agent-photo">
          <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=600&q=80" alt="">
        </div>
        <h3>Bayu Setiawan</h3>
        <div class="role">Residential Agent</div>
        <div class="contact">
          <i class="fab fa-whatsapp"></i> 0812-7777-8888
        </div>
      </div>

    </div>
  </div>
</section>

<!-- QUOTES -->
<section class="section quotes">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Kata Klien</div>
      <h2>Cerita mereka yang <em>sudah kami dampingi.</em></h2>
    </div>

    <div class="quotes-grid">

      <div class="quote-card reveal">
        <div class="quote-mark">"</div>
        <p class="quote-text">
          Saya sudah coba empat agen sebelum Aksara. Yang membedakan mereka adalah kesabaran. Mereka tidak memaksa saya beli yang mahal, tapi mencari yang benar-benar cocok.
        </p>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=47" alt="">
          <div>
            <div class="name">Ibu Ratna Kusuma</div>
            <div class="role">Pembeli Rumah · Kemang</div>
          </div>
        </div>
      </div>

      <div class="quote-card reveal">
        <div class="quote-mark">"</div>
        <p class="quote-text">
          Properti saya terjual dalam 6 minggu dengan harga di atas ekspektasi saya. Tim Aksara benar-benar paham cara memasarkan properti dengan serius.
        </p>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=11" alt="">
          <div>
            <div class="name">Pak Hendra Wijaya</div>
            <div class="role">Penjual Properti · Bintaro</div>
          </div>
        </div>
      </div>

      <div class="quote-card reveal">
        <div class="quote-mark">"</div>
        <p class="quote-text">
          Sebagai investor, saya butuh partner yang ngerti angka. Tim investasi Aksara memberi analisa yang jujur, termasuk risiko yang harus saya pertimbangkan.
        </p>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=52" alt="">
          <div>
            <div class="name">Pak Reza Pratama</div>
            <div class="role">Investor Properti · Jakarta</div>
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
      <div class="sec-eyebrow" style="justify-content:center;">Mulai Sekarang</div>
      <h2>
        Properti yang Anda cari, <em>mungkin sudah ada.</em>
      </h2>
      <p>
        Ceritakan kebutuhan Anda — lokasi, anggaran, jumlah kamar, atau tujuan investasi. Kami akan carikan properti yang paling sesuai dan tidak sekadar mengirim daftar panjang.
      </p>
      <div class="cta-actions">
        <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2009" class="btn btn-gold" target="_blank">
          <i class="fab fa-whatsapp"></i> Konsultasi via WhatsApp
        </a>
        <a href="tel:0215550177" class="btn btn-outline">
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
          <div class="brand-mark">A</div>
          <div class="brand-text">
            Aksara
            <small>Properti</small>
          </div>
        </div>
        <p class="footer-desc">
          Agen properti terpercaya di Jabodetabek sejak 2008. Kami bantu keluarga dan investor menemukan properti yang tepat.
        </p>
        <div class="footer-license">
          <strong>Izin Usaha:</strong><br>
          SIUP No. 503/1234/PM/2008<br>
          Anggota AREBI (Asosiasi Real Estate Broker Indonesia)
        </div>
      </div>

      <div class="footer-col">
        <h4>Properti</h4>
        <ul>
          <li><a href="#">Rumah Dijual</a></li>
          <li><a href="#">Apartemen Dijual</a></li>
          <li><a href="#">Ruko & Komersial</a></li>
          <li><a href="#">Tanah & Kavling</a></li>
          <li><a href="#">Villa & Resor</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Layanan</h4>
        <ul>
          <li><a href="#">Beli Properti</a></li>
          <li><a href="#">Jual Properti</a></li>
          <li><a href="#">Sewa & Kontrak</a></li>
          <li><a href="#">Konsultasi Investasi</a></li>
          <li><a href="#">Jasa Penilaian</a></li>
        </ul>
      </div>

      <div class="footer-col footer-contact">
        <h4>Hubungi Kami</h4>
        <p><i class="fas fa-location-dot"></i> Equity Tower Lantai 18<br>SCBD, Jakarta Selatan 12190</p>
        <p><i class="fas fa-phone"></i> (021) 555-0177</p>
        <p><i class="fab fa-whatsapp"></i> +62 812 3456 7890</p>
        <p><i class="fas fa-envelope"></i> info@aksaraproperti.id</p>
      </div>

    </div>

    <div class="footer-bottom">
      <div>© 2025 Aksara Properti. Semua hak dilindungi.</div>
      <div class="footer-social">
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- WA FLOAT -->
<a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2009" class="wa-float" target="_blank" aria-label="WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

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
      const duration = 1800;
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

// Favorite toggle
document.querySelectorAll('.listing-fav').forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.stopPropagation();
    btn.classList.toggle('active');
    const icon = btn.querySelector('i');
    icon.className = btn.classList.contains('active') ? 'fas fa-heart' : 'far fa-heart';
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