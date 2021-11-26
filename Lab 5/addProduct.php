<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supershop</title>
</head>

<body>
    <?php include "menu.php" ?>

    <form action="createProductController.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>ADD PRODUCT</legend>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="buyingPrice">Buying Price:</label><br>
            <input type="text" id="buyingPrice" name="buyingPrice"><br>
            <label for="sellingPrice">Selling Price:</label><br>
            <input type="text" id="sellingPrice" name="sellingPrice"><br>
            <hr>
            <input type="checkbox" id="display" name="display" value="Yes">
            <label for="display">Display</label><br>
            <hr>
            <input type="submit" name="createProduct" value="Save">
        </fieldset>
</body>

</html>