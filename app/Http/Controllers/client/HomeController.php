<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categorie;
use App\Slider;
use App\Product;
use App\Setting;
use App\Post;
use App\Invoice_detail;
class HomeController extends Controller
{
    public function Home()
    {
    	$categories = Categorie::all();
        $posts = Post::orderBy('date_posted','desc')->limit(4)->get();
    	$settings = Setting::first();
    	$sold_products = Product::orderBy('sold','desc')->limit(10)->get();
    	$feauture_products = Product::where('star','>=','4')->orderBy('views','desc')->limit(10)->get();
    	$best_product = Product::where('sell_price',Product::max('sell_price'))->first();
    	$new_products = Product::orderBy('created_at','asc')->limit(10)->get();
    	$sell_products = Product::orderBy('sell_price','desc')->limit(10)->get();
    	$sliders = Slider::orderBy('sort_order', 'desc')->get();
    	return view('client.app')->with(compact('categories','sliders','new_products','sell_products','settings','best_product','feauture_products','sold_products','posts'));
    }
}
