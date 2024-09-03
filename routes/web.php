<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/entradaBlogs', function () {
    return view('entradaBlogs');
});

Route::get('/ser', function () {
    $filePath = public_path('Final/ser.html'); // Ruta completa al archivo HTML
    if (File::exists($filePath)) {
        return response(File::get($filePath), 200)
            ->header('Content-Type', 'text/html');
    } else {
        abort(404); // Devuelve un error 404 si el archivo no existe
    }
});

Route::get('/tutores', function () {
    $filePath = public_path('Final/tutores.html'); // Ruta completa al archivo HTML
    if (File::exists($filePath)) {
        return response(File::get($filePath), 200)
            ->header('Content-Type', 'text/html');
    } else {
        abort(404); // Devuelve un error 404 si el archivo no existe
    }
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/proceso', function () {
    return view('proceso');
});

Route::get('/quienes', function () {
    return view('quienes');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/perfil_tutores', function () {
    return view('tutores.perfil_tutores');
});

Route::get('/carritovacio_page', function () {
    return view('procesoPago.carritovacio');
})->name('carritovacio_page');


Route::get('/carritolleno_page', function () {
    return view('procesoPago.carritolleno');
})->name('carritolleno_page');

Route::get('/carritometodo_page', function () {
    return view('procesoPago.metodoPago');
})->name('carritometodo_page');

Route::get('/confirmacionpago_page', function () {
    return view('procesoPago.confirmacionpago');
})->name('confirmacionpago_page');

Route::get('/legal', function () {
    return view('legal');
});





