
@if ( isset($product) )
<div class="col-md-4 mb-4">
    <div class="product-box border">
        <div class="row m-0 p-0">
            <div class="col-md-12 m-0 p-0">
                <img class="w-100" src="{{ asset('uploads/product_images/'.$product->id.'/small/'.$product->image) }}" alt="">
            </div>
            <div class="row">
                <h4 class="text-center " style="color: #233772; ">{{ $product->product_name }}</h4>
            </div>
            <div class="row" style="min-height: 120px; max-height: 120px;">
                <div class="col-md-12 ">
                    @php
                        $count=0;
                    @endphp
                    @foreach ($product->product_variants as $product_variant)             
                    @if ($count<5) <!--EN FAZLA PRODUCT CARDA 5 ÖZELLİK YAZDIRIYORUM !-->
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i>
                        <span class="p-2" style="color:grey;">{{ $product_variant->variant_name }}</span><br>
                    @endif
                        @php
                        $count++;
                        @endphp                      
                    @endforeach
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-between ms-2">
                    <div>
                        @if ($product->stok > 0)
                            <span style="color:#1DBE11;">Stokta</span>
                        @else
                            <span style="color:#b81313;">Stok Yok</span>
                        @endif
                    </div>
                    <div>
                        <span style="font-weight: bold;">{{ $product->selling_price }}</span><span
                            style="font-size: 10px;">KDV Dahil</span>
                    </div>
                </div>
            </div>
           <a href="{{ url('product/'.$product->permalink) }}" class="btn btn-primary">Detay Gör</a>
        </div>
    </div>
</div>
@endif

