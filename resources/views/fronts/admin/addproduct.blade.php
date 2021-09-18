@extends('layouts.adminlayout')

@section('css')
   <style>
    .form-group input,select{
        border:0.5px solid #ccc;
    }
   </style>
@endsection
@section('content')
<div class="container">
    <form action="" method="POST">
        @csrf   
    <div class="row mb-5 mt-5">
        <div class="col-4 mb-5">
            <img class="w-100" src="{{asset('/images/products/laptop1.jpg')}}" alt="">
            {{-- <form method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Lütfen Ürün Kategorisi Seçiniz</label>
                    <select name="option_id" id="option_id" onChange="category(this.value)">
                        @foreach (getCategoryNames() as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Ürün İsmi</label>
                    <input type="text" name="product_name" id="product_name">                   
                </div>


                <div class="form-group mb-3" id="product_options">

                <div>
            

            </form> --}}
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
                <input type="text" name="product_name" class="w-100">
            </div>   
            <div class="form-group mb-3">
                <h5>Adet</h5>
                <input type="text" name="product_stok" class="w-20">
            </div>   
            <div class="form-group mb-3">
                <h5>Fiyat</h5>
                <input type="text" name="product_price" class="w-20">
            </div>       
        </div>
    </div>
    <div class="row">
        <h4 class="mb-4" style="margin-left:20%;">ÜRÜN ÖZELLİKLERİ BELİRLE</h4>
        <div class="col-md-5">            
            <div class="product-options" id="product_options">     
            </div>
        </div>
        <div class="col-md-5">
            <div class="product-options2" id="product_options2">           
            </div>
        </div>
        <input type="submit" class="btn btn-success mt-3" value="Oluştur"></button>
    </div>
</form>
</div>


@endsection

@section('js')
<script>
    function category(id) {
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
            url: "/admin/getproductbycategory",
            type: "POST",
            dataType: "JSON",
            data: formData,
            success: function (data)
             {                    
                 localStorage.setItem("data", JSON.stringify(data)); /* GELEN JSON DATAYI JS DILINE ÇEVİRİYORUZ*/
                 console.log(data);
                 $("#product_options").html("");// HER YENİ KATEGORİDE SIFIRLAMA İŞLEMİ
                 $("#product_options2").html("");              
                 for (var i = 0; i < data.length; i++)
                 {                      
                    if(i<4){
                      $("#product_options").append(
                        " <div class='form-group mb-3'>"+
                        " <h5>"+data[i].value+"</h5>"+
                        " <input type='hidden' name='variant_id[]' value="+data[i].id+">"+
                        " <input type='text' name='variant_name[]' class='w-50'></div>"                       
                        );
                    }
                    else{
                        $("#product_options2").append(
                        " <div class='form-group mb-3'>"+
                        " <h5>"+data[i].value+"</h5>"+
                        " <input type='hidden' name='variant_id[]' value="+data[i].id+ ">"+
                        " <input type='text' name='variant_name[]' class='w-50'></div>"                       
                        );
                    }
                  }          
            }
        });
    }

</script>

@endsection
