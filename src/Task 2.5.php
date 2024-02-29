<link rel="stylesheet" href="style.css">

<h2>Знаходження введеного числа в масиві</h2>

<form name="form" action="" method="post">
    <label for="number">Число для пошуку: </label>
    <input type="number" name="number" id="number" style="width: 50px;"><br>
</form>

<?php
    include_once "utils.php";

    $array = generate_array(15, 0, 10);

    show_array($array, "Масив");
    echo "<br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        
        if (in_array($number, $array)) {
            echo "Число $number знаходиться в масиві";
        } else {
            echo "Число $number не знаходиться в масиві";
        }
    }
    