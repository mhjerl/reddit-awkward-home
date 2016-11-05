<?
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Copenhagen');
include('config.php');
include('tagoverview.php');
$dt2=date("Y-m-d H:i:s");
$redditor = null;

if ($_SESSION['redditor'] !== null) {
	$redditor = $_SESSION['redditor'];
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
<link rel="stylesheet" media="screen" href="css/style.css"/>
<link rel="stylesheet" media="screen" href="css/skeleton.css"/>

<!--jquery libraries / others are at the bottom-->
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
</head>
<body>

<!--header_wrapper starts-->
<div id="header_wrapper">
  <div class="container clearfix"> 
    
    <? include('parts/header.php'); ?>
    
    <!--sub_header starts-->
    <div id="sub_header">
      <div class="columns sixteen">
        <h2>Introduction</h2>
        <p class="textstyle2"></p>
      </div>
    </div>
    <!--sub_header ends--> 
    
  </div>
</div>
<!--header_wrapper ends--> 

<!--content starts-->
<div id="content" class="container clearfix"> 
   <!--heading-->
  <div class="sixteen columns">
    <h2>Introduction</h2>
	<h3>Reddit is a wonderful place; (Almost) total freedom of speech. Any subject that interests you; here you find other people passionate about the same things, virtually anything. Whether you want a good laugh or an in depth discussion of a subject, be it political, scientific or social, or just to see what is new. Reddit is the place.</h3>
	<p><i>Then why try and fix something that is already working?</i></p>
	<h3>First of all we’re not trying to fix anything, merely to improve it. And there is room for improvement!</h3>
	<h3>Have you ever tried posting something, get an initial dislike, which then seems to open up to a virtual mudslide of dislikes?</h3>
	<h3>1. There is an element of tyranny of the masses in the voting system on Reddit.</h3>
	<h3>Have you ever posted something and received comments that was disrespectful to the point where you began to doubt the humanity of the one who wrote it?</h3>
	<h3>2. There is an element of cowardice in the total anonymity that Reddit gives its users.</h3>
	<h3>Have you ever read posts and wanted to give a reply that could not be mistaken for irony, or have you ever doubted whether something someone else wrote on Reddit was intended to be ironic?</h3>
	<h3>3. There is an element of estrangement, which to be fair, is not unique to Reddit, but is a problem in all online communication because we are not face to face with each other. </h3>
	<h3>Reddit Awkward is an attempt to remedy these few flaws to a very good thing. By way of giving you tools for your communication, we hope to help improve your experience on Reddit.</h3>
	<h3>Reach out. Do not be afraid to be awkward. Good day.</h3>
</div>
  <div class="divider sixteen columns"></div>
  <!--single column-->

 

</div>
<!--content ends--> 

<!--footer starts-->
<div id="footer">
  <p>REDDIT AKWARD © 2016. All Rights Reserved.</p>
  <ul>
    <li><a href="https://redditawkward.com/rules/">Terms of use </a></li>
    <li><a href="https://redditawkward.com/rules/">Privacy policy</a></li>
  </ul>
  <div class="clear"></div>
</div>
<!--footer ends--> 

<!--scroll to top arrow--> 
<a class="scrollToTop"></a> 

<!--other jqueries required--> 
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>

<?
function getTagUse($tagShortHand, $redditor) {
	$tagUse = new stdClass();
	$sql = "SELECT * FROM prima_tag_use WHERE redditor='$redditor' AND tag='reddit.awkward{" . $tagShortHand . "}';";
	$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	$count = mysqli_num_rows($result);
	$tagUse->me = $count;
	$sql = "SELECT * FROM prima_tag_use WHERE tag='reddit.awkward{" . $tagShortHand . "}';";
	$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	$count = mysqli_num_rows($result);
	$tagUse->total = $count;
		if (!$redditor or $redditor === "") {
		$tagUse->me = "Please log in";
	}
	return $tagUse;
}

