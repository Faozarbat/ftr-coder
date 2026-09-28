@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cendekia Bangsa — Sekolah & Kursus untuk Generasi Masa Depan</title>
<meta name="description" content="Cendekia Bangsa — sekolah dan lembaga kursus dengan kurikulum yang membangun karakter dan keterampilan anak sejak dini.">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --cream: #fdf8f0;
  --cream-2: #f8f0e0;
  --cream-3: #f0e4cd;
  --paper: #ffffff;
  --ink: #1f2937;
  --ink-2: #4b5563;
  --ink-3: #9ca3af;
  --line: #e8dfd1;
  --line-2: #d9cdb8;
  --blue: #2c5ba8;
  --blue-dark: #1e3f75;
  --blue-soft: #e8f0fa;
  --blue-line: #c5d8ef;
  --yellow: #e8b73e;
  --yellow-soft: #fdf6e3;
  --orange: #d97737;
  --orange-soft: #fdefe5;
  --green: #4a7c59;
  --green-soft: #e8f0ea;
  --serif: 'Fraunces', Georgia, serif;
  --sans: 'Plus Jakarta Sans', -apple-system, sans-serif;
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

::selection { background: var(--blue); color: #fff; }
a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }
button { font-family: inherit; cursor: pointer; }

/* ============ LAYOUT ============ */
.wrap {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 28px;
}

/* ============ TOP BAR ============ */
.topbar {
  background: var(--blue-dark);
  color: #fff;
  font-size: 13px;
  padding: 10px 0;
}

.topbar-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 28px;
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
  color: rgba(255,255,255,0.85);
}

.topbar-item i {
  color: var(--yellow);
  font-size: 12px;
}

.topbar-cta {
  font-weight: 600;
  color: #fff;
  border-bottom: 1px solid rgba(255,255,255,0.4);
  padding-bottom: 1px;
}

/* ============ NAV ============ */
.nav {
  background: var(--cream);
  position: sticky;
  top: 0;
  z-index: 100;
  transition: box-shadow 0.3s, padding 0.3s;
  border-bottom: 1px solid transparent;
  padding: 16px 0;
}

.nav.scrolled {
  box-shadow: 0 4px 24px rgba(31, 41, 55, 0.08);
  border-bottom-color: var(--line);
  padding: 10px 0;
}

.nav-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 28px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 24px;
}

.brand {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 19px;
  font-weight: 800;
  color: var(--ink);
  letter-spacing: -0.02em;
  flex-shrink: 0;
}

.brand-mark {
  width: 44px;
  height: 44px;
  background: var(--blue);
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 20px;
  font-family: var(--serif);
  font-weight: 700;
  position: relative;
}

.brand-mark::after {
  content: '';
  position: absolute;
  bottom: -4px;
  right: -4px;
  width: 14px;
  height: 14px;
  background: var(--yellow);
  border-radius: 50%;
  border: 2px solid var(--cream);
}

.brand-text small {
  display: block;
  font-size: 11px;
  font-weight: 500;
  color: var(--ink-3);
  letter-spacing: 0.05em;
  text-transform: uppercase;
  margin-top: 1px;
}

.nav-menu {
  display: flex;
  gap: 2px;
  list-style: none;
  align-items: center;
  flex: 1;
  justify-content: center;
}

.nav-menu a {
  font-size: 14px;
  font-weight: 500;
  color: var(--ink-2);
  padding: 9px 16px;
  border-radius: 999px;
  transition: all 0.2s;
}

.nav-menu a:hover {
  background: var(--paper);
  color: var(--blue);
  box-shadow: 0 2px 8px rgba(31, 41, 55, 0.06);
}

.nav-actions {
  display: flex;
  gap: 8px;
  align-items: center;
  flex-shrink: 0;
}

.btn-nav-login {
  padding: 10px 18px;
  font-size: 14px;
  font-weight: 600;
  color: var(--ink-2);
  border-radius: 999px;
  transition: color 0.2s;
}

.btn-nav-login:hover { color: var(--blue); }

.nav-cta {
  padding: 11px 22px;
  background: var(--blue);
  color: #fff;
  border-radius: 999px;
  font-size: 14px;
  font-weight: 600;
  transition: all 0.2s;
}

.nav-cta:hover {
  background: var(--blue-dark);
  transform: translateY(-1px);
  box-shadow: 0 8px 20px -8px rgba(44, 91, 168, 0.5);
}

.nav-toggle {
  display: none;
  background: none;
  border: none;
  font-size: 22px;
  color: var(--ink);
  padding: 8px;
}

/* ============ HERO ============ */
.hero {
  padding: 60px 0 80px;
  position: relative;
  overflow: hidden;
}

.hero::before {
  content: '';
  position: absolute;
  top: -100px;
  right: -150px;
  width: 500px;
  height: 500px;
  background: var(--yellow-soft);
  border-radius: 50%;
  z-index: 0;
}

.hero::after {
  content: '';
  position: absolute;
  bottom: -150px;
  left: -100px;
  width: 350px;
  height: 350px;
  background: var(--blue-soft);
  border-radius: 50%;
  z-index: 0;
}

.hero-inner {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: 60px;
  align-items: center;
}

.hero-text {
  max-width: 600px;
}

.hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 8px 16px;
  background: var(--paper);
  border: 1px solid var(--line);
  border-radius: 999px;
  font-size: 13px;
  font-weight: 500;
  color: var(--ink-2);
  margin-bottom: 26px;
  box-shadow: 0 2px 8px rgba(31, 41, 55, 0.04);
}

.hero-tag-icon {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: var(--yellow);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 10px;
}

.hero h1 {
  font-family: var(--serif);
  font-size: clamp(36px, 5.2vw, 60px);
  font-weight: 600;
  line-height: 1.08;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 24px;
}

.hero h1 em {
  font-style: italic;
  font-weight: 500;
  color: var(--blue);
}

.hero-lede {
  font-size: 17px;
  color: var(--ink-2);
  line-height: 1.75;
  margin-bottom: 36px;
  max-width: 520px;
}

.hero-actions {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  margin-bottom: 36px;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 15px 28px;
  font-size: 15px;
  font-weight: 600;
  border-radius: 999px;
  border: 1px solid transparent;
  transition: all 0.2s;
  cursor: pointer;
  font-family: inherit;
  white-space: nowrap;
}

.btn-blue {
  background: var(--blue);
  color: #fff;
}

.btn-blue:hover {
  background: var(--blue-dark);
  transform: translateY(-2px);
  box-shadow: 0 12px 24px -8px rgba(44, 91, 168, 0.4);
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

.hero-info {
  display: flex;
  gap: 32px;
  flex-wrap: wrap;
  padding-top: 28px;
  border-top: 1px solid var(--line);
}

.hero-info-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 14px;
  color: var(--ink-2);
}

.hero-info-item i {
  color: var(--blue);
  font-size: 13px;
}

/* Hero visual - collage */
.hero-visual {
  position: relative;
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-template-rows: 1fr 1fr;
  gap: 16px;
  height: 520px;
}

.hero-img {
  border-radius: 20px;
  overflow: hidden;
  background: var(--cream-3);
}

.hero-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.7s;
}

.hero-img:hover img { transform: scale(1.05); }

.hero-img.tall {
  grid-row: span 2;
}

.hero-badge {
  position: absolute;
  top: 20px;
  left: -20px;
  padding: 14px 20px;
  background: var(--paper);
  border-radius: 16px;
  box-shadow: 0 20px 40px -20px rgba(31, 41, 55, 0.25);
  display: flex;
  align-items: center;
  gap: 12px;
  z-index: 2;
}

.hero-badge-icon {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: var(--green-soft);
  color: var(--green);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
}

.hero-badge .num {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 700;
  color: var(--ink);
  line-height: 1;
  letter-spacing: -0.02em;
}

.hero-badge .lbl {
  font-size: 12px;
  color: var(--ink-3);
  margin-top: 3px;
}

.hero-badge-2 {
  position: absolute;
  bottom: 20px;
  right: -20px;
  padding: 14px 20px;
  background: var(--yellow);
  border-radius: 16px;
  color: var(--ink);
  box-shadow: 0 20px 40px -20px rgba(232, 183, 62, 0.5);
  z-index: 2;
  display: flex;
  align-items: center;
  gap: 10px;
  font-weight: 700;
  font-size: 14px;
}

.hero-badge-2 i { font-size: 16px; }

/* ============ TRUST BAND ============ */
.trust-band {
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
  padding: 32px 0;
}

.trust-band-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 28px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  flex-wrap: wrap;
}

.trust-label {
  font-size: 12px;
  font-weight: 600;
  color: var(--ink-3);
  letter-spacing: 0.14em;
  text-transform: uppercase;
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

.trust-logos span:hover { color: var(--blue); }

/* ============ SECTION ============ */
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

.sec-label {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 6px 16px;
  background: var(--yellow-soft);
  border-radius: 999px;
  font-size: 12px;
  font-weight: 700;
  color: var(--blue);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  margin-bottom: 22px;
}

.sec-label i { font-size: 11px; color: var(--yellow); }

.section-head h2 {
  font-family: var(--serif);
  font-size: clamp(30px, 4vw, 44px);
  font-weight: 600;
  line-height: 1.15;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 20px;
}

.section-head h2 em {
  font-style: italic;
  font-weight: 500;
  color: var(--blue);
}

.section-head p {
  font-size: 17px;
  color: var(--ink-2);
  line-height: 1.75;
}

/* ============ PROGRAM ============ */
.program {
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.program-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.program-card {
  background: var(--cream);
  border-radius: 24px;
  padding: 0;
  overflow: hidden;
  transition: all 0.3s;
  border: 2px solid transparent;
  display: flex;
  flex-direction: column;
}

.program-card:hover {
  border-color: var(--blue);
  transform: translateY(-5px);
  box-shadow: 0 25px 50px -25px rgba(44, 91, 168, 0.3);
}

.program-img {
  aspect-ratio: 16 / 10;
  overflow: hidden;
  background: var(--cream-2);
  position: relative;
}

.program-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s;
}

.program-card:hover .program-img img { transform: scale(1.06); }

.program-age {
  position: absolute;
  top: 16px;
  left: 16px;
  padding: 6px 14px;
  background: var(--paper);
  color: var(--ink);
  border-radius: 999px;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.02em;
}

.program-body {
  padding: 28px 28px 32px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.program-cat {
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--orange);
  margin-bottom: 12px;
}

.program-card h3 {
  font-family: var(--serif);
  font-size: 24px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 12px;
  letter-spacing: -0.015em;
  line-height: 1.2;
}

.program-card p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.7;
  margin-bottom: 22px;
  flex: 1;
}

.program-meta {
  display: flex;
  gap: 16px;
  padding-top: 20px;
  border-top: 1px solid var(--line);
  font-size: 13px;
  color: var(--ink-3);
  margin-bottom: 20px;
  flex-wrap: wrap;
}

.program-meta span {
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.program-meta i { color: var(--blue); font-size: 12px; }

.program-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 14px;
  font-weight: 700;
  color: var(--blue);
  transition: gap 0.2s;
}

.program-card:hover .program-link { gap: 14px; }

/* ============ KEUNGGULAN ============ */
.advantages {
  background: var(--cream);
}

.advantages-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
}

.advantages-text h2 {
  font-family: var(--serif);
  font-size: clamp(28px, 3.6vw, 42px);
  font-weight: 600;
  line-height: 1.12;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 24px;
}

.advantages-text h2 em {
  font-style: italic;
  font-weight: 500;
  color: var(--blue);
}

.advantages-text > p {
  font-size: 16px;
  color: var(--ink-2);
  line-height: 1.75;
  margin-bottom: 36px;
}

.advantage-list {
  display: grid;
  gap: 22px;
}

.advantage-item {
  display: flex;
  gap: 18px;
  align-items: flex-start;
  padding: 20px;
  background: var(--paper);
  border-radius: 18px;
  border: 1px solid var(--line);
  transition: all 0.25s;
}

.advantage-item:hover {
  border-color: var(--blue);
  transform: translateX(6px);
}

.advantage-icon {
  width: 48px;
  height: 48px;
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 19px;
  flex-shrink: 0;
}

.advantage-icon.blue { background: var(--blue-soft); color: var(--blue); }
.advantage-icon.yellow { background: var(--yellow-soft); color: var(--orange); }
.advantage-icon.green { background: var(--green-soft); color: var(--green); }
.advantage-icon.orange { background: var(--orange-soft); color: var(--orange); }

.advantage-item h4 {
  font-family: var(--serif);
  font-size: 18px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 5px;
  letter-spacing: -0.01em;
}

.advantage-item p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.65;
  margin: 0;
}

.advantages-visual {
  position: relative;
}

.adv-img-main {
  border-radius: 24px;
  overflow: hidden;
  aspect-ratio: 4 / 5;
}

.adv-img-main img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.adv-card {
  position: absolute;
  bottom: -20px;
  left: -30px;
  background: var(--paper);
  border-radius: 20px;
  padding: 22px 26px;
  box-shadow: 0 25px 50px -20px rgba(31, 41, 55, 0.25);
  min-width: 240px;
  border: 1px solid var(--line);
}

.adv-card-label {
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--ink-3);
  margin-bottom: 12px;
}

.adv-rating {
  display: flex;
  align-items: center;
  gap: 12px;
}

.adv-rating-stars {
  color: var(--yellow);
  font-size: 15px;
  letter-spacing: 2px;
}

.adv-rating-num {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 700;
  color: var(--ink);
  letter-spacing: -0.02em;
}

.adv-card-sub {
  font-size: 13px;
  color: var(--ink-3);
  margin-top: 8px;
}

/* ============ GURU ============ */
.guru {
  background: var(--paper);
  border-top: 1px solid var(--line);
  border-bottom: 1px solid var(--line);
}

.guru-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
}

.guru-card {
  text-align: center;
  padding: 28px 20px;
  background: var(--cream);
  border-radius: 20px;
  transition: all 0.3s;
  border: 2px solid transparent;
}

.guru-card:hover {
  border-color: var(--blue);
  transform: translateY(-5px);
}

.guru-photo {
  width: 120px;
  height: 120px;
  margin: 0 auto 20px;
  border-radius: 50%;
  overflow: hidden;
  background: var(--cream-2);
  border: 4px solid var(--paper);
  box-shadow: 0 10px 24px -8px rgba(31, 41, 55, 0.15);
}

.guru-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.guru-card h3 {
  font-family: var(--serif);
  font-size: 19px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 5px;
  letter-spacing: -0.01em;
}

.guru-card .role {
  font-size: 13px;
  color: var(--blue);
  font-weight: 600;
  margin-bottom: 10px;
}

.guru-card .bio {
  font-size: 13px;
  color: var(--ink-3);
  line-height: 1.5;
}

/* ============ JADWAL / KEGIATAN ============ */
.schedule-grid {
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: 60px;
  align-items: start;
}

.schedule-list {
  display: grid;
  gap: 20px;
}

.event-card {
  display: flex;
  gap: 22px;
  padding: 24px;
  background: var(--paper);
  border: 1px solid var(--line);
  border-radius: 20px;
  transition: all 0.25s;
  cursor: pointer;
}

.event-card:hover {
  border-color: var(--blue);
  box-shadow: 0 15px 35px -20px rgba(44, 91, 168, 0.3);
}

.event-date {
  flex-shrink: 0;
  width: 76px;
  height: 76px;
  border-radius: 16px;
  background: var(--blue-soft);
  color: var(--blue);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.event-date .day {
  font-family: var(--serif);
  font-size: 28px;
  font-weight: 700;
  line-height: 1;
  letter-spacing: -0.02em;
}

.event-date .mon {
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  margin-top: 3px;
  opacity: 0.75;
}

.event-body {
  flex: 1;
  min-width: 0;
}

.event-cat {
  display: inline-block;
  padding: 3px 10px;
  background: var(--yellow-soft);
  color: var(--orange);
  border-radius: 6px;
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-bottom: 8px;
}

.event-card h3 {
  font-family: var(--serif);
  font-size: 20px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 8px;
  letter-spacing: -0.01em;
}

.event-card p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.6;
  margin-bottom: 12px;
}

.event-meta {
  display: flex;
  gap: 18px;
  font-size: 13px;
  color: var(--ink-3);
  flex-wrap: wrap;
}

.event-meta span {
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.event-meta i { color: var(--blue); font-size: 12px; }

/* Info panel */
.info-panel {
  background: var(--cream-2);
  border-radius: 24px;
  padding: 36px 32px;
  border: 1px solid var(--line);
}

.info-panel h3 {
  font-family: var(--serif);
  font-size: 26px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 14px;
  letter-spacing: -0.015em;
}

.info-panel > p {
  font-size: 15px;
  color: var(--ink-2);
  line-height: 1.7;
  margin-bottom: 26px;
}

.info-list {
  display: grid;
  gap: 0;
  margin-bottom: 28px;
}

.info-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 16px 0;
  border-bottom: 1px solid var(--line-2);
  font-size: 15px;
}

.info-row:last-child { border-bottom: none; }

.info-row .label {
  color: var(--ink-2);
  display: flex;
  align-items: center;
  gap: 10px;
}

.info-row .label i {
  color: var(--blue);
  font-size: 14px;
  width: 16px;
}

.info-row .value {
  font-family: var(--serif);
  font-weight: 600;
  color: var(--ink);
  text-align: right;
  letter-spacing: -0.005em;
}

.info-panel .btn {
  width: 100%;
  justify-content: center;
}

/* ============ ALUMNI / TESTIMONI ============ */
.testi {
  background: var(--cream);
}

.testi-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.testi-card {
  padding: 34px 30px;
  background: var(--paper);
  border-radius: 24px;
  border: 1px solid var(--line);
  transition: all 0.3s;
  position: relative;
}

.testi-card:hover {
  border-color: var(--blue);
  transform: translateY(-4px);
  box-shadow: 0 20px 40px -20px rgba(44, 91, 168, 0.2);
}

.testi-mark {
  font-family: var(--serif);
  font-size: 60px;
  line-height: 0.6;
  color: var(--yellow);
  margin-bottom: 12px;
  font-weight: 700;
  font-style: italic;
}

.testi-text {
  font-size: 15px;
  color: var(--ink-2);
  line-height: 1.75;
  margin-bottom: 24px;
}

.testi-text strong {
  color: var(--ink);
  font-weight: 600;
}

.testi-author {
  display: flex;
  align-items: center;
  gap: 14px;
  padding-top: 20px;
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
  font-size: 15px;
  font-weight: 600;
  color: var(--ink);
}

.testi-author .role {
  font-size: 12px;
  color: var(--ink-3);
  margin-top: 1px;
}

/* ============ STAT ============ */
.stat-band {
  padding: 80px 0;
  background: var(--blue);
  color: #fff;
}

.stat-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 28px;
}

.stat-item {
  text-align: center;
  padding: 20px;
  position: relative;
}

.stat-item::after {
  content: '';
  position: absolute;
  right: -20px;
  top: 30%;
  height: 40%;
  width: 1px;
  background: rgba(255, 255, 255, 0.2);
}

.stat-item:last-child::after { display: none; }

.stat-num {
  font-family: var(--serif);
  font-size: clamp(38px, 5vw, 56px);
  font-weight: 700;
  line-height: 1;
  letter-spacing: -0.03em;
  margin-bottom: 12px;
}

.stat-num .plus {
  color: var(--yellow);
  font-weight: 500;
}

.stat-lbl {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.75);
  line-height: 1.5;
}

/* ============ CTA ============ */
.cta {
  padding: 90px 0;
  background: var(--paper);
  border-top: 1px solid var(--line);
}

.cta-box {
  background: var(--cream-2);
  border-radius: 32px;
  padding: 72px 60px;
  position: relative;
  overflow: hidden;
  display: grid;
  grid-template-columns: 1.4fr 1fr;
  gap: 60px;
  align-items: center;
  border: 1px solid var(--line);
}

.cta-box::before {
  content: '';
  position: absolute;
  top: -80px;
  right: -80px;
  width: 240px;
  height: 240px;
  background: var(--yellow);
  border-radius: 50%;
  opacity: 0.2;
}

.cta-box::after {
  content: '';
  position: absolute;
  bottom: -60px;
  left: 10%;
  width: 160px;
  height: 160px;
  background: var(--blue);
  border-radius: 50%;
  opacity: 0.1;
}

.cta-text {
  position: relative;
  z-index: 1;
}

.cta-text h2 {
  font-family: var(--serif);
  font-size: clamp(28px, 3.6vw, 42px);
  font-weight: 600;
  line-height: 1.12;
  letter-spacing: -0.025em;
  color: var(--ink);
  margin-bottom: 18px;
}

.cta-text h2 em {
  font-style: italic;
  font-weight: 500;
  color: var(--blue);
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
  gap: 12px;
}

.cta-actions .btn { justify-content: center; }

/* ============ FOOTER ============ */
.footer {
  background: var(--cream);
  border-top: 1px solid var(--line);
  padding: 72px 0 32px;
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.2fr;
  gap: 56px;
  padding-bottom: 48px;
  border-bottom: 1px solid var(--line);
  margin-bottom: 32px;
}

.footer-brand {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 19px;
  font-weight: 800;
  color: var(--ink);
  margin-bottom: 18px;
  letter-spacing: -0.02em;
}

.footer-desc {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.7;
  max-width: 340px;
  margin-bottom: 22px;
}

.footer-accreditation {
  padding: 14px 16px;
  background: var(--paper);
  border: 1px solid var(--line);
  border-radius: 12px;
  font-size: 12px;
  color: var(--ink-3);
  line-height: 1.6;
}

.footer-accreditation strong {
  color: var(--blue);
  font-weight: 700;
}

.footer-col h4 {
  font-size: 13px;
  font-weight: 700;
  color: var(--ink);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  margin-bottom: 20px;
}

.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 12px; }

.footer-col a {
  font-size: 14px;
  color: var(--ink-2);
  transition: color 0.15s;
}

.footer-col a:hover { color: var(--blue); }

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
  color: var(--blue);
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
  border-radius: 12px;
  background: var(--paper);
  border: 1px solid var(--line);
  color: var(--ink-2);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  transition: all 0.2s;
}

.footer-social a:hover {
  background: var(--blue);
  border-color: var(--blue);
  color: #fff;
  transform: translateY(-3px);
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
  bottom: 24px;
  right: 24px;
  z-index: 200;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.float-btn {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 54px;
  height: 54px;
  border-radius: 50%;
  font-size: 22px;
  border: none;
  cursor: pointer;
  transition: all 0.25s;
  text-decoration: none;
  color: #fff;
}

.float-wa {
  background: #25d366;
  box-shadow: 0 12px 28px -8px rgba(37, 211, 102, 0.5);
}

.float-wa:hover { transform: translateY(-3px) scale(1.05); }

/* ============ RESPONSIVE ============ */
@media (max-width: 1024px) {
  .hero-inner { grid-template-columns: 1fr; gap: 48px; }
  .hero-visual { max-width: 560px; margin: 0 auto; height: 440px; }
  .hero-badge { left: 0; }
  .hero-badge-2 { right: 0; }

  .program-grid { grid-template-columns: repeat(2, 1fr); }
  .guru-grid { grid-template-columns: repeat(2, 1fr); }
  .advantages-grid { grid-template-columns: 1fr; gap: 60px; }
  .advantages-visual { max-width: 500px; margin: 0 auto; }
  .adv-card { left: 0; }
  .schedule-grid { grid-template-columns: 1fr; gap: 40px; }
  .testi-grid { grid-template-columns: 1fr; }
  .stat-grid { grid-template-columns: repeat(2, 1fr); gap: 32px; }
  .stat-item::after { display: none; }
  .cta-box { grid-template-columns: 1fr; gap: 40px; padding: 56px 40px; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
  .footer-grid > div:first-child { grid-column: span 2; }

  .nav-menu {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    width: 320px;
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
    box-shadow: -20px 0 60px rgba(31, 41, 55, 0.1);
  }

  .nav-menu.open { display: flex; }
  .nav-menu a { padding: 14px 18px; font-size: 16px; border-radius: 10px; }
  .btn-nav-login { display: none; }
  .nav-toggle { display: block; z-index: 1001; }
}

@media (max-width: 640px) {
  .wrap, .topbar-inner, .nav-inner, .stat-grid, .trust-band-inner { padding: 0 20px; }
  .section { padding: 72px 0; }
  .hero { padding: 40px 0 60px; }
  .hero-visual { height: 360px; grid-template-columns: 1fr 1fr; }

  .program-grid { grid-template-columns: 1fr; }
  .guru-grid { grid-template-columns: 1fr; }
  .advantages-text h2 { font-size: 28px; }
  .section-head h2 { font-size: 30px; }

  .event-card { flex-direction: row; gap: 16px; padding: 20px; }
  .event-date { width: 64px; height: 64px; }
  .event-date .day { font-size: 24px; }
  .event-date .mon { font-size: 10px; }

  .info-panel { padding: 28px 24px; }

  .cta-box { padding: 40px 24px; }
  .footer-grid { grid-template-columns: 1fr; }
  .footer-grid > div:first-child { grid-column: span 1; }

  .stat-grid { grid-template-columns: 1fr; gap: 24px; }

  .hero-badge { padding: 10px 16px; }
  .hero-badge .num { font-size: 18px; }
  .hero-badge-icon { width: 36px; height: 36px; font-size: 15px; }
  .hero-badge-2 { padding: 10px 16px; font-size: 12px; }

  .nav-cta { padding: 10px 18px; font-size: 13px; }
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <div class="topbar-inner">
    <div style="display:flex; gap:24px; flex-wrap:wrap;">
      <span class="topbar-item">
        <i class="fas fa-phone"></i> (021) 555-0199
      </span>
      <span class="topbar-item">
        <i class="fas fa-envelope"></i> info@cendekiabangsa.sch.id
      </span>
    </div>
    <span class="topbar-item">
      Penerimaan Siswa Baru 2025/2026 telah dibuka
      <a href="#daftar" class="topbar-cta">Daftar sekarang</a>
    </span>
  </div>
</div>

<!-- NAV -->
<nav class="nav" id="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <div class="brand-mark">C</div>
      <div class="brand-text">
        Cendekia Bangsa
        <small>Sejak 2003</small>
      </div>
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#program">Program</a></li>
      <li><a href="#keunggulan">Keunggulan</a></li>
      <li><a href="#guru">Pengajar</a></li>
      <li><a href="#kegiatan">Kegiatan</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>

    <div class="nav-actions">
      <a href="#" class="btn-nav-login">Masuk Portal</a>
      <a href="#daftar" class="nav-cta">Daftar PPDB</a>
      <button class="nav-toggle" id="navToggle" aria-label="Menu">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="wrap">
    <div class="hero-inner">

      <div class="hero-text reveal">
        <div class="hero-tag">
          <span class="hero-tag-icon"><i class="fas fa-star"></i></span>
          Terakreditasi A &nbsp;·&nbsp; Kurikulum Merdeka
        </div>

        <h1>
          Tempat anak tumbuh <em>cerdas dan berkarakter.</em>
        </h1>

        <p class="hero-lede">
          Cendekia Bangsa adalah sekolah dan lembaga kursus yang percaya bahwa pendidikan bukan hanya soal nilai. Kami mendampingi anak mengembangkan akal, hati, dan keterampilan hidup.
        </p>

        <div class="hero-actions">
          <a href="#daftar" class="btn btn-blue">
            Daftar Sekarang <i class="fas fa-arrow-right"></i>
          </a>
          <a href="#program" class="btn btn-outline">
            Lihat Program
          </a>
        </div>

        <div class="hero-info">
          <div class="hero-info-item">
            <i class="fas fa-circle-check"></i>
            <span>Guru berpengalaman</span>
          </div>
          <div class="hero-info-item">
            <i class="fas fa-circle-check"></i>
            <span>Kelas kecil maks. 20 anak</span>
          </div>
          <div class="hero-info-item">
            <i class="fas fa-circle-check"></i>
            <span>Laporan harian ke orang tua</span>
          </div>
        </div>
      </div>

      <div class="hero-visual reveal">
        <div class="hero-img tall">
          <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800&q=80" alt="">
        </div>
        <div class="hero-img">
          <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?w=600&q=80" alt="">
        </div>
        <div class="hero-img">
          <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=600&q=80" alt="">
        </div>

        <div class="hero-badge">
          <div class="hero-badge-icon"><i class="fas fa-graduation-cap"></i></div>
          <div>
            <div class="num">22</div>
            <div class="lbl">Tahun mendidik</div>
          </div>
        </div>

        <div class="hero-badge-2">
          <i class="fas fa-award"></i>
          Akreditasi A
        </div>
      </div>

    </div>
  </div>
</header>

<!-- TRUST BAND -->
<div class="trust-band">
  <div class="trust-band-inner">
    <div class="trust-label">Bekerja sama dengan</div>
    <div class="trust-logos">
      <span>Kemendikbud</span>
      <span>Cambridge Assessment</span>
      <span>IDAI</span>
      <span>British Council</span>
      <span>Google for Education</span>
    </div>
  </div>
</div>

<!-- PROGRAM -->
<section class="section program" id="program">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-label"><i class="fas fa-shapes"></i> Program Kami</div>
      <h2>Pendidikan untuk <em>setiap tahap tumbuh.</em></h2>
      <p>Kami menyediakan program untuk anak usia dini hingga remaja, dengan pendekatan yang disesuaikan dengan tahap perkembangan mereka.</p>
    </div>

    <div class="program-grid">

      <div class="program-card reveal">
        <div class="program-img">
          <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=800&q=80" alt="">
          <span class="program-age">Usia 3–6 tahun</span>
        </div>
        <div class="program-body">
          <div class="program-cat">PAUD & TK</div>
          <h3>Program Tumbuh Kembang</h3>
          <p>Belajar sambil bermain dengan pendekatan Montessori. Fokus pada motorik halus, kemandirian, dan sosial emosional anak.</p>
          <div class="program-meta">
            <span><i class="fas fa-clock"></i> Senin–Jumat</span>
            <span><i class="fas fa-users"></i> Maks. 15 anak</span>
          </div>
          <a href="#" class="program-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="program-card reveal">
        <div class="program-img">
          <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?w=800&q=80" alt="">
          <span class="program-age">Usia 7–12 tahun</span>
        </div>
        <div class="program-body">
          <div class="program-cat">SD</div>
          <h3>Sekolah Dasar Terpadu</h3>
          <p>Kurikulum Merdeka dengan penguatan literasi, numerasi, dan karakter. Dilengkapi dengan coding dasar dan bahasa Inggris aktif.</p>
          <div class="program-meta">
            <span><i class="fas fa-clock"></i> Full day</span>
            <span><i class="fas fa-users"></i> Maks. 20 anak</span>
          </div>
          <a href="#" class="program-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="program-card reveal">
        <div class="program-img">
          <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=800&q=80" alt="">
          <span class="program-age">Usia 13–15 tahun</span>
        </div>
        <div class="program-body">
          <div class="program-cat">SMP</div>
          <h3>Sekolah Menengah Pertama</h3>
          <p>Pendidikan yang mempersiapkan siswa untuk jenjang berikutnya. Ada kelas sains, bahasa, dan seni sesuai minat anak.</p>
          <div class="program-meta">
            <span><i class="fas fa-clock"></i> Full day</span>
            <span><i class="fas fa-users"></i> Maks. 24 siswa</span>
          </div>
          <a href="#" class="program-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="program-card reveal">
        <div class="program-img">
          <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?w=800&q=80" alt="">
          <span class="program-age">Semua usia</span>
        </div>
        <div class="program-body">
          <div class="program-cat">Kursus Bahasa</div>
          <h3>Bahasa Inggris & Mandarin</h3>
          <p>Kelas bahasa dengan pengajar native speaker dan kurikulum Cambridge. Tersedia persiapan IELTS dan HSK.</p>
          <div class="program-meta">
            <span><i class="fas fa-clock"></i> 2× per minggu</span>
            <span><i class="fas fa-users"></i> Maks. 8 siswa</span>
          </div>
          <a href="#" class="program-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="program-card reveal">
        <div class="program-img">
          <img src="https://images.unsplash.com/photo-1516534775068-ba3e7458af70?w=800&q=80" alt="">
          <span class="program-age">Usia 6–17 tahun</span>
        </div>
        <div class="program-body">
          <div class="program-cat">Kursus Musik</div>
          <h3>Piano, Gitar & Vokal</h3>
          <p>Kelas musik privat dengan pengajar bersertifikat ABRSM. Tersedia kelas untuk pemula hingga persiapan ujian grade.</p>
          <div class="program-meta">
            <span><i class="fas fa-clock"></i> 1× per minggu</span>
            <span><i class="fas fa-user"></i> Privat / grup kecil</span>
          </div>
          <a href="#" class="program-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="program-card reveal">
        <div class="program-img">
          <img src="https://images.unsplash.com/photo-1607748862156-7c548e7e98f4?w=800&q=80" alt="">
          <span class="program-age">Usia 10–17 tahun</span>
        </div>
        <div class="program-body">
          <div class="program-cat">Kursus Coding</div>
          <h3>Programming untuk Anak</h3>
          <p>Belajar coding dengan cara menyenangkan. Mulai dari Scratch, Python, hingga dasar web development dan game design.</p>
          <div class="program-meta">
            <span><i class="fas fa-clock"></i> 1× per minggu</span>
            <span><i class="fas fa-users"></i> Maks. 10 anak</span>
          </div>
          <a href="#" class="program-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- KEUNGGULAN -->
<section class="section advantages" id="keunggulan">
  <div class="wrap">
    <div class="advantages-grid">

      <div class="advantages-text reveal">
        <div class="sec-label"><i class="fas fa-heart"></i> Mengapa Kami</div>
        <h2>Bukan hanya nilai, <em>tapi bekal hidup.</em></h2>

        <p>
          Kami percaya setiap anak istimewa dengan caranya masing-masing. Tugas kami bukan menyeragamkan mereka, tapi membantu setiap anak menemukan dan mengembangkan potensinya.
        </p>

        <div class="advantage-list">

          <div class="advantage-item">
            <div class="advantage-icon blue"><i class="fas fa-users"></i></div>
            <div>
              <h4>Kelas Kecil</h4>
              <p>Setiap kelas maksimal 20 anak, supaya setiap siswa mendapat perhatian yang cukup dari guru.</p>
            </div>
          </div>

          <div class="advantage-item">
            <div class="advantage-icon yellow"><i class="fas fa-puzzle-piece"></i></div>
            <div>
              <h4>Pembelajaran Aktif</h4>
              <p>Kami tidak hanya ceramah. Anak belajar lewat proyek, eksperimen, dan diskusi kelompok.</p>
            </div>
          </div>

          <div class="advantage-item">
            <div class="advantage-icon green"><i class="fas fa-seedling"></i></div>
            <div>
              <h4>Pendidikan Karakter</h4>
              <p>Setiap hari ada sesi yang membahas nilai kejujuran, kerja sama, dan kepedulian pada sesama.</p>
            </div>
          </div>

          <div class="advantage-item">
            <div class="advantage-icon orange"><i class="fas fa-comments"></i></div>
            <div>
              <h4>Komunikasi Orang Tua</h4>
              <p>Laporan harian, pertemuan bulanan, dan portal online untuk memantau perkembangan anak.</p>
            </div>
          </div>

        </div>
      </div>

      <div class="advantages-visual reveal">
        <div class="adv-img-main">
          <img src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?w=800&q=80" alt="">
        </div>

        <div class="adv-card">
          <div class="adv-card-label">Kepuasan Orang Tua</div>
          <div class="adv-rating">
            <span class="adv-rating-stars">★★★★★</span>
            <span class="adv-rating-num">4.9</span>
          </div>
          <div class="adv-card-sub">Dari 320 ulasan orang tua</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- GURU -->
<section class="section guru" id="guru">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-label"><i class="fas fa-chalkboard-user"></i> Pengajar Kami</div>
      <h2>Orang-orang yang <em>mendampingi anak Anda.</em></h2>
      <p>Semua guru kami memiliki sertifikasi pendidikan dan pengalaman mengajar minimal lima tahun.</p>
    </div>

    <div class="guru-grid">

      <div class="guru-card reveal">
        <div class="guru-photo">
          <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=400&q=80" alt="">
        </div>
        <h3>Bu Ratna Sari</h3>
        <div class="role">Kepala Sekolah PAUD</div>
        <div class="bio">S1 Pendidikan Anak Usia Dini, 15 tahun pengalaman.</div>
      </div>

      <div class="guru-card reveal">
        <div class="guru-photo">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&q=80" alt="">
        </div>
        <h3>Pak Adi Nugroho</h3>
        <div class="role">Guru Matematika SD</div>
        <div class="bio">S1 Pendidikan Matematika, sertifikasi Cambridge.</div>
      </div>

      <div class="guru-card reveal">
        <div class="guru-photo">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&q=80" alt="">
        </div>
        <h3>Bu Sarah Wijaya</h3>
        <div class="role">Guru Bahasa Inggris</div>
        <div class="bio">S2 Applied Linguistics, native-level speaker.</div>
      </div>

      <div class="guru-card reveal">
        <div class="guru-photo">
          <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&q=80" alt="">
        </div>
        <h3>Pak Bima Pratama</h3>
        <div class="role">Guru Coding & Robotik</div>
        <div class="bio">S1 Teknik Informatika, mantan engineer industri.</div>
      </div>

    </div>
  </div>
</section>

<!-- KEGIATAN -->
<section class="section" id="kegiatan">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-label"><i class="fas fa-calendar-days"></i> Kegiatan Mendatang</div>
      <h2>Belajar tidak hanya <em>di dalam kelas.</em></h2>
    </div>

    <div class="schedule-grid">

      <div class="schedule-list">

        <div class="event-card reveal">
          <div class="event-date">
            <span class="day">15</span>
            <span class="mon">Jun</span>
          </div>
          <div class="event-body">
            <span class="event-cat">Open House</span>
            <h3>Hari Terbuka Kampus</h3>
            <p>Kunjungi sekolah kami, bertemu guru, dan lihat langsung suasana kelas. Cocok untuk calon orang tua siswa.</p>
            <div class="event-meta">
              <span><i class="fas fa-clock"></i> 09.00 – 12.00</span>
              <span><i class="fas fa-location-dot"></i> Kampus Utama</span>
            </div>
          </div>
        </div>

        <div class="event-card reveal">
          <div class="event-date">
            <span class="day">22</span>
            <span class="mon">Jun</span>
          </div>
          <div class="event-body">
            <span class="event-cat">Lomba</span>
            <h3>Festival Sains Anak</h3>
            <p>Pameran proyek sains siswa SD dan SMP. Terbuka untuk umum dan gratis.</p>
            <div class="event-meta">
              <span><i class="fas fa-clock"></i> 08.00 – 15.00</span>
              <span><i class="fas fa-location-dot"></i> Aula Serbaguna</span>
            </div>
          </div>
        </div>

        <div class="event-card reveal">
          <div class="event-date">
            <span class="day">05</span>
            <span class="mon">Jul</span>
          </div>
          <div class="event-body">
            <span class="event-cat">Workshop</span>
            <h3>Workshop Orang Tua</h3>
            <p>Belajar mendampingi anak di era digital. Narasumber: psikolog anak dan praktisi pendidikan.</p>
            <div class="event-meta">
              <span><i class="fas fa-clock"></i> 13.00 – 16.00</span>
              <span><i class="fas fa-location-dot"></i> Ruang Multimedia</span>
            </div>
          </div>
        </div>

        <div class="event-card reveal">
          <div class="event-date">
            <span class="day">12</span>
            <span class="mon">Jul</span>
          </div>
          <div class="event-body">
            <span class="event-cat">Liburan</span>
            <h3>Summer Camp 2025</h3>
            <p>Program liburan seru dengan kegiatan alam, seni, dan sains. Tersedia untuk siswa dan non-siswa.</p>
            <div class="event-meta">
              <span><i class="fas fa-clock"></i> 3 hari 2 malam</span>
              <span><i class="fas fa-location-dot"></i> Lembang, Bandung</span>
            </div>
          </div>
        </div>

      </div>

      <div class="info-panel reveal">
        <h3>Informasi PPDB</h3>
        <p>
          Penerimaan Peserta Didik Baru tahun ajaran 2025/2026 telah dibuka. Kami menerima pendaftaran untuk PAUD, TK, SD, SMP, dan semua program kursus.
        </p>

        <div class="info-list">

          <div class="info-row">
            <span class="label">
              <i class="fas fa-calendar"></i> Gelombang 1
            </span>
            <span class="value">1 Feb – 30 Apr</span>
          </div>

          <div class="info-row">
            <span class="label">
              <i class="fas fa-calendar"></i> Gelombang 2
            </span>
            <span class="value">1 Mei – 15 Jun</span>
          </div>

          <div class="info-row">
            <span class="label">
              <i class="fas fa-file-alt"></i> Biaya pendaftaran
            </span>
            <span class="value">Rp 250.000</span>
          </div>

          <div class="info-row">
            <span class="label">
              <i class="fas fa-clock"></i> Proses seleksi
            </span>
            <span class="value">7 hari kerja</span>
          </div>

          <div class="info-row">
            <span class="label">
              <i class="fas fa-percent"></i> Diskon saudara kandung
            </span>
            <span class="value">15%</span>
          </div>

        </div>

        <a href="#" class="btn btn-blue">
          Daftar PPDB Online <i class="fas fa-arrow-right"></i>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- TESTIMONI -->
<section class="section testi">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-label"><i class="fas fa-quote-left"></i> Kata Orang Tua</div>
      <h2>Cerita mereka yang <em>mempercayakan anaknya.</em></h2>
    </div>

    <div class="testi-grid">

      <div class="testi-card reveal">
        <div class="testi-mark">"</div>
        <p class="testi-text">
          Anak saya yang dulu pemalu sekarang berani tampil di depan kelas. <strong>Guru-gurunya sabar dan tahu cara mendekati anak</strong> dengan pendekatan masing-masing.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=47" alt="">
          <div>
            <div class="name">Ibu Sari Handayani</div>
            <div class="role">Orang tua siswa SD kelas 4</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal">
        <div class="testi-mark">"</div>
        <p class="testi-text">
          Yang saya suka, <strong>setiap hari saya dapat laporan</strong> lewat aplikasi tentang kegiatan anak di sekolah. Jadi tahu persis apa yang dia pelajari.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=11" alt="">
          <div>
            <div class="name">Pak Hendra Wijaya</div>
            <div class="role">Orang tua siswa TK B</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal">
        <div class="testi-mark">"</div>
        <p class="testi-text">
          Anak saya ikut kursus coding di sini. <strong>Dalam enam bulan dia sudah bisa membuat game sendiri.</strong> Pengajarnya benar-benar mengerti cara mengajar anak.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=32" alt="">
          <div>
            <div class="name">Ibu Maya Anggraini</div>
            <div class="role">Orang tua siswa kursus coding</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- STAT BAND -->
<div class="stat-band">
  <div class="stat-grid">

    <div class="stat-item reveal">
      <div class="stat-num"><span class="counter" data-target="1200">0</span><span class="plus">+</span></div>
      <div class="stat-lbl">Siswa aktif<br>setiap tahun</div>
    </div>

    <div class="stat-item reveal">
      <div class="stat-num"><span class="counter" data-target="85">0</span><span class="plus">+</span></div>
      <div class="stat-lbl">Guru bersertifikat<br>dan pengajar tamu</div>
    </div>

    <div class="stat-item reveal">
      <div class="stat-num"><span class="counter" data-target="22">0</span></div>
      <div class="stat-lbl">Tahun pengalaman<br>mendidik generasi</div>
    </div>

    <div class="stat-item reveal">
      <div class="stat-num"><span class="counter" data-target="98">0</span><span class="plus">%</span></div>
      <div class="stat-lbl">Orang tua yang<br>merekomendasikan kami</div>
    </div>

  </div>
</div>

<!-- CTA -->
<section class="cta" id="daftar">
  <div class="wrap">
    <div class="cta-box reveal">

      <div class="cta-text">
        <h2>
          Mari bertumbuh <em>bersama kami.</em>
        </h2>
        <p>
          Kunjungi sekolah kami dan rasakan sendiri suasana belajarnya. Kami buka setiap hari kerja, jam 08.00 hingga 16.00.
        </p>
      </div>

      <div class="cta-actions">
        <a href="#" class="btn btn-blue">
          <i class="fas fa-file-pen"></i> Daftar PPDB Online
        </a>
        <a href="#" class="btn btn-outline">
          <i class="fas fa-calendar-check"></i> Jadwalkan Kunjungan
        </a>
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
          <div class="brand-mark">C</div>
          Cendekia Bangsa
        </div>
        <p class="footer-desc">
          Sekolah dan lembaga kursus yang mendampingi anak tumbuh cerdas dan berkarakter sejak 2003.
        </p>
        <div class="footer-accreditation">
          <strong>Akreditasi A</strong> — BAN-S/M<br>
          NPSN: 20100456 · Terdaftar Kemendikbud
        </div>
      </div>

      <div class="footer-col">
        <h4>Program</h4>
        <ul>
          <li><a href="#">PAUD & TK</a></li>
          <li><a href="#">Sekolah Dasar</a></li>
          <li><a href="#">Sekolah Menengah</a></li>
          <li><a href="#">Kursus Bahasa</a></li>
          <li><a href="#">Kursus Musik</a></li>
          <li><a href="#">Kursus Coding</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Sekolah</h4>
        <ul>
          <li><a href="#">Profil Sekolah</a></li>
          <li><a href="#">Tim Pengajar</a></li>
          <li><a href="#">Kurikulum</a></li>
          <li><a href="#">Fasilitas</a></li>
          <li><a href="#">Karier</a></li>
          <li><a href="#">Berita</a></li>
        </ul>
      </div>

      <div class="footer-col footer-contact">
        <h4>Hubungi Kami</h4>
        <p><i class="fas fa-location-dot"></i> Jl. Pendidikan Raya 88<br>Bintaro, Tangerang Selatan 15412</p>
        <p><i class="fas fa-phone"></i> (021) 555-0199</p>
        <p><i class="fab fa-whatsapp"></i> +62 812 3456 7890</p>
        <p><i class="fas fa-envelope"></i> info@cendekiabangsa.sch.id</p>
      </div>

    </div>

    <div class="footer-bottom">
      <div>© 2025 Cendekia Bangsa. Semua hak dilindungi.</div>
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
  <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2008" class="float-btn float-wa" target="_blank" aria-label="WhatsApp">
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