<?php
/**
 * @author Andrew Zappella < http://www.suisseo.ch/ >
 * @copyright 2012 Suisseo SARL
 * @license http://creativecommons.org/licenses/by-sa/3.0/
 * @package Google API PHP Client (Laravel Bundle)
 * @version 0.2 - 2013-02-21
 */

require_once __DIR__.'/google-api-php-client.php';

Route::get('(:bundle)', function()
{
  $google = IoC::resolve('google-api-php-client');
  
  if ( Input::has('code') ) 
  {
    $google->authenticate();
    Session::put('token', $google->getAccessToken());
    return Redirect::to('google-api');
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
  
  
});

Route::get('(:bundle)/(:any)', function($service)
{
  $google = IoC::resolve('google-api-php-client');
  
  $class_name = 'Google_'.ucfirst($service).'Service';
  $class_file = $class_name . ".php";
  $classes = Google::services();
  
  if ( Session::has('token') ) 
  {
    $google->setAccessToken(Session::get('token'));
  
    try {
      if (in_array($class_file, $classes)) {
        $service = new $class_name($google);
      } 
      else { 
        throw new Exception('Google API Service not found'); 
      }
    } catch (apiServiceException $e) {
        print 'There was an API service error '
        . $e->getCode() . ':' . $e->getMessage();
    } catch (apiException $e) {
        print 'There was a general API error '
        . $e->getCode() . ':' . $e->getMessage();  
    } catch (Exception $e) {
        print 'There was a general error '
        . $e->getCode() . ':' . $e->getMessage();   
    }
  }

  if ( $google->getAccessToken() ) 
  { 
    Session::put('token', $google->getAccessToken());
    return View::make(Bundle::prefix(BUNDLE_NAME).'index');
  }
  // if token is not set, print Google API Auth link
  else 
  {
    $data = array('google_auth_url' => $google->createAuthUrl());
    return View::make(Bundle::prefix(BUNDLE_NAME).'index', $data);
  }
  
  
});

Route::get('(:bundle)/logout', function()
{
  if ( Session::has('token') )
  {
    Session::forget('token');
  }
});
