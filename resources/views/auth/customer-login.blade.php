
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Login | Kusina ng Ima Ku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <style>
        body {
            background: #FFF8EC;
            color: #2B1A12;
            font-family: Arial, sans-serif;
        }
        .login-card {
            max-width: 440px;
            margin: 70px auto;
            padding: 32px;
            background: white;
            border-radius: 18px;
            box-shadow: 0 8px 30px #2B1A1215;
        }
        .brand { color: #B8321F; font-weight: bold; }
        .btn-brand {
            background: #B8321F;
            color: white;
        }
        .btn-brand:hover {
            background: #922719;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="login-card">
        <h2 class="brand text-center">Kusina ng Ima Ku</h2>
        <p class="text-center mb-4">Welcome back! Please log in.</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('customer.login.store') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input id="email" type="email" name="email"
                       class="form-control" value="{{ old('email') }}"
                       required autofocus autocomplete="email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password"
                       class="form-control" required
                       autocomplete="current-password">
            </div>

            <button class="btn btn-brand w-100" type="submit">
                Log In
            </button>
        </form>

        <p class="text-center mt-4 mb-2">
            Don't have an account?
            <a href="{{ route('register') }}">Sign Up</a>
        </p>

        <p class="text-center mb-0">
            <a href="{{ route('admin.login') }}">Admin Login</a>
        </p>
    </div>
</div>
</body>
</html>
