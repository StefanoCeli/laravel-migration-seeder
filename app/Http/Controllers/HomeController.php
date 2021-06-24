<?php

namespace App\Http\Controllers;

use App\Holiday_home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $holiday_homes = Holiday_home::paginate(10);
        return view('home',['holiday_homes' => $holiday_homes]);
    }
}
