<?php

namespace JeroenDesloovere\SocialMedia;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use JeroenDesloovere\SocialMedia\Objects\Timeline as Timeline;

/**
 * Social Media
 *
 * Wrapper to do all the social media publishing/unpublishing actions.
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
