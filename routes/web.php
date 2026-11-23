<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MailController;

Route::get("/", [PublicController::class, "homepage"])->name("home");

Route::get("/contact-us", [MailController::class, "contact_us"])->name("contact_us");

Route::post("/send-email", [MailController::class, ("send_email")])->name("send_email");
