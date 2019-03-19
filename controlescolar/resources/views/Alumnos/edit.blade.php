@extends('welcome')
@section('update')
    <div class="container">
        <br><br><div class="row">
            <div class="panel panel-danger">
                <div class="panel-heading">Editar Alumno</div>
                <div class="panel-body">
                    <div class="col-md-10 col-md-offset-1">

                        <br><br>
                        {!! Form::model($payment,array('route' =>['Alumnos.update',$payment->nua],'method'=>'PUT')) !!}

                        {!! Form::hidden('nua', $payment->nua) !!}

                        <div class="form-group">
                            {!! Form::label('full_name', 'id de la categoria') !!}
                            {!! Form::text('id_Categoria', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Nombre', 'Nombre') !!}
                            {!! Form::text('Nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('precioVenta', 'precioVenta') !!}
                            {!! Form::date('precioVenta', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('precioCompra', 'precioCompra') !!}
                            {!! Form::date('precioCompra', null, ['class' => 'form-control' , 'required' => 'required']) !!}
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
