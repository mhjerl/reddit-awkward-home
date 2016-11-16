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
    <p class="textstyle1">download for free.</p>
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
<div id="page_subfooter" class="row_color"> 
  
  <!--sub_footer starts-->
  <div class="container clearfix"> 
    
    <!--tab starts-->
    <div class="one-third column"> 
      <!--tabs nav starts-->
      <ul class="tabs">
        <!-- Give href an ID value of corresponding "tabs-content" <li>'s -->
        <li><a class="active" href="#tab1">Tab 1</a></li>
        <li><a href="#tab2">Tab 2</a></li>
        <li><a href="#tab3">Tab 3</a></li>
      </ul>
      <!--tabs nav ends--> 
      
      <!--tabs content starts-->
      <ul class="tabs-content">
        <!-- Give ID that matches HREF of above anchors -->
        <li class="active" id="tab1">
          <p>Knight Rider, a shadowy flight into the dangerous world of a man who does not exist. Michael Knight, a young loner on a crusade to champion the cause of the innocent, the helpless in a world of criminals who operate above the law.</p>
          <p>Lorem ipsum dolor sit amet sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Blandit praesent luptatum zzril delenit augue magna aliquam erat duis dolore te feugait.</p>
        </li>
        <li id="tab2">
          <p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.</p>
          <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        </li>
        <li id="tab3">
          <p>There's a voice that keeps on calling me. Down the road, that's where I'll always be. Every stop I make, I make a new friend. Can't stay for long, just turn around and I'm gone again. Maybe tomorrow, I'll want to settle down, Until tomorrow, I'll just keep moving on.</p>
          <P>Blandit praesent luptatum zzril delenit augue magna aliquam erat duis dolore te feugait. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</P>
        </li>
      </ul>
      <!--tabs content ends--> 
    </div>
    <!--tab ends--> 
    
    <!--testimonial starts-->
    <div class="one-third column">
      <h2>Reviews</h2>
      <p class="textstyle2">People say</p>
      <br class="clear"/>
      <ul class="testimonial">
        <li> <img src="images/preview/logo-img1.png" width="122" height="36" alt="image" class="image_noborder"> "Nam liber tempor cum soluta nihil imperdiet doming id quod mazim placerat facer possim assum." <span>- John Anderson, somecompany.com</span></li>
        <li> <img src="images/preview/logo-img2.png" width="122" height="36" alt="image" class="image_noborder"> "Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem." <span>- Jack Barnaby, somecompany.com</span></li>
      </ul>
    </div>
    <!--testimonial ends--> 
    
    <!--updates starts-->
    <div class="one-third column">
      <h2>Updates</h2>
      <p class="textstyle2">Upgrade to new features & fixes</p>
      <br class="clear"/>
      <ul class="updates">
        <li> <span class="coloredstrong">Version 1.2.4</span> <span class="smallstrong"> ( Released on April 26, 2012 )</span>
          <div class="divider"></div>
          <h6>What's new in this version?</h6>
          <a href="#" class="btn">Upgrade</a> <br class="clear"/>
          . Enhancements in UI elements<br/>
          . Added extra functionality </li>
        <li> <span class="coloredstrong">Version 1.2.5</span> <span class="smallstrong"> ( Released on May 5, 2012 )</span>
          <div class="divider"></div>
          <h6>What's new in this version?</h6>
          <a href="#" class="btn">Upgrade</a> <br class="clear"/>
          . Enhancements in UI elements<br/>
          . Lorem ipsum dolor sit amet<br/>
          . Fiant sollemnes in futurum<br/>
          . Added extra functionality </li>
      </ul>
    </div>
    <!--updates ends--> 
    
  </div>
  <!--sub_footer ends--> 
  
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