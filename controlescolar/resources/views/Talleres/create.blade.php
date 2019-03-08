@extends('welcome')
@section('add')
    <div class="container">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Taller</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
 <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Talleres.store', 'method' => 'post', 'validate']) !!}

               <div class="form-group">
                    {!! Form::label('full_name', 'clave del taller') !!}
                    {!! Form::text('cvetaller', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('full_name', 'Nombre Completo ') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('fullname', 'instructor ') !!}
                    {!! Form::text('instructor', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('fullname', 'horario ') !!}
                    {!! Form::text('horario', null, ['class' => 'form-control' , 'required' => 'required']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('lugar', 'lugar') !!}
                    {!! Form::text('lugar', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('cupo', 'cupo ') !!}
                    {!! Form::text('cupo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('requisitos', 'requisitos ') !!}
                    {!! Form::text('requisitos', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                
                    <div class="form-group">
                        {!! Form::submit('Siguiente', ['class' => 'btn btn-outline-success ' ] ) !!}
                    </div>
                    {!! Form::close() !!}
                </div>




                   </div>
    </div>
@stop