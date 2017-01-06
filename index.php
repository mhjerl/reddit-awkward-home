<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Copenhagen');
include('config.php');
include('tagoverview.php');
$dt2=date("Y-m-d H:i:s");









?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="corporate, business software, app, one page template" />
<meta name="keywords" content="one page template, corporate, software, app, business, marketing, landing page, web marketing, internate marketing"/>
<meta name="author" content="Tansh" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<title>Comment Tag</title>

<!--Fav and touch icons-->
<link rel="shortcut icon" href="images/icons/favicon.ico">
<link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">

<!--google web font-->
<link href='http://fonts.googleapis.com/css?family=Vollkorn:400,400italic|Lato:400,300,300italic,400italic' rel='stylesheet' type='text/css'>

<!--style sheets-->
<link rel="stylesheet" media="screen" href="css/style.css?t=aerff"/>
<link rel="stylesheet" media="screen" href="css/skeleton.css"/>

<!--jquery libraries / others are at the bottom-->
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>

<!--slider scripts starts-->
<link rel="stylesheet" media="screen" href="css/flexslider.css"/>
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>

<!--mhh custom scripts starts-->
<script src="js/browserdetermine.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
var bName = getBrowserName();
$("#browser_icon").attr("src","images/browsers/" + bName + ".png");
$('.image-slider').flexslider({
    	animation: "fade",
		slideshowSpeed: 6000,
		animationDuration: 3000,
    	controlNav: true,
    	keyboardNav: true,
    	directionNav: false,
		pauseOnHover: false,
		pauseOnAction: false    
});
});
</script>
<!--slider scripts ends-->

<!--prettyPhoto scripts starts-->
<link rel="stylesheet" media="screen" href="css/prettyPhoto.css"/>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
$('a[data-rel]').each(function() {
    $(this).attr('rel', $(this).data('rel'));
});
$("a[rel^='prettyPhoto[gallery1]']").prettyPhoto({
	animation_speed: 'fast',
	slideshow: 5000,
	autoplay_slideshow: false,
	opacity: 0.80,
	show_title: false,
	theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
	overlay_gallery: false,
	social_tools: false,
	deeplinking:false,
	changepicturecallback: function(){
	var $pp = $('.pp_default');
	if( parseInt( $pp.css('left') ) < 0 ){
	$pp.css('left', 0 );
	}
	}
});
});
</script>
<!--prettyPhoto scripts ends-->

<!--carousel scripts starts-->
<link rel="stylesheet" media="screen" href="css/jcarousel.css"/>
<script src="js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
var $postcarousel = $('#mycarousel');
if( $postcarousel.length ) {
	var scrollCount;
	if( $(window).width() < 480 ) {
    scrollCount = 1;
    } else if( $(window).width() < 768 ) {
    scrollCount = 1;
    } else if( $(window).width() < 960 ) {
    } else {
    scrollCount = 1;
    }
    $postcarousel.jcarousel({
    easing: 'easeInOutQuint',
    animation: 600,
    scroll    : scrollCount
});
}
});
</script>
<!--carousel scripts ends-->

<!--contact form scripts starts-->
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script src="js/jquery.form.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
//Contact form
$(function() {
	var v = $("#contactform").validate({
	submitHandler: function(form) {
	$(form).ajaxSubmit({
	target: "#result",
	clearForm: true
	});
	}
	});
});
//To clear form field on page refresh
$('#contactform #message').val('');
});
</script>
<!--contact form scripts ends-->

</head>
<body>
<!--header_wrapper starts-->
<div id="header_wrapper" class="scroll-content">
  <div class="container clearfix">
<?
$logInOrRedditor = '<a href="activate.php?login=true" class="nav">log in</a>';
$logOut = "";
if ($_SESSION['redditor'] !== null) {
	$logInOrRedditor = '<a class="nav" href="admin.php?redditor=' . $_SESSION['redditor'] . '">' . $_SESSION['redditor'] . '</a>';
	$logOut = '<li><a class="nav" href="logout.php">Log Out</a></li>';
}
?>

    <!--header starts-->
    <div id="header">

      <!--logo starts-->
      <!-- <div class="four columns logo alpha"> <a href="index.php">
        <h1><img src="images/Logomakr_2ACvqw.png" height="62" alt="logo"></h1>
        </a></div> -->

		<div class="four columns logo alpha">
			<a href="index.php">
				<div class="logo_beta_elements">
					<h1><img class="logo_image" src="images/Logomakr_2zPQam.png" alt="logo"></h1>
					<span class="logo_text">BETA</span>
				</div>
		    </a>
		</div>


      <!--logo ends-->
      
      <!--menu / navigation starts-->
      <div id="nav" class="twelve columns omega">
        <ul>
          <li><a href="#header_wrapper" class="nav-header_wrapper nav selected">Home</a></li>
          <li><a href="#features" class="nav-features nav">Features</a></li>
          <li><a href="#download" class="nav-download nav">Download</a></li>
		  <li><a href="getstarted.php">Get Started</a></li>
          <li><a href="#" class="nav">About</a>
            <ul>
              <li class="lastdroplink"><a href="introduction.php">Introduction</a></li>
			  
			  <li class="lastdroplink"><a href="https://github.com/mhjerl" target="_blank">Free Software</a></li>
			  <li class="lastdroplink"><a href="api.php">API</a></li>
			  <li class="lastdroplink"><a href="modguide.php">Mod Guide</a></li>
			  <li class="lastdroplink"><a href="credits.php">Credits</a></li>
            </ul>
          </li>
		  <li><? echo $logInOrRedditor; ?></li>
				<? echo $logOut; ?>
        </ul>
      </div>
      <!--menu / navigation ends-->
      
      <div class="clear"></div>
    </div>
    <!--header ends--> 
    
    <!--slider starts-->
    <div style="margin-top: 50px;" class="flexslider image-slider heightcontrolbymhh">
      <ul class="slides">
        
        <!--first slide starts-->
        <li>
          <div class="eight columns">
            <h2>EARN <strong>USD 10</strong> FOR EVERY REDDIT COMMENT TAGGED *)</h2>
            <p>*) See terms</p>
						<br>
            <p><center><a class="nav-download nav" href="#download"></a></center></p>
					</div>
          <div class="eight columns"><img src="images/slideshow/slide1a.png" alt="image"/></div>
        </li>
        <!--first slide ends--> 
        
        <!--second slide starts-->
        <li>
          <div class="eight columns">
			<h2>JUST PICK A TAG IN THE DROP-DOWN BOX</h2>
            <p></p>
            </div>
          <div class="eight columns"><img src="images/slideshow/slide3.png" alt="image"/></div>
        </li>
        <!--second slide ends--> 
        
        <!--third slide starts-->
        <li>
          <div class="eight columns"><img src="images/slideshow/slide4a.png" alt="image"/></div>
          <div class="eight columns">
            <h2>(AND WRITE WHATEVER YOU WANT TO SAY TO THE WORLD...)</h2>
            <p></p>
            </div>
        </li>
        <!--third slide ends-->

		<!--fourth slide starts-->
        <li>
          <div class="eight columns">
			<h2>GET PAID WITH PAYPAL</h2>
            <p></p>
           	</div>
          <div class="eight columns"><img src="images/slideshow/slide2a.png" alt="image"/></div>
        </li>
        <!--fourth slide ends-->

		<!--fourth slide starts-->
        <li>
          <div class="eight columns">
			<h2>...OR BECOME A SPONSOR</h2>
            <p></p>
           	</div>
          <div class="eight columns"><img src="images/slideshow/slide5.png" alt="image"/></div>
        </li>
        <!--fourth slide ends-->

		<!--fifth slide starts-->
        <li>
          <div class="eight columns">
			<h2>INSTALL <strong>COMMENT TAG</strong> NOW</h2>

            <p></p>
						<br>
            <p><center><a class="nav-download nav" href="#download"><img id="browser_icon" width=50 src="images/browsers/firefox.png" alt="image"/></a></center></p> </div>
          <div class="eight columns"><img src="images/slideshow/slide3a.png" alt="image"/></div>
        </li>
        <!--fifth slide ends--> 
      </ul>
    </div>
    <!--slider ends--> 
    
  </div>
</div>
<!--header_wrapper ends--> 

<!--features section starts-->
<div id="features" class="container clearfix scroll-content"> 
  
  <!--text and button-->
  <div class="sixteen columns">
    <h1>New rules for Reddit</h1>
    <p class="textstyle1">A browser extension adding new social features to discussions on Reddit. <a href="introduction.php" class="coloredstrong">Checkout more!</a></p>
    <div class="centerline">
      <div class="button_wrapper"> <a href="getstarted.php" class="btn_yellow"><span>See Rules & Tags</span></a></div>
    </div>
  </div>
  
  <!--feature one starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/traffic-light.png" width="92" height="92" alt="icon"></div>
    <h4>Rules</h4>
    <p>Streamlines conversation parts. Remedies common conversation halts.</p>
  </div>
  <!--feature one ends--> 
  
  <!--feature two starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/bubble.png" width="92" height="92" alt="icon"></div>
    <h4>Awkward Tags</h4>
    <p>A combination of Facebook-likes and ordinary hashtags, known from Twitter and Instagram.</p>
  </div>
  <!--feature two ends--> 
  
  <!--feature three starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/reddit-logo.png" width="92" height="92" alt="icon"></div>
    <h4>Awkward	Karma</h4>
    <p>An additional Karma System.</p>
  </div>
  <!--feature three ends--> 
  
  <!--feature four starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/heart.png" width="92" height="92" alt="icon"></div>
    <h4>Notifications</h4>
    <p>Users gets notified of awkward-karma gifts and penalties and calls for action from other redditors.</p>
  </div>
  <!--feature four ends--> 

  <!--feature five starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/icon-1.png" width="92" height="92" alt="icon"></div>
    <h4>Quick Reply</h4>
    <p>Drop-down box with Awkward Tags on every reddit Comment Page</p>
  </div>
  <!--feature five ends--> 

  <!--feature six starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/icon-2.png" width="92" height="92" alt="icon"></div>
    <h4>GUI</h4>
    <p>Adds a discrete and intuitive overlay to the appearance of Reddit.</p>
  </div>
  <!--feature six ends--> 
  
  <!--feature seven starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/icon-3.png" width="92" height="92" alt="icon"></div>
    <h4>Popup</h4>
    <p>The latest events in your Comment Tag Cloud. Notifications and Friends.</p>
  </div>
  <!--feature seven ends--> 

  <!--feature eight starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/icon-4.png" width="92" height="92" alt="icon"></div>
    <h4>Friends</h4>
    <p>Social Karma and more...</p>
  </div>
  <!--feature eight ends-->


</div>
<!--features section ends--> 





<!-- tags section begins -->
<div id="team" class="container clearfix scroll-content">

  <!--single column-->

  <!--heading-->
  <div class="columns sixteen">
    <h2>Tags</h2>
    <p class="textstyle2">Rules and Use</p>
  </div>

<?
	$redditor = null;

	if ($_SESSION['redditor'] !== null) {
		$redditor = $_SESSION['redditor'];
	}
	$tagCategoryRememberedALongLongTime = "";
	$firstTimeAround = true;
	foreach ($tagCategories as $tagShortHand=>$tagCategory) {
		$tagUse = getTagUse($tagShortHand, $redditor);
		if ($tagCategory !== $tagCategoryRememberedALongLongTime) {
			$tagCategoryRememberedALongLongTime = $tagCategory;
			if (!$firstTimeAround) {
				echo '</table></div><div class="divider sixteen columns"></div>';
			}
			else {
				$firstTimeAround = false;
			}
			echo '<div class="sixteen columns"><br><br><br><h3>' . $tagCategory . '</h3><table class="zebra"><tr><th>Tag</th><th>Your Tag Use</th><th>Overall Tag Use</th></tr>';
			echo '<tr><td><div style="width: 630px;"><a href="rules/' . $tagShortHand . '.php">' . $intuitiveTagNames[$tagShortHand] . '</a></div></td><td><div style=" text-align: center; width: 100px;">' . $tagUse->me . '</div></td><td><div style="text-align: center; width: 150px;">' . $tagUse->total . '</div></td></tr>';
		}
		else {
			echo '<tr><td><div style="width: 630px;"><a href="rules/' . $tagShortHand . '.php">' . $intuitiveTagNames[$tagShortHand] . '</a></div></td><td><div style=" text-align: center; width: 100px;">' . $tagUse->me . '</div></td><td><div style="text-align: center; width: 150px;">' . $tagUse->total . '</div></td></tr>';
		}
	}
?>
</table></div><div class="divider sixteen columns"></div>

</div>
</div>
<!-- tags section ends -->



<!--certificates section starts-->
<div id="team" class="container clearfix scroll-content"> 
  
  <!--heading here-->
  <div class="columns sixteen">
    <h2>Certificates</h2>
    <p class="textstyle2">Sponsor these Commentators | Support these People!</p>
  </div>
  <div class="columns sixteen">
	<table class="zebra"><tr><th>ID</th><th>Commentator</th><th>Detected: Date & Time</th><th>Acquisition Status</th><th>Acquired By</th></tr>
<?
	$certificates = getCertificates();
	foreach ($certificates as $certificate) {
		echo '<tr><td><div style="width: 170px;"><a target="_new" href="https://www.reddit.com/r/' . $certificate->subreddit . '/comments/' . $certificate->pageid . '/' . $certificate->pagename . '/' . $certificate->commentid . '">' . $certificate->id . '</a></div></td><td><div style="width: 170px;">' . $certificate->redditor . '</div></td><td><div style="width: 160px;">' . $certificate->detected_date . '</div></td><td><div style="width: 170px;">' . $certificate->status . '</div></td><td><div style="width: 170px;">' . $certificate->acquired_by . '</div></td></tr>';
	}
?>
</table>
</div>
<div class="divider sixteen columns"></div>
</div>
<!--certificates section ends-->









<!--comment-tag{i.will.not.reply.and.expect.apology} section starts-->
<div id="team" class="container clearfix scroll-content"> 
  
  <!--heading here-->
  <div class="columns sixteen">
    <h2>Conflicts</h2>
    <p class="textstyle2">People expecting an apology | Help, if you can!</p>
  </div>
  <div class="columns sixteen">
	<table class="zebra"><tr><th>Angry Redditor</th><th>Offending Redditor</th><th>Conflict Resolved</th><th>Assist</th></tr>
<?
	$conflicts = getConflicts();
	foreach ($conflicts as $conflict) {
		$yesOrNo = ($conflict->resolved === "true" ) ? "yes" : "no";
		echo '<tr><td><div style="width: 170px;">' . $conflict->angryRedditor . '</div></td><td><div style="width: 350px;">' . $conflict->needsToApologizeRedditor . '</div></td><td><div style="width: 170px;">' . $yesOrNo . '</div></td><td><div style="width: 170px;"><a target="_new" href="https://www.reddit.com/r/' . $conflict->subreddit . '/comments/' . $conflict->pageid . '">Link</a></div></td></tr>';
	}
?>
</table>
</div>
<div class="divider sixteen columns"></div>
</div>
<!--comment-tag{i.will.not.reply.and.expect.apology} section ends-->




<!--team section starts-->
<div id="team" class="container clearfix scroll-content"> 
  
  <!--heading here-->
  <div class="columns sixteen">
    <h2>The Team</h2>
    <p class="textstyle2">People behind this application</p>
  </div>
  
  <!--member one starts-->
	<div class="eight columns"> <img src="images/people/else.jpg" width="110" alt="image" class="image_left">
    <h5>Else Andersen</h5>
    <p class="textstyle3">Consultant</p>
    <p></p>
  </div>
  <!--member one ends--> 
  
  <!--member two starts-->
  <div class="eight columns"> <img src="images/people/morten.jpeg" width="110" alt="image" class="image_left">
    <h5>Morten Hjerl-Hansen</h5>
    <p class="textstyle3">Programmer</p>
    <p>Hello and welcome. I live in Denmark with my family in the hills in the countryside. I like to read (novels and poetry) and ski (cross-country).</p>
  </div>
  <!--member two ends--> 
 
</div>
<!--team section ends--> 





<!--general flow section starts-->
<div id="generalflow" class="container clearfix scroll-content">
	<div class="columns sixteen">
    	<h2>Instructions</h2>
    	<p class="textstyle2"></p>
  	</div>
	<div class="columns sixteen">
	<center>
	<img src="images/generalflow.png">
	</center>
	</div>
</div>
<!--general flow section ends -->





<!--download section starts-->
<div class="row_color">
  <div id="download" class="container clearfix scroll-content">
    <div class="columns sixteen"> 
      
      <!--grey logo-->
      <div class="logo_grey"><img src="images/Logomakr_2zPQam.png" alt="logo"></div>
      <h2>Install</h2>
      <ul class="textlist">
        <li>Free</li>
        <li>| </li>
        <li> No Credit Card Required</li>
      </ul>
      <!--center aligned button-->
      <div class="button_wrapper">
				<div class="browsers">
            <a target="_new" href="https://chrome.google.com/webstore/detail/comment-tag/ehoebjlmhegfcjapelffllkajmfckoce" data-browser="chrome">
                <img title="Install in Chrome" src="images/browsers/Chrome.png">
            </a>
            <!-- <a target="_new" href="installation_edge.php" data-browser="edge">
                <img title="Install in Edge" src="images/browsers/Edge.png">
            </a> -->
            <!-- <a target="_new" href="download/comment_tag-1.0.4-fx.xpi" data-browser="firefox">
                <img title="Install in Firefox" src="images/browsers/Firefox.png">
            </a> -->
            <a target="_new" href="https://addons.opera.com/da/extensions/details/comment-tag" data-browser="opera">
                <img title="Install in Opera" src="images/browsers/Opera.png">
            </a>
            <!-- <a target="_new" href="#" data-browser="safari">
                <img title="Install in Safari" src="images/browsers/Safari.png">
            </a> -->
				</div>
			</div>

    </div>

  </div>
</div>
<!--download section ends--> 

<!--sub_footer section starts-->
<div id="sub_footer" class="container clearfix scroll-content"> 
  
  <!--about starts-->
  <div class="one-third column">
    <h2>The Studio</h2>
    <p class="textstyle2">Know more</p>
    <br class="clear"/>
    <img src="images/preview/the-studio.jpg" width="290" height="110" alt="image" class="image_border">
    <p></p>
  </div>
  <!--about ends--> 
  
  <!--testimonial starts-->
  <div class="one-third column">
    <h2>Reviews</h2>
    <p class="textstyle2">People say</p>
    <br class="clear"/>
    <ul class="testimonial">
	  <li>None yet, as we've only recently launched. Please be so kind to post a review, using the contact form below. Cheers.</li>
      <!-- <li> <img src="images/preview/logo-img1.png" width="122" height="36" alt="image" class="image_noborder"> "Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum." <span>- John Anderson, somecompany.com</span></li>
      <li> <img src="images/preview/logo-img2.png" width="122" height="36" alt="image" class="image_noborder"> "Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem." <span>- Jack Barnaby, somecompany.com</span></li> -->
    </ul>
  </div>
  <!--testimonial ends--> 
  
  <!--updates starts-->
  <div class="one-third column">
    <h2>Updates</h2>
    <p class="textstyle2">Upgrade to new features & fixes</p>
    <br class="clear"/>
    <ul class="updates">
      <li> <span class="coloredstrong">Version "beta"</span> <span class="smallstrong"> ( Released on November 13, 2016 )</span>
        <div class="divider"></div>
        <h6>What's new in this version?</h6>
        <!-- <a href="#download" class="btn">Upgrade</a> <br class="clear"/> -->
        . Finished coding tags and rules</li>
    </ul>
  </div>
  <!--updates ends--> 
  
</div>
<!--sub_footer section ends--> 

<!--contact section starts-->
<div class="row_color">
  <div id="contact" class="container clearfix scroll-content"> 
    
    <!--heading here-->
    <div class="columns sixteen">
      <h2>Get In Touch</h2>
      <p class="textstyle2">just say hello!, propose a new tag or send us a message</p>
    </div>
    
    <!--contact form starts-->
    <div class="column two-thirds">
      <form  id="contactform" method="post" action="submit-form.php">
        <fieldset>
          <div class="column one-third alpha">
            <p>
              <input class="inputsmall" name="name"  type="text" placeholder="Name"/>
            </p>
            <p>
              <input class="inputsmall" name="email"  type="text" placeholder="Email" class="required email"/>
            </p>
            <p>
              <input class="inputsmall" name="subject"  type="text" placeholder="Subject">
            </p>
          </div>
          <div class="column one-third omega">
            <p>
              <textarea name="message" id="message" class="required inputsmall" placeholder="Message"></textarea>
            </p>
            <p class="antispam">Leave this empty: <br />
              <input class="inputsmall" name="url" />
            </p>
            <p>
              <input class="submit inputsmall" type="submit" value="Submit Message"/>
            </p>
            <div id="result"></div>
          </div>
        </fieldset>
      </form>
    </div>
    <!--contact form ends--> 
    
    <!--address / social starts-->
    <div class="column one-third address">
      <div class="contact_info"> <!-- <a href="#">support@comment-tag.com</a> -->
        <p>+45 51 29 25 97</p>
      </div>
      <p>Comment Tag Inc.<br/>
        Stubberup Byvej 9<br/>
        DK 4540 Faarevejle, Denmark</p>
		<div style="margin-top: 30px; display: block;"><a target="_new" href="https://www.stopbullying.gov"><img src="images/sblogo.png" alt="icon"></a></div>
		<div style="margin-top: 30px; display: block;"><a target="_new" href="https://www.gnu.org/licenses/agpl-3.0.html"><img src="images/agplv3-155x51.png" alt="icon"></a></div>
    </div>
    <!--address / social ends--> 
    
  </div>
  
  <!--footer starts-->
  <div id="footer">
    <p>COMMENT TAG © 2016. All Rights Reserved.</p>
    <ul>
      <li><a href="http://comment-tag.com/terms.php">Terms of use </a></li>
      <li><a href="http://comment-tag.com/privacy.php">Privacy policy</a></li>
    </ul>
    <div class="clear"></div>
  </div>
  <!--footer ends-->
  
  <div class="clear"></div>
</div>
<!--contact section ends--> 

<!--scroll to top arrow--> 
<a class="scrollToTop"></a> 

<!--other jqueries required--> 
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script>

</body>
</html>

<?


function getCertificates() {
	$certificates = Array();
	$sql = "SELECT cert_id, redditor, status, acquired_by, subreddit, pageid, pagename, commentid, detected_date FROM prima_certificate ORDER BY detected_date DESC LIMIT 20;";
	$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	while ($row3 = mysqli_fetch_array($result)) {
		$certificate = new stdClass();
		$certificate->id = $row3[0];
		$certificate->redditor = $row3[1];
		$certificate->status = $row3[2];
		$certificate->acquired_by = $row3[3];
		$certificate->subreddit = $row3[4];
		$certificate->pageid = $row3[5];
		$certificate->pagename = $row3[6];
		$certificate->commentid = $row3[7];
		$certificate->detected_date = $row3[8];
		array_push($certificates, $certificate);
	}
	return $certificates;
}

function getConflicts() {
	$conflicts = Array();
	$sql = "SELECT * FROM prima_needed_apology ORDER BY created_when_by_doorslam_or_expect_utc DESC LIMIT 20;";
	$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	while ($row3 = mysqli_fetch_array($result)) {
		$conflict = new stdClass();
		$conflict->angryRedditor = $row3[0];
		$conflict->needsToApologizeRedditor = $row3[1];
		/*$conflict->timeStarteUTC = $row3[3];*/
		$conflict->subreddit = $row3[4];
		$conflict->pageid = $row3[5];
		/*$conflict->commentid = $row3[6];*/
		$conflict->resolved = $row3[7];
		array_push($conflicts, $conflict);
	}
	return $conflicts;
}

// copied from getstarted.php:
function getTagUse($tagShortHand, $redditor) {
	$tagUse = new stdClass();
	$sql = "SELECT * FROM prima_tag_use WHERE redditor='$redditor' AND tag='comment-tag{" . $tagShortHand . "}';";
	$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	$count = mysqli_num_rows($result);
	$tagUse->me = $count;
	$sql = "SELECT * FROM prima_tag_use WHERE tag='comment-tag{" . $tagShortHand . "}';";
	$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	$count = mysqli_num_rows($result);
	$tagUse->total = $count;
		if (!$redditor or $redditor === "") {
		$tagUse->me = "Please log in";
	}
	return $tagUse;
}


