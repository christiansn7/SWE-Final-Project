<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $item = [
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'image' => $_POST['image'],
        'size' => $_POST['size']
    ];

    $_SESSION['cart'][] = $item;

    header('Location: cart.php');
    exit;
}
?>
