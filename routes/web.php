<?php

use App\Http\Controllers\AdvisorController;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------
*/

//All Plans controller
Route::get('/', [PlanController::class, 'index']);

//New Plan page with a uniwue token 
Route::get('/plans/new-plan', [PlanController::class, 'create'])->middleware('auth');

//Store plan data (needs to be Route::post, but throws an error, no idea)
Route::get('/plans', [PlanController::class, 'store'])->middleware('auth');

//Update a plan
Route::put('/plans/{plan}', [PlanController::class, 'update'])->middleware('auth');

//Delete plan
Route::delete('/plans/{plan}', [PlanController::class, 'destroy'])->middleware('auth');

// Manage plans
Route::get('/plans/manage', [PlanController::class, 'manage'])->middleware('auth');

//Show edit from
Route::get('/plans/{plan}/edit/{token}', [PlanController::class, 'edit'])->middleware('auth');

//Show Register Create from
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

//Create new user
Route::post('/users', [UserController::class, 'store']);

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login from
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Login user 
Route::post('/users/authenticate', [UserController::class, "authenticate"]);

// ---------------------------------------------------------------------------------------
//Show single plan (has to be at the end of the file to work for some reason)
Route::get('/plans/{plan}', [PlanController::class, 'show']);




// Route::get('/hello', function(){
//     return response("<h1>hello world</h1>", 200) 
//     ->header('Content-Type', "text/plain")
//     ->header('foo', 'bar');
// });


//Request params from the query string
// Route::get('/search', function(Request $request){
//    dd($request->name);
// });


//Single plan with an id
// Route::get('/plan/{id}', function ($id) {

//     return view('plans.plan', [
//         'plan' => Plan::find($id)
//     ]);
// });
