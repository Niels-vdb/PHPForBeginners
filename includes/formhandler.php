<?php
// Checks if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritePet = htmlspecialchars($_POST["favourite-pet"]);

    if (empty($firstname) || empty($lastname) || empty($favouritePet)) {
        exit();
    }

    echo "These are the data, that the user submitted";
    echo "<br />";
    echo $firstname;
    echo "<br />";
    echo $lastname;
    echo "<br />";
    echo $favouritePet;

    header("Location: ../basicFocrms.php");
} else {
    header("Location: ../basicForms.php");
}