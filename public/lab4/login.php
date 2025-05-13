<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Авторизація</title>
</head>
<body>
    <h2>Авторизація</h2>
    <form action="login_process.php" method="POST">
        <label for="username">Ім'я користувача:</label>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br>
        
        <button type="submit">Увійти</button>
    </form>
</body>
</html>