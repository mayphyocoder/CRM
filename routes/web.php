<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', [AdminController::class, 'login'])->name('login');

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'login']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [AdminController::class, 'dashboard']);
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');


    Route::group(['prefix' => 'leads'], function () {
        Route::get('/add-lead', [AdminController::class, 'add_lead'])->name('add-lead');
        Route::post('/add-lead', [AdminController::class, 'add_lead'])->name('add-lead');

        Route::get('/manage-leads', [AdminController::class, 'manage_leads'])->name('manage-leads');
        Route::post('/manage-leads', [AdminController::class, 'manage_leads'])->name('manage-leads');

        Route::post('/delete-lead/{id}', [AdminController::class, 'delete_lead'])->name('delete-lead');


        Route::get('/edit-lead/{id}', [AdminController::class, 'edit_lead'])->name('edit-lead');
        Route::post('/edit-lead/{id}', [AdminController::class, 'edit_lead'])->name('edit-lead');

        Route::get('/view-lead/{id}', [AdminController::class, 'view_lead'])->name('view-lead');
        Route::get('/convert-lead/{id}', [AdminController::class, 'convert_lead'])->name('convert-lead');
        Route::post('/convert-lead/{id}', [AdminController::class, 'convert_lead'])->name('convert-lead');
    });

    Route::group(['prefix' => 'accounts'], function () {
        Route::get('/manage-accounts', [AdminController::class, 'manage_accounts'])->name('manage-accounts');
        Route::post('/manage-accounts', [AdminController::class, 'manage_accounts'])->name('manage-accounts');

        Route::get('/add-account', [AdminController::class, 'add_account'])->name('add-account');
        Route::post('/add-account', [AdminController::class, 'add_account'])->name('add-account');


        Route::post('/delete-account/{id}', [AdminController::class, 'delete_account'])->name('delete-account');

        Route::get('/edit-account/{id}', [AdminController::class, 'edit_account'])->name('edit-account');
        Route::post('/edit-account/{id}', [AdminController::class, 'edit_account'])->name('edit-account');
    });


    Route::group(['prefix' => 'contacts'], function () {
        Route::get('/manage-contacts', [AdminController::class, 'manage_contacts'])->name('manage-contacts');
        Route::post('/manage-contacts', [AdminController::class, 'manage_contacts'])->name('manage-contacts');

        Route::get('/add-contact', [AdminController::class, 'add_contact'])->name('add-contact');
        Route::post('/add-contact', [AdminController::class, 'add_contact'])->name('add-contact');

        Route::get('/edit-contact/{id}', [AdminController::class, 'edit_contact'])->name('edit-contact');
        Route::post('/edit-contact/{id}', [AdminController::class, 'edit_contact'])->name('edit-contact');

        Route::post('/delete-contact/{id}', [AdminController::class, 'delete_contact'])->name('delete-contact');
    });


    Route::group(['prefix' => 'deals'], function () {
        Route::get('/manage-deals', [AdminController::class, 'manage_deals'])->name('manage-deals');
        Route::post('/manage-deals', [AdminController::class, 'manage_deals'])->name('manage-deals');

        Route::get('/add-deal', [AdminController::class, 'add_deal'])->name('add-deal');
        Route::post('/add-deal', [AdminController::class, 'add_deal'])->name('add-deal');

        Route::post('/delete-deal/{id}', [AdminController::class, 'delete_deal'])->name('delete-deal');

        Route::get('/edit-deal/{id}', [AdminController::class, 'edit_deal'])->name('edit-deal');
        Route::post('/edit-deal/{id}', [AdminController::class, 'edit_deal'])->name('edit-deal');
    });
});

Auth::routes();

Route::get('/', [AdminController::class, 'dashboard'])->name('home');
