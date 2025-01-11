<?php
use App\Http\Controllers\ParticipantsController;
use Illuminate\Support\Facades\Route;

Route::get('/home',   [ParticipantsController::class, 'index'])->name('participants.index');
Route::get('/create', [ParticipantsController::class, 'create'])->name('participants.create');
Route::post('/store', [ParticipantsController::class, 'store'])->name('participants.store');
Route::get('/show/{id}', [ParticipantsController::class, 'show'])->name('participants.show');
Route::put('/updates/{id}',[ParticipantsController::class, 'update'])->name('participants.update');
Route::get('/update/{id}', [ParticipantsController::class, 'edit'])->name('participants.edit');
Route::DELETE('/destroy/{id}', [ParticipantsController::class, 'destroy'])->name('participants.destroy');


Route::get('/', function () {
    return view('Welcome');
});

