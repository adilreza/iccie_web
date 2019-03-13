<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix'=>'admin'], function(){
    Route::get('/home','admin_controller@home');
    Route::get('/charts','admin_controller@charts')->middleware('admin_permission');
    Route::get('/widgets','admin_controller@widgets')->middleware('admin_permission');
    Route::get('/tables','admin_controller@tables')->middleware('admin_permission');
    Route::get('/grid_full','admin_controller@grid_full')->middleware('admin_permission');
    Route::get('/form_basic','admin_controller@form_basic')->middleware('admin_permission');
    Route::get('/form_wizard','admin_controller@form_wizard')->middleware('admin_permission');
    Route::get('/client_mail_list','admin_controller@client_mail_list')->middleware('admin_permission');
    Route::get('/email_delete/{delete_id}', 'admin_controller@email_delete')->middleware('admin_permission');
    Route::get('/article_send_to_client', 'admin_controller@article_send_to_client')->middleware('admin_permission');
    Route::post('/filter_by_application_type','admin_controller@filter_by_application_type')->middleware('admin_permission');
    Route::get('/filter_by_application_type','admin_controller@article_send_to_client')->middleware('admin_permission');
    Route::get('/mail_blast/{article_id}', 'sendgrid_bulkemail@mail_blast')->middleware('admin_permission');
    Route::get('/delete_article/{article_id}', 'admin_controller@delete_article')->middleware('admin_permission');
    Route::get('/publish_the_post/{article_id}', 'admin_controller@publish_the_post')->middleware('admin_permission');
    Route::get('/admin_presentation_upload','admin_controller@admin_presentation_upload')->middleware('admin_permission');
    Route::post('/admin_presentation_upload','admin_controller@admin_presentation_upload_req')->middleware('admin_permission');
    Route::get('/give_sample_report','admin_controller@give_sample_report')->middleware('admin_permission');
    Route::get('/home/drf','admin_controller@admin_drf_request')->middleware('admin_permission');
    Route::get('/home/drf/{drf_id}','admin_controller@drf_details_request')->middleware('admin_permission');
    Route::get('/home/drf/hide/{drf_id}','admin_controller@drf_hiding_request')->middleware('admin_permission');
    Route::get('/home/drf/delete/{drf_id}','admin_controller@delete_drf')->middleware('admin_permission');
    Route::get('/home/send_sample/{user_name}','admin_controller@send_sample_replay_drf')->middleware('admin_permission');
    Route::post('/home/send_sample','admin_controller@send_sample_report')->middleware('admin_permission');
    Route::get('/rfq_from_client','admin_controller@rfq_from_client')->middleware('admin_permission');
    Route::get('/download/rfq_file/{rfq_id}','admin_controller@rfq_download')->middleware('admin_permission');
    Route::get('/rfq_replay_admin/{user_name}', 'admin_controller@rfq_replay_admin')->middleware('admin_permission');
    Route::post('/rfq_replay_admin_client', 'admin_controller@rfq_replay_admin_client')->middleware('admin_permission');
    
    
   

    Route::get('/logout', 'admin_controller@admin_logout')->middleware('admin_permission');
    Route::get('/import_page', 'mailblastController@import_page')->middleware('admin_permission');
    Route::post('/insert_email','mailblastController@insert_email')->middleware('admin_permission');
    Route::get('/library_text_editor','admin_controller@library_text_editor')->middleware('admin_permission');
    Route::post('/library_text_editor','admin_controller@library_text_editor_post')->middleware('admin_permission');
    Route::get('/drf_test','admin_controller@drf_test');
    
});





Route::get('/','iccie_maincontroller@index');
