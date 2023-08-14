<?php

namespace app\Models\Category\Repositories;

// use app\Models\Category\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category\Category;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function all($perPage)
    {
        return Category::paginate($perPage);
    }

    public function store($data)
    {
        return Category::create($data);
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function update($data, $id)
    {
        $category = Category::where('id', $id)->first();
        $category->name = $data['name'];
        $category->description = $data['description'];
        $category->save();
        return $category;
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return $category;
    }
}