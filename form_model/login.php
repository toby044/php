<?php 

session_start();

    if(isset($_SESSION['auth']) === true){
        
        // Already logged in

        header('Location: welcome.php'); 
    }

    define('USERNAME', 'tobi');
    define('PASSWORD', '1234');


    if($_POST){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username === USERNAME && $password === PASSWORD){
            
            //Correct username and password

            $_SESSION['auth'] = true;
            $_SESSION['username'] = $username;
            header('Location: welcome.php');
        } else {

            //Wrong username, password or both

            echo 'You fucked up the login credentials !';
        }
    }

?>
<form action="" method="post">
    <input type="text" name="username"><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in">

</form>