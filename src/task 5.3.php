<link rel="stylesheet" href="style.css">

<h2>Визначити, яке значення зустрічається у масиві дійсних чисел найчастіше.</h2>

<?php
    include_once "utils.php";

    $array = generate_array(10, 0, 10);
    sort($array);
    
    show_array($array, "Масив");

    $number = 0;
    $frequency = 0;
    $current_number = $array[0];
    $current_frequency = 0;

    foreach ($array as $value) {
        if ($current_number != $value) {
            if ($current_frequency > $frequency) {
                $number = $current_number;
                $frequency = $current_frequency;
            }
            
            $current_number = $value;
            $current_frequency = 1;
            
            continue;
        }
        
        $current_frequency++;
    }

    echo "<br>Число яке найчастіше зустрічається: $number<br>";
    echo "Кількість: $frequency";
