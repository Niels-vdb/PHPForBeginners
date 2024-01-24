<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

    $bool = true;    
    $a = 3;
    $b = 4;

    if ($a < $b && !$bool) {
        echo "The first condtition is true";
    } else if ($a < $b && $bool) {
        echo "Now the second condition is true";
    } else {
        echo "None of the conditions were not true";
    }

    echo "<br />";

    switch ($a) {
        case 3:
            echo "The first case is correct";
            break;
        case 4:
            echo "The second case is correct";
            break;
        default:
            echo "None of the conditions were true";
    }

    echo "<br />";

    $result = match ($a) {
        3 => "Variable a is equal to three!",
        '3' => "Variable a is equal a string with the number three!",
        1, 2, 4, 5, 6 => "Variable a is not a three!",
        default => "None were a match!",
    };

    echo $result;

    ?>

</body>
</html>