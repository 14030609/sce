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
                <h1 class="page-header">Talleres</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-0">
            {!! Form::open(['route' => '/Talleres/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <br>
            <br>
           
            <a href="{{ route('Talleres.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Talleres.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            <br>
           
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>cvetaller</th>
                    <th>nombre</th>
                    <th>instructor</th>
                    <th>horario</th>
                    <th>lugar</th>
                    <th>cupo</th>
                    <th>requisitos</th>
                 
                </tr>
                </thead>
                <tbody>
                @foreach($talleres as $payment)
                    <tr>
                        <td>{{ $payment->cvetaller}}</td>
                        <td>{{ $payment->nombre}}</td>
                        <td>{{ $payment->instructor}}</td>
                        <td>{{ $payment->horario}}</td>
                        <td>{{ $payment->lugar}}</td>
                        <td>{{ $payment->cupo }}</td>
                        <td>{{ $payment->requisitos}}</td>
                    
                    <td>
                             <a href="{{ route('Talleres.edit',['cvetaller' => $payment->cvetaller]) }}" class="btn btn-outline-primary">Editar</a>
                             <a class="btn btn-outline-danger btn-xs" href="{{ route('/Talleres/delete',['cvetaller' => $payment->cvetaller])}}" >Eliminar                                  
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
