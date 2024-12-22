<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
   public function index(){
       $categories = Category::where('user_id',Auth::id())->get();

       return view('panel.categories.index',compact("categories"));
   }

   public function create(){
       return view('panel.categories.create');
   }

   public function add(Request $request){

       $category = new Category();
       $category->name = $request->category_name;
       $category->is_active = $request->status;
       $category->user_id = $request->user_id;
       $category->save();

       return redirect()->route('panel.categories.index')
           ->with('success','Kategoriniz başarıyla oluşturuldu.');
   }

 public function edit($id){
       $category = Category::find($id);
     if($category->user_id != Auth::id()){
         abort(403);
     }
       return view('panel.categories.update',compact('category'));

 }
 public function update(Request $request){
       $request->validate([
           'category_name' => 'min:2',
           'status' => 'required',
       ],
       [
           'category_name.min' => 'Kategori adı daha uzun olmalıdır'
       ]);

      $category = Category::find($request->category_id);

      $category->id = $request->category_id;
      $category->name = $request->category_name;
      $category->is_active = $request->status;
      $category->user_id = $request->user_id;
      $category->save();
      return redirect()->route('panel.categories.index')->with('success','Kategoriniz başarıyla güncellendi.');
 }
    public function deleteCategory($categoryId)
    {
        $category = Category::find($categoryId);
        if($category->user_id != Auth::id()){
            abort(403);
        }

        if (!$category) {
            return response()->json(['success' => false, 'message' => 'Kategori bulunamadı.'], 404);
        }

        $category->delete();

        return response()->json(['success' => true, 'message' => 'Kategori başarıyla silindi.']);
    }



}
