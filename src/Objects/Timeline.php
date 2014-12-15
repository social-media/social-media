<?php

namespace JeroenDesloovere\SocialMedia\Objects;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use JeroenDesloovere\SocialMedia\Objects\TimelinePost as TimelinePost;
use JeroenDesloovere\SocialMedia\Objects\TimelineResult as TimelineResult;

/**
 * Social Media
 *
 * Wrapper to do all the social media publishing/unpublishing actions.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class Timeline
{
    /**
     * Publish to social media service
     *
     * @param TimelinePost $post
     * @return TimelineResult $result
     */
    public function publish(TimelinePost $post)
    {
        return new TimelineResult(
            $post,
            'publish'
        );
    }

    /**
     * Unpublish from social media service
     *
     * @param TimelinePost $post
     * @return TimelineResult $result
     */
    public function unpublish(TimelinePost $post)
    {
        return new TimelineResult(
            $post,
            'unpublish'
        );
    }
}
