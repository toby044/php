<?php

ini_set('error_reporting', E_ALL);

// 1.0 Create a login form, that validates the user
// If the user is authenticated, set the session variables 'auth' to true, 
// and the 'username', to the username

session_start();

$_SESSION['auth'] = false;
$_SESSION['username'] = 'tobi';

$error = null;

if (isset($_POST['submit'])) {
    if ($username = 'tobi') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($password == "1234") {
            $_SESSION['auth'] = true;
            header("Location: http://localhost/php/opgaver5/2_welcome.php");
        } else {
            $error = "Forkert password";
        }
    } else {
        $error = "Forkert brugernavn";
    }
}
?>

<html style="margin:50px;">

<body>
    <div id="page-wrap">
        <h1>Form session</h1>
        <form action="" method="POST">
            <p>
                <input type="text" name="username" id="username" required="required" value="" /> <b>Username</b>
            </p>
            <p>
                <input type="text" name="password" id="password" required="required" value="" /> <b>Password</b>
            </p>
            <input type="submit" name="submit" value="LOGIN" />
        </form>
        <p><?php echo $error; ?></p>
    </div>
</body>

</html>

<?php
    
    // 1.1 Create a logout function
    // If the logout button is pressed, set the session variables 
    // 'auth' to false, and the 'username' to null

    // Se 2_logout.php


    

    // 1.2 Create a Welcome page. Only display the welcome page if the user 
    // is authenticated and a username exists

    // Se 2_welcome.php