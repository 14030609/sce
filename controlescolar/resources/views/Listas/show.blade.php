@extends('welcome')

<html>
<head>
    <title>Lista de Usuarios </title>    
</head>

<body>
@section('list')
    <div class="container">

<div>
    <br>
    <br>
</div>>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Listas</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-0">
            {!! Form::open(['route' => '/Listas/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <br>
            <br>

            <a href="{{ route('Listas.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Listas.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            <br>
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>materia</th>
                    <th>nogpo</th>
                    <th>nua</th>
                </tr>
                </thead>
                <tbody>
                @foreach($listas as $payment)
                    <tr>
                        <td>{{ $payment->nombre}}</td>
                        <td>{{ $payment->nogpo }}</td>
                        <td>{{ $payment->nua}}</td>
                    <td>
                             <a href="{{ route('Listas.edit',['email' => $payment->email]) }}" class="btn btn-outline-primary">Editar</a>
                             <a class="btn btn-outline-danger btn-xs" href="{{ route('/Listas/delete',['email' => $payment->email])}}" >Eliminar                                      
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>

</body>

</html>
