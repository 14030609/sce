<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Materias;
use App\Rol;

use App\Grupos;
use App\Especialidad;

use App\UsuariosRol;
use DB;

class GruposController extends Controller
{
     public function index() {

        $grupos=DB::select('select *, u.nombre maestro from grupos g inner join maestros m on m.cvemae=g.cvemae inner join usuarios u on u.email=m.email inner join materias ma on ma.cvemat=g.cvemat');

//echo '<pre>';

//print_r($grupos);
        return view('Grupos.show',compact('payments','grupos')) ;

    }
    public function store(Request $request)
    {

          $data= DB::table('grupos')->get();

echo '<pre>';
//print_r($data);
		$bandera=0;

		foreach ($data as $key => $value) {
print_r($value);

print_r($request->salon);
echo '<pre>';
print_r($request->horainicia);	
echo '<pre>';
print_r($value->horainicia);
echo '<pre>';
print_r($value->salon);

//print_r($request->horatermina);
						if($request->salon == $value->salon)
						{
							if(($value->horainicia < $request->horainicia)&&($request->horainicia < $value->horatermina)) 
							{

								print_r('expression');
							if(($value->horatermina < $request->horatermina)&&($request->horainicia < $value->horatermina)) 
							{
								


								}else
								{

								}					

							}else
							{

							}					

						}else
						{

						}


		}


       DB::table('grupos')->insert(
	    ['cvemat' => $request->cvemat,'nogpo' => $request->nogpo,'cvemae' => $request->cvemae,'horainicia' => $request->horainicia,'horatermina' => $request->horatermina,'salon' => $request->salon]);
       

        return redirect('/Grupos');
    }
    public function createGrupo()

    {


    	}


    public function create()

    {
		 $maestros = DB::table('maestros')
            ->join('usuarios', 'maestros.email', '=', 'usuarios.email')
            ->select('maestros.*', 'usuarios.nombre')  
            ->get();  
		
		$materias = DB::table('materias')
            ->select('materias.*')  
            ->get();  



  //      $category=$maestros->pluck('nombre','cvemae');
//        $category2=$materias->pluck('nombre','cvemat');

		
        $category=Especialidad::pluck('cveesp','descripcion');


       return view('Grupos.createGrupo',compact('category'));


//       return view('Grupos.create',compact('category','category2'));
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
    public function delete($cvemat,$nogpo)
    {

       $metodo =Grupos::where('cvemat',$cvemat)->where('nogpo',$nogpo);
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
