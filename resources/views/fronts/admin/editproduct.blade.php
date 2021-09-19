@extends('layouts/adminlayout')


@section('css')
    
@endsection

@section('content')
<div class="container">
    <form action="" method="POST">
        @csrf   
    <div class="row mb-5 mt-5">
        <div class="col-4 mb-5">
            <img class="w-100" src="{{asset('/images/products/laptop1.jpg')}}" alt="">  
        </div>
        <div class="col-8 ps-5">
            <div class="form-group mb-3">
                <h5>Kategori</h5>
                <select class="w-100" name="category_id" id="category_id" onChange="category(this.value)">
                    @foreach (getCategoryNames() as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select>             
            </div>
            <div class="form-group mb-3">
                <h5>Başlık</h5>
                <input type="text" name="product_name" class="w-100" value="{{ $product->product_name }}">
            </div>   
            <div class="form-group mb-3">
                <h5>Stok</h5>
                <input type="text" name="product_stok" class="w-20" value="{{ $product->stok }}">
            </div>   
            <div class="form-group mb-3">
                <h5>Fiyat</h5>
                <input type="text" name="product_price" class="w-20" value="{{ $product->selling_price }}">
            </div>       
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="mb-4">ÜRÜN ÖZELLİKLERİ BELİRLE</h4> 
            <div class="product-options" id="product_options">
                @if ( count($product->product_variants) > 0 )
                    <div class="row">
                        @foreach ($product->product_variants as $product_variant)
                        <div class="col-sm-6 col-12">
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="min-width: 130px;">{{ $product_variant->variant->value }}</span>
                                <input type="text" class="form-control" value="{{ $product_variant->variant_name }}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <div class="col-12 mb-4">
            <button type="submit" class="btn btn-success w-100">Kaydet</button>
        </div>
    </div>
</form>
</div>

@endsection



@section('js')
    
@endsection