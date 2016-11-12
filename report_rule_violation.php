<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Copenhagen');
include('config.php');
include("configsdkreport.php");
require_once("reddit.php");
$dt2=date("Y-m-d H:i:s");

//if (!isset($_GET['subreddit'])) { die("Forbidden...");}
$subreddit = $_GET['subreddit'];
$moderator = "/r/" . $subreddit;

//if (!isset($_GET['commentid'])) { die("Forbidden...");}
$commentid = $_GET['commentid'];

//if (!isset($_GET['tag'])) { die("Forbidden...");}
$tag = $_GET['tag'];

$redditor = $_GET['redditor'];

//$response = $reddit->sendMessage("mortenhh2", "Look at this message!", "Hey!\n\n**[search!](http://www.google.com/)**");



$reportedAlready = false;
$query = "SELECT * FROM prima_violation_reports WHERE commentid='$commentid';";
$result3 = mysqli_query($GLOBALS["___mysqli_ston"], $query);
$count3 = mysqli_num_rows($result3);
if ($count3 > 0) {
	$reportedAlready = true;
}
else {
	$reddit = new reddit();
	

	



	
	//$userData = $reddit->getUser();
	//var_dump($userData);
	//echo "<br><br>{$userData->name}";
	//$redditor = $userData->name;
	
	


	
	//if ((!$redditor) or $redditor === "") {$reddit->revoke(); die("session timed out!");}









	$secret = generateRandomString();
	$query = "INSERT INTO `redditawkward_com`.`prima_violation_reports` (
	`id` ,
	`commentid` ,
	`subreddit` ,
	`redditor_reporting` ,
	`whenf`,
	`secret`,
	`mod_decision` ,
	`mod_when` ,
	`mod_comment`
	)
	VALUES (
	NULL , '$commentid', '$subreddit', '$redditor', '$dt2', '$secret', 'pending', NULL, NULL
	);";
	if ($commentid and $commentid !== "") {
		mysqli_query($GLOBALS["___mysqli_ston"], $query);
	}
	//echo "<br>redditor: " . $redditor;
	/*echo "<br><br>This page will be styled, Brumbasse!";
	echo "<br><br>Hello " . $redditor . "!";
	echo "<br><br>This is your hash: " . $hash;
	echo "<br><br>(Also sent to you reddit inbox)";
	echo '<br><br>Use it when you log in at <a href="http://comment-tag.com">Comment Tag</a>';
	*/

	preg_match_all("/\[([^\]]*)\]/", $tag, $matches);
	//var_dump($matches[1]);
	$tagShorthand = $matches[1][0];
	$message = "Hello $moderator.\n\nRedditor $redditor (https://www.reddit.com/user/$redditor) reports a violation of the Comment Tag rule for the tag $tag\n\n.We at Comment Tag as well as $redditor asks that you look into the matter.\n\nTODO:\n\nPlease visit this page: http://www.comment-tag.com/mod_decision.php to validate or reject the report of tag misuse. For secure validation, please enter this hash:\n\nHash: $secret\n\nIn both cases, $redditor will be notified of the decision.\n\nThank you for your time.\n\nCheers!\n\nComment Tag";
	if ($commentid and $commentid !== "") {
		$response = $reddit->sendMessage($moderator, "Reddit Akward Rule Violation", $message);
	}
	$reddit->revoke();
}

//echo "<br><br>Thanks. Your hash has also been sent to your reddit inbox.";
function generateRandomString($length = 10) {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
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
<title>Comment Tag</title>

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
        <h2>Report Rule Violation</h2>
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
  
<? if ($reportedAlready) { ?>
	<div class="sixteen columns">
    <h2>Error</h2>
		<div style="text-align: center; margin: auto;">
			<h2>You already reported this to the moderators of /r/<? echo $subreddit; ?></h2>
			<br>
			<div class="button_wrapper"><a href="indx.php" class="btn_yellow"><span>Continue</span></a></div>
			<br>
		</div>
  </div>
<? } else {?>

	<div class="sixteen columns">
    <h2>Message Sent</h2>
		<div style="text-align: center; margin: auto;">
			<h2>Your message to the moderators of /r/<? echo $subreddit; ?> has been delivered</h2>
			<br>
			<div class="button_wrapper"><a href="indx.php" class="btn_yellow"><span>Continue</span></a></div>
			<br>
		</div>
  </div>

<? } ?>
  <div class="divider sixteen columns"></div>

        
</div>
<!--content ends--> 

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

<!--scroll to top arrow--> 
<a class="scrollToTop"></a> 

<!--other jqueries required--> 
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>
