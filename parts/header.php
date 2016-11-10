<?
session_start();
$logInOrRedditor = '<a href="activate.php?login=true" class="nav-contact nav">log in</a>';
$logOut = "";
if ($_SESSION['redditor'] !== null) {
	$logInOrRedditor = '<a class="nav-contact nav" href="admin.php?redditor=' . $_SESSION['redditor'] . '">' . $_SESSION['redditor'] . '</a>';
	$logOut = '<li><a class="nav-contact nav" href="logout.php">Log Out</a></li>';
}
?>
    <!--header starts-->
    <div id="header">
      
      <!--logo starts-->
      <div class="four columns logo alpha">
			<a href="indx.php">
				<div class="logo_beta_elements">
					<h1><img class="logo_image" src="images/Logomakr_0BWqIN.png" height="62" alt="logo"></h1>
					<span class="logo_text">BETA</span>
				</div>
		    </a>
	  </div>
      <!--logo ends-->
      
      <!--menu / navigation starts-->
      <div id="nav" class="twelve columns omega">
        <ul>
          <li><a href="https://redditawkward.com/indx.php" class="nav-header_wrapper nav selected">Home</a></li>
          <li><? echo $logInOrRedditor; ?></li>
					<? echo $logOut; ?>
          <li><a href="#">About</a>
            <ul>
			  <li class="lastdroplink"><a href="https://redditawkward.com/introduction.php">Introduction</a></li>
              <li class="lastdroplink"><a href="https://redditawkward.com/getstarted.php">Get Started</a></li>
			  <li class="lastdroplink"><a href="https://github.com/mhjerl" target=“_blank”>Source Code</a></li>
			  <li class="lastdroplink"><a href="https://redditawkward.com/misc.php">Misc.</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--menu / navigation ends-->
      
      <div class="clear"></div>
    </div>
    <!--header ends--> 
