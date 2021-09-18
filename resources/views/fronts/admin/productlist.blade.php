@extends('layouts.adminlayout')


@section('css')
    
@endsection


@section('content')
<div class="container">
    <table class="table mt-5">
        <thead class="" style="background-color: rgb(240, 240, 240);">
          <tr>
            <th class="pt-4 pb-4" scope="col">Ürün Resmi</th>
            <th class="pt-4 pb-4"scope="col">Ürün İsmi</th>
            <th class="pt-4 pb-4"scope="col">Categori</th>
            <th class="pt-4 pb-4"scope="col">Fiyat</th>
            <th class="pt-4 pb-4"scope="col">Stok</th>
            <th class="pt-4 pb-4"scope="col">Aktif</th>
            <th class="pt-4 pb-4"scope="col">Actions</th>
          </tr>
        </thead>
        <tbody style="font-size: 13px">
            @foreach ($productInfos as $productInfo)
          
            <tr class="m-0 p-0">
                <form method="POST" id="product-form">
                  @csrf
                <input type="hidden" name="id" value="{{$productInfo->id}}">
                <th scope="row"><img src="{{asset('/images/products/laptop1.jpg')}}" style="with:50px; height:70px" alt=""></th>
                <td><input type="text" class="w-100 mt-3 mb-3" name="product_name" style="height:23px; border:0.5px solid #ccc; outline:none" value="{{ $productInfo->product_name }}"></td>
                  <td>
                    <select name="product_category_id" id=""  class="w-100 mt-3 mb-3" style="border:0.5px solid #ccc;">                      
                      <option selected value="{{$productInfo->category->id}}">{{ $productInfo->category->category_name ?? '' }}</option>
                     @foreach (getCategoryNames() as $category)
                          {{-- SEÇİLİ OLAN KATEGORİYİ TEKRARDAN LİSTELETMİYORUM --}}
                         @if ($productInfo->category->id != $category->id)
                        <option value="{{$category->id}}"> {{$category->category_name}} </option>
                        @endif       
                                         
                     @endforeach
                    </select>
                  </td>
                <td><input type="text" class="w-100 mt-3 mb-3" name="product_selling_price" style="height:23px; border:0.5px solid #ccc; outline:none"value="{{ $productInfo->selling_price }}"></td>
                <td><input type="text" class="w-100 mt-3 mb-3" name="product_stok" style="height:23px; border:0.5px solid #ccc; outline:none"value="{{ $productInfo->stok }}"></td>
                <td> <input class="form-check-input form-check form-switch mt-3 mb-3" type="checkbox" id="flexSwitchCheckChecked" checked></td>
                <td>
                  <input type="submit" class="btn btn-warning p-1" value="Kaydet">
                  <input type="submit" class="btn btn-danger p-1" value="Sil">
                  <button type="submit" class="btn btn-primary p-1" value="Düzenle">                    
                </td>
              </tr>
            </form>
            @endforeach    
        </tbody>
      </table>

      {{ $productInfos->links() }}
    

</div>

@endsection




@section('js')
    
@endsection