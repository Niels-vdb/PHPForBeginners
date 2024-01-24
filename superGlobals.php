<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      // /Applications/XAMPP/xamppfiles/htdocs
      echo $_SERVER["DOCUMENT_ROOT"];
      echo "<br />";
      // /PHPForBeginners/superGlobals.php
      echo $_SERVER["PHP_SELF"];
      echo "<br />";
      // localhost
      echo $_SERVER["SERVER_NAME"];
      echo "<br />";
      // GET
      echo $_SERVER["REQUEST_METHOD"];
      echo "<br />";
      // change URL to http://localhost/PHPForBeginners/superGlobals.php?name=Niels
      echo $_GET["name"];
      echo "<br />";
      // to inspect files send in forms
      $_FILES[""];
      // Set and get cookies
      $_COOKIE[""];
      // Save sessions
      $_SESSION["username"] = "Admin";
      echo $_SESSION["username"];
      // For secrets
      $_ENV; 
    ?>
</body>
</html>