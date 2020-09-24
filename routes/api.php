<?php

use App\Http\Controllers\CertificateController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/certificates', [CertificateController::class, 'index']) ->name('certificates.index');
Route::get('/certificates/{certificate}', [CertificateController::class, 'show']) ->name('certificates.show');
Route::post('/certificates', [CertificateController::class, 'store'])->name('certificates.store');
