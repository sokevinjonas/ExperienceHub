<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class PublicProfileController extends Controller
{
    public function index()
    {
        $user = request()->user();
        return view('public.profile.user-data', compact('user'));
    }

    public function updateUserData(UpdateUserRequest $request)
    {
        $data = $request->validated();
        $user = request()->user();
        $user->update($data);
        return redirect()->route('public.profile.index')->with('success', 'User data updated successfully');
    }

    public function testimonials()
    {
        $user = request()->user();
        return view('public.profile.tesmonials', compact('user'));
    }
}