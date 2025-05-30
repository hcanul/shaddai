<?php

use App\Livewire\Pacientes\Expedientes\GeneralController;
use App\Livewire\Settings\AssignPermissions\AssignPermissionontroller;
use App\Livewire\Settings\Roles\RoleController;
use App\Livewire\Settings\Users\UserController;
use App\Livewire\Storage\MedicationController;
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

    Route::group(['prefix' => 'Pacientes'], function(){
        Route::middleware(['role:SuperAdmin|SuperUser|Registro|Enfermera|Medico'])->group(function(){
            Route::get('Expediente', GeneralController::class)->name('Pacientes.Expedientes');
        });
    });

    Route::group(['prefix' => 'Storage', 'middleware' => ['role:SuperAdmin|SuperUser|Medico|Enfermera']], function () {
        Route::get('Medications', MedicationController::class)->name('storage.medications');
    });
});
