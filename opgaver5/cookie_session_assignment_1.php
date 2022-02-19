<?php

/*
*   1.0 Set a cookie called "cookie_1" with a value set to "true"
*/

setcookie('cookie_1', "true");

/*
*   1.1 Set a cookie called "cookie_2" with a value set to "true" which expires in 30 days
*/

setcookie('cookie_2', "true", time() + 86400 * 30);

/*
*   1.2 Set a cookie called "cookie_3" with a value set to "true" which expires when the current session ends
*/

setcookie('cookie_3', "true");

/*
*   1.3 Update "cookie_2" and set its value to false
*/

setcookie('cookie_2', "false", time() + 86400 * 30);

/*
*   1.4 Delete "cookie_1"
*/

setcookie('cookie_1', "true", time() - 3600);
