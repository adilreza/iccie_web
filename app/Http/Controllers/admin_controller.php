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
        return view('admin.admin_login');
    }
    public function admin_login_request(Request $data)
    {
        $email = $data->email;
        $password = $data->password;
        //$test_data = $email.$password;
        
        $about_admin = DB::table('admin_infos')->where('admin_email',$email)->where('admin_password',$password)->first();
        if($about_admin)
        {
            session(['login_status'=>"success"]);
            session(['admin_email'=>$email]);
            session(['admin_login_status'=>'admin_access_granted']);
            echo "success";
        }
        else
        {
            session(['login_status'=>"failed"]);
            echo "failed";
        }
    }
    public function admin_logout()
    {
        session(['admin_login_status'=>'']);
        return redirect('/fsm_admin/private/login');
    }
    public function admin_report()
    {
        return view('admin.admin_report');
    }
    public function admin_report_request(Request $data)
    {
        $name = $data->name;
        $email = $data->email;
        $message = $data->report_message;

        $make_array= array('admin_reporter_name'=>$name,'adnin_reporter_email'=>$email,'admin_reporter_message'=>$message);
        DB::table('admin_problem_reports')->insert($make_array);
        echo "success";
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
    public function library_text_editor()
    {
        return view('admin.admin_panel.library_text_editor');
    }

    public function email_delete($delete_id)
    {
        $blog = DB::table('client_lists')->where('id',$delete_id)->delete();
        return back();

    }

    public function client_mail_list()
    {
        $all_email = DB::table('client_lists')->get();
        return view('admin.admin_panel.client_mail_list')->with('client_emails',$all_email);
    }

    public function library_text_editor_post(request $data)
    {
        $post_title = $data->post_title;
        $application_type= $data->application_type;
        $main_content = $data->main_content;
        $image_name="";
        if($data->hasfile('display_image'))
        {
            $image_name = $data->file('display_image')->getClientOriginalName();
            $name_upadate = $image_name;
            $data->file('display_image')->move(public_path().'/fsm_all_web_file/fsm_image_gallery/library_image',$image_name);
            //return ("succesfull inserted you ")

        }
        $make_array = array('post_title'=>$post_title, 'application_type'=>$application_type, 'display_image'=>$image_name,'blasting'=>'not published', 'main_content'=>$main_content,'admin_email'=>session('admin_email') );
        DB::table('article_tables')->insert($make_array);
        //DB::table('article_tables')->where('id',$article_id)->update(['blasting'=>'already published']);
        return view("admin.admin_panel.library_text_editor")->with('msg_status','success');


    }

    public function article_send_to_client()
    {
        $all_article =DB::table('article_tables')->orderBy('id', 'DESC')->get();
        return view('admin.admin_panel.article_send_to_client')->with('all_articles',$all_article);
    }

    public function filter_by_application_type(request $data)
    {
        $application_type=$data->application_type;
        //return $application_type;
        if($application_type!="All type")
        {
        $selected_data=DB::table('article_tables')->where('application_type',$application_type)->orderBy('id', 'DESC')->get();

        return view('admin.admin_panel.article_send_to_client')->with('all_articles',$selected_data);
        }
        else
         {
            $all_article =DB::table('article_tables')->orderBy('id', 'DESC')->get();
            return view('admin.admin_panel.article_send_to_client')->with('all_articles',$all_article);
         }
    }
    public function delete_article($delet_id)
    {
        DB::table('article_tables')->where('id', $delet_id)->delete();
        return back();

    }

    public function publish_the_post($article_id)
    {
        $article = DB::table('article_tables')->where('id',$article_id)->get()->toArray();
        foreach($article as $art)
        {
            DB::table('published_articles')->insert(get_object_vars($art));
        }
        DB::table('article_tables')->where('id',$article_id)->update(['blasting'=>'already published']);
        DB::table('published_articles')->where('id',$article_id)->update(['blasting'=>'published']);
        
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
    public function rfq_replay_admin_client(Request $data)
    {
        $rfq_from ="admin";
        $rfq_to = $data->to_sample;
        $rfq_file_name = "";
        $optoional = "No comment";
        if($data->hasfile('rfq_report_file'))
        {
            $rfq_file_name = $data->file('rfq_report_file')->getClientOriginalName();
            $data->file('rfq_report_file')->move(public_path().'/fsm_all_web_file/rfq_file',$rfq_file_name);
            $make_array = array(['optional_comment'=>$optoional,'rfq_from'=>$rfq_from,'rfq_to'=>$rfq_to,'rfq_file_name'=>$rfq_file_name]);
            DB::table('rfq_tables')->insert($make_array);
        }
        return view('admin.admin_panel.rfq_replay_admin')->with('success_message','Ok done you message sent');
    }



}