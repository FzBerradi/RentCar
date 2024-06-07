<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Manager;
use Illuminate\Support\Facades\Route;

// Home Links
Route::get('/', [HomeController::class, 'index']);


// Login 
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login'])->name('loginD');
Route::get('/logout', [LoginController::class, 'logout']);



// Admin Links
Route::get('/dashboardAdmin', [Admin::class, 'index']);

Route::get('/ajouterUtilisateur', [Admin::class, 'addUser']);
Route::post('/ajouterUtilisateur/store', [Admin::class, 'storeAddUser']);

Route::get('/monProfil', [Admin::class, 'profil']);
Route::get('/admin/{admin}/edit', [Admin::class, 'edit'])->name('admin.edit');
Route::put('/admin/{admin}', [Admin::class, 'update'])->name('admin.update');

Route::get('/manageAdmins', [Admin::class, 'admins']);
Route::get('/rechercheAdmin', [Admin::class, 'rechercherAdmin']);

Route::get('/manageManagers', [Admin::class, 'managers']);
Route::get('/manager/{manager}/edit', [Admin::class, 'editManager'])->name('manager.edit');
Route::put('/manager/{manager}', [Admin::class, 'updateManager'])->name('manager.update');
Route::delete('/manager/{manager}', [Admin::class, 'destroyM']);
Route::get('/rechercheManager', [Admin::class, 'rechercherManager']);

// Manager Links
Route::get('/dashboardManager', [Manager::class, 'index']);

Route::get('/manageClients', [Manager::class, 'clients']);
Route::get('/rechercheClient', [Manager::class, 'rechercherClient']);
Route::get('/client/{client}/edit', [Manager::class, 'editClient'])->name('client.edit');
Route::put('/client/{client}', [Manager::class, 'updateClient'])->name('client.update');
Route::delete('/client/{client}', [Manager::class, 'destroyC']);

Route::get('/ajouterClient', [Manager::class, 'addClient']);
Route::post('/ajouterClient/store', [Manager::class, 'storeAddClient']);



Route::get('/manageVoitures', [Manager::class, 'voitures']);
Route::get('/rechercheVoiture', [Manager::class, 'rechercherVoiture']);
Route::get('/voiture/{voiture}/edit', [Manager::class, 'editVoiture'])->name('voiture.edit');
Route::put('/voiture/{voiture}', [Manager::class, 'updateVoiture'])->name('voiture.update');
Route::delete('/voiture/{voiture}', [Manager::class, 'destroyV']);

Route::get('/ajouterVoiture', [Manager::class, 'addCar']);
Route::post('/ajouterVoiture/store', [Manager::class, 'storeAddVoiture']);

Route::get('/allVoitures', [Manager::class, 'allCars']);
Route::get('/rechercheAllVoiture', [Manager::class, 'rechercherAllVoiture']);

Route::get('/manageReservations', [Manager::class, 'reservations']);
Route::get('/rechercheReservation', [Manager::class, 'rechercherReservation']);

Route::get('/ajouterReservation', [Manager::class, 'addReservation']);
Route::post('/ajouterReservation/store', [Manager::class, 'storeAddReservation']);


Route::get('/historiqueReservation', [Manager::class, 'historique']);
Route::get('/rechercheAllReservation', [Manager::class, 'rechercherAllReservation']);

Route::get('/detailsReservation/{id}', [Manager::class, 'detailsReservation']);
Route::get('/generate-invoice/{id}', [Manager::class, 'generateInvoice'])->name('generate.invoice');
Route::post('/reservations/{id}/accept', [Manager::class, 'accept'])->name('reservations.accept');
Route::delete('/reservations/{id}/refuse', [Manager::class, 'refuse'])->name('reservations.refuse');

Route::get('/profilManager', [Manager::class, 'profilManager']);
Route::get('/managerM/{manager}/edit', [Manager::class, 'editManager'])->name('managerM.edit');
Route::put('/managerM/{manager}', [Manager::class, 'updateManager'])->name('managerM.update');