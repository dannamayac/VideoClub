<?php

use App\Http\Controllers\alquilerController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\peliculaController;
use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

//Ruta del Home
Route::get('/',[homeController::class,'index'])->name('index');

//Rutas del Alquiler
Route::get('indexAlquiler/{pelicula_id?}',[alquilerController::class,'index'])->name('indexAlquiler');
Route::get('crearAlquiler/{pelicula_id}',[alquilerController::class,'vistaCrearAlquiler'])->name('vistaCrearAlquiler');
Route::post('agregarAlquiler/{pelicula_id}',[alquilerController::class,'agregarAlquiler'])->name('agregarAlquiler');
Route::post('vistaEditarAlquiler/{id}',[alquilerController::class,'vistaEditarAlquiler'])->name('vistaEditarAlquiler');
Route::put('editarAlquiler/{id}',[clienteCalquilerControllerontroller::class,'editarAlquiler'])->name('editarAlquiler');
Route::delete('eliminarAlquiler/{id}',[alquilerController::class,'eliminarAlquiler'])->name('eliminarAlquiler');

//Rutas de la Pelicula
Route::get('indexPelicula',[peliculaController::class,'index'])->name('indexPelicula');
Route::get('crearPelicula',[peliculaController::class,'vistaCrearPelicula'])->name('vistaCrearPelicula');
Route::post('agregarPelicula',[peliculaController::class,'agregarPelicula'])->name('agregarPelicula');
Route::post('vistaEditarPelicula/{id}',[peliculaController::class,'vistaEditarPelicula'])->name('vistaEditarPelicula');
Route::put('editarPelicula/{id}',[peliculaController::class,'editarPelicula'])->name('editarPelicula');
Route::delete('eliminarPelicula/{id}',[peliculaController::class,'eliminarPelicula'])->name('eliminarPelicula');

//Rutas del Cliente
Route::get('indexCliente',[clienteController::class,'index'])->name('indexCliente');
Route::get('crearCliente',[clienteController::class,'vistaCrearCliente'])->name('vistaCrearCliente');
Route::post('agregarCliente',[clienteController::class,'agregarCliente'])->name('agregarCliente');
Route::post('vistaEditarCliente/{id}',[clienteController::class,'vistaEditarCliente'])->name('vistaEditarCliente');
Route::put('editarCliente/{id}',[clienteController::class,'editarCliente'])->name('editarCliente');
Route::delete('eliminarCliente/{id}',[clienteController::class,'eliminarCliente'])->name('eliminarCliente');

