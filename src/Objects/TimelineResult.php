<?php

namespace SocialMedia\Core\Objects;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\Core\Objects\Post as Post;
use SocialMedia\Core\Objects\Service as Service;

/**
 * A Timeline Result when we have (un)published something.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class TimelineResult
{
    /**
     * Action
     *
     * @var string
     */
    protected $action;

    /**
     * @var Post
     */
    protected $post;

    /**
     * Result
     *
     * @var array
     */
    protected $result;

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
    public function __construct(
        Service $service,
        Post $post,
        $action
    ) {
        $this->setAction($action);
        $this->setService($service);
        $this->setPost($post);
        $this->setResult();
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
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
     * Get result
     *
     * @return array
     */
    public function getResult()
    {
        return $this->result;
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

    /**
     * Set action
     *
     * @param string
     */
    public function setAction($action)
    {
        $this->action = $action;
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
     * Set result
     */
    public function setResult()
    {
        // define variables
        $action = $this->getAction();
        $post = $this->getPost();
        $service = $this->getService();

        $this->result = $service->{$action}($post);
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
}
