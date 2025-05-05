<?php
$uploadDir = 'uploads/';
$files = is_dir($uploadDir) ? array_diff(scandir($uploadDir), ['.', '..']) : [];
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Список файлів</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Список файлів</h1>

        <?php if (!empty($files)): ?>
            <div class="file-gallery">
                <?php foreach ($files as $file): ?>
                    <div class="file-item">
                        <a href="uploads/<?= urlencode($file) ?>" download>
                            <img src="uploads/<?= urlencode($file) ?>" alt="<?= htmlspecialchars($file) ?>" width="150" height="150">
                        </a>
                        <div class="file-name"><?= htmlspecialchars($file) ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>Файлів не знайдено.</p>
        <?php endif; ?>

        <br><a href="index.php">⬅ Назад</a>
    </div>
</body>
</html>
