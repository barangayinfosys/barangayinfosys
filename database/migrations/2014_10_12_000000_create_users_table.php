<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
			$table->string('username')->unique();
			$table->string('password');
            $table->string('name');
			$table->integer('phone_number')->nullable();
			$table->unsignedInteger('user_role_id');
			$table->unsignedInteger('user_position_id');
			$table->boolean('is_active')->default(1);
            $table->rememberToken();
            $table->timestamps();
			$table->foreign('user_role_id')->references('id')->on('user_roles')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('user_position_id')->references('id')->on('user_positions')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
