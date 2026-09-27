<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ruang &amp; Rupa — Studio Desain Interior &amp; Arsitektur</title>
<meta name="robots" content="noindex, nofollow">
<style>
:root {
  --ink: #2a2420;
  --ink2: #57493f;
  --mut: #93857a;
  --line: #e6dccd;
  --bg: #faf6f0;
  --bg-alt: #f1e7d9;
  --card: #ffffff;
  --accent: #b1633c;
  --accent2: #8a4b2c;
  --accent-bg: #f4e3d5;
  --dark: #211b17;
  --dark2: #372c24;
}
* { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
  font-family: -apple-system, 'Segoe UI', Roboto, Arial, sans-serif;
  background: var(--bg);
  color: var(--ink);
  line-height: 1.6;
  font-size: 15.5px;
}
h1, h2, h3 { font-family: Georgia, 'Times New Roman', serif; line-height: 1.25; font-weight: 400; }
a { color: inherit; }
img { max-width: 100%; display: block; }
button { font: inherit; cursor: pointer; }
.wrap { max-width: 1100px; margin: 0 auto; padding: 0 1.5rem; }
.mut { color: var(--mut); }
.section-label { font-size: 0.82rem; letter-spacing: 0.06em; color: var(--accent); font-weight: 600; margin-bottom: 0.6rem; }
.section-head { max-width: 560px; margin-bottom: 2.5rem; }
.section-head h2 { font-size: 1.9rem; }

/* Progress bar */
#scrollbar { position: fixed; top: 0; left: 0; height: 3px; background: var(--accent); width: 0%; z-index: 999; transition: width 0.1s linear; }

/* Top utility bar */
#topbar {
  background: var(--dark);
  color: #cfc3b8;
  font-size: 0.8rem;
  padding: 0.5rem 1.25rem;
  display: flex;
  align-items: center;
  gap: 1rem;
  flex-wrap: wrap;
}
#topbar .tag { font-weight: 600; color: #e8d9c8; }
#topbar .tag i { color: var(--accent); font-style: normal; }
#topbar .sp { flex: 1; }
.mode-toggle { display: flex; background: rgba(255,255,255,0.08); border-radius: 6px; padding: 2px; }
.mode-toggle button {
  background: none; border: none; color: #cfc3b8; padding: 0.35rem 0.75rem; border-radius: 5px; font-size: 0.78rem;
}
.mode-toggle button.active { background: var(--accent); color: #fff; }
#resetBtn {
  background: none; border: 1px solid rgba(255,255,255,0.25); color: #cfc3b8; padding: 0.35rem 0.7rem; border-radius: 6px; font-size: 0.78rem; display: none;
}
#topbar a.backlink { color: #cfc3b8; text-decoration: none; border: 1px solid rgba(255,255,255,0.25); padding: 0.35rem 0.7rem; border-radius: 6px; font-size: 0.78rem; }
#editHint {
  display: none; background: var(--accent-bg); color: var(--accent2); text-align: center; font-size: 0.82rem; padding: 0.5rem;
}

/* Nav */
#mainnav { position: sticky; top: 0; z-index: 50; background: rgba(250,246,240,0.92); backdrop-filter: blur(6px); border-bottom: 1px solid var(--line); }
.navinner { max-width: 1100px; margin: 0 auto; padding: 0.9rem 1.5rem; display: flex; align-items: center; gap: 2rem; }
.brand { font-family: Georgia, serif; font-size: 1.25rem; letter-spacing: 0.02em; }
.brand span { color: var(--accent); }
.navlinks { display: flex; gap: 1.6rem; margin-left: auto; align-items: center; flex-wrap: wrap; }
.navlink { text-decoration: none; color: var(--ink2); font-size: 0.92rem; padding-bottom: 3px; border-bottom: 2px solid transparent; }
.navlink.active, .navlink:hover { color: var(--accent); border-bottom-color: var(--accent); }
.navlink.btn-nav { background: var(--accent); color: #fff !important; padding: 0.5rem 1.1rem; border-radius: 6px; border-bottom: none !important; }
.navlink.btn-nav:hover { background: var(--accent2); }

/* Hero */
.hero { padding: 4.5rem 0 3rem; }
.hero-inner { max-width: 640px; margin: 0 auto; text-align: center; }
.eyebrow { color: var(--accent); font-size: 0.85rem; font-weight: 600; letter-spacing: 0.04em; margin-bottom: 0.9rem; }
.hero h1 { font-size: 2.5rem; margin-bottom: 1.1rem; }
.hero-sub { color: var(--ink2); font-size: 1.05rem; margin-bottom: 1.75rem; }
.hero-cta { display: flex; gap: 0.9rem; justify-content: center; flex-wrap: wrap; }
.btn-primary { background: var(--accent); color: #fff; padding: 0.75rem 1.5rem; border-radius: 7px; text-decoration: none; font-weight: 600; display: inline-block; border: 1px solid var(--accent); }
.btn-primary:hover { background: var(--accent2); border-color: var(--accent2); }
.btn-ghost { background: none; color: var(--ink); padding: 0.75rem 1.5rem; border-radius: 7px; text-decoration: none; font-weight: 600; border: 1px solid var(--line); display: inline-block; }
.btn-ghost:hover { border-color: var(--accent); color: var(--accent); }

.hero-visual { max-width: 900px; margin: 3rem auto 0; padding: 0 1.5rem; }
.mockrooms { display: grid; grid-template-columns: 1.4fr 1fr 1fr; gap: 0.9rem; height: 260px; }
.mockrooms > div { border-radius: 10px; }
.mr1 { background: linear-gradient(135deg, #d9b48f, #b1633c); }
.mr2 { display: grid; gap: 0.9rem; grid-template-rows: 1fr 1fr; }
.mr2 > div:first-child { background: linear-gradient(135deg, #e7d3b5, #c9976a); border-radius: 10px; }
.mr2 > div:last-child { background: linear-gradient(135deg, #3f342b, #211b17); border-radius: 10px; }
.mr3 { background: linear-gradient(150deg, #efe0c9, #d9b48f); }

/* Stats */
.stats { background: var(--dark); color: #f3ece3; padding: 2.5rem 0; margin-top: 2rem; }
.stats .wrap { display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1.5rem; text-align: center; }
.stat .num { font-family: Georgia, serif; font-size: 2.1rem; color: var(--accent); display: block; }
.stat .label { color: #c9beb2; font-size: 0.85rem; margin-top: 0.3rem; }

/* Layanan */
.layanan { padding: 4.5rem 0; }
.layanan-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 1.5rem; }
.layanan-card { background: var(--card); border: 1px solid var(--line); border-radius: 10px; padding: 1.75rem; }
.layanan-card .icon { width: 38px; height: 38px; color: var(--accent); margin-bottom: 1rem; }
.layanan-card h3 { font-size: 1.1rem; margin-bottom: 0.5rem; }
.layanan-card p { color: var(--mut); font-size: 0.9rem; }

/* Portofolio */
.portofolio { padding: 4.5rem 0; background: var(--bg-alt); }
.filter-row { display: flex; gap: 0.6rem; margin-bottom: 2rem; flex-wrap: wrap; }
.filter-btn { background: var(--card); border: 1px solid var(--line); padding: 0.5rem 1.1rem; border-radius: 20px; font-size: 0.85rem; color: var(--ink2); }
.filter-btn.active { background: var(--ink); color: #fff; border-color: var(--ink); }
.portofolio-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem; }
.proyek-card { background: var(--card); border-radius: 10px; overflow: hidden; border: 1px solid var(--line); transition: transform 0.2s ease, box-shadow 0.2s ease; }
.proyek-card:hover { transform: translateY(-4px); box-shadow: 0 10px 28px rgba(43,36,30,0.12); }
.proyek-card.hidden { display: none; }
.proyek-photo { height: 170px; }
.proyek-body { padding: 1.1rem 1.25rem; }
.proyek-cat { font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--accent); font-weight: 600; }
.proyek-body h3 { font-size: 1.02rem; margin: 0.3rem 0 0.2rem; font-family: -apple-system, 'Segoe UI', sans-serif; font-weight: 600; }
.proyek-body p { font-size: 0.85rem; color: var(--mut); }

/* Testimoni */
.testimoni { padding: 4.5rem 0; }
.testi-wrap { max-width: 700px; margin: 0 auto; text-align: center; position: relative; }
.testi-slide { display: none; }
.testi-slide.active { display: block; }
.testi-quote { font-family: Georgia, serif; font-size: 1.3rem; color: var(--ink); margin-bottom: 1.25rem; font-style: italic; }
.testi-name { font-weight: 600; }
.testi-role { color: var(--mut); font-size: 0.85rem; }
.testi-nav { display: flex; justify-content: center; gap: 0.6rem; margin-top: 1.75rem; align-items: center; }
.testi-arrow { background: var(--card); border: 1px solid var(--line); width: 34px; height: 34px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
.testi-arrow:hover { border-color: var(--accent); color: var(--accent); }
.testi-dots { display: flex; gap: 0.4rem; }
.testi-dot { width: 7px; height: 7px; border-radius: 50%; background: var(--line); border: none; padding: 0; }
.testi-dot.active { background: var(--accent); width: 20px; border-radius: 4px; }

/* Tentang */
.tentang { padding: 4.5rem 0; background: var(--bg-alt); }
.tentang-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start; }
.tentang-text p { color: var(--ink2); margin-bottom: 1rem; }
.team-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.25rem; }
.team-card { text-align: center; }
.team-avatar { width: 64px; height: 64px; border-radius: 50%; background: var(--accent-bg); color: var(--accent2); display: flex; align-items: center; justify-content: center; font-family: Georgia, serif; font-size: 1.2rem; margin: 0 auto 0.6rem; }
.team-card h4 { font-size: 0.92rem; margin-bottom: 0.15rem; }
.team-card p { font-size: 0.78rem; color: var(--mut); }

/* Kontak */
.kontak { padding: 4.5rem 0; }
.kontak-grid { display: grid; grid-template-columns: 1fr 1.15fr; gap: 3rem; }
.kontak-info h2 { font-size: 1.9rem; margin-bottom: 1rem; }
.kontak-info p { color: var(--ink2); margin-bottom: 1.5rem; }
.kontak-item { display: flex; gap: 0.75rem; margin-bottom: 1rem; font-size: 0.92rem; }
.kontak-item .k-icon { color: var(--accent); flex-shrink: 0; }
.form-box { background: var(--card); border: 1px solid var(--line); border-radius: 12px; padding: 1.75rem; }
.form-row { margin-bottom: 1.1rem; }
.form-row label { display: block; font-size: 0.85rem; color: var(--ink2); margin-bottom: 0.35rem; }
.form-row input, .form-row select, .form-row textarea {
  width: 100%; padding: 0.6rem 0.75rem; border: 1px solid var(--line); border-radius: 7px; font: inherit; background: var(--bg);
}
.form-row input:focus, .form-row select:focus, .form-row textarea:focus { outline: none; border-color: var(--accent); }
.form-row .err { color: #b3413a; font-size: 0.78rem; margin-top: 0.3rem; display: none; }
.form-row.invalid input, .form-row.invalid select, .form-row.invalid textarea { border-color: #b3413a; }
.form-row.invalid .err { display: block; }
.submit-btn { background: var(--accent); color: #fff; border: none; padding: 0.75rem 1.5rem; border-radius: 7px; font-weight: 600; width: 100%; }
.submit-btn:hover { background: var(--accent2); }
.success-box { display: none; text-align: center; padding: 2rem 1rem; }
.success-box .check { width: 48px; height: 48px; border-radius: 50%; background: #e5f3ea; color: #2f7d4f; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; }
.success-box h3 { font-family: -apple-system, sans-serif; font-weight: 600; margin-bottom: 0.4rem; }
.success-box p { color: var(--mut); font-size: 0.9rem; }

footer { background: var(--dark); color: #baaea1; padding: 3rem 0 1.5rem; }
.footer-inner { display: flex; justify-content: space-between; gap: 2rem; flex-wrap: wrap; margin-bottom: 2rem; }
.footer-brand { font-family: Georgia, serif; font-size: 1.15rem; color: #f3ece3; margin-bottom: 0.5rem; }
footer .disclaimer { border-top: 1px solid rgba(255,255,255,0.12); padding-top: 1.25rem; font-size: 0.78rem; text-align: center; color: #8a7c6e; }
footer .disclaimer a { color: var(--accent); text-decoration: none; }

[data-edit-key] { transition: outline 0.15s ease; outline: 1px dashed transparent; outline-offset: 4px; border-radius: 3px; }
body.edit-mode [data-edit-key] { outline-color: rgba(177,99,60,0.35); cursor: text; }
body.edit-mode [data-edit-key]:hover { outline-color: var(--accent); background: rgba(177,99,60,0.05); }
body.edit-mode [data-edit-key]:focus { outline: 2px solid var(--accent); background: #fff; }

.reveal { opacity: 0; transform: translateY(14px); transition: opacity 0.6s ease, transform 0.6s ease; }
.reveal.show { opacity: 1; transform: translateY(0); }

@media (max-width: 780px) {
  .tentang-grid, .kontak-grid { grid-template-columns: 1fr; }
  .team-grid { grid-template-columns: repeat(3, 1fr); }
  .navlinks { gap: 1rem; }
  .mockrooms { grid-template-columns: 1fr 1fr; }
  .mr1 { grid-column: span 2; height: 140px; }
}
</style>
</head>
<body>

<div id="scrollbar"></div>

<div id="topbar">
  <span class="tag"><i>DEMO</i> — FTR-Coder Company Profile</span>
  <div class="sp"></div>
  <div class="mode-toggle">
    <button id="modeVisitor" class="active" onclick="setMode(false)">Mode Pengunjung</button>
    <button id="modeEdit" onclick="setMode(true)">Mode Edit</button>
  </div>
  <button id="resetBtn" onclick="resetEdits()">↺ Reset Perubahan</button>
  <a href="/" class="backlink">← Kembali ke Website</a>
</div>
<div id="editHint">💡 Mode Edit aktif — klik teks manapun bertanda garis putus-putus untuk mengubahnya, lalu klik di luar untuk menyimpan otomatis di browser Anda.</div>

<nav id="mainnav">
  <div class="navinner">
    <div class="brand">Ruang<span>&amp;</span>Rupa</div>
    <div class="navlinks">
      <a href="#beranda" class="navlink" data-nav="beranda">Beranda</a>
      <a href="#layanan" class="navlink" data-nav="layanan">Layanan</a>
      <a href="#portofolio" class="navlink" data-nav="portofolio">Portofolio</a>
      <a href="#testimoni" class="navlink" data-nav="testimoni">Testimoni</a>
      <a href="#tentang" class="navlink" data-nav="tentang">Tentang</a>
      <a href="#kontak" class="navlink btn-nav">Konsultasi</a>
    </div>
  </div>
</nav>

<section id="beranda" class="hero">
  <div class="hero-inner">
    <p class="eyebrow">Studio Desain Interior &amp; Arsitektur</p>
    <h1 data-edit-key="hero-title">Ruang yang Bercerita, Desain yang Bertahan Lama</h1>
    <p class="hero-sub" data-edit-key="hero-sub">Kami merancang rumah, kantor, dan ruang usaha yang bukan cuma indah difoto — tapi nyaman dipakai bertahun-tahun. Berbasis di Jakarta, mengerjakan proyek di berbagai kota di Indonesia.</p>
    <div class="hero-cta">
      <a href="#kontak" class="btn-primary">Konsultasi Gratis</a>
      <a href="#portofolio" class="btn-ghost">Lihat Portofolio</a>
    </div>
  </div>
  <div class="hero-visual">
    <div class="mockrooms">
      <div class="mr1"></div>
      <div class="mr2"><div></div><div></div></div>
      <div class="mr3"></div>
    </div>
  </div>
</section>

<section class="stats reveal">
  <div class="wrap">
    <div class="stat"><span class="num" data-target="128">0</span><span class="label">Proyek Selesai</span></div>
    <div class="stat"><span class="num" data-target="12">0</span><span class="label">Tahun Pengalaman</span></div>
    <div class="stat"><span class="num" data-target="97" data-suffix="%">0</span><span class="label">Klien Merekomendasikan</span></div>
    <div class="stat"><span class="num" data-target="24">0</span><span class="label">Desainer &amp; Arsitek</span></div>
  </div>
</section>

<section id="layanan" class="layanan">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="section-label">LAYANAN KAMI</p>
      <h2>Dari Konsep Sampai Serah Terima Kunci</h2>
    </div>
    <div class="layanan-grid">
      <div class="layanan-card reveal">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 10.5 12 3l9 7.5"/><path d="M5 9.5V21h14V9.5"/><path d="M9 21v-6h6v6"/></svg>
        <h3 data-edit-key="layanan-1-judul">Desain Interior</h3>
        <p data-edit-key="layanan-1-desc">Penataan ruang, pemilihan material, hingga furnitur custom yang disesuaikan gaya hidup Anda.</p>
      </div>
      <div class="layanan-card reveal">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="4" y="4" width="16" height="16" rx="1"/><path d="M4 10h16M10 10v10"/></svg>
        <h3 data-edit-key="layanan-2-judul">Arsitektur</h3>
        <p data-edit-key="layanan-2-desc">Perancangan bangunan dari nol — mulai dari denah, struktur, hingga pengurusan izin mendirikan bangunan.</p>
      </div>
      <div class="layanan-card reveal">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16v16H4z"/><path d="M4 14h7M14 4v16"/></svg>
        <h3 data-edit-key="layanan-3-judul">Renovasi &amp; Retrofit</h3>
        <p data-edit-key="layanan-3-desc">Perbaikan dan penyegaran ruang lama tanpa harus membongkar total — hemat waktu dan biaya.</p>
      </div>
      <div class="layanan-card reveal">
        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="8"/><path d="M12 8v4l3 2"/></svg>
        <h3 data-edit-key="layanan-4-judul">Konsultasi Ruang</h3>
        <p data-edit-key="layanan-4-desc">Sesi konsultasi singkat untuk yang belum yakin mau mulai dari mana — kami bantu petakan prioritasnya.</p>
      </div>
    </div>
  </div>
</section>

<section id="portofolio" class="portofolio">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="section-label">PORTOFOLIO</p>
      <h2>Sebagian Proyek yang Sudah Kami Kerjakan</h2>
    </div>
    <div class="filter-row reveal">
      <button class="filter-btn active" data-filter="semua">Semua</button>
      <button class="filter-btn" data-filter="residensial">Residensial</button>
      <button class="filter-btn" data-filter="komersial">Komersial</button>
      <button class="filter-btn" data-filter="hospitality">Hospitality</button>
    </div>
    <div class="portofolio-grid" id="portofolioGrid">
      <div class="proyek-card reveal" data-category="residensial">
        <div class="proyek-photo" style="background: linear-gradient(135deg,#e7d3b5,#b1633c);"></div>
        <div class="proyek-body"><span class="proyek-cat">Residensial</span><h3>Rumah Taman Kemang</h3><p>Renovasi total, 220 m² · Jakarta Selatan</p></div>
      </div>
      <div class="proyek-card reveal" data-category="komersial">
        <div class="proyek-photo" style="background: linear-gradient(135deg,#3f342b,#211b17);"></div>
        <div class="proyek-body"><span class="proyek-cat">Komersial</span><h3>Kantor Studio Kreatif Anagata</h3><p>Desain interior baru, 3 lantai · Bandung</p></div>
      </div>
      <div class="proyek-card reveal" data-category="hospitality">
        <div class="proyek-photo" style="background: linear-gradient(135deg,#efe0c9,#d9b48f);"></div>
        <div class="proyek-body"><span class="proyek-cat">Hospitality</span><h3>Kafe &amp; Roastery Tepi Danau</h3><p>Arsitektur &amp; interior baru · Bandung</p></div>
      </div>
      <div class="proyek-card reveal" data-category="residensial">
        <div class="proyek-photo" style="background: linear-gradient(135deg,#d9b48f,#8a4b2c);"></div>
        <div class="proyek-body"><span class="proyek-cat">Residensial</span><h3>Apartemen Studio Senayan</h3><p>Desain interior, 45 m² · Jakarta Pusat</p></div>
      </div>
      <div class="proyek-card reveal" data-category="hospitality">
        <div class="proyek-photo" style="background: linear-gradient(150deg,#c9976a,#57493f);"></div>
        <div class="proyek-body"><span class="proyek-cat">Hospitality</span><h3>Butik Hotel Ubud Hills</h3><p>Arsitektur, 18 kamar · Gianyar, Bali</p></div>
      </div>
      <div class="proyek-card reveal" data-category="komersial">
        <div class="proyek-photo" style="background: linear-gradient(135deg,#e7d3b5,#57493f);"></div>
        <div class="proyek-body"><span class="proyek-cat">Komersial</span><h3>Klinik Gigi Mulyasari</h3><p>Renovasi &amp; interior, 90 m² · Surabaya</p></div>
      </div>
    </div>
  </div>
</section>

<section id="testimoni" class="testimoni">
  <div class="wrap">
    <div class="section-head reveal" style="margin-left:auto;margin-right:auto;text-align:center;">
      <p class="section-label" style="text-align:center;">TESTIMONI</p>
      <h2>Kata Mereka yang Sudah Bekerja Sama</h2>
    </div>
    <div class="testi-wrap reveal">
      <div class="testi-slide active">
        <p class="testi-quote">"Prosesnya jelas dari awal — kami tahu persis progres tiap minggu. Hasil akhirnya juga jauh melebihi ekspektasi kami."</p>
        <p class="testi-name">Dian Anggraeni</p>
        <p class="testi-role">Pemilik Rumah, Rumah Taman Kemang</p>
      </div>
      <div class="testi-slide">
        <p class="testi-quote">"Tim Ruang &amp; Rupa paham banget kebutuhan bisnis kreatif kami. Kantor baru bikin tim jadi lebih semangat kerja."</p>
        <p class="testi-name">Bagas Prakoso</p>
        <p class="testi-role">Founder, Studio Kreatif Anagata</p>
      </div>
      <div class="testi-slide">
        <p class="testi-quote">"Dari denah sampai pemilihan meja kursi, semua didiskusikan detail. Kafe kami sekarang jadi spot favorit orang foto-foto."</p>
        <p class="testi-name">Salsabila Putri</p>
        <p class="testi-role">Owner, Kafe &amp; Roastery Tepi Danau</p>
      </div>
      <div class="testi-slide">
        <p class="testi-quote">"Budget kami terbatas, tapi mereka tetap kasih solusi renovasi yang hasilnya keliatan mahal. Recommended."</p>
        <p class="testi-name">drg. Ratna Mulyasari</p>
        <p class="testi-role">Pemilik, Klinik Gigi Mulyasari</p>
      </div>
      <div class="testi-nav">
        <button class="testi-arrow" onclick="testiMove(-1)">‹</button>
        <div class="testi-dots" id="testiDots"></div>
        <button class="testi-arrow" onclick="testiMove(1)">›</button>
      </div>
    </div>
  </div>
</section>

<section id="tentang" class="tentang">
  <div class="wrap">
    <div class="tentang-grid">
      <div class="tentang-text reveal">
        <p class="section-label">TENTANG KAMI</p>
        <h2 style="font-size:1.9rem;margin-bottom:1rem;">Studio Kecil, Perhatian Detail yang Besar</h2>
        <p data-edit-key="tentang-p1">Ruang &amp; Rupa berdiri sejak 2013, dimulai dari proyek renovasi rumah teman ke teman. Sekarang kami sudah mengerjakan lebih dari seratus proyek — dari rumah tinggal, kantor, sampai ruang usaha kecil.</p>
        <p data-edit-key="tentang-p2">Prinsip kami sederhana: desain yang bagus itu yang tetap nyaman dipakai lima tahun ke depan, bukan cuma bagus difoto sekali lalu ditinggal.</p>
      </div>
      <div class="reveal">
        <div class="team-grid">
          <div class="team-card">
            <div class="team-avatar">RA</div>
            <h4>Rangga Aditya</h4>
            <p>Principal Architect</p>
          </div>
          <div class="team-card">
            <div class="team-avatar">NK</div>
            <h4>Nadia Kirana</h4>
            <p>Lead Interior Designer</p>
          </div>
          <div class="team-card">
            <div class="team-avatar">FH</div>
            <h4>Farhan Hidayat</h4>
            <p>Project Manager</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="kontak" class="kontak">
  <div class="wrap">
    <div class="kontak-grid">
      <div class="kontak-info reveal">
        <p class="section-label">KONTAK</p>
        <h2>Ceritakan Ruang Impian Anda</h2>
        <p>Isi form di samping, atau hubungi kami langsung. Sesi konsultasi awal selalu gratis, tanpa komitmen.</p>
        <div class="kontak-item"><span class="k-icon">📍</span><span>Jl. Kemang Raya No. 45, Jakarta Selatan</span></div>
        <div class="kontak-item"><span class="k-icon">📞</span><span>(021) 719-0234</span></div>
        <div class="kontak-item"><span class="k-icon">✉️</span><span>halo@ruangrupa-demo.id</span></div>
      </div>
      <div class="reveal">
        <div class="form-box" id="formBox">
          <form id="kontakForm" novalidate>
            <div class="form-row" id="row-nama">
              <label>Nama Lengkap</label>
              <input type="text" id="f-nama" placeholder="Nama Anda">
              <div class="err">Nama wajib diisi.</div>
            </div>
            <div class="form-row" id="row-email">
              <label>Email</label>
              <input type="email" id="f-email" placeholder="nama@email.com">
              <div class="err">Masukkan email yang valid.</div>
            </div>
            <div class="form-row" id="row-hp">
              <label>No. HP / WhatsApp</label>
              <input type="text" id="f-hp" placeholder="08xx-xxxx-xxxx">
              <div class="err">Nomor HP wajib diisi.</div>
            </div>
            <div class="form-row">
              <label>Jenis Proyek</label>
              <select id="f-jenis">
                <option>Rumah Tinggal</option>
                <option>Kantor / Ruang Usaha</option>
                <option>Renovasi</option>
                <option>Lainnya</option>
              </select>
            </div>
            <div class="form-row" id="row-pesan">
              <label>Ceritakan Sedikit Proyek Anda</label>
              <textarea id="f-pesan" rows="4" placeholder="Misalnya: renovasi rumah 2 lantai, 150 m², target mulai bulan depan..."></textarea>
              <div class="err">Cerita singkat wajib diisi.</div>
            </div>
            <button type="submit" class="submit-btn">Kirim Pesan</button>
          </form>
          <div class="success-box" id="successBox">
            <div class="check">✓</div>
            <h3>Pesan Terkirim!</h3>
            <p>Ini demo, jadi belum benar-benar terkirim ke mana pun — tapi begini pengalaman yang akan didapat pengunjung situs Anda nanti.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="wrap">
    <div class="footer-inner">
      <div>
        <div class="footer-brand">Ruang &amp; Rupa</div>
        <p style="font-size:0.85rem;max-width:280px;">Studio desain interior &amp; arsitektur — Jakarta, Indonesia.</p>
      </div>
      <div style="font-size:0.85rem;">
        <p style="margin-bottom:0.4rem;color:#e8d9c8;">Navigasi</p>
        <p style="margin-bottom:0.3rem;"><a href="#layanan" style="text-decoration:none;">Layanan</a></p>
        <p style="margin-bottom:0.3rem;"><a href="#portofolio" style="text-decoration:none;">Portofolio</a></p>
        <p><a href="#kontak" style="text-decoration:none;">Kontak</a></p>
      </div>
    </div>
    <div class="disclaimer">
      "Ruang &amp; Rupa" adalah bisnis fiktif untuk keperluan demo — bukan perusahaan sungguhan.
      Demo interaktif ini dibuat oleh <a href="/" target="_top">FTR-Coder</a> untuk memperlihatkan tampilan website company profile.
    </div>
  </div>
</footer>

<script>
// ---- Scroll progress bar ----
window.addEventListener('scroll', function () {
    var h = document.documentElement;
    var pct = (h.scrollTop) / (h.scrollHeight - h.clientHeight) * 100;
    document.getElementById('scrollbar').style.width = pct + '%';
});

// ---- Scrollspy nav ----
var sections = ['beranda', 'layanan', 'portofolio', 'testimoni', 'tentang'];
var navLinks = document.querySelectorAll('.navlink[data-nav]');
function updateScrollspy() {
    var scrollPos = window.scrollY + 120;
    var current = sections[0];
    sections.forEach(function (id) {
        var el = document.getElementById(id);
        if (el && el.offsetTop <= scrollPos) current = id;
    });
    navLinks.forEach(function (a) {
        a.classList.toggle('active', a.dataset.nav === current);
    });
}
window.addEventListener('scroll', updateScrollspy);
updateScrollspy();

// ---- Reveal on scroll ----
var revealEls = document.querySelectorAll('.reveal');
if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) { e.target.classList.add('show'); io.unobserve(e.target); }
        });
    }, { threshold: 0.15 });
    revealEls.forEach(function (el) { io.observe(el); });
} else {
    revealEls.forEach(function (el) { el.classList.add('show'); });
}

// ---- Animated stat counters ----
var statEls = document.querySelectorAll('.stat .num');
var statsAnimated = false;
function animateStats() {
    if (statsAnimated) return;
    statsAnimated = true;
    statEls.forEach(function (el) {
        var target = parseInt(el.dataset.target, 10);
        var suffix = el.dataset.suffix || '';
        var start = 0;
        var duration = 1200;
        var startTime = null;
        function step(ts) {
            if (!startTime) startTime = ts;
            var progress = Math.min((ts - startTime) / duration, 1);
            el.textContent = Math.floor(progress * target) + suffix;
            if (progress < 1) requestAnimationFrame(step);
            else el.textContent = target + suffix;
        }
        requestAnimationFrame(step);
    });
}
var statsSection = document.querySelector('.stats');
if ('IntersectionObserver' in window && statsSection) {
    var statsIo = new IntersectionObserver(function (entries) {
        if (entries[0].isIntersecting) { animateStats(); statsIo.disconnect(); }
    }, { threshold: 0.4 });
    statsIo.observe(statsSection);
} else {
    animateStats();
}

// ---- Portfolio filter ----
document.querySelectorAll('.filter-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
        document.querySelectorAll('.filter-btn').forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');
        var filter = btn.dataset.filter;
        document.querySelectorAll('.proyek-card').forEach(function (card) {
            var match = filter === 'semua' || card.dataset.category === filter;
            card.classList.toggle('hidden', !match);
        });
    });
});

// ---- Testimonial carousel ----
var testiSlides = document.querySelectorAll('.testi-slide');
var testiDotsWrap = document.getElementById('testiDots');
var testiIndex = 0;
testiSlides.forEach(function (_, i) {
    var dot = document.createElement('button');
    dot.className = 'testi-dot' + (i === 0 ? ' active' : '');
    dot.addEventListener('click', function () { showTesti(i); resetTestiTimer(); });
    testiDotsWrap.appendChild(dot);
});
function showTesti(i) {
    testiIndex = (i + testiSlides.length) % testiSlides.length;
    testiSlides.forEach(function (s, idx) { s.classList.toggle('active', idx === testiIndex); });
    testiDotsWrap.querySelectorAll('.testi-dot').forEach(function (d, idx) { d.classList.toggle('active', idx === testiIndex); });
}
function testiMove(dir) { showTesti(testiIndex + dir); resetTestiTimer(); }
var testiTimer;
function resetTestiTimer() {
    clearInterval(testiTimer);
    testiTimer = setInterval(function () { showTesti(testiIndex + 1); }, 6000);
}
resetTestiTimer();

// ---- Contact form (client-side only, demo) ----
document.getElementById('kontakForm').addEventListener('submit', function (e) {
    e.preventDefault();
    var fields = [
        { id: 'f-nama', row: 'row-nama', check: function (v) { return v.trim().length > 0; } },
        { id: 'f-email', row: 'row-email', check: function (v) { return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); } },
        { id: 'f-hp', row: 'row-hp', check: function (v) { return v.trim().length >= 8; } },
        { id: 'f-pesan', row: 'row-pesan', check: function (v) { return v.trim().length > 0; } }
    ];
    var valid = true;
    fields.forEach(function (f) {
        var el = document.getElementById(f.id);
        var row = document.getElementById(f.row);
        var ok = f.check(el.value);
        row.classList.toggle('invalid', !ok);
        if (!ok) valid = false;
    });
    if (!valid) return;

    document.getElementById('kontakForm').style.display = 'none';
    document.getElementById('successBox').style.display = 'block';
});

// ---- Mode Edit (contenteditable + localStorage) ----
var STORAGE_PREFIX = 'rr_edit_';
function applyStoredEdits() {
    document.querySelectorAll('[data-edit-key]').forEach(function (el) {
        var saved = localStorage.getItem(STORAGE_PREFIX + el.dataset.editKey);
        if (saved !== null) el.textContent = saved;
    });
}
applyStoredEdits();

function setMode(editOn) {
    document.body.classList.toggle('edit-mode', editOn);
    document.getElementById('modeVisitor').classList.toggle('active', !editOn);
    document.getElementById('modeEdit').classList.toggle('active', editOn);
    document.getElementById('editHint').style.display = editOn ? 'block' : 'none';
    document.getElementById('resetBtn').style.display = editOn ? 'inline-block' : 'none';
    document.querySelectorAll('[data-edit-key]').forEach(function (el) {
        el.setAttribute('contenteditable', editOn ? 'true' : 'false');
    });
}
document.querySelectorAll('[data-edit-key]').forEach(function (el) {
    el.addEventListener('blur', function () {
        localStorage.setItem(STORAGE_PREFIX + el.dataset.editKey, el.textContent);
    });
});
function resetEdits() {
    document.querySelectorAll('[data-edit-key]').forEach(function (el) {
        localStorage.removeItem(STORAGE_PREFIX + el.dataset.editKey);
    });
    location.reload();
}
</script>
</body>
</html>