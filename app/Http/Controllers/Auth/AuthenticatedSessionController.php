<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        /*
        $request->authenticate();

        $request->session()->regenerate();

        */

        $credentials = $request->only('email','password');

        //dd($credentials);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        } else if(Auth::guard('patient')->attempt($credentials)){
            return redirect()->route('patient.full');
        }
        else if(Auth::guard('doctor')->attempt($credentials)){
            return redirect()->route('doctor.dashboard');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
