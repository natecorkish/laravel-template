<?php

namespace App\Users\Http\Controllers;

use App\Core\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class UserEdit extends Controller {

    /**-----------------------------------------------------------
     * Show the edit profile page
     *
     * @return \Illuminate\Contracts\View\View
     * -----------------------------------------------------------
     */
    public function __invoke(): View {
        $user = Auth::user();

        return view('users::scenes.edit', compact('user'));
    }
}
