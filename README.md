# Social Media
[![Latest Stable Version](http://img.shields.io/packagist/v/social-media/social-media.svg)](https://packagist.org/packages/social-media/social-media)
[![License](http://img.shields.io/badge/license-MIT-lightgrey.svg)](https://github.com/social-media/social-media/blob/master/LICENSE)
[![Build Status](https://travis-ci.org/social-media/social-media.svg?branch=master)](https://travis-ci.org/social-media/social-media)

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
use SocialMedia\SocialMedia as SocialMedia;
use SocialMedia\Objects\Post as Post;
use SocialMedia\Objects\Service as Service;

// define api
$api = new SocialMedia();

// define external post objects
$service = new Post();
$post = new Service();

// (un)publish a message
$api->getTimeline()->publish($service, $post);
$api->getTimeline()->unpublish($service, $post);
```

> [View all examples](/examples/example.php) or check [the Social Media class](/src/SocialMedia.php).

## Documentation

The class is well documented inline. If you use a decent IDE you'll see that each method is documented with PHPDoc.

## Contributing

Contributions are **welcome** and will be fully **credited**.

### Pull Requests

> To add or update code

- **Coding Syntax** - Please keep the code syntax consistent with the rest of the package.
- **Add unit tests!** - Your patch won't be accepted if it doesn't have tests.
- **Document any change in behavior** - Make sure the README and any other relevant documentation are kept up-to-date.
- **Consider our release cycle** - We try to follow [semver](http://semver.org/). Randomly breaking public APIs is not an option.
- **Create topic branches** - Don't ask us to pull from your master branch.
- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.
- **Send coherent history** - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please squash them before submitting.

### Issues

> For bug reporting or code discussions.

More info on how to work with GitHub on help.github.com.

## Credits

- [Jeroen Desloovere](https://github.com/jeroendesloovere)
- [All Contributors](https://github.com/social-media/social-media/contributors)

## License

The module is licensed under [MIT](./LICENSE.md). In short, this license allows you to do everything as long as the copyright statement stays present.