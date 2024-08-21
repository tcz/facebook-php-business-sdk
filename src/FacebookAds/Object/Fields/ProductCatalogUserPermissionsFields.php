<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductCatalogUserPermissionsFields extends AbstractEnum {

  const BUSINESS = 'business';
  const BUSINESS_PERSONA = 'business_persona';
  const CREATED_BY = 'created_by';
  const CREATED_TIME = 'created_time';
  const EMAIL = 'email';
  const ROLE = 'role';
  const STATUS = 'status';
  const UPDATED_BY = 'updated_by';
  const UPDATED_TIME = 'updated_time';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'business_persona' => 'Object',
      'created_by' => 'User',
      'created_time' => 'datetime',
      'email' => 'string',
      'role' => 'string',
      'status' => 'string',
      'updated_by' => 'User',
      'updated_time' => 'datetime',
      'user' => 'User',
    );
  }
}
