<?php 
/**
 * @author Andrew Zappella < http://www.suisseo.ch/ >
 * @copyright 2012 Suisseo SARL
 * @license http://creativecommons.org/licenses/by-sa/3.0/
 * @package Google API PHP Client (Laravel Bundle)
 * @version 0.2 - 2013-02-21
 */

class Google {
  
  const BUNDLE_NAME = 'google-api-php-client';
  
  /**
   * All the service names for Google API 
   */
  public static $services = array();
  
  /**
   * Return the Google API services class files
   *
   * @return array $services with the format apiAdsenseService.php,
   */
  public static function services() 
  {
    // Fetch all Google API services classes from Bundle folder.
    // scandir returns the files of a folder including '.' & '..' so we slice
    // the returned array to remove them.
    $classes = array_slice(scandir(Bundle::path('google-api-php-client')
      .'google-api-php-client'.DS.'src'.DS.'contrib'.DS), 2);
    return self::$services = $classes;
  } 
  
  /**
   * Return the name of the Google API service 
   *
   * @param string @service e.g. Google_AdsenseService.php
   * @return string 
   */
  public static function service_name($service)
  {
    return str_replace('Service.php','',str_replace('Google_','',$service));
  }
  
  /**
   * Load the Google API service classes
   *
   * @return void
   */
  public static function load($classes,$path='')
  {
    $path = Bundle::path(BUNDLE_NAME).'google-api-php-client'.DS.'src'.DS.'contrib'.DS;
    try {
      // var_dump(get_declared_classes());
      foreach ($classes as $class) {
       // include_once $path . $class;
      }
    } catch (Exception $e) {
        echo $e->getMessage(), "\n";
    } 
  }
  
  /**
   * Return the path of the Google API service class file
   *
   * @param string $class e.g. Google_AdsenseService.php
   * @return string service class path
   */  
  public static function format_path($class)
  {
    $path = Bundle::path(BUNDLE_NAME).'google-api-php-client'.DS.'src'.DS.'contrib'.DS;
    return $path . $class;
  }
  
  /**
   * Return the name of the Google API service class name
   *
   * @param string $class e.g. Google_AdsenseService.php
   * @return string service class name
   */  
  public static function strip_extension($class)
  {
    return str_replace('.php', '', $class);
  }
  
  /**
   * Format the Google API services class files to be used by laravel's
   * Autoloader::map() method.
   *
   * @param array $classes e.g. array('Google_AdsenseService.php', 'Google
   * @return array mappings for the Autoloader::map() method
   */  
  public static function format_mappings($classes)
  {
    $class_names = array_map(array(__CLASS__,'self::strip_extension'), $classes);
    $class_paths = array_map(array(__CLASS__,'self::format_path'), $classes);
    return array_combine($class_names, $class_paths);
  }

}