<?php

namespace App\Http\Controllers;

use App\Abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list()
    {
        $abonnes=Abonne::get();

        return $abonnes;
    }
    public function index()
    {
        
        $abonnes = Abonne::latest()->paginate(5);
  
        return view('abonnes.index',compact('abonnes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abonnes.create');
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
            'motivation' => 'required',
            
        ]);
        // $id = Auth::id();
       //Abonne::create($request->all());
       
        //$abonne->users_id = 8;
        $abonne = new Abonne([
            'nom' => $request->get('nom'),
            'prenom'=> $request->get('prenom'),
            'telephone'=> $request->get('telephone'),
            'adresse'=> $request->get('adresse'),
            'motivation'=> $request->get('motivation'),
            'users_id'=> $request->get('users'),
          ]);
          $abonne->save();
   
        return redirect()->route('abonnes.index')
                        ->with('success','abonne created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function show(Abonne $abonne)
    {
        return view('abonnes.show',['abonne'=>$abonne]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function edit(Abonne $abonne)
    {
        //echo abonne;
      // dd();
        //$birthday = date('Y/m/d', strtotime(abonne->ddn));
    $birthday = $abonne->ddn;
         
    return view('abonnes.edit',compact('abonne','birthday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abonne $abonne)
    {
        $request->validate([
            // 'gestionnaires_id' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'adresse' => 'required',
            'motivation' => 'required',
           
         ]);
 
         
         $abonne = Abonne::find($abonne->id);
        
         //abonne->update($request->all());ndir
         
         return redirect()->route('abonnes.index')
                         ->with('success','abonne updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonne $abonne)
    {
        $abonne = Abonne::find($abonne->id);
        $abonne->delete();
        return redirect()->route('abonnes.index')
                        ->with('success','abonnes deleted successfully');
    }
}
