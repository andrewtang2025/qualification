<?php

//console.log('world');
//echo $_SERVER['REMOTE_ADDR'];
//date_default_timezone_set('America/Chicago');
date_default_timezone_set('America/Los_Angeles'); // or your timezone
$fp = fopen("c:\\visiting\\resource.html", "a");

fwrite($fp,  date("F j, Y, g:i a") . $_SERVER['REMOTE_ADDR'] ); 
fwrite($fp, "<br>"); 
fclose($fp); 
?>
