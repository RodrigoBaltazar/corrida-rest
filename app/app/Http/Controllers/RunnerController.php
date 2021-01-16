<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\Models\Runner;
use Illuminate\Http\Request;

class RunnerController extends Controller
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
        $name = $request->input('name');
        $cpf = $request->input('cpf');
        $birthday = $request->input('birthday');

        //return dd(Carbon::parse($birthday));
        $runnersYears = Carbon::now()->diffInYears($birthday);
        if($runnersYears < 18){
            return response()->json([
                'message' => 'Underage detected'
            ], 406);
        }

        $runner = new Runner;
        $runner->name = $name;
        $runner->cpf = $cpf;
        $runner->birthday = $birthday;

        $runner->save();

        return response()->json([
            'message' => 'Runner Created'
        ], 200);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function show(Runner $runner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function edit(Runner $runner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Runner $runner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Runner  $runner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Runner $runner)
    {
        //
    }
}
