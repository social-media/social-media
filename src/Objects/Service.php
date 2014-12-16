<?php

namespace SocialMedia\Core\Objects;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */


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
     * @var string
     */
    protected $name;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * Run action
     *
     * @param string $action
     * @param string $post
     */
    public function runAction($action, $post)
    {
        if ($this->getName() == null) {
            throw new Exception('You can only run an action if a service (like Facebook, Twitter, ...) is being used.');
        }

        $className = '\\SocialMedia\\' . $this->getName() . '\\Actions\\' . $action;

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
    public function setName($name)
    {
        $this->name = $name;
    }
}
