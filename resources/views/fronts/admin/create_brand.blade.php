@extends('layouts.adminlayout')

@section('css')

@endsection

@section('content')
<h2 class="text-center m-5">YENİ ÖZELLİK EKLE</h2>
<div class="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col" style="w-100">Marka İsmi</th>
                <th scope="col" style="width:100px;">Sil</th>
            </tr>
        </thead>
        <tbody>
            <form method="post">
                @csrf
                <input type="text" class="w-100 mb-3" name="new_brand" placeholder="Özellik Giriniz">
                <button type="submit" class="btn btn-success float-end mb-3">Yeni Ekle</button>


                @foreach ($brands as $brand)
                <tr id={{$brand->id}}>
                    <th scope="row" style="width:50px;">1</th>
                    <td>{{$brand->brand_name}}</td>
                    <td><a href="" type="submit" class="btn btn-danger" style="width:70px;">Sil</td>
                </tr>
                @endforeach


        </tbody>
    </table>


    <div class="row">
        <div class="col-12 pt-2 pb-2">
            {{ $brands->links() }}
        </div>
    </div>
</div>




@endsection

@section('js')

@endsection
