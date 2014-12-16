<?php

namespace SocialMedia\tests;

// required to load
require_once __DIR__ . '/../vendor/autoload.php';

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\SocialMedia;
use SocialMedia\Exception;
use SocialMedia\Objects\Post;
use SocialMedia\Objects\Service;

/**
 * Social Media Class which contains everything to (un)publish
 * to the timeline or connect to social media.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class SocialMediaTest extends \PHPUnit_Framework_TestCase
{
    protected static $api;

    /**
     * Set up extra variables
     */
    protected function setUp()
    {
        $this->service = new Service(array());
        $this->post = new Post();
    }

    /**
     * Set up before class
     *
     * @return SocialMedia
     */
    public static function setUpBeforeClass()
    {
        self::$api = new SocialMedia();
    }

    /**
     * Tear down after class
     */
    public function tearDown()
    {
        $this->service = $this->post = null;
    }

    /**
     * Tear down after class
     */
    public static function tearDownAfterClass()
    {
        self::$api = null;
    }

    /**
     * @expectedException Exception
     */
    public function testException()
    {
        throw new Exception('error');
    }

    /**
     * Test publish function
     */
    public function testPublish()
    {
        self::$api->timeline->publish($this->service, $this->post);
    }

    /**
     * Test unpublish function
     */
    public function testUnpublish()
    {
        self::$api->timeline->unpublish($this->service, $this->post);
    }
}
