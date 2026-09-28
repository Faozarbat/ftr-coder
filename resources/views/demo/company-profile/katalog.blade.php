<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Katalog Demo Company Profile — FTR-Coder</title>
<meta name="description" content="15 demo company profile siap pakai untuk berbagai industri. Lihat preview dan pilih yang paling cocok.">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --bg: #0a0a0a;
  --bg-2: #111111;
  --bg-3: #161616;
  --card: #131313;
  --card-hover: #1a1a1a;
  --line: #232323;
  --line-2: #2f2f2f;
  --ink: #ededed;
  --ink-2: #a8a8a8;
  --ink-3: #6e6e6e;
  --ink-4: #4a4a4a;
  --orange: #e08a3c;
  --orange-2: #f0a050;
  --sans: 'Inter', -apple-system, sans-serif;
  --mono: 'JetBrains Mono', monospace;
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--sans);
  background: var(--bg);
  color: var(--ink);
  font-size: 15px;
  line-height: 1.6;
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

::selection { background: var(--orange); color: var(--bg); }
a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }

/* ============ NAVBAR ============ */
.nav {
  position: sticky;
  top: 0;
  z-index: 100;
  background: rgba(10, 10, 10, 0.92);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  border-bottom: 1px solid var(--line);
}

.nav-inner {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 40px;
  height: 64px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
}

.brand {
  font-family: var(--mono);
  font-size: 15px;
  font-weight: 600;
  color: var(--orange);
  letter-spacing: 0.02em;
  flex-shrink: 0;
}

.nav-menu {
  display: flex;
  gap: 32px;
  list-style: none;
}

.nav-menu a {
  font-size: 14px;
  color: var(--ink-2);
  transition: color 0.2s;
}

.nav-menu a:hover { color: var(--ink); }
.nav-menu a.active { color: var(--ink); }

.nav-toggle {
  display: none;
  background: none;
  border: none;
  color: var(--ink);
  font-size: 20px;
  cursor: pointer;
  padding: 4px;
}

/* ============ PAGE HEADER ============ */
.page-header {
  padding: 72px 0 56px;
  border-bottom: 1px solid var(--line);
}

.page-header-inner {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 40px;
}

.breadcrumb {
  font-family: var(--mono);
  font-size: 12px;
  color: var(--ink-3);
  margin-bottom: 22px;
}

.breadcrumb a { color: var(--ink-3); transition: color 0.2s; }
.breadcrumb a:hover { color: var(--orange); }
.breadcrumb span { color: var(--orange); margin: 0 8px; }

.page-header h1 {
  font-size: clamp(30px, 4vw, 44px);
  font-weight: 700;
  color: var(--ink);
  letter-spacing: -0.025em;
  line-height: 1.15;
  margin-bottom: 18px;
}

.page-header .lede {
  font-size: 15px;
  color: var(--ink-2);
  max-width: 720px;
  line-height: 1.75;
  font-weight: 300;
}

.page-header .lede strong {
  color: var(--ink);
  font-weight: 500;
}

/* ============ STATS BAR ============ */
.stats-bar {
  padding: 22px 0;
  border-bottom: 1px solid var(--line);
  background: var(--bg-2);
}

.stats-inner {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  gap: 56px;
  flex-wrap: wrap;
}

.stat-item {
  display: flex;
  align-items: baseline;
  gap: 12px;
}

.stat-item .num {
  font-family: var(--mono);
  font-size: 20px;
  font-weight: 600;
  color: var(--orange);
}

.stat-item .lbl {
  font-size: 13px;
  color: var(--ink-3);
}

/* ============ FILTER ============ */
.filter-section {
  padding: 28px 0;
  border-bottom: 1px solid var(--line);
  position: sticky;
  top: 64px;
  background: var(--bg);
  z-index: 90;
}

.filter-inner {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 24px;
  flex-wrap: wrap;
}

.filter-label {
  font-family: var(--mono);
  font-size: 12px;
  color: var(--ink-3);
  letter-spacing: 0.04em;
  text-transform: uppercase;
}

.filter-buttons {
  display: flex;
  gap: 6px;
  flex-wrap: wrap;
}

.filter-btn {
  padding: 8px 16px;
  background: transparent;
  border: 1px solid var(--line-2);
  color: var(--ink-2);
  font-family: var(--sans);
  font-size: 13px;
  font-weight: 500;
  border-radius: 4px;
  cursor: pointer;
  transition: all 0.2s;
  white-space: nowrap;
}

.filter-btn:hover {
  border-color: var(--orange);
  color: var(--orange);
}

.filter-btn.active {
  background: var(--orange);
  border-color: var(--orange);
  color: var(--bg);
}

/* ============ GRID ============ */
.grid-section {
  padding: 44px 0 100px;
}

.grid-wrap {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 40px;
}

.grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 20px;
}

/* ============ CARD ============ */
.card {
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  transition: all 0.25s;
  cursor: pointer;
  overflow: hidden;
  position: relative;
}

.card:hover {
  background: var(--card-hover);
  border-color: var(--line-2);
  transform: translateY(-3px);
}

/* ============ PREVIEW THUMBNAIL ============ */
.preview {
  aspect-ratio: 4 / 3;
  position: relative;
  overflow: hidden;
  border-bottom: 1px solid var(--line);
  background: #0d0d0d;
}

.preview-frame {
  position: absolute;
  inset: 10px;
  border-radius: 6px;
  overflow: hidden;
  box-shadow: 0 8px 24px -8px rgba(0, 0, 0, 0.6);
  transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.card:hover .preview-frame {
  transform: translateY(-4px) scale(1.02);
}

/* Browser bar di atas mockup */
.mock-bar {
  height: 14px;
  display: flex;
  align-items: center;
  gap: 4px;
  padding: 0 8px;
  flex-shrink: 0;
}

.mock-bar .dot {
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.25);
}

.mock-bar .url {
  margin-left: auto;
  width: 40%;
  height: 5px;
  border-radius: 3px;
  background: rgba(255, 255, 255, 0.12);
}

/* Body mockup */
.mock-body {
  flex: 1;
  display: flex;
  flex-direction: column;
  padding: 6px;
  gap: 4px;
  overflow: hidden;
}

/* Elemen umum dalam mockup */
.mock-nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 3px 5px;
  border-radius: 3px;
  flex-shrink: 0;
}

.mock-nav .logo {
  width: 30%;
  height: 3px;
  border-radius: 2px;
}

.mock-nav .links {
  display: flex;
  gap: 3px;
}

.mock-nav .links span {
  width: 8px;
  height: 2px;
  border-radius: 1px;
}

.mock-hero {
  flex: 1;
  border-radius: 3px;
  padding: 8px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 4px;
  position: relative;
  overflow: hidden;
}

.mock-hero .title {
  height: 4px;
  border-radius: 2px;
  width: 70%;
}

.mock-hero .title.short { width: 45%; }

.mock-hero .sub {
  height: 2px;
  border-radius: 1px;
  width: 55%;
  opacity: 0.5;
}

.mock-hero .sub.short { width: 35%; }

.mock-hero .cta {
  height: 6px;
  border-radius: 3px;
  width: 22px;
  margin-top: 2px;
}

.mock-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 3px;
  flex-shrink: 0;
}

.mock-block {
  border-radius: 2px;
  aspect-ratio: 1 / 0.7;
}

.mock-photo {
  border-radius: 3px;
  flex: 1;
  background-size: cover;
  background-position: center;
}

.mock-row {
  display: flex;
  gap: 3px;
  flex: 1;
}

.mock-col {
  flex: 1;
  border-radius: 2px;
}

/* ============ VARIAN PREVIEW PER DEMO ============ */

/* Demo 01 - NexaTech - ungu modern gradient */
.pv-01 .preview-frame { background: #0f172a; }
.pv-01 .mock-bar { background: #1e293b; }
.pv-01 .mock-nav { background: #1e293b; }
.pv-01 .mock-nav .logo { background: #a78bfa; }
.pv-01 .mock-nav .links span { background: #64748b; }
.pv-01 .mock-hero { background: #1e293b; }
.pv-01 .mock-hero .title { background: #a78bfa; }
.pv-01 .mock-hero .sub { background: #64748b; }
.pv-01 .mock-hero .cta { background: #a78bfa; }

/* Demo 02 - Lumina - cyber dark + biru neon */
.pv-02 .preview-frame { background: #0a0e1a; }
.pv-02 .mock-bar { background: #131b2e; }
.pv-02 .mock-nav { background: #131b2e; }
.pv-02 .mock-nav .logo { background: #00d4ff; }
.pv-02 .mock-nav .links span { background: #4a5568; }
.pv-02 .mock-hero { background: #131b2e; }
.pv-02 .mock-hero .title { background: #00d4ff; }
.pv-02 .mock-hero .sub { background: #64748b; }
.pv-02 .mock-hero .cta { background: #3b82f6; }

/* Demo 03 - Arsitek - monokrom editorial */
.pv-03 .preview-frame { background: #ffffff; }
.pv-03 .mock-bar { background: #f4f4f2; }
.pv-03 .mock-nav { background: #ffffff; border-bottom: 1px solid #e8e8e4; }
.pv-03 .mock-nav .logo { background: #111111; }
.pv-03 .mock-nav .links span { background: #6b6b6b; }
.pv-03 .mock-hero { background: #f4f4f2; }
.pv-03 .mock-hero .title { background: #111111; }
.pv-03 .mock-hero .sub { background: #6b6b6b; }
.pv-03 .mock-hero .cta { background: #111111; }

/* Demo 04 - Ruang Reka - cream terracotta */
.pv-04 .preview-frame { background: #f7f3ec; }
.pv-04 .mock-bar { background: #efe8dc; }
.pv-04 .mock-nav { background: #ffffff; }
.pv-04 .mock-nav .logo { background: #c25a3a; }
.pv-04 .mock-nav .links span { background: #8f8377; }
.pv-04 .mock-hero { background: #efe8dc; }
.pv-04 .mock-hero .title { background: #2b2118; }
.pv-04 .mock-hero .sub { background: #8f8377; }
.pv-04 .mock-hero .cta { background: #c25a3a; }

/* Demo 05 - Rangka - SaaS putih hijau */
.pv-05 .preview-frame { background: #ffffff; }
.pv-05 .mock-bar { background: #fafafa; }
.pv-05 .mock-nav { background: #ffffff; border-bottom: 1px solid #e4e4e7; }
.pv-05 .mock-nav .logo { background: #166534; }
.pv-05 .mock-nav .links span { background: #a1a1aa; }
.pv-05 .mock-hero { background: #fafafa; }
.pv-05 .mock-hero .title { background: #18181b; }
.pv-05 .mock-hero .sub { background: #a1a1aa; }
.pv-05 .mock-hero .cta { background: #166534; }

/* Demo 06 - Dapur Bumi - gelap coklat emas */
.pv-06 .preview-frame { background: #1a120b; }
.pv-06 .mock-bar { background: #241a11; }
.pv-06 .mock-nav { background: #241a11; }
.pv-06 .mock-nav .logo { background: #b8873a; }
.pv-06 .mock-nav .links span { background: #4a3624; }
.pv-06 .mock-hero { background: #241a11; }
.pv-06 .mock-hero .title { background: #e8c888; }
.pv-06 .mock-hero .sub { background: #8a7d6a; }
.pv-06 .mock-hero .cta { background: #b8873a; }

/* Demo 07 - Klinik - biru bersih */
.pv-07 .preview-frame { background: #ffffff; }
.pv-07 .mock-bar { background: #f6f9fc; }
.pv-07 .mock-nav { background: #ffffff; border-bottom: 1px solid #e2eaf1; }
.pv-07 .mock-nav .logo { background: #1a5a8a; }
.pv-07 .mock-nav .links span { background: #95a9b8; }
.pv-07 .mock-hero { background: #f6f9fc; }
.pv-07 .mock-hero .title { background: #0f2436; }
.pv-07 .mock-hero .sub { background: #95a9b8; }
.pv-07 .mock-hero .cta { background: #1a5a8a; }

/* Demo 08 - Cendekia - ceria kuning biru */
.pv-08 .preview-frame { background: #fdf8f0; }
.pv-08 .mock-bar { background: #f8f0e0; }
.pv-08 .mock-nav { background: #ffffff; }
.pv-08 .mock-nav .logo { background: #2c5ba8; }
.pv-08 .mock-nav .links span { background: #9ca3af; }
.pv-08 .mock-hero { background: #f8f0e0; }
.pv-08 .mock-hero .title { background: #1f2937; }
.pv-08 .mock-hero .sub { background: #9ca3af; }
.pv-08 .mock-hero .cta { background: #e8b73e; }

/* Demo 09 - Aksara - hitam emas */
.pv-09 .preview-frame { background: #14110d; }
.pv-09 .mock-bar { background: #1c1814; }
.pv-09 .mock-nav { background: #1c1814; }
.pv-09 .mock-nav .logo { background: #b8935a; }
.pv-09 .mock-nav .links span { background: #443a2c; }
.pv-09 .mock-hero { background: #1c1814; }
.pv-09 .mock-hero .title { background: #d4b078; }
.pv-09 .mock-hero .sub { background: #8a7d6a; }
.pv-09 .mock-hero .cta { background: #b8935a; }

/* Demo 10 - Jejak - tropis hijau krem */
.pv-10 .preview-frame { background: #f7f2e8; }
.pv-10 .mock-bar { background: #efe6d3; }
.pv-10 .mock-nav { background: #ffffff; }
.pv-10 .mock-nav .logo { background: #1e4d38; }
.pv-10 .mock-nav .links span { background: #a8ad9e; }
.pv-10 .mock-hero { background: #2a6349; position: relative; }
.pv-10 .mock-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, transparent 40%, rgba(30, 77, 56, 0.85));
}
.pv-10 .mock-hero .title { background: #f7f2e8; position: relative; z-index: 1; }
.pv-10 .mock-hero .sub { background: #e8dcc8; position: relative; z-index: 1; }
.pv-10 .mock-hero .cta { background: #c9a24a; position: relative; z-index: 1; }

/* Demo 11 - Garasi Merah - hitam merah */
.pv-11 .preview-frame { background: #0d0d0d; }
.pv-11 .mock-bar { background: #161616; }
.pv-11 .mock-nav { background: #161616; }
.pv-11 .mock-nav .logo { background: #d91e18; }
.pv-11 .mock-nav .links span { background: #383838; }
.pv-11 .mock-hero { background: #161616; }
.pv-11 .mock-hero .title { background: #d91e18; }
.pv-11 .mock-hero .sub { background: #4a4a4a; }
.pv-11 .mock-hero .cta { background: #d91e18; }

/* Demo 12 - Hartono - monokrom burgundy */
.pv-12 .preview-frame { background: #fafaf7; }
.pv-12 .mock-bar { background: #f2f2ed; }
.pv-12 .mock-nav { background: #ffffff; }
.pv-12 .mock-nav .logo { background: #6b1f2a; }
.pv-12 .mock-nav .links span { background: #a8a8a8; }
.pv-12 .mock-hero { background: #f2f2ed; }
.pv-12 .mock-hero .title { background: #141414; }
.pv-12 .mock-hero .sub { background: #a8a8a8; }
.pv-12 .mock-hero .cta { background: #6b1f2a; }

/* Demo 13 - Rosée - rose nude */
.pv-13 .preview-frame { background: #fdfaf7; }
.pv-13 .mock-bar { background: #f7efe9; }
.pv-13 .mock-nav { background: #ffffff; }
.pv-13 .mock-nav .logo { background: #b8726e; }
.pv-13 .mock-nav .links span { background: #b8a8a0; }
.pv-13 .mock-hero { background: #f7efe9; }
.pv-13 .mock-hero .title { background: #2a1f1a; }
.pv-13 .mock-hero .sub { background: #b8a8a0; }
.pv-13 .mock-hero .cta { background: #b8726e; }

/* Demo 14 - Bumi Tani - hijau bumi */
.pv-14 .preview-frame { background: #f5f0e4; }
.pv-14 .mock-bar { background: #ede4d0; }
.pv-14 .mock-nav { background: #fbf7ee; }
.pv-14 .mock-nav .logo { background: #3d5733; }
.pv-14 .mock-nav .links span { background: #a8ab8e; }
.pv-14 .mock-hero { background: #3d5733; }
.pv-14 .mock-hero .title { background: #f5f0e4; }
.pv-14 .mock-hero .sub { background: #e4ebdc; opacity: 0.6; }
.pv-14 .mock-hero .cta { background: #c9a447; }

/* Demo 15 - Lumen - hitam dramatis cream */
.pv-15 .preview-frame { background: #0a0a0a; }
.pv-15 .mock-bar { background: #111111; }
.pv-15 .mock-nav { background: #111111; }
.pv-15 .mock-nav .logo { background: #e8dcc0; }
.pv-15 .mock-nav .links span { background: #3a3a3a; }
.pv-15 .mock-hero { background: #111111; }
.pv-15 .mock-hero .title { background: #e8dcc0; }
.pv-15 .mock-hero .sub { background: #4a4845; }
.pv-15 .mock-hero .cta { background: #e8dcc0; }

/* Overlay hover: tampilkan "Lihat Demo" */
.preview-overlay {
  position: absolute;
  inset: 0;
  background: rgba(10, 10, 10, 0.75);
  backdrop-filter: blur(2px);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s;
  z-index: 2;
}

.card:hover .preview-overlay { opacity: 1; }

.preview-overlay-content {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 9px 16px;
  background: var(--orange);
  color: var(--bg);
  border-radius: 999px;
  font-family: var(--mono);
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  transform: translateY(6px);
  transition: transform 0.3s;
}

.card:hover .preview-overlay-content {
  transform: translateY(0);
}

.preview-overlay-content i { font-size: 10px; }

/* ============ CARD CONTENT ============ */
.card-body {
  padding: 18px 18px 18px;
  display: flex;
  flex-direction: column;
  flex: 1;
}

.card-meta {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 8px;
  margin-bottom: 12px;
}

.card-num {
  font-family: var(--mono);
  font-size: 10px;
  color: var(--ink-4);
  letter-spacing: 0.08em;
}

.card-category {
  font-family: var(--mono);
  font-size: 10px;
  color: var(--orange);
  letter-spacing: 0.06em;
  padding: 3px 8px;
  background: rgba(224, 138, 60, 0.1);
  border-radius: 3px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 140px;
}

.card h3 {
  font-size: 14px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.01em;
  line-height: 1.35;
  margin-bottom: 10px;
}

.card p {
  font-size: 12px;
  color: var(--ink-2);
  line-height: 1.6;
  font-weight: 300;
  margin-bottom: 14px;
  flex: 1;
}

.card-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 12px;
  border-top: 1px solid var(--line);
  gap: 8px;
}

.card-tag {
  font-family: var(--mono);
  font-size: 10px;
  color: var(--ink-3);
  letter-spacing: 0.02em;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.card-arrow {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: var(--bg-3);
  border: 1px solid var(--line-2);
  color: var(--ink-3);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 10px;
  transition: all 0.25s;
  flex-shrink: 0;
}

.card:hover .card-arrow {
  background: var(--orange);
  border-color: var(--orange);
  color: var(--bg);
  transform: translateX(2px);
}

/* ============ NOTE SECTION ============ */
.note-section {
  padding: 44px 0;
  border-top: 1px solid var(--line);
  background: var(--bg-2);
}

.note-inner {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 40px;
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}

.note-text h3 {
  font-size: 19px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.015em;
  margin-bottom: 10px;
}

.note-text p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.7;
  font-weight: 300;
}

.note-actions {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  justify-content: flex-end;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 13px 24px;
  font-size: 13px;
  font-weight: 500;
  border-radius: 6px;
  border: 1px solid transparent;
  transition: all 0.2s;
  cursor: pointer;
  font-family: inherit;
  white-space: nowrap;
}

.btn-orange {
  background: var(--orange);
  color: var(--bg);
  border-color: var(--orange);
}

.btn-orange:hover {
  background: var(--orange-2);
  border-color: var(--orange-2);
}

.btn-outline {
  background: transparent;
  color: var(--ink-2);
  border-color: var(--line-2);
}

.btn-outline:hover {
  border-color: var(--ink-2);
  color: var(--ink);
}

/* ============ FOOTER ============ */
.footer {
  background: var(--bg);
  padding: 56px 0 32px;
  border-top: 1px solid var(--line);
}

.footer-inner {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 40px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 32px;
  flex-wrap: wrap;
}

.footer-brand {
  font-family: var(--mono);
  font-size: 14px;
  font-weight: 600;
  color: var(--orange);
}

.footer-note {
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
  border-radius: 6px;
  background: var(--bg-2);
  border: 1px solid var(--line);
  color: var(--ink-3);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  transition: all 0.2s;
}

.footer-social a:hover {
  background: var(--orange);
  border-color: var(--orange);
  color: var(--bg);
}

/* ============ WA FLOAT ============ */
.wa-float {
  position: fixed;
  bottom: 24px;
  right: 24px;
  width: 54px;
  height: 54px;
  border-radius: 50%;
  background: #25d366;
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  z-index: 200;
  box-shadow: 0 12px 28px -10px rgba(37, 211, 102, 0.5);
  transition: transform 0.25s;
}

.wa-float:hover { transform: translateY(-3px) scale(1.05); }

/* ============ RESPONSIVE ============ */
@media (max-width: 1200px) {
  .grid { grid-template-columns: repeat(4, 1fr); }
}

@media (max-width: 900px) {
  .nav-inner, .page-header-inner, .stats-inner, .filter-inner, .grid-wrap, .note-inner, .footer-inner {
    padding: 0 24px;
  }

  .nav-menu {
    display: none;
    position: fixed;
    top: 64px;
    left: 0;
    right: 0;
    background: var(--bg-2);
    flex-direction: column;
    gap: 0;
    padding: 12px 24px;
    border-bottom: 1px solid var(--line);
  }

  .nav-menu.open { display: flex; }
  .nav-menu a { padding: 14px 0; border-bottom: 1px solid var(--line); }
  .nav-toggle { display: block; }

  .grid { grid-template-columns: repeat(3, 1fr); }

  .note-inner { grid-template-columns: 1fr; gap: 32px; }
  .note-actions { justify-content: flex-start; }
  .filter-section { position: relative; top: 0; }
}

@media (max-width: 640px) {
  .page-header { padding: 48px 0 40px; }
  .page-header h1 { font-size: 26px; }
  .stats-inner { gap: 20px; }
  .grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
  .card-body { padding: 14px 14px 16px; }
  .card h3 { font-size: 13px; }
  .card p { font-size: 11px; }
  .card-category { max-width: 100px; font-size: 9px; }
  .footer-inner { justify-content: center; text-align: center; }
  .wa-float { width: 48px; height: 48px; font-size: 19px; bottom: 18px; right: 18px; }
}

@media (max-width: 420px) {
  .grid { grid-template-columns: 1fr; }
}

/* ============ POPUP TOKEN ============ */
.tk-overlay {
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.7);
  backdrop-filter: blur(3px);
  -webkit-backdrop-filter: blur(3px);
  z-index: 300;
  display: none;
}
.tk-overlay.show { display: block; }

.tk-modal {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: calc(100% - 40px);
  max-width: 400px;
  background: var(--card);
  border: 1px solid var(--line-2);
  border-radius: 12px;
  padding: 32px 28px 26px;
  z-index: 301;
  display: none;
  box-shadow: 0 24px 60px -12px rgba(0, 0, 0, 0.8);
}
.tk-modal.show { display: block; }

.tk-close {
  position: absolute;
  top: 12px;
  right: 14px;
  width: 30px;
  height: 30px;
  background: none;
  border: none;
  color: var(--ink-3);
  font-size: 22px;
  line-height: 1;
  cursor: pointer;
  border-radius: 6px;
  transition: all 0.2s;
}
.tk-close:hover { color: var(--ink); background: var(--bg-3); }

.tk-modal h3 {
  font-size: 19px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: -0.015em;
  margin-bottom: 6px;
  text-align: center;
}
.tk-demo {
  font-family: var(--mono);
  font-size: 11px;
  color: var(--orange);
  text-align: center;
  margin-bottom: 20px;
  min-height: 16px;
}
.tk-error {
  background: rgba(224, 98, 90, 0.1);
  border: 1px solid #e0625a;
  color: #e0625a;
  font-size: 12.5px;
  padding: 10px 12px;
  border-radius: 6px;
  margin-bottom: 14px;
  line-height: 1.5;
}
.tk-input {
  width: 100%;
  padding: 13px;
  margin-bottom: 12px;
  background: var(--bg);
  border: 1px solid var(--line-2);
  border-radius: 6px;
  color: var(--ink);
  font-family: var(--mono);
  font-size: 16px;
  text-align: center;
  letter-spacing: 2px;
  text-transform: uppercase;
  outline: none;
  transition: border-color 0.2s;
}
.tk-input:focus { border-color: var(--orange); }
.tk-input::placeholder { color: var(--ink-4); letter-spacing: 0.5px; text-transform: none; font-size: 13px; }
.tk-submit { width: 100%; justify-content: center; }
.tk-divider {
  text-align: center;
  color: var(--ink-4);
  font-size: 11px;
  margin: 18px 0 14px;
  font-family: var(--mono);
  letter-spacing: 0.06em;
  text-transform: uppercase;
}
.tk-wa { width: 100%; justify-content: center; }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="nav">
  <div class="nav-inner">
    <a href="{{ route('home') }}" class="brand">FTR-Coder</a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('produk.index') }}" class="active">Produk</a></li>
      <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
      <li><a href="{{ route('proses-kerja') }}">Proses Kerja</a></li>
      <li><a href="{{ route('kontak') }}">Kontak</a></li>
    </ul>

    <button class="nav-toggle" id="navToggle" aria-label="Menu">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- PAGE HEADER -->
<header class="page-header">
  <div class="page-header-inner">
    <div class="breadcrumb">
      <a href="{{ route('home') }}">Home</a>
      <span>→</span>
      <a href="{{ route('produk.index') }}">Produk</a>
      <span>→</span>
      Katalog Demo Company Profile
    </div>

    <h1>Katalog Demo Company Profile</h1>

    <p class="lede">
      Lima belas pilihan desain company profile siap pakai untuk berbagai industri.
      Setiap kartu menampilkan <strong>preview mini</strong> dari tampilan demo yang asli —
      jadi Anda bisa melihat gaya dan warna sebelum membukanya.
      <strong>Klik kartu mana pun</strong> untuk membuka demo lengkapnya (perlu token).
    </p>
  </div>
</header>

<!-- STATS -->
<div class="stats-bar">
  <div class="stats-inner">
    <div class="stat-item"><div class="num">15</div><div class="lbl">Demo siap pakai</div></div>
    <div class="stat-item"><div class="num">15</div><div class="lbl">Industri berbeda</div></div>
    <div class="stat-item"><div class="num">1</div><div class="lbl">File HTML per demo</div></div>
    <div class="stat-item"><div class="num">0</div><div class="lbl">Gradasi warna</div></div>
  </div>
</div>

<!-- FILTER -->
<div class="filter-section">
  <div class="filter-inner">
    <div class="filter-label">Filter Kategori</div>
    <div class="filter-buttons">
      <button class="filter-btn active" data-cat="all">Semua</button>
      <button class="filter-btn" data-cat="tech">Teknologi</button>
      <button class="filter-btn" data-cat="kreatif">Kreatif & Desain</button>
      <button class="filter-btn" data-cat="jasa">Jasa Profesional</button>
      <button class="filter-btn" data-cat="konsumen">Konsumen</button>
    </div>
  </div>
</div>

<!-- GRID -->
<section class="grid-section">
  <div class="grid-wrap">
    <div class="grid" id="grid">

      <!-- 01 -->
      <a href="#" class="card pv-01" data-cat="tech" data-demo="NexaTech Studio" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">01</span>
            <span class="card-category">Startup Tech</span>
          </div>
          <h3>NexaTech Studio</h3>
          <p>Modern dengan aksen ungu. Untuk startup teknologi dan produk SaaS tahap awal.</p>
          <div class="card-footer">
            <span class="card-tag">Modern</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 02 -->
      <a href="#" class="card pv-02" data-cat="tech" data-demo="Lumina Digital" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">02</span>
            <span class="card-category">Tech · Dark Mode</span>
          </div>
          <h3>Lumina Digital</h3>
          <p>Cyber futuristik dengan dark mode aktif. Untuk perusahaan teknologi dan fintech.</p>
          <div class="card-footer">
            <span class="card-tag">Cyber</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 03 -->
      <a href="#" class="card pv-03" data-cat="kreatif" data-demo="Arsitek Digital" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">03</span>
            <span class="card-category">Studio Desain</span>
          </div>
          <h3>Arsitek Digital</h3>
          <p>Editorial tegas dengan nuansa monokrom. Untuk studio desain dan agensi premium.</p>
          <div class="card-footer">
            <span class="card-tag">Editorial</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 04 -->
      <a href="#" class="card pv-04" data-cat="kreatif" data-demo="Ruang Reka" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">04</span>
            <span class="card-category">Studio Kreatif</span>
          </div>
          <h3>Ruang Reka</h3>
          <p>Hangat dan membulat dengan warna terracotta. Untuk UMKM dan bisnis keluarga.</p>
          <div class="card-footer">
            <span class="card-tag">Hangat</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 05 -->
      <a href="#" class="card pv-05" data-cat="tech" data-demo="Rangka" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">05</span>
            <span class="card-category">SaaS B2B</span>
          </div>
          <h3>Rangka</h3>
          <p>Bersih dan disiplin dengan aksen hijau tua. Untuk software house dan SaaS B2B.</p>
          <div class="card-footer">
            <span class="card-tag">Bersih</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 06 -->
      <a href="#" class="card pv-06" data-cat="konsumen" data-demo="Dapur Bumi" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">06</span>
            <span class="card-category">Restoran</span>
          </div>
          <h3>Dapur Bumi</h3>
          <p>Gelap hangat dengan aksen emas. Untuk restoran keluarga, kafe, dan katering.</p>
          <div class="card-footer">
            <span class="card-tag">Gelap · Emas</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 07 -->
      <a href="#" class="card pv-07" data-cat="jasa" data-demo="Klinik Sehat Bersama" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">07</span>
            <span class="card-category">Kesehatan</span>
          </div>
          <h3>Klinik Sehat Bersama</h3>
          <p>Bersih dan tenang dengan palet biru. Untuk klinik dan fasilitas kesehatan.</p>
          <div class="card-footer">
            <span class="card-tag">Bersih · Biru</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 08 -->
      <a href="#" class="card pv-08" data-cat="jasa" data-demo="Cendekia Bangsa" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">08</span>
            <span class="card-category">Pendidikan</span>
          </div>
          <h3>Cendekia Bangsa</h3>
          <p>Ceria dan ramah dengan bentuk membulat. Untuk sekolah, kursus, dan bimbel.</p>
          <div class="card-footer">
            <span class="card-tag">Ceria</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 09 -->
      <a href="#" class="card pv-09" data-cat="jasa" data-demo="Aksara Properti" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">09</span>
            <span class="card-category">Properti</span>
          </div>
          <h3>Aksara Properti</h3>
          <p>Elegan gelap dengan aksen emas. Untuk dealer properti dan agen rumah.</p>
          <div class="card-footer">
            <span class="card-tag">Elegan · Emas</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 10 -->
      <a href="#" class="card pv-10" data-cat="konsumen" data-demo="Jejak Nusantara" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">10</span>
            <span class="card-category">Travel & Wisata</span>
          </div>
          <h3>Jejak Nusantara</h3>
          <p>Alam tropis dengan foto besar. Untuk agen travel dan tour operator.</p>
          <div class="card-footer">
            <span class="card-tag">Tropis</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 11 -->
      <a href="#" class="card pv-11" data-cat="konsumen" data-demo="Garasi Merah" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">11</span>
            <span class="card-category">Otomotif</span>
          </div>
          <h3>Garasi Merah</h3>
          <p>Industrial gelap dengan aksen merah. Untuk dealer mobil dan bengkel.</p>
          <div class="card-footer">
            <span class="card-tag">Industrial</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 12 -->
      <a href="#" class="card pv-12" data-cat="jasa" data-demo="Hartono & Rekan" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">12</span>
            <span class="card-category">Hukum</span>
          </div>
          <h3>Hartono & Rekan</h3>
          <p>Monokrom formal dengan aksen burgundy. Untuk firma hukum dan notaris.</p>
          <div class="card-footer">
            <span class="card-tag">Formal</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 13 -->
      <a href="#" class="card pv-13" data-cat="konsumen" data-demo="Rosée Beauty Studio" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">13</span>
            <span class="card-category">Kecantikan</span>
          </div>
          <h3>Rosée Beauty Studio</h3>
          <p>Lembut dengan palet rose nude. Untuk klinik kecantikan, salon, dan spa.</p>
          <div class="card-footer">
            <span class="card-tag">Lembut · Rose</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 14 -->
      <a href="#" class="card pv-14" data-cat="konsumen" data-demo="Bumi Tani Nusantara" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">14</span>
            <span class="card-category">Pertanian</span>
          </div>
          <h3>Bumi Tani Nusantara</h3>
          <p>Hijau bumi dengan nuansa natural. Untuk agrikultur dan produsen pangan.</p>
          <div class="card-footer">
            <span class="card-tag">Natural</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 15 -->
      <a href="#" class="card pv-15" data-cat="kreatif" data-demo="Lumen Studio" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="title short"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">15</span>
            <span class="card-category">Fotografi</span>
          </div>
          <h3>Lumen Studio</h3>
          <p>Gelap dramatis dengan galeri dominan. Untuk studio foto dan fotografer wedding.</p>
          <div class="card-footer">
            <span class="card-tag">Dramatis</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- NOTE -->
<section class="note-section">
  <div class="note-inner">
    <div class="note-text">
      <h3>Masih bingung memilih?</h3>
      <p>
        Ceritakan jenis bisnis Anda dan kami akan merekomendasikan demo yang paling cocok.
        Setiap desain juga bisa disesuaikan dengan warna, logo, dan konten brand Anda sendiri.
      </p>
    </div>
    <div class="note-actions">
      <a href="https://wa.me/6281999263536" class="btn btn-orange" target="_blank">
        <i class="fab fa-whatsapp"></i> Konsultasi Gratis
      </a>
      <a href="{{ route('kontak') }}" class="btn btn-outline">
        <i class="fas fa-envelope"></i> Kirim Pesan
      </a>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="footer-inner">
    <div class="footer-brand">FTR-Coder</div>
    <div class="footer-note">© 2026 FTR-Coder. Semua hak dilindungi.</div>
    <div class="footer-social">
      <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    </div>
  </div>
</footer>

<!-- POPUP TOKEN -->
<div class="tk-overlay" id="tkOverlay" onclick="closeTokenModal()"></div>
<div class="tk-modal" id="tkModal" role="dialog" aria-modal="true" aria-labelledby="tkTitle">
  <button type="button" class="tk-close" onclick="closeTokenModal()" aria-label="Tutup">&times;</button>
  <h3 id="tkTitle">Masukkan Token</h3>
  <div class="tk-demo" id="tkDemoName"></div>

  @if ($errors->has('token'))
    <div class="tk-error">{{ $errors->first('token') }}</div>
  @endif

  <form method="POST" action="{{ route('demo.verify', 'company-profile') }}">
    @csrf
    <input type="hidden" name="no" id="tkNo" value="01">
    <input type="text" name="token" id="tkInput" class="tk-input" placeholder="Masukkan kode token" autocomplete="off" autocapitalize="characters" required>
    <button type="submit" class="btn btn-orange tk-submit">Masuk ke Demo</button>
  </form>

  <div class="tk-divider">Belum punya token?</div>
  <a href="https://wa.me/6281999263536?text=Halo,%20saya%20mau%20minta%20token%20demo%20Company%20Profile%20FTR-Coder" target="_blank" rel="noopener" class="btn btn-outline tk-wa">
    <i class="fab fa-whatsapp"></i> Hubungi Admin
  </a>
</div>

<!-- WA FLOAT -->
<a href="https://wa.me/6281999263536" class="wa-float" target="_blank" aria-label="WhatsApp">
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

// Filter
const filterBtns = document.querySelectorAll('.filter-btn');
const cards = document.querySelectorAll('.card');
filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    filterBtns.forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    const cat = btn.dataset.cat;
    cards.forEach(card => {
      const show = cat === 'all' || card.dataset.cat === cat;
      card.style.display = show ? 'flex' : 'none';
    });
  });
});

// Popup token
const tkOverlay = document.getElementById('tkOverlay');
const tkModal = document.getElementById('tkModal');
// Sesi token aktif (30 menit)? -> klik kartu langsung buka demo, tanpa popup
const SESSION_AKTIF = @json($sessionAktif ?? false);
const DEMO_BASE = @json(url('/demo/company-profile/app'));
function openTokenModal(e, el) {
  if (e) e.preventDefault();
  let no, name;
  if (el) {
    no = el.querySelector('.card-num').textContent.trim();
    name = el.dataset.demo;
    if (SESSION_AKTIF) {
      const url = DEMO_BASE + '/' + no;
      const w = window.open(url, '_blank');
      if (w) { w.opener = null; } else { window.location.href = url; }
      return;
    }
    sessionStorage.setItem('cpNo', no);
    sessionStorage.setItem('cpName', name);
  } else {                       // popup terbuka otomatis setelah token salah
    no = sessionStorage.getItem('cpNo') || '01';
    name = sessionStorage.getItem('cpName') || '';
  }
  document.getElementById('tkNo').value = no;
  document.getElementById('tkDemoName').textContent = name ? 'Demo: ' + name : '';
  tkOverlay.classList.add('show');
  tkModal.classList.add('show');
  setTimeout(() => document.getElementById('tkInput').focus(), 50);
}
function closeTokenModal() {
  tkOverlay.classList.remove('show');
  tkModal.classList.remove('show');
}
document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeTokenModal(); });
@if ($errors->has('token'))
// Token salah / sesi habis -> buka lagi popup supaya pesan errornya terlihat
window.addEventListener('DOMContentLoaded', () => openTokenModal(null, null));
@endif
</script>

</body>
</html>