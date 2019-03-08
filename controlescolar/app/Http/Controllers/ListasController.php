<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuarios;
use App\Rol;
use App\Especialidad;
use App\UsuariosRol;
use App\Alumnos;
use DB;

class ListasController extends Controller
{
     public function index() {
 		 $listas = DB::table('Alumnos')
            ->get();  
            return view('Listas.show',compact('payments','listas')) ;
        }
        public function store(Request $request)
        {
    //        $payment = new Usuarios();
       //     $payment->create($request->all());

           DB::table('usuarios')->insert(
        ['email' => $request->email,'contrasenia' => $request->contrasenia,'nombre' => $request->nombre,'curp' => $request->curp,'sexo' => $request->sexo,'direccion' => $request->direccion,'telefono' => $request->telefono]);

    //        $producto=Usuarios::all()->last();
           DB::table('usuarios_rol')->insert(
        ['email' => $request->email,'id_rol' => $request->id_rol]);

           $email=$request->email;
 
    
            if ($request->id_rol == 1) 
             {
               echo 'Administrador'; 
                 return view('Usuarios.index');
                }  
            else
            if ($request->id_rol == 2) 
            {
                 return view('Maestros.create',compact('email'));
            }
            else
        {
            echo 'Alumnos';
            $category=Especialidad::pluck('cveesp','descripcion');       
            return view('Alumnos.create',compact('category','email'));
        }

//        return redirect('/Usuarios');
    }
    public function create()
    {
        $category=Rol::pluck('id_rol','rol');

        return view('Usuarios.create',compact('category'));
        //return view('Producto.create');
    }
    public function edit($id)
    {
        $payment =Producto::where('id_Producto',$id)->get();
        $payment=$payment[0];
        return view('Producto.edit',compact('payment'));
    }
    public function update(Request $request)
    {
        $product = Producto::where('id_Producto',$request->id)->update(['id_Categoria'=>$request->id_Categoria,'Nombre'=>$request->Nombre,'precioVenta'=>$request->precioVenta,'precioCompra'=>$request->precioCompra]);
        return redirect('/Producto');
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
