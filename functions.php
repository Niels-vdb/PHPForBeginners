<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Defined Functions</title>
</head>

<body>


    <?php

    function sayHello(string $name = "No name")
    {
        return "Hello " . $name;
    }


    echo sayHello("Niels");


    function claculator_addition(int $num01, int $num02)
    {
        $result = $num01 + $num02;
        return $result;
    }

    echo "<br />";
    echo claculator_addition(3, 6);

    $test = "Niels";

    function test()
    {
        global $test;
        return $test;
    }

    ?>



</body>

</html>