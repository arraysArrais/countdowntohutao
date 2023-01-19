<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CountdownService;


class HomeController extends Controller
{
    public function index(CountdownService $countdown){
        $dif = $countdown->hutaoCountdown();
        return view('home', ['dif'=>$dif]);
    }

    public function timer(CountdownService $countdown){
        $dif = $countdown->hutaoCountdown();
        return view('timer', ['dif'=>$dif]);
    }
}
