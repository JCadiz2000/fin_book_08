<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Ledger;
use App\Category;
class LedgerController extends Controller
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
        $ledgers = Ledger::where('userid',$userid)->get();
        $categories = Category::where('userid',$userid)->get();

        $data['ledgers'] = $ledgers;
        $data['categories'] = $categories;
        return view('interfaces.ledger',[
            'data' => $data,
        ]);
    }

    public function store()
    {
        $userid = Auth::user()->id;
        $ledger = new Ledger();
        
        $ledger->date = request('date');
        $ledger->description = request('description');
        $ledger->category = request('category');
        $ledger->amount = request('amount');
        $ledger->userid = $userid;
        $ledger->save();

        return redirect('/account/ledger');
    }
}
