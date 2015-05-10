<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodLogPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_log', function(Blueprint $table) {
            $table->integer('food_id')->unsigned()->index();
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
            $table->integer('log_id')->unsigned()->index();
            $table->foreign('log_id')->references('id')->on('logs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('food_log');
    }
}
