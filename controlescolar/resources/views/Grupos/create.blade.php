@extends('welcome')
@section('add')
    <div class="container">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Agregar Grupo</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
 <div class="col-md-8 col-md-offset-0">
                {!! Form::open(['route' => 'Grupos.store', 'method' => 'post', 'validate']) !!}

                <div class="form-group">
                    {!! Form::label('full_name', 'materia') !!}
                    <select class="form-control" name="cvemat", cvemat="cvemat">
                        @foreach($category2 as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    {!! Form::label('nogpo', 'no del Grupo ') !!}
                    {!! Form::text('nogpo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('full_name', 'MAESTRO') !!}
                    <select class="form-control" name="cvemae", cvemae="cvemae">
                        @foreach($category as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    {!! Form::label('fullname', 'hora inicia') !!}
                    {!! Form::time('horainicia', null, ['class' => 'form-control' , 'required' => 'required']) !!}

                </div>
                <div class="form-group">
                    {!! Form::label('horatermina', 'horas termina') !!}
                    {!! Form::time('horatermina', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('salon', 'salon') !!}
                    {!! Form::text('salon', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
              
                    <div class="form-group">
                        {!! Form::submit('guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                    </div>
                    {!! Form::close() !!}
                </div>




                   </div>
    </div>
@stop