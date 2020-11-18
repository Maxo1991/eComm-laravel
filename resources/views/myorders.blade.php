@extends('master')
@section('content')
    <div class="custom-products">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>My orders</h2>
                @foreach($orders as $item)
                    <div class="row search-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{ $item->id }}">
                                <img class="trending-image" src="{{ $item->gallery }}" alt="{{ $item->name }}">
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="detail/{{ $item->id }}">
                                <div class="">
                                    <h3>Name: {{ $item->name }}</h3>
                                    <h5>Delivery status: {{ $item->status }}</h5>
                                    <h5>Address: {{ $item->address }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
