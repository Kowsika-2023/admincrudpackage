<!-- <?php

use Crud\Admin\Controllers;
use Illuminate\Support\Facades\Route;
use Crud\Admin\Controllers\AdminController;

Route::get('list', [AdminController::class,'adminList'])->name('admin.list');
Route::get('create', [AdminController::class,'create'])->name('admin.create');
Route::post('store',[AdminController::class,'store'])->name('admin.store');
Route::get('show',[AdminController::class,'show'])->name('admin.show');
Route::get('status',[AdminController::class,'status'])->name('status');



// Route::get('testing', function(){
//     return "sdjf";
//     return view('admin::create');
// });
