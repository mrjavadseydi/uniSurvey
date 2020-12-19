<?php

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/show/{uid}/{pid}', function ($uid,$pid) {
    $vote = \App\Models\Vote::where([['candidates_id',$uid],['pardis_id',$pid]])->get();
    return view('show',compact('vote'));
})->name('show');
Route::post('/puyaAuth',[\App\Http\Controllers\AuthController::class,'index'])->name('login');

Route::middleware('customAuth')->prefix('survey')->group(function (){
    Route::get('/survey',[\App\Http\Controllers\SurveyController::class,'index'])->name('survey');
    Route::post('/survey',[\App\Http\Controllers\SurveyController::class,'save']);
});
