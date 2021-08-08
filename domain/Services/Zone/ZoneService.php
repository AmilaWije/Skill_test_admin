<?php

namespace domain\Services\Zone;

use App\Models\Zone\Zone;

class ZoneService
{    
    protected $zones;

    public function __construct()
    {
        $this->zones = new Zone();
    }

    public function get($id)
    {
        return $this->zones::find($id);
    }

    public function show()
    {
        return $this->zones->all();
    }

    public function create($data) 
    {
        unset($data['_token']);
        $this->zones->create($data);
    }

    public function destroy(Zone $zones)
    {
        $zones->delete();
    }

    public function zoneCount()
    {
        $data = $this->show();
        return count($data);
    }
    
}