<?php

namespace App\Users\Http\Controllers\Auth;

use App\Core\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmailVerificationPromptController extends Controller {

    /**
     * Display the email verification prompt.
     *
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function __invoke(Request $request) {
        return $request->user()->hasVerifiedEmail()
            ? Redirect::route('dashboard')
            : view('users::scenes.auth.verify-email');
    }
}
