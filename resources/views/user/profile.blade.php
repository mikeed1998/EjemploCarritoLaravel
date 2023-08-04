@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>User Profile</h1>
        <hr>
        <h2>My orders</h2>

        @foreach ($orders as $order)
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group mt-5">
                        @foreach ($order->cart->items as $item)
                            <li class="list-group-item">
                                {{ $item['item']['title'] }} | {{ $item['qty'] }} Units
                                <span class="badge bg-secondary text-white">${{ $item['price'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">
                    <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
                </div>
            </div>    
        @endforeach
        
    </div>
</div>
@endsection