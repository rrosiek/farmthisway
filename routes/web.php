<?php

use Illuminate\Support\Facades\Route;

Route::redirect('csa', 'csa/join', 301);

Route::get('csa/join', ['as' => 'csa.join', 'uses' => 'Page@csaJoin']);
Route::post('csa/join', ['as' => 'csa.join', 'uses' => 'Payment@storeCart']);
Route::get('csa/payment', ['as' => 'csa.payment', 'uses' => 'Payment@show']);
Route::post('csa/payment', ['as' => 'csa.payment', 'uses' => 'Payment@processPayment']);
Route::get('csa/thankyou', ['as' => 'csa.thankyou', 'uses' => 'Payment@thankyou']);

Route::get('contact', ['as' => 'contact', 'uses' => 'Contact@show']);
Route::post('contact', ['as' => 'contact', 'uses' => 'Contact@send']);

Route::get('privacy', ['as' => 'privacy', 'uses' => 'Page@privacy']);

Route::get('/', ['as' => 'home', 'uses' => 'Page@home']);