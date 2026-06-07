<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — Indo Gummi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: #1a1a2e;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Animated background */
        body::before {
            content: '';
            position: absolute;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(47,93,80,0.3) 0%, transparent 70%);
            top: -100px; left: -100px;
            border-radius: 50%;
            animation: float1 8s ease-in-out infinite;
        }

        body::after {
            content: '';
            position: absolute;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(78,204,163,0.15) 0%, transparent 70%);
            bottom: -80px; right: -80px;
            border-radius: 50%;
            animation: float2 10s ease-in-out infinite;
        }

        @keyframes float1 {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(40px, 40px); }
        }

        @keyframes float2 {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(-30px, -30px); }
        }

        .login-wrapper {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .login-card {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 20px;
            padding: 40px 36px;
            backdrop-filter: blur(20px);
        }

        .login-brand {
            text-align: center;
            margin-bottom: 32px;
        }

        .login-brand .brand-icon {
            width: 58px; height: 58px;
            background: linear-gradient(135deg, #2f5d50, #4ecca3);
            border-radius: 16px;
            display: flex; align-items: center; justify-content: center;
            font-size: 24px;
            color: #fff;
            margin: 0 auto 14px;
            box-shadow: 0 8px 24px rgba(47,93,80,0.4);
        }

        .login-brand h1 {
            font-size: 22px;
            font-weight: 700;
            color: #fff;
            margin: 0 0 4px;
        }

        .login-brand p {
            font-size: 12px;
            color: rgba(255,255,255,0.4);
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .form-label {
            font-size: 12px;
            font-weight: 600;
            color: rgba(255,255,255,0.5);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 6px;
        }

        .form-control {
            background: rgba(255,255,255,0.05);
            border: 1.5px solid rgba(255,255,255,0.1);
            border-radius: 10px;
            padding: 11px 14px;
            font-size: 14px;
            color: #fff;
            transition: all 0.2s;
        }

        .form-control:focus {
            background: rgba(255,255,255,0.08);
            border-color: #4ecca3;
            box-shadow: 0 0 0 3px rgba(78,204,163,0.15);
            color: #fff;
            outline: none;
        }

        .form-control::placeholder { color: rgba(255,255,255,0.25); }

        .input-group-text {
            background: rgba(255,255,255,0.05);
            border: 1.5px solid rgba(255,255,255,0.1);
            border-right: none;
            color: rgba(255,255,255,0.4);
            border-radius: 10px 0 0 10px;
        }

        .input-group .form-control {
            border-left: none;
            border-radius: 0 10px 10px 0;
        }

        .form-check-input:checked {
            background-color: #4ecca3;
            border-color: #4ecca3;
        }

        .form-check-label {
            font-size: 13px;
            color: rgba(255,255,255,0.5);
        }

        .btn-login {
            width: 100%;
            background: linear-gradient(135deg, #2f5d50, #4ecca3);
            border: none;
            color: #fff;
            padding: 13px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s;
            letter-spacing: 0.5px;
            margin-top: 8px;
        }

        .btn-login:hover {
            opacity: 0.92;
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(47,93,80,0.4);
        }

        .btn-login:active { transform: translateY(0); }

        .alert-danger {
            background: rgba(220,53,69,0.15);
            border: 1px solid rgba(220,53,69,0.3);
            color: #f87171;
            border-radius: 10px;
            font-size: 13px;
            padding: 10px 14px;
        }

        .back-link {
            text-align: center;
            margin-top: 24px;
        }

        .back-link a {
            font-size: 12.5px;
            color: rgba(255,255,255,0.35);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: color 0.2s;
        }

        .back-link a:hover { color: rgba(255,255,255,0.65); }
    </style>
</head>
<body>
<div class="login-wrapper">
    <div class="login-card">
        <div class="login-brand">
            <div class="brand-icon">
                <i class="bi bi-shield-lock-fill"></i>
            </div>
            <h1>Indo Gummi</h1>
            <p>Admin Panel</p>
        </div>

        @if($errors->any())
            <div class="alert-danger mb-4">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" name="email"
                           class="form-control"
                           placeholder="admin@example.com"
                           value="{{ old('email') }}"
                           required autofocus>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" name="password"
                           class="form-control"
                           placeholder="••••••••"
                           required>
                </div>
            </div>

            <div class="mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Ingat saya</label>
                </div>
            </div>

            <button type="submit" class="btn-login">
                <i class="bi bi-box-arrow-in-right me-2"></i>
                Masuk ke Panel Admin
            </button>
        </form>
    </div>

    <div class="back-link">
        <a href="{{ route('home') }}">
            <i class="bi bi-arrow-left"></i>
            Kembali ke Website
        </a>
    </div>
</div>
</body>
</html>
