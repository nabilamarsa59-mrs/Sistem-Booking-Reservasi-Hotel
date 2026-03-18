<?php  use Illuminate\Support\Facades\Route; use App\Http\Controllers\HomeController; 
 
//Route::get('/', function () { 
  //  return view('welcome'); 
//}); 
 
Route::get('/', [HomeController::class, 'index']); 
Route::get('/contact', [HomeController::class, 'contact']); 

use App/Http/Controllers/DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index']);
