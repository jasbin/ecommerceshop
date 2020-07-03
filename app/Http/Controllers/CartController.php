<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $data['cartContents'] = \Cart::session(auth()->id())->getContent();
        $data['totalPrice'] = \Cart::getTotal();
        return view('cart.index', $data);
    }

    public function add(Product $product)
    {
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');
    }

    public function update(Request $request, $product)
    {
        \Cart::session(auth()->id())->update($product, [
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity,
            ),
        ]);
        return back();
    }

    public function destroy($product)
    {
        \Cart::session(auth()->id())->remove($product);

        return back();
    }

    public function checkout()
    {
        return view('cart.checkout');
    }
}
