<?php

namespace SocialMedia\Core\Objects;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\Core\Objects\Credentials as Credentials;

/**
 * Social Media Service where we are going to publish/unpublish to.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class Service
{
    /**
     * @var mixed
     */
    protected $api;

    /**
     * @var Credentials
     */
    protected $credentials;

    /**
     * Service name
     *
     * @var string
     */
    protected $serviceName;

    /**
     * Get API
     *
     * @param mixed
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * Get credentials
     *
     * @param Credentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * Get service name
     *
     * @param string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Run action
     *
     * @param string $action
     * @param string $post
     */
    public function runAction($action, $post)
    {
        $className = '\\SocialMedia\\' . $this->getServiceName() . '\\Actions\\' . $action;

        return new $className(
            $this,
            $post
        );
    }

    /**
     * Set API
     *
     * @param mixed $api
     */
    public function setApi($api)
    {
        $this->api = $api;
    }

    /**
     * Set credentials
     *
     * @param Credentials $credentials
     */
    public function setCredentials(Credentials $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * Set service name
     *
     * @param string $name
     */
    public function setServiceName($name)
    {
        $this->serviceName = $name;
    }
}
