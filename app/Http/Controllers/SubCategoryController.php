<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('backend.sub-category.index', ['categories' => Category::all()] );
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' =>'required|unique:sub_categories',
            'category_id' => 'required'
        ]);
        SubCategory::createSubCategory($request);
        return redirect('/sub-category/manage')->with('msg', 'SubCategory Added Successfully');
    }
    public function manage()
    {
        return view('backend.sub-category.manage', ['subCategories' =>SubCategory::all()]);
    }
    public function edit($id)
    {
        return view('backend.sub-category.edit', [
            'subCategory' => SubCategory::find($id),
            'categories' => Category::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        SubCategory::updateSubCategory($request, $id);
        return redirect('/sub-category/manage')->with('msg', 'SubCategory Updated Successfully');
    }
    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return back()->with('msg', 'SubCategory Deleted Successfully');

    }
}
