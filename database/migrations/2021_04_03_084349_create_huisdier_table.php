<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHuisdierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('huisdier', function (Blueprint $table) {
            $table->id()->onDelete('cascade');
            $table->unsignedBigInteger('eigenaar');
            $table->foreign('eigenaar')->references('id')->on('users')->onDelete('cascade');
            $table->string('naam');
            $table->integer('leeftijd');
            $table->boolean('geslacht');
            $table->text('description');
            $table->string('fotolocatie')->default('/img/hond.jpg');
            $table->string('soort');
            $table->foreign('soort')->references('soort')->on('soort')->onDelete('cascade');
            $table->double('uurtarief');
            $table->date('startDatum');
            $table->date('endDatum');
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
        Schema::table('huisdier', function( Blueprint $table ){
            $table->dropForeign('huisdier_eigenaar_foreign');
            $table->dropForeign('huisdier_soort_foreign');
        });
        Schema::dropIfExists('huisdier');
    }
}
