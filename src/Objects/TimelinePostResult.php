<?php

namespace JeroenDesloovere\SocialMedia\Objects;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use JeroenDesloovere\SocialMedia\Objects\TimelinePost as TimelinePost;

/**
 * Social Media
 *
 * Wrapper to do all the social media publishing/unpublishing actions.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class TimelinePostResult
{
    /**
     * Action
     *
     * @var string
     */
    protected $action;

    /**
     * Result
     *
     * @var array
     */
    protected $result;

    /**
     * @var TimelinePost
     */
    protected $timelinePost;

    /**
     * Construct
     *
     * @param Service $service
     * @param Post $post
     */   
    public function __construct(
        TimelinePost $post,
        $action
    ) {
        $this->setAction($action);
        $this->setTimelinePost($post);
        $this->setResult();
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Get timeline post
     *
     * @return TimelinePost
     */
    public function getTimelinePost()
    {
        return $this->timelinePost;
    }

    /**
     * Set action
     *
     * @param string
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * Set result
     */
    public function setResult()
    {
        // define variables
        $timelinePost = $this->getTimelinePost();
        $service = $timelinePost->getService();
        $post = $timelinePost->getPost();

        $this->result = $service->{$this->getAction()}($post);
    }

    /**
     * Set timeline post
     *
     * @param TimelinePost $timelinePost
     */
    public function setTimelinePost(TimelinePost $timelinePost)
    {
        $this->timelinePost = $timelinePost;
    }
}
