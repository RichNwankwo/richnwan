<?php

use App\Models\Project;
use Illuminate\HTTP\Request;
use Illuminate\Validation\Validator;
use App\Models\Contact;
//use Mail;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/projects', function(){
    $projects = Project::where('active', 1)->get();
    return view('projects', ['projects' => $projects]);
});

Route::post('/contact',function(Request $request){

    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('message');

    if($email && $name && $message)
    {
        $contactData = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];
        Contact::create($contactData);
    }

    return view('mailSent');

    // TODO send mail using a web service

//    Mail::send('emails.contact', ['contactData' => $contactData], function($message){
//
//        $message->from('');
//        $message->to('');
//
//    });



});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
