<?php

/*
*
        Lav en formular der indeholder felterne: Navn, Tlf og Email samt et skjult felt der indeholder sidens URL.
        Udskriv de indtastede værdier på siden efter at formularen er sendt.
*
*/
?>
<html style="margin:50px;">
<form action="form_assignment_1_1.php" method="GET">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="" required><br>

        <label for="tlf">Phone number:</label><br>
        <input type="tel" id="tlf" name="tlf" value="" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="" required><br><br>
        <input type="submit" value="Submit">
        <input type="hidden" id="url" name="postId" value="http://localhost/php/opgaver3/form_assignment_1.php">

</form>

</html>

<?php

