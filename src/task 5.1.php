<link rel="stylesheet" href="style.css">

<h2>Замінити всі від’ємні елементи одновимірного масиву цілих чисел на значення найменшого з додатних чисел</h2>

<?php
    include_once "utils.php";

    $array = generate_array(20, -10, 10);
    $min_positive = 10;
    
    show_array($array, "Початковий масив");

    foreach ($array as $value) {
        $min_positive = ($value < $min_positive) && ($value > 0) ? $value : $min_positive;
    }

    foreach ($array as $key => $value) {
        $array[$key] = $value < 0 ? $min_positive : $value;
    }
    unset($value);

    show_array($array, "Кінцевий масив");
    
