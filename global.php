<?php

$i = 1;


function toto()
{
       $GLOBALS['i'] = 2;
       echo " dans la fonction". $GLOBALS['i']."<br>" ;

}


toto();
echo $i ;


?>