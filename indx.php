<?
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Copenhagen');
include('config.php');
$dt2=date("Y-m-d H:i:s");




$logInOrRedditor = '<a href="activate.php?login=true" class="nav-contact nav">log in</a>';
$logOut = "";
if ($_SESSION['redditor'] !== null) {
	$logInOrRedditor = '<a class="nav-contact nav" href="adminpage.php">' . $_SESSION['redditor'] . '</a>';
	$logOut = '<li><a class="nav-contact nav" href="logout.php">Log Out</a></li>';
}




?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="corporate, business software, app, one page template" />
<meta name="keywords" content="one page template, corporate, software, app, business, marketing, landing page, web marketing, internate marketing"/>
<meta name="author" content="Tansh" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<title>Reddit Awkward</title>

<!--Fav and touch icons-->
<link rel="shortcut icon" href="images/icons/favicon.ico">
<link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">

<!--google web font-->
<link href='http://fonts.googleapis.com/css?family=Vollkorn:400,400italic|Lato:400,300,300italic,400italic' rel='stylesheet' type='text/css'>

<!--style sheets-->
<link rel="stylesheet" media="screen" href="css/style.css?t=aer"/>
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
		slideshowSpeed: 3000,
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
    
    <!--header starts-->
    <div id="header">
      
      <!--logo starts-->
      <div class="four columns logo alpha"> <a href="#header_wrapper">
        <h1><img src="images/Logomakr_2ACvqw.png" height="62" alt="logo"></h1>
        </a> </div>
      <!--logo ends--> 
      
      <!--menu / navigation starts-->
      <div id="nav" class="twelve columns omega">
        <ul>
          <li><a href="#header_wrapper" class="nav-header_wrapper nav selected">Home</a></li>
          <li><a href="#features" class="nav-features nav">Features</a></li>
          <li><a href="#screenshots" class="nav-screenshots nav">Screenshots</a></li>
          <li><a href="#download" class="nav-download nav">Download</a></li>
          <li><? echo $logInOrRedditor; ?></li>
					<? echo $logOut; ?>
          <li><a href="#">More</a>
            <ul>
              <li class="firstdroplink"><a href="pricing-3columns.html">Pricing - 3 columns</a></li>
              <li><a href="pricing-4columns.html">Pricing - 4 columns</a></li>
              <li><a href="#team" class="nav-team nav">Team</a></li>
              <li><a href="#sub_footer" class="nav-sub_footer nav">Reviews</a> </li>
              <li class="lastdroplink"><a href="layout.html">Layout</a></li>
            </ul>
          </li>
          <li><a href="pricing-3columns.html" class="coloredlink">Pricing</a></li>
        </ul>
      </div>
      <!--menu / navigation ends-->
      
      <div class="clear"></div>
    </div>
    <!--header ends--> 
    
    <!--slider starts-->
    <div class="flexslider image-slider heightcontrolbymhh">
      <ul class="slides">
        
        <!--first slide starts-->
        <li>
          <div class="eight columns">
            <h2>Adding new <strong>social</strong> features to Reddit.</h2>
            <p></p>
						<br>
            <p><center><a class="nav-download nav" href="#download"></a></center></p>
					</div>
          <div class="eight columns"><img src="images/slideshow/slide1.png" alt="image"/></div>
        </li>
        <!--first slide ends--> 
        
        <!--second slide starts-->
        <li>
          <div class="eight columns">
			<h2><strong>Feel</strong> the change...</h2>
            <p></p>
            </div>
          <div class="eight columns"><img src="images/slideshow/slide2.png" alt="image"/></div>
        </li>
        <!--second slide ends--> 
        
        <!--third slide starts-->
        <li>
          <div class="eight columns"><img src="images/slideshow/slide3.png" alt="image"/></div>
          <div class="eight columns">
            <h2>Feel the <strong>Awkwardness</strong></h2>
            <p></p>
            </div>
        </li>
        <!--third slide ends-->

		<!--fourth slide starts-->
        <li>
          <div class="eight columns">
			<h2><strong>Reddit</strong> like you've never experienced it before...</h2>
            <p></p>
           	</div>
          <div class="eight columns"><img src="images/slideshow/slide4.png" alt="image"/></div>
        </li>
        <!--fourth slide ends-->

		<!--fifth slide starts-->
        <li>
          <div class="eight columns">
			<h2>Download <strong>Reddit Awkward Now</strong></h2>
            <p>And feel the awkwardness...</p>
						<br>
            <p><center><a class="nav-download nav" href="#download"><img id="browser_icon" width=50 src="images/browsers/firefox.png" alt="image"/></a></center></p> </div>
          <div class="eight columns"><img src="images/slideshow/slide5.png" alt="image"/></div>
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
    <p class="textstyle1">A browser extension adding new social features to discussions on Reddit. <a href="#" class="coloredstrong">Checkout more!</a></p>
    <div class="centerline">
      <div class="button_wrapper"> <a href="#" class="btn_yellow"><span>See Rules & Tags</span></a></div>
    </div>
  </div>
  
  <!--feature one starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/traffic-light.png" width="92" height="92" alt="icon"></div>
    <h4>Rules</h4>
    <p>Remedies common conversation halts.</p>
  </div>
  <!--feature one ends--> 
  
  <!--feature two starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/bubble.png" width="92" height="92" alt="icon"></div>
    <h4>Hashtags</h4>
    <p>A combination of Facebook-likes and ordinary hashtags, known from Twitter and Instagram.</p>
  </div>
  <!--feature two ends--> 
  
  <!--feature three starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/reddit-logo.png" width="92" height="92" alt="icon"></div>
    <h4>Awkward-Karma</h4>
    <p></p>
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
    <h4>Browser Add-On</h4>
    <p>Changes how Reddit looks, acts and feels.</p>
  </div>
  <!--feature five ends--> 

  <!--feature six starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/icon-2.png" width="92" height="92" alt="icon"></div>
    <h4>Colors</h4>
    <p>Adds a discrete and intuitive overlay to the appearance of Reddit.</p>
  </div>
  <!--feature six ends--> 
  
  <!--feature seven starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/icon-3.png" width="92" height="92" alt="icon"></div>
    <h4>Customization</h4>
    <p>Lets the user control which rules, tags and colors to use.</p>
  </div>
  <!--feature seven ends--> 

  <!--feature eight starts-->
  <div class="four columns">
    <div class="icon_bg"><img src="images/icons/icon-4.png" width="92" height="92" alt="icon"></div>
    <h4>Admin Page</h4>
    <p>View notifications from the past + administrate payouts + edit your personal settings.</p>
  </div>
  <!--feature eight ends-->


</div>
<!--features section ends--> 

<!--screenshots section starts-->
<div class="row_color">
  <div id="screenshots" class="container clearfix scroll-content">
    <div class="columns sixteen"> 
      
      <!--heading (do not remove clear below heading)-->
      <h2>Screenshots</h2>
      <p class="textstyle2">What you see is what you get</p>
      <br class="clear"/>
      
      <!--gallery / carousel starts-->
      <ul id="mycarousel" class="jcarousel-skin-tango">
        <li>
          <div class="thumb"><a href="images/preview/large.jpg" data-rel="prettyPhoto[gallery1]" title="This is title of image"><img src="images/preview/thumb-1.jpg" alt="Image"/><span class="zoom zoom_icon"></span></a> </div>
        </li>
        <li>
          <div class="thumb"><a href="images/preview/large.jpg" data-rel="prettyPhoto[gallery1]" title="This is title of image"><img src="images/preview/thumb-2.jpg" alt="Image"/><span class="zoom zoom_icon"></span></a> </div>
        </li>
        <li>
          <div class="thumb"><a href="images/preview/large.jpg" data-rel="prettyPhoto[gallery1]" title="This is title of image"><img src="images/preview/thumb-3.jpg" alt="Image"/><span class="zoom zoom_icon"></span></a> </div>
        </li>
        <li>
          <div class="thumb"><a href="images/preview/large.jpg" data-rel="prettyPhoto[gallery1]" title="This is title of image"><img src="images/preview/thumb-2.jpg" alt="Image"/><span class="zoom zoom_icon"></span></a> </div>
        </li>
        <li>
          <div class="thumb"><a href="images/preview/large.jpg" data-rel="prettyPhoto[gallery1]" title="This is title of image"><img src="images/preview/thumb-1.jpg" alt="Image"/><span class="zoom zoom_icon"></span></a> </div>
        </li>
        <li>
          <div class="thumb"><a href="images/preview/large.jpg" data-rel="prettyPhoto[gallery1]" title="This is title of image"><img src="images/preview/thumb-1.jpg" alt="Image"/><span class="zoom zoom_icon"></span></a> </div>
        </li>
      </ul>
      <!--gallery / carousel ends--> 
      
    </div>
  </div>
</div>
<!--screenshots section ends--> 

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
    <ul class="team_info">
      <li><a href="#"><img src="images/icons/team-social-mail.png" width="16" height="16" alt="icon">Send mail</a></li>
      <li><a href="#"><img src="images/icons/team-social-url.png" width="16" height="16" alt="icon">https://redditawkward.com</a></li>
      <li><a href="#"><img src="images/icons/team-social-linkedin.png" width="16" height="16" alt="icon">Linkedin</a></li>
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
  <!--member one ends--> 
  
  <!--member two starts-->
  <div class="eight columns"> <img src="images/people/morten.jpeg" width="110" alt="image" class="image_left">
    <h5>Morten Hjerl-Hansen</h5>
    <p class="textstyle3">Programmer</p>
    <ul class="team_info">
      <li><a href="#"><img src="images/icons/team-social-mail.png" width="16" height="16" alt="icon">Send mail</a></li>
      <li><a href="#"><img src="images/icons/team-social-url.png" width="16" height="16" alt="icon">https://redditawkward.com</a></li>
      <li><a href="#"><img src="images/icons/team-social-linkedin.png" width="16" height="16" alt="icon">Linkedin</a></li>
    </ul>
    <p>Hello and welcome. I live in Denmark with my family in the hills in the countryside. I like to read (novels and poetry) and ski (cross-country).</p>
  </div>
  <!--member two ends--> 
 
</div>
<!--team section ends--> 

<!--download section starts-->
<div class="row_color">
  <div id="download" class="container clearfix scroll-content">
    <div class="columns sixteen"> 
      
      <!--grey logo-->
      <div class="logo_grey"><img src="images/Logomakr_2ACvqw.png" alt="logo"></div>
      <h2>Don't wait.</h2>
      <ul class="textlist">
        <li>Free</li>
        <li>| </li>
        <li> No credit card required </li>
      </ul>
      <!--center aligned button-->
      <div class="button_wrapper">
				<div class="browsers">
            <a href="https://chrome.google.com/webstore/detail/" data-browser="chrome">
                <img title="Install in Chrome" src="images/browsers/Chrome.png">
            </a>
            <a href="https://www.microsoft.com/store/apps/" data-browser="edge">
                <img title="Install in Edge" src="images/browsers/Edge.png">
            </a>
            <a href="https://addons.mozilla.org/en-US/firefox/addon/" data-browser="firefox">
                <img title="Install in Firefox" src="images/browsers/Firefox.png">
            </a>
            <a href="https://addons.opera.com/en-gb/extensions/details/" data-browser="opera">
                <img title="Install in Opera" src="images/browsers/Opera.png">
            </a>
            <a href="#" data-browser="safari">
                <img title="Install in Safari" src="images/browsers/Safari.png">
            </a>
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
    <p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune.</p>
  </div>
  <!--about ends--> 
  
  <!--testimonial starts-->
  <div class="one-third column">
    <h2>Reviews</h2>
    <p class="textstyle2">People say</p>
    <br class="clear"/>
    <ul class="testimonial">
      <li> <img src="images/preview/logo-img1.png" width="122" height="36" alt="image" class="image_noborder"> "Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum." <span>- John Anderson, somecompany.com</span></li>
      <li> <img src="images/preview/logo-img2.png" width="122" height="36" alt="image" class="image_noborder"> "Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem." <span>- Jack Barnaby, somecompany.com</span></li>
    </ul>
  </div>
  <!--testimonial ends--> 
  
  <!--updates starts-->
  <div class="one-third column">
    <h2>Updates</h2>
    <p class="textstyle2">Upgrade to new features & fixes</p>
    <br class="clear"/>
    <ul class="updates">
      <li> <span class="coloredstrong">Version 1.2.4</span> <span class="smallstrong"> ( Released on April 26, 2012 )</span>
        <div class="divider"></div>
        <h6>What's new in this version?</h6>
        <a href="#" class="btn">Upgrade</a> <br class="clear"/>
        . Enhancements in UI elements<br/>
        . Added extra functionality </li>
      <li> <span class="coloredstrong">Version 1.2.5</span> <span class="smallstrong"> ( Released on May 5, 2012 )</span>
        <div class="divider"></div>
        <h6>What's new in this version?</h6>
        <a href="#" class="btn">Upgrade</a> <br class="clear"/>
        . Enhancements in UI elements<br/>
        . Lorem ipsum dolor sit amet<br/>
        . Fiant sollemnes in futurum<br/>
        . Added extra functionality </li>
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
      <ul class="social">
        <li><a href="#"><img src="images/icons/social-footer-dribbble.png" width="46" height="46" alt="icon"></a></li>
        <li><a href="#"><img src="images/icons/social-footer-skype.png" width="46" height="46" alt="icon"></a></li>
        <li><a href="#"><img src="images/icons/social-footer-facebook.png" width="46" height="46" alt="icon"></a></li>
        <li><a href="#"><img src="images/icons/social-footer-twitter.png" width="46" height="46" alt="icon"></a></li>
      </ul>
      <div class="contact_info"> <a href="#" >support@redditawkward.com</a>
        <p>+12 (0) 345 678 9012</p>
      </div>
      <p>Lorem ip do SIT<br/>
        Ametconsecte5, Northbloc D<br/>
        3456 ipsumcity, Country </p>
    </div>
    <!--address / social ends--> 
    
  </div>
  
  <!--footer starts-->
  <div id="footer">
    <p>REDDIT AKWARD © 2016. All Rights Reserved.</p>
    <ul>
      <li><a href="#">Terms of use </a></li>
      <li><a href="#">Privacy policy</a></li>
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