<?php

namespace SocialMedia\Core\Base;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\Core\Types\Service;
use SocialMedia\Core\Types\Post;

/**
 * Timeline we use to (un)publish messages to.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class Timeline
{
    const ACTION_PUBLISH = 'Publish';
    const ACTION_UNPUBLISH = 'Unpublish';

    /**
     * Run action
     *
     * @param  string         $action
     * @param  Service        $service
     * @param  Post           $post
     * @return TimelineResult $result
     */
    public function runAction(
        $actionName,
        Service $service,
        Post $post
    ) {
        // init timeline result
        $result = new TimelineResult();

        // build result
        $result
            ->setActionName($actionName)
            ->setPost($post)
            ->execute($service)
        ;

        return $result;
    }
}
