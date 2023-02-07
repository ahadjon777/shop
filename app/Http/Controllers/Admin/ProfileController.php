<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.layout.profile.index');
    }

    public function notification()
    {
        return view('admin.layout.profile.notification');
    }

    public function connection()
    {
        return view('admin.layout.profile.connection');
    }
}
