<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обробка форми</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = trim($_POST["first_name"]);
        $lastName = trim($_POST["last_name"]);

        if (!empty($firstName) && !empty($lastName)) {
            echo "<div class='section'>
                    <h3>Привітання:</h3>
                    <p>Привіт, $firstName $lastName!</p>
                  </div>";
        } else {
            echo "<div class='section'>
                    <h3>Помилка:</h3>
                    <p>Занадто Порожньо!</p>
                  </div>";
        }
    } else {
        echo "<div class='section'>
                <h3>Помилка:</h3>
                <p>Невірний метод</p>
              </div>";
    }
    ?>
</body>
</html>
