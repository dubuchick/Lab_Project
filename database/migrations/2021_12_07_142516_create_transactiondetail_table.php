<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactiondetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactiondetail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bookid');
            $table->foreign('bookid')->references('id')->on('book');
            $table->unsignedBigInteger('transactionid');
            $table->foreign('transactionid')->references('id')->on('transaction');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactiondetail');
    }
}
