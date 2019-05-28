<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class MyController extends Controller
{
    //
    public function slide(){
        $slide=Slide::all();
        return view('demo',compact('slide'));
    }
}
