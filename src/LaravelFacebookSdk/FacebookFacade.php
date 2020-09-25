<?php namespace blacklotus1998\LaravelFacebookSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \blacklotus1998\LaravelFacebookSdk\LaravelFacebookSdk
 */
class FacebookFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * Don't use this. Just... don't.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'blacklotus1998\LaravelFacebookSdk\LaravelFacebookSdk';
    }
}
