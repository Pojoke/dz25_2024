<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process_birthday.php" method="post">
    <label for="day">День:</label>
        <input type="number" id="day" name="day" min="1" max="31" required>
        <br>

        
        <label for="month">Месяц:</label>
        <input type="number" id="month" name="month" min="1" max="12" required>
        <br>

        
        <label for="year">Год:</label>
        <input type="number" id="year" name="year" min="1900" max="<?php echo date('Y'); ?>" required>
        <br>

        <button type="submit">Проверить</button>
    </form>
    </body>
</html>

    <?php
   
if ($_SERVER['REQUEST_METHOD']==='POST') {
   
    $day = intval($_POST['day']);
    $month = intval($_POST['month']);
    $year = intval($_POST['year']);

    if (checkdate($month,  $day , $year)) {
        echo" Вы ввели корректную дату рождения: $day.0$month.$year ";
    }
    else{
        echo"Не правильна дата ";
    }
}

    ?>














