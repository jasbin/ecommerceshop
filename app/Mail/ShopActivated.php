<?php

namespace App\Mail;

use App\Models\Shop;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShopActivated extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Shop
     */
    public $shop;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Shop $shop)
    {
        //
        $this->shop = $shop;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.customer.shop-activated');
    }
}
