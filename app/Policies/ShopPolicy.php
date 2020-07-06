<?php

namespace App\Policies;

use App\Models\Shop;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;


    public function before($user)
    {
        if($user->hasRole('admin'))
            return true;
    }

    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }

    public function read(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    public function edit(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    public function update(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    public function delete(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Shop  $shop
     * @return mixed
     */


}
