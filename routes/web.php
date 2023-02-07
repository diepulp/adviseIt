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

Route::get('/', function () {
    return view('home');
});

//View
// Route::view('/', 'home');

// Route::get('/hello', function(){
//     return response("<h1>hello world</h1>", 200) 
//     ->header('Content-Type', "text/plain")
//     ->header('foo', 'bar');
// });

Route::get('/post/{id}', function ($id) {
    //debugging helper methods
    // ddd($id);
    return response('The post Id ' . $id);
})->where('id', '[0-9]+'); //add constraints to the id (nums only)

//Request params from the query string
// Route::get('/search', function(Request $request){
//    dd($request->name);
// });

//Students controller
Route::get('/students', [StudentController::class, 'index']);

//Plans controller
Route::get('/plans', [PlanController::class, 'index']);

//Find a plan controller
Route::get('/plan/{id}', [PlanController::class, 'show']);

//Single plan qith an id
Route::get('/plan/{id}', function ($id) {

    return view('plans.plan', [
        'plan' => Plan::find($id)
    ]);
});

//New Plan page with a uniwue token 
Route::get('/new-plan', [PlanController::class, 'create']);
