<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Project;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home.index', [
            'products' => Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get(),
            // 'projects' => Project::where('status', 1)->orderBy('id', 'desc')->take(8)->get(),
            'projects' => Project::all(),
        ]);
    }
    public function details($id)
    {
        return view('frontend.home.details', [
           
            'product' => Product::find($id)
        ]);
    }
    
}
