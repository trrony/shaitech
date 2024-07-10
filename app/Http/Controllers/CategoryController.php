<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.category.index');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' =>'required|unique:categories'
        ]);
        Category::createCategory($request);
        return redirect('/category/manage')->with('msg', 'Category Added Successfully');
    }
    public function manage()
    {
        return view('backend.category.manage', ['categories' =>Category::all()]);
    }
    public function edit($id)
    {
        return view('backend.category.edit', ['category' => Category::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/category/manage')->with('msg', 'Category Updated Successfully');
    }
    public function delete($id)
    {
        Category::deleteCategory($id);
        return back()->with('msg', 'Category Deleted Successfully');

    }
}
