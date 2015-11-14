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
namespace Beslist;

use Beslist\ShopItem;
use Beslist\ShopItem\ApiKey;
use Beslist\ShopItem\Shop;
use Beslist\ShopItem\Item;

/**
 * 
 * @author Jordi Jolink <mail@jordijolink.nl>
 * @since  13-11-2015
 */
class ShopItem
{
    /**
     *
     * @var ApiKey
     */
    private $apiKey;

    /**
     * 
     * @param ApiKey $apiKey
     */
    public function __construct(ApiKey $apiKey = null)
    {
        if ($apiKey !== null) {
            $this->setApiKey($apiKey);
        }
    }

    /**
     * 
     * @param ApiKey $apiKey
     * @return ShopItem
     */
    public function setApiKey(ApiKey $apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function getShops()
    {
        return [];
    }

    /**
     * 
     * @param Shop $shop
     * @param string $itemId
     * @return Item
     */
    public function getItem(Shop $shop, $itemId)
    {

    }

    /**
     * 
     * @param Shop $shop
     * @param array $itemIds
     * @return array
     */
    public function getItems(Shop $shop, array $itemIds)
    {
        $result = [];

        if (!empty($itemIds)) {
            foreach ($itemIds as $itemIds) {
                $item = $this->getItem($shop, $itemId);

                if ($item->isValid()) {
                    $result[] = $item;
                }
            }
        }

        return $result;
    }
}
