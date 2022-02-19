<?php

/*
*
3.  Skriv en funktion der kan tage en string og gøre den lowercase, erstatte ø æ og å med hhv. oe ae og aa, samt erstatte mellemrum med underscores. 

    F.eks bliver "Rødgrød med fløde" til "roedgroed_med_flode"
*
*/

function lower($str)
{
    $nStr = strtolower($str);
    $nStr = str_replace(' ', '_',$nStr);
    $nStr = str_replace('ø','oe',$nStr);
    $nStr = str_replace('æ','ae',$nStr);
    $nStr = str_replace('å','aa',$nStr);
    echo $nStr;
}

echo lower("Rød grød med fløde");