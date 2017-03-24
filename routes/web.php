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

Route::get('/', function () {
    return view('welcome');
});


//Admin
Route::get('admin/login','AdminController@getLogin');
Route::post('admin/login','AdminController@postLogin');
Route::get('admin/log-out','AdminController@getLogout');
Route::get('admin/dashboard','AdminController@getDashboard');

//Partners
Route::get('admin/partners','AdminController@getPartners');
Route::get('admin/add-partners','AdminController@getAddPartners');
Route::post('admin/add-partners','AdminController@postAddPartners');
Route::get('admin/partners-delete/{id}','AdminController@getPartnersDelete');

//Gallery
Route::get('admin/gallery','AdminController@getGallery');
Route::get('admin/add-gallery','AdminController@getAddGallery');
Route::get('admin/gallery-delete/{id}','AdminController@getGalleryDelete');
Route::post('admin/add-gallery','AdminController@postAddGallery');
Route::get('admin/edit-gallery/{id}','AdminController@getEditGallery');
Route::post('admin/edit-gallery','AdminController@postEditGallery');

//About
Route::get('admin/about','AdminController@getAbout');
Route::get('admin/add-about','AdminController@getAddAbout');
Route::get('admin/edit-about/{id}','AdminController@getEditAbout');
Route::post('admin/add-about','AdminController@postAddAbout');
Route::get('admin/about-delete/{id}','AdminController@getAboutDelete');
Route::post('admin/edit-about','AdminController@postEditAbout');

//Request
Route::get('admin/request','AdminController@getRequest');
Route::get('admin/request-delete/{id}','AdminController@getRequestDelete');
Route::get('admin/view-request/{id}','AdminController@getViewRequest');


//Contact
Route::get('admin/contact','AdminController@getConntact');
Route::get('admin/delete-contact/{id}','AdminController@getDeleteContact');
Route::get('admin/view-contact/{id}','AdminController@getViewContact');

//Blog
Route::get('admin/blog-images','AdminController@getBlog');
Route::get('admin/add-blog-images','AdminController@getAddBlog');
Route::post('admin/add-blog-images','AdminController@postAddBlog');
Route::get('admin/edit-blog-images/{id}','AdminController@getEditBlog');
Route::get('admin/blog-images-delete/{id}','AdminController@getBlogDelete');
Route::post('admin/edit-blog','AdminController@postEditBlog');
Route::get('admin/view-blog-gallery/{id}','AdminController@getViewBlogGallery');
Route::get('admin/blog-gallery-delete/{id}','AdminController@getBlogGalleryDelete');

//Service
Route::get('admin/service','AdminController@getService');
Route::get('admin/add-service','AdminController@getAddService');
Route::post('admin/add-service','AdminController@postAddService');
Route::get('admin/service-delete/{id}','AdminController@getServiceDelete');
Route::get('admin/edit-service/{id}','AdminController@getEditService');
Route::post('admin/edit-service','AdminController@postEditService');
Route::get('admin/view-skills/{id}','AdminController@getViewSkills');
Route::get('admin/skill-delete/{id}','AdminController@getSkillDelete');
Route::get('admin/edit-skill/{id}','AdminController@getEditSkill');
Route::post('admin/edit-skill','AdminController@postEditSkill');
Route::get('admin/add-skill/{id}','AdminController@getAddSkill');
Route::post('admin/add-skill','AdminController@postAddSkill');







