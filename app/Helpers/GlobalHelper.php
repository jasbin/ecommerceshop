<?php

use App\Models\Category;

function totalCartItems()
{
    if (!\Cart::session(auth()->id())->getContent()->isEmpty())
        return \Cart::session(auth()->id())->getContent()->count();
    else
        return 0;
}

function categoryChild($id){
    return Category::where('parent_id', $id)->get();
}

