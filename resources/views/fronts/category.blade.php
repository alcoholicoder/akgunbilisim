@extends('layouts.productlayout')
@section('css')
    <style>
        .product-box:hover {
            box-shadow: 0 0 15px #ccc;
            transition: 0.5s;
        }

    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <select class="form-select float-end" aria-label="Default select example" style="max-width: 150px;">
                <option selected>Akıllı Sıralama</option>
                <option value="1">Yeni Gelenler</option>
                <option value="2">Fiyata Göre En Düşük</option>
                <option value="3">Fiyata Göre En Yüksek</option>
            </select>
        </div>
    </div>

    <div class="row mt-2">
        @if ( count($category->products) > 0 )
            @foreach ($category->products as $product)
                @include('fronts.components.products.single-product', ['product' => $product])
            @endforeach
        @else
            <div class="alert alert-warning">
                Ürün bulunamadı.
            </div>
        @endif
    </div>
@endsection
@section('js')

@endsection
