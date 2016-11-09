<?php

$host="http://72.5.73.201"; // Host name
$username="redditawkward_com"; // mysql username
$password="***"; // mysql password
$db_name="redditawkward_com"; // Database name

$hostname = "redditawkward.com";
$ENTRIES_PER_PAGE = 5;
$dbh=($GLOBALS["___mysqli_ston"] = mysqli_connect("$host",  "$username",  "$password")) or die ('2220 I cannot connect to the database because: ' . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . $db_name));

mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES utf8");





$conn = mysql_connect("$host", "$dbuser", "$dbpass") or die(mysql_error());
mysql_select_db($dbname, $conn) or die(mysql_error());



?>
