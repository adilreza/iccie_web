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
        $chief_member = DB::table('all_committee_members')->where('member_category','CHIEF PATRON')->orderBy('id','DESC')->first();
        $technical_member = DB::table('all_committee_members')->where('member_category','TECHNICAL PATRON')->orderBy('id','DESC')->where('member_post','Member')->get();
        $technical_secretary = DB::table('all_committee_members')->where('member_category','TECHNICAL PATRON')->orderBy('id','DESC')->where('member_post','Secretary')->get();
        $technical_chair = DB::table('all_committee_members')->where('member_category','TECHNICAL PATRON')->orderBy('id','DESC')->where('member_post','Chair')->get();
        $advisory_chair = DB::table('all_committee_members')->where('member_category','ADVISORY COMMITTEE')->orderBy('id','DESC')->where('member_post','Chair')->get();
        $advisory_member = DB::table('all_committee_members')->where('member_category','ADVISORY COMMITTEE')->orderBy('id','DESC')->where('member_post','Member')->get();

        $organizing_chair = DB::table('all_committee_members')->where('member_category','ORGANIZING COMMITTEE')->orderBy('id','DESC')->where('member_post','Chair')->where('sub_committee','None')->get();
        $organizing_co_chair = DB::table('all_committee_members')->where('member_category','ORGANIZING COMMITTEE')->orderBy('id','DESC')->where('member_post','Co-chair')->where('sub_committee','None')->get();
        $organizing_secretary = DB::table('all_committee_members')->where('member_category','ORGANIZING COMMITTEE')->orderBy('id','DESC')->where('member_post','Secretary')->where('sub_committee','None')->get();
        
        $wm_sub_committee = DB::table('all_committee_members')->where('sub_committee','Web & Media Sub-Committee')->orderBy('id','DESC')->get();
        $pub_sub_committee = DB::table('all_committee_members')->where('sub_committee','Publication Sub-Committee')->orderBy('id','DESC')->get();
        $registration_sub_committee = DB::table('all_committee_members')->where('sub_committee','Registration Sub-Committee')->orderBy('id','DESC')->get();
        $finance_sub_committee = DB::table('all_committee_members')->where('sub_committee','Finance Sub-Committee')->orderBy('id','DESC')->get();
        $local_sub_committee = DB::table('all_committee_members')->where('sub_committee','Local Arrangement Sub-Committee')->orderBy('id','DESC')->get();
        return view('committee_member')->with(['organizing_chair'=>$organizing_chair,'organizing_co_chair'=>$organizing_co_chair,'organizing_secretary'=>$organizing_secretary,'advisory_chair'=>$advisory_chair,'advisory_member'=>$advisory_member,'technical_chair'=>$technical_chair,'chief'=>$chief_member, 'technical_member'=>$technical_member,'wm_sub_committee'=>$wm_sub_committee,'pub_sub_committee'=>$pub_sub_committee,'registration_sub_committee'=>$registration_sub_committee,'finance_sub_committee'=>$finance_sub_committee, 'local_sub_committee'=>$local_sub_committee,'technical_secretary'=>$technical_secretary]);
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
