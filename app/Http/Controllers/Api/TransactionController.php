<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Account\Repositories\Interfaces\AccountRepositoryInterface;
use App\Models\Transaction\Repositories\Interfaces\TransactionRepositoryInterface;

class TransactionController extends Controller
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
    public function index()
    {
        return "ccc";
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
            'user_id' => 'required|integer',
            'account_id' => 'required|integer',
            'category_id' => 'required|integer',
            'type' => 'required|string|max:3',
            'date' => 'required|date',
            'note' => 'string|max:50',
            'amount' => 'required|numeric|min:0.1'
        ]);

        $transaction = $this->transactionRepository->store($input);
        return Response($transaction, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
