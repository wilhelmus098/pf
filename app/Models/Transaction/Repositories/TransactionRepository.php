<?php

namespace App\Models\Transaction\Repositories;

use App\Models\Transaction\Repositories\Interfaces\TransactionRepositoryInterface;
use App\Models\Transaction\Transaction;

class TransactionRepository implements TransactionRepositoryInterface
{

    public function all($perPage, $page)
    {
        return Transaction::paginate($perPage, ['*'], 'page', $page);
    }

    public function store($data)
    {
        return Transaction::create($data);
    }

    public function find($id)
    {
        return Transaction::find($id);
    }

    public function update($data, $id)
    {
        // $customer = Customer::where('id', $id)->first();
        // $customer->country_id = $data['country'];
        // $customer->name = $data['name'];
        // $customer->dob = $data['dob'];
        // $customer->phone = $data['phone'];
        // $customer->email = $data['email'];
        // $customer->save();
    }

    public function destroy($id)
    {
        // $customer = Customer::find($id);
        // $customer->delete();
    }
}