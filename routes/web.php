<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\XRayController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\PhysiotherapyController;
use App\Http\Controllers\AntenatalController;


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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::resource('dashboard',ServiceController::class);

Route::resource('xray',XRayController::class);

Route::resource('lab',LabController::class);

Route::resource('physiotherapy',PhysiotherapyController::class);

Route::resource('antenatal',AntenatalController::class);


require __DIR__.'/auth.php';
