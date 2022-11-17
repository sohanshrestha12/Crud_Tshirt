<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudAppController;

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

Route::get('/', [CrudAppController::class, 'index']);
Route::get('/list', [CrudAppController::class, 'Alllist']);
Route::get('delete/{id}', [CrudAppController::class, 'Remove']);
Route::get('/edit/{id}', [CrudAppController::class, 'Edit']);
Route::post('/save',[CrudAppController::class, 'save'])->name('submit');
Route::post('/EditData',[CrudAppController::class,'SaveEditedData'])->name('EditData');

