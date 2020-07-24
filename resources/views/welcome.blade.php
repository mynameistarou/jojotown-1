@extends('layouts.common')

@section('content')

<!-------------------------------main----------------------------->
        <div class="table">
            <ul>
                <li><a href="#man">man</a></li>
                <li><a href="#woman">woman</a></li>
                <li><a href="#item">item</a></li>
                <li><a href="#color">color</a></li>
            </ul>
        </div>
        <div id="man">
            <div class="headline">
                <h2>man</h2>
            </div>
            <div class="main">
                
                @foreach ($products as $product)
                <div class="man_list">
                    <a href="{{ $product['url'] }}">
                        <img src="{{ $product['image_url'] }}" alt="画像例1">
                    </a>
                    <p>
                        <a href="/product/create">{{ $product['name'] }}</a>
                    </p>
                </div>
                @endforeach
                
            </div>
        </div>

@endsection
