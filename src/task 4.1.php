<link rel="stylesheet" href="style.css">

<h2>Збільшити зарплату працівникам на 10%, якщо вона менша середньої зарплати по підприємству</h2>

<?php
    include_once "utils.php";

    $wages = generate_array(10, 7000, 15000);

    show_array($wages, "Зарплати працівників");
    
    $average_wage = array_sum($wages) / count($wages);
    
    $new_wages = array_map(function ($wage) use ($average_wage) {
        if ($wage < $average_wage) {
            return $wage + ($wage * 0.1);
        } else {
            return $wage;
        }
    }, $wages);
    
    echo "<br>Середня зарплата: $average_wage<br><br>";
    
    show_array($new_wages, "Повищені зарплати працівників");
