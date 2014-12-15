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
 * Social Media Timeline post
 *
 * Wrapper to do all the social media publishing/unpublishing actions.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class TimelinePost
{
    /**
     * @var Post
     */
    protected $post;

    /**
     * @var Service
     */
    protected $service;
 
    /**
     * Construct
     *
     * @param Service $service
     * @param Post $post
     */   
    public function __construct(Service $service, Post $post)
    {
        $this->setService($service);
        $this->setPost($post);
    }

    /**
     * Set post
     *
     * @param Post $post
     */
    public function setPost(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Set service
     *
     * @param Service $service
     */
    public function setService(Service $service)
    {
        $this->service = $service;
    }

    /**
     * Set post
     *
     * @return Post
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Get service
     *
     * @return Service
     */
    public function getService()
    {
        return $this->service;
    }
}
