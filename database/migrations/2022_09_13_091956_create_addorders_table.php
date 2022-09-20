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
        Schema::create('addorders', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("userid")->unsigned();
            $table->foreign("userid")->references("id")->on("users");
            $table->integer("pid")->unsigned();
            $table->foreign("pid")->references("id")->on("addproducts");
            $table->integer("cartid")->unsigned();
            $table->foreign("cartid")->references("id")->on("addcarts");
            $table->string("orderdate");
            $table->string("status")->default("confirmed");
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
        Schema::dropIfExists('addorders');
    }
};
