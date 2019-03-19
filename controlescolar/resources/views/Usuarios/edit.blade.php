@extends('welcome')
@section('update')
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading">Panel with panel-info class</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        {!! Form::model($payment,array('route' =>['Usuarios.update',$payment->email],'method'=>'PUT')) !!}

                        {!! Form::hidden('email', $payment->email) !!}

                        <div class="form-group">
                            {!! Form::label('full_name', 'email') !!}
                            {!! Form::text('email', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fullname', 'contrasenia') !!}
                            {!! Form::text('contrasenia', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('nombre', 'nombre') !!}
                            {!! Form::date('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('curp', 'curp') !!}
                            {!! Form::date('curp', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div><div class="form-group">
                            {!! Form::label('fullname', 'sexo ') !!}
                            {!! Form::select('sexo', ['M' => 'Mujer', 'H' => 'Hombre']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('telefono', 'telefono') !!}
                            {!! Form::date('telefono', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('direccion', 'direccion') !!}
                            {!! Form::date('direccion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('full_name', 'Rol') !!}
                            <select class="form-control" name="id_rol", id_rol="id_rol">
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
        </div>

    </div>
@stop
