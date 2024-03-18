<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route ::controller(StudentController::class)->group(function(){
    
Route::get('/','show')->name('home');
Route::get('/student/{id}','showStudent')->name('view.student');
Route::post('/add','addStudent')->name('addStudent');
Route::post('/update/{id}','updateStudent')->name('update.student');
Route::get('/updatePage/{id}','updatePage')->name('update.page');
Route::get('/delete/{id}','deleteStudent')->name('delete.student');

});

Route ::view('addStudent','/addStudent');




