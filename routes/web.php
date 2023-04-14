<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PetsController;

Route::get("/",[PetsController::class,'login'])->name("index.index");
Route::post('/user/validate',[PetsController::class,'validateUserCredentials'])->name('user.validate');


Route::get('/pets/parelles',[PetsController::class,'mostrarParelles'])->name('pets.parelles');
Route::get('/pets/picture/{id}',[PetsController::class,'mostrarFoto'])->name('pets.picture');
Route::get('/pets/logout',[PetsController::class,'logout'])->name('pets.logout');
Route::get('/pets/registerForm/{succesfulRegister?}',[PetsController::class,'showRegisterForm'])->name('pets.registerForm');
Route::post('/pets/register',[PetsController::class,'registerPet'])->name('pets.register');
