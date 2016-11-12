<?
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Copenhagen');
include('../config.php');
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
<link rel="shortcut icon" href="../images/icons/favicon.ico">
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
    
 <? include('../parts/header.php'); ?>
    
    <!--sub_header starts-->
    <div id="sub_header">
      <div class="columns sixteen">
        <h2>comment-tag{i.was.being.careless}</h2>
        <p class="textstyle2">Tag Rules for the Browser Add-on and the Comment Tag Cloud</p>
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
    <h2>comment-tag{awkward}</h2>
	<h4>Inventor: Morten Hjerl-Hansen, 2016</h4>
<br>
<br>
  </div>
  
   <!-- section1234a -->
  <div class="sixteen columns">
		<h2>Rules</h2>

		<h3>§1 ...</h3>
	</div>
  <!-- section1234b -->
<? include("../parts/preamble.php"); ?>
  <div class="sixteen columns">
	<h4>Tip: If you have a general question, please do visit our <a href="generalquestions.php">main discussions page</a>.</h4>
  </div>
	<!-- section1234c -->
<div class="sixteen columns">


<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "https://comment-tag.com/rules/i.was.being.careless.php";  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "comment-tag.i.was.being.careless"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//reddit-awkward.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>



</div>
</div>
<!--content ends--> 

<!--footer starts-->
<div id="footer">
  <p>COMMENT TAG © 2016. All Rights Reserved.</p>
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
