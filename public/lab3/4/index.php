<?php
session_start();

$cart = $_SESSION['cart'] ?? [];

$previous = isset($_COOKIE['previous_cart']) ? json_decode($_COOKIE['previous_cart'], true) : [];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Корзина покупок</title>
</head>
<body>

<h2>Товари</h2>
<ul>
    <li><a href="add.php?product=Товар 1">Додати Товар 1</a></li>
    <li><a href="add.php?product=Товар 2">Додати Товар 2</a></li>
    <li><a href="add.php?product=Товар 3">Додати Товар 3</a></li>
</ul>

<hr>

<h3>Поточна корзина</h3>
<?php if ($cart): ?>
    <ul>
        <?php foreach ($cart as $item): ?>
            <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Корзина порожня</p>
<?php endif; ?>

<h3>Попередні покупки</h3>
<?php if ($previous): ?>
    <ul>
        <?php foreach ($previous as $item): ?>
            <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Немає попередніх покупок</p>
<?php endif; ?>

<hr>
<form action="clear.php" method="post">
    <button type="submit" name="clear">Очистити корзину</button>
</form>

</body>
</html>
