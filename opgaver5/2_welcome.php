<?php

// 1.2 Create a Welcome page. Only display the welcome page if the user 
// is authenticated and a username exists
session_start();

if($_SESSION['auth'] == false){
    header("Location: http://localhost/php/opgaver5/cookie_session_assignment_2.php");
}

?>

<html style="margin: 50px;">

<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <a href="2_logout.php">Logout</a>
</body>

</html>