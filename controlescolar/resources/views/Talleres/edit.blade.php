@extends('welcome')
@section('update')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {!! Form::model($payment,array('route' =>['Talleres.update',$payment->cvetaller],'method'=>'PUT')) !!}

                {!! Form::hidden('cvetaller', $payment->cvetaller) !!}

                <div class="form-group">
                    {!! Form::label('fullname', 'cvetaller') !!}
                    {!! Form::text('cvetaller', null, ['class' => 'form-control' , 'required' => 'required']) !!}

                <div class="form-group">
                    {!! Form::label('fullname', 'nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('instructor', 'instructor') !!}
                    {!! Form::text('instructor', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('horario', 'horario') !!}
                    {!! Form::text('horario', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('lugar', 'lugar') !!}
                    {!! Form::text('lugar', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('cupo', 'cupo') !!}
                    {!! Form::text('cupo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('requisitos', 'requisitos') !!}
                    {!! Form::text('requisitos', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop