<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracy McGrady Classic Raptors Jersey - Chrispy Throwbacks</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="header-container">
            <h1 class="logo">Chrispy Throwbacks</h1>
            <nav>
                <a href="index.php" class="nav-link">Home</a>
                <a href="jerseys.php" class="nav-link">Jerseys</a>
            </nav>
            <a href="cart.php" class="cart-icon">Cart (<?php echo count($_SESSION['cart'] ?? []); ?>)</a>
        </div>
    </header>

    <section class="jersey-detail">
        <div class="jersey-image">
            <img src="images/Tracy McGrady Raptors Jersey.jpg" alt="Tracy McGrady Classic Raptors Jersey">
        </div>
        <div class="jersey-info">
            <h2 class="jersey-title">Tracy McGrady Classic Raptors Jersey</h2>
            <p class="jersey-price">$150.00</p>
            <form action="add-to-cart.php" method="POST">
                <label class="size-label">Size:</label>
                <select name="size" class="size-select">
                    <option value="S">Small</option>
                    <option value="M">Medium</option>
                    <option value="L">Large</option>
                    <option value="XL">XL</option>
                </select>
                <input type="hidden" name="name" value="Tracy McGrady Classic Raptors Jersey">
                <input type="hidden" name="price" value="$150.00">
                <input type="hidden" name="image" value="images/Tracy McGrady Raptors Jersey.jpg">
                <button type="submit" class="add-to-cart">Add to Cart</button>
            </form>
        </div>
    </section>

</body>
</html>
