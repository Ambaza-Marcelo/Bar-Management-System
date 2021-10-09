<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{

    public function index()
    {
        //
       $expenseParMois = Expense::select(
                        DB::raw('MONTH(date) as month,YEAR(date) as year'),
                        DB::raw('sum(total) as total_expense'))->groupBy('month')->paginate(12);

       $expenseParJours = Expense::select(
                        DB::raw('Day(date) as day,MONTH(date) as month,YEAR(date) as year'),
                        DB::raw('sum(total) as total_expense'))->groupBy('day','month','year')->paginate(30);

        $expenses = Expense::paginate(25);
        return view('depense.index',compact('expenses','expenseParMois','expenseParJours'));
    }

    public function create()
    {
        //
        return view('depense.create');
    }

  
    public function store(Request $request)
    {
        //
        $request->validate([
            'date' => 'required',
            'title' => 'required',
            'total' => 'required',
        ]);

        Expense::create($request->all());
        return redirect()->route('depenses')->with('message','vous avez enregistree le depense avec succes');
    }
   
    public function edit($id)
    {
        $expense = Expense::findOrFail($id);
        return view('depense.edit',compact('expense'));
    }

   
    public function update(Request $request,$id)
    {
        //
        $expense = Expense::findOrFail($id);
        $request->validate([
            'date' => 'required',
            'title' => 'required',
            'total' => 'required'
        ]);

        $expense->update($request->all());
        return redirect()->route('depenses')->with('message','vous avez modifiee le depense');
    }

  
    public function destroy($id)
    {
        $expense = Expense::findOrFail($id);
        $expense->delete();
        return redirect()->back();
    }
}
