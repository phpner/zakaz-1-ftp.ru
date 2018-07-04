<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class IndexController extends Controller
{
   public function index(){
	   $date = Page::all()->sortByDesc("id");
    	return view('index',['date' => $date]);
   }
}
