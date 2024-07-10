<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('backend.brand.index');
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' =>'required|unique:categories'
        ]);
        Brand::createBrand($request);
        return redirect('/brand/manage')->with('msg', 'Brand Added Successfully');
    }
    public function manage()
    {
        return view('backend.brand.manage', ['brands' =>Brand::all()]);
    }
    public function edit($id)
    {
        return view('backend.brand.edit', ['brand' => Brand::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Brand::updateBrand($request, $id);
        return redirect('/brand/manage')->with('msg', 'Brand Updated Successfully');
    }
    public function delete($id)
    {
        Brand::deleteBrand($id);
        return back()->with('msg', 'Brand Deleted Successfully');

    }
}
