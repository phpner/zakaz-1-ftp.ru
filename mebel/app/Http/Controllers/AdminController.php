<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Illuminate\Support\Facades\Storage;

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
    	$date = Page::all()->sortByDesc("id");
        return view('admin',['date' => $date]);
    }

    public function add_page_get()
    {
    	return View('admin.add_page');
    }
    public function add_page_post(Request $request){

	$this->validate($request, [
		    'title' => 'required|max:255',
		    'img-url' => 'required',
		    'price' => 'required',
			'descr' => 'required',
	    ]);

    	$page = new Page();

	    $page->title = $request->input('title');
	    $page->descr = $request->input('descr');
	    $page->price = $request->input('price');
	    $page->cate = $request->input('cate'); ;
	    $page->file_url = $request->input('img-url'); ;

/*
	    $imageName =  $file.'.'.$request->file('file')->getClientOriginalExtension();

	    Storage::disk('local')->put('file.txt', 'Contents');
	    $request->file('file')->move(
		    base_path() . '/public/images/catalog/', $imageName
	    );*/

	    if($page->save()) return redirect(route('admin'));

    }

    public function del_page_post($id)
    {
    	Page::destroy($id);
    	return redirect(route('admin'));
    }
    public function edit_page_post($id){
	   $page = Page::where('id',$id)->get();

	   return View('admin.edit_page',['items' => $page ]);
    }
    public function update_page_post(Request $request,$id)
    {
	    $this->validate($request, [
		    'title' => 'required|max:255',
		    'img-url' => 'required',
		    'price' => 'required',
		    'descr' => 'required',
	    ]);
	    $page = Page::find($id);
	    $page->title = $request->input('title');
	    $page->descr = $request->input('descr');
	    $page->price = $request->input('price');
	    $page->cate = $request->input('cate');
	    $page->file_url = $request->input('img-url');;

	    if($page->save()) return redirect(route('admin'));

    }
}
