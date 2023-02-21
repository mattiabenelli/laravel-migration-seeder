<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train as Train;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        
        return view('welcome', compact('trains'));
    }

}
