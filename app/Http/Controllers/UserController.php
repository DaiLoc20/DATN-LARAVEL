<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_user_admin()
    {
       $admin = User::where('is_user_admin',1)
       ->with('Images')
       ->paginate(10,['*'],'admin_page');

       $user  = User::where('is_user_admin',0)
       ->with('Images')
       ->paginate(5,['*'],'user_page');
        return view('Admin/User/User-List',compact('admin','user'));
    }

    public function index_admin()
    {
        return view('Layouts/Layout_Admin');
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
