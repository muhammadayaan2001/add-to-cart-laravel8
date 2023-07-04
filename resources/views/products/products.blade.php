@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center align-items-center">
        @foreach($products as $product)
        <div class="card mr-3">
            <span class="percent">-10%</span>
            <div class="card-image">
                <img src="{{ $product->image }}" width="250">
            </div>
            <div class="card-inner">
                <span>Groceries</span>
                <h5 class="mb-0">{{ $product->name }}</h5>
                <div class="price">
                    <span>$22.99</span>
                    <sup>${{ $product->price }}</sup>
                </div>
                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-success text-uppercase btn-sm details">{{ $product->description }}</button>
                    <div class="d-flex flex-row">
                        <span class="wishlist"><i class="fa fa-heart"></i></span>
                        <span class="cart"><a href="{{ route('add.to.cart', $product->id) }}"><i class="fa fa-shopping-cart"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection


<script>

</script>
