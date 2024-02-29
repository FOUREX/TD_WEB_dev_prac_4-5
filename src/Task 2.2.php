<link rel="stylesheet" href="style.css">

<h2>Кількість від'ємних елементів масиву</h2>

<?php
    include_once "utils.php";

    $array = generate_array(10, -1, 1);

    $negative_numbers = 0;

    echo "<table>";

    foreach ($array as $value) {
        echo "<th>$value</th>";

        if ($value < 0) {
            $negative_numbers++;
        }
    }

    echo "</table>";

    echo "Кількість від'ємних елементів масиву: $negative_numbers";
    