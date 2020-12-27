<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::orderBy('id','desc')->get();
        return view('backend.brands.index',compact('brands')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            //input name ==> validation rules
            'name'=>'required|min:3', 
            'logo'=>'required | mimes:jpeg,jpg,png'
        ]);

        //upload
        if($request->file()){
            //624872374532_a.jpg
            $fileName = time().'_'.$request->logo->getClientOriginalName(); //rename logo by time generating 
            
            //brandimg//624872374532_a.jpg
                                        //input name      //folder name             //storage/app/public
            $filePath = $request -> file('logo')->storeAs('brandimg', $fileName,'public'); //create folder

            $path = '/storage/'.$filePath; //save in storage folder
        }

        $brand = new brand; //brand model

                //table-columnname
        $brand->name = $request->name; 
        $brand->logo = $path;
        $brand->save();

        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('backend.brands.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            //input name ==> validation rules
            'name'=>'required|min:3', 
            'logo'=>'sometimes | mimes:jpeg,jpg,png'
        ]);

        //upload
        if($request->file()){

            //624872374532_a.jpg
            $fileName = time().'_'.$request->logo->getClientOriginalName(); //rename logo by time generating 
            
            //brandimg//624872374532_a.jpg
                                        //input name      //folder name             //storage/app/public
            $filePath = $request -> file('logo')->storeAs('brandimg', $fileName,'public'); //create folder

            $path = '/storage/'.$filePath; //save in storage folder

            //delete old image

            $brand->logo = $path; //if no image update
        }

                //table-columnname
        $brand->name = $request->name; 
        $brand->save();

        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        // delete old image

        // redirect
        return redirect()->route('brands.index');
    }
}
