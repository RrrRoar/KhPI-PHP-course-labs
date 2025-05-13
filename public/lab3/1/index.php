<?php
if (isset($_POST['delete'])) {
    setcookie("username", "", time() - 3600);
    unset($_COOKIE['username']); 
}

// Збереження імені в cookie
if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    setcookie("username", $name, time() + (7 * 24 * 60 * 60)); // 7 днів
    $_COOKIE['username'] = $name;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php if (isset($_COOKIE['username'])): ?>
    <h2> <?= htmlspecialchars($_COOKIE['username']) ?>!</h2>
    <form method="post">
        <button type="submit" name="delete">Видалити ім'я</button>
    </form>
<?php else: ?>
    <form method="post">
        <label for="name">Введіть ваше ім'я:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">Надіслати</button>
    </form>
<?php endif; ?>

</body>
</html>
