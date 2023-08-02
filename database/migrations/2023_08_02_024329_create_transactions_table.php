<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('account_id');
            // $table->unsignedBigInteger('category_id');
            $table->bigInteger('account_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('type');
            $table->date('date');
            $table->string('note');
            $table->float('amount', 8, 2);
            $table->timestamps();

            //DEFINE FK
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
