<div class="container">
    <div class="col-md-8 offset-md-2">
        <h1>{{isset($post)?'Edit':'New'}} Post</h1>
        <hr/>
        @if(isset($post))
        {!! Form::model($post,['method'=>'put','id'=>'frm']) !!}
        @else
        {!! Form::open(['id'=>'frm']) !!}
        @endif
        <div class="form-group row required">
            {!! Form::label("email","Email",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("email",null,["class"=>"form-control".($errors->has('email')?" is-invalid":""),"autofocus",'placeholder'=>$post[0]->email]) !!}
                <span id="error-title" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("nombre","Nombre",["class"=>"col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::textarea("nombre",null,["class"=>"form-control".($errors->has('nombre')?" is-invalid":""),'placeholder'=>$post[0]->nombre]) !!}
                <span id="error-description" class="invalid-feedback"></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-3 col-lg-2"></div>
            <div class="col-md-4">
                <a href="javascript:ajaxLoad('{{url('Usuarios')}}')" class="btn btn-danger btn-xs">
                    Back</a>
                {!! Form::button("Save",["type" => "submit","class"=>"btn btn-primary btn-xs"])!!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
