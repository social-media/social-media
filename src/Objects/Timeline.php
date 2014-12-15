<?php

namespace JeroenDesloovere\SocialMedia\Objects;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use JeroenDesloovere\SocialMedia\Objects\Post as Post;
use JeroenDesloovere\SocialMedia\Objects\Service as Service;

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
     * @param Service $service
     * @param Post $post
     * @return ServiceActionResult
     */
    public function publish(Service $service, Post $post)
    {
        return $service->publish($post);
    }

    /**
     * Unpublish from social media service
     *
     * @param Service $service
     * @param Post $post
     * @return ServiceActionResult
     */
    public function unpublish(Service $service, Post $post)
    {
        return $service->unpublish($post);
    }
}
