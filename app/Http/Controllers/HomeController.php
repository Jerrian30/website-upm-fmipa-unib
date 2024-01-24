<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\SurveiChart;


class HomeController extends Controller
{
    public function index(SurveiChart $survei)
    {
        return view('home', ['chart' => $survei->build()], compact('survei'));
    } 
}
