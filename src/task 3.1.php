<link rel="stylesheet" href="style.css">

<h2>Cереднє арифметичне непарних елементів масиву</h2>

<?php
    include_once "utils.php";

    $array = generate_array(15, 0, 10);

    show_array($array, "Масив");
    
    $odd_array = array_filter($array, function ($elem) {return $elem % 2 != 0;});
    $odd_average = round(array_sum($odd_array) / count($odd_array), 2);
    
    echo "Середнє значення не парних елементів масиву: $odd_average";
