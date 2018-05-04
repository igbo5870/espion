<?php

namespace App\Http\Controllers;

use App\Models\Target;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function index(){
        $targets  = Target::all();
        return view('target', compact('targets')); 
    }
    
}
