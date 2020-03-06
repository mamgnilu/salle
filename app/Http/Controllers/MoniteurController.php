<?php

namespace App\Http\Controllers;

use App\Moniteur;
use Illuminate\Http\Request;

class MoniteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $moniteurs=Moniteur::get();

        return $moniteurs;
    }
    public function index()
    {
        $moniteurs = Moniteur::latest()->paginate(5);
  
        return view('moniteurs.index',compact('moniteurs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moniteurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',
           
        ]);
        // $id = Auth::id();
        //moniteur::create($request->all());
       
      //  moniteur->gestionnaires_id = 8;
        $moniteur = new Moniteur([
            'nom' => $request->get('nom'),
            'prenom'=> $request->get('prenom'),
            'telephone'=> $request->get('telephone'),
            'adresse'=> $request->get('adresse'),
           
            
            //'users_id'=> 8
          ]);
          $moniteur->save();
   
        return redirect()->route('moniteurs.index')
                        ->with('success','moniteur created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Moniteur  $moniteur
     * @return \Illuminate\Http\Response
     */
    public function show(Moniteur $moniteur)
    {
        return view('moniteurs.show',['moniteur'=>$moniteur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Moniteur  $moniteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Moniteur $moniteur)
    {
        //echo moniteur;
      // dd();
        //$birthday = date('Y/m/d', strtotime(moniteur->ddn));
    $nom = $moniteur->nom;
         
    return view('moniteurs.edit',compact('moniteur','nom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Moniteur  $moniteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Moniteur $moniteur)
    {
        $request->validate([
            // 'gestionnaires_id' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',
           
         ]);
 
         
         $moniteur = Moniteur::find($moniteur->id);
        
         $moniteur->update($request->all());
         
         return redirect()->route('moniteurs.index')
                         ->with('success','moniteur updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Moniteur  $moniteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moniteur $moniteur)
    {
        $moniteur = Moniteur::find($moniteur->id);
        $moniteur->delete();
        return redirect()->route('moniteurs.index')
                        ->with('success','moniteurs deleted successfully');
    }
}
