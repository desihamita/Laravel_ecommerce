<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @php
        $total = 0;
    @endphp
    <div class="container">
        <h1>You have made an order !</h1>
        <table class="table">
            <thead>
                <th>#</th>
                <th>Product Name</th>
                <th>product prices</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </thead>
            <tbody>
                @foreach ($carts as $cart)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$cart->product->product_name}}</td>
                        <td>Rp.{{number_format($cart->product->price)}}</td>
                        <td>{{$cart->quantity}}</td>
                        <td>Rp.{{number_format($cart->quantity * $cart->product->price)}}</td>
                        <td></td>
                    </tr>
                    @php
                        $total += ($cart->quantity * $cart->product->price);
                    @endphp
                @endforeach
            </tbody>
        </table>
        <h1>Total Order : Rp.{{number_format($total)}}</h1>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>