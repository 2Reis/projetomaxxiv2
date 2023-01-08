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
        Schema::create('maxxfarma', function(Blueprint $table){
            $table->id();
            $table->string('nome',100);
            $table->string('categoria',100);
            $table->year('fabricacao',100);
            $table->double('valor',8.2);
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
        Schema::dropIfExists('maxxfarma');
    }
};
