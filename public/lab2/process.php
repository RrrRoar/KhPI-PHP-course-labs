<?php
$uploadDir = 'uploads/';
$maxSize = 2 * 1024 * 1024; // 2MB
$allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];

$message = '';
$fileInfo = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    if ($file['error'] === UPLOAD_ERR_OK && is_uploaded_file($file['tmp_name'])) {
        if (!in_array($file['type'], $allowedTypes)) {
            $message = " Дозволено лише зображення (PNG, JPG, JPEG).";
        } elseif ($file['size'] > $maxSize) {
            $message = " Розмір файлу перевищує 2 МБ.";
        } else {
            $filename = basename($file['name']);
            $targetPath = $uploadDir . $filename;

            // Перевірка чи файл вже існує
            if (file_exists($targetPath)) {
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $nameOnly = pathinfo($filename, PATHINFO_FILENAME);
                $uniqueSuffix = date("Ymd_His") . '_' . rand(1000, 9999);
                $filename = $nameOnly . '_' . $uniqueSuffix . '.' . $ext;
                $targetPath = $uploadDir . $filename;
                $message .= " Файл з такою назвою вже існував. Ім’я змінено на: <strong>$filename</strong><br>";
            }

            if (move_uploaded_file($file['tmp_name'], $targetPath)) {
                $sizeKB = round($file['size'] / 1024, 2);
                $fileInfo = "
                    <p><strong>Файл успішно завантажено!</strong></p>
                    <ul>
                        <li>Назва: $filename</li>
                        <li>Тип: {$file['type']}</li>
                        <li>Розмір: {$sizeKB} KB</li>
                    </ul>
                    <p><a href='$targetPath' target='_blank'> Переглянути файл</a></p>
                ";
            } else {
                $message = " Помилка збереження файлу.";
            }
        }
    } else {
        $message = " Помилка при завантаженні файлу.";
    }
} else {
    $message = "Файл не було надіслано.";
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат завантаження</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="upload-result">
        <h1>Результат завантаження</h1>
        <?php if ($message): ?>
            <div class="message"><?= $message ?></div>
        <?php endif; ?>
        <?php if ($fileInfo): ?>
            <div class="file-info"><?= $fileInfo ?></div>
        <?php endif; ?>
        <a href="index.php" class="back-button">← Повернутися назад</a>
    </div>
</body>
</html>
