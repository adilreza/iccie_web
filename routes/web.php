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


    
    
   

    Route::get('/logout', 'admin_controller@admin_logout');
    Route::get('/import_page', 'mailblastController@import_page');
    Route::post('/insert_email','mailblastController@insert_email');

    Route::get('/home_page_article','admin_controller@home_page_article');
    Route::post('/home_page_article','admin_controller@home_page_article_post');
    Route::get('/home/add_scope','admin_controller@add_scope');
    Route::post('/home/add_scope','admin_controller@add_scope_req');
    Route::get('/home/delete_scope/{scope_id}','admin_controller@delet_scope');
    Route::get('/home/add_committee','admin_controller@add_committee');
    Route::post('/home/add_committee','admin_controller@add_committee_req');
    Route::get('/delete_commitee_member/{delete_id}','admin_controller@delete_commitee_member');
    Route::post('/call_for_paper_post','admin_controller@call_for_paper_post');
    Route::get('/call_for_paper_get','admin_controller@call_for_paper_get');
    Route::get('/delete_call_for_paper/{delete_id}','admin_controller@delete_call_for_paper');
    Route::get('/add_important_date','admin_controller@add_important_date');
    Route::post('/add_important_date','admin_controller@add_important_date_post');
    Route::get('/home/delete_date/{delete_id}','admin_controller@delete_date');
    Route::get('/add_banner','admin_controller@add_banner');
    Route::post('/add_banner_title','admin_controller@add_banner_title');
    Route::post('/add_banner_home','admin_controller@add_banner_home');

    Route::post('home/add_committee_final','admin_controller@add_committee_final');

});


//USER SECTION 


Route::get('/','iccie_maincontroller@index');
Route::get('/iccie_scope','iccie_maincontroller@iccie_scope');
Route::get('/committee_member','iccie_maincontroller@committee_member');
Route::get('/call_for_paper','iccie_maincontroller@call_for_paper');
Route::get('/camera_submission','iccie_maincontroller@camera_submission');
Route::get('/speakers','iccie_maincontroller@speakers');