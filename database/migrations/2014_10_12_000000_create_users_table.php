<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->integer('leeftijd');
            $table->text('omschrijving');
            $table->boolean('admin')->default(0);
            $table->boolean('blocked')->default(0);
            $table->string('role')->default("Aanbieder");
            $table->boolean('honden')->default(0);
            $table->boolean('katten')->default(0);
            $table->boolean('vogels')->default(0);
            $table->boolean('reptielen')->default(0);
            $table->boolean('knaagdieren')->default(0);
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
}
