<?php

namespace SocialMedia\Core\Objects;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * Post item
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class Post
{
    /**
     * @var array
     */
    protected $parameters;

    /**
     * Get all parameters
     */
    public function getAll()
    {
        return $this->parameters;
    }

    /**
     * Get parameter
     *
     * @param  string $key
     * @return string
     */
    public function get($key)
    {
        return (isset($this->parameters[$key])) ? $this->parameters[$key] : null;
    }

    /**
     * Set parameter
     *
     * @param string $key
     * @param string $value
     */
    public function set($key, $value)
    {
        $this->parameters[$key] = $value;
    }
}
