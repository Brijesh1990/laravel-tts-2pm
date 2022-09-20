<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('confirmpassword');
            $table->string('mobile');
            $table->string('photo');
            $table->string('hobby');
            $table->string('gender');
            $table->text('address');
            $table->integer("cid")->unsigned();
            $table->foreign("cid")->references("id")->on("countries");
            $table->integer("sid")->unsigned();
            $table->foreign("sid")->references("id")->on("states");
            $table->integer("ctid")->unsigned();
            $table->foreign("ctid")->references("id")->on("cities");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
