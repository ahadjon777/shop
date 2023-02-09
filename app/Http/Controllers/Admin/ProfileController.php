<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::where('id', 1)->first();
//        dd($profile);
        return view('admin.layout.profile.index', compact('profile'));
    }

    public function notification()
    {
        $profile = Profile::where('id', 1)->first();
        return view('admin.layout.profile.notification', compact('profile'));
    }

    public function connection()
    {
        $profile = Profile::where('id', 1)->first();
        return view('admin.layout.profile.connection', compact('profile'));
    }

    public function update(Request $request, Profile $profile)
    {
       $profile = Profile::where('id', 1)->first();

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
