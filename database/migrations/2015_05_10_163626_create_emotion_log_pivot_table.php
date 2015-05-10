<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmotionLogPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emotion_log', function(Blueprint $table) {
            $table->integer('emotion_id')->unsigned()->index();
            $table->foreign('emotion_id')->references('id')->on('emotions')->onDelete('cascade');
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
        Schema::drop('emotion_log');
    }
}
