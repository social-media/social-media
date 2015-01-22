<?php

namespace SocialMedia\Core\Objects\Timeline;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\Core\Objects\Timeline\Core as TimelineCore;

/**
 * Timeline we use to (un)publish messages to.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class Timeline extends TimelineCore
{
    const ACTION_PUBLISH = 'Publish';
    const ACTION_UNPUBLISH = 'Unpublish';

    /**
     * Publish to social media service
     *
     * @param  Service        $service
     * @param  Post           $post
     * @return TimelineResult $result
     */
    public function publish(Service $service, Post $post)
    {
        return $this->runAction(
            self::ACTION_PUBLISH,
            $service,
            $post
        );
    }

    /**
     * Unpublish from social media service
     *
     * @param  Service        $service
     * @param  Post           $post
     * @return TimelineResult $result
     */
    public function unpublish(Service $service, Post $post)
    {
        return $this->runAction(
            self::ACTION_UNPUBLISH,
            $service,
            $post
        );
    }
}
