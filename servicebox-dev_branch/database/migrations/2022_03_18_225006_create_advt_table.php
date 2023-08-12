<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advts', function (Blueprint $table) {
            $table->id();
            $table->string('category_id',100);
            $table->string('contact', 100);
            $table->string('city', 100);
            $table->string('title', 100);
            $table->text('text');
            $table->integer('price');
            $table->longText('img');
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
        Schema::dropIfExists('advt');
    }
}
