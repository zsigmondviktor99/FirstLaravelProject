<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizzas', function (Blueprint $table) {
            //$table->id(); >> original
            $table->bigIncrements('id'); // >> tutorial
            $table->timestamps();
            $table->string('type');
            $table->string('base');
            $table->string('name');

            //Toppings >> feltétek >> tömb
            $table->json('toppings');   //MySQL nem tud tömböket tárolni, de JSON stringeket igen
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizzas');
    }
}
