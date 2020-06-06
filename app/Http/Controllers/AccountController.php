<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;
use App\Ledger;
class AccountController extends Controller
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
        $ledgers = Ledger::where('userid',$userid)->orderBy('date','DESC')->get();

        $data['category'] = $categories;
        $data['ledger'] = $ledgers;
        
        $income = 0;
        $savings = 0;
        $expense = 0;
        foreach ($ledgers as $ledger) {
            foreach ($categories as $category) {
                if($ledger->category == $category->description && $category->type == "Expense"){
                    $expense += $ledger->amount;
                }else if($ledger->category == $category->description && $category->type == "Income"){
                    $income += $ledger->amount;
                }
            }
        }
        $income/=12;
        $expense/=12;
        $data['income'] = number_format($income,2);
        $data['expense'] = number_format($expense,2);
        $data['savings'] = number_format($income-$expense,2);
        return view('interfaces.account',[
            'data' => $data,
        ]);
    }


}
