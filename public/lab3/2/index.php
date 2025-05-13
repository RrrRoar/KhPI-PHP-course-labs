<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php if (isset($_SESSION['username'])): ?>
    <h2> <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
    <form action="logout.php" method="post">
        <button type="submit" name="logout">Вихід</button>
    </form>
<?php else: ?>
    <h2>Вхід</h2>
    <form action="login.php" method="post">
        <label for="login">Логін:</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Увійти</button>
    </form>
<?php endif; ?>

</body>
</html>
