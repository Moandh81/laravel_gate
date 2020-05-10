<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{


    public function __construct()
    
    {
        $this->middleware('auth') ;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::all() ;
        return view('admin.users.index' , ['users' => $users]) ;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {



        $roles = Role::all() ;


        return view('admin.users.edit' , ["user" => $user , "roles" => $roles]) ;
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


        if (Gate::denies('edit-users')) {
            return redirect()->route('admin.users.index') ;
        }
        
        

        $validatedData = $request->validate([

            'name' => 'required' ,
            'email' => "required"
        ]) ;


$user->email = $validatedData['email'] ;
$user->name = $validatedData['name'] ;
$user->save() ;
        $user->roles()->sync($request->roles) ;
                       
        return redirect( )->route('admin.users.index') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        
        if (Gate::denies('delete-users')) {
            return redirect()->route('admin.users.index') ;
        }


        // on supprime les relations avant de supprimer l'utilisateur
        $user->roles()->detach() ;
        $user->delete() ;

        return redirect()->route('admin.users.index') ;
    }
}
