<?php

use App\Livewire\ConfirmDelete;
use App\Livewire\EditContact;
use App\Livewire\MainComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', MainComponent::class)->name('home');
Route::get('/contacts/{id}/delete', ConfirmDelete::class)->name('contacts-delete');
Route::get('/contacts/{id}/edit', EditContact::class)->name('contacts-edit');
