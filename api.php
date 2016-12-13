<?php
// Put this code in first line of web page.
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="corporate, business software, app, one page template" />
<meta name="keywords" content="one page template, corporate, software, app, business, marketing, landing page, web marketing, internate marketing"/>
<meta name="author" content="Tansh" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<title>API</title>

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
        <h2>API</h2>
        <p class="textstyle2">Access our server from the public realm | For programmers and entrepreneurs</p>
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
		<h2>API CALLS</h2>
		<h3>Format:</h3>
		<h3>GET: http://comment-tag.com/server/init.php</h3>
		<h3>Parameters: (Required: All)</h3>
		<h4>redditor: the redditor, i.e. the client who wants the compiled .json formatted data of the comment-page, notifications, friends etc.</h4>
		<h4>hash: the password</h4>
		<h4>subreddit: self-explanatory</h4>
		<h4>commentpageid: the 4th part of the reddit comment page url</h4>
		<h4>pagename: the 5th part of the reddit comment page url</h4>
		<h4>strictversion: the minimum version of the client software</h4>
</div>

<div class="divider sixteen columns"></div>

        
</div>
<!--content ends--> 

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

<!--scroll to top arrow--> 
<a class="scrollToTop"></a> 

<!--other jqueries required--> 
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>
