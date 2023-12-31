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

namespace Google\Service\AdExchangeBuyerII;

class CreativeStatusRow extends \Google\Model
{
  /**
   * @var MetricValue
   */
  public $bidCount;
  protected $bidCountType = MetricValue::class;
  protected $bidCountDataType = '';
  /**
   * @var int
   */
  public $creativeStatusId;
  /**
   * @var RowDimensions
   */
  public $rowDimensions;
  protected $rowDimensionsType = RowDimensions::class;
  protected $rowDimensionsDataType = '';

  /**
   * @param MetricValue
   */
  public function setBidCount(MetricValue $bidCount)
  {
    $this->bidCount = $bidCount;
  }
  /**
   * @return MetricValue
   */
  public function getBidCount()
  {
    return $this->bidCount;
  }
  /**
   * @param int
   */
  public function setCreativeStatusId($creativeStatusId)
  {
    $this->creativeStatusId = $creativeStatusId;
  }
  /**
   * @return int
   */
  public function getCreativeStatusId()
  {
    return $this->creativeStatusId;
  }
  /**
   * @param RowDimensions
   */
  public function setRowDimensions(RowDimensions $rowDimensions)
  {
    $this->rowDimensions = $rowDimensions;
  }
  /**
   * @return RowDimensions
   */
  public function getRowDimensions()
  {
    return $this->rowDimensions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CreativeStatusRow::class, 'Google_Service_AdExchangeBuyerII_CreativeStatusRow');
