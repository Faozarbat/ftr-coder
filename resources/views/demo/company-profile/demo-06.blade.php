@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dapur Bumi — Masakan Nusantara dengan Rasa Rumah</title>
<meta name="description" content="Dapur Bumi — restoran masakan Nusantara yang menyajikan cita rasa rumah dengan bahan pilihan dari petani lokal.">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700;9..144,800;9..144,900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --bg: #1a120b;
  --bg-2: #241a11;
  --bg-3: #2f2318;
  --cream: #f5ede0;
  --cream-2: #e8dcc8;
  --cream-3: #d4c4a8;
  --gold: #b8873a;
  --gold-2: #d4a04f;
  --gold-soft: #e8c888;
  --line: #3a2a1c;
  --line-2: #4a3624;
  --ink: #f5ede0;
  --ink-2: #d4c4a8;
  --ink-3: #a89678;
  --serif: 'Fraunces', Georgia, serif;
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
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 32px;
}

.wrap-sm {
  max-width: 900px;
  margin: 0 auto;
  padding: 0 32px;
}

/* ============ NAV ============ */
.nav {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  padding: 20px 0;
  z-index: 100;
  transition: background 0.4s, padding 0.4s, border 0.4s;
  border-bottom: 1px solid transparent;
}

.nav.scrolled {
  background: rgba(26, 18, 11, 0.94);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  padding: 14px 0;
  border-bottom-color: var(--line);
}

.nav-inner {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 32px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.brand {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 700;
  letter-spacing: -0.01em;
  color: var(--cream);
  display: flex;
  align-items: center;
  gap: 12px;
}

.brand-icon {
  width: 38px;
  height: 38px;
  background: var(--gold);
  color: var(--bg);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
  font-family: var(--serif);
  font-weight: 800;
}

.brand-sub {
  font-family: var(--sans);
  font-size: 10px;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--gold-2);
  font-weight: 500;
  display: block;
  line-height: 1;
  margin-top: 3px;
}

.nav-menu {
  display: flex;
  gap: 4px;
  list-style: none;
  align-items: center;
}

.nav-menu a {
  font-size: 14px;
  font-weight: 500;
  color: var(--ink-2);
  padding: 8px 16px;
  transition: color 0.2s;
  letter-spacing: 0.02em;
}

.nav-menu a:hover { color: var(--gold-2); }

.nav-reserve {
  padding: 10px 22px;
  background: var(--gold);
  color: var(--bg);
  border-radius: 999px;
  font-size: 13px;
  font-weight: 600;
  transition: background 0.2s;
  letter-spacing: 0.03em;
  text-transform: uppercase;
}

.nav-reserve:hover { background: var(--gold-2); }

.nav-toggle {
  display: none;
  background: none;
  border: none;
  color: var(--cream);
  font-size: 22px;
  padding: 8px;
}

/* ============ HERO ============ */
.hero {
  min-height: 100vh;
  position: relative;
  display: flex;
  align-items: center;
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
  opacity: 0.42;
}

.hero-bg::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(26,18,11,0.7) 0%, rgba(26,18,11,0.55) 40%, rgba(26,18,11,0.95) 100%);
}

.hero-content {
  position: relative;
  z-index: 1;
  max-width: 1240px;
  margin: 0 auto;
  padding: 140px 32px 100px;
  width: 100%;
}

.hero-meta {
  display: inline-flex;
  align-items: center;
  gap: 14px;
  padding: 8px 18px;
  border: 1px solid rgba(212, 160, 79, 0.35);
  border-radius: 999px;
  font-size: 12px;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--gold-2);
  font-weight: 500;
  margin-bottom: 32px;
}

.hero-meta i { font-size: 11px; }

.hero h1 {
  font-family: var(--serif);
  font-size: clamp(48px, 7vw, 96px);
  font-weight: 700;
  line-height: 0.98;
  letter-spacing: -0.03em;
  color: var(--cream);
  margin-bottom: 32px;
  max-width: 900px;
}

.hero h1 em {
  font-style: italic;
  font-weight: 500;
  color: var(--gold-2);
}

.hero-lede {
  font-size: 18px;
  color: var(--ink-2);
  max-width: 540px;
  margin-bottom: 44px;
  line-height: 1.7;
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
  padding: 16px 32px;
  font-size: 14px;
  font-weight: 600;
  border-radius: 999px;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  border: 1px solid transparent;
  transition: all 0.25s;
  cursor: pointer;
  font-family: inherit;
}

.btn-gold {
  background: var(--gold);
  color: var(--bg);
}

.btn-gold:hover {
  background: var(--gold-2);
  transform: translateY(-2px);
}

.btn-outline {
  background: transparent;
  color: var(--cream);
  border-color: rgba(245, 237, 224, 0.3);
}

.btn-outline:hover {
  border-color: var(--cream);
  background: rgba(245, 237, 224, 0.08);
}

.hero-scroll {
  position: absolute;
  bottom: 40px;
  right: 40px;
  display: flex;
  align-items: center;
  gap: 14px;
  color: var(--ink-3);
  font-size: 11px;
  letter-spacing: 0.25em;
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

/* ============ STRIP INFO ============ */
.info-strip {
  background: var(--bg-2);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  padding: 32px 0;
}

.info-grid {
  max-width: 1240px;
  margin: 0 auto;
  padding: 0 32px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
}

.info-item {
  display: flex;
  align-items: flex-start;
  gap: 16px;
}

.info-icon {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  border: 1px solid var(--gold);
  color: var(--gold);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
  flex-shrink: 0;
}

.info-item h4 {
  font-family: var(--serif);
  font-size: 17px;
  font-weight: 600;
  color: var(--cream);
  margin-bottom: 4px;
  letter-spacing: -0.01em;
}

.info-item p {
  font-size: 13px;
  color: var(--ink-3);
  line-height: 1.5;
}

/* ============ SECTION BASE ============ */
.section {
  padding: 110px 0;
  position: relative;
}

.section-head {
  margin-bottom: 64px;
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
  letter-spacing: 0.25em;
  text-transform: uppercase;
  color: var(--gold-2);
  font-weight: 500;
  margin-bottom: 22px;
}

.sec-label::before,
.sec-label::after {
  content: '';
  width: 24px;
  height: 1px;
  background: var(--gold-2);
}

.section-head.center .sec-label::before { display: none; }

.section-head h2 {
  font-family: var(--serif);
  font-size: clamp(36px, 5vw, 60px);
  font-weight: 700;
  line-height: 1.05;
  letter-spacing: -0.025em;
  color: var(--cream);
  margin-bottom: 20px;
}

.section-head h2 em {
  font-style: italic;
  font-weight: 500;
  color: var(--gold-2);
}

.section-head p {
  font-size: 17px;
  color: var(--ink-2);
  line-height: 1.75;
}

/* ============ STORY ============ */
.story {
  background: var(--bg);
}

.story-grid {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 80px;
  align-items: center;
}

.story-imgs {
  position: relative;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.story-img {
  border-radius: 6px;
  overflow: hidden;
  aspect-ratio: 3 / 4;
}

.story-img.tall {
  grid-row: span 2;
  aspect-ratio: 3 / 5;
  margin-top: 40px;
}

.story-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.7s;
}

.story-img:hover img { transform: scale(1.05); }

.story-badge {
  position: absolute;
  bottom: -20px;
  right: -20px;
  width: 130px;
  height: 130px;
  background: var(--gold);
  color: var(--bg);
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  transform: rotate(-8deg);
  box-shadow: 0 20px 40px -12px rgba(184, 135, 58, 0.5);
}

.story-badge .num {
  font-family: var(--serif);
  font-size: 34px;
  font-weight: 800;
  line-height: 1;
  letter-spacing: -0.02em;
}

.story-badge .lbl {
  font-size: 10px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  font-weight: 600;
  margin-top: 4px;
}

.story-text h2 {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 700;
  line-height: 1.08;
  letter-spacing: -0.025em;
  color: var(--cream);
  margin-bottom: 28px;
}

.story-text h2 em {
  font-style: italic;
  font-weight: 500;
  color: var(--gold-2);
}

.story-text p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.85;
  margin-bottom: 22px;
}

.story-text p:first-of-type::first-letter {
  font-family: var(--serif);
  font-size: 68px;
  font-weight: 700;
  float: left;
  line-height: 0.85;
  padding: 10px 14px 0 0;
  color: var(--gold);
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

.story-sign .name {
  font-family: var(--serif);
  font-size: 18px;
  font-weight: 600;
  color: var(--cream);
  font-style: italic;
}

.story-sign .role {
  font-size: 12px;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--ink-3);
  margin-top: 2px;
}

/* ============ MENU ============ */
.menu {
  background: var(--bg-2);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.menu-tabs {
  display: flex;
  gap: 8px;
  justify-content: center;
  margin-bottom: 56px;
  flex-wrap: wrap;
}

.menu-tab {
  padding: 10px 24px;
  background: transparent;
  border: 1px solid var(--line-2);
  color: var(--ink-2);
  font-family: var(--sans);
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  border-radius: 999px;
  transition: all 0.25s;
  cursor: pointer;
}

.menu-tab:hover {
  border-color: var(--gold);
  color: var(--gold-2);
}

.menu-tab.active {
  background: var(--gold);
  border-color: var(--gold);
  color: var(--bg);
}

.menu-list {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 40px 80px;
  max-width: 1100px;
  margin: 0 auto;
}

.menu-item {
  display: flex;
  gap: 20px;
  padding-bottom: 24px;
  border-bottom: 1px dashed var(--line-2);
}

.menu-thumb {
  width: 80px;
  height: 80px;
  border-radius: 6px;
  overflow: hidden;
  flex-shrink: 0;
}

.menu-thumb img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.menu-body {
  flex: 1;
  min-width: 0;
}

.menu-row {
  display: flex;
  justify-content: space-between;
  align-items: baseline;
  gap: 12px;
  margin-bottom: 6px;
}

.menu-row h3 {
  font-family: var(--serif);
  font-size: 20px;
  font-weight: 600;
  color: var(--cream);
  letter-spacing: -0.01em;
}

.menu-row .price {
  font-family: var(--serif);
  font-size: 18px;
  font-weight: 600;
  color: var(--gold-2);
  white-space: nowrap;
}

.menu-body p {
  font-size: 14px;
  color: var(--ink-3);
  line-height: 1.6;
}

.menu-badge {
  display: inline-block;
  padding: 2px 10px;
  background: transparent;
  border: 1px solid var(--gold);
  color: var(--gold-2);
  border-radius: 999px;
  font-size: 10px;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  font-weight: 600;
  margin-left: 8px;
  vertical-align: middle;
}

/* ============ SIGNATURE ============ */
.signature {
  padding: 0;
  position: relative;
  overflow: hidden;
}

.signature-inner {
  display: grid;
  grid-template-columns: 1fr 1fr;
  min-height: 600px;
}

.signature-img {
  position: relative;
  overflow: hidden;
}

.signature-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.signature-text {
  background: var(--bg-3);
  padding: 90px 80px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.signature-text .sec-label { margin-bottom: 24px; }

.signature-text h2 {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 52px);
  font-weight: 700;
  line-height: 1.05;
  letter-spacing: -0.025em;
  color: var(--cream);
  margin-bottom: 24px;
}

.signature-text h2 em {
  font-style: italic;
  color: var(--gold-2);
  font-weight: 500;
}

.signature-text p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.8;
  margin-bottom: 32px;
}

.signature-list {
  list-style: none;
  display: grid;
  gap: 14px;
}

.signature-list li {
  display: flex;
  align-items: center;
  gap: 14px;
  font-size: 14px;
  color: var(--ink-2);
}

.signature-list i {
  color: var(--gold);
  font-size: 12px;
}

/* ============ QUOTES ============ */
.quotes {
  background: var(--bg);
}

.quotes-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 32px;
}

.quote-card {
  padding: 40px 32px;
  border: 1px solid var(--line);
  border-radius: 6px;
  transition: all 0.3s;
  position: relative;
}

.quote-card:hover {
  border-color: var(--gold);
  background: var(--bg-2);
}

.quote-stars {
  display: flex;
  gap: 4px;
  color: var(--gold-2);
  font-size: 12px;
  margin-bottom: 22px;
}

.quote-card .quote-text {
  font-family: var(--serif);
  font-size: 19px;
  font-weight: 400;
  line-height: 1.55;
  color: var(--ink);
  margin-bottom: 28px;
  font-style: italic;
  letter-spacing: -0.005em;
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
  color: var(--cream);
}

.quote-author .role {
  font-size: 12px;
  color: var(--ink-3);
  letter-spacing: 0.05em;
}

/* ============ RESERVATION ============ */
.reservation {
  background: var(--bg-2);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  position: relative;
}

.reservation-grid {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 80px;
  align-items: center;
}

.reservation-text h2 {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 52px);
  font-weight: 700;
  line-height: 1.08;
  letter-spacing: -0.025em;
  color: var(--cream);
  margin-bottom: 24px;
}

.reservation-text h2 em {
  font-style: italic;
  color: var(--gold-2);
  font-weight: 500;
}

.reservation-text p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.8;
  margin-bottom: 32px;
  max-width: 480px;
}

.reservation-contact {
  display: grid;
  gap: 18px;
}

.res-contact-item {
  display: flex;
  align-items: center;
  gap: 16px;
  padding: 18px 20px;
  background: var(--bg);
  border: 1px solid var(--line);
  border-radius: 6px;
  transition: border-color 0.2s;
}

.res-contact-item:hover { border-color: var(--gold); }

.res-contact-item .icon {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--bg-3);
  color: var(--gold-2);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  flex-shrink: 0;
}

.res-contact-item .label {
  font-size: 11px;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--ink-3);
  margin-bottom: 3px;
}

.res-contact-item .value {
  font-family: var(--serif);
  font-size: 17px;
  font-weight: 600;
  color: var(--cream);
}

.res-form {
  padding: 44px 40px;
  background: var(--bg);
  border: 1px solid var(--line);
  border-radius: 8px;
}

.res-form h3 {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 600;
  color: var(--cream);
  margin-bottom: 8px;
  letter-spacing: -0.015em;
}

.res-form > p {
  font-size: 14px;
  color: var(--ink-3);
  margin-bottom: 28px;
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
  margin-bottom: 16px;
}

.form-field {
  display: flex;
  flex-direction: column;
  gap: 8px;
  margin-bottom: 16px;
}

.form-field label {
  font-size: 11px;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--ink-3);
  font-weight: 500;
}

.form-field input,
.form-field select,
.form-field textarea {
  background: transparent;
  border: none;
  border-bottom: 1px solid var(--line-2);
  padding: 10px 0;
  color: var(--cream);
  font-family: inherit;
  font-size: 15px;
  outline: none;
  transition: border-color 0.2s;
}

.form-field input:focus,
.form-field select:focus,
.form-field textarea:focus {
  border-bottom-color: var(--gold);
}

.form-field select {
  cursor: pointer;
  -webkit-appearance: none;
  appearance: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%23a89678' stroke-width='2'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right center;
  padding-right: 24px;
}

.form-field select option {
  background: var(--bg);
  color: var(--cream);
}

.res-form .btn {
  width: 100%;
  justify-content: center;
  margin-top: 12px;
}

/* ============ CTA STRIP ============ */
.cta-strip {
  padding: 80px 0;
  background: var(--gold);
  color: var(--bg);
  text-align: center;
}

.cta-strip h2 {
  font-family: var(--serif);
  font-size: clamp(28px, 4vw, 44px);
  font-weight: 700;
  line-height: 1.1;
  letter-spacing: -0.025em;
  margin-bottom: 20px;
  max-width: 700px;
  margin-left: auto;
  margin-right: auto;
}

.cta-strip p {
  font-size: 17px;
  margin-bottom: 32px;
  max-width: 540px;
  margin-left: auto;
  margin-right: auto;
  color: rgba(26, 18, 11, 0.75);
}

.cta-strip .btn {
  background: var(--bg);
  color: var(--cream);
}

.cta-strip .btn:hover {
  background: var(--bg-2);
  transform: translateY(-2px);
}

/* ============ FOOTER ============ */
.footer {
  background: var(--bg);
  padding: 80px 0 32px;
  border-top: 1px solid var(--line);
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.3fr;
  gap: 60px;
  padding-bottom: 56px;
  border-bottom: 1px solid var(--line);
  margin-bottom: 32px;
}

.footer-brand {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 700;
  color: var(--cream);
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 20px;
}

.footer-desc {
  font-size: 14px;
  color: var(--ink-3);
  line-height: 1.7;
  max-width: 320px;
  margin-bottom: 24px;
}

.footer-hours {
  padding: 16px 18px;
  border: 1px solid var(--line);
  border-radius: 6px;
  font-size: 13px;
  color: var(--ink-2);
  line-height: 1.7;
}

.footer-hours strong {
  color: var(--gold-2);
  font-weight: 500;
  letter-spacing: 0.05em;
}

.footer-col h4 {
  font-family: var(--serif);
  font-size: 17px;
  font-weight: 600;
  color: var(--cream);
  margin-bottom: 22px;
}

.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 12px; }

.footer-col a {
  font-size: 14px;
  color: var(--ink-3);
  transition: color 0.2s;
}

.footer-col a:hover { color: var(--gold-2); }

.footer-contact p {
  font-size: 14px;
  color: var(--ink-3);
  margin-bottom: 14px;
  line-height: 1.7;
  display: flex;
  gap: 12px;
  align-items: flex-start;
}

.footer-contact i {
  color: var(--gold-2);
  font-size: 13px;
  margin-top: 4px;
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
  border-radius: 50%;
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
  padding: 14px 22px 14px 18px;
  background: var(--gold);
  color: var(--bg);
  border-radius: 999px;
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  z-index: 200;
  box-shadow: 0 14px 30px -10px rgba(184, 135, 58, 0.6);
  transition: all 0.25s;
}

.wa-float i { font-size: 18px; }

.wa-float:hover {
  background: var(--gold-2);
  transform: translateY(-3px);
}

/* ============ RESPONSIVE ============ */
@media (max-width: 1024px) {
  .info-grid { grid-template-columns: repeat(2, 1fr); gap: 28px; }
  .story-grid { grid-template-columns: 1fr; gap: 60px; }
  .signature-inner { grid-template-columns: 1fr; }
  .signature-img { min-height: 400px; }
  .signature-text { padding: 60px 40px; }
  .reservation-grid { grid-template-columns: 1fr; gap: 48px; }
  .quotes-grid { grid-template-columns: 1fr; }
  .menu-list { grid-template-columns: 1fr; gap: 28px; max-width: 640px; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
  .footer-grid > div:first-child { grid-column: span 2; }
}

@media (max-width: 768px) {
  .wrap, .wrap-sm { padding: 0 20px; }

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
    gap: 8px;
    border-left: 1px solid var(--line);
    transition: right 0.35s;
    z-index: 99;
    align-items: stretch;
    justify-content: flex-start;
  }

  .nav-menu.open { display: flex; }
  .nav-menu a { padding: 14px 16px; font-size: 16px; border-radius: 6px; }
  .nav-menu a:hover { background: var(--bg-3); }
  .nav-reserve { display: none; }
  .nav-toggle { display: block; }

  .hero { padding: 100px 0 60px; min-height: auto; }
  .hero-content { padding: 100px 20px 60px; }
  .hero h1 { font-size: 44px; }

  .section { padding: 72px 0; }

  .story-text p:first-of-type::first-letter { font-size: 52px; }

  .story-badge {
    width: 100px;
    height: 100px;
    bottom: -16px;
    right: -16px;
  }
  .story-badge .num { font-size: 26px; }

  .form-row { grid-template-columns: 1fr; }

  .signature-text { padding: 48px 28px; }

  .res-form { padding: 32px 24px; }

  .footer-grid { grid-template-columns: 1fr; }
  .footer-grid > div:first-child { grid-column: span 1; }

  .wa-float { padding: 12px; width: 52px; height: 52px; justify-content: center; }
  .wa-float span { display: none; }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 36px; }
  .section-head h2 { font-size: 32px; }
  .story-imgs { grid-template-columns: 1fr; }
  .story-img.tall { grid-row: auto; aspect-ratio: 4 / 3; margin-top: 0; }
  .story-img { aspect-ratio: 4 / 3; }
}
</style>
</head>
<body>

<!-- NAV -->
<nav class="nav" id="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <span class="brand-icon">DB</span>
      <span>
        Dapur Bumi
        <span class="brand-sub">Est. 1998</span>
      </span>
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#cerita">Cerita Kami</a></li>
      <li><a href="#menu">Menu</a></li>
      <li><a href="#signature">Andalan</a></li>
      <li><a href="#ulasan">Ulasan</a></li>
      <li><a href="#reservasi">Reservasi</a></li>
    </ul>

    <a href="#reservasi" class="nav-reserve">Reservasi</a>

    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="hero-bg">
    <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?w=1600&q=80" alt="">
  </div>

  <div class="hero-content">
    <div class="hero-meta">
      <i class="fas fa-map-marker-alt"></i>
      Jakarta Selatan &nbsp;·&nbsp; Buka Setiap Hari
    </div>

    <h1>
      Masakan rumah,<br>
      disajikan dengan <em>hormat.</em>
    </h1>

    <p class="hero-lede">
      Sejak 1998, kami memasak dengan resep keluarga dan bahan dari petani yang kami kenal sendiri. Tidak ada bahan instan, tidak ada rasa yang dibuat-buat.
    </p>

    <div class="hero-actions">
      <a href="#reservasi" class="btn btn-gold">
        Reservasi Meja <i class="fas fa-arrow-right"></i>
      </a>
      <a href="#menu" class="btn btn-outline">
        Lihat Menu
      </a>
    </div>
  </div>

  <div class="hero-scroll">
    Gulir
  </div>
</header>

<!-- INFO STRIP -->
<div class="info-strip">
  <div class="info-grid">
    <div class="info-item">
      <div class="info-icon"><i class="fas fa-clock"></i></div>
      <div>
        <h4>Jam Buka</h4>
        <p>Senin hingga Minggu<br>10.00 – 22.00 WIB</p>
      </div>
    </div>
    <div class="info-item">
      <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
      <div>
        <h4>Lokasi</h4>
        <p>Jl. Kemang Raya 88<br>Jakarta Selatan 12730</p>
      </div>
    </div>
    <div class="info-item">
      <div class="info-icon"><i class="fas fa-phone"></i></div>
      <div>
        <h4>Reservasi</h4>
        <p>+62 21 719 8890<br>+62 812 3456 7890</p>
      </div>
    </div>
    <div class="info-item">
      <div class="info-icon"><i class="fas fa-leaf"></i></div>
      <div>
        <h4>Bahan Lokal</h4>
        <p>Sayur & bumbu dari<br>petani Jawa Barat</p>
      </div>
    </div>
  </div>
</div>

<!-- STORY -->
<section class="section story" id="cerita">
  <div class="wrap">
    <div class="story-grid">

      <div class="story-imgs reveal">
        <div class="story-img tall">
          <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800&q=80" alt="Dapur">
        </div>
        <div class="story-img">
          <img src="https://images.unsplash.com/photo-1556909212-d5b604d0c90d?w=600&q=80" alt="Bahan">
        </div>
        <div class="story-img">
          <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=600&q=80" alt="Masakan">
        </div>

        <div class="story-badge">
          <div class="num">27</div>
          <div class="lbl">Tahun</div>
        </div>
      </div>

      <div class="story-text reveal">
        <div class="sec-label">Cerita Kami</div>
        <h2>
          Tiga generasi, <em>satu resep yang dijaga.</em>
        </h2>

        <p>
          Semua dimulai dari dapur kecil nenek kami di Solo tahun 1965. Resepnya sederhana — nasi goreng dengan bawang merah yang diiris tipis, sambal yang diulek tangan, dan kaldu yang dimasak sejak subuh.
        </p>

        <p>
          Pada 1998, kami membuka Dapur Bumi di Kemang dengan menu yang sama. Tidak ada yang kami ubah, kecuali satu hal: kami mulai mengenal petani yang menanam sayur untuk kami, dan nelayan yang menangkap ikan untuk kami.
        </p>

        <p>
          Hari ini, tiga generasi keluarga bekerja di dapur ini. Ibu kami masih memeriksa setiap bumbu yang masuk. Anak kami mulai belajar mengulek sambal. Dan kami percaya, cara memasak yang lambat dan penuh perhatian tidak akan pernah ketinggalan zaman.
        </p>

        <div class="story-sign">
          <img src="https://i.pravatar.cc/150?img=32" alt="">
          <div>
            <div class="name">Ibu Sari Wulandari</div>
            <div class="role">Pendiri & Kepala Dapur</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- MENU -->
<section class="section menu" id="menu">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-label">Menu Kami</div>
      <h2>Dimasak pagi itu, <em>disajikan hari itu.</em></h2>
      <p>Menu kami berganti mengikuti musim dan hasil panen. Ini beberapa yang selalu ada.</p>
    </div>

    <div class="menu-tabs reveal">
      <button class="menu-tab active" data-cat="all">Semua</button>
      <button class="menu-tab" data-cat="pembuka">Pembuka</button>
      <button class="menu-tab" data-cat="utama">Hidangan Utama</button>
      <button class="menu-tab" data-cat="penutup">Penutup</button>
      <button class="menu-tab" data-cat="minuman">Minuman</button>
    </div>

    <div class="menu-list">

      <div class="menu-item reveal" data-cat="pembuka">
        <div class="menu-thumb">
          <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=300&q=80" alt="">
        </div>
        <div class="menu-body">
          <div class="menu-row">
            <h3>Gado-gado Segar</h3>
            <div class="price">48rb</div>
          </div>
          <p>Sayur kukus hangat dengan bumbu kacang yang diulek pagi, kerupuk bawang, dan telur rebus.</p>
        </div>
      </div>

      <div class="menu-item reveal" data-cat="pembuka">
        <div class="menu-thumb">
          <img src="https://images.unsplash.com/photo-1541544537156-7627a7a4aa1c?w=300&q=80" alt="">
        </div>
        <div class="menu-body">
          <div class="menu-row">
            <h3>Lumpia Semarang <span class="menu-badge">Favorit</span></h3>
            <div class="price">52rb</div>
          </div>
          <p>Isi rebung, ayam cincang, dan udang. Digoreng tipis, disajikan dengan saus bawang.</p>
        </div>
      </div>

      <div class="menu-item reveal" data-cat="utama">
        <div class="menu-thumb">
          <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=300&q=80" alt="">
        </div>
        <div class="menu-body">
          <div class="menu-row">
            <h3>Nasi Goreng Kampung</h3>
            <div class="price">68rb</div>
          </div>
          <p>Resep asli nenek: bawang merah iris, terasi bakar, telur mata sapi, dan kerupuk udang.</p>
        </div>
      </div>

      <div class="menu-item reveal" data-cat="utama">
        <div class="menu-thumb">
          <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?w=300&q=80" alt="">
        </div>
        <div class="menu-body">
          <div class="menu-row">
            <h3>Rendang Daging Sapi <span class="menu-badge">Andalan</span></h3>
            <div class="price">125rb</div>
          </div>
          <p>Dimasak delapan jam dengan santan kelapa tua. Daging empuk, bumbu meresap dalam.</p>
        </div>
      </div>

      <div class="menu-item reveal" data-cat="utama">
        <div class="menu-thumb">
          <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=300&q=80" alt="">
        </div>
        <div class="menu-body">
          <div class="menu-row">
            <h3>Soto Betawi</h3>
            <div class="price">78rb</div>
          </div>
          <p>Kuah santan dengan daging sapi, jeroan pilihan, kentang, tomat, dan emping.</p>
        </div>
      </div>

      <div class="menu-item reveal" data-cat="penutup">
        <div class="menu-thumb">
          <img src="https://images.unsplash.com/photo-1551024506-0bccd828d307?w=300&q=80" alt="">
        </div>
        <div class="menu-body">
          <div class="menu-row">
            <h3>Es Krim Kelapa Muda</h3>
            <div class="price">42rb</div>
          </div>
          <p>Dibuat sendiri setiap pagi dari kelapa muda segar dan gula aren dari Sukabumi.</p>
        </div>
      </div>

      <div class="menu-item reveal" data-cat="minuman">
        <div class="menu-thumb">
          <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=300&q=80" alt="">
        </div>
        <div class="menu-body">
          <div class="menu-row">
            <h3>Es Cendol Gula Aren</h3>
            <div class="price">38rb</div>
          </div>
          <p>Cendol buatan tangan, santan segar, dan gula aren cair yang disiram saat disajikan.</p>
        </div>
      </div>

      <div class="menu-item reveal" data-cat="minuman">
        <div class="menu-thumb">
          <img src="https://images.unsplash.com/photo-1497515114629-f71d768fd07c?w=300&q=80" alt="">
        </div>
        <div class="menu-body">
          <div class="menu-row">
            <h3>Kopi Tubruk Klasik</h3>
            <div class="price">32rb</div>
          </div>
          <p>Kopi robusta dari Temanggung, diseduh tubruk dengan gula batu terpisah.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SIGNATURE -->
<section class="signature" id="signature">
  <div class="signature-inner">
    <div class="signature-img reveal">
      <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=1200&q=80" alt="">
    </div>

    <div class="signature-text reveal">
      <div class="sec-label">Andalan Kami</div>
      <h2>
        Rendang yang dimasak <em>delapan jam.</em>
      </h2>

      <p>
        Setiap pukul lima pagi, juru masak kami mulai menumis bumbu rendang. Prosesnya tidak bisa dipercepat. Daging harus dimasak perlahan hingga kuah santan mengental dan meresap ke setiap serat.
      </p>

      <p>
        Ini hidangan yang paling sering dipesan tamu. Banyak dari mereka pulang membawa satu porsi untuk keluarga di rumah.
      </p>

      <ul class="signature-list">
        <li><i class="fas fa-circle"></i> Daging sapi pilihan dari peternak di Boyolali</li>
        <li><i class="fas fa-circle"></i> Santan dari kelapa tua yang diperas langsung</li>
        <li><i class="fas fa-circle"></i> Bumbu diulek tangan, tidak pernah diblender</li>
        <li><i class="fas fa-circle"></i> Dimasak dengan kayu bakar selama 8 jam</li>
      </ul>
    </div>
  </div>
</section>

<!-- QUOTES -->
<section class="section quotes" id="ulasan">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-label">Ulasan Tamu</div>
      <h2>Apa yang tamu <em>bilang tentang kami.</em></h2>
    </div>

    <div class="quotes-grid">

      <div class="quote-card reveal">
        <div class="quote-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <div class="quote-text">
          Rendangnya benar-benar istimewa. Saya sudah coba rendang di banyak tempat, tapi yang ini rasa rumahan sekali. Seperti masakan nenek saya dulu.
        </div>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=15" alt="">
          <div>
            <div class="name">Pak Hendra Wijaya</div>
            <div class="role">Tamu tetap sejak 2015</div>
          </div>
        </div>
      </div>

      <div class="quote-card reveal">
        <div class="quote-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <div class="quote-text">
          Suasananya tenang, pelayanannya ramah, dan makanannya jujur. Tidak ada rasa yang berlebihan. Cocok untuk makan malam keluarga.
        </div>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=48" alt="">
          <div>
            <div class="name">Ibu Maya Anggraini</div>
            <div class="role">Jakarta Selatan</div>
          </div>
        </div>
      </div>

      <div class="quote-card reveal">
        <div class="quote-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <div class="quote-text">
          Kami sering membawa klien dari luar negeri ke sini. Mereka selalu terkesan dengan soto betawi dan es cendolnya. Sudah jadi tempat favorit kantor.
        </div>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=11" alt="">
          <div>
            <div class="name">Pak Bayu Prasetyo</div>
            <div class="role">Direktur, perusahaan konsultan</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- RESERVASI -->
<section class="section reservation" id="reservasi">
  <div class="wrap">
    <div class="reservation-grid">

      <div class="reservation-text reveal">
        <div class="sec-label">Reservasi</div>
        <h2>
          Kami siapkan meja <em>untuk Anda.</em>
        </h2>
        <p>
          Untuk memastikan tempat, kami sarankan reservasi terlebih dahulu — terutama akhir pekan. Kami bisa menampung rombongan hingga 30 orang.
        </p>

        <div class="reservation-contact">
          <div class="res-contact-item">
            <div class="icon"><i class="fas fa-phone"></i></div>
            <div>
              <div class="label">Telepon</div>
              <div class="value">+62 21 719 8890</div>
            </div>
          </div>

          <div class="res-contact-item">
            <div class="icon"><i class="fab fa-whatsapp"></i></div>
            <div>
              <div class="label">WhatsApp</div>
              <div class="value">+62 812 3456 7890</div>
            </div>
          </div>

          <div class="res-contact-item">
            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <div class="label">Alamat</div>
              <div class="value">Jl. Kemang Raya 88, Jakarta</div>
            </div>
          </div>
        </div>
      </div>

      <form class="res-form reveal" onsubmit="event.preventDefault(); alert('Terima kasih. Tim kami akan segera menghubungi Anda untuk konfirmasi.')">
        <h3>Formulir Reservasi</h3>
        <p>Isi data di bawah, kami akan konfirmasi lewat telepon.</p>

        <div class="form-row">
          <div class="form-field">
            <label>Nama Lengkap</label>
            <input type="text" required placeholder="Nama Anda">
          </div>
          <div class="form-field">
            <label>Nomor Telepon</label>
            <input type="tel" required placeholder="08xx xxxx xxxx">
          </div>
        </div>

        <div class="form-row">
          <div class="form-field">
            <label>Tanggal</label>
            <input type="date" required>
          </div>
          <div class="form-field">
            <label>Waktu</label>
            <select required>
              <option value="">Pilih waktu</option>
              <option>12.00</option>
              <option>13.00</option>
              <option>18.00</option>
              <option>19.00</option>
              <option>20.00</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-field">
            <label>Jumlah Orang</label>
            <select required>
              <option value="">Pilih jumlah</option>
              <option>1 – 2 orang</option>
              <option>3 – 4 orang</option>
              <option>5 – 8 orang</option>
              <option>9 – 15 orang</option>
              <option>Lebih dari 15</option>
            </select>
          </div>
          <div class="form-field">
            <label>Acara</label>
            <select>
              <option value="">Pilih jenis</option>
              <option>Makan biasa</option>
              <option>Ulang tahun</option>
              <option>Makan bisnis</option>
              <option>Acara keluarga</option>
            </select>
          </div>
        </div>

        <div class="form-field">
          <label>Catatan Khusus</label>
          <textarea rows="2" placeholder="Alergi makanan, permintaan khusus, dll."></textarea>
        </div>

        <button type="submit" class="btn btn-gold">
          Kirim Reservasi <i class="fas fa-arrow-right"></i>
        </button>
      </form>

    </div>
  </div>
</section>

<!-- CTA STRIP -->
<section class="cta-strip">
  <div class="wrap">
    <h2>Makan malam bersama orang tersayang, tanpa terburu-buru.</h2>
    <p>Kami siapkan tempat terbaik, masakan terbaik, dan waktu yang cukup untuk Anda menikmatinya.</p>
    <a href="#reservasi" class="btn">
      Reservasi Sekarang <i class="fas fa-arrow-right"></i>
    </a>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="wrap">
    <div class="footer-grid">

      <div>
        <div class="footer-brand">
          <span class="brand-icon">DB</span>
          Dapur Bumi
        </div>
        <p class="footer-desc">
          Restoran keluarga yang menyajikan masakan Nusantara dengan resep asli sejak 1998.
        </p>
        <div class="footer-hours">
          <strong>JAM BUKA</strong><br>
          Senin – Jumat: 10.00 – 22.00<br>
          Sabtu – Minggu: 09.00 – 23.00
        </div>
      </div>

      <div class="footer-col">
        <h4>Menu</h4>
        <ul>
          <li><a href="#menu">Pembuka</a></li>
          <li><a href="#menu">Hidangan Utama</a></li>
          <li><a href="#menu">Penutup</a></li>
          <li><a href="#menu">Minuman</a></li>
          <li><a href="#menu">Paket Acara</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Perusahaan</h4>
        <ul>
          <li><a href="#cerita">Cerita Kami</a></li>
          <li><a href="#">Karier</a></li>
          <li><a href="#">Katering</a></li>
          <li><a href="#">Kerja Sama</a></li>
          <li><a href="#reservasi">Kontak</a></li>
        </ul>
      </div>

      <div class="footer-col footer-contact">
        <h4>Kunjungi Kami</h4>
        <p><i class="fas fa-map-marker-alt"></i> Jl. Kemang Raya 88<br>Jakarta Selatan 12730</p>
        <p><i class="fas fa-phone"></i> +62 21 719 8890</p>
        <p><i class="fas fa-envelope"></i> halo@dapurbumi.id</p>
      </div>

    </div>

    <div class="footer-bottom">
      <div>© 2025 Dapur Bumi. Semua hak dilindungi.</div>
      <div class="footer-social">
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- WA FLOAT -->
<a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2006" class="wa-float" target="_blank">
  <i class="fab fa-whatsapp"></i>
  <span>Reservasi</span>
</a>

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

// Menu filter
const menuTabs = document.querySelectorAll('.menu-tab');
const menuItems = document.querySelectorAll('.menu-item');

menuTabs.forEach(tab => {
  tab.addEventListener('click', () => {
    menuTabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    const cat = tab.dataset.cat;

    menuItems.forEach(item => {
      const show = cat === 'all' || item.dataset.cat === cat;
      item.style.display = show ? 'flex' : 'none';
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
      const top = target.getBoundingClientRect().top + window.scrollY - 70;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  });
});
</script>

@endverbatim
@include('demo.company-profile.partials.demo-bar')
</body>
</html>