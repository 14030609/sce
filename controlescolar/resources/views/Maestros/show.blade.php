@extends('welcome')
<html>
<head>
    <title>Lista de maestros </title>
</head>

<body>
@section('list')
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Maestros</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-0">
            {!! Form::open(['route' => '/Maestros/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <a href="{{ route('Maestros.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Maestros.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>clave de maestro</th>
                    <th>nombre</th>
                    <th>noempleado</th>
                    <th>rfc</th>
                    <th>email</th>
                    <th>telefono</th>
                    <th>direccion</th>
                 
                </tr>
                </thead>
                <tbody>
                @foreach($maestros as $payment)
                    <tr>
                        <td>{{ $payment->cvemae }}</td>
                        <td>{{ $payment->nombre}}</td>
                        <td>{{ $payment->noempleado}}</td>
                        <td>{{ $payment->rfc }}</td>
                        <td>{{ $payment->email}}</td>
                        <td>{{ $payment->telefono }}</td>
                        <td>{{ $payment->direccion}}</td>
                    
                    <td>
                            <a class="btn btn-outline-primary btn-xs" href="{{ route('Maestros.edit',['id' => $payment->cvemae] )}}" >Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Maestros/delete',['id' => $payment->cvemae] )}}" >Eliminar</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
@stop
</body>
</html>
