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
            <select class="form-select float-start" id="brands" onchange= "listbybrand(this.value)" aria-label="Default select example" style="max-width: 150px;">
                <option selected>Marka Seç</option>
                @foreach ($products as $product)
                     <option value="{{$product->brandnames->id}}" data-value="123">{{$product->brandnames->brand_name}}</option>
                @endforeach
            </select>
            <select class="form-select float-end" aria-label="Default select example" style="max-width: 150px;">
                <option selected>Akıllı Sıralama</option>
                <option value="1">Yeni Gelenler</option>
                <option value="2">Fiyata Göre En Düşük</option>
                <option value="3">Fiyata Göre En Yüksek</option>
            </select>
        </div>
    </div>

    <div class="row mt-2" id="productslist">
        @if ( count($products) > 0 )
            @foreach ($products as $product)
                @include('fronts.components.products.single-product', ['product' => $product])
            @endforeach
        @else
            <div class="alert alert-warning">
                Ürün bulunamadı.
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-12">
            {{$products->links();}}
        </div>
    </div>
@endsection
@section('js')
<script>

    function listbybrand(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var formData = {
            "_token": "{{ csrf_token() }}",
            id: id,
        };
        $.ajax({
            url: "/listallproductbybrand",
            type: "POST",
            dataType: "JSON",
            data: formData,
            success: function (data) {
           console.log(data);
                localStorage.setItem("data", JSON.stringify(
                data)); /* GELEN JSON DATAYI JS DILINE ÇEVİRİYORUZ*/
                //console.log(data.data[0]);
             $('#productslist').html("");
                for(var i =0 ; i<data.data.length ; i++)
                {
                    var html="<div class='col-md-4 mb-4'>"+
                                "<div class='product-box border'>"+
                                    "<div class='row m-0 p-0'>"+
                                        "<div class='col-md-12 m-0 p-0'>"+
                                            "<img class='w-100'  src='{{ asset('/images/products/laptop1.jpg') }}'alt=''>"+
                                        "</div>"+
                                        "<div class='row' style=''>"+
                                        "<h4 class='text-center' style='color: #233772;'>" + data.data[i].product_name + "</h4>"+
                                        "</div>"+
                                        "<div class='row' style='min-height: 120px; max-height: 120px;'>"+
                                            "<div class='col-md-12'>" ; 
                  
                   console.log(data.data[0].product_variants[0].variant_name);              
                               for(var j=0 ; j<data.data[i].product_variants.length ; j++)
                               {
                                   html += "<i class='bi bi-arrow-right-circle-fill ps-3' style='display: inline;''> </i>"+
                                    "<span class='p-2' style='color:grey;'>"+ data.data[i].product_variants[j].variant_name + "</span><br>";

                               }                               
                    html+= "</div>"+
                        "</div>"+
                        "<div class='row mt-5'>"+
                            "<div class='col-12 d-flex justify-content-between ms-2'>"+
                                "<div>"+
                                  
                                        "<span style='color:#1DBE11;'>Stokta</span>"+                                
                                 
                                "</div>"+
                                "<div>"+
                                    "<span style='font-weight: bold;'>" + "</span>"+ 
                                    "<span style='font-size: 10px;'>KDV Dahil</span>"+
                                "</div>"+
                           "</div>"+
                        "</div>"+
                    "<a href='' class='btn btn-primary'>Detay Gör</a>"+
                    "</div>"+
                "</div>"+
           "</div>";
          $('#productslist').append( html );                 
                }
            
            }
        });
    }
</script>
@endsection
