<?php

$user_form = "
<form action='" . $_SERVER['PHP_SELF'] . "' method='post' name='autoForm'>
  <label>Месяц:</label>
  <input type='text' name='month'>
  <br>
  <label>Год:</label>
  <input type='text' name='year'>
  <br>
  <label>День:</label>
  <input type='text' name='day'>
  <br>
  <button value='submit' name='submit' type='submit'>Отправить</button>
</form>";

echo $user_form;

if (isset($_POST["submit"])) {
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];

    if (!checkdate($month, $day, $year)) {
        echo "Дата народження не коректна";
    } else {
        echo "Вітаю, ви ввели правильну дату";
    }
}
