<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/* Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
}); */


/* Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index'); */
/* Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::resource('/registro', App\Http\Controllers\RegistroController::class);
Route::resource('/record', App\Http\Controllers\RecordController::class);

Route::get('registronuevo/{cliente:id}', [App\Http\Controllers\RegistroNuevoController::class, 'show'])->name('registrocliente.show');
Route::get('registronuevo/conyugue/{cliente:id}', [App\Http\Controllers\RegistroNuevoController::class, 'createconyugue'])->name('registrocliente.createconyugue');
Route::post('registronuevo/conyugue/store/{cliente:id}', [App\Http\Controllers\RegistroNuevoController::class, 'storeconyugue'])->name('registrocliente.storeconyugue');
Route::get('registronuevo/dependiente/{cliente:id}', [App\Http\Controllers\RegistroNuevoController::class, 'createdependiente'])->name('registrocliente.createdependiente');
Route::post('registronuevo/dependiente/store/{cliente:id}', [App\Http\Controllers\RegistroNuevoController::class, 'storedependiente'])->name('registrocliente.storedependiente');

Route::get('recordnew/{cliente:id}', [App\Http\Controllers\RecordNewController::class, 'show'])->name('recordnew.show');
Route::get('recordnew/conyugue/{cliente:id}', [App\Http\Controllers\RecordNewController::class, 'createconyugue'])->name('recordnew.createconyugue');
Route::post('recordnew/conyugue/store/{cliente:id}', [App\Http\Controllers\RecordNewController::class, 'storeconyugue'])->name('recordnew.storeconyugue');
Route::get('recordnew/dependiente/{cliente:id}', [App\Http\Controllers\RecordNewController::class, 'createdependiente'])->name('recordnew.createdependiente');
Route::post('recordnew/dependiente/store/{cliente:id}', [App\Http\Controllers\RecordNewController::class, 'storedependiente'])->name('recordnew.storedependiente');

Route::get('finalizarregistro/{cliente:id}', [App\Http\Controllers\RegistroFinalizadoController::class, 'finalizar'])->name('finalizar.registro');

Route::middleware('auth')->group(function () {

    /* Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index'); */
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/about', fn () => Inertia::render('About'))->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/usuarios', App\Http\Controllers\UsuarioController::class);
    Route::resource('/clientes', App\Http\Controllers\ClienteController::class);
    Route::get('/conyugues', [App\Http\Controllers\ConyugueController::class, 'index'])->name('conyugues.index');
    Route::get('/dependientes', [App\Http\Controllers\DependienteController::class, 'index'])->name('dependientes.index');

    Route::get('/clientes-inactivos', [App\Http\Controllers\ClientinactivoController::class, 'index'])->name('clientinactivo.index');
    Route::get('/clientes-inactivos/{cliente:id}', [App\Http\Controllers\ClientinactivoController::class, 'active'])->name('clientinactivo.active');


    Route::get('clientenuevo/{cliente:id}', [App\Http\Controllers\ClienteNuevoController::class, 'show'])->name('nuevocliente.show');
    Route::get('clientenuevo/conyugue/{cliente:id}', [App\Http\Controllers\ClienteNuevoController::class, 'createconyugue'])->name('nuevocliente.createconyugue');
    Route::post('clientenuevo/conyugue/store/{cliente:id}', [App\Http\Controllers\ClienteNuevoController::class, 'storeconyugue'])->name('nuevocliente.storeconyugue');
    Route::get('clientenuevo/dependiente/{cliente:id}', [App\Http\Controllers\ClienteNuevoController::class, 'createdependiente'])->name('nuevocliente.createdependiente');
    Route::post('clientenuevo/dependiente/store/{cliente:id}', [App\Http\Controllers\ClienteNuevoController::class, 'storedependiente'])->name('nuevocliente.storedependiente');
    Route::get('nuevo/dependiente/{cliente:id}', [App\Http\Controllers\ClienteNuevoController::class, 'createdependiente2'])->name('nuevocliente.createdependiente2');
    Route::post('nuevo/dependiente/store/{cliente:id}', [App\Http\Controllers\ClienteNuevoController::class, 'storedependiente2'])->name('nuevocliente.storedependiente2');
    Route::get('nuevo/conyugue/{cliente:id}', [App\Http\Controllers\ClienteNuevoController::class, 'createconyugue2'])->name('nuevocliente.createconyugue2');
    Route::post('nuevo/conyugue/store/{cliente:id}', [App\Http\Controllers\ClienteNuevoController::class, 'storeconyugue2'])->name('nuevocliente.storeconyugue2');

    Route::get('edit/datos/cliente/{cliente:id}', [App\Http\Controllers\EditarClienteController::class, 'editdatos'])->name('editdatos.edit');
    Route::get('edit/finanzas/cliente/{cliente:id}', [App\Http\Controllers\EditarClienteController::class, 'editfinanzas'])->name('editfinanzas.edit');
    Route::get('edit/conyugue/cliente/{cliente:id}', [App\Http\Controllers\EditarClienteController::class, 'editconyugue'])->name('editconyugue.edit');


    Route::put('update/datos/cliente/{cliente:id}', [App\Http\Controllers\EditarClienteController::class, 'updatedatos'])->name('updatedatos.update');
    Route::put('update/finanzas/cliente/{cliente:id}', [App\Http\Controllers\EditarClienteController::class, 'updatefinanzas'])->name('updatefinanzas.update');
    Route::put('update/conyugue/cliente/{cliente:id}', [App\Http\Controllers\EditarClienteController::class, 'updateconyugue'])->name('updateconyugue.update');

    Route::delete('destroy/cliente/conyugue/{conyugue:id}', [App\Http\Controllers\EditarClienteController::class, 'destroyconyugue'])->name('destroyconyugue.destroy');

    Route::resource('/dependiente', App\Http\Controllers\DependientesController::class);

    Route::get('pdf/{cliente:id}', [App\Http\Controllers\Reportes\ReportClienteController::class, 'planillacliente'])->name('planillacliente.report');
    Route::get('finalizar/{cliente:id}', [App\Http\Controllers\FinalizarRegistroController::class, 'finalizar'])->name('finalizar');

    Route::get('excel', [App\Http\Controllers\Reportes\ExcelClienteController::class, 'excel'])->name('excel.report');

});

require __DIR__.'/auth.php';
