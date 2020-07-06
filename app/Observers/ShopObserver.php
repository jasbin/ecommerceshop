<?php

namespace App\Observers;

use App\Mail\ShopActivated;
use App\Models\Shop;
use Illuminate\Support\Facades\Mail;

class ShopObserver
{
    /**
     * Handle the shop "created" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function created(Shop $shop)
    {
        //
    }

    /**
     * Handle the shop "updated" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function updated(Shop $shop)
    {
        //check if active column is changed from inactive to active
        if($shop->getOriginal('is_active') == false && $shop->is_active == true){
            //send mail to customer
            Mail::to($shop->owner)->send(new ShopActivated($shop));

            //change role from customer to seller
            $result = $shop->owner->setRole('seller');
        }
    }

    /**
     * Handle the shop "deleted" event.
     *
     * @param  \App\Shop  $shop
     * @return void
     */
    public function deleted(Shop $shop)
    {
        //
    }

}
