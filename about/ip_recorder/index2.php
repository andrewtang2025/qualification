<?php
$IP = $_SERVER['REMOTE_ADDR']; 
echo $IP;
$to = "atang@kilgore.edu"; $email="admin@berrypicking.net"; $subject = "The IP visitor from berrypicking"; $email = $_REQUEST['email'] ; $message = $IP ; $headers = "From: $email"; $sent = mail($to, $subject, $message, $headers) ; if($sent) {print "Your mail was sent successfully"; } else {print "We encountered an error sending your mail"; }
?>

