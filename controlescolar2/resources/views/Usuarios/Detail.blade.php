<div class="container">
    <div class="col-md-8 offset-md2">
        <h2>Show Post</h2>
        <hr>
        <div class="form-group">
            <h2>{{ $post[0]->email }}</h2>
        </div>

        <div class="form-group">
            <h2>{{ $post[0]->nombre }}</h2>
        </div>
        <div class="form-group">
            <h2>{{ $post[0]->telefono }}</h2>
        </div>

        <a class="btn btn-xs btn-danger" href="javascript:ajaxLoad('{{ url('Usuarios') }}')">Back</a>
    </div>
</div>
