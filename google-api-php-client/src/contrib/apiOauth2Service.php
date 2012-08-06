<?php
/*
 * Copyright (c) 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

require_once 'service/apiModel.php';
require_once 'service/apiService.php';
require_once 'service/apiServiceRequest.php';


  /**
   * The "userinfo" collection of methods.
   * Typical usage is:
   *  <code>
   *   $oauth2Service = new apiOauth2Service(...);
   *   $userinfo = $oauth2Service->userinfo;
   *  </code>
   */
  class UserinfoServiceResource extends apiServiceResource {


    /**
     * (userinfo.get)
     *
     * @return Userinfo
     */
    public function get($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Userinfo($data);
      } else {
        return $data;
      }
    }
  }


  /**
   * The "v2" collection of methods.
   * Typical usage is:
   *  <code>
   *   $oauth2Service = new apiOauth2Service(...);
   *   $v2 = $oauth2Service->v2;
   *  </code>
   */
  class UserinfoV2ServiceResource extends apiServiceResource {


  }


  /**
   * The "me" collection of methods.
   * Typical usage is:
   *  <code>
   *   $oauth2Service = new apiOauth2Service(...);
   *   $me = $oauth2Service->me;
   *  </code>
   */
  class UserinfoV2MeServiceResource extends apiServiceResource {


    /**
     * (me.get)
     *
     * @return Userinfo
     */
    public function get($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Userinfo($data);
      } else {
        return $data;
      }
    }
  }


  /**
   * The "tokeninfo" collection of methods.
   * Typical usage is:
   *  <code>
   *   $oauth2Service = new apiOauth2Service(...);
   *   $tokeninfo = $oauth2Service->tokeninfo;
   *  </code>
   */
  class TokeninfoServiceResource extends apiServiceResource {
    /**
     * (tokeninfo.tokeninfo)
     *
     * @param array $optParams Optional parameters. Valid optional parameters are listed below.
     *
     * @opt_param string access_token
     * @opt_param string id_token
     * @return Tokeninfo
     */
    public function tokeninfo($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('tokeninfo', array($params));
      if ($this->useObjects()) {
        return new Tokeninfo($data);
      } else {
        return $data;
      }
    }

  }


/**
 * Service definition for Oauth2 (v2).
 *
 * <p>
 * OAuth2 API
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class apiOauth2Service extends apiService {
  public $tokeninfo;
  public $userinfo;
  public $userinfo_v2;
  /**
   * Constructs the internal representation of the Oauth2 service.
   *
   * @param apiClient apiClient
   */
  public function __construct(apiClient $apiClient) {
    $this->rpcPath = '/rpc';
    $this->restBasePath = '/';
    $this->version = 'v2';
    $this->serviceName = 'oauth2';

    $apiClient->addService($this->serviceName, $this->version);
    $this->userinfo = new UserinfoServiceResource($this, $this->serviceName, 'userinfo', json_decode('{"methods": {"get": {"path": "oauth2/v2/userinfo", "response": {"$ref": "Userinfo"}, "httpMethod": "GET", "id": "oauth2.userinfo.get"}}}', true));
    $this->userinfo_v2 = new UserinfoV2ServiceResource($this, $this->serviceName, 'v2', json_decode('{}', true));
    $this->tokeninfo = new TokeninfoServiceResource($this, $this->serviceName, 'tokeninfo', json_decode('{"id": "oauth2.tokeninfo", "path": "oauth2/v2/tokeninfo", "response": {"$ref": "Tokeninfo"}, "parameters": {"access_token": {"type": "string", "location": "query"}, "id_token": {"type": "string", "location": "query"}}, "httpMethod": "GET"}', true));
  }
}

class Tokeninfo extends apiModel {
  public $issued_to;
  public $user_id;
  public $expires_in;
  public $access_type;
  public $audience;
  public $scope;
  public $email;
  public $verified_email;
  public function setIssued_to($issued_to) {
    $this->issued_to = $issued_to;
  }
  public function getIssued_to() {
    return $this->issued_to;
  }
  public function setUser_id($user_id) {
    $this->user_id = $user_id;
  }
  public function getUser_id() {
    return $this->user_id;
  }
  public function setExpires_in($expires_in) {
    $this->expires_in = $expires_in;
  }
  public function getExpires_in() {
    return $this->expires_in;
  }
  public function setAccess_type($access_type) {
    $this->access_type = $access_type;
  }
  public function getAccess_type() {
    return $this->access_type;
  }
  public function setAudience($audience) {
    $this->audience = $audience;
  }
  public function getAudience() {
    return $this->audience;
  }
  public function setScope($scope) {
    $this->scope = $scope;
  }
  public function getScope() {
    return $this->scope;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setVerified_email($verified_email) {
    $this->verified_email = $verified_email;
  }
  public function getVerified_email() {
    return $this->verified_email;
  }
}

class Userinfo extends apiModel {
  public $family_name;
  public $name;
  public $picture;
  public $locale;
  public $gender;
  public $email;
  public $birthday;
  public $link;
  public $given_name;
  public $timezone;
  public $id;
  public $verified_email;
  public function setFamily_name($family_name) {
    $this->family_name = $family_name;
  }
  public function getFamily_name() {
    return $this->family_name;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setPicture($picture) {
    $this->picture = $picture;
  }
  public function getPicture() {
    return $this->picture;
  }
  public function setLocale($locale) {
    $this->locale = $locale;
  }
  public function getLocale() {
    return $this->locale;
  }
  public function setGender($gender) {
    $this->gender = $gender;
  }
  public function getGender() {
    return $this->gender;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setBirthday($birthday) {
    $this->birthday = $birthday;
  }
  public function getBirthday() {
    return $this->birthday;
  }
  public function setLink($link) {
    $this->link = $link;
  }
  public function getLink() {
    return $this->link;
  }
  public function setGiven_name($given_name) {
    $this->given_name = $given_name;
  }
  public function getGiven_name() {
    return $this->given_name;
  }
  public function setTimezone($timezone) {
    $this->timezone = $timezone;
  }
  public function getTimezone() {
    return $this->timezone;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setVerified_email($verified_email) {
    $this->verified_email = $verified_email;
  }
  public function getVerified_email() {
    return $this->verified_email;
  }
}
