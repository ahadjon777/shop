<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::where(['id'=>auth()->user()->id])->first();
        return view('admin.layout.profile.index', compact('profile'));
    }

    public function notification()
    {
        return view('admin.layout.profile.changePassword');
    }

    public function connection()
    {
        return view('admin.layout.profile.connection');
    }

    public function update(Request $request)
    {
       $profile = Profile::where('user_id', auth()->user()->id)->first();

        $request->validate([
            'profile_photo' => 'mimes:jpeg,bmp,png,gif,svg'
        ]);

        if($request->hasFile('profile_photo')){

             $profile->update([
                 'first_name'=>$request->first_name,
                 'ph_number'=> $request-> ph_number,
                 'state'=> $request-> state,
                 'country'=> $request->country,
                 'time_zone'=> $request->time_zone,
                 'last_name'=> $request->last_name,
                 'organization'=>$request->organization,
                 'address'=> $request->address,
                 'zip_code'=> $request->zip_code,
                 'language'=>$request->language ,
                 'currency'=> $request->currency
             ]);
             return redirect(route('admin.profile'));
         }
        $profile->update([
            'first_name'=>$request->first_name,
            'email'=>$request-> email,
            'ph_number'=> $request-> ph_number,
            'state'=> $request-> state,
            'country'=> $request->country,
            'time_zone'=> $request->time_zone,
            'last_name'=> $request->last_name,
            'organization'=>$request->organization,
            'address'=> $request->address,
            'zip_code'=> $request->zip_code,
            'language'=>$request->language ,
            'currency'=> $request->currency
        ]);
//        dd($profile);
        return redirect(route('admin.profile'));
    }
}
