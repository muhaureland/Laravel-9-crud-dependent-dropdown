<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SatuanController};

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

Route::resource('satuan', SatuanController::class);
Route::get('getCourse/{id}', [SatuanController::class, 'course'] );



// Route::get('/create', function () {
//     $category = App\Models\Category::all();
//     return view('welcome',['category' => $category]);
// });

// Route::get('getCourse/{id}', function ($id) {
//     $course = Course::where('category_id',$id)->get();
//     return response()->json($course);
// });
