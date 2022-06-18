<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HallController extends Controller
{
    public function history()
    {
        
        return view("hall.history", []);
    }

    public function calendar()
    {
        
        return view("hall.calendar", []);
    }
}
