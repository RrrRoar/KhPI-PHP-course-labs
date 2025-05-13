<?php
session_start();

$valid_login = "admin";
$valid_password = "12345";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($login === $valid_login && $password === $valid_password) {
        $_SESSION['username'] = $login;
        header("Location: index.php");
        exit;
    } else {
        echo "<p style='color:red;'>Невірний логін або пароль. <a href='index.php'>Спробуйте ще раз</a>.</p>";
    }
}
?>
