<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
    	$date = Page::all()->sortByDesc("id");;
        return view('admin',['date' => $date]);
    }

    public function add_page_get()
    {
    	return View('admin.add_page');
    }
    public function add_page_post(Request $request){

	    $this->validate($request, [
		    'title' => 'required|max:255',
		    'big-text' => 'required',
	    ]);

    	$page = new Page();

	    $page->title = $request->input('title');
	    $page->text = $request->input('big-text');

	    if($page->save()) return redirect(route('admin'));

    }

    public function del_page_post($id)
    {
    	Page::destroy($id);
    	return redirect(route('admin'));
    }
}
