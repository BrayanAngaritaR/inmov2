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

//Revisar para comprimir los archivos:

//https://stackoverflow.com/questions/60987289/ghostscript-pdf-file-compression-using-phps-exec-laravel-on-docker

//Encontrar lugares cerca:

//https://www.tutsmake.com/laravel-8-find-nearest-location-by-latitude-and-longitude

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return redirect()->route('user.index');
    //return redirect()->route('panel.properties.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//https://uniwebsidad.com/libros/jobeet-1-4/capitulo-22/guardando-formularios-en-la-cache


/*
|--------------------------------------------------------------------------
| Rutas informativas 
|--------------------------------------------------------------------------
*/

Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])
    ->name('user.index');

Route::get('/nosotros', [App\Http\Controllers\User\AboutController::class, 'index'])
    ->name('user.about.index');

Route::get('/contacto', [App\Http\Controllers\User\ContactController::class, 'index'])
    ->name('user.contact.index');

Route::post('/contacto', [App\Http\Controllers\User\ContactController::class, 'store'])
    ->name('user.contact.store');

Route::get('/faqs', [App\Http\Controllers\User\FaqController::class, 'index'])
    ->name('user.faq.index');

Route::view('/calculadora', 'templates.agencia-app.soon')
    ->name('user.soon.index');

/*
|--------------------------------------------------------------------------
| Bienes inmuebles - Usuario
|--------------------------------------------------------------------------
*/

Route::get('/propiedades', [App\Http\Controllers\User\PropertiesController::class, 'index'])->name('user.properties.index');

Route::get('/{property}', [App\Http\Controllers\User\PropertiesController::class, 'show'])->name('user.properties.show');

Route::post('propiedad/{property}/solicitar-informacion', [App\Http\Controllers\User\InfoRequestController::class, 'store'])->name('user.request_info.store');


/*
|--------------------------------------------------------------------------
| Estadísticas - Panel
|--------------------------------------------------------------------------
*/

Route::get('/panel/statistics', [App\Http\Controllers\Panel\StatisticsController::class, 'index'])->name('panel.statistics.index');

Route::get('/panel/properties/pending', [App\Http\Controllers\Panel\PendingPropertiesController::class, 'index'])->name('panel.properties.pending.index');

Route::get('/panel/properties', [App\Http\Controllers\Panel\PropertiesController::class, 'index'])->name('panel.properties.index');

Route::get('/panel/properties/create', [App\Http\Controllers\Panel\PropertiesController::class, 'create'])->name('panel.properties.create');

Route::get('/panel/properties/create-old', [App\Http\Controllers\Panel\PropertiesController::class, 'create_old'])->name('panel.properties.create-old');

Route::post('/panel/properties/create', [App\Http\Controllers\Panel\PropertiesController::class, 'store'])->name('panel.properties.store');

Route::get('/panel/properties/{property}/edit', [App\Http\Controllers\Panel\PropertiesController::class, 'edit'])->name('panel.properties.edit');

//Actualizar la información de los TABS
Route::post('/panel/properties/{property}/update-identification', [App\Http\Controllers\Panel\PropertiesController::class, 'update_identification'])->name('panel.properties.update.identification');

Route::post('/panel/properties/{property}/update-cadastral', [App\Http\Controllers\Panel\PropertiesController::class, 'update_cadastral'])->name('panel.properties.update.cadastral');

Route::post('/panel/properties/{property}/update-normative', [App\Http\Controllers\Panel\PropertiesController::class, 'update_normative'])->name('panel.properties.update.normative');

Route::post('/panel/properties/{property}/update-documental', [App\Http\Controllers\Panel\PropertiesController::class, 'update_documental'])->name('panel.properties.update.documental');

Route::post('/panel/properties/{property}/update-analysis', [App\Http\Controllers\Panel\PropertiesController::class, 'update_analysis'])->name('panel.properties.update.analysis');

Route::post('/panel/properties/{property}/update', [App\Http\Controllers\Panel\PropertiesController::class, 'update'])->name('panel.properties.update');

Route::delete('/panel/properties/{property}/destroy', [App\Http\Controllers\Panel\PropertiesController::class, 'destroy'])->name('panel.properties.destroy');


/*
|--------------------------------------------------------------------------
| Solicitudes - Panel
|--------------------------------------------------------------------------
*/

Route::get('/panel/requests', [App\Http\Controllers\Panel\Info\InfoRequestController::class, 'index'])->name('panel.requests.index');

//Peticiones dinámicas mediante AJAX

Route::get('/panel/actions/{opportunity_id}', [App\Http\Controllers\Panel\Utils\ActionController::class, 'index'])->name('panel.actions.get.index');

Route::get('/panel/districts/{commune_id}', [App\Http\Controllers\Panel\Utils\DistrictController::class, 'index'])->name('panel.districts.get.index');

/*
|--------------------------------------------------------------------------
| Usuarios - Panel
|--------------------------------------------------------------------------
*/

Route::get('/panel/users', [App\Http\Controllers\Panel\Users\UserController::class, 'index'])->name('panel.users.index');

Route::get('/panel/collaborators', [App\Http\Controllers\Panel\Users\CollaboratorsController::class, 'index'])->name('panel.users.collaborators.index');
