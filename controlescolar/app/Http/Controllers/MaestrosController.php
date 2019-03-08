<?php

namespace App\Http\Controllers;
use App\Usuarios;
use App\Rol;
use App\UsuariosRol;
use DB;

use Illuminate\Http\Request;

class MaestrosController extends Controller
{
     public function index() {
  $maestros = DB::table('maestros')
            ->join('usuarios', 'maestros.email', '=', 'usuarios.email')
            ->select('maestros.*', 'usuarios.nombre', 'usuarios.telefono','usuarios.direccion')  
            ->get();  
//$pdo = DB::connection()->getPdo();

//            $usuarios = DB::table('usuarios')->get();
//        $usuarios=$usuarios->toArray()
    //       print_r($usuarios);
//$clientes = DB::table('usuarios')
  //          ->count();

 //       print_r($clientes);
 

        return view('Maestros.show',compact('payments','maestros')) ;
    }
    public function store(Request $request)
    {
//        $payment = new Usuarios();
   //     $payment->create($request->all());

  
//        $producto=Usuarios::all()->last();
        DB::table('maestros')->insert(
    ['cvemae' => $request->cvemae,'noempleado' => $request->noempleado,'email' => $request->email,'rfc' => $request->rfc]);

  
        return redirect('/Usuarios');
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
