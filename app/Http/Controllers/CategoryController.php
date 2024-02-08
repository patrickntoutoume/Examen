<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Cache\Events\CacheHit;
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

    public function index(){
        $category= Category::all();

        return response()->json([
           "category"=> $category
        ]);
    }
    public function update_category(Request $request , $id){

        $request->validate([
            "name"=>"required|min:3"
        ]);

        $category= Category::find($id);

        $category->name = $request->name;

        $category->update();

        return response()->json([
            "message "=> "La Categorie est bien modifié"
        ]);
    }

    public function delete_category($id){
        Category::destroy($id);


        return response()->json([
            "message"=>" supprimé ! "
        ]);
    }
}
