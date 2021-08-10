<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DoseController;
use App\Http\Controllers\HealthFacilityController;
use App\Http\Controllers\HealthProfessionalController;
use App\Http\Controllers\PatientProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VaccineController;
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
})->name('welcome');

Route::get('/dashboard',[Dashboard::class,'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['role:admin']], function () {

Route::get('/professionals',[HealthProfessionalController::class,'index'])->name('professionals');

Route::post('/professional/add',[HealthProfessionalController::class,'store'])->name('professional.add');

Route::get('/facilities',[HealthFacilityController::class,'index'])->name('facilities');

Route::post('/facility/add',[HealthFacilityController::class,'store'])->name('facility.add');

Route::post('/vaccine/add',[VaccineController::class,'store'])->name('vaccine.add');

Route::get('/users',[UserController::class,'index'])->name('users');

Route::post('/user/add',[UserController::class,'store'])->name('user.add');

});

Route::group(['middleware' => ['auth']], function () {

    Route::get('/patients',[PatientProfileController::class,'index'])->name('patients');

    Route::post('/patient/add',[PatientProfileController::class,'store'])->name('patient.add');

    Route::post('/doses/create',[DoseController::class,'create'])->name('dose.create');

    Route::post('/doses/add',[DoseController::class,'store'])->name('dose.store');

    Route::get('/patient/{id}',[PatientProfileController::class,'show'])->name('patient.show');

    Route::get('/vaccines',[VaccineController::class,'index'])->name('vaccines');


});
