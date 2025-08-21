<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();

        foreach ($users as $user) {
            echo $user->name . '<br>';
            echo $user->email . '<br>';

             foreach ($user->role as $role) {
                echo $role->role_name . '<br>';
            }

            echo '<hr>';

        // foreach ($users as $user) {
        //    
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user= User::find(2);
        
        // attach add new records
        // $roles = [2, 3 ,4];
        // $user->role ()->attach($roles);

        //delete Records
        // $roles = [2, 3 ,4];
        // $user->role ()->detach($roles);

        //sync existing records
        $roles = [2, 3 ,4];
        $user->role ()->sync($roles);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
