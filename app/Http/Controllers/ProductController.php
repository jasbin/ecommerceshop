<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');
        if ($categoryId) {
            $category = Category::find($categoryId);
            $data['categoryName'] = $category->name;
            $data['products'] = $category->allProducts();
        } else {
            $data['products'] = Product::take(10)->get();
        }
        return view('product.index',$data);
    }

    public function search(Request $request)
    {
            $data['products'] = Product::where('name','like','%'.$request->productName.'%')->paginate(30);

        return view('product.catalogue', $data);
    }
}
