<?php
namespace App\Http\Controllers;
use App\Models\Mission;
use App\Models\Target;
use App\Models\Agent;

class MissionController extends Controller {

    public function index(){
        $missions  = Mission::all();
        $targets = Target::all();
        $agents = Agent::whereRaw('job =  1')->get();
        $masters = Agent::whereRaw('job = 0')->get();
        
        return view('missions', compact('missions','targets','agents', 'masters')); 
    }
}