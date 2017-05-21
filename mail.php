<?php
require "phpmail/PHPMailerAutoload.php";

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = "mail.iiitnr.edu.in";  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "pooja15100@iiitnr.edu.in";                 // SMTP username
$mail->Password = "pooja18#";                           // SMTP password
$mail->SMTPSecure = "tls";                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom("pooja15100@iiitnr.edu.in");
$mail->addAddress("pooja15100@iiitnr.edu.in");     // Add a recipient
//$mail->addAddress("niteshagarwal662@gmail.com");               // Name is optional
$mail->addReplyTo("poojajaiswal1796@gmail.com", "Information");
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//$mail->addAttachment("/var/tmp/file.tar.gz");        // Add attachments
//$mail->addAttachment("/tmp/image.jpg", "new.jpg");    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Dekho Message aagaya :D";
$mail->Body    = "Hello Nitesh <b>in bold!</b>";
$mail->AltBody = "I was successfull in sending the mail from php";

//$mail->AddHeaderField('X-Priority','1 (High)');

if(!$mail->send()) {
    echo "Message could not be sent.";
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	//alert("Message sent");
    echo "Message has been sent";
}