<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="icon" href="assets/images/items/1.jpg" type="image/x-icon"/>
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">PilihProduk</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    @if (Auth::check())
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    @else
                        <a class="nav-link" href="">Login</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Category Section -->
<section class="section-category py-5">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <a href="#" class="category-link">Foods and Drinks</a>
            </div>
            <div class="col-md">
                <a href="#" class="category-link">Home Interiors</a>
            </div>
            <div class="col-md">
                <a href="#" class="category-link">Fashion</a>
            </div>
            <div class="col-md">
                <a href="#" class="category-link">Supermarket</a>
            </div>
            <!-- Add more category links as needed -->
        </div>
    </div>
</section>

<!-- Product Section -->
<section class="section-products py-5">
    <div class="container">
        <div class="row">
            <!-- Product Cards -->
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>

<!-- Bootstrap JS Bundle with Popper via CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
