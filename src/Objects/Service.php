<?php

namespace JeroenDesloovere\SocialMedia\Objects;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * Service
 *
 * Social Media Service to publish/unpublish to.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
interface Service
{
    /**
     * Get the disconnect url - Disconnects this app from the social platform.
     *
     * @return string
     */
    public static function getDisconnectUrl();

    /**
     * We need to be able to get an instance
     *
     * @return object
     */
    public static function getInstance();

    /**
     * Get user
     *
     * @return array
     */
    public static function getUser();

    /**
     * Is connected
     *
     * @return bool
     */
    public static function isConnected();

    /**
     * Unpublish from Social Media
     *
     * @param  int  $id
     * @return bool
     */
    public static function unpublish($id);

    /**
     * Publish to Social Media
     *
     * @param string           $title
     * @param string[optional] $url
     * @param mixed[optional]  $media
     */
    public static function publish($title, $url, $media);
}
