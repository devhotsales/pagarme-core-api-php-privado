<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Tests;

use PagarmeCoreApiLib\APIException;
use PagarmeCoreApiLib\Exceptions;
use PagarmeCoreApiLib\APIHelper;
use PagarmeCoreApiLib\Models;

class CustomersControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PagarmeCoreApiLib\Controllers\CustomersController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \PagarmeCoreApiLib\PagarmeCoreApiClient();
        self::$controller = $client->getCustomers();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Get all Customers
     */
    public function testTestGetCustomers()
    {
        // Parameters for the API call
        $name = null;
        $document = null;
        $page = 1;
        $size = 10;
        $email = null;
        $code = null;

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getCustomers($name, $document, $page, $size, $email, $code);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'application/json' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, $this->httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }
}
