<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Http\Requests\StorePublicProfileRequest;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $appName = config('app.name');
        $pageTitle = "Créer un Compte - {$appName}";
        return view('public.auth.signup');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StorePublicProfileRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        $data['role_id'] = UserRole::getUserRole()->id;
        $user = User::create($data);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('public.pages.home', absolute: false));
    }
}
