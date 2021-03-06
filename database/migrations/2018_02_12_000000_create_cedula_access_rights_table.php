<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCedulaAccessRightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedula_access_rights', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('user_role_id')->unique();
            $table->boolean('create')->default(0);
            $table->boolean('read')->default(0);
			$table->boolean('update')->default(0);
			$table->boolean('delete')->default(0);
            $table->timestamps();
			$table->foreign('user_role_id')->references('id')->on('user_roles')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cedula_access_rights');
    }
}
