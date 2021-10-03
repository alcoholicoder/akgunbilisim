@extends('layouts.adminlayout')

@section('css')
<style>
    .form-group input,
    select {
        border: 0.5px solid #ccc;
    }

</style>
@endsection
@section('content')
<div class="container">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-5 mt-5">
            <div class="col-4 mb-5">
                <input type="file" id="product_image" class="form-control mb-3" name="image" placeholder="Hizmet Resim">
                <img class="w-100" src="#" id="preview-img" style="max-height:400px; visibility:hidden;" > 
            </div>
            <div class="col-8 ps-5">
                <div class="form-group mb-3">
                    <h5>Kategori</h5>
                    <select class="w-100 form-control" name="category_id" id="category_id"
                        onChange="category(this.value)">
                        @foreach (getCategoryNames() as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <h5>Başlık</h5>
                    <input type="text" name="product_name" class="form-control w-100">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <h5>Adet</h5>
                            <input type="text" name="product_stok" class=" form-control w-100">
                        </div>
                        <div class="form-group mb-3">
                            <h5>Fiyat</h5>
                            <input type="text" name="product_price" class=" form-control w-100">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <h5>Marka</h5>
                            <select name="brand_id" class="form-control w-100">
                                @foreach (getBrands() as $brand)
                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-5 text-center">ÜRÜN ÖZELLİKLERİ BELİRLE</h4>
                <div class="product-options">
                    <div class="row" id="product_options">
                    </div>
                </div>
            </div>
            <div class="form-group mb-3">
                <h5>Açıklama</h5>
                <textarea class=" form-control" name="note" id="note" cols="30" rows="10"></textarea>
            </div>
            <div class="col-12 mb-4">
                <button type="submit" class="btn btn-success w-100">Kaydet</button>
            </div>
        </div>
    </form>
</div>


@endsection

@section('js')
<script>
        function readURL(input) {
            document.getElementById('preview-img').style.visibility="visible";
      

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#preview-img').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
           
        }

    }
    
    $("#product_image").change(function(){
        readURL(this);
    });
    $(document).ready(function () {    
        $("#category_id").trigger('change');
    });





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
            success: function (data) {
                localStorage.setItem("data", JSON.stringify(
                data)); /* GELEN JSON DATAYI JS DILINE ÇEVİRİYORUZ*/

                $("#product_options").html(" "); // HER YENİ KATEGORİDE SIFIRLAMA İŞLEMİ
                data.forEach(variant => {
                    $("#product_options").append(
                        " <div class='col-sm-6 col-12'><div class='input-group mb-3'>" +
                        " <span class='input-group-text' style='min-width: 130px;'>" + variant
                        .value + "</span>" +
                        " <input type='hidden' name='variant_id[]' value=" + variant.id + ">" +
                        " <input type='text' name='variant_name[]' autocomplete='off' class='form-control'></div></div>"
                    );
                });
            }
        });
    }

</script>

@endsection
