<?php

namespace domain\Services\Territory;

use App\Models\Territory\Territory;

class TerritoryService
{    
    protected $territories;

    public function __construct()
    {
        $this->territories = new Territory();
    }

    public function get($id)
    {
        return $this->territories::find($id);
    }

    public function show()
    {
        return $this->territories->all();
    }

    public function create($data) 
    {
        unset($data['_token']);
        $this->territories->create($data);
    }

    public function destroy(Territory $territories)
    {
        $territories->delete();
    }

    public function territoryCount()
    {
        $data = $this->show();
        return count($data);
    }
    
}