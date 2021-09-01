<?php

namespace App\Users\Http\Controllers\Auth;

use App\Core\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmailVerificationNotificationController extends Controller {

    /**
     * Send a new email verification notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if ($request->user()->hasVerifiedEmail()) {
            return Redirect::route('dashboard');
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
