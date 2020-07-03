@component('mail::message')
    # Invoice Paid

    Thankyou for the purchase

    Here is your receipt

    <table class="table">
        <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->items as $item)
            <tr>
                <td scope="row">{{$item->name}}</td>
                <td>{{$item->pivot->quantity}}</td>
                <td>{{$item->pivot->price}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    Total : {{$order->grand_total}}
    @component('mail::button', ['url' => ''])
        View Receipt
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
