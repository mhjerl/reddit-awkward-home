<?php
// Start the session
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
        <h2>Pricing</h2>
        <p class="textstyle2">Best plans to suite your Reddit experience</p>
      </div>
    </div>
    <!--sub_header ends--> 
    
  </div>
</div>
<!--header_wrapper ends-->

<div class="container clearfix"> 
  
  <!--pricing_intro starts-->
  <div class="pricing_intro columns sixteen">
    <h2>Best and flexible plans to suite you, and much more!</h2>
    <p class="textstyle1"></p>
  </div>
  <!--pricing_intro ends--> 
  
  <!--table one starts-->
 <div class="eight columns">
    <div class="pricing_table">
      <table border="0">
        <thead>
          <tr>
            <th>Pro</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <td><div class="button_wrapper">


<? if ($_SESSION['redditor'] !== null) {
$redditor = $_SESSION['redditor'];
?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8XXMYLBEMURNY">
<input name="custom" value="<? echo $redditor; ?>" type="hidden"> <! -- mhh -->
<INPUT TYPE="hidden" NAME="return" value="https://comment-tag.com/finish_checkout.php?accounttype=premium"> <! -- mhh -->
<input type="hidden" name="cancel_return" value="https://comment-tag.com/cancel_checkout.php"> <! -- mhh -->
<input type="image" src="https://www.paypalobjects.com/da_DK/DK/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – den sikre og nemme måde at betale på nettet.">
<img alt="" border="0" src="https://www.paypalobjects.com/da_DK/i/scr/pixel.gif" width="1" height="1">
</form>
<? } else { ?>

<a href="activate.php?login=true" class="btn_greysmall"><span>Sign Up</span></a>

<? } ?>



</div></td>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td class="focus">$4.99 <span>3 mo</span></td>
          </tr>
		  <tr>
          <td><h6>Browser Add-On</h6>
              <p>Yes</p></td>
          </tr>
          <tr>
            <td><h6>Rules</h6>
              <p>Yes</p></td>
          </tr>
          <tr>
            <td><h6>Awkward Tags</h6>
              <p>Yes</p></td>
          </tr>
          <tr>
            <td><h6>Awkward Karma</h6>
              <p>Yes</p></td>
          </tr>
          <tr>
            <td><h6>Social Karma</h6>
              <p>Yes</p></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!--table one ends--> 
  
  <!--table three starts-->
  <div class="eight columns">
    <div class="pricing_table featured_table">
      <div class="ribbon"></div>
      <table border="0">
        <thead>
          <tr>
            <th>Premium</th>
          </tr>
        </thead>
        <tfoot>
<!-- <input name="redditor" value="landfast" type="hidden"> -->
          <tr>
            <td><div class="button_wrapper">




<? if ($_SESSION['redditor'] !== null) {
$redditor = $_SESSION['redditor'];
?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8XXMYLBEMURNY">
<input name="custom" value="<? echo $redditor; ?>" type="hidden"> <! -- mhh -->
<INPUT TYPE="hidden" NAME="return" value="https://comment-tag.com/finish_checkout.php?accounttype=premium"> <! -- mhh -->
<input type="hidden" name="cancel_return" value="https://comment-tag.com/cancel_checkout.php"> <! -- mhh -->
<input type="image" src="https://www.paypalobjects.com/da_DK/DK/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – den sikre og nemme måde at betale på nettet.">
<img alt="" border="0" src="https://www.paypalobjects.com/da_DK/i/scr/pixel.gif" width="1" height="1">
</form>
<? } else { ?>

<a href="activate.php?login=true" class="btn_greysmall"><span>Sign Up</span></a>

<? } ?>


</div></td>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td class="focus">$7.99 <span>6 mo</span></td>
          </tr>
		  <tr>
          <td><h6>Browser Add-On</h6>
              <p>Yes</p></td>
          </tr>
          <tr>
            <td><h6>Rules</h6>
              <p>Yes</p></td>
          </tr>
          <tr>
            <td><h6>Awkward Tags</h6>
              <p>Yes</p></td>
          </tr>
          <tr>
            <td><h6>Awkward Karma</h6>
              <p>Yes</p></td>
          </tr>
          <tr>
            <td><h6>Social Karma</h6>
              <p>Yes</p></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!--table three ends--> 
  
</div>

  
  <!--footer starts-->
  <div id="footer">
    <p>COMMENT TAG © 2016. All Rights Reserved.</p>
    <ul>
      <li><a href="#">Terms of use</a></li>
      <li><a href="http://comment-tag.com/privacy.php">Privacy policy</a></li>
    </ul>
    <div class="clear"></div>
  </div>
  <!--footer ends-->
  
  <div class="clear"></div>
</div>

<!--scroll to top arrow--> 
<a class="scrollToTop"></a> 

<!--jqueries required--> 
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>
