<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FTR-Coder — Jasa Pembuatan Website & Web App')</title>
    <meta name="description" content="@yield('meta_description', 'FTR-Coder (sebelumnya FTR-Web) — jasa pembuatan website statis, dinamis, dan web app dengan demo interaktif untuk setiap produk.')">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    <meta property="og:site_name" content="FTR-Coder">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'FTR-Coder — Jasa Pembuatan Website & Web App')">
    <meta property="og:description" content="@yield('meta_description', 'FTR-Coder (sebelumnya FTR-Web) — jasa pembuatan website statis, dinamis, dan web app dengan demo interaktif untuk setiap produk.')">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta name="twitter:card" content="summary">

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "FTR-Coder",
        "alternateName": "FTR-Web",
        "url": "{{ url('/') }}",
        "description": "Jasa pembuatan website dan aplikasi web berbasis Laravel — company profile, toko online, sistem booking, POS, hingga portal berita dan kursus.",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+6281999263536",
            "contactType": "customer service",
            "areaServed": "ID",
            "availableLanguage": ["Indonesian"]
        }
    }
    </script>

    @yield('structured_data')

    <style>
        @include('partials.design-tokens')

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background: var(--bg-dark);
            color: var(--text-light);
            font-family: -apple-system, 'Segoe UI', sans-serif;
            line-height: 1.6;
        }

        header {
            border-bottom: 1px solid var(--border);
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            font-family: 'Courier New', monospace;
            font-weight: bold;
            font-size: 1.2rem;
            color: var(--accent);
        }

        nav a {
            color: var(--text-light);
            text-decoration: none;
            margin-left: 1.5rem;
            font-size: 0.95rem;
        }

        nav a:hover { color: var(--accent); }

        main { min-height: 70vh; padding: 2rem 1.5rem; max-width: 1100px; margin: 0 auto; }

        footer {
            border-top: 1px solid var(--border);
            padding: 1.5rem;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.85rem;
        }

        footer a {
            color: var(--text-muted);
            text-decoration: none;
            margin-left: 0.75rem;
        }

        footer a:hover { color: var(--accent); }

        /* Tombol WA melayang */
        .wa-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #25D366;
            color: white;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 1.6rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            z-index: 999;
        }

        /* Overlay di belakang popup */
        .wa-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 997;
            display: none;
        }

        .wa-overlay.show { display: block; }

        /* Popup WA - di tengah layar */
        .wa-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1.75rem;
            max-width: 320px;
            width: 90%;
            box-shadow: 0 10px 40px rgba(0,0,0,0.5);
            z-index: 998;
            display: none;
        }

        .wa-popup.show { display: block; }

        .wa-popup p { font-size: 0.95rem; margin-bottom: 1rem; text-align: center; }

        .wa-popup .btn {
            background: var(--accent);
            color: var(--bg-dark);
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            display: block;
            text-align: center;
        }

        .wa-popup .close {
            position: absolute;
            top: 8px;
            right: 12px;
            cursor: pointer;
            color: var(--text-muted);
            font-size: 1.1rem;
            background: none;
            border: none;
        }
    </style>

    @yield('extra_head')
</head>
<body>

    <header>
        <div class="logo">FTR-Coder</div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('produk.index') }}">Produk</a>
            <a href="{{ route('tentang-kami') }}">Tentang Kami</a>
            <a href="{{ route('proses-kerja') }}">Proses Kerja</a>
            <a href="{{ route('kontak') }}">Kontak</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} FTR-Coder — sebelumnya FTR-Web. All rights reserved.
        <a href="{{ route('kebijakan-privasi') }}">Kebijakan Privasi</a>
    </footer>

    <a href="https://wa.me/6281999263536" target="_blank" class="wa-float" aria-label="Hubungi via WhatsApp">💬</a>

    <div class="wa-overlay" id="waOverlay" onclick="closeWaPopup()"></div>

    <div class="wa-popup" id="waPopup">
        <button class="close" onclick="closeWaPopup()">✕</button>
        <p>Butuh info lebih lanjut soal jasa kami? Yuk ngobrol langsung 👋</p>
        <a href="https://wa.me/6281999263536" target="_blank" class="btn">Chat WhatsApp</a>
    </div>

    <script>
        (function () {
            const POPUP_KEY = 'wa_popup_last_shown';
            const RESET_HOURS = 2;
            const now = Date.now();
            const lastShown = localStorage.getItem(POPUP_KEY);

            const shouldShow = !lastShown || (now - parseInt(lastShown)) > RESET_HOURS * 60 * 60 * 1000;

            if (shouldShow) {
                const popup = document.getElementById('waPopup');
                const overlay = document.getElementById('waOverlay');

                setTimeout(() => {
                    popup.classList.add('show');
                    overlay.classList.add('show');
                    localStorage.setItem(POPUP_KEY, now.toString());

                    setTimeout(() => {
                        closeWaPopup();
                    }, 15000);
                }, 1500);
            }
        })();

        function closeWaPopup() {
            document.getElementById('waPopup').classList.remove('show');
            document.getElementById('waOverlay').classList.remove('show');
        }
    </script>

    @yield('extra_scripts')
</body>
</html>