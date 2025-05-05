<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Завантаження файлу та введення тексту</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Лабораторна №2: Робота з файлами</h1>

        <h2>Завантаження зображення</h2>
        <form action="process.php" method="post" enctype="multipart/form-data" class="upload-form">
            <input type="file" name="file" accept=".jpg, .jpeg, .png" required>
            <button type="submit">Завантажити</button>
        </form>

        <h2>Запис тексту у файл</h2>
        <form action="text.php" method="post" class="log-form">
            <textarea name="text" placeholder="Введіть текст..." required></textarea>
            <button type="submit">Записати</button>
        </form>

        <div class="links">
            <a href="list.php">Переглянути список файлів</a> |
            <a href="text.php">Переглянути log.txt</a>
        </div>
    </div>
</body>
</html>
