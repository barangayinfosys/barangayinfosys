<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summons', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('resident_id');
			$table->string('complainant');
			$table->string('case_number')->unique();
			$table->string('case_reason');
			$table->dateTime('date_of_summon');
			$table->string('barangay_chairman');
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
        Schema::dropIfExists('summons');
    }
}
