<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — FTR-Coder</title>
    <style>
        body {
            background: #14161a;
            color: #e8e6e1;
            font-family: -apple-system, 'Segoe UI', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        .box {
            background: #1c1f26;
            border: 1px solid #2a2d35;
            border-radius: 12px;
            padding: 2rem;
            width: 100%;
            max-width: 340px;
        }
        h1 { font-size: 1.2rem; margin-bottom: 1.5rem; text-align: center; }
        label { font-size: 0.85rem; color: #9a9a95; display: block; margin-bottom: 0.3rem; }
        input {
            width: 100%;
            padding: 0.6rem;
            margin-bottom: 1rem;
            background: #14161a;
            border: 1px solid #2a2d35;
            border-radius: 6px;
            color: #e8e6e1;
        }
        button {
            width: 100%;
            padding: 0.65rem;
            background: #d98e3c;
            color: #14161a;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
        }
        .error { color: #e0625a; font-size: 0.85rem; margin-bottom: 1rem; }
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