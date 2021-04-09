<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('oppasserId');
            $table->foreign('oppasserId')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('aanbiederId');
            $table->foreign('aanbiederId')->references('id')->on('users')->onDelete('cascade');
            $table->integer('stars');
            $table->text('description');
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
        Schema::table('reviews', function( Blueprint $table ){
            $table->dropForeign('reviews_aanvraagId_foreign');
           
        });
        Schema::dropIfExists('reviews');
    }
}
