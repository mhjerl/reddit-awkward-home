<?
// Put this code in first line of web page.
session_start();
$_SESSION = array(); // Empty every session variable
session_destroy();
echo "Done. (This page will be styled.)";
?>
