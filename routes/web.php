<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
    return view('pages.admin');
});
Route::get('/user', function () {
    $users = DB::table('users')->get();
   //    var_dump($users);
    return view('pages.users.list', ['users' => $users]);
});
Route::get('check_age/{age?}', function ($age) {
    echo $age;
    return view('home.admin');
})->middleware(\App\Http\Middleware\CheckAge::class);
Route::get('/fail', function () {
    return view('pages.fail');
});
Route::resource('users',UserController::class);

