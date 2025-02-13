<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Adlogin;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Home;
use App\Http\Controllers\Admin\Process;

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





//Admin Start
Route::post('/auth',[Adlogin::class,'authenticate']);

Route::get('/admin/login',function(){
    return view('admin.login');
})->name('admin/login');

Route::get('/admin',function(){
    return redirect('admin/dashboard');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [Dashboard::class, 'index']);
    Route::get('/questions', [Dashboard::class, 'questions']);
 

    Route::get('delete/{category}/{id}', [Process::class, 'delete']);

    //POST METHOD
    Route::post('post-question/',[Process::class,'store_question']);
    
});
//Admin End 


Route::get('/logout', function () {
    session()->flush();
    return redirect('');
});