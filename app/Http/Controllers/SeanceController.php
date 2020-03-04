<?php

namespace App\Http\Controllers;

use App\Seance;
use Illuminate\Http\Request;

class SeanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $seances=Seance::get();

        return $seances;
    }

    public function index()
    {
        $seances = Seance::latest()->paginate(5);
  
        return view('seances.index',compact('seances'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seances = Seance::all();
        return view('seances.create',compact('seances'));
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
           
            'tautHoaire' => 'required',
             'montant' => 'required',
            'duree' => 'required',
            
            
        ]);
        // $id = Auth::id();
        //seance::create($request->all());
       
      //  seance->gestionnaires_id = 8;
       //echo $request->get('description');
      //echo $request->get('nom');
       //dd();
        $seance = new Seance([
            'tautHoaire' => $request->get('tautHoaire'),
            'montant'=> $request->get('montant'),
            'duree'=> $request->get('duree'), 
            'activites_id'=> $request->get('activites_id'),
          ]);
          $seance->save();
   
        return redirect()->route('seances.index')
                        ->with('success','seance created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function show(Seance $seance)
    {
        return view('seances.show',['seance'=>$seance]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function edit(Seance $seance)
    {
        $birthday = $seance->ddn;
         
        return view('seances.edit',compact('seance','birthday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seance $seance)
    {
        $request->validate([
           
           
            'tautHoaire' => 'required',
             'montant' => 'required',
            'duree' => 'required',
            
         ]);
 
         
         $seance = Seance::find($seance->id);
        
         //seance->update($request->all());
         
         return redirect()->route('seances.index')
                         ->with('success','seance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seance $seance)
    {
        $seance = Seance::find($seance->id);
        $seance->delete();
        return redirect()->route('seances.index')
                        ->with('success','seances deleted successfully');
    }
}
