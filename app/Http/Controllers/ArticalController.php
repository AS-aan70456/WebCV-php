<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class ArticalController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function currentArtical(Request $request){
        $post = Post::find($request->id);
        return view('selectedPost', compact('post'));
    }
}
