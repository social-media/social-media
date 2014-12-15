<?php

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use JeroenDesloovere\SocialMedia\Objects\Post as Post;
use JeroenDesloovere\SocialMedia\Objects\Service as Service;

// define api
$api = new SocialMedia();

// define external post objects
$service = new FacebookService();
$post = new FacebookPost();

// (un)publish a message
$api->timeline->publish($service, $post);
$api->timeline->unpublish($service, $post);
