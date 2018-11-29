<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperateClearancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operate_clearances', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('resident_id');
			$table->string('business_type');
			$table->string('business_name');
			$table->boolean('is_large_scale');
			$table->string('barangay_chairman');
            $table->timestamps();
			$table->foreign('resident_id')->references('id')->on('residents')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operate_clearances');
    }
}
