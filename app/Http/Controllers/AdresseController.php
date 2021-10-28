<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adresse;

class AdresseController extends Controller
{
    //
    public function index()
    {
       
        $adresses = Adresse::paginate(15);
        return view('adresse.index',compact('adresses'));
    }

    public function create()
    {
        //
        return view('adresse.create');
    }

  
    public function store(Request $request)
    {
        //
        $request->validate([
            'pays' => 'required',
            'province' => 'required',
            'commune' => 'required',
            'zone' => 'required',
            'quartier' => 'required',
        ]);

        Adresse::create($request->all());
        return redirect()->route('adresses')->with('message','vous avez enregistree adresse avec succes');
    }
   
    public function edit($id)
    {
        $adresse = Adresse::findOrFail($id);
        return view('adresse.edit',compact('adresse'));
    }

   
    public function update(Request $request,$id)
    {
        //
        $adresse = Adresse::findOrFail($id);
        $request->validate([
            'pays' => 'required',
            'province' => 'required',
            'commune' => 'required',
            'zone' => 'required',
            'quartier' => 'required',
        ]);

        $adresse->update($request->all());
        return redirect()->route('adresses')->with('message','vous avez modifiee adresse');
    }

  
    public function destroy($id)
    {
        $adresse = Adresse::findOrFail($id);
        $adresse->delete();
        return redirect()->back();
    }
}
