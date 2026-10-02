@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTR Coder - Hosting Fleksibel untuk Developer, Mahasiswa & Bisnis</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-primary: #0a0f1d;
            --bg-card: #121929;
            --bg-card-hover: #1a233a;
            --accent: #2563eb;
            --highlight: #06b6d4;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --border: #1e293b;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-primary);
            color: var(--text-main);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navbar */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #0a0f1d;
            border-bottom: 1px solid var(--border);
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
        }

        .logo {
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--text-main);
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-muted);
            font-size: 0.95rem;
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--text-main);
        }

        .btn-cta-nav {
            background: var(--accent);
            color: #ffffff !important;
            padding: 8px 18px;
            border-radius: 6px;
            font-weight: 600;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--text-main);
        }

        /* Hero Section */
        .hero {
            padding: 140px 0 80px;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            align-items: center;
        }

        .hero-badge {
            display: inline-block;
            background: var(--bg-card);
            border: 1px solid var(--border);
            padding: 6px 14px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--highlight);
            margin-bottom: 20px;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
            letter-spacing: -0.02em;
            line-height: 1.2;
        }

        .hero-content h1 span {
            color: var(--highlight);
        }

        .hero-content p {
            font-size: 1.1rem;
            color: var(--text-muted);
            margin-bottom: 30px;
        }

        .hero-btns {
            display: flex;
            gap: 16px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: var(--transition);
            cursor: pointer;
        }

        .btn-primary {
            background: var(--accent);
            color: #ffffff;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-secondary {
            background: var(--bg-card);
            border: 1px solid var(--border);
            color: var(--text-main);
        }

        .btn-secondary:hover {
            background: var(--bg-card-hover);
            border-color: var(--text-muted);
        }

        /* Browser Window Mockup */
        .browser-window {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0,0,0,0.6);
            animation: bounceWindow 4s ease-in-out infinite;
        }

        @keyframes bounceWindow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        .browser-bar {
            background: #0f172a;
            padding: 10px 14px;
            display: flex;
            align-items: center;
            gap: 8px;
            border-bottom: 1px solid var(--border);
        }

        .window-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--border);
        }

        .window-dot.r { background: #ef4444; }
        .window-dot.y { background: #f59e0b; }
        .window-dot.g { background: #10b981; }

        .browser-url {
            background: var(--bg-primary);
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.75rem;
            color: var(--highlight);
            margin-left: 6px;
            font-family: monospace;
            border: 1px solid var(--border);
        }

        .mini-screen {
            padding: 24px;
            background: #0f172a;
            min-height: 220px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .mini-card-content {
            background: var(--bg-card);
            border: 1px solid var(--border);
            padding: 16px;
            border-radius: 6px;
            width: 100%;
        }

        .typing-text {
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 8px;
        }

        .typing-sub {
            font-size: 0.8rem;
            color: var(--text-muted);
            font-family: monospace;
        }

        .live-status {
            display: inline-block;
            margin-top: 14px;
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
            border: 1px solid #10b981;
            padding: 3px 10px;
            font-size: 0.75rem;
            border-radius: 4px;
            font-weight: 600;
        }

        /* Subdomain Callout Box */
        .subdomain-box {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
        }

        .subdomain-box h3 {
            font-size: 1rem;
            margin-bottom: 6px;
        }

        .subdomain-box p {
            color: var(--text-muted);
            font-size: 0.85rem;
            margin-bottom: 10px;
        }

        .subdomain-examples {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .sub-tag {
            background: var(--bg-primary);
            border: 1px solid var(--border);
            padding: 4px 10px;
            border-radius: 4px;
            font-family: monospace;
            color: var(--highlight);
            font-size: 0.8rem;
        }

        /* Section Global */
        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .section-title p {
            color: var(--text-muted);
        }

        /* Pricing Section */
        .pricing {
            background: #0d1322;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
        }

        .price-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            position: relative;
            transition: var(--transition);
        }

        .price-card.popular {
            border-color: var(--accent);
        }

        .badge-popular {
            position: absolute;
            top: -12px;
            right: 20px;
            background: var(--accent);
            color: white;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 4px;
            letter-spacing: 0.05em;
        }

        .price-header h3 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 6px;
        }

        .price-header p {
            color: var(--text-muted);
            font-size: 0.85rem;
            min-height: 55px;
        }

        .price-features {
            margin: 15px 0 20px;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .price-features li {
            color: var(--text-muted);
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .price-features li::before {
            content: "[+]";
            color: var(--highlight);
            font-family: monospace;
            font-weight: bold;
        }

        /* Sub-pricing options list inside card */
        .variant-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: auto;
        }

        .variant-item {
            background: var(--bg-primary);
            border: 1px solid var(--border);
            padding: 10px 14px;
            border-radius: 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
        }

        .variant-info .v-title {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-main);
        }

        .variant-info .v-price {
            font-size: 0.95rem;
            font-weight: 800;
            color: var(--highlight);
        }

        .btn-variant {
            background: var(--accent);
            color: #fff;
            padding: 6px 12px;
            font-size: 0.75rem;
            font-weight: 600;
            border-radius: 4px;
            white-space: nowrap;
            transition: var(--transition);
        }

        .btn-variant:hover {
            background: #1d4ed8;
        }

        /* Information / Policy Grid */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }

        .info-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            padding: 24px;
            border-radius: 8px;
        }

        .info-card h3 {
            font-size: 1.05rem;
            margin-bottom: 10px;
            font-weight: 600;
            color: var(--highlight);
        }

        .info-card p, .info-card ul {
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        .info-card ul {
            padding-left: 16px;
            display: flex;
            flex-direction: column;
            gap: 4px;
            margin-top: 8px;
        }

        .info-card ul li {
            list-style-type: disc;
        }

        /* FAQ Section */
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .faq-item {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 6px;
            overflow: hidden;
        }

        .faq-question {
            padding: 18px 20px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.95rem;
        }

        .faq-question::after {
            content: "+";
            font-size: 1.2rem;
            color: var(--accent);
            transition: transform 0.3s ease;
        }

        .faq-item.active .faq-question::after {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding: 0 20px;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .faq-item.active .faq-answer {
            padding: 0 20px 18px;
            max-height: 200px;
        }

        /* Big CTA Section */
        .cta-banner {
            padding: 60px 0;
            text-align: center;
            border-top: 1px solid var(--border);
        }

        .cta-card {
            max-width: 800px;
            margin: 0 auto;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 50px 30px;
        }

        .cta-card h2 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .cta-card p {
            color: var(--text-muted);
            margin-bottom: 24px;
            font-size: 0.95rem;
        }

        /* Footer */
        footer {
            background: #0a0f1d;
            border-top: 1px solid var(--border);
            padding: 50px 0 20px;
            color: var(--text-muted);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-brand p {
            margin-top: 8px;
            font-size: 0.85rem;
            max-width: 280px;
        }

        .footer-links {
            display: flex;
            gap: 40px;
        }

        .footer-col h4 {
            color: var(--text-main);
            font-size: 0.9rem;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .footer-col ul {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .footer-col a {
            font-size: 0.85rem;
            transition: var(--transition);
        }

        .footer-col a:hover {
            color: var(--text-main);
        }

        .footer-bottom {
            text-align: center;
            border-top: 1px solid var(--border);
            padding-top: 20px;
            font-size: 0.8rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background: var(--bg-card);
                border-bottom: 1px solid var(--border);
                padding: 20px;
            }

            .nav-links.active {
                display: flex;
            }

            .hamburger {
                display: block;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 120px 0 60px;
            }

            .hero-content h1 {
                font-size: 2.2rem;
            }

            .hero-btns {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <!-- Header / Navbar -->
    <header>
        <div class="container nav-container">
            <a href="/" class="logo">FTR Coder</a>
            <nav>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#paket">Paket Hosting</a></li>
                    <li><a href="#kebijakan">Kebijakan</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="https://wa.me/6281999263536" target="_blank" class="btn-cta-nav">Chat WhatsApp</a></li>
                </ul>
            </nav>
            <div class="hamburger" id="hamburger">Menu</div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container" style="display: contents;">
            <div class="container hero-content">
                <div class="hero-badge">Multi-Technology Support</div>
                <h1>Bikin Website Modal <span>Rp5.000</span> Free Subdomain Langsung Online</h1>
                <p>Hosting fleksibel untuk berbagai teknologi (PHP, Python, Node.js, HTML/JS). Cocok untuk mahasiswa, developer, dan pemilik bisnis dengan subdomain gratis.</p>
                <div class="hero-btns">
                    <a href="#paket" class="btn btn-primary">Mulai 5 Ribu Sekarang</a>
                    <a href="https://wa.me/6281999263536" target="_blank" class="btn btn-secondary">Chat WhatsApp</a>
                </div>

                <!-- Subdomain Box -->
                <div class="subdomain-box">
                    <h3>Contoh Subdomain Gratis:</h3>
                    <div class="subdomain-examples">
                        <span class="sub-tag">namakamu.ftr-coder.com</span>
                        <span class="sub-tag">projectkamu.ftr-coder.com</span>
                    </div>
                </div>
            </div>

            <!-- Mini Web Preview Animation -->
            <div class="container">
                <div class="browser-window">
                    <div class="browser-bar">
                        <div class="window-dot r"></div>
                        <div class="window-dot y"></div>
                        <div class="window-dot g"></div>
                        <div class="browser-url" id="browserUrl">https://projectkamu.ftr-coder.com</div>
                    </div>
                    <div class="mini-screen">
                        <div class="mini-card-content">
                            <div class="typing-text" id="typingTitle">Website Anda Online!</div>
                            <div class="typing-sub" id="typingSub">Hosting 5 Ribu + Free Subdomain</div>
                            <div class="live-status">Status: Active & Secure</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="paket">
        <div class="container">
            <div class="section-title">
                <h2>Pilihan Paket Hosting</h2>
                <p>Pilih kapasitas dan durasi yang pas berdasarkan kebutuhan websitemu.</p>
            </div>
            <div class="pricing-grid">
                
                <!-- 1. FTR DEV -->
                <div class="price-card popular">
                    <div class="badge-popular">MULAI 5 RIBU</div>
                    <div class="price-header">
                        <h3>FTR DEV</h3>
                        <p>Untuk mahasiswa, programmer pemula, belajar coding, testing, dan demo aplikasi.</p>
                    </div>
                    <ul class="price-features">
                        <li>Dukungan runtime pilihan</li>
                        <li>1 Database & 1 Website</li>
                        <li>SSL / HTTPS aman</li>
                        <li>Subdomain gratis</li>
                    </ul>
                    <div class="variant-list">
                        <div class="variant-item">
                            <div class="variant-info">
                                <div class="v-title">5 Hari</div>
                                <div class="v-price">Rp5.000</div>
                            </div>
                            <a href="https://wa.me/6281999263536?text=Halo%20Admin,%20saya%20mau%20pesan%20paket%20FTR%20DEV%20durasi%205%20hari%20(Rp5.000)" target="_blank" class="btn-variant">Pilih</a>
                        </div>
                        <div class="variant-item">
                            <div class="variant-info">
                                <div class="v-title">14 Hari</div>
                                <div class="v-price">Rp10.000</div>
                            </div>
                            <a href="https://wa.me/6281999263536?text=Halo%20Admin,%20saya%20mau%20pesan%20paket%20FTR%20DEV%20durasi%2014%20hari%20(Rp10.000)" target="_blank" class="btn-variant">Pilih</a>
                        </div>
                        <div class="variant-item">
                            <div class="variant-info">
                                <div class="v-title">1 Bulan</div>
                                <div class="v-price">Rp15.000</div>
                            </div>
                            <a href="https://wa.me/6281999263536?text=Halo%20Admin,%20saya%20mau%20pesan%20paket%20FTR%20DEV%20durasi%201%20bulan%20(Rp15.000)" target="_blank" class="btn-variant">Pilih</a>
                        </div>
                    </div>
                </div>

                <!-- 2. FTR STATIC -->
                <div class="price-card">
                    <div class="price-header">
                        <h3>FTR STATIC</h3>
                        <p>Untuk landing page, portofolio, website profil, dan web statis (HTML/CSS/JS, React/Vue build).</p>
                    </div>
                    <ul class="price-features">
                        <li>HTML, CSS, JavaScript & Build React/Vue</li>
                        <li>Tanpa database (Static file)</li>
                        <li>SSL / HTTPS</li>
                        <li>Subdomain gratis</li>
                    </ul>
                    <div class="variant-list">
                        <div class="variant-item">
                            <div class="variant-info">
                                <div class="v-title">3 Bulan</div>
                                <div class="v-price">Rp42.000</div>
                            </div>
                            <a href="https://wa.me/6281999263536?text=Halo%20Admin,%20saya%20mau%20pesan%20paket%20FTR%20STATIC%20durasi%203%20bulan%20(Rp42.000)" target="_blank" class="btn-variant">Pilih</a>
                        </div>
                        <div class="variant-item">
                            <div class="variant-info">
                                <div class="v-title">6 Bulan</div>
                                <div class="v-price">Rp80.000</div>
                            </div>
                            <a href="https://wa.me/6281999263536?text=Halo%20Admin,%20saya%20mau%20pesan%20paket%20FTR%20STATIC%20durasi%206%20bulan%20(Rp80.000)" target="_blank" class="btn-variant">Pilih</a>
                        </div>
                        <div class="variant-item">
                            <div class="variant-info">
                                <div class="v-title">1 Tahun</div>
                                <div class="v-price">Rp150.000</div>
                            </div>
                            <a href="https://wa.me/6281999263536?text=Halo%20Admin,%20saya%20mau%20pesan%20paket%20FTR%20STATIC%20durasi%201%20tahun%20(Rp150.000)" target="_blank" class="btn-variant">Pilih</a>
                        </div>
                    </div>
                </div>

                <!-- 3. FTR APP -->
                <div class="price-card">
                    <div class="price-header">
                        <h3>FTR APP</h3>
                        <p>Untuk aplikasi web dengan backend, database, atau server process (PHP, Python, Node.js).</p>
                    </div>
                    <ul class="price-features">
                        <li>Backend & Database tersedia</li>
                        <li>PHP, Python, Node.js (sesuai runtime)</li>
                        <li>SSL / HTTPS</li>
                        <li>Subdomain atau domain sendiri</li>
                    </ul>
                    <div class="variant-list">
                        <div class="variant-item">
                            <div class="variant-info">
                                <div class="v-title">1 Bulan</div>
                                <div class="v-price">Rp25.000</div>
                            </div>
                            <a href="https://wa.me/6281999263536?text=Halo%20Admin,%20saya%20mau%20pesan%20paket%20FTR%20APP%20durasi%201%20bulan%20(Rp25.000)" target="_blank" class="btn-variant">Pilih</a>
                        </div>
                        <div class="variant-item">
                            <div class="variant-info">
                                <div class="v-title">6 Bulan</div>
                                <div class="v-price">Rp130.000</div>
                            </div>
                            <a href="https://wa.me/6281999263536?text=Halo%20Admin,%20saya%20mau%20pesan%20paket%20FTR%20APP%20durasi%206%20bulan%20(Rp130.000)" target="_blank" class="btn-variant">Pilih</a>
                        </div>
                        <div class="variant-item">
                            <div class="variant-info">
                                <div class="v-title">1 Tahun</div>
                                <div class="v-price">Rp220.000</div>
                            </div>
                            <a href="https://wa.me/6281999263536?text=Halo%20Admin,%20saya%20mau%20pesan%20paket%20FTR%20APP%20durasi%201%20tahun%20(Rp220.000)" target="_blank" class="btn-variant">Pilih</a>
                        </div>
                    </div>
                </div>

                <!-- 4. FTR BUSINESS -->
                <div class="price-card">
                    <div class="price-header">
                        <h3>FTR BUSINESS</h3>
                        <p>Untuk UMKM, perusahaan kecil, company profile, katalog produk, dan website bisnis.</p>
                    </div>
                    <ul class="price-features">
                        <li>Kapasitas & dukungan lebih optimal</li>
                        <li>Database & Backend siap pakai</li>
                        <li>SSL / HTTPS & Domain sendiri</li>
                        <li>Backup sesuai kebijakan hosting</li>
                    </ul>
                    <div class="variant-list" style="margin-top: 29px;">
                        <div class="variant-item">
                            <div class="variant-info">
                                <div class="v-title">6 Bulan</div>
                                <div class="v-price">Rp175.000</div>
                            </div>
                            <a href="https://wa.me/6281999263536?text=Halo%20Admin,%20saya%20mau%20pesan%20paket%20FTR%20BUSINESS%20durasi%206%20bulan%20(Rp175.000)" target="_blank" class="btn-variant">Pilih</a>
                        </div>
                        <div class="variant-item">
                            <div class="variant-info">
                                <div class="v-title">1 Tahun</div>
                                <div class="v-price">Rp300.000</div>
                            </div>
                            <a href="https://wa.me/6281999263536?text=Halo%20Admin,%20saya%20mau%20pesan%20paket%20FTR%20BUSINESS%20durasi%201%20tahun%20(Rp300.000)" target="_blank" class="btn-variant">Pilih</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Policies & Technical Details Section -->
    <section class="features" id="kebijakan">
        <div class="container">
            <div class="section-title">
                <h2>Ketentuan & Batasan Layanan</h2>
                <p>Komitmen transparansi penggunaan resource untuk kenyamanan bersama.</p>
            </div>
            <div class="info-grid">
                
                <div class="info-card">
                    <h3>Fair Use Policy</h3>
                    <p>Seluruh layanan FTR Coder menggunakan sistem Fair Use. Hosting ditujukan untuk website dan project dengan penggunaan resource yang wajar sesuai paket. Kami tidak menggunakan istilah Unlimited.</p>
                </div>

                <div class="info-card">
                    <h3>Larangan Penggunaan</h3>
                    <p>Layanan tidak diperbolehkan untuk aktivitas berikut:</p>
                    <ul>
                        <li>Phishing, malware, penipuan, dan spam</li>
                        <li>Aktivitas ilegal dan cryptocurrency mining</li>
                        <li>Proxy/VPN publik, torrent, dan file sharing publik</li>
                        <li>Penyimpanan backup sebagai fungsi utama</li>
                        <li>Streaming video skala besar</li>
                    </ul>
                </div>

                <div class="info-card">
                    <h3>Dukungan Teknologi</h3>
                    <p>FTR Coder mendukung berbagai teknologi seperti PHP, Python, Node.js, dan web statis. Namun, pastikan memilih paket yang sesuai karena tidak semua bahasa/framework tersedia di setiap tier paket.</p>
                </div>

                <div class="info-card">
                    <h3>Kinerja & Skala</h3>
                    <p>Mendukung project standar dan aplikasi web ringan. Untuk aplikasi dengan traffic sangat tinggi atau kebutuhan resource masif, disarankan menggunakan layanan VPS terpisah.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq" id="faq">
        <div class="container">
            <div class="section-title">
                <h2>Pertanyaan Umum (FAQ)</h2>
                <p>Informasi seputar pembelian, domain, dan upgrade layanan.</p>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">Apakah harus punya domain sendiri?</div>
                    <div class="faq-answer">Tidak. Customer bisa menggunakan subdomain gratis dari FTR Coder (contoh: namakamu.ftr-coder.com) tanpa harus membeli domain sendiri.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Teknologi apa saja yang didukung oleh FTR Coder?</div>
                    <div class="faq-answer">Kami mendukung beragam teknologi seperti PHP, Python, Node.js, serta file web statis (HTML/CSS/JS dan build React/Vue) tergantung pada paket yang dipilih.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Apakah paket FTR cocok untuk website skala besar?</div>
                    <div class="faq-answer">Tidak. Layanan ini ditujukan khusus untuk website kecil, portfolio, project development, testing, dan kebutuhan ringan skala UMKM.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Apakah bisa melakukan upgrade paket?</div>
                    <div class="faq-answer">Bisa. Jika kebutuhan websitemu berkembang, kamu dapat menghubungi admin untuk upgrade paket, penambahan resource, atau migrasi.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Bagaimana cara pembelian atau pemesanan?</div>
                    <div class="faq-answer">Cukup pilih durasi varian paket yang diinginkan lalu klik tombol pilihan untuk terhubung langsung ke WhatsApp admin.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Big CTA Section -->
    <section class="cta-banner">
        <div class="container">
            <div class="cta-card">
                <h2>Build. Deploy. Online.</h2>
                <p>Hosting terjangkau untuk developer, mahasiswa dan project website kecil mulai dari Rp5.000.</p>
                <a href="https://wa.me/6281999263536" target="_blank" class="btn btn-primary">
                    Chat WhatsApp Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <a href="/" class="logo">FTR Coder</a>
                    <p>Hosting sederhana untuk Developer, Mahasiswa & Website Kecil.</p>
                </div>
                <div class="footer-links">
                    <div class="footer-col">
                        <h4>Navigasi</h4>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#paket">Paket Hosting</a></li>
                            <li><a href="#kebijakan">Kebijakan</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="https://wa.me/6281999263536" target="_blank">Contact WhatsApp</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 FTR Coder. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu, FAQ Accordion & Live Mockup Animation -->
    <script>
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });

        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                    }
                });
                item.classList.toggle('active');
            });
        });

        // Dynamic Mockup Simulator Animation
        const urls = [
            "https://projectkamu.ftr-coder.com",
            "https://tugasakhir.ftr-coder.com",
            "https://portfolio.ftr-coder.com"
        ];
        const titles = [
            "Website Anda Online!",
            "Project Kuliah Live!",
            "Portfolio Siap Pamer!"
        ];
        
        let currentIndex = 0;
        const browserUrlEl = document.getElementById('browserUrl');
        const typingTitleEl = document.getElementById('typingTitle');

        setInterval(() => {
            currentIndex = (currentIndex + 1) % urls.length;
            browserUrlEl.textContent = urls[currentIndex];
            typingTitleEl.textContent = titles[currentIndex];
        }, 3000);
    </script>
@endverbatim
</body>
</html>