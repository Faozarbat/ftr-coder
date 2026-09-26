<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NusantaraTimes — Portal Berita & Jaringan Informasi Nasional</title>
    <style>
        :root {
            --bg-body: #f4f6f9;
            --bg-card: #ffffff;
            --border-color: #e2e8f0;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --primary: #1e3a8a; /* Deep Navy Blue Berita Profesional */
            --primary-hover: #172554;
            --accent: #dc2626; /* Red Accent / Breaking News */
            --accent-hover: #b91c1c;
            --highlight-bg: #eff6ff;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
        body { background: var(--bg-body); color: var(--text-main); min-height: 100vh; display: flex; flex-direction: column; line-height: 1.5; }

        /* Top Demo Bar */
        .demo-session-bar { background: #020617; color: #fff; padding: 8px 24px; display: flex; justify-content: space-between; align-items: center; font-size: 12px; position: sticky; top: 0; z-index: 1100; border-bottom: 1px solid #1e293b; }
        .demo-badge-pill { background: var(--accent); color: #fff; padding: 2px 8px; border-radius: 4px; font-weight: 700; text-transform: uppercase; font-size: 10px; letter-spacing: 0.5px; }
        .demo-timer-display { color: #facc15; font-weight: 600; font-family: monospace; }

        /* Main Header Portal */
        .portal-header { background: var(--bg-card); border-bottom: 1px solid var(--border-color); box-shadow: 0 1px 3px rgba(0,0,0,0.02); }
        .header-top-container { max-width: 1280px; margin: 0 auto; padding: 15px 24px; display: flex; justify-content: space-between; align-items: center; }
        .portal-brand { display: flex; flex-direction: column; text-decoration: none; }
        .brand-title { font-size: 28px; font-weight: 900; color: var(--text-main); letter-spacing: -1px; text-transform: uppercase; }
        .brand-title span { color: var(--accent); }
        .brand-subtitle { font-size: 11px; color: var(--text-muted); font-weight: 600; text-transform: uppercase; letter-spacing: 1px; margin-top: -3px; }

        /* Role Switcher Nav */
        .role-switcher-box { display: flex; gap: 4px; background: #f1f5f9; padding: 4px; border-radius: 8px; border: 1px solid var(--border-color); }
        .role-switch-btn { background: transparent; border: none; padding: 6px 14px; border-radius: 6px; font-size: 12px; font-weight: 700; color: var(--text-muted); cursor: pointer; transition: all 0.2s; }
        .role-switch-btn.active { background: var(--bg-card); color: var(--primary); box-shadow: 0 1px 2px rgba(0,0,0,0.05); }

        /* Category Navigation Bar */
        .category-nav-wrapper { background: var(--primary); color: #fff; border-top: 1px solid #1e40af; }
        .category-nav-inner { max-width: 1280px; margin: 0 auto; padding: 0 24px; display: flex; gap: 4px; overflow-x: auto; scrollbar-width: none; }
        .category-nav-inner::-webkit-scrollbar { display: none; }
        .cat-link { background: transparent; border: none; color: #cbd5e1; padding: 12px 18px; font-size: 13px; font-weight: 600; cursor: pointer; transition: all 0.2s; white-space: nowrap; border-bottom: 3px solid transparent; }
        .cat-link:hover, .cat-link.active { color: #fff; background: rgba(255,255,255,0.05); border-bottom-color: var(--accent); }

        /* Breaking News Ticker Strip */
        .breaking-strip { background: #fff; border-bottom: 1px solid var(--border-color); padding: 10px 0; }
        .breaking-strip-inner { max-width: 1280px; margin: 0 auto; padding: 0 24px; display: flex; align-items: center; gap: 15px; font-size: 13px; }
        .breaking-tag { background: var(--accent); color: #fff; padding: 3px 8px; border-radius: 4px; font-weight: 800; font-size: 11px; text-transform: uppercase; animation: pulse 2s infinite; }
        @keyframes pulse { 0% { opacity: 1; } 50% { opacity: 0.6; } 100% { opacity: 1; } }

        /* Main Container Layout */
        .portal-main-container { max-width: 1280px; margin: 30px auto; padding: 0 24px; width: 100%; flex: 1; display: grid; grid-template-columns: 1fr 340px; gap: 30px; }
        @media(max-width: 1024px) { .portal-main-container { grid-template-columns: 1fr; } }

        /* Layout Kolom Utama (Berita) */
        .content-column { display: flex; flex-direction: column; gap: 24px; }
        
        /* Headline Utama (Hero Article) */
        .hero-article-card { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.02); cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; }
        .hero-article-card:hover { transform: translateY(-3px); box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05); }
        .hero-img-box { height: 360px; background: #e2e8f0; display: flex; align-items: center; justify-content: center; font-size: 72px; border-bottom: 1px solid var(--border-color); position: relative; }
        .hero-body { padding: 30px; }
        .article-category-badge { display: inline-block; background: var(--highlight-bg); color: var(--primary); padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: 800; text-transform: uppercase; margin-bottom: 12px; letter-spacing: 0.5px; }
        .hero-title { font-size: 26px; font-weight: 800; color: var(--text-main); line-height: 1.35; margin-bottom: 12px; }
        .hero-excerpt { font-size: 15px; color: var(--text-muted); line-height: 1.6; margin-bottom: 20px; }
        .article-meta-info { display: flex; justify-content: space-between; align-items: center; font-size: 12px; color: var(--text-muted); border-top: 1px solid var(--border-color); padding-top: 15px; }

        /* Grid Berita Reguler */
        .sub-news-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
        @media(max-width: 640px) { .sub-news-grid { grid-template-columns: 1fr; } }
        
        .sub-article-card { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 10px; overflow: hidden; cursor: pointer; display: flex; flex-direction: column; justify-content: space-between; transition: all 0.2s; }
        .sub-article-card:hover { border-color: #cbd5e1; transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.03); }
        .sub-img-box { height: 180px; background: #f1f5f9; display: flex; align-items: center; justify-content: center; font-size: 42px; border-bottom: 1px solid var(--border-color); }
        .sub-body { padding: 20px; display: flex; flex-direction: column; flex: 1; }
        .sub-title { font-size: 16px; font-weight: 700; color: var(--text-main); line-height: 1.4; margin-bottom: 10px; }
        .sub-excerpt { font-size: 13px; color: var(--text-muted); line-height: 1.5; margin-bottom: 15px; flex: 1; }

        /* Sidebar Kanan */
        .sidebar-column { display: flex; flex-direction: column; gap: 24px; }
        .sidebar-widget { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.01); }
        .widget-title { font-size: 16px; font-weight: 800; color: var(--text-main); margin-bottom: 18px; padding-bottom: 8px; border-bottom: 2px solid var(--primary); display: flex; justify-content: space-between; align-items: center; text-transform: uppercase; letter-spacing: 0.5px; }
        
        /* Trending List Items */
        .trending-list { display: flex; flex-direction: column; gap: 16px; }
        .trending-item { display: flex; gap: 14px; align-items: flex-start; cursor: pointer; padding-bottom: 14px; border-bottom: 1px solid #f1f5f9; transition: opacity 0.2s; }
        .trending-item:last-child { border-bottom: none; padding-bottom: 0; }
        .trending-item:hover { opacity: 0.75; }
        .trending-number { font-size: 24px; font-weight: 900; color: var(--border-color); line-height: 1; min-width: 24px; }
        .trending-title { font-size: 13px; font-weight: 700; color: var(--text-main); line-height: 1.4; }

        /* Detailed Article View Layout */
        .detailed-article-wrapper { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 12px; padding: 40px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); }
        .back-to-home-btn { background: transparent; border: 1px solid var(--border-color); color: var(--text-muted); padding: 8px 16px; border-radius: 6px; cursor: pointer; font-size: 13px; font-weight: 600; margin-bottom: 25px; transition: all 0.2s; display: inline-flex; align-items: center; gap: 6px; }
        .back-to-home-btn:hover { background: #f8fafc; color: var(--text-main); }
        .full-article-title { font-size: 32px; font-weight: 900; color: var(--text-main); line-height: 1.3; margin: 15px 0 20px 0; }
        .full-article-content { font-size: 16px; color: #334155; line-height: 1.8; margin-top: 25px; }
        .full-article-content p { margin-bottom: 20px; }

        /* Komentar Section */
        .comments-section { margin-top: 40px; border-top: 1px solid var(--border-color); padding-top: 30px; }
        .comment-input-box { display: flex; flex-direction: column; gap: 12px; margin-bottom: 25px; }
        .comment-textarea { width: 100%; padding: 12px; border: 1px solid var(--border-color); border-radius: 8px; font-size: 14px; resize: vertical; height: 90px; }
        .comment-item { background: #f8fafc; border: 1px solid var(--border-color); border-radius: 8px; padding: 16px; margin-bottom: 12px; }
        .comment-author { font-size: 13px; font-weight: 700; color: var(--primary); margin-bottom: 4px; }
        .comment-text { font-size: 13px; color: #334155; }

        /* Admin / CMS Dashboard View Styles */
        .admin-dashboard-wrapper { grid-column: span 2; display: flex; flex-direction: column; gap: 24px; }
        .admin-top-action { display: flex; justify-content: space-between; align-items: center; background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; box-shadow: 0 2px 4px rgba(0,0,0,0.01); }
        .admin-table-container { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 12px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.01); }
        .custom-data-table { width: 100%; border-collapse: collapse; text-align: left; }
        .custom-data-table th, .custom-data-table td { padding: 16px 20px; border-bottom: 1px solid var(--border-color); font-size: 14px; }
        .custom-data-table th { background: #f8fafc; font-weight: 800; text-transform: uppercase; font-size: 11px; letter-spacing: 0.5px; color: var(--text-muted); }
        .custom-data-table tr:last-child td { border-bottom: none; }

        /* Form Modal Editor */
        .editor-form-card { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 12px; padding: 30px; margin-bottom: 24px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05); }
        .form-grid-group { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 18px; }
        @media(max-width: 640px) { .form-grid-group { grid-template-columns: 1fr; } }
        .form-control-elem { width: 100%; padding: 10px 14px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 14px; background: #fff; color: var(--text-main); }
        .form-control-elem:focus { outline: none; border-color: var(--primary); box-shadow: 0 0 0 3px rgba(30, 58, 138, 0.1); }

        /* Tombol Universal */
        .btn-primary-action { background: var(--primary); color: #fff; border: none; padding: 10px 20px; border-radius: 6px; font-weight: 700; cursor: pointer; font-size: 13px; transition: background 0.2s; display: inline-flex; align-items: center; gap: 8px; text-transform: uppercase; letter-spacing: 0.5px; }
        .btn-primary-action:hover { background: var(--primary-hover); }
        .btn-danger-action { background: #fee2e2; color: #dc2626; border: 1px solid #fecaca; padding: 6px 12px; border-radius: 4px; font-weight: 700; font-size: 11px; cursor: pointer; text-transform: uppercase; }
        .btn-danger-action:hover { background: var(--accent); color: #fff; }

        /* Sesi Expired Modal Overlay */
        .session-expired-overlay { position: fixed; inset: 0; background: rgba(2, 6, 23, 0.85); backdrop-filter: blur(6px); z-index: 9999; display: flex; align-items: center; justify-content: center; text-align: center; padding: 20px; }
        .session-expired-modal { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 16px; padding: 40px; max-width: 420px; width: 100%; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25); }
    </style>
</head>
<body>

    <!-- Bar Kontrol Sesi Demo -->
    <div class="demo-session-bar">
        <div style="display: flex; align-items: center; gap: 12px;">
            <span class="demo-badge-pill">Sistem Demo Aktif</span>
            <span style="font-weight: 500;">NusantaraTimes — Portal Berita & CMS Terintegrasi</span>
        </div>
        <div style="display: flex; align-items: center; gap: 15px;">
            <div>Sesi Berakhir: <span id="timerDisplay" class="demo-timer-display">--:--</span></div>
            <button onclick="resetSystemState()" style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); color: #fff; padding: 4px 10px; border-radius: 4px; cursor: pointer; font-size: 11px; font-weight: 600;">🔄 Reset Data</button>
        </div>
    </div>

    <!-- Header Portal Utama -->
    <header class="portal-header">
        <div class="header-top-container">
            <a href="#" onclick="switchRoleView('visitor'); filterCategoryArticles('all');" class="portal-brand">
                <span class="brand-title">Nusantara<span>Times</span></span>
                <span class="brand-subtitle">Jurnalistik Independen & Terpercaya</span>
            </a>
            
            <!-- Pengalih Role Interaktif -->
            <div class="role-switcher-box">
                <button class="role-switch-btn active" id="btnRoleVisitor" onclick="switchRoleView('visitor')">🌐 Sisi Publik (Visitor)</button>
                <button class="role-switch-btn" id="btnRoleAdmin" onclick="switchRoleView('admin')">⚙️ Panel Redaksi (Admin)</button>
            </div>
        </div>

        <!-- Navigasi Kategori Berita -->
        <div class="category-nav-wrapper">
            <div class="category-nav-inner" id="categoryNavContainer">
                <!-- Di-render dinamis oleh JavaScript -->
            </div>
        </div>
    </header>

    <!-- Breaking News Strip -->
    <div class="breaking-strip" id="breakingStripSection">
        <div class="breaking-strip-inner">
            <span class="breaking-tag">Fokus Utama</span>
            <span id="breakingTickerText" style="font-weight: 700; color: var(--text-main); cursor: pointer;" onclick="openArticleDetail(state.articles[0] ? state.articles[0].id : 1)">Memuat informasi terkini dari ruang redaksi nasional...</span>
        </div>
    </div>

    <!-- Konten Utama Halaman (Grid / Detail / Admin) -->
    <div class="portal-main-container" id="mainDynamicContainer">
        <!-- Di-render sepenuhnya oleh JavaScript sesuai State -->
    </div>

    <!-- Modal Expired Sesi -->
    <div id="sessionExpiredOverlay" class="session-expired-overlay" style="display: none;">
        <div class="session-expired-modal">
            <div style="font-size: 48px; margin-bottom: 15px;">⏳</div>
            <h2 style="font-size: 22px; font-weight: 900; margin-bottom: 8px; color: var(--text-main);">Sesi Demo Telah Habis</h2>
            <p style="color: var(--text-muted); font-size: 14px; margin-bottom: 25px;">Batas waktu token akses interaktif Anda pada server simulasi telah berakhir.</p>
            <button onclick="location.reload()" class="btn-primary-action" style="width: 100%; justify-content: center;">Muat Ulang Halaman Sesi</button>
        </div>
    </div>

    <script>
        const EXPIRES_AT_TIMESTAMP = @json($expiresAt);

        // Kumpulan Data Awal Berita Komprehensif
        const DEFAULT_ARTICLES_DATA = [
            {
                id: 1,
                category: 'nasional',
                categoryName: 'Nasional',
                title: 'Transformasi Digital Pemerintahan: Seluruh Layanan Publik Terintegrasi Lewat Satu Portal Awan Nasional',
                excerpt: 'Pemerintah pusat resmi mengumumkan migrasi besar-besaran infrastruktur server kementerian ke dalam ekosistem awan lokal berkecepatan tinggi.',
                content: 'Pemerintah Republik Indonesia melalui Kementerian Komunikasi dan Digital secara resmi mengumumkan penyelesaian migrasi data nasional ke dalam pusat komputasi awan berdaulat yang dikelola sepenuhnya oleh konsorsium insinyur lokal. Langkah strategis ini diklaim mampu memangkas anggaran belanja perangkat keras hingga 45 persen sekaligus mengamankan data sensitif kenegaraan dari ancaman siber lintas batas.<br><br>Dalam konferensi pers di Jakarta, juru bicara kabinet menegaskan bahwa sistem terpusat ini akan mulai diuji coba secara bertahap pada sepuluh kota metropolitan utama sebelum diterapkan secara nasional pada kuartal mendatang.',
                icon: '🏛️',
                date: '25 September 2026',
                author: 'Budi Santoso',
                views: 1420,
                comments: [
                    { author: 'Ahmad Fauzi', text: 'Langkah yang sangat progresif untuk efisiensi anggaran negara.' },
                    { author: 'Dewi Lestari', text: 'Semoga keamanan data warga benar-benar terjamin ketat.' }
                ]
            },
            {
                id: 2,
                category: 'ekonomi',
                categoryName: 'Ekonomi',
                title: 'Lonjakan Ekspor Produk Kreatif Lokal Tembus Angka Rekor Tertinggi Sepanjang Kuartal Ketiga',
                excerpt: 'Sektor kriya dan fesyen nusantara mendominasi pangsa pasar Asia Tenggara berkat adopsi platform manajemen digital otomatis.',
                content: 'Kementerian Koperasi dan UKM mencatat lonjakan volume ekspor produk kerajinan tangan serta fesyen lokal yang dimotori oleh adopsi teknologi pencatatan inventaris digital. Pelaku usaha mikro kini dapat langsung menghubungkan katalog produk mereka ke jaringan logistik lintas negara tanpa perantara yang rumit.<br><br>Para analis ekonomi memperkirakan tren positif ini akan terus berlanjut hingga akhir tahun seiring meningkatnya kepercayaan konsumen internasional terhadap kualitas bahan baku ramah lingkungan yang diusung oleh jenama-jenama lokal.',
                icon: '📈',
                date: '25 September 2026',
                author: 'Siti Rahmawati',
                views: 980,
                comments: [
                    { author: 'Hendra Kusuma', text: 'UMKM kita memang punya potensi luar biasa jika diberi akses digital.' }
                ]
            },
            {
                id: 3,
                category: 'tekno',
                categoryName: 'Teknologi',
                title: 'Riset Kecerdasan Buatan Berbasis Bahasa Nusantara Resmi Diluncurkan oleh Konsorsium Kampus',
                excerpt: 'Model bahasa besar (LLM) khusus dialek lokal dikembangkan untuk melestarikan kekayaan linguistik daerah.',
                content: 'Sekelompok peneliti gabungan dari berbagai universitas terkemuka di tanah air berhasil merilis model kecerdasan buatan terlatih yang mampu memahami puluhan bahasa daerah serta dialek lokal secara kontekstual. Proyek riset mandiri ini dikembangkan menggunakan fasilitas superkomputer nasional yang baru diresmikan bulan lalu.<br><br>Inisiatif ini diharapkan mampu membantu pelestarian bahasa daerah yang hampir punah sekaligus memperluas akses literasi digital bagi masyarakat di wilayah 3T (Tertinggal, Terdepan, dan Terluar).',
                icon: '🤖',
                date: '24 September 2026',
                author: 'Dr. Aris Wibowo',
                views: 750,
                comments: []
            },
            {
                id: 4,
                category: 'olahraga',
                categoryName: 'Olahraga',
                title: 'Skuad Garuda Muda Jalankan Latihan Taktikal Intensif Jelang Laga Kualifikasi Piala Asia',
                excerpt: 'Pelatih kepala fokus membangun ketahanan fisik dan akurasi umpan pendek cepat dalam sesi latihan tertutup.',
                content: 'Menghadapi turnamen tingkat benua bulan depan, tim nasional sepak bola kelompok umur memulai pemusatan latihan intensif di pusat latihan terpadu. Dengan dukungan tim analis performa berbasis sensor biometrik, setiap gerakan fisik pemain dipantau secara real-time untuk menghindari risiko cedera otot.',
                icon: '⚽',
                date: '24 September 2026',
                author: 'Reza Pratama',
                views: 1120,
                comments: []
            }
        ];

        const CATEGORIES_CONFIG = [
            { slug: 'all', name: 'Beranda Utama' },
            { slug: 'nasional', name: 'Nasional' },
            { slug: 'ekonomi', name: 'Ekonomi' },
            { slug: 'tekno', name: 'Teknologi' },
            { slug: 'olahraga', name: 'Olahraga' }
        ];

        // State Aplikasi Utama
        let state = {
            currentRole: 'visitor', // 'visitor' atau 'admin'
            activeCategory: 'all',
            selectedArticleId: null,
            articles: []
        };

        function initializeSystem() {
            const persistedData = localStorage.getItem('ftrcoder_portal_berita_master_v3');
            if (persistedData) {
                try {
                    state = JSON.parse(persistedData);
                } catch (err) {
                    loadDefaultState();
                }
            } else {
                loadDefaultState();
            }
            renderApplication();
        }

        function loadDefaultState() {
            state = {
                currentRole: 'visitor',
                activeCategory: 'all',
                selectedArticleId: null,
                articles: JSON.parse(JSON.stringify(DEFAULT_ARTICLES_DATA))
            };
            persistState();
        }

        function persistState() {
            localStorage.setItem('ftrcoder_portal_berita_master_v3', JSON.stringify(state));
        }

        function switchRoleView(roleTarget) {
            state.currentRole = roleTarget;
            state.selectedArticleId = null;
            persistState();
            renderApplication();
        }

        function filterCategoryArticles(catSlug) {
            state.activeCategory = catSlug;
            state.selectedArticleId = null;
            persistState();
            renderApplication();
        }

        function openArticleDetail(articleId) {
            state.selectedArticleId = articleId;
            // Tambahkan jumlah view simulasi
            const target = state.articles.find(a => a.id === articleId);
            if (target) {
                target.views = (target.views || 0) + 1;
                persistState();
            }
            window.scrollTo({ top: 0, behavior: 'smooth' });
            renderApplication();
        }

        function renderApplication() {
            // Render Tombol Role di Header
            document.getElementById('btnRoleVisitor').className = `role-switch-btn ${state.currentRole === 'visitor' ? 'active' : ''}`;
            document.getElementById('btnRoleAdmin').className = `role-switch-btn ${state.currentRole === 'admin' ? 'active' : ''}`;

            // Render Navigasi Kategori
            const catNavEl = document.getElementById('categoryNavContainer');
            catNavEl.innerHTML = CATEGORIES_CONFIG.map(cat => `
                <button class="cat-link ${state.activeCategory === cat.slug && state.selectedArticleId === null && state.currentRole === 'visitor' ? 'active' : ''}" onclick="filterCategoryArticles('${cat.slug}')">${cat.name}</button>
            `).join('');

            // Atur Tampilan Breaking News Strip
            const breakingStrip = document.getElementById('breakingStripSection');
            if (state.currentRole === 'admin' || state.selectedArticleId !== null) {
                breakingStrip.style.display = 'none';
            } else {
                breakingStrip.style.display = 'block';
                if (state.articles.length > 0) {
                    document.getElementById('breakingTickerText').innerText = state.articles[0].title;
                }
            }

            const mainContainer = document.getElementById('mainDynamicContainer');

            // --- TAMPILAN 1: PANEL REDAKSI / ADMIN (CMS) ---
            if (state.currentRole === 'admin') {
                mainContainer.innerHTML = `
                    <div class="admin-dashboard-wrapper">
                        <div class="admin-top-action">
                            <div>
                                <h2 style="font-size: 20px; font-weight: 900; color: var(--text-main);">Dashboard Manajemen Redaksi (CMS)</h2>
                                <p style="color: var(--text-muted); font-size: 13px; margin-top: 4px;">Kelola publikasi artikel berita, tambah konten baru, atau hapus artikel secara instan.</p>
                            </div>
                            <button class="btn-primary-action" onclick="toggleEditorForm(true)">+ Buat Berita Baru</button>
                        </div>

                        <div id="editorFormContainer" class="editor-form-card" style="display: none;">
                            <h3 style="font-size: 16px; font-weight: 800; margin-bottom: 20px; color: var(--text-main);">Form Publikasi Artikel Jurnalistik</h3>
                            <div class="form-grid-group">
                                <div>
                                    <label style="display:block; font-size:12px; font-weight:700; margin-bottom:6px; color:var(--text-main);">Judul Artikel Utama</label>
                                    <input type="text" id="inputNewTitle" class="form-control-elem" placeholder="Masukkan judul berita yang menarik...">
                                </div>
                                <div>
                                    <label style="display:block; font-size:12px; font-weight:700; margin-bottom:6px; color:var(--text-main);">Kategori Berita</label>
                                    <select id="inputNewCategory" class="form-control-elem">
                                        <option value="nasional">Nasional</option>
                                        <option value="ekonomi">Ekonomi</option>
                                        <option value="tekno">Teknologi</option>
                                        <option value="olahraga">Olahraga</option>
                                    </select>
                                </div>
                            </div>
                            <div style="margin-bottom: 18px;">
                                <label style="display:block; font-size:12px; font-weight:700; margin-bottom:6px; color:var(--text-main);">Ringkasan Singkat (Excerpt)</label>
                                <input type="text" id="inputNewExcerpt" class="form-control-elem" placeholder="Tuliskan ringkasan satu paragraf pendek...">
                            </div>
                            <div style="margin-bottom: 20px;">
                                <label style="display:block; font-size:12px; font-weight:700; margin-bottom:6px; color:var(--text-main);">Isi Berita Lengkap</label>
                                <textarea id="inputNewContent" class="form-control-elem" style="height: 140px; resize: vertical;" placeholder="Tulis atau salin naskah berita lengkap di sini..."></textarea>
                            </div>
                            <div style="display: flex; gap: 10px;">
                                <button class="btn-primary-action" onclick="commitNewArticle()">Simpan & Publikasikan</button>
                                <button class="btn-primary-action" style="background: #e2e8f0; color: var(--text-main);" onclick="toggleEditorForm(false)">Batal</button>
                            </div>
                        </div>

                        <div class="admin-table-container">
                            <table class="custom-data-table">
                                <thead>
                                    <tr>
                                        <th>Judul Artikel Berita</th>
                                        <th>Kategori</th>
                                        <th>Penulis</th>
                                        <th>Tanggal</th>
                                        <th>Dilihat</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ${state.articles.map(art => `
                                        <tr>
                                            <td><strong>${art.title}</strong></td>
                                            <td><span style="background: var(--highlight-bg); color: var(--primary); padding: 3px 8px; border-radius: 4px; font-size: 11px; font-weight: 800; text-transform: uppercase;">${art.categoryName || art.category}</span></td>
                                            <td style="color: var(--text-muted);">${art.author}</td>
                                            <td style="color: var(--text-muted);">${art.date}</td>
                                            <td style="color: var(--text-muted);">${art.views || 0}x</td>
                                            <td style="text-align: center;">
                                                <button class="btn-danger-action" onclick="deleteArticleItem(${art.id})">Hapus</button>
                                            </td>
                                        </tr>
                                    `).join('')}
                                </tbody>
                            </table>
                        </div>
                    </div>
                `;
                return;
            }

            // --- TAMPILAN 2: DETAIL ARTIKEL PUBLIK ---
            if (state.selectedArticleId !== null) {
                const article = state.articles.find(a => a.id === state.selectedArticleId);
                if (!article) {
                    state.selectedArticleId = null;
                    renderApplication();
                    return;
                }

                mainContainer.style.gridTemplateColumns = '1fr';
                mainContainer.innerHTML = `
                    <div class="detailed-article-wrapper">
                        <button class="back-to-home-btn" onclick="openArticleDetail(null)">← Kembali ke Beranda Utama</button>
                        
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                            <span class="article-category-badge">${article.categoryName || article.category}</span>
                            <span style="color: var(--text-muted); font-size: 13px;">• Dipublikasikan pada ${article.date}</span>
                        </div>

                        <h1 class="full-article-title">${article.title}</h1>
                        
                        <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border-color); padding-bottom: 15px; margin-bottom: 25px; font-size: 13px; color: var(--text-muted);">
                            <div>Jurnalis: <strong style="color: var(--text-main);">${article.author}</strong></div>
                            <div>Dibaca: ${article.views || 0} kali</div>
                        </div>

                        <div style="font-size: 80px; text-align: center; background: #f8fafc; border: 1px solid var(--border-color); border-radius: 12px; padding: 40px; margin-bottom: 30px;">
                            ${article.icon}
                        </div>

                        <div class="full-article-content">
                            ${article.content}
                        </div>

                        <!-- Kolom Komentar Interaktif -->
                        <div class="comments-section">
                            <h3 style="font-size: 18px; font-weight: 800; margin-bottom: 16px; color: var(--text-main);">Diskusi & Tanggapan Pembaca (${(article.comments || []).length})</h3>
                            
                            <div class="comment-input-box">
                                <textarea id="commentTextInput" class="comment-textarea" placeholder="Tulis tanggapan atau opini Anda terhadap artikel ini..."></textarea>
                                <div>
                                    <button class="btn-primary-action" onclick="submitComment(${article.id})">Kirim Komentar</button>
                                </div>
                            </div>

                            <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 20px;">
                                ${(article.comments || []).length === 0 ? '<p style="color: var(--text-muted); font-size: 13px;">Belum ada komentar. Jadilah yang pertama memberikan tanggapan.</p>' :
                                  article.comments.map(c => `
                                    <div class="comment-item">
                                        <div class="comment-author">${c.author}</div>
                                        <div class="comment-text">${c.text}</div>
                                    </div>
                                  `).join('')}
                            </div>
                        </div>
                    </div>
                `;
                return;
            }

            // --- TAMPILAN 3: PORTAL UTAMA / BERANDA PUBLIK (MULTI-KOLOM) ---
            mainContainer.style.gridTemplateColumns = '1fr 340px';
            
            // Filter Berita Sesuai Kategori
            const filteredList = state.activeCategory === 'all'
                ? state.articles
                : state.articles.filter(a => a.category === state.activeCategory);

            const heroArticle = filteredList.length > 0 ? filteredList[0] : null;
            const subArticles = filteredList.length > 1 ? filteredList.slice(1) : [];

            mainContainer.innerHTML = `
                <!-- Kolom Kiri: Berita Utama & Grid -->
                <div class="content-column">
                    ${heroArticle ? `
                        <div class="hero-article-card" onclick="openArticleDetail(${heroArticle.id})">
                            <div class="hero-img-box">${heroArticle.icon}</div>
                            <div class="hero-body">
                                <span class="article-category-badge">${heroArticle.categoryName || heroArticle.category}</span>
                                <h2 class="hero-title">${heroArticle.title}</h2>
                                <p class="hero-excerpt">${heroArticle.excerpt}</p>
                                <div class="article-meta-info">
                                    <span>Oleh <strong>${heroArticle.author}</strong></span>
                                    <span>${heroArticle.date} •${heroArticle.views || 0} Pembaca</span>
                                </div>
                            </div>
                        </div>
                    ` : '<div style="background:var(--bg-card); padding:40px; border-radius:12px; text-align:center; color:var(--text-muted);">Tidak ada artikel berita dalam kategori ini.</div>'}

                    ${subArticles.length > 0 ? `
                        <div style="margin-top: 10px;">
                            <h3 style="font-size: 16px; font-weight: 800; margin-bottom: 16px; text-transform: uppercase; color: var(--text-main); border-left: 4px solid var(--primary); padding-left: 10px;">Berita Terkait Lainnya</h3>
                            <div class="sub-news-grid">
                                ${subArticles.map(sub => `
                                    <div class="sub-article-card" onclick="openArticleDetail(${sub.id})">
                                        <div class="sub-img-box">${sub.icon}</div>
                                        <div class="sub-body">
                                            <div>
                                                <span class="article-category-badge" style="margin-bottom: 8px;">${sub.categoryName || sub.category}</span>
                                                <h4 class="sub-title">${sub.title}</h4>
                                                <p class="sub-excerpt">${sub.excerpt}</p>
                                            </div>
                                            <div class="article-meta-info" style="margin-top: 15px;">
                                                <span>${sub.date}</span>
                                                <span>${sub.views || 0} Dilihat</span>
                                            </div>
                                        </div>
                                    </div>
                                `).join('')}
                            </div>
                        </div>
                    ` : ''}
                </div>

                <!-- Kolom Kanan: Sidebar Widget Trending -->
                <div class="sidebar-column">
                    <div class="sidebar-widget">
                        <div class="widget-title">Terpopuler Hari Ini</div>
                        <div class="trending-list">
                            ${state.articles.slice(0, 4).map((art, idx) => `
                                <div class="trending-item" onclick="openArticleDetail(${art.id})">
                                    <div class="trending-number">0${idx + 1}</div>
                                    <div>
                                        <div style="font-size: 10px; font-weight: 800; color: var(--primary); text-transform: uppercase; margin-bottom: 2px;">${art.categoryName || art.category}</div>
                                        <div class="trending-title">${art.title}</div>
                                    </div>
                                </div>
                            `).join('')}
                        </div>
                    </div>

                    <div class="sidebar-widget" style="background: var(--primary); color: #fff; border: none;">
                        <div class="widget-title" style="color: #fff; border-bottom-color: var(--accent);">Buletin Mandiri</div>
                        <p style="font-size: 13px; color: #cbd5e1; line-height: 1.6; margin-bottom: 15px;">Dapatkan ringkasan eksklusif laporan jurnalistik mendalam langsung ke perangkat Anda setiap pagi.</p>
                        <input type="text" placeholder="Alamat email Anda..." style="width: 100%; padding: 10px; border-radius: 6px; border: none; margin-bottom: 10px; font-size: 13px;">
                        <button class="btn-primary-action" style="width: 100%; justify-content: center; background: var(--accent);" onclick="alert('Terima kasih telah mendaftar buletin NusantaraTimes!')">Berlangganan Sekarang</button>
                    </div>
                </div>
            `;
        }

        function toggleEditorForm(show) {
            document.getElementById('editorFormContainer').style.display = show ? 'block' : 'none';
        }

        function commitNewArticle() {
            const title = document.getElementById('inputNewTitle').value.trim();
            const category = document.getElementById('inputNewCategory').value;
            const excerpt = document.getElementById('inputNewExcerpt').value.trim();
            const content = document.getElementById('inputNewContent').value.trim();

            if (!title || !excerpt || !content) {
                alert('Mohon lengkapi seluruh field formulir artikel dengan benar!');
                return;
            }

            const categoryLabels = { nasional: 'Nasional', ekonomi: 'Ekonomi', tekno: 'Teknologi', olahraga: 'Olahraga' };

            const newArticleObj = {
                id: Date.now(),
                category: category,
                categoryName: categoryLabels[category] || category,
                title: title,
                excerpt: excerpt,
                content: content.replace(/\n/g, '<br>'),
                icon: '📰',
                date: 'Hari ini',
                author: 'Redaktur Pelaksana',
                views: 1,
                comments: []
            };

            state.articles.unshift(newArticleObj);
            persistState();
            toggleEditorForm(false);
            renderApplication();
            alert('Artikel berita berhasil dipublikasikan secara live ke portal.');
        }

        function deleteArticleItem(id) {
            if (confirm('Yakin ingin menghapus artikel berita ini dari sistem redaksi?')) {
                state.articles = state.articles.filter(a => a.id !== id);
                persistState();
                renderApplication();
            }
        }

        function submitComment(articleId) {
            const commentInput = document.getElementById('commentTextInput');
            const commentText = commentInput.value.trim();

            if (!commentText) {
                alert('Komentar tidak boleh kosong!');
                return;
            }

            const targetArticle = state.articles.find(a => a.id === articleId);
            if (targetArticle) {
                if (!targetArticle.comments) targetArticle.comments = [];
                targetArticle.comments.unshift({
                    author: 'Pembaca Setia (' + Math.floor(Math.random() * 899 + 100) + ')',
                    text: commentText
                });
                persistState();
                renderApplication();
            }
        }

        function resetSystemState() {
            localStorage.removeItem('ftrcoder_portal_berita_master_v3');
            loadDefaultState();
            renderApplication();
            alert('Data sistem demo berhasil direset total ke awal.');
        }

        // Pengawas Timer Sesi Demo
        if (EXPIRES_AT_TIMESTAMP) {
            const expiryTimeMs = new Date(EXPIRES_AT_TIMESTAMP).getTime();
            setInterval(() => {
                const diffTime = expiryTimeMs - Date.now();
                if (diffTime <= 0) {
                    document.getElementById('sessionExpiredOverlay').style.display = 'flex';
                    return;
                }
                const minutesLeft = Math.floor((diffTime % 3600000) / 60000);
                const secondsLeft = Math.floor((diffTime % 60000) / 1000);
                document.getElementById('timerDisplay').innerText = String(minutesLeft).padStart(2, '0') + ':' + String(secondsLeft).padStart(2, '0');
            }, 1000);
        }

        window.onload = initializeSystem;
    </script>
</body>
</html>