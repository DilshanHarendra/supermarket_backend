<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('order_id',50)->primary();
            $table->string('type',50);
            $table ->string('delivery_Person_id',50)->default("noPerson");
            $table->string('status',20)->default("Ongoing");
            $table->string('invoice_id',50);
            $table ->string('delivered',50)->default("NO");
            $table->string('address',20);
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
