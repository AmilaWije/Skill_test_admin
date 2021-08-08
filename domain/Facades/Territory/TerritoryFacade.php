<?php

namespace domain\Facades\Territory;

use domain\Services\Territory\TerritoryService;
use Illuminate\Support\Facades\Facade;

/**
 * User: Amila Wijerathna
 */
class TerritoryFacade extends Facade
{    
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return TerritoryService::class;
    }
}