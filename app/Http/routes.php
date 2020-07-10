<?php
 
Route::get('/', function(){
	return view('welcome');
});


Route::group(['middleware' => ['web']], function(){
	Route::auth();
	Route::get('/home', 'HomeController@index');
});  

Route::get('admin/panel', [
	'middleware' => 'admin', function () {
},
    'uses' => 'AdminController@index'
])->middleware('auth');
 
 Route::get('usuarios', [
    'uses' => 'UsuarioController@index',
    'as' => 'usuarios.index'
])->middleware('auth'); 

Route::get('usuarios/nuevo', [
    'uses' => 'UsuarioController@nuevoForm',
    'as' => 'usuarios.nuevoForm'
])->middleware('auth');
Route::post('usuarios/nuevo', [
    'uses' => 'UsuarioController@nuevo',
    'as' => 'usuarios.nuevo'
])->middleware('auth');

Route::get('usuarios/{id}/editar', [
    'uses' => 'UsuarioController@editarForm',
    'as' => 'usuarios.editarForm'
])->middleware('auth');

Route::put('usuarios/{id}/editar', [
    'uses' => 'UsuarioController@editar',
    'as' => 'usuarios.editar'
])->middleware('auth');

Route::delete('usuarios/{id}/eliminar', [
    'uses' => 'UsuarioController@eliminar',
    'as' => 'usuarios.eliminar'
])->where('id', '\d+')->middleware('auth');

Route::get('confesiones', [
    'uses' => 'ConfesionController@index',
    'as' => 'confesiones.index'
])->middleware('auth');

Route::get('confesiones/nuevo', [
    'uses' => 'ConfesionController@nuevoForm',
    'as' => 'confesiones.nuevoForm'
])->middleware('auth');

Route::get('confesiones/mias', [
    'uses' => 'ConfesionController@mias',
    'as' => 'confesiones.mias'
])->middleware('auth');

Route::post('confesiones/nuevo', [
    'uses' => 'ConfesionController@nuevo',
    'as' => 'confesiones.nuevo'
])->middleware('auth');

Route::get('confesiones/{id}/editar', [
    'uses' => 'ConfesionController@editarForm',
    'as' => 'confesiones.editarForm'
])->middleware('auth');

Route::put('confesiones/{id}/editar', [
    'uses' => 'ConfesionController@editar',
    'as' => 'confesiones.editar'
])->middleware('auth');

Route::delete('confesiones/{id}/eliminar', [
    'uses' => 'ConfesionController@eliminar',
    'as' => 'confesiones.eliminar'
])->where('id', '\d+')->middleware('auth');
