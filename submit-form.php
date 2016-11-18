<?php
require 'PHPMailer/PHPMailerAutoload.php';
// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){


//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->IsSMTP();

$mail->Host = "smtp.gmail.com";

// optional
// used only when SMTP requires authentication  
$mail->SMTPAuth = true;
$mail->Username = 'mortenhh@gmail.com';
$mail->Password = 'emfvyiolxbbjxojl';
//Set who the message is to be sent from
$mail->setFrom($_POST[email], $_POST[name]);
//Set an alternative reply-to address
$mail->addReplyTo($_POST[email], $_POST[name]);
//Set who the message is to be sent to
$mail->addAddress('mortenhh gmail.com', 'Morten Hjerl-Hansen');
//Set the subject line
$mail->Subject = $_POST[subject];
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('mailcontents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
//$mail->AltBody = $_POST[message];
$mail->Body = $_POST[message];
//Attach an image file
$mail->addAttachment('PHPMailer/images/phpmailer_mini.png');
$mail->send();






}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Thanks!</title>
</head>
<body>
<p>Message Sent Successfully.</p>
</body>
</html>
