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
        Schema::create('photographies', function (Blueprint $table) {

            $table->id();

            $table->string('title');

            $table->timestamp('fecha');

            $table->unsignedBigInteger('fotografo_id');
            $table->foreign('fotografo_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('modelo_id');
            $table->foreign('modelo_id')->references('id')->on('users');

            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

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
        Schema::dropIfExists('photographies');
    }
};
