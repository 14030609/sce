<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuarios;
use App\Rol;
use App\Talleres;
use App\UsuariosRol;
use App\Alumnos;
use DB;

class TalleresController extends Controller
{
     public function index() {
              $talleres = DB::table('talleres')
            ->get();
 

            return view('Talleres.show',compact('payments','talleres')) ;
        }

        public function store(Request $request)
        {

           DB::table('talleres')->insert(
        ['cvetaller' => $request->cvetaller,'nombre' => $request->nombre,'instructor' => $request->instructor,'horario' => $request->horario,'lugar' => $request->lugar,'cupo' => $request->cupo,'requisitos' => $request->requisitos]);


        return redirect('/Talleres');
    }
    public function create()
    {
        $category=Rol::pluck('id_rol','rol');

        return view('Talleres.create',compact('category'));
        //return view('Producto.create');
    }
    public function edit($id)
    {
        $payment =Talleres::where('cvetaller',$id)->get();
        $payment=$payment[0];
        return view('Talleres.edit',compact('payment'));
    }
    public function update(Request $request)
    {
        $taller = Talleres::where('cvetaller',$request->cvetaller)->update(['nombre'=>$request->nombre,'instructor'=>$request->instructor,'horario'=>$request->horario,'lugar'=>$request->lugar,'cupo'=>$request->cupo,'requisitos'=>$request->requisitos]);
        return redirect('/Talleres');
    }
    public function delete($id)
    {
        print_r($id);
        $rol=DB::select("select r.rol from usuarios_rol ur inner join rol r on r.id_rol=ur.id_rol where ur.email='".$id."'");
        echo '<pre>';
        print_r($rol);

        foreach ($rol as $key => $value) {

            foreach ($value as $key => $value) {
//            print_r($value);
                if ($value=='Alumno')
                {
                    print_r('si es alumno');
                    $metodo =Alumnos::where('email',$id);
                    $metodo->delete();  
                }else
                {
                    if ($value=='Docente')
                    {
                        $metodo =Maestros::where('email',$id);
                        $metodo->delete();  

                        print_r('si es docente');
                    }else
                    {
                        if ($value=='Administrador')
                        {
                            print_r('si es Administrador');
                        }
                    }
                }


            }
        }
  

        $metodo =UsuariosRol::where('email',$id);
        $metodo->delete();

        $metodo =Usuarios::where('email',$id);
        $metodo->delete();  

        return redirect()->back();

    }

    public function search(Request $request){
        $payments = Usuarios::where('nombre','like','%'.$request->nombre.'%')->get();
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
