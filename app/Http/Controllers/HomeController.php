<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
   public function about()
   {
    return view('frontend.about.index', ['projects' => Project::all()]);
   }
   public function contact()
   {
    return view('frontend.contact.index');
   }
}
