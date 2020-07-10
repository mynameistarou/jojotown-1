@extends('layouts.common')

@section('content')

<div id="man">
    <div class="headline">
        <h2>man</h2>
    </div>
    <div class="main">
        @foreach ($products as $product)
        <div class="man_list">
            <a href="#">
                <img src="{{ $product['image_url'] }}" alt="画像例1">
            </a>
            <p>
                {{ $product['name'] }}
            </p>
        </div>
        @endforeach
    </div>
</div>

@endsection
