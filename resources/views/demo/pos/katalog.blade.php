<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Katalog Demo POS Kasir — FTR-Coder</title>
<meta name="description" content="Dua belas demo POS siap pakai untuk berbagai industri. Lihat preview mini dan pilih yang paling cocok.">
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
  max-width: 780px;
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

/* ============ GRID — 4 kolom ============ */
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
  grid-template-columns: repeat(4, 1fr);
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

.mock-body {
  flex: 1;
  display: flex;
  gap: 5px;
  padding: 6px;
  overflow: hidden;
}

.pos-side {
  width: 24%;
  border-radius: 5px;
  padding: 6px;
  display: flex;
  flex-direction: column;
  gap: 4px;
}
.pos-side .s-logo { height: 4px; border-radius: 2px; width: 60%; margin-bottom: 3px; }
.pos-side .s-line { height: 3px; border-radius: 2px; opacity: 0.5; }
.pos-side .s-line.short { width: 60%; }
.pos-side .s-item { height: 5px; border-radius: 2px; margin-top: 2px; }

.pos-main { flex: 1; display: flex; flex-direction: column; gap: 5px; }
.pos-top { height: 14px; border-radius: 4px; padding: 0 6px; display: flex; align-items: center; gap: 4px; flex-shrink: 0; }
.pos-top .p-search { height: 5px; flex: 1; border-radius: 2px; }
.pos-top .p-chip { width: 18px; height: 6px; border-radius: 2px; }

.pos-grid { flex: 1; display: grid; grid-template-columns: repeat(3, 1fr); grid-auto-rows: 1fr; gap: 4px; }
.pos-item { border-radius: 3px; padding: 4px; display: flex; flex-direction: column; gap: 2px; position: relative; }
.pos-item .pi-icon { width: 8px; height: 8px; border-radius: 2px; margin-bottom: 1px; }
.pos-item .pi-name { height: 3px; border-radius: 1px; width: 80%; }
.pos-item .pi-price { height: 3px; border-radius: 1px; width: 50%; margin-top: auto; }

/* VARIASI PER DEMO */
.pv-01 .preview-frame { background: #f4f6fa; }
.pv-01 .mock-bar { background: #1e3a5f; }
.pv-01 .mock-body { background: #f4f6fa; }
.pv-01 .pos-side { background: #1e3a5f; }
.pv-01 .pos-side .s-logo { background: #ffb74d; }
.pv-01 .pos-side .s-line { background: #7e98b5; }
.pv-01 .pos-side .s-item { background: #3a5b82; }
.pv-01 .pos-top { background: #ffffff; border: 1px solid #d8e0ea; }
.pv-01 .pos-top .p-search { background: #eef3f9; }
.pv-01 .pos-top .p-chip { background: #1e3a5f; }
.pv-01 .pos-item { background: #ffffff; border: 1px solid #d8e0ea; }
.pv-01 .pos-item .pi-icon { background: #1e3a5f; }
.pv-01 .pos-item .pi-name { background: #b8c5d3; }
.pv-01 .pos-item .pi-price { background: #1e3a5f; }

.pv-02 .preview-frame { background: #f7f0e4; }
.pv-02 .mock-bar { background: #2a1e14; }
.pv-02 .mock-body { background: #f7f0e4; }
.pv-02 .pos-side { background: #2a1e14; }
.pv-02 .pos-side .s-logo { background: #d9a86b; }
.pv-02 .pos-side .s-line { background: #6b4d38; }
.pv-02 .pos-side .s-item { background: #d9a86b; height: 7px; }
.pv-02 .pos-top { background: #fffaf4; border: 1px solid #e2d3bf; }
.pv-02 .pos-top .p-search { background: #f0e3d0; }
.pv-02 .pos-top .p-chip { background: #c94f2b; }
.pv-02 .pos-item { background: #fffaf4; border: 1px solid #e2d3bf; }
.pv-02 .pos-item .pi-icon { background: #2a1e14; border-radius: 50%; }
.pv-02 .pos-item .pi-name { background: #c9b39a; }
.pv-02 .pos-item .pi-price { background: #a0451e; }

.pv-03 .preview-frame { background: #f5f7fa; }
.pv-03 .mock-bar { background: #1a4971; }
.pv-03 .mock-body { background: #f5f7fa; }
.pv-03 .pos-side { background: #1a4971; width: 22%; }
.pv-03 .pos-side .s-logo { background: #2ba3a3; }
.pv-03 .pos-side .s-line { background: #4a6580; }
.pv-03 .pos-side .s-item { background: #2ba3a3; }
.pv-03 .pos-top { background: #ffffff; border: 1px solid #d0dae5; }
.pv-03 .pos-top .p-search { background: #eef3f9; }
.pv-03 .pos-top .p-chip { background: #2ba3a3; }
.pv-03 .pos-item { background: #ffffff; border: 1px solid #d0dae5; }
.pv-03 .pos-item .pi-icon { background: #2ba3a3; }
.pv-03 .pos-item .pi-name { background: #b8c6d4; }
.pv-03 .pos-item .pi-price { background: #1a4971; }

.pv-04 .preview-frame { background: #1a1a1a; }
.pv-04 .mock-bar { background: #0a0a0a; }
.pv-04 .mock-body { background: #1a1a1a; }
.pv-04 .pos-side { background: #0f0f0f; border: 1px solid #2a2a2a; }
.pv-04 .pos-side .s-logo { background: #ff6b1a; }
.pv-04 .pos-side .s-line { background: #4a4a4a; }
.pv-04 .pos-side .s-item { background: #2a2a2a; height: 8px; border-left: 2px solid #ff6b1a; }
.pv-04 .pos-top { background: #0f0f0f; border: 1px solid #2a2a2a; }
.pv-04 .pos-top .p-search { background: #2a2a2a; }
.pv-04 .pos-top .p-chip { background: #ff6b1a; }
.pv-04 .pos-item { background: #1e1e1e; border: 1px solid #2a2a2a; }
.pv-04 .pos-item .pi-icon { background: #ff6b1a; }
.pv-04 .pos-item .pi-name { background: #4a4a4a; }
.pv-04 .pos-item .pi-price { background: #ff6b1a; }

.pv-05 .preview-frame { background: #faf8f5; }
.pv-05 .mock-bar { background: #1a1a1a; }
.pv-05 .mock-body { background: #faf8f5; }
.pv-05 .pos-side { background: #ffffff; border: 1px solid #ebe7e0; width: 30%; }
.pv-05 .pos-side .s-logo { background: #1a1a1a; height: 5px; }
.pv-05 .pos-side .s-line { background: #d8d4cc; }
.pv-05 .pos-side .s-item { background: #a8863f; height: 6px; }
.pv-05 .pos-top { background: #ffffff; border-bottom: 1px solid #1a1a1a; border-left: none; border-right: none; border-top: none; border-radius: 0; }
.pv-05 .pos-top .p-search { background: #ebe7e0; }
.pv-05 .pos-top .p-chip { background: #a8863f; }
.pv-05 .pos-item { background: #ffffff; border: 1px solid #ebe7e0; }
.pv-05 .pos-item .pi-icon { background: #f4f0ea; border: 1px solid #ebe7e0; }
.pv-05 .pos-item .pi-name { background: #b8b4ac; }
.pv-05 .pos-item .pi-price { background: #1a1a1a; }

.pv-06 .preview-frame { background: #f7faf9; }
.pv-06 .mock-bar { background: #0a5d3f; }
.pv-06 .mock-body { background: #f7faf9; }
.pv-06 .pos-side { background: #0a5d3f; width: 22%; }
.pv-06 .pos-side .s-logo { background: #4ade80; }
.pv-06 .pos-side .s-line { background: #6b8079; }
.pv-06 .pos-side .s-item { background: #4ade80; }
.pv-06 .pos-top { background: #ffffff; border: 2px solid #0a5d3f; }
.pv-06 .pos-top .p-search { background: #eef2f1; }
.pv-06 .pos-top .p-chip { background: #0a5d3f; height: 8px; }
.pv-06 .pos-item { background: #ffffff; border: 1px solid #e0e9e6; }
.pv-06 .pos-item .pi-icon { background: #0a5d3f; }
.pv-06 .pos-item .pi-name { background: #b8c9c2; }
.pv-06 .pos-item .pi-price { background: #0a5d3f; }

.pv-07 .preview-frame { background: #f5f0e3; }
.pv-07 .mock-bar { background: #1b4332; }
.pv-07 .mock-body { background: #f5f0e3; }
.pv-07 .pos-side { background: #1b4332; width: 22%; }
.pv-07 .pos-side .s-logo { background: #74c69d; }
.pv-07 .pos-side .s-line { background: #6b8079; }
.pv-07 .pos-side .s-item { background: #74c69d; }
.pv-07 .pos-top { background: #ffffff; border: 1.5px solid #2d6a4f; }
.pv-07 .pos-top .p-search { background: #e8ddc4; }
.pv-07 .pos-top .p-chip { background: #c8442a; }
.pv-07 .pos-item { background: #ffffff; border: 1px solid #e8ddc4; }
.pv-07 .pos-item .pi-icon { background: #2d6a4f; }
.pv-07 .pos-item .pi-name { background: #c9b992; }
.pv-07 .pos-item .pi-price { background: #c8442a; }
.pv-07 .pos-top .p-scale { width: 30px; height: 12px; border-radius: 2px; background: #1b4332; display: flex; align-items: center; justify-content: center; font-size: 6px; color: #74c69d; font-family: 'Courier New', monospace; font-weight: 700; }

.pv-08 .preview-frame { background: #f7fafc; }
.pv-08 .mock-bar { background: #ffffff; border-bottom: 3px solid #2a7fb8; }
.pv-08 .mock-bar .dot { background: rgba(42,127,184,0.35); }
.pv-08 .mock-bar .url { background: rgba(42,127,184,0.2); }
.pv-08 .mock-body { background: #f7fafc; }
.pv-08 .pos-side { background: #2a7fb8; width: 30%; }
.pv-08 .pos-side .s-logo { background: #f5c842; }
.pv-08 .pos-side .s-line { background: #a8d0e8; }
.pv-08 .pos-side .s-item { background: #f5c842; height: 8px; border-left: 2px solid #ffffff; }
.pv-08 .pos-top { background: #ffffff; border: 1px solid #d4e2ee; }
.pv-08 .pos-top .p-search { background: #e6f2fa; }
.pv-08 .pos-top .p-chip { background: #2a7fb8; }
.pv-08 .pos-item { background: #ffffff; border: 1px solid #d4e2ee; }
.pv-08 .pos-item .pi-icon { background: #2a7fb8; }
.pv-08 .pos-item .pi-name { background: #b8cfe0; }
.pv-08 .pos-item .pi-price { background: #f5c842; }

.pv-09 .preview-frame { background: #f5f8fc; }
.pv-09 .mock-bar { background: linear-gradient(90deg, #00529c 0%, #003a70 100%); }
.pv-09 .mock-bar .dot { background: rgba(255,255,255,0.35); }
.pv-09 .mock-bar .url { background: rgba(255,255,255,0.2); }
.pv-09 .mock-body { background: #f5f8fc; }
.pv-09 .pos-side { background: #003a70; width: 20%; }
.pv-09 .pos-side .s-logo { background: #f5a623; }
.pv-09 .pos-side .s-line { background: #4a8dd4; }
.pv-09 .pos-side .s-item { background: #f5a623; height: 6px; }
.pv-09 .pos-top { background: #ffffff; border: 1px solid #d5e1ee; }
.pv-09 .pos-top .p-search { background: #e6f0fa; }
.pv-09 .pos-top .p-chip { background: #00529c; }
.pv-09 .pos-item { background: #ffffff; border: 1px solid #d5e1ee; }
.pv-09 .pos-item .pi-icon { background: #00529c; }
.pv-09 .pos-item .pi-name { background: #b8c5d5; }
.pv-09 .pos-item .pi-price { background: #f5a623; }

.pv-10 .preview-frame { background: #0f0f0f; }
.pv-10 .mock-bar { background: #0a0a0a; border-bottom: 2px solid #d4af37; }
.pv-10 .mock-bar .dot { background: rgba(212,175,55,0.4); }
.pv-10 .mock-bar .url { background: rgba(212,175,55,0.2); }
.pv-10 .mock-body { background: #141414; }
.pv-10 .pos-side { background: #0a0a0a; border: 1px solid #3a3a3a; width: 22%; }
.pv-10 .pos-side .s-logo { background: #d4af37; height: 5px; }
.pv-10 .pos-side .s-line { background: #4a4a4a; }
.pv-10 .pos-side .s-item { background: #d4af37; height: 7px; }
.pv-10 .pos-top { background: #1c1c1c; border: 1px solid #d4af37; }
.pv-10 .pos-top .p-search { background: #2a2a2a; }
.pv-10 .pos-top .p-chip { background: #d4af37; }
.pv-10 .pos-item { background: linear-gradient(180deg, #1c1c1c 0%, #141414 100%); border: 1px solid #3a3a3a; }
.pv-10 .pos-item .pi-icon { background: #d4af37; }
.pv-10 .pos-item .pi-name { background: #6b6048; }
.pv-10 .pos-item .pi-price { background: #d4af37; }

.pv-11 .preview-frame { background: #f8fdfa; }
.pv-11 .mock-bar { background: #ffffff; border-bottom: 3px solid #7bc8a4; }
.pv-11 .mock-bar .dot { background: rgba(61,139,99,0.35); }
.pv-11 .mock-bar .url { background: rgba(61,139,99,0.2); }
.pv-11 .mock-body { background: #f8fdfa; }
.pv-11 .pos-side { background: #3d8b63; width: 26%; }
.pv-11 .pos-side .s-logo { background: #f5c842; height: 5px; }
.pv-11 .pos-side .s-line { background: #a8d8c0; }
.pv-11 .pos-side .s-item { background: #a67c52; height: 7px; }
.pv-11 .pos-top { background: #ffffff; border: 1px solid #cfe3d6; }
.pv-11 .pos-top .p-search { background: #d8f0e4; }
.pv-11 .pos-top .p-chip { background: #3d8b63; }
.pv-11 .pos-item { background: #ffffff; border: 1px solid #cfe3d6; }
.pv-11 .pos-item .pi-icon { background: #7bc8a4; }
.pv-11 .pos-item .pi-name { background: #b8d8c8; }
.pv-11 .pos-item .pi-price { background: #a67c52; }

.pv-12 .preview-frame { background: #0a0a0a; }
.pv-12 .mock-bar { background: #0a0a0a; border-bottom: 2px solid #a01818; }
.pv-12 .mock-bar .dot { background: rgba(245,213,0,0.4); }
.pv-12 .mock-bar .url { background: rgba(245,213,0,0.15); }
.pv-12 .mock-body { background: #0a0a0a; gap: 5px; }
.pv-12 .pos-side { background: #141414; border: 1px solid #a01818; width: 22%; }
.pv-12 .pos-side .s-logo { background: #f5d500; height: 5px; }
.pv-12 .pos-side .s-line { background: #4a4a4a; }
.pv-12 .pos-side .s-item { background: #a01818; height: 6px; }
.pv-12 .pos-top { background: #141414; border: 1px solid #2a2a2a; }
.pv-12 .pos-top .p-search { background: #2a2a2a; }
.pv-12 .pos-top .p-chip { background: #a01818; }
.pv-12 .pos-grid { display: flex; flex-direction: column; gap: 3px; justify-content: center; padding: 4px 0; }
.pv-12 .pos-item { display: flex; flex-direction: row; padding: 0; gap: 3px; background: transparent; border: none; justify-content: center; align-items: center; }
.pv-12 .pos-item .seat-dot { width: 7px; height: 7px; border-radius: 2px; background: #2a2a2a; }
.pv-12 .pos-item .seat-dot.occupied { background: #0a0a0a; border: 1px solid #2a2a2a; }
.pv-12 .pos-item .seat-dot.selected { background: #f5d500; }
.pv-12 .screen-bar { height: 3px; width: 70%; background: linear-gradient(90deg, transparent, #a01818, #d43030, #a01818, transparent); margin: 0 auto 6px; border-radius: 3px; }

/* Overlay hover */
.preview-overlay { position: absolute; inset: 0; background: rgba(10, 10, 10, 0.75); backdrop-filter: blur(2px); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s; z-index: 2; }
.card:hover .preview-overlay { opacity: 1; }
.preview-overlay-content { display: flex; align-items: center; gap: 8px; padding: 9px 16px; background: var(--orange); color: var(--bg); border-radius: 999px; font-family: var(--mono); font-size: 11px; font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; transform: translateY(6px); transition: transform 0.3s; }
.card:hover .preview-overlay-content { transform: translateY(0); }
.preview-overlay-content i { font-size: 10px; }

/* CARD CONTENT */
.card-body { padding: 18px 18px 18px; display: flex; flex-direction: column; flex: 1; }
.card-meta { display: flex; align-items: center; justify-content: space-between; gap: 8px; margin-bottom: 12px; }
.card-num { font-family: var(--mono); font-size: 10px; color: var(--ink-4); letter-spacing: 0.08em; }
.card-category { font-family: var(--mono); font-size: 10px; color: var(--orange); letter-spacing: 0.06em; padding: 3px 8px; background: rgba(224, 138, 60, 0.1); border-radius: 3px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 140px; }
.card h3 { font-size: 14px; font-weight: 600; color: var(--ink); letter-spacing: -0.01em; line-height: 1.35; margin-bottom: 10px; }
.card p { font-size: 12px; color: var(--ink-2); line-height: 1.6; font-weight: 300; margin-bottom: 14px; flex: 1; }
.card-footer { display: flex; justify-content: space-between; align-items: center; padding-top: 12px; border-top: 1px solid var(--line); gap: 8px; }
.card-tag { font-family: var(--mono); font-size: 10px; color: var(--ink-3); letter-spacing: 0.02em; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.card-arrow { width: 22px; height: 22px; border-radius: 50%; background: var(--bg-3); border: 1px solid var(--line-2); color: var(--ink-3); display: flex; align-items: center; justify-content: center; font-size: 10px; transition: all 0.25s; flex-shrink: 0; }
.card:hover .card-arrow { background: var(--orange); border-color: var(--orange); color: var(--bg); transform: translateX(2px); }

/* NOTE SECTION */
.note-section { padding: 44px 0; border-top: 1px solid var(--line); background: var(--bg-2); }
.note-inner { max-width: 1400px; margin: 0 auto; padding: 0 40px; display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
.note-text h3 { font-size: 19px; font-weight: 600; color: var(--ink); letter-spacing: -0.015em; margin-bottom: 10px; }
.note-text p { font-size: 14px; color: var(--ink-2); line-height: 1.7; font-weight: 300; }
.note-actions { display: flex; gap: 12px; flex-wrap: wrap; justify-content: flex-end; }
.btn { display: inline-flex; align-items: center; gap: 10px; padding: 13px 24px; font-size: 13px; font-weight: 500; border-radius: 6px; border: 1px solid transparent; transition: all 0.2s; cursor: pointer; font-family: inherit; white-space: nowrap; }
.btn-orange { background: var(--orange); color: var(--bg); border-color: var(--orange); }
.btn-orange:hover { background: var(--orange-2); border-color: var(--orange-2); }
.btn-outline { background: transparent; color: var(--ink-2); border-color: var(--line-2); }
.btn-outline:hover { border-color: var(--ink-2); color: var(--ink); }

/* FOOTER */
.footer { background: var(--bg); padding: 56px 0 32px; border-top: 1px solid var(--line); }
.footer-inner { max-width: 1400px; margin: 0 auto; padding: 0 40px; display: flex; justify-content: space-between; align-items: center; gap: 32px; flex-wrap: wrap; }
.footer-brand { font-family: var(--mono); font-size: 14px; font-weight: 600; color: var(--orange); }
.footer-note { font-size: 13px; color: var(--ink-3); }
.footer-social { display: flex; gap: 8px; }
.footer-social a { width: 36px; height: 36px; border-radius: 6px; background: var(--bg-2); border: 1px solid var(--line); color: var(--ink-3); display: flex; align-items: center; justify-content: center; font-size: 13px; transition: all 0.2s; }
.footer-social a:hover { background: var(--orange); border-color: var(--orange); color: var(--bg); }

/* WA FLOAT */
.wa-float { position: fixed; bottom: 24px; right: 24px; width: 54px; height: 54px; border-radius: 50%; background: #25d366; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 22px; z-index: 200; box-shadow: 0 12px 28px -10px rgba(37, 211, 102, 0.5); transition: transform 0.25s; }
.wa-float:hover { transform: translateY(-3px) scale(1.05); }

/* RESPONSIVE */
@media (max-width: 1200px) { .grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 900px) {
  .nav-inner, .page-header-inner, .stats-inner, .filter-inner, .grid-wrap, .note-inner, .footer-inner { padding: 0 24px; }
  .nav-menu { display: none; position: fixed; top: 64px; left: 0; right: 0; background: var(--bg-2); flex-direction: column; gap: 0; padding: 12px 24px; border-bottom: 1px solid var(--line); }
  .nav-menu.open { display: flex; }
  .nav-menu a { padding: 14px 0; border-bottom: 1px solid var(--line); }
  .nav-toggle { display: block; }
  .grid { grid-template-columns: repeat(2, 1fr); }
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
@media (max-width: 420px) { .grid { grid-template-columns: 1fr; } }

/* POPUP TOKEN */
.tk-overlay { position: fixed; inset: 0; background: rgba(0, 0, 0, 0.7); backdrop-filter: blur(3px); -webkit-backdrop-filter: blur(3px); z-index: 300; display: none; }
.tk-overlay.show { display: block; }

.tk-modal { position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: calc(100% - 40px); max-width: 400px; background: var(--card); border: 1px solid var(--line-2); border-radius: 12px; padding: 32px 28px 26px; z-index: 301; display: none; box-shadow: 0 24px 60px -12px rgba(0, 0, 0, 0.8); }
.tk-modal.show { display: block; }

.tk-close { position: absolute; top: 12px; right: 14px; width: 30px; height: 30px; background: none; border: none; color: var(--ink-3); font-size: 22px; line-height: 1; cursor: pointer; border-radius: 6px; transition: all 0.2s; }
.tk-close:hover { color: var(--ink); background: var(--bg-3); }

.tk-modal h3 { font-size: 19px; font-weight: 600; color: var(--ink); letter-spacing: -0.015em; margin-bottom: 6px; text-align: center; }
.tk-demo { font-family: var(--mono); font-size: 11px; color: var(--orange); text-align: center; margin-bottom: 20px; min-height: 16px; }
.tk-error { background: rgba(224, 98, 90, 0.1); border: 1px solid #e0625a; color: #e0625a; font-size: 12.5px; padding: 10px 12px; border-radius: 6px; margin-bottom: 14px; line-height: 1.5; }
.tk-input { width: 100%; padding: 13px; margin-bottom: 12px; background: var(--bg); border: 1px solid var(--line-2); border-radius: 6px; color: var(--ink); font-family: var(--mono); font-size: 16px; text-align: center; letter-spacing: 2px; text-transform: uppercase; outline: none; transition: border-color 0.2s; }
.tk-input:focus { border-color: var(--orange); }
.tk-input::placeholder { color: var(--ink-4); letter-spacing: 0.5px; text-transform: none; font-size: 13px; }
.tk-submit { width: 100%; justify-content: center; }
.tk-divider { text-align: center; color: var(--ink-4); font-size: 11px; margin: 18px 0 14px; font-family: var(--mono); letter-spacing: 0.06em; text-transform: uppercase; }
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
      Katalog Demo POS Kasir
    </div>

    <h1>Katalog Demo POS Kasir</h1>

    <p class="lede">
      Dua belas sistem POS siap pakai untuk berbagai industri — dari resto dan kafe,
      sampai apotek, bengkel, butik, minimarket, laundry, agen BRILink, toko emas,
      klinik hewan, hingga tiket bioskop. Setiap demo punya
      <strong>gaya, alur kerja, dan fitur yang berbeda</strong>.
      <strong>Klik kartu</strong> mana pun untuk membuka demo lengkapnya (perlu token).
    </p>
  </div>
</header>

<!-- STATS -->
<div class="stats-bar">
  <div class="stats-inner">
    <div class="stat-item"><div class="num">12</div><div class="lbl">Demo POS siap pakai</div></div>
    <div class="stat-item"><div class="num">12</div><div class="lbl">Industri berbeda</div></div>
  </div>
</div>

<!-- FILTER -->
<div class="filter-section">
  <div class="filter-inner">
    <div class="filter-label">Filter Kategori</div>
    <div class="filter-buttons">
      <button class="filter-btn active" data-cat="all">Semua</button>
      <button class="filter-btn" data-cat="fnb">Food & Beverage</button>
      <button class="filter-btn" data-cat="jasa">Jasa</button>
      <button class="filter-btn" data-cat="retail">Retail</button>
      <button class="filter-btn" data-cat="pasar">Pasar Tradisional</button>
      <button class="filter-btn" data-cat="khusus">Khusus</button>
      <button class="filter-btn" data-cat="hiburan">Hiburan</button>
    </div>
  </div>
</div>

<!-- GRID -->
<section class="grid-section">
  <div class="grid-wrap">
    <div class="grid" id="grid">

      <!-- 01 - RESTO -->
      <a href="#" class="card pv-01" data-cat="fnb" data-demo="Prima Resto" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-line short"></div>
                <div class="s-line"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top"><div class="p-search"></div><div class="p-chip"></div></div>
                <div class="pos-grid">
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">01</span>
            <span class="card-category">Resto / Warung</span>
          </div>
          <h3>Prima Resto</h3>
          <p>POS kasir klasik untuk resto dan warung makan. Alur cepat, struk standar, admin stok terpisah.</p>
          <div class="card-footer">
            <span class="card-tag">Klasik · Cepat</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 02 - KAFE -->
      <a href="#" class="card pv-02" data-cat="fnb" data-demo="Kopi Senja" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-line short"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top"><div class="p-search"></div><div class="p-chip"></div></div>
                <div class="pos-grid">
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">02</span>
            <span class="card-category">Kafe / Coffee Shop</span>
          </div>
          <h3>Kopi Senja</h3>
          <p>Kustomisasi minuman M/L/XL, suhu, gula, dan topping. Konsep nota kertas untuk meja & take away.</p>
          <div class="card-footer">
            <span class="card-tag">Kustomisasi</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 03 - APOTEK -->
      <a href="#" class="card pv-03" data-cat="jasa" data-demo="Sehat Farma" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-line short"></div>
                <div class="s-line"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top"><div class="p-search"></div><div class="p-chip"></div></div>
                <div class="pos-grid">
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">03</span>
            <span class="card-category">Apotek / Klinik</span>
          </div>
          <h3>Sehat Farma</h3>
          <p>Validasi resep dokter, data pasien, cek kadaluarsa. Tiga kolom padat untuk apoteker dan klinik.</p>
          <div class="card-footer">
            <span class="card-tag">Medis · Presisi</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 04 - BENGKEL -->
      <a href="#" class="card pv-04" data-cat="jasa" data-demo="Garasi Prima" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top"><div class="p-search"></div><div class="p-chip"></div></div>
                <div class="pos-grid">
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">04</span>
            <span class="card-category">Bengkel / Otomotif</span>
          </div>
          <h3>Garasi Prima</h3>
          <p>Work Order per plat kendaraan, status pengerjaan, pisah jasa dan part. Gaya industrial.</p>
          <div class="card-footer">
            <span class="card-tag">Work Order</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 05 - BUTIK -->
      <a href="#" class="card pv-05" data-cat="retail" data-demo="Atelier Noir" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-line short"></div>
                <div class="s-line"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top"><div class="p-search"></div><div class="p-chip"></div></div>
                <div class="pos-grid">
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">05</span>
            <span class="card-category">Butik / Fashion</span>
          </div>
          <h3>Atelier Noir</h3>
          <p>Pilih ukuran & warna, SKU unik, sistem voucher, struk bergaya tag butik. Editorial & elegan.</p>
          <div class="card-footer">
            <span class="card-tag">Editorial</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 06 - MINIMARKET -->
      <a href="#" class="card pv-06" data-cat="retail" data-demo="PrimaMart" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top"><div class="p-search"></div><div class="p-chip"></div></div>
                <div class="pos-grid">
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">06</span>
            <span class="card-category">Minimarket</span>
          </div>
          <h3>PrimaMart</h3>
          <p>Input barcode, member 5%, empat modul: kasir, produk, transaksi, dan laporan lengkap dengan ekspor CSV.</p>
          <div class="card-footer">
            <span class="card-tag">Dashboard · Laporan</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 07 - WARUNG SAYUR -->
      <a href="#" class="card pv-07" data-cat="pasar" data-demo="Warung Segar" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top">
                  <div class="p-search"></div>
                  <div class="p-scale">1.25</div>
                  <div class="p-chip"></div>
                </div>
                <div class="pos-grid">
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">07</span>
            <span class="card-category">Warung Sayur</span>
          </div>
          <h3>Warung Segar</h3>
          <p>Sistem timbangan berat kg/gram, satuan ikat/butir/pack, pembulatan Rp 100. Mobile pakai bottom sheet.</p>
          <div class="card-footer">
            <span class="card-tag">Timbangan · Pasar</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 08 - LAUNDRY -->
      <a href="#" class="card pv-08" data-cat="jasa" data-demo="Bersih Wangi" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top"><div class="p-search"></div><div class="p-chip"></div></div>
                <div class="pos-grid">
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">08</span>
            <span class="card-category">Laundry Kiloan</span>
          </div>
          <h3>Bersih Wangi</h3>
          <p>Siklus nota laundry dari masuk sampai diambil. Tracking status, bayar di akhir, hitung per kg atau item.</p>
          <div class="card-footer">
            <span class="card-tag">Siklus Nota</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 09 - AGEN BRILINK -->
      <a href="#" class="card pv-09" data-cat="khusus" data-demo="Konter Digital" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top"><div class="p-search"></div><div class="p-chip"></div></div>
                <div class="pos-grid">
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">09</span>
            <span class="card-category">Agen BRILink / PPOB</span>
          </div>
          <h3>Konter Digital</h3>
          <p>Jual pulsa, token listrik, transfer bank, bayar tagihan. Ada saldo agen, komisi & buku kas harian.</p>
          <div class="card-footer">
            <span class="card-tag">Saldo · Komisi</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 10 - TOKO EMAS -->
      <a href="#" class="card pv-10" data-cat="khusus" data-demo="Logam Mulia" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-line short"></div>
                <div class="s-line"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top"><div class="p-search"></div><div class="p-chip"></div></div>
                <div class="pos-grid">
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">10</span>
            <span class="card-category">Toko Emas</span>
          </div>
          <h3>Logam Mulia</h3>
          <p>Harga emas harian, ongkos pembuatan, buyback & tukar tambah. Sertifikat garansi seumur hidup.</p>
          <div class="card-footer">
            <span class="card-tag">Buyback · Emas</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 11 - KLINIK HEWAN -->
      <a href="#" class="card pv-11" data-cat="jasa" data-demo="Pet Care" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-line short"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top"><div class="p-search"></div><div class="p-chip"></div></div>
                <div class="pos-grid">
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                  <div class="pos-item"><div class="pi-icon"></div><div class="pi-name"></div><div class="pi-price"></div></div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">11</span>
            <span class="card-category">Klinik Hewan</span>
          </div>
          <h3>Pet Care</h3>
          <p>Rekam medis per hewan, grooming per kg, vaksinasi dengan reminder otomatis ke pelanggan.</p>
          <div class="card-footer">
            <span class="card-tag">Vet · Grooming</span>
            <span class="card-arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      </a>

      <!-- 12 - BIOSKOP -->
      <a href="#" class="card pv-12" data-cat="hiburan" data-demo="Cinema 21" onclick="openTokenModal(event, this)">
        <div class="preview">
          <div class="preview-frame">
            <div class="mock-bar"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="url"></span></div>
            <div class="mock-body">
              <div class="pos-side">
                <div class="s-logo"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
                <div class="s-item"></div>
              </div>
              <div class="pos-main">
                <div class="pos-top"><div class="p-search"></div><div class="p-chip"></div></div>
                <div class="screen-bar"></div>
                <div class="pos-grid">
                  <div class="pos-item">
                    <div class="seat-dot"></div><div class="seat-dot"></div><div class="seat-dot occupied"></div><div class="seat-dot"></div>
                  </div>
                  <div class="pos-item">
                    <div class="seat-dot"></div><div class="seat-dot selected"></div><div class="seat-dot"></div><div class="seat-dot occupied"></div>
                  </div>
                  <div class="pos-item">
                    <div class="seat-dot"></div><div class="seat-dot"></div><div class="seat-dot"></div><div class="seat-dot"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="preview-overlay"><div class="preview-overlay-content">Lihat Demo <i class="fas fa-arrow-right"></i></div></div>
        </div>
        <div class="card-body">
          <div class="card-meta">
            <span class="card-num">12</span>
            <span class="card-category">Tiket Bioskop</span>
          </div>
          <h3>Cinema 21</h3>
          <p>Pilih film, jadwal, dan kursi di denah studio. Ada snack bar, e-ticket dengan QR, dan 3 zona kursi.</p>
          <div class="card-footer">
            <span class="card-tag">Denah Kursi</span>
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
      <h3>Butuh POS untuk industri lain?</h3>
      <p>
        Dua belas demo ini adalah titik awal. Kalau bisnis Anda butuh alur atau fitur khusus
        — dari klinik gigi, percetakan, rental PS, sampai SPBU mini — kami bisa buat dari nol
        dengan gaya yang sesuai brand Anda.
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

<!-- POPUP TOKEN (DITAMBAHKAN AGAR POPUP FUNCTION) -->
<div class="tk-overlay" id="tkOverlay" onclick="closeTokenModal()"></div>
<div class="tk-modal" id="tkModal" role="dialog" aria-modal="true" aria-labelledby="tkTitle">
  <button type="button" class="tk-close" onclick="closeTokenModal()" aria-label="Tutup">&times;</button>
  <h3 id="tkTitle">Masukkan Token</h3>
  <div class="tk-demo" id="tkDemoName"></div>

  @if ($errors->has('token'))
    <div class="tk-error">{{ $errors->first('token') }}</div>
  @endif

  <form method="POST" action="{{ route('demo.verify', 'pos') }}">
    @csrf
    <input type="hidden" name="no" id="tkNo" value="01">
    <input type="text" name="token" id="tkInput" class="tk-input" placeholder="Masukkan kode token" autocomplete="off" autocapitalize="characters" required>
    <button type="submit" class="btn btn-orange tk-submit">Masuk ke Demo</button>
  </form>

  <div class="tk-divider">Belum punya token?</div>
  <a href="https://wa.me/6281999263536?text=Halo,%20saya%20mau%20minta%20token%20demo%20POS%20Kasir%20FTR-Coder" target="_blank" rel="noopener" class="btn btn-outline tk-wa">
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
const DEMO_BASE = @json(url('/demo/pos/app'));
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
    sessionStorage.setItem('posNo', no);
    sessionStorage.setItem('posName', name);
  } else {                       // popup terbuka otomatis setelah token salah
    no = sessionStorage.getItem('posNo') || '01';
    name = sessionStorage.getItem('posName') || '';
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