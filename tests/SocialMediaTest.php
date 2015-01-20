<?php

namespace SocialMedia\Core\tests;

// required to load
require_once __DIR__ . '/../vendor/autoload.php';

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\Core\SocialMedia;
use SocialMedia\Core\Objects\Timeline;

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
    public static function tearDownAfterClass()
    {
        self::$api = null;
    }

    /**
     * Test timeline object
     */
    public function testTimelineObject()
    {
        $this->assertEquals(new Timeline(), self::$api->getTimeline());
    }
}
