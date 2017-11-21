<?php

/*
 * Copyright 2011-2017 Ning, Inc.
 * Copyright 2014 Groupon, Inc.
 * Copyright 2014 The Billing Project, LLC
 *
 * The Billing Project licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace Killbill\Client\Type;

/*
 * DO NOT EDIT!!!
 * File automatically generated by killbill-java-parser (git@github.com:killbill/killbill-java-parser.git)
 */

/**
 * ProductAttributes
 */
class ProductAttributes extends \Killbill\Client\AbstractResource
{
    /** @var string|null */
    protected $type = null;
    /** @var string|null */
    protected $name = null;
    /** @var PlanAttributes[]|null */
    protected $plans = null;
    /** @var string[]|null */
    protected $included = null;
    /** @var string[]|null */
    protected $available = null;

    /**
     * @param string|null $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string|null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param PlanAttributes[]|null $plans
     */
    public function setPlans($plans)
    {
        $this->plans = $plans;
    }

    /**
     * @return PlanAttributes[]|null
     */
    public function getPlans()
    {
        return $this->plans;
    }

    /**
     * @return string
     */
    public function getPlansType()
    {
        return PlanAttributes::class;
    }

    /**
     * @param string[]|null $included
     */
    public function setIncluded($included)
    {
        $this->included = $included;
    }

    /**
     * @return string[]|null
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * @return string
     */
    public function getIncludedType()
    {
        return string::class;
    }

    /**
     * @param string[]|null $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * @return string[]|null
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @return string
     */
    public function getAvailableType()
    {
        return string::class;
    }

}