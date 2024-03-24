<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
    return view("user.index",['user' => auth()->user()]);
   }
   public function chatHelp(Request $request)
   {
      return view('user.services.chatHelp');
   }
  
}
