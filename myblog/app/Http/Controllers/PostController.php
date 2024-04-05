<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // Con el paginate le decimos que solo traiga 8 registros, con el latest le decimos que lo ordene de manera
        // descendente
        $posts = Post::where('status', 2)->latest('id')->paginate(8);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        // Aca decimos que me busque en la tabla posts, todos los posts donde el campo category_id sea igual al 
        // category_id de este post, por ejemplo, el category_id de este post es 4 ($post->category_id), 
        // entonces trae todos los datos de la tabla post donde category_id sea igual a 4 donde el status sea 2
        $similares = Post::where('category_id', $post->category_id)
                        ->where('status',2)
                        // Le decimos que busque donde el id sea diferente de este id (para que no salga
                        // este mismo post en la página)
                        ->where('id','!=',$post->id)
                        ->latest('id')
                        ->take(4)
                        ->get();
        return view('posts.show', compact('post', 'similares'));
    }
}
