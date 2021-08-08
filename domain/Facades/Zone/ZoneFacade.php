<?php

namespace domain\Facades\Zone;

use domain\Services\Zone\ZoneService;
use Illuminate\Support\Facades\Facade;

/**
 * User: Amila Wijerathna
 */
class ZoneFacade extends Facade
{    
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return ZoneService::class;
    }
}