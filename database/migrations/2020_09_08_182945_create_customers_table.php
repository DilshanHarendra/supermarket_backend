<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->string('user_id',50)->primary();
            $table->string('username',50);
            $table ->string('password',50);
            $table->string('gender',20);
            $table->string('dob',20);
            $table ->string('email',50);
            $table->string('contact',20);
            $table->string('profession',50);
            $table ->string('address',50);

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
        Schema::dropIfExists('customers');
    }
}
