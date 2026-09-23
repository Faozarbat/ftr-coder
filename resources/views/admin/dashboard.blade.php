<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin — FTR-Coder</title>
    <style>
        body { background: #14161a; color: #e8e6e1; font-family: -apple-system, 'Segoe UI', sans-serif; margin: 0; }
        header { display: flex; justify-content: space-between; align-items: center; padding: 1rem 1.5rem; border-bottom: 1px solid #2a2d35; }
        header .logo { font-family: 'Courier New', monospace; color: #d98e3c; font-weight: bold; }
        main { padding: 2rem 1.5rem; }
        button.logout { background: none; border: 1px solid #2a2d35; color: #9a9a95; padding: 0.4rem 0.9rem; border-radius: 6px; cursor: pointer; }
    </style>
</head>
<body>
    <header>
        <div class="logo">FTR-Coder Admin</div>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="logout">Logout</button>
        </form>
    </header>
    <main>
        <h1>Dashboard</h1>
        <p style="color: #9a9a95; margin-top: 0.5rem;">Selamat datang, {{ auth()->user()->name }}. Fitur generate token akan ditambahkan di tahap berikutnya.</p>
    </main>
</body>
</html>