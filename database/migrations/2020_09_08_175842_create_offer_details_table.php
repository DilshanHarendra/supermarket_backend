<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_details', function (Blueprint $table) {
            $table->string('offer_id',50)->primary();
            $table->string('img',100);
            $table->string('start_date',20);
            $table ->string('end_date',20);
            $table->string('details',20);
            $table->string('batch_id',20);
            $table->string('brand_id',20);
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
        Schema::dropIfExists('offer_details');
    }
}
