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


use App\Materias;

Route::get('/', function () {
    return view('plantilla');
});

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/AlumnoPage', function () {
    return view('AlumnoPage');
});

Route::get('/Stanford', function () {
    return view('stanford');
});


Route::get('/admision', function () {
    return view('proceso_admision');
});


Route::get('/search','UsuariosController@search');

Route::get('/login', function () {
    return view('/Login/login');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/gallery', function () {
    return view('gallery');
});


Route::resource('Usuarios','UsuariosController') ;
Route::post('/Usuarios/search', ['as' => '/Usuarios/search', 'uses'=>'UsuariosController@search']);
Route::get('/Usuarios/delete/{email}', ['as' => '/Usuarios/delete', 'uses'=>'UsuariosController@delete']);
Route::get('/Usuarios/edit', ['as' => '/Usuarios/edit', 'uses'=>'UsuariosController@edit']);

Route::get ( '/materias', function () {
    //$data = Data::all ();

    $data=DB::select("select * from materias");

    return view ( 'materias' )->withData ( $data );
} );

Route::post ( '/editItem', function (Request $request) {
	
	$rules = array (
			'nombre' => 'required|alpha',
			'creditos' => 'required|alpha',
			'horasprofesor' => 'required|email',
			'horasautonomo' => 'required',
			'semestre' => 'required|regex:/^[\pL\s\-]+$/u'
	);
	$validator = Validator::make ( Input::all (), $rules );
	if ($validator->fails ())
		return Response::json ( array (
				
				'errors' => $validator->getMessageBag ()->toArray () 
		) );
	else {
		
/*		$data = Materias::find ( $request->cvemat );
		$data->nombre = ($request->nombre);
		$data->creditos = ($request->creditos);
		$data->horasprofesor = ($request->horasprofesor);
		$data->horasautonomo = ($request->horasautonomo);
		$data->semestre = ($request->semestre);

*/
        $data = Materias::where('cvemat',$request->cvemat)->update(
            ['nombre'=>$request->nombre,
                'horasprofesor'=>$request->horasprofesor,
                'horasautonomo'=>$request->horasautonomo,
                'semestre'=>$request->semestre]);


$data->save ();
		return response ()->json ( $data );
	}
} );



Route::post ( '/deleteItem', function (Request $request) {
   Materias::find ( $request->cvemat)->delete ();

  //  $metodo =Materias::where('cvemat',$request->cvemat);
    //$metodo->delete();
    return response ()->json ();


} );





Route::resource('Maestros','MaestrosController') ;
Route::post('/Maestros/search', ['as' => '/Maestros/search', 'uses'=>'MaestrosController@search']);
Route::get('/Maestros/delete/{email}', ['as' => '/Maestros/delete', 'uses'=>'MaestrosController@delete']);
Route::get('/Maestros/edit', ['as' => '/Maestros/edit', 'uses'=>'MaestrosController@edit']);

Route::resource('Alumnos','AlumnosController') ;


Route::post('/Alumnos/search', ['as' => '/Alumnos/search', 'uses'=>'AlumnosController@search']);
Route::get('/Alumnos/delete/{email}', ['as' => '/Alumnos/delete', 'uses'=>'AlumnosController@delete']);
Route::get('/Alumnos/edit', ['as' => '/Alumnos/edit', 'uses'=>'AlumnosController@edit']);
Route::get('/Alumnos/cargaMaterias/{nua}', ['as' => '/Alumnos/cargaMaterias', 'uses'=>'AlumnosController@cargaMaterias']);

//Route::post('/Alumnos/installer', ['as' => '/Alumnos/installer', 'uses'=>'AlumnosController@installer']);
Route::get('/Alumnos/installer', ['as' => 'Alumnos.installer', 'uses'=>'AlumnosController@installer']);



Route::resource('Materias','MateriasController') ;
Route::post('/Materias/search', ['as' => '/Materias/search', 'uses'=>'MateriasController@search']);
Route::get('/Materias/delete/{email}', ['as' => '/Materias/delete', 'uses'=>'MateriasController@delete']);
Route::get('/Materias/edit', ['as' => '/Materias/edit', 'uses'=>'MateriasController@edit']);


Route::get ( '/welcome2', function () {
    //$data = Data::all ();

    $data=DB::select("select cvemat, nombre from materias");

    return view ( 'welcome2' )->withData ( $data );
} );


Route::resource('Grupos','GruposController') ;
Route::post('/Grupos/search', ['as' => '/Grupos/search', 'uses'=>'GruposController@search']);
Route::get('/Grupos/delete/{cvemat}/{nogpo}', ['as' => '/Grupos/delete', 'uses'=>'GruposController@delete']);
Route::get('/Grupos/edit', ['as' => '/Grupos/edit', 'uses'=>'GruposController@edit']);
Route::get('/Grupos/createGrupo', ['as' => '/Grupos/createGrupo', 'uses'=>'GruposController@createGrupo']);

Route::resource('Listas','ListasController') ;
Route::post('/Listas/search', ['as' => '/Listas/search', 'uses'=>'ListasController@search']);
Route::get('/Listas/delete/{email}', ['as' => '/Listas/delete', 'uses'=>'ListasController@delete']);
Route::get('/Listas/edit', ['as' => '/Listas/edit', 'uses'=>'ListasController@edit']);

Route::resource('Especialidad','EspecialidadController') ;
Route::post('/Especialidad/search', ['as' => '/Especialidad/search', 'uses'=>'EspecialidadController@search']);
Route::get('/Especialidad/delete/{email}', ['as' => '/Especialidad/delete', 'uses'=>'EspecialidadController@delete']);
Route::get('/Especialidad/edit', ['as' => '/Especialidad/edit', 'uses'=>'EspecialidadController@edit']);

Route::resource('Talleres','TalleresController') ;
Route::post('/Talleres/search', ['as' => '/Talleres/search', 'uses'=>'TalleresController@search']);
Route::get('/Talleres/delete/{email}', ['as' => '/Talleres/delete', 'uses'=>'TalleresController@delete']);
Route::get('/Talleres/edit', ['as' => '/Talleres/edit', 'uses'=>'TalleresController@edit']);
