<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Інформація про сервер</title>
</head>
<body>
    <h2>Інформація про запит:</h2>
    <ul>
        <li><strong>IP-адреса клієнта:</strong> <?= $_SERVER['REMOTE_ADDR'] ?></li>
        <li><strong>Браузер (User-Agent):</strong> <?= htmlspecialchars($_SERVER['HTTP_USER_AGENT']) ?></li>
        <li><strong>Назва скрипта:</strong> <?= $_SERVER['PHP_SELF'] ?></li>
        <li><strong>Метод запиту:</strong> <?= $_SERVER['REQUEST_METHOD'] ?></li>
        <li><strong>Фізичний шлях до файлу:</strong> <?= $_SERVER['SCRIPT_FILENAME'] ?></li>
    </ul>
</body>
</html>
