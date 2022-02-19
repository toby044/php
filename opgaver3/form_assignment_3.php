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
    // 1.0  Create an order form for a trainticket
    //      Select origin and destination in drop down box
    //      Use check boxes to order seat extras window seat and non-smoker
    //      Send orderform to form handler. If origin and destination is not filled out
    //      return to front page and present an error
    // 1.1  If orderform is correctly filled. Send to payment form.

        if(!empty($_GET['error'])){
            echo '<h2>Der er sket en fejl, u dumb fool</h2>';
        }

    ?>

    <form action="form_assignment_3_1.php" method="POST">

        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" value=""><br>

        <label for="origin">Origin:</label>
        <select name="origin"><br>
            <option value=""></option>
            <option value="kolding">Kolding</option>
            <option value="vejle">Vejle</option>
            <option value="esbjerg">Esbjerg</option>
        </select><br>

        <label for="destination">Destination:</label>
        <select name="destination">
            <option value=""></option>
            <option value="kolding">Kolding</option>
            <option value="vejle">Vejle</option>
            <option value="esbjerg">Esbjerg</option>
        </select><br>

        <label for="exseats">Would you like extra seats?</label>
        <input type="hidden" name="exseats" value="No">
        <input type="checkbox" name="exseats" value="Yes"><br>

        <label for="smokes">Smoker?</label>
        <input type="hidden" name="smokes" value="No">
        <input type="checkbox" name="smokes" value="Yes">

        <input type="submit" value="Submit" name="submit">
        
    </form>

</body>

</html>