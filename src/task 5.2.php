<link rel="stylesheet" href="style.css">

<h2>Підрахувати кількість пар сусідніх елементів одновимірного масиву цілих чисел з однаковими значеннями.</h2>

<?php
    include_once "utils.php";

    $array = generate_array(10, 0, 5);
    
    show_array($array, "Початковий масив");

    $count_of_couples = 0;

    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($array[$i] == $array[$i + 1]) {
            $count_of_couples++;
        }
    }

    echo "Кількість одинакових пар в масиві: $count_of_couples";
