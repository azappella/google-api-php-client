<?php
/**
 * @author Andrew Zappella < http://www.suisseo.ch/ >
 * @copyright 2012 Suisseo SARL
 * @license http://creativecommons.org/licenses/by-sa/3.0/
 * @package Google API PHP Client (Laravel Bundle)
 * @version 0.1 - 2012-07-31
 */

const BUNDLE_NAME = 'google-api-php-client';
 
Autoloader::map(array(
    'apiClient' => Bundle::path(BUNDLE_NAME).'google-api-php-client'.DS.'src'.DS.'apiClient.php'
));

Autoloader::directories(array(Bundle::path(BUNDLE_NAME).'google-api-php-client'.DS.'src'.DS.'contrib'.DS));

Laravel\IoC::singleton('google-api-php-client', function()
{
    
    $bundle_prefix = Bundle::prefix(BUNDLE_NAME);
    
    $config = array();
    $config['application_name'] = Config::get($bundle_prefix.'google.application_name');
    $config['oauth2_client_id'] = Config::get($bundle_prefix.'google.client_id');
    $config['oauth2_client_secret'] = Config::get($bundle_prefix.'google.client_secret');
    $config['oauth2_redirect_uri'] = Config::get($bundle_prefix.'google.redirect_uri');
    $config['developer_key'] = Config::get($bundle_prefix.'google.developer_key');
    $config['use_objects'] = Config::get($bundle_prefix.'google.use_objects');
    
    $google = new apiClient($config);
    $google->setScopes(Config::get($bundle_prefix.'google.set_scopes'));
    $google->setAccessType(Config::get($bundle_prefix.'google.access_type'));
    
    return $google;
    
});


