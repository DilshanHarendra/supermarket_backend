<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('user_id',50)->primary();
            $table->string('username',50);
            $table->string('assignDelivery',50)->default("No");
            $table ->string('password',50);
            $table->string('gender',20);
            $table->string('dob',20);
            $table ->string('nic',50);
            $table->string('address',20);
            $table->string('job_role',50);
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
        Schema::dropIfExists('employees');
    }
}
