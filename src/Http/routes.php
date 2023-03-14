<?php

use Likeweb\Core\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('core', [Controllers\CoreController::class, 'index']);
