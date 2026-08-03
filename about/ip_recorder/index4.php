<?php
    $VisitorIP = $_SERVER['REMOTE_ADDR']; 
    $mailFrom = "andytang@berrypicking.net";
    $mailTo = "dunkenzhao@gmail.com";
    $mailSubject = "Qualification Statistics- Here's my subject";
 
    $mailSignature = "\n\n-- \n";
    $mailSignature .= "Your friendly Neighborhood web application.\n";
    $mailSignature .= "For help and other information, see http://yourwebapp/help\n";
    
    $mailBody = "Qualification Visitor Statistics\n";
	$mailBody .= $VisitorIP;
    $mailBody .= $mailSignature;

    $mailHeader  = "From: $mailFrom\r\n";
    $mailHeader .= "Reply-To: $mailFrom\r\n";
    $mailHeader .= "X-Mailer: ".MYSITE."\r\n";    
    $mailHeader .= "X-Sender-IP: {$_SERVER['REMOTE_ADDR']}\r\n";
    $mailHeader .= "Bcc: ".MONITORADDRESS."\r\n";	
	
    $mailParams = "-f$mailFrom";
    $mailResult = mail($mailTo,$mailSubject,$mailBody,$mailHeader,$mailParams);
?>

