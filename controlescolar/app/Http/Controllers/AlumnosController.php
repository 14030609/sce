<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuarios;
use App\Rol;
use App\Especialidad;

use App\UsuariosRol;
use DB;

class AlumnosController extends Controller
{
     public function index() {
          //    $alumnos = DB::table('alumnos')
            //->get();


  $alumnos = DB::table('alumnos')
            ->join('usuarios', 'alumnos.email', '=', 'usuarios.email')
            ->select('alumnos.*', 'usuarios.nombre', 'usuarios.telefono')  
            ->get();  

        return view('Alumnos.show',compact('payments','alumnos')) ;
    }
    public function store(Request $request)
    {
//        $payment = new Usuarios();
   //     $payment->create($request->all());

       DB::table('alumnos')->insert(
    ['email' => $request->email,'cveesp' => $request->cveesp,'nua' => $request->nua]);

       

        return redirect('/Usuarios');
    }

    public function installer(Request $request)
    {
        print_r('hola');
        print_r($request->nua);
        print_r($request[1]);

print_r($request->cvetaller);
        
     //   print_r($request[1]);

//        DB::table('inscripciontaller')->insert(
   //     ['cvetaller' => $request->cvetaller,'nua' => $request->nua]);

        //return redirect('/Alumnos');
    }
    public function create()
    {
        $category=Especialidad::pluck('cveesp','descripcion');

        return view('Usuarios.create',compact('category'));
        //return view('Producto.create');
    }
    public function edit($id)
    {
        $payment =Usuarios::where('email',$id)->get();
        $payment=$payment[0];
        return view('Alumnos.edit',compact('payment'));
    }
    public function update(Request $request)
    {
     
     print('puto');
print_r($request->lugar);
     //   $product = Producto::where('id_Producto',$request->id)->update(['id_Categoria'=>$request->id_Categoria,'Nombre'=>$request->Nombre,'precioVenta'=>$request->precioVenta,'precioCompra'=>$request->precioCompra]);
        //return redirect('/Producto');
    }
    public function delete($id)
    {
        $metodo =UsuariosRol::where('email',$id);
        $metodo->delete();

        $metodo =Usuarios::where('email',$id);
        $metodo->delete();  

        return redirect()->back();

    }

    public function search(Request $request){
        $payments = Producto::where('nombre','like','%'.$request->nombre.'%')->get();
        return \View::make('payment_method.payment_methods_list',['payments'=>$payments]);
    }

    public function cargaMaterias( Request $request)
    {
  

            $nua =$request->nua;
                $payment =DB::table('talleres')->get();

     return view('Alumnos.cargaMaterias', compact('payment','nua'));
    
    }



    public function show()

    {

     return view('Alumnos.index');

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
