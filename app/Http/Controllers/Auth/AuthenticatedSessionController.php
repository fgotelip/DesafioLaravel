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
            dd("administrador");
            return redirect()->route('dashbord');
        } else if(Auth::guard('paciente')->attempt($credentials)){
            return redirect()->route('paciente.dashboard');
        }
        else if(Auth::guard('medico')->attempt($credentials)){
            return redirect()->route('medico.dashboard');
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
