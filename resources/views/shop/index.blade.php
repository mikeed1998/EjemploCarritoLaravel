@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')

    
    @foreach ($products->chunk(3) as $productChunk)
        <div class="row py-5">
            @foreach ($productChunk as $product)
            <div class="col-sm-6 col-md-4 position-relative mt-5">
                <div class="thumbnail border px-5">
                    <div class="row">
                        <div class="col text-center mx-auto">
                            <img src="{{ asset('img/'.$product->imagePath) }}" alt="" class="img-fluid text-center">
                        </div>
                    </div>
                    <div class="caption mb-5">
                        <h3>{{ $product->title }}</h3>
                        <p class="mt-5 description">{{ $product->description }}</p>
                        <small class="py-5 price">{{ $product->price }}</small>
                    </div>
                </div>
                <div class="col-6 position-absolute top-100 start-50 translate-middle-y">
                    <p>
                        <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success" role="button">Add to Cart</a>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    @endforeach
   
   
@endsection