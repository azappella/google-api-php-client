Google API PHP Client (Laravel Bundle)
======================================
This bundle is based on the Google API PHP Client hosted at 
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

### Configuration
Edit the following in your bundles/google-api-php-client/config/google.php file:

    // Visit https://code.google.com/apis/console to generate your
    // client id, client secret, and to register your redirect uri.
    return array(
      'application_name' => 'YOUR_APPLICATION_NAME', 
      'client_id' => 'YOUR_CLIENT_ID',
      'client_secret' => 'YOUR_CLIENT_SECRET',
      'redirect_uri' => 'YOUR_REDIRECT_URI',
      // under Simple API access, create a browser key, and copy/paste: API key
      'developer_key' => 'YOUR_DEVELOPER_KEY',
      // e.g. for Google Books API
      'set_scopes' => array('https://www.googleapis.com/auth/books'), 
      'access_type' => 'online',
      // Returns objects the Google API Service instead of associative arrays
      'use_objects' => true 
    );

Usage example
-------------
(1) Add the following to your application/routes.php file:

    Route::get('/', function()
    {
      $google = IoC::resolve('google-api-php-client');
      
      // after redirect, if auth code is set, authenticate user
      if ( Input::has('code') ) 
      {
        $google->authenticate();
        Session::put('token', $google->getAccessToken());
        return Redirect::to('/')->with('status','You are now successfully authenticated!');
      }
      // if user is authenticated, do something with a Google API service
      if ( Session::has('token') ) 
      {
        $google->setAccessToken(Session::get('token'));
        $service = new apiBooksService($google);
        $optParams = array('filter' => 'free-ebooks');
        $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);
        return View::make('index')->with('results', $results);
      }
      
      // if user is authorized, but token is not set
      if ( $google->getAccessToken() ) 
      { 
        Session::put('token', $google->getAccessToken());
        return View::make('index');
      }
      // if token is not set, print Google API Auth link
      else 
      {
        return View::make('index')->with('google_auth_url', $google->createAuthUrl());
      }
    });

    Route::get('gapi/logout', function()
    {
      if ( Session::has('token') )
      {
        Session::forget('token');
        return Redirect::to('/')->with('status','Successfully logged out!');
      }
    });

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
      <?php if ( Session::has('status') ): ?>
      <p><?php echo Session::get('status'); ?></p>
      <?php endif; ?>

      <?php if ( isset($google_auth_url) ) : ?>
      <a href="<?php echo $google_auth_url; ?>">Connect with Google</a>
      <?php else : ?>
      <a href="<?php echo URL::to('gapi/logout'); ?>">Logout</a>
      <?php endif; ?>
     
      <?php if (isset($results)) : ?>
      <pre> <?php var_dump($results); ?> </pre>
      <?php endif; ?>
    </body>
    </html>

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
Google API services. 

Examples
--------
More detailed examples for each Google API service can be found under 
    bundles/google-api-php-client/google-api-php-client/examples/