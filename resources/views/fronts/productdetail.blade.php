@extends('layouts/productlayout')

@section('css')

@endsection


@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-5 mt-4 mb-4 ">
            <img class="w-100" src="{{ asset('/images/products/laptop1.jpg') }}" alt="">
        </div>
        <div class="col-md-7 mt-4 mb-4 ">

            <div class='col-sm-12 col-12'>
                <div class='input-group mb-3'>
                    <span class='input-group-text' style='min-width: 130px;'>Ürün İsmi</span>
                    <span name='variant_name[]' autocomplete='off'
                        class='form-control'>{{$product->product_name}}</span>
                </div>
            </div>

            <div class='col-sm-12 col-12'>
                <div class='input-group mb-3'>
                    <span class='input-group-text' style='min-width: 130px;'>Kategorisi</span>
                    <span name='variant_name[]' autocomplete='off'
                        class='form-control'>{{$product->category->category_name}}</span>
                </div>
            </div>

            <div class='col-sm-12 col-12'>
                <div class='input-group mb-3'>
                    <span class='input-group-text' style='min-width: 130px;'>Stok</span>
                    <span name='variant_name[]' autocomplete='off' class='form-control'>{{$product->stok}}</span>
                </div>
            </div>

            <div class='col-sm-12 col-12'>
                <div class='input-group mb-3'>
                    <span class='input-group-text' style='min-width: 130px;'>Durumu</span>
                    <span name='variant_name[]' autocomplete='off' class='form-control'>Sıfır</span>
                </div>
            </div>

            <div class='col-sm-12 col-12'>
                <div class='input-group mb-3'>
                    <span class='input-group-text' style='min-width: 130px;'>Fiyatı</span>
                    <span name='variant_name[]' autocomplete='off'
                        class='form-control'>{{$product->selling_price}}</span>
                </div>
            </div>


        </div>
    </div>
    <div class="row">
        <h3 class="text-center mt-5 mb-5">TEKNİK ÖZELLİKLER</h3>

        @foreach ($product->product_variants as $variants)
        <div class='col-sm-12 col-12'>
            <div class='input-group mb-3'>
                <span class='input-group-text' style='min-width: 130px;'> {{$variants->variant->value}}</span>
                <span name='variant_name[]' autocomplete='off'
                    class='form-control'>{{$variants->variant_name}}</span>
            </div>
        </div>

        @endforeach
        {{-- <span class='input-group-text' style='min-width: 130px;'>{{$product->product_variants->variant->value }}</span>
        <span name='variant_name[]' autocomplete='off'
            class='form-control'>{{$product->product_variants->variant_name}}</span> --}}


    </div>
</div>

@endsection


@section('js')

@endsection
