<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Categoryfeatures;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index' , ['categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'feature'=>'required'
        ]);
        $category = Category::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        if($category){
            for ($i=0; $i < count($request->feature); $i++) { 
                if($request->feature[$i] != null){
                    Categoryfeatures::create(
                        [
                            'category_id'=>$category->id,
                            'feature'=>$request->feature[$i],
                        ]
                       ) ;
                }
           
            }
         }

        return redirect('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('front.fleets' ,['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
