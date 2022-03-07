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
        Schema::create('kamers', function (Blueprint $table) {
            $table->id();
            $table->integer('oppervlakte');
            $table->string('naam');
            $table->integer('kamernummer');
            $table->string('datum');
            $table->string('adress');
            $table->string('type-kamer');
            $table->integer('aantal-personen');
            $table->decimal('prijs');
            $table->boolean('minibar');
            $table->boolean('bad');
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
        Schema::dropIfExists('kamers');
    }
};
