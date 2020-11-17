@extends('master')
@section('content')
    <div class="custom-products">
        <div class="col-sm-4">
            <a href="">Filter</a>
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h2>Result for products</h2>
                @foreach($products as $item)
                    <div class="search-item">
                        <a href="detail/{{ $item['id'] }}">
                            <img class="trending-image" src="{{ $item['gallery'] }}" alt="{{ $item['name'] }}">
                            <div class="">
                                <h3>{{ $item['name'] }}</h3>
                                <h5>{{ $item['description'] }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

