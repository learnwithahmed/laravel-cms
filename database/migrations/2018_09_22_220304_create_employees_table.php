<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('dob')->nullable(); // will be removed
            $table->string('phone', 11)->nullable();
            $table->string('email')->unique()->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->date('hire_date')->nullable();
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
