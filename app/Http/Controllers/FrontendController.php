<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Brand;
use App\Item;
use App\Order;
Use Auth;

class FrontendController extends Controller
{
    public function index($value = '')
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $brands = Brand::all();
        $items = Item::all();
        
        $flash_items=Item::orderBy('created_at', 'desc')->get(); 
        $fresh_items=Item::orderBy('subcategory_id', 'desc')->get();   

        return view('frontend.index', compact('categories', 'subcategories', 'brands', 'items','flash_items','fresh_items'));
    }

    //itemdetail
    public function itemdetail($id)
    {

        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $brands = Brand::all();
        $items = Item::take(4)->get();
        $item_detail = Item::find($id);
        return view('frontend.itemdetail',compact('categories','subcategories','brands','items','item_detail'));
        
    }

    //filter category
    public function filtercategory($id)
    {   
        
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $brands = Brand::all();
        $items = Item::all();

        $category = Category::find($id);
        return view('frontend.filtercategory',compact('categories','subcategories','brands','items','category'));

    }

    //filter brand

    public function filterbrand($id)
    {   
        
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $brands = Brand::all();
        $items = Item::all();

        $brand = Brand::find($id);
        return view('frontend.filterbrand',compact('categories','subcategories','items','brands','brand'));

    }

    //shoppingcart
    public function shoppingcart($value = '')
    {   
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $brands = Brand::all();
        $items = Item::all();
        return view('frontend.shoppingcart', compact('categories', 'subcategories', 'brands', 'items'));

    }

    public function orderhistory($value='')
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $subcategories = Subcategory::orderBy('id', 'desc')->get();
        $brands = Brand::all();
        $items = Item::all();

        $orders = Order::where('user_id',Auth::id())->orderBy('id','desc')->get();
        return view('frontend.orderhistory',compact('categories','subcategories','brands','items','orders'));
    }
}
