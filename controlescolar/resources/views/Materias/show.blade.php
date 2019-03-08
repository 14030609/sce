@extends('welcome')

<html>
<head>
    <title>Lista de Materias </title>

</head>

<body>
@section('list')

    <div class="container">

<div>
    <br>
    <br>
</div>


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Materias</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>



        <div class="row">
            <div class="col-md-12 col-md-offset-0">
            {!! Form::open(['route' => '/Materias/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}

                <div class="panel panel-info">
                    <div class="panel-heading">Panel with panel-info class</div>
                    <div class="panel-body">


                        <div class="form-group">
                            <label for="exampleInputName2">Nombre</label>
                            <input type="text" class="form-control" name = "name" >
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                        <br>
                        <br>

                        <a href="{{ route('Materias.index') }}" class="btn btn-outline-primary">Todos</a>
                        <a href="{{ route('Materias.create') }}" class="btn btn-outline-success">Agregar</a>
                        <br>
                        <br>

                        {!! Form::close() !!}
                        <table class="table table-condensed table-striped table-bordered">
                            <thead  class="thead-dark">
                            <tr class="table-primary" >
                                <th>cvemat</th>
                                <th>Materia </th>
                                <th>creditos</th>
                                <th>horasprofesor</th>
                                <th>horasautonomo</th>
                                <th>semestre</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($materias as $payment)
                            <tr>
                                <td>{{ $payment->cvemat}}</td>
                                <td>{{ $payment->nombre }}</td>
                                <td>{{ $payment->creditos}}</td>
                                <td>{{ $payment->horasprofesor}}</td>
                                <td>{{ $payment->horasautonomo}}</td>
                                <td>{{ $payment->semestre}}</td>

                                <td>
                                    <a href="{{ route('Materias.edit',['cvemat' => $payment->cvemat]) }}" class="btn btn-outline-primary">Editar</a>
                                    <a class="btn btn-outline-danger btn-xs" href="{{ route('/Materias/delete',['cvemat' => $payment->cvemat])}}" >Eliminar
                                </td>
                            </tr>
                            @endforeach



                    </div>
                </div>

                </tbody>
            </table>
            </div>
        </div>
    </div>

</body>
@stop
</html>
