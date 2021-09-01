<?php

namespace App\Users\Http\Controllers\Auth;

use App\Core\Http\Controllers\Controller;
use App\Users\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthenticatedSessionController extends Controller {

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('users::scenes.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param \App\Users\Http\Requests\Auth\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(LoginRequest $request) {
        $request->authenticate();

        $request->session()->regenerate();

        return Redirect::route('dashboard');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
