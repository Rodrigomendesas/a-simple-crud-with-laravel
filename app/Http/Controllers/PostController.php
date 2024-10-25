<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request) {
        $new_post = [
            'title' => 'Post Exemplo',
            'content' => 'Conteúdo de exemplo',
            'author' => 'Rodrigo'
        ];

        $post = new Post($new_post);
        $post->save();
    }

    public function read(Request $request) {
        $post = new Post();
        $posts = $post->where('id', '>', 1); //outros métodos: find() - o find() usa a PK
        return $posts;
    }

    public function readall(Request $request) {
        $post = new Post();
        $posts = $post->all(); //retorna todos os posts
        // poderia usar $posts = Post::all(); não precisaria instanciar Post() antes
        return $posts;
    }

    public function update(Request $request) {
        $post = Post::find(1)->upate([
            'author' => 'Rodrigo Mendes'
        ]);
        $post->title = 'post atualizado';
        $post->save();
    }

    public function delete(Request $request) {
        $post = Post::find(1);
        if ($post){
            $post->delete();}
    }

}
