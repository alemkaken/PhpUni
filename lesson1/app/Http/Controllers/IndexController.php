<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {

    $data = [
        'name' => 'Alem kaken',
        'course' => 'Laravel Assignment3',
        'message' => 'successfully',
    ];
        
        return view('index',$data);
    }
}
