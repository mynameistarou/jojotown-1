@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">商品一覧</div>
                <div>
                    <a class="btn btn-link" href="/admin/product/create">
                        新規作成
                    </a>
                </div>
                <div class="card-body">
                    ここに一覧を表示する予定
                </div>
                <div>
                    <a class="btn btn-link" href="/admin/product/edit/1">
                        idが1の商品を編集
                    </a>
                    <a class="btn btn-link" href="/admin/product/destroy/1">
                        idが1の商品を削除
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
