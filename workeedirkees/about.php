<?
session_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Europe/Copenhagen');
include('../config.php');
$dt2=date("Y-m-d H:i:s");
$sql = "UPDATE prima_user SET about='{$_GET['about']}' WHERE redditor='{$_SESSION['redditor']}'";
$result8 = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
echo json_encode( array( "success"=>true) );
