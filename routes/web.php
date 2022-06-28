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

Route::get('/propiedades3', [App\Http\Controllers\User\PropertiesController::class, 'index3'])->name('user.properties.index3');

Route::get('/propiedades/filtrar', [App\Http\Controllers\User\PropertiesController::class, 'filter'])->name('user.properties.filter.index');

Route::get('/{property}', [App\Http\Controllers\User\PropertiesController::class, 'show'])->name('user.properties.show');

Route::post('propiedad/{property}/solicitar-informacion', [App\Http\Controllers\User\InfoRequestController::class, 'store'])->name('user.request_info.store');

/*
|--------------------------------------------------------------------------
| Proyectos - Usuario
|--------------------------------------------------------------------------
*/

Route::get('/proyectos/med-pigp', [App\Http\Controllers\User\Projects\PIGPController::class, 'loader'])->name('user.projects.pigp.loader');

Route::get('/proyectos/pigp', [App\Http\Controllers\User\Projects\PIGPController::class, 'index'])->name('user.projects.pigp.index');

Route::get('/proyectos/plan-rector', [App\Http\Controllers\User\Projects\PlanRectorController::class, 'index'])->name('user.projects.rector.index');

Route::get('/proyectos/plan-rector/proyectos', [App\Http\Controllers\User\Projects\PlanRectorController::class, 'show'])->name('user.projects.rector.show');

/*
|--------------------------------------------------------------------------
| Estadísticas - Panel
|--------------------------------------------------------------------------
*/

Route::get('/panel/statistics', [App\Http\Controllers\Panel\StatisticsController::class, 'index'])->name('panel.statistics.index');

Route::get('/panel/statistics/2', [App\Http\Controllers\Panel\StatisticsController::class, 'index2'])->name('panel.statistics.index2');

Route::get('/panel/statistics/3', [App\Http\Controllers\Panel\StatisticsController::class, 'index3'])->name('panel.statistics.index3');

/*
|--------------------------------------------------------------------------
| Estadísticas - Propiedades
|--------------------------------------------------------------------------
*/

Route::get('/panel/properties/pending', [App\Http\Controllers\Panel\PendingPropertiesController::class, 'index'])->name('panel.properties.pending.index');

Route::get('/panel/properties', [App\Http\Controllers\Panel\PropertiesController::class, 'index'])->name('panel.properties.index');

Route::get('/panel/properties/create', [App\Http\Controllers\Panel\PropertiesController::class, 'create'])->name('panel.properties.create');

Route::get('/panel/properties/create-old', [App\Http\Controllers\Panel\PropertiesController::class, 'create_old'])->name('panel.properties.create-old');

Route::post('/panel/properties/create', [App\Http\Controllers\Panel\PropertiesController::class, 'store'])->name('panel.properties.store');

Route::get('/panel/properties/{property}/edit', [App\Http\Controllers\Panel\PropertiesController::class, 'edit'])->name('panel.properties.edit');


#Imágenes
Route::get('/panel/properties/images/{property}', [App\Http\Controllers\Panel\Properties\ImagesController::class, 'index'])->name('panel.properties.images.index');

Route::post('/panel/properties/images/{property}', [App\Http\Controllers\Panel\Properties\ImagesController::class, 'store'])->name('panel.properties.images.store');

Route::post('/panel/images/featured', [App\Http\Controllers\Panel\Properties\ImagesController::class, 'update'])->name('panel.images.featured.update');

Route::post('/panel/images/featured/delete', [App\Http\Controllers\Panel\Properties\ImagesController::class, 'destroy'])->name('panel.images.featured.destroy');

#Archivos
Route::get('/panel/properties/files/{property}', [App\Http\Controllers\Panel\Properties\FilesController::class, 'index'])->name('panel.properties.files.index');

Route::post('/panel/properties/files/{property}', [App\Http\Controllers\Panel\Properties\FilesController::class, 'store'])->name('panel.properties.files.store');

Route::post('/panel/file/delete', [App\Http\Controllers\Panel\Properties\FilesController::class, 'destroy'])->name('panel.file.destroy');

#Venta de oportunidad
Route::get('/panel/properties/opportunity/{property}', [App\Http\Controllers\Panel\Properties\OpportunityController::class, 'index'])->name('panel.properties.opportunity.index');

Route::get('/panel/properties/opportunity/{property}/edit', [App\Http\Controllers\Panel\Properties\OpportunityController::class, 'edit'])->name('panel.properties.opportunity.edit');

Route::post('/panel/properties/opportunity/{property}/edit', [App\Http\Controllers\Panel\Properties\OpportunityController::class, 'update'])->name('panel.properties.opportunity.update');


Route::post('/panel/file/delete', [App\Http\Controllers\Panel\Properties\FilesController::class, 'destroy'])->name('panel.file.destroy');

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

Route::post('/panel/users', [App\Http\Controllers\Panel\Users\UserController::class, 'update'])->name('panel.users.update');

Route::get('/panel/users/{user}', [App\Http\Controllers\Panel\Users\UserController::class, 'show'])->name('panel.users.show');

Route::get('/panel/collaborators', [App\Http\Controllers\Panel\Users\CollaboratorsController::class, 'index'])->name('panel.users.collaborators.index');

/*
|--------------------------------------------------------------------------
| Roles - Panel
|--------------------------------------------------------------------------
*/

Route::get('/panel/roles', [App\Http\Controllers\Panel\Users\RoleController::class, 'index'])->name('panel.roles.index');

Route::post('/panel/roles/create', [App\Http\Controllers\Panel\Users\RoleController::class, 'store'])->name('panel.roles.store');

Route::get('/panel/roles/{role}/users', [App\Http\Controllers\Panel\Users\RoleController::class, 'show'])->name('panel.roles.users.show');

Route::get('/panel/roles/{role}/users/edit', [App\Http\Controllers\Panel\Users\RoleController::class, 'edit'])->name('panel.roles.users.edit');

Route::post('/panel/roles/{role}/users/edit', [App\Http\Controllers\Panel\Users\RoleController::class, 'update'])->name('panel.roles.users.update');

/*
|--------------------------------------------------------------------------
| Permisos - Panel
|--------------------------------------------------------------------------
*/

Route::get('/panel/permissions', [App\Http\Controllers\Panel\Users\PermissionsController::class, 'index'])->name('panel.permissions.index');

Route::post('/panel/permissions/create', [App\Http\Controllers\Panel\Users\PermissionsController::class, 'store'])->name('panel.permissions.store');

// Route::get('/panel/permissions/{role}/users', [App\Http\Controllers\Panel\Users\PermissionsController::class, 'show'])->name('panel.permissions.users.show');

// Route::get('/panel/permissions/{role}/users/edit', [App\Http\Controllers\Panel\Users\PermissionsController::class, 'edit'])->name('panel.permissions.users.edit');

// Route::post('/panel/permissions/{role}/users/edit', [App\Http\Controllers\Panel\Users\PermissionsController::class, 'update'])->name('panel.permissions.users.update');

/*
|--------------------------------------------------------------------------
| Roles + Permisos - Panel
|--------------------------------------------------------------------------
*/

Route::get('/panel/roles/{role}/permissions', [App\Http\Controllers\Panel\Users\RolePermissionsController::class, 'index'])->name('panel.role.permissions.index');

Route::post('/panel/roles/{role}/permissions', [App\Http\Controllers\Panel\Users\RolePermissionsController::class, 'store'])->name('panel.role.permissions.store');





/*
|--------------------------------------------------------------------------
| Auditorías - Panel
|--------------------------------------------------------------------------
*/

Route::get('/panel/audits', [App\Http\Controllers\Panel\Users\AuditsController::class, 'index'])->name('panel.users.audits.index');

Route::get('/panel/audits/property/{property}', [App\Http\Controllers\Panel\Base\AuditsController::class, 'show'])->name('panel.audits.property.show');

Route::get('/panel/audits/{user}', [App\Http\Controllers\Panel\Base\AuditsController::class, 'index'])->name('panel.audits.index');