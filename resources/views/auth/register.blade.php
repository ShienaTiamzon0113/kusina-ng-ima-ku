
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up | Kusina ng Ima Ku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <style>
        body {
            background: #FFF8EC;
            color: #2B1A12;
        }
        .signup-card {
            max-width: 460px;
            margin: 45px auto;
            padding: 32px;
            background: white;
            border-radius: 18px;
            box-shadow: 0 8px 30px #2B1A1215;
        }
        .brand { color: #B8321F; font-weight: bold; }
        .btn-brand { background: #B8321F; color: white; }
        .btn-brand:hover { background: #922719; color: white; }
    </style>
</head>
<body>
<div class="container">
    <div class="signup-card">
        <h2 class="brand text-center">Kusina ng Ima Ku</h2>
        <p class="text-center mb-4">Create your customer account.</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label" for="name">Full Name</label>
                <input class="form-control" id="name" name="name"
                       value="{{ old('name') }}" required
                       autocomplete="name">
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">Email Address</label>
                <input class="form-control" id="email" type="email"
                       name="email" value="{{ old('email') }}" required
                       autocomplete="email">
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" id="password" type="password"
                       name="password" required minlength="8"
                       autocomplete="new-password">
                <small class="text-muted">Use at least 8 characters.</small>
            </div>

            <div class="mb-3">
                <label class="form-label" for="password_confirmation">
                    Confirm Password
                </label>
                <input class="form-control" id="password_confirmation"
                       type="password" name="password_confirmation"
                       required minlength="8" autocomplete="new-password">
            </div>

            <button class="btn btn-brand w-100" type="submit">
                Create Account
            </button>
        </form>

        <p class="text-center mt-4 mb-0">
            Already registered?
            <a href="{{ route('customer.login') }}">Log In</a>
        </p>
    </div>
</div>
</body>
</html>
