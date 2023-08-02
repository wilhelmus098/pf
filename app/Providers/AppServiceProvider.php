<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Models\Category\Repositories\CategoryRepository;
use App\Models\Account\Repositories\Interfaces\AccountRepositoryInterface;
use App\Models\Account\Repositories\AccountRepository;
use App\Models\Transaction\Repositories\Interfaces\TransactionRepositoryInterface;
use App\Models\Transaction\Repositories\TransactionRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(AccountRepositoryInterface::class, AccountRepository::class);
        $this->app->bind(TransactionRepositoryInterface::class, TransactionRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
