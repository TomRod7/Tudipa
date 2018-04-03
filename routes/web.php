<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'ProductController@test');
Route::get('/products/view/{id}', 'ProductController@view');
Route::get('/cursos', 'TestController@course');
Route::get('/ensena', 'EnsenaController@ensena');
Route::get('/faq', 'FaqController@faq');

Route::middleware('auth')->group(function () {
  // Estableciendo CRUD


    //Perfil de usuario
    Route::get('/user/profile', 'UserController@profile')->name('tu_perfil');
    Route::get('/user/profile/edit', 'UserController@edit');
    Route::put('/user/profile/edit', 'UserController@update');
    Route::post('/user/image', 'UserController@saveImage');

    // Carrito
    Route::get('/cart/add/{id}', 'CartController@add');
    Route::get('/cart/remove/{id}', 'CartController@remove');
    Route::get('/cart/view', 'CartController@view');
    Route::get('/cart/buy', 'CartController@buy');

    // Las peticiones GET las vamos a usar cuando querramos consultar informacion en la base de datos.
    // Las peticiones POST las vamos a usar cuando querramos insertar o actualizar informacion en la base de datos.
    Route::get('/products', 'ProductController@index'); // LISTADO. Esta ruta va a mostrar el listado de productos. Y editar un producto determinado o eliminarlo. Usando el metodo index

    Route::get('/products/create', 'ProductController@create'); // FORMULARIO. esta ruta va a permitir crear nuevos productos. Para que solo los administradores puedan hacerlo. Usando el metodo create.
    Route::post('/products', 'ProductController@store'); // REGISTRAR. Con este va a persistir en la base de datos.
    Route::get('/products/{id}/edit', 'ProductController@edit'); //Formulario de edicion
    Route::post('/products/{id}/edit', 'ProductController@update'); // Actualizar los datos
    Route::get('/products/bought', 'ProductController@bought'); // Cursos comprados

    Route::delete('/products/{id}', 'ProductController@destroy');

    // Gestionar imagenes

    Route::get('/products/{id}/images', 'ImageController@index');
    Route::post('/products/{id}/images', 'ImageController@store');
    Route::delete('/products/{id}/images', 'ImageController@destroy');
});
