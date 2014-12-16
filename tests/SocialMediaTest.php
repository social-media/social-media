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
     * @return SocialMedia
     */
    public static function setUpBeforeClass()
    {
        self::$api = new SocialMedia();
    }

    public function testPublish()
    {
        // define external post objects
        $service = new Service();
        $post = new Post();
        
        // (un)publish a message
        $api->timeline->publish($service, $post);
    }

    /**
     * @expectedException Exception
     */
    public function testException()
    {
        throw new Exception('error');
    }
}
