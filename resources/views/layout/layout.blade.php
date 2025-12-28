// Master Layout for Blade Files


<!DOCTYPE html>
<html>
<head>
    <title>Hotel Reservation System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Hotel Management</a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('bookings.index') }}">Bookings</a>
            @if(auth()->user()->role == 'admin')
                <a class="nav-link" href="{{ route('rooms.index') }}">Manage Rooms</a>
            @endif
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>