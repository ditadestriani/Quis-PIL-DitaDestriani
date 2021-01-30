<?php

use App\Http\Controllers\Api\absenController;
use App\Http\Controllers\Api\mahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('', [absenController::class, 'index']);
Route::resources([
    'students' => absenController::class,
    'present' => mahasiswaController::class,
]);
