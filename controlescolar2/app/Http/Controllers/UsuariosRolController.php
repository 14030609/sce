<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosRolController extends Controller
{

    /**
     *
     *
     *
     *
     */

    public function index (Request $request)
{
    $post = new Post ();
    $post = $post->where ('email', 'like', '%'.$request-> session()->get('search').'%')
        ->orderBy($request->get('field'), $request->session()->get('sort'))
        ->paginate(5);

    if ($request->ajax())

    {
        return view('post.index', compact('post'));

    }else{
        return view('posts.ajax', compact('post'));
    }

}



}
