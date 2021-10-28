<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Adresse;
use App\Service;

class EmployeeController extends Controller
{

	public function index()
    {
       
        $employes = Employee::with('adresse','service')->paginate(15);
        return view('employe.index',compact('employes'));
    }

    //public function create()
    {
        //
        $adresse = Adresse::get();
        $service = Service::get();
        return view('employe.create',compact('adresse','service'));
    }

  
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'required|min:2|max:100',
			'prenom' => 'required',
			'date_naissance' => 'required',
			'sexe' => 'required',
			'groupe_sanguin' => 'required',
			'adresse_id' => 'required',
			'service_id' => 'required'
        ]);

        Employee::create($request->all());
        return redirect()->route('employes')->with('message','vous avez enregistree employee avec succes');
    }
   
    public function edit($id)
    {
        $employe = Employee::findOrFail($id);
        $adresse = Adresse::get();
        $service = Service::get();
        return view('employe.edit',compact('employe','adresse','service'));
    }

   
    public function update(Request $request,$id)
    {
        //
        $employe = Employee::findOrFail($id);
        $request->validate([
            'nom' => 'required|min:2|max:100',
			'prenom' => 'required',
			'date_naissance' => 'required',
			'sexe' => 'required',
			'groupe_sanguin' => 'required',
			'adresse_id' => 'required',
			'service_id' => 'required'
        ]);

        $employe->update($request->all());
        return redirect()->route('employes')->with('message','vous avez modifiee employee');
    }

  
    public function destroy($id)
    {
        $employe = Employee::findOrFail($id);
        $employe->delete();
        return redirect()->back();
    }


}
