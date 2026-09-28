@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jejak Nusantara — Perjalanan yang Berkesan Seumur Hidup</title>
<meta name="description" content="Jejak Nusantara — agen perjalanan yang menyusun tur ke destinasi terbaik Indonesia dan dunia dengan pendampingan penuh.">
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;0,6..72,600;0,6..72,700;1,6..72,400;1,6..72,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --cream: #f7f2e8;
  --cream-2: #efe6d3;
  --cream-3: #e4d8be;
  --paper: #ffffff;
  --ink: #1a2e1f;
  --ink-2: #3c4a3f;
  --ink-3: #7a8271;
  --ink-4: #a8ad9e;
  --line: #ded4bc;
  --line-2: #c9bda0;
  --forest: #1e4d38;
  --forest-2: #2a6349;
  --forest-soft: #e8f0eb;
  --forest-line: #b8ccbf;
  --sand: #c9a24a;
  --sand-soft: #f7efd8;
  --sunset: #c9622f;
  --sunset-soft: #fbeae0;
  --ocean: #2e6b7a;
  --serif: 'Newsreader', Georgia, serif;
  --sans: 'Bricolage Grotesque', -apple-system, sans-serif;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--sans);
  background: var(--cream);
  color: var(--ink);
  font-size: 16px;
  line-height: 1.65;
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

::selection { background: var(--forest); color: var(--cream); }
a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }
button { font-family: inherit; cursor: pointer; }

/* ============ LAYOUT ============ */
.wrap {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 40px;
}

.wrap-wide {
  max-width: 1440px;
  margin: 0 auto;
  padding: 0 40px;
}

/* ============ NAV ============ */
.nav {
  padding: 22px 0;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 100;
  transition: background 0.4s, padding 0.4s, box-shadow 0.4s;
}

.nav.scrolled {
  background: var(--cream);
  padding: 14px 0;
  box-shadow: 0 4px 20px rgba(26, 46, 31, 0.08);
}

.nav-inner {
  max-width: 1280px;
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
  gap: 12px;
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 600;
  color: #fff;
  letter-spacing: -0.01em;
  transition: color 0.3s;
  flex-shrink: 0;
}

.nav.scrolled .brand { color: var(--ink); }

.brand-mark {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--forest);
  color: var(--cream);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  border: 2px solid rgba(255, 255, 255, 0.25);
  transition: border-color 0.3s;
}

.nav.scrolled .brand-mark { border-color: var(--forest-line); }

.nav-menu {
  display: flex;
  gap: 4px;
  list-style: none;
  align-items: center;
  flex: 1;
  justify-content: center;
}

.nav-menu a {
  font-size: 14px;
  font-weight: 500;
  color: rgba(255, 255, 255, 0.85);
  padding: 8px 16px;
  border-radius: 999px;
  transition: all 0.2s;
}

.nav-menu a:hover { color: #fff; background: rgba(255, 255, 255, 0.12); }

.nav.scrolled .nav-menu a { color: var(--ink-2); }
.nav.scrolled .nav-menu a:hover { color: var(--forest); background: var(--cream-2); }

.nav-cta {
  padding: 12px 24px;
  background: var(--sand);
  color: var(--ink);
  border-radius: 999px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.02em;
  transition: all 0.25s;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  flex-shrink: 0;
}

.nav-cta:hover {
  background: var(--sunset);
  color: #fff;
  transform: translateY(-1px);
}

.nav-toggle {
  display: none;
  background: none;
  border: none;
  color: #fff;
  font-size: 22px;
  padding: 8px;
  transition: color 0.3s;
}

.nav.scrolled .nav-toggle { color: var(--ink); }

/* ============ HERO ============ */
.hero {
  min-height: 100vh;
  position: relative;
  display: flex;
  align-items: flex-end;
  padding-bottom: 60px;
  overflow: hidden;
}

.hero-bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}

.hero-bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-bg::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(26, 46, 31, 0.35) 0%, rgba(26, 46, 31, 0.15) 40%, rgba(26, 46, 31, 0.85) 100%);
}

.hero-inner {
  position: relative;
  z-index: 1;
  width: 100%;
  max-width: 1280px;
  margin: 0 auto;
  padding: 140px 40px 0;
  color: #fff;
}

.hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 7px 16px;
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.25);
  border-radius: 999px;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: #fff;
  margin-bottom: 28px;
}

.hero-tag i {
  color: var(--sand);
  font-size: 12px;
}

.hero h1 {
  font-family: var(--serif);
  font-size: clamp(48px, 7vw, 108px);
  font-weight: 500;
  line-height: 0.98;
  letter-spacing: -0.03em;
  margin-bottom: 28px;
  max-width: 1000px;
  color: #fff;
}

.hero h1 em {
  font-style: italic;
  font-weight: 400;
  color: var(--sand);
}

.hero-lede {
  font-size: 18px;
  line-height: 1.7;
  max-width: 560px;
  color: rgba(255, 255, 255, 0.85);
  margin-bottom: 44px;
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
  padding: 16px 32px;
  font-size: 14px;
  font-weight: 600;
  border-radius: 999px;
  border: 1px solid transparent;
  transition: all 0.25s;
  cursor: pointer;
  font-family: inherit;
  letter-spacing: 0.02em;
}

.btn-sand {
  background: var(--sand);
  color: var(--ink);
}

.btn-sand:hover {
  background: var(--sunset);
  color: #fff;
  transform: translateY(-2px);
  box-shadow: 0 12px 28px -8px rgba(201, 98, 47, 0.5);
}

.btn-glass {
  background: rgba(255, 255, 255, 0.12);
  backdrop-filter: blur(10px);
  color: #fff;
  border-color: rgba(255, 255, 255, 0.25);
}

.btn-glass:hover {
  background: rgba(255, 255, 255, 0.2);
  border-color: rgba(255, 255, 255, 0.4);
}

.btn-forest {
  background: var(--forest);
  color: var(--cream);
}

.btn-forest:hover {
  background: var(--forest-2);
  transform: translateY(-2px);
  box-shadow: 0 12px 28px -8px rgba(30, 77, 56, 0.5);
}

.btn-outline {
  background: transparent;
  color: var(--ink);
  border-color: var(--ink);
}

.btn-outline:hover {
  background: var(--ink);
  color: var(--cream);
}

.hero-search {
  background: var(--cream);
  border-radius: 20px;
  padding: 12px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr auto;
  gap: 4px;
  max-width: 900px;
  box-shadow: 0 30px 60px -20px rgba(0, 0, 0, 0.4);
}

.hero-search-field {
  padding: 14px 20px;
  border-radius: 14px;
  transition: background 0.2s;
  cursor: pointer;
  position: relative;
}

.hero-search-field:hover { background: var(--cream-2); }

.hero-search-field::after {
  content: '';
  position: absolute;
  right: 0;
  top: 20%;
  height: 60%;
  width: 1px;
  background: var(--line);
}

.hero-search-field:last-of-type::after { display: none; }

.hero-search-field label {
  display: block;
  font-size: 11px;
  font-weight: 600;
  color: var(--ink-3);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  margin-bottom: 5px;
}

.hero-search-field select,
.hero-search-field input {
  width: 100%;
  background: transparent;
  border: none;
  color: var(--ink);
  font-family: inherit;
  font-size: 15px;
  font-weight: 500;
  outline: none;
  cursor: pointer;
  -webkit-appearance: none;
  appearance: none;
}

.hero-search-field input::placeholder { color: var(--ink-4); }

.hero-search-field select {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10' viewBox='0 0 24 24' fill='none' stroke='%237a8271' stroke-width='2.5'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right center;
  padding-right: 18px;
}

.hero-search-field select option {
  background: var(--paper);
  color: var(--ink);
}

.hero-search-btn {
  padding: 16px 32px;
  background: var(--forest);
  color: #fff;
  border-radius: 14px;
  border: none;
  font-family: inherit;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.2s;
  display: flex;
  align-items: center;
  gap: 8px;
  letter-spacing: 0.02em;
}

.hero-search-btn:hover { background: var(--forest-2); }

/* ============ TRUST ============ */
.trust {
  padding: 40px 0;
  background: var(--paper);
  border-bottom: 1px solid var(--line);
}

.trust-inner {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  flex-wrap: wrap;
}

.trust-label {
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--ink-3);
}

.trust-logos {
  display: flex;
  gap: 48px;
  flex-wrap: wrap;
  align-items: center;
}

.trust-logos span {
  font-family: var(--serif);
  font-size: 19px;
  font-weight: 600;
  color: var(--ink-3);
  letter-spacing: -0.01em;
  transition: color 0.2s;
}

.trust-logos span:hover { color: var(--forest); }

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

.sec-label {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  font-size: 12px;
  font-weight: 600;
  color: var(--sunset);
  letter-spacing: 0.24em;
  text-transform: uppercase;
  margin-bottom: 20px;
}

.sec-label::before {
  content: '';
  width: 24px;
  height: 1px;
  background: var(--sunset);
}

.section-head.center .sec-label::before { display: none; }

.section-head h2 {
  font-family: var(--serif);
  font-size: clamp(34px, 4.6vw, 56px);
  font-weight: 500;
  line-height: 1.08;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 20px;
}

.section-head h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--forest);
}

.section-head p {
  font-size: 17px;
  color: var(--ink-2);
  line-height: 1.75;
}

/* ============ DESTINASI ============ */
.destinations {
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.dest-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-auto-rows: 260px;
  gap: 16px;
}

.dest-item {
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  cursor: pointer;
  background: var(--cream-3);
}

.dest-item.large {
  grid-column: span 2;
  grid-row: span 2;
}

.dest-item.wide {
  grid-column: span 2;
}

.dest-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.9s ease;
}

.dest-item:hover img { transform: scale(1.06); }

.dest-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, transparent 40%, rgba(26, 46, 31, 0.85) 100%);
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 26px;
  color: #fff;
}

.dest-region {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 4px 12px;
  background: var(--sand);
  color: var(--ink);
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  border-radius: 999px;
  margin-bottom: 12px;
  width: fit-content;
}

.dest-overlay h3 {
  font-family: var(--serif);
  font-size: 28px;
  font-weight: 500;
  letter-spacing: -0.015em;
  margin-bottom: 6px;
  line-height: 1.15;
}

.dest-item.large .dest-overlay h3 { font-size: 38px; }

.dest-overlay p {
  font-size: 13px;
  color: rgba(255, 255, 255, 0.8);
  display: flex;
  align-items: center;
  gap: 14px;
  flex-wrap: wrap;
}

.dest-overlay p span {
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.dest-overlay p i {
  color: var(--sand);
  font-size: 11px;
}

.dest-overlay .price {
  position: absolute;
  top: 20px;
  right: 20px;
  padding: 8px 16px;
  background: rgba(255, 255, 255, 0.95);
  border-radius: 999px;
  font-size: 13px;
  font-weight: 700;
  color: var(--ink);
  letter-spacing: -0.01em;
}

/* ============ PAKET ============ */
.packages-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.package {
  background: var(--paper);
  border: 1px solid var(--line);
  border-radius: 24px;
  overflow: hidden;
  transition: all 0.35s;
  display: flex;
  flex-direction: column;
}

.package:hover {
  border-color: var(--forest);
  transform: translateY(-6px);
  box-shadow: 0 30px 60px -30px rgba(30, 77, 56, 0.3);
}

.package-header {
  padding: 32px 32px 24px;
  background: var(--cream-2);
  border-bottom: 1px solid var(--line);
  position: relative;
}

.package-tag {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 5px 12px;
  background: var(--forest);
  color: var(--cream);
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  border-radius: 999px;
  margin-bottom: 16px;
}

.package-tag.hot { background: var(--sunset); }
.package-tag.new { background: var(--ocean); }

.package-header h3 {
  font-family: var(--serif);
  font-size: 28px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 8px;
  letter-spacing: -0.015em;
  line-height: 1.15;
}

.package-header .route {
  font-size: 14px;
  color: var(--ink-3);
  display: flex;
  align-items: center;
  gap: 8px;
}

.package-header .route i {
  color: var(--sunset);
  font-size: 12px;
}

.package-body {
  padding: 28px 32px 32px;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.package-info {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 16px;
  padding-bottom: 24px;
  border-bottom: 1px solid var(--line);
  margin-bottom: 22px;
}

.package-info-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 13px;
  color: var(--ink-2);
}

.package-info-item i {
  color: var(--forest);
  font-size: 13px;
  width: 16px;
}

.package-highlights {
  list-style: none;
  display: grid;
  gap: 11px;
  margin-bottom: 26px;
  flex: 1;
}

.package-highlights li {
  font-size: 14px;
  color: var(--ink-2);
  display: flex;
  align-items: flex-start;
  gap: 12px;
  line-height: 1.5;
}

.package-highlights li i {
  color: var(--sunset);
  font-size: 10px;
  margin-top: 6px;
}

.package-footer {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  padding-top: 22px;
  border-top: 1px solid var(--line);
  gap: 16px;
}

.package-price {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.015em;
  line-height: 1;
}

.package-price small {
  display: block;
  font-family: var(--sans);
  font-size: 11px;
  font-weight: 500;
  color: var(--ink-3);
  letter-spacing: 0.05em;
  text-transform: uppercase;
  margin-top: 5px;
}

.package-btn {
  padding: 12px 22px;
  background: var(--forest);
  color: var(--cream);
  border-radius: 999px;
  font-size: 13px;
  font-weight: 600;
  transition: all 0.2s;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  white-space: nowrap;
}

.package:hover .package-btn {
  background: var(--sunset);
}

.package-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 24px -8px rgba(201, 98, 47, 0.4);
}

/* ============ KEUNGGULAN ============ */
.why {
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.why-grid {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: 80px;
  align-items: center;
}

.why-visual {
  position: relative;
}

.why-img-main {
  border-radius: 24px;
  overflow: hidden;
  aspect-ratio: 4 / 5;
}

.why-img-main img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.why-card {
  position: absolute;
  bottom: -30px;
  right: -30px;
  width: 200px;
  height: 200px;
  background: var(--forest);
  color: var(--cream);
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  border: 8px solid var(--paper);
  transform: rotate(-8deg);
}

.why-card-num {
  font-family: var(--serif);
  font-size: 52px;
  font-weight: 600;
  line-height: 1;
  letter-spacing: -0.03em;
}

.why-card-lbl {
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  margin-top: 6px;
}

.why-text h2 {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 24px;
}

.why-text h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--forest);
}

.why-text > p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.8;
  margin-bottom: 36px;
}

.why-list {
  display: grid;
  gap: 22px;
}

.why-item {
  display: flex;
  gap: 18px;
  align-items: flex-start;
}

.why-item-icon {
  width: 48px;
  height: 48px;
  border-radius: 14px;
  background: var(--forest-soft);
  color: var(--forest);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 19px;
  flex-shrink: 0;
}

.why-item h4 {
  font-family: var(--serif);
  font-size: 19px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 5px;
  letter-spacing: -0.01em;
}

.why-item p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.65;
  margin: 0;
}

/* ============ TESTIMONI ============ */
.testi {
  background: var(--cream);
}

.testi-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
}

.testi-card {
  background: var(--paper);
  border: 1px solid var(--line);
  border-radius: 24px;
  padding: 36px 32px;
  transition: all 0.3s;
  position: relative;
  display: flex;
  flex-direction: column;
}

.testi-card:hover {
  border-color: var(--forest);
  transform: translateY(-4px);
  box-shadow: 0 25px 50px -25px rgba(30, 77, 56, 0.2);
}

.testi-top {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 20px;
}

.testi-stars {
  display: flex;
  gap: 3px;
  color: var(--sand);
  font-size: 13px;
}

.testi-trip {
  font-size: 11px;
  font-weight: 700;
  color: var(--forest);
  background: var(--forest-soft);
  padding: 4px 10px;
  border-radius: 999px;
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

.testi-text {
  font-size: 15px;
  color: var(--ink-2);
  line-height: 1.75;
  margin-bottom: 26px;
  flex: 1;
}

.testi-text strong {
  color: var(--ink);
  font-weight: 600;
}

.testi-author {
  display: flex;
  align-items: center;
  gap: 14px;
  padding-top: 22px;
  border-top: 1px solid var(--line);
}

.testi-author img {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  object-fit: cover;
}

.testi-author .name {
  font-family: var(--serif);
  font-size: 16px;
  font-weight: 600;
  color: var(--ink);
}

.testi-author .role {
  font-size: 12px;
  color: var(--ink-3);
  margin-top: 2px;
}

/* ============ PETA / LOKASI ============ */
.map-section {
  padding: 0;
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.map-inner {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  min-height: 560px;
}

.map-content {
  padding: 90px 80px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.map-content h2 {
  font-family: var(--serif);
  font-size: clamp(30px, 3.6vw, 44px);
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 20px;
}

.map-content h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--forest);
}

.map-content > p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.75;
  margin-bottom: 32px;
}

.map-list {
  list-style: none;
  display: grid;
  gap: 14px;
  margin-bottom: 36px;
}

.map-list li {
  display: flex;
  align-items: center;
  gap: 14px;
  font-size: 15px;
  color: var(--ink-2);
  padding: 14px 0;
  border-bottom: 1px solid var(--line);
}

.map-list li i {
  color: var(--sunset);
  font-size: 14px;
  width: 18px;
}

.map-list li strong {
  font-family: var(--serif);
  font-size: 17px;
  color: var(--ink);
  font-weight: 600;
}

.map-visual {
  position: relative;
  overflow: hidden;
  background: var(--cream-2);
}

.map-visual img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.55;
  filter: grayscale(40%);
}

.map-pin {
  position: absolute;
  width: 40px;
  height: 40px;
  background: var(--sunset);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 15px;
  transform: translate(-50%, -100%);
  box-shadow: 0 6px 20px rgba(201, 98, 47, 0.4);
  cursor: pointer;
  transition: transform 0.3s;
}

.map-pin::after {
  content: '';
  position: absolute;
  bottom: -6px;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-top: 8px solid var(--sunset);
}

.map-pin:hover {
  transform: translate(-50%, -100%) scale(1.15);
}

.map-pin-1 { top: 42%; left: 30%; }
.map-pin-2 { top: 55%; left: 52%; }
.map-pin-3 { top: 35%; left: 68%; }
.map-pin-4 { top: 68%; left: 40%; }
.map-pin-5 { top: 48%; left: 78%; }

.map-pin-label {
  position: absolute;
  top: -40px;
  left: 50%;
  transform: translateX(-50%);
  background: var(--ink);
  color: #fff;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.08em;
  padding: 5px 12px;
  border-radius: 6px;
  white-space: nowrap;
  opacity: 0;
  transition: opacity 0.3s;
  pointer-events: none;
}

.map-pin:hover .map-pin-label { opacity: 1; }

/* ============ STAT BAND ============ */
.stat-band {
  padding: 80px 0;
  background: var(--forest);
  color: var(--cream);
}

.stat-grid {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 40px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
}

.stat-item {
  padding: 20px;
  border-left: 2px solid var(--sand);
  padding-left: 24px;
}

.stat-num {
  font-family: var(--serif);
  font-size: clamp(40px, 5vw, 56px);
  font-weight: 600;
  line-height: 1;
  letter-spacing: -0.03em;
  margin-bottom: 12px;
  display: flex;
  align-items: baseline;
  gap: 3px;
}

.stat-num span {
  color: var(--sand);
  font-size: 28px;
  font-weight: 500;
}

.stat-lbl {
  font-size: 14px;
  color: rgba(247, 242, 232, 0.75);
  line-height: 1.55;
}

/* ============ CTA ============ */
.cta {
  padding: 110px 0;
  background: var(--cream);
}

.cta-box {
  background: var(--paper);
  border-radius: 32px;
  padding: 80px 60px;
  position: relative;
  overflow: hidden;
  display: grid;
  grid-template-columns: 1.3fr 1fr;
  gap: 60px;
  align-items: center;
  border: 1px solid var(--line);
  box-shadow: 0 40px 80px -40px rgba(26, 46, 31, 0.15);
}

.cta-box::before {
  content: '';
  position: absolute;
  top: -80px;
  right: -80px;
  width: 280px;
  height: 280px;
  background: var(--sand-soft);
  border-radius: 50%;
  opacity: 0.7;
}

.cta-text {
  position: relative;
  z-index: 1;
}

.cta-text h2 {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 20px;
}

.cta-text h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--forest);
}

.cta-text p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.75;
  max-width: 500px;
}

.cta-actions {
  position: relative;
  z-index: 1;
  display: flex;
  flex-direction: column;
  gap: 14px;
}

.cta-actions .btn { justify-content: center; }

/* ============ FOOTER ============ */
.footer {
  background: var(--ink);
  color: var(--cream);
  padding: 80px 0 32px;
}

.footer-grid {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 40px;
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.3fr;
  gap: 60px;
  padding-bottom: 56px;
  border-bottom: 1px solid rgba(247, 242, 232, 0.12);
  margin-bottom: 32px;
}

.footer-brand {
  display: flex;
  align-items: center;
  gap: 12px;
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 20px;
  letter-spacing: -0.01em;
}

.footer-desc {
  font-size: 14px;
  color: rgba(247, 242, 232, 0.7);
  line-height: 1.75;
  max-width: 340px;
  margin-bottom: 24px;
}

.footer-license {
  padding: 14px 16px;
  background: rgba(247, 242, 232, 0.05);
  border: 1px solid rgba(247, 242, 232, 0.12);
  border-radius: 10px;
  font-size: 12px;
  color: rgba(247, 242, 232, 0.6);
  line-height: 1.65;
}

.footer-license strong {
  color: var(--sand);
  font-weight: 600;
}

.footer-col h4 {
  font-size: 12px;
  font-weight: 700;
  color: var(--sand);
  letter-spacing: 0.18em;
  text-transform: uppercase;
  margin-bottom: 22px;
}

.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 12px; }

.footer-col a {
  font-size: 14px;
  color: rgba(247, 242, 232, 0.7);
  transition: color 0.2s;
}

.footer-col a:hover { color: var(--sand); }

.footer-contact p {
  font-size: 14px;
  color: rgba(247, 242, 232, 0.7);
  margin-bottom: 14px;
  display: flex;
  gap: 12px;
  align-items: flex-start;
  line-height: 1.55;
}

.footer-contact i {
  color: var(--sand);
  font-size: 13px;
  margin-top: 4px;
  width: 14px;
}

.footer-bottom {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 16px;
  font-size: 13px;
  color: rgba(247, 242, 232, 0.5);
}

.footer-social {
  display: flex;
  gap: 8px;
}

.footer-social a {
  width: 38px;
  height: 38px;
  border-radius: 12px;
  background: rgba(247, 242, 232, 0.06);
  border: 1px solid rgba(247, 242, 232, 0.1);
  color: rgba(247, 242, 232, 0.7);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  transition: all 0.2s;
}

.footer-social a:hover {
  background: var(--sand);
  border-color: var(--sand);
  color: var(--ink);
  transform: translateY(-3px);
}

/* ============ REVEAL ============ */
.reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.85s ease, transform 0.85s ease;
}

.reveal.on {
  opacity: 1;
  transform: translateY(0);
}

/* ============ FLOAT ============ */
.float-group {
  position: fixed;
  bottom: 28px;
  right: 28px;
  z-index: 200;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.float-btn {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  color: #fff;
  text-decoration: none;
  border: none;
  cursor: pointer;
  transition: all 0.25s;
}

.float-wa {
  background: #25d366;
  box-shadow: 0 12px 28px -8px rgba(37, 211, 102, 0.5);
}

.float-wa:hover { transform: translateY(-3px) scale(1.05); }

/* ============ RESPONSIVE ============ */
@media (max-width: 1100px) {
  .hero-search { grid-template-columns: 1fr 1fr; }
  .hero-search-field::after { display: none; }
  .hero-search-field { border-bottom: 1px solid var(--line); }
  .hero-search-field:nth-child(odd) { border-right: 1px solid var(--line); }
  .hero-search-btn { grid-column: span 2; justify-content: center; border-radius: 14px; }

  .dest-grid { grid-template-columns: repeat(2, 1fr); }
  .dest-item.large { grid-column: span 2; grid-row: auto; }
  .dest-item.wide { grid-column: span 1; }

  .packages-grid { grid-template-columns: repeat(2, 1fr); }
  .why-grid { grid-template-columns: 1fr; gap: 60px; }
  .why-visual { max-width: 500px; margin: 0 auto; }
  .why-card { width: 150px; height: 150px; bottom: -20px; right: -20px; }
  .why-card-num { font-size: 38px; }
  .testi-grid { grid-template-columns: 1fr; }
  .map-inner { grid-template-columns: 1fr; min-height: auto; }
  .map-content { padding: 60px 40px; }
  .map-visual { min-height: 400px; }
  .stat-grid { grid-template-columns: repeat(2, 1fr); gap: 32px; }
  .cta-box { grid-template-columns: 1fr; gap: 40px; padding: 56px 40px; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
  .footer-grid > div:first-child { grid-column: span 2; }
}

@media (max-width: 768px) {
  .wrap, .wrap-wide, .nav-inner, .trust-inner, .stat-grid, .footer-grid, .footer-bottom { padding: 0 20px; }

  .nav-menu {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    width: 300px;
    height: 100vh;
    background: var(--cream);
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
  .nav-menu a {
    padding: 16px 20px;
    font-size: 16px;
    color: var(--ink-2);
    border-radius: 12px;
  }
  .nav-menu a:hover { color: var(--forest); background: var(--cream-2); }

  .nav-cta { display: none; }
  .nav-toggle { display: block; z-index: 1001; }

  .hero { min-height: auto; padding: 100px 0 60px; }
  .hero-inner { padding: 100px 20px 0; }
  .hero h1 { font-size: 44px; }

  .hero-search { grid-template-columns: 1fr; }
  .hero-search-field { border-right: none !important; }
  .hero-search-btn { grid-column: span 1; }

  .section { padding: 72px 0; }

  .dest-grid { grid-template-columns: 1fr; grid-auto-rows: 220px; }
  .dest-item.large { grid-column: span 1; }
  .dest-item.wide { grid-column: span 1; }
  .dest-item.large .dest-overlay h3 { font-size: 28px; }

  .packages-grid { grid-template-columns: 1fr; }
  .package-header { padding: 26px 24px 22px; }
  .package-body { padding: 24px; }
  .package-footer { flex-direction: column; align-items: stretch; }
  .package-btn { justify-content: center; }

  .why-card { width: 120px; height: 120px; bottom: -15px; right: -15px; border-width: 5px; }
  .why-card-num { font-size: 30px; }
  .why-card-lbl { font-size: 9px; }

  .map-content { padding: 48px 24px; }
  .map-visual { min-height: 340px; }

  .stat-grid { grid-template-columns: 1fr; gap: 24px; }

  .cta-box { padding: 40px 24px; border-radius: 24px; }
  .cta-actions .btn { width: 100%; }

  .footer-grid { grid-template-columns: 1fr; }
  .footer-grid > div:first-child { grid-column: span 1; }

  .footer-bottom { justify-content: center; text-align: center; }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 36px; }
  .section-head h2 { font-size: 30px; }
  .dest-overlay h3 { font-size: 22px; }
  .dest-item.large .dest-overlay h3 { font-size: 24px; }
  .stat-num { font-size: 36px; }
  .float-btn { width: 48px; height: 48px; font-size: 19px; }
}
</style>
</head>
<body>

<!-- NAV -->
<nav class="nav" id="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <div class="brand-mark"><i class="fas fa-compass"></i></div>
      Jejak Nusantara
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#destinasi">Destinasi</a></li>
      <li><a href="#paket">Paket Wisata</a></li>
      <li><a href="#keunggulan">Kenapa Kami</a></li>
      <li><a href="#ulasan">Ulasan</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>

    <a href="#paket" class="nav-cta">
      <i class="fas fa-plane-departure"></i> Pesan Sekarang
    </a>

    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="hero-bg">
    <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=1600&q=80" alt="">
  </div>

  <div class="hero-inner">
    <div class="hero-tag">
      <i class="fas fa-star"></i>
      Trip Advisor Travellers' Choice 2024
    </div>

    <h1>
      Setiap perjalanan <em>punya ceritanya.</em>
    </h1>

    <p class="hero-lede">
      Kami susun perjalanan Anda dari nol — mulai dari penerbangan, penginapan, pemandu lokal, sampai destinasi tersembunyi yang jarang orang tahu. Sekali pesan, semua beres.
    </p>

    <div class="hero-actions">
      <a href="#paket" class="btn btn-sand">
        Lihat Paket <i class="fas fa-arrow-right"></i>
      </a>
      <a href="#destinasi" class="btn btn-glass">
        <i class="fas fa-play"></i> Jelajahi Destinasi
      </a>
    </div>

    <form class="hero-search" onsubmit="event.preventDefault(); alert('Pencarian paket Anda sedang diproses.')">

      <div class="hero-search-field">
        <label>Destinasi</label>
        <input type="text" placeholder="Bali, Yogyakarta, Labuan Bajo...">
      </div>

      <div class="hero-search-field">
        <label>Jenis Trip</label>
        <select>
          <option>Semua jenis</option>
          <option>Liburan Keluarga</option>
          <option>Honeymoon</option>
          <option>Adventure & Alam</option>
          <option>Budaya & Sejarah</option>
          <option>Umroh & Religi</option>
        </select>
      </div>

      <div class="hero-search-field">
        <label>Durasi</label>
        <select>
          <option>Semua durasi</option>
          <option>1–3 hari</option>
          <option>4–7 hari</option>
          <option>8–14 hari</option>
          <option>Lebih dari 14 hari</option>
        </select>
      </div>

      <button type="submit" class="hero-search-btn">
        <i class="fas fa-magnifying-glass"></i>
        Cari Paket
      </button>

    </form>
  </div>
</header>

<!-- TRUST -->
<div class="trust">
  <div class="trust-inner">
    <div class="trust-label">Bekerja sama dengan</div>
    <div class="trust-logos">
      <span>Garuda Indonesia</span>
      <span>Citilink</span>
      <span>Lion Air</span>
      <span>AirAsia</span>
      <span>Traveloka</span>
    </div>
  </div>
</div>

<!-- DESTINASI -->
<section class="section destinations" id="destinasi">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-label">Destinasi Pilihan</div>
      <h2>Indonesia punya <em>terlalu banyak keindahan.</em></h2>
      <p>Dari sabang sampai merauke, kami sudah menjelajahi hampir semua. Ini beberapa destinasi yang paling sering tamu kami pilih.</p>
    </div>

    <div class="dest-grid">

      <div class="dest-item large reveal">
        <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=1200&q=80" alt="">
        <div class="dest-overlay">
          <span class="dest-region">Bali</span>
          <h3>Ubud & Tegalalang</h3>
          <p>
            <span><i class="fas fa-clock"></i> 4 hari 3 malam</span>
            <span><i class="fas fa-users"></i> 12 destinasi</span>
          </p>
        </div>
        <div class="price">Mulai 4,8 jt</div>
      </div>

      <div class="dest-item reveal">
        <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?w=800&q=80" alt="">
        <div class="dest-overlay">
          <span class="dest-region">NTT</span>
          <h3>Labuan Bajo</h3>
          <p>
            <span><i class="fas fa-clock"></i> 3 hari</span>
          </p>
        </div>
      </div>

      <div class="dest-item reveal">
        <img src="https://images.unsplash.com/photo-1596422846543-75c6fc197f07?w=800&q=80" alt="">
        <div class="dest-overlay">
          <span class="dest-region">Jawa Tengah</span>
          <h3>Yogyakarta</h3>
          <p>
            <span><i class="fas fa-clock"></i> 3 hari</span>
          </p>
        </div>
      </div>

      <div class="dest-item wide reveal">
        <img src="https://images.unsplash.com/photo-1570789210967-2cac24afeb00?w=1200&q=80" alt="">
        <div class="dest-overlay">
          <span class="dest-region">Sumatera</span>
          <h3>Danau Toba & Bukit Lawang</h3>
          <p>
            <span><i class="fas fa-clock"></i> 5 hari 4 malam</span>
            <span><i class="fas fa-users"></i> 8 destinasi</span>
          </p>
        </div>
        <div class="price">Mulai 5,2 jt</div>
      </div>

      <div class="dest-item reveal">
        <img src="https://images.unsplash.com/photo-1588668214407-6ea9a6d8c272?w=800&q=80" alt="">
        <div class="dest-overlay">
          <span class="dest-region">Sulawesi</span>
          <h3>Raja Ampat</h3>
          <p>
            <span><i class="fas fa-clock"></i> 6 hari</span>
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PAKET -->
<section class="section" id="paket">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-label">Paket Wisata</div>
      <h2>Pilih cara <em>menjelajah Anda.</em></h2>
      <p>Semua paket sudah termasuk tiket, penginapan, transportasi, pemandu, dan makan sesuai itinerary.</p>
    </div>

    <div class="packages-grid">

      <div class="package reveal">
        <div class="package-header">
          <div class="package-tag hot">Paling Diminati</div>
          <h3>Bali Escape</h3>
          <div class="route">
            <i class="fas fa-route"></i> Ubud – Tegalalang – Uluwatu
          </div>
        </div>
        <div class="package-body">
          <div class="package-info">
            <div class="package-info-item"><i class="fas fa-clock"></i> 4 hari 3 malam</div>
            <div class="package-info-item"><i class="fas fa-users"></i> Maks. 12 orang</div>
            <div class="package-info-item"><i class="fas fa-hotel"></i> Hotel bintang 4</div>
            <div class="package-info-item"><i class="fas fa-plane"></i> Tiket PP</div>
          </div>
          <ul class="package-highlights">
            <li><i class="fas fa-circle"></i> Menginap di villa dengan pemandangan sawah</li>
            <li><i class="fas fa-circle"></i> Sunrise di Tegalalang & sarapan lokal</li>
            <li><i class="fas fa-circle"></i> Kecak dance Uluwatu saat matahari terbenam</li>
            <li><i class="fas fa-circle"></i> Pijat Bali tradisional 60 menit</li>
          </ul>
          <div class="package-footer">
            <div class="package-price">
              Rp 4.800.000
              <small>per orang</small>
            </div>
            <a href="#kontak" class="package-btn">
              Pesan <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="package reveal">
        <div class="package-header">
          <div class="package-tag">Honeymoon</div>
          <h3>Raja Ampat Romance</h3>
          <div class="route">
            <i class="fas fa-route"></i> Sorong – Waisai – Wayag
          </div>
        </div>
        <div class="package-body">
          <div class="package-info">
            <div class="package-info-item"><i class="fas fa-clock"></i> 6 hari 5 malam</div>
            <div class="package-info-item"><i class="fas fa-users"></i> Pasangan</div>
            <div class="package-info-item"><i class="fas fa-ship"></i> Live onboard</div>
            <div class="package-info-item"><i class="fas fa-plane"></i> Tiket PP</div>
          </div>
          <ul class="package-highlights">
            <li><i class="fas fa-circle"></i> Tur private dengan kapal phinisi</li>
            <li><i class="fas fa-circle"></i> Snorkeling di spot terbaik Raja Ampat</li>
            <li><i class="fas fa-circle"></i> Candlelight dinner di pulau kosong</li>
            <li><i class="fas fa-circle"></i> Fotografer perjalanan pribadi</li>
          </ul>
          <div class="package-footer">
            <div class="package-price">
              Rp 24.500.000
              <small>per pasangan</small>
            </div>
            <a href="#kontak" class="package-btn">
              Pesan <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="package reveal">
        <div class="package-header">
          <div class="package-tag new">Baru</div>
          <h3>Yogyakarta Heritage</h3>
          <div class="route">
            <i class="fas fa-route"></i> Borobudur – Prambanan – Kotagede
          </div>
        </div>
        <div class="package-body">
          <div class="package-info">
            <div class="package-info-item"><i class="fas fa-clock"></i> 3 hari 2 malam</div>
            <div class="package-info-item"><i class="fas fa-users"></i> Maks. 15 orang</div>
            <div class="package-info-item"><i class="fas fa-hotel"></i> Hotel butik</div>
            <div class="package-info-item"><i class="fas fa-utensils"></i> Semua makan</div>
          </div>
          <ul class="package-highlights">
            <li><i class="fas fa-circle"></i> Sunrise di Borobudur dengan pemandu arkeologi</li>
            <li><i class="fas fa-circle"></i> Belajar membatik di Kotagede</li>
            <li><i class="fas fa-circle"></i> Ramayana ballet Prambanan</li>
            <li><i class="fas fa-circle"></i> Kulineran di Malioboro dengan guide lokal</li>
          </ul>
          <div class="package-footer">
            <div class="package-price">
              Rp 2.950.000
              <small>per orang</small>
            </div>
            <a href="#kontak" class="package-btn">
              Pesan <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- KEUNGGULAN -->
<section class="section why" id="keunggulan">
  <div class="wrap">
    <div class="why-grid">

      <div class="why-visual reveal">
        <div class="why-img-main">
          <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=800&q=80" alt="">
        </div>
        <div class="why-card">
          <div class="why-card-num">11</div>
          <div class="why-card-lbl">Tahun</div>
        </div>
      </div>

      <div class="why-text reveal">
        <div class="sec-label">Kenapa Jejak Nusantara</div>
        <h2>Bukan sekadar travel agent, <em>tapi teman perjalanan.</em></h2>

        <p>
          Kami sudah menyusun perjalanan untuk ribuan orang sejak 2014. Yang membuat kami bertahan bukan harga murah, tapi pengalaman yang benar-benar berkesan. Semua tim kami pernah menjelajah destinasi yang kami tawarkan.
        </p>

        <div class="why-list">

          <div class="why-item">
            <div class="why-item-icon"><i class="fas fa-map-location-dot"></i></div>
            <div>
              <h4>Itinerary yang Jelas</h4>
              <p>Anda tahu persis akan kemana, kapan, dan berapa lama. Tidak ada agenda tersembunyi.</p>
            </div>
          </div>

          <div class="why-item">
            <div class="why-item-icon"><i class="fas fa-user-tie"></i></div>
            <div>
              <h4>Pemandu Lokal Berpengalaman</h4>
              <p>Kami memakai pemandu yang lahir dan besar di destinasi tersebut, bukan pemandu seragam.</p>
            </div>
          </div>

          <div class="why-item">
            <div class="why-item-icon"><i class="fas fa-shield-halved"></i></div>
            <div>
              <h4>Asuransi Perjalanan</h4>
              <p>Setiap paket sudah termasuk asuransi perjalanan dari perusahaan terpercaya.</p>
            </div>
          </div>

          <div class="why-item">
            <div class="why-item-icon"><i class="fas fa-headset"></i></div>
            <div>
              <h4>Pendampingan 24 Jam</h4>
              <p>Ada nomor darurat yang bisa dihubungi kapan saja selama perjalanan Anda berlangsung.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- TESTIMONI -->
<section class="section testi" id="ulasan">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-label">Kata Tamu Kami</div>
      <h2>Cerita mereka yang <em>sudah berangkat bersama kami.</em></h2>
    </div>

    <div class="testi-grid">

      <div class="testi-card reveal">
        <div class="testi-top">
          <div class="testi-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <span class="testi-trip">Bali Escape</span>
        </div>
        <p class="testi-text">
          Perjalanan honeymoon kami benar-benar istimewa. <strong>Setiap detail dipikirkan dengan teliti</strong> — mulai dari bunga di kamar hotel sampai restoran yang mereka pesan untuk kami. Terima kasih Jejak Nusantara.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=45" alt="">
          <div>
            <div class="name">Rina & Dimas</div>
            <div class="role">Honeymoon di Bali</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal">
        <div class="testi-top">
          <div class="testi-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <span class="testi-trip">Raja Ampat</span>
        </div>
        <p class="testi-text">
          Saya sudah beberapa kali pakai agen travel, tapi baru kali ini ketemu yang <strong>benar-benar paham destinasi</strong>-nya. Pemandu lokal mereka luar biasa. Rasanya seperti traveling bersama teman lama.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=52" alt="">
          <div>
            <div class="name">Pak Hendra Wijaya</div>
            <div class="role">Solo traveler</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal">
        <div class="testi-top">
          <div class="testi-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <span class="testi-trip">Yogyakarta</span>
        </div>
        <p class="testi-text">
          Bawa anak-anak liburan ke Jogja dan semua berjalan lancar. Tim mereka sabar dengan anak kecil, dan itinerary-nya <strong>disesuaikan dengan ritme keluarga kami</strong>. Recommended banget!
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=47" alt="">
          <div>
            <div class="name">Ibu Sari Handayani</div>
            <div class="role">Liburan keluarga</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PETA -->
<section class="map-section">
  <div class="map-inner">

    <div class="map-content reveal">
      <div class="sec-label">Kantor Kami</div>
      <h2>Kunjungi kantor kami atau <em>hubungi langsung.</em></h2>
      <p>
        Tim kami siap membantu Anda merencanakan perjalanan. Datang langsung, telepon, atau chat via WhatsApp — kapan saja.
      </p>

      <ul class="map-list">
        <li><i class="fas fa-location-dot"></i> <strong>Kantor Pusat</strong> — Jl. Kemang Raya 88, Jakarta Selatan</li>
        <li><i class="fas fa-phone"></i> <strong>(021) 555-0188</strong> — Senin–Sabtu, 09.00–18.00</li>
        <li><i class="fab fa-whatsapp"></i> <strong>+62 812 3456 7890</strong> — Tersedia 24 jam</li>
        <li><i class="fas fa-envelope"></i> <strong>hello@jejaknusantara.id</strong> — Balasan dalam 2 jam</li>
      </ul>

      <a href="#kontak" class="btn btn-forest">
        Mulai Rencanakan Trip <i class="fas fa-arrow-right"></i>
      </a>
    </div>

    <div class="map-visual">
      <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?w=1200&q=80" alt="">

      <div class="map-pin map-pin-1">
        <i class="fas fa-map-marker-alt"></i>
        <span class="map-pin-label">Jakarta</span>
      </div>

      <div class="map-pin map-pin-2">
        <i class="fas fa-map-marker-alt"></i>
        <span class="map-pin-label">Yogyakarta</span>
      </div>

      <div class="map-pin map-pin-3">
        <i class="fas fa-map-marker-alt"></i>
        <span class="map-pin-label">Labuan Bajo</span>
      </div>

      <div class="map-pin map-pin-4">
        <i class="fas fa-map-marker-alt"></i>
        <span class="map-pin-label">Bali</span>
      </div>

      <div class="map-pin map-pin-5">
        <i class="fas fa-map-marker-alt"></i>
        <span class="map-pin-label">Raja Ampat</span>
      </div>
    </div>

  </div>
</section>

<!-- STAT -->
<div class="stat-band">
  <div class="stat-grid">

    <div class="stat-item reveal">
      <div class="stat-num"><span class="counter" data-target="11000">0</span><span>+</span></div>
      <div class="stat-lbl">Tamu yang sudah<br>berangkat bersama kami</div>
    </div>

    <div class="stat-item reveal">
      <div class="stat-num"><span class="counter" data-target="87">0</span></div>
      <div class="stat-lbl">Destinasi di Indonesia<br>dan mancanegara</div>
    </div>

    <div class="stat-item reveal">
      <div class="stat-num"><span class="counter" data-target="11">0</span></div>
      <div class="stat-lbl">Tahun pengalaman<br>di industri travel</div>
    </div>

    <div class="stat-item reveal">
      <div class="stat-num"><span class="counter" data-target="96">0</span><span>%</span></div>
      <div class="stat-lbl">Tamu yang akan<br>memesan lagi</div>
    </div>

  </div>
</div>

<!-- CTA -->
<section class="cta" id="kontak">
  <div class="wrap">
    <div class="cta-box reveal">

      <div class="cta-text">
        <h2>
          Sudah tahu mau <em>kemana berikutnya?</em>
        </h2>
        <p>
          Ceritakan impian perjalanan Anda. Kami akan susun itinerary khusus dalam 24 jam, lengkap dengan estimasi biaya. Tanpa biaya konsultasi.
        </p>
      </div>

      <div class="cta-actions">
        <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2010" class="btn btn-forest" target="_blank">
          <i class="fab fa-whatsapp"></i> Chat via WhatsApp
        </a>
        <a href="tel:0215550188" class="btn btn-outline">
          <i class="fas fa-phone"></i> Telepon Kantor
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
        <div class="brand-mark" style="background: var(--sand); color: var(--ink); border-color: var(--sand);">
          <i class="fas fa-compass"></i>
        </div>
        Jejak Nusantara
      </div>
      <p class="footer-desc">
        Agen perjalanan yang menyusun tur ke destinasi terbaik Indonesia dan dunia dengan pendampingan penuh sejak 2014.
      </p>
      <div class="footer-license">
        <strong>Izin Usaha:</strong><br>
        NIB 8123456789012<br>
        Anggota ASITA (Association of Indonesian Travel Agencies)
      </div>
    </div>

    <div class="footer-col">
      <h4>Destinasi</h4>
      <ul>
        <li><a href="#">Bali & Lombok</a></li>
        <li><a href="#">Yogyakarta</a></li>
        <li><a href="#">Raja Ampat</a></li>
        <li><a href="#">Labuan Bajo</a></li>
        <li><a href="#">Danau Toba</a></li>
        <li><a href="#">Luar Negeri</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Layanan</h4>
      <ul>
        <li><a href="#">Paket Wisata</a></li>
        <li><a href="#">Custom Trip</a></li>
        <li><a href="#">Honeymoon</a></li>
        <li><a href="#">Family Trip</a></li>
        <li><a href="#">Corporate Outing</a></li>
        <li><a href="#">Umroh & Religi</a></li>
      </ul>
    </div>

    <div class="footer-col footer-contact">
      <h4>Hubungi Kami</h4>
      <p><i class="fas fa-location-dot"></i> Jl. Kemang Raya 88<br>Jakarta Selatan 12730</p>
      <p><i class="fas fa-phone"></i> (021) 555-0188</p>
      <p><i class="fab fa-whatsapp"></i> +62 812 3456 7890</p>
      <p><i class="fas fa-envelope"></i> hello@jejaknusantara.id</p>
    </div>

  </div>

  <div class="footer-bottom">
    <div>© 2025 Jejak Nusantara. Semua hak dilindungi.</div>
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
  <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2010" class="float-btn float-wa" target="_blank" aria-label="WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

<script>
// Nav scroll
const nav = document.getElementById('nav');
window.addEventListener('scroll', () => {
  nav.classList.toggle('scrolled', window.scrollY > 40);
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
}, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

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