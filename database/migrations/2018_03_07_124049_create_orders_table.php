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
            $table->date('date');
            $table->enum('time', ['6:30-8:00', '8:30-10:00', '10:30-12:00', '12:30-15:00']);
            $table->string('adress');
            $table->tinyInteger('truck');
            $table->string('recipient_name');
            $table->string('recipient_phone', 20);
            $table->string('info');
            $table->double('price', 8, 2);
            $table->tinyInteger('type_pay')->default('1');
            $table->enum('status', ['1', '2', '3']); // ['open', 'close', 'cancel']
            $table->string('signature');
            $table->tinyInteger('approve')->default('0'); // 0 : not approved, 1 : approved
            $table->tinyInteger('paid')->default('0'); // 0 : not paid, 1 : paid
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
