
<?php
require('PaypalIPN.php');
include('config.php');
date_default_timezone_set('Europe/Copenhagen');
use PaypalIPN;
//sendMail("1");
$ipn = new PayPalIPN();
// Use the sandbox endpoint during testing.





//$ipn->useSandbox();






//sendMail("2");
$verified = $ipn->verifyIPN();
//sendMail("3");
if ($verified) {
    /*
     * Process IPN
     * A list of variables is available here:
     * https://developer.paypal.com/webapps/developer/docs/classic/ipn/integration-guide/IPNandPDTVariables/
     */
	$item_name = $_POST['item_name'];
    $item_number = $_POST['item_number'];
    $payment_status = $_POST['payment_status'];
    $payment_amount = $_POST['mc_gross'];
    $payment_currency = $_POST['mc_currency'];
    $txn_id = $_POST['txn_id'];
    $receiver_email = $_POST['receiver_email'];
    $payer_email = $_POST['payer_email'];
	$redditor = $_POST['custom'];
	//sendMail("redditor: " . $redditor);
	$dt2=date("Y-m-d H:i:s");
	$sql = "INSERT INTO `prima_ipn` (
	`id` ,
	`created_date` ,
	`payment_currency` ,
	`payment_amount` ,
	`payer_email` ,
	`receiver_email` ,
	`txn_id` ,
	`payment_status` ,
	`item_name` ,
	`item_number`
	)
	VALUES (
	NULL , '$dt2', '$payment_currency', '$payment_amount', '$payer_email', '$receiver_email', '$txn_id', '$payment_status', '$item_name', '$item_number'
	);";
	echo $sql;
	//sendMail($sql);
	mysqli_query($GLOBALS["___mysqli_ston"], $sql);

	$sql="UPDATE `prima_user` SET `type` = '$item_name', `email` = '$payer_email' WHERE `prima_user`.`redditor` = '$redditor';";
	//sendMail($sql);
	mysqli_query($GLOBALS["___mysqli_ston"], $sql);
}
else {
	//sendMail("4");
}
// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
header("HTTP/1.1 200 OK");


function //sendMail($text) {
	mail("mortenhh@gmail.com","redditawkward.com",$text,"from:redditawkward@redditawkward.com");
}
?>
