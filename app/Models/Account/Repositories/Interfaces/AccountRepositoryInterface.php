<?php
namespace App\Models\Account\Repositories\Interfaces;

use App\Models\Account\Account;

Interface AccountRepositoryInterface {

    public function all($perPage);

    public function store($data);

    public function find($id);

    public function update($data, $id);

    public function destroy($id);
}