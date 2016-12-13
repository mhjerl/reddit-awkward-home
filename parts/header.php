<?
$logInOrRedditor = '<a href="activate.php?login=true" class="nav">log in</a>';
$logOut = "";
if ($_SESSION['redditor'] !== null) {
	$logInOrRedditor = '<a class="nav" href="admin.php?redditor=' . $_SESSION['redditor'] . '">' . $_SESSION['redditor'] . '</a>';
	$logOut = '<li><a class="nav" href="logout.php">Log Out</a></li>';
}
?>
    <!--header starts-->
    <div id="header">
      
      <!--logo starts-->
		<div class="four columns logo alpha">
			<a href="http://comment-tag.com/index.php">
				<div class="logo_beta_elements">
					<h1><img class="logo_image" src="images/Logomakr_2zPQam.png" alt="logo"></h1>
					<span class="logo_text">BETA</span>
				</div>
		    </a>
		</div>
      <!--logo ends-->
      
      <!--menu / navigation starts-->
      <div id="nav" class="twelve columns omega">
        <ul>
          <li><a href="http://comment-tag.com/index.php" class="nav-header_wrapper nav selected">Home</a></li>
		  <li><a href="http://comment-tag.com/getstarted.php">Get Started</a></li>
          <li><a href="#">About</a>
            <ul>
			  <li class="lastdroplink"><a href="http://comment-tag.com/introduction.php">Introduction</a></li>
			  <li class="lastdroplink"><a href="https://github.com/mhjerl" target="_blank">Source Code</a></li>
			  <li class="lastdroplink"><a href="http://comment-tag.com/api.php">API</a></li>
			  <li class="lastdroplink"><a href="http://comment-tag.com/modguide.php">Mod Guide</a></li>
			  <li class="lastdroplink"><a href="http://comment-tag.com/credits.php">Credits</a></li>
            </ul>
          </li>
          <li><? echo $logInOrRedditor; ?></li>
					<? echo $logOut; ?>
        </ul>
      </div>
      <!--menu / navigation ends-->
      
      <div class="clear"></div>
    </div>
    <!--header ends--> 
