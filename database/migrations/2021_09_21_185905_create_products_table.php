<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',15)->unique();
            $table->string('producto_oferta',15);
            $table->string('descripcion',100);
            $table->string('url',150);
            $table->string('img',50);
            $table->string('color_bloque',10);
            $table->string('color_text',10);
            $table->double('precio_anterior');
            $table->double('precio_actual');
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
        Schema::dropIfExists('products');
    }
}
