<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $set = Setting::where('id', 1)->first();
        return view('admin.layout.setting.index', compact('set'));
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
     * @param  \App\Models\Admin\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }
//'brand_name'=>'AKT AHI',
//'site_status'=>'Yangiliklar olamiga xush kelibsiz',
//'site_name'=>'akt.uz',
//'status_mess'=>'lorem ip sum',
//'logo'=>'jlk',
//'site_info'=>'lorem ipsum!!!!',
//'name'=>'Jon',
//'company_name'=>'Soft developer',
//'email'=>'mirjalol@gmail.com',
//'phone_number'=>998943031323,
//'message'=>'assalomu alekum hammaga bizni companyga xush kelibsizlar',
//'instagram'=>'ahadjon385',
//'youtube'=>'Ahadjon_youtobe',
//'twitter'=>'Ali@34',
//'telegram'=>'@interested777'
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {

        $image_path = $request->file('logo')->store('image');

//       $setting->update([
//           'brand_name'=>$request->brand_name,
//           'site_status'=>$request->site_status,
//           'site_name'=>$request->site_name,
//           'status_mess'=>$request->status_mess,
//           'site_info'=>$request->site_info,
//           'name'=>$request->name,
//           'company_name'=>$request->company_name,
//           'email'=>$request->email,
//           'phone_name'=>$request->phone_name,
//           'message'=>$request->message,
//           'instagram'=>$request->instagram,
//           'youtube'=>$request->youtube,
//           'twitter'=>$request->twitter,
//           'telegram'=>$request->telegram,
//           'logo'=>$image_path
//       ]);
//        dd($image_path);
       return redirect(route('admin.setting'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
