<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — FTR-Coder</title>
    <style>
        @include('partials.design-tokens')

        body {
            background: var(--bg-dark);
            color: var(--text-light);
            font-family: -apple-system, 'Segoe UI', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .box {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 2rem;
            width: 100%;
            max-width: 340px;
        }
        h1 { font-size: 1.2rem; margin-bottom: 1.5rem; text-align: center; }
        label { font-size: 0.85rem; color: var(--text-muted); display: block; margin-bottom: 0.3rem; }
        input {
            width: 100%;
            padding: 0.6rem;
            margin-bottom: 1rem;
            background: var(--bg-dark);
            border: 1px solid var(--border);
            border-radius: 6px;
            color: var(--text-light);
        }
        button {
            width: 100%;
            padding: 0.65rem;
            background: var(--accent);
            color: var(--bg-dark);
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
        }
        .error { color: var(--danger); font-size: 0.85rem; margin-bottom: 1rem; }
    </style>
</head>
<body>
    <div class="box">
        <h1>🧑‍💻 Login Admin FTR-Coder</h1>

        @if ($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>