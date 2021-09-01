<?php

namespace App\Users\Http\Controllers\Auth;

use App\Core\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ConfirmablePasswordController extends Controller {

    /**
     * Show the confirm password view.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request) {
        return view('users::scenes.auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     *
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function store(Request $request) {
        if (!Auth::guard('web')->validate([
            'email'    => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('scenes::auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
