@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ruang Reka — Studio Kreatif untuk Bisnis yang Bertumbuh</title>
<meta name="description" content="Ruang Reka — studio kreatif yang membantu bisnis keluarga dan UMKM tumbuh dengan desain dan teknologi yang tepat guna.">
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;0,6..72,600;1,6..72,400;1,6..72,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --cream: #f7f3ec;
  --cream-2: #efe8dc;
  --cream-3: #e4dacb;
  --paper: #ffffff;
  --ink: #2b2118;
  --ink-soft: #5c4f42;
  --ink-mute: #8f8377;
  --line: #ddd2c1;
  --terracotta: #c25a3a;
  --terracotta-dark: #a44628;
  --olive: #6b7345;
  --mustard: #c99847;
  --serif: 'Newsreader', Georgia, serif;
  --sans: 'Bricolage Grotesque', -apple-system, sans-serif;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--sans);
  background: var(--cream);
  color: var(--ink);
  line-height: 1.65;
  font-size: 16px;
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

::selection { background: var(--terracotta); color: var(--paper); }

a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }

button { font-family: inherit; cursor: pointer; }

/* ============ LAYOUT ============ */
.wrap {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 28px;
}

/* ============ NAVBAR ============ */
.nav {
  padding: 20px 0;
  position: sticky;
  top: 0;
  background: var(--cream);
  z-index: 100;
  border-bottom: 1px solid var(--line);
}

.nav-inner {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 28px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.brand {
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 600;
  letter-spacing: -0.02em;
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--ink);
}

.brand-dot {
  width: 12px;
  height: 12px;
  background: var(--terracotta);
  border-radius: 50%;
  display: inline-block;
}

.nav-menu {
  display: flex;
  gap: 34px;
  list-style: none;
}

.nav-menu a {
  font-size: 15px;
  font-weight: 500;
  color: var(--ink-soft);
  transition: color 0.2s;
}

.nav-menu a:hover { color: var(--terracotta); }

.nav-cta {
  padding: 11px 22px;
  background: var(--ink);
  color: var(--cream);
  font-size: 14px;
  font-weight: 500;
  border-radius: 999px;
  transition: background 0.2s;
}

.nav-cta:hover { background: var(--terracotta); }

.nav-toggle {
  display: none;
  background: none;
  border: none;
  font-size: 22px;
  color: var(--ink);
}

/* ============ HERO ============ */
.hero {
  padding: 80px 0 100px;
}

.hero-inner {
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: 70px;
  align-items: center;
}

.hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 7px 16px 7px 12px;
  background: var(--paper);
  border: 1px solid var(--line);
  border-radius: 999px;
  font-size: 13px;
  font-weight: 500;
  color: var(--ink-soft);
  margin-bottom: 28px;
}

.hero-tag .pulse {
  width: 8px;
  height: 8px;
  background: var(--olive);
  border-radius: 50%;
  display: inline-block;
}

.hero h1 {
  font-family: var(--serif);
  font-size: clamp(42px, 5.5vw, 72px);
  font-weight: 500;
  line-height: 1.05;
  letter-spacing: -0.03em;
  color: var(--ink);
  margin-bottom: 28px;
}

.hero h1 em {
  font-style: italic;
  color: var(--terracotta);
}

.hero-lede {
  font-size: 18px;
  color: var(--ink-soft);
  max-width: 520px;
  margin-bottom: 40px;
  line-height: 1.7;
}

.hero-actions {
  display: flex;
  gap: 14px;
  flex-wrap: wrap;
  align-items: center;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 15px 28px;
  font-size: 15px;
  font-weight: 500;
  border-radius: 999px;
  border: 1px solid transparent;
  transition: all 0.25s;
  cursor: pointer;
}

.btn-main {
  background: var(--terracotta);
  color: var(--paper);
}

.btn-main:hover {
  background: var(--terracotta-dark);
  transform: translateY(-2px);
}

.btn-soft {
  background: transparent;
  color: var(--ink);
  border-color: var(--ink);
}

.btn-soft:hover {
  background: var(--ink);
  color: var(--cream);
}

.hero-note {
  display: flex;
  align-items: center;
  gap: 14px;
  font-size: 13px;
  color: var(--ink-mute);
  margin-top: 36px;
}

.hero-note-line {
  width: 32px;
  height: 1px;
  background: var(--ink-mute);
}

.hero-visual {
  position: relative;
}

.hero-photo {
  border-radius: 28px;
  overflow: hidden;
  aspect-ratio: 4 / 5;
  background: var(--cream-3);
  box-shadow: 0 30px 60px -30px rgba(43, 33, 24, 0.25);
}

.hero-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-badge {
  position: absolute;
  bottom: 24px;
  left: -24px;
  background: var(--paper);
  padding: 20px 24px;
  border-radius: 20px;
  box-shadow: 0 20px 40px -20px rgba(43, 33, 24, 0.3);
  display: flex;
  align-items: center;
  gap: 16px;
  min-width: 220px;
}

.hero-badge-num {
  font-family: var(--serif);
  font-size: 34px;
  font-weight: 600;
  color: var(--terracotta);
  line-height: 1;
  letter-spacing: -0.02em;
}

.hero-badge-lbl {
  font-size: 13px;
  color: var(--ink-mute);
  line-height: 1.3;
}

/* ============ LOGO STRIP ============ */
.logo-strip {
  padding: 40px 0;
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  background: var(--cream-2);
}

.logo-strip-inner {
  max-width: 1180px;
  margin: 0 auto;
  padding: 0 28px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  flex-wrap: wrap;
}

.logo-strip-label {
  font-size: 13px;
  color: var(--ink-mute);
  max-width: 160px;
  line-height: 1.4;
}

.logo-list {
  display: flex;
  gap: 48px;
  flex-wrap: wrap;
  align-items: center;
}

.logo-list span {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 600;
  color: var(--ink-soft);
  opacity: 0.55;
  letter-spacing: -0.01em;
  transition: opacity 0.3s;
}

.logo-list span:hover { opacity: 1; }

/* ============ SECTION BASE ============ */
.section {
  padding: 100px 0;
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

.section-label {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-size: 13px;
  font-weight: 500;
  color: var(--terracotta);
  margin-bottom: 18px;
  text-transform: uppercase;
  letter-spacing: 0.14em;
}

.section-label::before {
  content: '';
  width: 24px;
  height: 1px;
  background: var(--terracotta);
}

.section-head.center .section-label::before { display: none; }

.section-head h2 {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 20px;
}

.section-head h2 em {
  font-style: italic;
  color: var(--terracotta);
}

.section-head p {
  font-size: 17px;
  color: var(--ink-soft);
  line-height: 1.7;
}

/* ============ ABOUT ============ */
.about {
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.about-grid {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 80px;
  align-items: center;
}

.about-visual {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}

.about-photo {
  border-radius: 20px;
  overflow: hidden;
  background: var(--cream-2);
}

.about-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.about-photo.tall {
  grid-row: span 2;
  aspect-ratio: 3 / 5;
}

.about-photo.short {
  aspect-ratio: 1 / 1;
}

.about-content p {
  font-size: 17px;
  color: var(--ink-soft);
  margin-bottom: 22px;
  line-height: 1.75;
}

.about-content p:last-of-type { margin-bottom: 32px; }

.about-values {
  display: grid;
  gap: 20px;
  margin-top: 40px;
}

.value-item {
  display: flex;
  gap: 18px;
  align-items: flex-start;
}

.value-icon {
  flex-shrink: 0;
  width: 44px;
  height: 44px;
  border-radius: 14px;
  background: var(--cream-2);
  color: var(--terracotta);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
}

.value-item h4 {
  font-family: var(--serif);
  font-size: 19px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 4px;
  letter-spacing: -0.01em;
}

.value-item p {
  font-size: 15px;
  color: var(--ink-soft);
  margin: 0;
  line-height: 1.6;
}

/* ============ SERVICES ============ */
.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.service-card {
  background: var(--paper);
  border: 1px solid var(--line);
  border-radius: 24px;
  padding: 36px 32px 32px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
  overflow: hidden;
}

.service-card:hover {
  transform: translateY(-6px);
  border-color: var(--terracotta);
  box-shadow: 0 24px 48px -24px rgba(194, 90, 58, 0.35);
}

.service-num {
  font-family: var(--serif);
  font-size: 14px;
  font-weight: 500;
  color: var(--ink-mute);
  margin-bottom: 24px;
  letter-spacing: 0.05em;
}

.service-icon {
  width: 52px;
  height: 52px;
  border-radius: 16px;
  background: var(--cream-2);
  color: var(--terracotta);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  margin-bottom: 24px;
  transition: all 0.3s;
}

.service-card:hover .service-icon {
  background: var(--terracotta);
  color: var(--paper);
}

.service-card h3 {
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 12px;
  letter-spacing: -0.015em;
}

.service-card p {
  font-size: 15px;
  color: var(--ink-soft);
  line-height: 1.65;
  margin-bottom: 22px;
}

.service-link {
  font-size: 14px;
  font-weight: 500;
  color: var(--terracotta);
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: gap 0.25s;
}

.service-card:hover .service-link { gap: 14px; }

/* ============ WORK / PORTFOLIO ============ */
.work {
  background: var(--cream-2);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.work-list {
  display: grid;
  gap: 24px;
}

.work-item {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 48px;
  align-items: center;
  padding: 40px;
  background: var(--paper);
  border-radius: 28px;
  border: 1px solid var(--line);
  transition: all 0.35s;
  cursor: pointer;
}

.work-item:hover {
  border-color: var(--terracotta);
  box-shadow: 0 30px 60px -30px rgba(43, 33, 24, 0.2);
}

.work-item.flip {
  direction: rtl;
}

.work-item.flip > * {
  direction: ltr;
}

.work-img {
  border-radius: 20px;
  overflow: hidden;
  aspect-ratio: 4 / 3;
  background: var(--cream-3);
}

.work-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.7s;
}

.work-item:hover .work-img img { transform: scale(1.04); }

.work-meta {
  font-size: 13px;
  color: var(--ink-mute);
  margin-bottom: 14px;
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}

.work-meta span {
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.work-meta .dot {
  width: 4px;
  height: 4px;
  background: var(--ink-mute);
  border-radius: 50%;
}

.work-item h3 {
  font-family: var(--serif);
  font-size: 30px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 14px;
  letter-spacing: -0.02em;
  line-height: 1.15;
}

.work-item p {
  font-size: 15px;
  color: var(--ink-soft);
  margin-bottom: 24px;
  line-height: 1.7;
}

.work-tag {
  display: inline-block;
  padding: 6px 14px;
  background: var(--cream-2);
  border-radius: 999px;
  font-size: 12px;
  font-weight: 500;
  color: var(--ink-soft);
  margin-right: 8px;
  margin-bottom: 8px;
}

/* ============ NUMBERS ============ */
.numbers {
  padding: 80px 0;
}

.numbers-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
}

.number-item {
  text-align: center;
}

.number-item .num {
  font-family: var(--serif);
  font-size: clamp(48px, 6vw, 72px);
  font-weight: 500;
  color: var(--ink);
  line-height: 1;
  letter-spacing: -0.03em;
  margin-bottom: 12px;
}

.number-item .num span {
  color: var(--terracotta);
}

.number-item .lbl {
  font-size: 14px;
  color: var(--ink-mute);
  line-height: 1.4;
}

/* ============ PROCESS ============ */
.process {
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.process-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
  position: relative;
}

.process-step {
  padding: 32px 0 0;
  border-top: 2px solid var(--ink);
  position: relative;
}

.process-step::before {
  content: '';
  position: absolute;
  top: -7px;
  left: 0;
  width: 12px;
  height: 12px;
  background: var(--terracotta);
  border-radius: 50%;
}

.process-num {
  font-family: var(--serif);
  font-size: 13px;
  font-weight: 500;
  color: var(--ink-mute);
  margin-bottom: 18px;
  letter-spacing: 0.1em;
}

.process-step h4 {
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 12px;
  letter-spacing: -0.015em;
}

.process-step p {
  font-size: 15px;
  color: var(--ink-soft);
  line-height: 1.65;
}

/* ============ TESTIMONIAL ============ */
.testimonial-main {
  display: grid;
  grid-template-columns: 1fr 1.3fr;
  gap: 80px;
  align-items: center;
}

.testimonial-photo {
  border-radius: 28px;
  overflow: hidden;
  aspect-ratio: 4 / 5;
  background: var(--cream-3);
}

.testimonial-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.testimonial-content {
  max-width: 600px;
}

.testimonial-quote-mark {
  font-family: var(--serif);
  font-size: 72px;
  line-height: 0.6;
  color: var(--terracotta);
  margin-bottom: 24px;
  font-weight: 600;
}

.testimonial-text {
  font-family: var(--serif);
  font-size: clamp(22px, 2.4vw, 30px);
  font-weight: 400;
  font-style: italic;
  line-height: 1.4;
  color: var(--ink);
  margin-bottom: 40px;
  letter-spacing: -0.01em;
}

.testimonial-author {
  display: flex;
  align-items: center;
  gap: 18px;
  padding-top: 28px;
  border-top: 1px solid var(--line);
}

.testimonial-author img {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  object-fit: cover;
}

.testimonial-author .name {
  font-family: var(--serif);
  font-size: 18px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 2px;
}

.testimonial-author .role {
  font-size: 14px;
  color: var(--ink-mute);
}

.testimonial-dots {
  display: flex;
  gap: 8px;
  margin-top: 32px;
}

.testimonial-dots button {
  width: 32px;
  height: 4px;
  border: none;
  background: var(--line);
  border-radius: 999px;
  transition: all 0.3s;
}

.testimonial-dots button.active {
  background: var(--terracotta);
  width: 48px;
}

/* ============ CTA ============ */
.cta-section {
  padding: 100px 0;
}

.cta-box {
  background: var(--ink);
  color: var(--cream);
  border-radius: 32px;
  padding: 80px 60px;
  position: relative;
  overflow: hidden;
}

.cta-box::before {
  content: '';
  position: absolute;
  top: -100px;
  right: -100px;
  width: 300px;
  height: 300px;
  background: var(--terracotta);
  border-radius: 50%;
  opacity: 0.15;
}

.cta-box::after {
  content: '';
  position: absolute;
  bottom: -80px;
  left: 20%;
  width: 180px;
  height: 180px;
  background: var(--mustard);
  border-radius: 50%;
  opacity: 0.12;
}

.cta-inner {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: 60px;
  align-items: center;
}

.cta-box h2 {
  font-family: var(--serif);
  font-size: clamp(32px, 4vw, 48px);
  font-weight: 500;
  line-height: 1.1;
  letter-spacing: -0.025em;
  margin-bottom: 20px;
}

.cta-box h2 em { font-style: italic; color: var(--mustard); }

.cta-box p {
  font-size: 17px;
  color: rgba(247, 243, 236, 0.75);
  line-height: 1.7;
  max-width: 500px;
}

.cta-actions {
  display: flex;
  flex-direction: column;
  gap: 14px;
}

.btn-cream {
  background: var(--cream);
  color: var(--ink);
}

.btn-cream:hover {
  background: var(--mustard);
  transform: translateY(-2px);
}

.btn-border {
  background: transparent;
  color: var(--cream);
  border-color: rgba(247, 243, 236, 0.3);
}

.btn-border:hover {
  border-color: var(--cream);
  background: rgba(247, 243, 236, 0.08);
}

/* ============ FOOTER ============ */
.footer {
  background: var(--cream-2);
  padding: 80px 0 32px;
  border-top: 1px solid var(--line);
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.2fr;
  gap: 60px;
  padding-bottom: 60px;
  border-bottom: 1px solid var(--line);
  margin-bottom: 32px;
}

.footer-brand {
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 18px;
  display: flex;
  align-items: center;
  gap: 10px;
  letter-spacing: -0.02em;
}

.footer-desc {
  font-size: 15px;
  color: var(--ink-soft);
  line-height: 1.7;
  max-width: 320px;
}

.footer-col h4 {
  font-family: var(--serif);
  font-size: 17px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 20px;
}

.footer-col ul { list-style: none; }

.footer-col li { margin-bottom: 12px; }

.footer-col a {
  font-size: 15px;
  color: var(--ink-soft);
  transition: color 0.2s;
}

.footer-col a:hover { color: var(--terracotta); }

.footer-contact p {
  font-size: 15px;
  color: var(--ink-soft);
  margin-bottom: 12px;
  display: flex;
  align-items: flex-start;
  gap: 10px;
  line-height: 1.5;
}

.footer-contact i {
  color: var(--terracotta);
  font-size: 14px;
  margin-top: 4px;
}

.footer-bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 16px;
  font-size: 14px;
  color: var(--ink-mute);
}

.footer-social {
  display: flex;
  gap: 8px;
}

.footer-social a {
  width: 38px;
  height: 38px;
  border-radius: 12px;
  background: var(--paper);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--ink-soft);
  font-size: 15px;
  transition: all 0.25s;
}

.footer-social a:hover {
  background: var(--terracotta);
  color: var(--paper);
  transform: translateY(-2px);
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

/* ============ WA FLOAT ============ */
.wa-float {
  position: fixed;
  bottom: 26px;
  right: 26px;
  width: 54px;
  height: 54px;
  background: var(--terracotta);
  color: var(--paper);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  box-shadow: 0 14px 30px -10px rgba(194, 90, 58, 0.5);
  z-index: 200;
  transition: all 0.25s;
}

.wa-float:hover {
  background: var(--terracotta-dark);
  transform: translateY(-3px);
}

/* ============ RESPONSIVE ============ */
@media (max-width: 968px) {
  .hero-inner,
  .about-grid,
  .testimonial-main,
  .cta-inner {
    grid-template-columns: 1fr;
    gap: 48px;
  }

  .hero-visual { max-width: 480px; margin: 0 auto; }

  .services-grid { grid-template-columns: repeat(2, 1fr); }
  .numbers-grid { grid-template-columns: repeat(2, 1fr); gap: 32px; }
  .process-grid { grid-template-columns: repeat(2, 1fr); gap: 32px; }

  .work-item {
    grid-template-columns: 1fr;
    gap: 28px;
    padding: 24px;
  }

  .work-item.flip { direction: ltr; }

  .footer-grid {
    grid-template-columns: 1fr 1fr;
    gap: 40px;
  }

  .nav-menu {
    position: fixed;
    top: 0;
    right: -100%;
    width: 300px;
    height: 100vh;
    background: var(--cream);
    flex-direction: column;
    padding: 100px 32px 32px;
    gap: 24px;
    border-left: 1px solid var(--line);
    transition: right 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 99;
  }

  .nav-menu.open { right: 0; }
  .nav-menu a { font-size: 18px; }
  .nav-cta { display: none; }
  .nav-toggle { display: block; }
}

@media (max-width: 640px) {
  .section { padding: 72px 0; }
  .hero { padding: 60px 0 72px; }

  .services-grid { grid-template-columns: 1fr; }
  .numbers-grid { grid-template-columns: 1fr; gap: 28px; }
  .process-grid { grid-template-columns: 1fr; gap: 24px; }

  .about-visual {
    grid-template-columns: 1fr;
  }

  .about-photo.tall {
    grid-row: auto;
    aspect-ratio: 4 / 3;
  }

  .cta-box {
    padding: 48px 28px;
    border-radius: 24px;
  }

  .footer-grid { grid-template-columns: 1fr; gap: 32px; }

  .hero-badge {
    bottom: 16px;
    left: 16px;
    padding: 16px 20px;
    min-width: auto;
  }

  .logo-strip-inner { gap: 24px; }
  .logo-list { gap: 28px; }
  .logo-list span { font-size: 18px; }

  .work-item h3 { font-size: 24px; }
}

/* ============ MARQUEE BAND ============ */
.band {
  padding: 28px 0;
  background: var(--ink);
  color: var(--cream);
  overflow: hidden;
}

.band-track {
  display: flex;
  gap: 64px;
  width: fit-content;
  animation: bandScroll 40s linear infinite;
}

.band-item {
  display: flex;
  align-items: center;
  gap: 64px;
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 500;
  letter-spacing: -0.01em;
  white-space: nowrap;
}

.band-item i {
  color: var(--mustard);
  font-size: 14px;
}

@keyframes bandScroll {
  to { transform: translateX(-50%); }
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <span class="brand-dot"></span>
      Ruang Reka
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#tentang">Tentang</a></li>
      <li><a href="#layanan">Layanan</a></li>
      <li><a href="#karya">Karya</a></li>
      <li><a href="#proses">Proses</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>

    <a href="#kontak" class="nav-cta">Mulai Ngobrol</a>

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
          <span class="pulse"></span>
          Terbuka untuk proyek baru tahun 2025
        </div>

        <h1>
          Kami bantu bisnis Anda <em>tumbuh dengan tenang.</em>
        </h1>

        <p class="hero-lede">
          Ruang Reka adalah studio kreatif yang bekerja dengan pemilik bisnis keluarga dan UMKM. Kami percaya pertumbuhan yang sehat dimulai dari fondasi yang rapi — bukan dari ramai-ramai ikut tren.
        </p>

        <div class="hero-actions">
          <a href="#kontak" class="btn btn-main">
            Mulai Percakapan <i class="fas fa-arrow-right"></i>
          </a>
          <a href="#karya" class="btn btn-soft">
            Lihat Karya Kami
          </a>
        </div>

        <div class="hero-note">
          <span class="hero-note-line"></span>
          Biasanya kami balas dalam satu hari kerja.
        </div>
      </div>

      <div class="hero-visual reveal">
        <div class="hero-photo">
          <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=800&q=80" alt="Tim Ruang Reka">
        </div>
        <div class="hero-badge">
          <div class="hero-badge-num">10</div>
          <div class="hero-badge-lbl">Tahun menemani<br>bisnis bertumbuh</div>
        </div>
      </div>

    </div>
  </div>
</header>

<!-- LOGO STRIP -->
<div class="logo-strip">
  <div class="logo-strip-inner">
    <div class="logo-strip-label">Dipercaya oleh bisnis kecil dan menengah di Indonesia</div>
    <div class="logo-list">
      <span>Serat Nusantara</span>
      <span>Kopi Ruang</span>
      <span>Bumi Roti</span>
      <span>Lembah Tani</span>
      <span>Kayu Reka</span>
    </div>
  </div>
</div>

<!-- ABOUT -->
<section class="section about" id="tentang">
  <div class="wrap">
    <div class="about-grid">

      <div class="about-visual reveal">
        <div class="about-photo tall">
          <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=600&q=80" alt="Ruang kerja">
        </div>
        <div class="about-photo short">
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&q=80" alt="Tim berdiskusi">
        </div>
        <div class="about-photo short">
          <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=600&q=80" alt="Detail kerja">
        </div>
      </div>

      <div class="about-content reveal">
        <div class="section-label">Tentang Kami</div>
        <h2 style="font-family:var(--serif);font-size:clamp(30px,3.6vw,44px);font-weight:500;line-height:1.12;letter-spacing:-0.025em;margin-bottom:28px">
          Studio kecil dengan <em style="font-style:italic;color:var(--terracotta)">komitmen besar</em> pada pekerjaan yang rapi.
        </h2>

        <p>
          Kami mulai dari ruang tamu rumah salah satu pendiri pada 2015. Waktu itu hanya ada dua orang dan satu laptop. Hari ini kami berjumlah delapan orang, tapi cara kerja kami tidak berubah: satu proyek dikerjakan oleh satu tim kecil yang benar-benar mengenal kliennya.
        </p>

        <p>
          Klien kami kebanyakan adalah pemilik bisnis generasi kedua atau ketiga yang ingin membawa usaha keluarganya ke level berikutnya. Mereka butuh partner yang bisa diajak berpikir jangka panjang, bukan vendor yang sekadar mengerjakan pesanan.
        </p>

        <div class="about-values">
          <div class="value-item">
            <div class="value-icon"><i class="fas fa-comments"></i></div>
            <div>
              <h4>Ngobrol dulu, kerja kemudian</h4>
              <p>Kami selalu mulai dari mendengar cerita Anda, bukan dari membuka portofolio.</p>
            </div>
          </div>
          <div class="value-item">
            <div class="value-icon"><i class="fas fa-seedling"></i></div>
            <div>
              <h4>Bertumbuh pelan tapi pasti</h4>
              <p>Kami tidak percaya pertumbuhan instan. Yang penting arahnya jelas dan konsisten.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- BAND -->
<div class="band">
  <div class="band-track">
    <div class="band-item">
      Perancangan Produk <i class="fas fa-circle"></i>
      Pengembangan Web <i class="fas fa-circle"></i>
      Identitas Merek <i class="fas fa-circle"></i>
      Aplikasi Mobile <i class="fas fa-circle"></i>
      Pendampingan <i class="fas fa-circle"></i>
      Perancangan Produk <i class="fas fa-circle"></i>
      Pengembangan Web <i class="fas fa-circle"></i>
      Identitas Merek <i class="fas fa-circle"></i>
      Aplikasi Mobile <i class="fas fa-circle"></i>
      Pendampingan <i class="fas fa-circle"></i>
    </div>
  </div>
</div>

<!-- SERVICES -->
<section class="section" id="layanan">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="section-label">Layanan Kami</div>
      <h2>Hal-hal yang <em>kami kerjakan dengan baik.</em></h2>
      <p>Kami sengaja tidak mengambil semua jenis pekerjaan. Hanya yang kami yakin bisa dikerjakan dengan standar kami sendiri.</p>
    </div>

    <div class="services-grid">

      <div class="service-card reveal">
        <div class="service-num">01</div>
        <div class="service-icon"><i class="fas fa-pen-ruler"></i></div>
        <h3>Perancangan Produk</h3>
        <p>Dari riset pengguna hingga prototipe yang siap diuji. Kami rancang produk digital yang benar-benar dipakai orang.</p>
        <a href="#kontak" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="service-card reveal">
        <div class="service-num">02</div>
        <div class="service-icon"><i class="fas fa-laptop-code"></i></div>
        <h3>Pengembangan Web</h3>
        <p>Website dan aplikasi web yang cepat, aman, dan mudah dirawat. Bukan yang kelihatan bagus tiga bulan saja.</p>
        <a href="#kontak" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="service-card reveal">
        <div class="service-num">03</div>
        <div class="service-icon"><i class="fas fa-mobile-screen-button"></i></div>
        <h3>Aplikasi Mobile</h3>
        <p>Aplikasi Android dan iOS dengan pengalaman yang konsisten di kedua platform, tanpa kompromi.</p>
        <a href="#kontak" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="service-card reveal">
        <div class="service-num">04</div>
        <div class="service-icon"><i class="fas fa-shapes"></i></div>
        <h3>Identitas Merek</h3>
        <p>Logo, sistem visual, dan pedoman merek yang bisa dipakai bertahun-tahun, bukan sekadar gaya-gayaan.</p>
        <a href="#kontak" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="service-card reveal">
        <div class="service-num">05</div>
        <div class="service-icon"><i class="fas fa-hand-holding-heart"></i></div>
        <h3>Pendampingan</h3>
        <p>Setelah produk diluncurkan, kami tetap ada untuk merawat dan mengembangkannya bersama Anda.</p>
        <a href="#kontak" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="service-card reveal">
        <div class="service-num">06</div>
        <div class="service-icon"><i class="fas fa-graduation-cap"></i></div>
        <h3>Pelatihan Tim</h3>
        <p>Kami ajar tim internal Anda mengelola produk digital sendiri, supaya tidak bergantung selamanya.</p>
        <a href="#kontak" class="service-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>

    </div>
  </div>
</section>

<!-- WORK -->
<section class="section work" id="karya">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="section-label">Karya Pilihan</div>
      <h2>Beberapa proyek yang <em>kami ingat betul.</em></h2>
      <p>Bukan yang paling besar atau paling mahal, tapi yang paling berkesan prosesnya.</p>
    </div>

    <div class="work-list">

      <div class="work-item reveal">
        <div class="work-img">
          <img src="https://images.unsplash.com/photo-1523381210434-271e8be1f52b?w=800&q=80" alt="Kopi Ruang">
        </div>
        <div class="work-text">
          <div class="work-meta">
            <span>2024</span>
            <span class="dot"></span>
            <span>Identitas Merek</span>
          </div>
          <h3>Kopi Ruang Tengah</h3>
          <p>Kedai kopi keluarga yang sudah berdiri 20 tahun ingin tampil lebih segar tanpa kehilangan akar. Kami bangun identitas baru, mulai dari logo, kemasan, hingga website.</p>
          <div>
            <span class="work-tag">Identitas</span>
            <span class="work-tag">Kemasan</span>
            <span class="work-tag">Website</span>
          </div>
        </div>
      </div>

      <div class="work-item flip reveal">
        <div class="work-img">
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&q=80" alt="Serat Nusantara">
        </div>
        <div class="work-text">
          <div class="work-meta">
            <span>2024</span>
            <span class="dot"></span>
            <span>Pengembangan Web</span>
          </div>
          <h3>Serat Nusantara</h3>
          <p>Toko kain tradisional yang ingin menjual online. Kami bangun toko online yang sederhana, cepat, dan mudah dikelola oleh pemiliknya sendiri tanpa perlu bantuan teknis.</p>
          <div>
            <span class="work-tag">E-Commerce</span>
            <span class="work-tag">Web</span>
          </div>
        </div>
      </div>

      <div class="work-item reveal">
        <div class="work-img">
          <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=800&q=80" alt="Lembah Tani">
        </div>
        <div class="work-text">
          <div class="work-meta">
            <span>2023</span>
            <span class="dot"></span>
            <span>Aplikasi Mobile</span>
          </div>
          <h3>Lembah Tani</h3>
          <p>Aplikasi pencatatan hasil panen untuk koperasi tani. Dibuat sesederhana mungkin karena penggunanya banyak yang belum terbiasa dengan smartphone.</p>
          <div>
            <span class="work-tag">Aplikasi</span>
            <span class="work-tag">Mobile</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- NUMBERS -->
<section class="numbers">
  <div class="wrap">
    <div class="numbers-grid">

      <div class="number-item reveal">
        <div class="num"><span class="counter" data-target="142">0</span></div>
        <div class="lbl">Proyek selesai<br>sejak 2015</div>
      </div>

      <div class="number-item reveal">
        <div class="num"><span class="counter" data-target="68">0</span></div>
        <div class="lbl">Klien yang masih<br>bekerja sama</div>
      </div>

      <div class="number-item reveal">
        <div class="num"><span class="counter" data-target="92">0</span><span>%</span></div>
        <div class="lbl">Klien kembali<br>untuk proyek kedua</div>
      </div>

      <div class="number-item reveal">
        <div class="num"><span class="counter" data-target="10">0</span></div>
        <div class="lbl">Tahun belajar<br>dan bertumbuh</div>
      </div>

    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="section process" id="proses">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="section-label">Cara Kerja</div>
      <h2>Empat langkah <em>yang selalu kami pegang.</em></h2>
      <p>Tidak ada kejutan, tidak ada drama. Semua berjalan sesuai rencana yang kita sepakati bersama.</p>
    </div>

    <div class="process-grid">

      <div class="process-step reveal">
        <div class="process-num">LANGKAH SATU</div>
        <h4>Mendengar</h4>
        <p>Kami duduk bareng dulu. Ngobrol soal bisnis Anda, bukan langsung menawarkan solusi.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">LANGKAH DUA</div>
        <h4>Merancang</h4>
        <p>Kami tuangkan hasil ngobrol itu ke rencana yang jelas, lengkap dengan garis waktu dan anggaran.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">LANGKAH TIGA</div>
        <h4>Mengerjakan</h4>
        <p>Tim kecil bekerja dengan tenggat yang disepakati. Anda dapat kabar setiap minggu.</p>
      </div>

      <div class="process-step reveal">
        <div class="process-num">LANGKAH EMPAT</div>
        <h4>Menemani</h4>
        <p>Setelah selesai, kami tetap ada. Bukan untuk cari proyek baru, tapi memastikan semuanya berjalan.</p>
      </div>

    </div>
  </div>
</section>

<!-- TESTIMONIAL -->
<section class="section">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="section-label">Kata Klien</div>
      <h2>Yang mereka <em>bilang tentang kami.</em></h2>
    </div>

    <div class="testimonial-main">

      <div class="testimonial-photo reveal">
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=800&q=80" alt="Klien">
      </div>

      <div class="testimonial-content reveal">
        <div class="testimonial-quote-mark">"</div>

        <div class="testimonial-text" id="testiText">
          Kami bukan perusahaan besar. Waktu cari partner, kami cuma butuh orang yang mau dengar dulu sebelum ngomong. Ruang Reka itu. Mereka kerja rapi, dan yang paling penting: jujur soal apa yang bisa dan tidak bisa mereka kerjakan.
        </div>

        <div class="testimonial-author">
          <img src="https://i.pravatar.cc/150?img=47" alt="" id="testiAvatar">
          <div>
            <div class="name" id="testiName">Ibu Ratna Wulandari</div>
            <div class="role" id="testiRole">Pemilik, Kopi Ruang Tengah</div>
          </div>
        </div>

        <div class="testimonial-dots" id="testiDots">
          <button class="active" data-i="0"></button>
          <button data-i="1"></button>
          <button data-i="2"></button>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="wrap">
    <div class="cta-box reveal">
      <div class="cta-inner">
        <div>
          <h2>
            Ada yang ingin <em>kita obrolkan?</em>
          </h2>
          <p>
            Ceritakan rencana atau masalah yang sedang Anda hadapi. Kami akan bilang terus terang apakah kami bisa membantu, dan kalau tidak, kami akan carikan orang yang tepat.
          </p>
        </div>
        <div class="cta-actions">
          <a href="#kontak" class="btn btn-cream">
            Mulai Percakapan <i class="fas fa-arrow-right"></i>
          </a>
          <a href="#" class="btn btn-border">
            Unduh Profil Perusahaan
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer" id="kontak">
  <div class="wrap">
    <div class="footer-grid">

      <div>
        <div class="footer-brand">
          <span class="brand-dot"></span>
          Ruang Reka
        </div>
        <p class="footer-desc">
          Studio kreatif yang menemani bisnis keluarga dan UMKM Indonesia bertumbuh dengan tenang dan terarah sejak 2015.
        </p>
      </div>

      <div class="footer-col">
        <h4>Layanan</h4>
        <ul>
          <li><a href="#">Perancangan Produk</a></li>
          <li><a href="#">Pengembangan Web</a></li>
          <li><a href="#">Aplikasi Mobile</a></li>
          <li><a href="#">Identitas Merek</a></li>
          <li><a href="#">Pendampingan</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Perusahaan</h4>
        <ul>
          <li><a href="#tentang">Tentang Kami</a></li>
          <li><a href="#karya">Karya</a></li>
          <li><a href="#">Catatan Studio</a></li>
          <li><a href="#">Karier</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
      </div>

      <div class="footer-col footer-contact">
        <h4>Hubungi Kami</h4>
        <p><i class="fas fa-envelope"></i> halo@ruangreka.id</p>
        <p><i class="fas fa-phone"></i> +62 812 3456 7890</p>
        <p><i class="fas fa-location-dot"></i> Jalan Cikini Raya 24<br>Jakarta Pusat 10330</p>
      </div>

    </div>

    <div class="footer-bottom">
      <div>© 2025 Ruang Reka Studio. Dibuat di Jakarta.</div>
      <div class="footer-social">
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" aria-label="Behance"><i class="fab fa-behance"></i></a>
        <a href="#" aria-label="Dribbble"><i class="fab fa-dribbble"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- WA FLOAT -->
<a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2004" class="wa-float" target="_blank" aria-label="WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>

<script>
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

// Reveal on scroll
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
      const duration = 1600;
      const step = target / (duration / 16);
      let cur = 0;
      const tick = () => {
        cur += step;
        if (cur < target) {
          el.textContent = Math.ceil(cur);
          requestAnimationFrame(tick);
        } else {
          el.textContent = target;
        }
      };
      tick();
      counterObs.unobserve(el);
    }
  });
}, { threshold: 0.5 });

document.querySelectorAll('.counter').forEach(el => counterObs.observe(el));

// Testimonial rotation
const testimonials = [
  {
    text: 'Kami bukan perusahaan besar. Waktu cari partner, kami cuma butuh orang yang mau dengar dulu sebelum ngomong. Ruang Reka itu. Mereka kerja rapi, dan yang paling penting: jujur soal apa yang bisa dan tidak bisa mereka kerjakan.',
    name: 'Ibu Ratna Wulandari',
    role: 'Pemilik, Kopi Ruang Tengah',
    avatar: 'https://i.pravatar.cc/150?img=47'
  },
  {
    text: 'Toko kami biasa jualan lewat WhatsApp saja. Sekarang sudah punya toko online sendiri, dan yang bikin senang, saya bisa update produk sendiri tanpa perlu telepon siapa-siapa.',
    name: 'Pak Hendra Gunawan',
    role: 'Pemilik, Serat Nusantara',
    avatar: 'https://i.pravatar.cc/150?img=52'
  },
  {
    text: 'Aplikasi yang mereka buat sederhana sekali. Petani kami yang belum biasa pakai smartphone pun bisa memakainya. Itu artinya mereka benar-benar memahami penggunanya.',
    name: 'Bu Sri Handayani',
    role: 'Ketua Koperasi, Lembah Tani',
    avatar: 'https://i.pravatar.cc/150?img=20'
  }
];

const testiText = document.getElementById('testiText');
const testiName = document.getElementById('testiName');
const testiRole = document.getElementById('testiRole');
const testiAvatar = document.getElementById('testiAvatar');
const testiDots = document.querySelectorAll('#testiDots button');

let currentTesti = 0;
let testiInterval;

function showTesti(i) {
  currentTesti = i;
  const t = testimonials[i];

  testiText.style.opacity = '0';
  testiName.style.opacity = '0';
  testiRole.style.opacity = '0';

  setTimeout(() => {
    testiText.textContent = t.text;
    testiName.textContent = t.name;
    testiRole.textContent = t.role;
    testiAvatar.src = t.avatar;

    testiText.style.opacity = '1';
    testiName.style.opacity = '1';
    testiRole.style.opacity = '1';
  }, 200);

  testiDots.forEach((d, idx) => d.classList.toggle('active', idx === i));
}

testiDots.forEach(dot => {
  dot.addEventListener('click', () => {
    clearInterval(testiInterval);
    showTesti(+dot.dataset.i);
    startTesti();
  });
});

function startTesti() {
  testiInterval = setInterval(() => {
    showTesti((currentTesti + 1) % testimonials.length);
  }, 6000);
}
startTesti();

testiText.style.transition = 'opacity 0.3s';
testiName.style.transition = 'opacity 0.3s';
testiRole.style.transition = 'opacity 0.3s';

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