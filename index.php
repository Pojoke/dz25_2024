<?php

$months = [
    1 => "Января", "Февраля", "Марта", "Апреля", "Мая", "Июня",
    "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"
];


$students = [
    ["name" => "Иван", "birthdate" => mktime(0, 0, 0, 1, 15, 2000)],
    ["name" => "Ольга", "birthdate" => strtotime("04/20/1998")],
    ["name" => "Петр", "birthdate" => mktime(0, 0, 0, 7, 5, 2001)],
    ["name" => "Анна", "birthdate" => strtotime("10/30/1999")]
];

foreach ($students as $student) {
    $birthInfo = getdate($student['birthdate']);
    
    $day = $birthInfo['mday'];
    $month = $months[$birthInfo['mon']];
    $year = $birthInfo['year'];
    
    
    $currentYear = date("Y");
    $age = $currentYear - $year;
    if (date("n") < $birthInfo['mon'] || 
        (date("n") == $birthInfo['mon'] && date("j") < $birthInfo['mday'])) {
        $age--; // Корректируем возраст, если день рождения ещё не наступил
    }

    echo "Имя: {$student['name']}<br>";
    echo "Дата рождения: {$day} {$month} {$year}<br>";
    echo "Возраст: {$age} лет<br><br>";
}
?>
