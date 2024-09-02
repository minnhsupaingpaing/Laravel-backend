
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Client Management System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Client Management</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.index') }}">Admins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('client.index') }}">Clients</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="mt-4">
            @yield('content')
        </div>
    </div>
</body>
</html>
