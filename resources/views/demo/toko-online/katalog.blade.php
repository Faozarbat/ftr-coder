<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Katalog Demo Toko Online — FTR-Coder</title>
<meta name="description" content="6 demo sistem toko online siap pakai untuk berbagai industri. Lihat preview dan pilih yang paling cocok.">
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
  grid-template-columns: repeat(3, 1fr);
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
  display: flex;
  flex-direction: column;
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

.mock-hero .cta {
  height: 6px;
  border-radius: 3px;
  width: 22px;
  margin-top: 2px;
}

/* ============ VARIAN PREVIEW DEMO TOKO ONLINE ============ */

/* ===== 01. FreshMart — Grocery / Sembako =====
   Header hijau, grid produk 3x2 dengan tag harga */
.pv-01 .preview-frame { background: #f7f8fa; }
.pv-01 .mock-bar { background: #e8ebe9; }
.pv-01 .mock-bar .dot { background: rgba(0,0,0,0.2); }
.pv-01 .mock-bar .url { background: rgba(0,0,0,0.08); }
.pv-01 .mock-nav {
  background: #0a7d3e;
  border-bottom: none;
}
.pv-01 .mock-nav .logo { background: #ffd166; }
.pv-01 .mock-nav .links span { background: rgba(255,255,255,0.5); }
.pv-01 .mock-hero {
  background: #0a7d3e;
  padding: 6px;
  justify-content: flex-start;
  gap: 3px;
}
.pv-01 .mock-hero .title { background: #ffd166; height: 3px; }
.pv-01 .mock-hero .sub { background: rgba(255,255,255,0.6); }
.pv-01 .mock-hero .cta { background: #ffd166; }
.pv-01 .mock-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 4px;
  flex-shrink: 0;
  margin-top: 4px;
}
.pv-01 .mock-prod {
  background: #ffffff;
  border-radius: 3px;
  aspect-ratio: 1 / 1.1;
  display: flex;
  flex-direction: column;
  padding: 3px;
  gap: 2px;
}
.pv-01 .mock-prod::before {
  content: "";
  flex: 1;
  background: #e8f5ee;
  border-radius: 2px;
}
.pv-01 .mock-prod::after {
  content: "";
  height: 2px;
  background: #0a7d3e;
  border-radius: 1px;
  width: 60%;
}

/* ===== 02. StyleHub — Fashion Editorial =====
   Cream-rose, hero besar dengan quote, grid produk 2 kolom tall */
.pv-02 .preview-frame { background: #f4f1ec; }
.pv-02 .mock-bar { background: #e8e2d8; }
.pv-02 .mock-bar .dot { background: rgba(0,0,0,0.2); }
.pv-02 .mock-bar .url { background: rgba(0,0,0,0.08); }
.pv-02 .mock-nav {
  background: #ffffff;
  border-bottom: 1px solid #e6dfd5;
}
.pv-02 .mock-nav .logo { background: #c98b8f; }
.pv-02 .mock-nav .links span { background: #b0a89c; }
.pv-02 .mock-hero {
  background: linear-gradient(180deg, #f5e2e4 0%, #faf7f2 100%);
  justify-content: center;
  align-items: flex-start;
  padding: 8px;
}
.pv-02 .mock-hero .title { background: #2a2724; width: 80%; }
.pv-02 .mock-hero .title.short { background: #c98b8f; width: 50%; }
.pv-02 .mock-hero .sub { background: #a89488; }
.pv-02 .mock-hero .cta { background: #c98b8f; width: 30px; }
.pv-02 .mock-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 4px;
  margin-top: 4px;
}
.pv-02 .mock-prod {
  background: #ffffff;
  border-radius: 3px;
  aspect-ratio: 1 / 1.4;
  border: 1px solid #e6dfd5;
  display: flex;
  flex-direction: column;
  padding: 3px;
  gap: 2px;
}
.pv-02 .mock-prod::before {
  content: "";
  flex: 1;
  background: #f5efe4;
  border-radius: 2px;
}
.pv-02 .mock-prod::after {
  content: "";
  height: 2px;
  background: #c98b8f;
  border-radius: 1px;
  width: 50%;
}

/* ===== 03. GadgetZone — Elektronik Dark Tech =====
   Navy gelap, grid spec sheet, aksen cyan */
.pv-03 .preview-frame { background: #0b1220; }
.pv-03 .mock-bar { background: #111a2e; }
.pv-03 .mock-bar .dot { background: rgba(255,255,255,0.2); }
.pv-03 .mock-bar .url { background: rgba(0,217,224,0.3); }
.pv-03 .mock-nav {
  background: #111a2e;
  border-bottom: 1px solid #243052;
}
.pv-03 .mock-nav .logo { background: #00d9e0; }
.pv-03 .mock-nav .links span { background: #6b7897; }
.pv-03 .mock-hero {
  background: #16203a;
  padding: 6px;
}
.pv-03 .mock-hero .title { background: #00d9e0; }
.pv-03 .mock-hero .sub { background: #6b7897; }
.pv-03 .mock-hero .cta { background: #00d9e0; }
.pv-03 .mock-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 3px;
  margin-top: 4px;
}
.pv-03 .mock-prod {
  background: #16203a;
  border-radius: 2px;
  aspect-ratio: 1 / 0.9;
  border: 1px solid #243052;
  position: relative;
}
.pv-03 .mock-prod::before {
  content: "";
  position: absolute;
  top: 3px;
  left: 3px;
  right: 3px;
  height: 2px;
  background: #00d9e0;
  border-radius: 1px;
}
.pv-03 .mock-prod::after {
  content: "";
  position: absolute;
  bottom: 3px;
  left: 3px;
  right: 3px;
  height: 4px;
  background: #243052;
  border-radius: 1px;
}

/* ===== 04. FoodExpress — Food Delivery =====
   Orange-cream, kartu horizontal list menu dengan foto */
.pv-04 .preview-frame { background: #fff8f0; }
.pv-04 .mock-bar { background: #f5eadc; }
.pv-04 .mock-bar .dot { background: rgba(0,0,0,0.15); }
.pv-04 .mock-bar .url { background: rgba(0,0,0,0.06); }
.pv-04 .mock-nav {
  background: #ff6b35;
  border-radius: 0 0 4px 4px;
}
.pv-04 .mock-nav .logo { background: #ffffff; }
.pv-04 .mock-nav .links span { background: rgba(255,255,255,0.5); }
.pv-04 .mock-hero {
  background: #ff6b35;
  padding: 6px 8px;
  justify-content: center;
  border-radius: 3px;
  flex: 0 0 auto;
  height: 22%;
}
.pv-04 .mock-hero .title { background: #ffffff; height: 3px; }
.pv-04 .mock-hero .sub { background: rgba(255,255,255,0.6); }
.pv-04 .mock-list {
  display: flex;
  flex-direction: column;
  gap: 4px;
  flex: 1;
  margin-top: 4px;
}
.pv-04 .mock-item {
  background: #ffffff;
  border: 1px solid #f0e0cc;
  border-radius: 4px;
  padding: 4px;
  display: flex;
  gap: 4px;
  align-items: center;
  flex: 1;
}
.pv-04 .mock-item::before {
  content: "";
  width: 18px;
  height: 18px;
  background: #ffeadf;
  border-radius: 3px;
  flex-shrink: 0;
}
.pv-04 .mock-item::after {
  content: "";
  flex: 1;
  height: 3px;
  background: #ffeadf;
  border-radius: 2px;
}

/* ===== 05. MediCare — Apotek / Kesehatan =====
   Putih bersih, teal medical, grid produk dengan badge BPOM */
.pv-05 .preview-frame { background: #ffffff; }
.pv-05 .mock-bar { background: #f0f5f8; }
.pv-05 .mock-bar .dot { background: rgba(0,0,0,0.15); }
.pv-05 .mock-bar .url { background: rgba(15,168,161,0.2); }
.pv-05 .mock-nav {
  background: #ffffff;
  border-bottom: 1px solid #e1e9ef;
}
.pv-05 .mock-nav .logo { background: #0fa8a1; }
.pv-05 .mock-nav .links span { background: #95a9b8; }
.pv-05 .mock-hero {
  background: #e0f5f4;
  border: 1px dashed #0fa8a1;
  justify-content: center;
}
.pv-05 .mock-hero .title { background: #0a7d78; }
.pv-05 .mock-hero .sub { background: #0fa8a1; opacity: 0.6; }
.pv-05 .mock-hero .cta { background: #0fa8a1; }
.pv-05 .mock-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 4px;
  margin-top: 4px;
}
.pv-05 .mock-prod {
  background: #ffffff;
  border: 1px solid #e1e9ef;
  border-radius: 3px;
  aspect-ratio: 1 / 1.2;
  display: flex;
  flex-direction: column;
  padding: 3px;
  gap: 2px;
  position: relative;
}
.pv-05 .mock-prod::before {
  content: "";
  flex: 1;
  background: #e0f5f4;
  border-radius: 2px;
}
.pv-05 .mock-prod::after {
  content: "";
  height: 3px;
  background: #0fa8a1;
  border-radius: 1px;
  width: 50%;
  margin-top: 1px;
}

/* ===== 06. AutoParts Pro — Otomotif =====
   Netral abu, kuning tua, spec sheet dengan OEM number */
.pv-06 .preview-frame { background: #f7f7f5; }
.pv-06 .mock-bar { background: #ececea; }
.pv-06 .mock-bar .dot { background: rgba(0,0,0,0.15); }
.pv-06 .mock-bar .url { background: rgba(0,0,0,0.06); }
.pv-06 .mock-nav {
  background: #1c1c1a;
  border-radius: 0 0 3px 3px;
}
.pv-06 .mock-nav .logo { background: #c99a1f; }
.pv-06 .mock-nav .links span { background: rgba(255,255,255,0.4); }
.pv-06 .mock-hero {
  background: #1c1c1a;
  padding: 6px;
}
.pv-06 .mock-hero .title { background: #c99a1f; height: 3px; }
.pv-06 .mock-hero .sub { background: rgba(255,255,255,0.4); }
.pv-06 .mock-hero .cta { background: #c99a1f; }
.pv-06 .mock-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 4px;
  margin-top: 4px;
}
.pv-06 .mock-prod {
  background: #ffffff;
  border: 1px solid #e4e4df;
  border-radius: 3px;
  aspect-ratio: 1 / 0.85;
  padding: 3px;
  display: flex;
  flex-direction: column;
  gap: 2px;
  position: relative;
}
.pv-06 .mock-prod::before {
  content: "";
  height: 3px;
  background: #faf3dc;
  border-radius: 1px;
  width: 60%;
}
.pv-06 .mock-prod::after {
  content: "";
  height: 2px;
  background: #c99a1f;
  border-radius: 1px;
  width: 40%;
  margin-top: auto;
}

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
@media (max-width: 1100px) {
  .grid { grid-template-columns: repeat(2, 1fr); }
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

  .note-inner { grid-template-columns: 1fr; gap: 32px; }
  .note-actions { justify-content: flex-start; }
  .filter-section { position: relative; top: 0; }
}

@media (max-width: 640px) {
  .page-header { padding: 48px 0 40px; }
  .page-header h1 { font-size: 26px; }
  .stats-inner { gap: 20px; }
  .grid { grid-template-columns: 1fr; gap: 14px; }
  .card-body { padding: 14px 14px 16px; }
  .card h3 { font-size: 13px; }
  .card p { font-size: 11px; }
  .card-category { max-width: 100px; font-size: 9px; }
  .footer-inner { justify-content: center; text-align: center; }
  .wa-float { width: 48px; height: 48px; font-size: 19px; bottom: 18px; right: 18px; }
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
      Katalog Demo Toko Online
    </div>

    <h1>Katalog Demo Toko Online</h1>

    <p class="lede">
      Enam pilihan sistem toko online siap pakai untuk berbagai industri — dari sembako, fashion,
      elektronik, makanan, kesehatan, hingga otomotif.
      Setiap demo punya <strong>tampilan customer</strong> dan <strong>panel admin lengkap</strong>.
      <strong>Klik kartu mana pun</strong> untuk membuka demo lengkapnya (perlu token).
    </p>
  </div>
</header>

<!-- STATS -->
<div class="stats-bar">
  <div class="stats-inner">
    <div class="stat-item"><div class="num">6</div><div class="lbl">Sistem toko online</div></div>
    <div class="stat-item"><div class="num">6</div><div class="lbl">Industri berbeda</div></div>
    <div class="stat-item"><div class="num">60+</div><div class="lbl">Modul admin</div></div>
    <div class="stat-item"><div class="num">100%</div><div class="lbl">Mobile ready</div></div>
  </div>
</div>

<!-- FILTER -->
<div class="filter-section">
  <div class="filter-inner">
    <div class="filter-label">Filter Industri</div>
    <div class="filter-buttons">
      <button class="filter-btn active" data-cat="all">Semua</button>
      <button class="filter-btn" data-cat="retail">Retail & Grocery</button>
      <button class="filter-btn" data-cat="fashion">Fashion</button>
      <button class="filter-btn" data-cat="tech">Elektronik</button>
      <button class="filter-btn" data-cat="food">Makanan</button>
      <button class="filter-btn" data-cat="health">Kesehatan</button>
      <button class="filter-btn" data-cat="auto">Otomotif</button>
    </div>
  </div>
</div>

<!-- GRID -->
<section class="grid-section">
  <div class="grid-wrap">
    <div class="grid" id="grid">

      <!-- 01 FreshMart -->
      <a href="#" class="card pv-01" data-cat="retail" data-demo="FreshMart" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
              <div class="mock-grid">
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">01</span>
            <span class="card-category">Grocery / Sembako</span>
          </div>
          <h3>FreshMart</h3>
          <p>Marketplace sembako dengan kategori dinamis, keranjang persisten, dan sistem ongkir otomatis.</p>
          <div class="card-footer">
            <span class="card-tag">Retail · Green</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 02 StyleHub -->
      <a href="#" class="card pv-02" data-cat="fashion" data-demo="StyleHub" onclick="openTokenModal(event, this)">
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
              <div class="mock-grid">
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">02</span>
            <span class="card-category">Fashion Editorial</span>
          </div>
          <h3>StyleHub</h3>
          <p>Fashion marketplace dengan varian warna & size, lookbook kurasi, dan matriks stok per SKU.</p>
          <div class="card-footer">
            <span class="card-tag">Fashion · Rose</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 03 GadgetZone -->
      <a href="#" class="card pv-03" data-cat="tech" data-demo="GadgetZone" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
              <div class="mock-grid">
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">03</span>
            <span class="card-category">Elektronik & Gadget</span>
          </div>
          <h3>GadgetZone</h3>
          <p>Toko elektronik dengan tabel spesifikasi teknis, kalkulasi cicilan, dan modul service center.</p>
          <div class="card-footer">
            <span class="card-tag">Tech · Dark Cyan</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 04 FoodExpress -->
      <a href="#" class="card pv-04" data-cat="food" data-demo="FoodExpress" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="sub"></div>
              </div>
              <div class="mock-list">
                <div class="mock-item"></div>
                <div class="mock-item"></div>
                <div class="mock-item"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">04</span>
            <span class="card-category">Food Delivery</span>
          </div>
          <h3>FoodExpress</h3>
          <p>Pesan makanan dengan live order tracking, kategori emoji besar, dan floating cart di tengah.</p>
          <div class="card-footer">
            <span class="card-tag">Food · Warm Orange</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 05 MediCare -->
      <a href="#" class="card pv-05" data-cat="health" data-demo="MediCare" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
              <div class="mock-grid">
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">05</span>
            <span class="card-category">Apotek & Farmasi</span>
          </div>
          <h3>MediCare</h3>
          <p>Apotek online dengan upload resep dokter, verifikasi apoteker, dan tracking batch kadaluarsa.</p>
          <div class="card-footer">
            <span class="card-tag">Health · Clean Teal</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 06 AutoParts Pro -->
      <a href="#" class="card pv-06" data-cat="auto" data-demo="AutoParts Pro" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="mock-nav"><div class="logo"></div><div class="links"><span></span><span></span><span></span><span></span></div></div>
              <div class="mock-hero">
                <div class="title"></div>
                <div class="sub"></div>
                <div class="cta"></div>
              </div>
              <div class="mock-grid">
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
                <div class="mock-prod"></div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">06</span>
            <span class="card-category">Sparepart & Bengkel</span>
          </div>
          <h3>AutoParts Pro</h3>
          <p>Toko sparepart dengan vehicle picker, nomor OEM, fitment check, dan modul service bengkel.</p>
          <div class="card-footer">
            <span class="card-tag">Automotive · Industrial</span>
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
      <h3>Masih bingung memilih sistem toko?</h3>
      <p>
        Ceritakan jenis bisnis Anda dan kami akan merekomendasikan sistem yang paling cocok.
        Setiap sistem juga bisa disesuaikan dengan warna, logo, dan konten brand Anda sendiri.
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

  <form method="POST" action="{{ route('demo.verify', 'toko-online') }}">
    @csrf
    <input type="hidden" name="no" id="tkNo" value="01">
    <input type="text" name="token" id="tkInput" class="tk-input" placeholder="Masukkan kode token" autocomplete="off" autocapitalize="characters" required>
    <button type="submit" class="btn btn-orange tk-submit">Masuk ke Demo</button>
  </form>

  <div class="tk-divider">Belum punya token?</div>
  <a href="https://wa.me/6281999263536?text=Halo,%20saya%20mau%20minta%20token%20demo%20Toko%20Online%20FTR-Coder" target="_blank" rel="noopener" class="btn btn-outline tk-wa">
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
const DEMO_BASE = @json(url('/demo/toko-online/app'));
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
    sessionStorage.setItem('toNo', no);
    sessionStorage.setItem('toName', name);
  } else {                       // popup terbuka otomatis setelah token salah
    no = sessionStorage.getItem('toNo') || '01';
    name = sessionStorage.getItem('toName') || '';
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