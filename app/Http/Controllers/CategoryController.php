<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;
class CategoryController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userid = Auth::user()->id;
        $categories = Category::where('userid',$userid)->get();
        return view('interfaces.category',[
            'categories' => $categories,
        ]);
    }

    public function store()
    {
        $userid = Auth::user()->id;
        $category = new Category();
        
        $category->description = request('description');
        $category->type = request('type');
        $category->userid = $userid;
        $category->save();

        return redirect('/account/category');
    }
}
