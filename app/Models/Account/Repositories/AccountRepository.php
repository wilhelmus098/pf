<?php

namespace App\Models\Account\Repositories;

use App\Models\Account\Repositories\Interfaces\AccountRepositoryInterface;
use App\Models\Account\Account;

class AccountRepository implements AccountRepositoryInterface
{

    public function all($perPage)
    {
        return Account::paginate($perPage);
    }

    public function store($data)
    {
        return Account::create($data);
    }

    public function find($id)
    {
        return Account::find($id);
    }

    public function update($data, $id)
    {
        $account = Account::where('id', $id)->first();
        $account->name = $data['name'];
        $account->description = $data['description'];
        $account->save();
        return $account;
    }

    public function destroy($id)
    {
        $account = Account::find($id);
        $account->delete();
        return $account;
    }
}