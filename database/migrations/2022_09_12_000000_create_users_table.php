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
            $table->string('text_name');
            $table->string('text_email')->unique();
            $table->string('text_password');
            $table->string('text_mobile');
            $table->string('text_photo');
            $table->string('text_hobby');
            $table->string('text_gender');
            $table->text('text_address');
            $table->integer("cid");
            $table->integer("sid");
            $table->integer("ctid");
            
            // $table->integer("cid")->unsigned();
            // $table->foreign("cid")->references("id")->on("countries");
            // $table->integer("sid")->unsigned();
            // $table->foreign("sid")->references("id")->on("states");
            // $table->integer("ctid")->unsigned();
            // $table->foreign("ctid")->references("id")->on("cities");
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
