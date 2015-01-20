<?php

namespace SocialMedia\Core\Objects;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */


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

    /**
     * Run action
     *
     * @param  string         $action
     * @param  Service        $service
     * @param  Post           $post
     * @return TimelineResult $result
     */
    protected function runAction(
        $actionName,
        Service $service,
        Post $post
    ) {
        // init result
        $item = new TimelineResult();

        // setting up required variables
        $item->setActionName($actionName);
        $item->setPost($post);

        // execute the action
        $item->execute($service);

        // return the item that now contains the result
        return $item;
    }
}
