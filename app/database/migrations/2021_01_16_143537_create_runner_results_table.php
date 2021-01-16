<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunnerResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runner_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('runner_id');
            $table->unsignedBigInteger('race_id');
            $table->datetime('race_start');
            $table->datetime('race_finish');
            $table->timestamps();

            $table->foreign('runner_id')->references('id')->on('runners');
            $table->foreign('race_id')->references('id')->on('races');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('runner_results');
    }
}
