<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // String operator
    $a = "Hello";
    $b = "World!";

    $c = $a . " " . $b;
    echo $c;

    echo "<br />";
    // Arithmetic operator
    echo 1 + 2;
    echo "<br />";
    echo 1 - 2;
    echo "<br />";
    echo 1 * 2;
    echo "<br />";
    echo 1 / 2;
    echo "<br />";
    echo 10 % 3;
    echo "<br />";
    echo 10 ** 3;
    echo "<br />";
    echo (1 + 2) * 4;
    echo "<br />";

    // Assignment operators
    $int = 2;
    $int += 4;
    echo $int;
    echo "<br />";
    $int -= 4;
    echo $int;
    echo "<br />";
    $int *= 4;
    echo $int;
    echo "<br />";
    $int /= 4;
    echo $int;
    echo "<br />";
    $int **= 4;
    echo $int;
    echo "<br />";

    // Comparison operator
    $varOne = 1;
    $varTwo = "1";
    if ($varOne == $varTwo) {
        echo "This statement is true!";
    } else {
        echo "This statement is false!";
    }
    echo "<br />";
    $varOne = 1;
    $varTwo = "1";
    if ($varOne != $varTwo) {
        echo "This statement is true!";
    } else {
        echo "This statement is false!";
    }
    echo "<br />";
    $varOne = 1;
    $varTwo = "1";
    if ($varOne === $varTwo) {
        echo "This statement is true!";
    } else {
        echo "This statement is false!";
    }
    echo "<br />";
    $varOne = 1;
    $varTwo = 4;
    if ($varOne <= $varTwo) {
        echo "This statement is true!";
    } else {
        echo "This statement is false!";
    }
    echo "<br />";

    // Logical operators
    $varOne = 1;
    $varTwo = 4;
    $varThree = 8;
    $varFour = 37;

    if ($varOne <= $varTwo and $varThree < $varFour or $varOne <= $varFour) {
        echo "This statement is true!";
    } else {
        echo "This statement is false!";
    }
    echo "<br />";
    
    if ($varOne <= $varTwo && $varThree < $varFour || $varOne <= $varFour) {
        echo "This statement is true!";
    } else {
        echo "This statement is false!";
    }
    echo "<br />";
    
    // Incrementing/decrementing operators
    $one = 1;
    echo ++$one;
    echo "<br />";
    echo --$one;
    echo "<br />";
    echo $one++;
    echo "<br />";
    echo $one--;
    ?>
</body>

</html>