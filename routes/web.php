<?php

use App\Livewire\Settings\AssignPermissions\AssignPermissionontroller;
use App\Livewire\Settings\Roles\RoleController;
use App\Livewire\Settings\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    //TODO: Inicia mi código

    Route::group(['prefix'=>'Settings'], function(){
        Route::middleware(['role:SuperAdmin|SuperUser'])->group(function(){
            Route::get('Roles', RoleController::class)->name('Settings.Role');
            Route::get('AssignPermissions', AssignPermissionontroller::class)->name('Settings.AssingPermision');
            Route::get('User', UserController::class)->name('Settings.User');
        });
    });
});
