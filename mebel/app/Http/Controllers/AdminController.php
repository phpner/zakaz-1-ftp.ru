<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\About_us;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

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

    public function about_us()
    {
	    $title = About_us::where('id_text', 1)->get();
	    $item1 = About_us::where('id_text', 2)->get();
	    $item2 = About_us::where('id_text', 3)->get();

    	return View('admin.about_us',[
    		'items' => $title,
		    'items1' => $item1,
		    'items2' => $item2]);
    }
    public function about_us_save(Request $request)
    {
	    About_us::where('id_text', 1)
		    ->update(['title' => $request->input('title')]);
	    About_us::where('id_text', 2)
		    ->update(
		    	[
		    		'title' => $request->input('title1'),
				    'text' => $request->input('text1'),
				    'img_url' => $request->input('img-url1')
			    ]
		        );

	    About_us::where('id_text',3)
		    ->update(
		    	[
	            'title' => $request->input('title2'),
			    'text' => $request->input('text2'),
			    'img_url' => $request->input('img-url2')
			    ]
		        );
	    return redirect(route('admin'));

    }
}
