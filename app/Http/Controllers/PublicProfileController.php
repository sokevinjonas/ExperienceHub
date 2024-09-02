<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicProfileController extends Controller
{
    public function index()
    {
        $user = request()->user();
        return view('public.profile.user-data', compact('user'));
    }
}