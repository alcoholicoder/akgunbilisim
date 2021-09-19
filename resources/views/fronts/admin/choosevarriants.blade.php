@extends('layouts.adminlayout')

@section('content')



<div class="container">

    <div class="row mb-5 mt-5">
        <div class="col-12 mb-5">
            <h2 class="text-center">ÜRÜNDE OLUCAK ÖZELLİKLERİ BELİRLE</h2>
            <form method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Katgori</label>
                    <select name="category_id" id="category_id" onChange="getVariantsOfCategory(this.value)">
                        @foreach (getCategoryNames() as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">      
                    <select class=" form-control" name="variants[]" multiple="multiple" id="variants">
                        @foreach (getVariants() as $variant)
                        <option value="{{ $variant->id }}">{{ $variant->value }}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" name="submitbutton" class="btn btn-success" value="Değişiklikleri Kaydet">
            </form>
        </div>
    </div>
</div>


@endsection

@section('js')
<script>
    function getVariantsOfCategory(id) {

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
            url: "/admin/getvariantsofcategory",
            type: "POST",
            dataType: "JSON",
            data: formData,
            success: function (data) {

                localStorage.setItem("data", JSON.stringify(
                    data)); /* GELEN JSON DATAYI JS DILINE ÇEVİRİYORUZ*/

                var allVariantsList = data[0]; // BU BÜTÜN VARİANT LİSTESİNİ TUTUYOR //
                var choosenCategory = data[1]; // SEÇİLEN KATAGORİNİN BİLGİLERİNİ TUTUYOR //
                console.log(choosenCategory);

                // DATABASE E KAYITLI BÜTÜN VARİANTLARIN ID SI //
                for (var i = 0; i < allVariantsList.length; i++) {
                    // debugger;
                    if (i == 0) {
                        $("#variants").html("");
                        $("#variants").select2("destroy");
                        // HER YENİ KATEGORİ SEÇİLDİĞİNDE TABLOYU YIKIP YENİDEN OLUŞTURUYORUM //
                    }
                    var allVariants = {
                        id: allVariantsList[i].id,
                        name: allVariantsList[i].value
                    };

                    if (i < choosenCategory.variants.length) {
                        var val1 = choosenCategory.variants[i].variant.id;
                    }
                    var val2 = allVariantsList[i].id;
                    console.log(val1 + "-" + val2);
                    if (val1 != val2) {
                        $("#variants").append(
                            "<option value=" + allVariantsList[i].id + " id=" + allVariantsList[i].id +
                            " > " + allVariantsList[i].value + "</option>"
                        );
                    } else {
                        $("#variants").append(
                            "<option value=" + allVariantsList[i].id + " id=" + allVariantsList[i].id +
                            " selected> " + allVariantsList[i].value + "</option>"
                        );
                    }

                    if ((i + 1) == allVariantsList.length) {
                        $("#variants").select2();
                    }
                }

            }
        });
    }

</script>


@endsection
