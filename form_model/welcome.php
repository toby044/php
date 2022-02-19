<?php
    session_start();

    if(empty($_SESSION['auth']) || $_SESSION['auth'] == false){

        // Not logged in
        header('Location: login.php');

    }       
echo "<h1>Welcome to my site, " . $_SESSION['username'] .'</h1>';

?>

<a href="logout.php">Logout</a>
