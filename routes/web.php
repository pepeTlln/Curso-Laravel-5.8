<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','InicioController@index');
Route::get('/verPermisos', 'PermisoController@index');
//Vista directa sin funciones ni controladores y pasando parámetros
Route::view ('/identidad','personal', ['nombre'=>'Pepe', 'apellidos'=>'Tallon Jimenez']);
//Otra forma de pasar parámetros es la siguiente:
Route::get ('/parametros/{nombre?}/{apellidos?}', 'PermisoController@create'); //Fijarse como se han pasado los parametros
//Podemos utilizar rutas con nombre para simplificar el acceso
Route::get ('/par', 'PermisoController@index')->name('miRuta');
//Rutas con expresiones regulares
Route::get('user/{name}', function ($name) {
    return view ('welcome'); //solo si nombre comienza por una letra
})->where('name', '[A-Za-z]+');


//Va en el programa no es ejemplo
//Route::get('admin/permiso', 'Admin/PermisoController1@index')->name('permiso');
Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function () {
    Route::get('permiso', 'PermisoController1@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController1@crear')->name('crear_permiso');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
});

