<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirefightersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firefighters', function (Blueprint $table) {
            $table->id();

            //Personal info
            $table->string('name');
            $table->string('surname');
            $table->string('second_name');
            $table->string('sex');
            $table->date('birth_date');
            $table->string('birth_city');

            $table->string('fathers_name');
            $table->string('pesel');
            $table->string('id_number');
            $table->string('education');

            //Address
            $table->string('city');
            $table->string('street');
            $table->string('postcode');
            $table->string('commune');

            $table->string('phone');
            $table->string('email');
            $table->string('bank_account');


            $table->unsignedBigInteger('unit_id');
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firefighters');
    }
}
