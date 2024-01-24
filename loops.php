<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>

    <?php

    // for loop
    echo "<strong>For loop</strong> <br />";
    for ($i = 0; $i <= 10; $i++) {
        echo "This is iteration " . $i . "<br />";
    }

    echo "<br />";
    echo "<br />";

    // while loop
    echo "<strong>While loop</strong> <br />";
    $test = 5;
    while ($test < 10) {
        echo $test . "<br />";
        $test++;
    }

    echo "<br />";
    echo "<br />";

    // do while loop
    echo "<strong>Do while loop</strong> <br />";
    $test = 10;
    do {
        echo $test . "<br />";
        $test++;
    } while ($test < 10);

    echo "<br />";
    echo "<br />";

    // for each loop
    echo "<strong>For each loop</strong> <br />";
    echo "<i>Normal array</i> <br />";
    $fruits = ['apple', "kiwi", "banana"];

    foreach ($fruits as $fruit) {
        echo "This is a " . $fruit . "<br />";
    }

    echo "<br />";
    echo "<i>Associative array</i> <br />";
    $fruitColours = [
        "Apple" => "Green",
        "Banana" => "Yellow",
        "Kiwi" => "Brown",
    ];

    foreach ($fruitColours as $fruit => $colour) {
        echo "This is a " . $fruit . " That has a color of " . $colour . "<br />";
    }

    ?>

</body>

</html>