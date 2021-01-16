<?php

namespace App\Http\Controllers;

use App\Models\RaceRunner;
use Illuminate\Http\Request;
use App\Models\Race;
use Illuminate\Support\Facades\DB;

class RaceRunnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $runner_id = $request->input('runner_id');
        $race_id = $request->input('race_id'); 

        //$runner = Runner::where('id', '=', $runner_id)->first();
        $race = Race::where('id', '=', $race_id)->first();

        //$verifyRaceRunner = RaceRunner::whereDate('');

        $query = DB::select("
            SELECT
                count(*) as 'count'
            FROM
                races r,
                race_runners rr,
                runners ru
            WHERE
                r.id = rr.race_id
                AND rr.runner_id = ru.id
                AND DATE(r.date) = :datetime
                AND ru.id = :runner_id;
        ", [
            "datetime" => $race->date,
            "runner_id" => $runner_id
        ]);

        $quantity_races_runner_day = $query[0]->count;

        if($quantity_races_runner_day > 0)
        {
            return response()->json([
                'message' => 'Runner already subscribed in race at the same day.'
            ], 406);
        }

        $raceRunner = new RaceRunner;
        $raceRunner->runner_id = $runner_id;
        $raceRunner->race_id = $race_id;

        $raceRunner->save();

        return response()->json([
            'message' => 'Runner Subscribed'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RaceRunner  $raceRunner
     * @return \Illuminate\Http\Response
     */
    public function show(RaceRunner $raceRunner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RaceRunner  $raceRunner
     * @return \Illuminate\Http\Response
     */
    public function edit(RaceRunner $raceRunner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RaceRunner  $raceRunner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RaceRunner $raceRunner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RaceRunner  $raceRunner
     * @return \Illuminate\Http\Response
     */
    public function destroy(RaceRunner $raceRunner)
    {
        //
    }
}
