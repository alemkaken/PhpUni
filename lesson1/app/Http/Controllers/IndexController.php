<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {

    $data = [
        'name' => 'Alem kaken',
        'title' => 'Laravel Assignment2',
    ];
        
        return view('index',$data);
    }
}
