<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('pokemons', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('hp');
        $table->integer('weight');
        $table->integer('height');
        $table->string('type1')->nullable();
        $table->string('type2')->nullable();
        $table->string('image');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('pokemons');
    }
};
