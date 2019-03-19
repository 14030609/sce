  @extends('welcome')

<html>
<head>
    <title>Lista de Productoes </title>    
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
                <h1 class="page-header">Alumnos</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-0">
            {!! Form::open(['route' => '/Alumnos/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
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

                <div class="panel panel-info">
                    <div class="panel-heading">Alumnos</div>
                    <div class="panel-body">
                        <table class="table table-condensed table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>nombre</th>
                                <th>nua</th>
                                <th>email</th>
                                <th>especialidad</th>
                                <th>telefono</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($alumnos as $payment)
                            <tr>

                                <td>{{ $payment->nombre }}</td>
                                <td>{{ $payment->nua }}</td>
                                <td>{{ $payment->email }}</td>
                                <td>{{ $payment->cveesp }}</td>
                                <td>{{ $payment->telefono }}</td>



                                <td>
                                    <a href="{{ route('Alumnos.edit',['email' => $payment->email]) }}" class="btn btn-outline-primary">Editar</a>
                                    <a class="btn btn-outline-danger btn-xs" href="{{ route('/Usuarios/delete',['email' => $payment->email])}}" >Eliminar</a>
                                    <a class="btn btn-outline-danger btn-xs" href="{{ route('/Alumnos/cargaMaterias',['nua' => $payment->nua])}}" >Inscribir talller</a>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>


            </div>
        </div>
    </div>

</body>
@stop
</html>
