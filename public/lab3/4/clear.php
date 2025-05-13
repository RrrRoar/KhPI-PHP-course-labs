<?php
session_start();

if (isset($_POST['clear'])) {
    unset($_SESSION['cart']);

    setcookie('previous_cart', '', time() - 3600);
}

header("Location: index.php");
exit;
