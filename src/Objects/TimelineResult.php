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
     * Action name
     *
     * @var string
     */
    protected $actionName;

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
     * @var string
     */
    protected $serviceName;

    /**
     * Construct
     *
     * @return $this
     */   
    public function __construct() {
        return $this;
    }

    /**
     * Execute
     *
     * @var Service $service
     */
    public function execute(Service $service)
    {
        $this->setResult(
            $service->runAction(
                $this->getActionName(),
                $this->getPost()
            )
        );
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getActionName()
    {
        return $this->actionName;
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
     * Get service name
     *
     * @return Service
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Set action name
     *
     * @param string
     */
    public function setActionName($actionName)
    {
        $this->actionName = $actionName;
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
     *
     * @param mixed
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * Set service name
     *
     * @param string $serviceName
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
    }
}
