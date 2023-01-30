<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\StudentController;

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
    return view('home',);
});

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

// Route::get('/search', function(Request $request){
//    dd($request->name);
// });

//Students controller
Route::get('/students', [StudentController::class, 'index']);

//Plan controller
Route::get('/plans', [PlanController::class, 'index']);
