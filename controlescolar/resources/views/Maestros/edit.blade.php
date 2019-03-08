@extends('welcome')
@section('update')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::model($payment,array('route' =>['Producto.update',$payment->id_Producto],'method'=>'PUT')) !!}

                {!! Form::hidden('id', $payment->id_Producto) !!}

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
@stop