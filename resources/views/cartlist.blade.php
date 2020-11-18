@extends('master')
@section('content')
    <div class="custom-products">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>Result for products</h2>
                @foreach($products as $item)
                    <div class="row search-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-image" src="{{ $item->gallery }}" alt="{{ $item->name }}">
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="detail/{{ $item->id }}">
                                <div class="">
                                    <h3>{{ $item->name }}</h3>
                                    <h5>{{ $item->description }}</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove from Cart</a>
                        </div>
                    </div>
                @endforeach
                <a href="ordernow" class="btn btn-success">Order now</a><br><br>
            </div>
        </div>
    </div>
@endsection
