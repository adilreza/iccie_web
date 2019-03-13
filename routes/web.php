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


Route::get('/iccie_admin/private/login','admin_controller@admin_login');
Route::post('/iccie_admin/private/login/request','admin_controller@admin_login_request');



Route::group(['prefix'=>'admin','middleware'=>'admin_permission'], function(){
    Route::get('/home','admin_controller@home');
    Route::get('/charts','admin_controller@charts');
    Route::get('/widgets','admin_controller@widgets');
    Route::get('/tables','admin_controller@tables');
    Route::get('/grid_full','admin_controller@grid_full');
    Route::get('/form_basic','admin_controller@form_basic');
    Route::get('/form_wizard','admin_controller@form_wizard');
    Route::get('/client_mail_list','admin_controller@client_mail_list');
    Route::get('/email_delete/{delete_id}', 'admin_controller@email_delete');
    Route::get('/article_send_to_client', 'admin_controller@article_send_to_client');
    Route::post('/filter_by_application_type','admin_controller@filter_by_application_type');
    Route::get('/filter_by_application_type','admin_controller@article_send_to_client');
    Route::get('/mail_blast/{article_id}', 'sendgrid_bulkemail@mail_blast');
    Route::get('/delete_article/{article_id}', 'admin_controller@delete_article');
    Route::get('/publish_the_post/{article_id}', 'admin_controller@publish_the_post');
    Route::get('/admin_presentation_upload','admin_controller@admin_presentation_upload');
    Route::post('/admin_presentation_upload','admin_controller@admin_presentation_upload_req');
    Route::get('/give_sample_report','admin_controller@give_sample_report');
    Route::get('/home/drf','admin_controller@admin_drf_request');
    Route::get('/home/drf/{drf_id}','admin_controller@drf_details_request');
    Route::get('/home/drf/hide/{drf_id}','admin_controller@drf_hiding_request');
    Route::get('/home/drf/delete/{drf_id}','admin_controller@delete_drf');
    Route::get('/home/send_sample/{user_name}','admin_controller@send_sample_replay_drf');
    Route::post('/home/send_sample','admin_controller@send_sample_report');
    Route::get('/rfq_from_client','admin_controller@rfq_from_client');
    Route::get('/download/rfq_file/{rfq_id}','admin_controller@rfq_download');
    Route::get('/rfq_replay_admin/{user_name}', 'admin_controller@rfq_replay_admin');
    Route::post('/rfq_replay_admin_client', 'admin_controller@rfq_replay_admin_client');
    
    
   

    Route::get('/logout', 'admin_controller@admin_logout');
    Route::get('/import_page', 'mailblastController@import_page');
    Route::post('/insert_email','mailblastController@insert_email');

    Route::get('/home_page_article','admin_controller@home_page_article');
    Route::post('/home_page_article','admin_controller@home_page_article_post');
    
    
});





Route::get('/','iccie_maincontroller@index');
