@extends('welcome')
@section('add')
    <div class="container">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Datos del Maestro</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Maestros.store', 'method' => 'post', 'validate']) !!}

                {!! Form::hidden('email', $email) !!}
                {!! Form::label('full_name', $email) !!}
                
                <div class="form-group">
                    {!! Form::label('full_name', 'Cve del maestro') !!}
                    {!! Form::text('cvemae', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('noempleado', 'Numero del empleado') !!}
                    {!! Form::text('noempleado', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('rfc', 'RFC') !!}
                    {!! Form::text('rfc', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop