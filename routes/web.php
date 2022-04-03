<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::domain('{domain}.healthmedsci.org')->group(function () {
    Route::get('journal', 'JournalController@index');
    Route::get('journal/new', 'JournalController@journal_new');
    Route::get('journal/current', 'JournalController@journal_current');
    Route::get('journal/archive', 'JournalController@archive');
    Route::get('journal/search', 'JournalController@journal_search');
    Route::get('journal/details/{id}', 'JournalController@journal_view');
    Route::get('journal/view-archive/{month}/{year}', 'JournalController@view_archive');
    Route::get('journal/most-viewed', 'JournalController@most_viewed');
    Route::get('journal/announcement', 'JournalController@announcement');
    Route::get('journal/open-access-policy', 'JournalController@open_access_policy');
    Route::get('journal/contact', 'JournalController@contact');
    Route::get('journal/faq', 'JournalController@faq');

    Route::get('journal/register', 'AuthController@register');
    Route::post('journal/register', 'AuthController@post_register');
    Route::get('login', 'AuthController@journal_login');
    Route::get('journal/login', 'AuthController@journal_login');
    Route::post('journal/login', 'AuthController@journal_authenticate');
    Route::get('journal/forget-password', 'AuthController@forget_password');
    Route::post('journal/forget-password', 'AuthController@post_forget_password');
    Route::get('journal/reset-password', 'AuthController@reset_password');
    Route::post('journal/reset-password', 'AuthController@post_reset_password');

    Route::group(['prefix' => 'author', 'middleware' => 'auth'], function () {
        
        //new route for manuscript submission
        
        Route::get('menuscript_submit','AuthorController@menuscript_form');
        
        
        //end of new code for manuscript submission
        
        
        Route::get('submit-menuscript', 'AuthorController@menuscript');
        Route::post('submit-menuscript', 'AuthorController@store_menuscript');
        Route::post('store-menuscript', 'AuthorController@temp_store_menuscript');
         
        Route::post('document-upload', 'AuthorController@document_upload');
        Route::post('update-document-type', 'AuthorController@update_document_type');
        Route::post('update-document-name', 'AuthorController@update_document_name');
        Route::post('store-author', 'AuthorController@store_author');
        Route::get('load-author-table/{journal_id}', 'AuthorController@load_author_table');
        Route::get('load-document-table/{journal_id}', 'AuthorController@load_document_table');
        Route::get('delete-author/{id}', 'AuthorController@delete_author');
        Route::get('delete-document/{id}', 'AuthorController@delete_document');

        Route::get('dashboard', 'AuthorController@dashboard');
          Route::get('newFile', 'AuthorController@newFile');
        Route::get('pending-issue', 'AuthorController@pendingIssue');
        Route::get('submitted-issue', 'AuthorController@submittedIssue');
        Route::get('published', 'AuthorController@published');
        Route::get('rejected', 'AuthorController@rejected');
        Route::get('journal/edit/{journal_id}', 'AuthorController@edit_journal');
        Route::post('journal/edit/{journal_id}', 'AuthorController@update_menuscript');

        Route::get('update-password', 'AuthorController@update_password');

        Route::get('profile', 'AuthorController@profile');

    });
});

Route::get('secure/login', 'AuthController@admin_login');
Route::post('secure/login', 'AuthController@admin_authenticate');
Route::get('logout', 'AuthController@logout');



Route::get('pdf-view/{journal_id}', function ($journal_id) {
    return (new App\Http\Helper\Helper())->journalPdf($journal_id);
});


Route::get('article', 'HomeController@article');
Route::get('article/details/{id}', 'HomeController@article_details');
Route::get('journal-details/{id}', 'HomeController@journal_details');
Route::get('page/{id}', 'JournalController@page');
Route::get('send-mail', 'WebController@send_email');

Route::get('contact', 'WelcomeController@main_contact');
Route::get('help', 'WelcomeController@help');
Route::get('registration', 'WebController@signup');

Route::get('about', 'WelcomeController@about');
Route::get('testimonial', 'WelcomeController@testimonial');
Route::get('active-account', 'WebController@activate_account');
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin'], 'namespace' => 'Admin'], function () {

    Route::get('dashboard', 'AdminController@dashboard');
    Route::get('setting', 'AdminController@setting');

    Route::get('email', 'AdminController@email');
    Route::get('email/create', 'AdminController@create_email');
    Route::post('email/create', 'AdminController@send_email');

    Route::post('update-password', 'AdminController@update_password');
    Route::post('update-profile', 'AdminController@update_profile');

    Route::get('author', 'AuthorController@index');
    Route::get('author/create', 'AuthorController@create');
    Route::post('author/create', 'AuthorController@store');
    Route::get('author/edit/{id}', 'AuthorController@edit');
    Route::post('author/edit/{id}', 'AuthorController@update');
    Route::get('author/delete/{id}', 'AuthorController@delete');
    Route::get('author/password-reset/{id}', 'AuthorController@password_reset');
    Route::post('author/password-reset/{id}', 'AuthorController@post_password_reset');

    Route::get('paper-category', 'PaperCategoryController@index');
    Route::get('paper-category/create', 'PaperCategoryController@create');
    Route::post('paper-category/create', 'PaperCategoryController@store');
    Route::get('paper-category/edit/{id}', 'PaperCategoryController@edit');
    Route::post('paper-category/edit/{id}', 'PaperCategoryController@update');
    Route::get('paper-category/delete/{id}', 'PaperCategoryController@delete');

    Route::get('role', 'RoleController@index');
    Route::get('role/create', 'RoleController@create');
    Route::post('role/create', 'RoleController@store');
    Route::get('role/edit/{id}', 'RoleController@edit');
    Route::post('role/edit/{id}', 'RoleController@update');
    Route::get('role/delete/{id}', 'RoleController@delete');

    Route::get('testimonial', 'TestimonialController@index');
    Route::get('testimonial/create', 'TestimonialController@create');
    Route::post('testimonial/create', 'TestimonialController@store');
    Route::get('testimonial/edit/{id}', 'TestimonialController@edit');
    Route::post('testimonial/edit/{id}', 'TestimonialController@update');
    Route::get('testimonial/delete/{id}', 'TestimonialController@delete');

    Route::get('journal', 'JournalController@index');
    Route::get('journal/create', 'JournalController@create');
    Route::post('journal/create', 'JournalController@store');
    Route::get('journal/details/{id}', 'JournalController@details');
    Route::get('journal/view-review/{id}', 'JournalController@view_review');
    Route::get('journal/review/{id}', 'JournalController@review');
    Route::post('journal/review/{id}', 'JournalController@post_review');
    Route::get('journal/delete/{id}', 'JournalController@delete');
    Route::get('journal/update-status/{id}/{status}', 'JournalController@update_status');
    Route::post('journal/send-to-reviewer', 'JournalController@send_to_reviewer');
    Route::get('journal/review-report', 'JournalController@review_report');
    Route::get('journal/archive', 'JournalController@archive');

    Route::get('page', 'PageController@index');
    Route::get('page/create', 'PageController@create');
    Route::get('page/status/{id}/{status}', 'PageController@status');
    Route::post('page/create', 'PageController@store');
    Route::get('page/edit/{id}', 'PageController@edit');
    Route::post('page/edit/{id}', 'PageController@update');
    Route::get('page/delete/{id}', 'PageController@delete');

//	Route::get('article','ArticleController@index');
//	Route::get('article/create','ArticleController@create');
//	Route::post('article/create','ArticleController@store');
//	Route::get('article/edit/{id}','ArticleController@edit');
//	Route::post('article/edit/{id}','ArticleController@update');
//	Route::get('article/delete/{id}','ArticleController@delete');

    Route::get('notice', 'NoticeController@index');
    Route::get('notice/create', 'NoticeController@create');
    Route::post('notice/create', 'NoticeController@store');
    Route::get('notice/edit/{id}', 'NoticeController@edit');
    Route::post('notice/edit/{id}', 'NoticeController@update');
    Route::get('notice/delete/{id}', 'NoticeController@delete');
    Route::get('notice/status/{id}/{status}', 'NoticeController@status');

    Route::get('user', 'UserController@index');
    Route::get('user/create', 'UserController@create');
    Route::post('user/create', 'UserController@store');
    Route::get('user/active/{id}', 'UserController@active');
    Route::get('user/active/{id}', 'UserController@active');
    Route::get('user/block/{id}', 'UserController@block');
    Route::get('user/edit/{id}', 'UserController@edit');
    Route::post('user/edit/{id}', 'UserController@update');
    Route::get('user/delete/{id}', 'UserController@delete');
});

//Route::group(['middleware' => 'auth'],function(){
//
//
//});
//
Route::get('testmail', function () {
    $subject = 'New Publication Notification';
    $user = ['email' => 'hello@gmail.com', 'password' => 'demo123'];
    $url = 'https://google.com/ncr';
    Mail::to(['bappa2du@gmail.com'])
        ->send(new App\Mail\NewAccountNotification('New Registration Notification', $user));
    return 'Processed';
});

Route::get('{page}', 'WelcomeController@page');
Route::get('/', 'WelcomeController@index');

