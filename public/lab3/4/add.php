<?php
session_start();

if (isset($_GET['product'])) {
    $product = $_GET['product'];

    $_SESSION['cart'][] = $product;

    $previous = isset($_COOKIE['previous_cart']) ? json_decode($_COOKIE['previous_cart'], true) : [];

    if (!in_array($product, $previous)) {
        $previous[] = $product;
        setcookie('previous_cart', json_encode($previous), time() + (30 * 24 * 60 * 60)); 
    }
}

header("Location: index.php");
exit;
