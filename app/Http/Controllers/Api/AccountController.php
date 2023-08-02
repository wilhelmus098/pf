<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Http\Response;
use App\Models\Category\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Account\Repositories\Interfaces\AccountRepositoryInterface;
use App\Models\Transaction\Repositories\Interfaces\TransactionRepositoryInterface;

class AccountController extends Controller
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
        return "aaa";
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
        //
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
