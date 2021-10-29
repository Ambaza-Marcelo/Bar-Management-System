<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    //
    //public function index()
    {
        //

        $services = Service::paginate(10);
        return view('service.index',compact('services'));
    }

    public function create()
    {
        //
        return view('service.create');
    }

  
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_service' => 'required',
            'salaire' => 'required',
        ]);

        Service::create($request->all());
        return redirect()->route('services')->with('message','vous avez enregistree le service avec succes');
    }
   
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('service.edit',compact('service'));
    }

   
    public function update(Request $request,$id)
    {
        //
        $service = Service::findOrFail($id);
        $request->validate([
            'nom_service' => 'required',
            'salaire' => 'required'
        ]);

        $service->update($request->all());
        return redirect()->route('services')->with('message','vous avez modifiee le service');
    }

  
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->back();
    }
}
