<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Scalar type (contains one value)
    $string = "Niels";
    $int = 123456789;
    $float = 123.456;
    $true = true;
    $false = false;

    // Array type
    $array =["string one", "string two"];

    // Object type
    // $object = new Car()
    ?>

    <p>A string is <?php echo $string; ?></p>
    <p>An int is <?php echo $int; ?></p>
    <p>A float is <?php echo $float; ?></p>
    <p>True is <?php echo $true; ?></p>
    <p>False is <?php echo $false; ?></p>
    <p>A array is <?php 
    foreach ($array as $index) {
        echo $index;
        echo " ";
    }
    ?></p>
</body>
</html>