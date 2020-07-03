<?php
function totalCartItems()
{
    if (!\Cart::session(auth()->id())->getContent()->isEmpty())
        return \Cart::session(auth()->id())->getContent()->count();
    else
        return 0;
}


