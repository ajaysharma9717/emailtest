<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\MailController;


Route::get('/',[MailController::class,'index']);
