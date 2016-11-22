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
        <h2>Mod Guide</h2>
        <p class="textstyle2">How to use Comment Tag as a reddit Moderator</p>
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
	<h2>Hi reddit Moderator</h2>
<h3>Welcome to Comment Tag! This system is designed to improve reddit by allowing the redditor to categorize what they do with their words in reddit conversation. Why?</h3>
 <? include('parts/benefits.php'); ?>
<h3>About 90% of the rule violations are taken care of by our system. In the last 10% human intervention is required. This is where you come in.</h3>
<h3>When a redditor reports a Comment Tag rule violation by clicking the special link underneath a comment the mods of the subreddit are notified. You will receive three links. One link to the reddit conversation, one link to the Comment Tag rule and one link where you decide whether or the violation is justified. It's pretty simple.</h3>
<h3>Thanks for working for free to improve reddit.</h3>
<h3>Cheers.</h3>
<h3>Else and Morten, Comment Tag</h3>
</div>

<div class="divider sixteen columns"></div>


<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "https://comment-tag.com/modguide.php";  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "modguide"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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
