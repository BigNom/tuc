<?php
if (isset($_POST['send'])) {
  $to = 'simon.biddle@live.com';
  $subject = 'Feedback from my site';
  $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
  $message .= 'Email: '  . $_POST['email'] . "\r\n\r\n";
  $message .= 'COmments: '  . $_POST['comments'];
  echo $message;
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>acknowledge</title>
  </head>
  <body>
    <h1>Thank You</h1>
    <p>
      Your message has been sent.
    </p>
    <h1>Oops!</h1>
    <p>
      Sorry, there was a problem sending your message.
    </p>

  </body>
</html>
