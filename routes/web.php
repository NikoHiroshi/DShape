<?php
use App\Http\Controllers\MeasurementsController;
use App\Http\Controllers\DashBoardController;
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
//Home
Route::get('/', [DashBoardController::class,'index']);

//Abre a lista de medida ja existentes
Route::get('/measurements', [MeasurementsController::class,'index']);

//Nova medida
Route::get('/measurements/new', function () {
    return view('measurements/form');
});

Route::get('/register', function () {
    return view('user/register');
});

Route::get('/login', function () {
    return view('user/login');
});

Route::get('/home2', function () {
    return view('other_parts/afterHome');
});

//Salva nova medida
Route::post('/measurements/new',[MeasurementsController::class,'store']);

//Deleta o paranaue
Route::delete('/measurements/{id}', [MeasurementsController::class, 'destroy']);