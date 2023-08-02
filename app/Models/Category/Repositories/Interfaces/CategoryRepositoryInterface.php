<?php
namespace App\Models\Category\Repositories\Interfaces;

use App\Models\Category\Category;

Interface CategoryRepositoryInterface {

    public function all($perPage, $page);

    // public function store($data);

    // public function find($id);

    // public function update($data, $id);

    // public function destroy($id);
}