<?php

namespace App\Http\Controllers\Boshqarma;

use App\Http\Controllers\Controller;
use App\Models\Boshqarma;
use Illuminate\Http\Request;

class BoshqarmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layout.boshqarma.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layout.boshqarma.create');
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
     * @param  \App\Models\Boshqarma  $boshqarma
     * @return \Illuminate\Http\Response
     */
    public function show(Boshqarma $boshqarma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Boshqarma  $boshqarma
     * @return \Illuminate\Http\Response
     */
    public function edit(Boshqarma $boshqarma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Boshqarma  $boshqarma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boshqarma $boshqarma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Boshqarma  $boshqarma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boshqarma $boshqarma)
    {
        //
    }
}
