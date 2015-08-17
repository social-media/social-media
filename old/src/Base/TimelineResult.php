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
     * Result data
     *
     * @var array
     */
    protected $resultData;

    /**
     * @var string
     */
    protected $serviceName;

    /**
     * Execute
     *
     * @var Service $service
     */
    public function execute(Service $service)
    {
        // define service name
        $this->setServiceName($service->getName());

        // set result
        $this->setResultData(
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
     * Get result data
     *
     * @return array
     */
    public function getResultData()
    {
        return $this->resultData;
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
     * @return TimelineResult
     */
    public function setActionName($actionName)
    {
        $this->actionName = $actionName;

        return $this;
    }

    /**
     * Set post
     *
     * @param Post $post
     * @return TimelineResult
     */
    public function setPost(Post $post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Set result data
     *
     * @param array $resultData
     * @return TimelineResult
     */
    public function setResultData(array $resultData)
    {
        $this->resultData = $resultData;

        return $this;
    }

    /**
     * Set service name
     *
     * @param string $serviceName
     * @return TimelineResult
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }
}
