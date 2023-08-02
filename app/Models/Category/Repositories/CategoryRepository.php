<?php

namespace app\Models\Category\Repositories;

// use app\Models\Category\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category\Category;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function all($perPage, $page)
    {
        return Category::paginate($perPage, ['*'], 'page', $page);
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