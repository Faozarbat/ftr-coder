@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Klinik Sehat Bersama — Pelayanan Kesehatan Keluarga di Jakarta</title>
<meta name="description" content="Klinik Sehat Bersama — klinik pratama dengan layanan dokter umum, gigi, anak, dan laboratorium. Melayani keluarga Jakarta sejak 2005.">
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --bg: #ffffff;
  --bg-2: #f6f9fc;
  --bg-3: #eaf2f8;
  --bg-4: #dde9f2;
  --line: #e2eaf1;
  --line-2: #cdd9e4;
  --ink: #0f2436;
  --ink-2: #36536d;
  --ink-3: #6b8496;
  --ink-4: #95a9b8;
  --blue: #1a5a8a;
  --blue-dark: #0f3f63;
  --blue-soft: #e6f0f8;
  --blue-line: #b8d4e8;
  --green: #2d7a4f;
  --green-soft: #e8f4ed;
  --amber: #b8860b;
  --red: #b83b3b;
  --serif: 'Lora', Georgia, serif;
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

::selection { background: var(--blue); color: #fff; }
a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }
button { font-family: inherit; cursor: pointer; }

/* ============ LAYOUT ============ */
.wrap {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 32px;
}

.wrap-sm {
  max-width: 900px;
  margin: 0 auto;
  padding: 0 32px;
}

/* ============ TOP BAR ============ */
.topbar {
  background: var(--blue-dark);
  color: #fff;
  font-size: 13px;
  padding: 12px 0;
}

.topbar-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 32px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 16px;
}

.topbar-item {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: rgba(255,255,255,0.85);
}

.topbar-item i {
  color: #8fc1e0;
  font-size: 12px;
}

.topbar-emergency {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 4px 14px;
  background: rgba(255,255,255,0.12);
  border-radius: 999px;
  font-weight: 500;
}

.topbar-emergency i { color: #ffd166; }

/* ============ NAV ============ */
.nav {
  border-bottom: 1px solid var(--line);
  position: sticky;
  top: 0;
  background: #fff;
  z-index: 100;
  transition: box-shadow 0.3s;
}

.nav.scrolled {
  box-shadow: 0 4px 20px rgba(15, 36, 54, 0.06);
}

.nav-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 32px;
  height: 72px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.brand {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 19px;
  font-weight: 700;
  color: var(--ink);
  letter-spacing: -0.02em;
}

.brand-mark {
  width: 40px;
  height: 40px;
  background: var(--blue);
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 18px;
  position: relative;
}

.brand-mark::after {
  content: '';
  position: absolute;
  bottom: -3px;
  right: -3px;
  width: 12px;
  height: 12px;
  background: var(--green);
  border: 2px solid #fff;
  border-radius: 50%;
}

.brand-text small {
  display: block;
  font-size: 11px;
  font-weight: 500;
  color: var(--ink-3);
  letter-spacing: 0.06em;
  text-transform: uppercase;
  margin-top: 1px;
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
  padding: 9px 16px;
  border-radius: 8px;
  transition: all 0.15s;
}

.nav-menu a:hover {
  background: var(--blue-soft);
  color: var(--blue);
}

.nav-cta {
  padding: 11px 22px;
  background: var(--blue);
  color: #fff;
  border-radius: 8px;
  font-size: 14px;
  font-weight: 600;
  transition: all 0.2s;
}

.nav-cta:hover {
  background: var(--blue-dark);
  transform: translateY(-1px);
}

.nav-toggle {
  display: none;
  background: none;
  border: none;
  font-size: 20px;
  color: var(--ink);
  padding: 8px;
}

/* ============ HERO ============ */
.hero {
  padding: 80px 0 0;
  background: var(--bg-2);
  border-bottom: 1px solid var(--line);
  position: relative;
  overflow: hidden;
}

.hero-inner {
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: 70px;
  align-items: center;
}

.hero-text {
  padding-bottom: 80px;
}

.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 7px 16px;
  background: #fff;
  border: 1px solid var(--blue-line);
  border-radius: 999px;
  font-size: 13px;
  color: var(--blue);
  font-weight: 500;
  margin-bottom: 28px;
}

.hero-badge i {
  color: var(--green);
  font-size: 12px;
}

.hero h1 {
  font-family: var(--serif);
  font-size: clamp(36px, 5vw, 58px);
  font-weight: 600;
  line-height: 1.1;
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
  max-width: 520px;
  margin-bottom: 40px;
  line-height: 1.75;
}

.hero-actions {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  margin-bottom: 44px;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 15px 28px;
  font-size: 15px;
  font-weight: 600;
  border-radius: 10px;
  border: 1px solid transparent;
  transition: all 0.2s;
  cursor: pointer;
  font-family: inherit;
}

.btn-blue {
  background: var(--blue);
  color: #fff;
}

.btn-blue:hover {
  background: var(--blue-dark);
  transform: translateY(-2px);
  box-shadow: 0 12px 24px -8px rgba(26, 90, 138, 0.4);
}

.btn-outline {
  background: #fff;
  color: var(--ink);
  border-color: var(--line-2);
}

.btn-outline:hover {
  border-color: var(--blue);
  color: var(--blue);
}

.hero-trust {
  display: flex;
  gap: 40px;
  flex-wrap: wrap;
  padding-top: 32px;
  border-top: 1px solid var(--line);
}

.trust-item .num {
  font-family: var(--serif);
  font-size: 32px;
  font-weight: 600;
  color: var(--ink);
  line-height: 1;
  margin-bottom: 6px;
  letter-spacing: -0.02em;
}

.trust-item .num span {
  color: var(--blue);
}

.trust-item .lbl {
  font-size: 13px;
  color: var(--ink-3);
  line-height: 1.4;
}

.hero-visual {
  position: relative;
  padding-bottom: 80px;
}

.hero-photo {
  border-radius: 16px;
  overflow: hidden;
  aspect-ratio: 4 / 5;
  background: var(--bg-3);
}

.hero-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-card {
  position: absolute;
  bottom: 40px;
  left: -32px;
  background: #fff;
  border: 1px solid var(--line);
  border-radius: 14px;
  padding: 20px 22px;
  box-shadow: 0 20px 50px -20px rgba(15, 36, 54, 0.2);
  min-width: 240px;
}

.hero-card-label {
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--ink-3);
  margin-bottom: 12px;
}

.hero-card-schedule {
  display: flex;
  align-items: center;
  gap: 12px;
}

.hero-card-schedule .avatar {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  overflow: hidden;
  flex-shrink: 0;
}

.hero-card-schedule .avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-card-schedule .info h4 {
  font-size: 14px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 2px;
}

.hero-card-schedule .info p {
  font-size: 12px;
  color: var(--ink-3);
}

.hero-card-schedule .info p .dot {
  display: inline-block;
  width: 6px;
  height: 6px;
  background: var(--green);
  border-radius: 50%;
  margin-right: 5px;
  vertical-align: middle;
}

/* ============ SERVICES BAR ============ */
.services-bar {
  background: var(--blue-dark);
  color: #fff;
  padding: 40px 0;
}

.services-bar-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 32px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 32px;
}

.service-chip {
  display: flex;
  align-items: center;
  gap: 16px;
  padding: 16px 20px;
  background: rgba(255,255,255,0.06);
  border-radius: 10px;
  border: 1px solid rgba(255,255,255,0.08);
  transition: all 0.25s;
}

.service-chip:hover {
  background: rgba(255,255,255,0.1);
  border-color: rgba(255,255,255,0.2);
}

.service-chip-icon {
  width: 44px;
  height: 44px;
  border-radius: 10px;
  background: rgba(143, 193, 224, 0.15);
  color: #8fc1e0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
  flex-shrink: 0;
}

.service-chip h4 {
  font-size: 15px;
  font-weight: 600;
  margin-bottom: 3px;
  color: #fff;
}

.service-chip p {
  font-size: 12px;
  color: rgba(255,255,255,0.6);
  line-height: 1.4;
}

/* ============ SECTION BASE ============ */
.section {
  padding: 96px 0;
  border-bottom: 1px solid var(--line);
}

.section-head {
  margin-bottom: 56px;
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
  font-size: 12px;
  font-weight: 600;
  color: var(--blue);
  letter-spacing: 0.14em;
  text-transform: uppercase;
  margin-bottom: 18px;
}

.sec-label::before {
  content: '';
  width: 24px;
  height: 1px;
  background: var(--blue);
}

.section-head.center .sec-label::before { display: none; }

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
  line-height: 1.7;
}

/* ============ LAYANAN ============ */
.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.service-card {
  padding: 36px 32px;
  background: var(--bg);
  border: 1px solid var(--line);
  border-radius: 14px;
  transition: all 0.3s;
  display: flex;
  flex-direction: column;
}

.service-card:hover {
  border-color: var(--blue-line);
  box-shadow: 0 20px 40px -20px rgba(26, 90, 138, 0.2);
  transform: translateY(-3px);
}

.service-icon-lg {
  width: 56px;
  height: 56px;
  border-radius: 14px;
  background: var(--blue-soft);
  color: var(--blue);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  margin-bottom: 24px;
  transition: all 0.3s;
}

.service-card:hover .service-icon-lg {
  background: var(--blue);
  color: #fff;
}

.service-card h3 {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.01em;
  margin-bottom: 12px;
}

.service-card p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.7;
  margin-bottom: 22px;
  flex: 1;
}

.service-meta {
  display: flex;
  align-items: center;
  gap: 12px;
  padding-top: 18px;
  border-top: 1px solid var(--line);
  font-size: 13px;
  color: var(--ink-3);
}

.service-meta i {
  color: var(--blue);
  font-size: 13px;
}

/* ============ DOKTER ============ */
.doctors {
  background: var(--bg-2);
}

.doctors-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
}

.doctor-card {
  background: #fff;
  border: 1px solid var(--line);
  border-radius: 14px;
  overflow: hidden;
  transition: all 0.3s;
}

.doctor-card:hover {
  border-color: var(--blue-line);
  box-shadow: 0 20px 40px -20px rgba(26, 90, 138, 0.2);
  transform: translateY(-3px);
}

.doctor-photo {
  aspect-ratio: 1 / 1.1;
  overflow: hidden;
  background: var(--bg-3);
  position: relative;
}

.doctor-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s;
}

.doctor-card:hover .doctor-photo img { transform: scale(1.05); }

.doctor-status {
  position: absolute;
  top: 12px;
  right: 12px;
  padding: 5px 10px;
  background: #fff;
  border-radius: 999px;
  font-size: 11px;
  font-weight: 600;
  color: var(--green);
  display: flex;
  align-items: center;
  gap: 5px;
}

.doctor-status .dot {
  width: 6px;
  height: 6px;
  background: var(--green);
  border-radius: 50%;
}

.doctor-status.off {
  color: var(--ink-3);
}

.doctor-status.off .dot { background: var(--ink-3); }

.doctor-info {
  padding: 20px 20px 22px;
}

.doctor-info h3 {
  font-family: var(--serif);
  font-size: 17px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 4px;
  letter-spacing: -0.01em;
}

.doctor-info .specialty {
  font-size: 13px;
  color: var(--blue);
  font-weight: 500;
  margin-bottom: 12px;
}

.doctor-info .schedule {
  font-size: 12px;
  color: var(--ink-3);
  padding-top: 12px;
  border-top: 1px solid var(--line);
  display: flex;
  align-items: center;
  gap: 8px;
}

.doctor-info .schedule i { color: var(--ink-4); font-size: 11px; }

/* ============ KEUNGGULAN ============ */
.advantages {
  padding: 96px 0;
  background: var(--bg);
  border-bottom: 1px solid var(--line);
}

.advantages-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 80px;
  align-items: center;
}

.advantages-photo {
  border-radius: 16px;
  overflow: hidden;
  aspect-ratio: 4 / 3;
}

.advantages-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.advantages-text h2 {
  font-family: var(--serif);
  font-size: clamp(28px, 3.6vw, 40px);
  font-weight: 600;
  line-height: 1.15;
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
  margin-bottom: 32px;
}

.advantage-list {
  display: grid;
  gap: 20px;
}

.advantage-item {
  display: flex;
  gap: 16px;
  align-items: flex-start;
}

.advantage-icon {
  width: 40px;
  height: 40px;
  border-radius: 10px;
  background: var(--green-soft);
  color: var(--green);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
  flex-shrink: 0;
}

.advantage-item h4 {
  font-family: var(--serif);
  font-size: 17px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 5px;
  letter-spacing: -0.01em;
}

.advantage-item p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.6;
  margin: 0;
}

/* ============ ALUR ============ */
.flow {
  background: var(--bg-2);
}

.flow-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
  position: relative;
}

.flow-step {
  background: #fff;
  padding: 32px 26px;
  border-radius: 14px;
  border: 1px solid var(--line);
  position: relative;
}

.flow-num {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--blue-soft);
  color: var(--blue);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--serif);
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 22px;
}

.flow-step h4 {
  font-family: var(--serif);
  font-size: 19px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 10px;
  letter-spacing: -0.01em;
}

.flow-step p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.65;
}

/* ============ FASILITAS ============ */
.facilities-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.facility {
  border-radius: 14px;
  overflow: hidden;
  position: relative;
  aspect-ratio: 4 / 3;
  background: var(--bg-3);
  cursor: pointer;
}

.facility img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.7s;
}

.facility:hover img { transform: scale(1.05); }

.facility-label {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 28px 22px 20px;
  background: linear-gradient(to top, rgba(15, 36, 54, 0.9), transparent);
  color: #fff;
  font-family: var(--serif);
  font-size: 18px;
  font-weight: 600;
  letter-spacing: -0.01em;
}

/* ============ TESTIMONI ============ */
.testimonials {
  background: var(--bg-2);
}

.testi-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.testi-card {
  padding: 32px 28px;
  background: #fff;
  border: 1px solid var(--line);
  border-radius: 14px;
  transition: all 0.3s;
}

.testi-card:hover {
  border-color: var(--blue-line);
  box-shadow: 0 20px 40px -20px rgba(26, 90, 138, 0.15);
}

.testi-stars {
  display: flex;
  gap: 4px;
  color: var(--amber);
  font-size: 13px;
  margin-bottom: 18px;
}

.testi-text {
  font-size: 15px;
  color: var(--ink-2);
  line-height: 1.75;
  margin-bottom: 24px;
}

.testi-author {
  display: flex;
  align-items: center;
  gap: 14px;
  padding-top: 20px;
  border-top: 1px solid var(--line);
}

.testi-author img {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  object-fit: cover;
}

.testi-author .name {
  font-size: 14px;
  font-weight: 600;
  color: var(--ink);
}

.testi-author .role {
  font-size: 12px;
  color: var(--ink-3);
  margin-top: 1px;
}

/* ============ JADWAL & LOKASI ============ */
.schedule-location {
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: 60px;
  align-items: start;
}

.schedule-list {
  border: 1px solid var(--line);
  border-radius: 14px;
  overflow: hidden;
}

.schedule-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 18px 24px;
  border-bottom: 1px solid var(--line);
  font-size: 15px;
}

.schedule-row:last-child { border-bottom: none; }

.schedule-row.today {
  background: var(--blue-soft);
  font-weight: 600;
  color: var(--blue);
}

.schedule-row .day {
  display: flex;
  align-items: center;
  gap: 12px;
  color: var(--ink);
}

.schedule-row.today .day { color: var(--blue); }

.schedule-row .day .today-tag {
  padding: 2px 8px;
  background: var(--blue);
  color: #fff;
  border-radius: 4px;
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 0.05em;
}

.schedule-row .time {
  font-family: var(--serif);
  font-weight: 600;
  color: var(--ink);
}

.schedule-row.today .time { color: var(--blue); }

.location-card {
  padding: 32px;
  background: var(--bg-2);
  border: 1px solid var(--line);
  border-radius: 14px;
}

.location-card h3 {
  font-family: var(--serif);
  font-size: 22px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 20px;
  letter-spacing: -0.01em;
}

.location-item {
  display: flex;
  gap: 14px;
  align-items: flex-start;
  padding: 14px 0;
  border-bottom: 1px solid var(--line);
}

.location-item:last-child { border-bottom: none; }

.location-icon {
  width: 38px;
  height: 38px;
  border-radius: 10px;
  background: #fff;
  border: 1px solid var(--line);
  color: var(--blue);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  flex-shrink: 0;
}

.location-item .label {
  font-size: 12px;
  color: var(--ink-3);
  text-transform: uppercase;
  letter-spacing: 0.08em;
  font-weight: 500;
  margin-bottom: 3px;
}

.location-item .value {
  font-size: 15px;
  color: var(--ink);
  font-weight: 500;
  line-height: 1.5;
}

.location-map {
  margin-top: 20px;
  border-radius: 12px;
  overflow: hidden;
  aspect-ratio: 16 / 9;
  background: var(--bg-3);
  position: relative;
  border: 1px solid var(--line);
}

.location-map img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.location-map::after {
  content: '\f3c5';
  font-family: 'Font Awesome 6 Free';
  font-weight: 900;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: var(--red);
  font-size: 32px;
  text-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}

/* ============ CTA ============ */
.cta {
  padding: 80px 0;
  background: var(--blue-dark);
  color: #fff;
}

.cta-inner {
  display: grid;
  grid-template-columns: 1.6fr 1fr;
  gap: 60px;
  align-items: center;
}

.cta h2 {
  font-family: var(--serif);
  font-size: clamp(28px, 4vw, 42px);
  font-weight: 600;
  line-height: 1.15;
  letter-spacing: -0.025em;
  margin-bottom: 18px;
}

.cta h2 em { font-style: italic; color: #8fc1e0; font-weight: 500; }

.cta p {
  font-size: 16px;
  color: rgba(255,255,255,0.72);
  line-height: 1.75;
  max-width: 500px;
}

.cta-actions {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.btn-white {
  background: #fff;
  color: var(--blue-dark);
}

.btn-white:hover {
  background: var(--bg-3);
  transform: translateY(-2px);
}

.btn-ghost-light {
  background: transparent;
  color: #fff;
  border-color: rgba(255,255,255,0.25);
}

.btn-ghost-light:hover {
  border-color: #fff;
  background: rgba(255,255,255,0.08);
}

/* ============ FOOTER ============ */
.footer {
  background: var(--bg);
  padding: 72px 0 32px;
  border-top: 1px solid var(--line);
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.3fr;
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
  font-weight: 700;
  color: var(--ink);
  margin-bottom: 20px;
}

.footer-desc {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.7;
  max-width: 320px;
  margin-bottom: 22px;
}

.footer-license {
  padding: 14px 16px;
  background: var(--bg-2);
  border: 1px solid var(--line);
  border-radius: 10px;
  font-size: 12px;
  color: var(--ink-3);
  line-height: 1.6;
}

.footer-license strong {
  color: var(--ink-2);
  font-weight: 600;
}

.footer-col h4 {
  font-size: 13px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: 0.06em;
  text-transform: uppercase;
  margin-bottom: 20px;
}

.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 11px; }

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
  line-height: 1.5;
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
  width: 36px;
  height: 36px;
  border-radius: 9px;
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
}

/* ============ REVEAL ============ */
.reveal {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.75s ease, transform 0.75s ease;
}

.reveal.on {
  opacity: 1;
  transform: translateY(0);
}

/* ============ FLOATING ============ */
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
  width: 52px;
  height: 52px;
  border-radius: 50%;
  font-size: 20px;
  border: none;
  cursor: pointer;
  transition: all 0.25s;
  text-decoration: none;
  color: #fff;
}

.float-wa {
  background: var(--green);
  box-shadow: 0 12px 28px -8px rgba(45, 122, 79, 0.5);
}

.float-wa:hover {
  background: #245f3f;
  transform: translateY(-3px);
}

.float-phone {
  background: var(--blue);
  box-shadow: 0 12px 28px -8px rgba(26, 90, 138, 0.5);
}

.float-phone:hover {
  background: var(--blue-dark);
  transform: translateY(-3px);
}

/* ============ RESPONSIVE ============ */
@media (max-width: 1024px) {
  .hero-inner { grid-template-columns: 1fr; gap: 40px; }
  .hero-text { padding-bottom: 0; }
  .hero-visual { max-width: 480px; margin: 0 auto; padding-bottom: 60px; }
  .hero-card { left: 0; }

  .services-bar-inner { grid-template-columns: repeat(2, 1fr); gap: 16px; }
  .services-grid { grid-template-columns: repeat(2, 1fr); }
  .doctors-grid { grid-template-columns: repeat(2, 1fr); }
  .flow-grid { grid-template-columns: repeat(2, 1fr); }
  .advantages-grid { grid-template-columns: 1fr; gap: 48px; }
  .facilities-grid { grid-template-columns: repeat(2, 1fr); }
  .testi-grid { grid-template-columns: 1fr; }
  .schedule-location { grid-template-columns: 1fr; gap: 40px; }
  .cta-inner { grid-template-columns: 1fr; gap: 40px; }
  .footer-grid { grid-template-columns: 1fr 1fr; gap: 40px; }
  .footer-grid > div:first-child { grid-column: span 2; }
}

@media (max-width: 768px) {
  .wrap, .wrap-sm, .topbar-inner, .nav-inner, .services-bar-inner { padding: 0 20px; }

  .nav-menu {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    width: 300px;
    height: 100vh;
    background: #fff;
    flex-direction: column;
    padding: 90px 24px 40px;
    gap: 6px;
    border-left: 1px solid var(--line);
    transition: right 0.3s;
    z-index: 99;
    align-items: stretch;
    justify-content: flex-start;
  }

  .nav-menu.open { display: flex; }
  .nav-menu a { padding: 14px 18px; font-size: 16px; }
  .nav-cta { display: none; }
  .nav-toggle { display: block; }

  .topbar-item { font-size: 12px; }

  .hero { padding: 60px 0 0; }
  .section { padding: 72px 0; }

  .services-grid { grid-template-columns: 1fr; }
  .doctors-grid { grid-template-columns: 1fr; }
  .flow-grid { grid-template-columns: 1fr; }
  .facilities-grid { grid-template-columns: 1fr; }

  .services-bar-inner { grid-template-columns: 1fr; }

  .hero-trust { gap: 24px; }

  .footer-grid { grid-template-columns: 1fr; }
  .footer-grid > div:first-child { grid-column: span 1; }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 32px; }
  .hero-card { left: -10px; right: -10px; bottom: 20px; min-width: 0; }
  .hero-visual { padding-bottom: 40px; }
  .hero-card-schedule { gap: 10px; }
  .service-card { padding: 28px 24px; }
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <div class="topbar-inner">
    <div style="display:flex; gap:24px; flex-wrap:wrap;">
      <span class="topbar-item">
        <i class="fas fa-map-marker-alt"></i>
        Jl. Sudirman 245, Jakarta Pusat
      </span>
      <span class="topbar-item">
        <i class="fas fa-phone"></i>
        (021) 555-0123
      </span>
    </div>
    <span class="topbar-emergency">
      <i class="fas fa-circle-exclamation"></i>
      Layanan Darurat 24 Jam: 119
    </span>
  </div>
</div>

<!-- NAV -->
<nav class="nav" id="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <div class="brand-mark">
        <i class="fas fa-heart-pulse"></i>
      </div>
      <div class="brand-text">
        Klinik Sehat Bersama
        <small>Sejak 2005</small>
      </div>
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#layanan">Layanan</a></li>
      <li><a href="#dokter">Dokter</a></li>
      <li><a href="#fasilitas">Fasilitas</a></li>
      <li><a href="#jadwal">Jadwal</a></li>
      <li><a href="#kontak">Kontak</a></li>
    </ul>

    <a href="#jadwal" class="nav-cta">
      <i class="fas fa-calendar-check" style="margin-right:6px;"></i>
      Buat Janji
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
        <div class="hero-badge">
          <i class="fas fa-circle-check"></i>
          Terakreditasi Paripurna Kemenkes RI
        </div>

        <h1>
          Pelayanan kesehatan keluarga, <em>dengan sepenuh hati.</em>
        </h1>

        <p class="hero-lede">
          Klinik pratama yang melayani keluarga Jakarta sejak 2005. Kami menyediakan layanan dokter umum, gigi, anak, laboratorium, dan vaksinasi — semua di satu tempat yang tenang dan nyaman.
        </p>

        <div class="hero-actions">
          <a href="#jadwal" class="btn btn-blue">
            Buat Janji Temu <i class="fas fa-arrow-right"></i>
          </a>
          <a href="#layanan" class="btn btn-outline">
            Lihat Layanan
          </a>
        </div>

        <div class="hero-trust">
          <div class="trust-item">
            <div class="num"><span class="counter" data-target="20">0</span></div>
            <div class="lbl">Tahun melayani<br>keluarga Jakarta</div>
          </div>
          <div class="trust-item">
            <div class="num"><span class="counter" data-target="12">0</span></div>
            <div class="lbl">Dokter spesialis<br>dan umum</div>
          </div>
          <div class="trust-item">
            <div class="num"><span class="counter" data-target="45000">0</span><span>+</span></div>
            <div class="lbl">Pasien yang<br>kami layani</div>
          </div>
        </div>
      </div>

      <div class="hero-visual reveal">
        <div class="hero-photo">
          <img src="https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=800&q=80" alt="">
        </div>

        <div class="hero-card">
          <div class="hero-card-label">Dokter Bertugas Hari Ini</div>
          <div class="hero-card-schedule">
            <div class="avatar">
              <img src="https://i.pravatar.cc/150?img=28" alt="">
            </div>
            <div class="info">
              <h4>dr. Anita Rahmawati</h4>
              <p><span class="dot"></span>Praktik hingga 21.00</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</header>

<!-- SERVICES BAR -->
<div class="services-bar">
  <div class="services-bar-inner">
    <div class="service-chip">
      <div class="service-chip-icon"><i class="fas fa-user-doctor"></i></div>
      <div>
        <h4>Dokter Umum</h4>
        <p>Setiap hari, 08.00–21.00</p>
      </div>
    </div>
    <div class="service-chip">
      <div class="service-chip-icon"><i class="fas fa-tooth"></i></div>
      <div>
        <h4>Klinik Gigi</h4>
        <p>Senin–Sabtu, dengan janji</p>
      </div>
    </div>
    <div class="service-chip">
      <div class="service-chip-icon"><i class="fas fa-baby"></i></div>
      <div>
        <h4>Klinik Anak</h4>
        <p>Selasa & Kamis</p>
      </div>
    </div>
    <div class="service-chip">
      <div class="service-chip-icon"><i class="fas fa-flask-vial"></i></div>
      <div>
        <h4>Laboratorium</h4>
        <p>Hasil dalam 24 jam</p>
      </div>
    </div>
  </div>
</div>

<!-- LAYANAN -->
<section class="section" id="layanan">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-label">Layanan Kami</div>
      <h2>Perawatan lengkap untuk <em>seluruh keluarga.</em></h2>
      <p>Kami menyediakan berbagai layanan kesehatan dalam satu atap, dengan tenaga medis berpengalaman dan peralatan yang memadai.</p>
    </div>

    <div class="services-grid">

      <div class="service-card reveal">
        <div class="service-icon-lg"><i class="fas fa-stethoscope"></i></div>
        <h3>Pemeriksaan Umum</h3>
        <p>Konsultasi dokter umum, pemeriksaan fisik, diagnosis awal, dan resep obat. Cocok untuk keluhan ringan hingga sedang.</p>
        <div class="service-meta">
          <i class="fas fa-clock"></i>
          <span>15–30 menit per sesi</span>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-icon-lg"><i class="fas fa-tooth"></i></div>
        <h3>Kesehatan Gigi</h3>
        <p>Pembersihan karang gigi, penambalan, pencabutan, dan perawatan saluran akar. Ditangani oleh dokter gigi berpengalaman.</p>
        <div class="service-meta">
          <i class="fas fa-clock"></i>
          <span>30–60 menit per sesi</span>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-icon-lg"><i class="fas fa-baby"></i></div>
        <h3>Kesehatan Anak</h3>
        <p>Pemeriksaan tumbuh kembang, imunisasi dasar, konsultasi gizi anak, dan penanganan penyakit umum pada anak.</p>
        <div class="service-meta">
          <i class="fas fa-clock"></i>
          <span>20–40 menit per sesi</span>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-icon-lg"><i class="fas fa-flask-vial"></i></div>
        <h3>Laboratorium</h3>
        <p>Pemeriksaan darah rutin, gula darah, kolesterol, fungsi hati, fungsi ginjal, dan tes urin. Hasil dikirim via WhatsApp.</p>
        <div class="service-meta">
          <i class="fas fa-clock"></i>
          <span>Hasil dalam 24 jam</span>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-icon-lg"><i class="fas fa-syringe"></i></div>
        <h3>Vaksinasi</h3>
        <p>Vaksin anak sesuai jadwal IDAI, vaksin dewasa, vaksin influenza, dan vaksin perjalanan. Tersedia vaksin halal dan non-halal.</p>
        <div class="service-meta">
          <i class="fas fa-clock"></i>
          <span>10–15 menit per sesi</span>
        </div>
      </div>

      <div class="service-card reveal">
        <div class="service-icon-lg"><i class="fas fa-notes-medical"></i></div>
        <h3>Surat Keterangan</h3>
        <p>Surat keterangan sehat, surat izin sakit, surat keterangan untuk bekerja, dan pemeriksaan kesehatan berkala perusahaan.</p>
        <div class="service-meta">
          <i class="fas fa-clock"></i>
          <span>Proses 30 menit</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- DOKTER -->
<section class="section doctors" id="dokter">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-label">Tim Medis</div>
      <h2>Dokter yang <em>menemani keluarga Anda.</em></h2>
      <p>Tim dokter kami sudah bertahun-tahun menangani pasien di klinik ini. Mereka mengenal pasien, bukan hanya penyakitnya.</p>
    </div>

    <div class="doctors-grid">

      <div class="doctor-card reveal">
        <div class="doctor-photo">
          <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=600&q=80" alt="">
          <div class="doctor-status">
            <span class="dot"></span> Bertugas
          </div>
        </div>
        <div class="doctor-info">
          <h3>dr. Anita Rahmawati</h3>
          <div class="specialty">Dokter Umum</div>
          <div class="schedule">
            <i class="fas fa-calendar"></i>
            Senin – Jumat, 08.00 – 21.00
          </div>
        </div>
      </div>

      <div class="doctor-card reveal">
        <div class="doctor-photo">
          <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=600&q=80" alt="">
          <div class="doctor-status">
            <span class="dot"></span> Bertugas
          </div>
        </div>
        <div class="doctor-info">
          <h3>drg. Bayu Setiawan</h3>
          <div class="specialty">Dokter Gigi</div>
          <div class="schedule">
            <i class="fas fa-calendar"></i>
            Senin – Sabtu, 10.00 – 19.00
          </div>
        </div>
      </div>

      <div class="doctor-card reveal">
        <div class="doctor-photo">
          <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=600&q=80" alt="">
          <div class="doctor-status off">
            <span class="dot"></span> Off
          </div>
        </div>
        <div class="doctor-info">
          <h3>dr. Citra Dewi, Sp.A</h3>
          <div class="specialty">Spesialis Anak</div>
          <div class="schedule">
            <i class="fas fa-calendar"></i>
            Selasa & Kamis, 16.00 – 20.00
          </div>
        </div>
      </div>

      <div class="doctor-card reveal">
        <div class="doctor-photo">
          <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=600&q=80" alt="">
          <div class="doctor-status">
            <span class="dot"></span> Bertugas
          </div>
        </div>
        <div class="doctor-info">
          <h3>dr. Dimas Prasetyo</h3>
          <div class="specialty">Dokter Umum</div>
          <div class="schedule">
            <i class="fas fa-calendar"></i>
            Setiap Hari, 08.00 – 15.00
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- KEUNGGULAN -->
<section class="advantages">
  <div class="wrap">
    <div class="advantages-grid">

      <div class="advantages-photo reveal">
        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&q=80" alt="">
      </div>

      <div class="advantages-text reveal">
        <div class="sec-label">Mengapa Kami</div>
        <h2>Kami percaya pasien bukan <em>sekadar nomor antrian.</em></h2>

        <p>
          Klinik Sehat Bersama lahir dari keyakinan sederhana: setiap pasien berhak diperlakukan sebagai manusia, bukan sebagai diagnosis. Kami berusaha memberikan waktu yang cukup untuk setiap konsultasi, supaya pasien benar-benar dipahami.
        </p>

        <div class="advantage-list">

          <div class="advantage-item">
            <div class="advantage-icon"><i class="fas fa-clock"></i></div>
            <div>
              <h4>Antrian yang Terkendali</h4>
              <p>Dengan sistem janji temu, waktu tunggu Anda biasanya di bawah 20 menit.</p>
            </div>
          </div>

          <div class="advantage-item">
            <div class="advantage-icon"><i class="fas fa-file-medical"></i></div>
            <div>
              <h4>Rekam Medis Digital</h4>
              <p>Riwayat kesehatan Anda tersimpan rapi dan bisa diakses lintas cabang kami.</p>
            </div>
          </div>

          <div class="advantage-item">
            <div class="advantage-icon"><i class="fas fa-shield-heart"></i></div>
            <div>
              <h4>Kerja Sama BPJS & Asuransi</h4>
              <p>Kami bekerja sama dengan BPJS Kesehatan dan berbagai asuransi swasta utama.</p>
            </div>
          </div>

          <div class="advantage-item">
            <div class="advantage-icon"><i class="fas fa-house-medical"></i></div>
            <div>
              <h4>Layanan Home Visit</h4>
              <p>Untuk lansia dan pasien dengan mobilitas terbatas, tersedia layanan kunjungan rumah.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ALUR -->
<section class="section flow">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-label">Alur Kunjungan</div>
      <h2>Sederhana, jelas, <em>tanpa berbelit.</em></h2>
    </div>

    <div class="flow-grid">

      <div class="flow-step reveal">
        <div class="flow-num">1</div>
        <h4>Buat Janji</h4>
        <p>Hubungi kami via telepon, WhatsApp, atau website untuk menentukan jadwal.</p>
      </div>

      <div class="flow-step reveal">
        <div class="flow-num">2</div>
        <h4>Konfirmasi</h4>
        <p>Kami kirimkan pengingat H-1 dan nomor antrian Anda via WhatsApp.</p>
      </div>

      <div class="flow-step reveal">
        <div class="flow-num">3</div>
        <h4>Datang & Diperiksa</h4>
        <p>Cukup bawa KTP dan kartu asuransi (jika ada). Anda langsung ditangani dokter.</p>
      </div>

      <div class="flow-step reveal">
        <div class="flow-num">4</div>
        <h4>Farmasi & Pulang</h4>
        <p>Obat diambil di apotek kami. Untuk lab, hasil dikirim via WhatsApp.</p>
      </div>

    </div>
  </div>
</section>

<!-- FASILITAS -->
<section class="section" id="fasilitas">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-label">Fasilitas</div>
      <h2>Ruang yang <em>dirancang untuk sembuh.</em></h2>
      <p>Kami percaya lingkungan yang tenang dan bersih mempercepat proses penyembuhan. Itu sebabnya kami merawat setiap sudut klinik dengan teliti.</p>
    </div>

    <div class="facilities-grid">

      <div class="facility reveal">
        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&q=80" alt="">
        <div class="facility-label">Ruang Tunggu Utama</div>
      </div>

      <div class="facility reveal">
        <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=800&q=80" alt="">
        <div class="facility-label">Ruang Periksa</div>
      </div>

      <div class="facility reveal">
        <img src="https://images.unsplash.com/photo-1587351021759-3e566b6af7cc?w=800&q=80" alt="">
        <div class="facility-label">Klinik Gigi</div>
      </div>

    </div>
  </div>
</section>

<!-- TESTIMONI -->
<section class="section testimonials">
  <div class="wrap">
    <div class="section-head center reveal">
      <div class="sec-label">Kata Pasien</div>
      <h2>Pengalaman mereka <em>di klinik kami.</em></h2>
    </div>

    <div class="testi-grid">

      <div class="testi-card reveal">
        <div class="testi-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="testi-text">
          Kami sekeluarga sudah berobat di sini sejak anak pertama lahir. Dokter Anita selalu sabar menjawab pertanyaan saya yang banyak. Rasanya seperti punya dokter keluarga sendiri.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=47" alt="">
          <div>
            <div class="name">Ibu Sari Handayani</div>
            <div class="role">Pasien sejak 2012</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal">
        <div class="testi-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="testi-text">
          Yang membedakan klinik ini adalah kerapiannya. Datang dengan janji, tunggu maksimal 15 menit, sudah dipanggil. Tidak seperti pengalaman saya di tempat lain.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=11" alt="">
          <div>
            <div class="name">Pak Hendra Wijaya</div>
            <div class="role">Pasien umum</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal">
        <div class="testi-stars">
          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
        </div>
        <p class="testi-text">
          Ibu saya lansia dan sulit dibawa ke klinik. Layanan home visit-nya sangat membantu. Dokter datang ke rumah dengan peralatan lengkap. Terima kasih sekali.
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/150?img=32" alt="">
          <div>
            <div class="name">Ibu Maya Anggraini</div>
            <div class="role">Keluarga pasien</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- JADWAL & LOKASI -->
<section class="section" id="jadwal">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="sec-label">Jadwal & Lokasi</div>
      <h2>Kami buka <em>hampir setiap hari.</em></h2>
    </div>

    <div class="schedule-location">

      <div class="reveal">
        <div class="schedule-list">

          <div class="schedule-row">
            <span class="day">
              Senin
            </span>
            <span class="time">08.00 – 21.00</span>
          </div>

          <div class="schedule-row">
            <span class="day">
              Selasa
            </span>
            <span class="time">08.00 – 21.00</span>
          </div>

          <div class="schedule-row">
            <span class="day">
              Rabu
            </span>
            <span class="time">08.00 – 21.00</span>
          </div>

          <div class="schedule-row">
            <span class="day">
              Kamis
            </span>
            <span class="time">08.00 – 21.00</span>
          </div>

          <div class="schedule-row">
            <span class="day">
              Jumat
            </span>
            <span class="time">08.00 – 21.00</span>
          </div>

          <div class="schedule-row">
            <span class="day">
              Sabtu
            </span>
            <span class="time">08.00 – 18.00</span>
          </div>

          <div class="schedule-row">
            <span class="day">
              Minggu & Hari Libur
              <span class="today-tag">TERBATAS</span>
            </span>
            <span class="time">09.00 – 14.00</span>
          </div>

        </div>
      </div>

      <div class="location-card reveal">
        <h3>Kunjungi Kami</h3>

        <div class="location-item">
          <div class="location-icon"><i class="fas fa-location-dot"></i></div>
          <div>
            <div class="label">Alamat</div>
            <div class="value">Jl. Jenderal Sudirman No. 245<br>Jakarta Pusat 10220</div>
          </div>
        </div>

        <div class="location-item">
          <div class="location-icon"><i class="fas fa-phone"></i></div>
          <div>
            <div class="label">Telepon</div>
            <div class="value">(021) 555-0123</div>
          </div>
        </div>

        <div class="location-item">
          <div class="location-icon"><i class="fab fa-whatsapp"></i></div>
          <div>
            <div class="label">WhatsApp</div>
            <div class="value">+62 812 3456 7890</div>
          </div>
        </div>

        <div class="location-item">
          <div class="location-icon"><i class="fas fa-envelope"></i></div>
          <div>
            <div class="label">Email</div>
            <div class="value">halo@sehatbersama.id</div>
          </div>
        </div>

        <div class="location-map">
          <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=800&q=80" alt="">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="wrap">
    <div class="cta-inner">
      <div class="reveal">
        <h2>
          Jangan tunda kesehatan <em>keluarga Anda.</em>
        </h2>
        <p>
          Buat janji sekarang dan dapatkan waktu konsultasi yang cukup dengan dokter. Kami siap melayani Anda dan keluarga.
        </p>
      </div>
      <div class="cta-actions reveal">
        <a href="#" class="btn btn-white">
          <i class="fab fa-whatsapp"></i> Buat Janji via WhatsApp
        </a>
        <a href="tel:0215550123" class="btn btn-ghost-light">
          <i class="fas fa-phone"></i> Telepon Klinik
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
          <div class="brand-mark"><i class="fas fa-heart-pulse"></i></div>
          Klinik Sehat Bersama
        </div>
        <p class="footer-desc">
          Klinik pratama keluarga di Jakarta Pusat. Melayani kesehatan Anda dan keluarga dengan sepenuh hati sejak 2005.
        </p>
        <div class="footer-license">
          <strong>Izin Operasional:</strong><br>
          No. HK.03.01/445/2010<br>
          Akreditasi Paripurna Kemenkes RI
        </div>
      </div>

      <div class="footer-col">
        <h4>Layanan</h4>
        <ul>
          <li><a href="#">Pemeriksaan Umum</a></li>
          <li><a href="#">Kesehatan Gigi</a></li>
          <li><a href="#">Kesehatan Anak</a></li>
          <li><a href="#">Laboratorium</a></li>
          <li><a href="#">Vaksinasi</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Klinik</h4>
        <ul>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Tim Dokter</a></li>
          <li><a href="#">Karier</a></li>
          <li><a href="#">Blog Kesehatan</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
      </div>

      <div class="footer-col footer-contact">
        <h4>Hubungi Kami</h4>
        <p><i class="fas fa-location-dot"></i> Jl. Jenderal Sudirman 245<br>Jakarta Pusat 10220</p>
        <p><i class="fas fa-phone"></i> (021) 555-0123</p>
        <p><i class="fab fa-whatsapp"></i> +62 812 3456 7890</p>
        <p><i class="fas fa-envelope"></i> halo@sehatbersama.id</p>
      </div>

    </div>

    <div class="footer-bottom">
      <div>© 2025 Klinik Sehat Bersama. Semua hak dilindungi.</div>
      <div class="footer-social">
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- FLOAT BUTTONS -->
<div class="float-group">
  <a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2007" class="float-btn float-wa" target="_blank" aria-label="WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
  <a href="tel:0215550123" class="float-btn float-phone" aria-label="Telepon">
    <i class="fas fa-phone"></i>
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

// Highlight today
const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
const today = days[new Date().getDay()];
document.querySelectorAll('.schedule-row').forEach(row => {
  const dayText = row.querySelector('.day').textContent.trim().split('\n')[0].trim();
  if (dayText === today || (today === 'Minggu' && dayText.includes('Minggu'))) {
    row.classList.add('today');
    if (!row.querySelector('.today-tag')) {
      const tag = document.createElement('span');
      tag.className = 'today-tag';
      tag.textContent = 'HARI INI';
      row.querySelector('.day').appendChild(tag);
    }
  }
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