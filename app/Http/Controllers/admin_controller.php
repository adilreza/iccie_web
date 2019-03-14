<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin_controller extends Controller
{

    public function serialize_to_array($s_data)
	{
		$make_array = array();

		$len = strlen($s_data);
		$index_string="";
		$data_string ="";
		for($i=0;$i<$len;$i++)
		{
			if($s_data[$i]=="=")
			{

				for($j=$i+1;$j<$len;$j++)
				{
					if($s_data[$j]=="&"){
						break;
					}
					else{
						$data_string=$data_string.$s_data[$j];
					}

				}
				$make_array[$index_string]=$data_string;
				$index_string="";
				$data_string ="";
				$i=$j;
				
			}
			else
			{
				$index_string=$index_string.$s_data[$i];
				
			}
		}

		return $make_array;
    }





    public function admin_login()
    {
        return view('admin.admin_panel.admin_login');
    }
    public function admin_login_request(Request $data)
    {
        $email = $data->userName;
        $password = $data->userPass;
        //$test_data = $email.$password;
        
        $about_admin = DB::table('iccie_admin_infos')->where('admin_name',$email)->where('admin_passward',$password)->first();
        if($about_admin)
        {
            session(['login_status'=>"success"]);
            session(['admin_name'=>$email]);
            session(['admin_login_status'=>'admin_access_granted']);

            return redirect('/admin/home');
            
        }
        else
        {
            session(['login_status'=>"failed"]);
            return back();
        }

       

    }
    public function admin_logout()
    {
        session(['admin_login_status'=>'']);
        return redirect('/fsm_admin/private/login');
    }
   
 

    public function home()
    {
        return view('admin.admin_panel.index');
    }

    public function charts()
    {
        return view('admin.admin_panel.charts');
    }
    public function widgets()
    {
        return view('admin.admin_panel.widgets');
    }
    public function tables()
    {
        return view('admin.admin_panel.tables');
    }
    public function grid_full()
    {
        return view('admin.admin_panel.grid_full');
    }
    public function form_basic()
    {
        return view('admin.admin_panel.form_basic');
    }
    public function form_wizard()
    {
        return view('admin.admin_panel.form_wizard');
    }
    public function home_page_article()
    {
        return view('admin.admin_panel.library_text_editor');
    }

  

    public function home_page_article_post(request $data)
    {
        $post_title = $data->post_title;
        $main_content = $data->main_content;
        $image_name="";
        if($data->hasfile('display_image'))
        {
            $image_name = $data->file('display_image')->getClientOriginalName();
            $name_upadate = $image_name;
            $data->file('display_image')->move(public_path().'/iccie_all_web_file/iccie_image_gallery/home_image',$image_name);
            //return ("succesfull inserted you ")

        }
        $make_array = array('post_title'=>$post_title, 'display_image'=>$image_name, 'main_content'=>$main_content,'admin_name'=>session('admin_name') );
        DB::table('home_page_articles')->insert($make_array);
        //DB::table('article_tables')->where('id',$article_id)->update(['blasting'=>'already published']);
        return view("admin.admin_panel.library_text_editor")->with('msg_status','success');


    }

    public function add_scope()
    {
        $all_scope = DB::table('scope_lists')->orderBy('id','DESC')->get();

        return view('admin.admin_panel.add_scope')->with(['all_scope'=>$all_scope]);
    }

    public function add_scope_req(request $data)
    {
        
        $scope_name = $data->scope_name;
        $cont = DB::table('scope_lists')->where('scope_name',$scope_name)->count();
        if($cont>0)
        {
            $msg = "Scope Item Already Exist";
        }
        else
        {

        $make_array = array('scope_name'=>$scope_name);

        DB::table('scope_lists')->insert($make_array);
        $msg = "New Scope Item added";
        }
        $all_scope = DB::table('scope_lists')->orderBy('id','DESC')->get();
        return view('admin.admin_panel.add_scope')->with(['msg'=>$msg,'all_scope'=>$all_scope]);
    }

    public function delet_scope($scope_id)
    {
        DB::table('scope_lists')->where('id', $scope_id)->delete();
        return back();
    }

    public function add_committee()
    {
        return view('admin.admin_panel.add_committee');
    }

    public function add_committee_req(request $data)
    {
        $member_name =$data->member_name;
        $member_university =$data->member_university;
        $member_department =$data->member_department;
        $member_category =$data->member_category;
        $image_name = "";
        if($data->hasfile('member_image'))
        {
            $image_name = $data->file('member_image')->getClientOriginalName();
            $data->file('member_image')->move(public_path().'/iccie_all_web_file/iccie_image_gallery/member_image',$image_name);
        }
        $make_array = array('member_name'=>$member_name,'member_university'=>$member_university,'member_department'=>$member_department,'member_category'=>$member_category,'member_image'=>$image_name);
        DB::table('committee_members')->insert($make_array);
        return back();
    }

















    public function admin_presentation_upload()
    {
        return view('admin.admin_panel.presentation_upload');
    }
    public function admin_presentation_upload_req(request $data)
    {
        $p_title = $data->p_title;
        $p_description = $data->p_description;
        $file_name="";
        if($data->hasfile('presentation_file'))
        {
            $file_name = $data->file('presentation_file')->getClientOriginalName();
            $data->file('presentation_file')->move(public_path().'/fsm_all_web_file/fsm_presentation',$file_name);
        }

        $make_array = array('p_title'=>$p_title, 'p_description'=>$p_description,'presentation_file'=>$file_name);
        DB::table('presentation_lists')->insert($make_array);
        return view('admin.admin_panel.presentation_upload')->with("p_msg","Ok successfully uploaded your presentation");
        
    }
    public function give_sample_report()
    {
        return view('admin.admin_panel.give_sample_report');
    }
    public function admin_drf_request()
    {
        $user_compnay=array();
        $all_client = DB::table('user_registrations')->get();
        foreach($all_client as $client)
        {
            $user_compnay[$client->user_name]=$client->company;
        }

        $all_unseen_drf=DB::table('drf_tables')->where('drf_user_mark','green')->get();
        return view('admin.admin_panel.index')->with(['all_unseen_drf'=>$all_unseen_drf,'all_client'=>$user_compnay]);

    }

    public function drf_details_request($drf_id)
    {
        $drf_details = DB::table('drf_tables')->where('id',$drf_id)->get();
        foreach($drf_details as $d)
            $final=$d->drf_data;
        $data = $final;
        $data=$data."&";
        DB::table('drf_tables')->where('id',$drf_id)->update(['drf_status'=>"seen"]);
        $drf_detailss =$this->serialize_to_array($data);

        return view('user.user_panel.drf_form')->with(['data'=>$drf_detailss]);
    }
    public function drf_hiding_request($drf_id)
    {
       DB::table('drf_tables')->where('id',$drf_id)->update(['drf_user_mark'=>'red']);

        return back();
    }
    public function send_sample_replay_drf($user_name)
    {
        return view('admin.admin_panel.give_sample_report')->with('user_name', $user_name);
    }
    public function send_sample_report(request $data)
    {
        $sample_report_from ="fsm_admin";
        $sample_report_to = $data->to_sample;
        $sampl_report_file_name ="";
        if($data->hasfile('sample_report_file'))
        {
            $sampl_report_file_name = $data->file('sample_report_file')->getClientOriginalName();
            
            $data->file('sample_report_file')->move(public_path().'/fsm_all_web_file/sample_report',$sampl_report_file_name);

        }
        $make_array =array(['sampl_report_from'=>$sample_report_from,'sampl_report_to'=>$sample_report_to,'sample_report_name'=>$sampl_report_file_name]);
        DB::table('sampl_report_tables')->insert($make_array);
        return view('admin.admin_panel.give_sample_report')->with('success_message','Your sample Report has already sent to the user <span style="color:red">"'.$sample_report_to.'"</span> ');
    }
    public function delete_drf($drf_id)
    {
        DB::table('drf_tables')->where('id', $drf_id)->delete();
        return back();
    }

    
    public function drf_test()
    {
        $data = DB::table('drf_tables')->where('id',8)->get();
        $final="";
        foreach($data as $d)
            $final=$d->drf_data;
        $data = $final;
        $data=$data."&";
        $get_array=$this->serialize_to_array($data);

        return view('user.user_panel.drf_form')->with(['data'=>$get_array]);
    }

    public function rfq_from_client()
    {
        $user_compnay=array();
        $all_client = DB::table('user_registrations')->get();
        foreach($all_client as $client)
        {
            $user_compnay[$client->user_name]=$client->company;
        }

        $all_unseen_rfq=DB::table('rfq_tables')->where('rfq_seen_unseen','unseen')->orderBy('id','DESC')->get();

        return view('admin.admin_panel.rfq_from_client')->with(['all_unseen_rfq'=>$all_unseen_rfq,'all_client'=>$user_compnay]);
    }
    public function rfq_download($rfq_id)
    {
        return back();

    }

    public function rfq_replay_admin($user_name)
    {
        return view('admin.admin_panel.rfq_replay_admin')->with('user_name',$user_name);

    }
    



}
