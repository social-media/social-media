<?php

namespace SocialMedia\Core\Objects;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\Core\Objects\TimelineResult as TimelineResult;

/**
 * Timeline we use to (un)publish messages to.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class Timeline
{
    /**
     * Publish to social media service
     *
     * @param Service $service
     * @param Post $post
     * @return TimelineResult $result
     */
    public function publish(Service $service, Post $post)
    {
        return new TimelineResult(
            $service,
            $post,
            'publish'
        );
    }

    /**
     * Unpublish from social media service
     *
     * @param Service $service
     * @param Post $post
     * @return TimelineResult $result
     */
    public function unpublish(Service $service, Post $post)
    {
        return new TimelineResult(
            $service,
            $post,
            'unpublish'
        );
    }
}
