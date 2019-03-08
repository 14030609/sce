@extends('welcome')
@section('add')
    <div class="container">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Materia</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
 <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Materias.store', 'method' => 'post', 'validate']) !!}
                <div class="form-group">
                    {!! Form::label('full_name', 'Clave de la materia') !!}
                    {!! Form::text('cvemat', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('nombre', 'nombre de la materia ') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fullname', 'creditos ') !!}
                    {!! Form::text('creditos', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('fullname', 'horas profesor') !!}
                    {!! Form::text('horasprofesor', null, ['class' => 'form-control' , 'required' => 'required']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('horasautonomo', 'horas autonomo') !!}
                    {!! Form::text('horasautonomo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('semestre', 'semestre') !!}
                    {!! Form::text('semestre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                    <div class="form-group">
                        {!! Form::submit('guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                    </div>
                    {!! Form::close() !!}
                </div>




                   </div>
    </div>
@stop