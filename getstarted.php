<?
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Copenhagen');
include('config.php');
include('tagoverview.php');
$dt2=date("Y-m-d H:i:s");
$redditor = null;

if ($_SESSION['redditor'] !== null) {
	$redditor = $_SESSION['redditor'];
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
        <h2>Tags and Rules</h2>
        <p class="textstyle2">The backbone of the system</p>
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
    <h2>Introduction</h2>
		<h3>The <span style="font-style: italic;">first</span> thing you might want to do on the Reddit Comment Page is to study the main comment or link. Is the post worthy of <a href="https://comment-tag.com/rules/i.find.this.unworthy.for.discussion.php">dicussion</a>? How about the <a href="https://comment-tag.com/rules/i.find.the.subject.unworthy.for.discussion.php">subject</a>?</h3>

<h3>Then you <span style="font-style: italic;">skim</span> the comment section. Has the original post been <a href="https://comment-tag.com/rules/i.dont.think.the.original.post.has.been.addressed.yet.php">addressed</a>? Has it been taken <a href="https://comment-tag.com/rules/i.dont.think.the.original.post.has.been.taken.seriously.yet.php">seriously</a>? Has it been treated <a href="https://comment-tag.com/rules/i.dont.think.the.original.post.has.been.treated.respectfully.php"> respectfully</a>? Do you find a comment which <a href="https://comment-tag.com/rules/your.comment.inspired.me.php">inspires</a> you?</h3>

<h3><span style="font-style: italic;">Before</span> you post you might want to consider what you expect from the redditor whose comment you are replying to. Do you want a reply from <a href="https://comment-tag.com/rules/waits.for.your.reply.only.php">only</a> him/her? Do you want <a href="https://comment-tag.com/rules/waits.for.anyone.php">anyone</a> to reply to your comment ASAP? Or maybe you find it difficult to reply at the moment, because you are certain that you will want to reply in a few <a href="https://comment-tag.com/rules/interesting.will.write.more.in.a.few.days.time.php">days</a> time, but you are uncertain of the content.</h3>

<h3><span style="font-style: italic;">Just before</span> hitting the submit button you may realize that in this specific context you <a href="i.consider.this.comment.definitive.and.consider.any.reply.inappropriate.php">don't want</a> a reply from anybody, because you consider what you've written indebatable.</h3>

<h3><span style="font-style: italic;">After</span> you have written your comment there may come a reaction comment. Did it make you feel <a href="https://comment-tag.com/rules/i.am.glad.you.said.that.to.me.php">good</a> inside? Do you feel offended? Do you expect an <a href="i.will.not.reply.and.expect.apology.php">apology</a> or at least a <a href="https://comment-tag.com/rules/guarded.apology.php">guarded apology</a>? What is the reason? Is it because the commenter is being <a href="https://comment-tag.com/rules/youre.being.overly.ironic.and.are.violating.the.rules.php">overly ironic</a> and steps beyond regular rules of conduct. Afterwards you can always <a href="https://comment-tag.com/rules/explanation.why.i.was.angry.php">explain</a> why you were angry. The other person might have been <a href="https://comment-tag.com/rules/i.was.being.careless.php">careless</a> and is willing to admit it.</h3>

<h3><span style="font-style: italic;">Conflicts</span> of this sort should be attempted to be resolved bilaterally, i.e. between two persons. You wait a bit and see if he/she <a href="https://comment-tag.com/rules/i.apologize.php">apoligizes</a>. Then you might say <a href="https://comment-tag.com/rules/no.problem.php">no problem!</a>, <a href="https://comment-tag.com/rules/dont.mind.its.ok.lets.move.on.php">"don't mind, it's ok, lets move on"</a> or even <a href="https://comment-tag.com/rules/its.fine.i.consider.the.case.closed.php">"It's fine, I consider the case closed!"</a></h3>

<h3>This is what Comment Tag can do for you.</h3>

<h3>After all, Reddit should be even more fun to use. Go ahead, say something <a href="https://comment-tag.com/rules/i.am.one.of.the.strangest.people.youll.ever.meet.php">silly</a> and be a little <a href="https://comment-tag.com/rules/er.hi.what.kind.of.strange.presentation.is.that.php">awkward</a>! Just a little.</h3>

<h3>Happy browsing!</h3>
<br><br>
<h3>Comment Tag</h3>
<h4>PS: Usually people don't understand Comment Tag tags are all about because they're not familiar with them. A good place to start would therefore be: comment-tag{your.comment.inspired.me}</h4>
</div>
  <div class="divider sixteen columns"></div>
  <!--single column-->

  <!--heading-->
  <div class="sixteen columns">
    <h2>Tags</h2>
  </div>
  <div class="divider sixteen columns"></div>

<?
	$tagCategoryRememberedALongLongTime = "";
	$firstTimeAround = true;
	foreach ($tagCategories as $tagShortHand=>$tagCategory) {
		$tagUse = getTagUse($tagShortHand, $redditor);
		if ($tagCategory !== $tagCategoryRememberedALongLongTime) {
			$tagCategoryRememberedALongLongTime = $tagCategory;
			if (!$firstTimeAround) {
				echo '</table></div><div class="divider sixteen columns"></div>';
			}
			else {
				$firstTimeAround = false;
			}
			echo '<div class="sixteen columns"><br><br><br><h3>' . $tagCategory . '</h3><table class="zebra"><tr><th>Tag</th><th>Your Tag Use</th><th>Overall Tag Use</th></tr>';
			echo '<tr><td><div style="width: 630px;"><a href="rules/' . $tagShortHand . '.php">comment-tag{' . $tagShortHand . '}</a></div></td><td><div style=" text-align: center; width: 100px;">' . $tagUse->me . '</div></td><td><div style=" text-align: center; width: 150px;">' . $tagUse->total . '</div></td></tr>';
		}
		else {
			echo '<tr><td><div style="width: 630px;"><a href="rules/' . $tagShortHand . '.php">comment-tag{' . $tagShortHand . '}</a></div></td><td><div style=" text-align: center; width: 100px;">' . $tagUse->me . '</div></td><td><div style=" text-align: center; width: 150px;">' . $tagUse->total . '</div></td></tr>';
		}
	}
?>
</table></div><div class="divider sixteen columns"></div>

</div>
<!--content ends--> 

<!--footer starts-->
<div id="footer">
  <p>REDDIT AKWARD © 2016. All Rights Reserved.</p>
  <ul>
    <li><a href="https://comment-tag.com/rules/">Terms of use </a></li>
    <li><a href="https://comment-tag.com/rules/">Privacy policy</a></li>
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

<?
function getTagUse($tagShortHand, $redditor) {
	$tagUse = new stdClass();
	$sql = "SELECT * FROM prima_tag_use WHERE redditor='$redditor' AND tag='comment-tag{" . $tagShortHand . "}';";
	$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	$count = mysqli_num_rows($result);
	$tagUse->me = $count;
	$sql = "SELECT * FROM prima_tag_use WHERE tag='comment-tag{" . $tagShortHand . "}';";
	$result = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
	$count = mysqli_num_rows($result);
	$tagUse->total = $count;
		if (!$redditor or $redditor === "") {
		$tagUse->me = "Please log in";
	}
	return $tagUse;
}

