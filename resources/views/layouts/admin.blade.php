<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — FTR-Coder</title>
    <style>
        body { background: #14161a; color: #e8e6e1; font-family: -apple-system, 'Segoe UI', sans-serif; margin: 0; }
        header { display: flex; justify-content: space-between; align-items: center; padding: 1rem 1.5rem; border-bottom: 1px solid #2a2d35; }
        header .logo { font-family: 'Courier New', monospace; color: #d98e3c; font-weight: bold; }
        header nav a { color: #9a9a95; text-decoration: none; margin-left: 1rem; font-size: 0.9rem; }
        header nav a:hover, header nav a.active { color: #d98e3c; }
        main { padding: 2rem 1.5rem; max-width: 900px; margin: 0 auto; }
        button.logout { background: none; border: 1px solid #2a2d35; color: #9a9a95; padding: 0.4rem 0.9rem; border-radius: 6px; cursor: pointer; }

        .success-box {
            background: rgba(217, 142, 60, 0.12);
            border: 1px solid #d98e3c;
            color: #d98e3c;
            padding: 0.8rem 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            font-family: 'Courier New', monospace;
        }

        .form-box {
            background: #1c1f26;
            border: 1px solid #2a2d35;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        label { font-size: 0.85rem; color: #9a9a95; display: block; margin-bottom: 0.3rem; }
        select, input {
            width: 100%;
            padding: 0.55rem;
            margin-bottom: 1rem;
            background: #14161a;
            border: 1px solid #2a2d35;
            border-radius: 6px;
            color: #e8e6e1;
        }
        button.generate {
            background: #d98e3c;
            color: #14161a;
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
        }

        table { width: 100%; border-collapse: collapse; font-size: 0.88rem; }
        th, td { text-align: left; padding: 0.6rem 0.5rem; border-bottom: 1px solid #2a2d35; }
        th { color: #9a9a95; font-weight: 500; }
        .token-code { font-family: 'Courier New', monospace; color: #d98e3c; }
        .badge { padding: 0.15rem 0.5rem; border-radius: 4px; font-size: 0.75rem; }
        .badge-unused { background: rgba(217, 142, 60, 0.15); color: #d98e3c; }
        .badge-used { background: rgba(154, 154, 149, 0.15); color: #9a9a95; }
        .btn-delete {
            background: none;
            border: 1px solid #4a2c2c;
            color: #e0625a;
            padding: 0.3rem 0.6rem;
            border-radius: 5px;
            font-size: 0.78rem;
            cursor: pointer;
        }
        .btn-delete:hover { background: rgba(224, 98, 90, 0.1); }

        .pagination { margin-top: 1.5rem; display: flex; gap: 0.5rem; }
        .pagination a, .pagination span {
            padding: 0.4rem 0.7rem;
            border: 1px solid #2a2d35;
            border-radius: 5px;
            color: #9a9a95;
            text-decoration: none;
            font-size: 0.85rem;
        }
        .pagination a:hover { border-color: #d98e3c; color: #d98e3c; }
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
            background: #1c1f26;
            border: 1px solid #2a2d35;
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
            border: 1px solid #2a2d35;
            color: #9a9a95;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.85rem;
        }
        .btn-confirm {
            background: #e0625a;
            border: none;
            color: #14161a;
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