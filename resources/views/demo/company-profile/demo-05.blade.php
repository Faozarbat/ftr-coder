@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rangka — Platform Digital untuk Tim yang Bekerja Serius</title>
<meta name="description" content="Rangka — platform SaaS untuk membantu tim produk merancang, membangun, dan merilis perangkat lunak dengan lebih rapi.">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
* { margin: 0; padding: 0; box-sizing: border-box; }

:root {
  --bg: #ffffff;
  --bg-2: #fafafa;
  --bg-3: #f4f4f5;
  --line: #e4e4e7;
  --line-2: #d4d4d8;
  --ink: #18181b;
  --ink-2: #3f3f46;
  --ink-3: #71717a;
  --ink-4: #a1a1aa;
  --green: #166534;
  --green-2: #15803d;
  --green-soft: #f0fdf4;
  --green-line: #bbf7d0;
  --amber: #b45309;
  --red: #b91c1c;
  --sans: 'Inter', -apple-system, sans-serif;
  --mono: 'JetBrains Mono', monospace;
  --radius: 10px;
  --radius-lg: 14px;
  --shadow-sm: 0 1px 2px rgba(24,24,27,0.04);
  --shadow: 0 4px 12px rgba(24,24,27,0.06);
  --shadow-lg: 0 20px 50px -20px rgba(24,24,27,0.18);
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

::selection { background: var(--green); color: #fff; }
a { color: inherit; text-decoration: none; }
img { display: block; max-width: 100%; }
button { font-family: inherit; cursor: pointer; }

/* ============ LAYOUT ============ */
.wrap {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
}

.wrap-md {
  max-width: 960px;
  margin: 0 auto;
  padding: 0 24px;
}

/* ============ TOP ANNOUNCE ============ */
.announce {
  background: var(--ink);
  color: #fff;
  font-size: 13px;
  padding: 10px 0;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  flex-wrap: wrap;
}

.announce-badge {
  background: var(--green-2);
  color: #fff;
  padding: 2px 8px;
  border-radius: 4px;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.03em;
  text-transform: uppercase;
}

.announce a {
  text-decoration: underline;
  text-underline-offset: 3px;
  font-weight: 500;
}

/* ============ NAVBAR ============ */
.nav {
  border-bottom: 1px solid var(--line);
  position: sticky;
  top: 0;
  background: rgba(255, 255, 255, 0.85);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  z-index: 100;
}

.nav-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
  height: 64px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.brand {
  font-size: 18px;
  font-weight: 700;
  letter-spacing: -0.02em;
  display: flex;
  align-items: center;
  gap: 9px;
  color: var(--ink);
}

.brand-logo {
  width: 26px;
  height: 26px;
  background: var(--ink);
  border-radius: 7px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 13px;
  font-weight: 800;
  position: relative;
}

.brand-logo::after {
  content: '';
  position: absolute;
  top: 4px;
  right: 4px;
  width: 5px;
  height: 5px;
  background: var(--green-2);
  border-radius: 50%;
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
  padding: 8px 14px;
  border-radius: 8px;
  transition: all 0.15s;
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.nav-menu a:hover {
  background: var(--bg-3);
  color: var(--ink);
}

.nav-menu a i {
  font-size: 10px;
  color: var(--ink-4);
}

.nav-actions {
  display: flex;
  align-items: center;
  gap: 8px;
}

.btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 9px 16px;
  font-size: 14px;
  font-weight: 500;
  border-radius: 8px;
  border: 1px solid transparent;
  transition: all 0.15s;
  cursor: pointer;
  font-family: inherit;
  white-space: nowrap;
}

.btn-ghost {
  color: var(--ink-2);
  background: transparent;
}

.btn-ghost:hover { background: var(--bg-3); }

.btn-dark {
  background: var(--ink);
  color: #fff;
  border-color: var(--ink);
}

.btn-dark:hover { background: var(--ink-2); }

.btn-green {
  background: var(--green);
  color: #fff;
  border-color: var(--green);
}

.btn-green:hover { background: var(--green-2); border-color: var(--green-2); }

.btn-outline {
  background: transparent;
  color: var(--ink);
  border-color: var(--line-2);
}

.btn-outline:hover {
  border-color: var(--ink);
  background: var(--bg-2);
}

.btn-lg {
  padding: 12px 22px;
  font-size: 15px;
  border-radius: 10px;
}

.nav-toggle {
  display: none;
  background: none;
  border: none;
  font-size: 18px;
  color: var(--ink);
  padding: 8px;
}

/* ============ HERO ============ */
.hero {
  padding: 80px 0 60px;
  border-bottom: 1px solid var(--line);
  overflow: hidden;
  position: relative;
}

.hero-bg-grid {
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(var(--line) 1px, transparent 1px),
    linear-gradient(90deg, var(--line) 1px, transparent 1px);
  background-size: 56px 56px;
  opacity: 0.35;
  mask-image: radial-gradient(ellipse 80% 60% at 50% 0%, #000 30%, transparent 80%);
  -webkit-mask-image: radial-gradient(ellipse 80% 60% at 50% 0%, #000 30%, transparent 80%);
  pointer-events: none;
}

.hero-inner {
  position: relative;
  text-align: center;
  max-width: 900px;
  margin: 0 auto;
}

.hero-pill {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 5px 12px 5px 6px;
  background: var(--bg-2);
  border: 1px solid var(--line);
  border-radius: 999px;
  font-size: 13px;
  color: var(--ink-2);
  margin-bottom: 28px;
  font-weight: 500;
}

.hero-pill-tag {
  padding: 2px 8px;
  background: var(--green-soft);
  color: var(--green);
  border-radius: 999px;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.02em;
  border: 1px solid var(--green-line);
}

.hero h1 {
  font-size: clamp(38px, 5.5vw, 68px);
  font-weight: 800;
  line-height: 1.05;
  letter-spacing: -0.035em;
  color: var(--ink);
  margin-bottom: 24px;
}

.hero h1 .accent {
  color: var(--green);
  position: relative;
  display: inline-block;
}

.hero h1 .accent::after {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  bottom: 6px;
  height: 10px;
  background: var(--green-soft);
  z-index: -1;
  border-radius: 2px;
}

.hero-lede {
  font-size: 18px;
  color: var(--ink-2);
  max-width: 640px;
  margin: 0 auto 40px;
  line-height: 1.65;
}

.hero-actions {
  display: flex;
  gap: 12px;
  justify-content: center;
  flex-wrap: wrap;
  margin-bottom: 20px;
}

.hero-note {
  font-size: 13px;
  color: var(--ink-3);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 18px;
  flex-wrap: wrap;
}

.hero-note span { display: inline-flex; align-items: center; gap: 6px; }

.hero-note i {
  color: var(--green);
  font-size: 12px;
}

/* ============ DASHBOARD MOCKUP ============ */
.mock {
  margin: 60px auto 0;
  max-width: 1040px;
  border: 1px solid var(--line);
  border-radius: 14px;
  background: var(--bg);
  box-shadow: var(--shadow-lg);
  overflow: hidden;
  position: relative;
}

.mock-bar {
  height: 40px;
  background: var(--bg-2);
  border-bottom: 1px solid var(--line);
  display: flex;
  align-items: center;
  padding: 0 16px;
  gap: 8px;
}

.mock-bar span {
  width: 11px;
  height: 11px;
  border-radius: 50%;
  background: var(--line-2);
}

.mock-bar .url {
  margin-left: 16px;
  padding: 4px 12px;
  background: var(--bg);
  border: 1px solid var(--line);
  border-radius: 6px;
  font-family: var(--mono);
  font-size: 11px;
  color: var(--ink-3);
  flex: 1;
  max-width: 300px;
}

.mock-body {
  display: grid;
  grid-template-columns: 200px 1fr 240px;
  min-height: 380px;
}

.mock-side {
  background: var(--bg-2);
  border-right: 1px solid var(--line);
  padding: 16px 12px;
}

.mock-side-item {
  padding: 7px 10px;
  border-radius: 6px;
  font-size: 13px;
  color: var(--ink-3);
  display: flex;
  align-items: center;
  gap: 9px;
  margin-bottom: 2px;
}

.mock-side-item.active {
  background: var(--bg);
  color: var(--ink);
  font-weight: 500;
  box-shadow: var(--shadow-sm);
}

.mock-side-item i { font-size: 11px; width: 14px; }

.mock-main {
  padding: 24px;
  border-right: 1px solid var(--line);
}

.mock-title {
  font-size: 16px;
  font-weight: 700;
  letter-spacing: -0.01em;
  margin-bottom: 4px;
}

.mock-sub {
  font-size: 12px;
  color: var(--ink-3);
  margin-bottom: 20px;
}

.mock-stats {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 12px;
  margin-bottom: 24px;
}

.mock-stat {
  padding: 14px;
  border: 1px solid var(--line);
  border-radius: 10px;
  background: var(--bg);
}

.mock-stat-label {
  font-size: 11px;
  color: var(--ink-3);
  margin-bottom: 6px;
  display: flex;
  align-items: center;
  gap: 5px;
}

.mock-stat-val {
  font-size: 22px;
  font-weight: 700;
  letter-spacing: -0.02em;
  font-family: var(--sans);
}

.mock-stat-val.pos { color: var(--green-2); }

.mock-stat-delta {
  font-size: 11px;
  color: var(--green-2);
  font-weight: 500;
  margin-left: 6px;
}

.mock-chart {
  height: 100px;
  display: flex;
  align-items: flex-end;
  gap: 8px;
  padding: 16px 0 0;
  border-top: 1px solid var(--line);
}

.mock-bar-col {
  flex: 1;
  background: var(--line);
  border-radius: 3px 3px 0 0;
  position: relative;
}

.mock-bar-col.active { background: var(--green); }

.mock-bar-col:nth-child(1) { height: 35%; }
.mock-bar-col:nth-child(2) { height: 55%; }
.mock-bar-col:nth-child(3) { height: 42%; }
.mock-bar-col:nth-child(4) { height: 78%; }
.mock-bar-col:nth-child(5) { height: 62%; }
.mock-bar-col:nth-child(6) { height: 88%; }
.mock-bar-col:nth-child(7) { height: 70%; }
.mock-bar-col:nth-child(8) { height: 100%; }

.mock-aside {
  padding: 20px 16px;
  background: var(--bg-2);
}

.mock-aside-title {
  font-size: 11px;
  font-weight: 600;
  color: var(--ink-3);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 14px;
}

.mock-activity {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  padding: 10px 0;
  border-bottom: 1px solid var(--line);
}

.mock-activity:last-child { border-bottom: none; }

.mock-dot {
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background: var(--bg-3);
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 9px;
  color: var(--ink-2);
  font-weight: 600;
  border: 1px solid var(--line);
}

.mock-activity-text {
  font-size: 12px;
  color: var(--ink-2);
  line-height: 1.4;
}

.mock-activity-text b { color: var(--ink); font-weight: 600; }
.mock-activity-time { font-size: 11px; color: var(--ink-4); margin-top: 2px; }

/* ============ TRUST STRIP ============ */
.trust {
  padding: 40px 0 60px;
  border-bottom: 1px solid var(--line);
  background: var(--bg-2);
}

.trust-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 24px;
  text-align: center;
}

.trust-label {
  font-size: 12px;
  font-weight: 600;
  color: var(--ink-3);
  letter-spacing: 0.12em;
  text-transform: uppercase;
  margin-bottom: 24px;
}

.trust-logos {
  display: flex;
  gap: 56px;
  justify-content: center;
  flex-wrap: wrap;
  align-items: center;
}

.trust-logos span {
  font-size: 17px;
  font-weight: 700;
  color: var(--ink-4);
  letter-spacing: -0.02em;
  transition: color 0.2s;
}

.trust-logos span:hover { color: var(--ink-2); }

/* ============ SECTION BASE ============ */
.section {
  padding: 96px 0;
  border-bottom: 1px solid var(--line);
}

.sec-head { margin-bottom: 56px; max-width: 720px; }

.sec-head.center {
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}

.sec-tag {
  display: inline-block;
  padding: 4px 10px;
  background: var(--bg-3);
  border: 1px solid var(--line);
  border-radius: 6px;
  font-size: 12px;
  font-weight: 600;
  color: var(--ink-2);
  margin-bottom: 16px;
  letter-spacing: 0.01em;
}

.sec-head h2 {
  font-size: clamp(28px, 3.6vw, 42px);
  font-weight: 800;
  line-height: 1.1;
  letter-spacing: -0.03em;
  color: var(--ink);
  margin-bottom: 16px;
}

.sec-head h2 .accent { color: var(--green); }

.sec-head p {
  font-size: 17px;
  color: var(--ink-2);
  line-height: 1.7;
}

/* ============ FEATURES ============ */
.features-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1px;
  background: var(--line);
  border: 1px solid var(--line);
  border-radius: var(--radius-lg);
  overflow: hidden;
}

.feature {
  background: var(--bg);
  padding: 32px 28px;
  transition: background 0.2s;
}

.feature:hover { background: var(--bg-2); }

.feature-icon {
  width: 40px;
  height: 40px;
  border-radius: 9px;
  background: var(--bg-3);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
  color: var(--ink);
  margin-bottom: 20px;
  border: 1px solid var(--line);
}

.feature:hover .feature-icon {
  background: var(--green);
  color: #fff;
  border-color: var(--green);
}

.feature h3 {
  font-size: 17px;
  font-weight: 700;
  letter-spacing: -0.015em;
  color: var(--ink);
  margin-bottom: 10px;
}

.feature p {
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.65;
  margin-bottom: 18px;
}

.feature-link {
  font-size: 13px;
  font-weight: 600;
  color: var(--green);
  display: inline-flex;
  align-items: center;
  gap: 6px;
  transition: gap 0.2s;
}

.feature:hover .feature-link { gap: 10px; }

/* ============ HOW IT WORKS ============ */
.steps {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 40px;
  position: relative;
}

.step {
  position: relative;
}

.step-num {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: var(--ink);
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  font-weight: 700;
  margin-bottom: 24px;
  font-family: var(--mono);
}

.step h3 {
  font-size: 20px;
  font-weight: 700;
  letter-spacing: -0.02em;
  margin-bottom: 12px;
}

.step p {
  font-size: 15px;
  color: var(--ink-2);
  line-height: 1.7;
}

.step-code {
  margin-top: 20px;
  padding: 14px 16px;
  background: var(--ink);
  border-radius: 10px;
  font-family: var(--mono);
  font-size: 12px;
  color: #e4e4e7;
  line-height: 1.6;
  overflow-x: auto;
}

.step-code .k { color: #a5b4fc; }
.step-code .s { color: #86efac; }
.step-code .c { color: #71717a; }
.step-code .f { color: #fcd34d; }

/* ============ METRICS ============ */
.metrics {
  background: var(--bg-2);
}

.metrics-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 32px;
  padding: 20px 0;
}

.metric {
  text-align: left;
  border-left: 2px solid var(--green);
  padding-left: 20px;
}

.metric-num {
  font-size: 44px;
  font-weight: 800;
  letter-spacing: -0.03em;
  color: var(--ink);
  line-height: 1;
  margin-bottom: 10px;
  display: flex;
  align-items: baseline;
  gap: 3px;
}

.metric-num small {
  font-size: 20px;
  font-weight: 700;
  color: var(--green);
}

.metric-lbl {
  font-size: 14px;
  color: var(--ink-3);
  line-height: 1.5;
}

/* ============ PRICING ============ */
.pricing-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.plan {
  border: 1px solid var(--line);
  border-radius: var(--radius-lg);
  padding: 32px 28px;
  background: var(--bg);
  display: flex;
  flex-direction: column;
  transition: all 0.2s;
  position: relative;
}

.plan:hover {
  border-color: var(--line-2);
  box-shadow: var(--shadow);
}

.plan.featured {
  border-color: var(--ink);
  box-shadow: var(--shadow-lg);
}

.plan-badge {
  position: absolute;
  top: -11px;
  left: 50%;
  transform: translateX(-50%);
  padding: 4px 12px;
  background: var(--green);
  color: #fff;
  font-size: 11px;
  font-weight: 600;
  border-radius: 999px;
  letter-spacing: 0.03em;
  text-transform: uppercase;
}

.plan-name {
  font-size: 14px;
  font-weight: 600;
  color: var(--ink-3);
  margin-bottom: 12px;
  letter-spacing: 0.02em;
  text-transform: uppercase;
}

.plan-price {
  font-size: 40px;
  font-weight: 800;
  letter-spacing: -0.03em;
  color: var(--ink);
  line-height: 1;
  margin-bottom: 6px;
  display: flex;
  align-items: baseline;
  gap: 4px;
}

.plan-price small {
  font-size: 15px;
  font-weight: 500;
  color: var(--ink-3);
  letter-spacing: 0;
}

.plan-desc {
  font-size: 14px;
  color: var(--ink-2);
  margin-bottom: 24px;
  padding-bottom: 24px;
  border-bottom: 1px solid var(--line);
}

.plan-feats {
  list-style: none;
  display: grid;
  gap: 12px;
  margin-bottom: 28px;
  flex: 1;
}

.plan-feats li {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  font-size: 14px;
  color: var(--ink-2);
  line-height: 1.55;
}

.plan-feats i {
  color: var(--green);
  font-size: 12px;
  margin-top: 4px;
  flex-shrink: 0;
}

.plan .btn { width: 100%; justify-content: center; }

/* ============ TESTIMONIALS ============ */
.quotes {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

.quote {
  padding: 28px 26px;
  border: 1px solid var(--line);
  border-radius: var(--radius-lg);
  background: var(--bg);
  display: flex;
  flex-direction: column;
  transition: all 0.25s;
}

.quote:hover {
  border-color: var(--line-2);
  box-shadow: var(--shadow);
  transform: translateY(-2px);
}

.quote-text {
  font-size: 15px;
  color: var(--ink-2);
  line-height: 1.7;
  margin-bottom: 24px;
  flex: 1;
}

.quote-author {
  display: flex;
  align-items: center;
  gap: 12px;
  padding-top: 20px;
  border-top: 1px solid var(--line);
}

.quote-author img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  object-fit: cover;
}

.quote-name {
  font-size: 14px;
  font-weight: 600;
  color: var(--ink);
  line-height: 1.3;
}

.quote-role {
  font-size: 12px;
  color: var(--ink-3);
  line-height: 1.3;
}

.quote-mark {
  font-size: 32px;
  color: var(--line-2);
  line-height: 1;
  margin-bottom: 12px;
  font-family: Georgia, serif;
}

/* ============ FAQ ============ */
.faq {
  max-width: 760px;
  margin: 0 auto;
}

.faq-item {
  border-bottom: 1px solid var(--line);
}

.faq-q {
  padding: 22px 0;
  font-size: 16px;
  font-weight: 600;
  color: var(--ink);
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  gap: 20px;
  letter-spacing: -0.01em;
  transition: color 0.2s;
}

.faq-q:hover { color: var(--green); }

.faq-q i {
  font-size: 14px;
  color: var(--ink-3);
  transition: transform 0.25s;
  flex-shrink: 0;
}

.faq-item.open .faq-q i { transform: rotate(45deg); color: var(--green); }

.faq-a {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s ease, padding 0.3s ease;
  color: var(--ink-2);
  font-size: 15px;
  line-height: 1.7;
}

.faq-item.open .faq-a {
  max-height: 400px;
  padding-bottom: 22px;
}

/* ============ CTA ============ */
.cta-section {
  padding: 80px 0;
  background: var(--ink);
  color: #fff;
}

.cta-inner {
  display: grid;
  grid-template-columns: 1.6fr 1fr;
  gap: 60px;
  align-items: center;
}

.cta-inner h2 {
  font-size: clamp(28px, 3.6vw, 44px);
  font-weight: 800;
  letter-spacing: -0.03em;
  line-height: 1.1;
  margin-bottom: 16px;
}

.cta-inner h2 .accent { color: #86efac; }

.cta-inner p {
  font-size: 16px;
  color: rgba(255,255,255,0.72);
  line-height: 1.7;
  max-width: 480px;
}

.cta-actions {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.btn-light {
  background: #fff;
  color: var(--ink);
  border-color: #fff;
}

.btn-light:hover { background: var(--bg-3); border-color: var(--bg-3); }

.btn-ghost-light {
  background: transparent;
  color: #fff;
  border-color: rgba(255,255,255,0.2);
}

.btn-ghost-light:hover {
  border-color: rgba(255,255,255,0.5);
  background: rgba(255,255,255,0.05);
}

/* ============ FOOTER ============ */
.footer {
  padding: 72px 0 32px;
  background: var(--bg);
  border-top: 1px solid var(--line);
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
  gap: 48px;
  padding-bottom: 56px;
  border-bottom: 1px solid var(--line);
  margin-bottom: 32px;
}

.footer-brand {
  font-size: 18px;
  font-weight: 700;
  letter-spacing: -0.02em;
  margin-bottom: 16px;
  display: flex;
  align-items: center;
  gap: 9px;
}

.footer-desc {
  font-size: 14px;
  color: var(--ink-3);
  line-height: 1.7;
  max-width: 300px;
  margin-bottom: 20px;
}

.footer-status {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 12px;
  border: 1px solid var(--line);
  border-radius: 999px;
  font-size: 12px;
  color: var(--ink-2);
  background: var(--bg-2);
}

.footer-status .dot {
  width: 6px;
  height: 6px;
  background: var(--green-2);
  border-radius: 50%;
}

.footer-col h4 {
  font-size: 13px;
  font-weight: 600;
  color: var(--ink);
  margin-bottom: 16px;
  letter-spacing: 0.01em;
}

.footer-col ul { list-style: none; }
.footer-col li { margin-bottom: 10px; }

.footer-col a {
  font-size: 14px;
  color: var(--ink-3);
  transition: color 0.15s;
}

.footer-col a:hover { color: var(--ink); }

.footer-bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 16px;
  font-size: 13px;
  color: var(--ink-3);
}

.footer-bottom-links {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

.footer-social {
  display: flex;
  gap: 6px;
}

.footer-social a {
  width: 34px;
  height: 34px;
  border-radius: 8px;
  border: 1px solid var(--line);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--ink-2);
  font-size: 13px;
  transition: all 0.2s;
}

.footer-social a:hover {
  background: var(--ink);
  color: #fff;
  border-color: var(--ink);
}

/* ============ REVEAL ============ */
.reveal {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}

.reveal.on {
  opacity: 1;
  transform: translateY(0);
}

/* ============ RESPONSIVE ============ */
@media (max-width: 1024px) {
  .mock-body { grid-template-columns: 180px 1fr; }
  .mock-aside { display: none; }
  .features-grid,
  .steps,
  .pricing-grid,
  .quotes { grid-template-columns: repeat(2, 1fr); }
  .metrics-grid { grid-template-columns: repeat(2, 1fr); gap: 28px; }
  .footer-grid { grid-template-columns: 1fr 1fr 1fr; gap: 40px; }
  .footer-grid > div:first-child { grid-column: span 3; }
}

@media (max-width: 768px) {
  .nav-menu {
    display: none;
    position: fixed;
    top: 64px;
    left: 0;
    right: 0;
    background: var(--bg);
    flex-direction: column;
    padding: 16px;
    gap: 4px;
    border-bottom: 1px solid var(--line);
    align-items: stretch;
    z-index: 99;
  }

  .nav-menu.open { display: flex; }
  .nav-menu a { padding: 12px 14px; }
  .nav-toggle { display: block; }
  .nav-actions .btn-ghost { display: none; }

  .cta-inner { grid-template-columns: 1fr; gap: 40px; }
  .hero { padding: 60px 0 40px; }
  .section { padding: 72px 0; }

  .features-grid,
  .steps,
  .pricing-grid,
  .quotes { grid-template-columns: 1fr; }

  .metrics-grid { grid-template-columns: 1fr; gap: 24px; }

  .footer-grid {
    grid-template-columns: 1fr 1fr;
    gap: 32px;
  }

  .footer-grid > div:first-child { grid-column: span 2; }

  .mock-body { grid-template-columns: 1fr; }
  .mock-side { display: none; }
  .mock-stats { grid-template-columns: 1fr 1fr; }

  .announce { font-size: 12px; padding: 8px 16px; }
}

@media (max-width: 480px) {
  .hero h1 { font-size: 34px; }
  .metric-num { font-size: 36px; }
  .plan-price { font-size: 34px; }
  .mock-stats { grid-template-columns: 1fr; }
}

/* ============ WA FLOAT ============ */
.wa-float {
  position: fixed;
  bottom: 24px;
  right: 24px;
  width: 52px;
  height: 52px;
  background: var(--green);
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  box-shadow: 0 12px 28px -8px rgba(22,101,52,0.5);
  z-index: 200;
  transition: all 0.2s;
}

.wa-float:hover {
  background: var(--green-2);
  transform: translateY(-3px);
}
</style>
</head>
<body>

<!-- ANNOUNCE -->
<div class="announce">
  <span class="announce-badge">Baru</span>
  Rangka 3.0 sudah tersedia untuk semua pelanggan
  <a href="#">Lihat catatan rilis</a>
</div>

<!-- NAV -->
<nav class="nav">
  <div class="nav-inner">
    <a href="#" class="brand">
      <span class="brand-logo">R</span>
      Rangka
    </a>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#fitur">Fitur <i class="fas fa-chevron-down"></i></a></li>
      <li><a href="#cara-kerja">Cara Kerja</a></li>
      <li><a href="#harga">Harga</a></li>
      <li><a href="#faq">FAQ</a></li>
    </ul>

    <div class="nav-actions">
      <a href="#" class="btn btn-ghost">Masuk</a>
      <a href="#harga" class="btn btn-dark">Coba Gratis</a>
      <button class="nav-toggle" id="navToggle" aria-label="Menu">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>
</nav>

<!-- HERO -->
<header class="hero">
  <div class="hero-bg-grid"></div>
  <div class="wrap">
    <div class="hero-inner">

      <div class="hero-pill">
        <span class="hero-pill-tag">v3.0</span>
        Sekarang dengan kolaborasi waktu-nyata
      </div>

      <h1>
        Platform untuk tim yang <span class="accent">bekerja serius.</span>
      </h1>

      <p class="hero-lede">
        Rangka menyatukan perencanaan, pengembangan, dan peluncuran produk dalam satu tempat. Dibuat untuk tim yang benci pekerjaan terulang dan rapat tanpa ujung.
      </p>

      <div class="hero-actions">
        <a href="#" class="btn btn-green btn-lg">
          Mulai Uji Coba 14 Hari <i class="fas fa-arrow-right"></i>
        </a>
        <a href="#" class="btn btn-outline btn-lg">
          <i class="fab fa-github"></i> Lihat di GitHub
        </a>
      </div>

      <div class="hero-note">
        <span><i class="fas fa-check"></i> Tanpa kartu kredit</span>
        <span><i class="fas fa-check"></i> Batal kapan saja</span>
        <span><i class="fas fa-check"></i> Data di server Indonesia</span>
      </div>

    </div>

    <!-- DASHBOARD MOCK -->
    <div class="mock reveal">
      <div class="mock-bar">
        <span></span><span></span><span></span>
        <div class="url">app.rangka.id/dashboard</div>
      </div>

      <div class="mock-body">
        <div class="mock-side">
          <div class="mock-side-item active"><i class="fas fa-chart-line"></i> Ringkasan</div>
          <div class="mock-side-item"><i class="fas fa-diagram-project"></i> Proyek</div>
          <div class="mock-side-item"><i class="fas fa-list-check"></i> Tugas</div>
          <div class="mock-side-item"><i class="fas fa-users"></i> Tim</div>
          <div class="mock-side-item"><i class="fas fa-clock-rotate-left"></i> Aktivitas</div>
          <div class="mock-side-item"><i class="fas fa-chart-pie"></i> Laporan</div>
          <div class="mock-side-item"><i class="fas fa-gear"></i> Pengaturan</div>
        </div>

        <div class="mock-main">
          <div class="mock-title">Ringkasan Mingguan</div>
          <div class="mock-sub">Periode 13 - 19 Mei 2025</div>

          <div class="mock-stats">
            <div class="mock-stat">
              <div class="mock-stat-label"><i class="fas fa-circle-check" style="color:var(--green-2)"></i> Tugas Selesai</div>
              <div class="mock-stat-val">148 <span class="mock-stat-delta">+12%</span></div>
            </div>
            <div class="mock-stat">
              <div class="mock-stat-label"><i class="fas fa-rocket"></i> Rilis</div>
              <div class="mock-stat-val">6 <span class="mock-stat-delta">+2</span></div>
            </div>
            <div class="mock-stat">
              <div class="mock-stat-label"><i class="fas fa-triangle-exclamation" style="color:var(--amber)"></i> Butuh Perhatian</div>
              <div class="mock-stat-val" style="color:var(--amber)">3</div>
            </div>
          </div>

          <div class="mock-chart">
            <div class="mock-bar-col"></div>
            <div class="mock-bar-col"></div>
            <div class="mock-bar-col"></div>
            <div class="mock-bar-col active"></div>
            <div class="mock-bar-col"></div>
            <div class="mock-bar-col"></div>
            <div class="mock-bar-col"></div>
            <div class="mock-bar-col active"></div>
          </div>
        </div>

        <div class="mock-aside">
          <div class="mock-aside-title">Aktivitas Terbaru</div>

          <div class="mock-activity">
            <div class="mock-dot">AD</div>
            <div>
              <div class="mock-activity-text"><b>Andi</b> merilis versi 2.4.1</div>
              <div class="mock-activity-time">2 menit lalu</div>
            </div>
          </div>

          <div class="mock-activity">
            <div class="mock-dot">SR</div>
            <div>
              <div class="mock-activity-text"><b>Sari</b> menutup sprint 18</div>
              <div class="mock-activity-time">18 menit lalu</div>
            </div>
          </div>

          <div class="mock-activity">
            <div class="mock-dot">BW</div>
            <div>
              <div class="mock-activity-text"><b>Bayu</b> menambahkan 4 tugas</div>
              <div class="mock-activity-time">1 jam lalu</div>
            </div>
          </div>

          <div class="mock-activity">
            <div class="mock-dot">DP</div>
            <div>
              <div class="mock-activity-text"><b>Dewi</b> memperbarui dokumen</div>
              <div class="mock-activity-time">3 jam lalu</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- TRUST STRIP -->
<div class="trust">
  <div class="trust-inner">
    <div class="trust-label">Digunakan oleh tim produk di</div>
    <div class="trust-logos">
      <span>WARUNGBUILT</span>
      <span>NusaPay</span>
      <span>KOtaku</span>
      <span>GerakCepat</span>
      <span>RuangData</span>
      <span>Sinergi</span>
    </div>
  </div>
</div>

<!-- FEATURES -->
<section class="section" id="fitur">
  <div class="wrap">
    <div class="sec-head center reveal">
      <span class="sec-tag">Fitur Utama</span>
      <h2>Semua yang tim Anda butuhkan, <span class="accent">tanpa yang tidak perlu.</span></h2>
      <p>Kami sengaja tidak menambahkan fitur hanya demi panjang daftar. Setiap bagian yang ada di Rangka dirancang karena tim kami sendiri memakainya setiap hari.</p>
    </div>

    <div class="features-grid">

      <div class="feature reveal">
        <div class="feature-icon"><i class="fas fa-diagram-project"></i></div>
        <h3>Perencanaan Visual</h3>
        <p>Papan kanban, timeline, dan peta jalan dalam satu tampilan yang sama. Tidak perlu berpindah tab untuk melihat gambaran besar.</p>
        <a href="#" class="feature-link">Pelajari lebih lanjut <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="feature reveal">
        <div class="feature-icon"><i class="fas fa-code-branch"></i></div>
        <h3>Terhubung dengan Git</h3>
        <p>Setiap commit, pull request, dan merge otomatis muncul di kartu tugas terkait. Riwayat proyek jadi lebih jelas tanpa update manual.</p>
        <a href="#" class="feature-link">Pelajari lebih lanjut <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="feature reveal">
        <div class="feature-icon"><i class="fas fa-bolt"></i></div>
        <h3>Otomatisasi Sederhana</h3>
        <p>Buat aturan seperti "pindahkan ke Selesai saat PR di-merge" tanpa perlu menulis satu baris kode pun.</p>
        <a href="#" class="feature-link">Pelajari lebih lanjut <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="feature reveal">
        <div class="feature-icon"><i class="fas fa-comments"></i></div>
        <h3>Diskusi Terpusat</h3>
        <p>Komentar, keputusan, dan lampiran menempel pada tugasnya. Tidak ada lagi keputusan penting yang hilang di obrolan grup.</p>
        <a href="#" class="feature-link">Pelajari lebih lanjut <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="feature reveal">
        <div class="feature-icon"><i class="fas fa-chart-simple"></i></div>
        <h3>Laporan Otomatis</h3>
        <p>Setiap Senin pagi, tim Anda menerima ringkasan mingguan berisi progres, hambatan, dan hal yang butuh perhatian.</p>
        <a href="#" class="feature-link">Pelajari lebih lanjut <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="feature reveal">
        <div class="feature-icon"><i class="fas fa-shield-halved"></i></div>
        <h3>Keamanan Standar Industri</h3>
        <p>Enkripsi di transit dan saat disimpan. Dua faktor otentikasi. Log audit lengkap. Server berlokasi di Indonesia.</p>
        <a href="#" class="feature-link">Pelajari lebih lanjut <i class="fas fa-arrow-right"></i></a>
      </div>

    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section" id="cara-kerja">
  <div class="wrap">
    <div class="sec-head reveal">
      <span class="sec-tag">Cara Kerja</span>
      <h2>Tiga langkah untuk mulai bekerja.</h2>
      <p>Tanpa setup rumit. Tanpa onboarding berhari-hari. Tim Anda bisa produktif di hari pertama.</p>
    </div>

    <div class="steps">

      <div class="step reveal">
        <div class="step-num">01</div>
        <h3>Hubungkan Repositori</h3>
        <p>Masuk dengan akun GitHub atau GitLab Anda. Rangka akan membaca struktur repositori dan menyiapkan ruang kerja otomatis.</p>
        <div class="step-code">
<span class="c"># jalankan perintah ini di terminal</span><br>
<span class="f">npx</span> rangka <span class="s">init</span><br>
<span class="c"># atau lewat antarmuka web</span><br>
<span class="k">connect</span> github <span class="s">--team</span> nama-tim
        </div>
      </div>

      <div class="step reveal">
        <div class="step-num">02</div>
        <h3>Undang Tim Anda</h3>
        <p>Kirim tautan undangan. Setiap anggota bisa langsung masuk, tanpa perlu instalasi, tanpa perlu pelatihan panjang.</p>
        <div class="step-code">
<span class="c"># undang anggota tim</span><br>
<span class="f">rangka</span> invite <span class="s">budi@tim.id</span><br>
<span class="f">rangka</span> invite <span class="s">sari@tim.id</span><br>
<span class="c"># atur peran</span><br>
<span class="k">--role</span> <span class="s">developer</span>
        </div>
      </div>

      <div class="step reveal">
        <div class="step-num">03</div>
        <h3>Mulai Bekerja</h3>
        <p>Buat sprint pertama, atur tenggat, dan biarkan Rangka mengurus sisa pekerjaan administratif yang biasanya menyita waktu.</p>
        <div class="step-code">
<span class="c"># buat sprint baru</span><br>
<span class="f">rangka</span> sprint <span class="s">create</span> <span class="k">--name</span> <span class="s">"Sprint 19"</span><br>
<span class="k">--start</span> <span class="s">2025-05-20</span><br>
<span class="k">--end</span> <span class="s">2025-06-02</span><br>
<span class="c"># sprint siap</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- METRICS -->
<section class="section metrics">
  <div class="wrap">
    <div class="sec-head center reveal">
      <span class="sec-tag">Angka</span>
      <h2>Kepercayaan yang dibangun bertahun-tahun.</h2>
    </div>

    <div class="metrics-grid">

      <div class="metric reveal">
        <div class="metric-num"><span class="counter" data-target="4200">0</span><small>+</small></div>
        <div class="metric-lbl">Tim aktif memakai<br>Rangka setiap hari</div>
      </div>

      <div class="metric reveal">
        <div class="metric-num"><span class="counter" data-target="99">0</span><small>,9%</small></div>
        <div class="metric-lbl">Rata-rata waktu aktif<br>12 bulan terakhir</div>
      </div>

      <div class="metric reveal">
        <div class="metric-num"><span class="counter" data-target="180">0</span><small>ms</small></div>
        <div class="metric-lbl">Waktu muat rata-rata<br>dashboard utama</div>
      </div>

      <div class="metric reveal">
        <div class="metric-num"><span class="counter" data-target="24">0</span><small>/7</small></div>
        <div class="metric-lbl">Dukungan teknis<br>untuk semua paket</div>
      </div>

    </div>
  </div>
</section>

<!-- PRICING -->
<section class="section" id="harga">
  <div class="wrap">
    <div class="sec-head center reveal">
      <span class="sec-tag">Harga</span>
      <h2>Harga yang jelas. <span class="accent">Tanpa jebakan.</span></h2>
      <p>Semua paket sudah termasuk pembaruan, dukungan, dan akses ke semua fitur dasar. Anda hanya membayar untuk kapasitas.</p>
    </div>

    <div class="pricing-grid">

      <div class="plan reveal">
        <div class="plan-name">Mulai</div>
        <div class="plan-price">Rp 0 <small>/ selamanya</small></div>
        <div class="plan-desc">Untuk tim kecil yang baru mencoba.</div>
        <ul class="plan-feats">
          <li><i class="fas fa-check"></i> Hingga 5 anggota tim</li>
          <li><i class="fas fa-check"></i> 3 proyek aktif</li>
          <li><i class="fas fa-check"></i> Integrasi Git dasar</li>
          <li><i class="fas fa-check"></i> Riwayat aktivitas 30 hari</li>
          <li><i class="fas fa-check"></i> Dukungan via email</li>
        </ul>
        <a href="#" class="btn btn-outline">Mulai Sekarang</a>
      </div>

      <div class="plan featured reveal">
        <div class="plan-badge">Paling Populer</div>
        <div class="plan-name">Tim</div>
        <div class="plan-price">Rp 149rb <small>/ anggota / bulan</small></div>
        <div class="plan-desc">Untuk tim produk yang sedang bertumbuh.</div>
        <ul class="plan-feats">
          <li><i class="fas fa-check"></i> Anggota tim tanpa batas</li>
          <li><i class="fas fa-check"></i> Proyek tanpa batas</li>
          <li><i class="fas fa-check"></i> Otomatisasi tanpa batas</li>
          <li><i class="fas fa-check"></i> Laporan mingguan otomatis</li>
          <li><i class="fas fa-check"></i> Riwayat aktivitas selamanya</li>
          <li><i class="fas fa-check"></i> Dukungan prioritas 24/7</li>
          <li><i class="fas fa-check"></i> SSO Google Workspace</li>
        </ul>
        <a href="#" class="btn btn-green">Coba Gratis 14 Hari</a>
      </div>

      <div class="plan reveal">
        <div class="plan-name">Perusahaan</div>
        <div class="plan-price">Hubungi <small>kami</small></div>
        <div class="plan-desc">Untuk organisasi dengan kebutuhan khusus.</div>
        <ul class="plan-feats">
          <li><i class="fas fa-check"></i> Semua fitur paket Tim</li>
          <li><i class="fas fa-check"></i> SSO SAML / OIDC</li>
          <li><i class="fas fa-check"></i> Log audit lengkap</li>
          <li><i class="fas fa-check"></i> Kontrak dan SLA khusus</li>
          <li><i class="fas fa-check"></i> Onboarding tim khusus</li>
          <li><i class="fas fa-check"></i> Manajer akun pribadi</li>
        </ul>
        <a href="#" class="btn btn-dark">Hubungi Sales</a>
      </div>

    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section">
  <div class="wrap">
    <div class="sec-head center reveal">
      <span class="sec-tag">Kata Pengguna</span>
      <h2>Cerita dari tim yang sudah memakai Rangka.</h2>
    </div>

    <div class="quotes">

      <div class="quote reveal">
        <div class="quote-mark">"</div>
        <div class="quote-text">
          Sebelumnya kami pakai tiga alat terpisah untuk tugas, kode, dan diskusi. Sekarang semua ada di satu tempat. Waktu rapat mingguan kami berkurang hampir setengah.
        </div>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=33" alt="">
          <div>
            <div class="quote-name">Bayu Prasetyo</div>
            <div class="quote-role">Head of Engineering, NusaPay</div>
          </div>
        </div>
      </div>

      <div class="quote reveal">
        <div class="quote-mark">"</div>
        <div class="quote-text">
          Yang saya suka dari Rangka adalah mereka tidak memaksakan fitur. Setiap bagian terasa dipikirkan. Tim non-teknis kami pun bisa langsung pakai di hari pertama.
        </div>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=47" alt="">
          <div>
            <div class="quote-name">Ratna Kusumawati</div>
            <div class="quote-role">Product Manager, RuangData</div>
          </div>
        </div>
      </div>

      <div class="quote reveal">
        <div class="quote-mark">"</div>
        <div class="quote-text">
          Migrasi dari alat lama kami cuma butuh satu sore. Setelah enam bulan, kami tidak pernah berpikir untuk pindah lagi. Rangka menjadi bagian dari cara kami bekerja.
        </div>
        <div class="quote-author">
          <img src="https://i.pravatar.cc/150?img=52" alt="">
          <div>
            <div class="quote-name">Hendra Gunawan</div>
            <div class="quote-role">CTO, GerakCepat</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section" id="faq">
  <div class="wrap">
    <div class="sec-head center reveal">
      <span class="sec-tag">Pertanyaan Umum</span>
      <h2>Yang sering ditanyakan calon pengguna.</h2>
    </div>

    <div class="faq reveal">

      <div class="faq-item">
        <div class="faq-q">
          Apakah data kami disimpan di server Indonesia?
          <i class="fas fa-plus"></i>
        </div>
        <div class="faq-a">
          Ya. Semua data disimpan di pusat data yang berlokasi di Jakarta dan Surabaya. Kami tidak menggunakan penyedia cloud di luar Indonesia untuk data pelanggan. Ini sesuai dengan regulasi perlindungan data yang berlaku.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          Bisakah saya mengimpor data dari alat lain?
          <i class="fas fa-plus"></i>
        </div>
        <div class="faq-a">
          Bisa. Kami menyediakan alat impor untuk Jira, Trello, Asana, dan Linear. Prosesnya berjalan otomatis — Anda cukup memberikan akses, dan sistem kami akan memindahkan proyek, tugas, komentar, serta lampiran.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          Apakah ada batas jumlah proyek di paket Tim?
          <i class="fas fa-plus"></i>
        </div>
        <div class="faq-a">
          Tidak ada batas. Di paket Tim, Anda dapat membuat proyek sebanyak yang dibutuhkan tim. Kami percaya pembatasan seperti ini justru menghambat pekerjaan tanpa alasan yang jelas.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          Bagaimana jika kami ingin berhenti di tengah jalan?
          <i class="fas fa-plus"></i>
        </div>
        <div class="faq-a">
          Anda dapat membatalkan langganan kapan saja langsung dari pengaturan akun. Tidak ada biaya penalti, tidak ada kontrak jangka panjang. Data Anda tetap dapat diunduh selama 30 hari setelah pembatalan.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">
          Apakah tersedia paket untuk organisasi nirlaba atau edukasi?
          <i class="fas fa-plus"></i>
        </div>
        <div class="faq-a">
          Ya. Kami memberikan diskon khusus untuk lembaga pendidikan, organisasi nirlaba terdaftar, dan komunitas open source. Silakan hubungi tim kami dengan keterangan singkat mengenai organisasi Anda.
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="wrap">
    <div class="cta-inner">
      <div class="reveal">
        <h2>
          Siap membuat tim Anda <span class="accent">bekerja lebih rapi?</span>
        </h2>
        <p>
          Coba gratis 14 hari, tanpa perlu kartu kredit. Kalau tidak cocok, tinggal berhenti. Sesederhana itu.
        </p>
      </div>
      <div class="cta-actions reveal">
        <a href="#" class="btn btn-light btn-lg">
          Mulai Uji Coba <i class="fas fa-arrow-right"></i>
        </a>
        <a href="#" class="btn btn-ghost-light btn-lg">
          Jadwalkan Demo
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
          <span class="brand-logo">R</span>
          Rangka
        </div>
        <p class="footer-desc">
          Platform kolaborasi untuk tim produk yang ingin bekerja dengan rapi, terukur, dan tanpa gangguan yang tidak perlu.
        </p>
        <div class="footer-status">
          <span class="dot"></span>
          Semua sistem beroperasi normal
        </div>
      </div>

      <div class="footer-col">
        <h4>Produk</h4>
        <ul>
          <li><a href="#">Fitur</a></li>
          <li><a href="#">Harga</a></li>
          <li><a href="#">Changelog</a></li>
          <li><a href="#">Status</a></li>
          <li><a href="#">API</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Perusahaan</h4>
        <ul>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Karier</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Kontak</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Sumber Daya</h4>
        <ul>
          <li><a href="#">Dokumentasi</a></li>
          <li><a href="#">Panduan</a></li>
          <li><a href="#">Komunitas</a></li>
          <li><a href="#">Dukungan</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Legal</h4>
        <ul>
          <li><a href="#">Privasi</a></li>
          <li><a href="#">Ketentuan</a></li>
          <li><a href="#">Keamanan</a></li>
          <li><a href="#">DPA</a></li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <div>© 2025 Rangka Teknologi Indonesia. Dibuat di Bandung.</div>
      <div class="footer-bottom-links">
        <span>PT Rangka Teknologi Indonesia</span>
        <span>NPWP 01.234.567.8-901.000</span>
      </div>
      <div class="footer-social">
        <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- WA FLOAT -->
<a href="https://wa.me/6281999263536?text=Halo%20FTR-Coder%2C%20saya%20tertarik%20dengan%20desain%20Company%20Profile%2005" class="wa-float" target="_blank" aria-label="WhatsApp">
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

// FAQ
document.querySelectorAll('.faq-item').forEach(item => {
  const q = item.querySelector('.faq-q');
  q.addEventListener('click', () => {
    const wasOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if (!wasOpen) item.classList.add('open');
  });
});

// Open first FAQ by default
document.querySelector('.faq-item')?.classList.add('open');

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', function(e) {
    const id = this.getAttribute('href');
    if (id === '#') return;
    const target = document.querySelector(id);
    if (target) {
      e.preventDefault();
      const top = target.getBoundingClientRect().top + window.scrollY - 64;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  });
});
</script>

@endverbatim
@include('demo.company-profile.partials.demo-bar')
</body>
</html>