<?php include("details.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
<title><?php echo $businessname; ?> - Error</title>
<meta http-equiv="Cache-Control" content="max-age=600" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="noindex, nofollow, all" />
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="width" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=2.0, user-scalable=no" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- Start Nav -->
<div id="nav">
    <ul>
        <li class="top"><a href="bookings.php"><span>Error</span> <span class="arrow">&lt;&lt; Back</span></a></li>
    </ul>
</div>
<!-- End Nav -->
<!-- Start Content -->
<div id="content">
    <div class="error">
    <p><span>Your message has NOT been sent.</span></p>
    </div>
    <p>Please click on the link below and make sure you fill in all the required fields before re-submitting the form.</p>
    <p></p>
    <p><span><a href="bookings.php">&lt;&lt; Return to the form</a></span></p>
    <p></p>
    <p></p>
</div>
<!-- End Content -->
<!-- Start Footer -->
<div id="footer">
    <p><?php echo $copyright; ?>
<?php

?> <?php echo $businessname; ?><br /><?php echo $address1; ?> <?php echo $address2; ?></p>
</div>
<!-- End Footer -->
<?php include("google-$analytics.php"); ?>
</body>
</html>
