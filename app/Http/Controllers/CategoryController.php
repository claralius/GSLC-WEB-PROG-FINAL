<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $category_data = Category::all();
        return view('category', compact('category_data'));
    }

    public function category_details(Request $request){
       $category_details = DB::table('categories')->where('categories.id', '=', $request->id)->join('books', 'categories.id', '=', 'books.category_id')->select('books.title', 'books.author', 'books.image', 'categories.category_name', 'books.id')->get();

        return view ('category', compact('category_details'));
    }

}
