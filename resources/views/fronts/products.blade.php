@extends('layouts.productlayout')

@section('css')

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
    <div class="col-md-4">
        <div class="product-box border" style="">
            <div class="row m-0 p-0">
                <div class="col-md-12 m-0 p-0">
                    <img class="w-100" src="{{asset('/images/products/laptop1.jpg')}}" alt="">
                </div>
                <div class="row">
                    <h4 class="text-center" style="color: #233772;">ASUS X555 LAPTOP</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline; "> </i><span class="p-2"
                            style="color:grey;"> Intel Core i5-1021</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 4 GB DDR3 RAM </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 240 GB SSD</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 2GB-MX230 </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 15.6" Ekran</span><br>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-between ms-2">
                        <div>
                            <span style="color:#1DBE11;">Stokta</span>
                        </div>
                        <div>
                            <span style="font-weight: bold;">1500$</span><span style="font-size: 10px;">KDV Dahil</span>
                        </div>
                    </div>
                </div>
                <input type="button" class="btn text-center " value="DETAY GÖR"
                    style="background-color:#233772; color:#FFFFFF; display:block;">
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="product-box border" style="">
            <div class="row m-0 p-0">
                <div class="col-md-12 m-0 p-0">
                    <img class="w-100" src="{{asset('/images/products/laptop1.jpg')}}" alt="">
                </div>
                <div class="row">
                    <h4 class="text-center" style="color: #233772;">ASUS X555 LAPTOP</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline; "> </i><span class="p-2"
                            style="color:grey;"> Intel Core i5-1021</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 4 GB DDR3 RAM </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 240 GB SSD</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 2GB-MX230 </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 15.6" Ekran</span><br>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-between ms-2">
                        <div>
                            <span style="color:#1DBE11;">Stokta</span>
                        </div>
                        <div>
                            <span style="font-weight: bold;">1500$</span><span style="font-size: 10px;">KDV Dahil</span>
                        </div>
                    </div>
                </div>
                <input type="button" class="btn text-center " value="DETAY GÖR"
                    style="background-color:#233772; color:#FFFFFF; display:block;">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="product-box border" style="">
            <div class="row m-0 p-0">
                <div class="col-md-12 m-0 p-0">
                    <img class="w-100" src="{{asset('/images/products/laptop1.jpg')}}" alt="">
                </div>
                <div class="row">
                    <h4 class="text-center" style="color: #233772;">ASUS X555 LAPTOP</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline; "> </i><span class="p-2"
                            style="color:grey;"> Intel Core i5-1021</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 4 GB DDR3 RAM </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 240 GB SSD</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 2GB-MX230 </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 15.6" Ekran</span><br>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-between ms-2">
                        <div>
                            <span style="color:#1DBE11;">Stokta</span>
                        </div>
                        <div>
                            <span style="font-weight: bold;">1500$</span><span style="font-size: 10px;">KDV Dahil</span>
                        </div>
                    </div>
                </div>
                <input type="button" class="btn text-center " value="DETAY GÖR"
                    style="background-color:#233772; color:#FFFFFF; display:block;">
            </div>
        </div>
    </div> 
</div>

<div class="row mt-5">
    <div class="col-md-4">
        <div class="product-box border" style="">
            <div class="row m-0 p-0">
                <div class="col-md-12 m-0 p-0">
                    <img class="w-100" src="{{asset('/images/products/laptop1.jpg')}}" alt="">
                </div>
                <div class="row">
                    <h4 class="text-center" style="color: #233772;">ASUS X555 LAPTOP</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline; "> </i><span class="p-2"
                            style="color:grey;"> Intel Core i5-1021</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 4 GB DDR3 RAM </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 240 GB SSD</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 2GB-MX230 </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 15.6" Ekran</span><br>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-between ms-2">
                        <div>
                            <span style="color:#1DBE11;">Stokta</span>
                        </div>
                        <div>
                            <span style="font-weight: bold;">1500$</span><span style="font-size: 10px;">KDV Dahil</span>
                        </div>
                    </div>
                </div>
                <input type="button" class="btn text-center " value="DETAY GÖR"
                    style="background-color:#233772; color:#FFFFFF; display:block;">
            </div>
        </div>    
    </div>
    <div class="col-md-4">
        <div class="product-box border" style="">
            <div class="row m-0 p-0">
                <div class="col-md-12 m-0 p-0">
                    <img class="w-100" src="{{asset('/images/products/laptop1.jpg')}}" alt="">
                </div>
                <div class="row">
                    <h4 class="text-center" style="color: #233772;">ASUS X555 LAPTOP</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline; "> </i><span class="p-2"
                            style="color:grey;"> Intel Core i5-1021</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 4 GB DDR3 RAM </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 240 GB SSD</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 2GB-MX230 </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 15.6" Ekran</span><br>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-between ms-2">
                        <div>
                            <span style="color:#1DBE11;">Stokta</span>
                        </div>
                        <div>
                            <span style="font-weight: bold;">1500$</span><span style="font-size: 10px;">KDV Dahil</span>
                        </div>
                    </div>
                </div>
                <input type="button" class="btn text-center " value="DETAY GÖR"
                    style="background-color:#233772; color:#FFFFFF; display:block;">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="product-box border" style="">
            <div class="row m-0 p-0">
                <div class="col-md-12 m-0 p-0">
                    <img class="w-100" src="{{asset('/images/products/laptop1.jpg')}}" alt="">
                </div>
                <div class="row">
                    <h4 class="text-center" style="color: #233772;">ASUS X555 LAPTOP</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline; "> </i><span class="p-2"
                            style="color:grey;"> Intel Core i5-1021</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 4 GB DDR3 RAM </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 240 GB SSD</span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 2GB-MX230 </span><br>
                        <i class="bi bi-arrow-right-circle-fill ps-3" style="display: inline;"> </i><span class="p-2"
                            style="color:grey;"> 15.6" Ekran</span><br>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-between ms-2">
                        <div>
                            <span style="color:#1DBE11;">Stokta</span>
                        </div>
                        <div>
                            <span style="font-weight: bold;">1500$</span><span style="font-size: 10px;">KDV Dahil</span>
                        </div>
                    </div>
                </div>
                <input type="button" class="btn text-center " value="DETAY GÖR"
                    style="background-color:#233772; color:#FFFFFF; display:block;">
            </div>
        </div>
    </div> 
</div>

@endsection


@section('js')

@endsection
