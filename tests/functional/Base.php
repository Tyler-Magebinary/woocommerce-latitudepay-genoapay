<?php
/**
* Woocommerce LatitudeFinance Payment Extension
*
* NOTICE OF LICENSE
*
* Copyright 2020 LatitudeFinance
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
*   http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*
* @category    LatitudeFinance
* @package     Latitude_Finance
* @author      MageBinary Team
* @copyright   Copyright (c) 2020 LatitudeFinance (https://www.latitudefinancial.com.au/)
* @license     http://www.apache.org/licenses/LICENSE-2.0
*/
namespace Latitude\Tests\Functional;

trait Base
{
    /**
     * @param $I
     */
    public function _before($I)
    {
        $this->activePlugin($I);
    }

    /**
     * @param $I
     */
    protected function activePlugin($I)
    {
        $I->cli(['plugin', 'activate', 'woocommerce']);
        $I->cli(['plugin', 'activate', 'woocommerce-latitudepay-genoapay']);
    }
}