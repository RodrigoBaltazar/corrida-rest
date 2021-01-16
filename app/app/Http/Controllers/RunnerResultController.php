<?php

namespace App\Http\Controllers;

use App\Models\RunnerResult;
use Illuminate\Http\Request;

class RunnerResultController extends Controller
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
        $race_start = $request->input('race_start');
        $race_finish = $request->input('race_finish');

        $runner_result = new RunnerResult;
        
        $runner_result->runner_id = $runner_id;
        $runner_result->race_id = $race_id;
        $runner_result->race_start = $race_start;
        $runner_result->race_finish = $race_finish;

        $runner_result->save();

        return response()->json([
            'message' => 'Race Result created!'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RunnerResult  $RunnerResult
     * @return \Illuminate\Http\Response
     */
    public function show(RunnerResult $RunnerResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RunnerResult  $RunnerResult
     * @return \Illuminate\Http\Response
     */
    public function edit(RunnerResult $RunnerResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RunnerResult  $RunnerResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RunnerResult $RunnerResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RunnerResult  $RunnerResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(RunnerResult $RunnerResult)
    {
        //
    }
}
