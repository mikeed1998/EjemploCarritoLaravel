@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    @if (Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach ($products as $product)
                        <li class="list-group-item">
                            <span class="badge bg-secondary text-white">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['title'] }}</strong>
                            <span class="badge bg-success text-white">
                                {{ $product['price'] }}
                            </span>
                            <div class="btn-group">
                                <button type="button" class="button btn btn-primary btn-xs dropdown-toggle" data-bs-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}" class="dropdown-item">Reduce by 1</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}" class="dropdown-item">Reduce All</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-success">
                    Checkout
                </a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No items in Cart.</h2>
            </div>
        </div>
    @endif
@endsection