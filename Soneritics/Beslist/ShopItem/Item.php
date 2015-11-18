<?php
/* 
 * The MIT License
 *
 * Copyright 2014 Soneritics Webdevelopment.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace Beslist\ShopItem;

use Beslist\REST\RESTConfig;

/**
 *
 * @author Jordi Jolink <mail@jordijolink.nl>
 * @since  13-11-2015
 */
class Item
{
    /**
     *
     * @var boolean
     */
    private $valid = false;

    /**
     *
     * @var string
     */
    private $id;

    /**
     *
     * @var RESTConfig
     */
    private $restConfig;

    /**
     *
     * @var double
     */
    private $price;

    /**
     *
     * @var double
     */
    private $discountPrice;

    /**
     *
     * @var double
     */
    private $deliveryCostNl;

    /**
     *
     * @var double
     */
    private $deliveryCostBe;

    /**
     *
     * @var string
     */
    private $deliveryTimeNl;

    /**
     *
     * @var string
     */
    private $deliveryTimeBe;

    /**
     *
     * @param string $id
     * @param RESTConfig $restConfig
     */
    public function __construct($id, RESTConfig $restConfig)
    {
        $this->id = $id;
        $this->restConfig = $restConfig;
        $this->reload();
    }

    /**
     *
     */
    public function reload()
    {
        
    }

    /**
     *
     * @return boolean
     */
    public function isValid()
    {
        return $this->valid;
    }

    /**
     *
     * @return boolean
     */
    public function save()
    {
        
        return true;
    }

    /**
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     *
     * @return double
     */
    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }

    /**
     *
     * @return double
     */
    public function getDeliveryCostNl()
    {
        return $this->deliveryCostNl;
    }

    /**
     *
     * @return double
     */
    public function getDeliveryCostBe()
    {
        return $this->deliveryCostBe;
    }

    /**
     *
     * @return string
     */
    public function getDeliveryTimeNl()
    {
        return $this->deliveryTimeNl;
    }

    /**
     *
     * @return string
     */
    public function getDeliveryTimeBe()
    {
        return $this->deliveryTimeBe;
    }

    /**
     *
     * @param double $price
     * @return Item
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     *
     * @param double $discountPrice
     * @return Item
     */
    public function setDiscountPrice($discountPrice)
    {
        $this->discountPrice = $discountPrice;
        return $this;
    }

    /**
     *
     * @param double $deliveryCostNl
     * @return Item
     */
    public function setDeliveryCostNl($deliveryCostNl)
    {
        $this->deliveryCostNl = $deliveryCostNl;
        return $this;
    }

    /**
     *
     * @param double $deliveryCostBe
     * @return Item
     */
    public function setDeliveryCostBe($deliveryCostBe)
    {
        $this->deliveryCostBe = $deliveryCostBe;
        return $this;
    }

    /**
     *
     * @param string $deliveryTimeNl
     * @return Item
     */
    public function setDeliveryTimeNl($deliveryTimeNl)
    {
        $this->deliveryTimeNl = $deliveryTimeNl;
        return $this;
    }

    /**
     *
     * @param string $deliveryTimeBe
     * @return Item
     */
    public function setDeliveryTimeBe($deliveryTimeBe)
    {
        $this->deliveryTimeBe = $deliveryTimeBe;
        return $this;
    }
}
