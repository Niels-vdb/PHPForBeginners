<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build-In Functions</title>
</head>

<body>
    <?php

    // Build-in string functions
    $string = "Hello World!";

    echo "<strong>Build-in string functions</strong>";
    echo "<br />";
    echo strlen($string);
    echo "<br />";
    echo strpos($string, "o");
    echo "<br />";
    echo strpos($string, "Wo");
    echo "<br />";
    echo str_replace("World", "Niels", $string);
    echo "<br />";
    echo strtolower($string);
    echo "<br />";
    echo strtoupper($string);
    echo "<br />";
    echo substr($string, 2, 4);
    echo "<br />";
    echo substr($string, 2, -4);
    echo "<br />";
    print_r(explode(" ", $string));
    echo "<br />";
    echo "<br />";


    // Build-in math functions
    $number = -5.5;
    echo "<strong>Build-in math functions</strong>";
    echo "<br />";
    echo abs($number);
    echo "<br />";
    echo round($number);
    echo "<br />";
    echo pow(2, 3);
    echo "<br />";
    echo sqrt(7);
    echo "<br />";
    echo rand(0, 100);
    echo "<br />";
    echo "<br />";

    // Build-in array functions
    $array1 = ["apple", "kiwi", "banana"];
    $array2 = ["cherry", "mango"];

    echo "<strong>Build-in array functions</strong>";
    echo "<br />";
    echo count($array1);
    echo "<br />";
    echo is_array($array1);
    echo "<br />";
    array_push($array1, "mango");
    print_r($array1);
    echo "<br />";
    array_pop($array1);
    print_r($array1);
    echo "<br />";
    print_r(array_reverse($array1));
    echo "<br />";
    print_r(array_merge($array1, $array2));
    echo "<br />";
    echo "<br />";
    
    // Build-in date functions
    echo "<strong>Build-in date functions</strong>";
    echo "<br />";
    echo date("Y-m-d H:i:s");
    echo "<br />";
    echo date("Y-M-D H:i:s");
    echo "<br />";
    
    echo time();
    echo "<br />";
    $date = "2024-01-09 23:44:18";
    echo strtotime($date);




    ?>
</body>

</html>