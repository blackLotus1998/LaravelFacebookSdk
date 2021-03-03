<?php namespace Blacklotus\LaravelFacebookSdk;

use Facebook\Url\UrlDetectionInterface;
use Laravel\Lumen\Routing\UrlGenerator;

class umenUrlDetectionHandler implements UrlDetectionInterface
{
    /**
     * @var UrlGenerator
     */
    private $url;

    /**
     * @param UrlGenerator $url
     */
    public function __construct(UrlGenerator $url)
    {
        $this->url = $url;
    }

    /**
     * @inheritdoc
     */
    public function getCurrentUrl()
    {
        return $this->url->current();
    }
}
