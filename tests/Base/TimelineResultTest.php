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
use SocialMedia\Core\Base\TimelineResult;

/**
 * Social Media Timeline Result Class
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class TimelineResultTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up extra variables
     */
    protected function setUp()
    {
        parent::setUp();
        $this->result = new TimelineResult();
    }

    /**
     * Tear down after class
     */
    public function tearDown()
    {
        $this->result = null;
        parent::tearDown();
    }

    /**
     * Test actions
     */
    public function testActions()
    {
        // Publish
        $this->result->setActionName(Timeline::ACTION_PUBLISH);
        $this->assertEquals(Timeline::ACTION_PUBLISH, $this->result->getActionName());

        // Unpublish
        $this->result->setActionName(Timeline::ACTION_UNPUBLISH);
        $this->assertEquals(Timeline::ACTION_UNPUBLISH, $this->result->getActionName());
    }
}
