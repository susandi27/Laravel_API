<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::orderBy('id','desc')->get();
        return view('backend.categories.index',compact('categories')); //backend (folder)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request); //var_dump, die
        //validation

        $request->validate([
            //input name ==> validation rules
            'name'=>'required|min:3', 
            'photo'=>'required | mimes:jpeg,jpg,png'
        ]);

        //upload
        if($request->file()){
            //624872374532_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName(); //rename photo by time generating 
            
            //categoryimg//624872374532_a.jpg
                                        //input name      //folder name             //storage/app/public
            $filePath = $request -> file('photo')->storeAs('categoryimg', $fileName,'public'); //create folder

            $path = '/storage/'.$filePath; //save in storage folder
        }

        $category = new Category; //Category model

                //table-columnname
        $category->name = $request->name; 
        $category->photo = $path;
        $category->save();

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            //input name ==> validation rules
            'name'=>'required|min:3', 
            'photo'=>'sometimes | mimes:jpeg,jpg,png'
        ]);

        //upload
        if($request->file()){

            //624872374532_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName(); //rename photo by time generating 
            
            //categoryimg//624872374532_a.jpg
                                        //input name      //folder name             //storage/app/public
            $filePath = $request -> file('photo')->storeAs('categoryimg', $fileName,'public'); //create folder

            $path = '/storage/'.$filePath; //save in storage folder

            //delete old image
            $category->photo = $path; //if no image update

        }

                //table-columnname
        $category->name = $request->name; 
        $category->save();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
         $category->delete();
        // delete old image

        // redirect
        return redirect()->route('categories.index');
    }
}
