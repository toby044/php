<?php 

// Sessions
// En session dør når du lukker browseren(ofte fanen også) som udgangspunkt

session_start();


// Sætter variabel
$_SESSION['name'] = "Tobias";

// Fjerner session variablen 
unset($_SESSION['name']);

// Unsetter alle værdier i din session, men beholder din session kørende
session_unset();

// Lukker din session ned       // til log ud side
session_destroy();

var_dump($_SESSION);