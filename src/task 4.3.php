<link rel="stylesheet" href="style.css">

<h2>Вивести прізвища студентів, які навчаються на «4» та «5»</h2>

<?php
    include_once "utils.php";
    
    $students = [];

    for ($i = 0; $i < 25; ++$i) {
        $students["student_$i"] = rand(2, 5);
    }

    foreach ($students as $student => $grade) {
        if ($grade > 3) {
            echo "$student: $grade<br>";
        }
    }
