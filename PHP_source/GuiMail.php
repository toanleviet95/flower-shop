<?php
include "class.phpmailer.php"; 
include "class.smtp.php"; 
 
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = "smtp.gmail.com"; // specify main and backup server: smtp.gmail.com
$mail->Port = 465; // 465 hoac 587
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = 'ssl'; // ssl hoac tls
$mail->Username = "toanleviet95@gmail.com"; // your SMTP username or your gmail username
$mail->Password = "kid1412lvt"; // your SMTP password or your gmail password
$from = "toanleviet95@gmail.com"; // Reply to this email
$to="toanleviet95@yahoo.com.vn"; // Recipients email ID
$name="Le Viet Toan"; // Recipient's name
$mail->From = $from;
$mail->FromName = "TOAN"; // Name to indicate where the email came from when the recepient received
$mail->AddAddress($to,$name);
$mail->AddReplyTo($from,"Le Viet Toan");
$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML
$mail->Subject = "Test mail script from bloghoctap.com";
$mail->Body = "<b>Mail nay duoc goi bang phpmailer class. - <a href='http://bloghoctap.com'>bloghoctap.com</a></b>"; //HTML Body
$mail->AltBody = "Mail nay duoc goi bang phpmailer class. - bloghoctap.com"; //Text Body
//$mail->SMTPDebug = 2;
if(!$mail->Send())
{
	echo "<h1>Loi khi goi mail: " . $mail->ErrorInfo . '</h1>';
}
else
{
	echo "<h1>Send mail thanh cong</h1>";
}
?>