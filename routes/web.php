<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;
use \App\Http\Controllers\EnterpriseController;



Route::get('/', [EnterpriseController::class, 'listEnterprise']);