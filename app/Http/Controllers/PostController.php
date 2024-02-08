<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function store_post(Request $request){

        $request->validate([
            "title"=>"required|min:3",
            "description"=>"required|min:10",
            "category_id"=>"required"
        ]);

        $post = new Post();

        $post->title= $request->title;
        $post->description= $request->description;
        $post->category_id= $request->category_id;

        $post->save();

        return response()->json([
            "message"=>"le post est bien enregistré"
        ]);

    }
}
