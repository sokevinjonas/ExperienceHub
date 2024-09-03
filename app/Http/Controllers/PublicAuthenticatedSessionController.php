<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\PublicLoginRequest;

class PublicAuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        $appName = config('app.name');
        $pageTitle = "Connexion - {$appName}";


        // Retourner la vue avec le titre
        return view('public.auth.signin');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(PublicLoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $user = auth()->user();

        if ($user) {
        $role = $user->role->name;
        if (in_array($role, ['administrateur', 'modérateur'])) {
            return redirect()->intended(route('admin.admin'));
        }
    }

        return redirect()->intended(route('public.pages.home', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('public.pages.home');
    }
}
