<?php

namespace App\Users\Http\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Users\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserUpdate extends Controller {

    /**
     * Update the user's profile
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request): RedirectResponse {

        User::find(Auth::user()->id)->update($request->validated());

        return Redirect::back()
            ->withSuccess('You have successfully updated your profile.');
    }
}
