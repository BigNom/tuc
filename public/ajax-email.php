<?php

/* SETTINGS */
$yourEmail = "info@reactivewebdesigns.com";
$titleEmail = "Contact Form";

if($_POST){

  /* DATA FROM HTML FORM */
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $headers = "From: $email\r\nReply-To: $email\r\nX-Mailer: PHP/" . phpversion();

  /* SEND EMAIL */
  mail($yourEmail, $titleEmail . $email, $phone, $message, $headers);
}
?>
