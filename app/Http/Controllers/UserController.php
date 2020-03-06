<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list()
    {
        $users=User::get();

        return $users;
    }
    public function index()
    {
        $users = User::latest()->paginate(5);
  
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'email' => 'required',
            'ddn' => 'required',
            'adresse' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);
        // $id = Auth::id();
        //user::create($request->all());
        
      //  $user->gestionnaires_id = 8;
        $user = new User([
            'nom' => $request->get('nom'),
            'prenom'=> $request->get('prenom'),
            'telephone'=> $request->get('telephone'),
            'email'=> $request->get('email'),
            'ddn'=> $request->get('ddn'),
            'adresse'=> $request->get('adresse'),
            'role'=> $request->get('role'),
            'password'=> $request->get('password'),
            
            //'gestionnaires_id'=> 8
          ]);
          $user->save();
   
        return redirect()->route('users.index')
                        ->with('success','user created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //echo $user;
      // dd();
        //$birthday = date('Y/m/d', strtotime($user->ddn));
    $birthday = $user->ddn;
         
        return view('users.edit',compact('user','birthday'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
           
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'ddn' => 'required',
            'adresse' => 'required',
            'role' => 'required',
            'password' => 'required',
         ]);
 
         
         $user = User::find($user->id);
        
         //$user->update($request->all());
         
         return redirect()->route('users.index')
                         ->with('success','user updated successfully');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
       // SweetAlert::warning('Warning Message', 'Optional Title');
        $user = User::find($user->id);
        $user->delete();
        return redirect()->route('users.index')
                        ->with('success','users deleted successfully');
    }
}
