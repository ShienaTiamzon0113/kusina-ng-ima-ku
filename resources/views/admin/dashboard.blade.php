
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard | Kusina ng Ima Ku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body style="background:#FFF8EC;color:#2B1A12">
    <nav class="navbar navbar-dark" style="background:#2B1A12">
        <div class="container">
            <span class="navbar-brand">Kusina ng Ima Ku | Admin</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-light btn-sm">Log Out</button>
            </form>
        </div>
    </nav>

    <main class="container py-5">
        <h1>Admin Dashboard</h1>
        <p>Welcome, {{ auth()->user()->name }}!</p>
        <p>You are logged in as an administrator.</p>
    </main>
</body>
</html>
