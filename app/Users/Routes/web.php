<?php

/**-----------------------------------------------------------
 * Users routes
 * -----------------------------------------------------------
 */

use App\Users\Http\Controllers\UserEdit;
use App\Users\Http\Controllers\UserUpdate;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // edit
    Route::get('users/{user}/edit', UserEdit::class)->name('users.edit');

    // update
    Route::patch('users/{user}/update', UserUpdate::class)->name('users.update');

});

require __DIR__ . '/auth.php';
