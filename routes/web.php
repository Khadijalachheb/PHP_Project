<?php

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Log;
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
Route::get('/login_error', function () {
    return view('welcomeErreur');
});

Route::get('/register_error', function () {
    return view('registerErreur');
});

Route::get('/{name}/{id}/logger', function ($name,$id) {
$logs=Log::where('aal_id',$id)->get();
    return view('logger',[
        'logs' =>$logs,
        'name'=>$name,
      ]);
});
Route::get('/home/{id}', function ($id) {
    $aals=DB::table('a_a_l_s')->get();
    $logs=Log::where('aal_id',$id)->get();
     return view('home',[
       'aals' =>$aals,
       'logs'=>$logs,
     ]);
});
Route::get('/logout', function () {
   Auth::logout();
     session_start();
     session_unset();
     session_destroy();
   
   return redirect('/');
});
Route::get('/Register', function () {
    return view('Register');
});
Route::get('/graphs_conn', function () {
    return view('graphs_conn');
});
Route::get('/graphs_bande', function () {
    return view('graphs_bande');
});




Route::get('/configuration_admins', function () {
    return view('admins',[
        'aals'=>DB::table('a_a_l_s')->get(),
        'emails'=>DB::table('emails')->get(),
    ]

);
});


Route::get('/configuration_aals', function () {
    return view('aals',[
        'aals'=>DB::table('a_a_l_s')->get()
    ]);
});



/*tu est besoin de deux route one pour copntreleur emails and one for email page php but wene i call email.php i have to return data from data base so dont forget thet khadija .  */
Route::resource('/aals','AALController')->only(['create','store']);
Route::resource('/admins','AdminController')->only(['create','store']);
Route::resource('/emails','EmailController')->only(['create','store']);
Auth::routes();


