<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;

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




Route::get('/getUser', [AuthController::class, 'getUser']);
Route::get('/showAll', [EmployeeController::class, 'showAll']);
Route::get('/search_employee/{search}', [EmployeeController::class, 'search']);
Route::post('/add_employee', [EmployeeController::class, 'create']);
Route::get('/get_edit_employee/{id}', [EmployeeController::class, 'getEdit']);
Route::post('/update_employee/{id}', [EmployeeController::class, 'updateEmployee']);
Route::get('/delete_employee/{id}', [EmployeeController::class, 'delete']);
Route::get('/sort_employees/{sort}', [EmployeeController::class, 'sort']);


Route::post('/update_user', [AuthController::class, 'updateUser']);

Route::post('/login_process', [AuthController::class, 'login']);
Route::post('/register_process', [AuthController::class, 'register']);

