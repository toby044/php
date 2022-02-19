<?php
ini_set('error_reporting', E_ALL);


foreach($_POST as $key => $value) {
    if(!$value) {
        $error[] = $key;
    }
}

if ($error){
    $query_string_array = array(
        'error' => $error,
        'user_input' => $_POST
    );

    $query_string = http_build_query($query_string_array);
    header('Location: ' . $_SERVER['HTTP_REFERER'].'?'.$query_string);
}