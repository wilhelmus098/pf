<?php

namespace App\Models\Account\Repositories;

use App\Models\Account\Repositories\Interfaces\AccountRepositoryInterface;
use App\Models\Account\Account;

class AccountRepository implements AccountRepositoryInterface
{

    public function all($perPage, $page)
    {
        return Account::paginate($perPage, ['*'], 'page', $page);
    }

    // public function store($data)
    // {
    //     return Customer::create($data);
    // }

    // public function find($id)
    // {
    //     return Customer::find($id);
    // }

    // public function update($data, $id)
    // {
    //     $customer = Customer::where('id', $id)->first();
    //     $customer->country_id = $data['country'];
    //     $customer->name = $data['name'];
    //     $customer->dob = $data['dob'];
    //     $customer->phone = $data['phone'];
    //     $customer->email = $data['email'];
    //     $customer->save();
    // }

    // public function destroy($id)
    // {
    //     $customer = Customer::find($id);
    //     $customer->delete();
    // }
}