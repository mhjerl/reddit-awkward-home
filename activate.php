<?
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Copenhagen');
include('config.php');
include("configsdk.php");
require_once("reddit.php");
$dt2=date("Y-m-d H:i:s");
$redditor = null;
$didRedditAuthentication = false;
$foundInDatabase = false;
$foundInSession = false;
$correctHash = false;

if (isset($_SESSION['redditor'])) {
	$redditor = $_SESSION['redditor'];
	$foundInSession = true;
}
else {
	if (isset($_POST['hash'])) {
		$hash = $_POST['hash'];
		$query5 = "SELECT redditor FROM prima_user WHERE hash='$hash';";
		$result5 = mysqli_query($GLOBALS["___mysqli_ston"], $query5);
		$numrows = mysqli_num_rows($result5);
		if ($numrows > 0) {
			$row = mysqli_fetch_row($result5);
			$redditor = $row[0];
			$foundInDatabase = true;
			$correctHash = true;
			$_SESSION['redditor'] = $redditor;
		}
	}
}

if (!$redditor && !isset($_GET['login'])) {

	$reddit = new reddit();

	//$response = $reddit->sendMessage("mortenhh2", "Look at this message!", "Hey!\n\n**[search!](http://www.google.com/)**");

	$userData = $reddit->getUser();
	//var_dump($userData);
	//echo "<br><br>";
	$redditor = $userData->name;
	$_SESSION['redditor'] = $redditor;
	if ($redditor === "") { die("session timed out!"); }
	$query4 = "SELECT * FROM prima_user WHERE redditor='$redditor';";
	$result4 = mysqli_query($GLOBALS["___mysqli_ston"], $query4);
	$num_rows2 = mysqli_num_rows($result4);
	if ($num_rows2 === 0) {
		if ($redditor) {
			$newHash = generateRandomString();
			$query5 = "INSERT INTO prima_user VALUES ('$redditor', '$dt2', '0', '$newHash', 'free', NULL, '0', 'neutral', '', NULL);";
			mysqli_query($GLOBALS["___mysqli_ston"], $query5);
		}
	}

	$query5 = "SELECT hash FROM prima_user WHERE redditor='$redditor';";
	$result5 = mysqli_query($GLOBALS["___mysqli_ston"], $query5);
	$row = mysqli_fetch_row($result5);
	$hash = $row[0];

	//echo "<br>redditor: " . $redditor;
	/*echo "<br><br>This page will be styled, Brumbasse!";
	echo "<br><br>Hello " . $redditorCursory . "!";
	echo "<br><br>This is your hash: " . $hash;
	echo "<br><br>(Also sent to you reddit inbox)";
	echo '<br><br>Use it when you log in at <a href="http://comment-tag.com">Comment Tag</a>';
	*/

	$response = $reddit->sendMessage($redditor, "Your Authentication Key for Comment Tag.", "KEY: " . $hash . "\n\nThis is an automated message.\n\nCheers!\n\n[Comment Tag!](http://comment-tag.com/)");
	$didRedditAuthentication = true;

}

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
<link rel="stylesheet" media="screen" href="css/style.css?v=asdf"/>
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
        <h2>Log In or Activate</h2>
        <p class="textstyle2">Get Started</p>
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
<? if ($foundInSession) { ?>
    <!-- <h2>Activate: <? echo $redditor; ?></h2> -->
		<div style="text-align: center; margin: auto;">
			<h2>Your account is already activated. You are already logged in.</h2>
			<div class="button_wrapper"><a href="logout.php" class="btn_yellow"><span>Log Out</span></a></div>
			<div class="button_wrapper"><a href="indx.php" class="btn_yellow"><span>Continue</span></a></div>
			<br>
		</div>
  </div>
<? 	} else if ($foundInDatabase || $didRedditAuthentication) { ?>
		  <h2>You're done! Thank you. Welcome to Comment Tag from Else and Morten!</h2>
			<div style="text-align: center; margin: auto;">
				<h2>Welcome <?=$redditor?>!</h2>
				<h3>Your Password is: <? echo $hash; ?></h3>
				<h2 style="color=green;">You are now logged in.</h2>
				<h3>Please activate the popup in the right side of the browser menu and use it here along with your reddit username!</h3>
				<h3>Remember to save your password for later use.</h3>
				<br>
				<div class="button_wrapper"><a href="indx.php" class="btn_yellow"><span>Continue</span></a></div>
				<br>
			</div>
	<? 
	} else if ($redditor) {
		if ($correctHash) { ?>
			<h2>Welcome <?=$redditor?>!</h2>
			<div style="text-align: center; margin: auto;">
				<h2>Well remembered! You are now logged in.</h2>
				<br>
				<div class="button_wrapper"><a href="indx.php" class="btn_yellow"><span>Continue</span></a></div>
				<br>
			</div>
		<? } else { ?>
			<h2>Something went wrong...</h2>
			<div style="text-align: center; margin: auto;">
				<h2>Wrong Password!</h2>
				<br>
				<div class="button_wrapper"><a href="activate.php" class="btn_yellow"><span>Try again</span></a></div>
				<br>
			</div>
		<? }
	} else { ?>
		<!-- <h2>Activate</h2> -->
		<form action="activate.php" method="post">
			<div style="text-align: center; margin: auto;">
				<h2>Activation Password</h2>
				<center><input class="hashinputlarge" id="hash" name="hash" type="password" value="<? echo $hash; ?>"></center>
				<br>
				<div class="button_wrapper"><input class="submit" type="submit" value="Log In"></div>
				<div class="button_wrapper"><a href="activate.php" class="btn_yellow"><span>Get your password for free!</span></a></div>
				<br>
			</div>
		</form>
<? 	}

?>
</div>
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
