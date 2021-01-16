<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRaceRunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_runners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('runner_id');
            $table->unsignedBigInteger('race_id');
            $table->timestamps();

            $table->foreign('runner_id')->references('id')->on('runners');
            $table->foreign('race_id')->references('id')->on('races');
        });

        DB::table('race_runners')->insert([
            [
                'id' => 1,
                'runner_id' => 1,
                'race_id' => 1,
                'created_at' => Carbon::now('America/Sao_Paulo')
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('race_runners');
    }
}
