<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAanvraagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aanvraag', function (Blueprint $table) {
            $table->id()->onDelete('cascade');
            $table->timestamps();
            $table->unsignedBigInteger('oppasserId');
            $table->foreign('oppasserId')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('huisdierId');
            $table->foreign('huisdierId')->references('id')->on('huisdier')->onDelete('cascade');
            $table->boolean('acceptedByAanbieder')->default(false);
            $table->boolean('deniedByAanbieder')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aanvraag');
    }
}
