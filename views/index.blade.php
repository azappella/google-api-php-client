<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Google API PHP Client</title>
  <meta name="viewport" content="width=device-width">
</head>
<body>
  <?php if ( Session::has('status') ): ?>
  <p><?php echo $status ?></p>
  <?php endif; ?>

  <?php if ( isset($google_auth_url) ) : ?>
  <a href="<?php echo $google_auth_url; ?>">Connect with Google</a>
  <?php else : ?>
  <a href="<?php echo URL::to('gapi/logout'); ?>">Logout</a>
  <?php endif; ?>
  <ul>
  
  <?php if (isset($services)) : ?>
  <?php foreach ($services as $service) : ?>
    <li><a href="<?php echo URL::to('google-api/'.strtolower(Google::service_name($service))); ?>"><?php echo Google::service_name($service); ?></a></li>
  <?php endforeach; ?>
  </ul> 
  <?php endif; ?>
  
</body>
</html>

