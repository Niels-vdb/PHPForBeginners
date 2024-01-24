<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes</title>
</head>

<body>
    <?php

    // Static scope
    function staticFunction()
    {
        // Declare static variable
        static $staticVar = 0;

        // Increment the static variable
        $staticVar++;

        // Return the static variable
        return $staticVar;
    }

    echo staticFunction();
    echo staticFunction();
    echo staticFunction();

    class ScopeClass
    {
        // Define a class property
        public $classVar = "Hello World!";

        // Define a class method
        public function myMethod()
        {
            // Use the class property
            echo $this->classVar; // Output: Hello World!
        }
    }

    ?>
</body>

</html>