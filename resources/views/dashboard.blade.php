<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Design</title>
   
     @vite('resources/css/dashboard.css')
</head>

<body class="site-wrapper">
    <!-- Header-->
    <header class="navbar">
        <div class="logo-container">
            <img src="{{ asset('images/logopulas.jpeg') }}" alt="Logo Hotel" class="main-logo">
            <div class="logo-title">
                <p class="logo-title">PULAS</p>

            </div>
        </div>
        <nav class="nav-links">
            <a href="#">Home</a>
            <a href="#">Rooms</a>
            <a href="#">Gallery</a>
            <a href="#">About</a>
        </nav>
        <div class="profile-circle"></div>
    </header>

    <!-- Konten -->
    <main class="content-container">
        <div class="main-box">
             <h1 class="text-placeholder">Welcome to Our Website!</h1>
             <p>Lets begin your first reservation.</p>
        </div>
            <div class="image-placeholder"></div>
            <div class="text-placeholder"></div>
           
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p style="text-align: center; line-height: 60px; margin: 0;">© PULAS</p>
    </footer>

</body>

