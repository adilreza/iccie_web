<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class iccie_maincontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function master()
    {
        return view('layout.master');
    }




}
