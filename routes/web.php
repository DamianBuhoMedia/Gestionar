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
*/

Route::get('/')->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clientes-potenciales', 'PotencialController@index')->name('clientes-potenciales');
Route::get('/clientes-potenciales-add', 'PotencialController@create')->name('clientes-potenciales-add');
Route::get('clientes-potenciales/{id}', 'PotencialController@edit')->name('potenciales.edit');

Route::post('/clientes-potenciales-add', 'PotencialController@store')->name('CreatePotencial');

Route::patch('clientes-potenciales/{id}', 'PotencialController@update')->name('potenciales.update');
Route::patch('clientes-pontenciales/{id}' , 'PotencialController@convert')->name('potenciales.convert');

Route::delete('clientes-potenciales/{id}', 'PotencialController@destroy')->name('potenciales.destroy');




// Clientes RouteServiceProvider

Route::get('/clientes', 'ClienteController@index')->name('clientes.index');
Route::get('/clientes/add', 'ClienteController@create')->name('clientes.create');

Route::post('/clientes', 'ClienteController@store')->name('clientes.store');

Route::get('/clientes/{id}','ClienteController@edit')->name('clientes.edit');
Route::patch('/clientes/{id}','ClienteController@update')->name('clientes.update');

Route::delete('/clientes/{id}','ClienteController@destroy')->name('clientes.destroy');


// Proveedores RouteServiceProvider

Route::get('/proveedores', 'ProveedorController@index')->name('proveedores.index');
Route::get('/proveedores/add', 'ProveedorController@create')->name('proveedores.create');

Route::post('/proveedores', 'ProveedorController@store')->name('proveedores.store');

Route::get('/proveedores/{id}','ProveedorController@edit')->name('proveedores.edit');
Route::patch('/proveedores/{id}','ProveedorController@update')->name('proveedores.update');

Route::delete('/proveedores/{id}','ProveedorController@destroy')->name('proveedores.destroy');


// Servicios RouteServiceProvider

Route::get('/servicios', 'ServicioController@index')->name('servicios.index');
Route::get('/servicios/add', 'ServicioController@create')->name('servicios.create');

Route::post('/servicios', 'ServicioController@store')->name('servicios.store');

Route::get('/servicios/{id}','ServicioController@edit')->name('servicios.edit');
Route::patch('/servicios/{id}','ServicioController@update')->name('servicios.update');

Route::delete('/servicios/{id}','ServicioController@destroy')->name('servicios.destroy');


// Servicios Contratados RouteServiceProvider

Route::get('/servicioscontratados', 'ServicioContratadoController@index')->name('servicioscontratados.index');
Route::get('/servicioscontratados/add', 'ServicioContratadoController@create')->name('servicioscontratados.create');

Route::post('/servicioscontratados', 'ServicioContratadoController@store')->name('servicioscontratados.store');

Route::get('/servicioscontratados/{id}','ServicioContratadoController@edit')->name('servicioscontratados.edit');
Route::patch('/servicioscontratados/{id}','ServicioContratadoController@update')->name('servicioscontratados.update');

Route::delete('/servicioscontratados/{id}','ServicioContratadoController@destroy')->name('servicioscontratados.destroy');


// Subservicios
Route::get('/subservicios', 'SubservicioController@index')->name('subservicios.index');
Route::get('/subservicios/add', 'SubservicioController@create')->name('subservicios.create');

Route::post('/subservicios', 'SubservicioController@store')->name('subservicios.store');

Route::get('/subservicios/{id}','SubservicioController@edit')->name('subservicios.edit');
Route::patch('/subservicios/{id}','SubservicioController@update')->name('subservicios.update');

Route::delete('/subservicios/{id}','SubservicioController@destroy')->name('subservicios.destroy');



//Notas
Route::post('/notas', 'NotaController@store')->name('notas.store');
Route::delete('/notas/{id}', 'NotaController@destroy')->name('notas.destroy');

//Agenda

Route::get('/agenda','AgendaController@index')->name('agenda.index');


/*obtiene lista de clientes/ prospectos*/
Route::Get('getsubservicio/{id}', 'SubservicioController@getsubservicio');


Route::get('/productores','ProductorController@index')->name('productores');
Route::get('/productoresAdd','ProductorController@create')->name('producoresAdd');
Route::get('/productores/{id}','ProductorController@edit')->name('productores.edit');

Route::patch('/productores/{id}','ProductorController@update')->name('productores.update');

Route::delete('/productores/{id}', 'ProductorController@destroy')->name('productores.destroy');

Route::post('/productoresAdd','ProductorController@store')->name('CreateProductor');

Route::get('/auth0/login', function() {
        $domain = env('AUTH0_DOMAIN');
        $clientId = env('AUTH0_CLIENT_ID');
        $redirectUri = env('AUTH0_CALLBACK_URL');
        $authorizeUrl = sprintf(
            'https://%s/authorize?scope=openid&client_id=%s&response_type=code&redirect_uri=%s',
            $domain,
            $clientId,
            $redirectUri);
        return redirect($authorizeUrl);
    });


// IMPRIME
Route::get('printquote/{id}', 'HomeController@printquote')->name('printquote');



// crea presupuestos
Route::get('quotes', 'QuotesController@index')->name('quote.index');
Route::get('indexapproved', 'QuotesController@indexapproved')->name('quote.indexapproved');
Route::get('quoteadd', 'QuotesController@create')->name('quote.create');
Route::get('quoteedit/{id}', 'QuotesController@edit')->name('quote.edit');
Route::get('quoteshow/{id}', 'QuotesController@show')->name('quote.show');
Route::post('/quotestore', 'QuotesController@store')->name('quote.store');
Route::patch('/quotestore/{id}','QuotesController@update')->name('quote.update');
Route::get('createfc/{id}', 'QuotesController@createfc')->name('createfc');

// crea pago
Route::get('/payment/{id}/{etapa}', 'PaymentController@create')->name('payment.create');
Route::get('/paymentedit/{id}/{etapa}', 'PaymentController@edit')->name('payment.edit');
Route::patch('/paymenteupdate/{id}/{etapa}', 'PaymentController@update')->name('payment.update');
Route::post('paymentstore/','PaymentController@store')->name('payment.store');




Route::get("/page", function(){
   return View::make("pdfs.quote");
});
