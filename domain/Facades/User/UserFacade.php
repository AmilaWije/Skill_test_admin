<?php

namespace domain\Facades\User;

use domain\Services\User\UserService;
use Illuminate\Support\Facades\Facade;

/**
 * User: Amila Wijerathna
 */
class UserFacade extends Facade
{    
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return UserService::class;
    }
}