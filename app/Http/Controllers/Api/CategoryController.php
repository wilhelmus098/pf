<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Account\Repositories\Interfaces\AccountRepositoryInterface;
use App\Models\Transaction\Repositories\Interfaces\TransactionRepositoryInterface;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    private $categoryRepository;
    private $accountRepository;
    private $transcationRepository;
    
    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        AccountRepositoryInterface $accountRepository,
        TransactionRepositoryInterface $transactionRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->accountRepository = $accountRepository;
        $this->transactionRepository = $transactionRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = $this->categoryRepository->all($request->get('perPage'));
        return Response($categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = $request->validate([
            'name' => 'required|string|max:10',
            'description' => 'required|string|max:100'
        ]);

        $category = $this->categoryRepository->store($input);
        return Response($category, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = $this->categoryRepository->find($id);
        return Response($categories);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $validator = $request->validate([
            'name' => 'required|string|max:10',
            'description' => 'required|string|max:100'
        ]);

        $category = $this->categoryRepository->update($input, $id);
        return Response($category, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = $this->categoryRepository->destroy($id);
        return Response($category, 200);
    }
}
