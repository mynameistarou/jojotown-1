@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">商品追加フォーム</div>
                <form class="mt-3" method="POST" action="{{ $action }}">
                    @csrf
                    
                    <div class="form-group row">
                        <label for="product_name" class="col-md-4 col-form-label text-md-right">商品名</label>
                        <div class="col-md-6">
                            <input id="product_name" class="form-control" name="product_name" value="{{ old('product_name') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_explain" class="col-md-4 col-form-label text-md-right">商品説明</label>
                        <div class="col-md-6">
                            <textarea id="product_explain" class="form-control" name="product_explain" value="{{ old('product_explain') }}"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">値段（円）</label>
                        <div class="col-md-6">
                            <input type="number" id="price" class="form-control" name="price" value="{{ old('price') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label text-md-right">URL</label>
                        <div class="col-md-6">
                            <input id="url" class="form-control" name="url" value="{{ old('url') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="image_url" class="col-md-4 col-form-label text-md-right">画像URL</label>
                        <div class="col-md-6">
                            <input id="image_url" class="form-control" name="image_url" value="{{ old('image_url') }}">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                送信
                            </button>
                            <a href="/admin/product">商品一覧</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection