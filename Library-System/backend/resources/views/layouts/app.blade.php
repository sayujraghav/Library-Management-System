<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Optional CSS -->
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
