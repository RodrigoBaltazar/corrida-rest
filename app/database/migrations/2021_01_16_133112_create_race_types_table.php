<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateRaceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('race_types')->insert([
            [
                'id' => 1,
                'name' => '3km',
                'created_at' => Carbon::now('America/Sao_paulo'),
            ]
        ]);
        DB::table('race_types')->insert([
            [
                'id' => 2,
                'name' => '5km',
                'created_at' => Carbon::now('America/Sao_paulo'),
            ]
        ]);
        DB::table('race_types')->insert([
            [
                'id' => 3,
                'name' => '10km',
                'created_at' => Carbon::now('America/Sao_paulo'),
            ]
        ]);
        DB::table('race_types')->insert([
            [
                'id' => 4,
                'name' => '21km',
                'created_at' => Carbon::now('America/Sao_paulo'),
            ]
        ]);
        DB::table('race_types')->insert([
            [
                'id' => 5,
                'name' => '42km',
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
        Schema::dropIfExists('race_types');
    }
}
