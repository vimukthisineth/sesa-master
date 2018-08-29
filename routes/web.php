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
Route::get('event', function () {
    return view('event');
});




Route::get('/home', 'HomeController@index')->name('home');


Route::get('event/show/{id}', 'Eventcontroller@show');
Route::get('event/all', 'Eventcontroller@all');
Route::get('event/allToSlide','Eventcontroller@toSlide');
Route::get('event/allToDashboard','Eventcontroller@toDashboard');

Route::get('msg/president', function () {
    return view('msgs/president');
});


Route::get('blog/show/{id}', 'BlogController@show');
Route::get('blog/all', 'BlogController@getAll');
Route::get('blog/allToDashboard', 'BlogController@getAllToDashboard');
Route::get('blog/ontag/{tag}','BlogController@get_blog_on_tag');


Route::get('project/all', 'projectcontroller@all');
Route::get('project/getThree','projectcontroller@selectThree');
Route::get('project/show/{id}', 'projectcontroller@show');


Route::get('learn/view/{sem}', 'leartMaterialController@view');



Route::get('course_content', function () {
    return view('course_content');
});

Route::get('question/{id}','QuestionController@show');


Route::get('forum/question/add',function (){
    return view('forum/questions/add');
});
Route::get('forum/question/all','QuestionController@all');
Route::get('forum/question/show/{id}','QuestionController@show');
//Route::get('forum/question/toDashboard','QuestionController@toDashboard');





Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    Route::get('forum/dashboard','AdminController@getDashboard');

    Route::get('event/addevent', function () {
        return view('events/addEvent');
    });
    Route::POST('event/add', 'Eventcontroller@add');



    Route::get('blog/add', 'BlogController@add');

    Route::post('blog/add', 'BlogController@store');



    Route::get('project/add', 'projectcontroller@add');
    Route::post('project/add', 'projectcontroller@store');

    Route::get('validate/{id}/{stu_id}','RoleController@validate_user');


// learn material

    Route::get('learn/upload', function () {
        return view('learn_mat.uploadpage');
    });

    Route::post('learn/store', 'LeartMaterialController@store');


    Route::post('comment/add','CommentsController@store');
    Route::put('comment/edit/{id}','CommentsController@edit');
    Route::delete('comment/delete/{id}','CommentsController@delete');

    Route::post('reply/add','ReplyController@store');
    Route::put('reply/edit/{id}','ReplyController@edit');
    Route::delete('reply/delete/{id}','ReplyController@delete');


    Route::post('forum/question/add','QuestionController@store');
    Route::get('forum/question/edit/{id}','QuestionController@goToEdit');
    Route::put('forum/question/edit/{id}','QuestionController@edit');
    Route::delete('forum/question/delete/{id}','QuestionController@delete');


    Route::post('forum/answer/add','CommentsController@answerStore');

    Route::get('forum/answer/edit/{id}','CommentsController@answerEdit');
    //Route::

    Route::get('tag/getList/{hint}','TagController@getTagList');



});
