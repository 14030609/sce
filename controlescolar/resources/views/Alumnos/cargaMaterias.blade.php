@extends('welcome')
@section('add')
    <div class="container">

    
        <div class="row">
            <div class="col-lg-20">
                <h1 class="page-header">Agregar Alumno</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


  {!! Form::open(['route' => 'Alumnos.installer', 'method' => 'post', 'novalidate']) !!}
                         <div class="form-group" style="background-color:AntiqueWhite; padding: 25px;"  >
                <br>
  

                {!! Form::hidden('nua', $nua) !!}
                                {!! Form::label('full_name', $nua) !!}
                
                       @foreach($payment as $key => $value)
                            <div style="background-color:powderblue; padding: 10px; " >
                                {!! Form::label('full_name', $value->nombre) !!}
                                {!! Form::text($value, $value->nombre, ['class' => 'form-control', 'required' => 'required']) !!}
                            </div>
                           
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                            <br><br>
                        @endforeach
                </div>
                    {!! Form::close() !!}
                </div>
                         






@stop