<?php
session_start();

// Remove item if requested
if (isset($_GET['remove'])) {
    $index = $_GET['remove'];
    if (isset($_SESSION['cart'][$index])) {
        array_splice($_SESSION['cart'], $index, 1);
    }
    header('Location: cart.php');
    exit;
}

// Initialize cart if empty
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$cart = $_SESSION['cart'];
$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Chrispy Throwbacks</title>
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
            <a href="cart.php" class="cart-icon">Cart (<?php echo count($_SESSION['cart']); ?>)</a>
        </div>
    </header>

    <section class="cart-section">
        <h2 class="cart-title">Your Cart</h2>

        <?php if (empty($cart)): ?>
            <p class="empty-cart">Your cart is empty.</p>
        <?php else: ?>
            <?php foreach ($cart as $index => $item): ?>
                <?php $total += floatval(str_replace('$', '', $item['price'])); ?>
                <div class="cart-item">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                    <div class="cart-item-info">
                        <h3><?php echo $item['name']; ?></h3>
                        <p><?php echo $item['price']; ?></p>
                    </div>
                    <a href="cart.php?remove=<?php echo $index; ?>" class="remove-btn">Remove</a>
                </div>
            <?php endforeach; ?>

            <div class="cart-total">
                <h3>Total: $<?php echo number_format($total, 2); ?></h3>
            </div>
        <?php endif; ?>
    </section>

</body>
</html>
