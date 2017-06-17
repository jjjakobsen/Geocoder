<?php

/*
 * This file is part of the Geocoder package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Geocoder\Provider\MaxMindBinary\Tests;

use Geocoder\IntegrationTest\ProviderIntegrationTest;
use Geocoder\Provider\MaxMindBinary\MaxMindBinary;
use Http\Client\HttpClient;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class IntegrationTest extends ProviderIntegrationTest
{
    protected $skippedTests = [
    ];

    protected $testAddress = false;
    protected $testReverse = false;
    protected $testIpv6 = false;
    protected $testHttpProvider = false;

    protected function createProvider(HttpClient $httpClient)
    {
        return new MaxMindBinary(__DIR__.'/fixtures/GeoLiteCity.dat');
    }

    protected function getCacheDir()
    {
        return __DIR__.'/.cached_responses';
    }

    protected function getApiKey()
    {
        return null;
    }
}