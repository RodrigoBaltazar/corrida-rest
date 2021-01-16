<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->unsignedBigInteger('race_type_id');
            $table->timestamps();

            $table->foreign('race_type_id')->references('id')->on('race_types');
        });

        DB::table('races')->insert([
            [
                'id' => 1,
                'name' => 'Maratona DeliverIT 42km',
                'date' => '2021-01-18',
                'race_type_id' => 5,
                'created_at' => Carbon::now('America/Sao_paulo'),
            ]
        ]);

        DB::table('races')->insert([
            [
                'id' => 2,
                'name' => 'Maratona DeliverIT 21km',
                'date' => '2021-01-18',
                'race_type_id' => 4,
                'created_at' => Carbon::now('America/Sao_paulo'),
            ]
        ]);

        DB::table('races')->insert([
            [
                'id' => 3,
                'name' => 'Maratona DeliverIT 10km',
                'date' => '2021-01-17',
                'race_type_id' => 3,
                'created_at' => Carbon::now('America/Sao_paulo'),
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
        Schema::dropIfExists('races');
    }
}
