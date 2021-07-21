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

Route::get('/', function () {
    return view('index');
});


Route::group(['prefix'=>'frutas'], function(){
    Route::get('crearsolicitud', 'ProductoController@index');
});
/*
Route::get('/crearsolicitud', function () {
    return view('cliente_externo_views/crearsolicitud', 'ProductoControler@index');
});
*/

Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/procesoventalocal', function () {
    return view('procesoventalocal');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/sesion', function () {
    return view('sesion');
    
});


Route::get('registrocamion','pagecontroler@registrocamion');

Route::post('Agregartranporte','pagecontroler@crear')-> name('transpo.crear');  

Route::get('/menutransportista', function () {
    return view('menutransportista');
    
});

Route::get('/Agregartranporte', function () {
    return view('Agregartranporte');
    
});

// ruta de contacto
// Route::get('contacto','contactocontroler@regismensa');

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('contacto','pagecontroler@creado')-> name('mensa.creado');
 
// PRODUCTOR

Route::get('/productor', function () {
    return view('productor');
});

Route::post('productor','pagecontroler@creacion')-> name('promo.creacion');

Route::get('/clienteInterno', function () {
    return view('clienteInterno');
});
Route::get('clienteInterno','pagecontroler@regisproductor');

Route::get('/beneficios', function () {
    return view('beneficios');
});
Route::get('crearsolicitud', 'ProductoController@buscarFruta')->name('fruta.buscar');
Route::post('/', 'SolicitudController@crearSolicitud')->name('solicitud.crear');

Route::get('/perfilproductor', function () {
    return view('perfilproductor');
});

// TIPO DE USUARIOS PARA REGISTRO

Route::get('/registroUsuario', 'PagesController@regisUsu')->name('registroUsuarios');

Route::post('/', 'PagesController@crear')->name('registro.crear');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/menuinternacional', 'InternacionalController@index')->name('menuinternacional');
Route::get('/menuproductor', 'ProductorController@index')->name('menuproductor');
Route::get('/menutransportista', 'TransportistaController@index')->name('menutransportista');
Route::get('/menuconsultor', 'ConsultorController@index')->name('menuconsultor');

