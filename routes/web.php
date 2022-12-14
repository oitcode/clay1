<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/services/geotechnical_investigation', function () {
    return view('services-geotechnical-investigation');
})->name('services-geotechnical-investigation');

Route::get('/services/design_works', function () {
    return view('services-design-works');
})->name('services-design-works');

Route::get('/services/protection_works_design', function () {
    return view('services-protection-works-design');
})->name('services-protection-works-design');

Route::get('/services/slop_stability_analysis', function () {
    return view('services-slope-stability-analysis');
})->name('services-slope-stability-analysis');

Route::get('/services/topographical_survey', function () {
    return view('services-topographical-survey');
})->name('services-topographical-survey');

Route::get('/services/construction_supervision', function () {
    return view('services-construction-supervision');
})->name('services-construction-supervision');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
 *-----------------------------------------------------------------------------
 * Dashboard routes
 *-----------------------------------------------------------------------------
 *
 * Routes for the dashboard side of this application.
 *
 *
 */

/* Dashboard */
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/* Contact message */
Route::get('/dashboard/contact_message', function () {
    return 'COMING SOON';
})->name('dashboard-contact-message');
