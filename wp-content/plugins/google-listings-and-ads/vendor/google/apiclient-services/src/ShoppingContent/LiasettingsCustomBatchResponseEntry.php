<?php
/*
 * Copyright 2014 Google Inc.
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

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Service\ShoppingContent;

class LiasettingsCustomBatchResponseEntry extends \Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Collection
{
  protected $collection_key = 'posDataProviders';
  /**
   * @var string
   */
  public $batchId;
  /**
   * @var Errors
   */
  public $errors;
  protected $errorsType = Errors::class;
  protected $errorsDataType = '';
  /**
   * @var GmbAccounts
   */
  public $gmbAccounts;
  protected $gmbAccountsType = GmbAccounts::class;
  protected $gmbAccountsDataType = '';
  /**
   * @var string
   */
  public $kind;
  /**
   * @var LiaSettings
   */
  public $liaSettings;
  protected $liaSettingsType = LiaSettings::class;
  protected $liaSettingsDataType = '';
  /**
   * @var LiaOmnichannelExperience
   */
  public $omnichannelExperience;
  protected $omnichannelExperienceType = LiaOmnichannelExperience::class;
  protected $omnichannelExperienceDataType = '';
  /**
   * @var PosDataProviders[]
   */
  public $posDataProviders;
  protected $posDataProvidersType = PosDataProviders::class;
  protected $posDataProvidersDataType = 'array';

  /**
   * @param string
   */
  public function setBatchId($batchId)
  {
    $this->batchId = $batchId;
  }
  /**
   * @return string
   */
  public function getBatchId()
  {
    return $this->batchId;
  }
  /**
   * @param Errors
   */
  public function setErrors(Errors $errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return Errors
   */
  public function getErrors()
  {
    return $this->errors;
  }
  /**
   * @param GmbAccounts
   */
  public function setGmbAccounts(GmbAccounts $gmbAccounts)
  {
    $this->gmbAccounts = $gmbAccounts;
  }
  /**
   * @return GmbAccounts
   */
  public function getGmbAccounts()
  {
    return $this->gmbAccounts;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param LiaSettings
   */
  public function setLiaSettings(LiaSettings $liaSettings)
  {
    $this->liaSettings = $liaSettings;
  }
  /**
   * @return LiaSettings
   */
  public function getLiaSettings()
  {
    return $this->liaSettings;
  }
  /**
   * @param LiaOmnichannelExperience
   */
  public function setOmnichannelExperience(LiaOmnichannelExperience $omnichannelExperience)
  {
    $this->omnichannelExperience = $omnichannelExperience;
  }
  /**
   * @return LiaOmnichannelExperience
   */
  public function getOmnichannelExperience()
  {
    return $this->omnichannelExperience;
  }
  /**
   * @param PosDataProviders[]
   */
  public function setPosDataProviders($posDataProviders)
  {
    $this->posDataProviders = $posDataProviders;
  }
  /**
   * @return PosDataProviders[]
   */
  public function getPosDataProviders()
  {
    return $this->posDataProviders;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LiasettingsCustomBatchResponseEntry::class, 'Google_Service_ShoppingContent_LiasettingsCustomBatchResponseEntry');
