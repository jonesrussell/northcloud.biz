<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'North Cloud')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <div class="top-bar">
            <span>Fast Delivery</span>
            <span>Secure Payment</span>
            <span>Scalable Solutions</span>
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/store">Store</a></li>
                <li><a href="/services">Services & Assortment</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>© 2025 North Cloud</footer>
</body>
</html> 