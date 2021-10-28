<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Report;
use App\User;
use App\Expense;
use Carbon\Carbon;
class ReportController extends Controller
{

    public function index()
    {
        $rapportGeneralParMois = Report::select(
                        DB::raw('MONTH(created_at) as month,YEAR(created_at) as year'),
                        DB::raw('sum(prix_vente_total) as total_prix_vente'),
                        DB::raw('sum(prix_achat_total) as total_prix_achat'))->groupBy('month','year')->paginate(12);
        $rapportGeneralParJours = Report::select(
                        DB::raw('DAY(created_at) as day,MONTH(created_at) as month,YEAR(created_at) as year'),
                        DB::raw('sum(prix_vente_total) as total_prix_vente'),
                        DB::raw('sum(prix_achat_total) as total_prix_achat'))->groupBy('day','month','year')->orderBy('created_at','desc')->paginate(30);


    	$totalGenStockInitial = DB::table('reports')->sum('stock_initial');
    	$totalGenPrixVenteUnitaire = DB::table('reports')->sum('prix_vente_unitaire');
    	$totalGenPrixAchatUnitaire = DB::table('reports')->sum('prix_achat_unitaire');
    	$totalGenQuantiteEntree = DB::table('reports')->sum('quantite_entree');
    	$totalGenQuantiteSortie = DB::table('reports')->sum('quantite_sortie');

        $totalGenPrixVenteTotal = DB::table('reports')->sum('prix_vente_total');
        $totalGenPrixAchatTotal = DB::table('reports')->sum('prix_achat_total');
        $totalGenStockTotal = DB::table('reports')->sum('stock_total');
        $totalGenStockRestant = DB::table('reports')->sum('stock_restant');

        //les depenses
        $expenseParMois = Expense::select(
                        DB::raw('MONTH(date) as month,YEAR(date) as year'),
                        DB::raw('sum(total) as total_expense'))->groupBy('month')->get();

         $expenseParJours = Expense::select(
                        DB::raw('DAY(date) as day,MONTH(date) as month,YEAR(date) as year'),
                        DB::raw('sum(total) as total_expense'))->groupBy('day','month','year')->get();


    	$reports = Report::orderBy('created_at','desc')->paginate(10);
    	return view('rapport.index',compact(
    		'reports',
    		'totalGenStockInitial',
    		'totalGenPrixVenteUnitaire',
    		'totalGenPrixAchatUnitaire',
    		'totalGenQuantiteEntree',
    		'totalGenQuantiteSortie',
            'totalGenPrixVenteTotal',
            'totalGenPrixAchatTotal',
            'totalGenStockTotal',
            'totalGenStockRestant',

            //rapport general
            'rapportGeneralParMois',
            //total expense
            'expenseParMois',
            'rapportGeneralParJours',
            'expenseParJours'

    	));
    }

    public function create()
    {

    	return view('rapport.create');
    }

    public function store(Request $request)
    {

    	$validator = Validator::make($request->all(),[
    		'nom_produit' => 'required',
    		'stock_initial' => '',
    		'quantite_entree' => '',
    		'prix_achat_unitaire' => '',
    		'quantite_sortie' => '',
    		'prix_vente_unitaire' => '',
	    	'prix_vente_total' => '',
	    	'prix_achat_total' => '',
	 		'stock_total' => '',
	  		'stock_restant' => '',
    	]);
        $reportEntree =1;
        $report = new Report();
        $report->nom_produit = $request->nom_produit;
        $report->stock_initial = $request->stock_initial;
        $report->quantite_entree = $request->quantite_entree;
        $report->prix_achat_unitaire = $request->prix_achat_unitaire;
        $report->quantite_sortie = $request->quantite_sortie;
        $report->prix_vente_unitaire = $request->prix_vente_unitaire;

        $report->stock_total = $report->stock_initial + $report->quantite_entree;
        $report->stock_restant = $report->stock_total - $report->quantite_sortie;
        $report->prix_vente_total = $report->prix_vente_unitaire * $report->quantite_sortie;
        $report->prix_achat_total = $report->prix_achat_unitaire * $report->quantite_entree;
        $report->utilisateur = \Auth::user()->name;
    	
        $report->save();
    	return redirect()->route('rapports')->with('message','vous avez enregistree le rapport avec succes');
    }

    public function edit($id)
    {
        $reports = Report::whereid($id)->first();
        return view('rapport.edit',compact('reports'));
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'nom_produit' => 'required',
            'stock_initial' => '',
            'quantite_entree' => '',
            'prix_achat_unitaire' => '',
            'quantite_sortie' => '',
            'prix_vente_unitaire' => '',
            'prix_vente_total' => '',
            'prix_achat_total' => '',
            'stock_total' => '',
            'stock_restant' => '',
        ]);
        $report = Report::find($id);
        $report->nom_produit = $request->nom_produit;
        $report->stock_initial = $request->stock_initial;
        $report->quantite_entree = $request->quantite_entree;
        $report->prix_achat_unitaire = $request->prix_achat_unitaire;
        $report->quantite_sortie = $request->quantite_sortie;
        $report->prix_vente_unitaire = $request->prix_vente_unitaire;

        $report->stock_total = $report->stock_initial + $report->quantite_entree;
        $report->stock_restant = $report->stock_total - $report->quantite_sortie;
        $report->prix_vente_total = $report->prix_vente_unitaire * $report->quantite_sortie;
        $report->prix_achat_total = $report->prix_achat_unitaire * $report->quantite_entree;
        $report->utilisateur = \Auth::user()->name;
        $report->save();
        return redirect()->route('rapports')->with('message','vous avez enregistree le rapport avec succes');
    }

    public function destroy($id)
    {
        $report = Report::find($id);
        $report->delete();
        return redirect()->back();
    }

}
