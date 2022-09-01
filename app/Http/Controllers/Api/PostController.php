<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){

        $post = Post::paginate(5);

        // ciclo sull array dei post
        $post->map(function ($post){
            
            $post->content = Str::substr($post->content, 0, 375);
            // se cover_img esiste
            if ($post->cover_img) {
                //url è il dato che abbiamo a db all interno di storage
                $post->cover_img = asset("storage/" . $post->cover_img);
            }
            else{
                // altrimenti mettiamo un placeholder
                $post->cover_img = asset("images/image-placeholder-500x500.jpg");
            }

            return $post;
    
            
        });
        
        return response()->json($post);
    }
}
