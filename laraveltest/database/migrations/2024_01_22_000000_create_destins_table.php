<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinsTable extends Migration
{
    public function up()
    {
        Schema::create('destins', function (Blueprint $table) {
            $table->id();
            $table->string('pais');
            $table->string('ciutat');
            $table->string('foto');
            $table->decimal('preu', 10, 2);
            $table->date('data');
            $table->timestamps(); // Agrega las columnas created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('destins');
    }
}
