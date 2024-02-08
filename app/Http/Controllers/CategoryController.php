<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request){

        $request->validate([
            "name"=>"required|min:3"
        ]);

        $category= new Category();

        $category->name = $request->name;

        $category->save();

        return response()->json([
            "message "=> "La Categorie est bien créée"
        ]);


    }
}
