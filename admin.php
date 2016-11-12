<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Copenhagen');
include('config.php');
include('tagoverview.php');
$dt2=date("Y-m-d H:i:s");
$redditor = null;
$whenfirstseen = null;
$points = null;
$hash = null;
$type = null;
$email = null;
$rpoints = null;
$imageType = null;
$imageCustom = null;

if ($_SESSION['redditor'] !== null) {
	$redditor = $_SESSION['redditor'];
}
else {
	die("Access denied");
}

// 1. find redditors friends (relations) where redditor is firstperson
$friendsTemp = Array();
$query = "SELECT firstperson FROM prima_relation WHERE secondperson='$redditor';";

$result8 = mysqli_query($GLOBALS["___mysqli_ston"], $query);

$c = 0;
while($row = mysqli_fetch_array($result8)){
	$friend = $row[0];
	$friendsTemp[$c] = $friend;
	$c++;
}

// 2. find redditors friends (relations) where redditor is firstperson
$query = "SELECT secondperson FROM prima_relation WHERE firstperson='$redditor';";

$result8 = mysqli_query($GLOBALS["___mysqli_ston"], $query);

while($row = mysqli_fetch_array($result8)) {
	$friend = $row[0];
	$friendsTemp[$c] = $friend;
	$c++;
}

// 3. remove duplicates
$friendsTemp = array_unique($friendsTemp);

// 4. sum the rkarma for each friend
$friends = Array();
for ($c = 0; $c < sizeof($friendsTemp); $c++) {
	$friend = $friendsTemp[$c];
	$sql = "SELECT SUM(rkarmaforboth) AS totalrkarma FROM prima_relation WHERE (firstperson='$redditor' AND secondperson='$friend') OR (firstperson='$friend' AND secondperson='$redditor');";
	$result8 = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	$row = mysqli_fetch_row($result8);
	$totalRKarma = $row[0];
	$friends[$c]['friend'] = $friend;
	$friends[$c]['total'] = $totalRKarma;
	//echo "$redditor friend: " . $friend . " total: " . $totalRKarma;
}








$FILE_EXTS = array('.png', '.gif', '.jpg', '.jpeg');

/* Hvor mange kilobytes maa filerne fylde per styk? */
$konfiguration["max_stoerrelse"] = "10000";

/**
* Checker PHP-version
*/
list($major, $minor, $rev) = explode(".", phpversion());
if($major < 4) {
  die("I can only work with PHP 4 and above.");
}


if ($_FILES['my_file']['name']) {
	$file_name = $_FILES['my_file']['name'];

	$file_ext = strtolower(substr($file_name,strrpos($file_name,".")));

	//echo("extension" . $file_ext);
	/**
	   *  Checker lige om filen er for stor til at vi vil acceptere den.
	   *  Vi bruger ceil() i stedet for round(), saa vi ikke faar den skoere
	   *  situation, at fejlmeldingen siger, at filen er for stor, men angiver
	   *  samme stoerrelse for filen og den oevre graense.
	   */
	  $fil_stoerrelse = filesize($_FILES['my_file']['tmp_name'])/1024;
	  if($fil_stoerrelse > $konfiguration["max_stoerrelse"]) {
		  die("Unfortunately the file is too large. Max is " .
		       $konfiguration["max_stoerrelse"] . "kb, and your file is " .
		       ceil($fil_stoerrelse) . "kb");
	  }
	  if(!in_array($file_ext, $FILE_EXTS)) {
		  die("Wrong file type:" . $file_ext);
	  }

	$info = pathinfo($file_name);
	$file_new_name =  basename($file_name,'.'.$info['extension']) . generateRandomString() . $file_ext;  
	  
	$target_path = "uplooood/";

	$target_path = $target_path . basename( $file_new_name ); 

	if(move_uploaded_file($_FILES['my_file']['tmp_name'], $target_path)) {
		//echo "aFilen ".  basename( $_FILES['my_file']['name'])." er blevet uploadet";
	} else{
		die( "Error uploading. Please try later.");
	}

	$sql = "UPDATE prima_user SET imagetype='custom', imagecustom='$file_new_name' WHERE redditor='$redditor';";
	//echo "<br><br><br><br><br><br>$sql";
	mysqli_query($GLOBALS["___mysqli_ston"], $sql);

}


$query5 = "SELECT * FROM prima_user WHERE redditor='$redditor';";
$result5 = mysqli_query($GLOBALS["___mysqli_ston"], $query5);
$numrows = mysqli_num_rows($result5);
if ($numrows > 0) {
	$row = mysqli_fetch_row($result5);
	$redditor = $row[0];
	$whenfirstseen = $row[1];
	$points = $row[2];
	$hash = $row[3];
	$type = $row[4];
	$email = $row[5];
	$rpoints = $row[6];
	$imageType = $row[7];
	$imageCustom = $row[8];
	$about = $row[9];
	$_SESSION['redditor'] = $redditor;
}
else {
	die("Unknown user: " + $redditor);
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
<link rel="stylesheet" media="screen" href="css/style.css?v=f"/>
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
        <h2>Admin Page</h2>
        <p class="textstyle2">Manage your settings and view available tags</p>
      </div>
    </div>
    <!--sub_header ends--> 
    
  </div>
</div>
<!--header_wrapper ends--> 

<!--content starts-->
<div id="content" class="container clearfix"> 
   	<!--heading-->
	<br>
	<br>
	<div class="one-third column">
		<h2><? echo $redditor ?></h2>
		<h2>About me...</h2>
		<p><span id="ab_val"><? echo $about ? $about : "Bla bla bla..."; ?></span></p>
		<p><a href="#" id="chg_ab">Change...</a></p>
		<div id="ab_div" style="display: none">
			<textarea id="ab_inp" rows="10" cols="40"><? echo $about ? $about : ""; ?></textarea>
			<a href="#" id="ab_sub">Save</a>
		</div>
		<br><br><br><h2>Friends</h2>
<?
foreach ($friends as $friend) {
	$query = "SELECT imagetype, imagecustom FROM prima_user WHERE redditor='{$friend['friend']}' AND NOT(redditor='{$redditor}');";
	$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);
	$numrows = mysqli_num_rows($result);
	$row = mysqli_fetch_row($result);
	$imageType2 = $row[0];
	$imageCustom2 = $row[1];
	echo "<br><br><h4>" . $friend['friend'] . ": " . $friend['total'] . " Social Karma</h4>";
	$url = '<img class="friend_image_resize_fit_center" src="images/avatars/astronaut.png"/>';
	if ($imageType2 == "man") $url = '<img class="friend_image_resize_fit_center" src="images/avatars/builderman.png"/>';
	else if ($imageType2 == "woman") $url = '<img class="friend_image_resize_fit_center" src="images/avatars/builderwoman.png"/>';
	else if ($imageType2 == "custom") $url = '<img class="friend_image_resize_fit_center" src="uplooood/' . $imageCustom2 . '"/>';
	echo '<div class="friend_image_container">
<a href="user.php?redditor=' . $friend["friend"] . '">'
  . $url .
'</a>
</div>';
	
}





?>
	</div>
	<div class="one-third column">
<?
	
	if ($imageType == "man") echo '<img id="pro_image" src="images/avatars/builderman.png" height="100"/>';
	else if ($imageType == "woman") echo '<img id="pro_image" src="images/avatars/builderwoman.png" height="100"/>';
	else if ($imageType == "custom") echo '<img id="pro_image" src="uplooood/' . $imageCustom . '" height="100"/>';
	else echo '<img id="pro_image" src="images/avatars/astronaut.png" height="100"/>';
?>
<br>
<br>
<a class="pimselect" id="astronaut" href="#"><img src="images/avatars/astronaut.png" width="40"></a>
<a class="pimselect" id="builderman" href="#"><img src="images/avatars/builderman.png" width="40"></a>
<a class="pimselect" id="builderwoman" href="#"><img src="images/avatars/builderwoman.png" width="40"></a>
<? if (true/*$type === "premium"*/) { ?>
		<br>
		<br>
		<form name="myForm" action="admin.php" method="post" enctype="multipart/form-data">
			<input type="file" name="my_file" />
			<input type="submit" value="Upload"></input><br><br>
		</form>
<? } ?>
	</div>
	
	<div class="one-third column">
		<h2>Email</h2>
		<p><span id="em_val"><? echo $email ? $email : "Unknown"; ?></span></p>
		<p><a href="#" id="chg_em">Change...</a></p>
		<div id="em_div" style="display: none">
			<input class="hashinputlarge" type="text" id="em_inp" />
			<a href="#" id="em_sub">Save</a>
		</div>
		<br>
		<br>
	</div>	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>        
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
