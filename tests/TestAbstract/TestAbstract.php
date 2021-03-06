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
$root = __DIR__ . '/../../Soneritics/Beslist';
require_once "{$root}/Exception/ApiKeyInvalidException.php";
require_once "{$root}/Exception/NoApiKeyProvidedException.php";
require_once "{$root}/Exception/EndpointNotConfiguredException.php";
require_once "{$root}/REST/RESTCommand.php";
require_once "{$root}/REST/RESTGETCommand.php";
require_once "{$root}/REST/RESTPUTCommand.php";
require_once "{$root}/ShopItem/RESTConfig.php";
require_once "{$root}/ShopItem/Shop.php";
require_once "{$root}/ShopItem/Item.php";
require_once "{$root}/ShopItem.php";

/**
 * Abstracte class voor unit tests.
 *
 * @author Jordi Jolink
 * @since 16-11-2015
 */
class TestAbstract extends PHPUnit_Framework_TestCase
{

} 