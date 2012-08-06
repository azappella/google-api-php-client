<?php 
/**
 * @author Andrew Zappella < http://www.suisseo.ch/ >
 * @copyright 2012 Suisseo SARL
 * @license http://creativecommons.org/licenses/by-sa/3.0/
 * @package Google API PHP Client (Laravel Bundle)
 * @version 0.1 - 2012-07-31
 */

class Google {

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
   * Return the service name of the Google API services class files
   *
   * @param string @service e.g. apiAdsenseService.php
   * @return string 
   */
  public static function service_name($service)
  {
    return str_replace('Service.php','',str_replace('api','',$service));
  }

}