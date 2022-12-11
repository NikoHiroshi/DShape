<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurements;

class DashBoardController extends Controller
{
    public function index(){
        $measurements = Measurements::orderBy('date', 'desc')
        ->take(5)
        ->get()
        ->reverse();
        
        return $measurements;
    }
}
