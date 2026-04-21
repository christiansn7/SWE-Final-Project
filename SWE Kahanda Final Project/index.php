<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classic NBA Jerseys</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Header with Title-->
    <header>
        <div class="header-container">
            <h1 class="logo">Chrispy Throwbacks</h1>
            <nav>
                <a href="jerseys.php" class="nav-link">Jerseys</a>
            </nav>
            <a href="cart.php" class="cart-icon">Cart (<?php echo count($_SESSION['cart'] ?? []); ?>)</a>
        </div>
    </header>

    <!--Home page description with image-->
    <section class="hero">
        <div class="hero-content">
            <h2 class="hero-text">Experience the game.</h2>
        </div>
        <div class="hero-image">
            <img src="images/Oracle Arena Fans.jpeg" alt="NBA Stadium">
        </div>
    </section>

    <!--Featured Jerseys section (4)-->
    <section class="featured">
        <h2 class="featured-title">Featured Jerseys</h2>
        <div class="product-grid">

            <a href="jersey1.php" class="product-card">
                <img src="images/Tracy McGrady Raptors Jersey.jpg" alt="Jersey 1">
                <h3 class="product-name">Tracy McGrady Classic Raptors Jersey</h3>
                <p class="product-price">$150.00</p>
            </a>

            <a href="jersey2.php" class="product-card">
                <img src="images/Dirk Mavericks Throwback Jersey.jpg" alt="Jersey 2">
                <h3 class="product-name">Dirk Nowtitzki Classic Mavericks Jersey</h3>
                <p class="product-price">$150.00</p>
            </a>

            <a href="jersey3.php" class="product-card">
                <img src="images/Scottie Pippen Bulls Throwback Jersey.jpg" alt="Jersey 3">
                <h3 class="product-name">Scottie Pippen Classic Bulls Jersey</h3>
                <p class="product-price">$150.00</p>
            </a>

            <a href="jersey4.php" class="product-card">
                <img src="images/Shaquille O'Neal Pinstripe Magic Jersey.jpg" alt="Jersey 4">
                <h3 class="product-name">Shaquille O'Neal Classic Magic Jersey</h3>
                <p class="product-price">$150.00</p>
            </a>

        </div>
    </section>

</body>
</html>
