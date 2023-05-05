<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::group([
    'prefix' => "adminPanel",

], function () {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::get('/buses', [\App\Http\Controllers\Admin\BusController::class, 'showBuses'])->name('showBuses');
    Route::get('/buses/create', [\App\Http\Controllers\Admin\BusController::class, 'showBusCreate'])->name('showBusCreateForm');
    Route::post('/buses/create', [\App\Http\Controllers\Admin\BusController::class, 'createBus'])->name('createBus');
    Route::get('/buses/{$id}', [\App\Http\Controllers\Admin\BusController::class, 'showBusEdit'])->name('showBus');
    Route::post('/buses/create', [\App\Http\Controllers\Admin\BusController::class, 'editBus'])->name('editBus');


    Route::get('/busCompanies', [\App\Http\Controllers\Admin\CompanyController::class, 'showCompanies'])->name('showCompanies');
    Route::get('/busCompanies/create', [\App\Http\Controllers\Admin\CompanyController::class, 'showCompanyCreate'])->name('showCompanyCreate');
    Route::post('/busCompanies/create', [\App\Http\Controllers\Admin\CompanyController::class, 'createCompany'])->name('createCompany');
    Route::get('/busCompanies/{$id}', [\App\Http\Controllers\Admin\CompanyController::class, 'showCompanyEdit'])->name('showCompanyEdit');
    Route::post('/busCompanies/create', [\App\Http\Controllers\Admin\CompanyController::class, 'editCompany'])->name('editCompany');

    Route::get('/busStations', [\App\Http\Controllers\Admin\StationController::class, 'showStations'])->name('showStations');
    Route::get('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'showStationCreate'])->name('showStationCreate');
    Route::post('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'showStation'])->name('showStation');
    Route::get('/busStations/{$id}', [\App\Http\Controllers\Admin\StationController::class, 'showStationEdit'])->name('showStationEdit');
    Route::post('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'editStation'])->name('editStation');

    Route::get('/busStations', [\App\Http\Controllers\Admin\StationController::class, 'showStations'])->name('showStations');
    Route::get('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'showStationCreate'])->name('showStationCreate');
    Route::post('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'showStation'])->name('showStation');
    Route::get('/busStations/{$id}', [\App\Http\Controllers\Admin\StationController::class, 'showStationEdit'])->name('showStationEdit');
    Route::post('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'editStation'])->name('editStation');




});

Route::group([
    'prefix' => "stationPanel",

], function () {

    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::get('/buses', [\App\Http\Controllers\Admin\BusController::class, 'showBuses'])->name('showBuses');
    Route::get('/buses/create', [\App\Http\Controllers\Admin\BusController::class, 'showBusCreate'])->name('showBusCreateForm');
    Route::post('/buses/create', [\App\Http\Controllers\Admin\BusController::class, 'createBus'])->name('createBus');
    Route::get('/buses/{$id}', [\App\Http\Controllers\Admin\BusController::class, 'showBusEdit'])->name('showBus');
    Route::post('/buses/create', [\App\Http\Controllers\Admin\BusController::class, 'editBus'])->name('editBus');


    Route::get('/busCompanies', [\App\Http\Controllers\Admin\CompanyController::class, 'showCompanies'])->name('showCompanies');
    Route::get('/busCompanies/create', [\App\Http\Controllers\Admin\CompanyController::class, 'showCompanyCreate'])->name('showCompanyCreate');
    Route::post('/busCompanies/create', [\App\Http\Controllers\Admin\CompanyController::class, 'createCompany'])->name('createCompany');
    Route::get('/busCompanies/{$id}', [\App\Http\Controllers\Admin\CompanyController::class, 'showCompanyEdit'])->name('showCompanyEdit');
    Route::post('/busCompanies/create', [\App\Http\Controllers\Admin\CompanyController::class, 'editCompany'])->name('editCompany');

    Route::get('/busStations', [\App\Http\Controllers\Admin\StationController::class, 'showStations'])->name('showStations');
    Route::get('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'showStationCreate'])->name('showStationCreate');
    Route::post('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'showStation'])->name('showStation');
    Route::get('/busStations/{$id}', [\App\Http\Controllers\Admin\StationController::class, 'showStationEdit'])->name('showStationEdit');
    Route::post('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'editStation'])->name('editStation');

    Route::get('/busStations', [\App\Http\Controllers\Admin\StationController::class, 'showStations'])->name('showStations');
    Route::get('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'showStationCreate'])->name('showStationCreate');
    Route::post('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'showStation'])->name('showStation');
    Route::get('/busStations/{$id}', [\App\Http\Controllers\Admin\StationController::class, 'showStationEdit'])->name('showStationEdit');
    Route::post('/busStations/create', [\App\Http\Controllers\Admin\StationController::class, 'editStation'])->name('editStation');




});

Route::group([
    'prefix' => "companyPanel",

], function () {

    Route::get('/', [\App\Http\Controllers\Companies\HomeController::class, 'showHome'])->name('company.home');

    Route::get('/buses', [\App\Http\Controllers\Companies\BusController::class, 'showBuses'])->name('company.showBuses');
    Route::get('/buses/create', [\App\Http\Controllers\Companies\BusController::class, 'showBusCreate'])->name('company.showBusCreateForm');
    Route::post('/buses/create', [\App\Http\Controllers\Companies\BusController::class, 'createBus'])->name('company.createBus');
    Route::get('/buses/{id}', [\App\Http\Controllers\Companies\BusController::class, 'showBus'])->name('company.showBus');
    Route::post('/buses/create', [\App\Http\Controllers\Companies\BusController::class, 'editBus'])->name('company.editBus');



    Route::get('/busStations', [\App\Http\Controllers\Admin\StationController::class, 'showStations'])->name('company.showStations');
    Route::get('/busStations/{id}', [\App\Http\Controllers\Admin\StationController::class, 'showStationCreate'])->name('company.showStationForm');
    Route::post('/busStations/makeRequest', [\App\Http\Controllers\Admin\StationController::class, 'showStation'])->name('company.showStation');
    Route::post('/busStations/makeRequest', [\App\Http\Controllers\Admin\StationController::class, 'showStationEdit'])->name('company.showStationEdit');

    Route::get('/destinations', [\App\Http\Controllers\Admin\StationController::class, 'showStations'])->name('company.showDestinations');
    Route::get('/destinations/create', [\App\Http\Controllers\Admin\StationController::class, 'showStationCreate'])->name('company.showDestinationsForm');
    Route::post('/destinations/create', [\App\Http\Controllers\Admin\StationController::class, 'showStation'])->name('company.createDestination');
    Route::get('/destinations/{id}', [\App\Http\Controllers\Admin\StationController::class, 'showStationEdit'])->name('company.showDestination');
    Route::post('/destinations/{id}/edit', [\App\Http\Controllers\Admin\StationController::class, 'editStation'])->name('company.editDestination');

    Route::get('/courses', [\App\Http\Controllers\Admin\StationController::class, 'showStations'])->name('company.showCourses');
    Route::get('/courses/create', [\App\Http\Controllers\Admin\StationController::class, 'showStationCreate'])->name('company.showCoursesForm');
    Route::post('/courses/create', [\App\Http\Controllers\Admin\StationController::class, 'showStation'])->name('company.createCourses');
    Route::get('/courses/{id}', [\App\Http\Controllers\Admin\StationController::class, 'showStationEdit'])->name('company.showCourse');
    Route::post('/courses/{id}/edit', [\App\Http\Controllers\Admin\StationController::class, 'editStation'])->name('company.editCourse');




});



Route::get('/', [\App\Http\Controllers\Companies\HomeController::class, 'showHome'])->name('root');
