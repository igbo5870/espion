<?php
    namespace App\Http\Controllers;
    use App\Models\Mission;

    class MissionController extends Controller {

        public function index(){
            $missions  = Mission::all();
            return view('missions', compact('missions')); 
        }
    }