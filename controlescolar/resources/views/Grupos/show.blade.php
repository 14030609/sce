@extends('welcome')

<html>
<head>
    <title>Lista de Grupos </title>    
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
                <h1 class="page-header">Grupos</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-0">
            {!! Form::open(['route' => '/Grupos/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <br>
            <br>
           
            <a href="{{ route('Grupos.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Grupos.createGrupo') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            <br>
           
            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>cvemat</th>
                    <th>nombre</th>
                    <th>grupo</th>
                    <th>maestro</th>
                    <th>hora inicia</th>                 
                    <th>hora termina</th>                 
                    <th>salon </th>                 
                </tr>
                </thead>
                <tbody>
                @foreach($grupos as $payment)
                    <tr>
                        <td>{{ $payment->cvemat}}</td>
                        <td>{{ $payment->nombre }}</td>
                        <td>{{ $payment->nogpo}}</td>
                        <td>{{ $payment->maestro}}</td>
                        <td>{{ $payment->horainicia}}</td>                    
                        <td>{{ $payment->horatermina}}</td>                    
                        <td>{{ $payment->salon}}</td>                    

                    <td>
                             <a href="{{ route('Grupos.edit',['cvemat' => $payment->cvemat]) }}" class="btn btn-outline-primary">Editar</a>
                            <a class="btn btn-outline-danger btn-xs" href="{{ route('/Grupos/delete',['cvemat' => $payment->cvemat,'nogpo' => $payment->nogpo] )}}" >Eliminar</a>
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
