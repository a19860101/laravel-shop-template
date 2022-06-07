<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::paginate(12);
        return view('admin.category.index',compact('categories'));
    }
    public function create(){
        return view('admin.category.create');
    }
    public function store(Request $request){
        if($request->file('cover')){
            $ext = $request->file('cover')->getClientOriginalExtension();
            $cover = Str::uuid().'.'.$ext;
            $request->file('cover')->storeAs('images',$cover,'public');
        }else{
            $cover = null;
        }
        $category = new Category;
        $category->fill($request->all());
        $category->cover = $cover;
        $category->save();

        return redirect()->route('adminCategoryIndex');
    }
    public function destroy(Category $category){
        // return $category;
        $category->delete();
        return redirect()->back();
    }
    public function edit(Category $category){
        return view('admin.category.edit',compact('category'));
    }
    public function update(Category $category,Request $request){
        $category->fill($request->all());
        $category->save();
        return redirect()->route('adminCategoryIndex');
    }

}
