<?php

namespace domain\Facades\Region;

use domain\Services\Region\RegionService;
use Illuminate\Support\Facades\Facade;

/**
 * User: Amila Wijerathna
 */
class RegionFacade extends Facade
{    
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return RegionService::class;
    }
}