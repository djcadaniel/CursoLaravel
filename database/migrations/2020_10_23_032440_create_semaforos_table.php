<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemaforosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semaforos', function (Blueprint $table) {
            $table->id();//codigo volderpleit
            $table->string('name');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();//codigo volderpleit
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semaforos');
    }
}
