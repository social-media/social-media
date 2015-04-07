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

use SocialMedia\Core\Base\Timeline;
use SocialMedia\Core\Types\Service;
use SocialMedia\Core\Types\Post;

/**
 * Social Media Timeline Result Class
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class TimelineTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up extra variables
     */
    protected function setUp()
    {
        parent::setUp();
        $this->timeline = new Timeline();
    }

    /**
     * Tear down after class
     */
    public function tearDown()
    {
        $this->timeline = null;
        parent::tearDown();
    }

    /**
     * Test actions
     */
    public function testActions()
    {
        // define service
        $service = new Service();
        $post = new Post();

        // define timeline result
        $timelineResult = $this->timeline->runAction(
            Timeline::ACTION_PUBLISH,
            $service,
            $post
        );

        $this->assertEquals(
            new TimelineResult(),
            $result
        );
    }
}
