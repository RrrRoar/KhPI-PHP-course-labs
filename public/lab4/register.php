<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Реєстрація</title>
</head>
<body>
    <h2>Реєстрація</h2>
    <form action="register_process.php" method="POST">
        <label for="username">Ім'я користувача:</label>
        <input type="text" id="username" name="username" required><br>
        
        <label for="email">Електронна пошта:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br>
        
        <button type="submit">Зареєструватися</button>
    </form>
</body>
</html>