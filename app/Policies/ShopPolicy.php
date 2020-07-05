<?php

namespace App\Policies;

use App\Models\Shop;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;


    public function browse(User $user)
    {
        return $user->hasRole('seller') || $user->hasRole('admin');
    }

    public function read(User $user)
    {
        return $user->hasRole('seller') || $user->hasRole('admin');
    }

    public function edit(User $user)
    {
        return $user->hasRole('seller') || $user->hasRole('admin');
    }

    public function update(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id || $user->hasRole('admin');
    }

    public function delete(User $user)
    {
        return $user->hasRole('seller') || $user->hasRole('admin');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Shop  $shop
     * @return mixed
     */


}
