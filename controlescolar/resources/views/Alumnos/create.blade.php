@extends('welcome')
@section('add')
    <div class="container">

    
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Alumno</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
 <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Alumnos.store', 'method' => 'post', 'validate']) !!}
                  {!! Form::label('full_name', $email) !!}
                  
                 {!! Form::hidden('email', $email) !!}
 
                <div class="form-group">
                    {!! Form::label('full_name', 'NUA') !!}
                    {!! Form::text('nua', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                

             
                <div class="form-group">
                    {!! Form::label('full_name', 'Especialidad') !!}
                    <select class="form-control" name="cveesp", id_rol="cveesp">
                        @foreach($category as $key => $value)
                            <option value="{{$value}}">{{$key}}</option>
                        @endforeach
                    </select>
                </div>


                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                    </div>


                    {!! Form::close() !!}
                </div>




                   </div>
    </div>
@stop