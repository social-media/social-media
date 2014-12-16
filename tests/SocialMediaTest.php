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

/**
 * Social Media Class which contains everything to (un)publish
 * to the timeline or connect to social media.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class SocialMediaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return SocialMedia
     */
    public function testEmpty()
    {
        return new SocialMedia();
    }

    /**
     * @expectedException Exception
     */
    public function testException()
    {
        throw new Exception('error');
    }
}
