<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

// CONTROLLERS
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\SubmittedActivityController;




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

// HOME
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/teacher', function (){
    return view('teacher');
});

###

// VERIFICATION
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

###

## ACTIVITIES MVC

// USE TO SHOW ALL THE HTML - NEED BLADE FILE
Route::get('/activities', [ActivityController::class, 'index']);

// SHOW SPECIFIC ONE (use singular coz it only display one - best practice)  - NEED BLADE FILE
Route::get('/activity/{id}', [ActivityController::class, 'show']);

// CREATE  - NEED BLADE FILE
Route::get('/activity', [ActivityController::class, 'create']);

// USE WHEN YOU WANT TO PUT SOMETHING IN THE FORM - NEED BLADE FILE
Route::get('/activity/{id}/edit', [ActivityController::class, 'edit']);

###

// WILL BE COMING FROM THE FORM
Route::post('/activity', [ActivityController::class, 'store']);

// UPDATE A DATA
Route::put('/activity/{id}/edit', [ActivityController::class, 'update']);

// USE FOR DELETING
Route::delete('/activity/{id}', [ActivityController::class, 'destroy']);

###



## SUBMITTED ACTIVITIES MVC

// USE TO SHOW ALL THE HTML - NEED BLADE FILE
Route::get('/allactivities', [SubmittedActivityController::class, 'index']);

// SHOW SPECIFIC ONE (use singular coz it only display one - best practice)  - NEED BLADE FILE
Route::get('/allactivity/{id}', [SubmittedActivityController::class, 'show']);

// CREATE  - NEED BLADE FILE
Route::get('/allactivity', [SubmittedActivityController::class, 'create']);

// USE WHEN YOU WANT TO PUT SOMETHING IN THE FORM - NEED BLADE FILE
Route::get('/allactivity/{id}/edit', [SubmittedActivityController::class, 'edit']);

###

// WILL BE COMING FROM THE FORM
Route::post('/allactivity', [SubmittedActivityController::class, 'store']);

// UPDATE A DATA
Route::put('/allactivity/{id}/edit', [SubmittedActivityController::class, 'update']);

// USE FOR DELETING
Route::delete('/allactivity/{id}', [SubmittedActivityController::class, 'destroy']);

###