<?php
/**
 * @author Andrew Zappella < http://www.suisseo.ch/ >
 * @copyright 2012 Suisseo SARL
 * @license http://creativecommons.org/licenses/by-sa/3.0/
 * @package Google API PHP Client (Laravel Bundle)
 * @version 0.2 - 2013-02-21
 */

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
  'use_objects' => true,
  // auto (default) or force. Indicates if the user should be re-prompted for consent.
  'approval_prompt' => 'auto'
);