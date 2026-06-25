<?php
use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NotesController::class, 'index']);
Route::post('/notes', [NotesController::class, 'store']);
Route::get('/notes/{note}/edit', [NotesController::class, 'edit']);
Route::put('/notes/{note}', [NotesController::class, 'update']);
Route::delete('/notes/{note}', [NotesController::class, 'destroy']);