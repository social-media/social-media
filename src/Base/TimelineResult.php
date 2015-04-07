<?php

namespace SocialMedia\Core\Base;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

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
     * Execute
     *
     * @var Service $service
     */
    public function execute(Service $service)
    {
        // define service name
        $this->setServiceName($service->getName());

        // set result
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
     * Set result
     *
     * @param mixed
     * @return TimelineResult
     */
    public function setResult($result)
    {
        $this->result = $result;

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
