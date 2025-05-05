<?php
$logFile = 'log.txt';

// Запись нового сообщения
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['text'])) {
    $text = trim($_POST['text']);
    if ($text !== '') {
        $entry = htmlspecialchars($text) . "\n---\n";
        file_put_contents($logFile, $entry, FILE_APPEND | LOCK_EX);
    }
    header("Location: text.php");
    exit();
}

// Чтение и вывод логов
$logs = file_exists($logFile) ? file_get_contents($logFile) : '';
$entries = array_filter(array_map('trim', explode('---', $logs)));
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Лог повідомлень</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Лог повідомлень</h1>
    <div class="log-entries">
        <?php foreach ($entries as $entry): ?>
            <div class="log-entry">
                <?= nl2br($entry) ?>
            </div>
        <?php endforeach; ?>
    </div>
<a href="index.php">⬅ Назад</a>

</body>
</html>
