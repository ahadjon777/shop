<?php

namespace App\Http\Controllers\Computer;

use App\Http\Controllers\Controller;
use App\Models\Compyuter;
use Illuminate\Http\Request;

class CompyuterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comp = Compyuter::all();
        $c = 1;
        return view('admin.layout.computer.index', compact('comp', 'c'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layout.computer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Compyuter::create([
            'model'=>$request->model,
            'seria_name'=>$request->seria_name,
            'qmd_model'=>$request->qmd_model,
            'qmd_seria'=>$request->qmd_seria,
            'ssd_number'=>$request->ssd_number,
            'ssd_model'=>$request->ssd_model,
            'monitor_number'=>$request->monitor_number,
            'monitor_model'=>$request->monitor_model,
            'ishlangan_sana'=>$request->ishlangan_sana,
            'hisob_sana'=>$request->hisob_sana,
            'olindi'=>$request->olindi,
            'topshirdi'=>$request->topshirdi,
        ]);
        return redirect(route('admin.computer.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compyuter  $compyuter
     * @return \Illuminate\Http\Response
     */
    public function show(Compyuter $compyuter)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compyuter  $compyuter
     * @return \Illuminate\Http\Response
     */
    public function edit(Compyuter $compyuter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compyuter  $compyuter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compyuter $compyuter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compyuter  $compyuter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compyuter $compyuter)
    {
        //
    }
}
