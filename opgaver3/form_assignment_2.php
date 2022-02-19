<!DOCTYPE html>
<!--
Created by Per Toft
-->
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    // 1.0  Create a contactform containing name, address, city, zipcode
    //      Send it to a form handler
    //      If any of the form fields are not filled out, return to this page and 
    //      display an error containing information on how to prevent the error
    // 1.1  Preserve the input for the user

    if (isset($_POST['submit'])) {

        // check email
        if (empty($_POST['name'])) {
            echo 'Please insert your name' . '<br>';
        } else {

            // print værdier
            // echo htmlspecialchars($_POST['name']);
        }

        // check name
        if (empty($_POST['adress'])) {
            echo 'Please insert your adress' . '<br>';
        } else {
            // echo htmlspecialchars($_POST['adress']);
        }

        // check city
        if (empty($_POST['city'])) {
            echo 'Please insert your city' . '<br>';
        } else {
            // echo htmlspecialchars($_POST['city']);
        }

        // check zipcode
        if (empty($_POST['zip'])) {
            echo 'Please insert your zip' . '<br>';
        } else {
            // echo htmlspecialchars($_POST['zip']);
        }
    }
    ?>


    <form action="form_assignment_2.php" method="POST">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" value=""><br>

        <label for="adress">Adress</label><br>
        <input type="text" id="adress" name="adress" value=""><br>

        <label for="city">City</label><br>
        <input type="text" id="city" name="city" value=""><br>

        <label for="zip">Zipcode</label><br>
        <input type="text" id="zip" name="zip" value=""><br><br>

        <input type="submit" value="Submit" name="submit">
    </form>

</body>

</html>