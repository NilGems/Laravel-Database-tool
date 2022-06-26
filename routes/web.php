<?php

use Illuminate\Support\Facades\Route;
use Nilgems\Datatools\Http\Controllers\PhpMyAdminController;

Route::get('phpmyadmin', [PhpMyAdminController::class, '__invoke']);