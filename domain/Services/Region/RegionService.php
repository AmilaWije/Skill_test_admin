<?php

namespace domain\Services\Region;

use App\Models\Region\Region;

class RegionService
{    
    protected $regions;

    public function __construct()
    {
        $this->regions = new Region();
    }

    public function get($id)
    {
        return $this->regions::find($id);
    }

    public function show()
    {
        return $this->regions->all();
    }

    public function create($data) 
    {
        unset($data['_token']);
        $this->regions->create($data);
    }

    public function destroy(Region $regions)
    {
        $regions->delete();
    }

    public function regionCount()
    {
        $data = $this->show();
        return count($data);
    }
    
}