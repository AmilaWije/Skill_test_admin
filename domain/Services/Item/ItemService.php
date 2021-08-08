<?php

namespace domain\Services\Item;

use App\Models\Item\Item;

class ItemService
{    
    protected $items;

    public function __construct()
    {
        $this->items = new Item();
    }

    public function get($id)
    {
        return $this->items::find($id);
    }

    public function show()
    {
        return $this->items->all();
    }

    public function create($data) 
    {
        unset($data['_token']);
        $this->items->create($data);
    }

    public function destroy(Item $items)
    {
        $items->delete();
    }
    
}