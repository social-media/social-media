<?php

// ------------------------------------------------------------------------------------
// Publishing a post
// ------------------------------------------------------------------------------------

/**
 * In Blog Add.php and Edit.php
 * we dispatch article_saved event
 */
$this->get('event_dispatcher')->dispatch(
    BlogEvents::ARTICLE_SAVED,
    new BlogArticleSavedEvent(
    	$this->article
    )
);

/**
 * We must create a listener in /Resources/config/services.yml
 */

/**
 * In the saved listener
 */

// ...
// we define parameters
$module = 'Blog';
$moduleId = $article->getId();
$postText = $article->getTitle();
$postUrl = $article->getUrl();
$postTags = $article->getTags();

// we publish the post
$this->get('social_media')->publishPost(
	$module,
	$moduleId,
	$postText,
	$postUrl,
	$postTags
);

// ------------------------------------------------------------------------------------
// Unpublishing a post
// ------------------------------------------------------------------------------------

/**
 * In Blog Add.php and Edit.php
 * we dispatch article_saved event
 */
$this->get('event_dispatcher')->dispatch(
    BlogEvents::ARTICLE_DELETED,
    new BlogArticleDeletedEvent(
    	$this->article
    )
);

/**
 * In the deleted listener
 */

// we define parameters
$module = 'Blog';
$moduleId = $article->getId();

// we unpublish the post
$this->get('social_media')->unpublishPost(
	$module,
	$moduleId
);



// ------------------------------------------------------------------------------------
// Social Media code
// ------------------------------------------------------------------------------------


class SocialMedia
{
	/**
	 * @var array
	 */
	protected $gateways;

	/**
	 * @var SocialMediaRepository
	 */
	protected $socialMediaRepository;

	/**
	 * Publish post
	 *
	 * @param string module
	 * @param integer moduleId
	 * @param string text
	 * @param string $url
	 * @param array $tags
	 */
	public function publishPost(
		$module,
		$moduleId,
		$text,
		$url = null,
		$tags = array()
	) {
		// loop all gateways
		foreach ($this->gateways as $gateway) {
			// publish post tru gateway
			/** @var GatewayData $gatewayData */
			$gatewayData = $gateway->publishPost($post);

			// add gateway data
			$post->addGatewayData($gatewayData);
		}

		// save to database
		$this->socialMediaRepository->savePost($post);
	}

	/**
	 * Unpublish post
	 *
	 * @param string module
	 * @param integer moduleId
	 */
	public function unpublishPost(
		$module,
		$moduleId
	) {
		// loop all gateways
		foreach ($this->gateways as $gateway) {
			// define post
			$post = $this->socialMediaRepository->getPost(
				$module,
				$moduleId
			);

			// unpublish post tru gateway
			$gateway->unpublishPost($post);
		}

		// delete from database
		$this->socialMediaRepository->deletePost($post)
	}
}




/**
 * Post
 *
 * @author Jeroen Desloovere <jeroen@siesqo.be>
 */
class Post
{
	/**
	 * @var integer
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $module;

	/**
	 * @var integer
	 */
	protected $moduleId;

	/**
	 * @var boolean
	 */
	protected $hasUrl;

	/**
	 * @var array
	 */
	protected $tags;

	/**
	 * @var string
	 */
	protected $text;

	/**
	 * @var string
	 */
	protected $url;

	/**
	 * Gateway data contains the external post-id
	 *
	 * @var ArrayCollection
	 */
	protected $gatewayData;

	/**
	 * Construct
	 *
	 * @param string module
	 * @param integer moduleId
	 * @param string text
	 * @param string $url
	 * @param array $tags
	 */
	public function __construct(
		$module,
		$moduleId,
		$text,
		$url = null,
		$tags = array()
	) {
		$this->module = $module;
		$this->moduleId = $moduleId;
		$this->text = $text;

		if ($url !== null) {
			$this->hasUrl = true;
			$this->url = $url;
		}
		$this->tags = $tags;
	}

	/**
	 * Add gateway data
	 *
	 * @param GatewayData $gatewayData
	 * @return self
	 */
	public function addGatewayData(GatewayData $gatewayData)
	{
		$this->gatewayData->add($gatewayData);
		return $this;
	}

	/**
	 * Get gateway data for gateway name
	 *
	 * @param string $gatewayName
	 * @return GatewayData
	 */
	public function getGatewayDataForGatewayName($gatewayName)
	{
		// loop all gateway data
		foreach ($this->gatewayData as $gatewayData) {
			if ($gatewayData->getName() === $gatewayName) {
				return $data;
			}
		}

		return false;
	}
}

/**
 * Gateway data - which holds the identifiers for the external objects (post id, album id, ...)
 *
 * @author Jeroen Desloovere <jeroen@siesqo.be>
 */
class GatewayData
{
	/**
	 * @var $integer
	 */
	protected $id;

	/**
	 * @var $name
	 */
	protected $name;

	/**
	 * Construct
	 *
	 * @var string $name
	 */
	public function __construct(
		$name
	) {
		$this->name = $name;
	}
}
