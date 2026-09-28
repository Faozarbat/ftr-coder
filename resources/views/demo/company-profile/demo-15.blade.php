@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lumen Studio — Fotografi Profesional & Wedding</title>
<meta name="description" content="Lumen Studio — studio fotografi profesional untuk wedding, pre-wedding, produk, dan potret keluarga di Jakarta.">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --bg: #0a0a0a;
  --bg-2: #111111;
  --bg-3: #1a1a1a;
  --bg-4: #242424;
  --line: #262626;
  --line-2: #3a3a3a;
  --ink: #f5f3ee;
  --ink-2: #b8b5ae;
  --ink-3: #7a7873;
  --ink-4: #4a4845;
  --cream: #e8dcc0;
  --cream-2: #d4c296;
  --gold: #c9a961;
  --paper: #ffffff;
  --serif: 'Playfair Display', Georgia, serif;
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

::selection { background: var(--cream); color: var(--bg); }
a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }
button { font-family: inherit; cursor: pointer; }

/* ============ LAYOUT ============ */
.wrap {
  max-width: 1320px;
  margin: 0 auto;
  padding: 0 48px;
}

.wrap-md {
  max-width: 1000px;
  margin: 0 auto;
  padding: 0 48px;
}

/* ============ NAV ============ */
.nav {
  padding: 26px 0;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 100;
  transition: background 0.5s, padding 0.4s, border 0.4s;
  border-bottom: 1px solid transparent;
}

.nav.scrolled {
  background: rgba(10, 10, 10, 0.94);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  padding: 16px 0;
  border-bottom-color: var(--line);
}

.nav-inner {
  max-width: 1320px;
  margin: 0 auto;
  padding: 0 48px;
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
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 500;
  letter-spacing: 0.02em;
  color: var(--ink);
}

.brand-mark {
  width: 42px;
  height: 42px;
  border: 1px solid var(--cream);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--cream);
  font-size: 17px;
  font-family: var(--serif);
  font-weight: 600;
  transition: all 0.3s;
}

.brand:hover .brand-mark {
  background: var(--cream);
  color: var(--bg);
}

.brand-text {
  line-height: 1;
  display: flex;
  flex-direction: column;
}

.brand-text small {
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
  gap: 8px;
  list-style: none;
  flex: 1;
  justify-content: center;
}

.nav-menu a {
  font-size: 12px;
  font-weight: 500;
  color: var(--ink-2);
  padding: 10px 18px;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  transition: color 0.25s;
  position: relative;
}

.nav-menu a:hover { color: var(--cream); }

.nav-menu a::after {
  content: '';
  position: absolute;
  bottom: 4px;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 1px;
  background: var(--cream);
  transition: width 0.3s;
}

.nav-menu a:hover::after { width: 20px; }

.nav-cta {
  padding: 12px 24px;
  border: 1px solid var(--cream);
  color: var(--cream);
  font-size: 11px;
  font-weight: 500;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  transition: all 0.3s;
  flex-shrink: 0;
}

.nav-cta:hover {
  background: var(--cream);
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
  opacity: 0.55;
}

.hero-bg::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(10, 10, 10, 0.4) 0%, rgba(10, 10, 10, 0.2) 40%, rgba(10, 10, 10, 0.9) 100%);
}

.hero-inner {
  position: relative;
  z-index: 1;
  max-width: 1320px;
  margin: 0 auto;
  padding: 160px 48px 40px;
  width: 100%;
}

.hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 14px;
  font-size: 11px;
  font-weight: 500;
  color: var(--cream);
  letter-spacing: 0.34em;
  text-transform: uppercase;
  margin-bottom: 32px;
}

.hero-eyebrow::before {
  content: '';
  width: 40px;
  height: 1px;
  background: var(--cream);
}

.hero h1 {
  font-family: var(--serif);
  font-size: clamp(52px, 8vw, 120px);
  font-weight: 400;
  line-height: 0.94;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 40px;
  max-width: 1100px;
}

.hero h1 em {
  font-style: italic;
  font-weight: 400;
  color: var(--cream);
}

.hero-bottom {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  gap: 60px;
  flex-wrap: wrap;
  padding-top: 40px;
  border-top: 1px solid rgba(255, 255, 255, 0.12);
}

.hero-lede {
  font-size: 17px;
  color: var(--ink-2);
  font-weight: 300;
  max-width: 520px;
  line-height: 1.85;
}

.hero-stats {
  display: flex;
  gap: 48px;
  flex-wrap: wrap;
}

.hero-stat .num {
  font-family: var(--serif);
  font-size: 40px;
  font-weight: 500;
  color: var(--cream);
  line-height: 1;
  letter-spacing: -0.02em;
  margin-bottom: 8px;
  display: flex;
  align-items: baseline;
  gap: 3px;
}

.hero-stat .num span {
  font-size: 22px;
  font-weight: 400;
}

.hero-stat .lbl {
  font-size: 11px;
  color: var(--ink-3);
  letter-spacing: 0.16em;
  text-transform: uppercase;
  font-weight: 500;
}

.hero-scroll {
  position: absolute;
  bottom: 40px;
  right: 48px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 12px;
  color: var(--ink-3);
  font-size: 10px;
  letter-spacing: 0.3em;
  text-transform: uppercase;
  writing-mode: vertical-rl;
  z-index: 1;
}

.hero-scroll::after {
  content: '';
  width: 1px;
  height: 60px;
  background: var(--ink-3);
  animation: scrollLine 2s ease-in-out infinite;
}

@keyframes scrollLine {
  0%, 100% { transform: scaleY(1); transform-origin: top; }
  50% { transform: scaleY(0.3); transform-origin: top; }
}

/* ============ TICKER ============ */
.ticker {
  padding: 30px 0;
  background: var(--bg-2);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  overflow: hidden;
}

.ticker-track {
  display: flex;
  gap: 100px;
  width: fit-content;
  animation: tickerScroll 50s linear infinite;
}

.ticker-item {
  display: flex;
  align-items: center;
  gap: 100px;
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 400;
  font-style: italic;
  color: var(--ink-3);
  letter-spacing: 0.01em;
  white-space: nowrap;
  transition: color 0.3s;
}

.ticker-item span:hover { color: var(--cream); }

.ticker-item i {
  color: var(--cream);
  font-size: 10px;
}

@keyframes tickerScroll {
  to { transform: translateX(-50%); }
}

/* ============ SECTION ============ */
.section {
  padding: 130px 0;
}

.section-head {
  margin-bottom: 80px;
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
  font-weight: 500;
  color: var(--cream);
  letter-spacing: 0.34em;
  text-transform: uppercase;
  margin-bottom: 28px;
}

.sec-eyebrow::before {
  content: '';
  width: 32px;
  height: 1px;
  background: var(--cream);
}

.section-head.center .sec-eyebrow::before { display: none; }

.section-head h2 {
  font-family: var(--serif);
  font-size: clamp(38px, 5.2vw, 64px);
  font-weight: 400;
  line-height: 1.05;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 24px;
}

.section-head h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--cream);
}

.section-head p {
  font-size: 16px;
  color: var(--ink-2);
  font-weight: 300;
  line-height: 1.85;
  max-width: 620px;
}

.section-head.center p { margin: 0 auto; }

/* ============ PORTFOLIO ============ */
.portfolio-filter {
  display: flex;
  gap: 6px;
  justify-content: center;
  margin-bottom: 70px;
  flex-wrap: wrap;
}

.filter-btn {
  padding: 11px 24px;
  background: transparent;
  border: 1px solid var(--line-2);
  color: var(--ink-2);
  font-family: inherit;
  font-size: 11px;
  font-weight: 500;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  transition: all 0.3s;
  cursor: pointer;
}

.filter-btn:hover {
  border-color: var(--cream);
  color: var(--cream);
}

.filter-btn.active {
  background: var(--cream);
  border-color: var(--cream);
  color: var(--bg);
}

.portfolio-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.pf-item {
  position: relative;
  overflow: hidden;
  cursor: pointer;
  background: var(--bg-3);
  aspect-ratio: 4 / 5;
}

.pf-item.wide {
  grid-column: span 2;
  aspect-ratio: 8 / 5;
}

.pf-item.tall {
  grid-row: span 2;
  aspect-ratio: 4 / 10;
}

.pf-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 1s cubic-bezier(0.4, 0, 0.2, 1), filter 0.6s;
  filter: grayscale(30%);
}

.pf-item:hover img {
  transform: scale(1.06);
  filter: grayscale(0%);
}

.pf-overlay {
  position: absolute;
  inset: 0;
  padding: 32px;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  color: #fff;
  opacity: 0;
  transition: opacity 0.4s;
  background: linear-gradient(to top, rgba(10, 10, 10, 0.85) 0%, transparent 55%);
}

.pf-item:hover .pf-overlay { opacity: 1; }

.pf-cat {
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 0.28em;
  text-transform: uppercase;
  color: var(--cream);
  margin-bottom: 10px;
}

.pf-title {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 500;
  letter-spacing: -0.01em;
  line-height: 1.15;
}

.pf-year {
  font-size: 12px;
  color: var(--ink-3);
  margin-top: 8px;
  letter-spacing: 0.1em;
}

.pf-arrow {
  position: absolute;
  top: 28px;
  right: 28px;
  width: 46px;
  height: 46px;
  border-radius: 50%;
  background: var(--cream);
  color: var(--bg);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
  transform: scale(0) rotate(-30deg);
  transition: transform 0.4s 0.1s;
}

.pf-item:hover .pf-arrow { transform: scale(1) rotate(0); }

/* ============ ABOUT ============ */
.about {
  background: var(--bg-2);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.about-grid {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: 90px;
  align-items: center;
}

.about-visual {
  position: relative;
  aspect-ratio: 4 / 5;
}

.about-img {
  position: absolute;
  inset: 0;
  overflow: hidden;
  background: var(--bg-3);
}

.about-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.about-badge {
  position: absolute;
  bottom: -30px;
  right: -30px;
  background: var(--cream);
  color: var(--bg);
  padding: 26px 30px;
  min-width: 200px;
  border: 6px solid var(--bg-2);
}

.about-badge-label {
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.26em;
  text-transform: uppercase;
  margin-bottom: 10px;
  opacity: 0.7;
}

.about-badge-year {
  font-family: var(--serif);
  font-size: 44px;
  font-weight: 500;
  line-height: 1;
  letter-spacing: -0.02em;
}

.about-text h2 {
  font-family: var(--serif);
  font-size: clamp(34px, 4.2vw, 52px);
  font-weight: 400;
  line-height: 1.1;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 30px;
}

.about-text h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--cream);
}

.about-text > p {
  font-size: 16px;
  color: var(--ink-2);
  font-weight: 300;
  line-height: 1.9;
  margin-bottom: 22px;
}

.about-text > p:first-of-type::first-letter {
  font-family: var(--serif);
  font-size: 72px;
  font-weight: 400;
  float: left;
  line-height: 0.85;
  padding: 6px 16px 0 0;
  color: var(--cream);
}

.about-values {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  margin-top: 40px;
  border-top: 1px solid var(--line);
}

.about-value {
  padding: 26px 0;
  border-bottom: 1px solid var(--line);
}

.about-value:nth-child(odd) {
  border-right: 1px solid var(--line);
  padding-right: 24px;
}

.about-value:nth-child(even) {
  padding-left: 24px;
}

.about-value .num {
  font-family: var(--serif);
  font-size: 34px;
  font-weight: 500;
  color: var(--cream);
  line-height: 1;
  letter-spacing: -0.02em;
  margin-bottom: 8px;
}

.about-value .lbl {
  font-size: 12px;
  color: var(--ink-3);
  letter-spacing: 0.06em;
  line-height: 1.5;
}

/* ============ SERVICES ============ */
.services {
  background: var(--bg);
}

.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
  border-top: 1px solid var(--line);
  border-left: 1px solid var(--line);
}

.service-card {
  padding: 44px 40px;
  border-right: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  background: var(--bg);
  transition: background 0.3s;
  display: flex;
  flex-direction: column;
  position: relative;
}

.service-card:hover { background: var(--bg-2); }

.service-num {
  font-family: var(--serif);
  font-size: 13px;
  font-style: italic;
  color: var(--cream);
  letter-spacing: 0.05em;
  margin-bottom: 32px;
}

.service-icon {
  font-size: 26px;
  color: var(--cream);
  margin-bottom: 24px;
}

.service-card h3 {
  font-family: var(--serif);
  font-size: 28px;
  font-weight: 500;
  color: var(--ink);
  line-height: 1.15;
  letter-spacing: -0.015em;
  margin-bottom: 16px;
}

.service-card p {
  font-size: 14px;
  color: var(--ink-2);
  font-weight: 300;
  line-height: 1.75;
  margin-bottom: 26px;
  flex: 1;
}

.service-includes {
  list-style: none;
  padding-top: 22px;
  border-top: 1px solid var(--line);
  display: grid;
  gap: 10px;
  margin-bottom: 24px;
}

.service-includes li {
  font-size: 13px;
  color: var(--ink-3);
  letter-spacing: 0.02em;
  padding-left: 18px;
  position: relative;
}

.service-includes li::before {
  content: '';
  position: absolute;
  left: 0;
  top: 10px;
  width: 10px;
  height: 1px;
  background: var(--cream);
}

.service-price {
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  padding-top: 20px;
  border-top: 1px solid var(--line-2);
}

.service-price .from {
  font-size: 11px;
  color: var(--ink-3);
  letter-spacing: 0.16em;
  text-transform: uppercase;
}

.service-price .amount {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 500;
  color: var(--ink);
  letter-spacing: -0.015em;
}

/* ============ PROCESS ============ */
.process {
  background: var(--bg-2);
}

.process-list {
  border-top: 1px solid var(--line);
  max-width: 900px;
  margin: 0 auto;
}

.process-item {
  display: grid;
  grid-template-columns: 100px 1fr;
  gap: 40px;
  padding: 44px 0;
  border-bottom: 1px solid var(--line);
  align-items: start;
}

.process-num {
  font-family: var(--serif);
  font-size: 52px;
  font-weight: 400;
  font-style: italic;
  color: var(--cream);
  line-height: 0.9;
  letter-spacing: -0.03em;
}

.process-content h3 {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 500;
  color: var(--ink);
  margin-bottom: 14px;
  letter-spacing: -0.015em;
  line-height: 1.2;
}

.process-content p {
  font-size: 15px;
  color: var(--ink-2);
  font-weight: 300;
  line-height: 1.8;
}

/* ============ QUOTES ============ */
.quotes {
  background: var(--bg);
}

.quote-main {
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
}

.quote-mark-lg {
  font-family: var(--serif);
  font-size: 140px;
  line-height: 0.5;
  color: var(--cream);
  opacity: 0.35;
  margin-bottom: 32px;
  font-weight: 400;
}

.quote-text {
  font-family: var(--serif);
  font-size: clamp(24px, 2.8vw, 34px);
  font-weight: 400;
  font-style: italic;
  line-height: 1.45;
  color: var(--ink);
  margin-bottom: 40px;
  letter-spacing: -0.01em;
}

.quote-author {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 20px;
  padding-top: 30px;
  border-top: 1px solid var(--line);
  max-width: 400px;
  margin: 0 auto;
}

.quote-author img {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  object-fit: cover;
  filter: grayscale(100%);
}

.quote-author-info {
  text-align: left;
}

.quote-author .name {
  font-family: var(--serif);
  font-size: 18px;
  font-weight: 500;
  color: var(--ink);
  letter-spacing: -0.005em;
}

.quote-author .role {
  font-size: 12px;
  color: var(--ink-3);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  margin-top: 4px;
}

.quote-dots {
  display: flex;
  gap: 10px;
  justify-content: center;
  margin-top: 44px;
}

.quote-dot {
  width: 30px;
  height: 2px;
  background: var(--line-2);
  border: none;
  cursor: pointer;
  transition: all 0.3s;
  padding: 0;
}

.quote-dot.active {
  background: var(--cream);
  width: 50px;
}

/* ============ CTA ============ */
.cta {
  padding: 140px 0;
  background: var(--bg-2);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  position: relative;
  overflow: hidden;
}

.cta::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 700px;
  height: 700px;
  border: 1px solid rgba(232, 220, 192, 0.08);
  border-radius: 50%;
  pointer-events: none;
}

.cta::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 900px;
  height: 900px;
  border: 1px solid rgba(232, 220, 192, 0.04);
  border-radius: 50%;
  pointer-events: none;
}

.cta-inner {
  position: relative;
  z-index: 1;
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
}

.cta .sec-eyebrow { justify-content: center; }

.cta h2 {
  font-family: var(--serif);
  font-size: clamp(38px, 5.2vw, 68px);
  font-weight: 400;
  line-height: 1.02;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 26px;
}

.cta h2 em {
  font-style: italic;
  font-weight: 400;
  color: var(--cream);
}

.cta p {
  font-size: 16px;
  color: var(--ink-2);
  font-weight: 300;
  line-height: 1.85;
  margin-bottom: 48px;
  max-width: 620px;
  margin-left: auto;
  margin-right: auto;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  padding: 18px 38px;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  border: 1px solid transparent;
  transition: all 0.3s;
  cursor: pointer;
  font-family: inherit;
  white-space: nowrap;
}

.btn-cream {
  background: var(--cream);
  color: var(--bg);
  border-color: var(--cream);
}

.btn-cream:hover {
  background: var(--cream-2);
  border-color: var(--cream-2);
  transform: translateY(-2px);
  box-shadow: 0 20px 40px -12px rgba(232, 220, 192, 0.35);
}

.btn-outline {
  background: transparent;
  color: var(--cream);
  border-color: var(--cream);
}

.btn-outline:hover {
  background: var(--cream);
  color: var(--bg);
}

.cta-actions {
  display: flex;
  gap: 16px;
  justify-content: center;
  flex-wrap: wrap;
}

/* ============ FOOTER ============ */
.footer {
  background: var(--bg);
  padding: 90px 0 32px;
}

.footer-grid {
  max-width: 1320px;
  margin: 0 auto;
  padding: 0 48px;
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.3fr;
  gap: 60px;
  padding-bottom: 60px;
  border-bottom: 1px solid var(--line);
  margin-bottom: 32px;
}

.footer-brand {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 24px;
}

.footer-brand .brand-mark {
  border-color: var(--ink-3);
  color: var(--ink-2);
}

.footer-desc {
  font-size: 14px;
  color: var(--ink-3);
  line-height: 1.85;
  font-weight: 300;
  max-width: 340px;
  margin-bottom: 26px;
}

.footer-studio {
  padding: 18px 20px;
  background: var(--bg-2);
  border-left: 2px solid var(--cream);
  font-size: 13px;
  color: var(--ink-3);
  line-height: 1.8;
  font-weight: 300;
}

.footer-studio strong {
  color: var(--cream);
  font-weight: 500;
  letter-spacing: 0.14em;
  font-size: 11px;
  display: block;
  margin-bottom: 8px;
}

.footer-col h4 {
  font-size: 10px;
  font-weight: 600;
  color: var(--cream);
  letter-spacing: 0.32em;
  text-transform: uppercase;
  margin-bottom: 24px;
}

.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 13px; }

.footer-col a {
  font-size: 14px;
  color: var(--ink-2);
  font-weight: 300;
  transition: color 0.2s;
}

.footer-col a:hover { color: var(--cream); }

.footer-contact p {
  font-size: 14px;
  color: var(--ink-2);
  font-weight: 300;
  margin-bottom: 16px;
  display: flex;
  gap: 14px;
  align-items: flex-start;
  line-height: 1.65;
}

.footer-contact i {
  color: var(--cream);
  font-size: 13px;
  margin-top: 5px;
  width: 14px;
}

.footer-bottom {
  max-width: 1320px;
  margin: 0 auto;
  padding: 0 48px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 16px;
  flex-wrap: wrap;
  font-size: 12px;
  color: var(--ink-3);
  letter-spacing: 0.06em;
}

.footer-social {
  display: flex;
  gap: 8px;
}

.footer-social a {
  width: 38px;
  height: 38px;
  border: 1px solid var(--line-2);
  color: var(--ink-2);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  transition: all 0.25s;
}

.footer-social a:hover {
  background: var(--cream);
  border-color: var(--cream);
  color: var(--bg);
}

/* ============ REVEAL ============ */
.reveal {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.9s ease, transform 0.9s ease;
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
  width: 54px;
  height: 54px;
  border-radius: 50%;
  background: var(--cream);
  color: var(--bg);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  text-decoration: none;
  border: none;
  cursor: pointer;
  transition: all 0.3s;
  box-shadow: 0 16px 32px -12px rgba(232, 220, 192, 0.4);
}

.float-btn:hover {
  background: var(--cream-2);
  transform: translateY(-3px);
}

/* ============ LIGHTBOX ============ */
.lightbox {
  position: fixed;
  inset: 0;
  z-index: 999;
  background: rgba(10, 10, 10, 0.97);
  backdrop-filter: blur(16px);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 40px;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.4s, visibility 0.4s;
}

.lightbox.active {
  opacity: 1;
  visibility: visible;
}

.lightbox img {
  max-width: 92%;
  max-height: 88vh;
  object-fit: contain;
  transform: scale(0.94);
  transition: transform 0.4s;
}

.lightbox.active img { transform: scale(1); }

.lightbox-close {
  position: absolute;
  top: 32px;
  right: 32px;
  width: 54px;
  height: 54px;
  border-radius: 50%;
  background: transparent;
  border: 1px solid var(--cream);
  color: var(--cream);
  font-size: 20px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s;
}

.lightbox-close:hover {
  background: var(--cream);
  color: var(--bg);
  transform: rotate(90deg);
}

.lightbox-caption {
  position: absolute;
  bottom: 40px;
  left: 0;
  right: 0;
  text-align: center;
  color: var(--ink-2);
  font-size: 13px;
  letter-spacing: 0.14em;
  text-transform: uppercase;
}

/* ============ RESPONSIVE ============ */
@media (max-width: 1100px) {
  .hero-inner { padding: 140px 40px 40px; }
  .hero h1 { font-size: 64px; }
  .portfolio-grid { grid-template-columns: repeat(2, 1fr); }
  .pf-item.wide { grid-column: span 2; }
  .pf-item.tall { grid-row: span 1; aspect-ratio: 4 / 5; }
  .about-grid { grid-template-columns: 1fr; gap: 70px; }
  .about-visual { max-width: 500px; margin: 0 auto; }
  .services-grid { grid-template-columns: repeat(2, 1fr); }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 48px; }
  .footer-grid > div:first-child { grid-column: span 2; }
}

@media (max-width: 768px) {
  .wrap, .wrap-md, .nav-inner, .footer-grid, .footer-bottom { padding: 0 24px; }

  .nav-menu {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    width: 300px;
    height: 100vh;
    background: var(--bg-2);
    flex-direction: column;
    padding: 110px 32px 40px;
    gap: 4px;
    border-left: 1px solid var(--line);
    transition: right 0.4s;
    z-index: 99;
    align-items: stretch;
    justify-content: flex-start;
  }

  .nav-menu.open { display: flex; }
  .nav-menu a {
    padding: 16px 0;
    font-size: 14px;
    border-bottom: 1px solid var(--line);
  }
  .nav-menu a::after { display: none; }
  .nav-cta { display: none; }
  .nav-toggle { display: block; z-index: 1001; }

  .hero { min-height: auto; padding: 0 0 40px; }
  .hero-inner { padding: 120px 24px 20px; }
  .hero h1 { font-size: 48px; }
  .hero-scroll { display: none; }
  .hero-bottom { gap: 32px; padding-top: 32px; }
  .hero-stats { gap: 32px; }
  .hero-stat .num { font-size: 32px; }

  .section { padding: 80px 0; }

  .portfolio-grid { grid-template-columns: 1fr; gap: 16px; }
  .pf-item.wide, .pf-item.tall {
    grid-column: span 1;
    grid-row: span 1;
    aspect-ratio: 4 / 5;
  }

  .services-grid { grid-template-columns: 1fr; }
  .service-card { padding: 36px 28px; }

  .process-item {
    grid-template-columns: 60px 1fr;
    gap: 20px;
    padding: 32px 0;
  }
  .process-num { font-size: 36px; }

  .quote-mark-lg { font-size: 100px; }
  .quote-text { font-size: 22px; }

  .cta { padding: 90px 0; }
  .cta h2 { font-size: 36px; }
  .cta-actions { flex-direction: column; align-items: stretch; }
  .btn { justify-content: center; }

  .footer-grid { grid-template-columns: 1fr; }
  .footer-grid > div:first-child { grid-column: span 1; }

  .lightbox { padding: 20px; }
  .lightbox img { max-width: 100%; }
  .lightbox-close { top: 20px; right: 20px; width: 46px; height: 46px; }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 38px; }
  .section-head h2 { font-size: 30px; }
  .about-badge { right: -10px; bottom: -20px; padding: 20px 22px; }
  .about-badge-year { font-size: 34px; }
  .brand-text { font-size: 18px; }
  .hero-stats { gap: 24px; }
  .hero-stat .num { font-size: 28px; }
}
</style>
</head>
<body>

<!-- NAV -->
<nav class="nav" id="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <div class="brand-mark">L</div>
      <div class="brand-text">
        Lumen Studio
        <small>Photography · Est. 2012</small>
      </div>
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#tentang">Tentang</a></li>
      <li><a href="#layanan">Layanan</a></li>
      <li><a href="#proses">Proses</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>

    <a href="#kontak" class="nav-cta">Booking</a>

    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="hero-bg">
    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=1600&q=80" alt="">
  </div>

  <div class="hero-inner">
    <div class="hero-eyebrow">Studio Fotografi · Jakarta · Est. 2012</div>

    <h1>
      Cahaya, momen, <em>cerita yang abadi.</em>
    </h1>

    <div class="hero-bottom">
      <p class="hero-lede">
        Kami memotret lebih dari sekadar momen. Kami menangkap cahaya yang jatuh di wajah, tawa yang tidak direncanakan, dan getaran kecil di antara dua orang. Foto adalah cara kami menyimpan waktu.
      </p>

      <div class="hero-stats">
        <div class="hero-stat">
          <div class="num"><span class="counter" data-target="850">0</span><span>+</span></div>
          <div class="lbl">Sesi Foto<br>selesai</div>
        </div>
        <div class="hero-stat">
          <div class="num"><span class="counter" data-target="13">0</span></div>
          <div class="lbl">Tahun<br>berkarya</div>
        </div>
        <div class="hero-stat">
          <div class="num"><span class="counter" data-target="220">0</span><span>+</span></div>
          <div class="lbl">Wedding<br>terabadikan</div>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-scroll">Gulir</div>
</header>

<!-- TICKER -->
<div class="ticker">
  <div class="ticker-track">
    <div class="ticker-item">
      <span>Wedding</span> <i class="fas fa-circle"></i>
      <span>Pre-Wedding</span> <i class="fas fa-circle"></i>
      <span>Portrait</span> <i class="fas fa-circle"></i>
      <span>Produk</span> <i class="fas fa-circle"></i>
      <span>Arsitektur</span> <i class="fas fa-circle"></i>
      <span>Keluarga</span> <i class="fas fa-circle"></i>
      <span>Wedding</span> <i class="fas fa-circle"></i>
      <span>Pre-Wedding</span> <i class="fas fa-circle"></i>
      <span>Portrait</span> <i class="fas fa-circle"></i>
      <span>Produk</span> <i class="fas fa-circle"></i>
      <span>Arsitektur</span> <i class="fas fa-circle"></i>
      <span>Keluarga</span> <i class="fas fa-circle"></i>
    </div>
  </div>
</div>

<!-- PORTFOLIO -->
<section class="section" id="portfolio">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-eyebrow">Portfolio Pilihan</div>
      <h2>
        Karya yang kami <em>pilih sendiri.</em>
      </h2>
      <p>Bukan yang paling viral, tapi yang paling bermakna. Setiap foto punya cerita di baliknya.</p>
    </div>

    <div class="portfolio-filter reveal">
      <button class="filter-btn active" data-cat="all">Semua</button>
      <button class="filter-btn" data-cat="wedding">Wedding</button>
      <button class="filter-btn" data-cat="portrait">Portrait</button>
      <button class="filter-btn" data-cat="product">Produk</button>
      <button class="filter-btn" data-cat="architecture">Arsitektur</button>
    </div>

    <div class="portfolio-grid">

      <div class="pf-item wide reveal" data-cat="wedding" data-img="https://images.unsplash.com/photo-1519741497674-611481863552?w=1600&q=80">
        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=1200&q=80" alt="">
        <div class="pf-arrow"><i class="fas fa-arrow-right"></i></div>
        <div class="pf-overlay">
          <div class="pf-cat">Wedding · 2024</div>
          <div class="pf-title">Anindya & Bagas</div>
          <div class="pf-year">Jakarta, Juli 2024</div>
        </div>
      </div>

      <div class="pf-item reveal" data-cat="portrait" data-img="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=800&q=80" alt="">
        <div class="pf-arrow"><i class="fas fa-arrow-right"></i></div>
        <div class="pf-overlay">
          <div class="pf-cat">Portrait · 2024</div>
          <div class="pf-title">Potret di Studio</div>
          <div class="pf-year">Studio Lumen, Jakarta</div>
        </div>
      </div>

      <div class="pf-item reveal" data-cat="product" data-img="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800&q=80" alt="">
        <div class="pf-arrow"><i class="fas fa-arrow-right"></i></div>
        <div class="pf-overlay">
          <div class="pf-cat">Produk · 2023</div>
          <div class="pf-title">Jam Tangan Mewah</div>
          <div class="pf-year">Untuk Brand Lokal</div>
        </div>
      </div>

      <div class="pf-item reveal" data-cat="architecture" data-img="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&q=80" alt="">
        <div class="pf-arrow"><i class="fas fa-arrow-right"></i></div>
        <div class="pf-overlay">
          <div class="pf-cat">Arsitektur · 2023</div>
          <div class="pf-title">Rumah Kebayoran</div>
          <div class="pf-year">Foto Interior</div>
        </div>
      </div>

      <div class="pf-item tall reveal" data-cat="wedding" data-img="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?w=800&q=80" alt="">
        <div class="pf-arrow"><i class="fas fa-arrow-right"></i></div>
        <div class="pf-overlay">
          <div class="pf-cat">Wedding · 2024</div>
          <div class="pf-title">Citra & Dimas</div>
          <div class="pf-year">Bogor, Desember 2024</div>
        </div>
      </div>

      <div class="pf-item reveal" data-cat="portrait" data-img="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=800&q=80" alt="">
        <div class="pf-arrow"><i class="fas fa-arrow-right"></i></div>
        <div class="pf-overlay">
          <div class="pf-cat">Portrait · 2024</div>
          <div class="pf-title">Sesi Personal</div>
          <div class="pf-year">Di Luar Studio</div>
        </div>
      </div>

      <div class="pf-item reveal" data-cat="product" data-img="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800&q=80" alt="">
        <div class="pf-arrow"><i class="fas fa-arrow-right"></i></div>
        <div class="pf-overlay">
          <div class="pf-cat">Produk · 2023</div>
          <div class="pf-title">Sepatu Sneaker</div>
          <div class="pf-year">Katalog Brand</div>
        </div>
      </div>

      <div class="pf-item reveal" data-cat="wedding" data-img="https://images.unsplash.com/photo-1583939003579-730e3918a45a?w=1200&q=80">
        <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?w=800&q=80" alt="">
        <div class="pf-arrow"><i class="fas fa-arrow-right"></i></div>
        <div class="pf-overlay">
          <div class="pf-cat">Pre-Wedding · 2024</div>
          <div class="pf-title">Sesi Pre-Wedding</div>
          <div class="pf-year">Yogyakarta</div>
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
        <div class="about-img">
          <img src="https://images.unsplash.com/photo-1554048612-b6a482bc67e5?w=800&q=80" alt="">
        </div>
        <div class="about-badge">
          <div class="about-badge-label">Sejak</div>
          <div class="about-badge-year">2012</div>
        </div>
      </div>

      <div class="about-text reveal">
        <div class="sec-eyebrow">Tentang Kami</div>
        <h2>
          Kami percaya foto yang baik <em>tidak bisa dibuat-buat.</em>
        </h2>

        <p>
          Lumen Studio dimulai pada 2012 dari sebuah kamar kos dan satu kamera bekas. Seorang fotografer muda, Rara Anindita, memulai dengan memotret teman-teman kampusnya gratis — hanya untuk belajar bagaimana cahaya jatuh di wajah manusia. Tiga belas tahun kemudian, kami sudah memotret lebih dari 220 pernikahan dan ratusan sesi lainnya.
        </p>

        <p>
          Selama bertahun-tahun, kami belajar satu hal penting: foto yang bagus bukan tentang pose, tapi tentang kejujuran momen. Kami tidak suka menyuruh klien tersenyum palsu. Kami lebih suka menunggu sampai mereka lupa bahwa kami sedang memotret.
        </p>

        <div class="about-values">
          <div class="about-value">
            <div class="num">13</div>
            <div class="lbl">Tahun berkarya<br>dan belajar</div>
          </div>
          <div class="about-value">
            <div class="num">220<span style="font-size:22px;color:var(--ink-3)">+</span></div>
            <div class="lbl">Wedding yang<br>kami abadikan</div>
          </div>
          <div class="about-value">
            <div class="num">850<span style="font-size:22px;color:var(--ink-3)">+</span></div>
            <div class="lbl">Sesi foto<br>selesai</div>
          </div>
          <div class="about-value">
            <div class="num">4.9</div>
            <div class="lbl">Rating rata-rata<br>dari klien</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- LAYANAN -->
<section class="section services" id="layanan">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Layanan Kami</div>
      <h2>
        Apapun momennya, <em>kami siap memotret.</em>
      </h2>
      <p>Setiap layanan dikerjakan dengan pendekatan yang sama — sabar, teliti, dan penuh perhatian pada detail.</p>
    </div>

    <div class="services-grid">

      <div class="service-card reveal">
        <div class="service-num">— 01</div>
        <div class="service-icon"><i class="fas fa-heart"></i></div>
        <h3>Wedding Photography</h3>
        <p>Dokumentasi lengkap hari pernikahan Anda, dari persiapan sampai resepsi. Dua fotografer, satu hari penuh, tanpa batas jumlah foto.</p>
        <ul class="service-includes">
          <li>2 fotografer profesional</li>
          <li>Full day coverage (12 jam)</li>
          <li>500+ foto yang diedit</li>
          <li>Album fisik premium</li>
          <li>Video highlight 3 menit</li>
        </ul>
        <div class="service-price">
          <span class="from">Mulai dari</span>
          <span class="amount">18 jt</span>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-num">— 02</div>
        <div class="service-icon"><i class="fas fa-camera"></i></div>
        <h3>Pre-Wedding Session</h3>
        <p>Sesi foto sebelum pernikahan di lokasi pilihan Anda. Bisa di dalam studio, taman, atau tempat yang punya kenangan khusus.</p>
        <ul class="service-includes">
          <li>4 jam sesi foto</li>
          <li>2 lokasi berbeda</li>
          <li>3 outfit dengan MUA</li>
          <li>150+ foto yang diedit</li>
          <li>Cetak 20 foto ukuran besar</li>
        </ul>
        <div class="service-price">
          <span class="from">Mulai dari</span>
          <span class="amount">7,5 jt</span>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-num">— 03</div>
        <div class="service-icon"><i class="fas fa-user"></i></div>
        <h3>Personal Portrait</h3>
        <p>Untuk kebutuhan profesional — LinkedIn, website pribadi, atau portofolio. Sesi singkat, hasil maksimal.</p>
        <ul class="service-includes">
          <li>1 jam sesi foto</li>
          <li>2 background pilihan</li>
          <li>1 outfit (bisa ganti)</li>
          <li>30 foto yang diedit</li>
          <li>File resolusi tinggi</li>
        </ul>
        <div class="service-price">
          <span class="from">Mulai dari</span>
          <span class="amount">1,5 jt</span>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-num">— 04</div>
        <div class="service-icon"><i class="fas fa-box"></i></div>
        <h3>Foto Produk</h3>
        <p>Untuk brand lokal yang butuh foto produk berkualitas untuk katalog, e-commerce, dan media sosial.</p>
        <ul class="service-includes">
          <li>20 produk per sesi</li>
          <li>3 angle per produk</li>
          <li>Background putih & lifestyle</li>
          <li>Editing profesional</li>
          <li>File siap upload</li>
        </ul>
        <div class="service-price">
          <span class="from">Mulai dari</span>
          <span class="amount">3,2 jt</span>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-num">— 05</div>
        <div class="service-icon"><i class="fas fa-house"></i></div>
        <h3>Arsitektur & Interior</h3>
        <p>Foto bangunan, interior, dan ruang untuk agen properti, arsitek, dan desainer interior.</p>
        <ul class="service-includes">
          <li>Survey lokasi gratis</li>
          <li>Foto siang & golden hour</li>
          <li>Wide & detail shot</li>
          <li>Editing warna natural</li>
          <li>File siap cetak & web</li>
        </ul>
        <div class="service-price">
          <span class="from">Mulai dari</span>
          <span class="amount">2,8 jt</span>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-num">— 06</div>
        <div class="service-icon"><i class="fas fa-users"></i></div>
        <h3>Family Portrait</h3>
        <p>Sesi foto keluarga di studio atau di rumah Anda. Untuk mengabadikan momen ketika anak-anak masih kecil.</p>
        <ul class="service-includes">
          <li>2 jam sesi foto</li>
          <li>Lokasi bebas pilih</li>
          <li>Hingga 8 orang</li>
          <li>50 foto yang diedit</li>
          <li>Album kenangan keluarga</li>
        </ul>
        <div class="service-price">
          <span class="from">Mulai dari</span>
          <span class="amount">2,5 jt</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PROSES -->
<section class="section process" id="proses">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-eyebrow">Cara Kami Bekerja</div>
      <h2>
        Empat langkah <em>menuju foto yang tepat.</em>
      </h2>
    </div>

    <div class="process-list">

      <div class="process-item reveal">
        <div class="process-num">01</div>
        <div class="process-content">
          <h3>Ngobrol Dulu</h3>
          <p>Sebelum bicara soal harga, kami ngobrol dulu. Apa acaranya, siapa saja yang hadir, dan momen apa yang paling ingin Anda abadikan. Dari situ kami bisa menyarankan paket yang paling pas.</p>
        </div>
      </div>

      <div class="process-item reveal">
        <div class="process-num">02</div>
        <div class="process-content">
          <h3>Persiapan & Perencanaan</h3>
          <p>Kami bantu Anda menyusun rundown, memilih lokasi, dan mempersiapkan hal-hal teknis yang mungkin terlewat. Semua supaya hari H berjalan lancar tanpa Anda perlu memikirkan hal-hal kecil.</p>
        </div>
      </div>

      <div class="process-item reveal">
        <div class="process-num">03</div>
        <div class="process-content">
          <h3>Hari Pemotretan</h3>
          <p>Kami datang lebih awal, membaur dengan suasana, dan memotret apa adanya. Tidak banyak mengarahkan. Yang penting Anda dan keluarga nyaman, sisanya kami urus.</p>
        </div>
      </div>

      <div class="process-item reveal">
        <div class="process-num">04</div>
        <div class="process-content">
          <h3>Editing & Penyerahan</h3>
          <p>Proses editing memakan waktu 2 hingga 4 minggu, tergantung paket. Hasil akhir kami kirim dalam bentuk file resolusi tinggi dan, jika ada, album fisik premium.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- QUOTES -->
<section class="section quotes">
  <div class="wrap">
    <div class="quote-main reveal">
      <div class="quote-mark-lg">"</div>

      <p class="quote-text" id="quoteText">
        Kami tidak sadar kalau sedang difoto sampai semuanya selesai. Rara dan timnya benar-benar membaur dengan acara. Hasilnya jujur dan hangat, bukan seperti foto pose yang dibuat-buat.
      </p>

      <div class="quote-author">
        <img src="https://i.pravatar.cc/150?img=45" alt="" id="quoteImg">
        <div class="quote-author-info">
          <div class="name" id="quoteName">Anindya Prameswari</div>
          <div class="role" id="quoteRole">Wedding · Jakarta, 2024</div>
        </div>
      </div>

      <div class="quote-dots" id="quoteDots">
        <button class="quote-dot active" data-i="0"></button>
        <button class="quote-dot" data-i="1"></button>
        <button class="quote-dot" data-i="2"></button>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta" id="kontak">
  <div class="wrap">
    <div class="cta-inner reveal">
      <div class="sec-eyebrow">Mari Bekerja Sama</div>
      <h2>
        Ceritakan momen <em>yang ingin Anda abadikan.</em>
      </h2>
      <p>
        Setiap proyek dimulai dari obrolan. Ceritakan kepada kami momen atau proyek yang Anda rencanakan, dan kami akan bantu memikirkan bagaimana memotretnya dengan tepat.
      </p>
      <div class="cta-actions">
        <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2015" class="btn btn-cream" target="_blank">
          <i class="fab fa-whatsapp"></i> Chat via WhatsApp
        </a>
        <a href="mailto:hello@lumenstudio.id" class="btn btn-outline">
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
        <div class="brand-mark">L</div>
        <div class="brand-text">
          Lumen Studio
          <small>Photography · Est. 2012</small>
        </div>
      </div>
      <p class="footer-desc">
        Studio fotografi yang percaya bahwa foto yang baik lahir dari kejujuran momen, bukan dari pose yang dibuat-buat.
      </p>
      <div class="footer-studio">
        <strong>STUDIO KAMI</strong>
        Jl. Senopati Raya 88<br>
        Kebayoran Baru, Jakarta Selatan 12190<br>
        Buka Senin–Sabtu, 10.00–19.00
      </div>
    </div>

    <div class="footer-col">
      <h4>Layanan</h4>
      <ul>
        <li><a href="#">Wedding Photography</a></li>
        <li><a href="#">Pre-Wedding Session</a></li>
        <li><a href="#">Personal Portrait</a></li>
        <li><a href="#">Foto Produk</a></li>
        <li><a href="#">Arsitektur & Interior</a></li>
        <li><a href="#">Family Portrait</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Studio</h4>
      <ul>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Tim Fotografer</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Karier</a></li>
        <li><a href="#">Kontak</a></li>
      </ul>
    </div>

    <div class="footer-col footer-contact">
      <h4>Kontak</h4>
      <p><i class="fas fa-location-dot"></i> Jl. Senopati Raya 88<br>Kebayoran Baru, Jakarta Selatan 12190</p>
      <p><i class="fas fa-phone"></i> (021) 555-0250</p>
      <p><i class="fab fa-whatsapp"></i> +62 812 3456 7890</p>
      <p><i class="fas fa-envelope"></i> hello@lumenstudio.id</p>
    </div>

  </div>

  <div class="footer-bottom">
    <div>© 2025 Lumen Studio. Semua hak dilindungi.</div>
    <div class="footer-social">
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="Pinterest"><i class="fab fa-pinterest-p"></i></a>
      <a href="#" aria-label="Behance"><i class="fab fa-behance"></i></a>
      <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
    </div>
  </div>
</footer>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
  <button class="lightbox-close" id="lightboxClose" aria-label="Tutup">
    <i class="fas fa-times"></i>
  </button>
  <img src="" alt="Preview" id="lightboxImg">
  <div class="lightbox-caption" id="lightboxCaption"></div>
</div>

<!-- FLOAT -->
<div class="float-group">
  <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2015" class="float-btn" target="_blank" aria-label="WhatsApp">
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
}, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });
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

// Portfolio filter
const filterBtns = document.querySelectorAll('.filter-btn');
const pfItems = document.querySelectorAll('.pf-item');

filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    filterBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const cat = btn.dataset.cat;

    pfItems.forEach(item => {
      const show = cat === 'all' || item.dataset.cat === cat;
      item.style.display = show ? 'block' : 'none';
    });
  });
});

// Lightbox
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightboxImg');
const lightboxCaption = document.getElementById('lightboxCaption');
const lightboxClose = document.getElementById('lightboxClose');

pfItems.forEach(item => {
  item.addEventListener('click', () => {
    lightboxImg.src = item.dataset.img;
    const title = item.querySelector('.pf-title').textContent;
    const cat = item.querySelector('.pf-cat').textContent;
    lightboxCaption.textContent = cat + ' — ' + title;
    lightbox.classList.add('active');
    document.body.style.overflow = 'hidden';
  });
});

function closeLightbox() {
  lightbox.classList.remove('active');
  document.body.style.overflow = '';
}

lightboxClose.addEventListener('click', closeLightbox);
lightbox.addEventListener('click', (e) => {
  if (e.target === lightbox) closeLightbox();
});
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') closeLightbox();
});

// Quote rotation
const quotes = [
  {
    text: 'Kami tidak sadar kalau sedang difoto sampai semuanya selesai. Rara dan timnya benar-benar membaur dengan acara. Hasilnya jujur dan hangat, bukan seperti foto pose yang dibuat-buat.',
    name: 'Anindya Prameswari',
    role: 'Wedding · Jakarta, 2024',
    img: 'https://i.pravatar.cc/150?img=45'
  },
  {
    text: 'Saya pakai Lumen Studio untuk foto produk brand saya. Detailnya diperhatikan sekali, warnanya pas. Sekarang semua katalog online kami pakai foto mereka.',
    name: 'Bagas Prasetyo',
    role: 'Founder Brand Fashion · 2024',
    img: 'https://i.pravatar.cc/150?img=33'
  },
  {
    text: 'Sesi portrait untuk LinkedIn saya hasilnya jauh di atas ekspektasi. Suasananya santai, tidak kaku. Saya yang biasanya tidak suka difoto jadi nyaman.',
    name: 'Citra Handayani',
    role: 'Portrait Session · 2024',
    img: 'https://i.pravatar.cc/150?img=47'
  }
];

const quoteText = document.getElementById('quoteText');
const quoteName = document.getElementById('quoteName');
const quoteRole = document.getElementById('quoteRole');
const quoteImg = document.getElementById('quoteImg');
const quoteDots = document.querySelectorAll('#quoteDots .quote-dot');

let currentQuote = 0;
let quoteInterval;

function showQuote(i) {
  currentQuote = i;
  const q = quotes[i];

  quoteText.style.opacity = '0';
  quoteName.style.opacity = '0';
  quoteRole.style.opacity = '0';

  setTimeout(() => {
    quoteText.textContent = q.text;
    quoteName.textContent = q.name;
    quoteRole.textContent = q.role;
    quoteImg.src = q.img;

    quoteText.style.opacity = '1';
    quoteName.style.opacity = '1';
    quoteRole.style.opacity = '1';
  }, 250);

  quoteDots.forEach((d, idx) => d.classList.toggle('active', idx === i));
}

quoteText.style.transition = 'opacity 0.3s';
quoteName.style.transition = 'opacity 0.3s';
quoteRole.style.transition = 'opacity 0.3s';

quoteDots.forEach(dot => {
  dot.addEventListener('click', () => {
    clearInterval(quoteInterval);
    showQuote(+dot.dataset.i);
    startQuoteRotation();
  });
});

function startQuoteRotation() {
  quoteInterval = setInterval(() => {
    showQuote((currentQuote + 1) % quotes.length);
  }, 6500);
}
startQuoteRotation();

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