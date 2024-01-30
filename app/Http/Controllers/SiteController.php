<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(): View
    {
        return view('site.index');
    }
    public function about() : View 
    {
      return view('site.about');
    }
  
    
}
