<?php

// 1.2 Create a Welcome page. Only display the welcome page if the user 
// is authenticated and a username exists
session_start();

if(!isset($_COOKIE['loggedIn'])){
    header("Location: http://localhost/php/opgaver5/cookie_session_assignment_3.php");
}

?>

<html style="margin: 50px;">

<body>
    <h1>Welcome, <?php echo $_POST['username']; ?></h1>
    <a href="3_logout.php">Logout</a>
</body>

</html>