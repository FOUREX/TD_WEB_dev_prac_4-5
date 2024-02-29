<?php
    function generate_array($length, $min, $max) {
        $array = [];

        for ($i = 0; $i < $length; $i++) {
            $array[] = rand($min, $max);
        }

        return $array;
    }

    function show_array($array, $title)
    {
        echo "$title: <table>";

        foreach ($array as $value) {
            echo "<th>$value</th>";
        }

        echo "</table>";
    }
