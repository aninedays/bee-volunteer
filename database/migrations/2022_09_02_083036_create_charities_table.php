<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id');
            $table->foreignId('type_id');
            $table->foreignId('category_id');
            $table->string('charity_title');
            $table->string('charity_img');
            $table->string('charity_excerpt');
            $table->longText('charity_desc');
            $table->string('charity_location');
            $table->date('charity_date');
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
        Schema::dropIfExists('charities');
    }
}
