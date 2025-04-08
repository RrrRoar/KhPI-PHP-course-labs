<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo "<div class='section section-1'>
        <h3>Змінні та їх значення:</h3>
        <p>Рядок: Привіт</p>
        <p>Ціле число: 25</p>
        <p>Число з плаваючою комою: 3.14</p>
        <p>Булеве значення: true</p>
    </div>";

    echo "<div class='section section-2'>
        <h3>Типи змінних:</h3>";
    var_dump("Привіт");
    echo "<br>";
    var_dump(25);
    echo "<br>";
    var_dump(3.14);
    echo "<br>";
    var_dump(true);
    echo "</div>";

    $firstName = "Іван";
    $lastName = "Петренко";
    $fullName = $firstName . " " . $lastName;
    echo "<div class='section section-3'>
        <h3>Конкатенація рядків:</h3>
        <p>Повне ім'я: $fullName</p>
    </div>";

    $number = 7;
    echo "<div class='section section-4'>
        <h3>Умовна конструкція:</h3>";
    if ($number % 2 == 0) {
        echo "<p>$number — парне число</p>";
    } else {
        echo "<p>$number — непарне число</p>";
    }
    echo "</div>";

    echo "<div class='section section-5'>
        <h3>Цикли:</h3>
        <p>Числа від 1 до 10 (for):</p>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$i ";
    }
    echo "<br><br>";

    echo "Числа від 10 до 1 (while):<br>";
    $j = 10;
    while ($j >= 1) {
        echo "$j ";
        $j--;
    }
    echo "<br><br>";

    $student = [
        "ім'я" => "Олена",
        "прізвище" => "Ковальчук",
        "вік" => 21,
        "спеціальність" => "Робототехніка"
    ];

    echo "<div class='section section-6'>
        <h3>Інформація про студента:</h3>
        <p>Ім'я: " . $student["ім'я"] . "</p>
        <p>Прізвище: " . $student["прізвище"] . "</p>
        <p>Вік: " . $student["вік"] . "</p>
        <p>Спеціальність: " . $student["спеціальність"] . "</p>
    </div>";

    $student["середній_бал"] = 4.8;

    echo "<div class='section section-7'>
        <h3>Оновлена інформація:</h3>";
    print_r($student);
    echo "</div>";
    ?>

    <div class="form-section">
        <h3>Введіть ваше ім’я та прізвище</h3>
        <form method="post" action="process.php">
            Ім'я: <input type="text" name="first_name"><br><br>
            Прізвище: <input type="text" name="last_name"><br><br>
            <input type="submit" value="Надіслати">
        </form>
    </div>
</body>
</html>
