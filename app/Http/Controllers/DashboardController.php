<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $title = 'UAP SISPAK';
        
        return view('dashboard', compact('title'));
    }
}
