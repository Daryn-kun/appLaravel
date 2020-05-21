<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductFilter;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index(ProductFilter $request){
        $productsQuery = Product::query();
        if ($request->filled('price_from')){
            $productsQuery->where('price', '>=', $request->price_from);
        }
        if ($request->filled('price_to')){
            $productsQuery->where('price', '<=', $request->price_to);
        }
        foreach (['hit', 'new', 'rec'] as $field){
            if ($request->has($field)){
                $productsQuery->where($field, 1);
            }
        }
        $products = $productsQuery->paginate(6)->withPath("?" . $request->getQueryString());
        return view('index', compact('products'));
    }
    public function categories(){
        $categories = Category::get();
        return view('categories', compact('categories'));
    }
    public function category($code){
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));

    }
    public function product($category, $productCode){
        $product = Product::where('code', $productCode)->first();
        return view('product', compact('product'));
    }
    public function changeLocale($locale){
        session(['locale' => $locale]);
        App::setLocale($locale);
        return redirect()->back();
    }
}
