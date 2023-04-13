<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get("/",IndexController::class)->name("index.index");

Route::get("/admin",AdminController::class)->name("admin");
Route::post('/admin/validate',[AdminController::class,'validateAdminCredentials'])->name('admin.validate');
Route::get("/admin/index",[AdminController::class, 'index'])->name("admin.index");
Route::get("/admin/logout",[AdminController::class,'logout'])->name("admin.logout");

Route::get("/admin/runners",UserController::class)->middleware(['auth','isAdmin'])->name("runners");
Route::get("/admin/runners/create",[UserController::class,'create'])->middleware(['auth','isAdmin'])->name("runners.create");
Route::post("/admin/runners",[UserController::class, 'store'])->middleware(['auth','isAdmin'])->name("runners.store");
Route::get("/admin/runners/edit/{dni}",[UserController::class,'edit'])->middleware(['auth','isAdmin'])->name("runners.edit");
Route::post("/admin/runners/search",[UserController::class,'search'])->middleware(['auth','isAdmin'])->name("runners.search");
Route::put("/admin/runners/update/{id}",[UserController::class, 'update'])->middleware(['auth','isAdmin'])->name("runners.update");
Route::get("/admin/runners/delete/{id}/{active}",[UserController::class, 'delete'])->middleware(['auth','isAdmin'])->name("runners.delete");
