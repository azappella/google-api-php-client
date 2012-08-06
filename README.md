Google API PHP Client (Laravel Bundle)
======================================

This is a based on the Google API PHP Client hosted at 
<http://code.google.com/p/google-api-php-client/>

  The Google API Client Library enables you to work with Google APIs such as 
  Analytics, Adsense, Google+, Calendar, Moderator, Tasks, or Latitude on your server, 
  in the language of your choice ( as long as it's PHP :P ).
  
Installation
------------
### Artisan

  php artisan bundle:install google-api-php-client

### Bundle Registration

Add the following to your application/bundles.php file:

  'google-api-php-client' => array(
    'handles' => 'google-api',
    'location' => 'google-api-php-client',
    'auto' => true
  ),

Configuration
-------------
Edit the following in your bundles/google-api-php-client/config/google.php file:

  // Visit https://code.google.com/apis/console to generate your
  // client id, client secret, and to register your redirect uri.
  return array(
    'application_name' => 'YOUR_APPLICATION_NAME', 
    'client_id' => 'YOUR_CLIENT_ID',
    'client_secret' => 'YOUR_CLIENT_SECRET',
    'redirect_uri' => 'YOUR_REDIRECT_URI',
    'developer_key' => 'YOUR_DEVELOPER_KEY',
    // e.g. for Google Books API
    'set_scopes' => array('https://www.googleapis.com/auth/books'), 
    'access_type' => 'online',
    // Returns objects the Google API Service instead of associative arrays
    'use_objects' => true 
  );

Usage example
-------------
(1) In your application/routes.php file:

  $google = IoC::resolve('google-api-php-client');
  
  if ( Input::has('code') ) 
  {
    $google->authenticate();
    Session::put('token', $google->getAccessToken());
    return Redirect::to('/')->with('status','Successful Authentication!');
  }
  
  if ( Session::has('token') ) 
  {
    $google->setAccessToken(Session::get('token'));
    return View::make(Bundle::prefix(BUNDLE_NAME).'index')->with('services', Google::services());
  }
  if ( $google->getAccessToken() ) 
  { 
    Session::put('token', $google->getAccessToken());
    return View::make(Bundle::prefix(BUNDLE_NAME).'index')->with('services', Google::services());
  }
  // if token is not set, print Google API Auth link
  else 
  {
    $data = array(
      'google_auth_url' => $google->createAuthUrl());
    return View::make(Bundle::prefix(BUNDLE_NAME).'index', $data);
  }
    

(2) Add the following to your application/views/index.php:

  <!DOCTYPE HTML>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Google API PHP Client</title>
    <meta name="viewport" content="width=device-width">
  </head>
  <body>
    <a href="<?php echo URL::to('google-api/'); ?>">Go to Google API Bundle page</a>
    <br />
    <?php if ( isset($google_auth_url) ) : ?>
    <a href="<?php echo $google_auth_url; ?>">Connect with Google</a>
    <?php endif; ?>
  </body>
  </html>
  
(3) For your convenience, you can also create a logout route:

  Route::get('logout', function()
  {
    if ( Session::has('token') )
    {
      Session::forget('token');
      return "Successfully logged out!";
    }
  });

    
Available Services 
------------------
Disclaimer: services have not all been tested

  * Adsense
  * Analytics
  * Bigquery
  * Blogger
  * Books
  * Calendar
  * Customsearch
  * Freebase
  * Gan
  * Latitude
  * Moderator
  * Oauth2
  * Orkut
  * Pagespeedonline
  * Plus
  * Prediction
  * Shopping
  * SiteVerification
  * Tasks
  * Translate
  * Urlshortener
  * Webfonts

You can also visit <http://localhost/google-api/> for a list of available 
Google API services, once you have authorized and authenticated your app. 
