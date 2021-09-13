@extends('layouts.adminlayout')

@section('content')



<div class="container">
    <div class="row mb-5 mt-5">
        <div class="col-12 mb-5">

            <form method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Kategori</label>
                    <select name="option_id" id="option_id" onChange="category(this.value)">
                        @foreach (getCategoryNames() as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="">Ürün Seç</label>
                    <select id="product-list">

                    </select>
                </div>

                <!--
                <div class="form-group mb-3">
                    <label for="">Ürün Adı</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Ürün Fiyatı</label>
                    <input type="text" class="form-control">
                </div>
      

                <div class="form-group mb-3">
                    <label for="">RAM</label>
                    <input type="text" name="option_ids[]" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">İŞLEMCİ</label>
                    <input type="text" name="option_ids[]" class="form-control">
                </div>
         
                !-->


            </form>







        </div>
    </div>
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
            success: function (data) {
                
                localStorage.setItem("data", JSON.stringify(
                data)); /* GELEN JSON DATAYI JS DILINE ÇEVİRİYORUZ*/
                console.log(data);
                $("#product-list").html("");/* HERSEÇİMDE SELECTİN İÇİNİ SIFIRLIYORUM */
              
                for (var i = 0; i < data.length; i++) { /*GELEN KATEGORİNİN İÇİNDEKİ ÜRÜNLERİN İSİMLERİNİ İD'SİNİ ALARAK SELECTİN İÇİNE YAZDIRIYORUM */
                    $("#product-list").append(
                        "<option id="+data[i].id+">" + data[i].name + "</option>"
                    );
                }

            }
        });
    }

</script>

@endsection
