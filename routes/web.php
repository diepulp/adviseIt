<?php


use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------
*/

//All Plans controller
Route::get('/', [PlanController::class, 'index']);

//show single plan 
Route::get('/plans/{plan}', [PlanController::class, 'show']);

//New Plan page with a uniwue token 
Route::get('/new-plan', [PlanController::class, 'create']);


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
