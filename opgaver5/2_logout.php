<?php 

session_start();
session_destroy();

echo 'Du er logget ud';
header("Location: http://localhost/php/opgaver5/cookie_session_assignment_2.php");
exit();