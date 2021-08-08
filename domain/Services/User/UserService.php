<?php

namespace domain\Services\User;

use App\Models\Customer\Customer;
use Illuminate\Support\Facades\Hash;

class UserService
{    
    protected $customers;

    public function __construct()
    {
        $this->customers = new Customer();
    }

    public function get($id)
    {
        return $this->customers::find($id);
    }

    public function show()
    {
        return $this->customers->all();
    }

    public function create($data) 
    {
        unset($data['_token']);
        $data['password'] = Hash::make($data['password']);
        $this->customers->create($data);
    }

    public function destroy(Customer $customers)
    {
        $customers->delete();
    }

    public function userCount()
    {
        $data = $this->show();
        return count($data);
    }
    
}