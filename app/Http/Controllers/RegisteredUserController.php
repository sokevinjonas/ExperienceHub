<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Artesaos\SEOTools\Facades\SEOTools;

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
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'min:2', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'username.required' => 'Le pseudo est obligatoire.',
            'username.string' => 'Le pseudo doit être une chaîne de caractères.',
            'username.max' => 'Le pseudo ne peut pas dépasser 255 caractères.',
            'username.min' => 'Le pseudo doit contenir au moins 2 caractères.',
            'username.unique' => 'Ce pseudo est déjà utilisé.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('public.pages.home', absolute: false));
    }
}