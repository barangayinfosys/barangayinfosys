<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name')->unique();
            $table->date('birthday');
            $table->string('place_of_birth');
			$table->integer('height');
			$table->integer('weight');
			$table->string('civil_status');
			$table->string('nationality');
			$table->string('occupation');
			$table->integer('tax_identification_number');
			//$table->string('address');
			//$table->string('coordinates');
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
        Schema::dropIfExists('residents');
    }
}
