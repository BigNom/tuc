<?php

/* SETTINGS */
$yourEmail = "simon.biddle@live.com";
$emailSubject = "Contact Form";

if($_POST){

  /* DATA FROM HTML FORM */
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $headers = "From: $name <$email>\r\nReply-To: $name <$email>\r\nSubject: $emailSubject\r\nX-Mailer: PHP/" . phpversion();

  /* SEND EMAIL */
  mail($yourEmail, $emailSubject, $message, $headers);
}
?>

<h5>Thanks for contacting The Ultimate Clean</h5>
<p>Please allow 24 hours for a response.</p>
<p><a href="/" class="button block">&laquo; Return to Home Page</a></p>
