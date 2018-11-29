<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResidentUserPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident_user_permissions', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('user_id')->unique();
            $table->boolean('create');
            $table->boolean('read');
			$table->boolean('update');
			$table->boolean('delete');
            $table->timestamps();
			$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resident_user_permissions');
    }
}
