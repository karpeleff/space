<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bizs', function (Blueprint $table) {
            $table->id();
            $table->string('category',100);
            $table->string('tel',50);
            $table->string('city', 100);
            $table->string('title', 100);
            $table->text('text');
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
        Schema::dropIfExists('bizs');
    }
}
