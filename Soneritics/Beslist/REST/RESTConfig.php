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
namespace Beslist\REST;

use Beslist\Exception\EndPointNotConfiguredException;

/**
 *
 * @author Jordi Jolink <mail@jordijolink.nl>
 * @since  13-11-2015
 */
abstract class RESTConfig
{
    /**
     *
     * @var array
     */
    protected $endpoints = [];

    /**
     *
     * @var string
     */
    protected $apiKey;

    /**
     *
     * @param string $apiKey
     */
    public function __construct($apiKey = null)
    {
        if ($apiKey !== null) {
            $this->set($apiKey);
        }
    }

    /**
     *
     * @param string $name
     * @return string
	 * @throw Beslist\Exception\EndPointNotConfiguredException
     */
    public function getEndPoint($name)
    {
		if (isset($this->endpoints[$name]) {
            return $this->endpoints[$name];
        }

        throw new EndPointNotConfiguredException($name);
    }

    /**
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     *
     * @param string $apiKey
     * @return \Beslist\REST\RESTConfig
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }
}
