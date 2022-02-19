<?php 
session_start();
session_destroy();
header("Location: http://localhost/php/form_model/login.php");
exit();