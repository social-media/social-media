<?php

namespace SocialMedia\Objects;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\Objects\Credentials as Credentials;

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
     * Construct
     *
     * @param mixed $api
     */
    public function __construct(
        $api,
        Credentials $credentials
    ) {
        $this->setApi($api);
        $this->setCredentials($credentials);
    }

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
     * Publish
     */    
    public function publish()
    {
    
    }

    /**
     * Set API
     *
     * @return mixed
     */
    public function setApi($api)
    {
        $this->api = $api;
    }

    /**
     * Set credentials
     *
     * @return Credentials
     */
    public function setCredentials(Credentials $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * Unpublish
     */
    public function unpublish()
    {
    
    }
}
