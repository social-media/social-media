<?php

namespace SocialMedia\Core\tests;

// required to load
require_once __DIR__ . '/../../vendor/autoload.php';

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\Core\Types\ServiceCredentials;

/**
 * Social Media Credentials Test.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class ServiceCredentialsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up extra variables
     */
    protected function setUp()
    {
        parent::setUp();
        $this->credentials = new ServiceCredentials();
    }

    /**
     * Tear down after class
     */
    public function tearDown()
    {
        $this->credentials = null;
        parent::tearDown();
    }

    /**
     * Test a parameter
     */
    public function testA()
    {
    }
}
