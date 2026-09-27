<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — FTR-Coder</title>
    <style>
        @include('partials.design-tokens')

        body { background: var(--bg-dark); color: var(--text-light); font-family: -apple-system, 'Segoe UI', sans-serif; margin: 0; }
        header { display: flex; justify-content: space-between; align-items: center; padding: 1rem 1.5rem; border-bottom: 1px solid var(--border); }
        header .logo { font-family: 'Courier New', monospace; color: var(--accent); font-weight: bold; }
        header nav a { color: var(--text-muted); text-decoration: none; margin-left: 1rem; font-size: 0.9rem; }
        header nav a:hover, header nav a.active { color: var(--accent); }
        main { padding: 2rem 1.5rem; max-width: 900px; margin: 0 auto; }
        button.logout { background: none; border: 1px solid var(--border); color: var(--text-muted); padding: 0.4rem 0.9rem; border-radius: 6px; cursor: pointer; }

        .success-box {
            background: rgba(var(--accent-rgb), 0.12);
            border: 1px solid var(--accent);
            color: var(--accent);
            padding: 0.8rem 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-family: 'Courier New', monospace;
        }

        .form-box {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        label { font-size: 0.85rem; color: var(--text-muted); display: block; margin-bottom: 0.3rem; }
        select, input {
            width: 100%;
            padding: 0.55rem;
            margin-bottom: 1rem;
            background: var(--bg-dark);
            border: 1px solid var(--border);
            border-radius: 6px;
            color: var(--text-light);
        }
        button.generate {
            background: var(--accent);
            color: var(--bg-dark);
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
        }

        table { width: 100%; border-collapse: collapse; font-size: 0.88rem; }
        th, td { text-align: left; padding: 0.6rem 0.5rem; border-bottom: 1px solid var(--border); }
        th { color: var(--text-muted); font-weight: 500; }
        .token-code { font-family: 'Courier New', monospace; color: var(--accent); }
        .badge { padding: 0.15rem 0.5rem; border-radius: 4px; font-size: 0.75rem; }
        .badge-unused { background: rgba(var(--accent-rgb), 0.15); color: var(--accent); }
        .badge-used { background: rgba(var(--text-muted-rgb), 0.15); color: var(--text-muted); }
        .btn-delete {
            background: none;
            border: 1px solid var(--danger-border);
            color: var(--danger);
            padding: 0.3rem 0.6rem;
            border-radius: 5px;
            font-size: 0.78rem;
            cursor: pointer;
        }
        .btn-delete:hover { background: rgba(var(--danger-rgb), 0.1); }

        .pagination { margin-top: 1.5rem; display: flex; gap: 0.5rem; }
        .pagination a, .pagination span {
            padding: 0.4rem 0.7rem;
            border: 1px solid var(--border);
            border-radius: 5px;
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.85rem;
        }
        .pagination a:hover { border-color: var(--accent); color: var(--accent); }
                .confirm-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.65);
            z-index: 997;
            display: none;
        }
        .confirm-overlay.show { display: block; }

        .confirm-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 1.5rem;
            max-width: 340px;
            width: 90%;
            z-index: 998;
            display: none;
            box-shadow: 0 10px 40px rgba(0,0,0,0.5);
        }
        .confirm-box.show { display: block; }

        .btn-cancel {
            background: none;
            border: 1px solid var(--border);
            color: var(--text-muted);
            padding: 0.5rem 1rem;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.85rem;
        }
        .btn-confirm {
            background: var(--danger);
            border: none;
            color: var(--bg-dark);
            padding: 0.5rem 1rem;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">FTR-Coder Admin</div>
        <nav>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('admin.tokens') }}" class="{{ request()->routeIs('admin.tokens*') ? 'active' : '' }}">Token Demo</a>
            <form method="POST" action="{{ route('admin.logout') }}" style="display:inline;">
                @csrf
                <button type="submit" class="logout">Logout</button>
            </form>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>