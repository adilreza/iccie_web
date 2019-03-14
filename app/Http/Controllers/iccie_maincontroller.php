<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class iccie_maincontroller extends Controller
{
    public function index()
    {
        $home_article =DB::table('home_page_articles')->orderBy('id', 'DESC')->get();
        return view('index')->with('home_article',$home_article);
    }

    public function master()
    {
        return view('layout.master');
    }

    public function iccie_scope()
    {
        $all_scope = DB::table('scope_lists')->get();
        return view('iccie_scope')->with('all_scope',$all_scope);
    }




}
