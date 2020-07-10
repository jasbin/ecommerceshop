<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $data['cartContents'] = \Cart::session(auth()->id())->getContent();
        $data['subTotalPrice'] = \Cart::session(auth()->id())->getSubTotal();
        $data['totalPrice'] = \Cart::session(auth()->id())->getTotal();
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

    public function applyCoupon()
    {
        $coupon_code = request('coupon_code');
        $coupon = Coupon::where('coupon_code',$coupon_code)->first();
        if($coupon != null)
        {
            $condition = new \Darryldecode\Cart\CartCondition(array(
                'name' => $coupon->name,
                'type' => $coupon->type,
                'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
                'value' => $coupon->value,
            ));

            \Cart::session(auth()->id())->condition($condition); // for a speicifc user's cart

            return back()->with('success','Coupon Code applied successfully!');
        }

        return back()->with('error','Coupon Code does not exist!');
    }
}
