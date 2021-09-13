@extends('layouts.adminlayout')

@section('content')



<div class="container">
    
    <div class="row mb-5 mt-5">
        <div class="col-12 mb-5">
            <h2 class="text-center">ÜRÜNDE OLUCAK ÖZELLİKLERİ BELİRLE</h2>
            <form action="">
                          
                <div class="form-group mb-3">
                    <label for="">Katgori</label>
                    <select name="option_id" id="option_id">
                        @foreach (getProductNames() as $product)                    
                          <option value="{{$product->id}}">{{$product->name}}</option>  
                         @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">

                   
                    <select class="form-control" multiple="multiple" id="variants">
                        @foreach (getVariants() as $variant)
                            <option value="{{$variant->id}}">{{$variant->value}}</option>
                        @endforeach
                   
                      </select>
                      
                </div>
                <input type="button" class="btn btn-success" value="Özellik Ekle">
            </form>

            


            
        </div>
    </div>
</div>


@endsection

@section('js')

    
@endsection