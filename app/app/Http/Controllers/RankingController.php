<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Runner;
use App\Models\RunnerResult;

class RankingController extends Controller
{
    function byAge(Request $request){
        /*
        * Faltou fazer esta parte da classificação por idade.          
        */
    }

    function general(Request $request){
        
        /*
        * Faltou fazer esta parte da classificação geral.          
        */

        // return response()->json([
        //     'Ranking Runners' => $runners
        // ], 200);
    }
}
