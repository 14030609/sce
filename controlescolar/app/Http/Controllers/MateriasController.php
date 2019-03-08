<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Materias;
use App\Rol;
use App\Especialidad;

use App\UsuariosRol;
use DB;

class MateriasController extends Controller
{
     public function index() {

  $materias = DB::table('materias')
            ->get();  

        return view('Materias.show',compact('payments','materias')) ;
    }
    public function store(Request $request)
    {

       DB::table('materias')->insert(
    ['cvemat' => $request->cvemat,'nombre' => $request->nombre,'creditos' => $request->creditos,'horasprofesor' => $request->horasprofesor,'horasautonomo' => $request->horasautonomo,'semestre' => $request->semestre]);
       

        return redirect('/Materias');
    }
    public function create()
    {
        $category=Especialidad::pluck('cveesp','descripcion');

        return view('Materias.create',compact('category'));
        //return view('Producto.create');
    }
    public function edit($id)
    {


        $payment =Materias::where('cvemat',$id)->get();
     $payment=$payment[0];
         
        return view('Materias.edit',compact('payment'));
    }
    public function update(Request $request)
    {

        $materia = Materias::where('cvemat',$request->cvemat)->update([ 'nombre'=>$request->nombre,'creditos'=>$request->creditos,'horasprofesor'=>$request->horasprofesor,'horasautonomo'=>$request->horasautonomo,'semestre'=>$request->semestre]);
        return redirect('/Materias');
    }
    public function delete($id)
    {
        $metodo =Materias::where('cvemat',$id);
        $metodo->delete();

        return redirect()->back();

    }

    public function search(Request $request){
        $payments = Producto::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }

    public function serviceWeb()
    {
        $producto=Producto::all();
        return response()->json($producto);
    }


    public function serviceWebid( int $id)
    {
        $producto=DB::select('select * from Producto where id_Producto='.$id);
        return response()->json($producto);
    }

}
