<?php

namespace App\Users\Http\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Users\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserUpdate extends Controller {

    /**-----------------------------------------------------------
     * Update the user's profile
     *
     * @return \Illuminate\Http\RedirectResponse
     * -----------------------------------------------------------
     */
    public function __invoke(UserUpdateRequest $request): RedirectResponse {
        User::find(Auth::user()->id)->update($request->validated());

        return back()->withSuccess('You have successfully updated your profile.');
    }
}
