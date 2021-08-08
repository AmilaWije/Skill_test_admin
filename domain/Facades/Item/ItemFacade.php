<?php

namespace domain\Facades\Item;

use domain\Services\Item\ItemService;
use Illuminate\Support\Facades\Facade;

/**
 * User: Amila Wijerathna
 */
class ItemFacade extends Facade
{    
    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
        return ItemService::class;
    }
}