<?php

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\Objects\Post as Post;
use SocialMedia\Objects\Service as Service;

// define api
$api = new SocialMedia();

// define external post objects
$service = new FacebookService();
$post = new FacebookPost();

// (un)publish a message
$api->getTimeline()->publish($service, $post);
$api->getTimeline()->unpublish($service, $post);
