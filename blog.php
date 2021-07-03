<?php include('common/db.php');

$sql = "SELECT * FROM blogs where blog_status = 1 order by blog_id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$data[] = array(
				'blog_id' => $row['blog_id'],
				'blog_title' => $row['blog_title'],
				'blog_slug' => $row['blog_slug'],
				'author_name' => $row['author_name'],
				'blog_image' => $row['blog_image'],
				'blog_description' => $row['blog_description'],
				'blog_created_on' => $row['blog_created_on'],
		);
	}
} else {
	echo "0 results";
}
//echo"<pre>";print_r($data);exit;
//$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1, user-scalable=no">
    <title>Pragma Law & Policy | Blogs</title>
    <link rel="stylesheet" href="ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <meta name="keywords" content="" />
    <meta name="description" content="Home" />
    <link rel="canonical" href="home.html" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <base />
    <link rel="shortcut icon" href="img/logos2/pragmaLaw-color.png" type="image/x-icon">
    <link rel="icon" href="img/logos2/pragmaLaw-color.png" type="image/x-icon">
    <link rel="stylesheet" href="css/app.min.css" />
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
                            <a class="logo" href="home.html" id="logo"> <img src="img/logos2/pragmaLaw-white.png" alt="Logo" class="whitelogo"> <img src="img/logos2/pragmaLaw-color.png" alt="Logo" class="coloredlogo"> </a>
                            <ul class="mainNavItems">
                                <li class=""> <a class="mainNavItem" href="home.html">Home</a> </li>
                                <li class="hasDropdown "> <a class="mainNavItem mainNavItemDropdown" href="#">Who we are</a>
                                    <div class="subNavItems">
                                        <ul class="column large-centered">
                                            <li class="mobileItem"> <a href="#" class="returnToMainMenu backLinkDark">Return to main menu</a> </li>
                                            <h2 class="subNavTitle mediumTitle red mobileItem">Who we are</h2>
                                            <li class="marketsSubNavItem">
                                                <a href="our-firm.html">
                                                    <div class="subNavImageBox"> <img class="subNavImage" src="img/our-firm.jpg" alt="navigatie image"> </div> Our Firm</a>
                                            </li>
                                            <li class="marketsSubNavItem">
                                                <a href="our-team.html">
                                                    <div class="subNavImageBox"> <img class="subNavImage" src="img/our-team.jpg" alt="navigatie image"> </div> Our Team </a>
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
                                                <a href="law.html">
                                                    <div class="subNavImageBox"> <img class="subNavImage" src="img/plan.jpg" alt="navigatie image"> </div> Law</a>
                                            </li>
                                            <li class="marketsSubNavItem">
                                                <a href="policy.html">
                                                    <div class="subNavImageBox"> <img class="subNavImage" src="img/Relationship.jpg" alt="navigatie image"> </div> Policy </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=""> <a class="mainNavItem" href="blog.php">News</a></li>
                                <li class="con"> <a class="mainNavItem" href="contact-us.html">Contact Us</a> </li>
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
            <div class="smallHeader" id="investorsHeader" style="background-image:url(img/team-building1.jpg);">
                <div class="headerOverlay"></div>
                
                <p class="xlargeTitle white">News</p> </div>
            <div class="wrapper row3">
                <section class="hoc container clear">
                    <!-- ################################################################################################ -->
                    <div class="btmspace-50">
                        <h3 class="font-x2 nospace">Blogs</h3>
                        <p class="nospace">Blogs in short</p>
                    </div>
                    <div class="group">
                        <?php foreach($data as $rec):?>
                        <article class="one_third">
                            <a href="blog-details.php/<?php echo $rec['blog_slug'];?>">
                                <img class="btmspace-30" src="http://www.pragmalaw.in/pragmalaw/assets/blogs/thumb/<?php echo $rec['blog_image']?>" alt=""></a>
                            <h4 class="nospace font-x1"><strong><?php echo $rec['blog_title'];?></strong></h4>
                            <div class="dateAuthor">
                            <p>Date : <span><strong><?php echo date('F j, Y', strtotime($rec['blog_created_on']));?></strong></span>
                            <br/>Author :<span><strong><?php echo $rec['author_name'];?></strong></span>
                                </p>
                            
                            </div>
                            <?php 
                            $string = strip_tags($rec['blog_description']);
                                
                                if (strlen($string) > 120) {
                                	
                                	// truncate string
                                	$stringCut = substr($string, 0, 120);
                                	
                                	// make sure it ends in a word so assassinate doesn't become ass...
                                	$string = substr($stringCut, 0, strrpos($stringCut, ' ')).' ...';
                                }
                            ?>
                            <p><?php echo $string;?>&hellip;</p>
                            <footer><a class="btn" href="blog-details.php/<?php echo $rec['blog_slug'];?>">Read More</a></footer>
                        </article>
                        <?php endforeach;?>
                        
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
                    <li>The information about us is provided to the user only on his/her specific request and any information obtained or materials downloaded from this website is completely at the user’s volition and any transmission, receipt or use of this site would not create any lawyer-client relationship.</li>
                </ul> &nbsp;&nbsp;
                <p>The information provided under this website is solely available at your request for informational purposes only, should not be interpreted as soliciting or advertisement. We are not liable for any consequence of any action taken by the user relying on material / information provided under this website. In cases where the user has any legal issues, he/she in all cases must seek independent legal advice</p>
                </div>
                    <ul class="footerSection">
                        <li style="font-size: 15px"><strong>Quick Links</strong></li>
                        <li> <a href="home.html">Home</a> </li>
                        <li> <a href="our-firm.html">Who We Are: <strong> Our Firm</strong> </a> </li>
                        <li> <a href="our-team.html">Who We Are:<strong> Our Team</strong> </a> </li>
                        <li> <a href="law.html">What We Do: <strong> Law</strong></a> </li>
                        <li> <a href="policy.html">What We Do:<strong> Policy</strong></a> </li>
                        <li> <a href="blog.php">News</a> </li>
                        <li> <a href="contact-us.html">Contact Us</a> </li>
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
                <div class="footerlogo"> <img src="img/logos2/pragmaLaw-color.png"> </div>
            </nav>
            <section id="footerBottom">
                <div class="row">
                    <p> <b> Registered Office : </b> 1st Floor, Divya maple, 53/1-2, 8th Main, 16th Cross, Malleswaram, Bangalore – 560055</p>
                    <p><small>   © Pragma law & Policy, <script>
                            document.write(new Date().getFullYear());
                        </script>. &nbsp; All Rights Reserved.</small></p>
                </div>
            </section>
        </footer>
        <script src="js/app.mind2e9.js?59858dfd58107"></script>
</body>

</html>