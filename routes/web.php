<?php


Route::get('/', 'HomeController@index');

Route::get('/admin', 'AdminController@index');
Route::post('/auth-check','AdminController@adminLogin');
Route::get('/dashboard', 'SuperAdminController@index');
Route::get('/logout','SuperAdminController@logout');

//Route::get('/admin-dashboard', 'SuperAdminController@dashboard');
Route::get('/services','SuperAdminController@services');
Route::post('/save-service','SuperAdminController@save_service');
Route::get('/view-service','SuperAdminController@view_service');
Route::get('/unpublish-service/{id}','SuperAdminController@unpublish_service');
Route::get('/publish-service/{id}','SuperAdminController@publish_service');
Route::get('/edit-service/{id}','SuperAdminController@edit_service');
Route::post('/update-service','SuperAdminController@update_service');
Route::get('/delete-service/{id}','SuperAdminController@delete_service');


Route::get('/project','SuperAdminController@project');
Route::post('/save-project','SuperAdminController@save_project');
Route::get('/view-project','SuperAdminController@view_project');
Route::get('/unpublish-project/{id}','SuperAdminController@unpublish_project');
Route::get('/publish-project/{id}','SuperAdminController@publish_project');
Route::get('/edit-project/{id}','SuperAdminController@edit_project');
Route::post('/update-project','SuperAdminController@update_project');
Route::get('/delete-project/{id}','SuperAdminController@delete_project');

Route::get('/technology','SuperAdminController@technology');
Route::post('/save-technology','SuperAdminController@save_technology');
Route::get('/view-technology','SuperAdminController@view_technology');
Route::get('/unpublish-technology/{id}','SuperAdminController@unpublish_technology');
Route::get('/publish-technology/{id}','SuperAdminController@publish_technology');
Route::get('/edit-technology/{id}','SuperAdminController@edit_technology');
Route::post('/update-technology','SuperAdminController@update_technology');
Route::get('/delete-technology/{id}','SuperAdminController@delete_technology');

Route::get('/process','SuperAdminController@process');
Route::post('/save-process','SuperAdminController@save_process');
Route::get('/view-process','SuperAdminController@view_process');
Route::get('/unpublish-process/{id}','SuperAdminController@unpublish_process');
Route::get('/publish-process/{id}','SuperAdminController@publish_process');
Route::get('/edit-process/{id}','SuperAdminController@edit_process');
Route::post('/update-process','SuperAdminController@update_process');
Route::get('/delete-process/{id}','SuperAdminController@delete_process');


Route::get('/client','SuperAdminController@client');
Route::post('/save-client','SuperAdminController@save_client');
Route::get('/view-client','SuperAdminController@view_client');
Route::get('/unpublish-client/{id}','SuperAdminController@unpublish_client');
Route::get('/publish-client/{id}','SuperAdminController@publish_client');
Route::get('/edit-client/{id}','SuperAdminController@edit_client');
Route::post('/update-client','SuperAdminController@update_client');
Route::get('/delete-client/{id}','SuperAdminController@delete_client');

Route::get('/team-member','SuperAdminController@team_member');
Route::post('/save-team-member','SuperAdminController@save_team_member');
Route::get('/view-team-member','SuperAdminController@view_team_member');
Route::get('/unpublish-team-member/{id}','SuperAdminController@unpublish_team_member');
Route::get('/publish-team-member/{id}','SuperAdminController@publish_team_member');
Route::get('/edit-team-member/{id}','SuperAdminController@edit_team_member');
Route::post('/update-team-member','SuperAdminController@update_team_member');
Route::get('/delete-team-member/{id}','SuperAdminController@delete_team_member');













