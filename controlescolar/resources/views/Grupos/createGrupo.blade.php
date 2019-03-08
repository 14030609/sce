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
                    {!! Form::label('nogpo', 'no del Grupo ') !!}
                    {!! Form::text('nogpo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('semestre', ' semestre') !!}
                    {!! Form::text('semestre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('full_name', 'especialidad') !!}
                    <select class="form-control" name="cveesp", cvemae="cveesp">
                        @foreach($category as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                    <div class="form-group">
                        {!! Form::submit('guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                    </div>
                    {!! Form::close() !!}
                </div>




                   </div>
    </div>
@stop