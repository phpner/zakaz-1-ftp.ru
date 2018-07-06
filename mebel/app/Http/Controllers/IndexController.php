<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\About_us;

class IndexController extends Controller
{
   public function index(){
	   $date = Page::all()->sortByDesc("id");
	   $title = About_us::where('id_text', 1)->get();
	   $item1 = About_us::where('id_text', 2)->get();
	   $item2 = About_us::where('id_text', 3)->get();

    	return view('index',
		    [
		    	'date' => $date,
			    'items' => $title,
			    'items1' => $item1,
			    'items2' => $item2
		    ]);
   }
}
