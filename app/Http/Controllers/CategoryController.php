<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ledger;
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

    public function update($id)
    {
        $userid = Auth::user()->id;
        $category = Category::findOrFail($id);
        $ledger = Ledger::where('userid',$userid)->where('category',$category->description)->get();
        foreach ($ledger as $row) {
            $row->category = request('description');
            $row->save();
        }
        $category->description = request('description');
        $category->type = request('type');
        $category->save();

        return redirect('/account/category');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/account/category');
    }
}
