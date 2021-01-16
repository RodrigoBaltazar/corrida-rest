<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CreateRunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpf');
            $table->date('birthday');
            $table->timestamps();
        });

        DB::table('runners')->insert([
            [
                'id' => 1,
                'name' => 'Miguel',
                'cpf' => '000.000.000-00',
                'birthday' => '1989-08-14',
                'created_at' => Carbon::now('America/Sao_paulo'),
            ]
        ]);

        DB::table('runners')->insert([
            [
                'id' => 2,
                'name' => 'João',
                'cpf' => '000.000.000-00',
                'birthday' => '1991-08-14',
                'created_at' => Carbon::now('America/Sao_paulo'),
            ]
        ]);

        DB::table('runners')->insert([
            [
                'id' => 3,
                'name' => 'Roberto',
                'cpf' => '000.000.000-00',
                'birthday' => '2000-08-14',
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
        Schema::dropIfExists('runners');
    }
}
