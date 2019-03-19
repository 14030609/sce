
<html>
<head>
    @extends('welcome')

    <title>Lista de Usuarios </title>

</head>

<body>
@section('list')
<div class="container" style="height: 100%">


    <br>
    <br>


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Usuarios</h1>
        </div>

    </div>


    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            {!! Form::open(['route' => 'Alumnos.installer', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
            <div class="form-group">
                <label for="exampleInputName2">Nombre</label>
                <input type="text" class="form-control" name = "name" >
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            <br>
            <br>

            <a href="{{ route('Usuarios.index') }}" class="btn btn-outline-primary">Todos</a>
            <a href="{{ route('Usuarios.create') }}" class="btn btn-outline-success">Agregar</a>
            <br>
            <br>

            {!! Form::close() !!}
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>nombre</th>
                    <th>curp</th>
                    <th>sexo</th>
                    <th>email</th>
                    <th>contrasenia</th>
                    <th>telefono</th>
                    <th>direccion</th>

                </tr>
                </thead>
                <tbody>
                @foreach($json as $payment => $value)
                <tr>
                    <td>{{ $value['nombre']}}</td>

                    <td>
                        <a href="{{ route('Alumnos.installer',['email' => $value['nombre']]) }}" class="btn btn-outline-primary">Editar</a>
                        <a class="btn btn-outline-danger" href="{{ route('/Usuarios/delete',['email' => $value['nombre']])}}" >Eliminar
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>





</body>
@stop

</html>


