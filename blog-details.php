<?php 
include('common/db.php');
if (session_status() != 2) {
    session_start();
}
$geturl = explode('/',$_SERVER['REQUEST_URI']);
$slug = $geturl[2];
$vistorId = isset($geturl[2]) ? $geturl[2] : '';
$sql = "SELECT * FROM blogs where blog_slug = '".$slug."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$data[] = array(
				'blog_id' => $row['blog_id'],
				'blog_title' => $row['blog_title'],
				'blog_slug' => $row['blog_slug'],
				'blog_author' => $row['author_name'],
				'blog_image' => $row['blog_image'],
				'attach_name' => $row['attach_name'],
				'blog_description' => $row['blog_description'],
				'blog_created_on' => $row['blog_created_on'],
		);
	}
    $rec = $data[0];
} else {
	//echo "0 results";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1, user-scalable=no">
    <title>Pragma Law & Policy | Blogs</title>
    <link rel="stylesheet" href="http://pragmalaw.in/ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <meta name="keywords" content="" />
    <meta name="description" content="Home" />
    <link rel="canonical" href="http://pragmalaw.in/home.html" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="http://pragmalaw.in/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <base />
    <link rel="shortcut icon" href="http://pragmalaw.in/img/logos2/pragmaLaw-color.png" type="image/x-icon">
    <link rel="icon" href="http://pragmalaw.in/img/logos2/pragmaLaw-color.png" type="image/x-icon">
    <link rel="stylesheet" href="http://pragmalaw.in/css/app.min.css" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body>
    <div id="modalWrapper"></div>
    <div id="homePage">
        <header id="topHeader">
            <div id="topNav">
                <nav>
                    <div class="row">
                        <div class="column navBar">
                            <a class="logo" href="home.html" id="logo"> <img src="http://pragmalaw.in/img/logos2/pragmaLaw-white.png" alt="Logo" class="whitelogo"> <img src="http://pragmalaw.in/img/logos2/pragmaLaw-color.png" alt="Logo" class="coloredlogo"> </a>
                            <ul class="mainNavItems">
                                <li class=""> <a class="mainNavItem" href="http://pragmalaw.in/home.html">Home</a> </li>
                                <li class="hasDropdown "> <a class="mainNavItem mainNavItemDropdown" href="#">Who we are</a>
                                    <div class="subNavItems">
                                        <ul class="column large-centered">
                                            <li class="mobileItem"> <a href="#" class="returnToMainMenu backLinkDark">Return to main menu</a> </li>
                                            <h2 class="subNavTitle mediumTitle red mobileItem">Who we are</h2>
                                            <li class="marketsSubNavItem">
                                                <a href="http://pragmalaw.in/our-firm.html">
                                                    <div class="subNavImageBox"> <img class="subNavImage" src="http://pragmalaw.in/img/plan.jpg" alt="navigatie image"> </div> Our Firm</a>
                                            </li>
                                            <li class="marketsSubNavItem">
                                                <a href="http://pragmalaw.in/our-team.html">
                                                    <div class="subNavImageBox"> <img class="subNavImage" src="http://pragmalaw.in/img/Relationship.jpg" alt="navigatie image"> </div> Our Team </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="hasDropdown "> <a class="mainNavItem mainNavItemDropdown" href="client-service-framework.html">What We Do</a>
                                    <div class="subNavItems">
                                        <ul class="column large-centered">
                                            <li class="mobileItem"> <a href="#" class="returnToMainMenu backLinkDark">Return to main menu</a> </li>
                                            <h2 class="subNavTitle mediumTitle red mobileItem">What We Do</h2>
                                            <li class="marketsSubNavItem">
                                                <a href="http://pragmalaw.in/law.html">
                                                    <div class="subNavImageBox"> <img class="subNavImage" src="http://pragmalaw.in/img/plan.jpg" alt="navigatie image"> </div> Law</a>
                                            </li>
                                            <li class="marketsSubNavItem">
                                                <a href="policy.html">
                                                    <div class="subNavImageBox"> <img class="subNavImage" src="http://pragmalaw.in/img/Relationship.jpg" alt="navigatie image"> </div> Policy </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=""> <a class="mainNavItem" href="http://pragmalaw.in/blog.php">News</a></li>
                                <li class="con"> <a class="mainNavItem" href="http://pragmalaw.in/contact-us.html">Contact Us</a> </li>
                            </ul>
                            <button class="mobileMenuButton"> Menu
                                <svg class="menuIcon" xmlns="http://www.w3.org/2000/svg" width="22" height="17" viewBox="0 0 22 17">
                                    <path d="M726,76h22v3H726V76Zm0,7h22v3H726V83Zm0,7h22v3H726V90Z" transform="translate(-726 -76)" /> </svg>
                                <svg class="exitIcon" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 12 12">
                                    <path d="M1287.99,158.358l-1.54,1.629-4.45-4.715-4.45,4.715-1.54-1.629,4.13-4.371-4.13-4.37,1.54-1.63L1282,152.7l4.45-4.715,1.54,1.63-4.13,4.37Z" transform="translate(-1276 -148)" /> </svg>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <section id="page-content">
            <div class="smallHeader" id="investorsHeader" style="background-image:url(http://pragmalaw.in/img/team-building1.jpg);">
                <div class="headerOverlay"></div>
                <p class="xlargeTitle white">Detail News</p> </div>
            <div class="wrapper row3">
                <section class="hoc container clear">
                    <!-- ################################################################################################ -->
                    <div class="btmspace-5011">
                        <h3 class="font-x2 nospace">Blog</h3>
                        <p class="nospace">Blog in Detail</p>
                    </div>
                    <div class="group1">
                        <article class="one">
                            <a href="#"><img class="btmspace-301" src="http://www.pragmalaw.in/pragmalaw/assets/blogs/original/<?php echo $rec['blog_image']?>" alt=""></a>
                            <h2 class="nospace font-x1"><?php echo $rec['blog_title'];?></h2>
                            <div class="dateAuthor">
                            <p>Date : <span><strong><?php echo date('d-m-Y', strtotime($rec['blog_created_on']));?></strong></span>
                            <br/>Author :<span><strong><?php echo $rec['blog_author']?></strong></span>
                                </p>
                            
                            </div>
                            <p><?php echo $rec['blog_description']; ?> </p>
                            <p><a href="http://pragmalaw.in/pragmalaw/assets/blogs/files/<?php echo $rec['attach_name']?>" download>Download FIle</a></p>
                        </article>
                    </div>
                    <!-- ################################################################################################ -->
                </section>
            </div>
        </section>
        <footer>
            <nav id="footerTop" class="row">
                <div class="column">
                    <hr /> </div>
                <div class="column footerBlocks">
                    <div class="footerSection disclaimer">
                        <h6><strong>Disclaimers</strong></h6>
                        <p>As per the rules of the Bar Council of India, we are not permitted to solicit work and advertise. The user acknowledges the following:</p>
                        <ul class="" style="margin-left: 1.25rem">
                            <li>There has been no advertisement, personal communication, solicitation, invitation or inducement of any sort whatsoever from us or any of our members to solicit any work through this website;</li>
                            <li>The user wishes to gain more information about us for his/her own information and use; </li>
                            <li>The information about us is provided to the user only on his/her specific request and any information obtained or materials downloaded from this website is completely at the user???s volition and any transmission, receipt or use of this site would not create any lawyer-client relationship.</li>
                        </ul>&nbsp;&nbsp;
                        <p>The information provided under this website is solely available at your request for informational purposes only, should not be interpreted as soliciting or advertisement. We are not liable for any consequence of any action taken by the user relying on material / information provided under this website. In cases where the user has any legal issues, he/she in all cases must seek independent legal advice</p>
                    </div>
                    <ul class="footerSection">
                        <li style="font-size: 15px"><strong>Quick Links</strong></li>
                        <li> <a href="http://pragmalaw.in/home.html">Home</a> </li>
                        <li> <a href="http://pragmalaw.in/our-firm.html">Who We Are: <strong> Our Firm</strong> </a> </li>
                        <li> <a href="http://pragmalaw.in/our-team.html">Who We Are:<strong> Our Team</strong> </a> </li>
                        <li> <a href="http://pragmalaw.in/law.html">What We Do: <strong> Law</strong></a> </li>
                        <li> <a href="http://pragmalaw.in/policy.html">What We Do:<strong> Policy</strong></a> </li>
                        <li> <a href="http://pragmalaw.in/blog.php">News</a> </li>
                        <li> <a href="http://pragmalaw.in/contact-us.html">Contact Us</a> </li>
                    </ul>
                    <ul class="footerSection">
                        <li style="font-size: 15px"><strong>Get in Touch</strong></li>
                        <li>
                            <div class="contactIcons">
                                <p> <a href="callto:+91 9500075522" class="bodyTxt  "><b><i class="fas fa-phone-square"></i>&nbsp;:</b> 080 43005524</a></p>
                                <p> <a href="callto:+91 9500075522" class="bodyTxt  "><b><i class="fas fa-mobile-alt"></i>&nbsp;:</b> +91 9916662417 </a></p>
                                <p> <a class="bodyTxt" href="mailto:contact@pragmalaw.in"><b><i class="fas fa-envelope"></i>&nbsp; :</b>contact@pragmalaw.in</a></p>
                            </div>
                            <br> </li>
                    </ul>
                </div>
                <hr />
                <div class="footerlogo"> <img src="http://pragmalaw.in/img/logos2/pragmaLaw-color.png"> </div>
            </nav>
            <section id="footerBottom">
                <div class="row">
                    <p> <b> Registered Office : </b> 1st Floor, Divya maple, 53/1-2, 8th Main, 16th Cross, Malleswaram, Bangalore ??? 560055</p>
                    <p><small>   ?? Pragma law & Policy, <script>
                            document.write(new Date().getFullYear());
                        </script>. &nbsp; All Rights Reserved.</small></p>
                </div>
            </section>
        </footer>
        <script src="http://pragmalaw.in/js/app.mind2e9.js?59858dfd58107"></script>
</body>

</html>