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
        main { padding: 2rem 1.5rem; max-width: 1100px; margin: 0 auto; }
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
        .badge-belum_dibayar { background: rgba(var(--accent-rgb), 0.15); color: var(--accent); }
        .badge-lunas { background: rgba(76, 175, 100, 0.15); color: #4caf64; }
        .badge-batal { background: rgba(var(--danger-rgb), 0.15); color: var(--danger); }

        /* === Dashboard & halaman manajemen (Klien/Invoice/Kwitansi) === */
        .stat-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-bottom: 1.5rem; }
        .stat-card { background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 1.25rem; }
        .stat-label { display: block; font-size: 0.8rem; color: var(--text-muted); margin-bottom: 0.4rem; }
        .stat-value { display: block; font-size: 1.5rem; font-weight: 700; font-family: 'Courier New', monospace; color: var(--accent); }
        .stat-sub { display: block; font-size: 0.78rem; color: var(--text-muted); margin-top: 0.3rem; }
        .stat-sub a { color: var(--text-muted); }

        .panel { background: var(--bg-card); border: 1px solid var(--border); border-radius: 10px; padding: 1.25rem; margin-bottom: 1.5rem; }
        .panel h3 { font-size: 0.95rem; margin-bottom: 1rem; }

        .two-col { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }
        @media (max-width: 720px) { .two-col { grid-template-columns: 1fr; } }

        .bar-chart { display: flex; align-items: flex-end; gap: 0.75rem; height: 170px; padding-top: 1rem; }
        .bar-col { flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: flex-end; height: 100%; }
        .bar-value { font-size: 0.7rem; color: var(--text-muted); margin-bottom: 0.3rem; white-space: nowrap; }
        .bar { width: 60%; background: var(--accent); border-radius: 4px 4px 0 0; min-width: 18px; }
        .bar-label { font-size: 0.72rem; color: var(--text-muted); margin-top: 0.4rem; }

        .list-row { display: flex; justify-content: space-between; align-items: center; padding: 0.6rem 0; border-bottom: 1px solid var(--border); text-decoration: none; color: var(--text-light); gap: 1rem; }
        .list-row:last-child { border-bottom: none; }
        .list-row:hover { color: var(--accent); }
        .list-title { font-size: 0.9rem; font-weight: 600; }
        .list-sub { font-size: 0.78rem; color: var(--text-muted); }
        .mut { color: var(--text-muted); font-size: 0.9rem; }

        .toolbar { display: flex; justify-content: space-between; align-items: center; gap: 1rem; margin-bottom: 1.25rem; flex-wrap: wrap; }
        .toolbar form { display: flex; gap: 0.5rem; flex-wrap: wrap; }
        .toolbar input[type="text"], .toolbar select { padding: 0.5rem 0.7rem; background: var(--bg-dark); border: 1px solid var(--border); border-radius: 6px; color: var(--text-light); font-size: 0.85rem; }

        table.data-table { width: 100%; border-collapse: collapse; font-size: 0.88rem; margin-bottom: 1rem; }
        table.data-table th, table.data-table td { text-align: left; padding: 0.65rem 0.6rem; border-bottom: 1px solid var(--border); }
        table.data-table th { color: var(--text-muted); font-weight: 500; font-size: 0.8rem; }
        table.data-table tr:hover td { background: rgba(var(--accent-rgb), 0.04); }
        table.data-table td.num { text-align: right; font-family: 'Courier New', monospace; }
        table.data-table .row-actions { display: flex; gap: 0.5rem; }
        table.data-table .row-actions a, table.data-table .row-actions button { font-size: 0.78rem; }

        .field { margin-bottom: 1.1rem; }
        .field label { display: block; font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.35rem; }
        .field input, .field select, .field textarea {
            width: 100%; padding: 0.6rem 0.7rem; background: var(--bg-dark); border: 1px solid var(--border);
            border-radius: 6px; color: var(--text-light); font-family: inherit; font-size: 0.92rem;
        }
        .field input:focus, .field select:focus, .field textarea:focus { outline: none; border-color: var(--accent); }
        .field .field-error { color: var(--danger); font-size: 0.78rem; margin-top: 0.3rem; }
        .field-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
        @media (max-width: 600px) { .field-row { grid-template-columns: 1fr; } }

        .btn { display: inline-block; padding: 0.55rem 1.1rem; border-radius: 6px; font-size: 0.88rem; font-weight: 600; text-decoration: none; border: none; cursor: pointer; font-family: inherit; }
        .btn-accent { background: var(--accent); color: var(--bg-dark); }
        .btn-outline { background: none; color: var(--text-light); border: 1px solid var(--border); }
        .btn-outline:hover { border-color: var(--accent); color: var(--accent); }
        .btn-danger { background: none; color: var(--danger); border: 1px solid var(--danger-border); }
        .btn-danger:hover { background: rgba(var(--danger-rgb), 0.1); }
        .btn-sm { padding: 0.35rem 0.7rem; font-size: 0.78rem; }

        .item-row { display: grid; grid-template-columns: 1fr 90px 150px 150px 36px; gap: 0.6rem; align-items: start; margin-bottom: 0.6rem; }
        .item-row input { width: 100%; }
        @media (max-width: 720px) { .item-row { grid-template-columns: 1fr; } }
        .item-remove { background: none; border: 1px solid var(--danger-border); color: var(--danger); border-radius: 6px; height: 38px; cursor: pointer; }

        .summary-box { max-width: 340px; margin-left: auto; }
        .summary-row { display: flex; justify-content: space-between; padding: 0.4rem 0; font-size: 0.9rem; }
        .summary-row.total { border-top: 1px solid var(--border); margin-top: 0.4rem; padding-top: 0.6rem; font-weight: 700; font-size: 1.05rem; color: var(--accent); }
        .summary-row .mut { font-size: 0.82rem; }
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
            <a href="{{ route('admin.invoice.index') }}" class="{{ request()->routeIs('admin.invoice*') ? 'active' : '' }}">Invoice</a>
            <a href="{{ route('admin.kwitansi.index') }}" class="{{ request()->routeIs('admin.kwitansi*') ? 'active' : '' }}">Kwitansi</a>
            <a href="{{ route('admin.klien.index') }}" class="{{ request()->routeIs('admin.klien*') ? 'active' : '' }}">Klien</a>
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