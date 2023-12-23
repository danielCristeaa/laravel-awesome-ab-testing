<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_variations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('visitors');
            $table->unsignedBigInteger('ab_experiment_id');
            $table->foreign('ab_experiment_id')->references('id')->on('ab_experiments');
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
        Schema::dropIfExists('a_b_variations');
    }
}
