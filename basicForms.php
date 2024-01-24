<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="includes/formhandler.php" method="POST">
        <label for="firstname">Firstname:</label>
        <input required type="text" id="firstname" name="firstname" placeholder="Firstname..." />
        <br />

        <label for="lastname">Lastname:</label>
        <input required type="text" id="lastname" name="lastname" placeholder="Firstname..." />
        <br />

        <label for="favourite-pet">favourite Pet:</label>
        <select required type="text" id="favourite-pet" name="favourite-pet">
            <option value="none">None</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="bird">Bird</option>
            <option value="iguana">Iguana</option>
        </select>
        <br />

        <button type="submit">Submit</button>
    </form>
</body>

</html>