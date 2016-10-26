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
    
    <!--header starts-->
    <div id="header"> 
      
      <!--logo starts-->
      <div class="four columns logo alpha"> <a href="#header_wrapper">
        <h1><img src="images/logo.png" width="122" height="62" alt="logo"></h1>
        </a> </div>
      <!--logo ends--> 
      
      <!--menu / navigation starts-->
      <div id="nav" class="twelve columns omega">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">Screenshots</a></li>
          <li><a href="#">Download</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">More</a>
            <ul>
              <li class="firstdroplink"><a href="pricing.php">Pricing - 3 columns</a></li>
              <li><a href="pricing-4columns.html">Pricing - 4 columns</a></li>
              <li><a href="#">Team</a></li>
              <li><a href="#">Reviews</a> </li>
              <li class="lastdroplink"><a href="layout.html" class="selected">Layout</a></li>
            </ul>
          </li>
          <li><a href="pricing-4columns.html" class="coloredlink">Pricing</a></li>
        </ul>
      </div>
      <!--menu / navigation ends-->
      
      <div class="clear"></div>
    </div>
    <!--header ends--> 
    
    <!--sub_header starts-->
    <div id="sub_header">
      <div class="columns sixteen">
        <h2>Upgrade account</h2>
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
	<div style="text-align: center; margin: auto;">
		<h2>Payment successful.</h2>
		<h2>Thank you.</h2>
		<h2>Your account has been upgraded to <? echo $_GET['accounttype']; ?></h2>
		<div class="button_wrapper"><a href="indx.php" class="btn_yellow"><span>Continue</span></a></div>
		<br>
	</div>
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
