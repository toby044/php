<?php 
// Cookies - En metode at opbevare data i browseren

// Du har en kagedåse med cookies, som bliver sendt med når du requester noget på en hjemmeside. 
//Når du er inde på sitet får du en extra cookie som bliver sendt tilbage til kagedåsen, som du tager videre med til den næste side.
// 1/1/1970 er et UTC UNIX Timestamp. time() tager tiden fra denne dato, og du kan derfor sætte tid fra brugeren kommer ind på siden + den tid du vil have cookien der. 3600 = 1 time, 86400 = 1 dag.
// date() https://www.php.net/manual/en/datetime.format.php              d-m-Y h-i-s // Mikkels mest anvendte date() 
// Slet en cookie ved at sætte dens expire til en date i datiden, hvis en cookie har en tid der, expirer den og forsvinder.

echo "<p>Here are my cookies: </p>";

$raisinCookie = 'This cookie contains raisins !';
$chokolateCookie = 'This cookie contains.. chokolate !';
setcookie('Raisins', $raisinCookie, time()+86400*30);
setcookie('Chokolate', $chokolateCookie, time()+86400*30);

echo date('d-m-Y h-i-s').'<br>';



var_dump($_COOKIE);
