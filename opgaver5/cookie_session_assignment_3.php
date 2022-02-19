<?php

// 1.0 Using the login form from cookie_session_assignment #2. Add a cookie to logged in.
// If the cookie is set when doing login, then automatically log in

$username = 'tobi';
$password = '1234';


$error = null;
if (!empty($_POST['submit'])) {
    if (isset($_COOKIE['loggedIn'])) {
        header("Location: http://localhost/php/opgaver5/3_welcome.php");
    }
    if ($username = 'tobi') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($password == "1234") {
            setcookie('loggedIn', "Logged in", time() + 86400, '/');
            header("Location: http://localhost/php/opgaver5/3_welcome.php");
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
        <form action="3_welcome.php" method="POST">
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