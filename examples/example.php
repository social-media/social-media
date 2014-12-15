<?php

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use JeroenDesloovere\SocialMedia\Objects\TimelinePost as TimelinePost;
use JeroenDesloovere\SocialMedia\Facebook\Objects\Post as FacebookPost;
use JeroenDesloovere\SocialMedia\Facebook\Objects\Service as FacebookService;

// define api
$api = new SocialMedia();

// define external post objects
$service = new FacebookService();
$post = new FacebookPost();

// define timeline post
$timelinePost = new TimelinePost($service, $post);

// (un)publish a message
$api->timeline->publish($timelinePost);
$api->timeline->unpublish($timelinePost);
