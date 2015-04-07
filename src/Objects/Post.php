<?php

namespace SocialMedia\Core\Types;

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
    protected $parameters = array();

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
     * Get all parameters
     */
    public function getAll()
    {
        return $this->parameters;
    }

    /**
     * Set parameter
     *
     * @param string $key
     * @param string $value
     * @return Post
     */
    public function set($key, $value)
    {
        $this->parameters[$key] = $value;

        return $this;
    }
}
