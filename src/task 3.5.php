<link rel="stylesheet" href="style.css">

<h2>Середня температура повітря за тиждень</h2>

<?php
    include_once "utils.php";

    $array = generate_array(7, 15, 35);

    show_array($array, "Температура за тиждень");
    
    $average_temperature = sprintf("%.2f", array_sum($array) / count($array));
    
    echo "<br>Середня температура повітря за тиждень: {$average_temperature}°С";
