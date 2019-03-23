<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class iccie_maincontroller extends Controller
{
    public function index()
    {
        $home_article =DB::table('home_page_articles')->orderBy('id', 'DESC')->first();
        $all_date = DB::table('important_dates')->get();
        $home_banner = DB::table('banner_alls')->where('type','home')->orderBy('id','DESC')->first();
        $title_banner = DB::table('banner_alls')->where('type','title')->orderBy('id','DESC')->first();
        session(['banner_home'=>$home_banner->banner_name, 'banner_title'=>$title_banner->banner_name, 'all_dates'=>$all_date]);



        return view('index')->with(['home_article'=>$home_article]);
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
    public function committee_member()
    {
        $chief_member = DB::table('committee_members')->where('member_category','CHIEF PATRON')->get();
        $technical_member = DB::table('committee_members')->where('member_category','TECHNICAL PATRON')->get();
        $international_member = DB::table('committee_members')->where('member_category','INTERNATIONAL ADVISORY COMMITTEE')->orderBy('id','DESC')->get();
        return view('committee_member')->with(['chief_member'=>$chief_member, 'technical_member'=>$technical_member,'international_member'=>$international_member]);
    }

    

    public function call_for_paper()
    {
        $call_for_paper = DB::table('call_for_papers')->orderBy('id','DESC')->get();

        return view('call_for_paper')->with('call_for_paper',$call_for_paper);


    }

    public function camera_submission(){
        return view('camera_submission');
    }

    public function speakers(){
        return view('speakers');
    }




}
