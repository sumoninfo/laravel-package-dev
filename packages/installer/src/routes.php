<?php

use SumonInfo\Installer\Controllers\DatabaseController;
use SumonInfo\Installer\Controllers\EnvironmentController;
use SumonInfo\Installer\Controllers\FinalController;
use SumonInfo\Installer\Controllers\PermissionsController;
use SumonInfo\Installer\Controllers\RequirementsController;
use Illuminate\Support\Facades\Route;
use SumonInfo\Installer\Controllers\WelcomeController;


Route::controller(\SumonInfo\Installer\Controllers\InstallerController::class)->prefix('install')->group(function () {
    Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
    Route::get('/environment', [EnvironmentController::class, 'environment'])->name('environment');
    Route::get('/environment/save', [EnvironmentController::class, 'save'])->name('environmentSave');
    Route::get('/requirements', [RequirementsController::class, 'requirements'])->name('requirements');
    Route::get('/permissions', [PermissionsController::class, 'permissions'])->name('permissions');
    Route::get('/database', [DatabaseController::class, 'database'])->name('database');
    Route::get('/final', [FinalController::class, 'finish'])->name('final');

});
