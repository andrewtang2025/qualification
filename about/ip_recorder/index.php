
<?php 
$logfile= 'thlog.html'; 
$IP = $_SERVER['REMOTE_ADDR']; 
$logdetails=  date("F j, Y, g:i a") . ': ' . ' '.$_SERVER['REMOTE_ADDR'].'  '.$_SERVER['REMOTE_ADDR'].' '; 
$fp = fopen($logfile, "a");  
fwrite($fp, $logdetails); 
fwrite($fp, "<br>"); 
fclose($fp);  
?>

