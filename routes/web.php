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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return redirect()->route('panel.properties.index');
    //return view('dashboard');
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

Route::get('/faqs', [App\Http\Controllers\User\FaqController::class, 'index'])
    ->name('user.faq.index');




Route::get('/{property}', [App\Http\Controllers\User\HomeController::class, 'show'])->name('user.properties.show');

Route::get('/panel/statistics', [App\Http\Controllers\Panel\StatisticsController::class, 'index'])->name('panel.statistics.index');

Route::get('/panel/properties/pending', [App\Http\Controllers\Panel\PendingPropertiesController::class, 'index'])->name('panel.properties.pending.index');

Route::get('/panel/properties', [App\Http\Controllers\Panel\PropertiesController::class, 'index'])->name('panel.properties.index');

Route::get('/panel/properties/create', [App\Http\Controllers\Panel\PropertiesController::class, 'create'])->name('panel.properties.create');

Route::get('/panel/properties/create-old', [App\Http\Controllers\Panel\PropertiesController::class, 'create_old'])->name('panel.properties.create-old');

Route::post('/panel/properties/create', [App\Http\Controllers\Panel\PropertiesController::class, 'store'])->name('panel.properties.store');

Route::get('/panel/properties/{property}/edit', [App\Http\Controllers\Panel\PropertiesController::class, 'edit'])->name('panel.properties.edit');

Route::post('/panel/properties/{property}/edit', [App\Http\Controllers\Panel\PropertiesController::class, 'update'])->name('panel.properties.update');

Route::delete('/panel/properties/{property}/destroy', [App\Http\Controllers\Panel\PropertiesController::class, 'destroy'])->name('panel.properties.destroy');
