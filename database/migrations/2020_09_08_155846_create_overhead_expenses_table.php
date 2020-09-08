<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverheadExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overhead_expenses', function (Blueprint $table) {
            $table->string('oh_id',50)->primary();
            $table->string('expense',50)->nullable(false);
            $table ->double('amount')->nullable(false);
            $table->string('paymentMode',20)->nullable(false);
            $table->date('payDate')->nullable(false);
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
        Schema::dropIfExists('overhead_expenses');
    }
}
