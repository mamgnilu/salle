<?php

namespace App\Http\Controllers;

use App\Activite;
use App\Moniteur;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list()
    {
        $activites=Activite::get();

        return $activites;
    }
    public function index()
    {
        $activites = Activite::latest()->paginate(5);
  
        return view('activites.index',compact('activites'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $moniteurs = Moniteur::all();
        return view('activites.create',compact('moniteurs'));
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
           
            'libelle' => 'required',
             'description' => 'required',
            'nom' => 'required',
            'montant' => 'required',
            'avance' => 'required',
            'datedebut' => 'required',
            'datefin' => 'required',
            
        ]);
        // $id = Auth::id();
        //activite::create($request->all());
       
      //  activite->gestionnaires_id = 8;
      // echo $request->get('description')
      echo $request->get('nom');
       dd();
        $activite = new activite([
            'libelle' => $request->get('libelle'),
            'description'=> $request->get('description'),
            'nom'=> $request->get('nom'),
            'montant'=> $request->get('montant'),
            'avance'=> $request->get('avance'),
            'datedebut'=> $request->get('datedebut'),
            'datefin'=> $request->get('datefin'),
            
            'moniteurs_id'=> $request->get('moniteurs_id'),
          ]);
          $activite->save();
   
        return redirect()->route('activites.index')
                        ->with('success','activite created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $activite)
    {
        return view('activites.show',['activite'=>$activite]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit(Activite $activite)
    {
           //echo activite;
      // dd();
        //$birthday = date('Y/m/d', strtotime(activite->ddn));
    $birthday = $activite->ddn;
         
    return view('activites.edit',compact('activite','birthday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actvite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activite $activite)
    {
        $request->validate([
           
            'libelle' => 'required',
            'description' => 'required',
            'nom' => 'required',
            'montant' => 'required',
            'avance' => 'required',
            'datedebut' => 'required',
            'datefin' => 'required',
         ]);
 
         
         $activite = Activite::find($activite->id);
        
         //activite->update($request->all());
         
         return redirect()->route('activites.index')
                         ->with('success','activite updated successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activite $activite)
    {
        $activite = Activite::find($activite->id);
        $activite->delete();
        return redirect()->route('activites.index')
                        ->with('success','activites deleted successfully');
    }
}
