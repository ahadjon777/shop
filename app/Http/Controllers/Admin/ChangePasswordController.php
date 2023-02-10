<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ChangePassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('admin.layout.change.Password.')
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
     * @param  \App\Models\Admin\ChangePassword  $changePassword
     * @return \Illuminate\Http\Response
     */
    public function show(ChangePassword $changePassword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\ChangePassword  $changePassword
     * @return \Illuminate\Http\Response
     */
    public function edit(ChangePassword $changePassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\ChangePassword  $changePassword
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, ChangePassword $changePassword)
    {
        $change=auth()->user();


        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
            'confirm_password'=>'required|same:new_password'
        ]);
        if (Hash::check($request->old_password, $change->password)){
            $change->update([
                'password'=>bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('message', 'password successful update.');

        }
        else{
            return redirect()->back()->with('message','old password does not matched!');
        }
        return redirect(route('admin.profile'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\ChangePassword  $changePassword
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChangePassword $changePassword)
    {
        //
    }
}
