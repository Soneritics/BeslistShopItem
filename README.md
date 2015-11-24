# [ON HOLD] Beslist.nl ShopItem API #

[![Build Status](https://api.travis-ci.org/Soneritics/BeslistShopItem.svg?branch=master)](https://travis-ci.org/Soneritics/BeslistShopItem)
[![Coverage Status](https://coveralls.io/repos/Soneritics/BeslistShopItem/badge.svg?branch=master)](https://coveralls.io/r/Soneritics/BeslistShopItem?branch=master)
![License](http://img.shields.io/badge/license-MIT-green.svg)

* [@Soneritics](https://github.com/Soneritics) - Jordi Jolink


## Introduction ##
The Beslist.nl platform imports webshop inventory items using feeds. The process of feed creation,
downloading and processing all items in a feed is by nature not real-time. Therefore an API has been
developed enabling near real-time updates to a number of properties of inventory items. Within the
context of this API those webshop inventory items are referred to as ‘shopitems’ and the API is called
the ‘Shopitem API’.


## Minimum Requirements ##
- PHP 5.6
- PHP compiled with cURL


### Example ###
```php
# Initialisation
$restConfig = new RESTConfig('your-api-key-here');
$shopItem = new ShopItem($restConfig);

# Fetching Shops
$shops = $shopItem->getShops();
print_r($shops); // array of Shop objects

# Looping shops and fetching items
$items = ['1234', '1235', '1236'];
foreach ($shops as $shop) {
  $items = $shopItem->getItems($items);
  print_r($items); // array of Item objects
}

# Updating an item
$item = $shopItem->getItem($shop, '1234');
if ($item->isValid()) {
  $item
    ->setPrice(24.95)
    ->setDiscountPrice(19.99)
    ->setDeliveryCostNl(0)
    ->setDeliveryCostBe(1.95);

  $saved = $item->save();
  var_dump($saved); // True or false
}
```


## Class Diagram ##
![Class Diagram](ClassDiagram.png)

