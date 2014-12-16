<?php

namespace SocialMedia;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\Objects\Timeline as Timeline;

/**
 * Social Media Class which contains everything to (un)publish
 * to the timeline or connect to social media.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class SocialMedia
{
    public $timeline;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->timeline = new Timeline();
    }
}
