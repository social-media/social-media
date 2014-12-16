<?php

namespace SocialMedia\tests;

// add your own credentials in this file
require_once __DIR__ . '/credentials.php';

// required to load
require_once __DIR__ . '/../../../autoload.php';

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\SocialMedia;
use SocialMedia\Exception;

/**
 * Social Media Class which contains everything to (un)publish
 * to the timeline or connect to social media.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class SocialMediaTest extends \PHPUnit_Framework_TestCase
{
    public function testEmpty()
    {
        $stack = array();
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        throw new Exception('error');
    }
}
