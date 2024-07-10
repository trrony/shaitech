<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('backend.product.index', [
            'categories' => Category::where('status', 1)->get(),
            'subCategories' => SubCategory::where('status', 1)->get(),
            'brands' => Brand::where('status', 1)->get(),
        ]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' =>'required|unique:categories'
        ]);
        Product::createProduct($request);
        return redirect('/product/manage')->with('msg', 'Product Added Successfully');
    }
    public function manage()
    {
        return view('backend.product.manage', ['products' =>Product::all()]);
    }
    public function edit($id)
    {
        return view('backend.product.edit', [
            'categories' => Category::where('status', 1)->get(),
            'subCategories' => SubCategory::where('status', 1)->get(),
            'brands' => Brand::where('status', 1)->get(),
            'product' =>Product::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/product/manage')->with('msg', 'Product Updated Successfully');
    }
    public function delete($id)
    {
        Product::deleteProduct($id);
        return back()->with('msg', 'Product Deleted Successfully');

    }
}
