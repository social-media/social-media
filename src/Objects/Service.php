<?php

namespace SocialMedia\Objects;

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
    protected $api;

    /**
     * Construct
     *
     * @param mixed $api
     */
    public function __construct(
        $api
    ) {
        $this->setApi($api);
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
     * Set API
     *
     * @return mixed
     */
    public function setApi($api)
    {
        $this->api = $api
    }
}
