<? 
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Copenhagen');
include('config.php');
include("configsdk.php");
require_once("reddit.php");
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
        <h2>Comment Tag Moderator Decision</h2>
        <p class="textstyle2">Please decide...</p>
      </div>
    </div>
    <!--sub_header ends--> 
    
  </div>
</div>
<!--header_wrapper ends--> 

<!--content starts-->
<div id="content" class="container clearfix"> 

<? 
$appendString = "";
$moddecision = "dontknow";
if (isset($_POST['submit'])) {
	if(isset($_POST['hash'])) {
		$appendString = "<p>You have selected :" . $_POST['moddecision'] . "</p>";  //  Displaying Selected Value
		
		$hash = $_POST['hash'];
		$moddecision = $_POST['moddecision'];
		$modcomment = $_POST['modcomment'];
		$query = "SELECT * FROM prima_violation_reports  WHERE secret='$hash';";
		$result3 = mysqli_query($GLOBALS["___mysqli_ston"], $query);
		$count3 = mysqli_num_rows($result3);
		if ($count3 == 0) {
			$appendString = $appendString . "<p>Wrong hash!</p>";
		}
		else {
			$modcommentEsc = mysqli_real_escape_string($dbh, $modcomment);
			$query = "UPDATE prima_violation_reports SET mod_decision='$moddecision', mod_when='$dt2', mod_comment='$modcommentEsc' WHERE secret='$hash';";
			mysqli_query($GLOBALS["___mysqli_ston"], $query);
		}
	}
}
?>
  <div class="sixteen columns">
  <h2>Welcome Reddit Mod</h2>
	<p>Please enter the hash sent to you and make your decision...</p>
	<form action="mod_decision.php" method="post">
			<h2>Hash:</h2>
			<input class="hashinputlarge" id="hash" name="hash" type="text" value="<? echo $hash; ?>">
			<br>
			  <input type="radio" name="moddecision" id="moddecision" value="complaintapproved" <?php echo ($moddecision=='complaintapproved')?'checked':'' ?>>I hereby confirm that a rule violation has been made<br><br>
  			<input type="radio" name="moddecision" id="moddecision" value="complaintdeclined" <?php echo ($moddecision=='complaintdeclined')?'checked':'' ?>>I hereby dismiss the complaint.<br><br>
				<input type="radio" name="moddecision" id="moddecision" value="dontknow" <?php echo ($moddecision=='dontknow')?'checked':'' ?>>I can't decide<br><br>
				<p>Message for redditor (Optional)</p><br>
				<textarea rows="4" cols="50" name="modcomment" id="modcomment"><?php echo (isset($modcomment))?$modcomment:'';?></textarea>
			<input class="submit" name="submit" type="submit" value="Send">
			<p><? echo $appendString; ?></p>
			<br>
	</form>
  </div>

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
