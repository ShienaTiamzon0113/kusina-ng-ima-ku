
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | Kusina ng Ima Ku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <style>
        body {
            background: #2B1A12;
            color: #2B1A12;
        }
        .admin-card {
            max-width: 440px;
            margin: 75px auto;
            padding: 34px;
            background: #FFF8EC;
            border-radius: 16px;
            box-shadow: 0 8px 30px #00000030;
        }
        .brand { color: #B8321F; font-weight: bold; }
        .btn-admin {
            background: #2B1A12;
            color: #FFF8EC;
        }
        .btn-admin:hover {
            background: #493124;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="admin-card">
        <h2 class="brand text-center">Kusina ng Ima Ku</h2>
        <p class="text-center">Administrator Portal</p>
        <hr>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.store') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Admin Email</label>
                <input id="email" type="email" name="email"
                       class="form-control" value="{{ old('email') }}"
                       required autocomplete="email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password"
                       class="form-control" required
                       autocomplete="current-password">
            </div>

            <button type="submit" class="btn btn-admin w-100">
                Admin Log In
            </button>
        </form>

        <p class="text-center mt-4 mb-0">
            <a href="{{ route('customer.login') }}">Back to Customer Login</a>
        </p>
    </div>
</div>
</body>
</html>
