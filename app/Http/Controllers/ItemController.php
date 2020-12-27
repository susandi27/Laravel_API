<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Subcategory;
use App\Brand;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::orderBy('id','desc')->get();
        return view('backend.items.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories=Subcategory::all();
        $brands=Brand::all();
        return view('backend.items.create',compact('brands','subcategories'));
        //return view('backend.items.create');
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
            'codeno'=>'required',
            'name'=>'required',
            'price'=> 'required',
            'photo'=>'required | mimes:jpeg,jpg,png'
        ]);

        //upload
        if($request->file()){
            //624872374532_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName(); //rename photo by time generating 
            
            //itemimg//624872374532_a.jpg
                                        //input name      //folder name             //storage/app/public
            $filePath = $request -> file('photo')->storeAs('itemimg', $fileName,'public'); //create folder

            $path = '/storage/'.$filePath; //save in storage folder
        }

        $item = new item; //item model

              //table-columnname
        $item->codeno = $request->codeno; 
        $item->name = $request->name;
        $item->price = $request->price;  
        $item->discount = $request->discount; 
        $item->description = $request->description; 
        $item->brand_id = $request->brand;
        $item->subcategory_id = $request->subcategory;
        $item->photo = $path;
        $item->save();

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)

    {
        $subcategories=Subcategory::all();
        $brands=Brand::all();
        return view('backend.items.edit',compact('item','subcategories','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $request->validate([
            //input name ==> validation rules
            'codeno'=>'required',
            'name'=>'required',
            'price'=> 'required',
            'photo'=>'sometimes | mimes:jpeg,jpg,png'
        ]);

        //upload
        if($request->file()){
            //624872374532_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName(); //rename photo by time generating 
            
            //itemimg//624872374532_a.jpg
                                        //input name      //folder name             //storage/app/public
            $filePath = $request -> file('photo')->storeAs('itemimg', $fileName,'public'); //create folder

            $path = '/storage/'.$filePath; //save in storage folder
            $item->photo = $path;
        }


              //table-columnname
        $item->codeno = $request->codeno; 
        $item->name = $request->name;
        $item->price = $request->price;  
        $item->discount = $request->discount; 
        $item->description = $request->description; 
        $item->brand_id = $request->brand;
        $item->subcategory_id = $request->subcategory;
        $item->save();

        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        // delete old image

        // redirect
        return redirect()->route('items.index');
    }
}
