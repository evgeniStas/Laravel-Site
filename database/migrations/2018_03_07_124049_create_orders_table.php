<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('seller');
            $table->tinyInteger('client');
            $table->string('title')->nullable();
            $table->date('date')->nullable();
            $table->enum('time', ['6:30-8:00', '8:30-10:00', '10:30-12:00', '12:30-15:00'])->nullable();
            $table->string('adress')->nullable();
            $table->tinyInteger('truck')->nullable();
            $table->string('recipient_name')->nullable();
            $table->string('recipient_phone', 20)->nullable();
            $table->string('info')->nullable();
            $table->double('price', 8, 2)->nullable();
            $table->tinyInteger('discount')->default('5')->nullable();
            $table->tinyInteger('type_pay')->default('1')->nullable();
            $table->enum('status', ['1', '2', '3'])->default('1')->nullable(); // ['open', 'close', 'cancel']
            $table->string('signature')->nullable();
            $table->tinyInteger('approve')->default('0')->nullable(); // 0 : not approved, 1 : approved
            $table->tinyInteger('paid')->default('0')->nullable(); // 0 : not paid, 1 : paid
            $table->string('products')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
