@extends('welcome')
<br><br><br><br>
@section('update')

<div class="col-md-10 col-md-offset-0">
    <div class="panel panel-warning">
        <div class="panel-heading">Panel with panel-info class</div>
        <div class="panel-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        {!! Form::model($payment,array('route' =>['Materias.update',$payment->cvemat],'method'=>'PUT')) !!}

                        {!! Form::hidden('cvemat', $payment->cvemat) !!}

                        <div class="form-group">
                            {!! Form::label('fullname', 'cvemat') !!}
                            {!! Form::text('cvemat', null, ['class' => 'form-control' , 'required' => 'required']) !!}

                            <div class="form-group">
                                {!! Form::label('fullname', 'Materia') !!}
                                {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('creditos', 'creditos') !!}
                                {!! Form::text('creditos', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('horasprofesor', 'horasprofesor') !!}
                                {!! Form::text('horasprofesor', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('horasautonomo', 'horasautonomo') !!}
                                {!! Form::text('horasautonomo', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('semestre', 'semestre') !!}
                                {!! Form::text('semestre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success ' ] ) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                @stop


            </div>
        </div>


    </div>

