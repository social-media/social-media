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
    const ACTION_PUBLISH = 'Publish';
    const ACTION_UNPUBLISH = 'Unpublish';

    /**
     * Publish to social media service
     *
     * @param Service $service
     * @param Post $post
     * @return TimelineResult $result
     */
    public function publish(Service $service, Post $post)
    {
        $item = new TimelineResult();
        $item->setServiceName($service->getName());
        $item->setActionName(self::ACTION_PUBLISH);
        $item->setPost($post);
        $item->execute($service);

        return $item;
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
        $item = new TimelineResult();
        $item->setServiceName($service->getName());
        $item->setActionName(self::ACTION_UNPUBLISH);
        $item->setPost($post);
        $item->execute($service);

        return $item;
    }
}
