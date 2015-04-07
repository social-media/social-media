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

use SocialMedia\Core\Types\Post;

/**
 * Social Media Post Class which contains everything to (un)publish
 * to the timeline.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class PostTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Set up extra variables
     */
    protected function setUp()
    {
        $this->post = new Post();
    }

    /**
     * Tear down after class
     */
    public function tearDown()
    {
        $this->post = null;
    }

    /**
     * Test all parameters
     */
    public function testAllParameters()
    {
        $this->assertEquals(
            true,
            is_array($this->post->getAll())
        );
    }

    /**
     * Test a parameter
     */
    public function testOneParameter()
    {
        $key = 'this_key';
        $value = "This is a test value";
        $this->post->set($key, $value);
        $this->assertEquals($value, $this->post->get($key));

        $all = $this->post->getAll();
        $this->assertEquals($value, $all[$key]);
    }
}
