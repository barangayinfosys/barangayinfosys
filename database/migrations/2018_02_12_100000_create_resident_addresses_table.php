<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident_addresses', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('resident_id')->unique();
            $table->string('street_address');
			$table->string('barangay');
			$table->string('city');
			$table->string('province');
			$table->integer('postal_code');
			$table->string('coordinates');
            $table->timestamps();
			$table->foreign('resident_id')->references('id')->on('resident_informations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resident_addresses');
    }
}
