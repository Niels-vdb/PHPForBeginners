<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $fruits = ["Apple", 
                "Banana", 
                "Kiwi", 
                "Cherry", 
                "Pear", 
                "Orange", 
                "Melon", 
                "Blueberry", 
                "Blackberry",
            ];
    
    echo $fruits[1];
    echo "<br />";
    echo "<br />";

    // Adds item to specific index of array        
    $fruits[0] = "Green apple";
    // adds new item to end of array
    $fruits[] = "Starfruit";
    array_push($fruits, "Mango");


    unset($fruits[4]);
    $newFruitsArray = array_splice($fruits, 0, 4);
    print_r($newFruitsArray);
    echo "<br />";
    print_r($fruits);
    echo "<br />";

    array_splice($fruits, 0, 0, $newFruitsArray);

    foreach ($fruits as $fruit) {
        echo $fruit;
        echo "<br />";
    }
    
    echo "<br />";
    echo "<br />";

    // Assosiative array
    $tasks = [
        "laundry" => "Niels",
        "trash" => "Marinda",
        "vacuum" => "Nyssa",
        "dishes" => "Some Sim",
    ];

    echo $tasks["laundry"];
    echo "<br />";
    print_r($tasks);
    echo "<br />";
    echo count($tasks);
    echo "<br />";
    sort($tasks);
    print_r($tasks);
    echo "<br />";
    echo "<br />";

    // Multidimentional array
    $food = [
        "chicken",
        array("snacks", "yoghurt"),
        "fruits" => array("apple", "banana", "cherry"),
        "meat" => array("chicken", "fish"),
    ];

    echo $food[1][1];
    echo "<br />";
    echo $food["meat"][0];

    ?>


</body>
</html>