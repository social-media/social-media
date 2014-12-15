# Social Media

This Social Media PHP Class can (un)publish posts to any Social network.

## Usage

### Installation

``` json
{
    "require": {
        "social-media/social-media": "1.0.*"
    }
}
```

> Add the above in your `composer.json` file when using [Composer](https://getcomposer.org).
### Example

``` php
use JeroenDesloovere\SocialMedia\Objects\Post as Post;
use JeroenDesloovere\SocialMedia\Objects\Service as Service;

// define api
$api = new SocialMedia();

// define external post objects
$service = new Post();
$post = new Service();

// (un)publish a message
$api->timeline->publish($service, $post);
$api->timeline->unpublish($service, $post);
```

> [View all examples](/examples/example.php) or check [the Social Media class](/src/SocialMedia.php).
