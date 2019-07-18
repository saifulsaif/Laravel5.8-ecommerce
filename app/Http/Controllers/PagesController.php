<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $products = Product::orderBy('id','desc')->get();
      return view('fontend.pages.index')->with('products',$products);
    }
    public function Contact(){
      return view('fontend.pages.contact');
    }
    public function product(){
      $products = Product::orderBy('id','desc')->get();
      return view('fontend.pages.product')->with('products',$products);
    }
}
