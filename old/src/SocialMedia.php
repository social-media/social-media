<?php

namespace SocialMedia\Core;

/*
 * This file is part of the Social Pushing from Jeroen Desloovere.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

use SocialMedia\Core\Base\Timeline;

/**
 * Social Media Class which contains everything to (un)publish
 * to the timeline or connect to social media.
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
class SocialMedia
{
    /**
     * @var Timeline
     */
    protected $timeline;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->setTimeline(new Timeline());
    }

    /**
     * Get timeline
     *
     * @return Timeline
     */
    public function getTimeline()
    {
        return $this->timeline;
    }

    /**
     * Set timeline
     *
     * @param Timeline $timeline
     * @return SocialMedia
     */
    protected function setTimeline(Timeline $timeline)
    {
        $this->timeline = $timeline;

        return $this;
    }
}
