<?php

namespace App\Users\Observers;

use App\Users\Models\User;

class UserObserver {

    /**-----------------------------------------------------------
     * Handle the User "created" event.
     *
     * @param \App\Users\Models\User $user
     * @return void
     * -----------------------------------------------------------
     */
    public function created(User $user) {

    }

}
