<?php
namespace App\Models\Transaction\Repositories\Interfaces;

use App\Models\Transaction\Transaction;

Interface TransactionRepositoryInterface {

    public function all($perPage, $page);

    public function store($data);

    public function find($id);

    public function update($data, $id);

    public function destroy($id);
}