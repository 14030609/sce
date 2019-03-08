<div class="container">

    <div class="row">
        <div class="col-sm-7">
            <h3>Laravel CRUD, Search, Sort - AJAX</h3>
        </div>
        <div class="col-sm-5">
            <div class="pull-right">
                <div class="input-group">
                    <input class="form-control" email="search"
                           value="{{ request()->session()->get('search') }}"
                           onkeydown="if (event.keyCode == 13) ajaxLoad('{{url('Usuarios')}}?search='+this.value)"
                           placeholder="Search email" name="search"
                           type="text" email="search"/>
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary"
                                onclick="ajaxLoad('{{url('Usuarios')}}?search='+$('#search').val())">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>

            <th width="60px">No</th>
            <th>
                <a href="javascript:ajaxLoad('{{url('Usuarios?field=email&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">email</a>
                {{request()->session()->get('field')=='description'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('Usuarios?field=nombre&sort='.(request()->session()->get('sort')=='asc'?'desc':'asc'))}}')">
                    Nombre
                </a>
                {{request()->session()->get('field')=='description'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
            </th>

            <th width="160px" style="vertical-align: middle">
                <a href="javascript:ajaxLoad('{{url('Usuarios/create')}}')"
                   class="btn btn-primary btn-xs"> <i class="fa fa-plus" aria-hidden="true"></i> New Post</a>
            </th>
        </tr>
        </thead>
        <tbody>
        @php
        $i=1;
        @endphp
        @foreach ($posts as $post)
        <tr>
            <th>{{$i++}}</th>
            <td>{{ $post->email }}</td>
            <td >{{ $post->nombre }}</td>

            <td>
                <a class="btn btn-info btn-xs" title="Show"
                   href="javascript:ajaxLoad('{{url('Usuarios/show/'.$post->email)}}')">
                    Show</a>
                <a class="btn btn-warning btn-xs" title="Edit"
                   href="javascript:ajaxLoad('{{url('Usuarios/update/'.$post->email)}}')">
                    Edit</a>
                <input type="hidden" name="_method" value="delete"/>
                <a class="btn btn-danger btn-xs" title="Delete"
                   href="javascript:if(confirm('Are you sure want to delete?')) ajaxDelete('{{url('Usuarios/delete/'.$post->id)}}','{{csrf_token()}}')">
                    Delete
                </a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>

    <ul class="pagination">
        {{ $posts->links() }}
    </ul>
</div>
